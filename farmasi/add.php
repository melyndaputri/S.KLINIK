<?php
include_once('../_header.php');
?>

<div class="box">
	<a href="#menu-toggle" class="" id="menu-toggle" style="font-size: 30px; color: black"><p class="fas fa-sliders-h"></p></a>
	<h1>Farmasi</h1>
	<h4>
		<small>Tambah Data Farmasi</small>
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
				$sql_pasien = mysqli_query($con, "SELECT * FROM laboratorium WHERE no_rm='$id'") or die(mysqli_error($con));
				$data = mysqli_fetch_array($sql_pasien);
				$tgl_lahir 		= $data['tgl_lahir'];
				$umur 			= new DateTime($tgl_lahir);
				$sekarang 		= new DateTime();
				$usia			= $sekarang->diff($umur);
				?>
				<form action="proses.php" method="post">
				
				    <div class="form-group">
					    <label>No. RM</label>
						<input name="no_rm" id="no_rm" type="text" class="form-control" value="<?= $data['no_rm'] ?>" readonly>
					</div>
					<div class="form-group">
						<label>Nama Pasien</label>
						<input name="nama_pasien" id="nama_pasien" type="text" class="form-control" value="<?= $data['nama_pasien'] ?>" readonly>
					</div>	
					<div class="form-group">
						<label>Gender</label>
						<input name="jk" id="jk" type="text" class="form-control" value="<?= $data['jk'] ?>" readonly>
					</div>
					<div class="form-group">
						<label>No Telp</label>
						<input name="no_tlp" id="no_tlp" type="text" class="form-control" value="<?= $data['no_telp'] ?>" readonly>
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
						<input name="nm_dokter" type="text" class="form-control" id="nm_dokter" value="<?= $data['nm_dokter'] ?>" readonly>
					</div>
					<div class="form-group">
						<label>Diagnosis</label>
						<input name="diagnosis" type="text" class="form-control" id="diagnosis" value="<?= $data['diagnosis'] ?>" readonly>
					</div>
					
				<div class="form-group">
					<label for="obat">Obat</label>
					<select name="nama_obat" id="nama_obat" class="form-control" required="">
						<option value="">- Pilih -</option>
					
						<?php 
								$dok=mysqli_query($con, "SELECT * from tb_obat");
								while($b=mysqli_fetch_array($dok)){
									
									echo '<option value="'.$b['nama_obat'].'">'.$b['nama_obat'].'</option>';
									
								}
						?>
						
					</select>
				</div>
				<div class="form-group">
						<label>Aturan Obat</label>
						<td>
		                    <select name="aturan_obat" type="text" class="form-control" placeholder="Aturan Penggunaan Obat..">
		                    	<option>- Pilih -</option>
		                        <option>Sehari 1x Setelah Makan</option>
								<option>Sehari 2x Setelah Makan</option>
		                        <option>Sehari 3x Setelah Makan</option>
		                        
		                    </select>
		            	</td>
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




<?php include_once('../_footer.php'); ?>
