<html xmlns="http://www.w3.org/1999/xhtml">
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

                    <script>

                        $(function() {



                    })

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
                    </style>


                    </head>
                    <body>
                        <div class="userMangerTitle">联系客服</div>
                        <div class="alert alert-info" role="alert" style='font-size: 14px;margin-left: 25px;margin-right: 25px; '>
                            <div style='height: 30px;'>请在下方空格内填写区号+电话号码或者填写11位手机号</div>
                            <div>例如：021-31263800或者13911111111。</div>
                        </div>
                        <div style="height: 25px;"></div>
                        {if $scuesss eq "1"}
                            <div id="Message" class="alert alert-danger errorMessage" style="display: block">恭喜你修改成功</div>
                        {/if}
                        <div id="errorMessage" class="alert alert-danger errorMessage">恭喜你修改成功</div>
                        <div style="height: 45px;"></div>
                        <div style="margin-left:15px;margin-top:15px;">
                            <div style="width: 1000px; margin: 0 auto;">
                                <form class="form-horizontal" action="{$WebSiteUrl}/pageredirst.php?action=company&functionname=phoneEdit" method="post">
                                    <div class="form-group"> 
                                        <label class="col-sm-2 control-label labelWidth">客服电话：</label>

                                        <div class="col-sm-2" style='width:800px;'>
                                            {if $info neq ""}
                                                <input type='text' id="phoneInfo" name="phoneInfo" style="" value='{$info.companyPhone}'>
                                                {else}
                                                    <input  type='text' id="phoneInfo" name="phoneInfo" style="">
                                                    {/if}
                                                    </div>

                                                    </div>
                                                    <p style=" margin-left: 100px;"><button id="addButton" class="btn btn-info">确认</button></p>
                                                    </form>
                                                    </div>
                                                    </div>
                                                    </body>
                                                    </html>



                                                    <script src="{$WebSiteUrl}/js/rexexTest.js"></script>

                                                    <script src="{$WebSiteUrl}/js/bootstrap-datetimepicker.js"></script>

                                                    <script>
                                                    
                                                    $("#addButton").click(function(){
                                                    $("#Message").hide();
                                                    var telPhone=$("#phoneInfo").val();

                                                        
                                                    if(!getTelRegex(telPhone)&&!getMobilPhoneRegex(telPhone)){
                                                    $("#errorMessage").html('请填写正确的区号+固定电话或者手机号')
                                                    $("#errorMessage").show();
                                                    return false;
                                                }
                                            });
                                                    </script>
