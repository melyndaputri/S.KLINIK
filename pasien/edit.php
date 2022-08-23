<?php
include_once('../_header.php');
?>

<div class="box">
	<a href="#menu-toggle" class="" id="menu-toggle" style="font-size: 30px; color: black"><p class="fas fa-sliders-h"></p></a>
	<h1>Pasien</h1>
	<h4>
		<small>Edit Data Pasien</small>
		<div class="container" style="height:34px;width: 147px;border-radius: 50px  1px  1px 50px;background:#EECAB2;margin-right:-35px;">
			<div class="pull-right" style="margin-right:30px;margin-top:6px;">
				<a href="data.php" class="btn btn-primary btn-xs" style="border-radius:72px;background:#EECAB2;border:none;color:black;"><i class="glyphicon glyphicon-chevron-left"></i>Kembali Data</a>
			</div>
		</div>
	</h4>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<?php
			$id = @$_GET['id'];
			$sql_pasien = mysqli_query($con, "SELECT * FROM pasienbaru WHERE reg_baru='$id'") or die(mysqli_error($con));
			$data = mysqli_fetch_array($sql_pasien);
			?>

			<form action="editproses.php" method="post">
					<div class="form-group">
						<input name="reg_baru" type="hidden" class="form-control" value="<?php echo $id ?>" readonly >
					</div>
					<div class="form-group">
						<label>No Identitas</label>
						<input name="no_ktp" type="text" class="form-control" value="<?= $data['no_ktp'] ?>" placeholder="No Identitas ..">
					</div>
					<div class="form-group">
						<label>Nama Pasien</label>
						<input name="nm_pasien" type="text" class="form-control" value="<?= $data['nm_pasien'] ?>" placeholder="Nama Pasien ..">
					</div>
					<div class="form-group">
						<label>Gender</label>
						<input name="jk" type="text" class="form-control" value="<?= $data['jk'] ?>" placeholder="Nama Pasien ..">
					</div>
					<div class="form-group">
						<label>Tempat Lahir</label>
						<input name="tmp_lahir" type="text" class="form-control" value="<?= $data['tmp_lahir'] ?>" placeholder="Tempat Lahir ..">
					</div>	
					<div>	
						<label>Tanggal Lahir</label>
						<input name="tgl_lahir" type="date" class="form-control" value="<?= $data['tgl_lahir'] ?>" placeholder="Tanggal Lahir ..">
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<input name="alamat" type="text" class="form-control" value="<?= $data['alamat'] ?>" placeholder="Alamat ..">
					</div>
					<div class="form-group">
						<label>RT</label>
						<input name="rt" type="text" class="form-control" value="<?= $data['rt'] ?>" placeholder="RT ..">
					</div>	
					<div class="form-group">
						<label>RW</label>
						<input name="rw" type="text" class="form-control" value="<?= $data['rw'] ?>" placeholder="RW ..">
					</div>	
					<div class="form-group">
						<label>Kelurahan</label>
						<input name="kel" type="text" class="form-control" value="<?= $data['kel'] ?>" placeholder="Kelurahan ..">
					</div>	
					<div class="form-group">
						<label>Kecamatan</label>
						<input name="kec" type="text" class="form-control" value="<?= $data['kec'] ?>" placeholder="Kecamatan ..">
					</div>	
					<div class="form-group">
						<label>Kota</label>
						<input name="kota" type="text" class="form-control" value="<?= $data['kota'] ?>" placeholder="Kota ..">
					</div>
					<div class="form-group">
						<label>No Tlp Rumah</label>
						<input name="no_tlp_rmh" type="text" class="form-control" value="<?= $data['no_tlp_rmh'] ?>" placeholder="No Tlp Rumah ..">
					</div>
					<div class="form-group">
						<label>No HP</label>
						<input name="no_tlp" type="text" class="form-control" value="<?= $data['no_tlp'] ?>" placeholder="No HP ..">
					</div>		
					<div class="form-group">
						<label>Email</label>
						<input name="email" type="text" class="form-control" value="<?= $data['email'] ?>" placeholder="Email ..">
					</div>	
					<div class="form-group">
						<label>Agama</label>
						<input name="agama" type="text" class="form-control" value="<?= $data['agama'] ?>" placeholder="Email ..">
					</div>
					<div class="form-group">
						<label>Status</label>
						<input name="stts_nikah" type="text" class="form-control" value="<?= $data['stts_nikah'] ?>" placeholder="Status Nikah ..">
					</div>	
					<div class="form-group">
						<label>Pendidikan</label>
						<td>
                            <select name="pnd" class="form-control" value="<?= $data['pnd'] ?>">
                                    <option>TS</option>
                                    <option>PAUD</option>
                                    <option>TK</option>
                                    <option>SD</option>
                                    <option>SMP</option>
                                    <option>SMA</option>
                                    <option>SMK</option>
                                    <option>D1</option>
                                    <option>D2</option>
                                    <option>D3</option>
                                    <option>S1</option>
                                    <option>S2</option>
                                    <option>S3</option>
                                </select>
                        </td>
					</div>
					<div class="form-group">
						<label>Pekerjaan</label>
						<input name="pekerjaan" type="text" class="form-control" value="<?= $data['pekerjaan'] ?>" placeholder="Pekerjaan ..">
					</div>	
					<div class="form-group">
						<label>Gol Darah</label>
						<td>
                            <select name="gol_darah" class="form-control" value="<?= $data['gol_darah'] ?>">
                            	<option><?php echo $data['gol_darah']?></option>
                                <option>A</option>
                                <option>B</option>
                                <option>AB</option>
                                <option>O</option>
                            </select>
                        </td>
					</div>	
					<div class="form-group">
						<label>Rh</label>
						<input name="rh" type="text" class="form-control" value="<?= $data['rh'] ?>" placeholder="rh ..">
					</div>	
					<div class="form-group">
						<label>Kewarganegaraan</label>
						<input name="warganegara" type="text" class="form-control" value="<?= $data['warganegara'] ?>" placeholder="Kewarganegaraan ..">
					</div>	
					<div class="form-group">
						<label>Pembayaran</label>
						<td>
                            <select name="pembayaran" class="form-control" value="<?= $data['pembayaran'] ?>">
                            	<option>Cash</option>
                                <option>Debit</option>
                                <option>Asuransi</option>
                                <option>Kartu Kredit</option>
                                <option>Reimburse</option>
                            </select>
                        </td>
					</div>
					<div class="form-group">
						<label>Nama Kontak Darurat</label>
						<input name="namakeluarga" type="text" class="form-control" value="<?= $data['namakeluarga'] ?>" placeholder="Nama Kontak Darurat ..">
					</div>
					<div class="form-group">
						<label>Hub Kontak Darurat</label>
						<input name="keluarga" type="text" class="form-control" value="<?= $data['keluarga'] ?>" placeholder="Hub Kontak Darurat ..">
					</div>
					<div class="form-group">
						<label>No Kontak Darurat</label>
						<input name="no_hppj" type="text" class="form-control" value="<?= $data['no_hppj'] ?>" placeholder="No Kontak Darurat ..">
					</div>
					<div class="form-group">
						<label>Alamat Kontak Darurat</label>
						<input name="alamatpj" type="text" class="form-control" value="<?= $data['alamatpj'] ?>" placeholder="Alamat Kontak Darurat ..">
					</div>												
				<div class="form-group">
					<input type="submit" name="add" class="btn btn-success" value="Simpan" style="border-radius:72px;background:#EECAB2;border:none;color:black;height:34px;width:585px;font-weight : bold ;">
				</div>
			</form>
		</div>
	</div>
</div>

<?php include_once('../_footer.php'); ?>
