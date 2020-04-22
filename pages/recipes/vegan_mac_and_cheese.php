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

<!doctype HTML>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../../miniproject1.css">
<title>Code Chefs: Vegan Mac and Cheese</title>
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

	<div class="recipeTitle">Vegan Mac and Cheese </div>
	<!-- End of Navbar -->

	<br>
	<br>

	<div>
		<img src="../../images/vegan_mac_and_cheese.jpeg" class="centerImg">
	</div>

	<aside style="flex-basis: 33%; padding: 2em; margin: 2em;">

		<!-- <h3>Vegan Mac and Cheese </h3> -->
		<p>Ingredients:</p>

		<label class="container"> 8oz whole-grain macaroni elbows <input 			type="checkbox"> <span class="checkmark"></span>
		</label> 

		<label class="container"> 1 &frac15; tablespoons of avocado oil or extra 		virgin olive oil <input type="checkbox"> <span class="checkmark"></span>
		</label> 
		
		<label class="container"> 1 small yellow onion, chopped (about 1 &#189; 		cups) <input type="checkbox"> <span class="checkmark"></span>
		</label> 

		<label class="container"> 1 cup peeled and grated russet potato (4 ounces, 		about 1 small or &#189; medium potato), preferably organic <input 				type="checkbox"> <span class="checkmark"></span>
		</label> 

		<label class="container"> 3 cloves garlic, pressed or minced <input 			type="checkbox"> <span class="checkmark"></span>
		</label> 
		
		<label class="container">  teaspoon garlic powder <input type="checkbox"> 		<span class="checkmark"></span>
		</label>

		<label class="container"> &#189; teaspoon onion powder <input 				type="checkbox"><span class="checkmark"></span></label>

		<label class="container"> &#189; teaspoon dry mustard powder <input 				type="checkbox"><span class="checkmark"></span>
		</label>

		<label class="container"> &#189; teaspoon fine sea salt, more to taste 			<input type="checkbox"><span class="checkmark"></span></label>

		<label class="container"> Small pinch of Frontier Co-op red pepper flakes 		<input type="checkbox"><span class="checkmark"></span>
		</label>

		<label class="container"> Small pinch of Frontier Co-op red pepper flakes 		<input type="checkbox"><span class="checkmark"></span>
		</label>

		<label class="container"> &frac23; cup raw cashews <input 				type="checkbox"><span class="checkmark"></span>
		</label>

		<label class="container"> 1 cup water, more as necessary <input 			type="checkbox"><span class="checkmark"></span>
		</label>

		<label class="container"> &frac14; cup Frontier Co-op nutritional yeast 		<input type="checkbox"><span class="checkmark"></span>
		</label>

		<label class="container"> 2 to 3 teaspoons apple cider vinegar or 			distilled white vinegar, to taste <input type="checkbox"><span 				class="checkmark"></span>
		</label>

		<p>
		Missing something? Click <a href="https://www.instacart.com"
		target="_blank" style="text-decoration: underline;">here</a> for 			Instacart</p>
		<br>
		<p>Directions:</p>

		<label class="container"> Bring a large pot of salted water to boil for 		the pasta. Cook according to package directions. If using broccoli, stir 		it into the pot when just 2 to 3 more minutes remain. Drain, and transfer 		the contents to a large serving bowl. <input type="checkbox"><span 			class="checkmark"></span></label> 

		<label class="container"> Meanwhile, in a medium-to-large saucepan, warm 		the oil over medium heat. Add the onion and a pinch of salt and cook, 			stirring often, until the onion is tender and turning translucent, about 5 		minutes. <input type="checkbox"> <span class="checkmark"></span></label> 

		<label class="container"> Add the grated potato, garlic, garlic powder, 		onion powder, mustard powder, salt and red pepper flakes. Stir to combine, 		and cook, stirring constantly, for about 1 minute to enhance their 			flavors. <input type="checkbox"><span class="checkmark"></span></label>
		
		<p style="border: 2px black solid; text-align: center;"><input onclick="timeMe25()" type = "button" value = "Start"><span id = "time25"> 25:00 </span></input>
		</p>
		<label class="container"> Add the cashews and water, and stir to combine. 		Let the mixture come to a simmer. Continue simmering, stirring frequently 		and reducing heat as necessary to avoid a rapid boil, until the potatoes 		are completely tender and cooked through, about 5 to 8 minutes. <input 			type="checkbox"> <span class="checkmark"></span></label>

 		<label class="container"><input type="checkbox"> Carefully pour the 			mixture into a blender. Add the nutritional yeast and 2 teaspoons vinegar. 		Blend until the mixture is completely smooth, about 2 minutes, stopping to 		scrape down the sides if necessary. If the mixture won't blend easily or 		if you would prefer a thinner consistency, add water in &frac14; cup 			increments, blending after each one. <span class="checkmark"></span>
		</label>
		
		<p style="border: 2px black solid; text-align: center;"><input onclick="timeMe5()" type = "button" value = "Start"><span id = "time5"> 05:00 </span></input>
		</p>
		<label class="container"> <input type="checkbox"> Taste, and blend in 			additional salt until the sauce is utterly irresistible (I typically add 		at least another &#189; teaspoon). If it needs a little more zip, add the 		remaining teaspoon of vinegar. Blend again. <span class="checkmark"></			span></label>
		
		<label class="container"> <input type="checkbox"> Pour the sauce into the 		bowl of pasta. Stir until well combined, and serve immediately. Leftovers 		keep well, chilled and covered, for 3 to 4 days. Gentle reheat, adding a 		tiny splash of water if necessary to loosen up the sauce. <span 			class="checkmark"></span></label>

		<p>(skinnytaste.com)</p>

	</aside>

</body>
</html>