<?php
	//database information 
	$server = 	"Wcsvpsqlprog01"; 
	$user = 	"kxhakani1";
	$pass = 	"4276459";
    $database = "kxhakani1"; 
         
	//make a database connection object
	$mysqli = new mysqli($server, $user, $pass, $database);	
	
	//test if there are database connection errors
	if ($mysqli->connect_error) 
		die("Connect Error " . $mysqli->connect_error);

	
	
?>