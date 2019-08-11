<?php 
class Dog implements Animal
{
	 //new method
	 public function bark() 
	 {
		  return 'wof';
	 }
	 
	 //implemented methods
	 public function breath() 
	 {
		  return 'breathing by nose';
	 }

	 public function eat() 
	 {
		  return 'eating by mouth';
	 }
}