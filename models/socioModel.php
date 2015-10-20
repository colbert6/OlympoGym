<?php

class socioModel extends Main{

    public $id_socio;public $id_tipo_socio;public $id_ubigeo;public $dni;public $alias;public $nombre;
    public $apellido_paterno;public $apellido_materno;public $email;public $telefono;public $celular;
    public $direccion;public $fecha_nacimiento;public $sexo;public $estado_civil;public $ocupacion;
    public $estado;public $grupo_sanguineo;public $hobby;public $nacionalidad;public $seguro_medico;
    public $observacion;public $antecedente_medico;public $codigo_postal;public $fax;public $numero_hijo;
    public $sector;public $grado_estudio;public $ingresos;
    
    public $descripcion;
    
    public function selecciona() {
        $sql="SELECT `id_socio`, `descripcion` "
            . "FROM `socio` WHERE estado=1";
        $r = $this->consulta_simple($sql);
        return $r;
        
    }
    public function selecciona_filtro() {
        if (is_null($this->id_socio)) {
            $this->id_socio = 0;
        }
        if (is_null($this->descripcion)) {
            $this->descripcion = '';
        }
        $sql="SELECT `id_socio`, `descripcion` "
            . "FROM `socio` "
            . "WHERE ( id_socio=".$this->id_socio." or descripcion='".$this->descripcion."' ) "
            . "and estado='1'";
        
        $r = $this->consulta_simple($sql);
        return $r;
      
    }
    
    public function inserta() {
        $datos = array($this->descripcion);
        $r = $this->get_consulta("pa_i_socio", $datos);
        $error = $r[1];
        $r = null;
        return $error;
    }

    public function editar() {
       
        $datos = array($this->id_socio,$this->descripcion);
        $r = $this->get_consulta("pa_u_socio", $datos);
        $error = $r[1];
        $r = null;
        return $error;
    }

    

    public function elimina() {
        $datos = array($this->id_socio);
        $r = $this->get_consulta("pa_d_socio", $datos);
        $error = $r[1];
        
        $r = null;
        return $error;
    }
    

}

?>


