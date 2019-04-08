<?php

	error_reporting(-1);
	ini_set('display_errors', 1);

	include('../includes/db-connect.php');
	
	// Start session
	session_set_cookie_params(time()+604800);
	session_start();
	$message = "Verkeerde gebruikersnaam/wachtwoord";
	
	// Check if there is a post
	if(isset($_POST)) {

		// Check if password and e-mail are filled in
		if(!empty($_POST['username']) and !empty($_POST['password'])) {
			$username = strtolower($_POST['username']);

			// Hash password
			$password = hash('sha256', $_POST['password']);

			// Check user in the DB
			$login = $db->prepare("SELECT id, email, password FROM users WHERE username = :username");
			$login->execute(array(':username' => $username));
			$user = $login->fetch();
			
			// If there is a user with the e-mail and right password
			if ($user[2] == $password) {
				$_SESSION['login'] = $username;
				$_SESSION['userID'] = $user[0];
				$_SESSION['email'] = $user[1];
				header("location: ../home.php");
			}
			// Login credentials are wrong
			else {
				
				echo "<script type='text/javascript'>alert('$message');</script>";
				echo "<script>setTimeout(\"location.href = '../index.php';\",1);</script>";
				
			}
		}
	}
?>

<!-- 21879598717a0c474c42094298bab96b37cb82ee27f1cb5c146da47d67e54099 -->