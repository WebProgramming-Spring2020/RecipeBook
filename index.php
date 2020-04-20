<?php

session_start();

$user = "Login";

if ($_SESSION['email'] != ""){
	$user = $_SESSION['email'];
}

?>


<!DOCTYPE html>
<html>

<head>
	<title>Code Chef Recipes</title>
	<link rel="stylesheet" type="text/css" href="miniproject1.css">

</head>

<body>
	<script type="text/javascript" src="dateTime.js"></script>
	<script type="text/javascript" src="search.js"></script>
	<script type="text/javascript" src="miniproject1.js"></script>
	<div class="navbar">
		<a href="#Home" class="topL">Home</a>
		<img src="codecheflogo.jpg" class="codecheflogo">

	</div>
	<div class="topR">
		<a href="SignIn.php" id="login" class="topRdis"><?php echo $user ?></a>
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

	<div class="title">Code Chef Recipes</div>

	<br>
	<br>

	<div class="des">Code Chef Recipes is about finding the perfect
		recipe for you! With over two recipes to choose from, you'll never run
		out of options!</div>

	<br>
	<br>
	<br>
	<hr>
	<br>

	<!-- Search Area -->

	<h1>Search Recipes</h1>

	<div class="searchBox">
		<form method="POST" action="search.php">
			<div class="inner-form">
				<div class="basic-search">
					<div class="input-field">
						<input id="search" type="text" placeholder="Type Keywords" />
						<div class="icon-wrap">
							<svg class="svg-inline--fa fa-search fa-w-16" fill="#ccc" aria-hidden="true"
								data-prefix="fas" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg"
								viewBox="0 0 512 512">
								<path
									d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z">
								</path>
							</svg>
						</div>
					</div>
				</div>
				<div class="advance-search">
					<span class="desc">ADVANCED SEARCH</span>
					<div class="row">
						<div class="input-field">
							<div class="input-select">
								<select data-trigger="" name="choices-single-defaul">
									<option placeholder="" value="">Diet</option>
									<option>Paleo</option>
									<option>Vegetarian</option>
									<option>Vegan</option>
								</select>
							</div>
						</div>
						<div class="input-field">
							<div class="input-select">
								<select data-trigger="" name="choices-single-defaul">
									<option placeholder="" value="">Meal</option>
									<option>Breakfast</option>
									<option>Lunch/Dinner</option>
									<option>Snack</option>
								</select>
							</div>
						</div>
						<div class="input-field">
							<div class="input-select">
								<select data-trigger="" name="choices-single-defaul">
									<option placeholder="" value="">Time</option>
									<option>Less than 20 minutes</option>
									<option>Less than 1 hour</option>
									<option>More than 1 hour</option>
								</select>
							</div>
						</div>
					</div>

					<div class="row third">
						<div class="input-field">
							<div class="result-count">
								<span>0 </span>results
							</div>
							<div class="group-btn">
								<button class="btn-delete" id="delete">RESET</button>
								<button class="btn-search" id="submit" name="submit">SEARCH</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>


	<br>
	<br>
	<br>
	<hr>
	<br>

	<!-- Browse Recipes -->

	<h1>Browse Recipes</h1>

	<div class="imageGrid">
		<div class="column">
			<div class="row">
				<a href="ChickenParm.html">
					<div class="containerimg">
						<img src="chickenparm.jpeg" class="gridImage">
						<div class="overlay">
							<div class="text">Pasta with baked breaded chicken cutlets
								topped with homemade marinara sauce and melted mozzerella
								cheese!</div>
						</div>
					</div>
				</a>
				<p class="textUnderImage">Baked Chicken Parm</p>
			</div>
			<div class="row">
				<a href="vegan_mac_and_cheese.html">
					<div class="containerimg">
						<img src="vegan_mac_and_cheese.jpeg" class="gridImage">
						<div class="overlay">
							<div class="text">Tender macaroni pasta is tossed in a
								creamy cashew “cheese” sauce!</div>
						</div>
					</div>
				</a>
				<p class="textUnderImage">Vegan Mac & Cheese</p>
			</div>
		</div>
		<div class="column">
			<div class="row">
				<a href="pumpkin-soup.html">
					<div class="containerimg">
						<img src="pumpkinsoup.png" class="gridImage">
						<div class="overlay">
							<div class="text">This Creamy Pumpkin Ginger Soup is the perfect cozy, fall soup made creamy without adding any cream!</div>
						</div>
					</div>
				</a>
				<p class="textUnderImage">Creamy Pumpkin Soup</p>
			</div>
			<div class="row">
				<a href = "savory_meatloaf.html">
					<div class="containerimg">
						<img src="savory_meatloaf.jpeg" class="gridImage">
						<div class="overlay">
							<div class="text">Savory and tender meatloaf made with ground beef and oatmeal. Delicious and hearty!
							</div>
						</div>
					</div>
				</a>
				<p class="textUnderImage">Savory Meatloaf</p>
			</div>
		</div>
		<div class="column">
			<div class="row">
				<a href="paleo_salmon.html">
					<div class="containerimg">
						<img src="paleo_salmon.jpg" class="gridImage">
						<div class="overlay">
							<div class="text"> Fillet salmon covered with maple syrup and pecans. Delicious and nutritious!
							</div>
						</div>
					</div>
				</a>
				<p class="textUnderImage">Baked Chicken Parm</p>
			</div>
			<div class="row">
				<a href="jicama_sticks.html">
					<div class="containerimg">
						<img src="jicama_sticks.jpg" class="gridImage">
						<div class="overlay">
							<div class="text">T Sweet and fiery Jicama sticks with chili powder!
							</div>
						</div>
					</div>
				</a>
				<p class="textUnderImage">Jicama Snack Sticks</p>
			</div>
		</div>
		<div class="column">
			<div class="row">
				<a href="paleo_yam.html">
					<div class="containerimg">
						<img src="paleo_roasted_yam.jpg" class="gridImage">
						<div class="overlay">
							<div class="text">Paleo Roasted Yan salad with Kale							
							</div>
						</div>
					</div>
				</a>
				<p class="textUnderImage">Paleo Roasted Yam Salad with Kale</p>
			</div>
			<div class="row">
				<a href="abc_pudding.html">
					<div class="containerimg">
						<img src="Avocado, banana and chocolate pudding.jpg" class="gridImage">
						<div class="overlay">
							<div class="text">Vegan pudding made with avocados, bananas and chocolate. Healthy and nutritious!
							</div>
						</div>
					</div>
				</a>
				<p class="textUnderImage">ABC Pudding</p>
			</div>
		</div>
	</div>
	<br>
	<br id="About">
	<hr>
	<br>
	<div class="about">
		<h1>About</h1>
		<p>Code Chef Recipes is about finding the perfect recipe for you!
			With over two recipes to choose from, you'll never run out of
			options! Code Chef Recipes began way back in February of 2020, and it
			has come a long way since. We began as a start-up mini project for a
			Web Programming class at Georgia State University. Look at how far
			we've come! We are still just a start-up for a mini project! Now,
			that's called progress. Our website was started by three Computer
			Science students - Hiba, Stephen, and Will. They envisioned a recipe
			website to apply their new found HTML and CSS skills, and voila! Code
			Chef was born! We hope you enjoy the the recipes and functionalities
			available on our website. Bon Appétit!
		</p>
	</div>
	<br id="FAQ">
	<hr>
	<br>
	<div class="FAQ">
		<h1>Frequently Asked Questions</h1>
		<p>
			<span class="bold">I tried one of your recipes, but it did not
				turn out right. What did I do wrong?
			</span>
			<br>
			<span class="FAQtab">
				Well, you know, I don't know what to tell you... Maybe the second
				time's the charm? Try again.
			</span>
		</p>



		<p>
			<span class="bold">Can I substitute ingredients?</span> <br> <span class="FAQtab"> Yes, go for it! It might
				turn out to be a
				whole different meal, but have fun experimenting! </span>
		</p>

		<p>
			<span class="bold">What is the best way to store leftovers?</span> <br>
			<span class="FAQtab"> It depends on the item you're storing.
				The fridge, freezer, pantry, cabinets, your stomach - it really depends on the
				item. </span>
		</p>

		<p>
			<span class="bold">Can you share the nutritional information
				for this recipe?</span> <br> <span class="FAQtab"> We are not
				dieticians, so we can't actually give you nutritional information.
				You're best friend can be Google. It has all the answers! </span>
		</p>
		<p>
			<span class="bold">Do you have a cookbook?</span> <br> <span class="FAQtab"> No. </span>
		</p>

		<p>
			<span class="bold">Can I send a recipe suggestion?</span> <br> <span class="FAQtab"> Of course! We love that
				you're interested in
				our site! Send us an email about your
				recipe suggestion that will never get looked at. </span>
		</p>

		<p>
			<span class="bold">Can I add my own recipe to you site?</span> <br>
			<span class="FAQtab"> Yes! We love to see loyal Code
				Chefs interested in helping us grow! Send us an email about your
				recipe and we might add it to our site. </span>
		</p>

		<p>
			<span class="bold">How can I contact you?</span> <br> <span class="FAQtab"> Click "Contact" in the top right
				corner or
				keep scrolling down for our contact information! </span>
		</p>

	</div>
	<br id="Contact">
	<hr>
	<br>
	<div class="contact">
		<h1>Contact</h1>
		<p>Here at Code Chef, we strive for your satisfaction. If you have
			further questions or concerns, please contact us. We will get back to
			you never!
		</p>
	</div>
	<div class="contactinfo">
		<p>
			Phone Number: <span class="contactinfoR"></span> 1(800)555-5555
		</p>
		<p>
			Fax Number: <span class="contactinfoR"></span>
			<span class="tabcontact"></span>
			<span class="tabcontact"></span>
			1(800)555-5555
		</p>
		<p>
			Email: <span class="contactinfoR"></span> <span class="contactinfoR"></span>
			<span class="contactinfoR"></span> <span class="tabcontact"></span> <span class="tabcontact"></span>
			CodeChef@WebProgramming.com
		</p>
		<p>
			Office Address: <span class="tabcontact"></span> <span class="tab"></span>
			<span class="tab"></span> <span class="tab1"></span> 123 NotaRealAddy
			Ave, Atlanta, GA
		</p>
		<p>
			Office Hours: <span class="contactinfoR"></span>
			<span class="tabcontact"></span> <span class="tab"></span> Monday
			12:00am-12:01am
		</p>
		<p>
			YouTube Link 1:<span class="contactinfoR"></span>
			<span class="tab"></span>
			<a href="https://youtu.be/PyldKTg1alk">Mini-Project 1</a>
		</p>
		<p>
			YouTube Link 2:<span class="contactinfoR"></span>
			<span class="tab"></span>
			<a href="https://www.youtube.com/watch?v=nzlZeg3XfxE&t=4s">Mini-Project 2 </a>
		</p>
		<p>
			YouTube Link 3:<span class="contactinfoR"></span>
			<span class="tab"></span>
			<a href="">Mini-Project 3 </a>
		</p>
		<p>
			Countdown Timer: <span id="demo"></span>
			<span class="tabcontact"></span><span class="tab"></span>
		</p>







	</div>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>


</body>

</html>