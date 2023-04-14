<?php

    // Príklad kde sa využie asociatívne pole
    $name = "Harry";
    $second_name = "Potter";

    $students3 = [
        "first_name" => $name,
        "seconde_name" => $second_name,
        "college" => "Chrabromil",
        "age" => 15,
        "result" => null
    ];

    echo $students3["first_name"];