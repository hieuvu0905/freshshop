<?php 
	session_start();
	include '../templates/connect.php';
	if(isset($_REQUEST['MAGIAMGIA'])){
		$sql = "SELECT * from MAGIAMGIA where MAGIAMGIA = '".$_REQUEST['MAGIAMGIA']."'";
		$query = $conn->query($sql);
		$cart=[];
	    if($query){
	        $row = $query->fetch_assoc();
	        echo $row['MAGIAMGIA']."-".$row['TIENGIAM']??"0";
	        $cart = array(
	        	"MAGIAMGIA" => $row['MAGIAMGIA']??"0",
	        	"TIENGIAM"  => $row['TIENGIAM']??"0"
	        );
	        $_SESSION['MAGIAMGIA'] = $cart;
	    }
	}
	
 ?>