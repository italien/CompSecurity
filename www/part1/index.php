<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title>File upload vulnerabilities</title>
	</head>
	<body>
		<header>
			<h1>File upload vulnerabilities</h1>
		</header>
		<img src="images/deux.jpg" alt="" height="150" width="150">
		<img src="images/trois.jpg" alt="" height="150" width="150">
		<img src="images/quatres.jpg" alt="" height="150" width="150">
		<h4>File upload 1: No verification</h4>
		<p>Simple file upload without any verifications</p>
		<form action="process.php" method="post" enctype="multipart/form-data">
			<input type="file" name="fileToUpload" id="fileToUpload">
			<button type="submit">Add pic</button>
		</form>
		<h4>File upload 2: Size and extension verification</h4>
		<p>File upload with file extension and size verification</p>

		<form action="process_verif.php" method="post" enctype="multipart/form-data">
			<input type="file" name="fileToUpload" id="fileToUpload">
			<button type="submit">Add pic</button>
		</form>

		<form method="get">
  			<select name="COLOR">
  				<option value="" selected disabled>Please select an option...</option>
    			<option value="red.php">red</option>
      			<option value="blue.php">blue</option>
   			</select>
   			<input type="submit">
		</form>
		<?php
		if ( isset( $_GET['COLOR']) ) {
			include( $_GET['COLOR']);
		}
		else
		{

		}
		?>
	</body>
</html>