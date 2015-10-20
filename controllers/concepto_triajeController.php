<?php
class concepto_triajeController extends controller{
    private $_model;
    private $_id_padre;
    private $_id_hijo;

    public function __construct() {
        /*if (!$this->acceso(42)) {
            $this->redireccionar('error/access/5050');
        }*/
        parent::__construct();
        $this->_model = $this->loadModel('concepto_triaje');
        
        $this->_modulos->url = 'concepto_triaje';
        $modulo= $this->_modulos->selecciona_filtro();
        $this->_id_padre=$modulo[0][5];
        $this->_id_hijo=$modulo[0][0];
    }
    

    public function index() {
        
        $this->_view->datos = $this->_model->selecciona();
        $this->_view->setCss(array('jquery.dataTables'),true);
        $this->_view->setJs(array('jquery.dataTables.min','run_table'),true);
        $this->_view->titulo = 'Lista de Conceptos de Triaje';
        $this->_view->renderizar('index',$this->_id_padre,$this->_id_hijo);
    }
    public function nuevo() {
        if (@$_POST['guardar'] == 1) {
            $this->_model->descripcion = $_POST['descripcion'];
            $this->_model->inserta();
            $this->redireccionar('concepto_triaje');
        }
        $this->_view->titulo = 'Registrar Concepto de Triaje';
        $this->_view->action = BASE_URL . 'concepto_triaje/nuevo';
        //$this->_view->setJs(array('funciones_form'));
        $this->_view->renderizar('form',$this->_id_padre,$this->_id_hijo);
    }
 
    public function editar($id) {
        if (!$this->filtrarInt($id)) {
            $this->redireccionar('concepto_triaje');
        }
        
        if (@$_POST['guardar'] == 1) {
            $this->_model->id_concepto_triaje = $_POST['id_concepto_triaje'];
            $this->_model->descripcion = $_POST['descripcion'];
            $this->_model->editar();
            
            $this->redireccionar('concepto_triaje');
        }
        $this->_model->id_concepto_triaje = $this->filtrarInt($id);
        $this->_view->datos = $this->_model->selecciona_filtro();
        
        $this->_view->titulo = 'Actualizar Concepto Triaje';
        $this->_view->action = BASE_URL . 'concepto_triaje/editar/'.$id;
        
        //$this->_vista->setJs(array('funciones_form'));
        $this->_view->renderizar('form',$this->_id_padre,$this->_id_hijo);
    }

    public function eliminar($id) {
        if (!$this->filtrarInt($id)) {
            $this->redireccionar('concepto_triaje');
        }
        $this->_model->id_concepto_triaje = $this->filtrarInt($id);
        $this->_model->elimina();
        $this->redireccionar('concepto_triaje');
    }
    
}
?>
