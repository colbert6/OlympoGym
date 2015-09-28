<?php

class webController extends controller {
    
    private $_web_servicios;
    private $_web_categoria_productos;
    private $_web_productos;
    private $_datos_olympo;
    
    public function __construct() {
        parent::__construct();
        $this->_web_servicios = $this->loadModel('servicio');
        $this->_web_categoria_productos =  $this->loadModel('categoria_producto');
        $this->_web_productos = $this->loadModel('producto');
        
        //$this->$_datos_olympo = $this->loadModel('articulos');
 
    }
    
    public function index() {
        $this->_view->renderizar_web('index',true);
    }
    
    public function inicio(){
        $this->_view->renderizar_web('inicio',true);
    }
    public function nosotros(){
        
        $this->_view->renderizar_web('nosotros',false,'nosotros');
    }
    public function productos($categoria=false,$id=false){
        
        $this->_view->categoria = $categoria; 
        $this->_view->setCss(array('productos'));
        if(!$categoria && !$id){
            $this->_view->datos = $this->_web_categoria_productos->getCategoria_Productos();
            $this->_view->renderizar_web('pro_categoria',true,'productos');
        }else if($categoria && !$id) {
            $this->_view->datos = $this->_web_productos->getProductosxCategoria($categoria);
            $this->_view->renderizar_web('pro_lista',true,'productos');
        }else if($categoria && $id){
            $this->_view->datos = $this->_web_productos->getProducto($id);
            $this->_view->renderizar_web('pro_detalle',true,'productos');  
        }
        
        
    }
    public function servicios($servicio=false){
        $this->_view->informacion =$servicio;
        $this->_view->datos = $this->_web_servicios->getServicios();
        $this->_view->setCss(array('servicios'));
        //$this->_view->js=>setJs(array('sexylightbox','jquery.easing'));
        $this->_view->renderizar_web('servicios',true,'servicios');
    }    
    public function contactenos(){
        $this->_view->renderizar_web('contactenos',false,'contactenos');
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

