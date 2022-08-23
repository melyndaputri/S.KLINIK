<?php
include_once('../_header.php');
?>

<div class="box">
	<a href="#menu-toggle" class="" id="menu-toggle" style="font-size: 30px; color: black"><p class="fas fa-sliders-h"></p></a>
	<h1>Pembayaran</h1>
	<h4>
		<small>Tambah Data Pembayaran</small>
		<div class="container" style="height:34px;width: 120px;border-radius: 50px  1px  1px 50px;background:#EECAB2;margin-right:-35px;">
			<div class="pull-right"style="margin-right:30px;margin-top:6px;">
				<a href="data.php" class="btn btn-warning btn-xs" style="border-radius:72px;background:#EECAB2;border:none;color:black;"><i class="glyphicon glyphicon-chevron-left"></i> Kembali</a>
			</div>
		</div>
	</h4>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
		        <?php
				$id = @$_GET['id'];
				$sql_pasien = mysqli_query($con, "SELECT * FROM farmasi INNER JOIN tb_obat ON farmasi.nm_obat = tb_obat.nama_obat WHERE no_rm = '$id'") or die(mysqli_error($con));
				$data = mysqli_fetch_array($sql_pasien);
				$tgl_lahir 		= $data['tgl_lahir'];
				$umur 			= new DateTime($tgl_lahir);
				$sekarang 		= new DateTime();
				$usia			= $sekarang->diff($umur);
				?>
				<form action="proses_pembayaran.php" name="formPembayaran" method="post">
				
				    <div class="form-group">
					    <label>No. RM</label>
						<input name="no_rm" id="no_rm" type="text" class="form-control" value="<?= $data['no_rm'] ?>" readonly>
					</div>
					<div class="form-group">
						<label>Nama Pasien</label>
						<input name="nama_pasien" id="nama_pasien" type="text" class="form-control" value="<?= $data['nama_pasien'] ?>" readonly>
					</div>	
					<div class="form-group">
						<label>Dokter Spesialis/Umum</label>
						<input name="nm_dokter" type="text" class="form-control" id="nm_dokter" value="<?= $data['nm_dokter'] ?>" readonly>
					</div>
					<div class="form-group">
						<label>Diagnosis</label>
						<input name="diagnosis" type="text" class="form-control" id="diagnosis" value="<?= $data['diagnosis'] ?>" readonly>
					</div>
                    <div class="form-group">
						<label>Nama Obat</label>
						<input name="diagnosis" type="text" class="form-control" id="diagnosis" value="<?= $data['nm_obat'] ?>" readonly>
					</div>
                    <div class="form-group">
						<label>Aturan Obat</label>
						<input name="aturan_obat" type="text" class="form-control" id="aturan_obat" value="<?= $data['aturan_pakai'] ?>" readonly>
					</div>
                    <div class="form-group">
						<label>Total Harga</label>
						<input name="total_harga" type="text" class="form-control" id="total_harga" value="<?= $data['harga'] ?>" readonly>
					</div>
                    <div class="form-group">
						<label>Jumlah Uang</label>
						<input name="jumlah_uang" type="text" class="form-control" id="jumlah_uang" onkeyup="getKembali(this)&cek_jumlah_masuk(this)">
					</div>
                    <div class="form-group">
					<!-- <input type="reset" name="reset" value="Reset" class="btn btn-default" style="border-radius:60px;color:black;"> -->
                    <div class="form-group">
						<label>Total Kembalian</label>
						<input name="total_kembali" type="text" class="form-control" id="total_kembali">
					</div>
                    
					
				
				
				
				<div class="form-group">
					<!-- <input type="reset" name="reset" value="Reset" class="btn btn-default" style="border-radius:60px;color:black;"> -->
					<input type="submit" name="add" value="Simpan" class="btn btn-success" style="border-radius:72px;background:#EECAB2;border:none;color:black;height:34px;width:500px;font-weight : bold ; margin-left: 0px">
				</div>
			</form>
			<script>
				CKEDITOR.replace( 'keluhan' );
			</script>
		</div>
	</div>
</div>

<script>
	function cek_jumlah_masuk(input) {
    jml = document.formPembayaran.jumlah_uang.value;
    var jumlah = eval(jml);
    if(jumlah < 1){
      alert('Jumlah Masuk Tidak Boleh Nol !!');
      input.value = input.value.substring(0,input.value.length-1);
    }
  }
    function getKembali(){
        var totalHarga = document.getElementById('total_harga').value;
        if(totalHarga === ""){
            alert("Please complete the required field!");
        }else{
            var bayar = document.getElementById('jumlah_uang').value;
            var calculate = bayar - totalHarga;
            document.formPembayaran.total_kembali.value = (calculate);
            // document.getElementById('total_kembali').value = calculate;
        }
    }
</script>


<?php include_once('../_footer.php'); ?>
