<?php 
/**
 * Polymorphism
 * Polymorphism is used to make applications more modular and extensible. 
 * Instead of messy conditional statements describing different courses of action, 
 * you create interchangeable objects that you select based on your needs.
 */

class Test
{
	//For any child classes inherited Food parent class
	function sayInfo(Food $food)		
	{
		return $food->getTypeName();
	}
	//For any classes implemented Product interface class
	//Polymorphism
	function sayWeight(Product $product)  
	{
		return $product->showWeight();
	}
}

