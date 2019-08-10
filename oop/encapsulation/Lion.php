<?php
class Lion extends Animal		//Inheritance : use methods from the Animal class
{
    public function __construct($family, $food)
    {
        parent::__construct($family, $food);
    }
}