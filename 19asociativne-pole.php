<?php

    // Vloženie vlastných indexov do pola
    $students = [
        1 => "Harry", 
        4 => "Ron", 
        "Hermiona"
    ];

    // Asociatívne pole
    $students2 = [
        "jedna" => "Harry",
        "styri" => "Ron",
        "pet" => "Hermiona"
    ];

    var_dump($students2);
    echo "<br>";

    echo $students2["jedna"];
    echo "<br>";

    echo $students2["styri"];
    echo "<br>";

    echo $students2["pet"];
    echo "<br>";

    // Príklad kde sa využie asociatívne pole
    $students3 = [
        "first_name" => "Harry",
        "seconde_name" => "Potter",
        "college" => "Chrabromil",
        "age" => 15
    ];

    echo $students3["college"];