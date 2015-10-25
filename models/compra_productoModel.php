 <?php

class compra_productoModel extends Main{

    public $id_compra_producto;
    public $id_compra;
    public $id_producto;
    public $id_almacen;
    public $cantidad;
    public $monto;
    
    public function selecciona() {
        $r = $this->get_consulta("pa_m1_venta_copro",null);
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
        if (is_null($this->id_compra_producto)) {
            $this->id_compra_producto = 0;
        }
        $datos = array($this->id_compra_producto);
        
        $r = $this->get_consulta("pa_m2_copro",$datos);
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
        $datos = array($this->id_compra_producto,$this->id_compra,$this->id_producto,$this->id_almacen,$this->cantidad,$this->monto);
        $r = $this->get_consulta("pa_i_copro", $datos);
        $error = $r[1];
        $r = null;
        return $error;
    }
    public function elimina() {
        $datos = array($this->id_compra_producto);
        $r = $this->get_consulta("pa_d_copro", $datos);
        $error = $r[1];
        
        $r = null;
        return $error;
    }
    

}

?>
