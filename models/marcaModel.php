<?php

class marcaModel extends Main{

    public $id_marca;
    public $descripcion;
    
    public function selecciona() {
        $r = $this->get_consulta("pa_m1_marca",null);
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
        if (is_null($this->id_marca)) {
            $this->id_marca = 0;
        }
        if (is_null($this->descripcion)) {
            $this->descripcion = 'nulo';
        }
        $datos=array($this->id_marca,$this->descripcion);
        $r = $this->get_consulta("pa_m2_marca",$datos);
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
        $datos = array($this->descripcion);
        $r = $this->get_consulta("pa_i_marca", $datos);
        $error = $r[1];
        $r = null;
        return $error;
    }

    public function editar() {
       
        $datos = array($this->id_marca,$this->descripcion);
        $r = $this->get_consulta("pa_u_marca", $datos);
        $error = $r[1];
        $r = null;
        return $error;
    }

    

    public function elimina() {
        $datos = array($this->id_marca);
        $r = $this->get_consulta("pa_d_marca", $datos);
        $error = $r[1];
        
        $r = null;
        return $error;
    }
    

}

?>


