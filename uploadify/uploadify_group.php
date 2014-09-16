<?php
/*
Uploadify
Copyright (c) 2012 Reactive Apps, Ronnie Garcia
Released under the MIT License <http://www.opensource.org/licenses/mit-license.php> 
*/

// Define a destination
$targetFolder = '/yajie_weixin_crm_new/weixin_crm/uploads'; // Relative to the root
//$targetFolder = '/weixin_crm/uploads'; // Relative to the root

$url = 'http://localhost/yajie_weixin_crm_new/weixin_crm/uploads/';
//$url = 'http://localhost/weixin_crm/uploads/';


$arrayp['objectid'] =  $_REQUEST['objectid'];

if (!empty($_FILES)) {
	$tempFile = $_FILES['Filedata']['tmp_name'];
	$targetPath = $_SERVER['DOCUMENT_ROOT'] . $targetFolder;
	$targetFile = rtrim($targetPath,'/') . '/' . $_FILES['Filedata']['name'];
	
	// Validate the file type
	$fileTypes = array('jpg','jpeg'); // File extensions
	$fileParts = pathinfo($_FILES['Filedata']['name']);
	
	if (in_array($fileParts['extension'],$fileTypes)) {
		move_uploaded_file($tempFile,$targetFile);

		$arrayp['path'] =  $url.$_FILES['Filedata']['name'];

               header('Content-type: application/json'); 
		echo json_encode($arrayp);
	} else {
		echo 'Invalid file type.';
	}
}


/**
 * 调用上传元素接口
 */

    $token = getAccessToken();


       $file = realpath('/home/wwwroot/weixin_crm/images/test.jpg'); //文件目录路径
       

        $a = https_upload_pic_request($file,$token);

        var_dump($a);//{"type":"TYPE","media_id":"MEDIA_ID","created_at":123456789} 返回值

        die;
?>