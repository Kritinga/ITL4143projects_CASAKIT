<?php
	$localhost = "localhost";
	$user = "root";
	$pass = "";
	$dbase = "weblog";
	$port = 3307;

	$con = mysqli_connect($localhost, $user, $pass, $dbase, $port) or die("Sorry! You can't connect to the database");
	?>