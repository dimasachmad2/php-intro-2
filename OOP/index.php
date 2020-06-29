<?php
    //require ('animal.php');
    require ('ape.php');
    require ('frog.php');
    
    //release 0
    $sheep = new Animal("shaun");

    echo $sheep->name; // "shaun"
    echo $sheep->legs; // 2
    echo $sheep->cold_blooded; // false
    echo "<br><br>";

    //release 1
    $sungokong = new Ape("kera sakti");
    $sungokong->yell(); // "Auooo"

    echo "<br>";

    $kodok = new Frog("buduk");
    $kodok->jump(); // "hop hop"

?>