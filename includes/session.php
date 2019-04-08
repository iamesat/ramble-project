<?php
	session_start();
	include('db-connect.php');


	if(isset($_SESSION['login'])) {
		$username = $_SESSION['login'];

		$check = $db->prepare("SELECT username FROM users WHERE username = :username");
		$check->execute(array(':username' => $username));
		$row = $check->fetch();

		if (!is_array($row)) {
			header('Location: home.php');
		}
	}

?>