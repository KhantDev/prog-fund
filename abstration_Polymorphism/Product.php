<?php 
/**
  * a concept of abstraction and encapsulation
  * very similar to an abstract class, but it has no properties
  * a group of related methods with empty bodies
  * A child class can implement multiple interfaces.
  */

interface Product 
{
	 public function showPrice($price);
	 public function showWeight();
}