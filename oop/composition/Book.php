<?php 
class Book 
{
	 private $price;
	 private $name;

	 public function __construct($name,$price)
	 {
		  $this->name = $name;
		  $this->price = $price;
	 }

	 public function setPrice($price)
	 {
		  $this->price = $price;
	 }

	 public function getPrice()
	 {
		  return $this->price;
	 }

	 public function getName()
	 {
		  return $this->name;
	 }
}
