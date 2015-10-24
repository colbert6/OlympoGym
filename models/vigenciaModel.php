 <?php

class vigenciaModel extends Main{

    public $id_vigencia;
    public $descripcion;
    
    public function selecciona() {
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
    public function selecciona_filtro() {
        if (is_null($this->id_vigencia)) {
            $this->id_vigencia = 0;
        }
        if (is_null($this->descripcion)) {
            $this->descripcion = 'nulo';
        }
        $datos = array($this->id_vigencia,$this->descripcion);
        
        $r = $this->get_consulta("pa_m2_vigencia",$datos);
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
        $datos = array($this->descripcion,$this->duracion,$this->unidad_tiempo);
        $r = $this->get_consulta("pa_i_vigencia", $datos);
        $error = $r[1];
        $r = null;
        return $error;
    }

    public function editar() {
       
        $datos = array($this->id_vigencia,$this->descripcion,$this->duracion,$this->unidad_tiempo);
        $r = $this->get_consulta("pa_u_vigencia", $datos);
        $error = $r[1];
        $r = null;
        return $error;
    }

    

    public function elimina() {
        $datos = array($this->id_vigencia);
        $r = $this->get_consulta("pa_d_vigencia", $datos);
        $error = $r[1];
        
        $r = null;
        return $error;
    }
    

}

?>