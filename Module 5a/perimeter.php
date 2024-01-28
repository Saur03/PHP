<!DOCTYPE html>
<html>
<head><title>Perimeter Calculation</title></head>
<body>
<h1>Perimeter Calculation - by Saurabh Chawla</h1>
<?php
$name=$_POST['name'];
$rlength=$_POST['length'];
$rwidth=$_POST['width'];
function getPerimeter($length, $width){
	$perimeter = 2*($length + $width);
	return "The perimeter of a rectangle of length $length units and width $width units is: $perimeter units";
}
echo "Hi $name,<br>";
echo getPerimeter($rlength, $rwidth);
echo "<br/><hr/>";
echo "The current date is " .date('l F jS, Y');
?>