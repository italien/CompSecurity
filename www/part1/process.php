<?php
$tmp_name = $_FILES["fileToUpload"]["tmp_name"];
$name = $_FILES["fileToUpload"]["name"];

$allowedExts = array("gif", "jpeg", "jpg", "png","bmp");
$temp = explode(".", $_FILES["fileToUpload"]["name"]);
$extension = end($temp);

    if (move_uploaded_file($tmp_name, "../images/$name")) {
          echo "File is valid, and was successfully uploaded.";
    } 
    else {
          echo "File uploading failed.";
    }
exit;
?>