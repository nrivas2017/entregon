<!DOCTYPE html>
<html>
<head>
	<title>Entregon</title>
	<meta charset="utf-8">
  <link rel="shortcut icon" href="Fotos/entregon.ico" ><!--logo-->
  <link rel="icon" type="image/gif" href="Fotos/entregonani.gif" ><!--Animado-->
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
      $(document).ready(Principal);

        function Principal(){
          $(".item").click(Busca);
        }

        function Busca(){
          $.ajax({
            url:"php/muestra.php?tipo="+this.id ,
            success: function(datos){
              $('#lista').html(datos)
              }
          })
        }
    </script>
</head>
<body>

	<nav class="navbar navbar-inverse ">
  		<div  id="menu" class="container-fluid">

    		<div class="navbar-header">
      			<a class="navbar-brand" href="index.php"><img  id="logo" src="Fotos/3.png"></a>
    		</div>

   			<ul class="nav navbar-nav">
      			<li><a class="item" id="Promocion" href="#">Promociones</a></li>
				<li><a class="item" id="ComidaCasera" href="#"  >Comida Casera</a></li>
				<li><a class="item" id="Pizza" href="#"  >Pizzas</a></li>
				<li><a class="item" id="Sandwichs" href="#"  >Sandwichs</a></li>
				<li><a class="item" id="Salchipapa" href="#"  >Salchipapas</a></li>
				<li><a class="item" id="ParaBeber" href="#"  >Para beber</a></li></li>
    		</ul>
  		</div>
	</nav>


  <div id="cuerpo">
     <div class="row">
      <div class="col-sm-1"></div>
      <div id="lista" class="scroll col-sm-5">
        <h1>¿Qué vas a Pedir?</h1>
      </div>
      <div class="col-sm-1"></div>
      <div id="carrito" class="col-sm-4">
        <h3>MI PEDIDO</h3>
          <ul id="lista_carrito">
            
          </ul>
          <h2>Subtotal: 0</h2>
      </div>
      <div class="col-sm-1"></div>
    </div> 
  </div>


	<footer><br><br>&copy; 2013-2017 Entregon</footer>

</body>
</html>