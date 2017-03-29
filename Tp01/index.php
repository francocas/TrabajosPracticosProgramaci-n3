<?php 
include("fabrica.php");

$empleado1 = new Empleado("Perez","Pepito",40893168,"M",123564,1478.45);
$empleado2 = new Empleado("Laurent","Fiora",48651892,"F",123456,17836.85);
$fabrica = new Fabrica("Poppy SA");
echo($empleado1."<br>".$empleado2.$empleado2);
echo("<br>".$empleado1->Hablar("Espanol"));

$fabrica->AgregarEmpleado($empleado1);
$fabrica->AgregarEmpleado($empleado2);
$fabrica->AgregarEmpleado($empleado1);
echo($fabrica->testEmpleados());
//$fabrica->EliminarEmpleado($empleado1);
//echo($fabrica->testEmpleados());

echo($fabrica->CalcularSueldos());
?>