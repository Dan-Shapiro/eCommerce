<!DOCTYPE html>
<html>
<?php
	//end session variables
	session_start();
	session_unset($_SESSION['good']);
	session_destroy();
	
	//go back to home
	header("Location: index.html");
?>
</html>