<?php  


	class get_datos_clientes{

		//public $id_cliente;
		public $nombre_cliente;
		public $dpi_cliente;
	 	public $nit_cliente;
		public $departamento_cliente;
		public $municipio_cliente;
		public $zona_cliente;
	  	public $direccion_cliente;
		public $telefono_cliente;
		public $correo_cliente;
		public $contacto_cliente;
		public $responsable;
		public $tipo_arma_1;
		public $tipo_arma_2;
		public $tipo_arma_3;
		public $numero_licencia;
		public $fecha_vencimiento;
		public $tenencia_1;
		public $tenencia_2;
		public $tenencia_3;
		public $calibre_1;
		public $calibre_2;
	    public $calibre_3;  
		


		
		function __construct()
		{
			//$this->id_cliente = $_POST['id'];
			$this->nombre_cliente = $_POST['nombre_cliente'];
			$this->dpi_cliente = $_POST['dpi_cliente'];
			$this->nit_cliente =$_POST['nit_cliente'];
			$this->departamento_cliente = $_POST['departamento'];
			$this->municipio_cliente= $_POST['municipio'];
			$this->zona_cliente = $_POST['zona_cliente'];
			$this->direccion_cliente = $_POST['direccion_cliente'];
			$this->telefono_cliente = $_POST['telefono_cliente'];
			$this->correo_cliente = $_POST['correo_cliente'];
			$this->contacto_cliente = $_POST['contacto'];
			$this->responsable = $_POST['responsable'];
			$this->tipo_arma_1 = $_POST['tipo_arma_1'];
			$this->tipo_arma_2 = $_POST['tipo_arma_2'];
			$this->tipo_arma_3 = $_POST['tipo_arma_3'];
			$this->numero_licencia = $_POST['numero_licencia'];
			$this->fecha_vencimiento = $_POST['fecha_vencimiento'];
			$this->tenencia_1 =$_POST['tenencia_1'];
			$this->tenencia_2 =$_POST['tenencia_2'];
			$this->tenencia_3 =$_POST['tenencia_3'];
			$this->calibre_1 = $_POST['calibre_1'];
			$this->calibre_2 = $_POST['calibre_2'];
			$this->calibre_3 = $_POST['calibre_3'];
		}
		public function pasar_datos(){
			$num_datos = array(

				//$this->id_cliente,
				 $this-> nombre_cliente  ,
				 $this-> dpi_cliente  ,
				 $this-> nit_cliente ,
				 $this-> departamento_cliente  ,
				 $this-> municipio_cliente  ,
				 $this-> zona_cliente ,
				 $this-> direccion_cliente  ,
				 $this-> telefono_cliente ,
				 $this-> correo_cliente ,
				 $this-> contacto_cliente ,
				 $this-> responsable,
				 $this-> tipo_arma_1  ,
				 $this-> tipo_arma_2 ,
				 $this-> tipo_arma_3 ,
				 $this-> numero_licencia ,
				 $this-> fecha_vencimiento ,
				 $this-> tenencia_1  ,
				 $this-> tenencia_2 ,
				 $this-> tenencia_3 ,
				 $this-> calibre_1  ,
				 $this-> calibre_2 ,
				 $this-> calibre_3 
			    
			);
			return $num_datos;
		}
	}
?>
