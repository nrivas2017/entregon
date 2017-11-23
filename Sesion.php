<!DOCTYPE html>
<html>
<head>
  <title>Entregon</title>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="Fotos/entregon.ico" ><!--logo-->
  <link rel="icon" type="image/gif" href="Fotos/entregonani.gif" ><!--Animado-->
  <link rel="stylesheet" type="text/css" href="sesion.css">
</head>
<body>

  <form action="validar.php" method="POST">
    <h2>Iniciar Sesión Administrador</h2>
    <input type="text" placeholder="&#128272; Usuario" name="user"/>
    <input type="password" placeholder="&#128272; Constraseña" name="pass"/>
    <div id='error'>
      <?php
      if(isset($_GET['error'])){
          $error = $_GET['error'];
          echo $error;
         }
      ?>
    </div>
    <input type="submit" value="Ingresar"/>
  </form>

</body>
</html>