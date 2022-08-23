<?php
require_once"_config/config.php";
require "_assets/libs/vendor/autoload.php";

if(!isset($_SESSION['user'])){
    echo "<script>window.location='".base_url('auth/login.php')."'</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <?php
      $poliklinik = mysqli_query($con, "SELECT * FROM tb_poliklinik");
      $jumlahpoliklinik = mysqli_num_rows($poliklinik);
      $pasien = mysqli_query($con, "SELECT * FROM pasienbaru");
      $jumpasien = mysqli_num_rows($pasien);
      $obat = mysqli_query($con, "SELECT * FROM penjadwalan");
      $jumobat = mysqli_num_rows($obat);
      $dokter = mysqli_query($con, "SELECT * FROM tb_dokter");
      $jumlahdokter = mysqli_num_rows($dokter);
    ?> -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Aplikasi Rumah Sakit</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url(); ?>/_assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/_assets/css/simple-sidebar.css" rel="stylesheet">
    <!-- load DataTables -->
    <link href="<?= base_url(); ?>/_assets/libs/DataTables/datatables.min.css" rel="stylesheet">
    <!-- load jquery online -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>

    <!-- load ckeditor -->
    <script src="<?= base_url(); ?>/_assets/libs/vendor/ckeditor/ckeditor/ckeditor.js"></script>
    <!-- <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script> -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</head>
<body>
	<div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper" style="background-color: #EECAB2; font-size: 15px; font-family: Lato, sans-serif;">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="<?= base_url('dashboard'); ?>"><strong style="color: black; font: 200 25px Lato, sans-serif;letter-spacing: 4px;"> S.KLINIK</strong></a>
                </li>
                <li>
                    <a href="<?= base_url('dashboard'); ?>" style="color: black"><p class="fas fa-archive"></p>&emsp;Dashboard</a>
                </li>
                <li>
                    <a href="<?= base_url('pasien/data.php') ?>" style="color: black"><p class="fas fa-user-injured"></p>&emsp;Data Pasien</a>
                </li>
                <li>
                    <a href="<?= base_url('dokter/data.php') ?>" style="color: black"><p class="fas fa-user-md"></p>&emsp;Data Dokter</a>
                </li>
                <li>
                    <a href="<?= base_url('poliklinik/data.php') ?>" style="color: black"><p class="fas fa-clinic-medical"></p>&emsp;Penjadwalan</a>
                </li>
                <li>
                    <a href="<?= base_url('laboratorium/data.php') ?>" style="color: black"><p class="fas fa-vial"></p>&emsp;laboratorium</a>
                </li>
                <!-- <li>
                    <a href="<?= base_url('obat/data.php') ?>" style="color: black"><p class="fas fa-tablets"></p>&emsp;Data Obat</a>
                </li> -->
                <li>
                    <a href="<?= base_url('farmasi/data.php') ?>" style="color: black"><p class="fas fa-notes-medical"></p>&emsp;Farmasi</a>
                </li>
                <li>
                    <a href="<?= base_url('kasir/data.php') ?>" style="color: black"><p class="fas fa-money-bill-wave"></p>&emsp;Kasir</a>
                </li>
                <li>
                    <a href="<?= base_url('auth/logout.php') ?>"><span class="text-danger"><p class="fas fa-sign-out-alt"></p>&emsp;Logout</span></a> 
                </li>
            </ul>
        </div>
        

        <div class="main-content" style="margin-left: 345px;">
  		<header style="display: flex;background:#EECAB2; justify-content: space-between; padding: 1rem 1.5rem;box-shadow: 2px 2px 5px rgba(0,0,0,0.2);position: fixed;left: 345px;width: calc(100% - 345px);top:0;z-index: 100;border-radius: 1px  1px  1px 50px;">
            <div class="user-wrapper" style="margin-left:40px;">
            <?php
            //ambil data dari tb_user di database
            $ambildata=mysqli_query($con, "SELECT * FROM tb_user order by id_user desc");
            $a=mysqli_fetch_array($ambildata);
            ?>
  				<div>
  					<h4>Admin <?php echo $a['nama_user'];?></h4>
  					<small><?php echo $a['username'];?></small>
  				</div>
  			</div>
  		</header>
        </div>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                
            