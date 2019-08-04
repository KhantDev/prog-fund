<?php
namespace model\api;
class Animal
{
	public $price;  //instance variable

	function setter($price)  //setter
	{
		$this->price = $price;
	} 

	function getter()  //getter
	{
		echo $this->price;
	}

	function say()
	{
		echo "Hey Animal <br>";
		}

	function sayController()
	{
		echo "Hey Controller from model <br>";
	}

}