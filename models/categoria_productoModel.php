<?php
    class categoria_productoModel extends Main{
       
        public function getCategoria_Productos(){

            $resultado = $this->consulta_simple("select * from categoria_producto");
            return $resultado->fetchall();
        }
        public function getCategoria_Producto($id){

            $resultado = $this->consulta("select * from categoria_producto where id_categoria_producto=$id");
            return $resultado->fetchall();
        }
    }
    
?>
    