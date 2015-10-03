<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12 main-chart">
                  
                  	
					

<?php if (isset($this->datos) && count($this->datos)) { ?>
<p><h3>Lista de Modulos</h3></p>
    <p>
        <select class="list" id="filtro">
            <option value="0">Descripcion</option>
            <option value="1">Modulo Padre</option>
        </select>
        <input type="text" class="k-textbox" id="buscar">
        <button type="button" class="k-button" id="btn_buscar"><span class="k-icon k-i-search"></span></button>
        <a href="<?php echo BASE_URL?>modulos/nuevo" class="k-button">Nuevo</a>
    </p>
    <div id="grilla">
    <table border="1" class="tabgrilla">
        <tr>
            <th>Codigo</th>
            <th>Descripcion</th>
            <th>Url</th>
            <th>Modulo Padre</th>
            <th>Acciones</th>
        </tr>

        <?php for ($i = 0; $i < count($this->datos); $i++) { ?>
            <tr>
                <td><?php echo $this->datos[$i]['id_modulo'] ?></td>
                <td><?php echo $this->datos[$i]['nombre'] ?></td>
                <td><?php echo $this->datos[$i]['url'] ?></td>
                <td><?php echo $this->datos[$i]['estado'] ?></td>
                <td>
                    <a href="javascript:void(0)" onclick="editar('<?php echo BASE_URL?>modulos/editar/<?php echo $this->datos[$i]['id_modulo'] ?>')" class="imgedit">a</a>
                    <a href="javascript:void(0)" onclick="eliminar('<?php echo BASE_URL?>modulos/eliminar/<?php echo $this->datos[$i]['id_modulo'] ?>')" class="imgdelete">a</a>
                </td>
            </tr>
        <?php } ?>
    </table>
    </div>
    <?php } else { ?>
        <p>No hay modulos</p>
        <a href="<?php echo BASE_URL?>modulos/nuevo" class="k-button">Nuevo</a>
    <?php } ?>
        
        
            </div><!-- /col-lg-12 END SECTION MIDDLE -->
        </div><!--/row -->
    </section>
</section>