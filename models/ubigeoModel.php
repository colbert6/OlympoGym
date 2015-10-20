<?php

class ubigeoModel extends Main{

    public $id_ubigeo;
    public $departamento;
    public $provincia;
    public $distrito;
    
    public function selecciona() {
        $sql="SELECT `id_ubigeo`, `departamento`, `provincia`, `distrito` "
            . "FROM `ubigeo` WHERE 1";
        $r = $this->consulta_simple($sql);
        return $r;
        
    }
    public function selecciona_filtro() {
        if (is_null($this->id_ubigeo)) {
            $this->id_ubigeo = 0;
        }
        if (is_null($this->departamento)) {
            $this->departamento = '';
        }
        if (is_null($this->provincia)) {
            $this->provincia = '';
        }
        if (is_null($this->distrito)) {
            $this->distrito = '';
        }
        $sql="SELECT `id_ubigeo`, `departamento`, `provincia`, `distrito` "
            . "FROM `ubigeo` "
            . "WHERE ( id_ubigeo=".$this->id_ubigeo." or departamento='".$this->departamento."' "
                . "or provincia='".$this->provincia."' or distrito='".$this->distrito."' ) "
            . "and estado='1'";
        
        $r = $this->consulta_simple($sql);
        return $r;
      
    }
    
    public function inserta() {
        $datos = array($this->departamento,$this->provincia,$this->distrito);
        $r = $this->get_consulta("pa_i_ubigeo", $datos);
        $error = $r[1];
        $r = null;
        return $error;
    }

    public function editar() {
       
        $datos = array($this->id_ubigeo,$this->departamento,$this->provincia,$this->distrito);
        $r = $this->get_consulta("pa_u_ubigeo", $datos);
        $error = $r[1];
        $r = null;
        return $error;
    }

    

    public function elimina() {
        $datos = array($this->id_ubigeo);
        $r = $this->get_consulta("pa_d_ubigeo", $datos);
        $error = $r[1];
        
        $r = null;
        return $error;
    }
    

}

?>




