<div class="container">
<div class="page-header">
<h1>Crear PDF dinámico y enviar adjunto por Email</h1>      
</div>
<?php
if ($msgerror) {
?>
<div class="alert alert-danger"><?php echo $msgerror; ?></div>
<?php } else if ($msgsuccess) { ?>
<div class="alert alert-success"><?php echo $msgsuccess; ?></div>
<?php } ?>

<div class="form"> 
<form class="form-horizontal" action="" method="post">

<div class="form-group">
  <label class="control-label col-sm-2" for="mailto">Email A:</label>
  <div class="col-sm-10">
      <input type="email" class="form-control" id="mailto" placeholder="Ingrese Email A" name="mailto" value="<?php echo $_POST['mailto']; ?>">
  </div>
</div>

<div class="form-group">
  <label class="control-label col-sm-2" for="mailfrom">Mail De:</label>
  <div class="col-sm-10">
      <input type="email" class="form-control" id="mailfrom" placeholder="Ingrese Email De" name="mailfrom" value="<?php echo $_POST['mailfrom']; ?>">
  </div>
</div>

<div class="form-group">
  <label class="control-label col-sm-2" for="">Asunto Email:</label>
  <div class="col-sm-10">
      <input type="text" class="form-control" id="mailsubject" placeholder="Ingrese Asunto Email" name="mailsubject" value="<?php echo $_POST['mailsubject']; ?>">
  </div>
</div>

<div class="form-group">
  <label class="control-label col-sm-2" for="firstname">Nombres:</label>
  <div class="col-sm-10">
      <input type="text" class="form-control" id="firstname" placeholder="Ingrese Nombres" name="firstname" value="<?php echo $_POST['firstname']; ?>">
  </div>
</div>

<div class="form-group">
  <label class="control-label col-sm-2" for="lastname">Apellidos:</label>
  <div class="col-sm-10">
      <input type="text" class="form-control" id="lastname" placeholder="Ingrese Apellidos" name="lastname" value="<?php echo $_POST['lastname']; ?>">
  </div>
</div> 


<div class="form-group">
  <label class="control-label col-sm-2" for="description">Descripcion:</label>
  <div class="col-sm-10">
      <textarea placeholder="Ingrese Descripcion" class="form-control" id="description"  name="description" style=" height: 268px;"><?php echo $_POST['description']; ?></textarea>
  </div>
</div> 

<div class="form-group">        
  <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success">Crear y Enviar PDF</button>
  </div>
</div>
</form>
</div>

</div>