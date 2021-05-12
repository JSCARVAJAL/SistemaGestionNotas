<?php
$usuario= $_POST['usuario'];
$contraseña= $_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

$conexion=mysqli_connect("localhost","root","","academico");

$consulta="SELECT*FROM usuario where Nom_usu='$usuario' and pass_usu='$contraseña' ";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);
if($filas['fk_rol']==1){//administrador
  header("location:administrador.php");
}else
if($filas['fk_rol']==2){//Docente
  header("location:docente.php");
}else
if($filas['fk_rol']==3){
  header("location:estudiante.php");
}

else{
  ?>
  <?php
  include("index.php");
  ?>
  <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
