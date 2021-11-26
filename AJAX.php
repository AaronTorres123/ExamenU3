<?php 
	require_once("conexion.php");
	$obj=new Conexion();
	$obj->alta($_GET["nombre"],$_GET["animal"]);
	echo "¡Mascota agregada! :D"
 ?>