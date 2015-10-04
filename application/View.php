<?php
class View
{
    private $_controlador;
    private $_js;
    private $_css;
    private $_menu;
    
    public function __construct(Request $peticion,$menu) {
        $this->_controlador = $peticion->getControlador();
        $this->_menu =$menu;
    }
    
    public function renderizar($vista, $id_padre=false,$id_hijo=false)   {
        
        if(!Session::get('autenticado')){
            $this->renderizar_web('access');
            exit;
        }
        
        $js = array();
        $css = array();

        if (count($this->_js)) {
            $js = $this->_js;
        }
        if (count($this->_css)) {
            $css = $this->_css;
        }
        
        $rutaView = ROOT . 'views' . DS . $this->_controlador . DS . $vista . '.php';
      
        $_systemParams = array(
            'ruta_css' => BASE_URL . 'public/css/',
            'ruta_img' => BASE_URL . 'public/img/',
            'ruta_js' => BASE_URL . 'public/js/',
            'js' => $js,
            'css' => $css
            
        );
        
        if(is_readable($rutaView)){
            include_once ROOT . 'header.php';
            include_once ROOT . 'menu.php';
            new menu($this->_menu,$id_padre,$id_hijo);
            include_once $rutaView;
            include_once ROOT . 'footer.php';
         } 
        else {
            throw new Exception('Error de vista');
        }
    }
    public function renderizar_web($vista,$columna = false, $item = false)   {
        $js = array();
        $css = array();

        if (count($this->_js)) {
            $js = $this->_js;
        }
        if (count($this->_css)) {
            $css = $this->_css;
        }
        
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
            'ruta_img' => BASE_URL . 'public/img/',
            'ruta_js' => BASE_URL . 'views/web/js/',
            'menu'=>$menu,
            'js' => $js,
            'css' => $css
        );
              
        $rutaView = ROOT . 'views' . DS .  'web' . DS . $vista . '.php';
        
        if(is_readable($rutaView)){
            include_once ROOT . 'views'. DS . 'web' . DS . 'header.php';
            include_once $rutaView;
            if($columna){
            include_once ROOT . 'views'. DS . 'web' . DS . 'columna.php';    
            }
            include_once ROOT . 'views'. DS . 'web' . DS . 'footer.php';
        } 
        else {
            throw new Exception('Error de vista');
        }
    }
    public function setCss(array $css,$public = false)
    {
        if(is_array($css) && count($css)){
            if(!$public){
                for($i=0; $i < count($css); $i++){
                    $this->_css[] = BASE_URL . 'views/' . $this->_controlador . '/css/' . $css[$i] . '.css';
                }
            }else{
                for($i=0; $i < count($css); $i++){
                    $this->_css[] = BASE_URL . 'public/css/' . $css[$i] . '.css';
                }
            }
            
        } else {
            throw new Exception('Error de css');
        }
    }
    
    public function setJs(array $js,$public= false)
    {
        if(is_array($js) && count($js)){
            if(!$public){
                for($i=0; $i < count($css); $i++){
                    $this->_js[] = BASE_URL . 'views/' . $this->_controlador . '/js/' . $js[$i] . '.js';
                }
            }else{
                for($i=0; $i < count($js); $i++){
                    $this->_js[] = BASE_URL . 'public/js/' . $js[$i] . '.js';
                }
            }
        } else {
            throw new Exception('Error de js');
        }
    }
    
}

?>