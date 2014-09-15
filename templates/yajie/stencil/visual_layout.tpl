

        <link rel="stylesheet" type="text/css" href="{$WebSiteUrl}/simditor/styles/font-awesome.css" />
        <link rel="stylesheet" type="text/css" href="{$WebSiteUrl}/simditor/styles/simditor.css" />

        <script type="text/javascript" src="{$WebSiteUrl}/simditor/scripts/js/simditor-all.js"></script>
        <script>
            var editor;
            KindEditor.ready(function(K) {
                editor = K.create('#edit');
            });
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