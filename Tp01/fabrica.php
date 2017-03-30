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
        /*$i = 0;
        $j = 0;
        for($i = 0; $i < count($this->_empleados); $i ++)
        {
            for($j = $i; $j < count($this->_empleados);$j ++)
            {
                if($j == $i)
                {
                    continue;
                }
                if($this->_empleados[$i] == $this->_empleados[$j])
                {
                    $this->EliminarEmpleado($this->_empleados[$j]);
                    break;
                }
            }
        }
        */
        $this->_empleados = array_unique($this->_empleados);
    }

    public function __toString()
    {
        $retorno = "Razon Social: ".$this->_razonSocial." - ";
        for($i = 0; $i < count($this->_empleados); $i++)
        {
            $retorno = $retorno."<br>".$this->_empleados[$i];
        }
        return $retorno;
    }
}
?>