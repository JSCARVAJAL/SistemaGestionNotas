<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>login</title>
    <link rel="stylesheet" href="css/login.css">
  </head>
  <body>
    <form action="validar.php" method="post">
      <div class="divFo">
      <h1>Sistema de login</h1>
      <div class="divUser">
     <label for="email" id="email">Usuario: <input type="text" placeholder="usuario@sistema.com" name="usuario"  id="email"> </label>
    </div>
     <div class="divFlex"></div>
      <div class="divContraseña">

     <label for="contrasenia" id="contrasenia">Contraseña: <input type="password" placeholder="**********" name="contraseña" id="contraseña"> </label>

    </div>
    <button class="button" type="submit">Ingresar</button>
    </div>
    </form>
  </body>
</html>
