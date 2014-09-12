
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
    table tr>th{
        text-align: center;
    }
    table tr>td{
        text-align: center;
        vertical-align:middle !important;
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
</style>
<div class="userMangerTitle">积分信息管理</div>

<div style="text-align: center; padding-top: 100px;">
    {if $printMessage neq ""}
        <div class="sortBar alert alert-warning"><label for="inputPassword3" class="control-label">{$printMessage}</label></div>
    {/if}
    <div id="jsErrorMessage" style="display: none" class="sortBar alert alert-warning"><label id="jsError" class="control-label"></label></div>
    <div class="input-group groupInput">
        <input  type="text" class="form-control" style="" placeholder="请输入卡号" id="userCard" name="selectText">

        <div style='height: 10px;'>&nbsp;</div>

        <input type="text" class="form-control" style="" placeholder="请输入金额" id="userMoney" name="selectText">


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

        <button id="alertDialog" data-toggle="modal" data-target="#myModal" type="button"  accesskey="Enter" class="btn btn-default" style="width: auto;" >确定</button>
    </span>

    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="{$WebSiteUrl}/js/rexexTest.js"></script>
    <script src="{$WebSiteUrl}/js/timeClass.js"></script>
    <script>

        $(function() {
        $("#userMoney").on("input",function(){
        if(!getIntRegex($(this).val())){
        var cutString=$(this).val().substr(0, ($(this).val().length)-1);
             
        $("#userMoney").val(cutString);
    }
        
}); 
$("#alertDialog").click(function(){
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