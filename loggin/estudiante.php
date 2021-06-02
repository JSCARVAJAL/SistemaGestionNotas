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
    <link rel="stylesheet" href="css/estiloTabla.css">
  </head>
  <body>

    <div class="container">
    <h1>Bienvenidos Estudiantes</h1>
    
          <table border="1">
        <caption>Datos de usuario</caption>
        <tbody>
          <tr>
            <td>Información</td>
            <th><div class="table__item"> <?php echo utf8_decode($row['id_usu']); ?></div></th>
            <th><div class="table__item"> <?php echo utf8_decode($row['Nom_usu']); ?></div></th>
            <th><div class="table__item"> <?php echo utf8_decode($row['pass_usu']);  ?></div></th>
            <th><div class="table__item"> <?php echo utf8_decode($row['correo']); ?></div></th>
            <th><div class="table__item"> <?php echo utf8_decode($row['direccion']); ?></div></th>
            <th><div class="table__item"> <?php echo utf8_decode($row['telefono']); ?></div></th>
          </tr>
          
        </tbody>
      </table>





      <div class="divButtons">

    <button class="buttons" type="button" name="editar">  <a style="text-decoration: none;" href="edicion.php?id=<?php echo $row["id_usu"]; ?>">Editar</a> </button>
    <button class="buttons" type="button" name="Cerrar Sesion "> <a style="text-decoration: none;" href="cierre.php ">Cerrar Sesion</a> </button>
  </div>
  </div>
  </body>
</html>
