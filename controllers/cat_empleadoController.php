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
        print('hola');exit;
        $this->_view->datos = $this->_perfil->selecciona();
        $this->_view->setCss(array('jquery.dataTables'),true);
        $this->_view->setJs(array('jquery.dataTables.min','run_table'),true);
        $this->_view->titulo = 'Lista de Perfiles de Usuarios';
        $this->_view->renderizar('index',$this->_id_padre,$this->_id_hijo);
    }
    public function nuevo() {
        if (@$_POST['guardar'] == 1) {
            
            $this->_perfil->descripcion = $_POST['descripcion'];
            $this->_perfil->nivel = $_POST['nivel'];
            
            $this->_perfil->inserta();
            $this->redireccionar('perfil');
        }
        $this->_view->titulo = 'Registrar Prefil de Usuario';
        $this->_view->action = BASE_URL . 'perfil/nuevo';
        //$this->_view->setJs(array('funciones_form'));
        $this->_view->renderizar('form',$this->_id_padre,$this->_id_hijo);
    }
 
    public function editar($id) {
        if (!$this->filtrarInt($id)) {
            $this->redireccionar('modulo');
        }
        
        if (@$_POST['guardar'] == 1) {
            $this->_perfil->descripcion = $_POST['descripcion'];
            $this->_perfil->nivel = $_POST['nivel'];
            
            $this->_perfil->editar();
            $this->redireccionar('perfil');
        }
        $this->_perfil->id_perfil_usuario = $this->filtrarInt($id);
        $this->_view->datos = $this->_perfil->selecciona_filtro();
        
        $this->_view->titulo = 'Actualizar Modulo';
        $this->_view->action = BASE_URL . 'modulo/editar/'.$id;
        
        //$this->_vista->setJs(array('funciones_form'));
        $this->_view->renderizar('form',$this->_id_padre,$this->_id_hijo);
    }

    public function eliminar($id) {
        if (!$this->filtrarInt($id)) {
            $this->redireccionar('modulo');
        }
        $this->_modulos->idmodulo = $this->filtrarInt($id);
        $this->_modulos->elimina();
        $this->redireccionar('modulo');
    }
    
}
?>