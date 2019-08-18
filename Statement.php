<?php 
$age = 18;

//PHP Conditional Statements
if ($age == 18) {
	echo "OK you are allowed <br>";
}

$result = ($age !== 18) ? " " : "No, you are denied <br> " ;
echo $result;

if ($age >= 18) {
	echo "OK you are allowed <br>";
} else {
	echo "No, you are denied <br> ";
}

if ($age >= 18 && $age < 70) {
	echo "OK you are allowed <br>";
} elseif ($age < 18) {
	echo "No, you are denied <br> ";
} elseif ($age >= 70 ) {
	echo "Ohh you are so old <br>";
} else {
	echo "Please type your age ,again";
}

//PHP 7 switch Statement
$name = "Jhon";

switch ($name) {
	case 'Jhon':
		echo "OK you are allowed <br>";
		break;
	case 'Smith':
		echo "OK you are allowed <br>";
		break;
	default:
		echo "No, you are denied <br> ";
}

//PHP For Loop
for ($i=0; $i < 10 ; $i++) { 
	echo $i."<br>";
}

//PHP Foreach Loop
$names = ["Ko Ko", "Mo Mo", "Po Po", "So So"];

foreach ($names as $name) {
	echo $name. "<br>";
}

//PHP While Loop & Do while Loop
$sec = 0;
while ($sec <= 10) {
	echo "Now time to sleep is ". $sec . "<br>";
	$sec++;
}


do {
	echo $sec . "<br>";
	$sec++;
} while ($sec <= 10);
