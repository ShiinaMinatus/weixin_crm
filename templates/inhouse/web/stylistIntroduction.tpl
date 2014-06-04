<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
<link href="{$WebSiteUrl}/css/minimal/blue.css" rel="stylesheet">
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
<div class="navBarStyle">
    当前位置：系统管理 > 发型师列表
</div>

<div style='height: 10px;'>&nbsp;</div>
<div class="dataArea" style='height: auto;'>
    
   
    <table class="table table-bordered ">
        <tr><th style="width: 51px;"></th><th  style="width: 121px;">姓名</th><th style="width: 185px;">介绍</th><th style="width: 150px;">特长</th><th style="width: 150px;">头像</th></tr>
        {foreach from=$info item=infos key=key}
            <tr>
                <td>{$key+1}</td>
                <td>{$infos.user_name}</td>
                <td class="userPhone">{$infos.user_phone}</td>
                <td>{$infos.user_card}</td>

                <td>{$infos.company_code}</td>


                {if $infos.user_state == 0}

                <td><a style='color: red;' href='{$WebSiteUrl}/pageredirst.php?action=user&functionname=AbnormalUserStateUpdate&id={$infos.user_id}'>标记为已处理</a></td>

                {else}

                <td  style='color: blue;'>已处理</td>


                {/if}
                

            </tr>
        {/foreach}
    </table>
</div>
<div class="pageStyle">{$pages}</div> 



<script src="{$WebSiteUrl}/js/jquery-1.9.1.js"></script>
<script src="{$WebSiteUrl}/js/rexexTest.js"></script>
<script src="{$WebSiteUrl}/js/icheck.min.js"></script>
