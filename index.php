<?php


define('DS',DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)) . DS);//C:Xampp/htdcos/carpta de trabajo
define('APP_PATH', ROOT . 'application' . DS);

define('BASE_DATOS', ROOT . 'basedatos' . DS);


try{
    require_once APP_PATH . 'Config.php';
    require_once APP_PATH . 'Request.php';
    require_once APP_PATH . 'Bootstrap.php';
    require_once APP_PATH . 'Controller.php';
    require_once APP_PATH . 'View.php';
    require_once APP_PATH . 'Registro.php';
    require_once APP_PATH . 'Sesion.php';
    require_once BASE_DATOS . 'conexion.php';
    require_once BASE_DATOS . 'Main.php';
    Session::init();
    Bootstrap::run(new Request);
}
catch(Exception $e){
    echo $e->getMessage();
}

?>