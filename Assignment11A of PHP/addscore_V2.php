<!DOCTYPE html>
<html>
<head>
<title>Yatzy - High Scores</title>
<link type="text/css" rel="stylesheet" href="style.css" />
</head>
<body>
<h2>Yatzy - Add Your High Scores</h2>
<?php
require_once('connectvars.php');
$TableName = "high_scores";
define('UPLOADPATH', 'images/');
define('DISPLAYPATH', 'images/');
define('MAXFILESIZE', 32768);
if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$score = $_POST['score'];
	$screenshot = $_FILES['screenshot']['name'];
	$screenshot_type = $_FILES['screenshot']['type'];
	$screenshot_size = $_FILES['screenshot']['size'];
	
if (!empty($name) && !empty($score) && !empty($screenshot)) {
	$target = UPLOADPATH.$screenshot;
	if (move_uploaded_file($_FILES['screenshot']['tmp_name'], $target)) {
		$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		
		$query = "INSERT INTO high_scores VALUES (0, NOW(), '$name', '$score', '$screenshot')";
		mysqli_query($dbc, $query);
		echo '<p>Thanks for adding your new high score!</p>';
		echo '<p><strong>Name:</strong>' . $name . '<br/>';
		echo '<strong>Score:</strong>' . $score . '<br />';
		echo '<img src = "' . "images/mariascore.jpg" . $screenshot . '" alt = "Score image" /></p>';
		
		echo '<p><a href = "yatzyIndex_v2.php">&lt; &lt; Back to high scores</a></p>';
		
		$name = "";
		$score = "";
		$screenshot = "";
		
		mysqli_close($dbc);
	}
	else {
		echo '<p class="error">Sorry, there was a problem uploading your screenshot image.</p>';
}
}
else {
	echo '<p class = "error">Please enter all of the information to add your high score.</p>';
}
}
?>
<hr />
<form enctype = "multipart/form-data" method = "post" action = "<?php echo $_SERVER['PHP_SELF'];?>">
<input type="hidden" name = "MAX_FILE_SIZE" value="<?php echo MAXFILESIZE;?>" />
<label for="name">Name:</label>
<input type="text" id="name" name="name" value="<?php if (!empty($name)) echo $name; ?>" /><br />
<label for="score">Score:</label>	
<input type="text" id="score" name="score" value="<?php if (!empty($score)) echo $score; ?>" /><br />
<label for="screenshot">Screen shot:</label>	
<input type="file" id="screenshot" name="screenshot" />	
<hr />
<input type="submit" value="Add" name="submit" />
</form>
</body> 
</html>

