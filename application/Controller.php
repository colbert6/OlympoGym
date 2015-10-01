<?php
abstract class Controller
{
    protected $_view;
    protected $_modelo;
    
    public function __construct() {//asiganmos una vista para este contralador
         $this->_view = new View(new Request);
    }
    abstract public function index();
    
    
     protected function loadModel($modelo)//asignamos un modelo .... cargar_modelo
    {
        $modelo = $modelo . 'Model';
        $rutaModelo = ROOT . 'models' . DS . $modelo . '.php';
        //verificamos si exxiste y es legible
       
        if (is_readable($rutaModelo)) {
            //requerimos el archivo
            require_once $rutaModelo;
            //instanciamos
            $modelo = new $modelo;

            return $modelo;
        } else {
            throw new Exception('Error de modelo');
        }
    }
    protected function getLibrary($libreria)// usar libreria
    {
        $rutaLibreria = ROOT . 'libs' . DS . $libreria . '.php';
        
        if(is_readable($rutaLibreria)){
            require_once $rutaLibreria;
        }
        else{
            throw new Exception('Error de libreria');
        }
    }
    protected function getInt($clave) // devulve entero o 0
    {
        if(isset($_POST[$clave]) && !empty($_POST[$clave])){
            $_POST[$clave] = filter_input(INPUT_POST, $clave, FILTER_VALIDATE_INT);
            return $_POST[$clave];
        }
        
        return 0;
    }
    protected function redireccionar($ruta = false)// validacion de entero
    {
        if($ruta){
            die("<script> window.location='".BASE_URL."$ruta'; </script>");
           // header('location:' . BASE_URL . $ruta);
            exit;
        }
        else{
            die("<script> window.location='".BASE_URL."index'; </script>");
           // header('location:' . BASE_URL);
            exit;
        }
    }
    
    protected function filtrarInt($int)
    {
        $int = (int) $int;
        
        if(is_int($int)){
            return $int;
        }
        else{
            return 0;
        }
    }
    protected function getPostParam($clave)// retorna los valores que son enviados  por metodos post
    {
        if(isset($_POST[$clave])){
            return $_POST[$clave];
        }
    }
    
}
?>