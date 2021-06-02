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
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
  </head>
  <body>
    <h1>Bienvenidos</h1>
    <div class="container-table container-table--edit">
      <div class="table__title"> Datos de usuario </div>
      <div class="table__header"> Información </div>
      <div class="table__header"> Operación </div>

      <div class="table__item"> <?php echo utf8_decode($row['id_usu']); ?></div>
      <div class="table__item"> <?php echo utf8_decode($row['Nom_usu']); ?></div>
      <div class="table__item"> <?php echo utf8_decode($row['pass_usu']);  ?></div>
      <div class="table__item"> <?php echo utf8_decode($row['correo']); ?></div>
      <div class="table__item"> <?php echo utf8_decode($row['direccion']); ?></div>
      <div class="table__item"> <?php echo utf8_decode($row['telefono']); ?></div>
    </div>
    <button type="button" name="editar"> <a href="edicion_administrador.php?id=<?php echo $row["id_usu"]; ?>">Editar</a> </button>
    <button type="button" name="Cerrar Sesion "> <a href="cierre.php ">Cerrar Sesion</a> </button>
  </body>
</html>
