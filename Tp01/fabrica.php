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
    
    public function getEmpleado($id)
    {
        for($i = 0;$i <= count($this->_empleados); $i++)
        {
            if(isset($this->_empleados[$i]))
            {
                if($this->_empleados[$i]->getLegajo() == $id)
                {
                    return $i;
                    break;
                }
            }
        }
        return -1;
    }

    function EliminarEmpleado($i)
    {
        /*for($i = 0;$i < count($this->_empleados); $i++)
        {
            if($this->_empleados[$i]->getLegajo() == $Empleado->getLegajo())
            {
                unset($this->_empleados[$i]);
                break;
            }
        }
        $this->_empleados = array_values($this->_empleados);*/
        if($i != -1)
        {
            unset($this->_empleados[$i]);
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
            if(isset($ayuda))  
            {
            $acumulador+=$ayuda->getSueldo();
            }
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
        for($i = 0; $i <= count($this->_empleados); $i++)
        {      
            if(isset($this->_empleados[$i]))  
            {
                $retorno = $retorno."<br>".$this->_empleados[$i];
            }   
                                                             
        }
        return $retorno;
    }

    public function GuardarFabrica()
    {
        $archivo = fopen("Fabrica.txt","w");
              for($i = 0; $i <= count($this->_empleados); $i++)
        {      
            if(isset($this->_empleados[$i]))  
            {
                fwrite($archivo,$this->_empleados[$i].PHP_EOL);
                //fwrite($archivo, );
            }   
        }
        fwrite($archivo,"*");
        fclose($archivo);
    }

    public function TraerEmpleado()
    {
         $contador = 1;
        $archivo = fopen("Fabrica.txt","r");
        while(!feof($archivo))
        {    
          
           $linea = fgets($archivo);
           $emp = explode("-",$linea);
           $empleado = new Empleado($emp[0],$emp[1],$emp[2],$emp[3],$emp[4],$emp[5]);
          //echo("<br>");
          // var_dump($emp);
           $this->AgregarEmpleado($empleado);

           if(fgetc($archivo) == "*")
           {
               break;
           }

        }
        echo $contador;
        fclose($archivo); 
    }
}
?>