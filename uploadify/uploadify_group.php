<?php

/*
  Uploadify
  Copyright (c) 2012 Reactive Apps, Ronnie Garcia
  Released under the MIT License <http://www.opensource.org/licenses/mit-license.php>
 */


if (!empty($_REQUEST['session_id'])) {

    session_id($_REQUEST['session_id']);
}


include '../config/defined.php';




// Define a destination
$targetFolder = '/weixin_crm/uploads'; // Relative to the root
//$targetFolder = '/weixin_crm/uploads'; // Relative to the root

$url = 'http://localhost/weixin_crm/uploads/';
//$url = 'http://localhost/weixin_crm/uploads/';


$arrayp['objectid'] = $_REQUEST['objectid'];


if (!empty($_FILES)) {
    $tempFile = $_FILES['Filedata']['tmp_name'];
    $targetPath = $_SERVER['DOCUMENT_ROOT'] . $targetFolder;
    $targetFile = rtrim($targetPath, '/') . '/' . $_FILES['Filedata']['name'];

    // Validate the file type
    $fileTypes = array('jpg', 'jpeg'); // File extensions

    $fileParts = pathinfo($_FILES['Filedata']['name']);
    
    $fileSizeLimte = 1 * 1024 * 64;


   
    if ($_FILES['Filedata']['size'] > $fileSizeLimte) {
        echo 'code1'; //文件大小溢出
    } else if (in_array($fileParts['extension'], $fileTypes)) {




        move_uploaded_file($tempFile, $targetFile);



        @chmod($targetFile, 0755);

        $arrayp['path'] = $url . $_FILES['Filedata']['name'];

        $token = getAccessToken();

        $file = realpath($targetFile); //文件目录路径


        $result = https_upload_pic_request($file, $token);



        $result_ = json_decode($result, true);



        if ($result_['thumb_media_id'] != '') {

            $arrayp['media_id'] = $result_['thumb_media_id'];
        }




        header('Content-type: application/json');


        echo json_encode($arrayp);
    } else {
        echo 'code2';
    }
}
?>