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
          $("#reg").click(Form);
        }

        function Busca(){
          $.ajax({
            url:"php/muestra.php?tipo="+this.id ,
            success: function(datos){
              $('#lista').html(datos)
              }
          })
        }
        function Form(){
          $.ajax({
            url:"registro.html",
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
          <li><a href="#" data-toggle="modal" data-target="#myModal"><?=$cart->get_total_items();?><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
          <li><a>Bienvenido <?php $usr=$_SESSION['email']; echo "$usr"; ?></a></li>
          <li><a href="cerrarSesion.php"> Cerrar Sesión </a></li>

    		</ul>
  		</div>
	</nav>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">


          <button type="button" class="close" data-dismiss="modal"><a href="#"><span class="glyphicon glyphicon-remove"></span></a></button>
        </div>
        <div class="modal-body">
          <table class="table" cellpadding="5px" width="100%">
            <thead class="cartHeader" display="off">
              <tr>
                <th>Producto</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Subtotal</th>
                <th></th>
              </tr>
            </thead>
            <tbody class="cartBody">
              
              <?=$cart->get_items();?>
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <table class="table">
            <tr>
              <th colspan="3">Total pagar: $<?=$cart->get_total_payment();?></th>
              <th colspan="3"><button class="btn btn-success">Confirmar Pedido</button></th>
            </tr>
          </table>
        </div>
      </div>
      
    </div>
  </div>

  <div id="cuerpo">
     <div class="row">
      <div class="col-sm-3"></div>
      <div id="lista" class="scroll col-sm-6">
        <h1><br><br>¿Qué vas a Pedir?</h1>
      </div>
      
      <div class="col-sm-3"></div>
    </div> 
  </div>


	<footer><br><br>&copy; 2013-2017 Entregon</footer>

</body>
</html>