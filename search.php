<?php

$time = "0:00";
$meal = "";
$diet = "";


include "searchResults.html";
if (isset($_POST["submit"])) {
	header("location: searchResults.html"); 
	exit;
 }

?>

