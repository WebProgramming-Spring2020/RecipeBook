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
<title>Code Chefs: Chicken Parm</title>
<link rel="stylesheet" type="text/css" href="../../miniproject1.css">

</head>
<body>
<script type = "text/javascript" src = "../../miniproject1.js"></script>
<script type = "text/javascript" src = "../../miniproject2.js"></script>

	<!-- Nav Bar -->
	<div class="navbar">
		<a href="../index.php" class="topL">Home</a><img src="../../images/codecheflogo.jpg"
			class="codecheflogo">
	</div>
	<div class="topR">
		<a href="<?php echo $link ?>" id="login" class="topRdis"><?php echo $user ?></a>
		<span class="tab"></span> 
		<a href="#FAQ" class="topRdis">FAQ</a>
		<span class="tab"></span> 
		<a href="#Contact" class="topRdis">Contact</a> 
		<span class="tab"></span>
	</div>

	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

	<div class="recipeTitle">Chicken Parm</div>
	<!-- End of Navbar -->

	<br>
	<br>

	<div>
		<img src="../../images/chickenparm.jpeg" class="centerImg">
	</div>

	<aside style="flex-basis: 33%; padding: 2em; margin: 2em;">
		<!-- <h3>Chicken Parm</h3> -->
		<p>Ingredients:</p>
		<label class="container"> 4 Chicken Breasts <input
			type="checkbox"> <span class="checkmark"></span>
		</label> <label class="container"> 3/4 cup seasoned breadcrumbs <input
			type="checkbox"> <span class="checkmark"></span>
		</label> <label class="container"> 1/4 cup grated Parmesan cheese <input
			type="checkbox"> <span class="checkmark"></span>
		</label> <label class="container"> 2 tbsp melted Butter <input
			type="checkbox"> <span class="checkmark"></span>
		</label> <label class="container"> 3/4 cup reduced fat Mozzarella
			cheese <input type="checkbox"> <span class="checkmark"></span>
		</label> <label class="container"> 1 cup Marinara <input
			type="checkbox"> <span class="checkmark"></span>
		</label>
		<p>
			Missing something? Click <a href="https://www.instacart.com"
				target="_blank" style="text-decoration: underline;">here</a> for
			Instacart
		</p>
		<br>
		<p>Directions:</p>

		<label class="container"> Preheat oven to 450°F. Spray a large
			baking sheet lightly with spray. <input type="checkbox"> <span
			class="checkmark"></span>
		</label> <label class="container"> Combine breadcrumbs and parmesan
			cheese in a bowl. Melt the butter in another bowl. Lightly brush the
			butter onto the chicken, then dip into breadcrumb mixture. Place on
			baking sheet and repeat with the remaining chicken. <input
			type="checkbox"> <span class="checkmark"></span>
		</label> <label class="container"> Lightly spray a little more oil on
			top and bake in the oven for 25 minutes. <input type="checkbox">
			<span class="checkmark"></span>
		</label>
		<p style="border: 2px black solid; text-align: center;"><input onclick="timeMe()" type = "button" value = "Start"><span id = "time"> 25:00 </span></input>
		</p>
		<label class="container"> Remove from oven, spoon 1 tbsp sauce
			over each piece of chicken and top each with 1 1/2 tbsp of shredded
			mozzarella cheese. <input type="checkbox"> <span
			class="checkmark"></span>
		</label> <label class="container"> Bake 5 more minutes or until cheese
			is melted. <input type="checkbox"> <span class="checkmark"></span>
		</label>
		<p style="border: 2px black solid; text-align: center;"><input onclick="timeMeOne()" type = "button" value = "Start"><span id = "time1"> 05:00 </span></input>
		</p>
		<p>(skinnytaste.com)</p>

	</aside>

</body>
</html>