<?php 
    ob_start();
    session_start();
    include '../templates/connect.php';
    if(isset($_REQUEST['MASANPHAM'])){
        $MASANPHAM = $_REQUEST['MASANPHAM'];
        $sql = "SELECT * FROM SANPHAM WHERE MASANPHAM='".$MASANPHAM."'";
        $rs = $conn->query($sql);
        $row = $rs->fetch_assoc();
        $cart=[];
        if(!isset($_SESSION['cart'])){
            $cart[$MASANPHAM] = array(
                "TENSANPHAM"=>$row['TENSANPHAM'],
                "HINHANH_SP"=>$row['HINHANH_SP'],
                "GIA"       =>$row['DONGIA'],
                "soluong"   =>1
            );
        }
        else{
            $cart = $_SESSION['cart'];
            if(array_key_exists($MASANPHAM, $cart)){
                $cart[$MASANPHAM] = array(
                    "TENSANPHAM"=>$row['TENSANPHAM'],
                    "HINHANH_SP"=>$row['HINHANH_SP'],
                    "GIA"       =>$row['DONGIA'],
                    "soluong"   =>(int)$cart[$MASANPHAM]['soluong'] +1
                );
                
            }
            else{
                $cart[$MASANPHAM] = array(
                    "TENSANPHAM"=>$row['TENSANPHAM'],
                    "HINHANH_SP"=>$row['HINHANH_SP'],
                    "GIA"       =>$row['DONGIA'],
                    "soluong"   =>1
                );
            }
        }
        $_SESSION['cart'] = $cart;
        // echo "<pre>";
        // print_r($_SESSION['cart']);
        $soluong = 0;
        $tongtien = 0;
        foreach ($cart as $value) {
            $soluong += (int)$value['soluong'];
            $tongtien += (int)$value['soluong'] * (int)$value['GIA'];
        }
        echo $soluong."-".$tongtien."-";
    }
?>