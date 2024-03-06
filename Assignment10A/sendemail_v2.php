<!DOCTYPE html>
<html>
<head>
<title>Travel the World - Send Email to Everyone</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<img src="sea.jpeg" id="sea" alt="The sea front" />
<h1>Travel the World Blog - Send Email</h1>
<p><strong>Private: </strong>For lovers of travel only!<br />
Write and send an email to mailing list members.</p>
<?php
require_once('connectvars.php');
if (isset($_POST['submit'])){
$from='TravelTheWorldClub@travel.com';
$subject=$_POST['subject'];
$text=$_POST['travelEmail'];
$output_form=false;
if (empty($subject) && empty($text)) {
echo 'You forgot the email subject and body text.<br />';
$output_form=true;
}
if (empty($subject) && (!empty($text))) {
echo 'You forgot the email subject.<br />';
$output_form=true;
}
if ((!empty($subject)) && empty ($text)) {
echo 'You forgot tht email body text.<br />';
$output_form = true;
}
} else {
$output_form=true;
$subject = '';
$text= '';
}
if ((!empty($subject)) && (!empty($text))) {
$dbc= mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$query = "SELECT * FROM email_list";
$result = mysqli_query($dbc, $query) or die('Error querying database.');
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
$to=$row['email'];
$first_name=$row['first_name'];
$last_name=$row['last_name'];
$msg="DEAR $first_name $last_name,\n$text";
echo '<h2>Email sent to:'.$to.'</h2><br />';
}
mysqli_close($dbc);
}
if ($output_form) {
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<label for="subject">Subject of email:</label><br />
<input id="subject" name="subject" type="text" value="<?php echo $subject;?>" size="30" /><br />
<label for="travelEmail">Body of email:</label><br />
<textarea id="travelEmail" name="travelEmail" rows="8" cols="40"><?php echo $text; ?></textarea><br />
<input type="submit" name="submit" value="Submit" />
</form>
<h3>Created by: Saurabh Chawla</h3>
<?php
}
echo 'Saurabh Chawla  Date: '  . date('F dS, Y');
?>
</body>
</html>

