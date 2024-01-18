<?php
$username = $_POST['username'];
$region = $_POST['region'];

if (empty($username)) {
	echo "<h1>ABC Web Site Registration Reply Page</h1>";
	echo "You did not enter a user name.<br>";
    echo "Please return to the form and re-enter your information.";
}
else {
	echo "<h1>ABC Web Site Registration Reply Page</h1>";
	echo "<h2>Your information has been processed.</h2>";
	echo "Thank you $username.<br>";
    echo "From the lovely region of: $region.";
	
}

?>