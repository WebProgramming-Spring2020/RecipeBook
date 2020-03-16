<!DOCTYPE html>
<html>
<head>
	<title>Welcome!</title>
		<link rel="stylesheet" type="text/css" href="WelcomeStyle.css"> 
</head>
<body>


	<?php	

	session_start();
	$target = "email";
	$linkname = "SignIn.php";
	// link($target, $link);



		if(isset($_POST['Submit'])) {
			$_SESSION['email'] = $_POST['email'];

		}

		echo "Welcome " ;
		echo $_SESSION['email'];

		
	?>
	<meta http-equiv="refresh" content="5; url=index.php">

	

</body>
</html>