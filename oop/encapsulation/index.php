<?php
require 'Animal.php';
require 'Cow.php';
require 'Lion.php';

//Creating Object
$cow  = new Cow('Herbivore', 'Grass');
$lion = new Lion('Canirval', 'Meat');

//Cow Object
$cow->animalMethod("Cow", 10);

echo '<br><b>Cow Object</b> <br>';
echo 'The Cow belongs to the ' . $cow->get_family() . ' family and eats ' . $cow->get_food() . '<br><br>';

//Lion Object
echo '<b>Lion Object</b> <br>';
echo 'The Lion belongs to the ' . $lion->get_family() . ' family and eats ' . $lion->get_food();

