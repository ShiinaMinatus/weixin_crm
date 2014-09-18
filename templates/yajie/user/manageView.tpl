<!DOCTYPE html>
<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
<style>
    .seachInput{
        width: 340px;
        height: 30px;
    }
    .dataArea{
        text-align: left;
        width: 60%;
        min-width: 500px;
        margin: 0 auto;
        height: 190px;
    }
    .userMangerTitle{
        color: rgb(91,91,91);
        font-size: 2.5em;
        margin-top: 15px;
        text-align: center;
    }
    .seachButton{
        height: 30px;
    }
    .userDateArea{
        padding-left: 25px;
        width:30%;
        min-width: 280px;
        margin: 0 auto;
        text-align: left;
        border: 1px solid #000;
    }
    .buttonStyle{
        line-height:15px;
        width: 30px;
        height: 30px;
    }
    .numberSpan{
        width: 50px;
        display: inline-block;
    }
    .inlinDisplay{
        display: inline-block;
    }
    .groupInput{
        width: 30%;
        margin: 0 auto;
    }
    .inlineWidth{
        width: 150px !important;
        height: auto;
    }
    .sortBar{
        text-align: center;
    }
</style>
<div class="userMangerTitle">积分消费</div>
<div style="height: 20px;"></div>
<div class="alert alert-info" role="alert" style='font-size: 14px;margin-left: 25px;margin-right: 25px; '>

    <div style='height: 30px;'>卡号:输入5位微信会员卡卡号（形如：A00000）</div>

    <div style='height: 30px;'>金额:输入大于0的正数（最多2位小数）</div>
</div>
{if $printMessage eq "操作成功"}
    <div id="anotherHint" class="sortBar alert alert-warning"><label for="inputPassword3" class="control-label">{$printMessage}</label></div>
{else if $printMessage neq ""}
    <div id="anotherHint" class="sortBar alert alert-danger"><label for="inputPassword3" class="control-label">{$printMessage}</label></div>
{/if}
<div id="jsErrorMessage" style="display: none" class="sortBar alert alert-danger"><label id="jsError" class="control-label"></label></div>
<div style="text-align: center; padding-top: 40px;">

    <form class="form-horizontal" role="form">
        <div class="input-group groupInput">
            <div id="userCardDiv" class="form-group row ">
                <label for="userCard" style="" class="col-sm-4 control-label">卡号：</label>
                <div class="col-sm-8">
                    <input  type="text" class="form-control" style="" placeholder="请输入卡号" id="userCard" name="selectText">
                    <div id="userCardHelp" style="display: none; text-align: left;margin-top: 10px;color: #A94442; ">请输入正确的6位卡号</div>
                </div>
            </div>
            <div style="height: 15px;"></div>
            <div id="userMoneyDiv" class="form-group row ">
                <label for="userMoney" style="line-height: 30px;" class="col-sm-4 control-label">金额：</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" style="" placeholder="请输入金额" id="userMoney" name="selectText">
                    <div id="userMoneyHelp" style="display: none; text-align: left;margin-top: 10px;color: #A94442;">请输入正确的数字</div>
                </div>
            </div>
    </form>
    <div style='height: 10px;'>&nbsp;</div>




</div>


<div class="modal fade" id='myModal'>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">提示</h4>
            </div>
            <div class="modal-body">
                <p>卡号：<span id="cardId">123</span>  消费<span id="moneyNumber">456</span>元,并发送到 微信消息</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                <a  id="checkTrue" href="{$WebSiteUrl}/pageredirst.php?action=user&functionname=deductMoneyAndPostMessage"><button type="button" class="btn btn-primary">确认</button></a>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div style="height: 15px;"></div>
<span class="input-group-btn">

    <button id="alertDialog" data-toggle="modal" data-target="#myModal" type="button"  accesskey="Enter" class="btn btn-primary" style="width: 200px;margin-left: 115px;" >确定</button>
</span>

<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="{$WebSiteUrl}/js/rexexTest.js"></script>
<script src="{$WebSiteUrl}/js/timeClass.js"></script>
<script>


    function countInstances(mainStr, subStr)
    {
        var count = 0;
        var offset = 0;
        do
        {
            offset = mainStr.indexOf(subStr, offset);
            if(offset != -1)
            {
                    count++;
                offset += subStr.length;
            }
        }while(offset != -1)
            return count;
    }


    $(function() {
    $("#userMoney").on("keyup", function(event) {

    $("#userMoneyDiv").removeClass("has-error");
    $("#userMoneyHelp").hide();
    var val = $(this).val();
    var pointCount;
    pointCount=countInstances(val,".");
    var lastString = val.substr(-1);
    if (event.keyCode != 17 && event.keyCode != 8 && event.keyCode!=224 && event.keyCode!=86&&event.keyCode!=110) {
    if (!realNumberWithPonitTwo($(this).val())) {
    var cutString = $(this).val().substr(0, ($(this).val().length) - 1);
    $("#userMoneyDiv").addClass("has-error");
    $("#userMoneyHelp").show();
    $("#userMoney").val(cutString);
}
} else if(lastString == 'v'){
            
if (!realNumberWithPonitTwo($(this).val())) {
var cutString = $(this).val().substr(0, ($(this).val().length) - 1);
$("#userMoneyDiv").addClass("has-error");
$("#userMoneyHelp").show();
$("#userMoney").val(cutString);
}
}else if($(this).val()[0]=="."){
var cutString = $(this).val().substr(0, ($(this).val().length) - 1);
$("#userMoneyDiv").addClass("has-error");
$("#userMoneyHelp").show();
$("#userMoney").val(cutString);
}else if(pointCount>1){
var cutString = $(this).val().substr(0, ($(this).val().length) - 1);
$("#userMoneyDiv").addClass("has-error");
$("#userMoneyHelp").show();
$("#userMoney").val(cutString);
}

}); 
$("#userCard").on("input",function(){
$("#userCardDiv").removeClass("has-error");
$("#userCardHelp").hide();
if($(this).val().length>6){
var cutString = $(this).val().substr(0, ($(this).val().length) - 1);
$("#userCard").val(cutString);
}
if(!cardRegex($(this).val())){
$("#userCardDiv").addClass("has-error");
$("#userCardHelp").show();
}
        
}); 

$("#alertDialog").click(function(){
$("#anotherHint").hide();
var cardId=$("#userCard").val().toUpperCase();
var moneyNumber=$("#userMoney").val();
if(cardId==""||moneyNumber==""){
$("#jsError").html("卡号与金额都不能为空");
$("#jsErrorMessage").css("display","block");    
return false;
}
else if(!getIntRegex($("#userMoney").val())){
$("#jsError").html("金额必须为数字");
$("#jsErrorMessage").css("display","block");   
return false;
}else if(!cardRegex($(this).val())){
//$("#jsError").html("请填写正确的卡号例如A00000");
//$("#jsErrorMessage").css("display","block");   
return false;
}  
else{
$("#cardId").html(cardId);
$("#moneyNumber").html(moneyNumber);
var checkLink= $("#checkTrue").attr("href");
checkLink+="&cardId="+cardId+"&moneyNumber="+moneyNumber;
$("#checkTrue").attr("href",checkLink);
}
});
});






</script>