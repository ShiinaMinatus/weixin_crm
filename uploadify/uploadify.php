<?php

/*
  Uploadify
  Copyright (c) 2012 Reactive Apps, Ronnie Garcia
  Released under the MIT License <http://www.opensource.org/licenses/mit-license.php>
 */

// Define a destination
$targetFolder = '/weixin_crm/uploads'; // Relative to the root


$url = 'http://localhost/weixin_crm/uploads/';




$arrayp['objectid'] = $_REQUEST['objectid'];

if (!empty($_FILES)) {
    $tempFile = $_FILES['Filedata']['tmp_name'];
    $targetPath = $_SERVER['DOCUMENT_ROOT'] . $targetFolder;
    $targetFile = rtrim($targetPath, '/') . '/' . $_FILES['Filedata']['name'];

    $imageInfo = getimagesize($tempFile);


    if (!empty($_REQUEST['size'])) {


        $image_size = explode(',', $_REQUEST['size']);


        if ($image_size[0] == $imageInfo[0] && $image_size[1] == $imageInfo[1]) {

            // Validate the file type
            $fileTypes = array('jpg', 'jpeg', 'gif', 'png'); // File extensions
            $fileParts = pathinfo($_FILES['Filedata']['name']);

            if (in_array($fileParts['extension'], $fileTypes)) {
                move_uploaded_file($tempFile, $targetFile);

                $arrayp['path'] = $url . $_FILES['Filedata']['name'];


                echo json_encode($arrayp);
            } else {
                echo 'Invalid file type.';
            }
        } else {
            
            echo 'nosize';

            die;
        }
    }
}
?>