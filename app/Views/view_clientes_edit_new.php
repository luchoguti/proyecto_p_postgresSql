<form class="form-horizontal" action="index.php?controller=Clientes&action=guardar_registro_cliente" method="post">
    <input type="hidden" name="txt_id" value="<?php echo ($data[0]['id_cliente']!=0)?$data[0]['id_cliente']:"0"; ?>">
    <fieldset>
    <!-- Form Name -->
    <legend>Registration Clientes</legend>

    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Nombre:</label>  
      <div class="col-md-4">
        <input name="text_nom_cl_control" type="text" placeholder="Nom.Cliente" class="form-control input-md" required="" value="<?php echo $data[0]['nombre_cl'] ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Numero Identificacion:</label>  
      <div class="col-md-4">
        <input name="text_n_ident_cl_control" type="text" placeholder="n.ident" class="form-control input-md" required="" value="<?php echo $data[0]['num_ti_cl'] ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Direccion de Contacto</label>  
      <div class="col-md-4">
        <input name="text_direccion_cl_control" type="text" placeholder="Direccion" class="form-control input-md" required="" value="<?php echo $data[0]['direccion_cl'] ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Email</label>  
      <div class="col-md-4">
        <input name="text_email_cl_control" type="email" placeholder="Direccion" class="form-control input-md" required="" value="<?php echo $data[0]['email_cl'] ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Telefono</label>  
      <div class="col-md-4">
        <input name="text_telefono_cl_control" type="text" placeholder="Telefono" class="form-control input-md" required="" value="<?php echo $data[0]['telefono_cl'] ?>">
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