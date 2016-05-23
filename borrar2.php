<?php
	

	header('Content-Type : text/html; charset=UTF-8');
	include("datos.php");
	include("funcionesBDA.php");
	$id=$_GET['id'];
	echo $id;
	$sql = "DELETE FROM profesores WHERE id=$id";
	$consulta = mysql_query($sql);
		if($consulta == true) {
			echo '<h1>Se ha eliminado el profesor</h1>';
		}else{
			echo '<h1>No se ha podido eliminar</h1>';
		}

?>
<html>
<body>

<h1>Regresa al <a href="pagina.php">Listado profesores </a> </h1>

</body>
</html>