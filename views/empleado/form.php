
<!--MODULO--> 
<?php 

    if($this->isReadOnly){
        $bloqueo = "readonly='readonly'";
    }else{
        $bloqueo = "";
    }
?>
<ol class="breadcrumb">
  <li><a href="<?php echo BASE_URL?>index"  >Inicio</a></li>
  <li><a href="<?php echo BASE_URL?>empleado" >Empleado</a></li>
  <li class="active"><?php echo $this->titulo; ?></li>
</ol>


<div class="col-md-8">
<fieldset>
    <legend><?php echo $this->titulo; ?></legend>
    <div class="col-md-1"></div>
    <div class="col-md-11" style="color:#000">
    <form class="form-horizontal" role="form" id="form_modulo" method="post" action="<?php echo $this->action; ?>">
        <input name="guardar" id="guardar" type="hidden" value="1">
      <?php if(isset ($this->datos[0]['ID_EMPLEADO'])) {?>  
      <div class="form-group">
        <label class="control-label col-sm-3" >IDENTIFICADOR:</label>
        <div class="col-sm-9">
            <input name="id_empleado" id="id_empleado" class="form-control"  readonly="readonly"
                   value="<?php echo $this->datos[0]['ID_EMPLEADO'];?>">
        </div>
      </div>  
      <?php } ?>  
        
      <div class="form-group">
        <label class="control-label col-sm-3" >CATEGORIA DE EMPLEADO:</label>
        <div class="col-sm-9"> 
           <select <?php echo $bloqueo;?> class="form-control glyphicon" name='id_categoria_empleado' id='padre'>
               <option value='' >Selecciona...</option>
               
               <?php //echo "<script>alert('".count($this->cat_empleado)."');</script>"; 
               for($i=0;$i<count($this->cat_empleado);$i++){ ?> 
                <?php if( strcmp($this->datos[0]['ID_CATEGORIA_EMPLEADO'], $this->cat_empleado[$i]['ID_CATEGORIA_EMPLEADO']) == 0){?>
                     <option selected value="<?php echo $this->cat_empleado[$i]['ID_CATEGORIA_EMPLEADO'];?>"><?php echo $this->cat_empleado[$i]['DESCRIPCION']?></option>
                <?php }else{?>
                     <option value="<?php echo $this->cat_empleado[$i]['ID_CATEGORIA_EMPLEADO'];?>"><?php echo $this->cat_empleado[$i]['DESCRIPCION']?></option>
                <?php } ?>
               <?php } ?>
          </select>
        </div>
      </div>
        
      <div class="form-group">
        <label class="control-label col-sm-3" for="nombre" >NOMBRE(S):</label>
        <div class="col-sm-9">
          <input <?php echo $bloqueo;?> name="nombre" id="nombre" class="form-control"  placeholder="Nombre(s)" autofocus
                value="<?php if(isset ($this->datos[0]['NOMBRE']))echo $this->datos[0]['NOMBRE']?>">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-3" for="apellido_paterno" >APELLIDO PATERNO:</label>
        <div class="col-sm-9">
          <input <?php echo $bloqueo;?> name="apellido_paterno" id="apellido_paterno" class="form-control"  placeholder="Apellido Paterno" 
                value="<?php if(isset ($this->datos[0]['APELLIDO_PATERNO']))echo $this->datos[0]['APELLIDO_PATERNO']?>">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-3" for="apellido_materno" >APELLIDO MATERNO:</label>
        <div class="col-sm-9">
          <input <?php echo $bloqueo;?> name="apellido_materno" id="apellido_materno" class="form-control"  placeholder="Apellido Materno" 
                value="<?php if(isset ($this->datos[0]['APELLIDO_MATERNO']))echo $this->datos[0]['APELLIDO_MATERNO']?>">
        </div>
      </div>
        
      <div class="form-group">
        <label class="control-label col-sm-3" for="dni" >DNI:</label>
        <div class="col-sm-9">
          <input <?php echo $bloqueo;?> name="dni" id="dni" class="form-control"  placeholder="DNI" 
                value="<?php if(isset ($this->datos[0]['DNI']))echo $this->datos[0]['DNI']?>">
        </div>
      </div>
        
      <div class="form-group">
        <label class="control-label col-sm-3" for="email" >E-MAIL:</label>
        <div class="col-sm-9">
          <input <?php echo $bloqueo;?> name="email" id="email" class="form-control"  type="email" placeholder="E-mail" 
                value="<?php if(isset ($this->datos[0]['EMAIL'])) echo $this->datos[0]['EMAIL']?>">
        </div>
      </div>
        
      <div class="form-group">
        <label class="control-label col-sm-3" for="telefono" >TELEFONO:</label>
        <div class="col-sm-9">
          <input <?php echo $bloqueo;?> name="telefono" id="telefono" class="form-control"  type="text" placeholder="Telefono" 
                value="<?php if(isset ($this->datos[0]['TELEFONO'])) echo $this->datos[0]['TELEFONO']?>">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-3" for="celular" >CELULAR:</label>
        <div class="col-sm-9">
          <input <?php echo $bloqueo;?>  name="celular" id="celular" class="form-control"  type="text" placeholder="Celular" 
                value="<?php if(isset ($this->datos[0]['CELULAR'])) echo $this->datos[0]['CELULAR']?>">
        </div>
      </div>
        
      <div class="form-group">
        <label class="control-label col-sm-3" for="sexo" >SEXO:</label>
        <div class="col-sm-9">
          <select <?php echo $bloqueo;?> class="form-control glyphicon" name='sexo' id='sexo'>
            <option value='' >Selecciona...</option>

              <?php 
               $sexo = array("femenino","masculino");
                for($i=0;$i<count($sexo);$i++){  ?> 
                <?php if(strcmp($this->datos[0]['SEXO'], $i) == 0 ){?>
                     <option selected value="<?php echo $i;?>"><?php echo strtoupper($sexo[$i]);?></option>
                <?php }else{?>
                     <option value="<?php echo $i;?>"><?php echo strtoupper($sexo[$i]);?></option>
                <?php } ?>
               <?php } ?>
          </select>
        </div>
      </div>
        
     <div class="form-group">
        <label  class="control-label col-sm-3" for="direccion" >DIRECION:</label>
        <div class="col-sm-9">
          <input <?php echo $bloqueo;?> name="direccion" id="direccion" class="form-control"  type="text" placeholder="Direccion" 
                value="<?php if(isset ($this->datos[0]['DIRECCION'])) echo $this->datos[0]['DIRECCION']?>">
        </div>
      </div>
        
      <div class="form-group">
        <label class="control-label col-sm-3" for="fecha_nacimiento" >FECHA NACIMIENTO:</label>
        <div class="col-sm-9">
          <input <?php echo $bloqueo;?> name="fecha_nacimiento" id="fecha_nacimiento" class="form-control"  type="date" placeholder="Fecha Nacimiento" 
                value="<?php if(isset ($this->datos[0]['FECHA_NACIMIENTO'])) echo $this->datos[0]['FECHA_NACIMIENTO']?>">
        </div>
      </div>
        
      <div class="form-group">
        <label class="control-label col-sm-3" for="sexo" >ESTADO CIVIL:</label>
        <div class="col-sm-9">
          <select <?php echo $bloqueo;?> class="form-control glyphicon" name='estado_civil' id='estado_civil'>
               <option value='' >Selecciona...</option>
               <?php 
               $estado_civil = array('soltero','casado','divorciado','viudo');
                for($i=0;$i<count($estado_civil);$i++){ ?> 
                <?php if(strcmp($this->datos[0]['ESTADO_CIVIL'], $estado_civil[$i])==0){?>
                     <option selected value="<?php echo $estado_civil[$i];?>"><?php echo strtoupper($estado_civil[$i]);?></option>
                <?php }else{?>
                     <option value="<?php echo $estado_civil[$i];?>"><?php echo strtoupper($estado_civil[$i]);;?></option>
                <?php } ?>
               <?php } ?>
              
          </select>
        </div>
      </div>
        
      <div class="form-group">
        <label class="control-label col-sm-3" for="grupo_sanguineo" >GRUPO SANGUINEO:</label>
        <div class="col-sm-9">
          <input <?php echo $bloqueo;?> name="grupo_sanguineo" id="grupo_sanguineo" class="form-control"  type="text" placeholder="Grupo Sanguineo" 
                value="<?php if(isset ($this->datos[0]['GRUPO_SANGUINEO'])) echo $this->datos[0]['GRUPO_SANGUINEO']?>">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-3" for="hobby" >HOBBY:</label>
        <div class="col-sm-9">
          <input <?php echo $bloqueo;?> name="hobby" id="hobby" class="form-control"  type="text" placeholder="Hobby" 
                value="<?php if(isset ($this->datos[0]['HOBBY'])) echo $this->datos[0]['HOBBY']?>">
        </div>
      </div>


      <div class="form-group">
        <label class="control-label col-sm-3" for="aliass" >ALIAS:</label>
        <div class="col-sm-9">
          <input <?php echo $bloqueo;?> name="aliass" id="aliass" class="form-control"  placeholder="Alias" 
                value="<?php if(isset ($this->datos[0]['ALIASS']))echo $this->datos[0]['ALIASS']?>">
        </div>
      </div>
        
      <div class="form-group">
        <label class="control-label col-sm-3" for="nacionalidad" >NACIONALIDAD:</label>
        <div class="col-sm-9">
          <input <?php echo $bloqueo;?> name="nacionalidad" id="nacionalidad" class="form-control"  type="text" placeholder="Nacionalidad" 
                value="<?php if(isset ($this->datos[0]['NACIONALIDAD'])) echo $this->datos[0]['NACIONALIDAD']?>">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-3" for="seguro_medico" >SEGURO MEDICO:</label>
        <div class="col-sm-9">
          <input <?php echo $bloqueo;?> name="seguro_medico" id="seguro_medico" class="form-control"  type="text" placeholder="Seguro Medico" 
                value="<?php if(isset ($this->datos[0]['SEGURO_MEDICO'])) echo $this->datos[0]['SEGURO_MEDICO']?>">
        </div>
      </div>
        
     <div class="form-group">
        <label  class="control-label col-sm-3" for="observacion" >OBSERVACION:</label>
        <div class="col-sm-9">
          <input <?php echo $bloqueo;?> name="observacion" id="observacion" class="form-control"  type="text" placeholder="Observacion" 
                value="<?php if(isset ($this->datos[0]['OBSERVACION'])) echo $this->datos[0]['OBSERVACION']?>">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-3" for="antecedente_medico" >ANTECEDENTES MEDICOS:</label>
        <div class="col-sm-9">
          <input <?php echo $bloqueo;?> name="antecedente_medico" id="antecedente_medico" class="form-control"  type="text" placeholder="Antecedente Medico" 
                value="<?php if(isset ($this->datos[0]['ANTECEDENTE_MEDICO'])) echo $this->datos[0]['ANTECEDENTE_MEDICO']?>">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-3" for="codigo_postal" >CODIGO POSTAL:</label>
        <div class="col-sm-9">
          <input <?php echo $bloqueo;?> name="codigo_postal" id="codigo_postal" class="form-control"  type="text" placeholder="Codigo Postal" 
                value="<?php if(isset ($this->datos[0]['CODIGO_POSTAL'])) echo $this->datos[0]['CODIGO_POSTAL']?>">
        </div>
      </div>
        
     <div class="form-group">
        <label class="control-label col-sm-3" for="numero_hijo" >NUMERO DE HIJOS:</label>
        <div class="col-sm-9">
          <input <?php echo $bloqueo;?> name="numero_hijo" id="numero_hijo" class="form-control"  type="number" placeholder="Numero de Hijos" 
                value="<?php if(isset ($this->datos[0]['NUMERO_HIJO'])) echo $this->datos[0]['NUMERO_HIJO']?>">
        </div>
      </div>


      <div class="form-group">
        <label class="control-label col-sm-3" for="sector" >SECTOR:</label>
        <div class="col-sm-9">
          <input <?php echo $bloqueo;?> name="sector" id="sector" class="form-control"  type="text" placeholder="Sector" 
                value="<?php if(isset ($this->datos[0]['SECTOR'])) echo $this->datos[0]['SECTOR']?>">
        </div>
      </div>
        
      <div class="form-group">
        <label class="control-label col-sm-3" for="grado_estudio" >GRADO DE ESTUDIO:</label>
        <div class="col-sm-9">
           <select <?php echo $bloqueo;?> class="form-control glyphicon" name='grado_estudio' id='grado_estudio'>
               <option value='' >Selecciona...</option>
               <?php 
               $grado_estudio = array('inicial','primaria','secundaria','universidad');
                for($i=0;$i<count($grado_estudio);$i++){ ?> 
                <?php if(strcmp($this->datos[0]['GRADO_ESTUDIO'], $grado_estudio[$i])==0){?>
                     <option selected value="<?php echo $grado_estudio[$i];?>"><?php echo strtoupper($grado_estudio[$i]);?></option>
                <?php }else{?>
                     <option value="<?php echo $grado_estudio[$i];?>"><?php echo strtoupper($grado_estudio[$i]);?></option>
                <?php } ?>
               <?php } ?>
              
          </select>
        </div>
      </div>

            
      <div class="form-group">
        <label class="control-label col-sm-3" for="tipo_vivienda" >TIPO DE VIVIENDA:</label>
        <div class="col-sm-9">
          <input <?php echo $bloqueo;?> name="tipo_vivienda" id="sector" class="form-control"  type="text" placeholder="Tipo de vivienda" 
                value="<?php if(isset ($this->datos[0]['TIPO_VIVIENDA'])) echo $this->datos[0]['TIPO_VIVIENDA']?>">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-3" for="anio_contratacion" >AÑO DE CONTRATACION:</label>
        <div class="col-sm-9">
          <input <?php echo $bloqueo;?> name="anio_contratacion" id="sector" class="form-control"  type="text" placeholder="Tipo de vivienda" 
                value="<?php if(isset ($this->datos[0]['ANIO_CONTRATACION'])) echo $this->datos[0]['ANIO_CONTRATACION']?>">
        </div>
      </div>
        
     <div class="form-group">
        <label class="control-label col-sm-3" for="usuario" >USUARIO:</label>
        <div class="col-sm-9">
          <input <?php echo $bloqueo;?> name="usuario" id="ocupacion" class="form-control"  type="text" placeholder="Usuario" 
                value="<?php if(isset ($this->datos[0]['OCUPACION'])) echo $this->datos[0]['OCUPACION']?>">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-3" for="clave" >CLAVE:</label>
        <div class="col-sm-9">
          <input <?php echo $bloqueo;?> name="clave" id="fax" class="form-control"  type="text" placeholder="Clave" 
                value="<?php if(isset ($this->datos[0]['FAX'])) echo $this->datos[0]['FAX']?>">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-3" >PERFIL DE USUARIO:</label>
        <div class="col-sm-9"> 
           <select <?php echo $bloqueo;?> class="form-control glyphicon" name='id_perfil_usuario' id='id_perfil_usuario'>
               <option value='' >Selecciona...</option>
               
               <?php 
               for($i=0;$i<count($this->perfil);$i++){ ?> 
                <?php if( strcmp($this->datos[0]['ID_PERFIL_USUARIO'], $this->perfil[$i]['ID_PERFIL_USUARIO']) == 0){?>
                     <option selected value="<?php echo $this->perfil[$i]['ID_PERFIL_USUARIO'];?>"><?php echo $this->perfil[$i]['DESCRIPCION']?></option>
                <?php }else{?>
                     <option value="<?php echo $this->perfil[$i]['ID_PERFIL_USUARIO'];?>"><?php echo $this->perfil[$i]['DESCRIPCION']?></option>
                <?php } ?>
               <?php } ?>
          </select>
        </div>
      </div>

        <div class="form-group" style="margin-top: 8%"> 
        <div class="col-sm-offset-3 col-sm-9">
          <?php if(!$this->isReadOnly){?>
          <button type="submit" class="btn btn-primary"> Guardar</button>
          <a style="margin-left: 8%" href="<?php echo BASE_URL?>empleado" type="submit" class="btn btn-danger">Cancelar</a>
          <?php }else{?>
            <a style="margin-left: 8%" href="<?php echo BASE_URL?>empleado" type="submit" class="btn btn-danger">Volver Atras</a>
          <?php }?>
        </div>


      </div>

    </form>
    </div>
</fieldset>
</div>


