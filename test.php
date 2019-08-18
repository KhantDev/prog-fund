<?php
//If condition 
$age = 70;
if ($age >= 18) {
	echo "Ok you are allowed <br>";
}

//If ... else
if ($age >= 18) {
	echo "Ok you are allowed <br>";
} else {
	echo "No you are denied <br>";
}

//if ...elseif...else
if ($age >= 18 && $age < 70) {
	echo "Ok you are allowed <br>";
}elseif ($age >= 70){
		echo "Oh you are so old <br>";

}elseif ($age < 18) {
	echo "No you are denied <br>";
}
 else {
      echo "Please fill your age again <br>";

 }

 $result = ($age >= 18) ? "Ok you are allowed <br>" : "No you are denied <br>";
 echo $result;


 //For Loop 
 for ($i=1; $i < 21  ; $i++) { 
	echo "$i. Mg Mg <br>";
 }

 //foreach Loop
 $names = ["Mu Mu","Ko Ko","Mo Mo","Po Po"];

 foreach ($names as $name) {
  		echo $name . "<br>";
 }

 for ($i=1; $i < 4; $i++) { 
 	echo "$i. ". $names[$i]. "<br>";    //$name [0], $namee[1],$name[2]
 }

 $a = 0;
 while ($a <= 10) {
 	echo "$a. Mg Mg <br>";


 	$a++;
 }

$b = 12;
do{
	echo "$b .Ko ko <Br>";


	$b++;
}while ($b < 10);


echo date("m/d/Y");


