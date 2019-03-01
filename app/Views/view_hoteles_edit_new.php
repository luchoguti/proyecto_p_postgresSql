<form class="form-horizontal" action="index.php?controller=Hoteles&action=guardar_registro_hotel" method="post">
    <input type="hidden" name="txt_id" value="<?php echo ($data[0]['id_hotel']!=0)?$data[0]['id_hotel']:"0"; ?>">
    <fieldset>
    <!-- Form Name -->
    <legend>Registration Hoteles</legend>

    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Nombre Hotel:</label>  
      <div class="col-md-4">
        <input name="nombre_ho" type="text" placeholder="Nom.Hotel" class="form-control input-md" required="" value="<?php echo $data[0]['nombre_ho'] ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Direccion de Hotel</label>  
      <div class="col-md-4">
        <input name="direccion_ho" type="text" placeholder="Direccion" class="form-control input-md" required="" value="<?php echo $data[0]['direccion_ho'] ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Email</label>  
      <div class="col-md-4">
        <input name="email_ho" type="email" placeholder="Direccion" class="form-control input-md" required="" value="<?php echo $data[0]['email_ho'] ?>">
      </div>
    </div>
    <?php if(isset($data[0]['id_cliente'])){?>
    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Fecha creacion</label>  
      <div class="col-md-4">
      <b> <?php echo $data[0]['fecha_creacion'];  ?></b>
      </div>
    </div>
    <?php } ?>
    <!-- Button (Double) -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="button1id"></label>
      <div class="col-md-8">
        <button id="button1id" name="button1id" class="btn btn-success">Guardar</button>
      </div>
    </div>

    </fieldset>
</form>