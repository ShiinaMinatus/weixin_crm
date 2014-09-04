<?php /* Smarty version Smarty-3.0-RC2, created on 2014-07-28 15:41:50
         compiled from "/web/www/weixin_crm//templates/yajie/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:78694830653d5febe952f71-61515572%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7c9eebe560da4a82047a5c3f864d4e24ed28b1a' => 
    array (
      0 => '/web/www/weixin_crm//templates/yajie/index.tpl',
      1 => 1406530559,
    ),
  ),
  'nocache_hash' => '78694830653d5febe952f71-61515572',
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
_css.css" rel="stylesheet" type="text/css">
            
            
            
            <title></title>

            <style>

                *{
                    font-family:"黑体","宋体",Serif;
                    
                    
                }

            </style>
    </head>

    <body class='boby'>

        <div class='bobyBackGroud' >






            <div style='overflow: hidden; height: 86px;'>

                <!--  <iframe src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=top&functionname=top" name="topFrame" scrolling="No"  id="topFrame" title="topFrame"  style='width: 100%; height: 90px;' ></iframe> -->


                <?php $_template = new Smarty_Internal_Template('top.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

            </div>




            <div style='  background-color: #fff;
    border: 1px solid #d9dadc;height: 750px; width: 1250px ; margin: 0 auto;'>


                <div style='float: left; overflow: hidden; height: 750px; width: 16%;font-weight: bold;border-right: 1px solid #e7e7eb;' >

                    <iframe frameborder='0' src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=left&functionname=left" name="leftFrame"   id="leftFrame" title="leftFrame"  style=' height: 740px; width: 196px; ' ></iframe>

                </div>

                <div style='float: left; overflow: hidden; height: 675px; width: 83%; margin-left: 3px'>



                    <iframe frameborder='0' src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/files/<?php echo $_smarty_tpl->getVariable('source')->value;?>
_mainfra.html"  name="mainFrame" id="mainFrame" title="mainFrame"  style='height: 675px; width: 100%; border-radius: 10px 10px 0 0;' ></iframe>

                </div>


            </div>







        </div>



    </body> 


</html>
