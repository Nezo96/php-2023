<?php

    // Cyklus foreach - na prácu s polom
    // Cyklus for - keď poznám počet opakovaní
    // for (vytvorim si premennú a nastavým jej hodnotu, podmienka, zvýš premennú o 1)
    for ($i = 1; $i <= 10; $i = $i + 1) {
        echo $i . ". Harry";
        echo "<br>";
    }

    echo "-------------------------------";
    echo "<br>";

    // 10x vypíš odstavec s textom Harry Potter
    $name = "Harry Potter";
    for ($i = 1; $i <= 10; $i++) {
        echo "<p>$name</p>";
    }