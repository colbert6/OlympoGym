<?php

class ubigeoModel extends Main{

    public $id_ubigeo;
    public $departamento;
    public $provincia;
    public $distrito;
    
    public function selecciona() {
        $r = $this->get_consulta("pa_m1_ubigeo",null);
        if ($r[1] == '') {
            $stmt = $r[0];
        } else {
            die($r[1]);
        }
        $r = null;
        if (BaseDatos::$_servidor == 'oci') {
            oci_fetch_all($stmt, $data, null, null, OCI_FETCHSTATEMENT_BY_ROW);
            return $data;
        } else {
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            return $stmt->fetchall();
        }
        //return $resultado;
        $r = $this->consulta_simple($sql);
        return $r;
        
    }
    public function selecciona_filtro() {
        if (is_null($this->id_ubigeo)) {
            $this->id_ubigeo = 0;
        }
        if (is_null($this->departamento)) {
            $this->departamento = '';
        }
        if (is_null($this->provincia)) {
            $this->provincia = '';
        }
        if (is_null($this->distrito)) {
            $this->distrito = '';
        }
        $r = $this->get_consulta("pa_m1_vigencia",null);
        if ($r[1] == '') {
            $stmt = $r[0];
        } else {
            die($r[1]);
        }
        $r = null;
        if (BaseDatos::$_servidor == 'oci') {
            oci_fetch_all($stmt, $data, null, null, OCI_FETCHSTATEMENT_BY_ROW);
            return $data;
        } else {
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            return $stmt->fetchall();
        }
        //return $resultado;
        $r = $this->consulta_simple($sql);
        return $r;
      
    }
    
    public function inserta() {
        $datos = array($this->departamento,$this->provincia,$this->distrito);
        $r = $this->get_consulta("pa_i_ubigeo", $datos);
        $error = $r[1];
        $r = null;
        return $error;
    }

    public function editar() {
       
        $datos = array($this->id_ubigeo,$this->departamento,$this->provincia,$this->distrito);
        $r = $this->get_consulta("pa_u_ubigeo", $datos);
        $error = $r[1];
        $r = null;
        return $error;
    }

    

    public function elimina() {
        $datos = array($this->id_ubigeo);
        $r = $this->get_consulta("pa_d_ubigeo", $datos);
        $error = $r[1];
        
        $r = null;
        return $error;
    }
    

}

?>




