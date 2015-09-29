

<div class="col-md-9">
    
        <?php if (isset($this->datos_servicio) && count($this->datos_servicio)) {?>
                                
            
             <div class="col-md-11">
        
        <?php if (!$this->informacion) { //saber si se ha pedido informacion de algun servicio?> 
                       
                 
        <?php  for ($i = 0; $i < count($this->datos_servicio); $i++) { ?>
                 <div class="row">
                    <div class="row carousel-holder">
                        
                        <div id="<?php echo "carousel-".$this->datos_servicio[$i]['nombre']; ?>" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="<?php echo "#carousel-".$this->datos_servicio[$i]['nombre']; ?>" data-slide-to="0" class="active"></li>
                                <li data-target="<?php echo "#carousel-".$this->datos_servicio[$i]['nombre']; ?>" data-slide-to="1"></li>
                                <li data-target="<?php echo "#carousel-".$this->datos_servicio[$i]['nombre']; ?>" data-slide-to="2"></li>
                            </ol>
                           
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="<?php echo $_webParams['ruta_img']; ?>web/1.png" alt="">
                                                                       
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="<?php echo $_webParams['ruta_img']; ?>web/2.png" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="<?php echo $_webParams['ruta_img']; ?>web/3.jpg" alt="">
                                </div>
                            </div>
                            <div class="carousel-caption">
                                 <a class="link-servicios" href="<?php echo BASE_URL.'web/servicios/'.$this->datos_servicio[$i]['nombre']; ?>" ><?php echo $this->datos_servicio[$i]['nombre']; ?></a>
                            </div>
                               
                            <a class="left carousel-control" href="<?php echo "#carousel-".$this->datos_servicio[$i]['nombre']; ?>" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="<?php echo "#carousel-".$this->datos_servicio[$i]['nombre']; ?>" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                            
                        </div>
                    </div>
                </div>
         <?php /*?>        
                <div class="row">
                    <div class="row carousel-holder">
                        
                    
                        
                        <div id="<?php echo "carousel-".$this->datos_servicio[$i]['nombre']; ?>" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                            <?php for ($j = 0; $j < count($this->img_servicio); $j++): ?>
                                
                           
                            <li data-target="<?php echo "#carousel-".$this->datos_servicio[$i]['nombre']; ?>" data-slide-to="<?php echo $j ?>" class=" <?php  if($j==0) echo "active"; ?>"></li>    
                            
                            <?php endfor;     ?>
                            
                            </ol>
                           
                            <div class="carousel-inner">
                            <?php for ($j = 0; $j < count($this->img_servicio); $j++) { ?>
                            <?php  if($this->datos_servicio[$i]['id_servicio']==$this->img_servicio[$j]['id_servicio']) { ?>
                            <?php  if($j==0){ echo "<div class='item active'>"; }
                                   else {echo "<div class='item'>";} ?>
                                
                                            <img class="slide-image" src="<?php echo $_webParams['ruta_img']."servicio/".$this->img_servicio[$j]['direccion']; ?>" alt="">
                                        </div>   
                            <?php   } //verificar ?>     
                            <?php }  //    ?> 
                                
                            </div>
                            <div class="carousel-caption">
                                <a class="link-servicios" href="<?php echo BASE_URL.'web/servicios/'.$this->datos_servicio[$i]['nombre']; ?>" ><?php echo $this->datos_servicio[$i]['nombre']; ?></a>
                            </div>
                               
                            <a class="left carousel-control" href="<?php echo "#carousel-".$this->datos_servicio[$i]['nombre']; ?>" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="<?php echo "#carousel-".$this->datos_servicio[$i]['nombre']; ?>" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                            
                        </div>   
                    </div>
                </div>
          <?php */ ?> 
          
        <?php }  //lista de Servicios   ?>
        <?php }else { //saber si se ha pedido informacion de algun servicio
                $flag_servicio_informacion=false;
                for ($i = 0; $i < count($this->datos_servicio); $i++) {
                    if($this->informacion==$this->datos_servicio[$i]['nombre']){ 
                        $i=$i;
                        $flag_servicio_informacion=true;
                        break;
                    }
                    
                }    
                if($flag_servicio_informacion){ ?>
                 <div class="row">
                        <div class="col-lg-12">
                            <div class="col-lg-12">
                                <ol class="breadcrumb">

                                    <li><a href="<?php echo BASE_URL."web/servicios/";?>">Servicios</a>
                                    </li>
                                    <li class="active"><?php if(isset($this->datos_servicio[$i]['nombre'])){ echo $this->datos_servicio[$i]['nombre'];} ?></li>

                                </ol>
                            </div>

                        </div>

                    </div>       
                        
                 <div class="row">
                    <div class="row carousel-holder">
                        
                        <div id="<?php echo "carousel-".$this->datos_servicio[$i]['nombre']; ?>" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="<?php echo "#carousel-".$this->datos_servicio[$i]['nombre']; ?>" data-slide-to="0" class="active"></li>
                                <li data-target="<?php echo "#carousel-".$this->datos_servicio[$i]['nombre']; ?>" data-slide-to="1"></li>
                                <li data-target="<?php echo "#carousel-".$this->datos_servicio[$i]['nombre']; ?>" data-slide-to="2"></li>
                            </ol>
                           
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="<?php echo $_webParams['ruta_img']; ?>web/1.png" alt="">
                                                                       
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="<?php echo $_webParams['ruta_img']; ?>web/2.png" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="<?php echo $_webParams['ruta_img']; ?>web/3.jpg" alt="">
                                </div>
                            </div>
                            <div class="carousel-caption">
                                
                                <h2 class="informacion-servicio" ><?php echo $this->datos_servicio[$i]['nombre']; ?></h2>
                                
                            </div>
                               
                            <a class="left carousel-control" href="<?php echo "#carousel-".$this->datos_servicio[$i]['nombre']; ?>" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="<?php echo "#carousel-".$this->datos_servicio[$i]['nombre']; ?>" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="bs-callout bs-callout-info">
                            <h3 style="text-transform: uppercase;" >SERVICIO DE <?php echo $this->datos_servicio[$i]['nombre']; ?></h3>
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
        <?php   }else{
                    echo "<h1>No existe el servicio solicitado</h1>";
            
                }    
                
                } //acaba el else if(!$this->informacion) ?>
            
                
                        
                 
        <?php } else echo "<h1>No hay Servicios Disponibles</h1>"; ?>
     
        </div>
  
     </div>