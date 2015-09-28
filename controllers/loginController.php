<?php

class loginController extends controller {
    
    private $_empleados;
    
    public function __construct() {
        parent::__construct();
        $this->_empleados=  $this->loadModel('empleado');
    }

    public function index() {
        $datos=$this->_empleados->login_usuario($_POST['usuario'],$_POST['clave']);
        
        if($datos[0]['nombre']==$_POST['usuario'] && $datos[0]['id_empleado']!=''){
            Sesion::set('autenticado', true);
            Sesion::set('empleado', $datos[0]['nombe'].' '.$datos[0]['apellido_paterno'].' '.$datos[0]['apellido_materno']);
            Sesion::set('idempleado', $datos[0]['id_empleado']);
            Sesion::set('perfil', $datos[0]['id_perfil']);
           
            echo '<script>alert("usuario o clave correcta")</script>';
            $this->redireccionar();
            
        }else{
            echo '<script>alert("usuario o clave incorrecta")</script>';
            $this->redireccionar();
        }
    }
    
    public function mostrar() {
        echo 'Empleado: ' . Sesion::get('empleado') . '<br>';
        echo 'Perfil: ' . Sesion::get('perfil') . '<br>';
    }

    public function cerrar() {
        Sesion::destroy();
        echo '<script>alert("Sesion finalizada")</script>';
        $this->redireccionar();
    }

}

?>
