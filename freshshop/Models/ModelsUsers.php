<?php 
	session_start(); include 'templates/connect.php';
	$checkvalue_inup="";
	$displays = "\"display: none;\"";
	$checkemail ="";
	if(isset($_POST['submit_dangnhap'])){
		$username = $_POST["username"];
		$password = md5($_POST["password"]);
		//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
		//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
		$username = strip_tags($username);
		$username = addslashes($username);
		$password = strip_tags($password);
		$password = addslashes($password);
		$sql = "SELECT * FROM TAIKHOAN where TENTAIKHOAN = '$username' and MATKHAU = '$password' ";
		$query = [];
		try {
			$query = $conn->query($sql);
			
		} catch (Exception $e) {
			echo $e;
		}
		$num = $query->num_rows??0;
		if($num<=0){
			echo "<script type='text/javascript'>alert('Tên tài khoản hoặc mật khẩu không đúng!');</script>";
		}else{
			$_SESSION['users'] = $username;
			// echo "<script type='text/javascript'>alert('xin chào $username!');</script>";
			// print_r($_SESSION['users']);
			header('Location: index.php');	
		}
	}
	if(isset($_POST['submit_dangki'])){
		$name = $_POST['name'];
		$address = $_POST['address'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$username = $_POST["username"];
		$password = trim(preg_replace('/\s+/','', $_POST["password"]));
		$pwd = md5($password);
		$sql = "INSERT INTO `taikhoan`(`TENTAIKHOAN`, `MATKHAU`, `QUYENTAIKHOAN`, `TENNGUOIDUNG`, `EMAIL`, `DIACHI`, `HINHANH_TK`, `SDT`) VALUES ('$username','$pwd','2','$name','$email','$address','','$phone')";
		if($conn->query($sql)){
			header('location: login.php');
			// $checkvalue_inup = "Đăng kí thành công";
			// $displays = "\"display: block;\"";
			// echo "<script type='text/javascript'>alert('Đăng kí thành công');
			// 	// var rs = confirm('Đăng kí thành công'); 
			// 	// if(rs == true){
			// 	// 	window.load('login.php');
			// 	// }
			// 	// else{}
			// 	// window.load('login.php');
			// </script>";
		}
		else{
			$sqlcheck = "SELECT * FROM TAIKHOAN";
			$rs = $conn->query($sqlcheck);
			while ($row = $rs->fetch_assoc()) {
				if($row['TENTAIKHOAN']==$username){
					$checkemail = "tài khoản đã tồn tại";
				}
				else if($row['EMAIL']==$email){
					$checkemail = "email đã được đăng kí";
				}
			}
			$checkvalue_inup = "Đăng kí không thành công do ";
			$displays = "\"display: block;\"";
		}
		
	}

?>