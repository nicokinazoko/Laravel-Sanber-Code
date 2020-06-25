<?php

class Ape extends Animal
{

    public function __construct($name)
    {
        $this->name         =   $name;
        $this->legs         =   "4";
        
    }

    public function yell()
    {
        echo "Auooo" . "<br>";
    }
}


?>