<?php
	
	class Estudiantes_model {
		
		private $db;
		private $estudiantes;
		
		public function __construct(){
			$this->db = Conectar::conexion();
			$this->estudiantes = array();
		}
		
		public function get_estudiantes()
		{
			$sql = "SELECT * FROM estudiantes JOIN estado ON estudiantes.id_estado = estado.id_estado";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->estudiantes[] = $row;
			}
			return $this->estudiantes;
		}
		
		public function insertar($tipo_documento, $documento, $PrimerNombre, $SegundoNombre, $PrimerApellido, $SegundoApellido){
			
			$resultado = $this->db->query("INSERT INTO estudiantes (tipo_documento, documento, PrimerNombre, SegundoNombre, PrimerApellido, SegundoApellido, id_estado) VALUES ('$tipo_documento','$documento', '$PrimerNombre', '$SegundoNombre', '$PrimerApellido', '$SegundoApellido', '1')");
			
		}
		
		public function modificar($id, $tipo_documento, $documento, $PrimerNombre, $SegundoNombre, $PrimerApellido, $SegundoApellido){
			
			$resultado = $this->db->query("UPDATE estudiantes SET tipo_documento='$tipo_documento', documento='$documento', PrimerNombre='$PrimerNombre', SegundoNombre='$SegundoNombre', PrimerApellido='$PrimerApellido', SegundoApellido='$SegundoApellido' WHERE id = '$id'");			
		}

		public function estado($id, $id_estado){
			
			$resultado = $this->db->query("UPDATE estudiantes SET id_estado='$id_estado' WHERE id = '$id'");			
		}
		
		public function eliminar($id){
			
			$resultado = $this->db->query("DELETE FROM estudiantes WHERE id = '$id'");
			
		}
		
		public function get_estudiante($id)
		{
			$sql = "SELECT * FROM estudiantes WHERE id='$id' LIMIT 1";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();

			return $row;
		}
	} 
?>