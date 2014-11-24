<?php
	$login = $_POST["Login"];
	$password = $_POST["Password"];

	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=ComputerSecurity', 'root', 'root');	
	}
	catch(Exception $e)
	{
		die ("Error :".$e->getMessage());
	}
	if ($login != "" && $password != "")
	{
		$request = $bdd->query("SELECT * FROM Authentification WHERE Login='$login' AND password='$password'");
		$data = $request->fetch();
		$request->closeCursor();
		if ($data != NULL)
			echo "<script>window.location='./admin.php'</script>";
		else header("Location: ./InjectionSQL.php");
	}
	else header("Location: ./");
?>