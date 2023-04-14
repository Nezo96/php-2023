<?php

    // Foreach cyklus a asociatívne pole
    $student1 = [
        "meno" => "Harry",
        "priezvisko" => "Potter",
        "vek" => 15
    ];

    // Vypísanie údajov v asociatívnom poly pomocou foreach cyklusu
    // foreach(pole, index v poly, vlastná premenná)
    foreach($student1 as $index => $one_information) {
        echo $index . ": " . $one_information;
        echo "<br>";
    }