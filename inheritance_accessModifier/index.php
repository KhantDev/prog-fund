<?php 
//Multiple inheritance
require 'A.php';
require 'B.php';
require 'C.php';

$c_class = new C;
$c_class->sayAclass();
$c_class->sayBclass();
$c_class->sayCclass();

$c_class->pub = "<br> Hi public ";
echo $c_class->pub;

// $c_class->prot = "<br> Hi protected";   // Error 

//Protected variable
$c_class->setProt("Hi Prot");
$c_class->getProt();

//Fatal error: Uncaught Error: Cannot access private property
// $a_class = new A;
// $a_class->pri = "Hi private";	
	
//Private variable

$c_class->pri = "Another Private";
echo $c_class->pri;
echo "<br>";

$c_class->setPri("Hi Pri");
$c_class->getPri();


