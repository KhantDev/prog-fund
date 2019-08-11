<?php 
require 'Animal.php';
require 'Dog.php';
require 'Fish.php';

$dog = new Dog();
echo $dog -> breath(); 
echo $dog -> bark(); 
echo $dog -> eat(); 

$fish = new Fish;
echo $fish->breath();
echo $fish->eat();