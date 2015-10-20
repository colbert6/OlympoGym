<?php

class tipo_movimientoModel extends Main{

    public $id_tipo_movimiento;
    public $descripcion;
    
    public function selecciona() {
        $sql="SELECT `id_tipo_movimiento`, `descripcion` "
            . "FROM `tipo_movimiento` WHERE estado=1";
        $r = $this->consulta_simple($sql);
        return $r;
        
    }
    public function selecciona_filtro() {
        if (is_null($this->id_tipo_movimiento)) {
            $this->id_tipo_movimiento = 0;
        }
        if (is_null($this->descripcion)) {
            $this->descripcion = '';
        }
        $sql="SELECT `id_tipo_movimiento`, `descripcion` "
            . "FROM `tipo_movimiento` "
            . "WHERE ( id_tipo_movimiento=".$this->id_tipo_movimiento." or descripcion='".$this->descripcion."' ) "
            . "and estado='1'";
        
        $r = $this->consulta_simple($sql);
        return $r;
      
    }
    
    public function inserta() {
        $datos = array($this->descripcion);
        $r = $this->get_consulta("pa_i_timo", $datos);
        $error = $r[1];
        $r = null;
        return $error;
    }

    public function editar() {
       
        $datos = array($this->id_tipo_movimiento,$this->descripcion);
        $r = $this->get_consulta("pa_u_timo", $datos);
        $error = $r[1];
        $r = null;
        return $error;
    }

    

    public function elimina() {
        $datos = array($this->id_tipo_movimiento);
        $r = $this->get_consulta("pa_d_timo", $datos);
        $error = $r[1];
        
        $r = null;
        return $error;
    }
    

}

?>


