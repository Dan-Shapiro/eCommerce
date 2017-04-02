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
	$pass = $_POST["Pass"];
	$email = $_POST["Email"];
	$address = $_POST["Address"];
	$city = $_POST["City"];
	$state = $_POST["State"];
	$zip = $_POST["Zip"];

	//Check user does not already exist
	$query = "Select * from Users where Email='$email'";
    $result = $db->query($query) or die("Invalid: " . $db->error);
    $rows = $result->num_rows;
    if($rows == 0) {
    	//create row with data
    	$query = "insert into Users values ('$name', '$pass', '$email', '$address', '$city', '$state', '$zip')";
    	$db->query($query) or die("Invalid insert: " . $db->error);

    	//mail info
		$mailpath = '../PHPMailer';

		$path = get_include_path();
		set_include_path($path . PATH_SEPARATOR . $mailpath);
		require 'PHPMailer/PHPMailerAutoload.php';

		$mail = new PHPMailer();

		$mail->IsSMTP(); //tell the class to use SMTP
		$mail->SMTPAuth = true; //enable SMTP authentication
		$mail->SMTPSecure = "tls"; //set tls authentication
		$mail->Host = "smtp.gmail.com"; //set GMAIL as the SMTP server
		$mail->Port = 587; //set SMTP port for GMAIL server
		$mail->Username = "union.cs4753@gmail.com"; //gmail username
		$mail->Password = "ecommerce"; //gmail password

		$sender = "Union";
		$mail->FromName = "Union Team";
		$subj = "Union Registration Confirmation";
		$receiver = $email;
		$msg = "Hi " . $name . ",\n\nYour account has been created successfully!\n\nEnjoy your productivity,\nUnion Team";

		//put info into the message
		$mail->addAddress($receiver);
		$mail->SetFrom($sender);
		$mail->Subject = "$subj";
		$mail->Body = "$msg";

		//send the email
		if(!$mail->send()) {
			echo 'Message could not be sent.';
			echo 'Mailer Error: ' . $mail->ErrorInfo;
		}
    }
    else {
    	echo "Name exists";
    }

    //go back
    header("Location: index2.html");
?>
</body>
</html>
