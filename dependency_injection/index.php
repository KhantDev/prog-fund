<?php
include("autoload.php");
//include ("controller/AnimalController.php");
//require ("model/Animal.php");
use controller\api\AnimalController;
use model\api\Animal;
use controller\api\FoodController;

$ani = new AnimalController(new Animal);
$ani->say();

$animal = new Animal();
$animal->say();

$food = new FoodController;
$food->say();

$animal->setter(2000);
$animal->getter();
echo "<br>";
$animal->price = 3000;
echo $animal->price;