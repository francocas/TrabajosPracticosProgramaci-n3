<?php 
include_once("../Clases/fabrica.php");

$f = fopen("../ArchivosDeTexto/Empleados.txt","a");

$target = "../Fotos/";

$target_foto = ($target.$_POST{"Apellido"}."-".$_POST{"Nombre"}.".jpg");

$empleadoNuevo = new Empleado($_POST{"Apellido"}, $_POST{"Nombre"}, $_POST{"dni"}, $_POST{"Sexo"}, $_POST{"Legajo"}, $_POST{"Sueldo"},$target_foto);

echo($empleadoNuevo);

fwrite($f,$empleadoNuevo. "\n");

fclose($f);

if(move_uploaded_file($_FILES["img"]["tmp_name"],$target_foto))
{
    echo("<br>"."Foto subida");
}
else
{
    echo("Error");
}

?>  