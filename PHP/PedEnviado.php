<!DOCTYPE html>
<html lang=es>

	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 	</head>


	<body>
		<div>
			<?php
				include("conex.inc");
				$id = $_GET["id"];
				$consulta = "UPDATE `pedido` SET `Id_Estado`= '1' WHERE Id_Pedido='$id'";
				$respuesta = mysqli_query($db, $consulta);

				$consulta = "SELECT pe.Id_Pedido, cli.Direccion, pe.FechaHora, e.N_Estado
							FROM pedido as pe
							INNER JOIN cliente as cli
							ON pe.Id_Cliente=cli.Id_Cliente
							INNER JOIN estado as e
							ON pe.Id_Estado=e.Id_Estado";
				$respuesta = mysqli_query($db, $consulta);
				echo "<table><tr> <td><b>N° Pedido</b></td> <td><b>Direccion</b></td>  <td><b>FechaHora</b></td> <td><b>Estado</b></td> <td></td> <td></td></tr>";
				while($fila=mysqli_fetch_object($respuesta))
					echo "<tr><td>$fila->Id_Pedido</td>
			      		<td>$fila->Direccion</td>
			      		<td>$fila->FechaHora</td>
			      		<td>$fila->N_Estado</td>
			      		<td><a href='#' onclick='EliminaPed($fila->Id_Pedido)'><span class='glyphicon glyphicon-trash'></span></a></td>
			      		<td><button class='btn btn-primary' onclick='PedEnviado($fila->Id_Pedido)'>Enviado</button></td>
			      		<td><button class='btn btn-primary' data-toggle='modal' data-target='#myModal' onclick='DetallePed($fila->Id_Pedido)'>Ver</button></td></tr>";
				echo "</table>";
			?>
		</div>

	<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">


          <button type="button" class="close" data-dismiss="modal"><a href="#"><span class="glyphicon glyphicon-remove"></span></a></button>
        </div>

        <div style="color:black;" id="mod_body"></div>

	</body>
	</body>

</html>