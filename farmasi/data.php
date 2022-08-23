<?php include_once('../_header.php'); ?>

	<div class="box">
	    <a href="#menu-toggle" class="" id="menu-toggle" style="font-size: 30px; color: black"><p class="fas fa-sliders-h"></p></a>
		<h1>Farmasi</h1>
		<h4>
			<small>Data Farmasi</small>
		</h4>
		<form method="post" name="proses">
			<div class="table-responsive">
				<table class="table table-bordered table-striped table-hover" id="rekammedis">
					<thead>
						<tr>
							<th>No.</th>
							<th>No. Rekam Medis</th>
							<th>Nama Pasien</th>
							<th>Jenis Kelamin</th>
							<th>Tgl Lahir</th>
							<th>Umur</th>
							<th>No Telp</th>
							<th>Nama Dokter</th>
							<th>Diagnosa</th>
							<th>Nama Obat</th>
							<th>Aturan Pakai</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$no = 1;
						$baru=mysqli_query($con,"SELECT * from farmasi order by no_rm desc");
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
								<td><?php echo $b['jk'] ?></td>
								<td><?php echo $b['tgl_lahir'] ?></td>
								<td><?php echo $b['umur'] ?></td>
								<td><?php echo $b['no_telp'] ?></td>
								<td><?php echo $b['nm_dokter'] ?></td>
								<td><?php echo $b['diagnosis'] ?></td>
								<td><?php echo $b['nm_obat'] ?></td>
								<td><?php echo $b['aturan_pakai'] ?></td>
							</tr>
						<?php
						} ?>
					</tbody>
				</table>
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