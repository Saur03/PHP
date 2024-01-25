<!DOCTYPE html>
<html>
<head>
<title>Grade Averaging</title>
</head>
<h2>EU Capital Cities</h2>
<?php
$eu_capitals = array( "Italy"=>"Rome", 
					  "Luxembourg"=>"Luxembourg",
					  "Belgium"=> "Brussels",  
					  "Denmark"=>"Copenhagen",
					  "Finland"=>"Helsinki", 
					  "France" => "Paris",
					  "Slovakia"=>"Bratislava", 
					  "Slovenia"=>"Ljubljana",
					  "Germany" => "Berlin", 
					  "Greece" => "Athens",
					  "Ireland"=>"Dublin", 
					  "Netherlands"=>"Amsterdam",
					  "Portugal"=>"Lisbon", 
					  "Spain"=>"Madrid",
					  "Sweden"=>"Stockholm", 
					  "United Kingdom"=>"London",
					  "Cyprus"=>"Nicosia", 
					  "Lithuania"=>"Vilnius",
					  "Czech Republic"=>"Prague", 
					  "Estonia"=>"Tallin",
					  "Hungary"=>"Budapest",  
					  "Latvia"=>"Riga",
					  "Malta"=>"Valetta",
					  "Austria" => "Vienna", 
					  "Poland"=>"Warsaw") ;
asort($eu_capitals);
foreach($eu_capitals as $eu_capitals => $capital) {
echo "The capital of $eu_capitals is $capital <br>";
}
echo "<br/>";
echo "Programmed: Saurabh Chawla &copy; Copyright 2023";					  
?>
</body>
</html>