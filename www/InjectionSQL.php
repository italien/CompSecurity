<?php
	setcookie("ID", "2", time() + 365 * 24 * 3600, null, null, false, false);
	setcookie("idSafe", "1", time() + 365 * 24 * 3600, null, null, false, false);
?>

<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title>Injection SQL</title>
	</head>
	<body>
		<header>
			<h1>Injection SQL</h1>
		</header>
		<h4>SQL Injection</h4>
		<form action="./auth.php" method="POST">
	    	<table>
		        <tr>
		            <td>Login</td>
		            <td><input type="text" name="Login" maxlength="30"></td> </tr>
		        <tr>
		            <td>Pass</td>
		            <td><input type="password" name="Password" maxlength="30"></td> </tr>
		        <tr>
		        	<td colspan=2 align="center">
		        		<input type="submit" name="login" value="Login">
		        	</td>
		        </tr> 
	    	</table> 
		</form>
		<h4>SQL Injection via Url</h4>
		<?php
			mysql_connect("localhost", "root", "root") or die (mysql_error());
			mysql_select_db("ComputerSecurity") or die(mysql_error());
			$id = $_GET["id"];
			if (!isset($id))
			{
				$request = mysql_query("select * from Authentification");
				while ($data = mysql_fetch_assoc($request))
				{
					print "<a href=InjectionSQL.php?id=$data[Id]> Founder $data[Id] </a> </br>";
				}
			}
			else
			{
				$request = mysql_query("select Login, Password from Authentification where Id='$id'") or die(mysql_error());
				$data = mysql_fetch_row($request);
				print "user details : </br> $data[0] </br> $data[1]";
			}
		?>
		<h4>Cookie sql Injection</h4>
		<?php
			try
			{
				$bdd = new PDO('mysql:host=localhost;dbname=ComputerSecurity', 'root', 'root');	
			}
			catch(Exception $e)
			{
				die ("Error :".$e->getMessage());
			}
			$id_cookie = $_COOKIE['ID'];
			$request = $bdd->query("SELECT Login FROM Authentification WHERE ID='$id_cookie'") or die (print_r($bdd->errorInfo()));
			$data = $request->fetch();
			$request->closeCursor();
			echo "login > $data[0]";
		?>
		<h3>Solution to be more safe about sql injection threats</h3>
		<p>There is many way to protect about sql injection but it's impossible to be safe for all attacks sql injections.</p>
		<p>Now we are going to present some differents way (not all): </p>
		<p>
			<ul>
				<li>prepared request (with PDO)</li>
				<li>filter request with a script anti-injection sql to escape special characters and special words</li>
				<li>check the type of data</li>
			</ul>
		</p>
		<h4>Safe HTTP headears about SQL Injection</h4>
		<form action="./authSafe.php" method="POST">
	    	<table>
		        <tr>
		            <td>Login</td>
		            <td><input type="text" name="LoginSafe" maxlength="30"></td> </tr>
		        <tr>
		            <td>Pass</td>
		            <td><input type="password" name="PasswordSafe" maxlength="30"></td> </tr>
		        <tr>
		        	<td colspan=2 align="center">
		        		<input type="submit" name="login" value="Login">
		        	</td>
		        </tr> 
	    	</table> 
		</form>
		<h4>Secure Url about SQL Injection</h4>
		<?php
			mysql_connect("localhost", "root", "root") or die (mysql_error());
			mysql_select_db("ComputerSecurity") or die(mysql_error());
			$id = $_GET["idSafe"];
			if (!isset($id))
			{
				$request = mysql_query("select * from Authentification");
				$data = mysql_fetch_row($request);
				print "<a href=InjectionSQL.php?idSafe=$data[0]> Founder $data[0] </a> </br>";
			}
			else
			{
				$id = mysql_real_escape_string($id);
				$bad_words = array('union','order by','select','from','where');
				foreach($bad_words as $word){
					if(strstr(strtolower($id),$word))
						die('SQL Injection Attempt detected');
				}
				$request = mysql_query("select Login, Password from Authentification where Id='$id'") or die(mysql_error());
				$data = mysql_fetch_row($request);
				print "user details : </br> $data[0] </br> $data[1]";
			}
		?>
		<h4>Secure Cookie about sql Injection</h4>
		<?php
			try
			{
				$bdd = new PDO('mysql:host=localhost;dbname=ComputerSecurity', 'root', 'root');	
			}
			catch(Exception $e)
			{
				die ("Error :".$e->getMessage());
			}
			$id_cookie = intval($_COOKIE['idSafe']);
			$request = $bdd->query("SELECT Login FROM Authentification WHERE ID='$id_cookie'") or die (print_r($bdd->errorInfo()));
			$data = $request->fetch();
			$request->closeCursor();
			echo "login > $data[0]";
		?>
	</body>
</html>