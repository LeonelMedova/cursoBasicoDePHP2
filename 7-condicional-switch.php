<?php

// Gato 1: 9
// Gato 2: 4
// Gato 3: 5
// Gato 4: 9
// Gato 5: 1

$gato = 4;

switch ($gato) {
    case 1:
    case 4:
        echo "Su numero favorito es el 9";
        break;

    case 2:
        echo "Su numero favorito es el 4";
        break;

    case 3:
        echo "Su numero favorito es el 5";
        break;

    case 5:
        echo "Su numero favorito es el 1";
        break;

    default:
        echo "Ese gato no existe";
        break;

}

echo "\n";