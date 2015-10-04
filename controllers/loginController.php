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
            if($datos['estado'] != 1){
                echo '<script>alert("Este Usuario No esta habilitado")</script>';
                $this->redireccionar();
                exit;
            }
        
            Session::set('autenticado', true);
            Session::set('empleado', $datos['nombre'].' '.$datos['apellido_paterno'].' '.$datos['apellido_materno']);
            Session::set('idempleado', $datos['id_empleado']);
            Session::set('usuario', $datos['usuario']);
            Session::set('id_usuario', $datos['id']);
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
