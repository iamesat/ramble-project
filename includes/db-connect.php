<?php
	$db = array ( 
	    'host' => 'localhost', 
	    'dbname' => 'jarikdb', 
	    'user' => 'root', 
	    'pass' => '' 
	);

	$db = new PDO('mysql:host='.$db['host'].';dbname='.$db['dbname'], $db['user'], $db['pass']); 

?>