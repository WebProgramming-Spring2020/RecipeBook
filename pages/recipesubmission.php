
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
		<a href="account.php" id="login" class="topRdis">My Account</a>
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
	

	<h3>Thanks you for helping us grow!</h3>
	<h4>Please submit a recipe! Our Code Chefs will review your submission and add it to the website!</h4>


<style>
.error {color: darkred;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = "";
$name = $ing = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["ing"])) {
    $ing = "";
  } else {
    $ing = test_input($_POST["ing"]);
    // check if e-mail address is well-formed
  }
    

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }


}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<div class="rsubmit">

<form action="thankssubmission.php" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Recipe Name: <br><textarea rows="1" cols="75"  name="name" value="<?php echo $name;?>"  required></textarea>
  <span class="error"> <?php echo $nameErr;?></span>
  <br><br>
  Ingredients: <br><textarea name="ing" rows="5" cols="75"><?php echo $ing;?></textarea>
  <br><br>
  Directions: <br> <textarea name="comment" rows="100" cols="75"><?php echo $comment;?></textarea>
  <br>
 
  <input type="submit" value="Submit"></a>

  <br>
  <br>
</form>
</div>


</body>
</html>