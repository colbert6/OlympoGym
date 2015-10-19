<?php

class cat_eventoModel extends Main{

    public $id_categoria_evento;
    public $descripcion;
    public $estado;
    
    public function selecciona() {
        $sql="SELECT `id_categoria_evento`, `descripcion`, `estado` "
            . "FROM `categoria_evento` WHERE estado=1";
        $r = $this->consulta_simple($sql);
        return $r;
        
    }
    public function selecciona_filtro() {
        if (is_null($this->id_categoria_evento)) {
            $this->id_categoria_evento = 0;
        }
        if (is_null($this->descripcion)) {
            $this->descripcion = '';
        }
        $sql="SELECT `id_categoria_evento`, `descripcion`, `estado` "
            . "FROM `categoria_evento` "
            . "WHERE ( id_categoria_evento=".$this->id_categoria_evento." or descripcion='".$this->descripcion."' ) "
            . "and estado='1'";
        
        $r = $this->consulta_simple($sql);
        return $r;
      
    }
    
    public function inserta() {
        $datos = array($this->descripcion);
        $r = $this->get_consulta("pa_i_caev", $datos);
        $error = $r[1];
        $r = null;
        return $error;
    }

    public function editar() {
       
        $datos = array($this->id_categoria_evento,$this->descripcion);
        $r = $this->get_consulta("pa_u_caev", $datos);
        $error = $r[1];
        $r = null;
        return $error;
    }

    

    public function elimina() {
        $datos = array($this->id_categoria_evento);
        $r = $this->get_consulta("pa_d_caev", $datos);
        $error = $r[1];
        
        $r = null;
        return $error;
    }
    

}

?>


