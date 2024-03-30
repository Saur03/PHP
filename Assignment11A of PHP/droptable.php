<?php
require_once('connectvars.php');
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$tableName = "high_scores";

// enter your create the high Scores table query here!!!
$query = "DROP TABLE high_scores";

if (mysqli_query ($dbc, $query)) {
    echo "<h3 class='success'>The query, DROP TABLE $tableName, was successfully executed!</h3>";
} else {
 	echo "The query, DROP TABLE $tableName, could not be executed! " . mysqli_error($dbc);
} 
mysqli_close($dbc);
?>
