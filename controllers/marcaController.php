<?php
class marcaController extends controller{
    private $_model;
    private $_id_padre;
    private $_id_hijo;

    public function __construct() {
        /*if (!$this->acceso(42)) {
            $this->redireccionar('error/access/5050');
        }*/
        parent::__construct();
        $this->_model = $this->loadModel('marca');
        
        $this->_modulos->url = 'marca';
        $modulo= $this->_modulos->selecciona_filtro();
        $this->_id_padre=$modulo[0][5];
        $this->_id_hijo=$modulo[0][0];
    }
    

    public function index() {
        
        $this->_view->datos = $this->_model->selecciona();
        $this->_view->setCss(array('jquery.dataTables'),true);
        $this->_view->setJs(array('jquery.dataTables.min','run_table'),true);
        $this->_view->titulo = 'Lista de Marcas';
        $this->_view->renderizar('index',$this->_id_padre,$this->_id_hijo);
    }
    public function nuevo() {
        if (@$_POST['guardar'] == 1) {
            $this->_model->descripcion = $_POST['descripcion'];
            $this->_model->inserta();
            $this->redireccionar('marca');
        }
        $this->_view->titulo = 'Registrar Marca';
        $this->_view->action = BASE_URL . 'marca/nuevo';
        //$this->_view->setJs(array('funciones_form'));
        $this->_view->renderizar('form',$this->_id_padre,$this->_id_hijo);
    }
 
    public function editar($id) {
        if (!$this->filtrarInt($id)) {
            $this->redireccionar('marca');
        }
        
        if (@$_POST['guardar'] == 1) {
            $this->_model->id_marca = $_POST['id_marca'];
            $this->_model->descripcion = $_POST['descripcion'];
            $this->_model->editar();
            
            $this->redireccionar('marca');
        }
        $this->_model->id_marca = $this->filtrarInt($id);
        $this->_view->datos = $this->_model->selecciona_filtro();
        
        $this->_view->titulo = 'Actualizar Marca';
        $this->_view->action = BASE_URL . 'marca/editar/'.$id;
        
        //$this->_vista->setJs(array('funciones_form'));
        $this->_view->renderizar('form',$this->_id_padre,$this->_id_hijo);
    }

    public function eliminar($id) {
        if (!$this->filtrarInt($id)) {
            $this->redireccionar('marca');
        }
        $this->_model->id_marca = $this->filtrarInt($id);
        $this->_model->elimina();
        $this->redireccionar('marca');
    }
    
}
?>
