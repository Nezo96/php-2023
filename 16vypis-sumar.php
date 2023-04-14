<?php

    // Výpis textu a premennej sumár
    $first_name = "Harry";

    // Validný zápis
    echo "Ahoj ". $first_name;
    echo "<br>";
    
    // Taktiež validný zápis
    echo "Ahoj $first_name";
    echo "<br>";

    // Tiež validný zápis
    echo "Ahoj {$first_name}";