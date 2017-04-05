<?php
	session_start();

	if(!isset($_SESSION['good']))
	{
		header("Location: notallowed.php");
	}
?>

<!DOCTYPE HTML>
<!--
	Telephasic by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Union | Make a post!</title>
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
							<h1 id="logo"><a href="index2.php">Member's<img src="images/logo_trans.png" height="30px;" />nion</a></h1>

						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li>
										<a href="index2.php">Home</a>
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
									<li><a href="inbox.php">Inbox</a></li>
									<li class="break"><a href="boards2.php">Bulletin Boards</a></li>
									<li><a href="logout.php">Log Out</a></li>
								</ul>
							</nav>

					</div>
				</div>

			<!-- Main -->
				<div class="wrapper">

					<div class= "form" id="main">
						<header>
							<h2> <center> Make a post! </center> </h2>
						</header>
						
						<!-- Content -->
						<form name="my_form" onsubmit="return validateForm()" action="formHandler.php" method="post">
							Name: <input type="text" name="NamePost" />
							<br />
							Service: <input type="text" name="Service" />
							<br />
							Description: <textarea rows="5" name="Description"> </textarea> 
							<br />
							Price: <input type="text" name="Price"/>
							<br />
							<br />
							<br />
							<input type="submit" value="Submit" style="margin-left: 80px;" />
						</form>

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

		<div id="copyright" class="container" style="margin-top:-50px;">
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
				function validateForm() {
					//get form from document
					var my_form = document.forms["my_form"];

					//check Name is not empty
					var x = my_form["Name"].value;
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
					x = my_form["Email"].value
					if(x == "") {
						alert("Email field must be filled out!");
						return false;
					}
					if(!validateEmail(x)) {
						alert("Email must be a valid .edu address!");
						return false;
					}

					//Check email is not in use
					if(!checkEmail(x)) {
						alert("Email is already in use!");
						return false;
					}

					//Check Address is not empty
					var x = my_form["Address"].value;
					if(x == "") {
						alert("Address field must be filled out!");
						return false;
					}

					//Check City is not empty
					var x = my_form["City"].value;
					if(x == "") {
						alert("City field must be filled out!");
						return false;
					}

					//check City is only letters
					if (!onlyLetters(x)) {
						alert("City field must only be made up of letters");
						return false;
					}
					//Check State is selected
					var x = my_form["State"].value;
					if(x == "") {
						alert("State field must be selected!");
						return false;
					}

					//Check zip is not empty and 5 digits
					x = my_form["Zip"].value
					if(x == "") {
						alert("Zip field must be filled out!");
						return false;
					}
					if(!validateZip(x)) {
						alert("Zip must be 5 digits!");
						return false;
					}
				}

				function onlyLetters(text) {
					//checks that text is only letters and spaces
					var isTrue = false;
					var regex = /^[a-zA-Z\s]*$/;  
     					return (regex.test(text));
				}

				function checkEmail(email) {
					//Checks from db if the email is in use
					var isTrue = false;
					$.ajax({
						type: "POST",
						url: "checkEmail.php",
						async: false,
						//sends email to backend
						data: { Email: email },
						//receives true if email is already in db
						success: function(data) {
							isTrue = data.includes("true");
						}
					})
					return isTrue;
				}
				
				function validateEmail(email) {
					//Checks email is of the form:
					//[chars]@[chars].edu
					//from http://stackoverflow.com/questions/26702338/setting-a-form-to-only-allow-edu-email-addresses
					//var regex = /^([\w-]+(?:\.[\w-]+)*)@(?:[\w-]+\.)+edu/i;
					//var regex = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
					
					var regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
					//^^^^from http://emailregex.com/
					return (regex.test(email) && email.substr(-4) == ".edu");
				}

				function validateZip(zip) {
					//Checks zip is exactly 5 digits
					var regex = /\b\d{5}\b/g;
					return regex.test(zip);
				}
			</script>

	</body>
</html>
