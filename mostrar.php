<?php
require_once "clases/classpersona.php";	
require_once "clases/classempleado.php";
require_once "clases/classfabrica.php";

$op = fopen("empleados.txt", "r");	
		while(!feof($op))
		{
			
			// $row=fgets($op);//echo fgets($op). "<br/>";
			// explode("-", $row,100);
			echo fgets($op). "<br/>";

		}
		echo "<a href='../index.php'><input type='button' value='Cargar otra persona'> </a>";  

		?>