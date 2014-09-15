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

}

?>
