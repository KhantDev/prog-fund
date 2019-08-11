<?php 
require 'Food.php';
require 'Super.php';
require 'Point.php';

$super = new Super('Super','Coffee');
echo $super->getTypeName();
$super->showPrice(100);
$super->showWeight();

echo "<br>";

$point = new Point('Point','Sun Flower');
echo $point->getTypeName();