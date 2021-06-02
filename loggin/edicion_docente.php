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
  </head>
  <body>
    <form class="container-table container-table--edit" action="procesar-edicion.php" method="post">
      <div class="table__title"> Datos de usuario </div>
      <div class="table__header"> Información </div>
      <div class="table__header"> Operación </div>
      <input type="hidden" class="table__item" name="id_usu" value="<?php echo utf8_decode($row['id_usu']); ?>">
      <input type="text" class="table_input" name="Nom_usu" value="<?php echo utf8_decode($row['Nom_usu']); ?>">
      <input type="text" class="table_input" name="pass_usu" value="<?php echo utf8_decode($row['pass_usu']); ?>">
      <input type="text" class="table_input" name="correo" value="<?php echo utf8_decode($row['correo']); ?>">
      <input type="text" class="table_input" name="direccion" value="<?php echo utf8_decode($row['direccion']); ?>">
      <input type="text" class="table_input" name="telefono" value="<?php echo utf8_decode($row['telefono']); ?>">
        <input type="submit" name="actulizar" value="Actualizar" class="container__submit container__submit--actulizar">
    </form>
    <button type="button" name="Volver1"> <a href="docente.php">Volver</a> </button>
  </body>
</html>
