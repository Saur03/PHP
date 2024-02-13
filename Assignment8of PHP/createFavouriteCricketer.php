<!DOCTYPE html>
<html>
<head>
<title>Create MOVIES Table</title>
</head>
<body>
<div>
<?php
// Set the variables for the database access:
require_once('connectvars.php');
//Create table inside the database
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$query = "CREATE TABLE IF NOT EXISTS Favouritecricketer (
id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
name TEXT,
team TEXT,
age TEXT
)";
if (mysqli_query ($dbc, $query)) {
	echo "The query was successfully executed! You created the favourite cricketer Table <br /> Go to <a href='cricketForm.php'>Cricketer Insert</a> to add names of the cricketer.";
} 
else {
	echo "The query could not be executed! Error: " . mysqli_error($dbc);
}
mysqli_close($dbc);
?>
</div>
</body>
</html>