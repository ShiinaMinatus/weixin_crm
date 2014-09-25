<html >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title></title>


        <link rel="stylesheet" type="text/css" href="{$WebSiteUrl}/simditor/styles/font-awesome.css" />
        <link rel="stylesheet" type="text/css" href="{$WebSiteUrl}/simditor/styles/simditor.css" />

        <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
        <script type="text/javascript" src="{$WebSiteUrl}/simditor/scripts/js/simditor-all.js"></script>

        <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css"> 

        <link href="{$WebSiteUrl}/css/crm_table_style_{$source}.css" rel="stylesheet">

        <link href="{$WebSiteUrl}/css/bootstrap-datetimepicker.css" rel="stylesheet" media="screen">

        <link rel="stylesheet" href="{$WebSiteUrl}/kindeditor/themes/example1/example1.css" />

        <script charset="utf-8" src="{$WebSiteUrl}/kindeditor/kindeditor.js"></script>


        <script charset="utf-8" src="{$WebSiteUrl}/kindeditor/lang/zh_CN.js"></script> 
        <script>
            var editor;
            KindEditor.ready(function(K) {
            editor = K.create('#activity_html', {
            themeType : 'example1',
            items:[

                'justifyleft','justifycenter','justifyright','indent','outdent'

                ,'fontsize','forecolor','bold','italic','link','unlink','image','source'
         
            ]
        });
    });
        </script>

        <style>
            .labelWidth{
                width: auto !important;
            }
            .inputWidth{
                width: 150px;
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
            .userMangerTitle{
                color: rgb(91,91,91);
                font-size: 2.5em;
                margin-top: 15px;
                text-align: center;
            }
            .sortBar{
                margin: 0 auto;
                width: 95%;

            }
        </style>


    </head>
    <body>
        <div class="userMangerTitle">微信页脚设置</div>
        <div class="alert alert-info" role="alert" style='font-size: 14px;margin-left: 25px;margin-right: 25px; '>

            <div style='height: 30px;'>用户可以在此处自定义微信内容页脚，保存后将会自动添加至所有微信群发消息正文尾部。
                如不需要页脚，保存为空即可。</div>

        </div>
        {if $printMessage neq ""}
            <div id="Message" class="sortBar alert alert-warning" style="display: block;text-align: center">{$printMessage}</div>
        {/if}
        <div style="margin-left:15px;margin-top:15px;">
            <div style="width: 1000px; margin: 0 auto;">
                <form class="form-horizontal" action="{$WebSiteUrl}/pageredirst.php?action=company&functionname=addPageFoot" method="post">
                    <div class="form-group"> 
                        <label class="col-sm-2 control-label labelWidth">页脚设置</label>

                        <div class="col-sm-2" style='width:800px;height:auto;min-height:300px'>

                            <textarea id="activity_html" name="activity_html" style="height:450px;">{$companyPageFoot}</textarea>

                        </div>

                    </div>

                    <p style=" margin-left: 87px;"><button id="addButton" class="btn btn-info">确认修改</button></p>
                </form>
            </div>
        </div>
    </body>
</html>



<script src="{$WebSiteUrl}/js/rexexTest.js"></script>

<script src="{$WebSiteUrl}/js/bootstrap-datetimepicker.js"></script>

<script>

$('#activity_end_time').datetimepicker({
language: 'fr',
weekStart: 1,
todayBtn: 1,
autoclose: 1,
todayHighlight: 1,
startView: 2,
minView: 2,
forceParse: 0
});

$("#addButton").click(function() {
$("#errorMessage").hide();

$("#errorMessage").html();

var errorMessage = "";

var alertFlag = false;


if ($("#activity_name").val() == "") {
errorMessage += "活动名称不能为空 <br>";

alertFlag = true;
}

if ($("#activity_end_time").val() == "") {
errorMessage += "活动结束时间不能为空 <br>";

alertFlag = true;
}

if (html == "") {
errorMessage += "活动内容不能为空 <br>";

alertFlag = true;
}

if (alertFlag) {

$("#errorMessage").show();

$("#errorMessage").html(errorMessage);

return false;
}


});
</script>
