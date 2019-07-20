<?php

 //String
 $name = "Bo Bo";
 $age = "25";
 $hight = "7";
 $class = "Myanmar";
 echo $name;
 echo $age."<br>";
 echo $name . " attened " . $class ."<br>";
 echo $name ."<br>" .$age ."<br>" .$hight ."<br>";

 // Intenger : Unsingned / Singned
 $price = 52535653;
 $cost = 10012002;
 echo $price + $cost;
 var_dump($age);
 var_dump($price);
 var_dump($cost);
echo"<br>";
 // Float (.93648)
 $Buy = 98.37;
 var_dump($Buy);

 // Boolena : true / false
  if (true) {
  echo "Welcome";
  }

 if (false) {
 	echo "Come in";
 }

 $name = "Bo Bo";

 if ($name == "Bo Bo") {  //true
 	echo "come in";
 }
 if ($name =="Ko Ko") {    //false
 	echo "Get out";
 }
echo"<br>";
 //Array
$names = array("Bo Bo", "Ni Ni", "Mu Mu");
 
 print_r($names);
echo "<Br>".$names[2];

$customers_name= ["Bo Bo","Ni Ni","Mg Mg"];
$titleName = [
	"name" =>"Bo Bo",
	"age" =>"17",
	"class"=>"physic"
	];
$cilentName=array("Bo Bo","Ni Ni","Mg Mg");
echo $titleName["name"]. ' ' .$titleName["age"];
echo "<br>";
//Null
$name ="Bo Bo";
echo $name;
$name=null;
echo "<br>".$name="nothing";
echo "<br>";

//loosely type language
$name = "Bo Bo";
echo $name;
$name = 99.4;
echo $name;
echo "<br>";
//Constant : ever global ကိန္းေသ
define("NAME", "Bo Bo",true);
//define ("NAME","Nyi Nyi");   Error
echo NAME;
echo name;
define ("title",["Apple","Fb","Ar"]);
echo title[1];

//funcatinal programming

function one(){

	echo "Bo Bo";
}
function two()
{

	echo "Ni Ni";
}
one();
two();