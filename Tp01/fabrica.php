<?php 
include("empleado.php");
class Fabrica
{
    private $_empleados;
    private $_razonSocial;

    function __construct($razonsocial)
    {
        $this->_razonSocial = $razonsocial;
        $this->_empleados = array();
    }

    function AgregarEmpleado($Empleado)
    {
        array_push($this->_empleados,$Empleado);
        $this->EliminarEmpleadosRepetidos();
    }
    
    function EliminarEmpleado($Empleado)
    {
        for($i = 0;$i < count($this->_empleados); $i++)
        {
            if($this->_empleados[$i]->getLegajo() == $Empleado->getLegajo())
            {
                unset($this->_empleados[$i]);
            }
        }
    }

    function testEmpleados()
    {
        return var_dump($this->_empleados);
    }

    function CalcularSueldos()
    {
        $acumulador = 0;
        foreach($this->_empleados as $ayuda)
        {
            $acumulador+=$ayuda->getSueldo();
        }
        return $acumulador;
    }

    private function EliminarEmpleadosRepetidos()
    {
        
    }
}
?>