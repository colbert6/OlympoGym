<?php

class cat_empleadoModel extends Main{

    public $id_categoria_empleado;
    public $descripcion;
    public $estado;
    
    public function selecciona() {
        $sql="SELECT `id_categoria_empleado`, `descripcion`, `estado` "
            . "FROM `categoria_empleado` WHERE estado=1";
        $r = $this->consulta_simple($sql);
        return $r;
        
    }
    public function selecciona_filtro() {
        if (is_null($this->id_categoria_empleado)) {
            $this->id_categoria_empleado = 0;
        }
        if (is_null($this->descripcion)) {
            $this->descripcion = '';
        }
        $sql="SELECT `id_categoria_empleado`, `descripcion`, `estado` "
            . "FROM `categoria_empleado` "
            . "WHERE ( id_categoria_empleado=".$this->id_categoria_empleado." or descripcion='".$this->descripcion."' ) "
            . "and estado='1'";
        
        $r = $this->consulta_simple($sql);
        return $r;
      
    }
    
    public function inserta() {
        $datos = array($this->descripcion);
        $r = $this->get_consulta("pa_i_caem", $datos);
        $error = $r[1];
        $r = null;
        return $error;
    }

    public function editar() {
       
        $datos = array($this->id_categoria_empleado,$this->descripcion);
        $r = $this->get_consulta("pa_u_caem", $datos);
        $error = $r[1];
        $r = null;
        return $error;
    }

    

    public function elimina() {
        $datos = array($this->id_categoria_empleado);
        $r = $this->get_consulta("pa_d_caem", $datos);
        $error = $r[1];
        $r = null;
        return $error;
    }
    

}

?>
