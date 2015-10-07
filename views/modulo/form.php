


<div class="col-md-8">
<fieldset>
    <legend><?php echo $this->titulo; ?></legend>
    <div class="col-md-1"></div>
    <div class="col-md-11" style="color:#000">
    <form class="form-horizontal" role="form" id="form_modulo" method="post" action="<?php echo $this->action; ?>">

        <div class="form-group">
        <label class="control-label col-sm-3" >NOMBRE:</label>
        <div class="col-sm-9">
          <input name="nombre" class="form-control" id="nombre" placeholder="Nombre">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-3" for="email">URL:</label>
        <div class="col-sm-9">
            <input name="url" class="form-control" id="url" placeholder="url">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-3" for="email">ORDEN:</label>
        <div class="col-sm-9">
          <input name="orden" class="form-control" id="orden" placeholder="Orden">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-3" for="email">ESTADO:</label>
        <div class="col-sm-9">
          <input name="estado" class="form-control" id="estado" placeholder="Estado">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-3" >PADRE:</label>
        <div class="col-sm-9"> 
           <select class="form-control glyphicon">
               <option value="0"></option>
               <?php for($i=0;$i<$padres;$i++){ //Aca va la lista de los modulos padres ?> 
                    <option value=""></option>
               <?php } ?>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-3" >ICONO:</label>
        <div class="col-sm-9"> 
          <select class="form-control glyphicon">
              <option value=""></option>
               <?php for($i=0;$i<$padres;$i++){ //Aca va la lista de los modulos padres ?> 
                    <option value=""></option>
               <?php } ?>
          </select>
        </div>
      </div>

      <div class="form-group"> 
        <div class="col-sm-offset-3 col-sm-9">
          <a type="submit" class="btn btn-primary"> Guardar</a>
          <a href="javascript:history.back(1)" type="submit" class="btn btn-danger">Cancelar</a>
        </div>
      </div>

    </form>
    </div>
</fieldset>
</div>