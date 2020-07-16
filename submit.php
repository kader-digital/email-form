<?php

	$username = 'root';
	$password = 'kader';
	$hostname = 'localhost';
	$port = 3306;
	$dbname = 'db';

	$link = new mysqli($username,$password,$hostname,$dbname);
	$sql = "insert into customer
		values (".$_POST['fullname'].",".$_POST['email'].");";

	$link->query($sql);
	$link->close();


?>
