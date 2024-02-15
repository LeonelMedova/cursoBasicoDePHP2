<?php

$cantidad_donada = readline("Por favor, ingresa el valor de donaciones que tienes acumuladas actualmente: ");

if ($cantidad_donada >= 100) {
    echo "Tu retiro esta en proceso...";
}
else {
    echo "Lo sentimos, solo puedes retirar si tienes como minimo 100 dolares acumulados";
}

echo "\n";