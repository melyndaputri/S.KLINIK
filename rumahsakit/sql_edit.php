<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $telp = $_POST['telp'];
  //cek dulu jika merubah gambar produk jalankan coding ini
      // jalankan query UPDATE berdasarkan ID yang produknya kita edit
      $query  = "UPDATE rumahsakit SET nama = '$nama', alamat = '$alamat', telp = '$telp'";
      $query .= "WHERE nama = '$nama'";
      $result = mysqli_query($koneksi, $query);
      // periska query apakah ada error
      if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
      } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
          echo "<script>alert('Data berhasil diubah.');window.location='data2.php';</script>";
      }
    
?>