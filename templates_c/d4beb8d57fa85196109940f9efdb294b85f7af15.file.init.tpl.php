<?php /* Smarty version Smarty-3.0-RC2, created on 2014-07-25 11:42:24
         compiled from "/web/www/weixin_crm//templates/yajie/stencil/init.tpl" */ ?>
<?php /*%%SmartyHeaderCode:173749999653d1d22069e7b5-25398876%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4beb8d57fa85196109940f9efdb294b85f7af15' => 
    array (
      0 => '/web/www/weixin_crm//templates/yajie/stencil/init.tpl',
      1 => 1406258935,
    ),
  ),
  'nocache_hash' => '173749999653d1d22069e7b5-25398876',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/css/<?php echo $_smarty_tpl->getVariable('source')->value;?>
_css.css" rel="stylesheet" type="text/css"></link>



        <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js" type="text/javascript">
        </script><!-- 最新的 Bootstrap 核心 JavaScript 文件 -->



        <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css" />
        <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>


        <script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/uploadify/jquery.uploadify.min.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/uploadify/uploadify.css" />




        <script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js" type="text/javascript">
        </script>
        <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css" type="text/css">




            <title></title>


            <style>

                *{
                    font-family:"黑体","宋体",Serif;
                }
                
                
                p{
                    margin: 0;
                }

                .draglist{

                    padding: 10px;
                    margin-bottom: 5px;
                    border: 2px dashed #ccc;
                    background-color: #eee;
                    cursor: move;

                    width: 100px;
                }

                #draggable { width: 150px; height: 150px; padding: 0.5em; }

                .draglist:hover {
                    border-color: #cad5eb;
                    background-color: #f0f3f9;
                }

                .package{

                    float: left; height: 200px; width: 105px;
                }

                .publicDash{

                    border: 1px dashed #ccc;

                }
                
                .white{
                    
                    background-color: white;
                }

                .textArea{

                    display: block;
                }

                .textHeight{

                    min-height: 80px;
                }
                
                .smamllImageHeight{
                    
                    min-height: 139px;
                }

                .publicHeight{

                    min-height: 100px;
                }

                .doc-title {
                    border: 0 none;
                    display: block;
                    font-size: 22px;
                    font-weight: bold;

                    line-height: 48px;

                    min-height: 22px;
                    overflow: hidden;

                    resize: none;
                    text-align: center;
                    width: 100%;
                }

            </style>


    </head>

    <body >


        <div id='record'></div>

        <div>



            <div style="" class='package'>


                <p>组件</p>


                <div class="draglist draggable"  title="标题" draggable="true" id='titlePackage'>标题</div>
                <div class="draglist draggable" title="文本框" draggable="true"  id='textPackage'>文本框</div>
                <div class="draglist draggable" title="图片" draggable="true" id='imagePackage'>小图</div>
                <div class="draglist draggable" title="图片" draggable="true" id='BigimagePackage'>大图</div>

                <button  id='previewButton' class='btn btn-default'>预览</button>
            </div>
            <div style="float: left; min-height: 1200px;  height: 1200px; width: 900px;">


                <p>容器</p>

                <div id='testDiv' style=' width:900px;  height: 100%; background-color: #f5f5f5; '>

                    <div accept='title' id='titleArea' style='width: 870px; height: 50px; '>&nbsp;</div>


                    <div style=' height: 900px;' belog='divPack' id='divPack' class='divPack'></div>

                </div>
            </div>



        </div>


        <!-- Modal -->
        <div class="modal fade" id="Preview" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" style='width: 320px; height: 480px;'>
                <div class="modal-content" >
                    <div class="modal-header">
                        <!--  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> -->
                        <h4 class="modal-title" id="myModalLabel">预览界面为iphone4s</h4>
                    </div>
                    <div class="modal-body" style='width: 320px; min-height: 480px; padding:0;'>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="preview()">关闭</button>

                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->





    </body>


</html>





<!-- <script type="text/javascript" async="" src="http://www.google-analytics.com/ga.js"></script> -->
<script>



    eleType = null, eleT = null, packageList = null, packageListType = null, websiteUrl = null;

    currentParameter = null;
    currentDivHtml = null;
    currentDivHtmlContent = null;
    currentDivObject = null;
    
    objectType = null;
    
    uploadImageIdFina = null;


    websiteUrl = '<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
';
    $('#previewButton').click(function() {

        $("#Preview").modal();
        
        
        
        
        var titleContent = $('#titleArea').html();
        
        var packContent = $('#divPack').html();
        
        var bobyPreview = titleContent + packContent;
        
        
         $('.modal-body').html(bobyPreview);
         
         $('.modal-body').find('.closeSpan').remove();
               
         $('.modal-body').find("[contenteditable = 'true']").attr('contenteditable','false');
            
            $('.modal-body .upload').remove();
        

       
    })




</script>

<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/js/Package/Package.js" type="text/javascript"></script>

<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/js/Package/Canvas.js" type="text/javascript"></script>

<script>

    var listArray = new Array('titlePackage', 'textPackage', 'imagePackage', 'BigimagePackage');

    var listType = new Array('title', 'text', 'smallimage', 'bigimage');

    var package = new packAgeList(listArray, listType);

    package.init();
    
    
    function preview(){
        
        
    
    }

</script>