<html>
<header></header>
<body>



<form action="pagina.php" method="POST">
<fieldset>
       <legend> Modificar resgistro profesor</legend> 
          <label>Nombre : <input type="text" value="nombre"/></label>
          <p>
          <label> Apellidos : <input type="text" value="apellidos"/></label>
          <p>
          <label>Edad : <input type="number" value="edad"></label>
          <p>
          <label>Materia :  <input type="text" value="materia"/></label>
          <p>
          <a href="pagina.php"><label><input type="submit" value="Guardar Cambios" /></a>
    </fieldset>	

    <?php

		header('Content-Type : text/html; charset=UTF-8');
		include("datos.php");
		include("funcionesBDA.php");
			if (conectarBDA($host,$usuario,$clave,$bda)) {
				echo "Conexión correcta. ";

				$consulta="UPDATE * FROM profesores WHERE id='' ";
				if ($paquete=consultar($consulta)) {
					echo tabular($paquete);
				}else{
					echo "<p> No se ha podido modificar</p>";
				}
			}else{
				echo "Conexion incorrecta";
			}
	?>
</form>
</body>
</html>