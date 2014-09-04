<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <link href="{$WebSiteUrl}/css/{$source}_css.css" rel="stylesheet" type="text/css">
            
            
            
            <title></title>

            <style>

                *{
                    font-family:"黑体","宋体",Serif;
                    
                    
                }

            </style>
    </head>

    <body class='boby'>

        <div class='bobyBackGroud' >






            <div style='overflow: hidden; height: 86px;'>

                <!--  <iframe src="{$WebSiteUrl}/pageredirst.php?action=top&functionname=top" name="topFrame" scrolling="No"  id="topFrame" title="topFrame"  style='width: 100%; height: 90px;' ></iframe> -->


                {include file='top.tpl'}

            </div>




            <div style='  background-color: #fff;
    border: 1px solid #d9dadc;height: 750px; width: 1250px ; margin: 0 auto;'>


                <div style='float: left; overflow: hidden; height: 750px; width: 16%;font-weight: bold;border-right: 1px solid #e7e7eb;' >

                    <iframe frameborder='0' src="{$WebSiteUrl}/pageredirst.php?action=left&functionname=left" name="leftFrame"   id="leftFrame" title="leftFrame"  style=' height: 740px; width: 196px; {*margin-left: 5px;*}' ></iframe>

                </div>

                <div style='float: left; overflow: hidden; height: 675px; width: 83%; margin-left: 3px'>



                    <iframe frameborder='0' src="{$WebSiteUrl}/files/{$source}_mainfra.html"  name="mainFrame" id="mainFrame" title="mainFrame"  style='height: 675px; width: 100%; border-radius: 10px 10px 0 0;' ></iframe>

                </div>


            </div>







        </div>



    </body> 


</html>
