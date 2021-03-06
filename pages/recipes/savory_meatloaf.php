<?php

session_start();

$account = "Login";
$link = "SignIn.php";

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

?>

<!doctype html>
<html>
<head>
<title> Code Chefs: Savory Meatloaf </title>
<link rel="stylesheet" type="text/css" href="../../miniproject1.css">

</head>
<body>
	<script type="text/javascript" src="../../miniproject1.js"></script>
	<script type="text/javascript" src="../../miniproject2.js"></script>
	<script type="text/javascript" src="../../miniproject3.js"></script>

	<!-- Nav Bar -->
	<div class="navbar">
		<a href="../index.php" class="topL">Home</a><img src="../../images/codecheflogo.jpg" class="codecheflogo">
	</div>
	<div class="topR">
		<a href="<?php echo $link ?>" id="login" class="topRdis"><?php echo $account ?></a>
		<a href="../index.php#FAQ" target="_blank">FAQ</a> <span class="tab"></span>
		<a href="../index.php#Contact" target="_blank">Contact</a> <span
			class="tab"></span>
	</div>

	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

	<div class="recipeTitle">Savory Meatloaf</div>
	<!-- End of Navbar -->

	<br>
	<br>

	<div>
		<img src="../../images/savory_meatloaf.jpeg" class="centerImg">
	</div>

	<aside style="flex-basis: 33%; padding: 2em; margin: 2em;">
		<!-- <h3>Savory Meatloaf</h3> -->
		<p>Ingredients:</p>
		<label class="container"> 2 pounds ground beef <input
			type="checkbox"> <span class="checkmark"></span>
		</label> 

		<label class="container"> 2 tablespoons grated onion <input 				type="checkbox"> <span class="checkmark"></span>
		</label> 

		<label class="container"> 1 large egg (slightly beaten) <input type="checkbox"> <span class="checkmark"></span>
		</label> 

		<label class="container"> &frac12 teaspoon of garlic (crushed and finely minced) <input type="checkbox"> <span class="checkmark"></span>
		</label> 

		<label class="container"> &frac34 cup of oatmeal <input type="checkbox"> <span class="checkmark"></span>
		</label> 
	
		<label class="container"> &frac34 cups of milk (reduced fat/whole) <input type="checkbox"> <span class="checkmark"></span>
		</label>

		<label class="container"> &frac14 cups of ketchup (reduced sodium can be substituted) <input type="checkbox"> <span class="checkmark"></span>
		</label>

		<label class="container"> 1 tablespoon of Worcestershire sauce <input type="checkbox"> <span class="checkmark"></span>
		</label>

		<label class="container"> 1&frac14 teaspoons of salt <input type="checkbox"> <span class="checkmark"></span>
		</label>

		<label class="container"> &frac14 teaspoons of ground black pepper <input type="checkbox"> <span class="checkmark"></span>
		</label>

		<label class="container"> &frac12 teaspoons of dried thyme (can be substituted with sage)<input type="checkbox"> <span class="checkmark"></span>
		</label>
		<p>
			Missing something? Click <a href="https://www.instacart.com"
				target="_blank" style="text-decoration: underline;">here</a> for
			Instacart
		</p>
		<br>
		<p>Directions:</p>

		<label class="container"> Preheat the oven to 350&#x2109. Spray a large
			meatloaf lightly with baking spray. <input type="checkbox"> <span
			class="checkmark"></span>
		</label> 

		<label class="container"> Combine the ground beef, grated onion, egg, garlic, oatmeal, milk, ketchup, Worcestershire sauce, salt, pepper and thyme (or sage) into a bowl. Stir the ingredients together.
		 <input type="checkbox"><span class="checkmark"></span>
		</label> 

		<label class="container"> Pack the mixture of ground beef into the sprayed meatloaf pan.
		<input type="checkbox"><span class="checkmark"></span>
		</label> 

		<label class="container"> Bake the mixture into the oven and bake it for 1 hour and 10 minutes. <input type="checkbox">
			<span class="checkmark"></span>
		</label>
		<p style="border: 2px black solid; text-align: center;"><input onclick="timeMe70()" type = "button" value = "Start"><span id = "time70"> 70:00 </span></input>
		</p>
		<label class="container"> Spread ketchup over the top of the meatloaf and return it to the oven for 25 minutes.
		 <input type="checkbox"> <span class="checkmark"></span>
		</label> 

		<p style="border: 2px black solid; text-align: center;"><input onclick="timeMe25()" type = "button" value = "Start"><span id = "time25"> 25:00 </span></input>
		</p>

		<label class="container"> Remove it from the oven and serve.		 		<input type="checkbox"> <span class="checkmark"></span>
		</label> 
		<p>(thespruceeats.com)</p>

	</aside>

</body>
</html>