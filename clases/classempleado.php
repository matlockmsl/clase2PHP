<?php
require_once "classpersona.php";
require_once "classempleado.php";

class Empleado extends Persona
{
protected $_legajo;
protected $_sueldo;

	public function __construct($nom,$ape,$dni,$sexo,$legajo,$sueldo)
	{
		parent::__construct($nom,$ape,$dni,$sexo);
		$this->_legajo=$legajo;
		$this->_sueldo=$sueldo;

	}
	//METODOS GETTERS
	public function getLegajo()
	{
		return $this->_legajo;
	}
	public function getSueldo()
	{
		return $this->_sueldo;
	}
	// public function setSueldo()
	// {
	// 	$t	
	// }

	public function Hablar()
	{
		return "El empleado habla Español";

	}

	public function ToString()
	{
		return parent::ToString()."<br />Legajo: ".$this->_legajo."<br />Sueldo: ".$this->_sueldo."<br />";
	}
}

?>