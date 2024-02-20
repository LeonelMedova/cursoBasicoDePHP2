<?php

$tienda_de_cafe = array(
    "Americano" => 20,
    "Latte" => 25,
    "Capuccino" => 27.5,
    "Mocca" => 24
);

foreach ($tienda_de_cafe as $cafe => $price) {
    echo "El café $cafe cuesta $$price USD \n";
}

echo "\n";