<?php

class tipo_socioModel extends Main{

    public $id_tipo_socio;
    public $descripcion;
    
    public function selecciona() {
        $r = $this->get_consulta("pa_m1_tiso",null);
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
        if (is_null($this->id_tipo_socio)) {
            $this->id_tipo_socio = 0;
        }
        if (is_null($this->descripcion)) {
            $this->descripcion = 'SIN DESCRIPCION';
        }

        $datos = array($this->id_tipo_socio,$this->descripcion);
        
        $r = $this->get_consulta("pa_m2_tiso",$datos);
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
        $r = $this->get_consulta("pa_i_tiso", $datos);
        $error = $r[1];
        $r = null;
        return $error;
    }

    public function editar() {
       
        $datos = array($this->id_tipo_socio,$this->descripcion);
        $r = $this->get_consulta("pa_u_tiso", $datos);
        $error = $r[1];
        $r = null;
        return $error;
    }

    

    public function elimina() {
        $datos = array($this->id_tipo_socio);
        $r = $this->get_consulta("pa_d_tiso", $datos);
        $error = $r[1];
        
        $r = null;
        return $error;
    }
    

}

?>


