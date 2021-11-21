<?php

abstract class first{
public $name;

public function __construct($name){
    $this->one= $name ;
} 
 abstract public function two(): string;

}

class second extends first{

    public function two(): string{
        echo "this is my $this->one";
     }
}

$obj = new second("name");
$obj->two();

?>