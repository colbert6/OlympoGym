 <?php

class compraModel extends Main{

    public $id_compra;
    public $descripcion;
    
    public function selecciona() {
        $r = $this->get_consulta("pa_m1_compra",null);
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
        if (is_null($this->id_compra)) {
            $this->id_compra = 0;
        }
        if (is_null($this->id_proveedor)) {
            $this->id_proveedor =0;
        }
         if (is_null($this->id_empleado)) {
            $this->id_empleado =0;
        }
        if (is_null($this->id_modalidad_transaccion)) {
            $this->id_modalidad_transaccion = 0;
        }
        if (is_null($this->fecha)) {
            $this->fecha = 'nulo';
        }
        $datos = array($this->id_compra,$this->id_proveedor,$this->id_proveedor,$this->id_empleado,$this->id_modalidad_transaccion,$this->fecha);
        
        $r = $this->get_consulta("pa_m2_compra",$datos);
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
        $datos = array($this->id_compra,$this->id_proveedor,$this->id_proveedor,$this->id_empleado,$this->id_modalidad_transaccion,$this->fecha);
        $r = $this->get_consulta("pa_i_compra", $datos);
        $error = $r[1];
        $r = null;
        return $error;
    }

    public function editar() {
       
        $datos = array($this->id_compra,$this->id_proveedor,$this->id_proveedor,$this->id_empleado,$this->id_modalidad_transaccion,$this->fecha);
        $r = $this->get_consulta("pa_u_compra", $datos);
        $error = $r[1];
        $r = null;
        return $error;
    }

    

    public function elimina() {
        $datos = array($this->id_compra);
        $r = $this->get_consulta("pa_d_compra", $datos);
        $error = $r[1];
        
        $r = null;
        return $error;
    }
    

}

?>
