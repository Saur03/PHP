<?php
$quantity = $_POST['quantity'];
$cost = 2000.00;
$discount = 100.00;
$tax = 0.13;
if (!empty($quantity)){
	$discount = abs($discount);
	$quantity = abs($quantity);
	$tax += 1;
	$totalcost = $cost * $quantity;
	
	if ($totalcost < 5000.00){
		echo 'Your $100 discount will not apply because the total value of the sale is under $5,000!';
	}
	
	if ($totalcost >= 5000.00){
		$totalcost -= $discount;
	}
	
	$totalcost *= $tax;
	$payment = round($totalcost , 2) / 12;
	
	
	echo "<h2>The PHP payment calculation conditionals program</h2>";
	echo "<h2>programmed by Saurabh Chawla</h2>";
	
	echo "You requested to purchase $quantity widgets(s) at $$cost each.<br>";
	echo "The total with tax, minus any discount, comes to $";
	printf("%.2f", $totalcost);
	echo "<br>";
	printf("You may purchase the widget(s) in 12 monthly installments of $%.2f each.", $payment);
}
else{
	echo "please make sure that you have entered a quantity and then resubmit.";
}
?>