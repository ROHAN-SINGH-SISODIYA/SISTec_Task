<?php
	$servername = "cloud.sistec.ac.in";
	$username = "0187cs161025";
	$password = "sistec";
	$dbname = "0187cs161025";
   
    // Create connection
	$conn =mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
?>