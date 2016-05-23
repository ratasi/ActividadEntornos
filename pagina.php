<?php


	header('Content-Type : text/html; charset=UTF-8');
	include("datos.php");
	include("funcionesBDA.php");

		if (conectarBDA($host,$usuario,$clave,$bda)) {
			echo "Conexión correcta. ";
			$consulta="SELECT * FROM profesores";
			if ($paquete=consultar($consulta)) {
				echo tabular($paquete);
			}else{
				echo "<p> No se encontraron datos </p>";
			}
		}else{
			echo "Conexion incorrecta";
		}


?>