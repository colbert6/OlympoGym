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
        public function getProductosxCategoria($id){
             $post = $this->_db->query("select * from producto p inner join categoria_producto ct on (p.id_categoria_producto = ct.id_categoria_producto) where p.id_categoria_producto=$id");
            return $post->fetchall();
        }
        
    }
    
?>
