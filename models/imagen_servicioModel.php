<?php
    class imagen_servicioModel extends Main{
        
        public function __construct() {
            parent::__construct();
        }

        public function getImgServicios(){

            $resultado = $this->consulta_simple("select * from imagen_servicio");
            return $resultado->fetchall();
        }
        public function getServicio($id){

            $post = $this->_db->query("select * from servicio where id_servicio=$id");
            return $post->fetchall();
        }
    }
    
?>