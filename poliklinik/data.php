<?php include_once('../_header.php'); ?>

	<div class="box">
		<a href="#menu-toggle" class="" id="menu-toggle" style="font-size: 30px; color: black"><p class="fas fa-sliders-h"></p></a>
		<h1>Penjadwalan</h1>
		<h4>
			<small>Data Penjadwalan Pasien</small>
		</h4>
		<table class="table table-hover" id="table_tarif">
			<thead>
				<th class="col-md-1">No</th>
				<th class="col-md-1">Tgl Kedatangan</th>
				<th class="col-md-1">Status Pendaftaran</th>
				<th class="col-md-1">Nama</th>
				<th class="col-md-1">Tgl Lahir</th>
				<th class="col-md-1">Umur</th>
				<th class="col-md-1">No Telp</th>
				<th class="col-md-1">Poli Tujuan</th>
				<th class="col-md-1">Ren. Perawatan</th>
				<th class="col-md-1">Petugas</th>
				<th class="col-md-1">Stt Konfirmasi</th>
				<th class="col-md-1">Ket</th>
				<th class="col-md-1">Aksi</th>
				<th class="col-md-1">Opsi</th>

			</thead>
			<tbody>
			<?php 
				$no = 1;
				$baru=mysqli_query($con,"SELECT * from penjadwalan order by tgl_kedatangan, jam desc ");
				while($b=mysqli_fetch_array($baru)){
					$tgl_lahir 		= $b['tgl_lahir'];
					$umur 			= new DateTime($tgl_lahir);
					$sekarang 		= new DateTime();
					$usia			= $sekarang->diff($umur);		
			?>
		    	<tr>
					<td><?php echo $no++; ?></td>
		            <td><?php echo $b['tgl_kedatangan'] ?>,<?php echo $b['jam'] ?></td>
					<td><?php echo $b['no_rk_medis'] ?></td>
					<td><?php echo $b['nm_pasien'] ?></td>
					<td><?php echo $b['tgl_lahir'] ?></td>
					<td><?php echo $b['umur'] ?></td>
					<td><?php echo $b['no_tlp'] ?></td>
					<td><?php echo $b['nm_dokter'] ?></td>
					<td><?php echo $b['ren_perawat'] ?></td>
					<td><?php echo $b['petugas'] ?></td>
					<td><?php echo $b['stts_konfirmasi'] ?></td>
					<td><?php echo $b['ket'] ?></td>
					<td><a href="editstatuskonf.php?id=<?php echo $b['nm_pasien']; ?>" class="btn btn-warning btn-xs">Stt Konf</a></td>
		            <td>
						<a href="../laboratorium/add.php?id=<?= $b['no_rk_medis'];?>"  class="btn btn-success"><i class="fas fa-arrow-circle-up"></i></a>

		            	<!-- <a href="b01_det.php?id=<?php echo $b['id_penjadwalan']; ?>" class="btn btn-info"><img src="../assets/img/Preview/Preview_16x16.png" width="15"></a> -->
						<a href="editpenjadwalan.php?id=<?php echo $b['no_rk_medis']; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
						<a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='editpenjadwalandel.php?id=<?php echo $b['no_rk_medis']; ?>' }" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
					</td>

				</tr>		
				<?php 
			}
			?>
			</tbody>
		</table>
		<script>

			$(document).ready(function(){
				$('#table_tarif').dataTable();
			});
		</script>
	</div>
<?php include_once('../_footer.php'); ?>                                                       