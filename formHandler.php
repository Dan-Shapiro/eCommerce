<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	//connect to db
    //$db = new mysqli('host_name', 'user_name', 'password', 'db_name');
	$db = new mysqli('localhost', 'root', '', 'union');
	if($db->connect_error)
	{
		die ("Could not connect to db: " . $db->connect_error);
	}

	$name = $_POST["Name"];
	$email = $_POST["Email"];
	$address = $_POST["Address"];
	$city = $_POST["City"];
	$state = $_POST["State"];
	$zip = $_POST["Zip"];
	
	//create row with data
    $query = "insert into Users values ('$name', '$email', '$address', '$city', '$state', '$zip')";
    $db->query($query) or die("Invalid insert: " . $db->error);

    //go back
    header("Location: sampleForm.html");
?>
</body>
</html>




<?php
  
  
  
  
  
?>
