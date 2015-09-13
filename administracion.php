<?php
require_once "clases/classpersona.php";	
require_once "clases/classempleado.php";
require_once "clases/classfabrica.php";

try{
if(empty($_POST['txtNombre']) OR empty($_POST['txtApellido']) OR empty($_POST['txtDni']) OR empty($_POST['rdbSexo']) OR empty($_POST['txtLegajo']) OR empty($_POST['txtSueldo']) or ($_FILES['fileup']['size'] == 0 && $_FILES['fileup']['error'] == 0))	
 {
 	echo "<a href=\"index.php\">Hay datos vacios. Pulse aqui para volver al formulario</a>";
 }
 else
{
$e=new Empleado($_POST['txtNombre'],$_POST['txtApellido'],$_POST['txtDni'],$_POST['rdbSexo'],$_POST['txtLegajo'],$_POST['txtSueldo']);
//$e1=new Empleado($_POST['txtNombre'],$_POST['txtApellido'],$_POST['txtDni'],$_POST['rdbSexo'],$_POST['txtLegajo'],$_POST['txtSueldo']);
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
echo "<br />MOSTRAR LA INFO CARGADA EN EL FORM<br />";
echo $e->ToString();


// if(empty($e->txtNombre))
// {
// 	echo "es vacia";
// }
// if(empty($e->txtNombre) or empty($e->txtApellido) or empty($e->txtDni) or empty($e->rdbSexo) or empty($e->txtLegajo) or empty($e->txtSueldo))
// {
// 	echo "<a href=\"index.php\">Hay datos vacios. Pulse aqui para volver al formulario</a>";


// }

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


	// $destino =  $_FILES["archivo"]["name"];
	// 	if()
}
}
catch(Exception $ex)
{

}
$destino = "clases/".$_FILES["fileup"]["name"];
move_uploaded_file($_FILES["fileup"]["tmp_name"], $destino);
		?>