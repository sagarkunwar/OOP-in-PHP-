<?php

class Fruits{// creating class
    // properties of class Fruits

    public $name;
    public $color;

    // now creating methods(function)
    function setname($name){
        $this->name = $name;
    }

    function setcolor($color){
        $this->color =$color;
    }

    // now creating getter for setter

    function getname(){// getter always have return type
        return $this->name;
    }

    function getcolor(){
        return $this->color;
    }

}

// creating object to use class or even we can say instance to object 

$naam = new Fruits();
$rang = new Fruits();

// now setting name of fruits from setter 

$naam ->setname('mango');// setting name of fruits through object 
$rang -> setcolor('yelllow and red');

echo 'Color of fruits is ','',$naam ->getname(); // getting name of fruits from object with getter function
echo "<br>";
echo 'Name of fruits is ','',$rang ->getcolor();


?>