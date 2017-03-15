<?php

	//1: make a connection
	require "../connectionPages/connect.php";
	
	//2: code query string
	$sql = "DELETE FROM player 
			WHERE playerID = " . $_GET["player"];

	//3: execute query
	$mysqli->query($sql);

	//4: test to see if query execution affected more than 1 row
	if($mysqli->affected_rows > 0)
		$message = "Record successfully deleted!";
	else
		$message = "Unable to delete record: " . $mysqli->error;
	
	//close connection
	$mysqli->close(); 
	
	echo $message;

?>

