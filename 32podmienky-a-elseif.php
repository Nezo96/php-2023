<?php

    // Podmienky a elseif

    $hour = 19;
    $message = null;  // používame keď chcem nižšie v kóde pridadiť nejakú hodnotu

    if ($hour < 9) {
        $message = "Dobré ráno";

    // Vždy za elseif musí byť podmienka
    } elseif ($hour < 12) {
        $message = "Dobré doobedia";
    } elseif ($hour == 12) {
        $message = "Dobrý obed";
    } elseif ($hour < 18) {
        $message = "Dobré póbedie";
    } else {
        $message = "Dobrý večer";
    }
    
    echo $message;