<?php 
include_once("Clases/fabrica.php");

$empleado1 = new Empleado("Perez","Pepito",40893168,"M",123564,14878.45,"../Fotos/Hola.gif");
$empleado2 = new Empleado("Laurent","Fiora",48651892,"F",123456,17836.85,"../Fotos/Hola.gif");
$empleado3 = new Empleado("Laurent","Ammdart",35987412,"F",178954,17836.85,"../Fotos/Hola.gif");
$empleado4 = new Empleado("Laurent","Ammdart",35457412,"F",179954,17836.85,"../Fotos/Hola.gif");
$fabrica = new Fabrica("Poppy SA");

$fabrica->AgregarEmpleado($empleado1);
$fabrica->AgregarEmpleado($empleado2);
$fabrica->AgregarEmpleado($empleado1);
$fabrica->AgregarEmpleado($empleado3);
$fabrica->AgregarEmpleado($empleado1);
$fabrica->AgregarEmpleado($empleado4);
echo("<br><br><br><br>");

echo($fabrica);

echo("<br><br><br><br>");
echo($fabrica);

$fabrica->GuardarFabrica("ArchivosDeTexto/Empleados.txt");


$fabrica2 = new Fabrica("Poppy SA2");
$fabrica2->TraerEmpleado("ArchivosDeTexto/Empleados.txt");
echo("<br><br><br><br>");
echo($fabrica2);
?>