<?php /* Smarty version Smarty-3.0-RC2, created on 2014-09-13 13:16:15
         compiled from "/web/www/weixin_crm//templates/yajie/stencil/../_init.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9651932835413d31f066af3-98724193%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9598a46313b4f680df99465a7c2c4b250a8b52ca' => 
    array (
      0 => '/web/www/weixin_crm//templates/yajie/stencil/../_init.tpl',
      1 => 1410585112,
    ),
  ),
  'nocache_hash' => '9651932835413d31f066af3-98724193',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
 <div id='record'></div>

        <div>



            <div style="" class='package'>


                <p>组件</p>


                <div class="draglist draggable"  title="标题" draggable="true" id='titlePackage'>标题</div>
                <div class="draglist draggable" title="文本框" draggable="true"  id='textPackage'>文本框</div>
                <div class="draglist draggable" title="图片" draggable="true" id='imagePackage'>小图</div>
                <div class="draglist draggable" title="图片" draggable="true" id='BigimagePackage'>大图</div>

                <button  id='previewButton' class='btn btn-default'>预览</button>

                <button  id='saveButton' class='btn btn-default'>保存</button>
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