<?php

    // Foreach cyklus

    $students = ["Harry", "Ron", "Hermiona"];

    // Vypísanie pomocou echo
    echo $students[0];
    echo "<br>";
    echo $students[1];
    echo "<br>";
    echo $students[2];
    echo "<br>";
    echo "-----------------------------";
    echo "<br>";

    // Vypísanie pomocou cyklu foreach
    // foreach(pole ktoré chcem prechádzať, nejaký nazov)
    foreach($students as $one_student) {
        echo "<p>$one_student</p>"; // vypísanie do odstavca
        // echo "<br>";
    }