<?php

require_once "classpersona.php";
class Fabrica
{
	private _razonSocial;
	private _empleados;

	public function __construct($rsocial)
	{
		$this->_razonSocial=$rsocial;
		$this->_empleados=new array();

	}

	public function AgregarPersona($p)
{
	array_push(this->_empleados);
}

public function ToString()
{
	return parent::ToString()."sasasasa";
}
}

public function CalcularSalarios()
{


}
public function SacarPersona()
{

}
private function EvitarDuplicados()
{

}
?>