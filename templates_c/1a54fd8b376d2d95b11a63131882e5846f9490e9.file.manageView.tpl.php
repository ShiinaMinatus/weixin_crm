<?php /* Smarty version Smarty-3.0-RC2, created on 2014-09-10 11:27:08
         compiled from "/web/www/weixin_crm//templates/yajie/user/manageView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:494431430540fc50c2b0474-38286566%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a54fd8b376d2d95b11a63131882e5846f9490e9' => 
    array (
      0 => '/web/www/weixin_crm//templates/yajie/user/manageView.tpl',
      1 => 1410319625,
    ),
  ),
  'nocache_hash' => '494431430540fc50c2b0474-38286566',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
<style>
    .seachInput{
        width: 340px;
        height: 30px;
    }
    .dataArea{
        text-align: left;
        width: 60%;
        min-width: 500px;
        margin: 0 auto;
        height: 190px;
    }
    table tr>th{
        text-align: center;
    }
    table tr>td{
        text-align: center;
        vertical-align:middle !important;
    }
    .userMangerTitle{
        color: rgb(91,91,91);
        font-size: 2.5em;
        margin-top: 15px;
        text-align: center;
    }
    .seachButton{
        height: 30px;
    }
    .userDateArea{
        padding-left: 25px;
        width:30%;
        min-width: 280px;
        margin: 0 auto;
        text-align: left;
        border: 1px solid #000;
    }
    .buttonStyle{
        line-height:15px;
        width: 30px;
        height: 30px;
    }
    .numberSpan{
        width: 50px;
        display: inline-block;
    }
    .inlinDisplay{
        display: inline-block;
    }
    .groupInput{
        width: 30%;
        margin: 0 auto;
    }
    .inlineWidth{
        width: 150px !important;
        height: auto;
    }
</style>
<div class="userMangerTitle">积分信息管理</div>

<div style="text-align: center; padding-top: 100px;">
    <div class="input-group groupInput">
        <input  type="text" class="form-control" style="" placeholder="请输入卡号" id="userCard" name="selectText">

        <div style='height: 10px;'>&nbsp;</div>

        <input type="text" class="form-control" style="" placeholder="请输入金额" id="userMoney" name="selectText">


    </div>


    <div class="modal fade" id='myModal'>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">Modal title</h4>
                </div>
                <div class="modal-body">
                    <p>One fine body&hellip;</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


    <span class="input-group-btn">
        <button class="btn btn-default"id="getUser" accesskey="Enter" type="button">确定</button>
    </span>
    
    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>

    <script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/js/jquery-1.9.1.js"></script>
    <script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/js/rexexTest.js"></script>
    <script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/js/timeClass.js"></script>
    <script>

        $(function() {
                
                $('#myModal').modal();
        })






    </script>