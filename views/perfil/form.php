<!--PERFIL DE USUARIO--> 
<ol class="breadcrumb">
  <li><a href="<?php echo BASE_URL?>index"  >Inicio</a></li>
  <li><a href="<?php echo BASE_URL?>perfil" >Perfiles de Usuarios</a></li>
  <li class="active"><?php echo $this->titulo; ?></li>
</ol>


<div class="col-md-8">
<fieldset>
    <legend><?php echo $this->titulo; ?></legend>
    <div class="col-md-1"></div>
    <div class="col-md-11" style="color:#000">
    <form class="form-horizontal" role="form" id="form_perfil" method="post" action="<?php echo $this->action; ?>">
        <input name="guardar" id="guardar" type="hidden" value="1">
      <?php if(isset ($this->datos[0]['ID_PERFIL_USUARIO'])) {?>  
      <div class="form-group">
        <label class="control-label col-sm-3" >IDENTIFICADOR:</label>
        <div class="col-sm-9">
            <input name="id_perfil_usuario" id="id_perfil_usuario" class="form-control"  readonly="readonly"
                   value="<?php echo $this->datos[0]['ID_PERFIL_USUARIO'];?>">
        </div>
      </div>  
      <?php } ?>  
      <div class="form-group">
        <label class="control-label col-sm-3" >DESCRIPCION:</label>
        <div class="col-sm-9">
          <input name="descripcion" id="descripcion" class="form-control"  placeholder="Descripcion"
                value="<?php if(isset ($this->datos[0]['DESCRIPCION']))echo $this->datos[0]['DESCRIPCION']?>">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-3" >NIVEL:</label>
        <div class="col-sm-9">
            <input name="nivel" id="nivel" class="form-control"  placeholder="Nivel"
                value="<?php if(isset ($this->datos[0]['NIVEL']))echo $this->datos[0]['NIVEL']?>">
        </div>
      </div>
       
        <div class="form-group" style="margin-top: 8%"> 
        <div class="col-sm-offset-3 col-sm-9">
          <button type="submit" class="btn btn-primary"> Guardar</button>
          <a style="margin-left: 8%" href="<?php echo BASE_URL?>perfil" type="submit" class="btn btn-danger">Cancelar</a>
        </div>
      </div>

    </form>
    </div>
</fieldset>
</div>