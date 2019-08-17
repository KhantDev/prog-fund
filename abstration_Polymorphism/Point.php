<?php 
class Point extends Food 
{
	function __construct($name, $type)
	{
		parent::__construct($name, $type);
	}

	public function getTypeName() 
	{
	 	return $this -> name .':'. $this -> type;
	}
}