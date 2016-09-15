<?php

date_default_timezone_set('America/Bogota');

error_reporting(E_ALL | E_STRICT);
$socket = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);
socket_bind($socket, '54.68.87.20', 2145);

do{

socket_recvfrom($socket, $mensaje, 200, 0, $from, $port);

$mensaje_div = explode('#',$mensaje);
$pesos = explode('-',$mensaje_div[1]);

$s1=strpos($mensaje,"#");    $s2=strpos($mensaje,"@");  $lon=strlen($mensaje);


$conexion = @mysql_connect("localhost","root","uninorte") or die("No se encontro el servidor");
mysql_select_db("rastreovehicular",$conexion) or die ("No se encontro base de datos");

$lat=strpos($mensaje,"+");    $lng=strpos($mensaje,"-");
$id=strpos($mensaje,"ID=");    $time=substr($mensaje,$lat-10,10);
$weeksTosecond=substr($time,0,4)*7*24*60*60;    $daysToseconds=substr($time,4,1)*24*60*60;    $seconds=substr($time,5,5);
$tiempogps=$weeksTosecond+$daysToseconds+$seconds+315964800;
$latitud=substr($mensaje,$lat+1,2).'.'.substr($mensaje,$lat+3,5);
$longitud='-'.substr($mensaje,$lng+2,2).'.'.substr($mensaje,$lng+4,5);
$fecha=date('Y-m-d H:i:s', $tiempogps);
$fecha1 = substr($fecha,0,10);
$fecha2 = substr($fecha,10,18);
$fecha_servidor = date('Y-m-d H:i:s');
$consulta2=mysql_query("INSERT INTO rdb(lat,lng,fecha,hora) VALUES('$latitud','$longitud','$fecha1','$fecha2')");
mysql_close($conexion);

}
} while (true);
?>
