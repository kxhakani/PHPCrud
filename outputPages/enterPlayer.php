<?php 

$doc 	= 	"<!DOCTYPE html>
			<html lang='en'>
				<head>
					<meta charset='utf-8'>
						<title>Add New Player Form</title>
						<link rel='stylesheet' type='text/css' href='../css/formStyle.css'>
				</head>
			<body>
				<form action='../actionPages/insertPlayer.php' method='post' name='frmAddPlayer'>
					<div class='table'>							
						<div class='row'>
							<div class='cell'>First:</div>
							<div class='cell'><input type='text' name='txtFirst'></div>
						</div>
						<div class='row'>
							<div class='cell'>Last:</div>
							<div class='cell'><input type='text' name='txtLast'></div>
						</div>
						<div class='row'>
							<div class='cell'>Email:</div>
							<div class='cell'><input type='text' name='txtEmail'></div>
						</div>
						<div class='row'>
							<div class='cell'>Team:</div>
							<div class='cell'><input type='text' name='txtTeam'></div>
						</div>
						<div class='row'>
							<div class='cell'>DOB:</div>
							<div class='cell'><input type='text' name='txtDOB'></div>
						</div>
						<div class='row'>
							<div class='cell'>Alias:</div>
							<div class='cell'><input type='text' name='txtAlias'></div>
						</div>
						<div class='row'>
							<div class='cell'></div>
							<div class='cell'><input type='submit' name='btnSubmit' value='INSERT'></div>
						</div>
					</table>
				</form>
			</body>
			</html>";
echo $doc;
				

?>