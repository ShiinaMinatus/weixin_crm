<?php /* Smarty version Smarty-3.0-RC2, created on 2014-07-02 15:12:14
         compiled from "/web/www/weixin_crm//templates/yajie/question/questionCount.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6850521053b3b0ce35b023-68413369%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53bfa4b31ac1fedffed5215b1404ec90fefcd211' => 
    array (
      0 => '/web/www/weixin_crm//templates/yajie/question/questionCount.tpl',
      1 => 1401854721,
    ),
  ),
  'nocache_hash' => '6850521053b3b0ce35b023-68413369',
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
                text-align: left;
                margin-top: 2em;
                padding-left: 8em;
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
                    <?php  $_smarty_tpl->tpl_vars['questionItem'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('questionValue')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['questionItem']->key => $_smarty_tpl->tpl_vars['questionItem']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['questionItem']->key;
?>
                    <div class='textStyle form-group'><label  class=' control-label labelWidth' style='text-align: left;'><?php echo $_smarty_tpl->tpl_vars['questionItem']->value['question_title'];?>
</label>
                        <label  class='control-label labelWidth'>A：<?php echo $_smarty_tpl->getVariable('record')->value[$_smarty_tpl->getVariable('k')->value]['question_1'];?>
人&nbsp;&nbsp;B:<?php echo $_smarty_tpl->getVariable('record')->value[$_smarty_tpl->getVariable('k')->value]['question_2'];?>
人&nbsp;&nbsp;C:<?php echo $_smarty_tpl->getVariable('record')->value[$_smarty_tpl->getVariable('k')->value]['question_3'];?>
人</label>
                    </div>
                    <?php }} ?>
                    
                </div>
            </div>

        </div>
    </body>
</html>