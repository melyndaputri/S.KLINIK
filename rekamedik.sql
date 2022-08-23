-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Bulan Mei 2021 pada 18.17
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rekamedik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `farmasi`
--

CREATE TABLE `farmasi` (
  `id_farmasi` int(11) NOT NULL,
  `no_rm` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nama_pasien` varchar(40) CHARACTER SET utf8mb4 DEFAULT NULL,
  `jk` varchar(15) CHARACTER SET utf8mb4 DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `umur` varchar(5) CHARACTER SET utf8mb4 DEFAULT NULL,
  `no_telp` varchar(20) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nm_dokter` varchar(40) CHARACTER SET utf8mb4 DEFAULT NULL,
  `diagnosis` varchar(40) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nm_obat` varchar(200) CHARACTER SET utf8mb4 DEFAULT NULL,
  `aturan_pakai` varchar(200) CHARACTER SET utf8mb4 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `farmasi`
--

INSERT INTO `farmasi` (`id_farmasi`, `no_rm`, `nama_pasien`, `jk`, `tgl_lahir`, `umur`, `no_telp`, `nm_dokter`, `diagnosis`, `nm_obat`, `aturan_pakai`) VALUES
(15, '000002', 'Farah Amelia Hanifah', 'Perempuan', '2013-01-29', '8 Thn', '123456', 'Dr. Annette Mariza, SpM', 'Minus', 'Komix', 'Sehari 1x Setelah Makan'),
(16, '000001', 'Nurjanah', 'Perempuan', '2017-02-01', '4 Thn', '123456', 'dr. Baihaqi Suhaeri', 'Mual', 'Amoxilin', 'Sehari 2x Setelah Makan'),
(17, '000003', 'melyn', 'Perempuan', '1999-12-04', '21 Th', '085817570766', 'dr.  Ida Ayu Sri Kusuma Dewi Manuaba, M.', 'maag', 'Amoxilin', 'Sehari 2x Setelah Makan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laboratorium`
--

CREATE TABLE `laboratorium` (
  `id_laboratorium` int(11) NOT NULL,
  `no_rm` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nama_pasien` varchar(40) CHARACTER SET utf8mb4 DEFAULT NULL,
  `jk` varchar(15) CHARACTER SET utf8mb4 DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `umur` varchar(5) CHARACTER SET utf8mb4 DEFAULT NULL,
  `no_telp` varchar(20) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nm_dokter` varchar(40) CHARACTER SET utf8mb4 DEFAULT NULL,
  `diagnosis` varchar(40) CHARACTER SET utf8mb4 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laboratorium`
--

INSERT INTO `laboratorium` (`id_laboratorium`, `no_rm`, `nama_pasien`, `jk`, `tgl_lahir`, `umur`, `no_telp`, `nm_dokter`, `diagnosis`) VALUES
(4, '000001', 'Nurjanah', 'Perempuan', '2017-02-01', '4 Thn', '123456', 'dr. Baihaqi Suhaeri', 'Mual'),
(8, '000002', 'Farah Amelia Hanifah', 'Perempuan', '2013-01-29', '8 Thn', '123456', 'Dr. Annette Mariza, SpM', 'Minus'),
(10, '000003', 'melyn', 'Perempuan', '1999-12-04', '21 Th', '085817570766', 'dr.  Ida Ayu Sri Kusuma Dewi Manuaba, M.', 'maag');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasienbaru`
--

CREATE TABLE `pasienbaru` (
  `reg_baru` varchar(11) NOT NULL,
  `tgl_daftar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `no_ktp` varchar(25) DEFAULT NULL,
  `nm_pasien` varchar(40) NOT NULL,
  `jk` varchar(15) DEFAULT NULL,
  `tmp_lahir` varchar(30) DEFAULT NULL,
  `tgl_lahir` varchar(20) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `rt` varchar(10) DEFAULT NULL,
  `rw` varchar(10) DEFAULT NULL,
  `kel` varchar(20) DEFAULT NULL,
  `kec` varchar(20) DEFAULT NULL,
  `kota` varchar(20) DEFAULT NULL,
  `stts_nikah` varchar(20) DEFAULT NULL,
  `agama` varchar(20) DEFAULT NULL,
  `pnd` varchar(20) DEFAULT NULL,
  `pekerjaan` varchar(20) DEFAULT NULL,
  `gol_darah` varchar(5) DEFAULT NULL,
  `rh` varchar(5) DEFAULT NULL,
  `no_tlp_rmh` varchar(15) DEFAULT NULL,
  `no_tlp` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `warganegara` varchar(30) DEFAULT NULL,
  `klinik` varchar(15) DEFAULT NULL,
  `pembayaran` varchar(15) DEFAULT NULL,
  `namakeluarga` varchar(40) DEFAULT NULL,
  `keluarga` varchar(40) DEFAULT NULL,
  `no_hppj` varchar(20) DEFAULT NULL,
  `alamatpj` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pasienbaru`
--

INSERT INTO `pasienbaru` (`reg_baru`, `tgl_daftar`, `no_ktp`, `nm_pasien`, `jk`, `tmp_lahir`, `tgl_lahir`, `alamat`, `rt`, `rw`, `kel`, `kec`, `kota`, `stts_nikah`, `agama`, `pnd`, `pekerjaan`, `gol_darah`, `rh`, `no_tlp_rmh`, `no_tlp`, `email`, `warganegara`, `klinik`, `pembayaran`, `namakeluarga`, `keluarga`, `no_hppj`, `alamatpj`) VALUES
('000001', '2021-04-27 02:00:47', '123456', 'Nurjanah', 'Perempuan', 'Jakarta', '2017-02-01', 'Jakarta', '01', '12', 'Kebon Bawang', 'Tg. Priok', 'Jakarta Utara', 'Belum Menikah', 'Islam', 'SMA', 'Mahasiswa', 'O', '+', '123456', '123456', 'nurjanah@gmail.com', 'Indonesia', '1', 'Kartu Kredit', 'Dio', 'Suami', '123456', 'Jakartah'),
('000002', '2021-04-27 07:09:51', '123456', 'Farah Amelia Hanifah', 'Perempuan', 'Bekasi', '2013-01-29', 'Pondok Ungu Permai AA4 No.14', '12', '10', 'Kaliabang Tengah', 'Bekasi Utara', 'BEKASI', 'Belum Menikah', 'Islam', 'TS', 'Mahasiswa', 'O', '+', '123456', '123456', 'farahameliaaa@gmail.com', 'Indonesia', '6', 'Cash', 'Yuliati', 'Ibu', '1234569', 'Pondok Ungu Permai AA4 No.14'),
('000003', '2021-04-28 15:15:26', '999999', 'melyn', 'Perempuan', 'jakarta', '1999-12-04', 'p', '09', '027', 'bahagia', 'babelan', 'bekasi', 'lajang', 'Islam', 'S1', 'mahasiswa', 'AB', '-', '-', '085817570766', '-', 'indonesia', '6', 'Cash', 'susi', 'ibu', '085817570766', 'pup');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `no_rm` varchar(40) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nm_pasien` varchar(40) CHARACTER SET utf8mb4 DEFAULT NULL,
  `status_pembayaran` varchar(40) CHARACTER SET utf8mb4 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `no_rm`, `nm_pasien`, `status_pembayaran`) VALUES
(3, '000002', 'Farah Amelia Hanifah', 'LUNAS'),
(4, '000002', 'Farah Amelia Hanifah', 'LUNAS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjadwalan`
--

CREATE TABLE `penjadwalan` (
  `id_penjadwalan` int(11) NOT NULL,
  `tgl_kedatangan` date DEFAULT NULL,
  `jam` varchar(10) DEFAULT NULL,
  `no_rk_medis` varchar(30) DEFAULT NULL,
  `nm_pasien` varchar(40) DEFAULT NULL,
  `jk` varchar(15) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `umur` varchar(5) DEFAULT NULL,
  `no_tlp` varchar(20) DEFAULT NULL,
  `nm_dokter` varchar(40) DEFAULT NULL,
  `ren_perawat` varchar(20) DEFAULT NULL,
  `petugas` varchar(20) DEFAULT NULL,
  `stts_konfirmasi` varchar(20) DEFAULT NULL,
  `ket` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penjadwalan`
--

INSERT INTO `penjadwalan` (`id_penjadwalan`, `tgl_kedatangan`, `jam`, `no_rk_medis`, `nm_pasien`, `jk`, `tgl_lahir`, `umur`, `no_tlp`, `nm_dokter`, `ren_perawat`, `petugas`, `stts_konfirmasi`, `ket`) VALUES
(10, '2021-05-20', '20:00', '000002', 'Farah Amelia Hanifah', 'Perempuan', '2013-01-29', '8 Thn', '123456', 'Poli Penyakit Dalam', 'Mata', 'Susi', 'Confirmed', 'tidak ada'),
(11, '2021-05-29', '20:00', '000003', 'melyn', 'Perempuan', '1999-12-04', '21 Th', '085817570766', 'Poli Anak', 'Mata', 'Susi', 'Confirmed', 'tidak ada');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dokter`
--

CREATE TABLE `tb_dokter` (
  `id_dokter` varchar(50) NOT NULL,
  `nama_dokter` varchar(100) NOT NULL,
  `spesialis` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_dokter`
--

INSERT INTO `tb_dokter` (`id_dokter`, `nama_dokter`, `spesialis`, `alamat`, `no_telp`) VALUES
('1', 'dr. Baihaqi Suhaeri', 'Kebidanan dan Penyakit Kandungan', 'Lenteng Agung, Jagakarsa, Jakarta Selatan', '08389801758'),
('10', 'drg. Nur Azizah, Sp.KG', 'Poli Gigi dan Mulut', 'Cilandak Barat, Kec. Cilandak, Kota Jakarta Selatan', '0878912354'),
('11', 'dr. Rajiman, M.Kes, Sp.THT-KL', 'Poli THT', 'Cilandak Barat, Kec. Cilandak, Kota Jakarta Selatan', '0832548751'),
('12', 'dr. Mariati Herlina S, Sp.KJ', 'Poli Jiwa', 'Cilandak Barat, Kec. Cilandak, Kota Jakarta Selatan', '08935487214'),
('13', 'dr. Singgih Harmono, Sp B', 'Poli Umum', 'Cilandak Barat, Kec. Cilandak, Kota Jakarta Selatan', '0832547886'),
('2', 'dr.  Ida Ayu Sri Kusuma Dewi Manuaba, M.Sc., Sp.  A., MARS', 'Poli Anak', '', '08123456'),
('3', 'dr. Anom Suardika, Sp.OG', 'Poli Obsgyn', '', '08765412'),
('4', 'dr. Marthin Limba, Sp PD', 'Poli Penyakit Dalam', '', '082646833'),
('5', 'Dr. Andriani Putri Bestari, Sp.S', 'Poli Syaraf', '', ''),
('6', 'Dr. Annette Mariza, SpM', 'Poli Mata', '', '046831534'),
('7', 'dr. Heryanto Syamsudin, Sp.KK', 'Poli Kulit dan Kelamin', '', '0458242'),
('8', 'dr. Singgih Harmono, Sp B', 'Poli Bedah Umum', 'Cilandak Barat, Kec. Cilandak, Kota Jakarta Selatan', '086548315'),
('9', 'dr. Dimas Raditya Boedijono, Sp.OT', 'Poli Bedah Orthopedi', 'Cilandak Barat, Kec. Cilandak, Kota Jakarta Selatan', '0824683487');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_obat`
--

CREATE TABLE `tb_obat` (
  `id_obat` varchar(50) NOT NULL,
  `nama_obat` varchar(100) NOT NULL,
  `ket_obat` text NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_obat`
--

INSERT INTO `tb_obat` (`id_obat`, `nama_obat`, `ket_obat`, `harga`) VALUES
('26feae87-9b8c-11ea-a0ac-30d16bf3adce', 'Ultraflu', 'Obat flu', 10000),
('26fed132-9b8c-11ea-a0ac-30d16bf3adce', 'Komix', 'Obat batuk', 35000),
('26fef19f-9b8c-11ea-a0ac-30d16bf3adce', 'Paramex', 'Obat sakit kepala', 10000),
('26ff0ff4-9b8c-11ea-a0ac-30d16bf3adce', 'Oskadon', 'Obat sakit kepala', 27000),
('425dd355-9b73-11ea-a0ac-30d16bf3adce', 'Paracetamol', 'Obat demam', 15000),
('6f777c79-9b8c-11ea-a0ac-30d16bf3adce', 'Sanmol', 'Obat demam', 24000),
('6f779dbd-9b8c-11ea-a0ac-30d16bf3adce', 'Amoxilin', 'Obat anti biotik', 17000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_poliklinik`
--

CREATE TABLE `tb_poliklinik` (
  `id_poli` varchar(50) NOT NULL,
  `nama_poli` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_poliklinik`
--

INSERT INTO `tb_poliklinik` (`id_poli`, `nama_poli`, `lokasi`) VALUES
('1', 'Poli Kebidanan dan Penyakit Kandungan', 'Cilandak Barat, Kec. Cilandak, Kota Jakarta Selatan'),
('10', 'Poli Gigi dan Mulut', 'Cilandak Barat, Kec. Cilandak, Kota Jakarta Selatan'),
('11', 'Poli THT', 'Cilandak Barat, Kec. Cilandak, Kota Jakarta Selatan'),
('12', 'Poli Jiwa', 'Cilandak Barat, Kec. Cilandak, Kota Jakarta Selatan'),
('13', 'Poli Umum', 'Cilandak Barat, Kec. Cilandak, Kota Jakarta Selatan'),
('2', 'Poli Anak', 'Cilandak Barat, Kec. Cilandak, Kota Jakarta Selatan'),
('3', 'Poli Obsgyn', 'Cilandak Barat, Kec. Cilandak, Kota Jakarta Selatan'),
('4', 'Poli Penyakit Dalam', 'Cilandak Barat, Kec. Cilandak, Kota Jakarta Selatan'),
('5', 'Poli Syaraf', 'Cilandak Barat, Kec. Cilandak, Kota Jakarta Selatan'),
('6', 'Poli Mata', 'Cilandak Barat, Kec. Cilandak, Kota Jakarta Selatan'),
('7', 'Poli Kuliat dan Kelamin', 'Cilandak Barat, Kec. Cilandak, Kota Jakarta Selatan'),
('8', 'Poli Bedah Umum', 'Cilandak Barat, Kec. Cilandak, Kota Jakarta Selatan'),
('9', 'Poli Bedah Orthopedi', 'Cilandak Barat, Kec. Cilandak, Kota Jakarta Selatan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` varchar(50) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `username`, `password`, `level`) VALUES
('1', 'Susi', 'admin', 'admin', '1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `farmasi`
--
ALTER TABLE `farmasi`
  ADD PRIMARY KEY (`id_farmasi`);

--
-- Indeks untuk tabel `laboratorium`
--
ALTER TABLE `laboratorium`
  ADD PRIMARY KEY (`id_laboratorium`);

--
-- Indeks untuk tabel `pasienbaru`
--
ALTER TABLE `pasienbaru`
  ADD PRIMARY KEY (`reg_baru`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indeks untuk tabel `penjadwalan`
--
ALTER TABLE `penjadwalan`
  ADD PRIMARY KEY (`id_penjadwalan`);

--
-- Indeks untuk tabel `tb_dokter`
--
ALTER TABLE `tb_dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indeks untuk tabel `tb_obat`
--
ALTER TABLE `tb_obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indeks untuk tabel `tb_poliklinik`
--
ALTER TABLE `tb_poliklinik`
  ADD PRIMARY KEY (`id_poli`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `farmasi`
--
ALTER TABLE `farmasi`
  MODIFY `id_farmasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `laboratorium`
--
ALTER TABLE `laboratorium`
  MODIFY `id_laboratorium` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `penjadwalan`
--
ALTER TABLE `penjadwalan`
  MODIFY `id_penjadwalan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
