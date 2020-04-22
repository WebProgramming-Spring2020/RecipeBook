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
<title> Code Chefs: Paleo Roasted Yam and Kale Salad </title>
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

	<div class="recipeTitle">Paleo Roasted Yam and Kale</div>
	<!-- End of Navbar -->

	<br>
	<br>

	<div>
		<img src="../../images/paleo_roasted_yam.jpg" class="centerImg">
	</div>

	<aside style="flex-basis: 33%; padding: 2em; margin: 2em;">
		<!-- <h3>Paleo Pecan-Maple Salmon</h3> -->
		<p>Ingredients:</p>

		<label class="container"> 2 jewel yams, cut into 1 inch cubes 
		<input type="checkbox"> <span class="checkmark"></span>
		</label> 

		<label class="container"> 2 tablespoon of olive oil 
		<input type="checkbox"> <span class="checkmark"></span>
		</label> 

		<label class="container"> Salt and freshly ground black pepper 
		<input type="checkbox"> <span class="checkmark"></span>
		</label> 
	
		<label class="container"> 1 tablespoon of olive oil
		<input type="checkbox"> <span class="checkmark"></span>
		</label>

		<label class="container"> 1 whole onion sliced
		<input type="checkbox"> <span class="checkmark"></span>
		</label>

		<label class="container"> 3 minced garlic cloves
		<input type="checkbox"> <span class="checkmark"></span>
		</label>
		
		<label class="container"> 1 torn apart bunched kale
		<input type="checkbox"> <span class="checkmark"></span>
		</label>

		<label class="container"> 2 tablespoons of red win vinegar				<input type="checkbox"> <span class="checkmark"></span>
		</label>
		

		<label class="container"> 1 tablespoon of chopped fresh thyme
		<input type="checkbox"> <span class="checkmark"></span>
		</label>

		<p>
		Missing something? Click <a href="https://www.instacart.com"
		target="_blank" style="text-decoration: underline;">here</a> for Instacart
		</p>

		<br>
		<p>Directions:</p>

		<label class="container"> Preheat the oven to 400&#x2109. Toss the yams with 2 tablespoons of olive oil into a bowl. Season to taste with salt and pepper and then arrange them evenly onto a baking sheet.
		 <input type="checkbox"> <span class="checkmark"></span>
		</label> 

		<label class="container"> Place the pans into the oven until the yams are tender. This should take 25 minutes.
		<input type="checkbox"><span class="checkmark"></span>
		</label> 
	
		<p style="border: 2px black solid; text-align: center;"><input onclick="timeMe()" type = "button" value = "Start"><span id = "time1"> 25:00 </span></input>
		</p>

		<label class="container"> Meanwhile, heat the remaining 1 tablespoon of olive oil in a large skillet over medium head. Add the onion and garlic into the skillet and stir until they are golden brown. Add the kale into the mixture and stir.				<input type="checkbox"><span class="checkmark"></span>
		</label> 

		<label class="container"> Transfer the kale mixture into a bowl and cool it in the refrigerator along with the yams.
		<input type="checkbox">
		<span class="checkmark"></span>
		</label>

		<label class="container"> When all the ingredients have cooled down, combine the yams, kale, red wine vinegar and fresh thyme into a bowl. Season it with salt and pepper and stir.		
		<input type="checkbox"> <span class="checkmark"></span>
		</label> 

		<label class="container"> Enjoy.
		<input type="checkbox"> <span class="checkmark"></span>
		</label> 

		<p>(allrecipes.com)</p>

	</aside>

</body>
</html>