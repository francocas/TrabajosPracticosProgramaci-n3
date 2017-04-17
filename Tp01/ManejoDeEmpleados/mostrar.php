<?php 
require_once("../Clases/fabrica.php");
    $fabrica = new Fabrica($_POST["RazonSocial"]);
    $fabrica->TraerEmpleado();
    echo($fabrica);
    ?>