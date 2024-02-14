<?php

$array_gatos = array(

    "gato1" => array(
        "nombre" => "Unico",
        "ocupacion" => "Lider",
        "color" => "Blanco",
        "comida" => array(
            "favoritas" => "Ratones",
            "noFavoritas" => "Arroz",
        ),
    ),
    "gato2" => array(
        "nombre" => "Docena",
        "ocupacion" => "Cocinero",
        "color" => "Negro",
        "comida" => array(
            "favoritas" => "Croquetas",
            "noFavoritas" => "Carne",
        ),
    ),
    "gato3" => array(
        "nombre" => "Triki",
        "ocupacion" => "Vago",
        "color" => "Gris",
        "comida" => array(
            "favoritas" => "Lagartijas",
            "noFavoritas" => "Pollo",
        ),
    ),
);

echo "La comida favorita de Docena son {$array_gatos['gato1']['comida']['favoritas']} \n";
// echo "La comida favorita de Docena son " . $array_gatos['gato1']['comida']['favoritas']; // forma direfente de llamar un arreglo

echo "El color de Triki es " . $array_gatos['gato3']['color'];

echo "\n";