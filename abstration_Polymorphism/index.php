<?php 
require 'Food.php';
require 'Super.php';
require 'Point.php';
require 'Test.php';
require 'Oil.php';

// $super = new Super('Super','Coffee');
// echo $super->getTypeName();
// $super->showPrice(100);
// $super->showWeight();

// echo "<br>";

// $point = new Point('Point','Sun Flower');
// echo $point->getTypeName();

//High Encapsulation
echo "<br> <br>";
$test = new Test;
echo $test->sayInfo(new Super('Super','Coffee'));
echo "<br>";
echo $test->sayInfo(new Point('Point','Sun Flower'));
echo "<br>";

//Polymorphism
echo $test->sayWeight(new Super('Pep','Sugar'));
echo "<br>";
echo $test->sayWeight(new Oil);
