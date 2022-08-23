<?php include_once('../_header.php'); ?>

	<div class="box">
		<a href="#menu-toggle" class="" id="menu-toggle" style="font-size: 30px; color: black"><p class="fas fa-sliders-h"></p></a>
		<h1>Laboratorium</h1>
		<h4>
			<small>Data Laboratorium</small>
		</h4>
		<table class="table table-hover" id="table_tarif">
			<thead>
				<th class="col-md-1">No</th>
				<th class="col-md-1">No Rekam Medis</th>
				<th class="col-md-1">Nama</th>
				<th class="col-md-1">Jenis Kelamin</th>
				<th class="col-md-1">Tgl Lahir</th>
				<th class="col-md-1">Umur</th>
				<th class="col-md-1">No Telp</th>
				<th class="col-md-1">Nama Dokter</th>
				<th class="col-md-1">Diagnosis</th>

			</thead>
			<tbody>
			<?php 
				$no = 1;
				$baru=mysqli_query($con,"SELECT * from laboratorium order by no_rm desc ");
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
		            <td>
						<a href="../farmasi/add.php?id=<?= $b['no_rm'];?>"  class="btn btn-success"><i class="fas fa-arrow-circle-up"></i></a>
						</td>
						
						<!-- <a href="editpenjadwalan.php?id=<?php echo $b['id_penjadwalan']; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i></a> -->
						
						<!-- <a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='editpenjadwalandel.php?id=<?php echo $b['id_penjadwalan']; ?>' }" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a> -->
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