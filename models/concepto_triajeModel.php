<?php

class concepto_triajeModel extends Main{

    public $id_concepto_triaje;
    public $descripcion;
    
    public function selecciona() {
        $sql="SELECT `id_concepto_triaje`, `descripcion` "
            . "FROM `concepto_triaje` WHERE estado=1";
        $r = $this->consulta_simple($sql);
        return $r;
        
    }
    public function selecciona_filtro() {
        if (is_null($this->id_concepto_triaje)) {
            $this->id_concepto_triaje = 0;
        }
        if (is_null($this->descripcion)) {
            $this->descripcion = '';
        }
        $sql="SELECT `id_concepto_triaje`, `descripcion` "
            . "FROM `concepto_triaje` "
            . "WHERE ( id_concepto_triaje=".$this->id_concepto_triaje." or descripcion='".$this->descripcion."' ) "
            . "and estado='1'";
        
        $r = $this->consulta_simple($sql);
        return $r;
      
    }
    
    public function inserta() {
        $datos = array($this->descripcion);
        $r = $this->get_consulta("pa_i_cotr", $datos);
        $error = $r[1];
        $r = null;
        return $error;
    }

    public function editar() {
       
        $datos = array($this->id_concepto_triaje,$this->descripcion);
        $r = $this->get_consulta("pa_u_cotr", $datos);
        $error = $r[1];
        $r = null;
        return $error;
    }

    

    public function elimina() {
        $datos = array($this->id_concepto_triaje);
        $r = $this->get_consulta("pa_d_cotr", $datos);
        $error = $r[1];
        
        $r = null;
        return $error;
    }
    

}

?>


