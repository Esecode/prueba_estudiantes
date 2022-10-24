<?php
	
	class Conectar {
		
		public static function conexion(){
			
			$conexion = new mysqli("localhost", "root", "", "prueba_estudiantes");
			return $conexion;
			
		}
	}
?>