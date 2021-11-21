<?php

class Fruits{

        public $name;
        public $color;


    function __construct($name, $color){
        $this->name = $name;
        $this->color= $color;
    }

    function getname(){
        return $this->name;
    }

    function getcolor(){
        return $this->color;
    }

}


// now creating pbjects of class
// but in this code we dont have to call setter class by the object bcoz we ahve created constructor 

$naam = new Fruits('mango', "yellow");

echo $naam->getname();
echo $naam->getcolor();
?>