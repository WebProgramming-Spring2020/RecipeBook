<!DOCTYPE html>
<html>
<head>
	<title>Code Chef Recipes</title>
</head>


	<?php


	session_start();


$servername = "localhost";
$username = "sagbenu1";
$password = "sagbenu1";
$database = "sagbenu1";


$conn = new mysqli($servername, $username, $password, $database);

if(mysqli_query($conn, $sql)) {
		echo "";
	} else {
		echo ""; 
	}
	mysqli_close($conn);



	?>
	
<head>
	<body>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../SignInStyle.css">
</head>
<body>
	<br>
	<br>

	<h1>Forgot your password?</h1>
	
<?php

		if ($_POST['submit']) {

		/*	$username = $_POST['username']);
			$email = $_POST['email']);


	$queryget = mysql_query("SELECT password FROM admin WHERE username = '$user'");
		$row = mysql_fetch_assoc($queryget);

		$password = $row ['password'];

*/

		if ($username == $_POST['username']) {

			if ($email == $_POST['email']) {
				
				echo "<h3>Your password is: </h3>" $_SESSION['password'];

			}

			else die("<h3>Email not found</h3>");

		}

		else 
			die("<h3>Username not found</h3>");
		

		}


		else {

		echo " 
			<div class = 'register-container'> 
			<form method = 'POST' align = 'center' >
			<br> <br>
				Username: <input type = 'text' name = 'username'><p>
				Email: <input type = 'text' name = 'email'><p>
			<button type = 'submit' name = 'submit' value = 'RecallPassword'>
				Recall Password </button>
			</form>
			<form action = 'SignIn.php' align = 'center'> 
				<button type='submit' name='signin'> Back to Sign In Page</form>
		
			</div>
			
		";		}
		

?>
</body>
</html>