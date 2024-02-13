<!DOCTYPE html>
<html>
<head>
<title>Display Cricket Records</title>
</head>
<body>
<div>
<?php
require_once('connectvars.php');
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$query = "SELECT * FROM Favouritecricketer";
$result = mysqli_query ($dbc, $query);
print ("<h2>Display Cricket Records</h2>");
print ("<div class='wrapper'>");
while ($Row = mysqli_fetch_array ($result)) {
	print ("<article>");
	echo "<img src='cricket.png' alt='$Row[name]' title='$Row[name]'/>";
	print ("<p>$Row[name]</p>");
	print ("<p>Team: $Row[team]</p>");
	print ("<p>Age: $Row[age]</p>");
	print ("</article>");
}
print ("</div>");
print("<p class='clear'></p>");
mysqli_close ($dbc);
$currentDate = date("l F j,Y");
print("<a href='cricketForm.php'>[+]Add A Crickter</a>");
print ("<br /><p style=\"text-align: center; clear:left;\"><em>Saurabh Chawla &nbsp; &nbsp; Date: $currentDate </em></p>");
?>
</div>
</body>
</html>

	
