<?php

    // Switch
    $day = "so";

    // switch (premenna / to čo sa má hodnotiť)
    switch ($day) {
        case "po": // Spustenie tejto časti
            echo "Pondelok";
            break; // Ukončenie tejto časti / break musí vždy byť !
        case "ut":
            echo "Utorok";
            break;
        case "st":
            echo "Streda";
            break;
        case "št":
            echo "Štvrtok";
            break;
        case "pia":
            echo "Piatok";
            break;
        case "so":
            echo "Sobota";
            break;
        case "ne":
            echo "Nedela";
            break;
        default:    // Základná hodnota ak neplatí žiadny vyššie upvedený case
            echo "Špatná skratka dňa";
            break;
    }