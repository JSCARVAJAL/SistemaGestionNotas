<?php
include("db.php");
session_start();
if(!isset($_SESSION["usuario"])){
header("location:index.php");
}
$iduser=$_SESSION['usuario'];

$sql="SELECT * FROM usuario WHERE id_usu = '$iduser' ";
$resultado = $conexion->query($sql);
$row = $resultado->fetch_assoc();

$id=$_GET["id"];
$usuarios="SELECT * FROM usuario WHERE id_usu='$id'";
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Edicion</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/estiloTabla.css">
  </head>
  <body>
    <form  action="procesar-edicion.php" method="post">
      <div class="divAdmin">


     
      <div> Datos de usuario </div>
      <div> Información </div>
  
    
 
      <br><br><br><br>
      
      <label><a>ID: </a></label>
      <input id="id_usu" type="hidden" class="table__item" name="id_usu" value="<?php echo utf8_decode($row['id_usu']); ?>">
      
    
      <br><br>
      <label><a>Nombre: </a></label>
      <input type="text" class="table_input" name="Nom_usu" value="<?php echo utf8_decode($row['Nom_usu']); ?>">
      
      <br><br><label><a>Contraseña: </a></label>
      
      <input type="text" class="table_input" name="pass_usu" value="<?php echo utf8_decode($row['pass_usu']); ?>">
      <br><br><label><a>Email: </a></label>
      <input type="text" class="table_input" name="correo" value="<?php echo utf8_decode($row['correo']); ?>">
      <br><br><label><a>Dirección: </a></label>
      <input type="text" class="table_input" name="direccion" value="<?php echo utf8_decode($row['direccion']); ?>">
      <br><br><label><a>Telefono: </a></label>
      <input type="text" class="table_input" name="telefono" value="<?php echo utf8_decode($row['telefono']); ?>">
      
<div class="spaceButton">
  <br><br><br><br>

        <input  type="submit" name="actulizar" value="Actualizar" class="buttons">
        <button class="buttons" type="button" name="Volver2"> <a style="text-decoration: none;"  href="administrador.php">Volver</a> </button>
      </div>
    </form>
 
  </div>
  </body>
</html>
