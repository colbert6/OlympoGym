<?php

class tipo_membresiaModel extends Main{

    public $id_tipo_membresia;
    public $descripcion;
    public $estado;
    
    public function selecciona() {
        $sql="SELECT `id_tipo_membresia`, `descripcion`, `estado` "
            . "FROM `tipo_membresia` WHERE estado=1";
        $r = $this->consulta_simple($sql);
        return $r;
        
    }
    public function selecciona_filtro() {
        if (is_null($this->id_tipo_membresia)) {
            $this->id_tipo_membresia = 0;
        }
        if (is_null($this->descripcion)) {
            $this->descripcion = '';
        }
        $sql="SELECT `id_tipo_membresia`, `descripcion`, `estado` "
            . "FROM `tipo_membresia` "
            . "WHERE ( id_tipo_membresia=".$this->id_tipo_membresia." or descripcion='".$this->descripcion."' ) "
            . "and estado='1'";
        
        $r = $this->consulta_simple($sql);
        return $r;
      
    }
    
    public function inserta() {
        $datos = array($this->descripcion);
        $r = $this->get_consulta("pa_i_time", $datos);
        $error = $r[1];
        $r = null;
        return $error;
    }

    public function editar() {
       
        $datos = array($this->id_tipo_membresia,$this->descripcion);
        $r = $this->get_consulta("pa_u_time", $datos);
        $error = $r[1];
        $r = null;
        return $error;
    }

    

    public function elimina() {
        $datos = array($this->id_tipo_membresia);
        $r = $this->get_consulta("pa_d_time", $datos);
        $error = $r[1];
        
        $r = null;
        return $error;
    }
    

}

?>


