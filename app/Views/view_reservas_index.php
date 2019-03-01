<div class="container" style="margin-top:88px">
    <div>
        <h2>Registro de Reservas</h2>
    </div>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Numero de Reserva</th>
                    <th>Nombre Cliente</th>
                    <th>Identifacion Cliente</th>
                    <th>Hotel</th>
                    <th>Cant. Per. Reservadas</th>
                    <th>Acomodacion</th>
                    <th>Accion</th>
                    <th><a type="button" class="btn btn-info" href="index.php?controller=Reservas&action=editNewReservas"> <span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span></a></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($query_select as $data): ?>
                <tr>
                    <td><?php echo $data['id_reserva'];?></td>
                    <td><?php echo $data['nombre_cl'];?></td>
                    <td><?php echo $data['num_ti_cl']?></td>
                    <td><?php echo $data['nombre_ho']?></td>
                    <td><?php echo $data['cantidad_personas_reserva'];?></td>
                    <td><?php echo $data['descripcion_tipo_acomod'];?></td>
                     <!--c=controller a=accion o funcion del controller-->
                    <td><a type="button" class="btn btn-success" href="index.php?controller=Reservas&action=editNewReservas&_id=<?php echo $data['id_reserva']; ?>">Editar</a> <a type="button" class="btn btn-danger" href="#" onclick="eliminarIttem('Reservas','deleteReservas',<?php echo $data['id_reserva']; ?>);">Eliminar</button></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>