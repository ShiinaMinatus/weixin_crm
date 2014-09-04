<?php /* Smarty version Smarty-3.0-RC2, created on 2014-07-15 16:59:57
         compiled from "/web/www/weixin_crm//templates/yajie/company/addcompany.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28291254753c4ed8dc48bd2-13406206%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'adbaca0286f4871400e3a7ac9286555c312a64ba' => 
    array (
      0 => '/web/www/weixin_crm//templates/yajie/company/addcompany.tpl',
      1 => 1405414772,
    ),
  ),
  'nocache_hash' => '28291254753c4ed8dc48bd2-13406206',
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
/pageredirst.php?action=company&functionname=companyEdit" method="post">
                                    <div class="form-group"> 
                                        <label class="col-sm-2 control-label labelWidth">公司简介</label>

                                        <div class="col-sm-2" style='width:800px;height:auto;min-height:300px'>
                                            <?php if ($_smarty_tpl->getVariable('text')->value!=''){?>
                                                <textarea id="activity_html" name="activity_html" style=""><?php echo $_smarty_tpl->getVariable('text')->value;?>
</textarea>
                                            <?php }else{ ?>
                                                <textarea id="activity_html" name="activity_html" style=""></textarea>
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
                        editor = new Simditor({
                            textarea: $('#activity_html'),

                             upload: true,
                            pasteImage: true,
                            toolbar: [
                        'title',
                        'bold',
                        'italic',
                        'underline',
                        'strikethrough',
                        'ol',
                        'ul',
                        'blockquote',
                        'code',
                        'table',
                        'link',
                        'image',
                        'hr',
                        'indent',
                        'outdent',
                    ],
                        });
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
                            $("#Message").hide();
                            $("#errorMessage").html();

                            var errorMessage = "";

                            var alertFlag = false;
                            editor.sync();

                            html = document.getElementById('activity_html').value; // 原生API

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
