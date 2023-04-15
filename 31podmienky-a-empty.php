<?php

    // Podmienky a empty
    $articles = [];
    
    // empty(premenná) - či je premenná vo vnútri prázdna
    if (empty($articles)) {
        echo "Neexistujú žiadne články.";
    } else {
        echo "Sú k dispozícii články k vypísaniu";
    }

    echo "<br>";

    // Rovnaké ako to hore len bez else
    if (empty($articles)) {
        echo "Neexistujú žiadne články.";
        exit(); // Ukončí pokračovanie kódu ktorý je nižšie
    }
    echo "Ďalší kód na stránke";