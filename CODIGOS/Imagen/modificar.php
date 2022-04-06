<!DOCTYPE html>
<html>
    <head>
        <title>crud imagenes</title>
    </head>
    <body bgcolor="#848484">
    <?php
        include("conexion.php");

        $id_imagen = $_REQUEST['id_imagen'];

        $query = "SELECT * FROM tabla_imagen WHERE id_imagen ='$id_imagen' ";
        $resultado = $conexion->query($query);
        $row = $resultado->fetch_assoc();
    ?>
        <center><br/><br/><br/> <!-- los "<br/>" son saltos de linea -->
        <h2>EDITAR PERFIL</h2>
            <form action="proceso_modificar.php?id_imagen=<?php echo $row['id_imagen']?>" method="POST" enctype="multipart/form-data">   <!--"multipart/form-data" para poder trabajar archivos -->
                <input type="text" required name="nombre" placeholder="Nombre..." value="<?php echo $row['nombre'];?>"/><br/><br/>
                <img height="100px" src="data:image/jpg;base64,<?php echo base64_encode($row['Imagen']);?>"/> <br/><br/>
                <input type="file" required name="Imagen"/><br/><br/>
                <input type="submit" value="Aceptar"/>
            </form>
        </center>
    </body>
</html>