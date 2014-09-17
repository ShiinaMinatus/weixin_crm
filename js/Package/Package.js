
var packAgeList;


packAgeList = function(packageName, packageType) {

    if (packageName == '') {

        packageArrayList = ['titlePackage', 'textPackage', 'imagePackage', 'BigimagePackage'];

    } else {

        packageArrayList = packageName;
    }

    if (packageType == '') {

        packageListType = ['title', 'text', 'smallimage', 'bigimage'];

    } else {

        packageListType = packageType;
    }

}

function searchValInArray(targeId) {


    for (var y = 0; y < packageArrayList.length; y++) {

        if (packageArrayList[y] == targeId) {

            return y;

            break;

        }

    }

}


packAgeList.prototype.init = function() {



    for (var i = 0; i < packageArrayList.length; i++) {
        /**
         * 实现组件 拖动事件
         */



        $('#' + packageArrayList[i])[0].ondragstart = function(ev) {


            var targeId = ev.target.id;

            ev.dataTransfer.effectAllowed = "move";
            ev.dataTransfer.setData("text", ev.target.innerHTML);
            ev.dataTransfer.setDragImage(ev.target, 0, 0);

            var key = searchValInArray(targeId);

            var timestamp = (new Date()).valueOf();

            eleType = packageListType[key] + timestamp + 'Html';

            eleT = packageListType[key];

            /*
             * 根据类型 生成html
             */
            switch (eleT) {

                case 'smallimage':

                    var uploadImageId = eleType + 'imageId';


                    var closeHtml = '<span class="closeSpan" style="vertical-align:top; margin: 0 10px 0 10px; cursor: pointer" onclick="judgePageWhetherElement(this)">X</span>';

                    var textHtml = '<img src="' + websiteUrl + '/images/smallDefault.png" style="width:120px; height:120px;display: inherit; margin: 0px auto;" id="defaultImg" class="smallImage" belog="' + eleType + '">';

                    var textAreaHtml = '<span class="smallImage" belog="' + eleType + '"  style="width: 120px;margin: 0 10px 0 10px; display:inline-block"  ><span class="smallImage" id="defaultImgDiv" belog="' + eleType + '" >' + textHtml + '</span><span class="upload" belog="' + eleType + '"><input class="smallImageUploads" belog="' + eleType + '"  id="file_upload_' + uploadImageId + '"  type="file" multiple="true" /></span></span>' + closeHtml;

                    currentDivHtmlContent = textAreaHtml;

                    uploadImageIdFina = uploadImageId;
                    var configHtml = '<div class="smallImage " belog="' + eleType + '" id="' + eleType + '" contenteditable="false" style="clear:both;position: relative;min-height:139px; word-wrap : break-word ;text-align:center " belog="' + eleType + '"> </div>';


                    objectType = 1;
                    break;


                case 'bigimage':


                    var uploadImageId = eleType + 'imageId';


                    var closeHtml = '<span  class="closeSpan" style="vertical-align:top; margin: 0 10px 0 10px; cursor: pointer" onclick="$(this).parent().parent().remove();$(this).remove()">X</span>';

                    var textAreaHtml = '<div class="defaultImg" id="defaultImgDiv"  belog="' + eleType + '"><img src="' + websiteUrl + '/images/bigDefault.png" style="width:250px; height:250px;margin:0 auto;" id="defaultImg" class="bigImg" belog="' + eleType + '">' + closeHtml + '</div><div class="upload"><input id="file_upload_' + uploadImageId + '" class="inputUploads"  type="file" multiple="true" /></div>';

                    var configHtml = '<div class="bigImageDiv textHeight none " align="center" belog="' + eleType + '" id="' + eleType + '" contenteditable="false" style="clear:both;position: relative; word-wrap : break-word ;min-height:180px "> </div>';

                    currentDivHtmlContent = textAreaHtml;

                    uploadImageIdFina = uploadImageId;

                    objectType = 2;


                    break;

                case 'text':


                    var closeHtml = '<span  class="closeSpan" style=" outline: none;cursor: pointer;position: absolute;" onclick="$(this).parent().parent().remove()">X</span>';

                    var textAreaHtml = '<div class="textArea"  style="width:90%; margin:0 auto;"   belog="' + eleType + '" ><div style="float:left; " contenteditable="true"><p style="outline: none;" class="textArea" belog="' + eleType + '" >本可视化布局程序在HTML5浏览器上运行更加完美, 能实现自动本地化保存, 即使关闭了网页, 下一次打开仍然能恢复上一次的操作.</p></div>' + closeHtml + '</div>';

                    var configHtml = '<div class="textDiv textHeight none" belog="' + eleType + '" id="' + eleType + '"  style="position: relative; word-wrap : break-word;"> </div>';

                    currentDivHtmlContent = textAreaHtml;

                    objectType = 3;

                    break;
            }

            /*
             * 生成主容器
             */


            currentDivHtml = configHtml;

        }

        $('#' + packageArrayList[i])[0].onselectstart = function() {
            return false;
        };

        $('#' + packageArrayList[i])[0].ondragend = function(ev) {
            ev.dataTransfer.clearData("text");


            return false
        };

    }
}


/*
 * 判断该页面是否还有元素存在
 */
function judgePageWhetherElement(obj) {

    /*
     *  记录 当前页面中 有多少的元素
     */

    var number = 0;

    /*
     * 获取 上一层元素的  belog 属性 
     */

    var belogHtml = $(obj).prev().attr('belog');
    
    var fatherDiv = $(obj).parent().attr('id');

    /**
     * 删除 该元素的
     */

    $(obj).prev().remove();

    $(obj).remove();
    /*
     * 循环该div下的 所有的元素 判断有几个
     */

    $('#' + belogHtml).children('.smallImage').each(function() {
        number++;

    })
    
  
    if (parseInt(number) === 0) {
        
    
        $('#'+fatherDiv).remove();
    
    }
}
