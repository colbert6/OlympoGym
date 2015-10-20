<?php

class ambienteModel extends Main{

    public $id_ambiente;
    public $descripcion;
    public $estado;
    
    public function selecciona() {
        $sql="SELECT `id_ambiente`, `descripcion`, `estado` "
            . "FROM `ambiente` WHERE estado=1";
        $r = $this->consulta_simple($sql);
        return $r;
        
    }
    public function selecciona_filtro() {
        if (is_null($this->id_ambiente)) {
            $this->id_ambiente = 0;
        }
        if (is_null($this->descripcion)) {
            $this->descripcion = '';
        }
        $sql="SELECT `id_ambiente`, `descripcion`, `estado` "
            . "FROM `ambiente` "
            . "WHERE ( id_ambiente=".$this->id_ambiente." or descripcion='".$this->descripcion."' ) "
            . "and estado='1'";
        
        $r = $this->consulta_simple($sql);
        return $r;
      
    }
    
    public function inserta() {
        $datos = array($this->descripcion);
        $r = $this->get_consulta("pa_i_ambiente", $datos);
        $error = $r[1];
        $r = null;
        return $error;
    }

    public function editar() {
        $datos = array($this->id_ambiente,$this->descripcion);
        
        $r = $this->get_consulta("pa_u_ambiente", $datos);
        $error = $r[1];
        $r = null;
        return $error;
    }

    

    public function elimina() {
        $datos = array($this->id_ambiente);
        $r = $this->get_consulta("pa_d_ambiente", $datos);
        $error = $r[1];
        $r = null;
        return $error;
    }
    

}

?>

