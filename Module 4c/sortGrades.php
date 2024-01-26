<!DOCTYPE html>
<html>
<head><title>Sorting Grades (sortGrades.php)</title></head>
<body style="background-color: rgb(217,255,234); color: rgb(0,134,61); ">
<h2> sortGrades.php - Programmed by Saurabh Chawla</h2>
<?php
$grades = array('Stephen' => 99, 
				'Luca' => 62, 
				'Will' => 92,
				'Cole' => 87, 
				'Nathan' => 75, 
				'Jack' => 15);
print("Originally, the array looks like this:<br/>"); 
foreach ($grades as $grade => $studentname){
	echo "$grade:$studentname <br />";
}
arsort($grades);
print("<br> After sorting the array by value using arsort, the array looks like this:<br/>");
foreach($grades as $grade => $studentname) {
	echo "$grade:$studentname <br />";
}
ksort($grades);
print("<br> After sorting the array by key using ksort(), the array looks like this:<br/>");
foreach($grades as $grade => $studentname) {
	echo "$grade:$studentname <br />";
}	
?>
</body>
</html>