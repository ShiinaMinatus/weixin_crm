<?php

session_start();


$array = array('yajie', 'inhouse', 'jiantang');

if (!empty($_SERVER['PATH_INFO'])) {

    $pathInfo = explode('/', trim($_SERVER['PATH_INFO'], '/'));

    $source = strtolower($pathInfo[0]);

    if (empty($_SESSION['weixin_crm_source'])) {

        if (!empty($pathInfo) && is_array($pathInfo)) {

            $_SESSION['weixin_crm_source'] = $source;
        } else {

            echo '来源不能为空';

            die;
        }
    }



    if (in_array($source, $array)) {



        if ($source != $_SESSION['weixin_crm_source']) {

            session_unset();
        }

        $_SESSION['weixin_crm_source'] = $source;
    }
} else {


    echo '请输入来源';

    die;
}

if (!empty($source) && $source == 'yajie') {

    $_SESSION['weixin_crm_user_id'] = 3;

    $_SESSION['weixin_crm_user_name'] = 'yajie';


    $_SESSION['weixin_user_account'] = 'yajie';
}
?>