<?php /* Smarty version Smarty-3.0-RC2, created on 2014-07-04 16:25:19
         compiled from "/web/www/weixin_crm//templates/yajie/activty/activtyEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:67318018353b664efb58a24-73676280%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92de5de7788c18a3d30a4e855d28f136c22f0fbc' => 
    array (
      0 => '/web/www/weixin_crm//templates/yajie/activty/activtyEdit.tpl',
      1 => 1404443590,
    ),
  ),
  'nocache_hash' => '67318018353b664efb58a24-73676280',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/web/www/weixin_crm/Smarty/libs/plugins/modifier.date_format.php';
?><html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title></title>
           <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/simditor/styles/font-awesome.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/simditor/styles/simditor.css" />

        <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/simditor/scripts/js/simditor-all.js"></script>

        <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css"> 

        <link href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/css/bootstrap-datetimepicker.css" rel="stylesheet" media="screen">

        <link href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/css/crm_table_style_<?php echo $_smarty_tpl->getVariable('source')->value;?>
.css" rel="stylesheet">

        <script>
           

             $(function() {

                             editor = new Simditor({
                                textarea: $('#activity_html'),
                                pasteImage: true,
                                toolbar: [
                                    'title',
                                    'bold',
                                    'italic',
                                    'underline',
                                    'strikethrough',
                                    'ol',
                                    'ul',
                                    'blockquote',
                                    'code',
                                    'table',
                                    'link',
                                    'image',
                                    'hr',
                                    'indent',
                                    'outdent',
                                ],
                            });

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
             <div class="navBarStyle">
    当前位置：任务管理 > 添加活动
</div>

<div id="errorMessage" class="alert alert-danger errorMessage"></div>
<div style="margin-left:15px;margin-top:15px;">
    <div style="width: 1000px; margin: 0 auto;">
        <form class="form-horizontal" action="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=activty&functionname=activtyUpdate" method="post">

            <input type='hidden' name='activity_id' id='activity_id' value='<?php echo $_smarty_tpl->getVariable('info')->value['activity_id'];?>
'>
            <div class="form-group"> 
                <label  class="col-sm-2 control-label labelWidth">活动名称:</label>
                <div class="col-sm-2">
                    <input class="form-control inputWidth" type="text" value="<?php echo $_smarty_tpl->getVariable('info')->value['activity_name'];?>
" name="activity_name" id="activity_name">
                </div>
            </div> 
        <!--     <div class="form-group"> 
                <label for="inputEmail3" class="col-sm-2 control-label labelWidth">活动开始时间:</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control inputWidth" value="" name="  activity_begin_time" id="activity_begin_time">
                </div>
            </div>  -->
            <div class="form-group"> 
                <label  class="col-sm-2 control-label labelWidth">结束时间:</label>
                <div class="col-sm-2">

                    <input class="form-control inputWidth " size="16" type="text" value="<?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('info')->value['activity_end_time'],'%Y-%m-%d');?>
" name='activity_end_time' id='activity_end_time' data-link-format="yyyy-mm-dd"  data-date="" data-date-format="yyyy-mm-dd "  readonly>
                
                </div>
            </div>
            <div class="form-group"> 
                <label class="col-sm-2 control-label labelWidth">活动内容</label>
               
              

                  <div class="col-sm-2" style='width:800px;height:auto'>

                                            <textarea id="activity_html" name="activity_html" style=""><?php echo $_smarty_tpl->getVariable('info')->value['activity_html'];?>
</textarea>

                     </div>

                                       

        </div>

          <p style=" margin-left: 710px;"><button id="addButton" class="btn btn-info">确认添加</button></p>
               
            </div>

           
          
            
        </form>
    </div>
</div>
    </body>
</html>



<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/js/rexexTest.js"></script>

<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/js/bootstrap-datetimepicker.js"></script>

<script>

$('#activity_end_time').datetimepicker({
    language:  'fr',
    weekStart: 1,
    todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    minView: 2,
    forceParse: 0
});

$("#addButton").click(function(){
    $("#errorMessage").hide();

    $("#errorMessage").html();

    var errorMessage="";

    var alertFlag=false;

    var  html = document.getElementById('activity_html').value; // 原生API
  
    //html = editor.html();

    var a  = editor.getValue();

    html = document.getElementById('activity_html').value; // 原生API

    if($("#activity_name").val()==""){
        errorMessage+="活动名称不能为空 <br>";

        alertFlag=true;
    }

     if($("#activity_end_time").val()==""){
        errorMessage+="活动结束时间不能为空 <br>";

        alertFlag=true;
    }

    if(html==""){
        errorMessage+="活动内容不能为空 <br>";

        alertFlag=true;
    }

    if(alertFlag){ 

        $("#errorMessage").show();

        $("#errorMessage").html(errorMessage);

        return false;
    }

   
}); 
</script>