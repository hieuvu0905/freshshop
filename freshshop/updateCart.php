<?php 
    session_start();
    $cart = $_SESSION['cart'];
    if(isset($_REQUEST['submit_update'])){
    	
        foreach ($_REQUEST['soluong'] as $key => $value) {
            if($value<=0){
                unset($_SESSION['cart'][$key]);
            }
            else{
                $_SESSION['cart'][$key]['soluong'] = $value;
            }
            
        }
        header("location: cart.php");
    }

 ?>