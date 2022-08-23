<!DOCTYPE html>
<?php
//Mengirimkan Token Keamanan Ajax Request (Csrf Token)
session_start();
if (empty($_SESSION['csrf_token'])) {
  $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
$url = file_get_contents('https://api.kawalcorona.com/indonesia');
$data = json_decode($url, true);
?>
<html lang="en" date-theme="dark">
<head>
  
  <!-- Theme Made By www.w3schools.com -->
  <title>Home</title>
  <meta charset="utf-8">
  <!-- Csrf Token -->
  <meta name="csrf-token" content="<?= $_SESSION['csrf_token'] ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="styleshet" type="text/css">
  <!-- my css -->
  
  <style>
  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
    background-color: var(--bg);
    /*background-image: url(background.png);*/
    /*background-size: 1350px 390px;*/
  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
    color: var(--color-text);
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
    color: var(--color-text);
  }  
  .jumbotron {
    background-color: #EECAB2;
    color: #fff;
    padding: 100px 25px;
    font-family: Montserrat, sans-serif;
    background-image: url(awalannn.png);
    background-size: 1350px 355px;
    
  }
  .container-fluid {
    padding: 30px 29.5px;
    background-color: var(--bg);
  }
  .container{
    background-color: var(--bg); 
  }
  .isii{
    background-color: var(--bg-panel); 
  }
  .row{
    background-color: var(--bg);
  }
  .col-sm-8{
    background-color: var(--bg-panel); 
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
  .logo-small {
    color: #03989e;
    font-size: 50px;
  }
  .logo {
    color: #EECAB2;
    font-size: 200px;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #EECAB2;
  }
  .carousel-indicators li {
    border-color: #EECAB2;
  }
  .carousel-indicators li.active {
    background-color: #EECAB2;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .panel {
    border: 1px solid #ff725e;
    border-radius:0 !important;
    transition: box-shadow 0.5s;
    background-color: var(--bg-panel);
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid #EECAB2;
    background-color: #fff !important;
    color: #EECAB2;
  }
  .panel-heading {
    color: #fff !important;
    background-color:#EECAB2 !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-footer {
    background-color: var(--bg-panel);
  }
  .panel-footer h3 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color: #EECAB2;
    color: #fff;
  }
  .navbar {
    margin-bottom: 0;
    background-color: #EECAB2;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #EECAB2 !important;
    background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
  }
  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: #EECAB2;
  }
  .slideanim {visibility:hidden;}
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  .tim .info .info-panel .float{
    border-radius: 70px; 
    text-align: center;
    
  }
  .navbar-header{
    background-color: #EECAB2;
  }
  .collapse{
    background-color: #EECAB2;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
  }`
  .col-sm-4{
    background-color: var(--bg);
  }
  .bisablog-info{
    background-color: var(--bg);
  }

  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
  <br>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                 
        </button>
        <a style="background-color:#EECAB2;" class="navbar-brand" href="#myPage">S.KLINIK</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul style="background-color: #EECAB2;" class="nav navbar-nav navbar-right">
          <li><a href="#services">NEWS</a></li>
          <li><a href="#about">ABOUT</a></li>
          <li><a href="auth/login.php">LOGIN</a></li>
          <li><a href="#contact">CONTACT</a></li>
          <li><a>
          <div class="toggle-container">
            <input type="checkbox" id="switch" name="theme" /><label for="switch">Toggle</label>
          </div>
          </a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="jumbotron" >
    <h1  style = "margin-left:140px;">INFORMATION CENTER</h1> 
    <p style = "margin-left:700px;">ABOUT COVID-19</p> 
  </div>
  <!-- Container (Update Covid-19) -->
  <div id="services" class="container-fluid text-center">
    <h2>COVID-19</h2>
    <h4>WE ALWAYS UPDATE ABOUT COVID-19</h4>
    <br>
    <div class="row slideanim">
      <div class="col-sm-4">
       <div class="bisablog-info">
        <span class="glyphicon glyphicon-plus-sign logo-small"style="color:#FF725E;"></span>
        <h4><?php echo $data[0]['positif'] ?></h4>
        <h4>Total Orang Positif Covid-19</h4>
        </div>
      </div>
     <div class="col-sm-4">
        <div class="bisablog-info">
        <span class="glyphicon glyphicon-heart logo-small"style="color:#FF725E;"></span>
        <h4><?php echo $data[0]['sembuh'] ?></h4>
        <h4>Total Orang Sembuh Covid-19</h4>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="bisablog-info">
        <span class="glyphicon glyphicon-minus-sign logo-small"style="color:#FF725E;"></span>
        <h4><?php echo $data[0]['meninggal'] ?></h4>
        <h4>Total Orang Meninggal Covid-19</h4>
        </div>
      </div>
    </div>

  <div class="container"> 
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <a href="https://covid19.go.id/peta-sebaran"><img src="gambar/slider1.png" alt="iklan" style="width:100%;"></a>
        </div>
        <div class="item">
          <img src="gambar/slider2.png" alt="iklan" style="width:100%;">
        </div>
        <div class="item">
          <a href="https://covid19.go.id/p/berita/gugus-tugas-covid-19-sudah-distribusikan-1492150-apd"><img src="gambar/slider3.png" alt="iklan" style="width:100%;"></a>
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

  <br>
  <!-- TENTANG COVID -->
  <div class="isiii" >
    <!-- CONTAINER GRID LUCUKK WEEYY -->
    <div class="container" style="box-shadow: 0 3px 20px rgba(0, 0, 0, 0.5);border-radius: 20px; padding: 30px;">
      <!-- info panel -->
      <div class="row justify-content-center" >
        <div class="col-lg-20 info-panel">
          <div class="row">
            <div id="about" class="container-fluid">
              <div class="row">
                <div class="col-sm-8" style="background-color: var(--bg-panel); color: var(--color-text); border-radius:20px; margin-top: 20px;">
                  <h2 style="text-align: left; font-size: 40px">APA ITU COVID-19?</h2><br>
                  <P style="text-align: left; font-size: 20px">COVID-19 adalah penyakit yang disebabkan oleh Novel Coronavirus (2019-nCoV), jenis baru coronavirus yang pada manusia menyebabkan penyakit mulai flu biasa hingga penyakit yang serius seperti Middle East Respiratory Syndrome (MERS) dan Sindrom Pernapasan Akut Berat/ Severe Acute Respiratory Syndrome (SARS).
                  Pada 11 Februari 2020, World Health Organization (WHO) mengumumkan nama penyakit yang disebabkan 2019-nCov, yaitu Coronavirus Disease (COVID-19).</P>
                </div>
                <div class="col-sm-4">
                 <img src="gambar/gambar_corona-png.png"; style="width: 90%; margin-top: 30px;">
                </div>
              </div>
            </div>
            

            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-4">
                 <img src="gambar/corona_animasi_png.png"; style="width: 90%; margin-top: 30px;" >
                </div>
                <div class="col-sm-8" style="background-color: var(--bg-panel); color: var(--color-text); border-radius:20px; margin-top: 20px;">
                  <h4 style="text-align: left; font-size: 40px; margin-left: 20px"><strong>Gejala</strong></h4><p style="text-align: left; font-size: 19px; margin-left: 20px">Gejala umum berupa demam ≥38°C, batuk kering, dan sesak napas. <br>Jika ada orang yang dalam 14 hari sebelum muncul gejala tersebut pernah <br> melakukan perjalanan ke negara terjangkit, atau pernah merawat/kontak <br>erat dengan penderita COVID-19, maka terhadap orang <br>tersebut akan dilakukan pemeriksaan laboratorium lebih lanjut untuk <br> memastikan diagnosisnya.</p>
                </div>
              </div>
            </div>

            <div id="about" class="container-fluid">
              <div class="row">
                <div class="col-sm-8" style="background-color: var(--bg-panel); color: var(--color-text); border-radius:20px; margin-top: 20px;">
                  <h4 style="text-align: left; font-size: 40px; margin-left: 20px"><strong> Penularan</strong></h4> <p style="text-align: left; font-size: 19px; margin-left: 20px">Seseorang dapat terinfeksi dari penderita COVID-19. Penyakit ini dapat <br> melalui tetesan kecil (droplet) dari hidung atau mulut pada saat<br> batuk atau bersin. Droplet tersebut kemudian jatuh pada benda di<br> sekitarnya. Kemudian jika ada orang lain menyentuh benda <br>yang sudah terkontaminasi dengan droplet tersebut, <br>lalu orang itu menyentuh mata, hidung atau mulut (segitiga wajah), <br>maka orang itu dapat terinfeksi COVID-19. Seseorang juga bisa<br> terinfeksi COVID-19 ketika tanpa sengaja menghirup droplet dari <br>penderita. Inilah sebabnya mengapa kita penting untuk menjaga<br> jarak hingga kurang lebih satu meter dari orang yang sakit.</p>
                </div>
                <div class="col-sm-4">
                 <img src="gambar/covid-19-png.png" style="width: 90%; margin-top: 40px;" >
                </div>
              </div>
            </div>
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-4">
                 <img src="gambar/lindungi-diri-png.png" style="width: 100%; margin-top: 130px;">
                </div>
                <div class="col-sm-8" style="background-color: var(--bg-panel); border-radius: 20px;margin-top: 20px;">
                  <h2 style="font-size: 40px">Lindungi Diri dan Orang Lain</h2><br>
                  <p style="text-align: left; font-size: 19px">Sampai saat ini COVID-19 belum memiliki vaksin, sehingga cara terbaik untuk tidak terinfeksi adalah dengan menghindari terekspos virus.</p>
                  <p style="text-align: left; font-size: 20px"><strong>COVID-19 dapat menyebar dari orang ke orang melalui tetesan kecil (droplet) saat batuk atau bersin. Maka yang bisa Anda lakukan adalah:</strong></p>
                   <p style="text-align: left;">
                   <span class="glyphicon glyphicon-check" style="font-size: 19px"> Sering cuci tangan dengan sabun atau hand-sanitizer</span>
                   <span class="glyphicon glyphicon-check" style="font-size: 19px"> Hindari menyentuh wajah, terutama hidung, mulut, dan mata</span>
                   <span class="glyphicon glyphicon-check" style="font-size: 19px"> Bersihkan permukaan benda yang disentuh banyak orang</span>
                   <span class="glyphicon glyphicon-check" style="font-size: 19px"> Social Distancing! Minimalisir kontak fisik dengan sesama</span><br>
                   <span class="glyphicon glyphicon-check" style="font-size: 19px"> Jaga jarak 1-3 meter dengan orang yang sakit</span><br>
                   <span class="glyphicon glyphicon-check" style="font-size: 19px"> Jika sakit, maka:<br>
                    &nbsp;&emsp;1. Tinggal di rumah<br>
                    &nbsp;&emsp;2. Gunakan masker
                   </span>
                </div>
              </div>
            </div>
            <div id="pricing" class="container-fluid">
              <div class="text-center">
                <h2 id="datars"><br><br>Data RS Rujukan</h2>
                <h4>COVID-19</h4><br>
              </div>
              <div class="row slideanim">
                <div class="col-sm-4 col-xs-12">
                  <div class="panel panel-default text-center">
                    <div class="panel-heading">
                      <h1>RSPAD</h1>
                      <h1>Gatot Subroto</h1>
                    </div>
                    <div class="panel-body">
                      <p style="font-size: 20px"><strong>Jl. Abdul Rahman Saleh Raya No.24, Senen, Jakarta Pusat.</strong></p>
                    </div>
                    <div class="panel-footer">
                      <p style="font-size: 25px">Telp: (021) 3441008</p>
                    </div>
                  </div>      
                </div>     
                <div class="col-sm-4 col-xs-12">
                  <div class="panel panel-default text-center">
                    <div class="panel-heading">
                      <h1>RSUP</h1>
                      <h1>Fatmawati</h1>
                    </div>
                    <div class="panel-body">
                      <p style="font-size: 20px"><strong>Jl. TB Simatupang c No.18, Cilandak, Jakarta Selatan.</strong></p>
                    </div>
                    <div class="panel-footer">
                      <p style="font-size: 25px">Telp: (021) 7501524</p>
                    </div>
                  </div>      
                </div>       
                <div class="col-sm-4 col-xs-12">
                  <div class="panel panel-default text-center">
                    <div class="panel-heading">
                      <h1>RSUP</h1>
                      <h1>Persahabatan</h1>
                    </div>
                    <div class="panel-body">
                      <p style="font-size: 20px"><strong>Jl. Persahabatan Raya No.1, Jakarta Timur.</strong></p>
                    </div>
                    <div class="panel-footer">
                      <p style="font-size: 25px">Telp: (021) 4891708</p>
                    </div>
                  </div>      
                </div>    
              </div>
            </div><br>
          </div>
          <center><div class="text-center"><a href="data.php" style=" font-family: Arial; color: grey; font-size: 25px; text-align: center;"><br>Tampilkan Semua Data RS<br></a></div></center><br>    
        </div> 
      </div>
      <!--  -->
    </div>
    <br><br>
  <div id="contact" class="container-fluid bg-grey" style="border-radius: 20px;background-color: var(--bg); margin-left: 30px; margin-right: 30px">
    <h2 class="text-center">MEMBERS OF SEMANGAT YUK</h2>
    <!-- CONTAINER GRID LUCUKK WEEYY -->
    <div class="tim">
      <div class="info">
        <div class="container" style="padding: 20px;">
          <!-- info panel -->
          <div class="row justify-content-center">
          <center><div class="col-lg-10 info-panel" style="margin-left: 240px">
              <div class="row" >
                <div class="col-lg-2">
                <center><img src="njeee.jpg" alt="nj" class="float"></center>
                  <br><center><h7>NURJANAH</h7>
                    <p>1402018079</p></center>
                </div>
                <div class="col-xs-2">
                <center><img src="farmell.jpg" alt="farmel" class="float"></center>
                  <br><center><h7>FARAH AMELIA.H</h7>
                    <p>1402018092</p></center>
                </div>
                <div class="col-lg-2">
                <center><img src="fauzaa.jpg" alt="fauza" class="float"></center>
                  <br><center><h7>FAUZAA RAHMATUL I.</h7>
                    <p>1402018082</p></center>
                </div>
                <div class="col-xs-2">
                <center><img src="melynn.jpeg" alt="melyn" class="float"></center>
                  <br><center><h7>MELYNDA P.T.U</h7>
                    <p>1402018131</p></center>
                </div>
              </div>
            </div>
          </div></center>
        </div>
        <!--  -->

      </div>
    </div>
      
    </div>

  <script>
    $(document).ready(function(){
      $.ajaxSetup({
                    headers : {
                      'Csrf-Token': $('meta[name="csrf-token"]').attr('content')
                    }
                  });
      $('#form_komen').on('submit', function(event){
        event.preventDefault();
        var form_data = $(this).serialize();
        $.ajax({
          url:"tambah_komentar.php",
          method:"POST",
          data:form_data,
          success:function(data){
            $('#form_komen')[0].reset();
            $('#komentar_id').val('0');
            load_comment();
          }, error: function(data) {
                  console.log(data.responseText)
                }
        })
      });
   
      load_comment();
   
      function load_comment(){
        $.ajax({
          url:"ambil_komentar.php",
          method:"POST",
          success:function(data){
            $('#display_comment').html(data);
          }, error: function(data) {
                  console.log(data.responseText)
                }
        })
      }
   
      $(document).on('click', '.reply', function(){
        var komentar_id = $(this).attr("id");
        $('#komentar_id').val(komentar_id);
        $('#nama_pengirim').focus();
      });

    $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
      if (this.hash !== "") {
        event.preventDefault();

        var hash = this.hash;

        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 900, function(){
     
          window.location.hash = hash;
        });
      } 
    });
    
    $(window).scroll(function() {
      $(".slideanim").each(function(){
        var pos = $(this).offset().top;

        var winTop = $(window).scrollTop();
          if (pos < winTop + 600) {
            $(this).addClass("slide");
          }
      });
    });
  })
    /*DARK MODE*/
    var checkbox = document.querySelector('input[name=theme]');

    checkbox.addEventListener('change', function() {
      if(this.checked) {
        trans()
        document.documentElement.setAttribute('data-theme', 'dark')
      } else {
        trans()
        document.documentElement.setAttribute('data-theme', 'light')
      }
    })

    let trans = () => {
      document.documentElement.classList.add('transition');
      window.setTimeout(() => {
        document.documentElement.classList.remove('transition')
      }, 1000)
    }
  </script>
  <!--FOOTER-->
  <footer>
      <div class="footer-container">
        <div class="right-col">
          <p style="color: grey" class="center-text">PRIVACY LEGAL NOTICE</p>
          
          <div class="social-media">
            <a href="https://www.facebook.com/KementerianKesehatanRI/"><i class="fa fa-facebook"></i></a>
            <a href="https://twitter.com/KemenkesRI?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="fa fa-twitter"></i></a>
            <a href="https://www.instagram.com/kemenkes_ri/?hl=id"><i class="fa fa-instagram"></i></a>
            <a href="https://id.linkedin.com/company/ministry-of-health-republic-of-indonesia"><i class="fa fa-linkedin"></i></a>
            <a href="https://www.youtube.com/channel/UCWBnPaPlVx2_h7Kdva52AYg"><i class="fa fa-youtube-play"></i></a>
          </div>
          <p style="color: grey" class="center-text">© 2020 Created By <b>SEMANGAT YUK</p>
        </div>
      </div>
    </footer>
  </body>
</html>