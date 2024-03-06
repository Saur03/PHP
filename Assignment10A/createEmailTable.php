<!DOCTYPE html>
<html><head><title>Create Destinations email TABLE</title></head>
<body>
<?php
require_once('connectvars.php');
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

$query = "CREATE TABLE email_list (
id INT AUTO_INCREMENT,
first_name VARCHAR(20),
last_name VARCHAR(20),
email VARCHAR(60),
PRIMARY KEY (id)
)";

if (mysqli_query($dbc, $query)) {
echo "<h3 class='success'>The query, CREATE TABLE email_list, was successfully executed. Table Created!<h3><br />";
}
else {
echo "<p class='error'>The query could not be executed!".mysqli_query($dbc). "</p>";
}
mysqli_close($dbc);
?>