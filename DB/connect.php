<?php
	$host = 'localhost';
	$user = 'root';
	$pswd = '';

	$conn = mysqli_connect($host, $user, $pswd) or die ('Error connecting to MySQL');
	// echo "Connected to MySQL <br />";

	$dbname = "kelbank";
	mysqli_select_db($conn,$dbname) or  die ("Error connecting to Database: ".$dbname);
	// echo "Connected to Database <br />";



?>
