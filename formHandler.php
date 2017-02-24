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

	//Check user does not already exist
	$query = "Select * from Users where Email='$email'";
    $result = $db->query($query) or die("Invalid insert: " . $db->error);
    $rows = $result->num_rows;
    if($rows == 0) {
    	//create row with data
    	$query = "insert into Users values ('$name', '$email', '$address', '$city', '$state', '$zip')";
    	$db->query($query) or die("Invalid insert: " . $db->error);
    }
    else {
    	echo "Name exists";
    }

    //go back
    header("Location: signup.html");
?>
</body>
</html>
