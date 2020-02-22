<?php  


	class get_datos_clientes{

		//public $id_cliente;
		public $nombre_cliente;
		public $dpi_cliente;
		public $nit_cliente;
		public $departamento;
		public $municipio ;
		public $zona_cliente;
		public $direccion_cliente;
		public $telefono_cliente;
		public $correo_cliente;
		public $contacto;
		public $responsable;
		public $tipo_arma;
		public $numero_licencia;
		public $fecha_vencimiento;
		public $tenencia;
		public $calibre;


		
		function __construct()
		{
			//$this->id_cliente = $_POST['id'];
			$this->nombre_cliente = $_POST['nombre_cliente'];
			$this->dpi_cliente = $_POST['dpi_cliente'];
			$this->nit_cliente =$_POST['nit_cliente'];
			$this->departamento = $_POST['departamento'];
			$this->municipio= $_POST['municipio'];
			$this->zona_cliente = $_POST['zona_cliente'];
			$this->direccion_cliente = $_POST['direccion_cliente'];
			$this->telefono_cliente = $_POST['telefono_cliente'];
			$this->correo_cliente = $_POST['correo_cliente'];
			$this->contacto = $_POST['contacto'];
			$this->responsable = $_POST['responsable'];
			$this->tipo_arma = $_POST['tipo_arma'];
			$this->numero_licencia = $_POST['numero_licencia'];
			$this->fecha_vencimiento = $_POST['fecha_vencimiento'];
			$this->tenencia =$_POST['tenencia'];
			$this->calibre = $_POST['calibre'];
		}
		public function pasar_datos(){
			$num_datos = array(

				//$this->id_cliente,
			    $this->nombre_cliente,
				$this->dpi_cliente,			    
				$this->nit_cliente,				
				$this->departamento,				
				$this->municipio ,				
				$this->zona_cliente,				
				$this->direccion_cliente,				
				$this->telefono_cliente,				
				$this->correo_cliente,				
				$this->contacto,				
				$this->responsable,				
				$this->tipo_arma,				
				$this->numero_licencia,				
				$this->fecha_vencimiento,				
				$this->tenencia,				
				$this->calibre		
			);
			return $num_datos;
		}
	}
?>
