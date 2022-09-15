<?php
/*
Tengo un billete de avión para Denver definir la variable dataSalida (fecha y hora). Necesito que el programa que calcule tiempo me falta para coger dicho avión, dependiendo de la hora actual.
*/

$fecha_Actual = new DateTime('now');
$fecha_viaje = new DateTime('2022-09-16 15:00:00');
$dife = $fecha_viaje ->diff($fecha_Actual);

echo "El intervalo de tiempo es ";
echo $dife -> format('%d dias, %H horas, %i minutos');
