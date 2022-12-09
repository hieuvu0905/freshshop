<?php include 'Models/ModelsUsers.php'; ?>

<head>
	<link rel="stylesheet" href="css/login.css">
    <?php include 'templates/link.php'; ?>    
</head>
<body>
	<?php include 'templates/header.php'; ?>
	<?php include 'templates/menu.php'; ?>

	<div class="row justify-content-center">
		<div class="alert alert-success" id="nhan" role="alert" style=<?php echo $displays; ?> style="margin-bottom: 0px"><?php echo "$checkvalue_inup".$checkemail; ?>
		</div>
	</div>
	<div class="row justify-content-center ">
		<div class="container_login" id="container_login">

			<div class="form-container sign-up-container">
				<form action="" class="form_login" method="POST">
					
					<h1>Đăng kí</h1>
					<div class="social-container">
						<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
						<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
						<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
					</div>
					<span>hoặc đăng kí <a href="">tại đây</a>.</span>
					<input type="text" name="name" placeholder="Họ và Tên" required pattern="[A-Za-z]{2,}.*" title="Họ tên không hợp lệ"/>
					<input type="text" name="address" placeholder="Địa chỉ" required pattern="\S+.*" title="Địa chỉ không được trống"/>
					<input type="text" name="phone" placeholder="Số điện thoại" required pattern=".{9,}" title="Số điện thoại không hợp lệ"/>
					<input type="email" name="email" placeholder="Email" required  title="Email không hợp lệ" />
					<input type="text" name="username" placeholder="Tên tài khoản" required pattern="\S+.[A-Za-z0-9]{5,}.\S+" title="Tài khoản không hợp lệ" />
					<input type="password" name="password" id="password" placeholder="Mật khẩu" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}" title="Mật khẩu phải có ít nhất 6 kí tự, phải chứa chữ hoa, chữ thường và không chứa khoảng trắng"/>
					<button name="submit_dangki">Đăng kí</button>
				</form>
			</div>
			<div class="form-container sign-in-container">
				<form action="" class="form_login" method="POST">
					<img src="images/account.png" alt="loading" style="width: 100px;">
					<h1>Đăng nhập</h1>
					<div class="social-container">
						<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
						<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
						<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
					</div>
					<span>hoặc sử dụng tài khoản của bạn.</span>
					<!-- <input type="email" placeholder="Email" /> -->
					<input name="username" type="text" placeholder="Tài khoản" required pattern="\S+" />
					<input name="password" type="password" placeholder="Mật khẩu" required pattern="\S+"/>
					<a href="#">Quên mật khẩu?</a>
					<button name="submit_dangnhap">Đăng nhập</button>
				</form>
			</div>
			<div class="overlay-container">
				<div class="overlay">
					<div class="overlay-panel overlay-left">
						<h1>Quay lại đăng nhập!</h1>
						<p>Để giữ kết nối với chúng tôi, vui lòng đăng nhập bằng thông tin cá nhân của bạn</p>
						<button class="ghost" id="signIn">Đăng nhập</button>
					</div>
					<div class="overlay-panel overlay-right">
						<h1>Xin chào người anh em!</h1>
						<p>Nhập thông tin cá nhân của bạn và bắt đầu hành trình với chúng tôi</p>
						<button class="ghost" id="signUp">Đăng kí</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include 'templates/footer.php'; ?>
 <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
    <script>	
    	const signUpButton = document.getElementById('signUp');
		const signInButton = document.getElementById('signIn');
		const container = document.getElementById('container_login');

		signUpButton.addEventListener('click', () => {
			container.classList.add("right-panel-active");
		});

		signInButton.addEventListener('click', () => {
			container.classList.remove("right-panel-active");
		});
		const nhan = document.getElementById('nhan');
		nhan.onclick = function () {
			nhan.style.display = "none";
		}
		

    </script>
</body>
  