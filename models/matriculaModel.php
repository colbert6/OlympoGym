 <?php

class compra_productoModel extends Main{

    public $id_matricula;
    public $id_membresia;
    public $id_id_socio;
    public $fecha_inicio;
    public $fecha_fin;
    public $estado;
    public $costo;
    public $id_empleado ;
    
    public function selecciona() {
        $r = $this->get_consulta("pa_m1_venta_matricula",null);
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
        if (is_null($this->id_matricula)) {
            $this->id_matricula = 0;
        }
        $datos = array($this->id_matricula);
        
        $r = $this->get_consulta("pa_m2_matricula",$datos);
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
        $datos = array($this->id_matricula,$this->id_membresia,$this->id_socio,$this->fecha_inicio,$this->fecha_fin,$this->monto,$this->id_empleado);
        $r = $this->get_consulta("pa_i_matricula", $datos);
        $error = $r[1];
        $r = null;
        return $error;
    }
    public function elimina() {
        $datos = array($this->id_matricula);
        $r = $this->get_consulta("pa_d_matricula", $datos);
        $error = $r[1];
        
        $r = null;
        return $error;
    }
    

}

?>
