<?php
/*
Diseñar un programa que determine la cantidad total a pagar por una llamada telefónica de acuerdo a las siguientes premisas:
Toda llamada que dure menos de 3 minutos tiene un coste de 10 céntimos.
Cada minuto adicional a partir de los 3 primeros es un paso de contador y cuesta 5 céntimos.
*/

$coste = 10;
$tiempo = 5;
$resto;

if ($tiempo <= 3){
    echo "coste:10 centimos";
}else{
    $resto = $tiempo - 3;
    echo "coste:" . ($resto*5 + 10);
}

