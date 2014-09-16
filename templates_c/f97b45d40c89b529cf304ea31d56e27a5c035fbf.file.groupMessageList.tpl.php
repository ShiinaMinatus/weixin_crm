<?php /* Smarty version Smarty-3.0-RC2, created on 2014-09-16 09:57:21
         compiled from "/web/www/weixin_crm//templates/yajie/company/groupMessageList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:946828263541799014781d5-23325939%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f97b45d40c89b529cf304ea31d56e27a5c035fbf' => 
    array (
      0 => '/web/www/weixin_crm//templates/yajie/company/groupMessageList.tpl',
      1 => 1410832578,
    ),
  ),
  'nocache_hash' => '946828263541799014781d5-23325939',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/web/www/weixin_crm/Smarty/libs/plugins/modifier.date_format.php';
?><link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
<link href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/css/minimal/blue.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/css/crm_table_style_<?php echo $_smarty_tpl->getVariable('source')->value;?>
.css" rel="stylesheet">

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
    .selectBar{

        text-align: center;  

    }
    .dataArea{
        text-align: left;
        width: 60%;
        min-width: 500px;
        margin: 0 auto;
        height: 190px;
    }
    .sortBar{
        width: 30%;
        margin: 0 auto;
    }
    table tr>th{
        text-align: center;
    }
    table tr>td{
        text-align: center;
        vertical-align:middle !important;
    }
    .groupInput{
        width: 30%;
        margin: 0 auto;
    }
</style>

<div class="userMangerTitle">消息群发</div>

<div style="height: 50px;"></div>
<?php if ($_smarty_tpl->getVariable('printMessage')->value!=''){?>
    <div class="sortBar alert alert-warning" style="text-align: center"><label for="inputPassword3" class="control-label"><?php echo $_smarty_tpl->getVariable('printMessage')->value;?>
</label></div>
    <div style="height: 25px;"></div>
<?php }?>
<div class="dataArea">

    <button  class="btn btn-primary" style="color:white;border-radius:0px;height: 32px; text-align: center; margin-top: -3px;" type="button" onclick="window.location.href='<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=company&functionname=addGroupMessageList'">添加群发消息</button>

    <div style=' height: 10px;'>&nbsp;</div>


    <table class="table crmTable table-bordered">
        <tr><th>封面</th><th>标题</th><th>创建时间</th><th>删除</th></tr>
        <?php  $_smarty_tpl->tpl_vars['activtyAlls'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('info')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['activtyAlls']->key => $_smarty_tpl->tpl_vars['activtyAlls']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['activtyAlls']->key;
?>
            <tr>
                <td ><img src="<?php echo $_smarty_tpl->tpl_vars['activtyAlls']->value['message_pic'];?>
" style="width: 50px;height: 50px"></td>
                <td class="shopName"><a href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=company&functionname=singleMessageList&messageId=<?php echo $_smarty_tpl->tpl_vars['activtyAlls']->value['message_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['activtyAlls']->value['message_title'];?>
</a></td>
                <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['activtyAlls']->value['create_time'],"%Y-%m-%d");?>
</td>
                <td><button data-toggle="modal" data-target="#myModal"  type="button" class="btn btn-primary delLink">删除<span style="display: none" class="shopId" ><?php echo $_smarty_tpl->tpl_vars['activtyAlls']->value['id'];?>
</span></button></td>
            </tr>
        <?php }} ?>
    </table>
</div>
<div class="modal fade" id='myModal'>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">提示</h4>
            </div>
            <div class="modal-body">
                <p>你确定要删除关于标题「<span id="shopName">123</span>」的所有相关信息么？</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                <a  id="checkTrue" href="#"><button type="button" class="btn btn-primary">确认</button></a>
            </div>
            <input type='hidden' value="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=company&functionname=delMessageGroup" id="delUrl">
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div style="text-align: center"><?php echo $_smarty_tpl->getVariable('pages')->value;?>
</div> 
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/js/rexexTest.js"></script>
<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/js/icheck.min.js"></script>
<script>
    $(".delLink").click(function(){
    var shopName,shopId,delStoreInfo;
    shopName=$(this).parent().parent().find(".shopName").html();
    shopId=$(this).find(".shopId").html();
    $("#shopName").html(shopName);
    delStoreInfo=$("#delUrl").val()+"&messageId="+shopId;
    $("#checkTrue").attr("href",delStoreInfo);
});
</script>
