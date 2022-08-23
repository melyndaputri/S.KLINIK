<?php
require_once"../_config/config.php";
require "../_assets/libs/vendor/autoload.php";

$tgl_kedatangan 	= $_POST['tgl_kedatangan'];
$jam 				= $_POST['jam'];
$no_rkm_medis 		= $_POST['no_rkm_medis'];
$nm_pasien	 		= $_POST['nm_pasien'];
$jk 				= $_POST['jk'];
$tgl_lahir	 		= $_POST['tgl_lahir'];
$umur 				= $_POST['umur'];
$no_tlp 			= $_POST['no_tlp'];
$spesialis 			= $_POST['spesialis'];
$ren_perawatan 		= $_POST['ren_perawatan'];
$petugas		 	= $_POST['petugas'];
$stts_konfirmasi 	= $_POST['stts_konfirmasi'];
$ket 				= $_POST['ket'];

// menginput data ke table pasien

mysqli_query($con,"INSERT INTO penjadwalan VALUES ('$tgl_kedatangan', '$jam','$no_rkm_medis', '$nm_pasien', '$jk', '$tgl_lahir', '$umur', '$no_tlp', '$spesialis', '$ren_perawatan', '$petugas', '$stts_konfirmasi', '$ket')");

	echo "<script>alert('Data berhasil di update'); window.location='../poliklinik/data.php';</script>";
