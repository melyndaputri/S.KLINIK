<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php include_once('../_header.php'); ?>
	<div class="box">
		<a href="#menu-toggle" class="" id="menu-toggle" style="font-size: 30px; color: black"><p class="fas fa-sliders-h"></p></a>
		<h1>Pasien</h1>
		<h4>
			<small>Data Pasien</small>
			<div class="container" style="height:34px;width: 170px;border-radius: 50px  1px  1px 50px;background:#EECAB2;margin-right:-35px;">
				<div class="pull-right" style="margin-right:30px;margin-top:6px;">
					<!-- <a href="" class="btn btn-default btn-xs"style="background:#EECAB2;border:none;"><i class="glyphicon glyphicon-refresh"></i></a> -->
					<a href="add.php" class="btn btn-primary btn-xs" style="border-radius:72px;background:#EECAB2;border:none;color:black;"><i class="glyphicon glyphicon-plus"></i> Tambah Pasien</a>
					<!-- <a href="import.php" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-import"></i> Import Pasien</a> -->
				</div>
			</div>
		</h4>
		<table class="table table-hover" id="table_tarif">
			<thead>
				<th class="col-md-1">No Rekam Medis</th>
				<th class="col-md-1">Tgl Daftar</th>
				<th class="col-md-1">Nama Lengkap</th>
				<th class="col-md-1">TTL </th>
				<th class="col-md-1">Alamat </th>
				<th class="col-md-1">No Telp </th>
				<!-- <th class="col-md-1">Klinik </th> -->
				<th class="col-md-1">Pembayaran </th>
				<th class="col-md-1">Aksi</th>
				<th class="col-md-3">Opsi</th>
			</thead>
			<tbody>
			<?php 
					// $no = 1;
					$baru=mysqli_query($con,"SELECT * from pasienbaru order by tgl_daftar desc");
					while($data=mysqli_fetch_array($baru)){

						?>
		    	<tr>
					<td><?php echo $data['reg_baru']; ?></td>
		            <td><?php echo $data['tgl_daftar']; ?></td>
		        	<td><?php echo $data['nm_pasien']; ?></td>
		            <td><?php echo $data['tmp_lahir']; ?>, <?php echo date('d M Y', strtotime($data['tgl_lahir'])) ?></td>
		            <td><?php echo $data['alamat']; ?></td>
		        	<td><?php echo $data['no_tlp']; ?></td>
		            <!-- <td><?php echo $data['klinik']; ?></td> -->
		            <td><?php echo $data['pembayaran']; ?></td>
		            <td>
		            	<?php
		                    $no_rm = mysqli_query($con, "SELECT reg_baru FROM pasienbaru where reg_baru like '%".$data['reg_baru']."%'");
		                    $no_rm_detail = mysqli_fetch_array($no_rm);
		                    $no_reg = $no_rm_detail['reg_baru'];
		                    if(empty($no_reg)){
		                ?>
		                         
		                            <a href="addrm.php?id=<?php echo $data['reg_baru']; ?>">+No.RM</a> 
		                <?php
		                    }
		                ?>
		                <!-- <button style="margin-bottom:20px" data-toggle="modal" data-target="#addprwtn" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span>Dft Prwt</button> -->
		               <!--  <a href="addprwtn.php?id=<?php echo $data['reg_baru']; ?>" class="btn btn-warning">Dft Prwt</a> -->
		            </td>
					<td>
						<td align="center">
							<a href="../poliklinik/add.php?id=<?= $data['reg_baru'];?>"  class="btn btn-success"><i class="fas fa-arrow-circle-up"></i></a>
						</td>
						<td align="center">
							<a href="edit.php?id=<?= $data['reg_baru']; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
						</td>

					</td>
				</tr>		
				<?php 
			}
			?>
			</tbody>
		</table>


<?php include_once('../_footer.php'); ?>                                                       