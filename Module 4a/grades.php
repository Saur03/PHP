<!DOCTYPE html>
<html>
<head>
<title>Grade Averaging</title>
</head>
<body style="background-color: rgb(255,255,204);">
<h2>Grade Averaging - by Saurabh Chawla</h2>
<?php
// define array of grades
$grades = array(25, 64, 23, 87, 56, 38, 78, 57, 98, 95, 81, 67, 75, 76, 74, 82, 36, 39, 54, 43, 49, 65, 69, 69, 78, 17, 91);
$count = count($grades); // total number of grades(27)
// declare variables
$total = $top = $bottom = 0;
foreach ($grades as $grade) {
	$total += $grade;
	if ($grade <= 20){
		$bottom += 1;
	}
	else if ($grade >= 80){
		$top += 1;
	}
}
$avg = round($total / $count);
echo "Class average: $avg <br />";
echo "Number of students in bottom 20%: $bottom <br />";
echo "Number of students in top 20%: $top <br />";
?>
</body>
</html>