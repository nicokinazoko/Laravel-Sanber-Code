<?php

    class Frog extends Animal
    {
        public function __construct($name)
        {
            $this->name         =   $name;
            
        }

        public function jump()
        {
            echo "hop hop" . "<br>";
        }
    }

?>