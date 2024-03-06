<!DOCTYPE html>
<html>
<head>
<title>Display Travel Blog Email Records</title>
<style type = "text/css">
body {text-align:center; background-color: rgb(255,255, 210);}
table.center {
margin-left:auto;
margin-right:auto;
}
tr, td {
text-align:center;
}
h2 {text-align:center;}
</style>
</head>
<body>
<?php
require_once('connectvars.php');
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$query = "SELECT * from email_list";
$result = mysqli_query($dbc, $query);
print("<h2>Travel the World-Contact List</h2>");
print("<table class='center' border='1' width='75%' cellspacing='2' cellpadding='2'>");
print("<tr>");
print("<td><b>FIRST NAME</b></td>");
print("<td><b>LAST NAME</b></td>");
print("<td><b>EMAIL</b></td>");
print("</tr>");

while($Row = mysqli_fetch_array($result)) {
print("<tr>");
print("<td>$Row[first_name]</td>");
print("<td>$Row[last_name]</td>");
print("<td>$Row[email]</td>");
print("</tr>");
}
mysqli_close($dbc);
print("</table>");
echo 'Saurabh Chawla  Date: '  . date('F dS, Y');
?>
</body>
</html>
