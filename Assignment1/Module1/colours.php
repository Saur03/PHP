<!DOCTYPE html?
<html>
<head>
<title>Week#1: HTML Color Table by Saurabh Chawla!</title>
<style type = "text/css">
body {
	font-family:Verdana sans-serif;
}
td {
	border: solid 5px, white;
}
</style>
</head>
<body>
<h2>Week#1: HTML Color Table</h2>
<table>
<tr>
<td>Blue</td>
<td style="width:40px; background-color:#0000ff"></td>
</tr>
<tr>
<td><?php echo 'Red'; ?></td>
<td style="width:40px;background-color:<?php echo '#ff0000'; ?>"</td>
</tr>
<?php
//this row generated through php
echo "<tr>\n";
echo " <td>Green</td>\n";
echo " <td style=\" width:40px; background-color:00ff00\"></td>\n";
echo "</tr>\n";
?>
</table>
<?php
echo("<br />");
echo("<br />Programmed by - \"Saurabh Chawla\"");
?>
</body>
</html>