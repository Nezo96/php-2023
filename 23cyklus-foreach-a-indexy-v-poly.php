<?php

    $students = ["Harry", "Ron", "Hermiona"];

    //foreach(pole, index pola, premenna ktorú si zvolím)
    foreach($students as $index => $one_student) {
        $index = $index + 1; // zvýši index o 1 aby sa začínalo 1 a nie s 0

        echo $index . ". " . $one_student; // Index pola . " " . hodnota daného indexu
        echo "<br>";
    }