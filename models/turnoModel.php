<?php

class turnoModel extends Main{

    public $id_turno;
    public $descripcion;
    public $hora_entrada;
    public $hora_salida;
    
    public function selecciona() {
      
        $r = $this->get_consulta("pa_m1_turno",null);
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
        //return $resultado;
       
    }
    public function selecciona_filtro() {
        if (is_null($this->id_turno)) {
            $this->id_turno = 0;
        }
        if (is_null($this->descripcion)) {
            $this->scripcion = 'nulo';
        }
        if (is_null($this->hora_entrada)) {
            $this->hora_entrada = 'nulo';
        }
        if (is_null($this->hora_salida)) {
            $this->hora_salida = 'nulo';
        } 

        $datos = array($this->id_turno,$this->descripcion,$this->hora_entrada,$this->hora_salida);
        
        $r = $this->get_consulta("pa_m2_turno",$datos);
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
        //return $resultado;
        
    }
    
    public function inserta() {
        $datos = array($this->descripcion,$this->hora_entrada, 
            $this->hora_salida);
        $r = $this->get_consulta("pa_i_turno", $datos);
        $error = $r[1];
        $r = null;
        return $error;
    }

    public function editar() {
       
        $datos = array($this->id_turno,$this->descripcion,
            $this->hora_entrada,$this->hora_salida);
        
        $r = $this->get_consulta("pa_u_turno", $datos);
        $error = $r[1];
        $r = null;
        return $error;
    }

    

    public function elimina() {
        $datos = array($this->id_turno);
        $r = $this->get_consulta("pa_d_turno", $datos);
        $error = $r[1];
        $r = null;
        return $error;
    }
    

}

?>
