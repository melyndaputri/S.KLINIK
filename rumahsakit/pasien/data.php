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
		<div class="table-responsive">
			<table class="table table-bordered table-striped table-hover" id="pasien">
				<thead>
					<tr>
						<th>Nomor Identitas</th>
						<th>Nama Pasien</th>
						<th>Tanggal Lahir</th>
						<th>Jenis Kelamin</th>
						<th>Alamat</th>
						<th>No. Telepon</th>
						<th><i class="glyphicon glyphicon-cog"></i></th>
					</tr>
				</thead>
			</table>
		</div>
	</div>
	<script>
		$(document).ready(function(){
		    $('#pasien').DataTable({
		        "processing": true,
		        "serverSide": true,
		        "ajax": "pasien-data.php",
		        // scrollY : '250px',
		        dom: 'Bfrtip',
		        buttons: [
		            'copy',
		            {
		                extend: 'excel',
		                messageTop: 'The information in this table is copyright to Sirius Cybernetics Corp.'
		            },
		            {
		                extend: 'csv'
		            },
		            {
		                extend: 'pdfHtml5',
		                download: 'open',
		                messageBottom: null
		            }
		        ],
		        columnDefs:[{
		        	"searchable": false,
		        	"orderable": false,
		        	"targets": 6,
		        	"render": function(data, type, row){
		        		var btn = "<center><a href=\"edit.php?id="+data+"\" class=\"btn btn-warning btn-xs\"><i class=\"glyphicon glyphicon-edit\"></i></a> <a href=\"del.php?id="+data+"\" onclick=\"return confirm('Yakin menghapus data?');\" class=\"btn btn-danger btn-xs\"><i class=\"glyphicon glyphicon-trash\"></i></a></center>";
		        		return btn;
		        	}
		        }]
		    });
		} );
	</script>

<?php include_once('../_footer.php'); ?>                                                       