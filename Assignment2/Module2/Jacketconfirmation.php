<?php
$chosethegender = $_POST['gender'];
$chosethesize = $_POST['size'];
$chosethecolor = $_POST['color'];
?>
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8">
<title>Your Order Confirmation is</title>
</head>
<body>
<h1>Company Spring Retreat</h1>
<h2>Jacket Order:Confirmation</h2>
<?php
echo "<h2>For you, we will order a jacket in $chosethecolor and size $chosethesize for a $chosethegender employee.</h2>";
echo '<br><br>Programmed  by- "Saurabh Chawla"';
?>
</body>
</html>
