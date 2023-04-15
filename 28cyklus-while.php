<?php

    // Cyklus foreach - na prácu s polom
    // Cyklus for - keď viem koľko krát sa má opakovať
    // Cyklus for - keď neviem koľko krát sa má opakovať

    $month = 1;

    while ($month <= 12) {
        echo $month;
        echo "<br>";
        $month = $month + 1;
    }

    echo "------------------";
    echo "<br>";

    $test_questions = [
        "1. otázka",
        "2. otázka",
        "3. otázka",
        "4. otázka",
        "5. otázka"
    ];

    $maximum = 2;
    $counter = 0;

    while ($counter < $maximum) {
        echo $test_questions[$counter];
        echo "<br>";
        $counter++;
    }