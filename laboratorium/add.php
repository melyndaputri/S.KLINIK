<?php include_once('../_header.php');
require_once"../_config/conn.php"; ?>

<div class="box">
	<a href="#menu-toggle" class="" id="menu-toggle" style="font-size: 30px; color: black"><p class="fas fa-sliders-h"></p></a>
	<h1>Laboratorium</h1>
	<h4>
		<small>Tambah Data Laboratorium</small>
		<div class="container" style="height:34px;width: 147px;border-radius: 50px  1px  1px 50px;background:#EECAB2;margin-right:-35px;">
			<div class="pull-right" style="margin-right:30px;margin-top:6px;">
				<a href="../poliklinik/data.php" class="btn btn-primary btn-xs" style="border-radius:72px;background:#EECAB2;border:none;color:black;"><i class="glyphicon glyphicon-chevron-left"></i>Kembali Data</a>
			</div>
		</div>
		<p></p>
		
	</h4>
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2">
			<?php
			$id = @$_GET['id'];
			$sql_pasien = mysqli_query($con, "SELECT * FROM penjadwalan INNER JOIN tb_dokter ON penjadwalan.nm_dokter = tb_dokter.spesialis") or die(mysqli_error($con));
			$data = mysqli_fetch_array($sql_pasien);
			$tgl_lahir 		= $data['tgl_lahir'];
			$umur 			= new DateTime($tgl_lahir);
			$sekarang 		= new DateTime();
			$usia			= $sekarang->diff($umur);
			?>
			<form action="proses.php" method="post">
					<div class="form-group">
						<label>No. RM</label>
						<input name="no_rm" id="no_rkm_medis" type="text" class="form-control" value="<?= $data['no_rk_medis'] ?>" readonly>
					</div>
					<div class="form-group">
						<label>Nama Pasien</label>
						<input name="nama_pasien" id="nama_pasien" type="text" class="form-control" value="<?= $data['nm_pasien'] ?>" readonly>
					</div>	
					<div class="form-group">
						<label>Gender</label>
						<input name="jk" id="jk" type="text" class="form-control" value="<?= $data['jk'] ?>" readonly>
					</div>
					<div class="form-group">
						<label>No Telp</label>
						<input name="no_tlp" id="no_tlp" type="text" class="form-control" value="<?= $data['no_tlp'] ?>" readonly>
					</div>
					<div class="form-group">
						<label>Tanggal Lahir</label>
						<input name="tgl_lahir" id="tgl_lahir" type="date" class="form-control" value="<?= $data['tgl_lahir'] ?>" readonly>
					</div>	
					<div class="form-group">
						<label>Umur</label>
						<input name="umur" type="text" class="form-control" id="age" value="<?php echo $usia->y." Thn"; ?>" readonly>
					</div>
					<div class="form-group">
						<label>Dokter Spesialis/Umum</label>
						<input name="nm_dokter" type="text" class="form-control" id="nm_dokter" value="<?= $data['nama_dokter'] ?>" readonly>
					</div>
					
					<div class="form-group">
						<label>Diagnosis</label>
						<input name="diagnosis" type="text" class="form-control" placeholder="Keterangan..">
					</div>
					<div class="form-group">
					<input type="submit" name="add" class="btn btn-success" value="Simpan" style="border-radius:72px;background:#EECAB2;border:none;color:black;height:34px;width:585px;font-weight : bold ; margin-left: 100px">
				</div>													
			</form>
		</div>
	</div>
</div>

<script>
	function getAge() {
		var date = document.getElementById('tgl_lahir').value;
	 
		if(date === ""){
			alert("Please complete the required field!");
	    }else{
			var today = new Date();
			var birthday = new Date(date);
			var year = 0;
			if (today.getMonth() < birthday.getMonth()) {
				year = 1;
			} else if ((today.getMonth() == birthday.getMonth()) && today.getDate() < birthday.getDate()) {
				year = 1;
			}
			var age = today.getFullYear() - birthday.getFullYear() - year;
	 
			if(age < 0){
				age = 0;
			}
			document.getElementById('age').value = age;
		}
	}

</script>

<?php include_once('../_footer.php'); ?>