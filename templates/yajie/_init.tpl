
        <script src="{$WebSiteUrl}/uploadify/jquery.uploadify.min.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="{$WebSiteUrl}/uploadify/uploadify.css" />

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

 <div id='record'></div>

        <div>



            <div style="" class='package'>


                <p>组件</p>


                <div class="draglist draggable"  title="标题" draggable="true" id='titlePackage'>标题</div>
                <div class="draglist draggable" title="文本框" draggable="true"  id='textPackage'>文本框</div>
                <div class="draglist draggable" title="图片" draggable="true" id='imagePackage'>小图</div>
                <div class="draglist draggable" title="图片" draggable="true" id='BigimagePackage'>大图</div>

            
            </div>
            <div style="float: left; min-height: 1200px;  height: 1200px; width: 900px;">


                <p>容器</p>

                <div id='testDiv' style=' width:900px;  height: 100%; background-color: #f5f5f5; '>

                    <div accept='title' id='titleArea' style='width: 870px; height: 50px; '>&nbsp;</div>


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


    websiteUrl = '{$WebSiteUrl}';





</script>

<script src="{$WebSiteUrl}/js/Package/Package.js" type="text/javascript"></script>

<script src="{$WebSiteUrl}/js/Package/Canvas.js" type="text/javascript"></script>

<script>

    var listArray = new Array('titlePackage', 'textPackage', 'imagePackage', 'BigimagePackage');

    var listType = new Array('title', 'text', 'smallimage', 'bigimage');

    var package = new packAgeList(listArray, listType);

    package.init();
    
    
    function preview(){
        
        
    
    }

</script>