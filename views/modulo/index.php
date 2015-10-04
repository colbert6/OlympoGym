

                
                  
             
<?php if (isset($this->datos) && count($this->datos)) { ?>
    
    <h3>Lista</h3>
    
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
            