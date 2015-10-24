
                </div><!-- /col-lg-12 END SECTION MIDDLE -->
            </div><!--/row -->
        </section>
    </section>
</section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo $_systemParams['ruta_js']; ?>jquery.js"></script>
    <script src="<?php echo $_systemParams['ruta_js']; ?>jquery-1.11.3.min.js"></script>
    
    <?php if(isset($_systemParams['js']) && count($_systemParams['js'])){ ?>
        <?php for($i=0; $i < count($_systemParams['js']); $i++){ ?>

                    <script src="<?php echo $_systemParams['js'][$i] ?>" type="text/javascript"></script>

        <?php } ?>
    <?php } ?>
    
    <script src="<?php echo $_systemParams['ruta_js']; ?>validaciones.js"></script>                
    <script src="<?php echo $_systemParams['ruta_js']; ?>bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?php echo $_systemParams['ruta_js']; ?>jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?php echo $_systemParams['ruta_js']; ?>jquery.scrollTo.min.js"></script>
    <script src="<?php echo $_systemParams['ruta_js']; ?>jquery.nicescroll.js" type="text/javascript"></script>
  
    <!--common script for all pages-->
    <script src="<?php echo $_systemParams['ruta_js']; ?>common-scripts.js"></script>

  </body>
</html>
