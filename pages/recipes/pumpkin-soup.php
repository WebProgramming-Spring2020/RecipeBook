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

<!doctype HTML>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="../../miniproject1.css">
	<title>CREAMY PUMPKIN GINGER SOUP</title>
</head>

<body>
	<script type="text/javascript" src="../../miniproject1.js"></script>
	<script type="text/javascript" src="../../miniproject2.js"></script>

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

	<div class="recipeTitle">PUMPKIN SOUP </div>
	<!-- End of Navbar -->

	<br>
	<br>

	<div>
		<img src="../../images/pumpkinsoup.png" class="centerImg">
	</div>

	<aside style="flex-basis: 33%; padding: 2em; margin: 2em;">

		<!-- <h3>Vegan Mac and Cheese </h3> -->
		<p>Ingredients:</p>

		<label class="container"> 1 3-pound sugar pumpkin, halved, seeded, and quartered <input type="checkbox"> <span
				class="checkmark"></span>
		</label>

		<label class="container"> 1 &frac15; tablespoons of extra virgin olive oil <input
				type="checkbox"> <span class="checkmark"></span>
		</label>

		<label class="container"> 6 fresh thyme sprigs <input type="checkbox"> <span
				class="checkmark"></span>
		</label>

		<label class="container"> 1 teaspoon Kosher salt <input type="checkbox"> <span class="checkmark"></span>
		</label>

		<label class="container"> 3 cups vegetable or chicken broth, plus more if needed<input type="checkbox"> <span
				class="checkmark"></span>
		</label>

		<label class="container"> 3 fresh sage leaves, chopped <input type="checkbox"> <span class="checkmark"></span>
		</label>

		<label class="container"> 2 large shallots, chopped <input type="checkbox"><span
				class="checkmark"></span></label>


		<p>
			Missing something? Click <a href="https://www.instacart.com" target="_blank"
				style="text-decoration: underline;">here</a> for Instacart</p>
		<br>
		<p>Directions:</p>

		<label class="container"> Preheat the oven to 400 degrees F. Lightly oil a baking sheet or coat with nonstick spray. <input type="checkbox"><span
				class="checkmark"></span></label>

		<label class="container"> Place the pumpkin and thyme on the prepared baking sheet. Drizzle with the olive oil and season with 1/4 teaspoon salt and pepper. Gently toss to combine and arrange in a single layer. <input type="checkbox"> <span class="checkmark"></span></label>

		<label class="container"> Roast for 60 to 65 minutes, stirring halfway through, until the pumpkin is fork-tender. <input type="checkbox"><span class="checkmark"></span></label>

		<p style="border: 2px black solid; text-align: center;"><input onclick="timeMe()" type="button"
				value="Start"><span id="time"> 60:00 </span></input>
		</p>
		<label class="container"> Let cool, and then remove the peel from the pumpkin. <input type="checkbox"> <span
				class="checkmark"></span></label>

		<label class="container"><input type="checkbox"> Puree using an immersion blender until smooth. Add the Greek yogurt and blend.
Pour into 4 bowls. <span class="checkmark"></span>
		</label>

		<label class="container"> <input type="checkbox"> Serve immediately, garnished with chives, plus more yogurt, pepitas, chives, and nutmeg, if desired. <span class="checkmark"></ span></label>

		

		<p>(skinnytaste.com)</p>

	</aside>

</body>

</html>