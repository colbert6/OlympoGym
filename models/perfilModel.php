<?php

class perfilModel extends Main{

    public $id_perfil_usuario;
    public $descripcion;
    public $nivel;
    public $estado;
    
    public function selecciona() {
        $sql="SELECT id_perfil_usuario, descripcion, nivel, estado "
            . "FROM perfil_usuario WHERE estado=1";
        $r = $this->consulta_simple($sql);
        return $r;
        
    }
    public function selecciona_filtro() {
        if (is_null($this->id_perfil_usuario)) {
            $this->id_perfil_usuario = 0;
        }
        if (is_null($this->descripcion)) {
            $this->descripcion = '';
        }
        $sql="SELECT id_perfil_usuario, descripcion, nivel, estado "
            . "FROM perfil_usuario "
            . "WHERE ( id_perfil_usuario=".$this->id_perfil_usuario." or descripcion='".$this->descripcion."' ) "
            . "and estado='1'";
        
        $r = $this->consulta_simple($sql);
        return $r;
      
    }
    
    public function inserta() {
        $datos = array($this->descripcion, $this->nivel);
        $r = $this->get_consulta("pa_i_peus", $datos);
        $error = $r[1];
        $r = null;
        return $error;
    }

    public function editar() {
       
        $datos = array($this->id_modulo, $this->nombre, $this->url,$this->orden, 
            $this->id_padre,$this->modulo_padre,$this->icono);
        
        $r = $this->get_consulta("pa_u_peus", $datos);
        $error = $r[1];
        $r = null;
        return $error;
    }

    

    public function elimina() {
        $datos = array($this->idmodulo);
        $r = $this->get_consulta("pa_d_peus", $datos);
        $error = $r[1];
        $r = null;
        return $error;
    }
    

}

?>
