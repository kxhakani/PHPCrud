<?php

//connection to DB
require "connectionPages/connect.php";

//player Output SQL statement
$playerSQL = "SELECT * FROM vw_playerTeamName";			

//execute query and store results
$result = $mysqli->query($playerSQL);

//start to build formatted output ... opening div table tag
$pTable = 	"<div class='table'>
		<div class='heading'>
			<div class='cell'></div>
			<div class='cell'>ID</div>
			<div class='cell'>First</div>
			<div class='cell'>Last</div>
			<div class='cell'>Email</div>
			<div class='cell'>Team</div>
		</div>";

//loop through SQL data to make formatted rows for table
while($row = $result->fetch_array())
{
	$ID		= $row['ID'];
	$first 	= $row['first'];
	$last 	= $row['last'];
	$email 	= $row['email'];
	$team 	= $row['team_name'];

	$pTable .= 	"<div class='row'>
					<div class='cell'>
						<a class='delete'>Delete</a>
						<a class='edit'>Edit</a>
						<a class='cancel'>Cancel</a>
					</div>
					<div class='cell'><input disabled size='2' type='text' name='txtID' value='$ID'></div>
					<div class='cell'><input disabled size='25' type='text' name='txtFirst' value='$first'></div>
					<div class='cell'><input disabled size='25' type='text' name='txtLast' value='$last'></div>
					<div class='cell'><input disabled size='25' type='text' name='txtEmail' value='$email'></div>
					<div class='cell'><input disabled size='25' type='text' name='txtTeam' value='$team'></div>
				</div>";
}

//close out table tag
$pTable .= "</div><p><a href='outputPages/enterPlayer.php'>Add Player</a></p>";

//close connection to DB
$mysqli->close();

$doc = "<!DOCTYPE html>
			<html>
				<head>
				<script src='clientCode/jquery-1.12.2.min.js'></script>
				<script src='clientCode/AJAX.js'></script>
				<link rel='stylesheet' type='text/css' href='css/tableStyle.css'>
				</head>
			<body>
			<div id='results'>
				$pTable
			</div>
			</body>
		</html>";
		
echo $doc;
?>
