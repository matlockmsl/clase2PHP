<?php
//require_once "classpersona.php";

class Fabrica
{
	protected $_razonSocial;
	private $_empleados;

	public function __construct($rsocial)
	{
		$this->_razonSocial=$rsocial;
		$this->_empleados=array();

	}

	public function AgregarEmpleado($p)
	{
	array_push($this->_empleados,$p);
	}


	public function CalcularSueldos()
	{
	// 	$sas=array_column($this->_empleados,0);
	// 	print_r($sas);

	// echo "<br/> ss".array_sum($this->_empleados);
	$sum=0;
	$arraylength=count($this->_empleados);
	//echo "".$arraylength;
	
	for ($i=0; $i <$arraylength ; $i++) { 
		$sum+=$this->_empleados[$i]->getSueldo();
	}
	echo "Sueldos de la Fabrica: ".$sum;

	}
	public function EliminarEmpleado($p)
	{

		$arraylength=count($this->_empleados);
		for ($i=0; $i < $arraylength; $i++) { 
			if($this->_empleados[$i]->getLegajo())
			{
				unset($this->_empleados[$i]);
				break;

			}
		}
		
	}
	private function EliminarEmpleadosRepetidos()
	{

	}
	public function ToString()
	{
		foreach ($this->_empleados as $value) 
		{
			echo $value->ToString();
		}
		//print_r(array_values($this->_empleados));

	}


}
?>