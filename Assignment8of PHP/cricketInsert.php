<!DOCTYPE html>
<html>
<head><title>Inserting Data into my Favourite cricketer Table</title>
</head>
<body>
<div>
<?php
$name = trim($_POST['name']);
$team = trim($_POST['team']);
$age = trim($_POST['age']);
require_once('connectvars.php');
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$query = "INSERT INTO Favouritecricketer VALUES ('0', NOW(), '$name', '$team', '$age')";
print ("The query is:<br />$query<br /><br />");
 if (mysqli_query ($dbc, $query)) {
 print ("The query was successfully executed!<br />");
 print ("<a href='displayCricket.php'>View Cricketers</a>");
 } 
 else {
 print ("The query could not be executed!<br />");
 }
mysqli_close ($dbc);
?>
<div>
</body>
</html>
