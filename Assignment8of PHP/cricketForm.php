<!DOCTYPE html>
<html>
<head><title>HTML Movies Input Form</title>
</head>
<body>
<div>
<h3>Enter a Cricketer name that you wish to add to the database<br />
Programmed by Saurabh Chawla</h3>
<form action="cricketInsert.php" method="post">
<fieldset>
<legend>Cricket Information</legend>
<label for="date">date:</label>
<input type="date" id="date" name="current-date" value="1990-01-01" min="1990-01-01" max="2030-12-31" /><br />
<label for="name">Name of the Cricketer:</label>
<input type="text" id="name" name="name" size="20" required><br/>
<label for="team">Team:</label>
<input type="text" id="team" name="team" size="20" required><br/>
<label for="age">Age of Cricketer:</label>
<input type="text" id="age" name="age" size="6" required><br/>
</fieldset>
<input type="submit" name="submit" value="[+]Add Cricketer"/>
</form>
</div>
</body>
</html>