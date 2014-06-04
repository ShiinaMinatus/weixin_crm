<?php /* Smarty version Smarty-3.0-RC2, created on 2014-05-21 14:15:34
         compiled from "C:/Apache24/htdocs/yajie_weixin_crm/weixin_crm//templates/jiantang/weixinuser/weixinuser.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22152537c44867425a1-97413697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '008e9cbd54d988987922d60b1c4b40eac790a851' => 
    array (
      0 => 'C:/Apache24/htdocs/yajie_weixin_crm/weixin_crm//templates/jiantang/weixinuser/weixinuser.tpl',
      1 => 1400652252,
    ),
  ),
  'nocache_hash' => '22152537c44867425a1-97413697',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include 'C:\Apache24\htdocs\yajie_weixin_crm\weixin_crm\Smarty\libs\plugins\modifier.date_format.php';
?><!DOCTYPE html>
<html> 
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta content="initial-scale=1.0; maximum-scale=4.0; user-scalable=no;" name="viewport">
        <meta name="viewport" content="width=device-width,user-scalable=yes" />


        <!-- 最新 Bootstrap 核心 CSS 文件 -->
        <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">

        <!-- 可选的Bootstrap主题文件（一般不用引入） -->
        <!-- <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap-theme.min.css"> -->

        <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
        <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>

        <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
        <script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
        <link href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/css/crm_table_style.css" rel="stylesheet">
        <title>管理员</title>
        <style>
            body{
                Font-size=62.5%;
            }
            .bigWheelWarp{
                width: 100%;
            }
            .titleStyle{
                color: rgb(91,91,91);
                font-size: 2.5em;
                text-align: center;
                height: 3em;
                line-height: 3em;
            }
            .textStyle{
                text-align: center;
                margin-top: 8em;
            }

            table tr>th{
                text-align: center;
                background-color: #eee;
            }
            table tr>td{
                text-align: center;
                vertical-align:middle !important;
                border-bottom-color: #D5E3E7 !important;
            }
            table tr:nth-of-type(even){
                background-color: #F9FCFD;
            }
            .userMangerTitle{
                color: rgb(91,91,91);
                font-size: 25px;
                margin-top: 15px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="navBarStyle">
            当前位置：系统管理 > 微信数据
        </div>
        <?php if ($_smarty_tpl->getVariable('noData')->value=="1"){?>
            <div class="sortBar alert alert-warning"><label for="inputPassword3" class="control-label">您所选择的微信用户暂无绑定会员卡</label></div>
        <?php }else{ ?>
        <?php }?>
        <div class="bigWheelWarp">
            <div style="height: 50px;"></div>

            <div class="dataArea">
                <table class="table table-bordered crmTable" >
                    <tr><th>昵称</th><th>性别</th><th>城市</th><th>关注时间</th><th>关联用户数据源</th></tr>
                    <?php  $_smarty_tpl->tpl_vars['weixinUserIteam'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('weixinUserData')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['weixinUserIteam']->key => $_smarty_tpl->tpl_vars['weixinUserIteam']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['weixinUserIteam']->key;
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['weixinUserIteam']->value['nickname'];?>
</td>
                            <td>
                                <?php if ($_smarty_tpl->tpl_vars['weixinUserIteam']->value['sex']==1){?>
                                    男
                                <?php }else{ ?>
                                    女
                                <?php }?> 
                            </td>
                            <td><?php echo $_smarty_tpl->tpl_vars['weixinUserIteam']->value['country'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['weixinUserIteam']->value['province'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['weixinUserIteam']->value['city'];?>
</td>
                            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['weixinUserIteam']->value['subscribe_time'],"%Y-%m-%d");?>
</td>
                            <td><a href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=weixinuser&functionname=gotoUserMessage&open_Id=<?php echo $_smarty_tpl->tpl_vars['weixinUserIteam']->value['openid'];?>
">关联</a></td>
                        </tr>
                    <?php }} ?>
                </table>

            </div>
            <div style="height: 220px;"></div>
            <div class='pageStyle'><?php echo $_smarty_tpl->getVariable('pages')->value;?>
</div> 
        </div>
    </body>
</html>