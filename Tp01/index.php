<?php 
include_once("Clases/fabrica.php");

$empleado1 = new Empleado("Perez","Pepito",40893168,"M",123564,14878.45,"../Fotos/Hola.gif");
$empleado2 = new Empleado("Laurent","Fiora",48651892,"F",123456,17836.85,"../Fotos/Hola.gif");
$empleado3 = new Empleado("Laurent","Ammdart",35987412,"F",178954,17836.85,"../Fotos/Hola.gif");
$empleado4 = new Empleado("Laurent","Ammdart",35457412,"F",179954,17836.85,"../Fotos/Hola.gif");
$fabrica = new Fabrica("Poppy SA");
//echo($empleado1."<br>".$empleado2."<br>".$empleado3);
//echo("<br>".$empleado1->Hablar("Español"));

$fabrica->AgregarEmpleado($empleado1);
$fabrica->AgregarEmpleado($empleado2);
$fabrica->AgregarEmpleado($empleado1);
$fabrica->AgregarEmpleado($empleado3);
$fabrica->AgregarEmpleado($empleado1);
$fabrica->AgregarEmpleado($empleado4);
echo("<br><br><br><br>");

echo($fabrica);
//echo($fabrica->testEmpleados());
//$fabrica->EliminarEmpleado($fabrica->getEmpleado($empleado2->getLegajo()));
//$fabrica->EliminarEmpleado($fabrica->getEmpleado($empleado3->getLegajo()));
//echo($fabrica->testEmpleados());

//echo($fabrica->CalcularSueldos());
echo("<br><br><br><br>");
echo($fabrica);
$fabrica->GuardarFabrica("../ArchivosDeTexto/Empleado.txt");


$fabrica2 = new Fabrica("Poppy SA2");
$fabrica2->TraerEmpleado();
echo("<br><br><br><br>");
echo($fabrica2);
?>