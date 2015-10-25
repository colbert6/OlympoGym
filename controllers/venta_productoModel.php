 <?php

class venta_productoModel extends Main{

    public $id_venta_producto;
    public $id_venta;
    public $id_producto;
    public $id_almacen;
    public $cantidad;
    public $precio;
    
    
    public function selecciona() {
        $r = $this->get_consulta("pa_m1_venta_vepro",null);
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
        if (is_null($this->id_venta_producto)) {
            $this->id_venta_producto = 0;
        }
        $datos = array($this->id_venta_producto);
        
        $r = $this->get_consulta("pa_m2_vepro",$datos);
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
        $datos = array($this->id_venta_producto,$this->id_venta,$this->id_producto,$this->id_almacen,$this->cantidad,$this->precio);
        $r = $this->get_consulta("pa_i_vepro", $datos);
        $error = $r[1];
        $r = null;
        return $error;
    }
    public function elimina() {
        $datos = array($this->id_venta_producto);
        $r = $this->get_consulta("pa_d_vepro", $datos);
        $error = $r[1];
        
        $r = null;
        return $error;
    }
    

}

?>
