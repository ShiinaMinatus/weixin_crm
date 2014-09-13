<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title></title>
        <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css"> 



            <link href="{$WebSiteUrl}/css/crm_table_style_{$source}.css" rel="stylesheet">

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
                    #test{
                        position: absolute;
                        top:40px;
                        left: 630px;
                        font-weight: bold;
                    }
                </style>


                </head>
                <body>

                    <div style="margin-left:15px;margin-top:15px;" class="others">
                        <div class="userMangerTitle">会员卡说明</div>
                        <div style="height: 100px;"></div>
                        {if $printMessage neq ""}
                            <div class="sortBar alert alert-warning" style="text-align: center"><label for="inputPassword3" class="control-label">{$printMessage}</label></div>
                        {/if}
                        <div style="width: 1000px; margin: 0 auto;">
                            <form class="form-horizontal" action="{$WebSiteUrl}/pageredirst.php?action=company&functionname=cardInfoConfig" method="post">

                                <input type='hidden' name='activity_id' id='activity_id' value='{$info.activity_id}'>
                                    <div class="form-group"> 
                                        <label  class="col-sm-2 control-label labelWidth">商家名称:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                        <div class="col-sm-2">
                                            <input class="form-control inputWidth" type="text" value="{$info.shop_name}" name="stroreName" id="stroreName">
                                        </div>
                                    </div> 
                                    <!--     <div class="form-group"> 
                                            <label for="inputEmail3" class="col-sm-2 control-label labelWidth">活动开始时间:</label>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control inputWidth" value="" name="  activity_begin_time" id="activity_begin_time">
                                            </div>
                                        </div>  -->
                                    <div class="form-group"> 
                                        <label  class="col-sm-2 control-label labelWidth">
                                            会员卡说明: 

                                            <!-- Generated markup by the plugin -->
                                        </label>
                                        <div class="col-sm-2" style="margin-left: 15px;">
                                            <textarea id="cardExplain" name="cardExplain" style="width: 473px; height: 369px;">{$info.card_explain}</textarea>

                                        </div>

                                    </div> 


                                    <p style=" margin-left: 120px;"><button id="addButton" class="btn btn-info">确认添加</button></p>

                                    </div>
                            </form>
                        </div>
                        <div style="width: 300px;height: 150px;">
                            <a id="test" type="button" href="#" data-toggle="popover" title="如何填写会员卡说明" data-placement="button" data-content="由于我们在微信端拥有会员卡说明模板，所以在crm后台编辑时，只需要每段文字之后添加「;」（分号）替代换行符进行分割即可。例如：“第一条，用户获得会员卡之后可以直接使用。;第二条，用户可以随时注销会员卡。”">如何填写会员卡说明</a>
                        </div>
                </body>
                </html>



                <script src="{$WebSiteUrl}/js/rexexTest.js"></script>
                <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
                <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
                <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
                <script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>

                <script>
                    $('#test').popover("show");
                    $(".popover").css({
                    "width":"350px",
                    "top":"65px",
                    "left":"615px"
                });
                $("#test").click(function(){
                $('#test').popover("show");
                $(".popover").css({
                "width":"350px",
                "top":"65px",
                "left":"615px"
            });
        });
 
        $(".others").click(function(){
        $('#test').popover("destroy");
    });
    //                $(window).click(function(){
    //                alert($(this).attr("id"));
    //                if($(this).attr("id")!="test"){
    //                $('#test').popover("hide");
    //            }else{
    //            $('#test').popover("toggle");
    //        }
    //            });


    
                </script>
