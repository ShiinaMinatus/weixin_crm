<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="initial-scale=1.0; maximum-scale=4.0; user-scalable=no;" name="viewport">
<meta name="viewport" content="width=device-width,user-scalable=yes" />
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
<style>
    .labelWidth{
        width: auto !important;
    }
    .inputWidth{
        width: 170px;
    }
    .userMangerTitle{
        color: rgb(91,91,91);
        font-size: 2.5em;
        margin-top: 15px;
        text-align: center;
    }
    .errorMessage{
        width: 300px;
        margin: 0 auto;
        display: none;
    }
</style>
<div class="userMangerTitle">微信内容配置</div>
<div class="alert alert-info" role="alert" style='font-size: 14px;width: 600px;margin: 0 auto;line-height: 30px;'>

    <div style='line-height: 30px'>微信内容:编辑会员成功消费后发送至微信客户端的消息，消费的金额请使用「&lt;money>」替代，系统将会自动将其转换为对应的消费金额</div>


    <div style=''>积分奖励:积分将以消费金额1：N的形式转换、n请填写正整数，例如：填写5即每消费1元获得5积分</div>

</div>
<div style="height: 25px;"></div>
{if $printMessage neq ""}
    <div class="sortBar alert alert-warning" style="width: 600px;text-align: center"><label for="inputPassword3" class="control-label">{$printMessage}</label></div>
{/if}

<div id="errorMessage" class="alert alert-danger errorMessage" style="width: 600px;text-align: center"></div>
<div style="margin-left:15px;margin-top:15px;">
    <div style="width: 370px; ">
        <form class="form-horizontal" action="{$WebSiteUrl}/pageredirst.php?action=weixin&functionname=weixinSend" method="post" id='form1'>

            <input type='hidden' value='{$id}' id='company_id' name='company_id' />
            <div class="form-group"> 
                <label for="weixin_content" class="col-sm-2 control-label labelWidth"：>微信内容:</label>
                <div class="col-sm-2">
                    <textarea class="form-control inputWidth" type="text" value="" name="weixin_content" id="weixin_content" style='width: 500px; height: 200px;'>{$info.weixin_content}</textarea>
                </div>
            </div> 


            <div class="form-group"> 
                <label for="weixin_content" class="col-sm-2 control-label labelWidth"：>奖励积分:</label>
                <div class="col-sm-2">
                    <input class="form-control inputWidth" type="text" value="{$info.integral}" name="integral" id="integral" />
                </div>
            </div> 

            <p style="text-align: center;"><button id="addButton" type="button" class="btn btn-info">确认</button></p>


        </form>

    </div>
</div>

<script>

    var reg = /^\d*$/


    $('#addButton').click(function(){

    var errorMessage = '';

    var val = $('#integral').val();

    var content = $("#weixin_content").val();


    if(content == ''){

    errorMessage += '微信内容不能为空<br />';

}

if(val == ''){

errorMessage += '积分不能为空\n';

}


if( !reg.test(val)){


errorMessage += '只能输入数字！\n';
}


if(errorMessage != ''){

$("#errorMessage").show();

          
$('#errorMessage').html(errorMessage);

} else{

$('#form1').submit();

}


})
</script>
