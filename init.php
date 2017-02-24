<?php
	
	//set up db
  //$db = new mysqli('host_name', 'user_name', 'password', 'db_name');
	$db = new mysqli('localhost', 'root', '', 'union');
	if($db->connect_error):
		die ("Could not connect to db: " . $db->connect_error);
	endif;
	
	//drop table
	$db->query("drop table Users");
	
	//create table
	$result = $db->query("create table Users	(Name char(30) not null, 
												Email char(30) not null, 
												Address char(60) not null, 
												City char(30) not null,
                        						State char(30) not null,
                        						Zip char(30) not null)") 
												or die ("Invalid: " . $db->error);	
	//go to homepage
	header("Location: sampleForm.html");
?>
</html>