<?php
class cat_empleadoController extends controller{

    private $_model;
    private $_id_padre;
    private $_id_hijo;

    public function __construct() {
        /*if (!$this->acceso(42)) {
            $this->redireccionar('error/access/5050');
        }*/
        parent::__construct();
        $this->_model = $this->loadModel('cat_empleado');
        
        $this->_modulos->url = 'cat_empleado';
        $modulo= $this->_modulos->selecciona_filtro();
        $this->_id_padre=$modulo[0][5];
        $this->_id_hijo=$modulo[0][0];
    }
    

    public function index() {
        
        $this->_view->datos = $this->_model->selecciona();
        $this->_view->setCss(array('jquery.dataTables'),true);
        $this->_view->setJs(array('jquery.dataTables.min','run_table'),true);
        $this->_view->titulo = 'Lista de Categoria de Empleados';
        $this->_view->renderizar('index',$this->_id_padre,$this->_id_hijo);
    }
    public function nuevo() {
        if (@$_POST['guardar'] == 1) {
            
            $this->_model->descripcion = $_POST['descripcion'];
            
            $this->_model->inserta();
            $this->redireccionar('cat_empleado');
        }
        $this->_view->titulo = 'Registrar Categoria Empleado';
        $this->_view->action = BASE_URL . 'cat_empleado/nuevo';
        //$this->_view->setJs(array('funciones_form'));
        $this->_view->renderizar('form',$this->_id_padre,$this->_id_hijo);
    }
 
    public function editar($id) {
        if (!$this->filtrarInt($id)) {
            $this->redireccionar('cat_empleado');
        }
        
        if (@$_POST['guardar'] == 1) {
            $this->_model->id_categoria_empleado = $_POST['id_categoria_empleado'];
            $this->_model->descripcion = $_POST['descripcion'];
            $this->_model->editar();
            
            $this->redireccionar('cat_empleado');
        }
        $this->_model->id_categoria_empleado = $this->filtrarInt($id);
        $this->_view->datos = $this->_model->selecciona_filtro();
        
        $this->_view->titulo = 'Actualizar Categoria Empleado';
        $this->_view->action = BASE_URL . 'cat_empleado/editar/'.$id;
        
        //$this->_vista->setJs(array('funciones_form'));
        $this->_view->renderizar('form',$this->_id_padre,$this->_id_hijo);
    }

    public function eliminar($id) {
        if (!$this->filtrarInt($id)) {
            $this->redireccionar('cat_empleado');
        }
        $this->_model->id_categoria_empleado = $this->filtrarInt($id);
        $this->_model->elimina();
        $this->redireccionar('cat_empleado');
    }
    
}
?>