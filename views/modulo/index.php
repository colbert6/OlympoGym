<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12 main-chart">
                  
                  	
					

<?php if (isset($this->datos) && count($this->datos)) { ?>
<p><h3>Lista de Modulos</h3></p>
    
    
            
            
            
            
    <?php } else { ?>
        <p>No hay modulos</p>
        <a href="<?php echo BASE_URL?>modulos/nuevo" class="k-button">Nuevo</a>
    <?php } ?>
        
        
            </div><!-- /col-lg-12 END SECTION MIDDLE -->
        </div><!--/row -->
    </section>
</section>