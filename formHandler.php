<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	$name = $_POST["Name"];
	$email = $_POST["Email"];
	$address = $_POST["Address"];
	$city = $_POST["City"];
	$state = $_POST["State"];
	$zip = $_POST["Zip"];
	
	echo $name;
	echo $email;
	echo $address;
	echo $city;
	echo $state;
	echo $zip;
?>
</body>
</html>
