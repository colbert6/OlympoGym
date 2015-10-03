<?php

class moduloController extends controller{

    private $_modulo;
    

    public function __construct() {
        /*if (!$this->acceso(42)) {
            $this->redireccionar('error/access/5050');
        }*/
        parent::__construct();
        $this->_modulo = $this->loadModel('modulo');
    }

    public function index() {
        $this->_view->datos = $this->_modulo->selecciona();
        $this->_view->setCss(array('jquery.dataTables'),true);
        $this->_view->setJs(array('jquery.dataTables.min','run_table'),true);
        $this->_view->renderizar('index','1','2');
    }
    
    public function buscador(){
        if($_POST['filtro']==0){
            $this->_modulos->descripcion=$_POST['cadena'];
            $this->_modulos->modulo_padre='';
        }else{
            $this->_modulos->descripcion='';
            $this->_modulos->modulo_padre=$_POST['cadena'];
        }
        
        echo json_encode($this->_modulos->selecciona());
    }

    public function nuevo() {
        if (@$_POST['guardar'] == 1) {
            echo "<script>alert('Hola')</script>";
        }
        
        $this->_view->titulo = 'Registrar Modulo';
        $this->_view->action = BASE_URL . 'modulo/nuevo';
        //$this->_view->setJs(array('funciones_form'));
        $this->_view->renderizar('form');
    }

    public function editar($id) {
        if (!$this->filtrarInt($id)) {
            $this->redireccionar('modulos');
        }

        $this->_modulos->idmodulo = $this->filtrarInt($id);
        $this->_vista->datos = $this->_modulos->selecciona();

        if ($_POST['guardar'] == 1) {
            $this->_modulos->idmodulo = $_POST['codigo'];
            $this->_modulos->descripcion = $_POST['descripcion'];
            $this->_modulos->url = $_POST['url'];
            $this->_modulos->idmodulo_padre = $_POST['modulo_padre'];
            $this->_modulos->estado = $_POST['estado'];
            $this->_modulos->actualiza();
            $this->redireccionar('modulos');
        }
        $this->_vista->modulos_padre = $this->_modulos->seleccionar(0);
        $this->_vista->titulo = 'Actualizar Modulo';
        $this->_vista->setJs(array('funciones_form'));
        $this->_vista->renderizar('form');
    }

    public function eliminar($id) {
        if (!$this->filtrarInt($id)) {
            $this->redireccionar('modulos');
        }
        $this->_modulos->idmodulo = $this->filtrarInt($id);
        $this->_modulos->elimina();
        $this->redireccionar('modulos');
    }
    
}

?>
