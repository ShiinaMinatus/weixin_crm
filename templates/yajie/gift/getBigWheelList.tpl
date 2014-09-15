
<!DOCTYPE html>
<html> 
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta content="initial-scale=1.0; maximum-scale=4.0; user-scalable=no;" name="viewport">
        <meta name="viewport" content="width=device-width,user-scalable=yes" />


        <!-- 最新 Bootstrap 核心 CSS 文件 -->
        <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">

        <!-- 可选的Bootstrap主题文件（一般不用引入） -->
        <!-- <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap-theme.min.css"> -->

        <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
        <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>

        <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
        <script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>

        <link href="{$WebSiteUrl}/css/crm_table_style_{$source}.css" rel="stylesheet">


        <title>大转盘游戏配置信息</title>
    </head>
    <script>
        $(function() {
            $('#myTab a').click(function(e) {
                e.preventDefault()
                $(this).tab('show');
            })
    </script>


    <style>
        body{
            Font-size=62.5%;
        }
        .bigWheelWarp{
            width: 100%;
        }
        .titleStyle{
            color: rgb(91,91,91);
            font-size: 2.5em;
            text-align: center;
            height: 3em;
            line-height: 3em;
        }

        .nowProbability{
            width: 25%;

            float: left;
            margin-right: 3em;
        }
        .fontStyle{
            line-height: 2.4em;
            width:12%; 
        }
        .rowLocation{
            margin-top: 10px;

            clear: both;

            height: 34px;

            line-height: 37px;
        }
    </style>

    <boby>



        <div class="page-header">
            <h1> <small>大转盘礼品名称配置</small></h1>
        </div>


        <div class="alert alert-info" role="alert" style='font-size: 14px;'>

            注:用户可以修改下述的礼品名称,修改后在微信公众平台中的微转盘游戏中,获奖后提示的礼品名称也会相应的修改
            
        </div>



        <div class="bigWheelWarp">


            <div class="tab-content">

                {if $requestVal eq "1"}
                    <div style="margin-left: 1.5em;width: 50%;" id="errorMessage" class="alert alert-danger errorMessage"> 修改成功</div>
                {/if}
                <!-- 概率配置模块 -->
                <div class="tab-pane active" id="probability" >

                    <form action="{$WebSiteUrl}/pageredirst.php?action=gift&functionname=updateGiftRate" method='post' id='form1' name='form1' >

                        <input type="hidden" name="gift_type" value="1"/>

                        {foreach from=$giftSetting item=setting key=k}

                            <div class="rowLocation" style='clear: both;'>
                                <label for="inputPassword3" class="control-label col-sm-2 ">名称{$k+1}</label>
                                <input type="text" name='probability[]' id="" class="form-control nowProbability" value="{$setting.gift_name}" placeholder="所显示为当前概率">

                            </div>


                        {/foreach}


                        <div style=" margin-top: 3em;margin-left: 12.5em;">
                            <button type="submit" class="btn btn-primary" id="submitProbabilityInfo" style=" letter-spacing: 0.2em;"   onclick='$("form1").submit()
                                                ;' >提交信息</button>
                        </div>

                    </form>

                </div>


            </div>

        </div>

    </boby>



</html>
