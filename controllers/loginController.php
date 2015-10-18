<?php

class loginController extends controller {
    
    private $_empleados;
    
    public function __construct() {
        parent::__construct();
        $this->_empleados=  $this->loadModel('empleado');
    }

    public function index() {
        if(!$this->getAlphaNum('usuario')){
                echo '<script>alert("Debe introducir su nombre de usuario")</script>';
                $this->redireccionar();
                exit;
            }
            
            if(!$this->getSql('clave')){
                echo '<script>alert("Debe introducir su clave")</script>';
                $this->redireccionar();
                exit;
            }
            
            $datos=$this->_empleados->login_usuario($_POST['usuario'],$_POST['clave']);
            
            if(!$datos){
                echo '<script>alert("Usuario o Clave incorrecta")</script>';
                $this->redireccionar();
                exit;
            }
            if($datos[0][13] != 1){//estado
                echo '<script>alert("Este Usuario No esta habilitado")</script>';
                $this->redireccionar();
                exit;
            }
        
            Session::set('autenticado', true);
            Session::set('empleado', $datos[0][2].' '.$datos[0][3].' '.$datos[0][4]);
            Session::set('idempleado', $datos[0][1]);
            Session::set('usuario', $datos[0][27]);
            //Sesion::set('perfil', $datos[0]['id_perfil_usuario']);
           
            echo '<script>alert("Sesion Iniciada")</script>';
            $this->redireccionar();
            
        
    }
    
    

    public function cerrar() {
        Session::destroy();
        echo '<script>alert("Sesion finalizada")</script>';
        $this->redireccionar();
    }

}

?>
