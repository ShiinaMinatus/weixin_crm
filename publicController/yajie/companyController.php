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

}

?>
