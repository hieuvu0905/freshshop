<?php
	include '../templates/connect.php';
	$dbname = 'qlnongsan';
	$backupFile = "W:/freshshop/admin/file-backup/".$dbname . date("Y-m-d-H-i-s") . ".sql";
	// $command = "mysqldump -u MySQLBackupUser -pMySQLPassword " .$dbname . " > " .$backupFile ;
	$result=exec('C:\xampp\mysql\bin\mysqldump.exe -u root qlnongsan >'.$backupFile,$output);
	echo "Đã thực hiện sao lưu!";

?>