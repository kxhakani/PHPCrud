<?php

	//connection to DB
	require "../connectionPages/connect.php";
	
	$userTeam = $_GET["team"];

	//player Output SQL statement
	$sql = 	"SELECT teamID, teamName FROM team ORDER BY teamName";
			
	//execute query and store results
	$result = $mysqli->query($sql);

	$teamSelect = "<select name='cboTeam' id='cboTeam'";	

	//loop through SQL data to make formatted rows for option tags
	while($row = $result->fetch_array())
	{
		$tID = $row["teamID"];
		$tName = $row["teamName"];
		
		if($tName == $userTeam)
			$teamSelect .= "<option value='$tID' selected>$tName</option>";
		else
			$teamSelect .= "<option value='$tID'>$tName</option>";
	}

	//close out table tag
	echo $teamSelect . "</select>";

	//close connection to DB
	$mysqli->close();
	

?>
