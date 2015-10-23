<<<<<<< HEAD
<!--MODULO--> 
<ol class="breadcrumb">
  <li><a href="<?php echo BASE_URL?>index"  >Inicio</a></li>
  <li><a href="<?php echo BASE_URL?>socio" >Socio</a></li>
=======
<!--CATEGORIA EMPLEADO--> 
<ol class="breadcrumb">
  <li><a href="<?php echo BASE_URL?>index"  >Inicio</a></li>
  <li><a href="<?php echo BASE_URL?>marca" >Marca</a></li>
>>>>>>> 7a14b4ccf10db21ed6793a0af147b44746227242
  <li class="active"><?php echo $this->titulo; ?></li>
</ol>


<div class="col-md-8">
<fieldset>
    <legend><?php echo $this->titulo; ?></legend>
    <div class="col-md-1"></div>
    <div class="col-md-11" style="color:#000">
<<<<<<< HEAD
    <form class="form-horizontal" role="form" id="form_modulo" method="post" action="<?php echo $this->action; ?>">
        <input name="guardar" id="guardar" type="hidden" value="1">
      <?php if(isset ($this->datos[0]['ID_SOCIO'])) {?>  
      <div class="form-group">
        <label class="control-label col-sm-3" >IDENTIFICADOR:</label>
        <div class="col-sm-9">
            <input name="id_modulo" id="id_modulo" class="form-control"  readonly="readonly"
                   value="<?php echo $this->datos[0]['ID_MODULO'];?>">
=======
    <form class="form-horizontal" role="form" id="form_perfil" method="post" action="<?php echo $this->action; ?>">
        <input name="guardar" id="guardar" type="hidden" value="1">
      <?php if(isset ($this->datos[0][0])) {?>  
      <div class="form-group">
        <label class="control-label col-sm-3" >IDENTIFICADOR:</label>
        <div class="col-sm-9">
            <input name="id_marca" id="id_marca" class="form-control"  readonly="readonly"
                   value="<?php echo $this->datos[0][0];?>">
>>>>>>> 7a14b4ccf10db21ed6793a0af147b44746227242
        </div>
      </div>  
      <?php } ?>  
      <div class="form-group">
<<<<<<< HEAD
        <label class="control-label col-sm-3" for"nombre">NOMBRE(S):</label>
        <div class="col-sm-9">
          <input name="nombre" id="nombre" class="form-control"  placeholder="Nombre(s)" autofocus
                value="<?php if(isset ($this->datos[0]['NOMBRE']))echo $this->datos[0]['NOMBRE']?>">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-3" for="apellido_paterno" >APELLIDO PATERNO:</label>
        <div class="col-sm-9">
          <input name="apellido_paterno" id="apellido_paterno" class="form-control"  placeholder="Apellido Paterno" 
                value="<?php if(isset ($this->datos[0]['APELLIDO_PATERNO']))echo $this->datos[0]['APELLIDO_PATERNO']?>">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-3" for="apellido_materno" >APELLIDO PATERNO:</label>
        <div class="col-sm-9">
          <input name="apellido_materno" id="apellido_materno" class="form-control"  placeholder="Apellido Materno" 
                value="<?php if(isset ($this->datos[0]['APELLIDO_MATERNO']))echo $this->datos[0]['APELLIDO_MATERNO']?>">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-3" for="aliass" >ALIAS:</label>
        <div class="col-sm-9">
          <input name="aliass" id="aliass" class="form-control"  placeholder="Alias" 
                value="<?php if(isset ($this->datos[0]['ALIASS']))echo $this->datos[0]['ALIASS']?>">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-3" for="dni" >DNI:</label>
        <div class="col-sm-9">
          <input name="dni" id="dni" class="form-control"  placeholder="DNI" 
                value="<?php if(isset ($this->datos[0]['DNI']))echo $this->datos[0]['DNI']?>">
        </div>
      </div>
      
      <div class="form-group">
        <label class="control-label col-sm-3" >TIPO SOCIO:</label>
        <div class="col-sm-9"> 
           <select class="form-control glyphicon" name='tipo_socio' id='padre'>
               <option value='' >Selecciona...</option>
               <?php for($i=0;$i<count($this->tipo_socio);$i++){ ?> 
                <?php if( $this->datos[0]['TIPO_SOCIO']==$this->tipo_socio[$i]['DESCRIPCION']){?>
                     <option selected value="<?php echo $this->tipo_socio[$i]['ID_TIPO_SOCIO'];?>"><?php echo $this->tipo_socio[$i]['DESCRIPCION']?></option>
                <?php }else{?>
                     <option value="<?php echo $this->tipo_socio[$i]['ID_TIPO_SOCIO'];?>"><?php echo $this->tipo_socio[$i]['DESCRIPCION']?></option>
                <?php } ?>
               <?php } ?>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-3" for="email" >E-MAIL:</label>
        <div class="col-sm-9">
          <input name="email" id="email" class="form-control"  type="email" placeholder="E-mail" 
                value="<?php if(isset ($this->datos[0]['EMAIL'])) echo $this->datos[0]['EMAIL']?>">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-3" for="telefono" >TELEFONO:</label>
        <div class="col-sm-9">
          <input name="telefono" id="telefono" class="form-control"  type="number" placeholder="Telefono" 
                value="<?php if(isset ($this->datos[0]['TELEFONO'])) echo $this->datos[0]['TELEFONO']?>">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-3" for="celular" >CELULAR:</label>
        <div class="col-sm-9">
          <input name="celular" id="celular" class="form-control"  type="number" placeholder="Celular" 
                value="<?php if(isset ($this->datos[0]['CELULAR'])) echo $this->datos[0]['CELULAR']?>">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-3" for="direccion" >DIRECION:</label>
        <div class="col-sm-9">
          <input name="direccion" id="direccion" class="form-control"  type="text" placeholder="Direccion" 
                value="<?php if(isset ($this->datos[0]['DIRECCION'])) echo $this->datos[0]['DIRECCION']?>">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-3" for="fecha_nacimiento" >FECHA NACIMIENTO:</label>
        <div class="col-sm-9">
          <input name="fecha_nacimiento" id="fecha_nacimiento" class="form-control"  type="date" placeholder="Fecha Nacimiento" 
                value="<?php if(isset ($this->datos[0]['FECHA_NACIMIENTO'])) echo $this->datos[0]['FECHA_NACIMIENTO']?>">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-3" for="sexo" >SEXO:</label>
        <div class="col-sm-9">
          <select class="form-control glyphicon" name='sexo' id='sexo'>
               <option value='' >Selecciona...</option>
               <option value='1' >Masculino</option>
               <option value='0' >Femenino</option>
          </select>
        </div>
      </div>



      <div class="form-group">
        <label class="control-label col-sm-3" for="sexo" >ESTADO CIVIL:</label>
        <div class="col-sm-9">
          <select class="form-control glyphicon" name='estado_civil' id='estado_civil'>
               <option value='' >Selecciona...</option>
               <option value='soltero' >Soltero</option>
               <option value='casado' >Casado</option>
               <option value='divorciado' >Divorciado</option>
               <option value='viudo' >Viudo</option>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-3" for="ocupacion" >OCUPACION:</label>
        <div class="col-sm-9">
          <input name="ocupacion" id="ocupacion" class="form-control"  type="text" placeholder="Ocupacion" 
                value="<?php if(isset ($this->datos[0]['OCUPACION'])) echo $this->datos[0]['OCUPACION']?>">
        </div>
      </div>



      

        <div class="form-group" style="margin-top: 8%"> 
        <div class="col-sm-offset-3 col-sm-9">
          <button type="submit" class="btn btn-primary"> Guardar</button>
          <a style="margin-left: 8%" href="<?php echo BASE_URL?>modulo" type="submit" class="btn btn-danger">Cancelar</a>
=======
        <label class="control-label col-sm-3" >DESCRIPCION:</label>
        <div class="col-sm-9">
          <input name="descripcion" id="descripcion" class="form-control"  placeholder="Descripcion"
                value="<?php if(isset ($this->datos[0][1]))echo $this->datos[0][1]?>">
        </div>
      </div>
         
        <div class="form-group" style="margin-top: 8%"> 
        <div class="col-sm-offset-3 col-sm-9">
          <button type="submit" class="btn btn-primary"> Guardar</button>
          <a style="margin-left: 8%" href="<?php echo BASE_URL?>marca" type="submit" class="btn btn-danger">Cancelar</a>
>>>>>>> 7a14b4ccf10db21ed6793a0af147b44746227242
        </div>
      </div>

    </form>
    </div>
</fieldset>
</div>