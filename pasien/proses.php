<?php
require_once"../_config/config.php";

$reg_baru  	   = $_POST['reg_baru'];
$rt            = $_POST['rt'];
$rw            = $_POST['rw'];
$kel           = $_POST['kel'];
$kec           = $_POST['kec'];
// $klinik	 	   = $_POST['klinik'];
$no_ktp  	   = $_POST['no_ktp'];
$nm_pasien	   = $_POST['nm_pasien'];
$jk			   = $_POST['jk'];
$tmp_lahir     = $_POST['tmp_lahir'];
$tgl_lahir	   = $_POST['tgl_lahir'];
$alamat        = $_POST['alamat'];
$kota          = $_POST['kota'];
$stts_nikah    = $_POST['stts_nikah'];
$agama         = $_POST['agama'];
$pnd		   = $_POST['pnd'];
$pekerjaan	   = $_POST['pekerjaan'];
$gol_darah	   = $_POST['gol_darah'];
$rh	 		   = $_POST['rh'];
$no_tlp_rmh	   = $_POST['no_tlp_rmh'];
$no_tlp	  	   = $_POST['no_tlp'];
$email 		   = $_POST['email'];
$warganegara   = $_POST['warganegara'];
$pembayaran	   = $_POST['pembayaran'];
$namakeluarga  = $_POST['namakeluarga'];
$keluarga  	   = $_POST['keluarga'];
$no_hppj	   = $_POST['no_hppj'];
$alamatpj	   = $_POST['alamatpj'];


// $query = mysqli_query($connect, "INSERT INTO pasien(no_rkm_medis, no_ktp, nm_pasien, jk, tmp_lahir, tgl_lahir, alamat, kota, stts_nikah, agama, pnd, pekerjaan, gol_darah, rh, no_tlp_rmh, no_tlp, email, warganegara, klinik, pembayaran, namakeluarga, keluarga, no_hppj, alamatpj) 
//                       VALUES ('$no_rkm_medis','$no_ktp', '$nm_pasien', '$jk', '$tmp_lahir', '$tgl_lahir', '$alamat', '$kota', '$stts_nikah', '$agama', '$pnd', '$pekerjaan', '$gol_darah','$rh', '$no_tlp_rmh', '$no_tlp', '$email', '$warganegara', '$klinik', '$pembayaran', '$namakeluarga', '$keluarga', '$no_hppj', '$alamatpj')");



$query = mysqli_query($con, "INSERT INTO pasienbaru(reg_baru, rt, rw, kel, kec, no_ktp, nm_pasien, jk, tmp_lahir, tgl_lahir, alamat, kota, stts_nikah, agama, pnd, pekerjaan, gol_darah, rh, no_tlp_rmh, no_tlp, email, warganegara, pembayaran, namakeluarga, keluarga, no_hppj, alamatpj) 

					VALUES ('$reg_baru', '$rt','$rw','$kel','$kec','$no_ktp', '$nm_pasien', '$jk', '$tmp_lahir', '$tgl_lahir', '$alamat', '$kota', '$stts_nikah', '$agama', '$pnd', '$pekerjaan', '$gol_darah','$rh', '$no_tlp_rmh', '$no_tlp', '$email', '$warganegara', '$pembayaran', '$namakeluarga', '$keluarga', '$no_hppj', '$alamatpj')");
echo "<script>alert('Data berhasil diinput!');window.location='data.php';</script>";
