<!DOCTYPE html>
<html>
<head>
<title>Welcome!</title>
<link rel="stylesheet" type="text/css" href="../WelcomeStyle.css">
</head>
<body>


	<?php
session_start();

if (isset($_POST['Submit'])) {
    $_SESSION['email'] = $_POST['email'];
}

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

$target = "email";
$linkname = "SignIn.php";

echo "Welcome ";
echo $user;

?>
	<meta http-equiv="refresh" content="5; url=index.php">



</body>
</html>