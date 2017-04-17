<?php 
include_once("empleado.php");
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
        $this->_empleados = array_values($this->_empleados);
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
        $this->_empleados = array_unique($this->_empleados);
    }

    public function __toString()
    {
        $retorno = "Razon Social: ".$this->_razonSocial." - ";
        for($i = 0; $i < count($this->_empleados); $i++)
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
        $archivo = fopen("../ArchivosDeTexto/Fabrica.txt","w");
              for($i = 0; $i <= count($this->_empleados); $i++)
        {      
            if(isset($this->_empleados[$i]))  
            {
                fwrite($archivo,$this->_empleados[$i].PHP_EOL);
                //fwrite($archivo, );
            }   
        }
        //fwrite($archivo,"*");
        fclose($archivo);
    }

    public function TraerEmpleado()
    {
         $contador = 0;
        $archivo = fopen("../ArchivosDeTexto/Empleados.txt","r");
        while(!feof($archivo))
        {                
            $linea = fgetss($archivo);
            if($linea != NULL)
            {
            $emp = explode("-",$linea);
            $empleado = new Empleado($emp[0],$emp[1],$emp[2],$emp[3],$emp[4],$emp[5]);
            $this->AgregarEmpleado($empleado);
            }
        }
        fclose($archivo); 
    }
}
?>