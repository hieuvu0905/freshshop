
<?php 
	include '../templates/connect.php';
	$tinh[]="";
	if(isset($_REQUEST['value'])){
		$sql = "SELECT * from quanhuyen where matp='".$_REQUEST['value']."'";
	    $query = $conn->query($sql);
	    if($query){
	        while ($row = $query->fetch_assoc()) {
	            echo "<option value=\"".$row['maqh']."\">".$row['name']."</option>";
	        }
	    }
	    else{
	        echo "<option>Hồ Chí Minh</option><option>Hà Nội</option><option>Đà Nẵng</option>";
	    }
	}
    
?>