<?php

$tienda_de_cafe = array(
    "Americano" => 20,
    "Latte" => 25,
    "Recalentado" => 10,
    "Capuccino" => 27.5,
    "Mocca" => 24
);

// foreach ($tienda_de_cafe as $cafe => $precio) {

//     echo "Actualmente encontré al café $cafe \n";

//     if ($cafe == "Latte") {
//         echo "Encontramos a Latte!";
//         break;
//     }
// }

foreach ($tienda_de_cafe as $cafe => $precio) {
    
    if ($cafe == "Recalentado") {
        continue;
    }

    echo "El café $cafe es muy rico! \n";
}

echo "\n";