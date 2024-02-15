<?php

$asientos_disponibles = 0;
$hijo_tom_holland = false;
$conoce_tony_stark = true;

if ($asientos_disponibles > 0) {
    echo "Puedes ver la pelicula de Spidey";
}
elseif ($hijo_tom_holland == true) {
    echo "No te creo, pero puedes entrar a ver la pelicula";
}
elseif ($conoce_tony_stark == true) {
    echo "Bueno, te creo, adelante";
}
else {
    echo "Lo sentimos, no hay mas asientos disponibles";
}

echo "\n";