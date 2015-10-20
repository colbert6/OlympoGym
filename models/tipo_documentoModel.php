<?php

class tipo_documentoModel extends Main{

    public $id_tipo_documento;
    public $descripcion;
    
    public function selecciona() {
        $sql="SELECT `id_tipo_documento`, `descripcion` "
            . "FROM `tipo_documento` WHERE estado=1";
        $r = $this->consulta_simple($sql);
        return $r;
        
    }
    public function selecciona_filtro() {
        if (is_null($this->id_tipo_documento)) {
            $this->id_tipo_documento = 0;
        }
        if (is_null($this->descripcion)) {
            $this->descripcion = '';
        }
        $sql="SELECT `id_tipo_documento`, `descripcion` "
            . "FROM `tipo_documento` "
            . "WHERE ( id_tipo_documento=".$this->id_tipo_documento." or descripcion='".$this->descripcion."' ) "
            . "and estado='1'";
        
        $r = $this->consulta_simple($sql);
        return $r;
      
    }
    
    public function inserta() {
        $datos = array($this->descripcion);
        $r = $this->get_consulta("pa_i_tido", $datos);
        $error = $r[1];
        $r = null;
        return $error;
    }

    public function editar() {
       
        $datos = array($this->id_tipo_documento,$this->descripcion);
        $r = $this->get_consulta("pa_u_tido", $datos);
        $error = $r[1];
        $r = null;
        return $error;
    }

    

    public function elimina() {
        $datos = array($this->id_tipo_documento);
        $r = $this->get_consulta("pa_d_tido", $datos);
        $error = $r[1];
        
        $r = null;
        return $error;
    }
    

}

?>


