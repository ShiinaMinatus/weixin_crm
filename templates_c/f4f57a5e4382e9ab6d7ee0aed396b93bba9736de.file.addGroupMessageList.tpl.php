<?php /* Smarty version Smarty-3.0-RC2, created on 2014-09-17 17:07:08
         compiled from "/web/www/weixin_crm//templates/yajie/company/addGroupMessageList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:90101626054194f3c2c0a69-90761440%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4f57a5e4382e9ab6d7ee0aed396b93bba9736de' => 
    array (
      0 => '/web/www/weixin_crm//templates/yajie/company/addGroupMessageList.tpl',
      1 => 1410919849,
    ),
  ),
  'nocache_hash' => '90101626054194f3c2c0a69-90761440',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title></title>
        <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js" type="text/javascript">
        </script>
        <link href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/css/minimal/green.css" rel="stylesheet" type="text/css" ></link>
        <script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/js/icheck.min.js" type="text/javascript">
        </script>
        <script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js" type="text/javascript">
        </script>
        <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css" type="text/css"></link>

        <link href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/css/crm_table_style_<?php echo $_smarty_tpl->getVariable('source')->value;?>
.css" rel="stylesheet"></link>
        <script type="text/javascript">

            $(document).ready(function() {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_minimal-green',
                    radioClass: 'iradio_minimal-green'
                });
            });

        </script>




        <style>
            .frm_label {
                width: 5em;
                margin-top: 0.3em;
                margin-right: 1em;
                font-size: 14px;
            }
            .appmsg_edit_item .frm_input_box {
                display: block;
                width: auto;
                height: auto;
                min-height: 30px;
                border-color: #E7E7EB;}
            .frm_input_box {
                display: inline-block;
                position: relative;
                height: 30px;
                line-height: 30px;
                vertical-align: middle;
                width: 278px;
                font-size: 14px;
                padding: 0px 10px;
                border: 1px solid #E7E7EB;
                box-shadow: none;
                border-radius: 0px;
                background-color: #FFF;
            }
            .frm_input {
                height: 22px;
                margin: 4px 0px;
            }
            .frm_input, .frm_textarea {
                width: 100%;
                background-color: transparent;
                border: 0px none;
                outline: 0px none;
            }
            .init_class{
                width: 600px;  height:700px;
            }
        </style>


    </head>
    <body>

        <div style='height: 10px;'>&nbsp;</div>
        <div class="alert alert-info" role="alert" style='font-size: 14px;margin-left: 25px;margin-right: 25px; '>

            <div style='height: 30px;'>正文:用户可以自定义或者使用我们的模版来设计公司信息</div>

            <div style='height: 30px;'>标题:群发消息标题不能为空</div>
            <div style='height: 30px;'>智能模版:用户使用我们定制的插件</div>

            <div>自定义模版:可以让用户快速的制作模版</div>
        </div>


        <div id="errorMessageDiv" class="sortBar alert alert-warning" style="text-align: center;display: none"><label id="errorMessage" for="inputPassword3" class="control-label"></label></div>

        <div style="margin-left: 25px;margin-right: 25px;">
            <input type="radio" id='1' name="iCheck" value='0' <?php if ($_smarty_tpl->getVariable('info')->value['companyType']==0){?>  checked <?php }?>>智能模版&nbsp;&nbsp;&nbsp;

            <input type="radio" id='2' name="iCheck" value='1' <?php if ($_smarty_tpl->getVariable('info')->value['companyType']==1){?>  checked <?php }?>>自定义模版

            <button   id='saveButton' class='btn  btn-primary' type='button'>保存</button>


            <button    id='previewButton' class='btn btn-primary' type='button'>预览</button>&nbsp;&nbsp;&nbsp;&nbsp;
        </div>


        <div style="margin-left: 25px;margin-right: 25px;">

            <div >
                <form class="form-horizontal" action="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=company&functionname=saveGropuMessageTitle" method="post" id='form1' name='form1'>
                    <div id="messageEditArea">
                        <div id="editArea1" class="editArea">
                            <div class="appmsg_edit_item">
                                <label for="" class="frm_label">标题</label>
                                <span class="frm_input_box"><input id="title1" name="title" data-id="1" class="frm_input js_title" type="text"></span>
                            </div>
                            <div class="appmsg_edit_item">
                                <label for="" class="frm_label">作者</label>
                                <span class="frm_input_box"><input name="writer" class="frm_input js_title" type="text"></span>
                            </div>
                            <div class="appmsg_edit_item">
                                <label for="" class="frm_label">封面</label>
                                <div>
                                    <input id="upload_0" class="inputUploads"  type="file" multiple="true" />
                                    <input id="uploadUrl" type="hidden" name="uploadUrl" value="">

                                    <input id="meida_id" type="hidden" name="meida_id" value="">
                                </div>

                                <div id='upload_img'>


                                </div>
                            </div>
                            <div class="appmsg_edit_item">
                                <label for="" class="frm_label">正文</label>
                                <div>

                                    <div>
                                        <input type='hidden' name='activity_html' id='activity_html' value='<?php echo $_smarty_tpl->getVariable('info')->value['companyContent'];?>
'>

                                        <input type='hidden' name='activity_html_' id='activity_html_' value='<?php echo $_smarty_tpl->getVariable('info')->value['companyTextOriginal'];?>
'>



                                        <input type='hidden' name='activity_title' id='activity_title' value='<?php echo $_smarty_tpl->getVariable('info')->value['companyTitle'];?>
'>

                                        <input type='hidden' name='type' id='type' value='<?php echo $_smarty_tpl->getVariable('info')->value['companyType'];?>
'>



                                        <div id='init_id' style='display:none' class='public'>

                                            <?php $_template = new Smarty_Internal_Template('../_init.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
                                        </div>


                                        <div id='visual_id' style='display:none' class='public'>


                                            <?php $_template = new Smarty_Internal_Template('../_visual_layout.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>    
                </form>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade Preview" id="s" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" style='width: 320px; height: 480px;'>
                <div class="modal-content" >
                    <div class="modal-header">
                        <!--  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> -->
                        <h4 class="modal-title" id="myModalLabel">预览界面为iphone4s</h4>
                    </div>
                    <div class="modal-body" style='width: 320px; min-height: 480px; padding:0;margin: 0 auto;'>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="preview()">关闭</button>

                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        

        <script>
            $(function() {
                $('#upload_0').uploadify({
                    'swf': websiteUrl + '/uploadify/uploadify.swf',
                    'uploader': websiteUrl + '/uploadify/uploadify_group.php',
                    'formData': {
                        'objectid': 'upload_0',
                        'session_id': '<?php echo $_smarty_tpl->getVariable('session_id')->value;?>
'
                    },
                    'onUploadSuccess': function(file, data, response) {

                        $("#errorMessageDiv").hide();
                        if (data == "code2") {
                            $("#errorMessageDiv").show();
                            $("#errorMessage").html("上传图片失败，图片格式必须为jpg或者jpge格式");
                        } else if (data == "code1") {
                            $("#errorMessageDiv").show();
                            $("#errorMessage").html("上传图片失败，由于微信限制图片大小必须小于1M");
                        } else {
                            var json = eval("(" + data + ")");
                            $('#uploadUrl').val(json['path']);


                            $('#meida_id').val(json['media_id']);
                            
                            
                            if(json['path'] != ''){


                                $('#upload_img').append('<img src="'+json['path']+'" style="width:50px; height:50px;">')
                                
                            
                            }
                        }

                    }
                });

                var type = $('#type').val();



                if (type == 0) {

                    $('#init_id').show();

                } else {


                    $('#visual_id').show();
                }


                $('input').on('ifChecked', function() {


                    var type = $(this).val();

                    $('.public').css('display', 'none');



                    $('#type').val(type);


                    if (type == 0) {

                        $('#init_id').show();


                    } else {

                        $('#visual_id').show();


                    }


                });


                $('#saveButton').click(function(event) {
                    /* Act on the event */

                    if ($("#title1").val() == "" || $("#title1").val() == " ") {
                        $("#errorMessageDiv").show();
                        $("#errorMessage").html("标题名称不能为空");
                        return false
                    } else {
                        $('.modal-body').html('');

                        previewBoby();


                        $('#form1').submit();
                    }


                });



                $('#previewButton').click(function() {




                    $(".Preview").modal();


                    previewBoby();



                })


            })


            function previewBoby() {

                var type = $('#type').val();




                if (type == 0) {


                    var titleContent = $('#titleArea').html();

                    var packContent = $('#divPack').html();

                } else {

                    var titleContent = $('#titleArea1').html();

                    var html = document.getElementById('edit').value; // 原生API

                    html = editor.html();

                    editor.sync();

                    html = document.getElementById('edit').value; // 原生API

                    var packContent = html;

                }



                var bobyPreview = titleContent + packContent;

 

                $('#activity_html_').val(packContent);


                $('#activity_title').val(titleContent);



                $('.modal-body').html(bobyPreview);

                $('.modal-body').find('.closeSpan').remove();

                $('.modal-body').find("[contenteditable = 'true']").attr('contenteditable', 'false');

                $('.modal-body .upload').remove();


                $('#activity_html').val($('.modal-body').html());
            }

        </script>

    </body>
</html>