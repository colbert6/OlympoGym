<?php
class ambienteController extends controller{

    private $_model;
    private $_id_padre;
    private $_id_hijo;

    public function __construct() {
        /*if (!$this->acceso(42)) {
            $this->redireccionar('error/access/5050');
        }*/
        parent::__construct();
        $this->_model = $this->loadModel('ambiente');
        
        $this->_modulos->url = 'ambiente';
        $modulo= $this->_modulos->selecciona_filtro();
        $this->_id_padre=$modulo[0]['ID_PADRE'];
        $this->_id_hijo=$modulo[0]['ID_MODULO'];
    }
    

    public function index() {
        
        $this->_view->datos = $this->_model->selecciona();
        $this->_view->setCss(array('jquery.dataTables'),true);// con el true es public
        $this->_view->setJs(array('jquery.dataTables.min','run_table'),true);
        $this->_view->titulo = 'Lista de Categoria de Empleados';
        $this->_view->renderizar('index',$this->_id_padre,$this->_id_hijo);
    }
    public function nuevo() {
        if (@$_POST['guardar'] == 1) {
            
            $this->_model->descripcion = $_POST['descripcion'];
            
            $this->_model->inserta();
            $this->redireccionar('ambiente');
        }
        $this->_view->titulo = 'Registrar Ambiente';
        $this->_view->action = BASE_URL . 'ambiente/nuevo';
        //$this->_view->setJs(array('funciones_form'));
        $this->_view->renderizar('form',$this->_id_padre,$this->_id_hijo);
    }
 
    public function editar($id) {
        if (!$this->filtrarInt($id)) {
            $this->redireccionar('cat_empleado');
        }
        
        if (@$_POST['guardar'] == 1) {
            $this->_model->id_ambiente = $_POST['id_ambiente'];
            $this->_model->descripcion = $_POST['descripcion'];
            $this->_model->editar();
            
            $this->redireccionar('ambiente');
        }
        $this->_model->id_ambiente = $this->filtrarInt($id);
        $this->_view->datos = $this->_model->selecciona_filtro();
        
        $this->_view->titulo = 'Actualizar Ambiente';
        $this->_view->action = BASE_URL . 'ambiente/editar/'.$id;
        
        //$this->_vista->setJs(array('funciones_form'));
        $this->_view->renderizar('form',$this->_id_padre,$this->_id_hijo);
    }

    public function eliminar($id) {
        if (!$this->filtrarInt($id)) {
            $this->redireccionar('ambiente');
        }
        $this->_model->id_ambiente = $this->filtrarInt($id);
        $this->_model->elimina();
        $this->redireccionar('ambiente');
    }
    
}
?>