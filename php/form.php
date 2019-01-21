<?php

//clean strings user has enteres
function cleanString($string) {
	//remove HTML & script tags
	$string = strip_tags($string); 	
	//allow alphanumerics & punctuation - convert the rest to single spaces
	$string = preg_replace("/[^[:alnum:][:punct:]]/", " " ,$string);  
	return $string;
}

//read data from form and spit it out in a nice div
function spitOutData() {
	if ($_SERVER['REQUEST_METHOD'] === "GET") {
		$name = cleanString($_GET['name']); 
		$email = cleanString($_GET['email']);
		$phonenumber = cleanString($_GET['phonenumber']);
		$state = $_GET['state'];

		echo "<div style='width:60%; 
			margin: 0 auto; 
			margin-top: 40px;
			background-color: aliceblue;
			padding: 20px;'>";
		echo "Name: " . $name . "<br/>" . "<br/>" 
			. "Email: " . $email . "<br/>" . "<br/>"
			. "Phone number: " . $phonenumber . "<br/>" . "<br/>"
			. "State: " . $state;
		echo "</div>";
	}
}	

spitOutData();

?>              