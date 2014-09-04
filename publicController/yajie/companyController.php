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


    public function wifiEdit(){

         $companyInfo = new companyInfoModel();
        $companyInfo->initialize();
        $number = $companyInfo->vars_number;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $data["wifiText"] = $_POST['activity_html'];
            if ($number > 0)
                $companyInfo->update($data);
            else
                $companyInfo->insert($data);
            $_SERVER["REQUEST_METHOD"] = "GET";
            $_ENV['smarty']->assign('scuesss', "1");
            $_ENV['smarty']->assign('text',$data["wifiText"]);
            $_ENV['smarty']->display('addWifi');
        } else {
            $text = "";
            if ($number > 0) {
                $textCache = $companyInfo->vars;
                $text = $textCache["wifiText"];
            }
            $_ENV['smarty']->assign('text', $text);

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
            if ($number > 0)
                $companyInfo->update($data);
            else
                $companyInfo->insert($data);
            $_SERVER["REQUEST_METHOD"] = "GET";
            $_ENV['smarty']->assign('scuesss', "1");
            $_ENV['smarty']->assign('text',$data["companyText"]);
            $_ENV['smarty']->display('addcompany');
        } else {
            $text = "";
            if ($number > 0) {
                $textCache = $companyInfo->vars;
                $text = $textCache["companyText"];
            }
            $_ENV['smarty']->assign('text', $text);

            $_ENV['smarty']->display('addcompany');
        }
    }

    public function official(){


        if(!empty($_REQUEST['id'])){

            $officialModel = new officialModel();

            $officialModel->initialize('official_id = '.$_REQUEST['id']);


            $_ENV['smarty']->assign('info', $officialModel->vars);

            $_ENV['smarty']->display('official');


        }

    }


    public function officialEdit(){


          if(!empty($_REQUEST['id'])){

            $officialModel = new officialModel();

            $officialModel->initialize('official_id = '.$_REQUEST['id']);


            $officialModel->vars['official_text'] = $_REQUEST['activity_html'];


            $officialModel->updateVars();


            $_ENV['smarty']->assign('scuesss', "1");


            $_ENV['smarty']->assign('info', $officialModel->vars);

            $_ENV['smarty']->display('official');


        }
    }

}

?>
