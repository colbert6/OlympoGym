<div class="col-md-9">
    <?php if (!$this->informacion) { //saber si se ha pedido informacion de algun servicio?> 
    
            
                    <?php if (isset($this->datos) && count($this->datos)){ ?>
                     <div class="col-lg-12">
                         <h2 class="page-header">Categorias de Productos</h2>
                     </div>

                    <div class="row">
                    <?php for ($i = 0; $i < count($this->datos); $i++) {?>
                            
                     
                     <div class="col-md-3 col-sm-6">
                         <div class="thumbnail">
                            <img src="<?php echo $_webParams['ruta_img']; ?>5.jpg" alt="">
                            <div class="text-center">
                                <h4><a href="<?php echo BASE_URL."web/productos/".$this->datos[$i]['descripcion']."/". $this->datos[$i]['id_categoria_producto'];?>"><?php echo $this->datos[$i]['descripcion']; ?></a>
                                </h4>
                                <p>Para afianzarnos con nuestros clientes</p>
                                
                            </div>
                            
                        </div>
                     </div>
                         
 
                   <?php } ?>
                    </div> 
                 

                <?php }else{ ?>
                     <div class="col-lg-12">
                         <h4>No Hay Categoria de Productos</h4>
                     </div>
    
                 <?php }  ?>
    
        <?php }else{ ?> 
                
    
                 <div class="row">
                        <div class="col-lg-12">
                            <div class="col-lg-12">
                                <h1 class="page-header">Lista de Productos
                                </h1>
                                <ol class="breadcrumb">

                                     <li><a href="<?php echo BASE_URL."web/productos/";?>">Productos</a>
                                    </li>
                                    <li class="active"><?php if(isset($this->categoria)) echo $this->categoria; ?></li>

                                </ol>
                            </div>

                        </div>

                    </div>
        <?php if (isset($this->datos) && count($this->datos)){?>
        <div class="row">
            
                      <?php          for ($i = 0; $i < count($this->datos); $i++) { ?>
            
            <div class="col-md-3 img-portfolio">
                <div class="thumbnail">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-hover" src="http://placehold.it/700x400" alt="">
                </a>
                <h4 class="text-center">
                    <a href="portfolio-item.html"><?php echo $this->datos[$i]['nombre']; ?></a>
                </h4>
                <p class="text-center"> <strong>Precio:</strong><?php echo " ".$this->datos[$i]['precio']; ?></p>
                <p class="text-center"><strong>Stock:</strong><?php echo " ".$this->datos[$i]['stock']; ?></p>
                </div>
            </div>
                <?php } ?>
           
             
        </div>
     <?php } else {?>
              <div class="col-lg-12">
                         <h4>No Hay Categoria de Productos</h4>
                    </div>
        <?php }?>

        
            <?php }?> 
</div>      