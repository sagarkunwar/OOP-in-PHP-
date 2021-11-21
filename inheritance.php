<?php

class Fruits{

    public $name;
    public $color;

    function __construct($name,$color){

        $this->name = $name;
        $this->color= $color;

    }

    function __destruct(){
        echo "Name of fruit is {$this->name},'',and color of fruit is {$this->color}";
    }


}

class apple extends Fruits{

}
$aple = new apple("apple", "red");

?>