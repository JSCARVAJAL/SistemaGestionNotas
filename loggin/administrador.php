<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
  </head>
  <body>
    <?php
session_start();
if(!isset($_SESSION["usuario"])){
header("location:index.php");
}
     ?>
    <h1>Bienvenidos</h1>
    <button type="button" name="Cerrar Sesion "> <a href="cierre.php ">Cerrar Sesion</a> </button> 
  </body>
</html>
