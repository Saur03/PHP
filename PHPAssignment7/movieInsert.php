<!DOCTYPE html>
<html>
<head><title>Inserting Data into my Movies Table</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div>
<?php
$title = trim($_POST['title']);
$productionCompany = trim($_POST['productionCompany']);
$yearReleased = trim($_POST['yearReleased']);
$director = trim($_POST['director']);
require_once('connectvars.php');
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$query = "INSERT INTO Movies VALUES ('0', '$title', '$productionCompany', '$yearReleased', '$director')";
print ("The query is:<br />$query<br /><br />");
 if (mysqli_query ($dbc, $query)) {
 print ("The query was successfully executed!<br />");
 print ("<a href='displayMovies.php'>View Movies</a>");
 } 
 else {
 print ("The query could not be executed!<br />");
 }
mysqli_close ($dbc);
?>
<div>
</body>
</html>
