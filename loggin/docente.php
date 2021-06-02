<?php
include("db.php");
session_start();
if(!isset($_SESSION["usuario"])){
header("location:index.php");
}
$iduser=$_SESSION['usuario'];

$sql="SELECT id_usu, Nom_usu FROM usuario WHERE id_usu = '$iduser' ";
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
    <h1>Bienvenidos Docente</h1>
    <?php
    echo utf8_decode($row['id_usu']);
    echo utf8_decode($row['Nom_usu']);
    echo utf8_decode($row['pass_usu']);
    echo utf8_decode($row['correo']);
    echo utf8_decode($row['direccion']);
    echo utf8_decode($row['telefono']);
     ?>
    <button type="button" name="Cerrar Sesion "> <a href="cierre.php ">Cerrar Sesion</a> </button>
  </body>
</html>
