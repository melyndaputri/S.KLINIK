<?php
include_once('../_header.php');
?>

<div class="box">
	<a href="#menu-toggle" class="" id="menu-toggle" style="font-size: 30px; color: black"><p class="fas fa-sliders-h"></p></a>
	<h1>Pasien</h1>
	<h4>
		<small>Tambah Data Pasien</small>
		<div class="container" style="height:34px;width: 120px;border-radius: 50px  1px  1px 50px;background:#EECAB2;margin-right:-35px;">
			<div class="pull-right" style="margin-right:30px;margin-top:6px;">
				<a href="data.php" class="btn btn-primary btn-xs" style="border-radius:72px;background:#EECAB2;border:none;color:black;"><i class="glyphicon glyphicon-chevron-left"></i> Kembali</a>
			</div>
		</div>
	</h4>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<form action="proses.php" method="post">
				
				<div class="form-group">
					<label for="identitas">Nomor Identitas</label>
					<input type="number" name="identitas" id="identitas" class="form-control" required="" autofocus="">
				</div>
				<div class="form-group">
					<label for="nama">Nama Pasien</label>
					<input type="text" name="nama" id="nama" class="form-control" required="">
				</div>
				<div class="form-group">
					<label for="tgl">Tanggal Lahir</label>
					<input type="date" name="tgl" id="tgl" class="form-control" value="<?= date('Y-m-d') ?>" required="" autofocus="">
				</div>
				<div class="form-group">
					<label for="jk">Jenis Kelamin</label>
					<div>
						<label class="radio-inline">
							<input type="radio" name="jk" id="jk" value="L" required=""> Laki - laki
						</label>
						<label class="radio-inline">
							<input type="radio" name="jk" value="P"> Perempuan
						</label>
					</div>
				</div>
				<div class="form-group">
					<label for="alamat">Alamat</label>
					<textarea name="alamat" id="alamat" class="form-control" required=""></textarea>
				</div>
				<div class="form-group">
					<label for="telp">No. Telepon</label>
					<input type="number" name="telp" id="telp" class="form-control" required="">
				</div>
				<div class="form-group">
					<center><input type="submit" name="add" value="Simpan" class="btn btn-success" style="border-radius:72px;background:#EECAB2;border:none;color:black;height:34px;width:500px;font-weight : bold ;"></center>
				</div>
			</form>
		</div>
	</div>
</div>

<?php include_once('../_footer.php'); ?>
