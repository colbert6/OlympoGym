<?php

class tipo_socioModel extends Main{

    public $id_tipo_socio;
    public $descripcion;
    
    public function selecciona() {
        $sql="SELECT `id_tipo_socio`, `descripcion` "
            . "FROM `tipo_socio` WHERE estado=1";
        $r = $this->consulta_simple($sql);
        return $r;
        
    }
    public function selecciona_filtro() {
        if (is_null($this->id_tipo_socio)) {
            $this->id_tipo_socio = 0;
        }
        if (is_null($this->descripcion)) {
            $this->descripcion = '';
        }
        $sql="SELECT `id_tipo_socio`, `descripcion` "
            . "FROM `tipo_socio` "
            . "WHERE ( id_tipo_socio=".$this->id_tipo_socio." or descripcion='".$this->descripcion."' ) "
            . "and estado='1'";
        
        $r = $this->consulta_simple($sql);
        return $r;
      
    }
    
    public function inserta() {
        $datos = array($this->descripcion);
        $r = $this->get_consulta("pa_i_tiso", $datos);
        $error = $r[1];
        $r = null;
        return $error;
    }

    public function editar() {
       
        $datos = array($this->id_tipo_socio,$this->descripcion);
        $r = $this->get_consulta("pa_u_tiso", $datos);
        $error = $r[1];
        $r = null;
        return $error;
    }

    

    public function elimina() {
        $datos = array($this->id_tipo_socio);
        $r = $this->get_consulta("pa_d_tiso", $datos);
        $error = $r[1];
        
        $r = null;
        return $error;
    }
    

}

?>


