<?php 
include_once("../Clases/fabrica.php");
$empleadoNuevo = new Empleado($_POST{"Apellido"}, $_POST{"Nombre"}, $_POST{"dni"}, $_POST{"Sexo"}, $_POST{"Legajo"}, $_POST{"Sueldo"});
echo($empleadoNuevo);

$f = fopen("../ArchivosDeTexto/Empleados.txt","a");
fwrite($f,$empleadoNuevo. "\n");
fclose($f);


?>