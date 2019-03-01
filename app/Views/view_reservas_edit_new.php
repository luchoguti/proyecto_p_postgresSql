<form class="form-horizontal" action="index.php?controller=Reservas&action=guardar_registro" method="post">
    <input type="hidden" name="txt_id" value="<?php echo ($data[0]['id_reserva']!=0)?$data[0]['id_reserva']:"0"; ?>">
    <fieldset>
    <!-- Form Name -->
    <legend>Registration Reservas</legend>

     <!-- Text input-->
    <?php if(isset($data[0]['id_reserva'])){?>
    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Numero de Reserva</label>  
      <div class="col-md-4">
      <b> <?php echo $data[0]['id_reserva'];  ?></b>
      </div>
    </div>
    <?php } ?>
    <div class="form-group">
        <label class="col-md-4 control-label" for="cliente">Cliente:</label>
        <div class="col-md-4">
          <select name="sel_cliente" class="form-control" required="">
            <option value="0"> -- Selecciona -- </option>
            <?php foreach ($query_clientes as $row):?>
            <option value="<?php echo $row['id_cliente']; ?>" <?php if($row['id_cliente']==$data[0]['id_cliente']){echo 'selected';} ?>><?php echo $row['nombre_cl']; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-4 control-label" for="hotel">Hotel:</label>
        <div class="col-md-4">
          <select name="sel_hotel" class="form-control" required="">
            <option value="0"> -- Selecciona -- </option>
            <?php foreach ($query_hoteles as $row):?>
            <option value="<?php echo $row['id_hotel']; ?>" <?php if($row['id_hotel']==$data[0]['id_hotel']){echo 'selected';} ?>><?php echo $row['nombre_ho']; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label" for="tipo_acomodacion">Tipo Acomodacion:</label>
        <div class="col-md-4">
          <select name="sel_tipo_acomodacion" class="form-control" required="">
            <option value="0"> -- Selecciona -- </option>
            <?php foreach ($query_tipo_acomodacion as $row):?>
            <option value="<?php echo $row['id_tipo_acomod']; ?>" <?php if($row['id_tipo_acomod']==$data[0]['id_tipo_acomod']){echo 'selected';} ?>><?php echo $row['descripcion_tipo_acomod']; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Cant. Personas</label>  
      <div class="col-md-4">
        <input name="text_cantp_control" type="text" placeholder="Cant.Personas" class="form-control input-md" required="" value="<?php echo $data[0]['cantidad_personas_reserva'] ?>">
      </div>
    </div>
    <?php if(isset($data[0]['id_reserva'])){?>
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