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
function transferData($url, $method, $data) {

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

function sendWeixinCustom($money, $toopen_id,$user_id) {

    $admin = new adminModel($_SESSION['weixin_crm_user_id']);

    $company_id = $admin->vars['compang_id'];

    $weixin = new weixinModel();

    $weixin->initialize('company_id = ' . $company_id);

    if ($weixin->vars_number > 0) {

        $integral = $weixin->vars['integral'];

        $content = $weixin->vars['weixin_content'];
        
        
        /**
         * 添加用户积分 给当前用户
         */
        
        $userController = new userController();
        
        $userController->addPointer($user_id, $integral);
        

        /**
         * 将{$money}替换成金额  并发送到微信客户端
         */
        $content_ = str_replace('$money', $money, $content);

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

?>