
    
    <link rel="stylesheet" href="{$WebSiteUrl}/kindeditor/themes/example1/example1.css" />

    <script charset="utf-8" src="{$WebSiteUrl}/kindeditor/kindeditor.js"></script>


        <script charset="utf-8" src="{$WebSiteUrl}/kindeditor/lang/zh_CN.js"></script> 
        <script>
            var editor;
            KindEditor.ready(function(K) {
                editor = K.create('#edit', {
                        themeType : 'example1',
                        items:[

                            'preview','justifyleft','justifycenter','justifyright','indent','outdent'

                            ,'fontsize','forecolor','bold','italic','link','unlink','image','source'
         
                        ]
                });
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
                padding: 17px 0 41px;
                resize: none;
                text-align: center;
                width: 80%;
            }

         

           

           

        </style>
    </head>
    <body>




        <div class="form-field">
            <textarea placeholder="文档标题" class="doc-title" name="doc_title" style="overflow: hidden; word-wrap: break-word; resize: none; height: 31px;" id='titleArea1'></textarea>
        </div>
        <div class="registerWarp" class='init_class'>

            <textarea id="edit" placeholder="这里输入内容" class='init_class'></textarea>
        </div>


       
    </body>
</html>