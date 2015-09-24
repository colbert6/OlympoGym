<?php
    class categoria_servicioModel extends Model{
        public function __construct() {
            parent::__construct();
        }

        public function getCategoria_Servicios(){
            $post = $this->_db->query("select * from categoria_servicio");
            return $post->fetchall();
        }
        public function getCategoria_Servicio($id){
            $post = $this->_db->query("select * from categoria_servicio where id_categoria_servicio=$id ");
            return $post->fetchall();
        }
    }
    
?>