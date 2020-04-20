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
	<link rel="stylesheet" type="text/css" href="miniproject1.css">

</head>

<body>
	<script type="text/javascript" src="dateTime.js"></script>
	<script type="text/javascript" src="search.js"></script>
	<script type="text/javascript" src="miniproject1.js"></script>
	<div class="navbar">
		<a href="#Home" class="topL">Home</a>
		<img src="codecheflogo.jpg" class="codecheflogo">

	</div>
	<div class="topR">
		<a href="<?php echo $link ?>" id="login" class="topRdis"><?php echo $user ?></a>
		<span class="tab"></span>
		<a href="#FAQ" class="topRdis">FAQ</a>
		<span class="tab"></span>
		<a href="#Contact" class="topRdis">Contact</a>
		<span class="tab"></span>
	</div>

	<br>

	<br>
	<br>
	<br>
	<br>
	<br>

	<div class="title">Welcome <?php echo $user?></div>

	<br>
	<br>
	</body>
	</html>