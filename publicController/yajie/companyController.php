<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of companyController
 *
 * @author Administrator
 */
class companyController {

    public function __construct() {

        header("Content-type:text/html;charset=utf-8");

        $_ENV['smarty']->setDirTemplates('company');
    }

    public function wifiEdit() {

        $companyInfo = new companyInfoModel();
        $companyInfo->initialize();
        $number = $companyInfo->vars_number;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $data["wifiName"] = $_POST['wifiName'];

            $data['wifiPassword'] = $_POST['wifiPassword'];
            if ($number > 0)
                $companyInfo->update($data);
            else
                $companyInfo->insert($data);
            $_SERVER["REQUEST_METHOD"] = "GET";
            $_ENV['smarty']->assign('scuesss', "1");
            $_ENV['smarty']->assign('info', $data);
            $_ENV['smarty']->display('addWifi');
        } else {
            $text = "";
            if ($number > 0) {
                $textCache = $companyInfo->vars;
                //$text = $textCache["wifiText"];
            }
            $_ENV['smarty']->assign('info', $textCache);

            $_ENV['smarty']->display('addWifi');
        }
    }

    public function companyEdit() {

        //  $_ENV['smarty']->assign('registrationNumber', $registrationValue);
        $companyInfo = new companyInfoModel();
        $companyInfo->initialize();
        $number = $companyInfo->vars_number;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $data["companyText"] = $_POST['activity_html'];

            $data['companyTextOriginal'] = $_REQUEST['activity_html_'];

            $data['companyTitle'] = $_REQUEST['activity_title'];

            $data['companyType'] = $_REQUEST['type'];

            if ($number > 0)
                $companyInfo->update($data);
            else {

                $companyInfo->insert($data);
            }

            $_SERVER["REQUEST_METHOD"] = "GET";
            $_ENV['smarty']->assign('scuesss', "1");

            $_ENV['smarty']->assign('text', $data["companyText"]);

            $_ENV['smarty']->assign('info', $data);

            $_ENV['smarty']->display('addcompany');
        } else {
            $text = "";
            if ($number > 0) {
                $textCache = $companyInfo->vars;
                $text = stripslashes($textCache["companyText"]);
            }
            $_ENV['smarty']->assign('text', $text);

            $_ENV['smarty']->assign('info', $textCache);

            $_ENV['smarty']->display('addcompany');
        }
    }

    public function official() {


        if (!empty($_REQUEST['id'])) {

            $officialModel = new officialModel();

            $officialModel->initialize('official_id = ' . $_REQUEST['id']);


            $_ENV['smarty']->assign('info', $officialModel->vars);

            $_ENV['smarty']->display('official');
        }
    }

    public function officialEdit() {


        if (!empty($_REQUEST['id'])) {

            $officialModel = new officialModel();

            $officialModel->initialize('official_id = ' . $_REQUEST['id']);


            $officialModel->vars['official_text'] = $_REQUEST['activity_html'];


            $officialModel->updateVars();


            $_ENV['smarty']->assign('scuesss', "1");


            $_ENV['smarty']->assign('info', $officialModel->vars);

            $_ENV['smarty']->display('official');
        }
    }

    public function storeInfo() {
        $storeInfo = new storeInfoModel();
        $storeInfo->initialize();
        $returnValue = $storeInfo->vars_all;
        $_ENV['smarty']->assign('info', $returnValue);
        $_ENV['smarty']->display('storeInfo');
    }

    public function addStoreInfo() {
        $returnPage = true;
        $errorMessage = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (isset($_GET["checkReturn"])) {
                if (!isset($_POST["stroreName"]) || empty($_POST["stroreName"])) {

                    $returnPage = false;
                    $errorMessage = "门店名称不能为空";
                } else if (!isset($_POST["storePhone"]) || empty($_POST["storePhone"])) {
                    $returnPage = false;
                    $errorMessage = "门店电话不能为空";
                } else if (!isset($_POST["storeAddress"]) || empty($_POST["storeAddress"])) {
                    $returnPage = false;
                    $errorMessage = "门店地址不能为空";
                } else {

                    $officialModel = new storeInfoModel();
                    $data["strore_name"] = $_POST["stroreName"];
                    $data["store_phone"] = $_POST["storePhone"];
                    $data["store_address"] = $_POST["storeAddress"];
                    $data["store_city"] = "1";
                    $insertMessage = $officialModel->insert($data);
                    if ($insertMessage < 1) {
                        $returnPage = false;
                        $errorMessage = "门店未能成功加入，请重试";
                    }
                }
                if (!$returnPage) {
                    $_ENV['smarty']->display('addStoreInfo');
                } else {
                    $this->storeInfo();
                }
            } else {
                $_ENV['smarty']->display('addStoreInfo');
            }
        } else {
            $_ENV['smarty']->display('addStoreInfo');
        }
    }

    public function delStoreInfo() {
        if (isset($_GET["shopId"])) {
            $storeInfo = new storeInfoModel();
            $storeInfo->initialize("id='" . $_GET["shopId"] . "'");
            if ($storeInfo->vars_number > 0) {
                $storeInfo->remove();
                $this->storeInfo();
            }
        }
    }

    public function cardInfoConfig() {
        $cardExplain = new cardExplainModel();
        $cardExplain->initialize();
        $errorText = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["cardExplain"]) && isset($_POST["stroreName"])) {
                $data["shop_name"] = $_POST["stroreName"];
                $data["card_explain"] = $_POST["cardExplain"];
                $cardExplain->update($data);
                $errorText = "成功修改会员卡说明";
            } else {
                $errorText = "发生了一些错误请重试";
            }
        }
        $cardExplain->initialize();
        $returnVal = $cardExplain->vars;
        $_ENV['smarty']->assign('info', $returnVal);
        $_ENV['smarty']->assign('printMessage', $errorText);
        $_ENV['smarty']->display('cardInfoConfig');
    }

    public function phoneEdit() {
        $companyInfo = new companyInfoModel();
        $companyInfo->initialize();
        $number = $companyInfo->vars_number;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $data["companyPhone"] = $_POST['phoneInfo'];
            if ($number > 0)
                $companyInfo->update($data);
            else
                $companyInfo->insert($data);
            $_SERVER["REQUEST_METHOD"] = "GET";
            $_ENV['smarty']->assign('scuesss', "1");
            $_ENV['smarty']->assign('info', $data);
            $_ENV['smarty']->display('phoneEdit');
        } else {
            $text = "";
            if ($number > 0) {
                $textCache = $companyInfo->vars;
                //$text = $textCache["wifiText"];
            }
            $_ENV['smarty']->assign('info', $textCache);

            $_ENV['smarty']->display('phoneEdit');
        }
    }

    public function groupMessage() {
        $groupMessage = new groupMessageModel();
        $groupMessage->addOrderBy("create_time desc");
        $groupMessage->initialize("message_type = '1'");
        $titleMessage = $groupMessage->vars_all;
        $_ENV['smarty']->assign('info', $titleMessage);
        $_ENV['smarty']->display('groupMessageList');
    }

    public function addGroupMessageList() {
        //  $_ENV['smarty']->display('groupMessageList');


        $session_id = session_id();

        $_ENV['smarty']->assign('session_id', $session_id);
        $_ENV['smarty']->display('addGroupMessageList');
    }

    public function saveGropuMessageTitle() {
        $errorMessage = '';
        $groupMessage = new groupMessageModel();
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $data['message_title'] = $_POST['title'];
            $data['message_text'] = $_POST['activity_html'];
            $data['message_type'] = 1; //为第一条
            $data['MEDIA_ID'] = $_POST['meida_id'];
            $data['message_pic'] = $_POST['uploadUrl'];
            $data['create_time'] = time();
            $returnId = $groupMessage->insert($data);
            $dataId['message_id'] = $returnId;
            $groupMessage->initialize("id = '" . $returnId . "'");
            $groupMessage->update($dataId);
            $errorMessage = "添加群发消息组成功";
            $_ENV['smarty']->assign('printMessage', $errorMessage);
            $this->groupMessage();
        }
    }

    public function singleMessageList() {
        if (isset($_GET["messageId"])) {
            $groupMessage = new groupMessageModel();
            $groupMessage->initialize("message_id = '" . $_GET["messageId"] . "'");
            $listMessage = $groupMessage->vars_all;
            $groupMessage->initialize("message_id = '" . $_GET["messageId"] . "' and message_type='1'");
            $Message = $groupMessage->vars_all;
            $MessageTitle = $Message[0]['message_title'];
            $_ENV['smarty']->assign('info', $listMessage);
            $_ENV['smarty']->assign('messageId', $_GET["messageId"]);
            $_ENV['smarty']->assign('title', $MessageTitle);
            $_ENV['smarty']->display('singleMessageList');
        }
    }

    public function addSingleMessageList() {
        $errorMessage = " ";

        $session_id = session_id();

        $_ENV['smarty']->assign('session_id', $session_id);


        if (isset($_GET["messageId"])) {
            $groupMessage = new groupMessageModel();
            $groupMessage->initialize("message_id = '" . $_GET["messageId"] . "'");
            $listNumber = $groupMessage->vars_number;
            $_ENV['smarty']->assign('messageId', $_GET["messageId"]);
            if ($listNumber >= 8) {
                $errorMessage = "群发图文消息最多只能同时发送8条";
                $_ENV['smarty']->assign('printMessage', $errorMessage);
                $groupMessage = new groupMessageModel();
                $groupMessage->initialize("message_id = '" . $_GET["messageId"] . "'");
                $listMessage = $groupMessage->vars_all;
                $groupMessage->initialize("message_id = '" . $_GET["messageId"] . "' and message_type='1'");
                $Message = $groupMessage->vars_all;
                $MessageTitle = $Message[0]['message_title'];
                $_ENV['smarty']->assign('info', $listMessage);
                $_ENV['smarty']->assign('messageId', $_GET["messageId"]);
                $_ENV['smarty']->assign('title', $MessageTitle);
                $_ENV['smarty']->display('singleMessageList');
            } else {

                $_ENV['smarty']->display('addSingleMessageList');
            }
        } else {
            $_ENV['smarty']->display('singleMessageList');
        }
    }

    public function saveSingleMessageList() {
        $errorMessage = '';
        $groupMessage = new groupMessageModel();
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_GET["messageId"])) {
                $data['message_title'] = $_POST['title'];
                $data['message_text'] = $_POST['activity_html'];
                $data['message_type'] = 2; //为子条目
                $data['create_time'] = time();

                $data['MEDIA_ID'] = $_POST['meida_id'];

                $data['message_pic'] = $_POST['uploadUrl'];

                $data['message_id'] = $_GET["messageId"];
                $returnId = $groupMessage->insert($data);
                $errorMessage = '添加消息成功！';
            } else {
                $errorMessage = '参数获取发生了错误，请重试';
            }
            $_ENV['smarty']->assign('printMessage', $errorMessage);
            $this->singleMessageList();
        } else {
            $this->singleMessageList();
        }
    }

    public function delMessageGroup() {
        if (isset($_GET["messageId"])) {
            $groupMessage = new groupMessageModel();
            $groupMessage->initialize("id='" . $_GET["messageId"] . "' or message_id='" . $_GET["messageId"] . "'");
            if ($groupMessage->vars_number > 0) {
                $groupMessage->remove();
                $this->groupMessage();
            }
        }
    }

    public function delMessageSingleList() {
        if (isset($_GET["messageId"]) && isset($_GET["listId"])) {
            $groupMessage = new groupMessageModel();
            $groupMessage->initialize("id='" . $_GET["listId"] . "'");
            if ($groupMessage->vars_number > 0) {
                $groupMessage->remove();
                $groupMessage = new groupMessageModel();
                $groupMessage->initialize("message_id = '" . $_GET["messageId"] . "'");
                $listMessage = $groupMessage->vars_all;
                $groupMessage->initialize("message_id = '" . $_GET["messageId"] . "' and message_type='1'");
                $Message = $groupMessage->vars_all;
                $MessageTitle = $Message[0]['message_title'];
                $_ENV['smarty']->assign('info', $listMessage);
                $_ENV['smarty']->assign('messageId', $_GET["messageId"]);
                $_ENV['smarty']->assign('title', $MessageTitle);
                $_ENV['smarty']->display('singleMessageList');
            }
        }
    }

    public function sendGroupMessage() {
        if (isset($_GET['messageId'])) {
            $groupMessage = new groupMessageModel();
            $groupMessage->initialize("message_id='" . $_GET["messageId"] . "'");
            $messageArray = $groupMessage->vars_all;

            $postMessageArray = array();

            foreach ($messageArray as $messageItem) {

                $messageItemArray = array();

                $messageItemarray['thumb_media_id'] = urlencode($messageItem['MEDIA_ID']);

                $messageItemarray['title'] =  urlencode($messageItem['message_title']);

                $messageItemarray['content'] = urlencode($messageItem['message_title']);

                $messageItemarray['author'] = urlencode('');

                $messageItemarray['content_source_url'] = urlencode(WebSiteUrl.'?g='.$_SESSION['weixin_crm_source'].'&a=company&v=groups&id='.$messageItem['id']);

                $messageItemarray['digest'] = urlencode('aaaaa');

                $postMessageArray[] = $messageItemarray;
            }

            /**
             *  获取
             */
            $token = getAccessToken();

            $result = group_send_image($token, $postMessageArray);

            $result_array = json_decode($result, true);

            if (!empty($result_array) && $result_array['media_id']) {

                $id = $result_array['media_id'];


                /**
                 * 获取组的内容
                 */
                $groupResult = getGroup($token);

                $groupResult_ = $groupResult['groups'];


                $groupId = array();
                
                // $array = array('ocpOotwOr44N8_zpyG7LttDgZscw');
                
                // $a = mass_send_group_user($array, $token, $id);


                 $a =  mass_send_group(2, $token, $id);
                
                var_dump($a);



               // foreach ($groupResult_ as $k => $v) {

               //     if ($v['count'] > 0) {

               //         array_push($groupId, $v['id']);
               //     }
               // }

               // if (count($groupId) > 0) {

               //     foreach ($groupId as $v) {

               //        $a =  mass_send_group($v, $token, $id);
               //     }
               // }
            }

           
        }
    }

}

?>
