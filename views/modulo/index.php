
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
                <th>ORDEN</th>
                <th>ESTADO</th>
                <th>PADRE</th>
                <!--th>ICONO</th-->
                <th>ACCIONES</th>
            </tr>
        </thead>
         <tbody>
            <?php for ($i = 0; $i < count($this->datos); $i++) { ?>
            <tr>
                <td><?php echo ($i+1);//id ?></td>
                <td><?php echo $this->datos[$i][1]//nombre ?></td>    
                <td><?php if($this->datos[$i][2]!='0'){ //url
                    echo $this->datos[$i][2];
                } else{
                    echo "sin url";
                } ?></td>
                <td><?php echo $this->datos[$i][3]//orden ?></td>
                <td><?php if($this->datos[$i][4]=='1'){
                    echo 'Activo';
                } else{
                    echo 'Inactivo';
                } ?></td>
                <td><?php echo $this->datos[$i][6]//padre ?></td>
                <!--td><?php //echo "<i class='".$this->datos[$i]['ICONO']."'>" ?></td-->
                <td>
                    <div class="btn-group" role="group" aria-label="...">
                        <a class="btn btn-success" href="<?php echo BASE_URL."modulo/editar/".$this->datos[$i][0]?>">
                            <i class="fa fa-pencil fa-fw"></i> Editar
                        </a>
                        <a class="btn btn-danger" href="<?php echo BASE_URL."modulo/eliminar/".$this->datos[$i][0]?>">
                            <i class="fa fa-trash-o fa-lg"></i> Borrar
                        </a>
                    </div>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <div class="btn-group">
        <a class="btn btn-primary" href="modulo/nuevo" class="k-button">Nuevo</a>
        </div>
          
    <?php } else { ?>
    <p>No hay modulos</p>
        <a class="btn btn-primary" href="<?php echo BASE_URL?>modulo/nuevo" class="k-button">Nuevo</a>
    <?php } ?>
        
  </fieldset>           