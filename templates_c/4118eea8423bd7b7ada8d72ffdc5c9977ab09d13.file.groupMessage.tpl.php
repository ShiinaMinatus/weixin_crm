<?php /* Smarty version Smarty-3.0-RC2, created on 2014-09-15 17:05:29
         compiled from "/web/www/weixin_crm//templates/yajie/company/groupMessage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8967143255416abd9a4ee33-04025602%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4118eea8423bd7b7ada8d72ffdc5c9977ab09d13' => 
    array (
      0 => '/web/www/weixin_crm//templates/yajie/company/groupMessage.tpl',
      1 => 1410771923,
    ),
  ),
  'nocache_hash' => '8967143255416abd9a4ee33-04025602',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <title></title>
            <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js" type="text/javascript">
            </script>
            <link href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/css/minimal/green.css" rel="stylesheet" type="text/css">
                <script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/js/icheck.min.js" type="text/javascript">
                </script>

                <script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js" type="text/javascript">
                </script>
                <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css" type="text/css">

                    <link href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/css/crm_table_style_<?php echo $_smarty_tpl->getVariable('source')->value;?>
.css" rel="stylesheet">
                        <script type="text/javascript">

                            $(document).ready(function() {
                                $('input').iCheck({
                                    checkboxClass: 'icheckbox_minimal-green',
                                    radioClass: 'iradio_minimal-green'
                                });
                            });

                        </script>

                        <style>
                            .appmsg_thumb_wrp{
                                height: 160px;
                                overflow: hidden;
                            }
                            .coverTitle{
                                position: absolute;
                                left: 0px;
                                background: none repeat scroll 0% 0% rgba(0, 0, 0, 0.6) !important;
                                width: 91.5%;
                                bottom: 0px;
                                height: 30px;
                                line-height: 30px;
                                font-size: 14px;
                                padding-left: 8px;
                                color: white;
                                margin-left: 14px;

                            }
                            .msgBoxStyle{
                                position: relative;
                                padding: 0 14px 14px;
                                padding-top: 14px;
                                border-top: 1px solid #eee;
                                clear: both;
                            }
                            .appmsg_thumb.default {
                                display: block;
                                color: #C0C0C0;
                                text-align: center;
                                line-height: 120px;
                                font-weight: 400;
                                font-style: normal;
                                background-color: #ECECEC;
                                font-size: 16px;
                                padding: 0 14px 14px;
                            }
                            .appmsgLittle{
                                line-height: 78px;
                                font-size: 14px;
                            }

                            .appmsg_thumb{
                                display: none;
                            }
                            .appthumb{
                                float: right;
                                width: 78px;
                                height: 78px;
                                margin-left: 14px;
                                line-height: 78px !important;
                            }
                            .appmsg_add {
                                margin: 20px 14px;
                            }
                            .create_access_primary {
                                display: block;
                                border: 2px dotted #D9DADC;
                                line-height: 60px;
                                font-size: 0px;
                                text-align: center;
                                margin-bottom: 20px;
                                padding: 15px;
                            }
                            a {
                                color: #459AE9;
                                text-decoration: none;
                            }
                            .icon20_common.add_gray {
                                background: url('<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/images/yajie/base_z20273e.png') no-repeat scroll 0px -2761px transparent;
                            }
                            .icon20_common {
                                width: 20px;
                                height: 20px;
                                vertical-align: middle;
                                display: inline-block;
                                line-height: 100px;
                                overflow: hidden;
                            }
                            .editArea{
                                background-color: #F4F5F9;
                                border: 1px solid #E7E7EB;
                                height: 850px;
                            }
                            .appmsg_edit_item {
                                padding-bottom: 1em;
                                margin-left: 15px;
                                margin-right: 15px;
                            }
                            .appmsg_edit_item .frm_label:after {
                                content: "​";
                                display: block;
                                height: 0px;
                                clear: both;
                            }
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
                                width: 400px;  height: 500px;
                            }
                        </style>
                        </head>
                        <body>

                            <div style='height: 10px;'>&nbsp;</div>

                            <div class="alert alert-info" role="alert" style='font-size: 14px;'>

                                <div style='height: 30px;'>公司信息:用户可以自定义或者使用我们的模版来设计公司信息</div>


                                <div style='height: 30px;'>智能模版:用户使用</div>

                                <div>自定义模版:可以让用户快速的制作模版</div>
                            </div>


                            <?php if ($_smarty_tpl->getVariable('scuesss')->value=="1"){?>

                                <div id="Message" class="alert alert-danger errorMessage" style="display: block">
                                    恭喜你添加成功
                                </div>

                            <?php }?>

                            <div>
                                <input type="radio" id='1' name="iCheck" value='0' <?php if ($_smarty_tpl->getVariable('info')->value['companyType']==0){?>  checked <?php }?>>智能模版&nbsp;&nbsp;

                                    <input type="radio" id='2' name="iCheck" value='1' <?php if ($_smarty_tpl->getVariable('info')->value['companyType']==1){?>  checked <?php }?>>自定义模版

                                        <button   id='saveButton' class='btn  btn-info' type='button'>保存</button>


                                        <button    id='previewButton' class='btn btn-info' type='button'>预览</button>
                                        </div>
                                        <div style="margin-top:20px;;margin-left: 15px;width:320px;float: left;border: 1px solid #eeeeee">
                                            <div id="jsMessageText">
                                                <div id="msgItem1" class="msgBoxStyle" style="">
                                                    <h4 class="coverTitle">标题</h4>   
                                                    <div class="appmsg_thumb_wrp">
                                                        <img class="js_appmsg_thumb appmsg_thumb" src="">
                                                            <i class="appmsg_thumb default">封面图片</i>
                                                    </div>
                                                    <div></div>   
                                                </div>
                                                <div id="msgItem2" data-fileid="" data-id="2" class="msgBoxStyle ">
                                                    <img class="js_appmsg_thumb appmsg_thumb" src="">
                                                        <i class=" appthumb appmsg_thumb default " style="margin-bottom: 14px;">缩略图</i>
                                                        <h4 class="appmsg_title"><a onclick="return false;" href="javascript:void(0);" target="_blank">标题</a></h4>
                                                        <div class="appmsg_edit_mask">
                                                            <a class="icon18_common edit_gray js_edit" data-id="2" onclick="return false;" href="javascript:void(0);">编辑</a>
                                                            <a class="icon18_common del_gray js_del" data-id="2" onclick="return false;" href="javascript:void(0);">删除</a>
                                                        </div>
                                                </div>
                                            </div>
                                            <a onclick="return false;" class="create_access_primary appmsg_add" id="addBox" href="javascript:void(0);">
                                                <i class="icon20_common add_gray">增加一条</i>
                                            </a>  

                                        </div>
                                        <div style="width:550px;float: left;margin-left: 25px;margin-top: 20px;">
                                            <div >
                                                <form class="form-horizontal" action="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=company&amp;functionname=companyEdit" method="post" id='form1' name='form1'>
                                                    <div id="messageEditArea">
                                                        <div id="editArea1" class="editArea">
                                                            <div class="appmsg_edit_item">
                                                                <label for="" class="frm_label">标题</label>
                                                                <span class="frm_input_box"><input class="frm_input js_title" type="text"></span>
                                                            </div>
                                                            <div class="appmsg_edit_item">
                                                                <label for="" class="frm_label">作者</label>
                                                                <span class="frm_input_box"><input class="frm_input js_title" type="text"></span>
                                                            </div>
                                                            <div class="appmsg_edit_item">
                                                                <label for="" class="frm_label">封面</label>
                                                                <div>
                                                                        <input id="upload_0" class="inputUploads"  type="file" multiple="true" />

                                                                </div>
                                                            </div>
                                                            <div class="appmsg_edit_item">
                                                                <label for="" class="frm_label">正文</label>
                                                                <div>
                                                                    <div>
                                                                        <input type="radio" id='1' name="iCheck" value='0' <?php if ($_smarty_tpl->getVariable('info')->value['companyType']==0){?>  checked <?php }?>>智能模版&nbsp;&nbsp;

                                                                            <input type="radio" id='2' name="iCheck" value='1' <?php if ($_smarty_tpl->getVariable('info')->value['companyType']==1){?>  checked <?php }?>>自定义模版

                                                                                <button   id='saveButton' class='btn  btn-info' type='button'>保存</button>


                                                                                <button    id='previewButton' class='btn btn-info' type='button'>预览</button>
                                                                                </div>
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

                                                                                                    <script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/js/rexexTest.js" type="text/javascript"></script>

                                                                                                    <script>
                                                                                                                        var companyContent = $('#activity_html').val();

                                                                                                                        var companyTitle = $('#activity_title').val();

                                                                                                                        var companyContent_ = $('#activity_html_').val();

                                                                                                                        $(function() {
                                                                                                                            
                                                                                                                            
                                                                                                                            
                                                                                                                                        $('#upload_0').uploadify({
                                                                                                                                            'swf': websiteUrl + '/uploadify/uploadify.swf',
                                                                                                                                            'uploader': websiteUrl + '/uploadify/uploadify_group.php',
                                                                                                                                            'formData': {
                                                                                                                                                'objectid': 'upload_0',
                                                                                                                                            },
                                                                                                                                            'onUploadSuccess': function(file, data, response) {

                                                                                                                                                var json = eval("(" + data + ")");


                                                                                                                                                $('#' + json['objectid']).parent().prev().find('img').attr('src', json['path'])



                                                                                                                                            }
                                                                                                                                        });

                                                                                                                            var type = $('#type').val();



                                                                                                                            if (type == 0) {

                                                                                                                                if (companyContent_ != '') {

                                                                                                                                    $('#divPack').html(companyContent_);

                                                                                                                                    $('#titleArea').html(companyTitle);

                                                                                                                                    $('.uploadify').each(function(obj) {

                                                                                                                                        var ids = $(this).attr('id');

                                                                                                                                        $('.uploadify-queue').remove();

                                                                                                                                        $('#' + ids).html('');


                                                                                                                                        $('#' + ids).uploadify({
                                                                                                                                            'swf': websiteUrl + '/uploadify/uploadify.swf',
                                                                                                                                            'uploader': websiteUrl + '/uploadify/uploadify.php',
                                                                                                                                            'formData': {
                                                                                                                                                'objectid': ids,
                                                                                                                                            },
                                                                                                                                            'onUploadSuccess': function(file, data, response) {

                                                                                                                                                var json = eval("(" + data + ")");


                                                                                                                                                $('#' + json['objectid']).parent().prev().find('img').attr('src', json['path'])



                                                                                                                                            }
                                                                                                                                        });

                                                                                                                                    })

                                                                                                                                }

                                                                                                                                $('#init_id').show();

                                                                                                                            } else {


                                                                                                                                $('#visual_id').show();

                                                                                                                                if (companyContent_ != '') {

                                                                                                                                    $('#edit').html(companyContent);

                                                                                                                                    $('#titleArea1').html(companyTitle)

                                                                                                                                }
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


                                                                                                                                $('.modal-body').html('');

                                                                                                                                previewBoby();


                                                                                                                                $('#form1').submit();



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

                                                                                                                            //编辑器原本内容    

                                                                                                                            $('#activity_html_').val(packContent);

                                                                                                                            //标题

                                                                                                                            $('#activity_title').val(titleContent);

                                                                                                                            //将预览内容放入

                                                                                                                            $('.modal-body').html(bobyPreview);

                                                                                                                            $('.modal-body').find('.closeSpan').remove();

                                                                                                                            $('.modal-body').find("[contenteditable = 'true']").attr('contenteditable', 'false');

                                                                                                                            $('.modal-body .upload').remove();

                                                                                                                            //将预览内容(标题和内容)放入

                                                                                                                            $('#activity_html').val($('.modal-body').html());
                                                                                                                        }
                                                                                                                        $("#addBox").click(function() {
                                                                                                                            addBoxItem()
                                                                                                                        });
                                                                                                                        //删除jsbox的方法
                                                                                                                        $("body").on('click', '.js_del',
                                                                                                                                function() {

                                                                                                                                    var number = $(this).attr("data-id");
                                                                                                                                    var delObj = $(this).parent().parent().parent().find("#msgItem" + number).remove();
                                                                                                                                }
                                                                                                                        );
                                                                                                                        //添加box的JS方法
                                                                                                                        var maxBoxNumber = $(".msgBoxStyle").length;
                                                                                                                        function addBoxItem() {
                                                                                                                            var messsageBox = $(".msgBoxStyle");
                                                                                                                            var boxCount = messsageBox.length;
                                                                                                                            var newItemId = maxBoxNumber = maxBoxNumber + 1;
                                                                                                                            var messageText = $("#jsMessageText");
                                                                                                                            var appendVal = '<div id="msgItem' + newItemId + '" data-fileid="" data-id="' + newItemId + '" class="msgBoxStyle ">' +
                                                                                                                                    '<img class="js_appmsg_thumb appmsg_thumb" src="">' +
                                                                                                                                    '<i class=" appthumb appmsg_thumb default " style="margin-bottom: 14px;">缩略图</i>' +
                                                                                                                                    '<h4 class="appmsg_title"><a onclick="return false;" href="javascript:void(0);" target="_blank">标题</a></h4>' +
                                                                                                                                    '<div class="appmsg_edit_mask">' +
                                                                                                                                    '<a class="icon18_common edit_gray js_edit" data-id="' + newItemId + '" onclick="return false;" href="javascript:void(0);">编辑</a> ' +
                                                                                                                                    '<a class="icon18_common del_gray js_del" data-id="' + newItemId + '" onclick="return false;" href="javascript:void(0);">删除</a>' +
                                                                                                                                    '</div></div>';
                                                                                                                            if (boxCount >= 8) {
                                                                                                                                alert("最多只可添加八个项目");
                                                                                                                            } else {
                                                                                                                                messageText.append(appendVal);
                                                                                                                            }
                                                                                                                            //alert(boxCount);
                                                                                                                        }

                                                                                                    </script>
                                                                                                    </body>
                                                                                                    </html>