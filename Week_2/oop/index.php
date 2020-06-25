<?php

    require_once('animal.php');

    $sheep          =   new animal("Shaun");

    echo $sheep->name . "<br>";
    echo $sheep->legs . "<br>";
    echo $sheep->cold_blooded . "<br>";

    
    require_once('Frog.php');
    $kodok          =   new Frog("buduk");
    $kodok->jump();
    // echo $kodok->name . "<br>";
    // echo $kodok->legs . "<br>";

    require_once('Ape.php');

    $kera           =   new Ape("Kera Sakti");
    $kera->yell();
    // echo $kera->name . "<br>";
    // echo $kera->legs . "<br>";

?>