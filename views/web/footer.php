                <footer>
                    <div class="row">
                        <div class="col-md-9">

                        <a href="https://www.facebook.com/OlympoFitness?fref=ts" target="_blank"><img alt="siguenos en facebook" height="40" 
                        src="<?php echo $_webParams['ruta_img']; ?>facebook.png" title="siguenos en facebook" width="40" /></a>
                        <a href="https://twitter.com/" target="_blank"><img alt="siguenos en Twitter" height="40" 
                        src="<?php echo $_webParams['ruta_img']; ?>twiter.png" title="siguenos en Twitter" width="40" /></a>

                        </div>
                        <div class="col-lg-12">
                            <p>Copyright &copy; Your Website 2014</p>
                        </div>
                    </div>
                </footer>
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Iniciar Sesión</h4>
                        </div>

                            <div class="modal-body">
                                 <form action="../sistema/autentificacion.php" method="post" id="loginForm">
                                  <div class="form-group has-feedback">
                                    <input type="text" class="form-control" required placeholder="Usuario" name="username">
                                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                  </div>
                                  <div class="form-group has-feedback">
                                    <input type="password" class="form-control" required placeholder="Contraseña"  name="password" >
                                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                  </div>



                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Entrar</button>
                        </div>
                       </form>  
                      </div>
                    </div>
                 </div>
            </div>
        </div>
    </body>
</html>
    

