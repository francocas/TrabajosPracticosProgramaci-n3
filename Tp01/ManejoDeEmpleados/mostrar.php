<?php 
require_once("../Clases/fabrica.php");
    $fabrica = new Fabrica($_POST["RazonSocial"]);
    $fabrica->TraerEmpleado("../ArchivosDeTexto/Empleados.txt");
    echo($fabrica);
    ?>