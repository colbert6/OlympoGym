<?php
    class categoria_productoModel extends Model{
        public function __construct() {
            parent::__construct();
        }

        public function getCategoria_Productos(){

            $post = $this->_db->query("select * from categoria_producto");
            return $post->fetchall();
        }
        public function getCategoria_Producto($id){

            $post = $this->_db->query("select * from categoria_producto where id_categoria_producto=$id");
            return $post->fetchall();
        }
    }
    
?>
