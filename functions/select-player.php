<?php

	error_reporting(-1);
	ini_set('display_errors', 1);

	include('../includes/db-connect.php');
	
	// Start session
	session_set_cookie_params(time()+604800);
	session_start();
	
	// Check if there is a post
	if(isset($_POST)) {

		// Check if password and e-mail are filled in
		if(!empty($_POST['username'])) {
			$username = strtolower($_POST['username']);

			// Check user in the DB
			$login = $db->prepare("SELECT id, naam FROM wallet WHERE id = :id");
			$login->execute(array(':id' => $id));
			$user = $login->fetch();
			
			// If there is a user with the e-mail and right password
			if ($user[0] == $password) {
				$_SESSION['id'] = $user[0];
				$_SESSION['naam'] = $user[1];
				$_SESSION['userlevel'] = $user[3];
				$_SESSION['cID'] = $user[4];
				header("location: ../home.php");
			}
			// Login credentials are wrong
			else {
				
				echo "<script type='text/javascript'>alert('$message');</script>";
				echo "<script>setTimeout(\"location.href = '../index';\",1);</script>";
				
			}
		}
	}
?>