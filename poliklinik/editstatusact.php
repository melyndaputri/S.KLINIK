<?php 
require_once"../_config/config.php";

$id_penjadwalan 	= $_POST['id_penjadwalan'];
$stts_konfirmasi	= $_POST['stts_konfirmasi'];



mysqli_query($con, "UPDATE penjadwalan SET stts_konfirmasi='$stts_konfirmasi' WHERE id_penjadwalan='$id_penjadwalan'") or die(mysqli_error($con));
// header("location:b01.php");
echo "<script>alert('Status berhasil diupdate!');window.location='data.php';</script>";
?>