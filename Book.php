<?php
//Class & Object
class Book {
	public $name;  //Menber variable, Instance variable ,Object variable
	
	public $price , $author;

	public function setInfo($name,$price,$author)  //Setter (Member methohd,Instance method)
	{
		$this->name = $name;
		$this->price = $price;
		$this->author = $author;
	}
	public function getInfo()  //Getter
	{
		echo $this->name." costs ".$this->price."Author is".$this->author;
	}
}