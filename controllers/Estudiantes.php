<?php
	
	class EstudiantesController {
		
		public function __construct(){
			require_once "models/EstudiantesModel.php";
		}
		
		public function index(){
			
			
			$estudiantes = new Estudiantes_model();
			$data["titulo"] = "Lista de estudiantes";
			$data["estudiantes"] = $estudiantes->get_estudiantes();
			
			require_once "views/estudiantes/estudiantes.php";	
		}
		
		public function nuevo(){
			
			$data["titulo"] = "Crear estudiante";
			require_once "views/estudiantes/estudiantes_nuevo.php";
		}
		
		public function guarda(){

			if (preg_match('/^[a-zA-ZáéíóúÁÉÍÓÚ]+$/', $_POST['PrimerNombre'])){

			$tipo_documento = $_POST['tipo_documento'];
			$documento = $_POST['documento'];
			$PrimerNombre = $_POST['PrimerNombre'];
			$SegundoNombre = $_POST['SegundoNombre'];
			$PrimerApellido = $_POST['PrimerApellido'];
			$SegundoApellido = $_POST['SegundoApellido'];
			$id_estado = $_POST['id_estado'];

			$estudiantes = new Estudiantes_model();
			$estudiantes->insertar($tipo_documento,$documento, $PrimerNombre, $SegundoNombre, $PrimerApellido, $SegundoApellido, $id_estado);
			$data["titulo"] = "Estudiante";
			$this->index();

		}else{
			$respuesta = "error";


			return $respuesta;
		}
		}
		
		public function modificar($id){
			
			$estudiantes = new Estudiantes_model();
			
			$data["id"] = $id;
			$data["estudiantes"] = $estudiantes->get_estudiante($id);
			$data["titulo"] = "Modificar estudiante";
			require_once "views/estudiantes/estudiantes_modifica.php";
		}
		
		public function actualizar(){

			$id = $_POST['id'];
			$tipo_documento = $_POST['tipo_documento'];
			$documento = $_POST['documento'];
			$PrimerNombre = $_POST['PrimerNombre'];
			$SegundoNombre = $_POST['SegundoNombre'];
			$PrimerApellido = $_POST['PrimerApellido'];
			$SegundoApellido = $_POST['SegundoApellido'];

			$estudiantes = new Estudiantes_model();
			$estudiantes->modificar($id, $tipo_documento, $documento, $PrimerNombre, $SegundoNombre, $PrimerApellido, $SegundoApellido);
			$data["titulo"] = "Estudiantes";
			$this->index();
		}
		
		public function eliminar($id){
			
			$estudiantes = new Estudiantes_model();
			$estudiantes->eliminar($id);
			$data["titulo"] = "Estudiantes";
			$this->index();
		}
		
		public function estado($id){
			
			$estudiantes = new Estudiantes_model();
			
			$data["id"] = $id;
			$data["estudiantes"] = $estudiantes->get_estudiante($id);
			$data["titulo"] = "Estado del estudiante";
			require_once "views/estudiantes/estudiantes_estado.php";
		}

		public function actualizarEstado(){

			$id = $_POST['id'];
			$id_estado = $_POST['id_estado'];
			


			$estudiantes = new Estudiantes_model();
			$estudiantes->estado($id, $id_estado);
			$data["titulo"] = "Estudiantes";
			$this->index();
		}
	}
?>