
<?php
// Se llama a la conexion de la BD
include "conexion.php";
// Se inicia la sesion con la BD
session_start();

?>

<html>




    <head>
        <style>

        body{
        padding: 0;
        font-family: Arial;
        background-image: url(images/fondo_escolar.jpg);



       }    


        #button li {
         display: inline;
         }

           .btn_perfil{
    text-decoration: none;
    padding: 10px;
    font-weight: 600;
    font-size: px;
    color: #ffffff;
    background-color: #1883ba;
    border-radius: 6px;
    border: 2px solid #0016b0;
  }
  .btn_perfil:hover{
    color: #1883ba;
    background-color: #ffffff;
    cursor: pointer;
  }

.barra_busqueda{
  height: 35px;
  width: 230px;

  text-align: center;
  border-style: double; 

}

.fondo_tabla{
    background-color: white;
}

        </style>
    </head>
    <body>
        <center>
          <br>
          <svg width="500" height="75" viewBox="0 0 500 75">
  <text x="0" y="55" style="fill: white; stroke: #000; stroke-width: 3px; font-size: 50px; font-weight: bold; font-family: verdana ">
    Buscar usuarios
  </text>
</svg>
            <br />
             <form action="consulta_usuario.php" method="post"> <!-- con esto se envia el formulario a la misma pagina--> <!-- incio formulario-->
                 <input class="barra_busqueda" type="text" name="buscar" placeholder="Ingrese nombre"> <!-- metodo por el cual se va a bucar a la persona, en este caso nommbre -->
                 <br/>
<br>                 
                 <input class="btn_perfil" type="submit" name="btn_buscar" value="Buscar" /> <!-- boton -->
<br>
                 
             </form>
          <form method="get" action="perfil.php">
             <button class="btn_perfil" type="submit" name="btn_volver">Volver</button>
          </form>  



            <?php
            // Condicional para vereficar que se presione el boton
              if(isset($_POST['btn_buscar'])){ 
                  
            // Variables para llamar al atributo por buscar usuario 
                  $nombre = $_POST['buscar']; 
            // Codigo para buscar los atributos de la tabla usuario
                  $consulta = mysqli_query($conexion,"SELECT * FROM usuarios WHERE nombre LIKE '%$nombre%'") or die ($conexion."Problemas en la consulta"); 
                  
                  ?>
                  <table border="1">

                      <tr bgcolor="lightgreen">
                          <td>Nombre</td>
                          <td>Apellidos</td>
                          <td>Documento</td>
                          <td bgcolor="#cccccc">modificar</td>
                          <td bgcolor="#cccccc">eliminar</td>
                      </tr>
                  <?php
                  // Verificar resultado
                  $numero = mysqli_num_rows($consulta);
                  
                  
                  if($numero > 0){
                      while ($fila = mysqli_fetch_array($consulta)){ // creación de la variable fila sobre los datos que nos va a mostar la tabla 
                ?>
                <tr class="fondo_tabla">
                          <td><?php echo $fila['nombre']; ?></td>
                          <td><?php echo $fila['apellido']; ?></td>
                          <td><?php echo $fila['documento']; ?></td>

                         
                          <td bgcolor="#cccccc">
                             <!-- Formulario de modificar -->
                              <form action="consulta_usuario.php" method="post">
                                 <!-- Campo oculto con la clave primaria del usuario -->
                                  <input type="text" name="id_user" value="<?php echo $fila['id_user']; ?>" readonly hidden />
                                  <!-- Boton para envio de modificar -->
                                  <input type="submit" name="btn_modificar" value="modificar" />
                              </form>
                          </td>
                          <td bgcolor="#cccccc">
                              <form action="codigo_eliminar.php" method="post">
                                  <!-- Campo oculto con la clave primaria del usuario -->
                                  <input type="number" name="id_user" value="<?php echo $fila['id_user']; ?>" readonly hidden/>
                                   <!-- Boton para envio de eliminar -->
                                   <input type="submit" name="btn_eliminar" value="eliminar" >
                              </form>
                          </td>
                      </tr>
                
                <?php         
                          
                      }
                      
                  }                  
              }
            ?>
            </table>
            <?php
            if(isset($_POST['btn_modificar'])){
                
                $id = $_POST['id_user'];
                
                $consulta2 = mysqli_query($conexion,"SELECT * FROM `usuarios` WHERE `id_user` = '$id'") or die ($conexion."Problemas en la consulta");
                
                 // Verificar resultado
                  $numero2 = mysqli_num_rows($consulta2);
                
                 if($numero2 > 0){
                      while ($fila2 = mysqli_fetch_array($consulta2)){
                ?>
                <h2>Modificar Vista de Usuario</h2>
                <br />
            <form action="codigo_modificar.php" method="post">
                <label>Nombres</label><br>
                 <input type="text" name="nombre" value="<?php echo $fila2['nombre']; ?>"  /> <br />
                 <label>Apellidos</label><br>
                 <input type="text" name="apellido" value="<?php echo $fila2['apellido']; ?>" /> <br />
                 <label>Documento</label><br>
                 <input type="text" name="documento" value="<?php echo $fila2['documento']; ?>"  /> <br />
                
                 <br />
                 <input type="text" name="id_user" value="<?php echo $fila2['id_user']; ?>" readonly hidden />
                 <input type="submit" name="btn_modificar_usuario" value="modificar datos" />
             </form>
            
              <?php 
                }
            }
            }
            ?>
            
        </center>
    </body>
</html>
                  