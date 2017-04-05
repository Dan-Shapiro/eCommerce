<!DOCTYPE HTML>
<!--
	Telephasic by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Union | Checkout</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
	</head>
	<body class="no-sidebar">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<div id="header" class="container">

						<!-- Logo -->
							<h1 id="logo"><a href="index.html"><img src="images/logo_trans.png" height="30px;" />nion</a></h1>

						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li>
										<a href="index.html">Home</a>
										<!--
										<ul>
											<li><a href="#">Lorem ipsum dolor</a></li>
											<li><a href="#">Magna phasellus</a></li>
											<li><a href="#">Etiam dolore nisl</a></li>
											<li>
												<a href="#">Phasellus consequat</a>
												<ul>
													<li><a href="#">Lorem ipsum dolor</a></li>
													<li><a href="#">Phasellus consequat</a></li>
													<li><a href="#">Magna phasellus</a></li>
													<li><a href="#">Etiam dolore nisl</a></li>
												</ul>
											</li>
											<li><a href="#">Veroeros feugiat</a></li>
										</ul>
										-->
									</li>
									<li><a href="about.html">About</a></li>
									<li class="break"><a href="boards.php">Bulletin Boards</a></li>
									<li><a href="signup.html">Sign Up!</a></li>
								</ul>
							</nav>

					</div>
				</div>

			<!-- Main -->
				<div class="wrapper">
						
						<!-- Content -->
						<header>
							<h2> <center> Checkout </center> </h2>
						</header>

						<?php

							require 'apiCallsData.php';

							$service = $_POST["Service"];
							$price = $_POST["Price"];
							$user = $_POST["User"];

							setcookie("service", $service, time() + (86400*30), "/");
							setcookie("price", $price, time() + (86400*30), "/");
							setcookie("user", $user, time() + (86400*30), "/");

							$price_number = "";
							for($i = 0; $i < strlen($price); $i++) {
								if($price[$i] == '$') {
									continue;
								}
								else if($price[$i] == '.') {
									break;
								}
								else {
									$price_number = $price_number . $price[$i];
								}
							}

							echo "<p style='text-align:center;'>You are ordering " . $service .  " for the price of " . $price . " from " . $user . ".</p>";
						
							echo "<div style='width:300px;margin:0 auto;text-align:center;'>";
						?>

						<!--
						<form name="form1" id="myContainer" action="startPayment.php" method="POST">
						    <input type="hidden" name="csrf" value="<?php echo($_SESSION['csrf']);?>"/>
						    <input type="hidden" name="Service" value="<?php echo($service);?>"/>
						    <input type="hidden" name="Price" value="<?php echo($price);?>"/>
						    <input type="hidden" name="User" value="<?php echo($user);?>"/>
						    Name: <input type="text" name="name"><br>
						    Email: <input type="text" name="email"><br>
						    <?php echo($service) ?> Service:<input type="text" name="service_amount" value="<?php echo($price_number) ?>" readonly></input><br>
						    <input type="hidden" name="tax" value="0" readonly></input>
						    <input type="hidden" name="insurance" value="0" readonly></input>
						    <input type="hidden" name="handling_fee" value="0" readonly></input>
						    <input type="hidden" name="estimated_shipping" value="0" readonly></input>
						    <input type="hidden" name="shipping_discount" value="0" readonly></input><br>
						    <input type="hidden" name="total_amount" value="<?php echo($price_number) ?>" readonly></input>
						    <input type="hidden" name="currencyCodeType" value="USD" readonly></input>
						</form>
						-->

						<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
							<input type="hidden" name="business" value="unionBusiness@gmail.com">

							<input type="hidden" name="item_name" value="<?php echo($service); ?>">
							<input type="hidden" name="amount" value="<?php echo($price_number); ?>">
							<input type="hidden" name="currency_code" value="USD">
							<input type="hidden" name="quantity" value="1">
							<input type="hidden" name="return" value="http://localhost/CS4753/CS4753/boards.php">
							<input type="hidden" name="cancel_return" value="http://localhost/CS4753/CS4753/boards.php">

							<input type="hidden" name="cmd" value="_xclick">
							<input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
							<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
						</form>



						<!--<a class="button" href="#" onclick="validateFields()">Validate Fields</a>-->

						<?php 
							echo "</form></div>";

							/*
							$service = $_POST["Service"];
							$price = $_POST["Price"];
							$user = $_POST["User"];

							echo "<p style='text-align:center;'>You are ordering " . $service .  " for the price of " . $price . " from " . $user . ".</p>";
						
							echo "<div style='width:300px;margin:0 auto;text-align:center;'>";
							echo "<form action='checkoutMail.php' method='post'>";
							echo "Name: <input type='text' name='name'>";
							echo "<br />";
							echo "Email: <input type='text' name='email'>";
							echo "<br />";
							echo "<input type='hidden' name='service' value=" . $service . ">";
							echo "<input type='hidden' name='price' value=" . $price . ">";
							echo "<input type='hidden' name='user' value=" . $user . ">";

							//PAYPAL INFO HERE
							echo "Paypay info here";
							echo "<br />";
							echo "<br />";

							echo "<br />";
							echo "<br />";
							//DELETE ^^ WHEN ADDED

							echo "<input type='submit' value='Complete Purchase'>";
							echo "</form></div>";
							*/
						?>

						<!--
							<article id="content">
								<header>
									<h2>No Sidebar</h2>
									<p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit
									dolor neque semper.</p>
								</header>
								<a href="#" class="image featured"><img src="images/pic06.jpg" alt="" /></a>
								<p>Ut sed tortor luctus, gravida nibh eget, volutpat odio. Proin rhoncus, sapien
								mollis luctus hendrerit, orci dui viverra metus, et cursus nulla mi sed elit. Vestibulum
								condimentum, mauris a mattis vestibulum, urna mauris cursus lorem, eu fringilla lacus
								ante non est. Nullam vitae feugiat libero, eu consequat sem. Proin tincidunt neque
								eros. Duis faucibus blandit ligula, mollis commodo risus sodales at. Sed rutrum et
								turpis vel blandit. Nullam ornare congue massa, at commodo nunc venenatis varius.
								Praesent mollis nisi at vestibulum aliquet. Sed sagittis congue urna ac consectetur.</p>
								<p>Mauris eleifend eleifend felis aliquet ornare. Vestibulum porta velit at elementum
								gravida nibh eget, volutpat odio. Proin rhoncus, sapien
								mollis luctus hendrerit, orci dui viverra metus, et cursus nulla mi sed elit. Vestibulum
								condimentum, mauris a mattis vestibulum, urna mauris cursus lorem, eu fringilla lacus
								ante non est. Nullam vitae feugiat libero, eu consequat sem. Proin tincidunt neque
								eros. Duis faucibus blandit ligula, mollis commodo risus sodales at. Sed rutrum et
								turpis vel blandit. Nullam ornare congue massa, at commodo nunc venenatis varius.
								Praesent mollis nisi at vestibulum aliquet. Sed sagittis congue urna ac consectetur.</p>
								<p>Vestibulum pellentesque posuere lorem non aliquam. Mauris eleifend eleifend
								felis aliquet ornare. Vestibulum porta velit at elementum elementum.</p>
							</article>

						<div class="row features">
							<section class="4u 12u(narrower) feature">
								<div class="image-wrapper first">
									<a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
								</div>
								<header>
									<h3>Dolor sit consequat magna</h3>
								</header>
								<p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur
								vel sem sit dolor neque semper magna lorem ipsum.</p>
								<ul class="actions">
									<li><a href="#" class="button">Elevate my awareness</a></li>
								</ul>
							</section>
							<section class="4u 12u(narrower) feature">
								<div class="image-wrapper">
									<a href="#" class="image featured"><img src="images/pic04.jpg" alt="" /></a>
								</div>
								<header>
									<h3>Dolor sit consequat magna</h3>
								</header>
								<p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur
								vel sem sit dolor neque semper magna lorem ipsum.</p>
								<ul class="actions">
									<li><a href="#" class="button">Elevate my awareness</a></li>
								</ul>
							</section>
							<section class="4u 12u(narrower) feature">
								<div class="image-wrapper">
									<a href="#" class="image featured"><img src="images/pic05.jpg" alt="" /></a>
								</div>
								<header>
									<h3>Dolor sit consequat magna</h3>
								</header>
								<p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur
								vel sem sit dolor neque semper magna lorem ipsum.</p>
								<ul class="actions">
									<li><a href="#" class="button">Elevate my awareness</a></li>
								</ul>
							</section>
						</div>
						-->
					</div>
					</div>
				</div>

			<!-- Footer -->
				<!--
				<div id="footer-wrapper">
					<div id="footer" class="container">
						<header class="major">
							<h2>Euismod aliquam vehicula lorem</h2>
							<p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur vel sem sit<br />
							dolor neque semper magna lorem ipsum feugiat veroeros lorem ipsum dolore.</p>
						</header>
						<div class="row">
							<section class="6u 12u(narrower)">
								<form method="post" action="#">
									<div class="row 50%">
										<div class="6u 12u(mobile)">
											<input name="name" placeholder="Name" type="text" />
										</div>
										<div class="6u 12u(mobile)">
											<input name="email" placeholder="Email" type="text" />
										</div>
									</div>
									<div class="row 50%">
										<div class="12u">
											<textarea name="message" placeholder="Message"></textarea>
										</div>
									</div>
									<div class="row 50%">
										<div class="12u">
											<ul class="actions">
												<li><input type="submit" value="Send Message" /></li>
												<li><input type="reset" value="Clear form" /></li>
											</ul>
										</div>
									</div>
								</form>
							</section>
							<section class="6u 12u(narrower)">
								<div class="row 0%">
									<ul class="divided icons 6u 12u(mobile)">
										<li class="icon fa-twitter"><a href="#"><span class="extra">twitter.com/</span>untitled</a></li>
										<li class="icon fa-facebook"><a href="#"><span class="extra">facebook.com/</span>untitled</a></li>
										<li class="icon fa-dribbble"><a href="#"><span class="extra">dribbble.com/</span>untitled</a></li>
									</ul>
									<ul class="divided icons 6u 12u(mobile)">
										<li class="icon fa-instagram"><a href="#"><span class="extra">instagram.com/</span>untitled</a></li>
										<li class="icon fa-youtube"><a href="#"><span class="extra">youtube.com/</span>untitled</a></li>
										<li class="icon fa-pinterest"><a href="#"><span class="extra">pinterest.com/</span>untitled</a></li>
									</ul>
								</div>
							</section>
						</div>
					</div>
					<div id="copyright" class="container">
						<ul class="menu">
							<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</div>
				</div>
				-->

		</div>

		<div id="copyright" class="container" style="margin-top:0px;">
						<ul class="menu">
							<li>ContactUnion@gmail.com</li>
							<li>(233)555-3459</li>
						</ul>
					</div>

		<!-- Scripts -->

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>

			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

			<script type="text/javascript">
			function validateFields() {

			}

			   window.paypalCheckoutReady = function () {
			       paypal.checkout.setup('unionBusiness@gmail.com', {
			           container: 'myContainer', //{String|HTMLElement|Array} where you want the PayPal button to reside
			           environment: 'sandbox', //or 'production' depending on your environment
			           
			           /*
			           click: function(event) {
			           	
			           		var my_form = document.forms["form1"];
			           		if(!checkFields()){
			           			event.preventDefault();
			           		}
			           	
			           }
			           */
			       });
			   };
			    function checkFields() {
			   		var my_form = document.forms["form1"];
			   		
						var x = my_form["name"].value;
						if(x == "") {
							alert("Name field must be filled out!");
							return false;
						}
						//check name is only letters
						if(!onlyLetters(x)){
							alert("Name field must only be made up of letters");
							return false;
						}

						//Check email is not empty, contains @ and .edu
						x = my_form["email"].value
						if(x == "") {
							alert("Email field must be filled out!");
							return false;
						}
						if(!validateEmail(x)) {
							alert("Email must be a valid .edu address!");
							return false;
						}
				   	return true;
			    };

			    function onlyLetters(text) {
					//checks that text is only letters and spaces
					var isTrue = false;
					var regex = /^[a-zA-Z\s]*$/;  
     					return (regex.test(text));
				};

			    function validateEmail(email) {
					//Checks email is of the form:
					//[chars]@[chars].edu
					//from http://stackoverflow.com/questions/26702338/setting-a-form-to-only-allow-edu-email-addresses
					//var regex = /^([\w-]+(?:\.[\w-]+)*)@(?:[\w-]+\.)+edu/i;
					//var regex = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
					
					var regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
					//^^^^from http://emailregex.com/
					return (regex.test(email) && email.substr(-4) == ".edu");
				};

			   
			</script>
			<!--<script src="//www.paypalobjects.com/api/checkout.js" async></script>-->

	</body>
</html>
