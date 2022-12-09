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
                    <div class="row">
						<div class="col-lg-8">
                            <h1>Sao lưu dữ liệu</h1>                 
                            <button type="submit" class="btn btn-default" name="saoluu" id="saoluu">Thực hiện sao lưu</button>
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
            $("#saoluu").click(function() {
                var r = confirm("Bạn muốn sao lưu dữ liệu!");
                if(r==true){
                    $.post('../Models/saoluudulieu.php', function(data, textStatus, xhr) {
                        alert(data);
                    });
                }
            });
        </script>
    </body>
</html>

