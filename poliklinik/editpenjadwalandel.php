<?php 
include_once"../_config/config.php";

$no_rk_medis=$_GET['id'];
mysqli_query($con,"DELETE from penjadwalan where no_rk_medis='$no_rk_medis'");

echo "<script>alert('Data berhasil dihapus!');window.location='data.php';</script>";

?>