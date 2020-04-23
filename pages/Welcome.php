<!DOCTYPE html>
<html>
<head>
<title>Welcome!</title>
<link rel="stylesheet" type="text/css" href="../WelcomeStyle.css">
</head>
<body>


	<?php
session_start();



$servername = "localhost";
$username = "sagbenu1";
$password = "sagbenu1";
$database = "sagbenu1";

$conn = new mysqli($servername, $username, $password, $database);

if ($_SESSION['email'] != "") {

}

if (isset($_POST['Submit'])) {
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['password'] = $_POST['password'];
    
    $email =  $_SESSION['email'];
    $pass = $_SESSION['password'];
    
    $sql = "select email, password from admin where email LIKE '$email'";
    $searchResult = mysqli_query($conn, $sql);
    if ($searchResult && mysqli_num_rows($searchResult) > 0) {
        $row = mysqli_fetch_array($searchResult);
        if($email != $row[0] && $pass != $row[1]){
            $wrongpass = "Wrong username/password combination";
            session_destroy();
            session_end();
            header("Location: SignIn.php");
            exit();
        }
    }
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
    
    
    $link = "account.php";
}

$target = "email";
$linkname = "SignIn.php";

echo "Welcome ";
echo $user;
mysqli_close($conn);
?>
	<meta http-equiv="refresh" content="5; url=index.php">



</body>
</html>