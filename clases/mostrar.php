<?php
require_once "clases/classpersona.php";	
require_once "clases/classempleado.php";
require_once "clases/classfabrica.php";
	

$e=new Empleado($_POST['txtNombre'],$_POST['txtApellido'],$_POST['txtDni'],$_POST['rdbSexo'],$_POST['txtLegajo'],$_POST['txtSueldo']);
$e1=new Empleado($_POST['txtNombre'],$_POST['txtApellido'],$_POST['txtDni'],$_POST['rdbSexo'],$_POST['txtLegajo'],$_POST['txtSueldo']);
//echo $e->ToString();
//echo "<br /><br />".$e->Hablar();


// $e1=new Empleado("Pablo","Mariato",34324,"M",1,5000);
// $e2=new Empleado("Maria","Mariato",34324,"F",1,5000);
// $e3=new Empleado("Jose","Mariato",34324,"M",1,5000);
// $e4=new Empleado("Florencia","Mariato",34324,"F",1,5000);

//$f=new Fabrica("Arcor");
//$f->AgregarEmpleado($e);
// $f->AgregarEmpleado($e2);
// $f->AgregarEmpleado($e3);
// $f->AgregarEmpleado($e4);

//echo "<br /><br />".$f->ToString();


		$file = fopen("empleados.txt", "a+");
		fwrite($file, $e->ToString());
		$result=fclose($file);

		if($result)
		{
			echo "<a href=\"Mostrar.php\">Mostrar</a>";
		}
		else
		{
			echo "<a href=\"index1.php\">Inicio</a>";
		}

		?>