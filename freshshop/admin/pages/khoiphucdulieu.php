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
                            <form role="form" method="post" enctype="multipart/form-data">
                                <h1>Khôi phục dữ liệu</h1>
                                <input type="file" name="file_backup" id="file_backup" accept=".txt,.sql,.doc">  <br>            
                                <button type="submit" class="btn btn-default" name="khoiphuc" id="khoiphuc">Thực hiện khôi phục</button>
                            </form>
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
            // $("#khoiphuc").click(function() {
            //     var file = $('#file_backup')[0].files[0];
            //     if (file){
            //         console.log(file.name);
            //     }
            // });
            
        </script>
    </body>
</html>
<?php
    include '../templates/connect.php';
    // error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
    if(isset($_REQUEST['khoiphuc'])){
        $check = filesize($_FILES["file_backup"]["tmp_name"]);
        if($check == false) {
            echo "<script type='text/javascript'>alert('Chưa có file');</script>";
        }else{
            $filename = $_FILES["file_backup"]["name"];
            $backupFile = "W:/freshshop/admin/file-backup/".$filename;
            // echo "$backupFile";
            $result=exec('C:\xampp\mysql\bin\mysql.exe -u root qlnongsan_backup < '.$backupFile,$output);
            echo "<script type='text/javascript'>alert('Đã thực hiện khôi phục');window.location.href='khoiphucdulieu.php';</script>";
        }
    }
    
?>
