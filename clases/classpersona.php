<?php

class Persona
{
	private $_nombre;
	private $_apellido;
	private $_dni;

	public function __construct($nom,$ape,$dni)
	{
		$this->_nombre=$nom;
		$this->_apellido=$ape;
		$this->_dni=$dni;

	}
	//METODOS GETTERS
	public function getNombre()
	{
		return $this->_nombre;
	}
	public function getApellido()
	{
		return $this->_apellido;
	}
	public function getDni()
	{
		return $this->_dni;
	}
	//METODOS SETTERS
	public function setNombre()
	{

		$this->_nombre="Jose";		
	}
	public function setApellido()
	{
		$this->_apellido="Moreno";
	}
	public function setDni()
	{
		$this->_dni=9999;
	}

	//METODO TOSTRING
	public function ToString()
	{
		return $this->_nombre." - ".$this->_apellido." - ".$this->_dni;

	}



}
?>