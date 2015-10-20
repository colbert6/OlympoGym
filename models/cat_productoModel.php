<?php

class cat_productoModel extends Main{

    public $id_categoria_producto;
    public $descripcion;
    public $estado;
    
    public function selecciona() {
        $sql="SELECT `id_categoria_producto`, `descripcion`, `estado` "
            . "FROM `categoria_producto` WHERE estado=1";
        $r = $this->consulta_simple($sql);
        return $r;
        
    }
    public function selecciona_filtro() {
        if (is_null($this->id_categoria_producto)) {
            $this->id_categoria_producto = 0;
        }
        if (is_null($this->descripcion)) {
            $this->descripcion = '';
        }
        $sql="SELECT `id_categoria_producto`, `descripcion`, `estado` "
            . "FROM `categoria_producto` "
            . "WHERE ( id_categoria_producto=".$this->id_categoria_producto." or descripcion='".$this->descripcion."' ) "
            . "and estado='1'";
        
        $r = $this->consulta_simple($sql);
        return $r;
      
    }
    
    public function inserta() {
        $datos = array($this->descripcion);
        $r = $this->get_consulta("pa_i_capr", $datos);
        $error = $r[1];
        $r = null;
        return $error;
    }

    public function editar() {
       
        $datos = array($this->id_categoria_producto,$this->descripcion);
        $r = $this->get_consulta("pa_u_capr", $datos);
        $error = $r[1];
        $r = null;
        return $error;
    }

    

    public function elimina() {
        $datos = array($this->id_categoria_producto);
        $r = $this->get_consulta("pa_d_capr", $datos);
        $error = $r[1];
        
        $r = null;
        return $error;
    }
    

}

?>


