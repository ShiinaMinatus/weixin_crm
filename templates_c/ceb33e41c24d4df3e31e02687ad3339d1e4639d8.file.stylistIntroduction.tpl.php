<?php /* Smarty version Smarty-3.0-RC2, created on 2014-06-04 17:28:57
         compiled from "/web/www/weixin_crm//templates/inhouse/web/stylistIntroduction.tpl" */ ?>
<?php /*%%SmartyHeaderCode:688416113538ee6d94eddb6-05104346%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ceb33e41c24d4df3e31e02687ad3339d1e4639d8' => 
    array (
      0 => '/web/www/weixin_crm//templates/inhouse/web/stylistIntroduction.tpl',
      1 => 1401874083,
    ),
  ),
  'nocache_hash' => '688416113538ee6d94eddb6-05104346',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="initial-scale=1.0; maximum-scale=4.0; user-scalable=no;" name="viewport">
<meta name="viewport" content="width=device-width,user-scalable=yes" />
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
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
    当前位置：系统管理 > 发型师列表
</div>

<div style='height: 10px;'>&nbsp;</div>
<div class="dataArea" style='height: auto;'>


    <table class="table table-bordered crmTable" >
        <tr><th>照片</th>
            <!--            <th>礼品名称</th><th>礼品类型</th>-->
            <th>名称</th>
            <th style="width: 120px;">简介</th><th>特长</th>

            <th style="display: none">id</th><th>编辑</th><th>删除</th></tr>
            <?php  $_smarty_tpl->tpl_vars['Info'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('userInfo')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['Info']->key => $_smarty_tpl->tpl_vars['Info']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['Info']->key;
?>
            <tr>
                <td><img src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/images/inhouse/<?php echo $_smarty_tpl->tpl_vars['Info']->value['stylist_image'];?>
" width="80" height="80"></td>
                <td><?php echo $_smarty_tpl->tpl_vars['Info']->value['stylist_name'];?>
</td>
                <td style="text-align: left;width: 50%"><?php echo $_smarty_tpl->tpl_vars['Info']->value['stylist_info'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['Info']->value['specialty'];?>
</td>
                <td  style="display: none"><?php echo $_smarty_tpl->tpl_vars['Info']->value['stylist_id'];?>
</td>
                <td><a href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=web&functionname=editStylistItem&ItemId=<?php echo $_smarty_tpl->tpl_vars['Info']->value['stylist_id'];?>
">编辑</a></td>
                <td><a href="#"  data-toggle="modal" data-target="#myModal" class="deleteButton ">删除</a></td>

            </tr>
        <?php }} ?>
    </table>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" >
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">你确认删除这条信息么？</h4>
                </div>
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                    <a id="checkButton" href=""><button type="button" class="btn btn-primary">确认</button></a>
                    <input type="hidden" id="deleteUrl" value="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=web&functionname=stylistItemDelete&ItemId="  />
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>
<div style="text-align: center"><?php echo $_smarty_tpl->getVariable('pages')->value;?>
</div> 
<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/js/jquery-1.9.1.js"></script>
<script>
    $(".deleteButton").click(function (){
    var alertTitle=new Array();
    var alertText=new Array();
    var WarringStr ="";
    var textObject=$(this).parent().parent().find("td");
    $(textObject).each(function(index){
    alertText[index]=$(this).html();
})
$("th").each(function(index){
alertTitle[index]=$(this).html();
})

for (var i=0 ;i<(alertTitle.length)-3;i++){
WarringStr+="<div class='form-group'><label  class=' control-label labelWidth'>"+alertTitle[i]+":</label>"
+"<label  class='control-label labelWidth'>"+alertText[i]+"</label>"
+"</div>";
}
var deleteUrl=$("#deleteUrl").val();
$("#checkButton").attr("href", deleteUrl+alertText[4]);                
$(".modal-body").html(WarringStr);
})
</script>