<!DOCTYPE html>
<html>
    <head>
        <title>mostrar imagen</title>
    </head>
    <body bgcolor="#848484">
        <center>
        <h2>MOSTAR INFO</h2>
            <table border="2">
                <thead>
                    <tr>
                        <th colspan="5"><a href="index.php">Nuevo</a></th>
                    </tr>
                    <tr>
                        <th>id</th>
                        <th>nombre</th>
                        <th>imagen</th>
                        <th colspan="2"> operaciones</th>
                    </tr>
                    
                    <tbody>
                        <?php
                        include("conexion.php");

                        $query = "SELECT * FROM tabla_imagen";
                        $resultado = $conexion->query($query);
                        while($row = $resultado->fetch_assoc()){
                        ?>
                        <tr>
                            <td><?php echo $row['id_imagen'];?></td>
                            <td><?php echo $row['nombre'];?></td>
                            <td><img height="50px" src="data:image/jpg;base64,<?php echo base64_encode($row['Imagen']);?>"/></td>
                            <td><a href="modificar.php?id_imagen=<?php echo $row['id_imagen']; ?>">Modificar</a></td>
                            <td><a href="eliminar.php?id_imagen=<?php echo $row['id_imagen']; ?>">Eliminar</a></td>
                        </tr>

                        <?php
                            }
                        ?>
  
                    </tbody>
                </thead>
            </table>
        </center>
    </body>
</html>
