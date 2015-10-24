<?php

class socioModel extends Main{

    public $id_socio;
    public $id_tipo_socio;
    public $id_ubigeo;
    public $dni;//q
    public $aliass;//q
    public $nombre;//q
    public $apellido_paterno;//q
    public $apellido_materno;//q
    public $email;
    public $telefono;
    public $celular;
    public $direccion;
    public $fecha_nacimiento;
    public $sexo;
    public $estado_civil;
    public $ocupacion;
    public $estado;
    public $grupo_sanguineo;
    public $hobby;
    public $nacionalidad; //q
    public $seguro_medico;
    public $observacion;
    public $antecedente_medico;
    public $codigo_postal;
    public $fax;
    public $numero_hijo;
    public $sector; //q
    public $grado_estudio;
    public $ingresos;
    public $usuario;
    public $clave;
    public $id_perfil_usuario;

    
    public function selecciona() {
      
        $r = $this->get_consulta("pa_m1_socio",null);
        if ($r[1] == '') {
            $stmt = $r[0];
        } else {
            die($r[1]);
        }
        $r = null;
        if (BaseDatos::$_servidor == 'OCI') {
            oci_fetch_all($stmt, $data, null, null, OCI_FETCHSTATEMENT_BY_ROW);
            return $data;
        } else {
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            return $stmt->fetchall();
        }
        
       
    }
    public function selecciona_filtro() {
        if (is_null($this->id_socio)) {
            $this->id_socio = 0;
        }
        if (is_null($this->id_tipo_socio)) {
            $this->id_tipo_socio = 0;
        }
        if (is_null($this->aliass)) {
            $this->aliass = 'nulo';
        }
        if (is_null($this->dni)) {
            $this->dni = 'nulo';
        }
        if (is_null($this->nombre)) {
            $this->nombre = 'nulo';
        }
        if (is_null($this->apellido_paterno)) {
            $this->apellido_paterno = 'nulo';
        }
        if (is_null($this->apellido_materno)) {
            $this->apellido_materno = 'nulo';
        }
         
        $datos = array($this->id_socio,$this->id_tipo_socio,$this->aliass,$this->dni,
                        $this->nombre,$this->apellido_paterno,$this->apellido_materno);
        
        $r = $this->get_consulta("pa_m2_socio",$datos);
        if ($r[1] == '') {
            $stmt = $r[0];
        } else {
            die($r[1]);
        }
        $r = null;
        if (BaseDatos::$_servidor == 'OCI') {
            oci_fetch_all($stmt, $data, null, null, OCI_FETCHSTATEMENT_BY_ROW);
            return $data;
        } else {
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            
            return $stmt->fetchall();
        }
        
        
    }
    
    public function inserta() {
        $datos = array($this->nombre, $this->url, $this->orden,
        $this->id_padre,$this->modulo_padre,$this->icono);
        $r = $this->get_consulta("pa_i_socio", $datos);
        $error = $r[1];
        $r = null;
        return $error;
    }

    public function editar() {
       
        $datos = array($this->id_modulo, $this->nombre, $this->url,$this->orden, 
            $this->id_padre,$this->modulo_padre,$this->icono);
        
        $r = $this->get_consulta("pa_u_socio", $datos);
        $error = $r[1];
        $r = null;
        return $error;
    }

    

    public function elimina() {
        $datos = array($this->id_modulo);
        $r = $this->get_consulta("pa_d_socio", $datos);
        $error = $r[1];
        $r = null;
        return $error;
    }
    
    

}

?>


