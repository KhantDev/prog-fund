<?php
class Cow extends Animal        //Inheritance : use methods from the Animal class
{
    private $owner;

    public function __construct($family, $food)
    {
        parent::__construct($family, $food);        //super(family, food)  ... in java
    }
    public function set_owner($owner)
    {
        $this->owner = $owner;
    }
    public function get_owner()
    {
        return $this->owner;
    }
    //Method Overriding via super or parent class
    public function animalMethod($name)
    {
        echo "<br> I am cow, my name is ".$name;
    }
    //Error Overriding
    // public function animalMethod($name, $age)
    // {
    //     echo "<br> I am cow, my name is ".$name." age is ".$age;
    // }
}