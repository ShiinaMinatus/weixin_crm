<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title></title>
        <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>

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
                </style>


                </head>
                <body>
                    <div class="userMangerTitle">添加门店信息</div>
                    <div id="errorMessage" class="alert alert-danger errorMessage">1111</div>
                    <div style="margin-left:15px;margin-top:15px;">
                        <div style="width: 1000px; margin: 0 auto;">
                            <form class="form-horizontal" action="{$WebSiteUrl}/pageredirst.php?action=company&functionname=addStoreInfo&checkReturn=11" method="post">

                                <input type='hidden' name='activity_id' id='activity_id' value='{$info.activity_id}'>
                                    <div class="form-group"> 
                                        <label  class="col-sm-2 control-label labelWidth">门店名称:</label>
                                        <div class="col-sm-2">
                                            <input class="form-control inputWidth" type="text" value="{$info.activity_name}" name="stroreName" id="stroreName">
                                        </div>
                                    </div> 
                                    <!--     <div class="form-group"> 
                                            <label for="inputEmail3" class="col-sm-2 control-label labelWidth">活动开始时间:</label>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control inputWidth" value="" name="  activity_begin_time" id="activity_begin_time">
                                            </div>
                                        </div>  -->
                                    <div class="form-group"> 
                                        <label  class="col-sm-2 control-label labelWidth">门店电话:</label>
                                        <div class="col-sm-2">

                                            <input class="form-control inputWidth " size="16" type="tel" value="" name='storePhone' id='storePhone'>

                                        </div>
                                    </div>
                                    <div class="form-group"> 
                                        <label  class="col-sm-2 control-label labelWidth">门店地址:</label>
                                        <div class="col-sm-2">
                                            <textarea id="storeAddress" name="storeAddress" style="width: 152px;">11111</textarea>
                                        </div>
                                    </div> 

                                    <p style=" margin-left: 95px;"><button id="addButton" class="btn btn-info">确认添加</button></p>

                                    </div>
                            </form>
                        </div>
                    </div>
                </body>
                </html>



                <script src="{$WebSiteUrl}/js/rexexTest.js"></script>


                <script>
                </script>
