<?php 

/**
* 
*/
require_once __DIR__. "/../Models/ReservasModel.php";
require_once __DIR__. "/../Models/ClientesModel.php";
require_once __DIR__. "/../Models/HotelesModel.php";
require_once __DIR__. "/../Models/TipoAcomodacionModel.php";



class ReservasController
{

    private $model_reservas;
    private $model_clientes;
    private $model_hoteles;
    private $model_tipo_acomodacion;


    function __construct() {
        $this->model_reservas = new ReservasModel();
        $this->model_clientes = new ClientesModel();
        $this->model_hoteles = new HotelesModel();
        $this->model_tipo_acomodacion = new TipoAcomodacionModel();

    }

	public function index(){

		//header
        //las vista que requiera
        //footer

        $name_project=explode('/',$_SERVER['REQUEST_URI'] );
        $this->ruta_publica=$_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].'/'.$name_project[1].'/';
      
        $title = "Reservas";
        $query_select = $this->model_reservas->getReservas();
        require_once 'app/Views/header.php';
        require_once 'app/Views/view_reservas_index.php';
        require_once 'app/Views/footer.php';

	}

	public function editNewReservas(){

		$data = null;
        if (isset($_REQUEST['_id'])) {
            $data = $this->model_reservas->getReservasId($_REQUEST['_id']);
            $title = "Nueva Reserva";
        }else{
            $title = "Editar Reserva";
        }
        
        $query_clientes = $this->model_clientes->getClientes();
        $query_hoteles = $this->model_hoteles->getHoteles();
        $query_tipo_acomodacion = $this->model_tipo_acomodacion->getTipoAcomodacion();


		require_once 'app/Views/header.php';
        require_once 'app/Views/view_reservas_edit_new.php';
        require_once 'app/Views/footer.php';
	}

	public function guardar_registro(){

        if ($_REQUEST['txt_id']!=0) {
            $this->model_reservas->reservasEdit($_REQUEST);
        }else{
            $this->model_reservas->reservasadd($_REQUEST);
        }
        //$this->index();
        header('Location: index.php');
		
	}

	public function deleteReservas(){
		
	    $this->model_reservas->reservasDelete($_REQUEST['_id']);
		header('Location: index.php');

	}


}

?>