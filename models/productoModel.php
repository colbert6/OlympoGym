<?php
    class productoModel extends Model{
        public function __construct() {
            parent::__construct();
        }

        public function getProductos(){

            $post = $this->_db->query("select * from servicio");
            return $post->fetchall();
        }
        public function getProducto($id){

            $post = $this->_db->query("select * from producto where id_producto=$id");
            return $post->fetchall();
        }
    }
    
?>
