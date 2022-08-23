<?php
require_once"../_config/config.php";
require "../_assets/libs/vendor/autoload.php";

$no_rm		        = $_POST['no_rm'];
$nama_pasien	 	= $_POST['nama_pasien'];
$jk 				= $_POST['jk'];
$tgl_lahir	 		= $_POST['tgl_lahir'];
$umur 				= $_POST['umur'];
$no_tlp 			= $_POST['no_tlp'];
$nm_dokter 			= $_POST['nm_dokter'];
$diagnosis			= $_POST['diagnosis'];

// menginput data ke table pasien

mysqli_query($con,"INSERT INTO laboratorium VALUES ('$no_rm', '$nama_pasien', '$jk', '$tgl_lahir', '$umur', '$no_tlp', '$nm_dokter', '$diagnosis')");

	echo "<script>alert('Data berhasil di update'); window.location='data.php';</script>";
