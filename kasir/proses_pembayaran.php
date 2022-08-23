<?php
require_once"../_config/config.php";
require "../_assets/libs/vendor/autoload.php";

    // $id_pembayaran     	= $_POST['id_pembayaran'];
	$no_rm		        = $_POST['no_rm'];
	$status 			= "LUNAS";


	// insert 
	mysqli_query($con,"UPDATE farmasi SET status_pembayaran = '$status' WHERE  no_rm = '$no_rm'");

	

	echo "<script>alert('Data berhasil diupdate'); window.location='data.php';</script>";

// if(isset($_POST['add'])){
// 	$norekmed = acak(6);
// 	$tgl = trim(mysqli_real_escape_string($con, $_POST['tgl']));
// 	$poli = trim(mysqli_real_escape_string($con, $_POST['poli']));
// 	$pasien = trim(mysqli_real_escape_string($con, $_POST['pasien']));
// 	$keluhan = trim(mysqli_real_escape_string($con, $_POST['keluhan']));
// 	$dokter = trim(mysqli_real_escape_string($con, $_POST['dokter']));
// 	$diagnosa = trim(mysqli_real_escape_string($con, $_POST['diagnosa']));

// 	// insert ke tb_rekammedis
// 	mysqli_query($con, "INSERT INTO tb_rekammedis VALUES('$norekmed', '$tgl', '$poli', '$pasien', '$keluhan', '$dokter', '$diagnosa')") or die(mysqli_error($con));

// 	// mendeklarasikan obat
// 	$obat = $_POST['obat'];
// 	foreach($obat as $obat){
// 	mysqli_query($con, "INSERT INTO tb_rm_obat VALUES('', '$norekmed', '$obat')") or die(mysqli_error($con));
// 	}

// 	echo "<script>alert('Data berhasil ditambahkan'); window.location='data.php';</script>";
// }
// else if(isset($_POST['edit'])){

// 	$id = $_POST['id'];
// 	$tgl = trim(mysqli_real_escape_string($con, $_POST['tgl']));
// 	$poli = trim(mysqli_real_escape_string($con, $_POST['poli']));
// 	$pasien = trim(mysqli_real_escape_string($con, $_POST['pasien']));
// 	$keluhan = trim(mysqli_real_escape_string($con, $_POST['keluhan']));
// 	$dokter = trim(mysqli_real_escape_string($con, $_POST['dokter']));
// 	$diagnosa = trim(mysqli_real_escape_string($con, $_POST['diagnosa']));

// 	//update ke tabel rekammedis
// 	mysqli_query($con, "UPDATE tb_rekammedis SET tgl_periksa = '$tgl', id_poli = '$poli', id_pasien = '$pasien', keluhan = '$keluhan', id_dokter = '$dokter', diagnosa = '$diagnosa' WHERE id_rm = '$id'") or die(mysqli_error($con));

// 	// mendeklarasikan obat
// 	$obat = $_POST['obat'];
// 	mysqli_query($con, "DELETE FROM tb_rm_obat WHERE id_rm = '$id'") or die(mysqli_error($con));
// 	foreach($obat as $obat){
// 	mysqli_query($con, "INSERT INTO tb_rm_obat VALUES('', '$id', '$obat')") or die(mysqli_error($con));
// 	}
// 	echo "<script>alert('Data berhasil diubah'); window.location='data.php';</script>";
// }