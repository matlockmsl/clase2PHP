<?php

abstract class Persona
{
	private $_nombre;
	private $_apellido;
	private $_dni;
	private $_sexo;

	public function __construct($nom,$ape,$dni,$sexo)
	{
		$this->_nombre=$nom;
		$this->_apellido=$ape;
		$this->_dni=$dni;
		$this->_sexo=$sexo;

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
	public function getSexo()
	{
		return $this->_sexo;
	}
	//METODOS SETTERS
	/*
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
	*/	
	abstract public function Hablar();
	//METODO TOSTRING
	public function ToString()
	{
		return "Nombre: ".$this->_nombre."<br />Apellido: ".$this->_apellido."<br />Dni: ".$this->_dni;

	}



}
?>