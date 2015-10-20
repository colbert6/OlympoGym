<?php

class marcaModel extends Main{

    public $id_marca;
    public $descripcion;
    
    public function selecciona() {
        $sql="SELECT `id_marca`, `descripcion` "
            . "FROM `marca` WHERE estado=1";
        $r = $this->consulta_simple($sql);
        return $r;
        
    }
    public function selecciona_filtro() {
        if (is_null($this->id_marca)) {
            $this->id_marca = 0;
        }
        if (is_null($this->descripcion)) {
            $this->descripcion = '';
        }
        $sql="SELECT `id_marca`, `descripcion` "
            . "FROM `marca` "
            . "WHERE ( id_marca=".$this->id_marca." or descripcion='".$this->descripcion."' ) "
            . "and estado='1'";
        
        $r = $this->consulta_simple($sql);
        return $r;
      
    }
    
    public function inserta() {
        $datos = array($this->descripcion);
        $r = $this->get_consulta("pa_i_marca", $datos);
        $error = $r[1];
        $r = null;
        return $error;
    }

    public function editar() {
       
        $datos = array($this->id_marca,$this->descripcion);
        $r = $this->get_consulta("pa_u_marca", $datos);
        $error = $r[1];
        $r = null;
        return $error;
    }

    

    public function elimina() {
        $datos = array($this->id_marca);
        $r = $this->get_consulta("pa_d_marca", $datos);
        $error = $r[1];
        
        $r = null;
        return $error;
    }
    

}

?>


