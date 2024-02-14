<?php

// $edades = array(
//     "Carlos" => 20,
//     "Leonel" => 18,
//     "Juan" => 40,
// );

// echo "La edad de Carlos es " . $edades["Carlos"];

// echo "\n";

// $cafes = array(
//     "Capuccino" => 50,
//     "Latte" => 49,
//     "Americano" => 70,
// );

// echo "El precio del cafe Americano es de {$cafes['Americano']}";

$personas = array(

    "Carlos" => array(
        "edad" => 20,
        "apellido" => "Santana",
        "hobbies" => array(
            "hobbie1" => "Cantar",
            "hobbie2" => "Bailar",
            "hobbie3" => "Componer",
        ),
    ),
    "Leonel" => array(
        "edad" => 18,
        "apellido" => "Medina",
        "hobbies" => array(
            "hobbie1" => "Futbol",
            "hobbie2" => "Basket",
            "hobbie3" => "Programar",
        ),
    ),

);

echo "La información de Leonel es: Edad: -" . $personas["Leonel"]["edad"] . " -Apellido: " . $personas["Leonel"]["apellido"] . " -Hobbie: " . $personas["Leonel"]["hobbies"]["hobbie3"];

echo "\n";