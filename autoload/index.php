<?php
include("autoload.php");
//include ("controller/AnimalController.php");
//require ("model/Animal.php");

$ani = new AnimalController;
$ani->say();

$animal = new Animal();
$animal->say();

$food = new FoodController;
$food->say();
