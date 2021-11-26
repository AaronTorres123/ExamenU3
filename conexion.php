<?php 
	class Conexion{
		public $conexion="";
		public function conectar(){
			$this->conexion = new mysqli("localhost","root","","web");
		}
		public function alta($nombre,$animal){
			$this->conectar();
			$this->conexion->query("INSERT INTO mascota VALUES(null,'$nombre','$animal');");
		}
	}
 ?>