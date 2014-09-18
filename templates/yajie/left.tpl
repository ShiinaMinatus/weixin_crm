<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title></title>
        <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
        <style type="text/css">

            {* body {
            margin: 0;background:url(images/menu-shadow.png) repeat-y right top #eeeeee;
            }*}


            body{

                margin:0;
            }

        </style>
        <link href="{$WebSiteUrl}/css/{$source}_css.css" rel="stylesheet" type="text/css">
    </head>
    <body style='{*border-radius: 10px 10px 0 0;*}'>

        <script>

            var root = '{$WebSiteUrl}';
        </script>
        {literal} 


            <script language='JavaScript' type="text/javascript">

                $(function() {

                    $('table').css('display', 'block');


                    $('.left-a').click(function() {

                        $('.left-a').removeClass('selected');

                        $(this).addClass('selected');


                    })
                })



                function isIE() {
                    if (window.navigator.userAgent.toLowerCase().indexOf("msie") >= 1)
                        return true;
                    else
                        return false;
                }

                function tupian(idt) {

                }

                function list(idstr) {






                }
            </script>{/literal}
            <div class="left_background" style='{*border-radius: 10px 10px 0 0;*} width:200px;'>

                <table width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table01" style=''>
                    <tr>
                        <td>
                            {* <div style='width: 200px; height: 40px;' class='leftLines'>
 
 
                            系统管理菜单
                            </div>*}




                            <!--                    公司模块开始-->
                            <table width="100%" border="0" cellpadding="0" cellspacing="0" class=" zhucaidan " id="table120">
                                <tr>
                                    <td height="29" onclick="list('120')">
                                        <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                            <tr>

                                                <td width="85%">

                                                    {*                                                        <img name="img1" id="img1" src="{$WebSiteUrl}/images/ico04.png" width="12" height="12">*}
                                                    {*                                                        <span style=' display: inline-block; width: 18px;'>&nbsp;</span>*}
                                                    <a href="javascript:vold(0)" target="mainFrame" class="left-font03 left-font" >消费管理</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <table id="subtree120" style="DISPLAY: none" width="100%" border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">


                                {if $auth_result[4]==1}
                                    <tr>

                                        <td width="100%">



                                            <div class='left-a' >

                                                <a  style='' href="{$WebSiteUrl}/pageredirst.php?action=user&functionname=pointAndMoneyManage" target="mainFrame" class="left-fontSmall" >积分消费</a>

                                            </div>

                                        </td>
                                    </tr>
                                {/if}


                            </table>






                            {if $auth_result[120]==1}
                                <!--                    公司模块开始-->
                                <table width="100%" border="0" cellpadding="0" cellspacing="0" class=" zhucaidan " id="table120">
                                    <tr>
                                        <td height="29" onclick="list('120')">
                                            <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                                <tr>

                                                    <td width="85%">

                                                        {*                                                        <img name="img1" id="img1" src="{$WebSiteUrl}/images/ico04.png" width="12" height="12">*}
                                                        {*                                                        <span style=' display: inline-block; width: 18px;'>&nbsp;</span>*}
                                                        <a href="javascript:vold(0)" target="mainFrame" class="left-font03 left-font" >公司管理</a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                                <table id="subtree120" style="DISPLAY: none" width="100%" border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">


                                    {*  <tr>
  
  
                                    <td width="100%">

                                    <div class='left-a' >

                                    <a  style='' href="{$WebSiteUrl}/pageredirst.php?action=stencil&functionname=init" target="mainFrame" class="left-fontSmall" >智能模版</a>

                                    </div>

                                    </td>
                                    </tr>*}

                                    <tr>

                                        <td width="100%">

                                            <div class='left-a' >

                                                <a  style='' href="{$WebSiteUrl}/pageredirst.php?action=company&functionname=companyEdit" target="mainFrame" class="left-fontSmall" >公司信息</a>

                                            </div>

                                        </td>
                                    </tr>

                                    {* <tr>
 
                                    <td width="100%">

                                    <div class='left-a' >

                                    <a  style='' href="{$WebSiteUrl}/pageredirst.php?action=stencil&functionname=visualLayout" target="mainFrame" class="left-fontSmall" >自定义模版</a>

                                    </div>

                                    </td>
                                    </tr>*}

                                </table>
                            {/if}





                            {if $auth_result[6]==1}

                                <!--                    积分开始-->
                                <table width="100%" border="0" cellpadding="0" cellspacing="0" class="zhucaidan" id="table2">
                                    <tr>
                                        <td height="29" onclick="list('2')">
                                            <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                                <tr>

                                                    <td width="85%">

                                                        {*                                                        <img name="img2" id="img2" src="{$WebSiteUrl}/images/ico04.png" width="12" height="12">*}
                                                        {*                                                        <span style=' display: inline-block; width: 18px;'>&nbsp;</span>*}
                                                        <a href="javascript:vold(0)" target="mainFrame" class="left-font03 left-font" >预约管理</a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                                <table id="subtree2" style="DISPLAY: none" width="100%" border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">

                                    {if $auth_result[7]==1}
                                        <tr>

                                            <td width="100%">

                                                <div class='left-a' >
                                                    <a style='' href="{$WebSiteUrl}/pageredirst.php?action=order&functionname=getOrderlist" target="mainFrame" class="left-fontSmall" >订单管理</a>

                                                </div>
                                            </td>

                                        </tr>

                                    {/if}

                                    {if $auth_result[8]==1}
                                        <tr>

                                            <td width="100%">


                                                <div class='left-a' >
                                                    <a style='' href="{$WebSiteUrl}/pageredirst.php?action=order&functionname=orderAdd" target="mainFrame" class="left-fontSmall">新增预约</a>

                                                </div>

                                            </td>

                                        </tr>
                                    {/if}
                                </table>


                            {/if}

                            {if $auth_result[9]==1}

                                <!--                    微游戏开始-->
                                <table width="100%" border="0" cellpadding="0" cellspacing="0" class=" zhucaidan" id="table3">
                                    <tr>
                                        <td height="29" onclick="list('3')">
                                            <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                                <tr>

                                                    <td width="100%">

                                                        {*                                                        <img name="img3" id="img3" src="{$WebSiteUrl}/images/ico04.png" width="12" height="12">*}

                                                        {*                                                        <span style=' display: inline-block; width: 18px;'>&nbsp;</span>*}

                                                        <a href="javascript:vold(0)" target="mainFrame" class="left-font03 left-font" >微游戏管理</a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                                <table id="subtree3" style="DISPLAY: none" width="100%" border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">

                                    {if $auth_result[10]==1}
                                        <tr>

                                            <td width="100%">
                                                <div class='left-a' >
                                                    <a style='' href="{$WebSiteUrl}/pageredirst.php?action=gift&functionname=getBigWheelList" target="mainFrame" class="left-fontSmall">大转盘礼品列表</a>

                                                </div>
                                            </td>

                                        </tr>

                                    {/if}

                                    {if $auth_result[11]==1}

                                        <tr>

                                            <td width="100%">

                                                <div class='left-a' >
                                                    <a style='' href="{$WebSiteUrl}/pageredirst.php?action=gift&functionname=getCardList" target="mainFrame" class="left-fontSmall" >刮刮卡礼品列表</a>

                                                </div>
                                            </td>
                                        </tr>

                                    {/if}

                                </table>


                            {/if}

                            {if $auth_result[12]==1}




                                <!--                   兑换开始-->
                                <table width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03 zhucaidan " id="table4">
                                    <tr>
                                        <td height="29" onclick="list('4')">
                                            <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                                <tr>

                                                    <td width="85%">

                                                        {*                                                        <img name="img4" id="img4" src="{$WebSiteUrl}/images/ico04.png" width="12" height="12">*}

                                                        {*                                                        <span style=' display: inline-block; width: 18px;'>&nbsp;</span>*}
                                                        <a href="javascript:vold(0)" target="mainFrame" class="left-font03 left-font" >兑换管理</a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                                <table id="subtree4" style="DISPLAY: none" width="100%" border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">

                                    {if $auth_result[13]==1}
                                        <tr>

                                            <td width="100%">


                                                <div class='left-a' >


                                                    <a style='' href="{$WebSiteUrl}/pageredirst.php?action=exchange&functionname=ExchangeList" target="mainFrame" class="left-fontSmall" >礼品列表</a>

                                                </div>
                                            </td>

                                        </tr>

                                    {/if}

                                    {if $auth_result[14]==1}
                                        <tr>

                                            <td width="100%">

                                                <div class='left-a' >
                                                    <a style='' href="{$WebSiteUrl}/pageredirst.php?action=exchange&functionname=addExchangeItem" target="mainFrame" class="left-fontSmall">添加礼品</a>

                                                </div>
                                            </td>
                                        </tr>

                                    {/if}
                                    {if $auth_result[39]==1}

                                        <tr>

                                            <td width="100%">

                                                <div class='left-a' >
                                                    <a style='' href="{$WebSiteUrl}/pageredirst.php?action=exchange&functionname=checkExchangeCode" target="mainFrame" class="left-fontSmall" >礼品验证</a>

                                                </div>
                                            </td>


                                        {/if}
                                        {if $auth_result[41]==1}

                                        <tr>

                                            <td width="100%">

                                                <div class='left-a' >
                                                    <a style='' href="{$WebSiteUrl}/pageredirst.php?action=exchange&functionname=exchangeManagement" target="mainFrame" class="left-fontSmall" >礼品管理</a>

                                                </div>
                                            </td>


                                        {/if}



                                    </tr>



                                </table>


                            {/if}



                            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="zhucaidan" id="table5">
                                <tr>
                                    <td height="29" onclick="list('5')">
                                        <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                            <tr>

                                                <td width="85%">

                                                    {*                                                        <img name="img5" id="img5" src="{$WebSiteUrl}/images/ico04.png" width="12" height="12"> *}

                                                    {*                                                        <span style=' display: inline-block; width: 18px;'>&nbsp;</span>*}

                                                    <a href="javascript:vold(0)" target="mainFrame" class="left-font03 left-font" >统计管理</a>
                                                </td>

                                            </tr>
                                        </table> 
                                    </td>
                                </tr>
                            </table>
                            <table id="subtree5" style="DISPLAY: none" width="100%" border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">

                                {if $auth_result[16]==1}
                                    <tr>

                                        <td width="100%">

                                            <div class='left-a' >
                                                <a style='' href="{$WebSiteUrl}/pageredirst.php?action=registration&functionname=registrationCount" target="mainFrame" class="left-fontSmall" >签到统计</a>

                                            </div>
                                        </td>

                                    </tr>

                                {/if}


                                {if $auth_result[19]==1}
                                    <tr>

                                        <td width="100%">

                                            <div class='left-a' >
                                                <a style='' href="{$WebSiteUrl}/pageredirst.php?action=question&functionname=questionCount" target="mainFrame" class="left-fontSmall">问卷统计</a>

                                            </div>
                                        </td>

                                    </tr>

                                {/if}


                                {if $auth_result[3]==1}
                                    <tr>

                                        <td width="100%">

                                            <div class='left-a' >

                                                <a  style='' href="{$WebSiteUrl}/pageredirst.php?action=user&functionname=userList" target="mainFrame" class="left-fontSmall" >客户信息</a>

                                            </div>

                                        </td>
                                    </tr>

                                {/if}

                            </table>






                            {if $auth_result[20]==1}

                                <!--                   兑换开始-->
                                <table width="100%" border="0" cellpadding="0" cellspacing="0" class=" zhucaidan" id="table6">
                                    <tr>
                                        <td height="29" onclick="list('6')">
                                            <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                                <tr>

                                                    <td width="85%">

                                                        {*                                                        <img name="img6" id="img6" src="{$WebSiteUrl}/images/ico04.png" width="12" height="12">*}

                                                        {*                                                        <span style=' display: inline-block; width: 18px;'>&nbsp;</span>*}
                                                        <a href="javascript:vold(0)" target="mainFrame" class="left-font03 left-font" >设置管理</a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                                <table id="subtree6" style="DISPLAY: none" width="100%" border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">

                                    {if $auth_result[21]==1}
                                        <tr>

                                            <td width="100%">

                                                <div class='left-a' >
                                                    <a style='' href="{$WebSiteUrl}/pageredirst.php?action=weixinuser&functionname=weixinuser" target="mainFrame" class="left-fontSmall" >微信数据</a>

                                                </div>
                                            </td>

                                        </tr>

                                    {/if}




                                    {if $auth_result[17]==1}

                                        <tr>

                                            <td width="100%">

                                                <div class='left-a' >
                                                    <a style='' href="{$WebSiteUrl}/pageredirst.php?action=activty&functionname=activty" target="mainFrame" class="left-fontSmall" >活动</a>

                                                </div>
                                            </td>



                                        </tr>

                                    {/if}


                                    <tr>

                                        <td width="100%">

                                            <div class='left-a' >

                                                <a  style='' href="{$WebSiteUrl}/pageredirst.php?action=company&functionname=wifiEdit" target="mainFrame" class="left-fontSmall" >wifi设置</a>

                                            </div>

                                        </td>
                                    </tr>


                                    <tr>

                                        <td width="100%">

                                            <div class='left-a' >

                                                <a  style='' href="{$WebSiteUrl}/pageredirst.php?action=company&functionname=phoneEdit" target="mainFrame" class="left-fontSmall" >联系客服</a>

                                            </div>

                                        </td>
                                    </tr>
                                    <tr>

                                        <td width="100%">

                                            <div class='left-a' >

                                                <a  style='' href="{$WebSiteUrl}/pageredirst.php?action=company&functionname=groupMessage" target="mainFrame" class="left-fontSmall" >消息群发</a>

                                            </div>

                                        </td>
                                    </tr>




                                    {if $auth_result[1000]==1}

                                        <tr>

                                            <td width="100%">

                                                <div class='left-a' >
                                                    <a style='' href="{$WebSiteUrl}/pageredirst.php?action=weixin&functionname=weixincustom" target="mainFrame" class="left-fontSmall" >微信内容配置</a>

                                                </div>
                                            </td>

                                        </tr>

                                    {/if}

                                    {if $auth_result[22]==1}

                                        <tr>

                                            <td width="100%">

                                                <div class='left-a' >
                                                    <a style='' href="{$WebSiteUrl}/pageredirst.php?action=admin&functionname=admin" target="mainFrame" class="left-fontSmall">管理员账号</a>

                                                </div>
                                            </td>

                                        </tr>

                                    {/if}

                                    {if $auth_result[23]==1}

                                        <tr>

                                            <td width="100%">

                                                <div class='left-a' >
                                                    <a style='' href="{$WebSiteUrl}/pageredirst.php?action=admin&functionname=setAccount" target="mainFrame" class="left-fontSmall" >重置账户密码</a>

                                                </div>
                                            </td>

                                        </tr>

                                    {/if}


                                </table>

                            {/if}

                            {if $auth_result[24]==1}

                                <!--                   兑换开始-->
                                <table width="100%" border="0" cellpadding="0" cellspacing="0" class="zhucaidan " id="table7">
                                    <tr>
                                        <td height="29" onclick="list('7')">
                                            <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                                <tr>

                                                    <td width="85%">

                                                        {*                                                        <img name="img7" id="img7" src="{$WebSiteUrl}/images/ico04.png" width="12" height="12">*}

                                                        {*                                                        <span style=' display: inline-block; width: 21px;'>&nbsp;</span>*}

                                                        <a href="javascript:vold(0)" target="mainFrame" class="left-font03 left-font" >短信模块</a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                                <table id="subtree7" style="DISPLAY: none" width="100%" border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">

                                    {if $auth_result[25]==1}
                                        <tr>



                                            <td width="100%">

                                                <div class='left-a' >

                                                    <a style='' href="{$WebSiteUrl}/pageredirst.php?action=SMS&functionname=SMSindex" target="mainFrame" class="left-fontSmall" >客服短信</a>

                                                </div>
                                            </td>

                                        </tr>

                                    {/if}

                                </table>


                            {/if}

                            {if $auth_result[26]==1}
                                <!--                   兑换开始-->
                                <table width="100%" border="0" cellpadding="0" cellspacing="0" class=" zhucaidan" id="table8">
                                    <tr>
                                        <td height="29" onclick="list('8')">
                                            <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                                <tr>

                                                    <td width="85%">

                                                        {*                                                        <img name="img8" id="img8" src="{$WebSiteUrl}/images/ico04.png" width="12" height="12">*}
                                                        {*                                                        <span style=' display: inline-block; width: 18px;'>&nbsp;</span>*}
                                                        <a href="javascript:vold(0)" target="mainFrame" class="left-font03 left-font" >优惠模块</a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                                <table id="subtree8" style="DISPLAY: none" width="100%" border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">

                                    {if $auth_result[27]==1}
                                        <tr>

                                            <td width="100%">

                                                <div class='left-a' >
                                                    <a style='' href="{$WebSiteUrl}/pageredirst.php?action=promoCode&functionname=promoCodeCheck" target="mainFrame" class="left-fontSmall" >验证优惠码</a>

                                                </div>
                                            </td>

                                        </tr>

                                    {/if}

                                    {if $auth_result[28]==1}

                                        <tr>

                                            <td width="100%">

                                                <div class='left-a' >
                                                    <a style='' href="{$WebSiteUrl}/pageredirst.php?action=promoCode&functionname=addCode" target="mainFrame" class="left-fontSmall" >生成优惠码</a>

                                                </div>
                                            </td>

                                        </tr>

                                    {/if}

                                    {if $auth_result[29]==1}
                                        <tr>

                                            <td width="100%">

                                                <div class='left-a' >
                                                    <a style='' href="{$WebSiteUrl}/pageredirst.php?action=promoCode&functionname=codeList" target="mainFrame" class="left-fontSmall" >优惠码列表</a>

                                                </div>
                                            </td>

                                        </tr>

                                    {/if}

                                </table>

                            {/if}

                            <!-- 提示模块开始 -->
                            {if $auth_result[30] == 1}

                                <table width="100%" border="0" cellpadding="0" cellspacing="0" class=" zhucaidan " id="table12">
                                    <tr>
                                        <td height="29" onclick="list('12')">
                                            <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                                <tr>

                                                    <td width="85%">

                                                        {*                                                        <img name="img12" id="img12" src="{$WebSiteUrl}/images/ico04.png" width="12" height="12">*}

                                                        {*                                                        <span style=' display: inline-block; width: 18px;'>&nbsp;</span>*}
                                                        <a href="javascript:vold(0)" target="mainFrame" class="left-font03 left-font" >提示模块</a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                                <table id="subtree12" style="DISPLAY: none" width="100%" border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">

                                    {if $auth_result[31]==1}
                                        <tr>

                                            <td width="100%">

                                                <div class='left-a' >
                                                    <a  style='' href="{$WebSiteUrl}/pageredirst.php?action=remind&functionname=remind" target="mainFrame" class="left-fontSmall" >提示模块</a>

                                                </div>
                                            </td>

                                        </tr>

                                    {/if}



                                </table>
                            {/if}


                            <!-- 统计模块  statistics -->
                            {if $auth_result[32] == 1}

                                <table width="100%" border="0" cellpadding="0" cellspacing="0" class=" zhucaidan" id="table13">
                                    <tr>
                                        <td height="29" onclick="list('13')">
                                            <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                                <tr>

                                                    <td width="85%">

                                                        {*                                                        <img name="img13" id="img13" src="{$WebSiteUrl}/images/ico04.png" width="12" height="12">*}

                                                        {*                                                        <span style=' display: inline-block; width: 18px;'>&nbsp;</span>*}

                                                        <a href="javascript:vold(0)" target="mainFrame" class="left-font03 left-font" >统计模块</a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                                <table id="subtree13" style="DISPLAY: none" width="100%" border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">

                                    {if $auth_result[33]==1}
                                        <tr>

                                            <td width="100%">

                                                <div class='left-a' >

                                                    <a style='' href="{$WebSiteUrl}/pageredirst.php?action=statistics&functionname=statistics" target="mainFrame" class="left-fontSmall" >统计模块</a>

                                                </div>
                                            </td>

                                        </tr>

                                    {/if}

                                    {if $auth_result[34]==1}
                                        <tr>

                                            <td width="100%">

                                                <div class='left-a' >

                                                    <a style='' href="{$WebSiteUrl}/pageredirst.php?action=exchange&functionname=exchangeTotle" target="mainFrame" class="left-fontSmall" >礼品统计</a>

                                                </div>
                                            </td>

                                        </tr>

                                    {/if}


                                    <tr>

                                        <td width="100%">

                                            <div class='left-a' >

                                                <a style='' href="{$WebSiteUrl}/pageredirst.php?action=exchange&functionname=exchangeTotle" target="mainFrame" class="left-fontSmall" >定时</a>

                                            </div>
                                        </td>

                                    </tr>


                                </table>
                            {/if}

                            <!-- 文案详情 -->


                            <!--                    公司模块开始-->
                            <table width="100%" border="0" cellpadding="0" cellspacing="0" class=" zhucaidan " id="table120">
                                <tr>
                                    <td height="29" onclick="list('120')">
                                        <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                            <tr>

                                                <td width="85%">

                                                    {*                                                        <img name="img1" id="img1" src="{$WebSiteUrl}/images/ico04.png" width="12" height="12">*}
                                                    {*                                                        <span style=' display: inline-block; width: 18px;'>&nbsp;</span>*}
                                                    <a href="javascript:vold(0)" target="mainFrame" class="left-font03 left-font" >系统管理</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <table id="subtree120" style="DISPLAY: none" width="100%" border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">



                                <tr>

                                    <td width="100%">

                                        <div class='left-a' >

                                            <a  style='' href="{$WebSiteUrl}/pageredirst.php?action=company&functionname=cardInfoConfig" target="mainFrame" class="left-fontSmall" >会员卡说明</a>

                                        </div>

                                    </td>
                                </tr>


                                <tr>

                                    <td width="100%">

                                        <div class='left-a' >

                                            <a  style='' href="{$WebSiteUrl}/pageredirst.php?action=company&functionname=storeInfo" target="mainFrame" class="left-fontSmall" >适用门店以及地址</a>

                                        </div>

                                    </td>
                                </tr>

                                <tr>

                                    <td width="100%">

                                        <div class='left-a' >

                                            <a  style='' href="{$WebSiteUrl}/pageredirst.php?action=company&functionname=official&id=10" target="mainFrame" class="left-fontSmall" >报手机号就能用卡啦！</a>

                                        </div>

                                    </td>
                                </tr>



                                <tr>

                                    <td width="100%">

                                        <div class='left-a' >

                                            <a  style='' href="{$WebSiteUrl}/pageredirst.php?action=company&functionname=official&id=1" target="mainFrame" class="left-fontSmall" >微服务</a>

                                        </div>

                                    </td>
                                </tr>




                                <tr>

                                    <td width="100%">

                                        <div class='left-a' >

                                            <a  style='' href="{$WebSiteUrl}/pageredirst.php?action=company&functionname=official&id=2" target="mainFrame" class="left-fontSmall" >移动商务通</a>

                                        </div>

                                    </td>
                                </tr>


                                <tr>

                                    <td width="100%">

                                        <div class='left-a' >

                                            <a  style='' href="{$WebSiteUrl}/pageredirst.php?action=company&functionname=official&id=4" target="mainFrame" class="left-fontSmall" >成功案例</a>

                                        </div>

                                    </td>
                                </tr>

                                <tr>

                                    <td width="100%">

                                        <div class='left-a' >

                                            <a  style='' href="{$WebSiteUrl}/pageredirst.php?action=company&functionname=official&id=5" target="mainFrame" class="left-fontSmall" >联系我们</a>

                                        </div>

                                    </td>
                                </tr>




                                <tr>

                                    <td width="100%">

                                        <div class='left-a' >

                                            <a  style='' href="{$WebSiteUrl}/pageredirst.php?action=company&functionname=official&id=7" target="mainFrame" class="left-fontSmall" >在线客服</a>

                                        </div>

                                    </td>
                                </tr>
                            </table>

                        </td>
                    </tr>
                </table>


            </div>
        </body>
    </html>
