<?php /* Smarty version Smarty-3.0-RC2, created on 2014-09-13 13:26:58
         compiled from "/web/www/weixin_crm//templates/yajie/stencil/init.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20342766755413d5a28d4fc5-48763224%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4beb8d57fa85196109940f9efdb294b85f7af15' => 
    array (
      0 => '/web/www/weixin_crm//templates/yajie/stencil/init.tpl',
      1 => 1410585473,
    ),
  ),
  'nocache_hash' => '20342766755413d5a28d4fc5-48763224',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/css/<?php echo $_smarty_tpl->getVariable('source')->value;?>
_css.css" rel="stylesheet" type="text/css"></link>



        <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js" type="text/javascript">
        </script><!-- 最新的 Bootstrap 核心 JavaScript 文件 -->



        <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css" />
        <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>


        <script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/uploadify/jquery.uploadify.min.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/uploadify/uploadify.css" />




        <script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js" type="text/javascript">
        </script>
        <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css" type="text/css">




            <title></title>


            <style>

                *{
                    font-family:"黑体","宋体",Serif;
                }
                
                
                p{
                    margin: 0;
                }

                .draglist{

                    padding: 10px;
                    margin-bottom: 5px;
                    border: 2px dashed #ccc;
                    background-color: #eee;
                    cursor: move;

                    width: 100px;
                }

                #draggable { width: 150px; height: 150px; padding: 0.5em; }

                .draglist:hover {
                    border-color: #cad5eb;
                    background-color: #f0f3f9;
                }

                .package{

                    float: left; height: 200px; width: 105px;
                }

                .publicDash{

                    border: 1px dashed #ccc;

                }
                
                .white{
                    
                    background-color: white;
                }

                .textArea{

                    display: block;
                }

                .textHeight{

                    min-height: 80px;
                }
                
                .smamllImageHeight{
                    
                    min-height: 139px;
                }

                .publicHeight{

                    min-height: 100px;
                }

                .doc-title {
                    border: 0 none;
                    display: block;
                    font-size: 22px;
                    font-weight: bold;

                    line-height: 48px;

                    min-height: 22px;
                    overflow: hidden;

                    resize: none;
                    text-align: center;
                    width: 100%;
                }

            </style>


    </head>

    <body >


       <?php $_template = new Smarty_Internal_Template('../_init.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

    </body>


</html>

<script>

    $(function(){


         $('#saveButton').click(function(event) {
        /* Act on the event */

        alert('aaa');
        

    });
    })

</script>





