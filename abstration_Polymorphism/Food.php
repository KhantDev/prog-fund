<?php
/**
	 * Abstract class : cannot be used directly to create object 
	 * eg. $product = new Food('a','b')
	 * variables are common to all implementations
	 * may contain abstract method
	 * abstract method in the parent’s class must be defined by the child class
	 */

abstract class Food 
{
	 protected $name;
	 protected $type;

	 public function __construct($name, $type)
	 {
	  $this->type = $type;
	  $this->name = $name;
	 }

	 public function getType() 
	 {
	  return $this->type;
	 }

	 public function getName() 
	 {
	  return $this->name;
	 }

	 abstract public function getTypeName();   
}