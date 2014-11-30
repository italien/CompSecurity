<?php
session_start();
if(isset($_POST['Login']) && isset($_POST['Password'])) {
    $pass = $_POST['Password'];
    $login = $_POST['Login'];
}
else
	echo "is not set";
if ($pass == $login)
	echo "Welcome  ";
else
{
    header("Location: bypassauth.php");
    //exit();
}
echo " big secret ";
?>
