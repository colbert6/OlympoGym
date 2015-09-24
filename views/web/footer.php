            <div class="col-md-3">
                <div class="row ">
                    <div class="col-sm-12 col-lg-12 col-md-12"  >
                                   
                      <div class="panel panel-default">  
                        <div class="panel-heading" > 
                            
                            <span class="glyphicon glyphicon-calendar "></span>
                            
                                <strong >EVENTOS</strong>
                                
                            
                            
                        </div> 

                        <div class="panel-body" id="inner-content-div">  
                            
                            <ul class="media-list">
                                
                                <li class="media" >
                                    <div class="pull-left" >
                                      <div type="button" class="media-object" >
                                        <div class="lista_eventos"> 15</br>OCT</div>
                                      </div>
                                    </div>
                                    <div class="media-body">
                                      <h5 class="media-heading"><strong><u>Comp. Fitness</u></strong></h5>
                                      <small><strong>Lugar:</strong> IPD Morales</small> </br>
                                      <small><strong>Hora:</strong> 3:00 pm</small>
                                    </div>
                                </li>
                                <li class="media" >
                                    <div class="pull-left" >
                                      <div type="button" class="media-object" >
                                        <div class="lista_eventos">30 </br>SEP</div>
                                      </div>
                                    </div>
                                    <div class="media-body">
                                      <h5 class="media-heading"><strong><u>Comp. Fitness</u></strong></h5>
                                      <small><strong>Lugar:</strong> IPD Morales</small> </br>
                                      <small><strong>Hora:</strong> 3:00 pm</small>
                                    </div>
                                </li>
                                <li class="media" >
                                    <div class="pull-left" >
                                      <div type="button" class="media-object" >
                                        <div class="lista_eventos">10 </br>JUL</div>
                                      </div>
                                    </div>
                                    <div class="media-body">
                                      <h5 class="media-heading"><strong><u>Comp. Fitness</u></strong></h5>
                                      <small><strong>Lugar:</strong> IPD Morales</small> </br>
                                      <small><strong>Hora:</strong> 3:00 pm</small>
                                    </div>
                                </li>
                                <li class="media" >
                                    <div class="pull-left" >
                                      <div type="button" class="media-object" >
                                        <div class="lista_eventos">10 </br>FEB</div>
                                      </div>
                                    </div>
                                    <div class="media-body">
                                      <h5 class="media-heading"><strong><u>Comp. Fitness</u></strong></h5>
                                      <small><strong>Lugar:</strong> IPD Morales</small> </br>
                                      <small><strong>Hora:</strong> 3:00 pm</small>
                                    </div>
                                </li>
                                
                            </ul>
                        
                        </div>
                        
                       </div> 

                    </div>
                </div>

                <div class="row">
                     <div class="col-sm-12 col-lg-12 col-md-12" >
                        <div class="panel panel-default">  
                            <div class="panel-heading" > 
                                
                                <span class="glyphicon glyphicon-map-marker"></span>
                                
                                    <strong >Ubiquenos</strong>
                            </div> 
                            <div >
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7928.577112153539!2d-
                                    76.3594834!3d-6.4850947!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91ba0c07765eff75%3A
                                    0xdb6f16d92c725847!2sJiron+San+Martin+422%2C+Tarapoto%2C+Per%C3%BA!5e0!3m2!1ses!
                                    2s!4v1443068297596" width="100%" height="200px" frameborder="0" style="border:0"
                                    allowfullscreen></iframe>
                            
                          
                            </div>
                        
                        </div>
                      </div><!-- /.login-box-body -->
                </div>
                

                <div class="row">
                    <div class="col-sm-12 col-lg-12 col-md-12" >
                        <div > 
                     
                        <div class="fb-page" data-href="https://www.facebook.com/OlympoFitness" width="100%" height="200px" >
                            <div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/OlympoFitness"><a href="https://www.facebook.com/OlympoFitness">Olympo Fitness</a></blockquote>
                            </div>
                        </div>
                        </div>

                    </div>
                </div>
        

 
    


        
        
            </div>
        </div><!-- row-->
   </div><!-- /.container -->

        
     
        <div class="container">
                <footer>
                   
                        <div class="col-md-9">

                        <a href="https://www.facebook.com/OlympoFitness?fref=ts" target="_blank"><img alt="siguenos en facebook" height="40" 
                        src="<?php echo $_webParams['ruta_img']; ?>facebook.png" title="siguenos en facebook" width="40" /></a>
                        <a href="https://twitter.com/" target="_blank"><img alt="siguenos en Twitter" height="40" 
                        src="<?php echo $_webParams['ruta_img']; ?>twiter.png" title="siguenos en Twitter" width="40" /></a>

                        </div>
                        
                        <div class="col-lg-12">
                            <p>Copyright &copy; OLYMPO FITNNES 2014</p>
                        </div>
                   
                </footer>
        </div>
   <!-- Modal -->
                
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
            
    </body>
</html>
    

