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
			<?php
	            $query = mysqli_query($con, "SELECT max(reg_baru) as idTerbesar FROM pasienbaru");
	            $data = mysqli_fetch_array($query);
	            $reg_b = $data['idTerbesar'];
	            $urutan = (int) substr($reg_b, 3, 4);
	            $urutan++;
	            // $huruf = "Reg";
	            $reg_b = sprintf("%06s", $urutan);
        	?>
			<form action="proses.php" method="post">
					<div class="form-group">
						<input name="reg_baru" type="hidden" class="form-control" value="<?php echo $reg_b ?>" readonly >
					</div>
					<div class="form-group">
						<label>No KTP</label>
						<input name="no_ktp" type="text" class="form-control" placeholder="No Identitas ..">
					</div>
					<div class="form-group">
						<label>Nama Pasien</label>
						<input name="nm_pasien" type="text" class="form-control" placeholder="Nama Pasien ..">
					</div>
					<div class="form-group">
						<label>Gender</label>
						<td>
                            <select name="jk" class="form-control">
                            	<option>-</option>
                                <option>Laki-Laki</option>
                                <option>Perempuan</option>
                            </select>
                        </td>
					</div>
					<div class="form-group">
						<label>Tempat Lahir</label>
						<input name="tmp_lahir" type="text" class="form-control" placeholder="Tempat Lahir ..">
					</div>	
					<div>	
						<label>Tanggal Lahir</label>
						<input name="tgl_lahir" type="date" class="form-control" placeholder="Tanggal Lahir ..">
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<input name="alamat" type="text" class="form-control" placeholder="Alamat ..">
					</div>
					<div class="form-group">
						<label>RT</label>
						<input name="rt" type="text" class="form-control" placeholder="RT ..">
					</div>	
					<div class="form-group">
						<label>RW</label>
						<input name="rw" type="text" class="form-control" placeholder="RW ..">
					</div>	
					<div class="form-group">
						<label>Kelurahan</label>
						<input name="kel" type="text" class="form-control" placeholder="Kelurahan ..">
					</div>	
					<div class="form-group">
						<label>Kecamatan</label>
						<input name="kec" type="text" class="form-control" placeholder="Kecamatan ..">
					</div>	
					<div class="form-group">
						<label>Kota</label>
						<input name="kota" type="text" class="form-control" placeholder="Kota ..">
					</div>
					<div class="form-group">
						<label>No. Telp Rumah</label>
						<input name="no_tlp_rmh" type="text" class="form-control" placeholder="No Tlp Rumah ..">
					</div>
					<div class="form-group">
						<label>No. Telp HP</label>
						<input name="no_tlp" type="text" class="form-control" placeholder="No HP ..">
					</div>		
					<div class="form-group">
						<label>Email</label>
						<input name="email" type="text" class="form-control" placeholder="Email ..">
					</div>	
					<div class="form-group">
						<label>Agama</label>
						<td>
                            <select name="agama" class="form-control">
                            	<option>-</option>
                                <option>Islam</option>
                                <option>Katolik</option>
                                <option>Protestan</option>
                                <option>Buddha</option>
                                <option>Hindu</option>
                                <option>Khonghucu</option>
                            </select>
                        </td>
					</div>
					<div class="form-group">
						<label>Status Perkawinan</label>
						<input name="stts_nikah" type="text" class="form-control" placeholder="Status Perkawinan ..">
					</div>	
					<div class="form-group">
						<label>Pendidikan Terakhir</label>
						<td>
                            <select name="pnd" class="form-control">
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
						<input name="pekerjaan" type="text" class="form-control" placeholder="Pekerjaan ..">
					</div>	
					<div class="form-group">
						<label>Gol Darah</label>
						<td>
                            <select name="gol_darah" class="form-control">
                            	<option>-</option>
                                <option>A</option>
                                <option>B</option>
                                <option>AB</option>
                                <option>O</option>
                            </select>
                        </td>
					</div>	
					<div class="form-group">
						<label>Rh</label>
						<input name="rh" type="text" class="form-control" placeholder="rh ..">
					</div>	
					<div class="form-group">
						<label>Kewarganegaraan</label>
						<input name="warganegara" type="text" class="form-control" placeholder="Kewarganegaraan ..">
					</div>	
					<!-- <div class="form-group">
						<label>Klinik Tujuan</label>
						<select name="klinik" id="poli" class="form-control" required="">
						<option value="">- Pilih -</option>
						<?php
						$sql_poli = mysqli_query($con, "SELECT * FROM tb_poliklinik ORDER BY nama_poli ASC") or die(mysqli_error($con));
						while($data_poli = mysqli_fetch_array($sql_poli)){
							echo '<option value="'.$data_poli['id_poli'].'">'.$data_poli['nama_poli'].'</option>';
						} ?>
					</select>
					</div> -->
					<div class="form-group">
						<label>Pembayaran</label>
						<td>
                            <select name="pembayaran" class="form-control">
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
						<input name="namakeluarga" type="text" class="form-control" placeholder="Nama Kontak Darurat ..">
					</div>
					<div class="form-group">
						<label>Hubungan Kontak Darurat</label>
						<input name="keluarga" type="text" class="form-control" placeholder="Hubungan Kontak Darurat ..">
					</div>
					<div class="form-group">
						<label>No Kontak Darurat</label>
						<input name="no_hppj" type="text" class="form-control" placeholder="No Kontak Darurat ..">
					</div>
					<div class="form-group">
						<label>Alamat Kontak Darurat</label>
						<input name="alamatpj" type="text" class="form-control" placeholder="Alamat Kontak Darurat ..">
					</div>												
				<div class="form-group">
					<input type="submit" name="add" class="btn btn-success" value="Simpan" style="border-radius:72px;background:#EECAB2;border:none;color:black;height:34px;width:585px;font-weight : bold ;">
				</div>
			</form>
		</div>
	</div>
</div>

<!-- <div class="form-group">
					<center><input type="submit" name="add" value="Simpan" class="btn btn-success" style="border-radius:72px;background:#EECAB2;border:none;color:black;height:34px;width:500px;font-weight : bold ;"></center>
				</div> -->

<?php include_once('../_footer.php'); ?>
