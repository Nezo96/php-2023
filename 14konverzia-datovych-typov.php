<?php

    // Konverzia dátových typov | typ conversion
    $year_price = "1500";
    $year_count = "7";

    // Pokial prišla matematická operácia PHP automaticky premenilo stringy na čísla !
    $result_price = $year_price * $year_count;
    echo $result_price;
    echo "<br>";
    var_dump($result_price);
    echo "<br>";

    // Avšak premenné sú stále stringy !
    var_dump($year_price);
    echo "<br>";
    var_dump($year_count);