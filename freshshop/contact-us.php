<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <?php include 'templates/link.php'; ?>

</head>

<body>
    <!-- Start Main Top -->
    <?php include 'templates/header.php'; ?>
    <!-- End Main Top -->

    <!-- Start Main Top -->
    <?php include 'templates/menu.php'; ?>
    <!-- End Main Top -->

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Contact Us</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active"> Contact Us </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Contact Us  -->
    <div class="contact-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-12">
                    <div class="contact-form-right">
                        <h2>Liên hệ với chúng tôi</h2>
                        <p>Đêm dài quá, trằn trọc mãi không ngủ được nên lồm cồm bò dậy khỏi giường đi lấy chai nước uống. Lúc đi lên liền phát hiện một con gián ngay bậc thang, bèn đi tới bên cạnh, ngồi xuống, vừa tu chai nước vừa tán dóc với nó, kể ra hết những muộn phiền, những tâm sự không bao giờ kể cho ai nghe, những áp lực trong học tập, cuộc sống đã dồn nén bấy lâu nay. Vừa kể vừa khóc. Sau đó mình đứng dậy đạp chết nó, vì nó biết quá nhiều <i class="fa fa-grin-tears"></i>.</p>
                        <form id="contactForm" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Vui lòng nhập họ tên của bạn!">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="email" placeholder="Your Email" id="email" class="form-control" name="email" required data-error="Vui lòng nhập email của bạn!">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required data-error="Vui lòng nhập thông tin!">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" id="message" placeholder="Your Message" rows="4" data-error="Hãy viết gì đó cho chúng tôi!" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="submit-button text-center">
                                        <button class="btn hvr-hover" name="submit" id="submit" type="submit">Send Message</button>
                                        <button class="btn hvr-hover" type="reset">Reset</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
				<div class="col-lg-4 col-sm-12">
                    <div class="contact-info-left">
                        <h2>Thông tin liên hệ</h2>
                        <p>Chuyện kể rằng: Có một hồ nước thiêng ở Canada. Ai muốn ước gì cứ nói lời ước của mình rồi nhảy xuống hồ tắm là được toại nguyện. Thế là mọi người từ khắp nơi trên thế giới kéo nhau đến rất đông. Người thì ước thành gấu trắng, người thì muốn thành đại bàng và có người còn ước thành hoa anh đào nữa. Có một anh đến bên hồ, hấp tấp thế nào lại trượt chân, vội thốt lên “Oh,SHIT!” và … rơi tõm xuống hồ <i class="fa fa-tired"></i>.</p>
                        <ul>
                            <li>
                                <p><i class="fas fa-map-marker-alt"></i>Address: Xã Nâm N'Jang <br>Huyện Đăk Song<br>Tỉnh Đăk Nông </p>
                            </li>
                            <li>
                                <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+84372110152">+84 372 110 152</a></p>
                            </li>
                            <li>
                                <p><i class="fas fa-envelope"></i>Email: <a href="mailto:congdoan27121999@gmail.com">congdoan27121999@gmail.com</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Cart -->

    <!-- Start Instagram Feed  -->
    <?php include 'templates/images.php'; ?>
    <!-- End Instagram Feed  -->


    <!-- Start Footer  -->
    <?php include 'templates/footer.php'; ?>
    <!-- End Footer  -->

    
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
</body>

</html>