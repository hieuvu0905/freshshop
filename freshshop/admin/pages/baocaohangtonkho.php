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
							<h1>Báo cáo hàng tồn kho theo tháng</h1>
                            <!-- <label for=""><h2>Báo cáo tồn kho theo tháng</h2></label> -->
                            <select name="baocaotonkho" id="baocaotonkho" onchange="baocaoFunc(value);">
                                <option value="Choose..." data-display="Select">Choose...</option>
                                <?php
                                    for($i=1;$i<=12;$i++){
                                        echo '<option value="'.$i.'">Tháng '.$i.'</option>';
                                    }
                                ?>
                            </select>
							<table class="table" id="table">
								<tr><td>Mặt hàng</td><td>Số lượng nhập</td><td>Số lượng bán ra</td></tr>
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
        <script>
            function baocaoFunc(value) {
                // alert(value);
                $.post('../Models/baocaohangtonkho.php', {"value": value}, function(data, textStatus, xhr) {
                    $("#table").html(data);
                });
            }
        </script>
    </body>
</html>

