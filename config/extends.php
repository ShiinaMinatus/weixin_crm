<?php

function setDatebase($database) {

    $_ENV['DBNAME'] = $database['DBNAME'];

    $_ENV['DBHOST'] = $database['DBHOST'];

    $_ENV['USER'] = $database['USER'];

    $_ENV['PASSWORD'] = $database['PASSWORD'];
}

function getWeixinToken($appid, $secret) {


    $url = 'https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&' . 'appid=' . $appid . '&secret=' . $secret;

    $token_info = transferData($url, 'get');



    $token = json_decode($token_info, true);

    $company = new companyModel();

    $company->addCondition('appid like "' . $appid . '"', 1);

    $company->initialize();

    if ($company->vars_number > 0) {

        $id = $company->vars['company_id'];

        $companyToken = new companyTokenModel($id);

        if ($companyToken->vars_number > 0) {

            $companyToken->vars['token'] = $token['access_token'];

            $companyToken->vars['application_time'] = time();

            $companyToken->updateVars();
        } else {

            $insert['company_id'] = $id;

            $insert['token'] = $token['access_token'];

            $insert['expires_in'] = 7200;

            $insert['application_time'] = time();

            $companyToken->insert($insert);
        }
    }

    return $token['access_token'];
}

function sendCustom($open_id, $token, $content) {

    $url = 'https://api.weixin.qq.com/cgi-bin/message/custom/send?access_token=' . $token;

    $params = array("");

    $params["touser"] = trim($open_id);

    $params["msgtype"] = "text";

    $params["text"]["content"] = urlencode($content);


    $ret = json_encode($params);

    $jsonArray = urldecode($ret);


    $result = transferData($url, 'post', $jsonArray);

    return json_decode($result, true);
}

/**
 * 传递数据 
 *  $url  为接口调用的url 地址  
 *  $method  为传递的方式  POST  GER
 *  $data   当method 为post时  传值为array
 */
function transferData($url, $method, $data = '') {

    switch ($method) {

        case 'post':

            $output = curlPost($url, $data);

            break;

        case 'get':

            $output = curlGet($url);

            break;
    }

    return $output;
}

function curlPost($url, $post = null, $options = array()) {

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    $result = curl_exec($ch);
    curl_close($ch);

    return $result;
}

function curlGet($url) {


    $defaults = array(
        CURLOPT_URL => $url,
        CURLOPT_HEADER => 0,
        CURLOPT_RETURNTRANSFER => TRUE,
        CURLOPT_TIMEOUT => 4,
        CURLOPT_FOLLOWLOCATION => 1
    );

    $ch = curl_init();

    curl_setopt_array($ch, $defaults);

    if (!$result = curl_exec($ch)) {
        trigger_error(curl_error($ch));
    }

    curl_close($ch);

    return $result;
}

function getWeek($unixTime = '') {


    $unixTime = is_numeric($unixTime) ? $unixTime : time();


    $weekarray = array('日', '一', '二', '三', '四', '五', '六');


    return '星期' . $weekarray[date('w', $unixTime)];
}

function sendWeixinCustom($money, $toopen_id, $user_id) {




    $admin = new adminModel($_SESSION['weixin_crm_user_id']);

    $company_id = $admin->vars['compang_id'];




    $weixin = new weixinModel();

    $weixin->initialize('company_id = ' . $company_id);



    if ($weixin->vars_number > 0) {

        $integral = $weixin->vars['integral'];

        $content = $weixin->vars['weixin_content'];

        $getIntegral = $integral * $money;//添加积分为比例
        /**
         * 添加用户积分 给当前用户
         */
        $userController = new userController();

        $userController->addPointer($user_id, $getIntegral);


        /**
         * 将{$money}替换成金额  并发送到微信客户端
         */
        $content_ = str_replace('<money>', $money, $content);

        $company = new companyModel($admin->vars['compang_id']);



        if ($company->vars_number > 0) {

            $appid = $company->vars['appid'];

            $secret = $company->vars['app_secret'];

            $companyToken = new companyTokenModel();

            $token = $companyToken->getToken($admin->vars['compang_id'], $appid, $secret);



            $result = sendCustom($toopen_id, $token, $content_);


            if ($result['errcode'] == 45015) {

                $state = 2;

                $msg = '用户未和公众平台 发送消息 ,无法发送给用户 ';
            } elseif ($result['errorcode'] == 0) {

                $state = 1;

                $msg = '发送成功';
            } else {

                $state = 0;
            }
        }
    }
}

/**
 *   上传图片素材到微信公众平台 获取另外id   微信公众平台
 */
function https_upload_pic_request($filePath, $access_token) {


    //上传图片
    $type = "thumb";

    $filedata = array("media" => "@" . $filePath);

    $url = "http://file.api.weixin.qq.com/cgi-bin/media/upload?access_token=$access_token&type=$type";

    return https_request($url, $filedata);
}

function https_request($url, $data = null) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        return curl_error($ch);
    }
    curl_close($ch);
    return $result;
}

/**
 * 高级群发接口 将图片的meida id 发送到微信公众平台   $array 为后台用户所填写的内容
 * $array
 * [
 *   'thumb_media_id' => 图文消息缩略图的media_id
 *   'author' => 图文消息的作者  可以不传递
 *   'title' => '图文消息的标题'
 *   'content_source_url'=>'在图文消息页面点击“阅读原文”后的页面'  可以不传递
 *    'content' => '图文消息页面的内容，支持HTML标签'
 *    'digest'=>'图文消息的描述'  可以不传递
 * ] 
 *
 */
function group_send_image($ACCESS_TOKEN, $array) {

    $url = "https://api.weixin.qq.com/cgi-bin/media/uploadnews?access_token=$ACCESS_TOKEN";

    $result = array('articles' => $array);




    $jsondata = urldecode(json_encode($result));




    return https_request($url, $jsondata);
}

/**
 * 根据群组来进行群发  id 为 调用群发接口的 上传素材接口 返回的id
 */
function mass_send_group($id, $token, $meida_id) {

    $url = "https://api.weixin.qq.com/cgi-bin/message/mass/sendall?access_token=$token";

    $data['filter'] = array('group_id' => urlencode($id));

    $data['mpnews'] = array('media_id' => urlencode($meida_id));

    $data['msgtype'] = urlencode('mpnews');

    $jsonData = urldecode(json_encode($data));

    return curlPost($url, $jsonData);
}

function mass_send_group_user($array, $token, $meida_id) {

    $url = "https://api.weixin.qq.com/cgi-bin/message/mass/send?access_token=$token";

    $data['touser'] = $array;

    $data['mpnews'] = array('media_id' => $meida_id);

    $data['msgtype'] = 'mpnews';

    var_dump($data);

    die;


    $jsonData = json_encode($data);

    return curlPost($url, $jsonData);
}

/**
 *  获取access token   微信公众平台
 */
function getAccessToken() {

    $admin = new adminModel($_SESSION['weixin_crm_user_id']);

    $company = new companyModel($admin->vars['compang_id']);

    if ($company->vars_number > 0) {

        $appid = $company->vars['appid'];

        $secret = $company->vars['app_secret'];

        $companyToken = new companyTokenModel();

        $token = $companyToken->getToken($admin->vars['compang_id'], $appid, $secret);

        return $token;
    }
}

/**
 * 获取所有的分组  微信公众平台
 */
function getGroup($ACCESS_TOKEN) {


    $url = "https://api.weixin.qq.com/cgi-bin/groups/get?access_token=$ACCESS_TOKEN";


    $result = json_decode(curlGet($url), true);

    return $result;
}

function uploadMedia($url) {
    
}

?>