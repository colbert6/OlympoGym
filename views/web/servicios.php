<div class="col-md-12">
    
        <?php if (isset($this->datos) && count($this->datos)) {?>
                <div class="col-md-3">
                    <div class="list-group">
        <?php for ($i = 0; $i < count($this->datos); $i++) { ?>
                        <a href="#" class="list-group-item"><?php echo $this->datos[$i]['nombre'] ?></a>
        <?php } //lista de Servicios   ?>      
                    </div>
                </div>
                
                <div class="col-md-9">
                    <div class="row carousel-holder">

                    <div class="col-md-12">

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
                                <span class="glyphicon glyphicon-chevron-left"></span>OLYMPOFITNNES
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>
                </div>       
        
                
    
            
                
                        
                 
            <?php } else echo "<h1>No hay articulos</h1>"; ?>
     
     
  
     </div>