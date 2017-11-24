<style>
	
	form{
		text-align: left;
		padding-top: 5px;
		padding-bottom: 5px;
		padding-left: 40px; 
	}

	input,textarea,select{
		color: black;
	}

	input[type=file]{
		color: white;
	}
</style>


<h3>Nuevo producto...</h3>
<form id="formprod" action="PHP/SubirProd.php" method="post" enctype="multipart/form-data">

	<label>Nombre: </label>
	<input type="text" name="nom" placeholder="Nombre Producto..." required><br>
					

	<label>Precio: $</label>
	<input type="number" name="pre" min="1" max="50000" value="1" required><br>
					

	<label>Tipo: </label>
 	<select name="tipo" form="formprod">
   		<option>Salchipapa</option>
    	<option>ParaBeber</option>
    	<option>ComidaCasera</option>
    	<option>Sandwichs</option>
    	<option>Pizza</option>
    	<option>Promocion</option>
  	</select><br>

	<label>Foto (180x130): </label>
	<input name="archivo" type="file" size="50" required/><br>

	<label>Descripción: </label><br>
	<textarea form="formprod" name="desc" rows="4" cols="50" placeholder="Breve descripción del Producto..."></textarea><br>

	<input type="submit" value="Ingresar">
</form>