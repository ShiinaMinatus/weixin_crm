<!DOCTYPE html>
<html>
    <head>
        <title>测试</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta content="initial-scale=1.0; maximum-scale=4.0; user-scalable=no;" name="viewport">
        <meta name="viewport" content="width=device-width,user-scalable=yes" />



        <link rel="stylesheet" type="text/css" href="{$WebSiteUrl}/simditor/styles/font-awesome.css" />
        <link rel="stylesheet" type="text/css" href="{$WebSiteUrl}/simditor/styles/simditor.css" />

        <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
        <script type="text/javascript" src="{$WebSiteUrl}/simditor/scripts/js/simditor-all.js"></script>
        <script>
            $(function() {




                editor = new Simditor({
                    textarea: $('#editor'),
                    pasteImage: true,
                   
                    upload: {
                        url: 'upload.php',
                        params: null,
                        connectionCount: 3,
                        leaveConfirm: '正在上传文件，如果离开上传会自动取消'
                    }
                });

             

            })





        </script>


        <style>

            .form-edit-doc .form-item .form-field {
                margin: 0;
            }

            .doc-title {
                border: 0 none;
                display: block;
                font-size: 22px;
                font-weight: bold;
                height: 22px;
                line-height: 1.4;
                margin: 0 auto;
                min-height: 22px;
                overflow: hidden;
                padding: 30px 0 20px;
                resize: none;
                text-align: center;
                width: 80%;
            }

            .registerWarp{

                width: 900px;

                height: 1500px;
            }

           

           

        </style>
    </head>
    <body>




        <div class="form-field">
            <textarea placeholder="文档标题" class="doc-title" name="doc_title" style="overflow: hidden; word-wrap: break-word; resize: none; height: 31px;" id='aaaaa'></textarea>
        </div>
        <div class="registerWarp" style=' width: 1000px; height: 1000px;'>


            <textarea id="editor" placeholder="这里输入内容" ></textarea>
        </div>

      


    </body>
</html>