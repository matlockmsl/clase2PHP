<?php
require_once "clases/classpersona.php";	
require_once "clases/classempleado.php";
require_once "clases/classfabrica.php";
	
//Persona es una clase abstracta y por ende no se puede instanciar.
//$p = new Persona("Pedro","Mariato",434343);
//	echo $p->ToString();

$e=new Empleado("Pedro","Mariato",34324,"M",1,3000.59);

echo $e->ToString();
echo "<br /><br />".$e->Hablar();


$e1=new Empleado("Pablo","Mariato",34324,"M",1,1500);
$e2=new Empleado("Maria","Martinez",1114324,"F",1,2000);
$e3=new Empleado("Jose","Mariato",555324,"M",1,3000);
$e4=new Empleado("Florencia","Gomez",999924,"F",1,4000);


$f=new Fabrica("Arcor");
$f->AgregarEmpleado($e1);
$f->AgregarEmpleado($e2);
$f->AgregarEmpleado($e3);
$f->AgregarEmpleado($e4);
echo "<br /><br />Mostrar Empleados Agregados";
echo "<br /><br />".$f->ToString();


echo "<br /><br />Mostrar Suma<br /><br />";
echo "".$f->CalcularSueldos($e1);

//$f->EliminarEmpleado($e1);
//$f->EliminarEmpleado($e2);
//echo "<br /><br />".$f->ToString();
?>

<html>
<head>
	<title>TP - parte 2</title>
		<meta charset="UTF-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--final de Estilos-->
		   <meta name="viewport" content="width=device-width, initial-scale=1">
          <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

<div class="container">
		<div class="page-header">
			<h1>Empleados</h1>      
		</div>
		<div class="CajaInicio animated bounceInRight">
			<h1>Ingreso de Empleados</h1>
<form method="POST" action="administracion.php" name="frm1" id="frm1" enctype="multipart/form-data">
Nombre: <input type="text" name="txtNombre" id="txtNombre" /><br />
Apellido: <input type="text" name="txtApellido" id="txtApellido" /><br />
Dni: <input type="text" name="txtDni" id="txtId" /><br />
Sexo: <input type="radio" name="rdbSexo" id="rdbSexo" value="F" />M <input type="radio" name="rdbSexo" id="rdbSexo" value="M"/>F<br />
Legajo: <input type="text" name="txtLegajo" id="txtLegajo" /><br />
Sueldo: <input type="text" name="txtSueldo" id="txtSueldo" /> $<br />
<input type="file" name="fileup" id="fileup" /> 
<br /><br />


				<input type="submit" class="MiBotonUTNMenu"  value="Enviar"/>
				<input type="reset" class="MiBotonUTNMenu" value="Limpiar"/>
			</form>
		</div>
	</div>

</form>
</body>
</html>