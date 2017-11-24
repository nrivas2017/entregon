<?php 
  include_once('clases/producto.php');
  include_once('clases/carrito.php');
  $product = new Product();
  $cart = new Cart();
  if(isset($_GET['action'])){
    switch ($_GET['action']){
      case 'add':
        $cart->add_item($_GET['id'], $_GET['amount']);
      break;
      case 'remove':
        $cart->remove_item($_GET['id']);
      break;
    }
  }
?>
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
    <script type="text/javascript" src="js/functions.js"></script>
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
				  <li><a class="item" id="ParaBeber" href="#"  >Para beber</a></li>
          <li><a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
          <li class="login"><a href="#"><span class="glyphicon glyphicon-user"></span> Iniciar sesión</a></li>
          <li class="login"><a href="#"><span class="glyphicon glyphicon-log-in"></span> Registrarse</a></li>
    		</ul>
  		</div>
	</nav>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <table class="table" border="1px" cellpadding="5px" width="100%">
            <thead class="cartHeader" display="off">
              <tr>
                <th colspan="6">MI CARRITO DE COMPRAS</th>
              </tr>
              <tr>
                <th colspan="3">Total pagar: <?=$cart->get_total_payment();?></th>
                <th colspan="3"><button>Finalizar</button></th>
              </tr>
            </thead>
            <tbody class="cartBody">
              <tr>
                <th>id</th>
                <th>Producto</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Subtotal</th>
                <th>Opcion</th>
              </tr>
              <?=$cart->get_items();?>
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  <div id="cuerpo">
     <div class="row">
      <div class="col-sm-3"></div>
      <div id="lista" class="scroll col-sm-6">
        <h1>¿Qué vas a Pedir?</h1>
      </div>
      
      <div class="col-sm-3"></div>
    </div> 
  </div>


	<footer><br><br>&copy; 2013-2017 Entregon</footer>

</body>
</html>