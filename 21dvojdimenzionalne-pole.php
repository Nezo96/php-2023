<?php

    // Dvojdimenzionálne pole
    $students = [
        [
            "first_name" => "Harry",
            "second_name" => "Potter",
            "age" => 15
        ],
        [
            "first_name" => "Hermiona",
            "second_name" => "Grangerová",
            "age" => 14
        ],
        [
            "first_name" => "Ron",
            "second_name" => "Weasley",
            "age" => 15
            ]
    ];

    // Dvojdimenzionálne pole nejde vypísať pomocou základného echo
    // Hodí chybu Array to string conversion
    var_dump($students);
    echo "<br>";

    // Správne vypísanie pomocou echo
    // premenná[index pola][first_name index]
    echo $students[0]["first_name"];
    echo "<br>";
    
    echo $students[1]["first_name"];
    echo "<br>";

    echo $students[1]["age"];