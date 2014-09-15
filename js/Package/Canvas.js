/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 * 画布初始化
 */
var $Canvas = $('#divPack')[0];

/*
 * 标题画布 初始化
 */

var $titleCanvas = $('#titleArea')[0];


function getCurrentObject(ev) {

    e = window.event ? window.event : ev;

    srcE = e.srcElement ? e.srcElement : e.target;

    return srcE;
}


$Canvas.ondragover = function(ev) {


    $('.publicDash').removeClass('publicDash');

    ev.preventDefault();

    var $currentobject = getCurrentObject(ev);


    var $currentObjectId = $currentobject.id;

    var $currentOjectClassName = $currentobject.className;

    var $currentObjectBelong = $currentobject.getAttribute('belog');
    
    
    var $varTest = $('#'+$currentObjectId+'>.smallImage').length;
    
    
    /*
     *  鼠标的指向为小图  将小图 增加  虚线
     */
    
    if ($varTest == 1 && objectType == 1 && $currentObjectBelong!=='divPack') {
        
        

         $('#' + $currentObjectBelong).addClass('publicDash');
        
         $('#' + $currentObjectBelong).addClass('white');
         
         /**
          *  查看
          */
         
         var aaa = getElementLength(eleType);
         
         
         if(aaa >= 1){
             
             $('#'+eleType).remove();
         }
        


    } else {

        //
        
       
        var currentContentLength = getElementLength(eleType);

        
        if (currentContentLength === 0) {
            
           
            if ($currentObjectBelong === 'divPack') {

                $('#divPack').append(currentDivHtml);

            } else {

                if ($currentObjectBelong !== currentDivObject && currentDivObject !== 'divPack') {

                    $('#' + currentDivObject).next('#' + eleType).remove();

                }

                //$('#record').html($currentObjectBelong);

                $('#' + $currentObjectBelong).after(currentDivHtml);
            }


        } else {
            
            
          
            
            
            /**
             * 获取画布 最后个元素
             */
            
            var b = $('#' + eleType).last().attr('id');
            
            /**
             * 循环该名称的所有的内容  获取  上一个元素的ID  并且判断 上一个元素的ID 是否和 鼠标现在位置的ID  是否一样  不一样的话 删除该元素  一样则保持不动
             */
            
            $('#' + eleType).each(function() {

                var prevId = $(this).prev().attr('belog');
                
                
                //$('#record').html(prevId +'&'+$currentObjectBelong+'&'+b);

                if (prevId !== $currentObjectBelong && prevId!==undefined && b !== $currentObjectBelong && $currentObjectBelong!=='divPack') {

                    $(this).remove();
                }
                
            })
            
            
            if(objectType === 1){
                
                var number = 0;
               
               $('#divPack').children('.smallImage').each(function(){
                   
                   var divid = $(this).attr('id')
                   
                   if( divid !== $currentObjectBelong){
                       
                       
                        $('#'+divid).removeClass('publicDash');

                         $('#'+divid).removeClass('white');
                       
                   }
                   
                 
               })
               
                       //$('#record').html(number);
                
            }




            var currentContentLength = getElementLength(eleType);

            if (currentContentLength === 0) {

                if ($currentObjectBelong === 'divPack') {

                    $('#divPack').append(currentDivHtml);

                } else {

                    $('#' + $currentObjectBelong).after(currentDivHtml);

                }
            }
        }

        /*
         * 增加虚线
         */
        $('#' + eleType).addClass('publicDash');

        $('#' + eleType).addClass('white');



        currentDivObject = $currentObjectBelong;


    }



    return true;
};

$Canvas.ondrop = function(ev) {



    $('.publicDash').removeClass('publicDash');

    $('.white').removeClass('white');

    //当前鼠标所在位置的对象

    var $currentobject = getCurrentObject(ev);


    var $currentObjectId = $currentobject.id;

    var $currentOjectClassName = $currentobject.className;

    var $currentObjectBelong = $currentobject.getAttribute('belog');


 

    /*
     *  鼠标的指向为小图  将小图 增加  虚线  并判断  所拖动的饿类型为小图类型时  
     */
    if (($currentOjectClassName === 'smallImage' || $currentOjectClassName === 'smallImageUploads' ) && objectType === 1) {



        $('#' + $currentObjectBelong).append(currentDivHtmlContent);


        if ($currentObjectBelong != eleType) {

            $('#' + eleType).remove();

        }




    } else {

        if ($currentObjectId !== 'divPack') {



            $('#' + eleType).append(currentDivHtmlContent);

        } else {




            $('#' + eleType).remove();
        }

    }

    $('#' + eleType).removeClass('none');

    //$('.none').remove();


    if (objectType === 1) {

        $('#file_upload_'+uploadImageIdFina).uploadify({
            'swf': websiteUrl + '/uploadify/uploadify.swf',
            'uploader': websiteUrl + '/uploadify/uploadify.php',

            'formData':{
                
                 'objectid':'file_upload_'+uploadImageIdFina,
            
            },


            'onUploadSuccess': function(file, data, response) {



              
                var json = eval("(" + data + ")");

                
                $('#' + json['objectid']).parent().prev().find('img').attr('src',json['path'])


            }
        });
    }


    if (objectType === 2) {


       

        $('#file_upload_'+uploadImageIdFina).uploadify({
            'swf': websiteUrl + '/uploadify/uploadify.swf',
            'uploader': websiteUrl + '/uploadify/uploadify.php',

             'formData':{
                
                 'objectid':'file_upload_'+uploadImageIdFina,
            
            },


            'onUploadSuccess': function(file, data, response) {


                var json = eval("(" + data + ")");

                
                $('#' + json['objectid']).parent().prev().find('img').attr('src',json['path'])


              
            }
        });

    }


    return false;
};


$Canvas.ondragleave = function(ev) {



    var $currentobject = getCurrentObject(ev);


    var $currentObjectId = $currentobject.id;


    //$('#record').html($currentObjectId);


    return true;
};


$titleCanvas.ondragover = function(ev) {

    ev.preventDefault();

    var acceptString = $('#titleArea')[0].attributes["accept"].value;

    var acceptArray = acceptString.split(',');

    if (eleT == 'title') {

        $('#titleArea')[0].className = 'publicDash';


    }
    return true;
};

$titleCanvas.ondragleave = function(ev) {



    if (eleT == 'title') {

        var tmpClassName = $titleCanvas.className;

        $titleCanvas.className = null;    //清除类名

        $titleCanvas.className = tmpClassName.split(new RegExp(" publicDash|publicDash " + "|" + "^publicDash$", "ig")).join("");

    }
    return true;
};


$titleCanvas.ondrop = function(ev) {


    if (eleT == 'title') {

        var textAreaHtml = '<div placeholder="文档标题"contenteditable="true"  class="doc-title" name="doc_title" style="width:320px;overflow: hidden; word-wrap: break-word; resize: none; height: 48px;margin:0 auto;" id="aaaaa">文档标题</div>';

        $titleCanvas.innerHTML = textAreaHtml;

        $titleCanvas.className = '';

    }


    return false;
};


function getBelog(obj) {

    var i = 0;


    while (i === 0) {


    }

}

function getElementLength(obj) {

    return $('#' + obj).length;


}






