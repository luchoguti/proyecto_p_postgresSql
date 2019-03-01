<div class="container" style="margin-top:88px">
    <div>
        <h2>Registro de Clientes</h2>
    </div>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nombre Cliente</th>
                    <th>Numero Identifacion</th>
                    <th>Direccion</th>
                    <th>Email</th>
                    <th>Telefono</th>
                    <th>Accion</th>
                    <th><a type="button" class="btn btn-info" href="index.php?controller=Clientes&action=editNewClientes"> <span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span></a></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($query_select as $data): ?>
                <tr>
                    <td><?php echo $data['nombre_cl'];?></td>
                    <td><?php echo $data['num_ti_cl']?></td>
                    <td><?php echo $data['direccion_cl']?></td>
                    <td><?php echo $data['email_cl'];?></td>
                    <td><?php echo $data['telefono_cl'];?></td>
                     <!--c=controller a=accion o funcion del controller-->
                    <td><a type="button" class="btn btn-success" href="index.php?controller=Clientes&action=editNewClientes&_id=<?php echo $data['id_cliente']; ?>">Editar</a> <a type="button" class="btn btn-danger" href="#" onclick="eliminarIttem('Clientes','deleteClientes',<?php echo $data['id_cliente']; ?>);">Eliminar</button></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>