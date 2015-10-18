<!--MODULO--> 
<ol class="breadcrumb">
  <li><a href="<?php echo BASE_URL?>index"  >Inicio</a></li>
  <li><a href="<?php echo BASE_URL?>modulo" >Modulos</a></li>
  <li class="active"><?php echo $this->titulo; ?></li>
</ol>


<div class="col-md-8">
<fieldset>
    <legend><?php echo $this->titulo; ?></legend>
    <div class="col-md-1"></div>
    <div class="col-md-11" style="color:#000">
    <form class="form-horizontal" role="form" id="form_modulo" method="post" action="<?php echo $this->action; ?>">
        <input name="guardar" id="guardar" type="hidden" value="1">
      <?php if(isset ($this->datos[0][0])) {?>  
      <div class="form-group">
        <label class="control-label col-sm-3" >IDENTIFICADOR:</label>
        <div class="col-sm-9">
            <input name="id_modulo" id="id_modulo" class="form-control"  readonly="readonly"
                   value="<?php echo $this->datos[0][0];?>">
        </div>
      </div>  
      <?php } ?>  
      <div class="form-group">
        <label class="control-label col-sm-3" >NOMBRE:</label>
        <div class="col-sm-9">
          <input name="nombre" id="nombre" class="form-control"  placeholder="Nombre"
                value="<?php if(isset ($this->datos[0][1]))echo $this->datos[0][1]?>">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-3" for="url">URL:</label>
        <div class="col-sm-9">
            <input name="url" id="url" class="form-control"  placeholder="url"
                value="<?php if(isset ($this->datos[0][2]))echo $this->datos[0][2]?>">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-3" for="email">ORDEN:</label>
        <div class="col-sm-9">
          <input name="orden" id="orden" class="form-control"  placeholder="Orden"
                 value="<?php if(isset ($this->datos[0][3]))echo $this->datos[0][3]?>">
        </div>
      </div>
      
      <div class="form-group">
        <label class="control-label col-sm-3" >PADRE:</label>
        <div class="col-sm-9"> 
           <select class="form-control glyphicon" name='padre' id='padre'>
               <option value='0' >NO TIENE MODULO PADRE</option>
               <?php for($i=0;$i<count($this->modulos_padre);$i++){ //Aca va la lista de los modulos padres ?> 
                <?php if( $this->datos[0][5]==$this->modulos_padre[$i][0]){?>
                     <option selected value="<?php echo $this->modulos_padre[$i][0]."/".$this->modulos_padre[$i][1]?>"><?php echo $this->modulos_padre[$i][1]?></option>
                <?php }else{?>
                     <option value="<?php echo $this->modulos_padre[$i][0]."/".$this->modulos_padre[$i][1]?>"><?php echo $this->modulos_padre[$i][1]?></option>
                <?php } ?>
               <?php } ?>
          </select>
        </div>
      </div>
      

        <div class="form-group" style="margin-top: 8%"> 
        <div class="col-sm-offset-3 col-sm-9">
          <button type="submit" class="btn btn-primary"> Guardar</button>
          <a style="margin-left: 8%" href="<?php echo BASE_URL?>modulo" type="submit" class="btn btn-danger">Cancelar</a>
        </div>
      </div>

    </form>
    </div>
</fieldset>
</div>