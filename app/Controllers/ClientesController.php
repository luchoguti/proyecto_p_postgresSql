<?php 

/**
* 
*/
require_once __DIR__. "/../Models/ClientesModel.php";


class ClientesController
{


    private $model_clientes;

    function __construct() {
        $this->model_clientes = new ClientesModel();

    }

	public function indexClientes(){

		//header
        //las vista que requiera
        //footer

        $name_project=explode('/',$_SERVER['REQUEST_URI'] );
        $this->ruta_publica=$_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].'/'.$name_project[1].'/';
    
        $title = "Clientes";
        $query_select = $this->model_clientes->getClientes();
        require_once 'app/Views/header.php';
        require_once 'app/Views/view_clientes_index.php';
        require_once 'app/Views/footer.php';

	}

	public function editNewClientes(){

		$data = null;
        if (isset($_REQUEST['_id'])) {
            $data = $this->model_clientes->getClientesId($_REQUEST['_id']);
            $title = "Nuevo Cliente";
        }else{
            $title = "Editar Cliente";
        }
        
      	require_once 'app/Views/header.php';
        require_once 'app/Views/view_Clientes_edit_new.php';
        require_once 'app/Views/footer.php';
	}

	public function guardar_registro_cliente(){

        if ($_REQUEST['txt_id']!=0) {
            $this->model_clientes->ClientesEdit($_REQUEST);
        }else{
            $this->model_clientes->Clientesadd($_REQUEST);
        }
        //$this->index();
        header('Location: index.php?controller=Clientes&action=indexClientes');
		
	}

	public function deleteClientes(){
		
	    $this->model_clientes->ClientesDelete($_REQUEST['_id']);
        header('Location: index.php?controller=Clientes&action=indexClientes');
		
	}


}

?>