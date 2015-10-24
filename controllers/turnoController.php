<?php

class turnoController extends controller{

    private $_model;
    private $_id_padre;
    private $_id_hijo;

    public function __construct() {
        /*if (!$this->acceso(42)) {
            $this->redireccionar('error/access/5050');
        }*/
        parent::__construct();
        $this->_model = $this->loadModel('turno');
        
        $this->_modulos->url = 'turno';
        $modulo= $this->_modulos->selecciona_filtro();
        //print_r($modulo);exit;
        $this->_id_padre=$modulo[0]['ID_PADRE'];
        $this->_id_hijo=$modulo[0]['ID_MODULO'];
    }

    public function index() {
        $this->_view->datos = $this->_model->selecciona();
        $this->_view->setCss(array('jquery.dataTables'),true);
        $this->_view->setJs(array('jquery.dataTables.min','run_table'),true);
        $this->_view->titulo = 'Lista de Turnos';
                
        $this->_view->renderizar('index',$this->_id_padre,$this->_id_hijo);
    }
    public function nuevo() {
        if (@$_POST['guardar'] == 1) {
            
            //$this->_model->id_turno = $_POST['id_turno'];
            $this->_model->descripcion = $_POST['descripcion'];
            $this->_model->hora_entrada = $_POST['hora_entrada'];
            $this->_model->hora_salida = $_POST['hora_salida'];

            $this->_model->inserta();
            $this->redireccionar('turno');
        }
        $this->_view->titulo = 'Registrar Turno';
        $this->_view->action = BASE_URL . 'turno/nuevo';
        //$this->_view->setJs(array('funciones_form'));
        $this->_view->renderizar('form',$this->_id_padre,$this->_id_hijo);
    }
 
    public function editar($id) {
        if (!$this->filtrarInt($id)) {
            $this->redireccionar('turno');
        }
        if (@$_POST['guardar'] == 1) {
            $this->_model->id_turno = $_POST['id_turno'];
            $this->_model->descripcion = $_POST['descripcion'];
            $this->_model->hora_entrada = $_POST['hora_entrada'];
            $this->_model->hora_salida = $_POST['hora_salida'];
            
            $this->_model->editar();
            $this->redireccionar('turno');
        }
        $this->_model->id_turno = $this->filtrarInt($id);
        $this->_view->datos = $this->_model->selecciona_filtro();
        
        $this->_view->titulo = 'Actualizar Turno';
        $this->_view->action = BASE_URL . 'turno/editar/'.$id;
        
        //$this->_vista->setJs(array('funciones_form'));
        $this->_view->renderizar('form',$this->_id_padre,$this->_id_hijo);
    }

    public function eliminar($id) {
        if (!$this->filtrarInt($id)) {
            $this->redireccionar('turno');
        }
        $this->_model->id_turno = $this->filtrarInt($id);
        $this->_model->elimina();
        $this->redireccionar('turno');
    }
    
}

?>
