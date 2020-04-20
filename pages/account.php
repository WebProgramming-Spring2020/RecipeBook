<?php

session_start();

$user = "Login";
$link = "SignIn.php";

if ($_SESSION['email'] != ""){
	$user = $_SESSION['email'];
	$u = explode("@",$user);
	$user = $u[0];
	$link = "account.php";
}


?>


<!DOCTYPE html>
<html>

<head>
	<title>Code Chef Recipes</title>
	<link rel="stylesheet" type="text/css" href="../miniproject1.css">

</head>

<body>
	<script type="text/javascript" src="dateTime.js"></script>
	<script type="text/javascript" src="search.js"></script>
	<script type="text/javascript" src="miniproject1.js"></script>
	<div class="navbar">
		<a href="index.php" class="topL">Home</a>
		<img src="../images/codecheflogo.jpg" class="codecheflogo">

	</div>
	<div class="topR">
		<a href="<?php echo $link ?>" id="login" class="topRdis"><?php echo $user ?></a>
		<span class="tab"></span>
		<a href="index.phpFAQ" class="topRdis">FAQ</a>
		<span class="tab"></span>
		<a href="index.php#Contact" class="topRdis">Contact</a>
		<span class="tab"></span>
	</div>

	<br>

	<br>
	<br>
	<br>
	<br>
	<br>

	<div class="title">Welcome <?php echo $user?></div>

	<a href="logout.php" style="text-align: center">Logout</a>
	<br>
	<br>
	</body>
	</html>