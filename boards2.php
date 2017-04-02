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
		<title>Union | Boards</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<link rel="shortcut icon" type="image/png" href="images/favicon.png"/>

		<style type="text/css">
			table tr th {
				font-weight: bold;
				text-align: left;
				font-size: 24pt;
				padding-bottom: 25px;
			}

			table tr td {
				padding-bottom: 15px;
			}
		</style>
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
					<div class="container" id="main">

						<!-- Content -->
							<table>
								<tr>
									<th>Service</th>
									<th>Price</th>
									<th>User</th>
									<th></th>
								</tr>
								<tr>
									<td>Laundry</td>
									<td>$5.00</td>
									<td>Allison</td>
									<td>
									<form action="checkout.php" method="post">
										<input type="hidden" name="Service" value="Laundry">
										<input type="hidden" name="Price" value="$5.00">
										<input type="hidden" name="User" value="Allison">
										<input type="submit" value="Buy" style="padding: 8px 20px;" />
									</form>
									</td>
								</tr>
								<tr>
									<td>Tutoring</td>
									<td>$30.00</td>
									<td>Brett</td>
									<td>
										<form action="checkout.php" method="post">
											<input type="hidden" name="Service" value="Tutoring">
											<input type="hidden" name="Price" value="$30.00">
											<input type="hidden" name="User" value="Brett">
											<input type="submit" value="Buy" style="padding: 8px 20px;" />
										</form>
									</td>
								</tr>
								<tr>
									<td>Cleaning</td>
									<td>$8.00</td>
									<td>Charlie</td>
									<td>
										<form action="checkout.php" method="post">
											<input type="hidden" name="Service" value="Cleaning">
											<input type="hidden" name="Price" value="$8.00">
											<input type="hidden" name="User" value="Charlie">
											<input type="submit" value="Buy" style="padding: 8px 20px;" />
										</form>
									</td>
								</tr>
							</table>
						
						
							
						</div>
						
					</div>
				</div>

			<!-- Footer -->
				<!--div id="footer-wrapper">
					
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
				</div-->
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
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>