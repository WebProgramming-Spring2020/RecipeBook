<?php

session_start();

$user = "Login";
$link = "../SignIn.php";

if ($_SESSION['email'] != ""){
    $user = $_SESSION['email'];
    $u = explode("@",$user);
    $user = $u[0];
    $link = "../account.php";
}

?>

<!doctype html>
<html>
<head>
<title> Code Chefs: ABC Pudding </title>
<link rel="stylesheet" type="text/css" href="../../miniproject1.css">

</head>
<body>
	<script type="text/javascript" src="../../miniproject1.js"></script>
	<script type="text/javascript" src="../../miniproject2.js"></script>

	<!-- Nav Bar -->
	<div class="navbar">
		<a href="../index.php" class="topL">Home</a><img src="../../images/codecheflogo.jpg" class="codecheflogo">
	</div>
	<div class="topR">
		<a href="<?php echo $link ?>" id="login" class="topRdis"><?php echo $user ?></a>
		<span class="tab"></span>
		<a href="../index.php#FAQ" class="topRdis">FAQ</a>
		<span class="tab"></span>
		<a href="../index.php#Contact" class="topRdis">Contact</a>
		<span class="tab"></span>
	</div>

	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

	<div class="recipeTitle">ABC(Avocado, Banana and Chocolate) Pudding</div>
	<!-- End of Navbar -->

	<br>
	<br>

	<div>
		<img src="../../images/Avocado, banana and chocolate pudding.jpg" class="centerImg">
	</div>

	<aside style="flex-basis: 33%; padding: 2em; margin: 2em;">
		<!-- <h3>Paleo Pecan-Maple Salmon</h3> -->
		<p>Ingredients:</p>
		<label class="container"> 1 ripe avocado <input
			type="checkbox"> <span class="checkmark"></span>
		</label> 

		<label class="container"> 4 very ripe bananas <input 				type="checkbox"> <span class="checkmark"></span>
		</label> 

		<label class="container"> &frac14 of unsweetened cocoa powder <input type="checkbox"> <span class="checkmark"></span>
		</label> 

		<p>
			Missing something? Click <a href="https://www.instacart.com"
				target="_blank" style="text-decoration: underline;">here</a> for
			Instacart
		</p>
		<br>
		<p>Directions:</p>

		<label class="container"> Cut the avocado in half and take out the seed. Place the avocado halves, the bananas and the cocoa powder into a blender and blend until smooth. <input type="checkbox"> <span
			class="checkmark"></span>
		</label> 

		<label class="container"> Pour the pureed items into a bowl and sprinkle extra cocoa powder for garnish.		
		<input type="checkbox"><span class="checkmark"></span>
		</label> 

		<label class="container"> Place the bowl into the fridge and let it sit for one hour and ten minutes.
		<input type="checkbox"><span class="checkmark"></span>
		</label> 

		<p style="border: 2px black solid; text-align: center;"><input onclick="timeMeOne()" type = "button" value = "Start"><span id = "time"> 70:00 </span></input>
		</p>

		<label class="container"> After refrigerating, take out the pudding and place into serving bowls.
		<input type="checkbox"> <span class="checkmark"></span>
		</label> 

		<label class="container"> Enjoy!
		<input type="checkbox"> <span class="checkmark"></span>
		</label> 

		<p>(allrecipes.com)</p>

	</aside>

</body>
</html>