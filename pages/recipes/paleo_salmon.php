<?php

session_start();

$account = "Login";
$link = "SignIn.php";

$servername = "localhost";
$username = "wlyons2";
$password = "wlyons2";
$database = "wlyons2";

$conn = new mysqli($servername, $username, $password, $database);

if ($_SESSION['email'] != "") {
    $account = "My Account ";
    $user = $_SESSION['email'];
    $sql = "select first_name from admin where email = '$user'";
    $result = mysqli_query($conn, $sql);
    
    if ($result) {
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
<title> Code Chefs: Paleo Pecan-Maple Salmon </title>
<link rel="stylesheet" type="text/css" href="../../miniproject1.css">

</head>
<body>
<script type = "text/javascript" src = "../../miniproject3.js"></script>
<script type = "text/javascript" src = "../../miniproject1.js"></script>



	<!-- Nav Bar -->
	<div class="navbar">
		<a href="../index.php" class="topL">Home</a><img src="../../images/codecheflogo.jpg"
			class="codecheflogo">
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

	<div class="recipeTitle">Paleo Salmon</div>
	<!-- End of Navbar -->

	<br>
	<br>

	<div>
		<img src="../../images/paleo_salmon.jpg" class="centerImg">
	</div>

	<aside style="flex-basis: 33%; padding: 2em; margin: 2em;">
		<!-- <h3>Paleo Pecan-Maple Salmon</h3> -->
		<p>Ingredients:</p>
		<label class="container"> Four salmon filets <input
			type="checkbox"> <span class="checkmark"></span>
		</label> 

		<label class="container"> &frac12 cup of pecans<input 				type="checkbox"> <span class="checkmark"></span>
		</label> 

		<label class="container"> 3 tablespoons of pure maple syrup <input type="checkbox"> <span class="checkmark"></span>
		</label> 

		<label class="container"> 1 tablespoon of apple cider vinegar <input type="checkbox"> <span class="checkmark"></span>
		</label> 

		<label class="container"> 1 teaspoon of smoked paprika <input type="checkbox"> <span class="checkmark"></span>
		</label> 
	
		<label class="container"> &frac12 teaspoon of chipotle pepper powder <input type="checkbox"> <span class="checkmark"></span>
		</label>

		<label class="container"> &frac12 teaspoon of onion powder <input type="checkbox"> <span class="checkmark"></span>
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

		<label class="container"> Place the four salmon fillets onto a baking sheet that is covered in baking spray and seasoned with salt and pepper.
		<input type="checkbox"><span class="checkmark"></span>
		</label> 

		<label class="container"> Pack the mixture of ground beef into the sprayed meatloaf pan.
		<input type="checkbox"><span class="checkmark"></span>
		</label> 

		<label class="container"> Combine pecans, maple syrup, vinegar, paprika, chipotle powder, and onion powder into a bowl and stir them together. After stirring, coat the salmon with the mixture and while uncovered, refrigerate for one hour and ten minutes.
		<input type="checkbox">
		<span class="checkmark"></span>
		</label>

		<p style="border: 2px black solid; text-align: center;"><input onclick="timeMeOne()" type = "button" value = "Start"><span id = "time"> 70:00 </span></input>
		</p>

		<label class="container"> After refrigerating, preheat the oven to 425&#x2109.
		<input type="checkbox"> <span class="checkmark"></span>
		</label> 

		<label class="container"> Place the salmon into the oven for 25 minutes.
		<input type="checkbox"> <span class="checkmark"></span>
		</label> 

		<p style="border: 2px black solid; text-align: center;"><input onclick="timeMe()" type = "button" value = "Start"><span id = "time1"> 25:00 </span></input>
		</p>

		<label class="container"> Remove it from the oven. Let it cool and then serve.		 		<input type="checkbox"> <span class="checkmark"></span>
		</label> 
		<p>(allrecipes.com)</p>

	</aside>

</body>
</html>