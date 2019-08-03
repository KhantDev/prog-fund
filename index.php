<?php declare(strict_types=1);

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

function one($name,$high=21){

	echo "his name is  $name <br>";
	echo "his high is $high <br>";

}
one("Bo BO",8);
one("ni ni");
one("Mg Mg",9);
function two()
{

	echo "Ni Ni";
}


function three ($name , $high){      //Argument
     
    echo "his name is  $name <br>";
    echo "his high is $high <br>";

}
three("bo bo" , 5);    //parameter
three("Ni Ni", 6);
three("Mg Mg",7);


function total (int $price , int $cost){

	echo $price +  $cost;
 }

total (300, 933);


//local & Global Scope


$price = 30;    //Global variable

 function four()
 {
 	//$prices=30; //local variable
     
     global $price; 
     $cost =20;

     echo $price + $cost;
    }

 function add ()
 {
     echo $cost + 10;      //Unfined error
   

 }
 four();
 add();

 //Static Variable     //global & static
 $m = 30;
 function five ()
 {

 	global $m;
 	echo ++$m."<br>"; 
 }
five();
five();
five();

function gog ()
{

	$x=20;
	echo ++$x."<br>";
}
gog ();
gog ();
gog ();

function create ()
{
  static $x = 20;
  echo ++$x ."<br>";

}

  create ();
  create ();
  create ();
  
 //Return Type Declaration  & Type Casting
 $total =0;

 function sun (float $price ,float $quantity) :int
 {
      return (int)($price+$quantity);  

 }

$total  = sun (20.3, 50.4);
echo "Tax included amount is".($total);
echo "<br>";

//Arithmetic Operators (+,-,*,/,%,**)
$x = 12;
$y = 6;
echo $x ** $y;
echo "<br>";
//Assigment Operators (=,+=,-=,/=,%=)
$A =  7;
$B = 5;

$A += $B;
echo $A;
echo "<br>";
//Comparison Operators (==,===,!=,<>,!==,>,<,>=,<=,<=>)
$user = 123;

if ($user >= 123) {    //if right- ture, if worng- false

	echo"You are logined <br>";
}
$x = 3;
$y = 4;
echo $x <=> $y;  //spaceship - if less than: -1 , equal : 0 , greater : 1

//Increment / Decrement Operators (++,--)
$x = 1;
$y = 2;
echo $x++;
echo $x++;
echo $x++;
echo $x++;

echo "<br>";
echo ++$y;
echo ++$y;
echo ++$y;
echo ++$y;

//Logical Operators (and,or,xor,&&,//,!)
$a =  3;
$b =  4;
if ($a == 3 xor $b == 4) {
	echo "Either one is ture,but not both";

}
$status = true;
echo !$status;  //ture 1, false 0
var_dump(!$status);

//String Operators (. , .=)
$age = "year ";
$age = " old";  //$age = $age. " old";
echo "Bo Bo" . $age;
echo "<br>";

//Conditional (or ternary) Operators ( ?  :)
$user = "Bo Bo";
$status = $user == "Bo Bo" ? "Accecpted" : "Deny";
echo $status;

// if ($user == "Bo Ba") {

// 	$status = "Accepted";
// }else {
// 	$status = "Deny";
// }

//Null coalescing ( ?? )
echo "<br>";
$color = "red";
$car = $color ?? "white";
echo $car;

include ("Book.php");
//Creating Object
$book1 = new Book;
$book2 = new Book;

$book1->setInfo("linka",5000,"Chit ko");
$book1->getInfo();
echo "<br>"; 



$book2->setInfo("Yarzawin",9000,"U Kala");
$book2->getInfo()


