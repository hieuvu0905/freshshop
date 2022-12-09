<?php
	include '../templates/connect.php';
	if(isset($_REQUEST['id'])){
		$id = $_REQUEST['id'];
		if($id!=1){
			if($id!=2){
				$sql = "SELECT * FROM TAIKHOAN WHERE QUYENTAIKHOAN='$id'";
				$query = $conn->query($sql);
				if($query->num_rows>0){
					while ($row = $query->fetch_assoc()) {
						$sql = "UPDATE TAIKHOAN SET QUYENTAIKHOAN='2' WHERE TENTAIKHOAN='".$row['TENTAIKHOAN']."'";
						$query = $conn->query($sql);
						if($query){
							$sql = "DELETE FROM DANHSACHQUYEN WHERE id='$id'";
							$query = $conn->query($sql);
							if($query){
								echo "Đã xóa - ";
							}
						}
					}
				}else{
					$sql = "DELETE FROM DANHSACHQUYEN WHERE id='$id'";
					$query = $conn->query($sql);
					if($query){
						echo "Đã xóa - ";
					}
				}
			}else{
				echo "Không được xóa - ";
			}
			
		}else{
				echo "Không được xóa - ";
			}
	}

?>