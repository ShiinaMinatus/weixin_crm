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

<div class="userMangerTitle">消息群发</div>
<div class="alert alert-info" role="alert" style='font-size: 14px;width: 640px;margin: 0 auto; line-height: 30px;'>

    <div >添加群发消息:可以用来添加一组群发消息</div>


    <div >转为多图文:点击转为多图文列下对应的进入按钮 进入多图文群发消息页面</div>
    <div >删除群发消息:直接删除该组下所有群发消息</div>
    <div >群发:点击发送按钮直接群发所点选行的单图文消息</div>
    <div> 您当月还可发送<span style="color:red;">{$sendCount}</span>条群发消息</div>
</div>
<div style="height: 50px;"></div>
{if $printMessage neq ""}
    <div class="sortBar alert alert-warning" style="text-align: center"><label for="inputPassword3" class="control-label">{$printMessage}</label></div>
    <div style="height: 25px;"></div>
{/if}
<div class="dataArea">

    <button  class="btn btn-primary" style="color:white;border-radius:0px;height: 32px; text-align: center; margin-top: -3px;" type="button" onclick="window.location.href='{$WebSiteUrl}/pageredirst.php?action=company&functionname=addGroupMessageList'">创建群发消息</button>

    <div style=' height: 10px;'>&nbsp;</div>


    <table class="table crmTable table-bordered">
        <tr><th>封面</th><th>标题</th><th>创建时间</th><th>删除</th><th>转为多图文</th><th>群发</th></tr>
        {foreach from=$info item=activtyAlls key=key}
            <tr>
                <td ><img src="{$activtyAlls.message_pic}" style="width: 50px;height: 50px"></td>
                <td class="shopName"><a href="{$WebSiteUrl}/pageredirst.php?action=company&functionname=singleMessageList&messageId={$activtyAlls.message_id}">{$activtyAlls.message_title}</td>
                <td>{$activtyAlls.create_time|date_format:"%Y-%m-%d"}</td>
                <td><button data-toggle="modal" data-target="#myModal"  type="button" class="btn btn-primary delLink">删除<span style="display: none" class="shopId" >{$activtyAlls.id}</span></button></td>
                <td><a href="{$WebSiteUrl}/pageredirst.php?action=company&functionname=singleMessageList&messageId={$activtyAlls.message_id}"><button type="button" class="btn btn-primary delLink">进入</button></a></td>

                <td><a href="{$WebSiteUrl}/pageredirst.php?action=company&functionname=sendGroupMessage&messageId={$activtyAlls.message_id}&singleMessage=1"><button type="button" class="btn btn-primary delLink">发送</button></a></td>
            </tr>
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
            <input type='hidden' value="{$WebSiteUrl}/pageredirst.php?action=company&functionname=delMessageGroup" id="delUrl">
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
    delStoreInfo=$("#delUrl").val()+"&messageId="+shopId;
    $("#checkTrue").attr("href",delStoreInfo);
});
</script>
