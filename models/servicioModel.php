<?php
    class servicioModel extends Model{
        public function __construct() {
            parent::__construct();
        }

        public function getServicios(){

            $post = $this->_db->query("select * from servicio");
            return $post->fetchall();
        }
        public function getServicio($id){

            $post = $this->_db->query("select * from servicio where id_servicio=$id");
            return $post->fetchall();
        }
    }
    
?>

