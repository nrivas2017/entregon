<?php
	include_once('conexion.php');
	class Product extends Model{
		public $code;
		public $product;
		public $description;
		public $price;

		public function __construct(){ 
      parent::__construct(); 
    } 

		public function get_products($tipo){ 
      $sql = $this->db->query("SELECT * FROM producto WHERE Id_Categoria=$tipo");  
      $html = '';
      foreach ($sql->fetch_all(MYSQLI_ASSOC) as $key){
        $code = "'".$key['Id_Producto']."'";
        $html .= '<tr>
                    <td><img src="Fotos/'.$key['Foto'].'"></td>
                    <td class="text_table">'.$key['Nombre'].'</td>
                    <td class="text_table">'.$key['Descripcion'].'</td>
                    <td class="text_table">'.$key['Precio'].'</td>
                    <td>
                      <input style="color: black;" type="number" id="'.$key['Id_Producto'].'" value="1" min="1">
                    </td>
                    <td>
                      <button class="btn btn-success" onClick="addProduct('.$code.');">
                        Agregar
                      </button>
                    </td>
                  </tr>';
      }
      return $html;
   	} 

 		public function search_code($code){
 			$sql = $this->db->query("SELECT * FROM producto WHERE Id_Producto = '$code'"); 
      $product = $sql->fetch_all(MYSQLI_ASSOC); 
      $status = 0;
      foreach ($product as $key){
    		$this->code = $key['Id_Producto'];
    		$this->product = $key['Nombre'];
    		$this->description = $key['Descripcion'];
    		$this->price = $key['Precio'];
    		$status++;
    	}
    	return $status;
 		}
	}
?>