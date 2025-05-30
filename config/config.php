<?php
	session_start();

	// Define database
	define('dbhost', 'rent-server-phpapp:3306');
	define('dbuser', 'rent-server-phpapp-admin');
	define('dbpass', '$c33UBUFnS0XP2kp');
	define('dbname', 'rent-database');

	// Connecting database
	try {
		$connect = new PDO("mysql:host=".dbhost."; dbname=".dbname, dbuser, dbpass);
		$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e) {
		echo $e->getMessage();
	}

?>
