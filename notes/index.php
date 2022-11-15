<!DOCTYPE html>
<html lang="en">
<head>
	<title>PHP</title>
</head>
<body>

	<?php
		echo "Hello World";
		echo "<div>Hello World</div>";
		echo "<h2>Hello World</h2>";
		echo "<p>Hello World</p>";

		$number = "number"; // string
		$a = 5;
		$bool = true;

		$float = 0.678;

		echo '<p>'.$number.'</p>';
		echo '<p>'.'This '.$number.' is equal to 5'.'</p>'; // inline elements
		echo '<p>'."This $number is equal to 5".'</p>';
		echo '<p>'.'This is a "quote"'.'</p>';

		echo 5+3;

		$firstname = "Sunny";
		$lastname = "Eun";
		$fullname = $firstname.' '.$lastname;

		echo $fullname;


		// Super global variables

		echo $_GET['name'].'<br>'; // $_POST is for forms
		echo "My name is {$_GET['name']}! I am {$_GET["age"]} years old".'<br>';


		$colors = array("Red", "Yellow", "Blue");
		echo $colors[0].'<br>';
		print_r($colors).'<br>'; 


	?>

	<div style="color:<?= $colors[0]; ?>">
		This text has a different color. 
	</div>
	

	<?

		$colorsAssociatve = [
			"red" => "#f00", 
			"yellow" => "#ff0",
			"blue" => "#00f"
		];

		echo $colorsAssociatve['yellow'];

	?>


	<div style="color:<?= $colorsAssociatve['blue']; ?>">
		This text has a different color. 
	</div>


	<?
		$a = 5;
		$c = $a;
		$d = $c*2; // Casting

		echo $d;

		echo '<p>This is a paragraph.</p>';
		echo "<p>This is a paragraph.</p>";


		function print_p($v) {
			echo "<pre>", print_r($v), "</pre>"; // Pre-formatted HTML
		}

		print_p($_GET);
		print_p($colors);
		print_p($colorsAssociatve);


	?>





</body>
</html>





















