<?php /* Smarty version Smarty-3.0-RC2, created on 2014-09-17 17:18:13
         compiled from "/web/www/weixin_crm//templates/yajie/activty/addactivty.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1076293312541951d5276742-51346665%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e527b00a00ed22a287de5760827fef9e6967a243' => 
    array (
      0 => '/web/www/weixin_crm//templates/yajie/activty/addactivty.tpl',
      1 => 1410945486,
    ),
  ),
  'nocache_hash' => '1076293312541951d5276742-51346665',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<html >
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

                <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/kindeditor/themes/example1/example1.css" />

    <script charset="utf-8" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/kindeditor/kindeditor.js"></script>


        <script charset="utf-8" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/kindeditor/lang/zh_CN.js"></script> 
        <script>
            var editor;
            KindEditor.ready(function(K) {
                editor = K.create('#activity_html', {
                        themeType : 'example1',
                        items:[

                            'justifyleft','justifycenter','justifyright','indent','outdent'

                            ,'fontsize','forecolor','bold','italic','link','unlink','image','source'
         
                        ]
                });
            });
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
                        <div class="navBarStyle">
                            当前位置：任务管理 > 添加活动
                        </div>
                        <div id="errorMessage" class="alert alert-danger errorMessage"></div>
                        <div style="margin-left:15px;margin-top:15px;">
                            <div style="width: 1000px; margin: 0 auto;">
                                <form class="form-horizontal" action="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=activty&functionname=activtyAdd" method="post">
                                    <div class="form-group"> 
                                        <label  class="col-sm-2 control-label labelWidth">活动名称:</label>
                                        <div class="col-sm-2">
                                            <input class="form-control inputWidth" type="text" value="" name="activity_name" id="activity_name">
                                        </div>
                                    </div> 
                                    <!--     <div class="form-group"> 
                                            <label for="inputEmail3" class="col-sm-2 control-label labelWidth">活动开始时间:</label>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control inputWidth" value="" name="  activity_begin_time" id="activity_begin_time">
                                            </div>
                                        </div>  -->
                                    <div class="form-group"> 
                                        <label  class="col-sm-2 control-label labelWidth">结束时间:</label>
                                        <div class="col-sm-2">

                                            <input class="form-control inputWidth " size="16" type="text" value="" name='activity_end_time' id='activity_end_time' data-link-format="yyyy-mm-dd"  data-date="" data-date-format="yyyy-mm-dd "  readonly>

                                        </div>
                                    </div>
                                    <div class="form-group"> 
                                        <label class="col-sm-2 control-label labelWidth">活动内容</label>

                                        <div class="col-sm-2" style='width:800px;height:auto;min-height:300px'>

                                            <textarea id="activity_html" name="activity_html" style="height:800px;"></textarea>

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

                        $('#activity_end_time').datetimepicker({
                            language: 'fr',
                            weekStart: 1,
                            todayBtn: 1,
                            autoclose: 1,
                            todayHighlight: 1,
                            startView: 2,
                            minView: 2,
                            forceParse: 0
                        });

                        $("#addButton").click(function() {
                            $("#errorMessage").hide();

                            $("#errorMessage").html();

                            var errorMessage = "";

                            var alertFlag = false;


                            if ($("#activity_name").val() == "") {
                                errorMessage += "活动名称不能为空 <br>";

                                alertFlag = true;
                            }

                            if ($("#activity_end_time").val() == "") {
                                errorMessage += "活动结束时间不能为空 <br>";

                                alertFlag = true;
                            }

                            if (html == "") {
                                errorMessage += "活动内容不能为空 <br>";

                                alertFlag = true;
                            }

                            if (alertFlag) {

                                $("#errorMessage").show();

                                $("#errorMessage").html(errorMessage);

                                return false;
                            }


                        });
                    </script>
