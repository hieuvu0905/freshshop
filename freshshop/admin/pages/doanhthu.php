<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include '../templates/link.php'; ?>
    </head>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <?php include '../templates/header.php'; ?>

            <div id="page-wrapper">
                <div class="container-fluid">
                    
                    <div class="row" id="bangdoanhthu">
						<div class="col-sm-6">
							<h1>Thống kê theo ngày của tháng hiện tại</h1>
							<table class="table">
								<tr><td>Ngày</td><td>Doanh thu(vnđ)</td><td></td></tr>
                                <?php include '../Models/doanhthungay.php'; ?>
							</table>
						</div>
						<div class="col-sm-6">
							<h1>Thống kê theo tháng</h1>
							<table class="table">
								<tr><td>Tháng</td><td>Doanh thu(vnđ)</td><td></td></tr>
                                <?php include '../Models/doanhthuthang.php'; ?>
							</table>
						</div>
					</div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- DataTables JavaScript -->
        <script src="../js/dataTables/jquery.dataTables.min.js"></script>
        <script src="../js/dataTables/dataTables.bootstrap.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        
    </body>
</html>

