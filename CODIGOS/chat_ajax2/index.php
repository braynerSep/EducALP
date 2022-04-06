<?php
    include "db.php";

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Chat</title>
    <link rel="stylesheet" type="text/css" href="estilosChat.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mukta+Vaani:wght@200&display=swap" rel="stylesheet">
    
    <script type="text/javascript">
        function ajax(){
            var req = new XMLHttpRequest();

            req.onreadystatechange = function(){
                if (req.readyState == 4 && req.status == 200){
                    document.getElementById('chat').innerHTML = req.responseText;
                }
            }

            req.open('GET', 'chat.php', true);
            req.send();

        }

        //linea que hace que refresque la pagina cada segundo
        setInterval(function(){ajax();},1000);

    </script>
    
    </head>
    <body onload="ajax();">

        <div id="contenedor">
            <div id="caja-chat">
                <div id="chat"></div>
            </div>
            <form method="POST" action="index.php">
                <input type="text" name="nombre" placeholder="Ingresa tu nombre">
                <textarea name="mensaje" placeholder="Ingresa tu mensaje"></textarea>
                <input type="submit" name="enviar" values="Enviar">
            </form>
            <?php
                if (isset($_POST['enviar'])) {
                    $nombre = $_POST['nombre'];
                    $mensaje = $_POST['mensaje'];

                    $consulta = "INSERT INTO chat (nombre, mensaje) VALUES ('$nombre','$mensaje')";
                    $ejecutar = $conexion->query($consulta);

                    if($ejecutar){
                        //echo "si se ejecuto";
                    }
                    else{
                        echo "no se ejecuto";
                    } 
                }
            ?>
        </div>
    </body>
</html>