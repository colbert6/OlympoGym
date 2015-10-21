<?php

class empleadoModel extends Main{
    public $id_empleado;
    public $id_categoria_empleado;
    public $nombre;
    public $apellido_paterno;
    public $apellido_materno;
    public $dni;
    public $email;
    public $telefono;
    public $celular;
    public $sexo;    
    public $direccion;
    public $fecha_nacimiento;
    public $estado_civil;
    public $estado;
    public $grupo_sanguineo;
    public $hobby;
    public $aliass;
    public $nacionalidad;
    public $seguro_medico;
    public $observacion;
    public $antecedente_medico;
    public $codigo_postal;
    public $numero_hijo;
    public $sector;
    public $grado_estudio;
    public $tipo_vivienda;
    public $anio_contratacion;
    public $usuario;
    public $clave;
    public $id_perfil_usuario;
    


    public function selecciona() {
        $r = $this->get_consulta("pa_m1_empleado",null);
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
        if(is_null($this->id_empleado)){
            $this->id_empleado=0;
        }
        if(is_null($this->nombre)){
            $this->nombre='';
        }
        if(is_null($this->apellido_paterno)){
            $this->apellido_paterno='';
        }
        if(is_null($this->apellido_materno)){
            $this->apellido_materno='';
        }
        if(is_null($this->dni)){
            $this->dni='';
        }
        $datos = array($this->id_empleado,$this->nombre,$this->apellido_paterno,$this->apellido_materno,$this->dni);
        
        $r = $this->get_consulta("pa_m2_empleado",$datos);
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
        $datos = array($this->id_categoria_empleado,$this->nombre, $this->apellido_paterno,$this->apellido_materno, $this->dni, 
            $this->email, $this->telefono,$this->celular,$this->sexo,   $this->direccion, $this->fecha_nacimiento,$this->estado_civil,$this->grupo_sanguineo,  
            $this->hobby,$this->aliass,$this->nacionalidad,$this->seguro_medico,$this->observacion,
            $this->antecedente_medico,$this->codigo_postal,$this->numero_hijo, $this->sector,
            $this->grado_estudio,$this->tipo_vivienda,$this->anio_contratacion, $this->usuario,$this->clave,$this->id_perfil_usuario);
        $r = $this->get_consulta("pa_i_empleado", $datos);
        $error = $r[1];
        $r = null;
        return $error;
    }

    public function editar() {
       
        $datos = array($this->id_empleado,$this->id_categoria_empleado,$this->nombre, $this->apellido_paterno,$this->apellido_materno, $this->dni, 
            $this->email, $this->telefono,$this->celular,$this->sexo,   $this->direccion, $this->fecha_nacimiento,$this->estado_civil,$this->grupo_sanguineo,  
            $this->hobby,$this->aliass,$this->nacionalidad,$this->seguro_medico,$this->observacion,
            $this->antecedente_medico,$this->codigo_postal,$this->numero_hijo, $this->sector,
            $this->grado_estudio,$this->tipo_vivienda,$this->anio_contratacion, $this->usuario,$this->clave,$this->id_perfil_usuario);
        $r = $this->get_consulta("pa_u_empleado", $datos);
        $error = $r[1];
        $r = null;
        return $error;
    }

    

    public function elimina() {
        $datos = array($this->id_empleado);
        $r = $this->get_consulta("pa_d_empleado", $datos);
        $error = $r[1];
        $r = null;
        return $error;
    }
    
    public function login_usuario($usuario,$clave) {
        //$datos = array($usuario,$clave);
        //$resultado = $this->consulta_simple("SELECT * FROM empleado where nombre='$usuario'");
        $datos = array($usuario,md5($clave));
        $r = $this->get_consulta("pa_m3_empleado",$datos);
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
    
}

?>
