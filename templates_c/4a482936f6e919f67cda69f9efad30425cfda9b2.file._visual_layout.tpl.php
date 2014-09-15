<?php /* Smarty version Smarty-3.0-RC2, created on 2014-09-15 14:53:22
         compiled from "/web/www/weixin_crm//templates/yajie/company/../_visual_layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:69661417654168ce2b86e67-68608558%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a482936f6e919f67cda69f9efad30425cfda9b2' => 
    array (
      0 => '/web/www/weixin_crm//templates/yajie/company/../_visual_layout.tpl',
      1 => 1410762916,
    ),
  ),
  'nocache_hash' => '69661417654168ce2b86e67-68608558',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

    
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/kindeditor/themes/example1/example1.css" />

    <script charset="utf-8" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/kindeditor/kindeditor.js"></script>


        <script charset="utf-8" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/kindeditor/lang/zh_CN.js"></script> 
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

            <textarea id="edit" placeholder="这里输入内容" style='width: 100%; height: 100%;' class='init_class'></textarea>
        </div>


       
    </body>
</html>