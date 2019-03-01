<div class="container" style="margin-top:88px">
    <div>
        <h2>Registro de Hoteles</h2>
    </div>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nombre Hotel</th>
                    <th>Direccion</th>
                    <th>Email</th>
                    <th>Accion</th>
                    <th><a type="button" class="btn btn-info" href="index.php?controller=Hoteles&action=editNewHoteles"> <span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span></a></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($query_select as $data): ?>
                <tr>
                    <td><?php echo $data['nombre_ho'];?></td>
                    <td><?php echo $data['direccion_ho']?></td>
                    <td><?php echo $data['email_ho'];?></td>
                     <!--c=controller a=accion o funcion del controller-->
                    <td><a type="button" class="btn btn-success" href="index.php?controller=Hoteles&action=editNewHoteles&_id=<?php echo $data['id_hotel']; ?>">Editar</a> <a type="button" class="btn btn-danger" href="#" onclick="eliminarIttem('Hoteles','deleteHoteles',<?php echo $data['id_hotel']; ?>);">Eliminar</button></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>