
<h3><?php echo $this->titulo; ?></h3>

<form id="form_modulo" method="post" action="<?php echo $this->action; ?>">
    <input type="hidden" name="guardar" value="1" />
    <p>Titulo:<br />
    <input type="texto" name="titulo" value="<?php if(isset($this->datos['titulo'])) echo $this->datos['titulo']; ?>" /></p>
    
    <p>Cuerpo:<br />
    <textarea name="cuerpo"><?php if(isset($this->datos['cuerpo'])) echo $this->datos['cuerpo']; ?></textarea></p>
    
    <p><input type="submit" class="button" value="Guardar" /></p>
</form>
