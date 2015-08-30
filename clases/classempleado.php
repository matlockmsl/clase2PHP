<?php
require_once "classpersona.php";

class Empleado extends Persona
{
private $_legajo;
private $_sueldo;

public function __construct($nom,$ape,$dni,$legajo,$sueldo)
{
	parent::__construct();
	$this->_legajo=legajo;
	$this->_sueldo=sueldo;

}
public function getLegajo()
{
	$this->_legajo;
}
public function getSueldo()
{
	$this->_sueldo;
}

public function ToString()
{
	return parent::ToString()." - ".$this->_legajo." - ".$this->_sueldo;
}
}

?>