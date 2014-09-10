<?php /* Smarty version Smarty-3.0-RC2, created on 2014-09-09 17:10:49
         compiled from "/web/www/weixin_crm//templates/yajie/user/userList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2055024786540ec419c26c59-36692836%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b06ff45041c52219d2003c5d1c828c52fe569b7d' => 
    array (
      0 => '/web/www/weixin_crm//templates/yajie/user/userList.tpl',
      1 => 1410253786,
    ),
  ),
  'nocache_hash' => '2055024786540ec419c26c59-36692836',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/web/www/weixin_crm/Smarty/libs/plugins/modifier.date_format.php';
?><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
<link href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/css/flat/blue.css" rel="stylesheet">
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
<div style="height: 51px;"></div>
<form action="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=user&functionname=seachUsers" method="post">

    <div style="">

        <div class="selectBar">
            <input type="text" class="selectText"  placeholder="请输入卡号查询" id="selectText" name="selectText"><button class="btn" style="background:url('<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/images/bottomBg.png');color:white;border-radius:0px;height: 32px; width: 61px;margin-top: -3px;" type="submit">查询</button>
            <!--            <label for="inputPassword3" style="margin-left: 26px;" class="">筛选排序：</label><input type="radio" name="sortType" checked id="point" value="point">&nbsp;<label for="point" style="margin-right: 17px;"  class="control-label">积分</label><input  type="radio" name="sortType" id="money" value="money">&nbsp;<label for="money" class="control-label">余额</label>-->
        </div>
    </div>
    <div class="sortBar"></div>
    <?php if ($_smarty_tpl->getVariable('errorMessage')->value!=''){?>
        <div class="sortBar alert alert-warning"><label for="inputPassword3" class="control-label"><?php echo $_smarty_tpl->getVariable('errorMessage')->value;?>
</label></div>
        <?php }?>

</form>

<div class="dataArea">
    <table class="table table-bordered ">
        <tr><th style="width: 51px;"></th><th  style="width: 121px;">卡号</th><th style="width: 154px;">积分</th>
            <!--<th style="width: 206px;">关联微信数据</th>-->
        </tr>
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
                <td><?php echo $_smarty_tpl->tpl_vars['userInfo1']->value['user_code'];?>
</td>
                
<!--                <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['userInfo1']->value['birthday'],"%Y-%m-%d");?>
</td>-->

                <td><?php echo $_smarty_tpl->tpl_vars['userInfo1']->value['user_integration'];?>
</td>
               
                <!--<td><a href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=user&functionname=gotoWeixinMessage&open_Id=<?php echo $_smarty_tpl->tpl_vars['userInfo1']->value['user_open_id'];?>
">关联</a></td>-->

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
