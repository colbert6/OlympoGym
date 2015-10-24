<?php

class tipo_membresiaModel extends Main{

    public $id_tipo_membresia;
    public $descripcion;
    public $estado;
    
    public function selecciona() {
        $r = $this->get_consulta("pa_m1_time",null);
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
        if (is_null($this->id_tipo_membresia)) {
            $this->id_tipo_membresia = 0;
        }
        if (is_null($this->descripcion)) {
            $this->descripcion = 'nulo';
        }
        $datos=array($this->id_tipo_membresia,$this->descripcion);
        $r = $this->get_consulta("pa_m2_time",$datos);
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
        $datos = array($this->descripcion);
        $r = $this->get_consulta("pa_i_time", $datos);
        $error = $r[1];
        $r = null;
        return $error;
    }

    public function editar() {
       
        $datos = array($this->id_tipo_membresia,$this->descripcion);
        $r = $this->get_consulta("pa_u_time", $datos);
        $error = $r[1];
        $r = null;
        return $error;
    }

    

    public function elimina() {
        $datos = array($this->id_tipo_membresia);
        $r = $this->get_consulta("pa_d_time", $datos);
        $error = $r[1];
        
        $r = null;
        return $error;
    }
    

}

?>


