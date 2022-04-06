<!DOCTYPE html>
<html>
    <head>
        <title>crud imagenes</title>
    </head>
    <body bgcolor="#848484">>
        
        
        <center><br/><br/><br/> <!-- los "<br/>" son saltos de linea -->
        <h2>INSERTAR IMAGEN</h2>
            <form action="proceso_guardar.php" method="POST" enctype="multipart/form-data">   <!--"multipart/form-data" para poder trabajar archivos -->
                <input type="text" required name="nombre" placeholder="Nombre..." value=""/><br/><br/>
                <input type="file" required name="Imagen"/><br/><br/>
                <input type="submit" value="Aceptar"/>
            </form>
        </center>
    </body>
</html>