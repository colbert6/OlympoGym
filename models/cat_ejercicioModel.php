<?php

class cat_ejercicioModel extends Main{

    public $id_categoria_ejercicio;
    public $descripcion;
    public $estado;
    
    public function selecciona() {
        $sql="SELECT `id_categoria_ejercicio`, `descripcion`, `estado` "
            . "FROM `categoria_ejercicio` WHERE estado=1";
        $r = $this->consulta_simple($sql);
        return $r;
        
    }
    public function selecciona_filtro() {
        if (is_null($this->id_categoria_ejercicio)) {
            $this->id_categoria_ejercicio = 0;
        }
        if (is_null($this->descripcion)) {
            $this->descripcion = '';
        }
        $sql="SELECT `id_categoria_ejercicio`, `descripcion`, `estado` "
            . "FROM `categoria_ejercicio` "
            . "WHERE ( id_categoria_ejercicio=".$this->id_categoria_ejercicio." or descripcion='".$this->descripcion."' ) "
            . "and estado='1'";
        
        $r = $this->consulta_simple($sql);
        return $r;
      
    }
    
    public function inserta() {
        $datos = array($this->descripcion);
        $r = $this->get_consulta("pa_i_caej", $datos);
        $error = $r[1];
        $r = null;
        return $error;
    }

    public function editar() {
       
        $datos = array($this->id_categoria_ejercicio,$this->descripcion);
        $r = $this->get_consulta("pa_u_caej", $datos);
        
        $error = $r[1];
        $r = null;
        return $error;
    }

    

    public function elimina() {
        $datos = array($this->id_categoria_ejercicio);
        $r = $this->get_consulta("pa_d_caej", $datos);
        $error = $r[1];
        
        $r = null;
        return $error;
    }
    

}

?>

