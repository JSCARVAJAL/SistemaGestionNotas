<?php
include ("db.php");
 $id_usu= $_POST['id_usu'];
 $Nom_usu= $_POST['Nom_usu'];
 $pass_usu= $_POST['pass_usu'];
 $correo= $_POST['correo'];
 $direccion= $_POST['direccion'];
 $telefono= $_POST['telefono'];

//actualizar los Datos
$actualizar = "UPDATE usuarios SET Nom_usu ='$id_usu', pass_usu ='$pass_usu', correo ='$correo',
direccion ='$direccion',telefono ='$telefono' WHERE id_usu ='$id_usu'";

$resultado=mysqli_query($conexion, $actualizar);

if($resultado){
  echo "<scrip>alert('se han actualizado los cambios correctamente, actualizace la p\u80E1gina para ver los
  cambios'); window.locatio='/edicion.php'</script>";
} else{
  echo"<script>alert('No se pudo actulizar los datos');window.locatio='/edicion.php'</script>;";
}
 ?>
