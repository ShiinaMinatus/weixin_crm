<?php /* Smarty version Smarty-3.0-RC2, created on 2014-07-02 16:52:23
         compiled from "/web/www/weixin_crm//templates/yajie/activty/activtyList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:91181077753b3c84789cde1-31739647%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6ee3f6edc44161e6b8c0cbc59bd604ddcf421c4' => 
    array (
      0 => '/web/www/weixin_crm//templates/yajie/activty/activtyList.tpl',
      1 => 1401854721,
    ),
  ),
  'nocache_hash' => '91181077753b3c84789cde1-31739647',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/web/www/weixin_crm/Smarty/libs/plugins/modifier.date_format.php';
?><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
<link href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/css/minimal/blue.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/css/crm_table_style.css" rel="stylesheet">
<style>
    body{
        overflow-x: hidden;
    }
    .userMangerTitle{
        color: rgb(91,91,91);
        font-size: 2.5em;
        margin-top: 15px;
        text-align: center;
    }

    .sortBar{
        width: auto;
        margin-left: 25px;
        height: 25px;
        line-height: 0px;
        margin-right: 45px;
        /*        margin: 0 auto;*/
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
    .selectText{
        height: 32px;
        border-radius:0px; 
        border: #c5c5c5 solid 1px;
        box-shadow: 0px 2px 2px #888 inset; 
        padding-left: 10px;
        width: 224px;
    }
    .selectBar{
        padding-left: 25px;
    }
</style>
<div class="navBarStyle">
    当前位置：任务管理 > 活动报名详情
</div>
<div style="height: 51px;">

     <div style="position: relative;left: 23px; top: 4px;"><a href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=activty&functionname=activty"><button class="btn btn-primary">返回</button></a></div>
</div>
   
<div class="dataArea">
    <table class="table table-bordered ">
        <tr><th style="width: 51px;"></th><th  style="width: 121px;">姓名</th><th style="width: 185px;">电话</th><th style="width: 150px;">报名时间</th></tr>
        <?php  $_smarty_tpl->tpl_vars['userInfo1'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('userInfo')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['userInfo1']->key => $_smarty_tpl->tpl_vars['userInfo1']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['userInfo1']->key;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['userInfo1']->value['real_name'];?>
</td>
                <td class="userPhone"><?php echo $_smarty_tpl->tpl_vars['userInfo1']->value['user_phone'];?>
</td>
                <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['userInfo1']->value['apply_time'],"%Y-%m-%d");?>
</td>
                

            </tr>
        <?php }} ?>
    </table>
</div>
<div class="pageHeight"></div>
<div class="pageStyle"><?php echo $_smarty_tpl->getVariable('pages')->value;?>
</div> 
<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/js/jquery-1.9.1.js"></script>
<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/js/rexexTest.js"></script>
<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/js/icheck.min.js"></script>
<script>

    $(".userPhone").each(function(){
var phoneNumber= $(this).html();
var changeValue="";
changeValue=phoneNumber.substr(0,3)+"-"+phoneNumber.substr(3,3)+"-"+phoneNumber.substr(6);
$(this).html(changeValue);
  
});

</script>