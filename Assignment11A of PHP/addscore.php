<!DOCTYPE html>
<html>
<head>
<title>Add High Score</title>
<link type="text/css" rel="stylesheet" href="style.css" />
</head>
<body>
<h2>Yatzy - Add Your High Score</h2>
<?php
// A self-referencing page
require_once('connectvars.php');
$TableName = "high_scores";
if (isset($_POST['submit'])) {
$name = $_POST['name'];
$score = $_POST['score'];
$screenshot = "";
if (!empty($name) && !empty($score)) {
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$query = "INSERT INTO high_scores VALUES (0, NOW(), '$name', '$score', '$screenshot')";
mysqli_query ($dbc, $query);
echo '<p>Thanks for adding your new high score!</p>';
echo '<p><strong>Name:</strong>' . $name . '<br />';
echo '<strong>Score:</strong>' . $score . '<br />';
echo '<p><a href="yatzyIndex.php">&lt; &lt; Back to high scores</a></p>';
$name = "";
$score = "";
$screenshot="";
mysqli_close($dbc);
}
else {
echo '<p class="error">Please enter all of the information to add your high score.</p>';
}
}
?>
<hr />
<form method = "post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<label for = "name">Name:</label>
<input type="text" id="name" name="name" value="<?php if(!empty($name)) echo $name; ?>" /><br />
<label for="score">Score:</label>
<input type="text" id="score" name="score" value="<?php if(!empty($score)) echo $score; ?>" /><br />
<hr />
<input type="submit" value="Add" name="submit" />
</form>
</body>
</html>
