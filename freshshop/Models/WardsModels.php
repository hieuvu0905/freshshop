<?php 
	include '../templates/connect.php';
	if(isset($_REQUEST['valueDistrict'])){
		$sql = "SELECT * FROM xaphuongthitran WHERE maqh='".$_REQUEST['valueDistrict']."'";
	    $query = $conn->query($sql);
	    if($query){
	        while ($row = $query->fetch_assoc()) {
	            echo "<option value=\"".$row['xaid']."\">".$row['name']."</option>";
	        }
	    }
	    else{
	        echo "<option>Hồ Chí Minh</option><option>Hà Nội</option><option>Đà Nẵng</option>";
	    }
	    
	    
	}
    
?>