<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
<link href="{$WebSiteUrl}/css/flat/blue.css" rel="stylesheet">
<link href="{$WebSiteUrl}/css/crm_table_style.css" rel="stylesheet">
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

    .sortBar{
        width: auto;
        margin-left: 25px;
        height: 25px;
        line-height: 0px;
        margin-right: 45px;
        /*        margin: 0 auto;*/
    }
    table tr>th{
        text-align: center;
        background-color: #eee;
    }
    table tr>td{
        text-align: center;
        vertical-align:middle !important;
        border-bottom-color: #D5E3E7 !important;
    }
    table tr:nth-of-type(even){
        background-color: #F9FCFD;
    }
    .selectText{
        height: 32px;
        border-radius:0px; 
        border: #c5c5c5 solid 1px;
        box-shadow: 0px 2px 2px #888 inset; 
        padding-left: 10px;
        width: 224px;
    }
    .selectBar{
        padding-left: 25px;
    }
</style>
<div style="height: 51px;"></div>
<form action="{$WebSiteUrl}/pageredirst.php?action=user&functionname=seachUsers" method="post">

    <div style="">

        <div class="selectBar">
            <input type="text" class="selectText"  placeholder="请输入卡号查询" id="selectText" name="selectText"><button class="btn" style="background:url('{$WebSiteUrl}/images/bottomBg.png');color:white;border-radius:0px;height: 32px; width: 61px;margin-top: -3px;" type="submit">查询</button>
            <!--            <label for="inputPassword3" style="margin-left: 26px;" class="">筛选排序：</label><input type="radio" name="sortType" checked id="point" value="point">&nbsp;<label for="point" style="margin-right: 17px;"  class="control-label">积分</label><input  type="radio" name="sortType" id="money" value="money">&nbsp;<label for="money" class="control-label">余额</label>-->
        </div>
    </div>
    <div class="sortBar"></div>
    {if $errorMessage neq ""}
        <div class="sortBar alert alert-warning"><label for="inputPassword3" class="control-label">{$errorMessage}</label></div>
    {/if}

</form>

<div class="dataArea">
    <table class="table table-bordered ">
        <tr><th style="width: 51px;"></th><th  style="width: 121px;">卡号</th><th style="width: 154px;">积分</th>
            <!--<th style="width: 206px;">关联微信数据</th>-->
        </tr>
        {foreach from=$userInfo item=userInfo1 key=key}
            <tr>
                <td>{$key+1}</td>
                <td>{$userInfo1.user_code}</td>
                
<!--                <td>{$userInfo1.birthday|date_format:"%Y-%m-%d"}</td>-->

                <td>{$userInfo1.user_integration}</td>
               
                <!--<td><a href="{$WebSiteUrl}/pageredirst.php?action=user&functionname=gotoWeixinMessage&open_Id={$userInfo1.user_open_id}">关联</a></td>-->

            </tr>
        {/foreach}
    </table>
</div>
<div class="pageHeight"></div>
<div class="pageStyle">{$pages}</div> 
<script src="{$WebSiteUrl}/js/jquery-1.9.1.js"></script>
<script src="{$WebSiteUrl}/js/rexexTest.js"></script>
<script src="{$WebSiteUrl}/js/icheck.min.js"></script>
