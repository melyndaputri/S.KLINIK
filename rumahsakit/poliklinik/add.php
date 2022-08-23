<?php include_once('../_header.php'); ?>

<div class="box">
	<a href="#menu-toggle" class="" id="menu-toggle" style="font-size: 30px; color: black"><p class="fas fa-sliders-h"></p></a>
	<h1>Poliklinik</h1>
	<h4>
		<small>Tambah Data Poliklinik</small>
		<div class="container" style="height:34px;width: 147px;border-radius: 50px  1px  1px 50px;background:#EECAB2;margin-right:-35px;">
			<div class="pull-right" style="margin-right:30px;margin-top:6px;">
				<a href="data.php" class="btn btn-primary btn-xs" style="border-radius:72px;background:#EECAB2;border:none;color:black;"><i class="glyphicon glyphicon-chevron-left"></i>Kembali Data</a>
			</div>
		</div>
		<p></p>
		<div class="container" style="height:34px;width: 170px;border-radius: 50px  1px  1px 50px;background:#EECAB2;margin-right:-35px;">
			<div class="pull-right" style="margin-right:30px;margin-top:6px;">
				<a href="generate.php" class="btn btn-primary btn-xs" style="border-radius:72px;background:#EECAB2;border:none;color:black;"> <i class="glyphicon glyphicon-plus"> </i>Tambah data lagi</a>
			</div>
		</div>
	</h4>
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2">
			<form action="proses.php" method="post">
				<input type="hidden" name="total" value="<?= @$_POST['count_add']; ?>">
				<table class="table">
					<tr>
						<th>#</th>
						<th>Nama Poliklinik</th>
						<th>Lokasi</th>
					</tr>
					<?php
					for($i=1; $i<=$_POST['count_add']; $i++){ ?>
						<tr>
							<td><?= $i; ?></td>
							<td>
								<input type="text" name="nama-<?= $i; ?>" class="form-control" required>
							</td>
							<td>
								<input type="text" name="lokasi-<?= $i; ?>" class="form-control" required>
							</td>
						</tr>
					<?php
					}
					?>
				</table>
				<div class="form-group">
				<center><input type="submit" name="add" value="Simpan Semua" class="btn btn-success" style="border-radius:72px;background:#EECAB2;border:none;color:black;height:34px;width:500px;font-weight : bold ;"></center>
				</div>
			</form>
		</div>
	</div>
</div>

<?php include_once('../_footer.php'); ?>