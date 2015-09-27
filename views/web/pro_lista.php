<div class="col-md-9">
    <div class="row">
        <div class="col-lg-12">
            <div class="col-lg-12">
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
            <?php for ($i = 0; $i < count($this->datos); $i++) { ?>
            
            <div class="col-md-3 img-portfolio">
                <div class="thumbnail">
                <a href="#">
                    <img class="img-responsive img-hover" src="http://placehold.it/700x400" alt="">
                </a>
                <h4 class="text-center">
                    <a href="#"><?php echo $this->datos[$i]['nombre']; ?></a>
                </h4>
                <p class="text-center"> <strong>Precio:</strong><?php echo " ".$this->datos[$i]['precio']; ?></p>
                <p class="text-center"><strong>Stock:</strong><?php echo " ".$this->datos[$i]['stock']; ?></p>
                <div class="ratings">
                        <p class="text-center"><a href="<?php echo BASE_URL."web/productos/".$this->datos[$i]['descripcion']."/". $this->datos[$i]['id_producto']?>" class="btn btn-warning">Ver Detalles</a></p>
                </div>
                </div>
            </div>
            <?php } ?>  
        </div>
    <?php } else {?>
            <div class="col-lg-12">
                <h4>No Hay Productos en esta Categoria</h4>
            </div>
    <?php }?>
    
</div>