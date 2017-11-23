<!DOCTYPE html>
<html lang=es>

  <head>
    <title>Administrador</title>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="Fotos/entregon.ico" ><!--logo-->
    <link rel="icon" type="image/gif" href="Fotos/entregonani.gif" ><!--Animado-->
    <link rel="stylesheet" type="text/css" href="CSS/entregon.css">
    <link rel="stylesheet" type="text/css" href="inicio.css">
  </head>

<body>
  <header id="top">
    <img src="Fotos/3.png" id="entregon-top">
    <img src="Fotos/asd.png" id="fondo">
  </header>

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
    <input type="submit" value="Ingresar" />
  </form>
</body>
</html>