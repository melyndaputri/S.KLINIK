<?php 
require_once"../_config/config.php";
$reg_baru  	   = $_POST['reg_baru'];
$rt            = $_POST['rt'];
$rw            = $_POST['rw'];
$kel           = $_POST['kel'];
$kec           = $_POST['kec'];
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


mysqli_query($con, "UPDATE pasienbaru set rt = '$rt', rw = '$rw', kel = '$kel', kec = '$kec', no_ktp = '$no_ktp', nm_pasien = '$nm_pasien', jk = '$jk', tmp_lahir = '$tmp_lahir', tgl_lahir = '$tgl_lahir', alamat = '$alamat', kota = '$kota', stts_nikah = '$stts_nikah', agama = '$agama', pnd = '$pnd', pekerjaan = '$pekerjaan', gol_darah = '$gol_darah', rh = '$rh', no_tlp_rmh = '$no_tlp_rmh', no_tlp = '$no_tlp', email = '$email', warganegara = '$warganegara', pembayaran = '$pembayaran', namakeluarga = '$namakeluarga', keluarga = '$keluarga', no_hppj = '$no_hppj', alamatpj = '$alamatpj' where reg_baru = '$reg_baru'")or die(mysqli_error($con));



echo "<script>alert('Data berhasil diupdate!');window.location='data.php';</script>";

?>