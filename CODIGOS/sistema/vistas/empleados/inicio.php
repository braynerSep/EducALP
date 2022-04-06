<div class="card">
    <div class="card-header">
    <a name="" id="" class="btn btn-success" href="?controlador=empleados&accion=crear" role="button">Agregar usuarios</a>
    </div>
    <div class="card-body">
    <table class="table table-bordered">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Documento</th>
            <th>Accion</th>
        </tr>
    </thead>
    <tbody>

    <?php foreach ($usuario as $usuario){ ?>
        <tr>
            <td> <?php echo $usuario->nombre;?> </td>
            <td> <?php echo $usuario->apellido;?> </td>
            <td> <?php echo $usuario->documento;?> </td>
            <td> 

            <div class="btn-group" role="group" aria-label="">
                <a href="?controlador=empleados&accion=editar&id=<?php echo $usuario->id_user;?>"class="btn btn-info">Editar</a>
                <a href="?controlador=empleados&accion=borrar&id=<?php echo $usuario->id_user;?> "class="btn btn-danger">Borrar</a>
            </div>
            
 
        </td>
        </tr>
    <?php }?>
        
    </tbody>
</table>


    </div>
 
    </div>
</div>


