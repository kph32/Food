<?php
	// $dsn="mysql:host=104.196.240.76;port=3306;dbname=foodie;charset=utf8";
	$dsn="mysql:host=localhost;port=3306;dbname=foodie;charset=utf8";
	$user="philip";
	$password="123429810";
	// $dsn="mysql:host=localhost;port=3306;dbname=foodie;charset=utf8";	
	// $user="root";
	// $password="josh";
	$options=array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
	$pdo = new PDO($dsn, $user, $password, $options);
?>