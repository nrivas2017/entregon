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
  if (isset($_SESSION['estado'])){
    if ($_SESSION['estado']=="user"){
      require("indexuser.php");
    }
  }else{
    require("index_no_user.php");
  } 
?>