<?php /* Smarty version Smarty-3.0-RC2, created on 2014-06-04 18:14:07
         compiled from "/web/www/weixin_crm//templates/inhouse/web/stylistEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1048882897538ef16f2b6739-53099476%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ec1b4a62bfeebe17c741e757a5b423c91fb5b1e' => 
    array (
      0 => '/web/www/weixin_crm//templates/inhouse/web/stylistEdit.tpl',
      1 => 1401874083,
    ),
  ),
  'nocache_hash' => '1048882897538ef16f2b6739-53099476',
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
<script>
    function uploadevent(status,picUrl,callbackdata){
    //    alert(picUrl); //后端存储图片
    //    alert(callbackdata); //后端返回数据
    status += '';
    switch(status){
    case '1':
        
        document.getElementById('testPhoto').value=picUrl;
        document.getElementById('photoState').innerHTML="已上传";
        $("#addButton").prop("disabled",false);
        //        var time = new Date().getTime();
        //        var filename162 = picUrl+'_162.jpg';
        //        var filename48 = picUrl+'_48.jpg';
        //        var filename20 = picUrl+"_20.jpg";

        // document.getElementById('avatar_priview').innerHTML = "头像1 : <img src='"+filename162+"?" + time + "'/> <br/> 头像2: <img src='"+filename48+"?" + time + "'/><br/> 头像3: <img src='"+filename20+"?" + time + "'/>" ;
		
        break;
    case '-1':
        window.location.reload();
        break;
    default:
        window.location.reload();
    } 
}
</script>
<style>
    .labelWidth{
        width: auto !important;
    }
    .inputWidth{
        width: 165px;
    }
    .userMangerTitle{
        color: rgb(91,91,91);
        font-size: 25px;
        margin-top: 15px;
        text-align: center;
    }
    .errorMessage{
        width: 300px;
        margin: 0 auto;
        display: none;
    }
</style>
<body style="overflow-x: hidden;">
    <div style="position: relative;left: 10px; top: 10px;"><a href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=web&functionname=stylistIntroduction"><button class="btn btn-primary">返回</button></a></div>
    <div class="userMangerTitle">编辑礼品</div>
    <div id="errorMessage" class="alert alert-danger errorMessage"></div>
    <div style="margin-left:15px;margin-top:15px;">
        <div style="width: 300px; margin: 0 auto;">
            <div style="text-align: center"><b style=" color: rgb(240,173,78)">注:图片选择完成后请点击保存按钮以完成上传</b></div>
            <div style="height: 35px;"></div>
            <form class="form-horizontal" action="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=web&functionname=stylistUpdate&ItemId=<?php echo $_smarty_tpl->getVariable('stylistValue')->value['stylist_id'];?>
" enctype="multipart/form-data" method="Post">
                <input name='exchange_type' value="1" type="hidden">
                <div class="form-group"> 
                    <label for="inputEmail3" class="col-sm-2 control-label labelWidth">姓名：</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control inputWidth" value="<?php echo $_smarty_tpl->getVariable('stylistValue')->value['stylist_name'];?>
" name="stylist_name" id="exchangeName">
                    </div>
                </div>
                <div class="form-group"> 
                    <label for="inputEmail3" class="col-sm-2 control-label labelWidth">介绍：</label>
                    <div class="col-sm-2">
                        <textarea  class="form-control inputWidth" rows="3" name="stylist_info" id="stylist_info"><?php echo $_smarty_tpl->getVariable('stylistValue')->value['stylist_info'];?>
</textarea>
                    </div>
                </div>
                <div class="form-group"> 
                    <label for="inputEmail3" class="col-sm-2 control-label labelWidth">特长：</label>
                    <div class="col-sm-2">
                        <textarea  class="form-control inputWidth" rows="3" name="specialty" id="specialty"><?php echo $_smarty_tpl->getVariable('stylistValue')->value['specialty'];?>
</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label labelWidth">礼品图片：</label>
                    <div class="col-sm-2">
                        <input id="testPhoto" name="stylist_image" class="inputWidth" photoInput="1" type="hidden" value="">
                        <p id="photoState" style="width: 165px;margin-top: 5px;">未上传</p>
                    </div>
                    <OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
                            codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0"
                            WIDTH="650" HEIGHT="450" id="myMovieName">
                        <PARAM NAME=movie VALUE="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/photoCut/avatar.swf">
                        <PARAM NAME=quality VALUE=high>
                        <PARAM NAME=bgcolor VALUE=#FFFFFF>
                        <param name="flashvars" value="imgUrl=<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/images/inhouse/<?php echo $_smarty_tpl->getVariable('stylistValue')->value['stylist_image'];?>
&uploadUrl=<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/photoCut/upfile1.php&uploadSrc=false" />
                        <EMBED src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/photoCut/avatar.swf" quality=high bgcolor=#FFFFFF WIDTH="650" HEIGHT="450" wmode="transparent" flashVars="imgUrl=<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/images/inhouse/<?php echo $_smarty_tpl->getVariable('stylistValue')->value['stylist_image'];?>
&uploadUrl=<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/photoCut/upfile1.php&uploadSrc=false"
                               NAME="myMovieName" ALIGN="" TYPE="application/x-shockwave-flash" allowScriptAccess="always"
                               PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer">
                        </EMBED>
                    </OBJECT>
                </div>

                <!--                <div class="form-group"> 
                                    <label for="inputEmail3"  class="col-sm-2 control-label labelWidth">礼品详情：</label>
                                    <div class="col-sm-2">
                                        <textarea  class="form-control inputWidth" rows="3"name="exchangez_details" id="exchangezDetails"><?php echo $_smarty_tpl->getVariable('exchageValue')->value['exchangez_details'];?>
</textarea>
                                    </div>
                                </div>-->

                <p style="text-align: center;"><button data-toggle="modal" data-target="#myModal" type="button" id="addButton"  class="btn btn-info">确认修改</button></p>
                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" >
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="myModalLabel">你确认修改这条信息么？</h4>
                            </div>
                            <div class="modal-body">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                                <a id="checkButton" href=""><button type="submit" class="btn btn-primary">确认</button></a>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
            </form>
        </div>
    </div>
    <input type="hidden" id="photoUrl" value="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/images/inhouse/">
</body>
<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/js/rexexTest.js"></script>
<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/js/buttonDisable.js"></script>
<script>
$("#addButton").click(function(){
$("#errorMessage").hide();
$("#errorMessage").html();

var errorMessage="";
var alertFlag=false;
if($("#exchangeName").val()==""){
errorMessage+="名称不能为空 <br>";
alertFlag=true;
}
if($("#stylist_info").val()==""){
errorMessage+="介绍不能为空 <br>";
alertFlag=true;
}
if($("#stylist_info").val().length>=29){
errorMessage+="介绍不能大于29个字符 <br>";
alertFlag=true;
}
if($("#specialty").val().length>=29){
errorMessage+="特长不能大于29个字符<br>";
alertFlag=true;
}
if(alertFlag){ 
$("#errorMessage").show();
$("#errorMessage").html(errorMessage);
$(window).scrollTop(0);
return false;
}else{
$(".modal-body").html("");
var alertTitle=new Array();
var alertText=new Array();
var WarringStr ="";
//var textObject=$(this).parent().parent().find("td");
$(".labelWidth").each(function(index){
alertTitle[index]=$(this).html();
})
$(".inputWidth").each(function(index){
if(this.tagName=="SELECT"){
alertText[index]=$(this).find("option:selected").html();
}else if($(this).attr("photoInput")=="1"){
if($(this).val()==""){
alertText[index]="未修改";
}else{
var photoUrl=$("#photoUrl").val()+$(this).val();
alertText[index]="<img src='"+photoUrl+"'>";
}
}
else{
if($(this).val()==""){
alertText[index]="未填写";
}
else{
alertText[index]=$(this).val();
}
}
});

for (var i=0 ;i<alertTitle.length;i++){
WarringStr+="<div class='form-group'><label  class=' control-label labelWidth'>"+alertTitle[i]+"</label>"
+"<label  class='control-label labelWidth'>"+alertText[i]+"</label>"
+"</div>";
}
var deleteUrl=$("#deleteUrl").val();
$("#checkButton").attr("href", deleteUrl+alertText[6]);                
$(".modal-body").html(WarringStr);
}
})
$("#exchangeIntegration").keyup(function(){
if(!getIntRegex($(this).val())){
var cutString=$(this).val().substr(0, ($(this).val().length)-1);

$("#exchangeIntegration").val(cutString);
}
})
buttonDisable($("#addButton"));

</script>
