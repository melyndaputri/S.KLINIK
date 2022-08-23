<?php
include_once('../_header.php');
?>

<div class="box">
	<a href="#menu-toggle" class="" id="menu-toggle" style="font-size: 30px; color: black"><p class="fas fa-sliders-h"></p></a>
	<h1>Pasien</h1>
	<h4>
		<small>Edit Status Konfirmasi Pasien</small>
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
					<form action="editstatusact.php" method="post">
						<table class="table">
							<tr>
								<td></td>
								<td><input type="hidden" name="id_penjadwalan" value="<?php echo $d['id_penjadwalan'] ?>"></td>
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
								<td>Status Konfirmasi Lama</td>
								<td><input type="text" class="form-control"  value="<?php echo $d['stts_konfirmasi'] ?>" readonly></td>
							</tr>
							<tr>
								<td>Status Konfirmasi Baru</td>
								<td>
				                    <select name="stts_konfirmasi" type="text" class="form-control" placeholder="Konfirmasi Kedatangan H-1..">
				                    	<option>-</option>
				                        <option>Confirmed</option>
				                        <option>Canceled</option>
				                        <option>Rescheduled</option>
				                    <select/>
				            	</td>
							</tr>		
							<tr>
								<td><input type="submit" class="btn btn-info" value="Simpan"></td>
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
