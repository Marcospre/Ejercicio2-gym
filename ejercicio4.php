<?php
/*
Ejercicio 04
Define tres variables y ordenar en orden ascendente. Despúes en orden descendente. Guarde como ejercicio04.php
*/

$v1 = 1;
$v2 = 2;
$v3 = 3;

if($v1 > $v2 && $v2 > $v3){
    echo $v1." ".$v2." ".$v3;
    echo"<br>";
    echo $v3." ".$v2." ".$v1;
}elseif($v2 > $v1 && $v1 > $v3){
    echo $v2." ".$v1." ".$v3;
    echo"<br>";
    echo $v3." ".$v1." ".$v2;
}elseif($v2 > $v3 && $v3 > $v1){
    echo $v2." ".$v3." ".$v1;
    echo"<br>";
    echo $v1." ".$v3." ".$v2;
}elseif($v3 > $v1 && $v1 > $v2){
    echo $v3." ".$v1." ".$v2;
    echo"<br>";
    echo $v2." ".$v1." ".$v3;
}else{
    echo $v3." ".$v2." ".$v1;
    echo"<br>";
    echo $v1." ".$v2." ".$v3;
}