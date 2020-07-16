<?php

	$username = 'kader';
	$password = 'kader';
	$hostname = 'kaders-macbook-air.local';
	$port = 3306;
	$dbname = 'db';

	$link = new mysqli($username,$password,$hostname,$dbname,$port);
	$sql = "insert into customer
		values (".$_POST['fullname'].",".$_POST['email'].");";

	$link->query($sql);
	$link->close();


?>
