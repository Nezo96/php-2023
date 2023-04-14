<?php

    // Vytvorenie pola s hodnotami | modernejší spôsob
    $students = ["Harry", "Ron", "Hermiona"];

    // Druhý spôsob vytvorenia pola | starší spôsob
    $students2 = array("Harry", "Ron", "Hermiona");

    // echo $students2[0];

    // Vloženie vlastných indexov do pola
    $students3 = [
        1 => "Harry", 
        4 => "Ron", 
        "Hermiona"
    ];
    var_dump($students3);
    echo "<br>";

    echo $students3[1];
    echo "<br>";

    echo $students3[4];
    echo "<br>";

    echo $students3[5];
    echo "<br>";