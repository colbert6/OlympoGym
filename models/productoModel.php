<?php
    class productoModel extends Main{
      

        public function getProductos(){
            $resultado = $this->consulta_simple("select * from producto");
            return $resultado->fetchall();
        }
        public function getProducto($id){
            
            $resultado = $this->consulta_simple("select * from producto where id_producto=$id");
            return $resultado->fetchall();
            
        }
        public function getProductosxCategoria($categoria){
            $resultado = $this->consulta_simple("select * from producto p inner join categoria_producto ct on (p.id_categoria_producto = ct.id_categoria_producto) where ct.descripcion='$categoria'");
            return $resultado->fetchall();
        }
        
    }
    
?>
