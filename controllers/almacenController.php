<?php

class almacenController extends controller {

    private $_almacen;

    public function __construct() {
        parent::__construct();
        $this->_almacen = $this->cargar_modelo('almacen');
    }

    public function index() {
        $this->_vista->datos = $this->_almacen->selecciona();
        $this->_vista->setJs(array('funcion'));
        $this->_vista->renderizar('index');
    }
    
    public function buscador(){
        if($_POST['filtro']==0){
            $this->_almacen->descripcion=$_POST['descripcion'];
        }
        echo json_encode($this->_almacen->selecciona());
    }
    
    public function nuevo() {
        if ($_POST['guardar'] == 1) {
            $this->_almacen->descripcion = $_POST['descripcion'];
            $this->_almacen->inserta();
            $this->redireccionar('almacenes');
        }
        $this->_vista->titulo = 'Registrar Almacen';
        $this->_vista->action = BASE_URL . 'almacenes/nuevo';
        $this->_vista->setJs(array('funciones_form'));
        $this->_vista->renderizar('form');
    }

    public function editar($id) {
        if (!$this->filtrarInt($id)) {
            $this->redireccionar('almacenes');
        }

        $this->_almacen->idalmacen = $this->filtrarInt($id);
        $this->_vista->datos = $this->_almacenes->selecciona();

        if ($_POST['guardar'] == 1) {
            $this->_almacen->idalmacen = $_POST['codigo'];
            $this->_almacen->descripcion = $_POST['descripcion'];
            $this->_almacen->actualiza();
            $this->redireccionar('almacenes');
        }
        $this->_vista->titulo = 'Actualizar Almacen';
        $this->_vista->setJs(array('funciones_form'));
        $this->_vista->renderizar('form');
    }

    public function eliminar($id) {
        if (!$this->filtrarInt($id)) {
            $this->redireccionar('almacenes');
        }
        $this->_almacen->idalmacen = $this->filtrarInt($id);
        $this->_almacenes->elimina();
        $this->redireccionar('almacenes');
    }

}

?>
