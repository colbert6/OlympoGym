<h2><?php if($this->mensaje) echo $this->mensaje; ?></h2>

<p>&nbsp;</p>

<a href="<?php echo BASE_URL; ?>">Ir al Inicio</a> | 
<a href="javascript:history.back(1)">Volver a la p&aacute;gina anterior</a>

<?php if(!Sesion::get('autenticado')): ?>

| <a href="<?php echo BASE_URL . 'login'; ?>">Iniciar Sesi&oacute;n</a>

<?php endif; ?>