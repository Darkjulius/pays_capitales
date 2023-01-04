<?php

function capitales($pays)
{
    switch ($pays) {
        case "France":
            $capitale = "Paris";
            break;
        case "Allemagne":
            $capitale = "Berlin";
            break;
        case "Belgique":
            $capitale = "Bruxelles";
            break;
        case "Angleterre":
            $capitale = "Londres";
            break;
        case "Italie":
            $capitale = "Rome";
            break;
        case "Espagne":
            $capitale = "Madrid";
            break;
        default:
            $capitale = 0;
    }
    return $capitale;
};
