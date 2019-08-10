<?php
class Animal
{
    //Encapsulation: the variables cannot be accessed directly outside the class 
    private $family;
    private $food;

    public function __construct($family, $food)
    {
        $this->family = $family;
        $this->food   = $food;
    }

    public function animalMethod($name)
    {
        echo "<br> This animal name is ".$name;
    }

    //Encapsulation: access Or set the family or food value
    public function get_family()
    {
        return $this->family;
    }
    public function set_family($family)
    {
        $this->family = $family;
    }
    public function get_food()
    {
        return $this->food;
    }
    public function set_food($food)
    {
        $this->food = $food;
    }
}