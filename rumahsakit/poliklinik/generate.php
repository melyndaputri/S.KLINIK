<?php include_once('../_header.php'); ?>

<div class="box">
	<a href="#menu-toggle" class="" id="menu-toggle" style="font-size: 30px; color: black"><p class="fas fa-sliders-h"></p></a>
	<h1>Poliklinik</h1>
	<h4>
		<small>Tambah Data Poliklinik</small>
		<div class="container" style="height:34px;width: 120px;border-radius: 50px  1px  1px 50px;background:#EECAB2;margin-right:-35px;">
			<div class="pull-right"style="margin-right:30px;margin-top:6px;">
				<a href="data.php" class="btn btn-primary btn-xs" style="border-radius:72px;background:#EECAB2;border:none;color:black;"><i class="glyphicon glyphicon-chevron-left"></i> Kembali</a>
			</div>
		</div>
	</h4>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<form action="add.php" method="post">
				<div class="form-group">
					<label for="count_add">Banyaknya record yang akan ditambahkan</label>
					<input type="text" name="count_add" id="count_add" maxlength="2" pattern="[0-9]+" class="form-control" required="">
				</div>
				<div class="form-group">
					<center><input type="submit" name="generate" value="Generate" class="btn btn-success"style="border-radius:72px;background:#EECAB2;border:none;color:black;height:34px;width:500px;font-weight : bold ;"></center>
				</div>
			</form>
		</div>
	</div>
</div>

<?php include_once('../_footer.php'); ?>