

<!DOCTYPE html>
<html>
<head>
<title>Code Chef Recipes</title>
<link rel="stylesheet" type="text/css" href="../miniproject1.css">

</head>

<body>
	<script type="text/javascript" src="../dateTime.js"></script>
	<script type="text/javascript" src="../search.js"></script>
	<script type="text/javascript" src="../miniproject1.js"></script>
	<div class="navbar">
		<a href="index.php" class="topL">Home</a> <img
			src="../images/codecheflogo.jpg" class="codecheflogo">

	</div>
	<div class="topR">
		<a href="index.php" class="topRdis">Home</a>
		<span class="tab"></span> <a href="index.phpFAQ" class="topRdis">FAQ</a>
		<span class="tab"></span> <a href="index.php#Contact" class="topRdis">Contact</a>
		<span class="tab"></span>
	</div>

	<br>

	<br>
	<br>
	<br>
	<br>
	<br>


<?php


	session_start();

	$account = "Login";
$link = "SignIn.php";

$servername = "localhost";
$username = "wlyons2";
$password = "wlyons2";
$database = "wlyons2";


$conn = new mysqli($servername, $username, $password, $database);

if(mysqli_query($conn, $sql)) {
		echo "";
	} else {
		echo ""; 
	}
	mysqli_close($conn);


	$user = $_SESSION['email'];

	if ($user) {

		if ($_POST['submit']) {

			$oldpassword = md5 ($_POST['oldpassword']);
			$newpassword = md5 ($_POST['newpassword']);
			$confirmpassword = md5 ($_POST['confirmpassword']);

		$queryget = mysql_query("SELECT password FROM admin WHERE username = '$user'");
		$row = mysql_fetch_assoc($queryget);

		$oldpassworddb = $row ['password'];


		if ($oldpassword == $oldpassworddb) {

			if ($newpassword == $confirmpassword) {
				echo "<h3>Your password has been changed!</h3>";

			}

			else die("<h3>New passwords do not match</h3>");

		}
		else 
			die("<h3>Old password does not match</h3>");

		}

		else {
		echo " <div class = 'passchange'>
			<form action = 'changepassword.php' method = 'POST' >
				Old password: <input type = 'text' name = 'oldpassword'><p>
				New Password: <input type = 'text' name = 'newpassword'><p>
				Confirm Password: <input type = 'text' name = 'confirmpassword'><p>
			<input type = 'submit' name = 'submit' value = 'Change Password'>
			</form>
			</div>
			
		";			
	}
		

}	
else 
		die("You must be logged in to change your password");

	?>


</body>
</html>

	
