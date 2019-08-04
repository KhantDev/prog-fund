<?php
namespace controller\api;

use model\api\Animal;

class AnimalController
{
	private $animal ;
	function __construct(Animal $animal)  //dependency injection
	{
		$this->animal = $animal;
	}
	function say()
	{
		$this->animal->sayController();
	}
}