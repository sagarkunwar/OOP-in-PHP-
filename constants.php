<?php

 class car{

    const name = "101";

    function wow(){ // to access constant variable inside the class we have to (self:: constant variable name)
       echo self :: name;
    }

}

$obj = new car();
echo $obj-> wow();


?>