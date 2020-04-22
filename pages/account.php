<?php
session_start();

$account = "Login";
$link = "SignIn.php";

$servername = "localhost";
$username = "sagbenu1";
$password = "sagbenu1";
$database = "sagbenu1";


$conn = new mysqli($servername, $username, $password, $database);

if ($_SESSION['email'] != "") {
    $account = "My Account ";
    $user = $_SESSION['email'];
    $sql = "select first_name from admin where email = '$user'";
    $result = mysqli_query($conn, $sql);

    if (($result) && mysqli_num_rows($result) > 0 ){
        $row = mysqli_fetch_array($result);
        $user = $row[0];
    } else {
        $u = explode("@", $user);
        $user = $u[0];
    }
    mysqli_close($conn);

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
		<a href="index.php" class="topL">Home</a> <img
			src="../images/codecheflogo.jpg" class="codecheflogo">

	</div>
	<div class="topR">
		<a href="<?php echo $link ?>" id="login" class="topRdis"><?php echo $account ?></a>
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

	<?php echo "<div class='title'>Welcome " . $user . "</div>"?>

	<p style="text-align: center;"><a href="logout.php">Logout</a></p>
	<br>
	<br>
</body>
</html>