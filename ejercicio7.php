<?php
/*
Definir un número en una variable  y decir a qué nota le corresponde.
Entre 1 y 4,9: suspenso
Entre 5 y 5,9: suficiente
Entre 6 y 6,9: bien
Entre 7 y 8,9: muy bien
Entre 9 y 10: sobresaliente
Si no ERROR.
*/
$num = 5;

if(1 <= $num && $num <= 4.9){
    echo " suspenso";
}elseif(5 <= $num && $num <= 5.9 ){
    echo " suficiente";
}elseif(6 <= $num && $num <= 6.9){
    echo "bien";
}elseif(7 <= $num && $num <= 8.9){
    echo "muy bien";
}elseif(9 <= $num && $num <= 10){
    echo "sobresaliente";
}else{
    echo "ERROR";
}