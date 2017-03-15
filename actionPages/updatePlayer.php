<?php 
//catch required fields
$ID = $_POST["ID"];
$fn = $_POST["first"];
$ln = $_POST["last"];
$em = $_POST["email"];
$tID = $_POST["team"];
//are any of the required fields empty?
if(empty($ID) || empty($fn) || empty($ln) || empty($em) || empty($tID))
{
	$message = "Missing required data";
}
else
{
	//connect to mysql db
	require "../connectionPages/connect.php";
	
	//query string
	$SQL = "UPDATE vw_gamers
			SET first 		= '$fn',
				last		= '$ln',
				email		= '$em',
				team		= $tID
			WHERE ID		= $ID";
	
	//execute query	
	$mysqli->query($SQL);
	
	//success or failure?
	if($mysqli->affected_rows > 0)
		$message = "Record successfully updated";
	else
		$message = "Unable to update record: " . $mysqli->error;
	
	//close connection
	$mysqli->close();	
}
			
	echo $message;

?>