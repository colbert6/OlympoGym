

<h3><?php echo $this->titulo; ?></h3>
 <div class="col-md-8">
<form class="form-horizontal" role="form" id="form_modulo" method="post" action="<?php echo $this->action; ?>">
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">NOMBRE:</label>
    <div class="col-sm-10">
      <input name="nombre" class="form-control" id="nombre" placeholder="Nombre">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">URL:</label>
    <div class="col-sm-10">
        <input name="url" class="form-control" id="url" placeholder="url">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">ORDEN:</label>
    <div class="col-sm-10">
      <input name="orden" class="form-control" id="orden" placeholder="Orden">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">PADRE:</label>
    <div class="col-sm-10"> 
      <input name="password" class="form-control" id="pwd" placeholder="Enter password">
      <i class='fa fa-dashboard'></i>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">ICONO:</label>
    <div class="col-sm-10"> 
      <select class="form-control">
          <option value="fa fa-lock"><i class='fa fa-dashboard'>Hola</i></option>
        <option value="fa fa-lock"><i class='fa fa-dashboard'></i></option>
        <option value="fa fa-lock"><i class="fa fa-lock"></i></option>
        <option value="fa fa-lock"><i class="fa fa-lock"></i></option>
      </select>
    </div>
  </div>
  
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</div>