<?php
session_start();

?>

<html>
<head>
<meta charset="utf-8">
<title></title>
<link rel="stylesheet" type="text/css" href="../SignInStyle.css">
</head>
<body>

	<h1>Welcome to Code Chef Recipes!</h1>
	<div class="container">
		<div class="sign-in-container">
			<form action="SignIn.php" method="post">
				<!-- Will link to home -->
				<h2>Sign in</h2>

				<input type="email" id="email" placeholder="Email" name="email"
					required /> <br> <input type="password" id="password"
					placeholder="Password" name="password" required /> <br> <a href="#">Forgot
					your password?</a> <br> <a href="./Welcome.php"><input
					type="submit" name="Submit" id="sign-in-button" value="Sign in"></a>
					<p><?php echo $wrongpass ?></p>
			</form>
		</div>
		<!-- end of sign-in container -->

		<div class="sign-up-container">
			<h2>Don't have an account?</h2>
			<p>Sign up and start enjoying our recipes!</p>
			<a href="SignUp.php"><button class="ghost">Join Now</button></a>
		</div>
		<!-- end of sign-up container -->
	</div>
	<!-- end of container -->
<?php

$servername = "localhost";
$username = "wlyons2";
$password = "wlyons2";
$database = "wlyons2";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

$wrongpass = "";
// $email = mysqli_real_escape_string($conn, $_REQUEST['email']);
// $first_name = mysqli_real_escape_string($conn, $_REQUEST['first_name']);
// $last_name = mysqli_real_escape_string($conn, $_REQUEST['last_name']);
// $username = mysqli_real_escape_string($conn, $_REQUEST['username']);
// $password = mysqli_real_escape_string($conn, $_REQUEST['password']);

// $sql = "insert into admin (first_name, last_name, username, password, email) values ('$first_name', '$last_name', '$username', '$password', '$email')";
if (isset($_POST['Submit'])) {
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['password'] = $_POST['password'];
    
    $email =  $_SESSION['email'];
    $pass = $_SESSION['password'];
    
    $sql = "select email, password from admin where email LIKE '$email'";
    $searchResult = mysqli_query($conn, $sql);
    if ($searchResult && mysqli_num_rows($searchResult) > 0) {
        $row = mysqli_fetch_array($searchResult);
        if($email == $row[0] && $pass == $row[1]){
            header("Location: Welcome.php");
            exit();
        }
    } else {
        $wrongpass = "Wrong username/password combination";
        header("Location: SignIn.php");
        exit();
    }
}
mysqli_close($conn);
?>
	
</body>
</html>