<?php
	$headers = apache_request_headers(); //On récupère les headers et on vérifie que l'user est passé par auth.php

	if (!isset($headers["Referer"]) || ($headers["Referer"] != "http://".$headers["Host"]."/auth.php" && $headers["Referer"] != "http://".$headers["Host"]."/authSafe.php"))
    	header("Location: ./InjectionSQL.php");
	echo "Connected on admin page of " . $headers["Host"];
?>