<?php

class webController extends controller {
    
    private $_web_servicios;
    private $_web_productos;
    private $_datos_olympo;
    
    public function __construct() {
        parent::__construct();
        $this->_web_servicios = $this->loadModel('servicio');
        $this->_web_productos = $this->loadModel('producto');
        //$this->$_datos_olympo = $this->loadModel('articulos');
 
    }
    
    public function index() {
        $this->_view->renderizar_web('index');
    }
    
    public function inicio(){
        $this->_view->renderizar_web('inicio');
    }
    public function nosotros(){
        $this->_view->renderizar_web('nosotros','nosotros');
    }
    public function productos(){
        $this->_view->renderizar_web('productos','productos');
    }
    public function servicios(){
        $this->_view->datos = $this->_web_servicios->getServicios();
        $this->_view->renderizar_web('servicios','servicios');
    }    
    public function contactenos(){
        $this->_view->renderizar_web('contactenos','contactenos');
    }
        
    public function fotos(){
        $this->_view->renderizar_web('fotos','fotos');
    }
        
    public function faceJungla($id){
        $this->_vista->idfb= $id;
        $this->_vista->renderizar_reporte('faceJungla');
    }
    
}

?>

