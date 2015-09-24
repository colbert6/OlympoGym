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
                            
                            <a target="_blank"  href="https://www.google.com/maps/place/Jiron+San+Martin+422,+Tarapoto,+Per%C3%BA/@-6.4850947,-76.3594834,16z/data=!4m2!3m1!1s0x91ba0c07765eff75:0xdb6f16d92c725847?hl=es-ES">
                                <img class="img-responsive" src="<?php echo $_webParams['ruta_img']; ?>mapa.png">
                            </a>

                            <p><strong>Telefono: #973949944</strong>
                            </p>
                          
                        </div>
                        
                  
                      </div><!-- /.login-box-body -->
                </div>
                

                <div class="row">
                    <div class="col-sm-12 col-lg-12 col-md-12" >
                        <div class="panel panel-default"> 
                     
                        <div class="fb-page" data-href="https://www.facebook.com/OlympoFitness" data-width="500" data-height="200" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false">
                            <div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/OlympoFitness"><a href="https://www.facebook.com/OlympoFitness">Olympo Fitness</a></blockquote>
                            </div>
                        </div>
                        </div>

                    </div>
                </div>
        

 
    <!-- /.container -->


        <!-- Footer-->
        
        </div>
        
    <!-- Modal -->                
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
    

