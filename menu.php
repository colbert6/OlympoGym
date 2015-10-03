<?php

Class menu {

//cargarmenu("0"); // Donde 0 es el Idpadre principal
    protected $_id_padre;
    protected $_id_hijo;
    protected $_menus;
    private $_c = 0;

    public function __construct($datos_menus,$id_padre,$id_hijo) {
        $this->_menus = $datos_menus;
        $this->_id_padre = $id_padre;
        $this->_id_hijo = $id_hijo;
        $this->crea_menu();
    }

    function crea_menu() {
        echo "<aside>";
        echo " <div id='sidebar'  class='nav-collapse'>";
              
        echo "      <ul class='sidebar-menu' id='nav-accordion'>";
             
        echo "      <p class='centered'><a href='profile.html'><img src='".BASE_URL ."public/img/logo_olympo.png' class='img-circle' height='80' width='100'></a></p>";
        echo "      <h5 class='centered'>Olympo Gym</h5>";
            $this->cargar_menu();
        echo "      </ul>";
        echo " </div>";
        echo "</aside>";
                
        
    }
  
    function cargar_menu() {
        if(isset($this->_menus) && count($this->_menus)){
            for($i=0; $i< count($this->_menus); $i++){
                if( $this->_menus[$i]['id_padre']==NULL){
                    echo "<li class='sub-menu'>";
                    if($this->_menus[$i]['id_modulo']==$this->_id_padre)
                        { echo "  <a class='active' href=''>";}
                    else
                        { echo "  <a href=''>";}
                    echo "      <i ></i>";
                    echo "      <span> ".$this->_menus[$i]['nombre']."</span>";
                    echo "  </a>";
                    echo "  <ul class='sub'>";
                    $this->cargar_hijos($this->_menus[$i]['id_modulo']);
                        echo "  </ul>";
                    echo "</li>";
                }
                
            }
            
        }
    }

    function cargar_hijos($padre) {
        for($i=0; $i< count($this->_menus); $i++){
             if( $this->_menus[$i]['id_padre']!=NULL && $this->_menus[$i]['id_padre']==$padre){
                
                    if($this->_menus[$i]['id_modulo']==$this->_id_hijo)
                        { echo "<li class='active' >";}
                    else
                        { echo "<li>";}  
                  echo "<a  href='".BASE_URL.$this->_menus[$i]['url']."'>".$this->_menus[$i]['nombre']."</a></li>";
                 
             }
        }
    }
}
?>