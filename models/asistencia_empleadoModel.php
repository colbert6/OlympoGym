 <?php

class compra_productoModel extends Main{

    public $id_asistencia_empleado;
    public $id_turno;
    public $id_empleado;
    public $fecha;
    public $estado;
    public $id_servicio;
    
    public function selecciona() {
        $r = $this->get_consulta("pa_m1_venta_asem",null);
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
        if (is_null($this->id_asistencia_empleado)) {
            $this->id_asistencia_empleado = 0;
        }
        $datos = array($this->id_asistencia_empleado);
        
        $r = $this->get_consulta("pa_m2_asem",$datos);
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
        $datos = array($this->id_asistencia_empleado,$this->id_turno,$this->id_empleado,$this->fecha,$this->id_servicio);
        $r = $this->get_consulta("pa_i_asem", $datos);
        $error = $r[1];
        $r = null;
        return $error;
    }
    public function elimina() {
        $datos = array($this->id_asistencia_empleado);
        $r = $this->get_consulta("pa_d_asem", $datos);
        $error = $r[1];
        
        $r = null;
        return $error;
    }
 }
?> 