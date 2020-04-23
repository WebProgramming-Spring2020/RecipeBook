<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../SignInStyle.css">
</head>
<body>

	<h1>Welcome to Code Chef Recipes!</h1>
	<div class = "container2">
		<div class = "register-container">
			<form action = "SignIn.php" method = "post">
				<h2> Create an Account </h2>
				<input type = "text" id = "first_name" name = "first_name" placeholder = "First Name">
				<br><br>
				<input type = "text" id = "last_name" name = "last_name" placeholder = "Last Name">
				<br><br>
				<input type = "text" id = "username" name = "username" placeholder = "Username">
				<br><br>
				<input type = "password" id = "password" name = "password" placeholder = "Password">
				<br><br>
				<input type = "text" id = "email" name = "email" placeholder = "Email">
				<br><br>
				<button type = "submit" name = "submit" value = "Register"> Register </button>
			</form>
		</div>
	</div>
<?php

	$servername = "localhost";
	$username = "sagbenu1";
	$password = "sagbenu1";
	$database = "sagbenu1";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $database);

	$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
	$first_name = mysqli_real_escape_string($conn, $_REQUEST['first_name']);
	$last_name = mysqli_real_escape_string($conn, $_REQUEST['last_name']);
	$username = mysqli_real_escape_string($conn, $_REQUEST['username']);
	$password = mysqli_real_escape_string($conn, $_REQUEST['password']);

	$sql = "insert into admin (first_name, last_name, username, password, email) values ('$first_name', '$last_name', '$username', '$password', '$email')";

	
	if(mysqli_query($conn, $sql)) {
		echo "";
	} else {
		echo ""; 
	}
	mysqli_close($conn);
?>

</body>
</html>
