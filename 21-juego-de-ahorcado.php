<?php

$possible_words = ["Bebida", "Prisma", "Ala", "Dolor", "Piloto", "Baldosa", "Terremoto", "Asteroide", "Gallo", "Platzi"];

define("MAX_ATTEMPS", 6);

echo "Bienvenido al juego del ahorcado! \n\n";

//Inicializamos el juego
$choosen_word = $possible_words[ rand(0, 9) ]; // Escoge una palabra del arreglo aleatoriamente
$choosen_word = strtolower($choosen_word);  //para que todo lo lea en minuscula
$word_length = strlen($choosen_word); // Cantidad de letras
$discovered_letters = str_pad("", $word_length, "_");  // Llena con guion bajo en donde no se sabe las letras
$attempts = 0;

echo "Palabra de $word_length letras \n\n";
echo $discovered_letters . "\n\n";

// Pedimos al usuario que escriba
$player_letter = readline("Escribe una letra: ");
$player_letter = strtolower($player_letter);


echo "\n";