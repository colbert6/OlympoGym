

<div class="col-md-9">
    
        <?php if (isset($this->datos) && count($this->datos)) {?>
                                
            
             <div class="col-md-11">
        
        <?php if (!$this->informacion) { //saber si se ha pedido informacion de algun servicio?> 
                       
                 
        <?php for ($i = 0; $i < count($this->datos); $i++) { ?>
                 
                <div class="row">
                    <div class="row carousel-holder">
                        
                        <div id="<?php echo "carousel-".$this->datos[$i]['nombre']; ?>" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="<?php echo "#carousel-".$this->datos[$i]['nombre']; ?>" data-slide-to="0" class="active"></li>
                                <li data-target="<?php echo "#carousel-".$this->datos[$i]['nombre']; ?>" data-slide-to="1"></li>
                                <li data-target="<?php echo "#carousel-".$this->datos[$i]['nombre']; ?>" data-slide-to="2"></li>
                            </ol>
                           
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="<?php echo $_webParams['ruta_img']; ?>1.png" alt="">
                                                                       
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="<?php echo $_webParams['ruta_img']; ?>2.png" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="<?php echo $_webParams['ruta_img']; ?>3.jpg" alt="">
                                </div>
                            </div>
                            <div class="carousel-caption">
                                <a class="link-servicios" href="<?php echo BASE_URL.'web/servicios/'.$this->datos[$i]['nombre']; ?>" ><?php echo $this->datos[$i]['nombre']; ?></a>
                            </div>
                               
                            <a class="left carousel-control" href="<?php echo "#carousel-".$this->datos[$i]['nombre']; ?>" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="<?php echo "#carousel-".$this->datos[$i]['nombre']; ?>" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                            
                        </div>
                    </div>
                </div>
        <?php } //lista de Servicios   ?>
        <?php }else { //saber si se ha pedido informacion de algun servicio
                for ($i = 0; $i < count($this->datos); $i++) {
                    if($this->informacion==$this->datos[$i]['nombre']){ 
                        $i=$i;
                        break;
                    }
                }          ?>
                        
                        
                 <div class="row">
                    <div class="row carousel-holder">
                        
                        <div id="<?php echo "carousel-".$this->datos[$i]['nombre']; ?>" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="<?php echo "#carousel-".$this->datos[$i]['nombre']; ?>" data-slide-to="0" class="active"></li>
                                <li data-target="<?php echo "#carousel-".$this->datos[$i]['nombre']; ?>" data-slide-to="1"></li>
                                <li data-target="<?php echo "#carousel-".$this->datos[$i]['nombre']; ?>" data-slide-to="2"></li>
                            </ol>
                           
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="<?php echo $_webParams['ruta_img']; ?>1.png" alt="">
                                                                       
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="<?php echo $_webParams['ruta_img']; ?>2.png" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="<?php echo $_webParams['ruta_img']; ?>3.jpg" alt="">
                                </div>
                            </div>
                            <div class="carousel-caption">
                                
                                <h2 class="informacion-servicio" ><?php echo $this->datos[$i]['nombre']; ?></h2>
                                
                            </div>
                               
                            <a class="left carousel-control" href="<?php echo "#carousel-".$this->datos[$i]['nombre']; ?>" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="<?php echo "#carousel-".$this->datos[$i]['nombre']; ?>" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="bs-callout bs-callout-info">
                            <h3 style="text-transform: uppercase;" >SERVICIO DE <?php echo $this->datos[$i]['nombre']; ?></h3>
                            <p>El servicio de cardio ayuda a las personas con padecias en enfermedades cardio vasculares,
                                ademas de mejorar la presion sanguinea</p>
                        </div>
                        <div class="bs-callout bs-callout-primary">
                            <h3>HORARIOS</h3>
                           <p>LUNES MARTES MIERCOLES JUEVES VIERNES SABADO 
                           <br>
                           8:00 AM a 7:00 PM</p>
                        </div>
                        <div class="bs-callout bs-callout-warning">
                            <h3>CONSEJOS</h3>
                            <ul>
                                <li>Consumir Alimentos bajos en grasa</li>
                                <li>Practicar deporte</li>
                                <li>No consumir Bebidas Alcoholicas</li>
                            </ul>
                        </div>
                        
                    </div>
                </div>  
        <?php    } //se muestra la informacion ?>
            
                
                        
                 
        <?php } else echo "<h1>No hay Servicios</h1>"; ?>
     
        </div>
  
     </div>