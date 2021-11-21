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

}


?>