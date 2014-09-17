<?php /* Smarty version Smarty-3.0-RC2, created on 2014-09-17 16:59:38
         compiled from "/web/www/weixin_crm//templates/yajie/company/../_visual_layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:207338748654194d7a973d25-40947696%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a482936f6e919f67cda69f9efad30425cfda9b2' => 
    array (
      0 => '/web/www/weixin_crm//templates/yajie/company/../_visual_layout.tpl',
      1 => 1410944364,
    ),
  ),
  'nocache_hash' => '207338748654194d7a973d25-40947696',
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
          
            <div id='titleArea1' style='outline:none; height: 48px;' contenteditable="true"  class="init_class doc-title" name="doc_title"><div  style="width:90%;overflow: hidden; word-wrap: break-word; resize: none; height: 48px;margin:0 auto; text-align:center;outline: none;" id="aaaaa">文档标题</div></div>
        </div>

        <div style='height: 10px;'>&nbsp;</div>
        <div class="registerWarp init_class doc_title"  >
            <textarea id="edit" placeholder="这里输入内容" style='width: 100%; height: 300px' ></textarea>
        </div>


       
    </body>
</html>