<?php

class empleadoModel extends Main{

    
    public function login_usuario($usuario,$clave) {
        //$datos = array($usuario,$clave);
        //$resultado = $this->consulta_simple("SELECT * FROM empleado where nombre='$usuario'");
        $datos = array($usuario,md5($clave));
        $r = $this->get_consulta("pa_m3_empleado",$datos);
        if ($r[1] == '') {
            $stmt = $r[0];
        } else {
            die($r[1]);
        }
        $r = null;
        if (BaseDatos::$_servidor == 'OCI') {
            oci_fetch_all($stmt, $data, null, null, OCI_FETCHSTATEMENT_BY_ROW);
            return $data;
        } else {
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            return $stmt->fetchall();
        }

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
