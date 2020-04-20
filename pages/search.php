<?php

$time = "0:00";
$meal = "";
$diet = "";


include "searchResults.php";
if (isset($_POST["submit"])) {
	header("location: searchResults.php"); 
	exit;
 }

?>

