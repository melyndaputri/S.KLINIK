<?php
  $host = "localhost"; 
  $user = "root";
  $pass = "";
  $nama_db = "infocovid"; //nama database
  $koneksi = mysqli_connect($host,$user,$pass,$nama_db); //pastikan urutan nya seperti ini, jangan tertukar

  if(!$koneksi){ //jika tidak terkoneksi maka akan tampil error
    die ("Koneksi dengan database gagal: ".mysql_connect_error());
  }
?>
<?php
define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB1', 'infocovid');
 
// Buat Koneksinya
$db1 = new mysqli(HOST, USER, PASS, DB1);
?>