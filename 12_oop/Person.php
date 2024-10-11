<?php

class Person
{
    public $name;
    public $surname;
    private $age;

    public function __construct($name,$surname)
    {
        $this->name=$name;
        $this->surname=$surname;
    }

    function hello()
    {
       return 'Hello I am  '.$this->name. ' '.$this->surname;
    }

    public function setAge($age)
    {
        if ($age > 0){
            $this->age = $age; 
        }else{
            throw new Exception("Invalid age");
        }
     
    }

    public function getAge()
    {
       return $this->age;
    }
}