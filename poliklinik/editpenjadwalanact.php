<?php 
require_once"../_config/config.php";
$no_rk_medis 	= $_POST['no_rk_medis'];
$tgl_kedatangan 	= $_POST['tgl_kedatangan'];
$jam 				= $_POST['jam'];

mysqli_query($con, "UPDATE penjadwalan set tgl_kedatangan='$tgl_kedatangan', jam='$jam' where no_rk_medis='$no_rk_medis'");
echo "<script>alert('Data berhasil diupdate!');window.location='data.php';</script>";

?>