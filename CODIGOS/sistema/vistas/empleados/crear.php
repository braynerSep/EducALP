<div class="card">
    <div class="card-header">
        Agregar empleado
    </div>
    <div class="card-body">
        

        <form action="" method="post">

        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre</label>
          <input  required type="text"
            class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre del empleado">
         
        </div>
        <div class="mb-3">
          <label for="apellido" class="form-label">Apellidos</label>
          <input required type="text"
            class="form-control" name="apellido" id="apellido" aria-describedby="helpId" placeholder="Apellido del empleado">
          
        </div>
        <div class="mb-3">
          <label for="documento" class="form-label">Documento</label>
          <input required type="number"
            class="form-control" name="documento" id="documento" aria-describedby="helpId" placeholder="Documento del empleado">
          
        </div>
        <div class="mb-3">
          <label for="clave_us" class="form-label">Clave_us</label>
          <input required type="text"
            class="form-control" name="clave_us" id="clave_ud" aria-describedby="helpId" placeholder="Clave del usuario">
          
        </div>
        <input name="" id="" class="btn btn-success" type="submit" value="Agregar Usuario">
        <a href="?controlador=empleados&accion=inicio "class="btn btn-primary">Cancelar</a>

        </form>

    </div>
</div>