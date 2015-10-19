<?php

class moduloModel extends Main{

    public $id_modulo;
    public $nombre;
    public $url;
    public $orden;
    public $estado;
    public $id_padre;
    public $modulo_padre;
    public $icono;
    
    public function selecciona() {
        $sql="SELECT `id_modulo`, `nombre`, `url`, `orden`, `estado`, `id_padre`, `modulo_padre`, `icono` "
            . "FROM modulo WHERE estado='1'";
        $r = $this->consulta_simple($sql);
        return $r;
        /* 
        $r = $this->get_consulta("pa_m1_modulo",null);
        if ($r[1] == '') {
            $stmt = $r[0];
        } else {
            die($r[1]);
        }
        $r = null;
        if (conexion::$_servidor == 'oci') {
            oci_fetch_all($stmt, $data, null, null, OCI_FETCHSTATEMENT_BY_ROW);
            return $data;
        } else {
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            return $stmt->fetchall();
        }
        //return $resultado;
        *
        */
    }
    public function selecciona_filtro() {
        if (is_null($this->id_modulo)) {
            $this->id_modulo = 0;
        }
        if (is_null($this->nombre)) {
            $this->nombre = '';
        }
        if (is_null($this->url)) {
            $this->url = '';
        }
        $sql="SELECT `id_modulo`, `nombre`, `url`, `orden`, `estado`, `id_padre`, `modulo_padre`, `icono` "
            . "FROM modulo "
            . "WHERE ( id_modulo= ".$this->id_modulo." or url='".$this->url."')"
            . " and estado='1'";
        $r = $this->consulta_simple($sql);
        return $r;
        /*     
        $datos = array($this->id_modulo,$this->nombre,$this->id_padre);
        
        $r = $this->get_consulta("pa_m2_modulo",$datos);
        if ($r[1] == '') {
            $stmt = $r[0];
        } else {
            die($r[1]);
        }
        $r = null;
        if (conexion::$_servidor == 'oci') {
            oci_fetch_all($stmt, $data, null, null, OCI_FETCHSTATEMENT_BY_ROW);
            return $data;
        } else {
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            
            return $stmt->fetchall();
        }
        //return $resultado;
         
         */
    }
    public function selecciona_padre() {
        $sql="SELECT id_modulo,nombre "
            . "FROM modulo WHERE id_padre=0 and estado='1'";
        $r = $this->consulta_simple($sql);
        return $r;
        /*
        $datos = array($this->id_modulo=0);
        $r = $this->consulta_simple('pa_m3_modulo',$datos);
        if ($r[1] == '') {
            $stmt = $r[0];
        } else {
            die($r[1]);
        }
        $r = null;
        if (conexion::$_servidor == 'oci') {
            oci_fetch_all($stmt, $data, null, null, OCI_FETCHSTATEMENT_BY_ROW);
            return $data;
        } else {
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            return $stmt->fetchall();
        }
        //return $resultado;
        
        */
    }
    public function inserta() {
        $datos = array($this->nombre, $this->url, $this->orden,
        $this->id_padre,$this->modulo_padre,$this->icono);
        $r = $this->get_consulta("pa_i_modulo", $datos);
        $error = $r[1];
        $r = null;
        return $error;
    }

    public function editar() {
       
        $datos = array($this->id_modulo, $this->nombre, $this->url,$this->orden, 
            $this->id_padre,$this->modulo_padre,$this->icono);
        
        $r = $this->get_consulta("pa_u_modulo", $datos);
        $error = $r[1];
        $r = null;
        return $error;
    }

    

    public function elimina() {
        $datos = array($this->idmodulo);
        $r = $this->get_consulta("pa_d_modulo", $datos);
        $error = $r[1];
        $r = null;
        return $error;
    }
    public function seleciona() {
        if (is_null($this->idmodulo)) {
            $this->idmodulo = 0;
        }
        if (is_null($this->descripcion)) {
            $this->descripcion = '';
        }
        if (is_null($this->modulo_padre)) {
            $this->modulo_padre = '';
        }
        if(is_null($this->idperfil)){
            $this->idperfil=0;
        }
        $datos = array($this->idmodulo, $this->descripcion, $this->modulo_padre,$this->idperfil);
//        echo '<pre>';
//                print_r($datos);exit;
        $r = $this->get_consulta("pa_selecciona_modulos", $datos);
        if ($r[1] == '') {
            $stmt = $r[0];
        } else {
            die($r[1]);
        }
        $r = null;
        if (conexion::$_servidor == 'oci') {
            oci_fetch_all($stmt, $data, null, null, OCI_FETCHSTATEMENT_BY_ROW);
            return $data;
        } else {
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            return $stmt->fetchall();
        }
    }

}

?>
