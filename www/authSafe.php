<?php
	$login = $_POST["LoginSafe"];
	$password = $_POST["PasswordSafe"];

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
		$request = $bdd->prepare("SELECT * FROM Authentification WHERE Login = ? AND password = ?");
		$request->execute(array($login, $password));
		$data = $request->fetch();
		$request->closeCursor();
		if ($data != NULL)
			echo "<script>window.location='./admin.php'</script>";
		else header("Location: ./InjectionSQL.php");
	}
	else header("Location: ./");
?>