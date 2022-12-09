<?php 
    session_start();
    $cart = $_SESSION['cart'];
       	
    foreach ($cart as $key => $value) {
        if($_REQUEST['MASANPHAM']==$key){
                unset($_SESSION['cart'][$key]);
            }
        }
        header("location: cart.php");

 ?>