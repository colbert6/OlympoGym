<?php

class indexController extends Controller
{
    public function __construct() {
        parent::__construct();
    }
    
    function index() {
        //enviamos el parametro a la vista index.phtml
        //$this->_vista->titulo = 'Portada';
        //llamamos al metodo renderizar para que muestre la vista enviada
        //por parametro
        if(Session::get('autenticado')){
            $this->_view->renderizar('index');
        }
        else{
            header('location:' . BASE_URL );
            exit;
        }
    }
    

}
?>
