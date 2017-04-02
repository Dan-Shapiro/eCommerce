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
		<title>Union | Inbox</title>
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
									<li class="break"><a href="boards2.-h-">Bulletin Boards</a></li>
									<li><a href="logout.php">Log Out</a></li>
								</ul>
							</nav>

					</div>
				</div>

			<!-- Main -->

				<div class="wrapper">
					<h2 align="center"><strong>Inbox</strong></h2>
					</br>
					<div class="container" id="main">			
						</br>
						<!-- Content -->
							<table>
								<tr>
									<th>User</th>
									<th>Subject</th>
									<th>Date</th>
									<th></th>
								</tr>
								<tr>
									<td>Jack</td>
									<td >Can you clean my apartment?</td>
									<td>4/20</td>
									<td>
									<form action="checkout.php" method="post">
										<input type="hidden" name="Service" value="Laundry">
										<input type="hidden" name="Price" value="$5.00">
										<input type="hidden" name="User" value="Allison">
										<input type="button" value="Open" style="padding: 8px 20px;" />
									</form>
									</td>
								</tr>
								<tr>
									<td>Katie</td>
									<td >Can you tutor me in 2150?</td>
									<td>4/20</td>
									<td>
										<form action="checkout.php" method="post">
											<input type="hidden" name="Service" value="Tutoring">
											<input type="hidden" name="Price" value="$30.00">
											<input type="hidden" name="User" value="Brett">
											<input type="button" value="Open" style="padding: 8px 20px;" />
										</form>
									</td>
								</tr>
								<tr>
									<td>Ethan</td>
									<td >Can you buy groceries for me?</td>
									<td>4/20</td>
									<td>
										<form action="checkout.php" method="post">
											<input type="hidden" name="Service" value="Cleaning">
											<input type="hidden" name="Price" value="$8.00">
											<input type="hidden" name="User" value="Charlie">
											<input type="button" value="Open" style="padding: 8px 20px;" />
										</form>
									</td>
								</tr>
							</table>
						
						
							
						</div>
						
					</div>
				</div>
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