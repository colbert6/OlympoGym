

                
                  
             
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
                <td><?php echo $this->datos[$i]['id_modulo'] ?></td>
                <td><?php echo $this->datos[$i]['nombre'] ?></td>
                <td><?php echo $this->datos[$i]['url'] ?></td>
                <td><?php echo $this->datos[$i]['estado'] ?></td>
                <td><?php echo $this->datos[$i]['orden'] ?></td>
                <td><?php echo $this->datos[$i]['modulo_padre'] ?></td>
                <td><?php echo "<i class='".$this->datos[$i]['icono']."'>" ?></td>
               
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
            