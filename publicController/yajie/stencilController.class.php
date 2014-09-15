<?php

/*
 * 自定义模版
 */

class stencilController {

    public function __construct() {

        header("Content-type:text/html;charset=utf-8");

        $_ENV['smarty']->setDirTemplates('stencil');
    }

    public function init() {




        $_ENV['smarty']->display('init');
    }


    public function visualLayout(){


    	$_ENV['smarty']->display('visual_layout');

    }

}

?>