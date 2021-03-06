<?php
class cat_ejercicioController extends controller{

    private $_model;
    private $_id_padre;
    private $_id_hijo;

    public function __construct() {
        /*if (!$this->acceso(42)) {
            $this->redireccionar('error/access/5050');
        }*/
        parent::__construct();
        $this->_model = $this->loadModel('cat_ejercicio');
        
        $this->_modulos->url = 'cat_ejercicio';
        $modulo= $this->_modulos->selecciona_filtro();
        $this->_id_padre=$modulo[0]['ID_PADRE'];
        $this->_id_hijo=$modulo[0]['ID_MODULO'];
    }
    

    public function index() {
        
        $this->_view->datos = $this->_model->selecciona();
        $this->_view->setCss(array('jquery.dataTables'),true);
        $this->_view->setJs(array('jquery.dataTables.min','run_table'),true);
        $this->_view->titulo = 'Lista de Categoria de Ejercicios';
        $this->_view->renderizar('index',$this->_id_padre,$this->_id_hijo);
    }
    public function nuevo() {
        if (@$_POST['guardar'] == 1) {
            
            $this->_model->descripcion = $_POST['descripcion'];
            $this->_model->inserta();
            $this->redireccionar('cat_ejercicio');
        }
        $this->_view->titulo = 'Registrar Categoria de Ejercicio';
        $this->_view->action = BASE_URL . 'cat_ejercicio/nuevo';
        //$this->_view->setJs(array('funciones_form'));
        $this->_view->renderizar('form',$this->_id_padre,$this->_id_hijo);
    }
 
    public function editar($id) {
        if (!$this->filtrarInt($id)) {
            $this->redireccionar('cat_ejercicio');
        }
        
        if (@$_POST['guardar'] == 1) {
            $this->_model->id_categoria_ejercicio = $_POST['id_categoria_ejercicio'];
            $this->_model->descripcion = $_POST['descripcion'];
            $this->_model->editar();
            
            $this->redireccionar('cat_ejercicio');
        }
        $this->_model->id_categoria_ejercicio = $this->filtrarInt($id);
        $this->_view->datos = $this->_model->selecciona_filtro();
        
        $this->_view->titulo = 'Actualizar Categoria de Ejercicio';
        $this->_view->action = BASE_URL . 'cat_ejercicio/editar/'.$id;
        
        //$this->_vista->setJs(array('funciones_form'));
        $this->_view->renderizar('form',$this->_id_padre,$this->_id_hijo);
    }

    public function eliminar($id) {
        if (!$this->filtrarInt($id)) {
            $this->redireccionar('cat_ejercicio');
        }
        $this->_model->id_categoria_ejercicio = $this->filtrarInt($id);
        $this->_model->elimina();
        $this->redireccionar('cat_ejercicio');
    }
    
}
?>
