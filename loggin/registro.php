<?php
include("db.php");
$usuarios= "SELECT * FROM usuario";
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="container-table">
      <div class="table__title">
        Informacion del Usuario
      </div>
      <div class="table__header"> Nombre </div>
      <div class="table__header"> Correo </div>
      <div class="table__header"> Direccion </div>
      <div class="table__header"> Telefono </div>
      <div class="table__header"> Contraseña </div>
      <?php $resultado=mysqli_query($conexion,$usuarios);
        while($row=mysqli_fetch_assoc($resultado)) { ?>
          <div class="table__item"><?php echo $row["nom_usuario"]; ?> </div>
          <div class="table__item"><?php echo $row["correo"]; ?> </div>
          <div class="table__item"><?php echo $row["direccion"]; ?> </div>
          <div class="table__item"><?php echo $row["telefono"]; ?> </div>
          <div class="table__item"><?php echo $row["pass_usu"]; ?> </div>
        <?php } ?>
    </div>
  </body>
</html>
