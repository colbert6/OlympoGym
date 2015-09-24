<?php

class webController extends controller {
    
    
    public function __construct() {
        parent::__construct();
 
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

