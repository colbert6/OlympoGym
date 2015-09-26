<div class="col-md-9">
    <?php if (!$this->informacion) { //saber si se ha pedido informacion de algun servicio?> 
    
            <div class="row">
                     <div class="col-lg-12">
                         <h2 class="page-header">Categorias de Productos<small><?php if(isset($this->informacion)) echo $this->informacion; ?></small></h2>
                     </div>

                     <?php if (isset($this->datos) && count($this->datos)){
                                for ($i = 0; $i < count($this->datos); $i++) {
                     ?>
                            
                     
                     <div class="col-md-4 col-sm-6">
                         <div class="panel panel-default text-center">
                             <div class="panel-heading">
                                 <span class="fa-stack fa-3x">
                                       <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                       <i class="fa fa-tree fa-stack-1x fa-inverse"></i>
                                 </span>
                             </div>
                             <div class="panel-body">
                                <h4><?php echo $this->datos[$i]['descripcion'];?></h4>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                 <a href="<?php echo BASE_URL."web/productos/".$this->datos[$i]['id_categoria_producto'];?>" class="btn btn-primary">Ver Productos</a>
                             </div>
                         </div>
                     </div>
                   <?php
                   
                                }
                            }
                     ?>

                 </div> 
    
        <?php }else{ ?> 
    
    
                 <div class="row">
                        <div class="col-lg-12">
                            <div class="col-lg-12">
                                <h1 class="page-header">Lista de Productos
                                </h1>
                                <ol class="breadcrumb">

                                     <li><a href="index.html">Productos</a>
                                    </li>
                                    <li class="active">Quemadores</li>

                                </ol>
                            </div>

                        </div>

                    </div>
        
        <div class="row">
            <?php if (isset($this->datos) && count($this->datos)){
                                for ($i = 0; $i < count($this->datos); $i++) {
                     ?>
            
            <div class="col-md-4 img-portfolio">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-hover" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="portfolio-item.html">Project Name</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
           <?php
                   
                                }
                            }
                     ?>
             
        </div>

        

        <hr>
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
            <?php }?> 
</div>      