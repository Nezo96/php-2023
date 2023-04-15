<?php

    // Logické operátory - and, or
    // and - a zároveň
    // or - alebo

    $age = 15;

    // Obe podmienky musia platiť $age >= 18 and $age < 65
    if ($age >= 18 and $age < 65) {
        echo "Dospelý nie je v dôchodkovom veku";
    } elseif ($age < 18) {
        echo "Dospievajúci";
    } else {
        echo "Človek v dôchodkovom veku";
    }

    // and - a zároveň
    // ture, true = true
    // true, false = false
    // false, true = false
    // false, false = false

    echo "<br>";
    echo "-------------------";
    echo "<br>";

    $password1 = "12345";
    $password2 = "66778";

    // Stačí ak je splnená len jedna z podmienok
    if ($password1 == "12345" or $password2 == "66778") {
        echo "Dvere sa otvárajú";
    } else {
        echo "Neplatný kód";
    }

    // or - alebo
    // ture, true = true
    // true, false = true
    // false, true = true
    // false, false = false