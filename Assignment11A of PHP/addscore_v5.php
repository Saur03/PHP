<!DOCTYPE html>
<html>
<head>
<title>Yatzy - Add Your High Scores</title>
<link type="text/css" rel="stylesheet" href="style.css" />
</head>
<body>
<h2>Yatzy - Add Your High Scores</h2>
<?php
require_once('connectvars.php');
require_once('appvars.php');
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if (isset($_POST['submit'])) {
	$name = mysqli_real_escape_string($dbc, trim($_POST['name']));
	$score = mysqli_real_escape_string($dbc, trim($_POST['score']));
	$screenshot = mysqli_real_escape_string($dbc, trim($_FILES['screenshot']['name']));
	$screenshot_type = $_FILES['screenshot']['type'];
	$screenshot_size = $_FILES['screenshot']['size'];
	
	if (!empty($name) && is_numeric($score) && !empty($_FILES['screenshot'])) {
		if ((($screenshot_type == 'image/gif') || ($screenshot_type == 'image/jpeg') || ($screenshot_type == 'image/pjpeg') || ($screenshot_type == 'image/png')) && ($screenshot_size > 0) && ($screenshot_size <= MAXFILESIZE)) {
			if ($_FILES['screenshot']['error'] == 0) {
				$target = UPLOADPATH . $screenshot;
				if (move_uploaded_file($_FILES['screenshot']['tmp_name'], $target)) {
					$TableName = "high_scores";
					$query = "INSERT INTO $TableName (date, name, score, screenshot) VALUES (NOW(), '$name', '$score' , '$screenshot')";
					mysqli_query($dbc, $query);
					
					echo '<p>Thanks for adding your new high score!</p>';
					echo '<p><strong>Name:</strong> ' . $name . '<br />';
					echo '<strong>Score:</strong> ' . $score . '<br />';
					echo '<img src="' . DISPLAYPATH . $screenshot . '" alt="Score image" /></p>';
					echo '<p><a href="yatzyIndex.php">&lt;&lt; Back to high scores</a></p>';
					
					$name = "";
					$score = "";
					$screenshot = "";
					
					mysqli_close($dbc);
				}
				else {
					echo '<p class="error">Sorry, there was a problem uploading your screen shot image.</p>';
				}
			}
		}
		else {
			echo '<p class="error">The screen shot must be a GIF, JPEG, or PNG image file no greater than ' . (MAXFILESIZE / 1024) . ' KB in size.</p>';
		}
	}
	else {
		echo '<p class="error">Please enter all of the information to add your high scores.</p>';
	}
}
?>
<hr />
<form enctype="multipart/form-data" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo MAXFILESIZE; ?>" />
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




				

		
		


			
		
					

					

					
					
										


					


					
					
			

		
	
