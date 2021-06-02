<?php
include ("db.php");

 $id = $_POST['id_usu'];
 $Nom_usu = $_POST['Nom_usu'];
 $pass_usu = $_POST['pass_usu'];
 $correo = $_POST['correo'];
 $direccion = $_POST['direccion'];
 $telefono = $_POST['telefono'];

//actualizar los Datos
$actualizar = "UPDATE usuario SET Nom_usu ='$Nom_usu', pass_usu ='$pass_usu', correo ='$correo',
direccion ='$direccion',telefono ='$telefono' WHERE id_usu ='$id'";

$resultado=mysqli_query($conexion, $actualizar);

if($resultado) {
  echo"<script>alert('Se pudo actulizar los datos');window.history.go(-1);</script>;";
} else{
  echo"<script>alert('No se pudo actulizar los datos');window.history.go(-1);</script>;";
}
 ?>
