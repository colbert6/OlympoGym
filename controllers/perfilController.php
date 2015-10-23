<?php
class perfilController extends controller{

    private $_model;
    private $_id_padre;
    private $_id_hijo;

    public function __construct() {
        /*if (!$this->acceso(42)) {
            $this->redireccionar('error/access/5050');
        }*/
        parent::__construct();
        $this->_model = $this->loadModel('perfil');
        
        $this->_modulos->url = 'perfil';
        $modulo= $this->_modulos->selecciona_filtro();
        $this->_id_padre=$modulo[0]['ID_PADRE'];
        $this->_id_hijo=$modulo[0]['ID_MODULO'];
    }

    public function index() {
        $this->_view->datos = $this->_model->selecciona();
        $this->_view->setCss(array('jquery.dataTables'),true);
        $this->_view->setJs(array('jquery.dataTables.min','run_table'),true);
        $this->_view->titulo = 'Lista de Perfiles de Usuarios';
        $this->_view->renderizar('index',$this->_id_padre,$this->_id_hijo);
    }
    public function nuevo() {
        if ($_POST['guardar'] == 1) {
            
            $this->_model->descripcion = $_POST['descripcion'];
            $this->_model->nivel = $_POST['nivel'];
            
            $this->_model->inserta();
            $this->redireccionar('perfil');
        }
        $this->_view->titulo = 'Registrar Prefil de Usuario';
        $this->_view->action = BASE_URL . 'perfil/nuevo';
        //$this->_view->setJs(array('funciones_form'));
        $this->_view->renderizar('form',$this->_id_padre,$this->_id_hijo);
    }
 
    public function editar($id) {
        if (!$this->filtrarInt($id)) {
            $this->redireccionar('perfil');
        }
        
        if (@$_POST['guardar'] == 1) {
            $this->_model->id_perfil_usuario = $this->filtrarInt($id);
            $this->_model->descripcion = $_POST['descripcion'];
            $this->_model->nivel = $_POST['nivel'];
            
            $this->_model->editar();
            $this->redireccionar('perfil');
        }
        $this->_model->id_perfil_usuario = $this->filtrarInt($id);
        $this->_view->datos = $this->_perfil->selecciona_filtro();
        
        $this->_view->titulo = 'Actualizar Perfil';
        $this->_view->action = BASE_URL . 'perfil/editar/'.$id;
        
        //$this->_vista->setJs(array('funciones_form'));
        $this->_view->renderizar('form',$this->_id_padre,$this->_id_hijo);
    }

    public function eliminar($id) {
        if (!$this->filtrarInt($id)) {
            $this->redireccionar('perfil');
        }
        $this->_model->id_perfil = $this->filtrarInt($id);
        $this->_model->elimina();
        $this->redireccionar('perfil');
    }
    
}
?>