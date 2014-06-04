<?php /* Smarty version Smarty-3.0-RC2, created on 2014-05-21 12:02:09
         compiled from "C:/Apache24/htdocs/yajie_weixin_crm/weixin_crm/templates/question/questionCount.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6646537c2541cc0f98-89053995%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2feec655949e3a9351a08c2c768ead52eb1b7a86' => 
    array (
      0 => 'C:/Apache24/htdocs/yajie_weixin_crm/weixin_crm/templates/question/questionCount.tpl',
      1 => 1397717009,
    ),
  ),
  'nocache_hash' => '6646537c2541cc0f98-89053995',
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


        <title>问卷调差统计</title>
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
                margin-top: 2em;
            }
            .textWidth{
                width:50%;
                margin: 0 auto;
            }
        </style>
    </head>
    <body>

        <div class="bigWheelWarp">
            <div class="titleStyle">问卷调查统计</div>

            <ul class="nav nav-tabs" id="myTab">
                <li class="active"><a href="#probability" data-toggle="tab">问卷调查1</a></li>

            </ul>

            <div class="tab-content">
                <!-- 概率配置模块 -->
                <div class="tab-pane active textWidth" id="probability" >
                    <div class='textStyle form-group'><label  class=' control-label labelWidth' style='text-align: left;'>你的姓名是什么:</label>
                        <label  class='control-label labelWidth'>A：5人&nbsp;&nbsp;B:15人&nbsp;&nbsp;C:8人&nbsp;&nbsp;D:6人</label>
                    </div>
                    <div class='textStyle form-group'><label  class=' control-label labelWidth'  style='text-align: left;'>你的性别是什么:</label>
                        <label  class='control-label labelWidth'>A：10人&nbsp;&nbsp;B:10人&nbsp;&nbsp;C:7人&nbsp;&nbsp;D:6人</label>
                    </div>
                    <div class='textStyle form-group'><label  class=' control-label labelWidth'  style='text-align: left;'>你的兴趣有:</label>
                        <label  class='control-label labelWidth'>A：9人&nbsp;&nbsp;B:14人&nbsp;&nbsp;C:7人&nbsp;&nbsp;D:4人</label>
                    </div>
                    <div class='textStyle form-group'><label  class=' control-label labelWidth'  style='text-align: left;'>你的自我介绍:</label>
                        <label  class='control-label labelWidth'>A：15人&nbsp;&nbsp;B:5人&nbsp;&nbsp;C:8人&nbsp;&nbsp;D:6人</label>
                    </div>
                </div>
            </div>

        </div>
    </body>
</html>