<?php

session_start();

// $time = "0:00";
// $meal = "";
// $diet = "";
// $search = "";

include "searchResults.php";
if (isset($_POST["submit"])) {
   
    $_SESSION['search'] = $_POST['search'];
    $_SESSION['meal'] = $_POST['meal'];
    $_SESSION['time'] = $_POST['time'];
    $_SESSION['diet'] = $_POST['diet'];

    
	header("location: searchResults.php"); 
	exit;
 }

?>

