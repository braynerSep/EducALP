<div class="card">
    <div class="card-header">
        Agregar empleado
    </div>
    <div class="card-body">
        

        <form action="" method="post">
        
        <div class="mb-3">
          <label for="id" class="form-label">ID:</label>
          <input readonly type="text"
            class="form-control"  value="<?php echo $usuario->id_user; ?>" name="id" id="id" aria-describedby="helpId" placeholder="ID usuario">
          
        </div>

        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre</label>
          <input type="text"
            class="form-control" value="<?php echo $usuario->nombre; ?>" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre del empleado">
         
        </div>
        <div class="mb-3">
          <label for="apellidos" class="form-label">Apellidos</label>
          <input type="text"
            class="form-control" value="<?php echo $usuario->apellido; ?>" name="apellido" id="apellido" aria-describedby="helpId" placeholder="Apellido del empleado">
          
        </div>
        <div class="mb-3">
          <label for="documento" class="form-label">Documento</label>
          <input type="number"
            class="form-control" value="<?php echo $usuario->documento; ?>" name="documento" id="documento" aria-describedby="helpId" placeholder="Documento del empleado">
          
        </div>
        <div class="mb-3">
          <label for="clave_us" class="form-label">clave</label>
          <input type="text"
            class="form-control" value="<?php echo $usuario->clave_us; ?>" name="clave_us" id="clave_us" aria-describedby="helpId" placeholder="clave">
          
        </div>

        <input name="" id="" class="btn btn-success" type="submit" value="Agregar empleado">
        <a href="?controlador=empleados&accion=inicio "class="btn btn-primary">Cancelar</a>

        </form>

    </div>
</div>