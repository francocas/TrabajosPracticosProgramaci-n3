<?php 

$conexion = mysqli_connect("localhost","root","","basededatosejemplo1");
$Id = 1;
$consulta = mysqli_query($conexion,"SELECT * FROM tablauno WHERE id = $Id");
var_dump($consulta);
$filas = mysqli_fetch_object($consulta);
var_dump($filas);
?>