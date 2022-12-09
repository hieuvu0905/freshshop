<?php 
    include './templates/connect.php';
        $sql = "SELECT * FROM DANHMUCSANPHAM";
        $rs= $conn->query($sql);
        echo '<li onclick="hienthitatca()"><span class="icon-chevron-right"></span>Tất cả</li>';
        if($rs->num_rows>0){
            while ($row = $rs->fetch_assoc()) {
                echo '<li onclick="hienthi(\''.$row['MADANHMUC'].'\')"><span class="icon-chevron-right"></span>'.$row['TENDANHMUC'].'</li>';
            }
        }
	

?>