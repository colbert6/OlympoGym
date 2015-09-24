<?php
class View
{
    private $_controlador;
    
    public function __construct(Request $peticion) {
        $this->_controlador = $peticion->getControlador();
    }
    
    public function renderizar($vista, $item = false)   {
        $menu = array(
            array(
                'id' => 'inicio',
                'titulo' => 'Inicio',
                'enlace' => BASE_URL
                ),
            
            array(
                'id' => 'hola',
                'titulo' => 'Hola',
                'enlace' => BASE_URL . 'hola'
                )
        );
        
        $_layoutParams = array(
            'ruta_css' => BASE_URL . 'views/layout/' . DEFAULT_LAYOUT . '/css/',
            'ruta_img' => BASE_URL . 'views/layout/' . DEFAULT_LAYOUT . '/img/',
            'ruta_js' => BASE_URL . 'views/layout/' . DEFAULT_LAYOUT . '/js/',
            'menu' => $menu
        );
              
        $rutaView = ROOT . 'views' . DS . $this->_controlador . DS . $vista . '.phtml';
        
        if(is_readable($rutaView)){
            include_once ROOT . 'views'. DS . 'layout' . DS . DEFAULT_LAYOUT . DS . 'header.php';
            include_once $rutaView;
            include_once ROOT . 'views'. DS . 'layout' . DS . DEFAULT_LAYOUT . DS . 'footer.php';
         } 
        else {
            throw new Exception('Error de vista');
        }
    }
    public function renderizar_web($vista, $item = false)   {
        
        $menu = array(
            array(
                'id' => 'inicio',
                'titulo' => 'INICIO',
                'enlace' => BASE_URL.'web/'
                ),
            
            array(
                'id' => 'nosotros',
                'titulo' => 'NOSOTROS',
                'enlace' => BASE_URL . 'web/nosotros'
                ),
            array(
                'id' => 'servicios',
                'titulo' => 'SERVICIOS',
                'enlace' => BASE_URL. 'web/servicios'
                ),
            array(
                'id' => 'productos',
                'titulo' => 'PRODUCTOS',
                'enlace' => BASE_URL. 'web/productos'
                ),
            array(
                'id' => 'contactenos',
                'titulo' => 'CONTÁCTENOS',
                'enlace' => BASE_URL. 'web/contactenos'
                )
            
        );
        $_webParams = array(
            'ruta_css' => BASE_URL . 'views/web/css/',
            'ruta_img' => BASE_URL . 'views/web/img/',
            'ruta_js' => BASE_URL . 'views/web/js/',
            'menu'=>$menu
        );
              
        $rutaView = ROOT . 'views' . DS .  'web' . DS . $vista . '.php';
        
        if(is_readable($rutaView)){
            include_once ROOT . 'views'. DS . 'web' . DS . 'header.php';
            include_once $rutaView;
            include_once ROOT . 'views'. DS . 'web' . DS . 'footer.php';
        } 
        else {
            throw new Exception('Error de vista');
        }
    }
    public function setJs(array $js)
    {
        if(is_array($js) && count($js)){
            for($i=0; $i < count($js); $i++){
                $this->_js[] = BASE_URL . 'views/' . $this->_controlador . '/js/' . $js[$i] . '.js';
            }
        } else {
            throw new Exception('Error de js');
        }
    }
}

?>