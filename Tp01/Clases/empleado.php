<?php 
require_once("persona.php");
class Empleado extends Persona
{
    protected $_legajo;
    protected $_sueldo;
    protected $_pathFoto;
    function __construct($apellido, $nombre, $dni, $sexo, $legajo, $sueldo,$pathFoto)
    {
        parent::__construct($nombre, $apellido, $dni, $sexo);
        $this->_legajo = $legajo;
        $this->_sueldo = $sueldo;
        $this->_pathFoto = $pathFoto;
    }

    public function getLegajo()
    {
        return $this->_legajo;
    }

    public function getSueldo()
    {
        return $this->_sueldo;
    }

    public function Hablar($idioma)
    {
        return "El empleado habla ".$idioma."<br>";
    }

    public function __toString()
    {
        return parent::__toString()."-".$this->_legajo."-".$this->_sueldo."<img src=' ".$this->_pathFoto."' alt=''";
    }
}
?>