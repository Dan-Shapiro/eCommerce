
<?php
	//connect to db
    //$db = new mysqli('host_name', 'user_name', 'password', 'db_name');
	$db = new mysqli('localhost', 'root', '', 'union');
	if($db->connect_error)
	{
		die ("Could not connect to db: " . $db->connect_error);
	}

	//get form data
	$name = $_POST["name"];
	$email = $_POST["email"];
	$service = $_POST["service"];
	$price = $_POST["price"];
	$user = $_POST["user"];

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
	$subj = "Union Purchase Confirmation";
	$receiver = $email;
	$msg = "Hi " . $name . ",\n\nYou purchased " . $service . " from " . $user . " for " . $price . ".\n\nThank you for your order,\nUnion Team";

	//put info into the message
	$mail->addAddress($receiver);
	$mail->SetFrom($sender);
	$mail->Subject = "$subj";
	$mail->Body = "$msg";

	//send the email
	if(!$mail->send()) {
		echo 'Message could not be sent.';
		echo 'Mao;er Error: ' . $amil->ErrorInfo;
	}
?>