<!DOCTYPE html>
<html>
<head>
<title>Display MOVIE Records</title>
<link rel="stylesheet" href="style.css"/>
</head>
<body>
<div>
<?php
require_once('connectvars.php');
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$query = "SELECT * FROM Movies";
$result = mysqli_query ($dbc, $query);
print ("<h2>Display Movies Records</h2>");
print ("<div class='wrapper'>");
while ($Row = mysqli_fetch_array ($result)) {
	print ("<article>");
	echo "<img src='movie.png' alt='$Row[title]' title='$Row[title]'/>";
	print ("<p>$Row[title]</p>");
	print ("<p>Year Released: $Row[yearReleased]</p>");
	print ("<p>Director: $Row[director]</p>");
	print ("<p>Company: $Row[productionCompany]</p>");
	print ("</article>");
}
print ("</div>");
print("<p class='clear'></p>");
mysqli_close ($dbc);
$currentDate = date("l F j,Y");
print("<p style='padding-top: 15px;'><a href='movieForm.php'>[+]Add A Movie</a></p>");
print("<p style='padding-top: 15px;'><a href='deleteMovieForm.php'>[-]Delete A Movie</a></p>");
print("<p style='padding-top: 15px;'><a href='updateMovieForm.php'>[~]Update A Movie</a></p>");
print ("<br /><p style=\"text-align: center; clear:left;\"><em>Saurabh Chawla &nbsp; &nbsp; Date: $currentDate </em></p>");
?>
</div>
</body>
</html>

	
