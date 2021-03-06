<html >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title></title>
        <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js" type="text/javascript">
        </script>
        <link href="{$WebSiteUrl}/css/minimal/green.css" rel="stylesheet" type="text/css">
        <script src="{$WebSiteUrl}/js/icheck.min.js" type="text/javascript">
        </script>

        <script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js" type="text/javascript">
        </script>
        <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css" type="text/css">

        <link href="{$WebSiteUrl}/css/crm_table_style_{$source}.css" rel="stylesheet">
        <script type="text/javascript">

            $(document).ready(function() {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_minimal-green',
                    radioClass: 'iradio_minimal-green'
                });
            });

        </script>


        <style>

            .init_class{

                width: 900px;  height: 1200px;
            }

              .doc-title{

            border: 0 none; display: block;
            font-size: 22px;
            font-weight: bold;
            line-height: 43px;
            min-height: 22px;
            overflow: hidden;
            resize: none;
            text-align: center;
           

        }


        </style>


    </head>
    <body>

        <div style='height: 10px;'>&nbsp;</div>

        <div class="alert alert-info" role="alert" style='font-size: 14px;'>

            <div style='height: 30px;'>公司信息:用户可以自定义或者使用我们的模版来设计公司信息</div>


            <div style='height: 30px;'>智能模版:用户可以使用我们定制完成的控件,快速的完成模版设置。注:智能模版中生成的内容适应于所有的手机设备</div>

            <div>

                <ul>

                    <li>组件:组件是由我们定制的一系列控件,用户可以把下列组件 拖入到容器中,并快速的设计版式</li>
                </ul>
            </div>

            <div>自定义模版:根据用户的需求来进行复杂的模版制作</div>
        </div>


        {if $scuesss eq "1"}

            <div id="Message" class="alert alert-danger errorMessage" style="display: block">
                恭喜你添加成功
            </div>

        {/if}


        <input type="radio" id='1' name="iCheck" value='0' {if $info.companyType == 0}  checked {/if}>智能模版&nbsp;&nbsp;&nbsp;

        <input type="radio" id='2' name="iCheck" value='1' {if $info.companyType == 1}  checked {/if}>自定义模版

        <button   id='saveButton' class='btn  btn-primary' type='button'>保存</button>


        <button    id='previewButton' class='btn btn-primary' type='button'>预览</button>&nbsp;&nbsp;&nbsp;&nbsp;



        <div style="">

            <div >
                <form class="form-horizontal" action="{$WebSiteUrl}/pageredirst.php?action=company&amp;functionname=companyEdit" method="post" id='form1' name='form1'>

                    <div style='display: none;' id='activity_html_content'>{$info.companyContent}</div>

                    <input type='hidden' name='activity_html' id='activity_html' value=>

                    <input type='hidden' name='activity_html_' id='activity_html_' value='{$info.companyTextOriginal}'>



                    <input type='hidden' name='activity_title' id='activity_title' value='{$info.companyTitle}'>

                    <input type='hidden' name='type' id='type' value='{$info.companyType}'>



                    <div id='init_id' style='display:none' class='public'>

                        {include file='../_init.tpl'}
                    </div>


                    <div id='visual_id' style='display:none' class='public'>


                        {include file='../_visual_layout.tpl'}

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

        <script src="{$WebSiteUrl}/js/rexexTest.js" type="text/javascript"></script>

        <script>


                            var companyContent = $('#activity_html').val();

                            var companyTitle = $('#activity_title').val();

                            var companyContent_ = $('#activity_html_').val();

                            $(function() {

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

                                          

                                        $('#edit').html(companyContent_);



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

                                $('.uploadify-queue').remove();


                                if (type == 0) {


                                    var titleContent = $('#titleArea').html();

                                    var packContent = $('#divPack').html();

                                } else {

                                    var titleContent = $('#titleArea1').html();

                                    var html134 = editor.html();    


                                    var packContent = '<div>'+html134+'</div>';

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

                                $('.modal-body').find('.uploadify').html();

                                $('.modal-body .upload').remove();

                                //将预览内容(标题和内容)放入

                                $('#activity_html').val($('.modal-body').html());
                            }

        </script>
    </body>
</html>