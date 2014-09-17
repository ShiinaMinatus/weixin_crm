<?php /* Smarty version Smarty-3.0-RC2, created on 2014-09-17 17:06:53
         compiled from "/web/www/weixin_crm//templates/yajie/company/../_init.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19996254754194f2da85612-22955097%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '239130dd5bd036f0c5d2cfaf1b77b9bacf83655f' => 
    array (
      0 => '/web/www/weixin_crm//templates/yajie/company/../_init.tpl',
      1 => 1410944716,
    ),
  ),
  'nocache_hash' => '19996254754194f2da85612-22955097',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_math')) include '/web/www/weixin_crm/Smarty/libs/plugins/function.math.php';
?>
        <script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/uploadify/jquery.uploadify.min.js?ver=<?php echo smarty_function_math(array('equation'=>rand(125,324)),$_smarty_tpl->smarty,$_smarty_tpl);?>
" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/uploadify/uploadify.css" />

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

                    min-height: 40px;
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

                    line-height: 43px;

                    min-height: 22px;
                    overflow: hidden;

                    resize: none;
                    text-align: center;
                    width: 100%;
                }

            </style>




 <div id='record'></div>

        <div>



            <div style="" class='package'>


                <p>组件</p>


                <div class="draglist draggable"   draggable="true" id='titlePackage'>标题</div>
                <div class="draglist draggable"  draggable="true"  id='textPackage'>文本框</div>
                <div class="draglist draggable" draggable="true" id='imagePackage'>小图</div>
                <div class="draglist draggable"  draggable="true" id='BigimagePackage'>大图</div>

            
            </div>
            <div style="float: left;  " class='init_class'>


                <p>容器</p>

                <div id='testDiv' style='height: 100%; background-color: #f5f5f5; '>

                    <div accept='title' id='titleArea' style=' height: 50px; position: relative;'>&nbsp;</div>


                    <div style=' height: 900px;overflow: auto;' belog='divPack' id='divPack' class='divPack'></div>

                </div>
            </div>



        </div>


      


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