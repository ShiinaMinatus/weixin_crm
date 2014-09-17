
    
    <link rel="stylesheet" href="{$WebSiteUrl}/kindeditor/themes/example1/example1.css" />

    <script charset="utf-8" src="{$WebSiteUrl}/kindeditor/kindeditor.js"></script>


        <script charset="utf-8" src="{$WebSiteUrl}/kindeditor/lang/zh_CN.js"></script> 
        <script>
            var editor;
            KindEditor.ready(function(K) {
                editor = K.create('#edit', {
                        themeType : 'example1',
                        items:[

                            'justifyleft','justifycenter','justifyright','indent','outdent'

                            ,'fontsize','forecolor','bold','italic','link','unlink','image','source'
         
                        ]
                });
            });
        </script>

        <style>

            .form-edit-doc .form-item .form-field {
                margin: 0;
            }
        </style>
    </head>
    <body>


        <div style='height: 10px;'>&nbsp;</div>


        <div class="form-field">
            <textarea  class="doc-title " name="doc_title" style="overflow: hidden; word-wrap: break-word; resize: none; height: 48px;" id='titleArea1'></textarea>
        </div>

        <div style='height: 10px;'>&nbsp;</div>
        <div class="registerWarp init_class"  >
            <textarea id="edit" placeholder="这里输入内容" style='width: 100%; height: 100%;' ></textarea>
        </div>


       
    </body>
</html>