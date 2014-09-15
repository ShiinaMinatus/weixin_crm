<?php /* Smarty version Smarty-3.0-RC2, created on 2014-09-15 14:31:10
         compiled from "/web/www/weixin_crm//templates/yajie/left.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1566934586541687ae1c1427-56934829%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d8b99cafee6d5fc8c0d14e092db3abeece3a334' => 
    array (
      0 => '/web/www/weixin_crm//templates/yajie/left.tpl',
      1 => 1410762646,
    ),
  ),
  'nocache_hash' => '1566934586541687ae1c1427-56934829',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title></title>
        <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
        <style type="text/css">

            


            body{

                margin:0;
            }

        </style>
        <link href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/css/<?php echo $_smarty_tpl->getVariable('source')->value;?>
_css.css" rel="stylesheet" type="text/css">
    </head>
    <body style=''>

        <script>

            var root = '<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
';
        </script>
         


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
            </script>
            <div class="left_background" style=' width:200px;'>

                <table width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table01" style=''>
                    <tr>
                        <td>
                            




                            <!--                    公司模块开始-->
                            <table width="100%" border="0" cellpadding="0" cellspacing="0" class=" zhucaidan " id="table120">
                                <tr>
                                    <td height="29" onclick="list('120')">
                                        <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                            <tr>

                                                <td width="85%">

                                                    
                                                    
                                                    <a href="javascript:vold(0)" target="mainFrame" class="left-font03 left-font" >消费管理</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <table id="subtree120" style="DISPLAY: none" width="100%" border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">


                                <?php if ($_smarty_tpl->getVariable('auth_result')->value[4]==1){?>
                                    <tr>

                                        <td width="100%">



                                            <div class='left-a' >

                                                <a  style='' href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=user&functionname=pointAndMoneyManage" target="mainFrame" class="left-fontSmall" >消费积分管理</a>

                                            </div>

                                        </td>
                                    </tr>
                                <?php }?>


                            </table>






                            <?php if ($_smarty_tpl->getVariable('auth_result')->value[120]==1){?>
                                <!--                    公司模块开始-->
                                <table width="100%" border="0" cellpadding="0" cellspacing="0" class=" zhucaidan " id="table120">
                                    <tr>
                                        <td height="29" onclick="list('120')">
                                            <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                                <tr>

                                                    <td width="85%">

                                                        
                                                        
                                                        <a href="javascript:vold(0)" target="mainFrame" class="left-font03 left-font" >公司管理</a>
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

                                              <a  style='' href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=company&functionname=companyEdit" target="mainFrame" class="left-fontSmall" >公司信息</a>

                                            </div>

                                        </td>
                                    </tr>

                                   

                                </table>
                            <?php }?>





                            <?php if ($_smarty_tpl->getVariable('auth_result')->value[6]==1){?>

                                <!--                    积分开始-->
                                <table width="100%" border="0" cellpadding="0" cellspacing="0" class="zhucaidan" id="table2">
                                    <tr>
                                        <td height="29" onclick="list('2')">
                                            <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                                <tr>

                                                    <td width="85%">

                                                        
                                                        
                                                        <a href="javascript:vold(0)" target="mainFrame" class="left-font03 left-font" >预约管理</a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                                <table id="subtree2" style="DISPLAY: none" width="100%" border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">

                                    <?php if ($_smarty_tpl->getVariable('auth_result')->value[7]==1){?>
                                        <tr>

                                            <td width="100%">

                                                <div class='left-a' >
                                                    <a style='' href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=order&functionname=getOrderlist" target="mainFrame" class="left-fontSmall" >订单管理</a>

                                                </div>
                                            </td>

                                        </tr>

                                    <?php }?>

                                    <?php if ($_smarty_tpl->getVariable('auth_result')->value[8]==1){?>
                                        <tr>

                                            <td width="100%">


                                                <div class='left-a' >
                                                    <a style='' href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=order&functionname=orderAdd" target="mainFrame" class="left-fontSmall">新增预约</a>

                                                </div>

                                            </td>

                                        </tr>
                                    <?php }?>
                                </table>


                            <?php }?>

                            <?php if ($_smarty_tpl->getVariable('auth_result')->value[9]==1){?>

                                <!--                    微游戏开始-->
                                <table width="100%" border="0" cellpadding="0" cellspacing="0" class=" zhucaidan" id="table3">
                                    <tr>
                                        <td height="29" onclick="list('3')">
                                            <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                                <tr>

                                                    <td width="100%">

                                                        

                                                        

                                                        <a href="javascript:vold(0)" target="mainFrame" class="left-font03 left-font" >微游戏管理</a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                                <table id="subtree3" style="DISPLAY: none" width="100%" border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">

                                    <?php if ($_smarty_tpl->getVariable('auth_result')->value[10]==1){?>
                                        <tr>

                                            <td width="100%">
                                                <div class='left-a' >
                                                    <a style='' href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=gift&functionname=getBigWheelList" target="mainFrame" class="left-fontSmall">大转盘礼品列表</a>

                                                </div>
                                            </td>

                                        </tr>

                                    <?php }?>

                                    <?php if ($_smarty_tpl->getVariable('auth_result')->value[11]==1){?>

                                        <tr>

                                            <td width="100%">

                                                <div class='left-a' >
                                                    <a style='' href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=gift&functionname=getCardList" target="mainFrame" class="left-fontSmall" >刮刮卡礼品列表</a>

                                                </div>
                                            </td>
                                        </tr>

                                    <?php }?>

                                </table>


                            <?php }?>

                            <?php if ($_smarty_tpl->getVariable('auth_result')->value[12]==1){?>




                                <!--                   兑换开始-->
                                <table width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03 zhucaidan " id="table4">
                                    <tr>
                                        <td height="29" onclick="list('4')">
                                            <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                                <tr>

                                                    <td width="85%">

                                                        

                                                        
                                                        <a href="javascript:vold(0)" target="mainFrame" class="left-font03 left-font" >兑换管理</a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                                <table id="subtree4" style="DISPLAY: none" width="100%" border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">

                                    <?php if ($_smarty_tpl->getVariable('auth_result')->value[13]==1){?>
                                        <tr>

                                            <td width="100%">


                                                <div class='left-a' >


                                                    <a style='' href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=exchange&functionname=ExchangeList" target="mainFrame" class="left-fontSmall" >礼品列表</a>

                                                </div>
                                            </td>

                                        </tr>

                                    <?php }?>

                                    <?php if ($_smarty_tpl->getVariable('auth_result')->value[14]==1){?>
                                        <tr>

                                            <td width="100%">

                                                <div class='left-a' >
                                                    <a style='' href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=exchange&functionname=addExchangeItem" target="mainFrame" class="left-fontSmall">添加礼品</a>

                                                </div>
                                            </td>
                                        </tr>

                                    <?php }?>
                                    <?php if ($_smarty_tpl->getVariable('auth_result')->value[39]==1){?>

                                        <tr>

                                            <td width="100%">

                                                <div class='left-a' >
                                                    <a style='' href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=exchange&functionname=checkExchangeCode" target="mainFrame" class="left-fontSmall" >礼品验证</a>

                                                </div>
                                            </td>


                                        <?php }?>
                                        <?php if ($_smarty_tpl->getVariable('auth_result')->value[41]==1){?>

                                        <tr>

                                            <td width="100%">

                                                <div class='left-a' >
                                                    <a style='' href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=exchange&functionname=exchangeManagement" target="mainFrame" class="left-fontSmall" >礼品管理</a>

                                                </div>
                                            </td>


                                        <?php }?>



                                    </tr>



                                </table>


                            <?php }?>



                            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="zhucaidan" id="table5">
                                <tr>
                                    <td height="29" onclick="list('5')">
                                        <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                            <tr>

                                                <td width="85%">

                                                    

                                                    

                                                    <a href="javascript:vold(0)" target="mainFrame" class="left-font03 left-font" >统计管理</a>
                                                </td>

                                            </tr>
                                        </table> 
                                    </td>
                                </tr>
                            </table>
                            <table id="subtree5" style="DISPLAY: none" width="100%" border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">

                                <?php if ($_smarty_tpl->getVariable('auth_result')->value[16]==1){?>
                                    <tr>

                                        <td width="100%">

                                            <div class='left-a' >
                                                <a style='' href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=registration&functionname=registrationCount" target="mainFrame" class="left-fontSmall" >签到统计</a>

                                            </div>
                                        </td>

                                    </tr>

                                <?php }?>


                                <?php if ($_smarty_tpl->getVariable('auth_result')->value[19]==1){?>
                                    <tr>

                                        <td width="100%">

                                            <div class='left-a' >
                                                <a style='' href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=question&functionname=questionCount" target="mainFrame" class="left-fontSmall">问卷统计</a>

                                            </div>
                                        </td>

                                    </tr>

                                <?php }?>


                                <?php if ($_smarty_tpl->getVariable('auth_result')->value[3]==1){?>
                                    <tr>

                                        <td width="100%">

                                            <div class='left-a' >

                                                <a  style='' href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=user&functionname=userList" target="mainFrame" class="left-fontSmall" >客户信息</a>

                                            </div>

                                        </td>
                                    </tr>

                                <?php }?>

                            </table>






                            <?php if ($_smarty_tpl->getVariable('auth_result')->value[20]==1){?>

                                <!--                   兑换开始-->
                                <table width="100%" border="0" cellpadding="0" cellspacing="0" class=" zhucaidan" id="table6">
                                    <tr>
                                        <td height="29" onclick="list('6')">
                                            <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                                <tr>

                                                    <td width="85%">

                                                        

                                                        
                                                        <a href="javascript:vold(0)" target="mainFrame" class="left-font03 left-font" >设置管理</a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                                <table id="subtree6" style="DISPLAY: none" width="100%" border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">

                                    <?php if ($_smarty_tpl->getVariable('auth_result')->value[21]==1){?>
                                        <tr>

                                            <td width="100%">

                                                <div class='left-a' >
                                                    <a style='' href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=weixinuser&functionname=weixinuser" target="mainFrame" class="left-fontSmall" >微信数据</a>

                                                </div>
                                            </td>

                                        </tr>

                                    <?php }?>




                                    <?php if ($_smarty_tpl->getVariable('auth_result')->value[17]==1){?>

                                        <tr>

                                            <td width="100%">

                                                <div class='left-a' >
                                                    <a style='' href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=activty&functionname=activty" target="mainFrame" class="left-fontSmall" >活动</a>

                                                </div>
                                            </td>



                                        </tr>

                                    <?php }?>


                                    <tr>

                                        <td width="100%">

                                            <div class='left-a' >

                                                <a  style='' href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=company&functionname=wifiEdit" target="mainFrame" class="left-fontSmall" >wifi设置</a>

                                            </div>

                                        </td>
                                    </tr>


                                    <tr>

                                        <td width="100%">

                                            <div class='left-a' >

                                                <a  style='' href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=company&functionname=phoneEdit" target="mainFrame" class="left-fontSmall" >联系客服</a>

                                            </div>

                                        </td>
                                    </tr>

                                    


                                    <?php if ($_smarty_tpl->getVariable('auth_result')->value[1000]==1){?>

                                        <tr>

                                            <td width="100%">

                                                <div class='left-a' >
                                                    <a style='' href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=weixin&functionname=weixincustom" target="mainFrame" class="left-fontSmall" >微信内容配置</a>

                                                </div>
                                            </td>

                                        </tr>

                                    <?php }?>

                                    <?php if ($_smarty_tpl->getVariable('auth_result')->value[22]==1){?>

                                        <tr>

                                            <td width="100%">

                                                <div class='left-a' >
                                                    <a style='' href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=admin&functionname=admin" target="mainFrame" class="left-fontSmall">管理员账号</a>

                                                </div>
                                            </td>

                                        </tr>

                                    <?php }?>

                                    <?php if ($_smarty_tpl->getVariable('auth_result')->value[23]==1){?>

                                        <tr>

                                            <td width="100%">

                                                <div class='left-a' >
                                                    <a style='' href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=admin&functionname=setAccount" target="mainFrame" class="left-fontSmall" >重置账户密码</a>

                                                </div>
                                            </td>

                                        </tr>

                                    <?php }?>


                                </table>

                            <?php }?>

                            <?php if ($_smarty_tpl->getVariable('auth_result')->value[24]==1){?>

                                <!--                   兑换开始-->
                                <table width="100%" border="0" cellpadding="0" cellspacing="0" class="zhucaidan " id="table7">
                                    <tr>
                                        <td height="29" onclick="list('7')">
                                            <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                                <tr>

                                                    <td width="85%">

                                                        

                                                        

                                                        <a href="javascript:vold(0)" target="mainFrame" class="left-font03 left-font" >短信模块</a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                                <table id="subtree7" style="DISPLAY: none" width="100%" border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">

                                    <?php if ($_smarty_tpl->getVariable('auth_result')->value[25]==1){?>
                                        <tr>



                                            <td width="100%">

                                                <div class='left-a' >

                                                    <a style='' href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=SMS&functionname=SMSindex" target="mainFrame" class="left-fontSmall" >客服短信</a>

                                                </div>
                                            </td>

                                        </tr>

                                    <?php }?>

                                </table>


                            <?php }?>

                            <?php if ($_smarty_tpl->getVariable('auth_result')->value[26]==1){?>
                                <!--                   兑换开始-->
                                <table width="100%" border="0" cellpadding="0" cellspacing="0" class=" zhucaidan" id="table8">
                                    <tr>
                                        <td height="29" onclick="list('8')">
                                            <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                                <tr>

                                                    <td width="85%">

                                                        
                                                        
                                                        <a href="javascript:vold(0)" target="mainFrame" class="left-font03 left-font" >优惠模块</a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                                <table id="subtree8" style="DISPLAY: none" width="100%" border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">

                                    <?php if ($_smarty_tpl->getVariable('auth_result')->value[27]==1){?>
                                        <tr>

                                            <td width="100%">

                                                <div class='left-a' >
                                                    <a style='' href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=promoCode&functionname=promoCodeCheck" target="mainFrame" class="left-fontSmall" >验证优惠码</a>

                                                </div>
                                            </td>

                                        </tr>

                                    <?php }?>

                                    <?php if ($_smarty_tpl->getVariable('auth_result')->value[28]==1){?>

                                        <tr>

                                            <td width="100%">

                                                <div class='left-a' >
                                                    <a style='' href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=promoCode&functionname=addCode" target="mainFrame" class="left-fontSmall" >生成优惠码</a>

                                                </div>
                                            </td>

                                        </tr>

                                    <?php }?>

                                    <?php if ($_smarty_tpl->getVariable('auth_result')->value[29]==1){?>
                                        <tr>

                                            <td width="100%">

                                                <div class='left-a' >
                                                    <a style='' href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=promoCode&functionname=codeList" target="mainFrame" class="left-fontSmall" >优惠码列表</a>

                                                </div>
                                            </td>

                                        </tr>

                                    <?php }?>

                                </table>

                            <?php }?>

                            <!-- 提示模块开始 -->
                            <?php if ($_smarty_tpl->getVariable('auth_result')->value[30]==1){?>

                                <table width="100%" border="0" cellpadding="0" cellspacing="0" class=" zhucaidan " id="table12">
                                    <tr>
                                        <td height="29" onclick="list('12')">
                                            <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                                <tr>

                                                    <td width="85%">

                                                        

                                                        
                                                        <a href="javascript:vold(0)" target="mainFrame" class="left-font03 left-font" >提示模块</a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                                <table id="subtree12" style="DISPLAY: none" width="100%" border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">

                                    <?php if ($_smarty_tpl->getVariable('auth_result')->value[31]==1){?>
                                        <tr>

                                            <td width="100%">

                                                <div class='left-a' >
                                                    <a  style='' href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=remind&functionname=remind" target="mainFrame" class="left-fontSmall" >提示模块</a>

                                                </div>
                                            </td>

                                        </tr>

                                    <?php }?>



                                </table>
                            <?php }?>


                            <!-- 统计模块  statistics -->
                            <?php if ($_smarty_tpl->getVariable('auth_result')->value[32]==1){?>

                                <table width="100%" border="0" cellpadding="0" cellspacing="0" class=" zhucaidan" id="table13">
                                    <tr>
                                        <td height="29" onclick="list('13')">
                                            <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                                <tr>

                                                    <td width="85%">

                                                        

                                                        

                                                        <a href="javascript:vold(0)" target="mainFrame" class="left-font03 left-font" >统计模块</a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                                <table id="subtree13" style="DISPLAY: none" width="100%" border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">

                                    <?php if ($_smarty_tpl->getVariable('auth_result')->value[33]==1){?>
                                        <tr>

                                            <td width="100%">

                                                <div class='left-a' >

                                                    <a style='' href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=statistics&functionname=statistics" target="mainFrame" class="left-fontSmall" >统计模块</a>

                                                </div>
                                            </td>

                                        </tr>

                                    <?php }?>

                                    <?php if ($_smarty_tpl->getVariable('auth_result')->value[34]==1){?>
                                        <tr>

                                            <td width="100%">

                                                <div class='left-a' >

                                                    <a style='' href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=exchange&functionname=exchangeTotle" target="mainFrame" class="left-fontSmall" >礼品统计</a>

                                                </div>
                                            </td>

                                        </tr>

                                    <?php }?>


                                    <tr>

                                        <td width="100%">

                                            <div class='left-a' >

                                                <a style='' href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=exchange&functionname=exchangeTotle" target="mainFrame" class="left-fontSmall" >定时</a>

                                            </div>
                                        </td>

                                    </tr>


                                </table>
                            <?php }?>

                            <!-- 文案详情 -->


                            <!--                    公司模块开始-->
                            <table width="100%" border="0" cellpadding="0" cellspacing="0" class=" zhucaidan " id="table120">
                                <tr>
                                    <td height="29" onclick="list('120')">
                                        <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                            <tr>

                                                <td width="85%">

                                                    
                                                    
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

                                            <a  style='' href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=company&functionname=cardInfoConfig" target="mainFrame" class="left-fontSmall" >会员卡说明</a>

                                        </div>

                                    </td>
                                </tr>


                                <tr>

                                    <td width="100%">

                                        <div class='left-a' >

                                            <a  style='' href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=company&functionname=storeInfo" target="mainFrame" class="left-fontSmall" >适用门店以及地址</a>

                                        </div>

                                    </td>
                                </tr>

                                <tr>

                                    <td width="100%">

                                        <div class='left-a' >

                                            <a  style='' href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=company&functionname=official&id=10" target="mainFrame" class="left-fontSmall" >报手机号就能用卡啦！</a>

                                        </div>

                                    </td>
                                </tr>



                                <tr>

                                    <td width="100%">

                                        <div class='left-a' >

                                            <a  style='' href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=company&functionname=official&id=1" target="mainFrame" class="left-fontSmall" >微服务</a>

                                        </div>

                                    </td>
                                </tr>




                                <tr>

                                    <td width="100%">

                                        <div class='left-a' >

                                            <a  style='' href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=company&functionname=official&id=2" target="mainFrame" class="left-fontSmall" >移动商务通</a>

                                        </div>

                                    </td>
                                </tr>


                                <tr>

                                    <td width="100%">

                                        <div class='left-a' >

                                            <a  style='' href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=company&functionname=official&id=4" target="mainFrame" class="left-fontSmall" >成功案例</a>

                                        </div>

                                    </td>
                                </tr>

                                <tr>

                                    <td width="100%">

                                        <div class='left-a' >

                                            <a  style='' href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=company&functionname=official&id=5" target="mainFrame" class="left-fontSmall" >联系我们</a>

                                        </div>

                                    </td>
                                </tr>




                                <tr>

                                    <td width="100%">

                                        <div class='left-a' >

                                            <a  style='' href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=company&functionname=official&id=7" target="mainFrame" class="left-fontSmall" >在线客服</a>

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
