<div class="row">
                <br>
                <div class="row clearfix">
                    <h1 class="text-left animated zoomIn" style="font-family: 'Lobster, cursive';font-size: 36px;    font-weight: 500;
                                line-height: 1.1;    margin: 0.67em 0;animation-name: zoomIn;
                                color: #0C9CF2;">
                        <span class="glyphicon glyphicon-bullhorn"></span> Contacta con nosotros</h1>
                    <hr>
                </div>
                <div class="row clearfix">
                    <div class="col-xs-12 col-md-6 col-lg-6 left">
                        <h3 class="text-left" style="font-family: 'Lobster, cursive';font-size: 26px;    font-weight: 500;
                                line-height: 1.1;    margin: 0.67em 0;animation-name: zoomIn;
                                color: #0C9CF2;">
                            <span class="glyphicon glyphicon-list-alt"></span> 
                            Formulario de contacto
                        </h3>
                        
                        <form id="formu" action="contactar.php" method="post"> <!-- formulario -->
                            <fieldset>
                                <div class="col-md-12 form-group">
                                    <label for="nombre" class="control-label">Nombre:<span>*</span></label>
                                    <input type="text" id="nombre" class="form-control input-sm" name="nombre" required>
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="telefono" class="control-label">Teléfono:</label>
                                    <input type="tel" id="telefono" class="form-control input-sm" name="telefono">
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="correo" class="control-label">Correo electrónico:<span>*</span></label>
                                    <input type="email" id="correo" class="form-control input-sm" placeholder="correo@correo.es" name="correo" required>
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="poblacion" class="control-label">Población:<span>*</span></label>
                                    <input type="text" id="poblacion" class="form-control input-sm" name="poblacion">
                                </div>
                                <input type="hidden" name="pagina" value="Situación">
                                <div class="col-md-12 form-group">
                                    <label class="control-label">Asunto:<span>*</span></label>
                                    <textarea name="asunto" class="form-control input-sm" rows="7" cols="32" maxlength="300" placeholder="Escriba su mensaje..." required></textarea>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="submit" name="Enviar" class="btn btn-info btn-sm">
                                    <input type="reset" name="Borrar" class="btn btn-danger btn-sm">
                                </div>
                                <div class="col-md-6 form-group">
                                    <p class="text-right">* Campos obligatorios.</p>
                                </div>
                            </fieldset>
                        </form> <!-- Fin formulario -->
                    </div> <!-- Fin col-md-6 -->
                    <div class="col-xs-6"></div>
                    <div class="col-lg-6 col-md-push-1">
                        <address >
                                  <h3 class="panel-heading" style="font-family: 'Lobster, cursive';font-size: 26px;    font-weight: 500;
                                          line-height: 1.1;    margin: 0.67em 0;animation-name: zoomIn;
                                          color: #0C9CF2;"><span class="glyphicon glyphicon glyphicon-user"></span> Mapa de situación</h3>
                                  <aside class="thumbnailbox listformat">                 
                                      <div id="map">
                                          <p class="lead"><p><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7928.577112153539!2d-
                                     76.3594834!3d-6.4850947!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91ba0c07765eff75%3A
                                     0xdb6f16d92c725847!2sJiron+San+Martin+422%2C+Tarapoto%2C+Per%C3%BA!5e0!3m2!1ses!
                                     2s!4v1443068297596" width="405" height="300" frameborder="0" scrolling="no" marginheight="3" marginwidth="0"></iframe></p>Olympo Fitness<br>
                                      Washington, DC 20301</a><br>
                                      Phone: XXX-XXX-XXXX<br>
                                      Fax: XXX-XXX-YYYY</p>
                                      </div>
                                  </aside>


                        </address>
                   </div>
          </div> <!-- Fin row -->
    </div> 