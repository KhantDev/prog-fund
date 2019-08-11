<?php
require 'Product.php';

class Super extends Food implements Product 
{
	public function getTypeName() 
	{
	  	return $this -> name .':'. $this -> type;
	}

	//from interface
	public function showPrice($price)
	{
		echo $this->name. " costs ".$price;
	}
	public function showWeight()
	{
		echo " Weight is now shown ";
	}
}