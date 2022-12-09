<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include '../templates/link.php'; ?>
    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Đăng nhập</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" method="POST" action="../Models/taikhoan.php">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Tài khoản" name="taikhoan" id="taikhoan" type="text" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Mật khẩu" name="password" id="password" type="password" required>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                        </label>
                                    </div>
                                    <!-- Change this to a button or input when using this as a form -->
                                    <button onclick="dangnhap();" name="submit" class="btn btn-lg btn-success btn-block">Đăng nhập</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
        <script>
            // $("#dangnhap").click = function() {
            //     var taikhoan = $("#taikhoan").val();
            //     var matkhau = $("#password").val();
            //     console.log(taikhoan + "matkhau"); 
            // }
            // function dangnhap() {
            //     var taikhoan = $("#taikhoan").val();
            //     var matkhau = $("#password").val();
            //     // alert(taikhoan + matkhau);
            //     $.post('../Models/taikhoan.php', function(data, textStatus, xhr) {
            //         if(data=="ok"){
            //             window.location.href = "../pages/index.php";

            //         }
            //         else{
            //             alert("Đăng nhập không thành công");
            //             location.reload();
            //         }
            //     });
            // }
        </script>

    </body>
</html>
