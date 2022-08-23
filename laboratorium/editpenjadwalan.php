<?php
include_once('../_header.php');
?>

<div class="box">
	<a href="#menu-toggle" class="" id="menu-toggle" style="font-size: 30px; color: black"><p class="fas fa-sliders-h"></p></a>
	<h1>Penjadwalan</h1>
	<h4>
		<small>Edit Data Penjadwalan</small>
		<div class="container" style="height:34px;width: 120px;border-radius: 50px  1px  1px 50px;background:#EECAB2;margin-right:-35px;">
			<div class="pull-right" style="margin-right:30px;margin-top:6px;">
				<a href="data.php" class="btn btn-primary btn-xs" style="border-radius:72px;background:#EECAB2;border:none;color:black;"><i class="glyphicon glyphicon-chevron-left"></i> Kembali</a>
			</div>
		</div>
	</h4>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<?php
			$id_penjadwalan=$_GET['id'];
			$det=mysqli_query($con, "SELECT * from penjadwalan where id_penjadwalan='$id_penjadwalan'")or die(mysql_error());
			while($d=mysqli_fetch_array($det)){
			?>					
				<form action="editpenjadwalanact.php" method="post">
					<table class="table">
						<tr>
							<td></td>
							<td><input type="hidden" name="id_penjadwalan" value="<?php echo $d['id_penjadwalan'] ?>"></td>
						</tr>
						<tr>
							<td class="col-md-2">Tanggal Kedatangan</td>
							<td><input type="date" class="form-control" name="tgl_kedatangan" value="<?php echo $d['tgl_kedatangan'] ?>"></td>
						</tr>
						<tr>
							<td>Jam Kedatangan</td>
							<td><input type="text" class="form-control" name="jam" value="<?php echo $d['jam'] ?>"></td>
						</tr>
						<tr>
							<td>Status Pendaftar</td>
							<td><input type="text" class="form-control" name="no_rkm_medis" value="<?php echo $d['no_rk_medis'] ?>" readonly></td>
						</tr>
						<tr>
							<td>Nama Lengkap</td>
							<td><input type="text" class="form-control" name="nm_pasien" value="<?php echo $d['nm_pasien'] ?>" readonly></td>
						</tr>
						<tr>
							<td>Gender</td>
							<td><input type="text" class="form-control" name="jk" value="<?php echo $d['jk'] ?>" readonly></td>
						</tr>
						<tr>
							<td>Tanggal Lahir</td>
							<td><input type="text" class="form-control" name="tgl_lahir" value="<?php echo $d['tgl_lahir'] ?>" readonly></td>
						</tr>
						<tr>
							<td>Umur</td>
							<td><input type="text" class="form-control" name="umur" value="<?php echo $d['umur'] ?>" readonly></td>
						</tr>
						<tr>
							<td>No Telp</td>
							<td><input type="text" class="form-control" name="no_tlp" value="<?php echo $d['no_tlp'] ?>" readonly></td>
						</tr>
						<tr>
							<td>Dokter Tujuan Spesialis/Umum</td>
							<td><input type="text" class="form-control" name="nm_dokter" value="<?php echo $d['nm_dokter'] ?>" readonly></td>
						</tr>
						<tr>
							<td>Rencana Perawatan</td>
							<td><input type="text" class="form-control" name="ren_perawatan" value="<?php echo $d['ren_perawat'] ?>" readonly></td>
						</tr>
						<tr>
							<td>Petugas</td>
							<td><input type="text" class="form-control" name="petugas" value="<?php echo $d['petugas'] ?>" readonly></td>
						</tr>
						<tr>
							<td>Keterangan</td>
							<td><input type="text" class="form-control" name="ket" value="<?php echo $d['ket'] ?>" readonly></td>
						</tr>



						<tr>
							<td></td>
							<td>
							<input type="submit" class="btn btn-success" value="Simpan" style="border-radius:72px;background:#EECAB2;border:none;color:black;height:34px;width:585px;font-weight : bold ; margin-left: -10px></td>
						</tr>
					</table>
				</form>
				<?php 
			}
			?>
		</div>
	</div>
</div>

<?php include_once('../_footer.php'); ?>
