<?php 
//catch required fields
$fn = $_POST["txtFirst"];
$ln = $_POST["txtLast"];
$em = $_POST["txtEmail"];
$tID = $_POST["txtTeam"];

//are any of the required fields empty?
if(empty($fn) || empty($fn) || empty($fn) || empty($fn))
{
	$message = "Missing required data";
}
else
{
	//set remaining values
	$pass 	= MD5("pass1234");
	$alias 	= empty($_POST["txtAlias"]) ? 'NULL' : "'" . $_POST["txtAlias"] . "'";
	$DOB 	= empty($_POST["txtDOB"]) ? 'NULL' : "'" . $_POST["txtDOB"] . "'";		
	
	//connect to mysql db
	require "../connectionPages/connect.php";
	
	//query string
	$SQL = 	"INSERT INTO player (playerFirstName,playerLastName,playerEmail,teamID,playerDOB,playerAlias,playerPass)
			 VALUES ('$fn', '$ln','$em', $tID, $DOB, $alias, '$pass')";
	
	//execute query
	$mysqli->query($SQL);
	
	//success or failure?
	if($mysqli->affected_rows > 0)
		$message = "Record successfully inserted";
	else
		$message = "Unable to insert record: " . $mysqli->error;
	
	//close connection
	$mysqli->close(); 
}			
	echo $message;
?>