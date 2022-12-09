<?php 
    session_start();
    if (!isset($_SESSION['admin'])) {
        header('Location: ../pages/login.php');
    }
?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">Quản trị</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="../../index.php"><i class="fa fa-home fa-fw"></i> Website</a></li>
                </ul>

                <ul class="nav navbar-right navbar-top-links">
                    <li class="dropdown navbar-inverse">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-comment fa-fw"></i> New Comment
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                        <span class="pull-right text-muted small">12 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> Message Sent
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-tasks fa-fw"></i> New Task
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i><?php 
                                if($_SESSION['admin']){
                                    echo $_SESSION['admin'];
                                }
                            ?> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="thongtinsudung.php"><i class="fa fa-user fa-fw"></i> Thông tin tài khoản</a>
                            </li>
                            <li><a href="doimatkhau.php"><i class="fa fa-gear fa-fw"></i> Đổi mật khẩu</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Đăng xuất</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                </span>
                                </div>
                                <!-- /input-group -->
                            </li>
                            <li>
                                <a href="index.php" class="active"><i class="fa fa-dashboard fa-fw"></i>Trang chủ</a>
                            </li>
                            <li>
                                <a href="#"><i class="bi bi-grid-fill"></i> Quản lý danh mục<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="../pages/nhomhang.php"><i class="bi bi-slash-square"></i> Nhóm hàng</a>
                                    </li>
                                    <li>
                                        <a href="../pages/sanpham.php"><i class="bi bi-cart2"></i> Sản phẩm</a>
                                    </li>
                                    <li>
                                        <a href="../pages/nhanvien.php" style="pointer-events: none"><i class="bi bi-person-badge"></i> Nhân viên</a>
                                    </li>
                                    <li>
                                        <a href="../pages/donhang.php"><i class="bi bi-stack"></i> Đơn hàng chờ duyệt</a>
                                    </li>
                                    <li>
                                        <a href="../pages/donhangchoxuly.php"><i class="bi bi-stack"></i> Đơn hàng chờ xử lý</a>
                                    </li>
                                    <li>
                                        <a href="../pages/tintuc.php" style="pointer-events: none"><i class="bi bi-megaphone"></i> Tin tức & sự kiện</a>
                                    </li>
                                    <li>
                                        <a href="../pages/khachhang.php"><i class="bi bi-people-fill"></i> Khách hàng</a>
                                    </li>
                                    <li>
                                        <a href="#" style="pointer-events: none"><i class="bi bi-telephone"></i> Liên hệ</a>
                                    </li>
                                    <li>
                                        <a href="../pages/nhacungcap.php" style="pointer-events: none"><i class="bi bi-truck"></i> Nhà cung cấp</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Báo cáo tổng hợp<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="doanhthu.php">Báo cáo doanh thu</a>
                                    </li>
                                    <li>
                                        <a href="baocaohangtonkho.php">Báo cáo hàng tồn kho</a>
                                    </li>
                                    <li>
                                        <a href="baocaokho.php">Báo cáo kho</a>
                                    </li>
                                </ul> 
                            </li>
                            <!-- <li>
                                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Báo cáo phân tích<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="flot.php">Lợi nhuận theo hóa đơn</a>
                                    </li>
                                    <li>
                                        <a href="flot.php">Lợi nhuận theo nhóm hàng</a>
                                    </li>    
                                </ul>  
                            </li> -->
                            <li>
                                <a href="#" style="pointer-events: none"><i class="bi bi-card-checklist"></i> SEO Website</a>
                            </li>
                            <li>
                                <a href="#"><i class="bi bi-person-fill"></i> Quản lý hệ thống<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="../pages/quanlinguoidung.php">Quản lí người dùng</a>
                                    </li>
                                    <li>
                                        <a href="../pages/danhsachquyen.php">Danh sách quyền</a>
                                    </li>
                                    <li>
                                        <a href="../pages/thongtinsudung.php">Thông tin sử dụng</a>
                                    </li>
                                    <li>
                                        <a href="../pages/doimatkhau.php">Đổi mật khẩu</a>
                                    </li>
                                    <li>
                                        <a href="../pages/saoluudulieu.php">Sao lưu dữ liệu</a>
                                    </li>
                                    <li>
                                        <a href="../pages/khoiphucdulieu.php">Khôi phục dữ liệu</a>
                                    </li>
                                    <li>
                                        <a href="logout.php">Đăng xuất</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>