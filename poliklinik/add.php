<?php include_once('../_header.php');
require_once"../_config/conn.php"; ?>

<div class="box">
	<a href="#menu-toggle" class="" id="menu-toggle" style="font-size: 30px; color: black"><p class="fas fa-sliders-h"></p></a>
	<h1>Penjadwalan</h1>
	<h4>
		<small>Tambah Data Penjadwalan</small>
		<div class="container" style="height:34px;width: 147px;border-radius: 50px  1px  1px 50px;background:#EECAB2;margin-right:-35px;">
			<div class="pull-right" style="margin-right:30px;margin-top:6px;">
				<a href="../pasien/data.php" class="btn btn-primary btn-xs" style="border-radius:72px;background:#EECAB2;border:none;color:black;"><i class="glyphicon glyphicon-chevron-left"></i>Kembali Data</a>
			</div>
		</div>
		<p></p>
		
	</h4>
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2">
			<?php
			$id = @$_GET['id'];
			$sql_pasien = mysqli_query($con, "SELECT * FROM pasienbaru WHERE reg_baru='$id'") or die(mysqli_error($con));
			$data = mysqli_fetch_array($sql_pasien);
			$tgl_lahir 		= $data['tgl_lahir'];
			$umur 			= new DateTime($tgl_lahir);
			$sekarang 		= new DateTime();
			$usia			= $sekarang->diff($umur);
			?>
			<form action="proses.php" method="post">

					<div class="form-group">
						<label>Tanggal Kedatangan</label>
						<input name="tgl_kedatangan" type="date" class="form-control">
					</div>
					<div class="form-group">
						<label>Jam Kedatangan</label>
						<input name="jam" type="text" class="form-control" placeholder="hh:mm">
					</div>
					<div class="form-group">
						<label>No. RM</label>
						<input name="no_rkm_medis" id="no_rkm_medis" type="text" class="form-control" value="<?= $data['reg_baru'] ?>" readonly>
					</div>
					<div class="form-group">
						<label>Nama Pasien</label>
						<input name="nm_pasien" id="nm_pasien" type="text" class="form-control" value="<?= $data['nm_pasien'] ?>" readonly>
					</div>	
					<div class="form-group">
						<label>Gender</label>
						<input name="jk" id="jk" type="text" class="form-control" value="<?= $data['jk'] ?>" readonly>
						<!-- <td>
		                    <select name="jk" id="jk" type="text" class="form-control" placeholder="Gender ..">
		                        <option>Laki - Laki</option>
		                        <option>Perempuan</option>
		                    <select/>
	            		</td> -->
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
						<label>Nama Poli</label>
						<select class="form-control" name="spesialis">
							<option value="">- Pilih -</option>
								<?php 
								$dok=mysqli_query($con, "SELECT * from tb_dokter");
								while($b=mysqli_fetch_array($dok)){
									
									echo '<option value="'.$b['spesialis'].'">'.$b['spesialis'].'</option>';
									
								}
								?>
							</select>
					</div>
					<div class="form-group">
						<label>Rencana Perawatan</label>
						<input name="ren_perawatan" type="text" class="form-control" placeholder="Rencana perawatan ..">
					</div>
					<?php 
						$use=$_SESSION['user'];
						$fo=mysqli_query($con,"SELECT nama_user from tb_user where username='$use'");
						while($f=mysqli_fetch_array($fo)){
					?>								
					<div class="form-group">
						<input name="petugas" id="petugas" type="hidden" class="form-control" value="<?php echo $f['nama_user']; ?>">
					</div>
					<?php 
						}
					?>
					
					<div class="form-group">
						<label>Status Konfirmasi</label>
						<td>
		                    <select name="stts_konfirmasi" type="text" class="form-control" placeholder="Konfirmasi Kedatangan H-1..">
		                    	<option>-</option>
		                        <option>Confirmed</option>
		                        <option>Canceled</option>
		                        <option>Rescheduled</option>
		                    <select/>
		            	</td>
					</div>
					<div class="form-group">
						<label>Keterangan</label>
						<input name="ket" type="text" class="form-control" placeholder="Keterangan..">
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