<?php

class empleadoModel extends Main{

    
    public function login_usuario($usuario,$clave) {
        //$datos = array($usuario,$clave);
        
        
        $resultado = $this->consulta_simple("SELECT * FROM empleado where nombre='".$usuario."'");
        return $resultado->fetchall();

    }
    
    public function seleccion($usuario,$clave){
        $datos = array($usuario,$clave);
        $r = $this->get_consulta("pa_login_android", $datos);
        if ($r[1] == '') {
            $stmt = $r[0];
        } else {
            die($r[1]);
        }
        $r = null;
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetch();
    }
}

?>
