<?php

class weixinController {

    public function __construct() {

        header("Content-type:text/html;charset=utf-8");

        $_ENV['smarty']->setDirTemplates('weixin');
    }

    public function weixincustom() {


        $admin = new adminModel($_SESSION['weixin_crm_user_id']);

        $company_id = $admin->vars['compang_id'];

        $weixin = new weixinModel();

        $weixin->initialize('company_id = ' . $company_id);
        
       
        $_ENV['smarty']->assign('id', $company_id);

        $_ENV['smarty']->assign('info', $weixin->vars);

        $_ENV['smarty']->display('weixincustom');
    }

    public function weixinSend() {



        $id = $_REQUEST['company_id'];

        $integral = $_REQUEST['integral'];

        $content = str_replace("\r\n", "\n", $_REQUEST['weixin_content']);


        $weixin = new weixinModel();

        $weixin->initialize('company_id = ' . $id);


        if ($weixin->vars_number > 0) {


            $update['weixin_content'] = $content;

            $update['integral'] = $integral;


            $weixin->update($update);
        } else {

            $data['weixin_content'] = $content;

            $data['company_id'] = $id;

            $data['integral'] = $integral;

            $weixin->insert($data);
        }
        
        $_ENV['smarty']->assign('printMessage','操作成功');
        
        
        $this->weixincustom();
        
        
    }

}

?>
