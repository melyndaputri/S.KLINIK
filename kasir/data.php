<?php include_once('../_header.php'); ?>

	<div class="box">
	    <a href="#menu-toggle" class="" id="menu-toggle" style="font-size: 30px; color: black"><p class="fas fa-sliders-h"></p></a>
		<h1>Kasir</h1>
		<h4>
			<small>Data Kasir</small>
		</h4>
		<form method="post" name="proses">
			<div class="table-responsive">
				<table class="table table-bordered table-striped table-hover" id="rekammedis">
					<thead>
						<tr>
							<th>No.</th>
							<th>No. Rekam Medis</th>
							<th>Nama Pasien</th>
							<th>Nama Dokter</th>
							<th>Diagnosa</th>
							<th>Nama Obat</th>
							<th>Aturan Pakai</th>
							<th>Spesialis</th>
							<th>Total Harga</th>
							<th>Status Pembayaran</th>
							<!-- <th>Status Pembayaran</th> -->
							<th><i class="glyphicon glyphicon-cog"></i></th>
						</tr>
					</thead>
					<tbody>
						<?php
						$no = 1;
						$baru=mysqli_query($con,"SELECT * from farmasi  INNER JOIN tb_dokter ON farmasi.nm_dokter = tb_dokter.nama_dokter INNER JOIN tb_obat ON farmasi.nm_obat = tb_obat.nama_obat ");

						// $baru=mysqli_query($con,"SELECT * from farmasi INNER JOIN tb_dokter ON farmasi.nm_dokter = tb_dokter.nama_dokter INNER JOIN tb_obat ON farmasi.nm_obat = tb_obat.nama_obat INNER JOIN pembayaran ON farmasi.no_rm = pembayaran.no_rm order by id_farmasi desc");
						while($b=mysqli_fetch_array($baru)){
							$tgl_lahir 		= $b['tgl_lahir'];
							$umur 			= new DateTime($tgl_lahir);
							$sekarang 		= new DateTime();
							$usia			= $sekarang->diff($umur);	
						?>
							<tr>
								<td><?php echo $no++; ?></td>
								<td><?php echo $b['no_rm'] ?></td>
								<td><?php echo $b['nama_pasien'] ?></td>
								<td><?php echo $b['nm_dokter'] ?></td>
								<td><?php echo $b['diagnosis'] ?></td>
								<td><?php echo $b['nm_obat'] ?></td>
								<td><?php echo $b['aturan_pakai'] ?></td>
								<td><?php echo $b['spesialis'] ?></td>
								<td><?php echo $b['harga'] ?></td>
								<td><?php echo $b['status_pembayaran'] ?></td>
								
								
								<td>
								<a href="pembayaran.php?id=<?= $b['no_rm'];?>"  class="btn btn-success"><i class="fas fa-arrow-circle-up"></i></a>
						        </td>
								
								
							</tr>
						<?php
						} ?>
					</tbody>
				</table>
				<!-- <table class="table table-bordered table-striped table-hover" id="rekammedis">
					<thead>
						<tr>
							<th>Status Pembayaran</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$no = 1;
						$baru=mysqli_query($con,"SELECT * from farmasi  INNER JOIN tb_dokter ON farmasi.nm_dokter = tb_dokter.nama_dokter INNER JOIN tb_obat ON farmasi.nm_obat = tb_obat.nama_obat INNER JOIN pembayaran ON farmasi.no_rm = pembayaran.no_rm");

						// $baru=mysqli_query($con,"SELECT * from farmasi INNER JOIN tb_dokter ON farmasi.nm_dokter = tb_dokter.nama_dokter INNER JOIN tb_obat ON farmasi.nm_obat = tb_obat.nama_obat INNER JOIN pembayaran ON farmasi.no_rm = pembayaran.no_rm order by id_farmasi desc");
						while($b=mysqli_fetch_array($baru)){
							$tgl_lahir 		= $b['tgl_lahir'];
							$umur 			= new DateTime($tgl_lahir);
							$sekarang 		= new DateTime();
							$usia			= $sekarang->diff($umur);	
						?>
							<tr>
								<td><?php echo $b['status_pembayaran'] ?></td>
								
				
								
								
							</tr>
						<?php
						} ?>
					</tbody>
				</table> -->
			</div>
		</form>
	</div>

	<script>
		$(document).ready(function(){
			$('#rekammedis').DataTable({
				dom: 'Bfrtip',
				buttons: [
		            'copy',
		            {
		                extend: 'excel',
		                messageTop: 'The information in this table is copyright to Sirius Cybernetics Corp.'
		            },
		            {
		                extend: 'csv',
		                messageTop: 'The information in this table is copyright to Sirius Cybernetics Corp.'
		            },
		            {
		                extend: 'pdfHtml5',
		                download: 'open',
		                messageTop: 'The information in this table is copyright to Sirius Cybernetics Corp.',
		                messageBottom: null
		            }
		        ],
				columnDefs: [{
					"searchable": false,
					"orderable": false,
					"targets": 8
				}],
				"order": [0, "asc"]
			})
		});
	</script>

<?php include_once('../_footer.php'); ?>                                                       