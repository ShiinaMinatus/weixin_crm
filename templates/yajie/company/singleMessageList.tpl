<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
<link href="{$WebSiteUrl}/css/minimal/blue.css" rel="stylesheet">
<link href="{$WebSiteUrl}/css/crm_table_style_{$source}.css" rel="stylesheet">

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

<div class="userMangerTitle">{$title}</div>
<div class="alert alert-info" role="alert" style='font-size: 14px;width: 600px;margin: 0 auto;'>

    <div style='height: 30px;'>添加消息:可以用来添加一条子群发消息</div>


    <div style='height: 30px;'>群发该组图文消息:点击后将直接发送该组图文消息至微信</div>

    <div>删除消息:删除该条消息</div>
</div>
<div style="height: 50px;"></div>
{if $printMessage neq ""}
    <div class="sortBar alert alert-warning" style="text-align: center"><label for="inputPassword3" class="control-label">{$printMessage}</label></div>
    <div style="height: 25px;"></div>
{/if}
<div class="dataArea">

    <div style="float: left"> <button  class="btn btn-primary" style="color:white;border-radius:0px;height: 32px; text-align: center; margin-top: -3px;" type="button" onclick="window.location.href='{$WebSiteUrl}/pageredirst.php?action=company&functionname=addSingleMessageList&messageId={$messageId}'">添加消息</button></div>
    <div  style="float: right"><button  class="btn btn-primary" style="color:white;border-radius:0px;height: 32px; text-align: center; margin-top: -3px;" type="button" onclick="window.location.href='{$WebSiteUrl}/pageredirst.php?action=company&functionname=sendGroupMessage&messageId={$messageId}'">群发该组图文消息</button></div>
    <div style="clear: both"></div>
    <div style=' height: 10px;'>&nbsp;</div>


    <table class="table crmTable table-bordered">
        <tr><th>封面</th><th>标题</th><th>创建时间</th><th>删除</th></tr>
        {foreach from=$info item=activtyAlls key=key}
            {if $activtyAlls.message_type eq '1'}
                <tr>
                    <td ><img src="{$activtyAlls.message_pic}" style="width: 50px;height: 50px"></td>
                    <td class="shopName">{$activtyAlls.message_title}</td>
                    <td>{$activtyAlls.create_time|date_format:"%Y-%m-%d"}</td>
                    <td><button data-toggle="modal" data-target="#myModal"  type="button" disabled="yes" class="btn btn-primary delLink">删除<span style="display: none" class="shopId">{$activtyAlls.id}</span></button></td>
                </tr>
            {else}
                <tr>
                    <td ><img src="{$activtyAlls.message_pic}" style="width: 50px;height: 50px"></td>
                    <td class="shopName">{$activtyAlls.message_title}</td>
                    <td>{$activtyAlls.create_time|date_format:"%Y-%m-%d"}</td>
                    <td><button data-toggle="modal" data-target="#myModal"  type="button" class="btn btn-primary delLink">删除<span style="display: none" class="shopId">{$activtyAlls.id}</span></button></td>
                </tr>
            {/if}
        {/foreach}
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
            <input type='hidden' value="{$WebSiteUrl}/pageredirst.php?action=company&functionname=delMessageSingleList&messageId={$messageId}" id="delUrl">
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div style="text-align: center">{$pages}</div> 
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="{$WebSiteUrl}/js/rexexTest.js"></script>
<script src="{$WebSiteUrl}/js/icheck.min.js"></script>
<script>
    $(".delLink").click(function(){
    var shopName,shopId,delStoreInfo;
    shopName=$(this).parent().parent().find(".shopName").html();
    shopId=$(this).find(".shopId").html();
    $("#shopName").html(shopName);
    delStoreInfo=$("#delUrl").val()+"&listId="+shopId;
    $("#checkTrue").attr("href",delStoreInfo);
});
</script>
