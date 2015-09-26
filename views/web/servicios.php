

<div class="col-md-9">
    
        <?php if (isset($this->datos) && count($this->datos)) {?>
                                
            
             <div class="col-md-11">
        
        <?php if (!$this->informacion) { //saber si se ha pedido informacion de algun servicio?> 
                       
                 
        <?php for ($i = 0; $i < count($this->datos); $i++) { ?>
                 
                <div class="row">
                    <div class="row carousel-holder">
                        
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
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
                                        <a href="<?php echo BASE_URL.'web/servicios/cardio' ; ?>">
                                            <h3>Cardio</h3>
                                        <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                                        </a>
                                    </div>
                               
                            <a  class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                            
                        </div>
                    </div>
                </div>
        <?php } //lista de Servicios   ?>
        <?php }else { //saber si se ha pedido informacion de algun servicio?> 
                 <div class="row">
                    <div class="row carousel-holder">

                    

                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
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
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>OLYMPOFITNNES2
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                     <div class="col-sm-12 col-lg-12 col-md-12" >
                        <ul class="nav nav-tabs" >
                            <li class="active"><a data-toggle="tab" href="#bienvenida">BIENVENIDA</a></li>
                            <li ><a data-toggle="tab" href="#mision">MISION</a></li>
                            
                            <li><a data-toggle="tab" href="#vision">VISION</a></li>
                          </ul>

                        <div class="tab-content">
                            <div id="bienvenida" class="tab-pane fade in active">
                               <br>
                                    <div class="media">
                                      <a class="pull-left" href="#">
                                        <img class="img-thumbnail" src="<?php echo $_webParams['ruta_img']; ?>bienvenida.jpg" alt="">
                                      </a>
                                      <div class="media-body">
                                        
                                        <p class="text-justify">
                                            La familia <strong>Olimpo Ginevra & Company Fitness</strong> te da la bienvenida a nuestra página web y al mismo tiempo te invita a formar parte de nuestra gran familia en donde te ayudaremos a cumplir tus metas y objetivos para mejorar tu estilo de vida de forma sana haciendo lo que más nos gusta,<strong> ¡DEPORTE!</strong>.</p>
                                          <p class="text-justify">
                                            <strong>¡No lo pienses más!</strong> y únete a la familia <strong>Olimpo Ginevra & Company Fitness </strong>  y disfruta de nuestros servicios de Cardiovascular, Maquinas y pesas, Baile, Aeróbicos y mucho más, recuerda que tus metas son nuestras metas. Vive sano y saludable haciendo deporte.
                                        </p>
                                      </div>
                                    </div>
                                        
                                    
                                   <br>                                 
                            </div>
                            <div id="mision" class="tab-pane fade">
                                    <br/>
                        
                                    
                                    <p class="text-justify">Inspirar a nuestros miembros inconparable energia para ayudarles a alcanzar sus objetivos individuales; con nuestra amplia experiencia les preeveemos bienestar en base a un esmerado servicio, a un ambiente agradabre y con un personal entrenado en los ultimos conocimientos disponibles.</p>

                                    <br>
                            </div>
                            <div id="vision" class="tab-pane fade">
                                <br/>
                               
                                <p class="text-justify">Ser el mejor Gimnasio de la Region brindando bienestar a nuestos mienbros y en general a la poblacion, generando valor a nuestra empresa, a nuestros colaboradores y a nuestra comunidad.</p>

                                <br>
                            </div>
                        </div>
                    </div>


                </div> 
                 
            <?php } //se muestra la informacion ?>
            
                
                        
                 
        <?php } else echo "<h1>No hay Servicios</h1>"; ?>
     
        </div>
  
     </div>