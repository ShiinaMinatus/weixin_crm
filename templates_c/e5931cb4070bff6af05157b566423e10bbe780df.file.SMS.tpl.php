<?php /* Smarty version Smarty-3.0-RC2, created on 2014-05-14 18:08:57
         compiled from "C:/Apache24/htdocs/yajie_weixin_crm/weixin_crm/templates/SMS/SMS.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1048537340b9c9d476-49727572%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5931cb4070bff6af05157b566423e10bbe780df' => 
    array (
      0 => 'C:/Apache24/htdocs/yajie_weixin_crm/weixin_crm/templates/SMS/SMS.tpl',
      1 => 1397717009,
    ),
  ),
  'nocache_hash' => '1048537340b9c9d476-49727572',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html> 
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta content="initial-scale=1.0; maximum-scale=4.0; user-scalable=no;" name="viewport">
        <meta name="viewport" content="width=device-width,user-scalable=yes" />


        <!-- 最新 Bootstrap 核心 CSS 文件 -->
        <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">

        <!-- 可选的Bootstrap主题文件（一般不用引入） -->
        <!-- <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap-theme.min.css"> -->

        <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
        <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>

        <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
        <script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>


        <title>短信模块</title>
        <style>
            body{
                Font-size=62.5%;
            }
            .bigWheelWarp{
                width: 100%;
            }
            .titleStyle{
                color: rgb(91,91,91);
                font-size: 2.5em;
                text-align: center;
                height: 3em;
                line-height: 3em;
            }
            .textStyle{
                text-align: center;
                margin-top: 8em;
            }
        </style>
    </head>
    <body>

        <div class="bigWheelWarp">
            <div class="titleStyle">客服短信</div>

            <ul class="nav nav-tabs" id="myTab">
                <li class="active"><a href="#probability" data-toggle="tab">短信配置</a></li>

            </ul>

            <div class="tab-content">
                <!-- 概率配置模块 -->
                <div class="tab-pane active" id="probability" >
<!--                    <div class='textStyle form-group'><label  class=' control-label labelWidth'>今日签到的总人数为：</label>
                        <label  class='control-label labelWidth'><?php echo $_smarty_tpl->getVariable('registrationNumber')->value;?>
人</label>
                    </div>
                     -->

                </div>
            </div>

        </div>
    </body>
</html>