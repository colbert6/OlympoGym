<?php
class ubigeoController extends controller{
    private $_model;
    private $_id_padre;
    private $_id_hijo;

    public function __construct() {
        /*if (!$this->acceso(42)) {
            $this->redireccionar('error/access/5050');
        }*/
        parent::__construct();
        $this->_model = $this->loadModel('ubigeo');
        
        $this->_modulos->url = 'ubigeo';
        $modulo= $this->_modulos->selecciona_filtro();
        $this->_id_padre=$modulo[0]['ID_PADRE'];
        $this->_id_hijo=$modulo[0]['ID_MODULO'];
    }
    

    public function index() {
        
        $this->_view->datos = $this->_model->selecciona();
        $this->_view->setCss(array('jquery.dataTables'),true);
        $this->_view->setJs(array('jquery.dataTables.min','run_table'),true);
        $this->_view->titulo = 'Lista de Ubigeos';
        $this->_view->renderizar('index',$this->_id_padre,$this->_id_hijo);
    }
    public function nuevo() {
        if (@$_POST['guardar'] == 1) {
            
            $this->_model->departamento = $_POST['departamento'];
            $this->_model->provincia = $_POST['provincia'];
            $this->_model->distrito = $_POST['distrito'];
            
            $this->_model->inserta();
            $this->redireccionar('ubigeo');
        }
        $this->_view->titulo = 'Registrar Ubigeo';
        $this->_view->action = BASE_URL . 'ubigeo/nuevo';
        //$this->_view->setJs(array('funciones_form'));
        $this->_view->renderizar('form',$this->_id_padre,$this->_id_hijo);
    }
 
    public function editar($id) {
        if (!$this->filtrarInt($id)) {
            $this->redireccionar('ubigeo');
        }
        
        if (@$_POST['guardar'] == 1) {
            $this->_model->id_ubigeo = $_POST['id_ubigeo'];
            $this->_model->departamento = $_POST['departamento'];
            $this->_model->provincia = $_POST['provincia'];
            $this->_model->distrito = $_POST['distrito'];
            
            $this->_model->editar();
            
            $this->redireccionar('ubigeo');
        }
        $this->_model->id_ubigeo = $this->filtrarInt($id);
        $this->_view->datos = $this->_model->selecciona_filtro();
        
        $this->_view->titulo = 'Actualizar Ubigeo';
        $this->_view->action = BASE_URL . 'ubigeo/editar/'.$id;
        
        //$this->_vista->setJs(array('funciones_form'));
        $this->_view->renderizar('form',$this->_id_padre,$this->_id_hijo);
    }

    public function eliminar($id) {
        if (!$this->filtrarInt($id)) {
            $this->redireccionar('ubigeo');
        }
        $this->_model->id_ubigeo = $this->filtrarInt($id);
        $this->_model->elimina();
        $this->redireccionar('ubigeo');
    }
    
}
?>
