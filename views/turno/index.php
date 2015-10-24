
<ol class="breadcrumb">
  <li><a href="<?php echo BASE_URL?>index"  >Inicio</a></li>
  <li><a href="<?php echo BASE_URL?>turno" >Turno</a></li>
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
                <th>HORA ENTRADA</th>
                <th>HORA SALIDA</th>
                <!--th>ICONO</th-->
                <th>ACCIONES</th>
            </tr>
        </thead>
         <tbody>
            <?php for ($i = 0; $i < count($this->datos); $i++) { ?>
            <tr>
                <td><?php echo ($i+1);//id ?></td>
                <td><?php echo $this->datos[$i]['DESCRIPCION']//nombre ?></td>    
                <td><?php echo $this->datos[$i]['HORA_ENTRADA'];?></td>
                <td><?php echo $this->datos[$i]['HORA_SALIDA']//orden ?></td>
                <td>
                    <div class="btn-group" role="group" aria-label="...">
                        <a class="btn btn-success" href="<?php echo BASE_URL."turno/editar/".$this->datos[$i]['ID_TURNO']?>">
                            <i class="fa fa-pencil fa-fw"></i> Editar
                        </a>
                        <a class="btn btn-danger" href="<?php echo BASE_URL."turno/eliminar/".$this->datos[$i]['ID_TURNO']?>">
                            <i class="fa fa-trash-o fa-lg"></i> Borrar
                        </a>
                    </div>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <div class="btn-group">
        <a class="btn btn-primary" href="turno/nuevo" class="k-button">Nuevo</a>
        </div>
          
    <?php } else { ?>
    <p>NO SE ENCONTRARON DATOS</p>
        <a class="btn btn-primary" href="<?php echo BASE_URL?>turno/nuevo" class="k-button">Nuevo</a>
    <?php } ?>
        
  </fieldset>           