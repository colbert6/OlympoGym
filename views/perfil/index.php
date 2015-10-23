
<ol class="breadcrumb">
  <li><a href="<?php echo BASE_URL?>index"  >Inicio</a></li>
  <li><a href="<?php echo BASE_URL?>perfil" >Perfiles de Usuarios</a></li>
  <li class="active"><?php echo $this->titulo; ?></li>
</ol>
                  
 <fieldset>
    <legend><?php echo $this->titulo; ?></legend>
 
<?php if (isset($this->datos) && count($this->datos)) { ?>
    
    <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>DESCRIPCION</th>
                <th>NIVEL</th>
                <th>ESTADO</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
         <tbody>
            <?php for ($i = 0; $i < count($this->datos); $i++) { ?>
            <tr>
                <td><?php echo $this->datos[$i]['ID_PERFIL_USUARIO'];//id ?></td>
                <td><?php echo $this->datos[$i]['DESCRIPCION'];//nombre ?></td>    
                <td><?php echo $this->datos[$i]['NIVEL'];//url ?></td>
                <td><?php if($this->datos[$i]['ESTADO']=='1'){
                    echo 'Activo';
                } else{
                    echo 'Inactivo';
                } ?></td>
                <td>
                    <div class="btn-group" role="group" aria-label="...">
                        <a class="btn btn-success" href="<?php echo BASE_URL."perfil/editar/".$this->datos[$i]['ID_PERFIL_USUARIO']?>">
                            <i class="fa fa-pencil fa-fw"></i> Editar
                        </a>
                        <a class="btn btn-danger" href="<?php echo BASE_URL."perfil/eliminar/".$this->datos[$i]['ID_PERFIL_USUARIO']?>">
                            <i class="fa fa-trash-o fa-lg"></i> Borrar
                        </a>
                    </div>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>  
          
    <?php } else { ?>
    <p>No hay modulos</p>
        <a class="btn btn-primary" href="<?php echo BASE_URL?>perfil/nuevo" class="k-button">Nuevo</a>
    <?php } ?>
        
        <div class="btn-group">
        <a class="btn btn-primary" href="<?php echo BASE_URL?>perfil/nuevo" class="k-button">Nuevo</a>
        </div>
  </fieldset>           