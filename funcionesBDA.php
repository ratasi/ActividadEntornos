<?php


function conectarBDA($host,$usuario,$clave,$bda){
	if (!$enlace = mysql_connect($host,$usuario,$clave)) {
		return false;
	}elseif (!mysql_select_db($bda)) {
		return false;
	}else{
		return true;
	}
}


function consultar($consulta){
	if (!$datos=mysql_query($consulta) or mysql_num_rows($datos)<1) {
		return false;
	}else{
		return $datos;
	}
}



function tabular($datos){
	$codigo='<table border="2" cellpadding="3">';

	while ($fila = mysql_fetch_array($datos)) {
		$codigo .= '<tr>';
			$codigo.= '<td>' . $fila["id"] . "</td>";
			$idCodigo= '<td>' . $fila["id"] . "</td>";
			$codigo.='<td>' . $fila["nombre"] . "</td>";
			$codigo.='<td>' . $fila["apellidos"] . "</td>";
			$codigo.='<td>' . $fila["edad"] . "</td>";
			$codigo.='<td>' . $fila["materia"] . "</td>";
			$codigo.='<td>' . '<a href="borrar2.php?id=$idCodigo"</a> borrar'  . "</td>";
			$codigo.='<td>' . '<a href="modificar.php" post=["id"]" </a>modificar' . "</td>";
			$codigo.="</tr>";
	}
	$codigo.="</table>"; 
	return $codigo;
}



?>