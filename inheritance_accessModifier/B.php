<?php 
/**
 * Multi Inheritance
 */
class B extends A   //A class is parent class, B class is a child class.
{
	
	function sayBclass()
	{
		echo "Hi B class <br>";
	}
	function setProt($prot)
	{
		$this->prot = $prot;
	}
	function getProt()
	{
		echo $this->prot;
	}
	function setPri($pri)
	{
		$this->pri = $pri;
	}
	function getPri()
	{
		echo $this->pri;
	}
}