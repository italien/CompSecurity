<?php
	$headers = apache_request_headers();

	if (!isset($headers["Referer"]) || ($headers["Referer"] != "http://".$headers["Host"]."/auth.php" && $headers["Referer"] != "http://".$headers["Host"]."/authSafe.php"))
    	header("Location: ./InjectionSQL.php");
	echo "Connected on admin page of " . $headers["Host"];
?>