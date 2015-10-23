<?php

class perfilModel extends Main{

    public $id_perfil_usuario;
    public $descripcion;
    public $nivel;
    public $estado;
    
    public function selecciona() {
       $r = $this->get_consulta("pa_m1_peus",null);
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
    public function selecciona_filtro() {
        if (is_null($this->id_perfil_usuario)) {
            $this->id_perfil_usuario = 0;
        }
        if (is_null($this->descripcion)) {
            $this->descripcion = 'nulo';
        }
        $datos=array($this->id_perfil_usuario,$this->descripcion);
        $r = $this->get_consulta("pa_m2_peus",$datos);
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
    
    public function inserta() {
        $datos = array($this->descripcion, $this->nivel);
        $r = $this->get_consulta("pa_i_peus", $datos);
        $error = $r[1];
        $r = null;
        return $error;
    }

    public function editar() {
       
        $datos = array($this->id_perfil_usuario,$this->descripcion, $this->nivel);
        
        $r = $this->get_consulta("pa_u_peus", $datos);
        $error = $r[1];
        $r = null;
        return $error;
    }

    

    public function elimina() {
        $datos = array($this->idmodulo);
        $r = $this->get_consulta("pa_d_peus", $datos);
        $error = $r[1];
        $r = null;
        return $error;
    }
    

}

?>
