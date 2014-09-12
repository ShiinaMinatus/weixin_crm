<?php /* Smarty version Smarty-3.0-RC2, created on 2014-09-11 09:57:25
         compiled from "/web/www/weixin_crm//templates/yajie/company/addWifi.tpl" */ ?>
<?php /*%%SmartyHeaderCode:536605642541101858926d9-07743189%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd97a19a3d0e7cf1b568dfc9d9a0d9e21751e0665' => 
    array (
      0 => '/web/www/weixin_crm//templates/yajie/company/addWifi.tpl',
      1 => 1409822525,
    ),
  ),
  'nocache_hash' => '536605642541101858926d9-07743189',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title></title>


        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/simditor/styles/font-awesome.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/simditor/styles/simditor.css" />

        <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/simditor/scripts/js/simditor-all.js"></script>

        <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css"> 

            <link href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/css/crm_table_style_<?php echo $_smarty_tpl->getVariable('source')->value;?>
.css" rel="stylesheet">

                <link href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/css/bootstrap-datetimepicker.css" rel="stylesheet" media="screen">

                    <script>

                        $(function() {



                        })

                    </script>

                    <style>
                        .labelWidth{
                            width: auto !important;
                        }
                        .inputWidth{
                            width: 150px;
                        }
                        .userMangerTitle{
                            color: rgb(91,91,91);
                            font-size: 2.5em;
                            margin-top: 15px;
                            text-align: center;
                        }
                        .errorMessage{
                            width: 300px;
                            margin: 0 auto;
                            display: none;
                        }
                    </style>


                    </head>
                    <body>
                     
                        

                        <?php if ($_smarty_tpl->getVariable('scuesss')->value=="1"){?>
                            <div id="Message" class="alert alert-danger errorMessage" style="display: block">恭喜你添加成功</div>
                        <?php }?>
                        <div id="errorMessage" class="alert alert-danger errorMessage">恭喜你添加成功</div>
                        <div style="margin-left:15px;margin-top:15px;">
                            <div style="width: 1000px; margin: 0 auto;">
                                <form class="form-horizontal" action="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=company&functionname=wifiEdit" method="post">
                                    <div class="form-group"> 
                                        <label class="col-sm-2 control-label labelWidth">wifi账号</label>

                                        <div class="col-sm-2" style='width:800px;'>
                                            <?php if ($_smarty_tpl->getVariable('info')->value!=''){?>
                                                <input type='text' id="wifiName" name="wifiName" style="" value='<?php echo $_smarty_tpl->getVariable('info')->value['wifiName'];?>
'>
                                            <?php }else{ ?>
                                                <input  type='text' id="wifiName" name="wifiName" style="">
                                            <?php }?>
                                        </div>
                                       
                                    </div>

                                    <div class="form-group">


                                   <label class="col-sm-2 control-label labelWidth">wifi密码</label>

                                        <div class="col-sm-2" style='width:800px;'>
                                            <?php if ($_smarty_tpl->getVariable('info')->value!=''){?>
                                                <input type='text' id="wifiPassword" name="wifiPassword" style="" value='<?php echo $_smarty_tpl->getVariable('info')->value['wifiPassword'];?>
'>
                                            <?php }else{ ?>
                                                <input  type='text' id="wifiPassword" name="wifiPassword" style="">
                                            <?php }?>
                                        </div>

                                    </div>

                                    <p style=" margin-left: 710px;"><button id="addButton" class="btn btn-info">确认添加</button></p>
                                </form>
                            </div>
                        </div>
                    </body>
                    </html>



                    <script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/js/rexexTest.js"></script>

                    <script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/js/bootstrap-datetimepicker.js"></script>

                    <script>
                       
                    </script>
