<?php
$tmp_name = $_FILES["fileToUpload"]["tmp_name"];
$name = $_FILES["fileToUpload"]["name"];

$allowedExts = array("gif", "jpeg", "jpg", "png","bmp");
$temp = explode(".", $_FILES["fileToUpload"]["name"]);
$extension = end($temp);
if (in_array($extension, $allowedExts))
{

    if (move_uploaded_file($tmp_name, "../images/$name")) {
          $img = "/images/".$name;
		      echo "<img src=\"$img\">";
    } 
    else {
          echo "File uploading failed.";
    }

}
else
{
     echo "We do not allow uploading\n";
}
exit;
?>