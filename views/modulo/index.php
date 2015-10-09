
<ol class="breadcrumb">
  <li><a href="<?php echo BASE_URL?>index"  >Inicio</a></li>
  <li><a href="<?php echo BASE_URL?>modulo" >Modulos</a></li>
  <li class="active"><?php echo $this->titulo; ?></li>
</ol>
                  
 <fieldset>
    <legend><?php echo $this->titulo; ?></legend>
 
<?php if (isset($this->datos) && count($this->datos)) { ?>
    
    <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>URL</th>
                <th>ESTADO</th>
                <th>ORDEN</th>
                <th>PADRE</th>
                <th>ICONO</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
         <tbody>
            <?php for ($i = 0; $i < count($this->datos); $i++) { ?>
            <tr>
                <td><?php echo $this->datos[$i]['ID_MODULO'] ?></td>
                <td><?php echo $this->datos[$i]['NOMBRE'] ?></td>
                <td><?php echo $this->datos[$i]['URL'] ?></td>
                <td><?php echo $this->datos[$i]['ESTADO'] ?></td>
                <td><?php echo $this->datos[$i]['ORDEN'] ?></td>
                <td><?php echo $this->datos[$i]['MODULO_PADRE'] ?></td>
                <td><?php echo "<i class='".$this->datos[$i]['ICONO']."'>" ?></td>
                <td>
                    <div class="btn-group" role="group" aria-label="...">
                        <a class="btn btn-success" href="<?php echo BASE_URL."modulo/editar/".$this->datos[$i]['ID_MODULO']?>">
                            <i class="fa fa-pencil fa-fw"></i> Editar
                        </a>
                        <a class="btn btn-danger" href="<?php echo BASE_URL."modulo/eliminar/".$this->datos[$i]['ID_MODULO']?>">
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
        <a class="btn btn-primary" href="<?php echo BASE_URL?>modulo/nuevo" class="k-button">Nuevo</a>
    <?php } ?>
        
        <div class="btn-group">
        <a class="btn btn-primary" href="<?php echo BASE_URL?>modulo/nuevo" class="k-button">Nuevo</a>
        </div>
  </fieldset>           