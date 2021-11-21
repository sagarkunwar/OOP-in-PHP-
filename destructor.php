<?php

class Fruits{

        public $name;
        public $color;


    function __construct($name, $color){
        $this->name = $name;
        $this->color= $color;
    }

    function __destruct(){// now destructor is created which helps to automatically result when ojvect is created
        echo $this->name;
        echo $this->color;

    }

}

$naam = new Fruits('mango', "yellow");
?>