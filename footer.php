</section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo $_systemParams['ruta_js']; ?>jquery.js"></script>
    <script src="<?php echo $_systemParams['ruta_js']; ?>jquery-1.8.3.min.js"></script>
    <script src="<?php echo $_systemParams['ruta_js']; ?>bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?php echo $_systemParams['ruta_js']; ?>jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?php echo $_systemParams['ruta_js']; ?>jquery.scrollTo.min.js"></script>
    <script src="<?php echo $_systemParams['ruta_js']; ?>jquery.nicescroll.js" type="text/javascript"></script>



    <!--common script for all pages-->
    <script src="<?php echo $_systemParams['ruta_js']; ?>common-scripts.js"></script>
    
    <script type="text/javascript" src="<?php echo $_systemParams['ruta_js']; ?>gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="<?php echo $_systemParams['ruta_js']; ?>gritter-conf.js"></script>

    
	
	<script type="text/javascript">
            $(document).ready(function () {
                var unique_id = $.gritter.add({
                    // (string | mandatory) the heading of the notification
                    title: 'Welcome to Dashgum!',
                    // (string | mandatory) the text inside the notification
                    text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo. Free version for <a href="http://blacktie.co" target="_blank" style="color:#ffd777">BlackTie.co</a>.',
                    // (string | optional) the image to display on the left
                    image: 'assets/img/ui-sam.jpg',
                    // (bool | optional) if you want it to fade out on its own or just sit there
                    sticky: true,
                    // (int | optional) the time you want it to be alive for before fading out
                    time: '',
                    // (string | optional) the class name you want to apply to that specific message
                    class_name: 'my-sticky-class'
                });

                return false;
            });
	</script>
  

  </body>
</html>
