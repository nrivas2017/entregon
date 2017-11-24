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
      $sql = $this->db->query("SELECT * FROM producto WHERE Tipo='$tipo'");  
      $html = '';
      foreach ($sql->fetch_all(MYSQLI_ASSOC) as $key){
        $code = "'".$key['ID_Producto']."'";
        $html .= '<tr>
                    <td><img src="Fotos/'.$key['Fotos'].'"></td>
                    <td class="text_table">'.$key['Nombre'].'</td>
                    <td class="text_table">'.$key['Descripcion'].'</td>
                    <td class="text_table">'.$key['Precio'].'</td>
                    <td>
                      <input style="color: black;" type="number" id="'.$key['ID_Producto'].'" value="1" min="1">
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
 			$sql = $this->db->query("SELECT * FROM producto WHERE ID_Producto = '$code'"); 
      $product = $sql->fetch_all(MYSQLI_ASSOC); 
      $status = 0;
      foreach ($product as $key){
    		$this->code = $key['ID_Producto'];
    		$this->product = $key['Nombre'];
    		$this->description = $key['Descripcion'];
    		$this->price = $key['Precio'];
    		$status++;
    	}
    	return $status;
 		}
	}
?>