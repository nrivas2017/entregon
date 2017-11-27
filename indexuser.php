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
    <script type="text/javascript" src="js/pedido.js"></script>
    <script>
      $(document).ready(Principal);

        function Principal(){
          $(".item").click(Busca);
          $("#reg").click(Form);
        }

        function Busca(){
          var x=this.id;
          if (x=="Promociones"){
            x=2;
          }
          if (x=="Comida"){
            x=3;
          }
          if (x=="Pizzas"){
            x=1;
          }
          if (x=="Sandwichs"){
            x=4;
          }
          if (x=="Salchipapas"){
            x=5;
          }
          if (x=="beber"){
            x=6;
          }

          $.ajax({
            url:"php/muestra.php?tipo="+x ,
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
      		<li><a class="item" id="Promociones" href="#">Promociones</a></li>
          <li><a class="item" id="Comida" href="#"  >Comida Casera</a></li>
          <li><a class="item" id="Pizzas" href="#"  >Pizzas</a></li>
          <li><a class="item" id="Sandwichs" href="#"  >Sandwichs</a></li>
          <li><a class="item" id="Salchipapas" href="#"  >Salchipapas</a></li>
          <li><a class="item" id="beber" href="#"  >Para beber</a></li>
          <li><a href="#" data-toggle="modal" data-target="#myModal"><?=$cart->get_total_items();?><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
          <li><a>Bienvenido <?php $usr=$_SESSION['nombre']; echo "$usr"; ?></a></li>
          <li><?php $id_cl=$_SESSION['id_cli']; echo "<input id='id_cl' type='hidden' value='$id_cl'>"; ?></li>
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
        <div id="mod_body">
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
            <tbody id="lista_ped" class="cartBody">
              
              <?=$cart->get_items();?>
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <table class="table">
            <tr>
              <th colspan="3">Total pagar: $<span id="total_ped"><?=$cart->get_total_payment();?><span></th>
              <th colspan="3"><button id="btn_pedido" class="btn btn-success">Confirmar Pedido</button></th>
            </tr>
          </table>
        </div>
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