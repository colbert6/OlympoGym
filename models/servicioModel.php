<?php
    class servicioModel extends Main{

       
        
        public function getServicios() {
            $resultado = $this->consulta_simple("select * from servicio");
            return $resultado->fetchall();
        }
        public function getSercicios($id){

            $resultado = $this->consulta_simple("select * from servicio where id_servicio=$id");
            return $resultado->fetchall();
        }
    }
    
?>

