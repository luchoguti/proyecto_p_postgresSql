<?php 

/**
* 
*/
require_once __DIR__. "/../Models/HotelesModel.php";


class HotelesController
{


    private $model_hoteles;

    function __construct() {
        $this->model_hoteles = new HotelesModel();

    }

    public function indexHoteles(){

        //header
        //las vista que requiera
        //footer

        $name_project=explode('/',$_SERVER['REQUEST_URI'] );
        $this->ruta_publica=$_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].'/'.$name_project[1].'/';
      
        $title = "Hoteles";
        $query_select = $this->model_hoteles->getHoteles();
        require_once 'app/Views/header.php';
        require_once 'app/Views/view_hoteles_index.php';
        require_once 'app/Views/footer.php';

    }

    public function editNewHoteles(){

        $data = null;
        if (isset($_REQUEST['_id'])) {
            $data = $this->model_hoteles->getHotelesId($_REQUEST['_id']);
            $title = "Nuevo Hotel";
        }else{
            $title = "Editar Hotel";
        }
        
        require_once 'app/Views/header.php';
        require_once 'app/Views/view_hoteles_edit_new.php';
        require_once 'app/Views/footer.php';
    }

    public function guardar_registro_hotel(){

        if ($_REQUEST['txt_id']!=0) {
            $this->model_hoteles->hotelesEdit($_REQUEST);
        }else{
            $this->model_hoteles->hotelesAdd($_REQUEST);
        }
        //$this->index();
        header('Location: index.php?controller=Hoteles&action=indexHoteles');
        
    }

    public function deleteHoteles(){
        
        $this->model_hoteles->HotelesDelete($_REQUEST['_id']);
        header('Location: index.php?controller=Hoteles&action=indexHoteles');
        
    }


}

?>