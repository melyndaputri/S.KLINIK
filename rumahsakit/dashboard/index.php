<?php include_once('../_header.php'); ?>

<div class="row">
    <div class="col-lg-12">
    	<a href="#menu-toggle" class="" id="menu-toggle" style="font-size: 30px; color: black"><p class="fas fa-sliders-h"></p></a>
        <h1><strong>Dashboard</strong></h1>
        <p>Selamat datang <mark> <?= $_SESSION['user']; ?> </mark> di website Rumah Sakit (Rekam Medis)</p>
       
            <div class="cards"  style="display: grid; grid-template-columns: repeat(4, 1fr); grid-gap: 2rem; margin-top: 1rem;">
  				<div class="card-single" style="display: flex; justify-content: space-between; background: #EECAB2; padding: 2rem; border-radius: 40px;">
  					<div style="margin-left: 40px; margin-top: -9px;">
  						<h1><?php echo $jumpasien; ?></h1>
  						<span>Jumlah Pasien</span>
  					</div>
  					<div>
  						<span class="las la-user"></span>
  					</div>
  				</div>
  				<div class="card-single" style="display: flex; justify-content: space-between; background: #EECAB2; padding: 2rem; border-radius: 40px;">
  					<div style="margin-left: 40px; margin-top: -9px;">
  						<h1><?php echo $jumlahdokter; ?></h1>
  						<span>Jumlah Dokter</span>
  					</div>
  					<div>
  						<span class="las la-user"></span>
  					</div>
  				</div>
  				<div class="card-single" style="display: flex; justify-content: space-between; background: #EECAB2; padding: 2rem; border-radius: 40px;">
  					<div style="margin-left: 40px; margin-top: -9px;">
  						<h1><?php echo $jumlahpoliklinik; ?></h1>
  						<span>Jumlah Poliklinik</span>
  					</div>
  					<div>
  						<span class="las la-user"></span>
  					</div>
  				</div>
  				<div class="card-single" style="display: flex; justify-content: space-between; background: #EECAB2; padding: 2rem; border-radius: 40px;">
  					<div style="margin-left: 40px; margin-top: -9px;">
  						<h1><?php echo $jumobat; ?></h1>
  						<span>Jumlah obat</span>
  					</div>
  					<div>
  						<span class="las la-user"></span>
  					</div>
  				</div>
  			</div>
        
        <p></p><img src="gambar.png" width="600" height="400" style="margin-left: auto; margin-right: auto; display: block;">
    </div>
</div>


<?php include_once('../_footer.php'); ?>