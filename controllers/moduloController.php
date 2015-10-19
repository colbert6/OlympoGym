<?php

class moduloController extends controller{

    private $_model;
    private $_id_padre;
    private $_id_hijo;

    public function __construct() {
        /*if (!$this->acceso(42)) {
            $this->redireccionar('error/access/5050');
        }*/
        parent::__construct();
        $this->_model = $this->loadModel('modulo');
        
        $this->_modulos->url = 'modulo';
        $modulo= $this->_modulos->selecciona_filtro();
        $this->_id_padre=$modulo[0][5];
        $this->_id_hijo=$modulo[0][0];
    }

    public function index() {
        $this->_view->datos = $this->_model->selecciona();
        $this->_view->setCss(array('jquery.dataTables'),true);
        $this->_view->setJs(array('jquery.dataTables.min','run_table'),true);
        $this->_view->titulo = 'Lista de Modulos';
                
        $this->_view->renderizar('index',$this->_id_padre,$this->_id_hijo);
    }
    public function nuevo() {
        if (@$_POST['guardar'] == 1) {
            
            $this->_model->nombre = $_POST['nombre'];
            $this->_model->url = $_POST['url'];
            $this->_model->orden = $_POST['orden'];
            if($_POST['padre']!='0'){
                $padre = explode('/', $_POST['padre']);
                $padre = array_filter($padre);
                $this->_model->id_padre = strtolower(array_shift($padre));
                $this->_model->modulo_padre = strtolower(array_shift($padre));
            }else{
                $this->_model->id_padre = 0;
                $this->_model->modulo_padre = '0';
            }
            $this->_model->icono ='';// $_POST['icono'];
            $this->_model->inserta();
            $this->redireccionar('modulo');
        }
        $this->_view->modulos_padre = $this->_modulos->selecciona_padre();
        $this->_view->titulo = 'Registrar Modulo';
        $this->_view->action = BASE_URL . 'modulo/nuevo';
        //$this->_view->setJs(array('funciones_form'));
        $this->_view->renderizar('form',$this->_id_padre,$this->_id_hijo);
    }
 
    public function editar($id) {
        if (!$this->filtrarInt($id)) {
            $this->redireccionar('modulo');
        }
        if (@$_POST['guardar'] == 1) {
            $this->_model->id_modulo = $_POST['id_modulo'];
            $this->_model->nombre = $_POST['nombre'];
            $this->_model->orden = $_POST['orden'];
            $this->_model->estado = 1;
            if($_POST['padre']!='0'){
                $padre = explode('/', $_POST['padre']);
                $padre = array_filter($padre);
                $this->_model->id_padre = strtolower(array_shift($padre));
                $this->_model->modulo_padre = strtolower(array_shift($padre));
                $this->_model->url = 0;
            }else{
                $this->_model->url = $_POST['url'];
                $this->_model->id_padre = 0;
                $this->_model->modulo_padre = '0';
            }
            $this->_model->icono = '';//$_POST['icono'];
            $this->_model->editar();
            $this->redireccionar('modulo');
        }
        $this->_model->url = '';
        $this->_model->id_modulo = $this->filtrarInt($id);
        $this->_view->datos = $this->_model->selecciona_filtro();
        
        $this->_view->modulos_padre = $this->_modulos->selecciona_padre();
        
        $this->_view->titulo = 'Actualizar Modulo';
        $this->_view->action = BASE_URL . 'modulo/editar/'.$id;
        
        //$this->_vista->setJs(array('funciones_form'));
        $this->_view->renderizar('form',$this->_id_padre,$this->_id_hijo);
    }

    public function eliminar($id) {
        if (!$this->filtrarInt($id)) {
            $this->redireccionar('modulo');
        }
        $this->_model->id_modulo = $this->filtrarInt($id);
        $this->_model->elimina();
        $this->redireccionar('modulo');
    }
    
}

?>
