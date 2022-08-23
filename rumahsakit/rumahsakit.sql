-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Apr 2021 pada 11.14
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
-- Database: `rumahsakit`
--

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
('1', 'dr. Baihaqi Suhaeri', 'Kebidanan dan Penyakit Kandungan', 'Lenteng Agung, Jagakarsa, Jakarta Selatan', '083898017587'),
('10', 'dr. Nova', 'Kulit', 'cempaka putih barat', '085924653476'),
('70000', 'dr. Melynda Putri', 'Gigi dan Mulut', 'pondok ungu permai sekor v', '085817570766');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_obat`
--

CREATE TABLE `tb_obat` (
  `id_obat` varchar(50) NOT NULL,
  `nama_obat` varchar(100) NOT NULL,
  `ket_obat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_obat`
--

INSERT INTO `tb_obat` (`id_obat`, `nama_obat`, `ket_obat`) VALUES
('26feae87-9b8c-11ea-a0ac-30d16bf3adce', 'Ultraflu', 'Obat flu'),
('26fed132-9b8c-11ea-a0ac-30d16bf3adce', 'Komix', 'Obat batuk'),
('26fef19f-9b8c-11ea-a0ac-30d16bf3adce', 'Paramex', 'Obat sakit kepala'),
('26ff0ff4-9b8c-11ea-a0ac-30d16bf3adce', 'Oskadon', 'Obat sakit kepala'),
('425dd355-9b73-11ea-a0ac-30d16bf3adce', 'Paracetamol', 'Obat demam'),
('6f777c79-9b8c-11ea-a0ac-30d16bf3adce', 'Sanmol', 'Obat demam'),
('6f779dbd-9b8c-11ea-a0ac-30d16bf3adce', 'Amoxilin', 'Obat anti biotik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `id_pasien` int(200) NOT NULL,
  `nomor_identitas` varchar(100) NOT NULL,
  `nama_pasien` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pasien`
--

INSERT INTO `tb_pasien` (`id_pasien`, `nomor_identitas`, `nama_pasien`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `no_telp`) VALUES
(3, '2', 'shafira', '2008-02-02', 'P', 'jakpus', '1234567890'),
(35, '4', 'melynda putri', '1999-12-04', 'P', 'PUP SEKTOR V BLOK O', '087880688761'),
(36, '1', 'Annisa', '1998-09-12', 'P', 'Jakarta Utara', '029797924924');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_poliklinik`
--

CREATE TABLE `tb_poliklinik` (
  `id_poli` varchar(50) NOT NULL,
  `nama_poli` varchar(100) NOT NULL,
  `lokasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_poliklinik`
--

INSERT INTO `tb_poliklinik` (`id_poli`, `nama_poli`, `lokasi`) VALUES
('56a9fa0a-3792-4a07-9dab-b9b2b64edaf7', 'Poli Kebidanan dan Penyakit Kandungan', 'Cilandak Barat, Kec. Cilandak, Kota Jakarta Selata');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rekammedis`
--

CREATE TABLE `tb_rekammedis` (
  `id_rm` varchar(128) NOT NULL,
  `tgl_periksa` date NOT NULL,
  `id_poli` varchar(100) NOT NULL,
  `id_pasien` varchar(100) NOT NULL,
  `keluhan` varchar(500) NOT NULL,
  `id_dokter` varchar(100) NOT NULL,
  `diagnosa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_rekammedis`
--

INSERT INTO `tb_rekammedis` (`id_rm`, `tgl_periksa`, `id_poli`, `id_pasien`, `keluhan`, `id_dokter`, `diagnosa`) VALUES
('044209', '2021-04-03', '56a9fa0a-3792-4a07-9dab-b9b2b64edaf7', '35', '<p>Pusing</p>\r\n', 'f853e2ab-a72f-41f5-a3e7-f521cb1367ba', 'Demam'),
('086606', '2021-04-06', '56a9fa0a-3792-4a07-9dab-b9b2b64edaf7', '3233df6e-33c9-47cf-a5b8-e96c958c6b81', '<p>pusing</p>\r\n', 'f853e2ab-a72f-41f5-a3e7-f521cb1367ba', 'migran'),
('250412', '2021-04-12', '56a9fa0a-3792-4a07-9dab-b9b2b64edaf7', '35', 'mual', '10', 'Mual'),
('525905', '2021-03-27', '56a9fa0a-3792-4a07-9dab-b9b2b64edaf7', '4921a408-f1fc-4e36-9015-fd0d8e05d558', '<p>Berak-berak</p>\r\n', 'f853e2ab-a72f-41f5-a3e7-f521cb1367ba', 'Sembelit');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rm_obat`
--

CREATE TABLE `tb_rm_obat` (
  `no` int(128) NOT NULL,
  `id_rm` varchar(128) NOT NULL,
  `id_obat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_rm_obat`
--

INSERT INTO `tb_rm_obat` (`no`, `id_rm`, `id_obat`) VALUES
(38, 'O8X57ZX', '425dd355-9b73-11ea-a0ac-30d16bf3adce'),
(39, '525905', '26fef19f-9b8c-11ea-a0ac-30d16bf3adce'),
(40, '086606', '425dd355-9b73-11ea-a0ac-30d16bf3adce'),
(41, '044209', '425dd355-9b73-11ea-a0ac-30d16bf3adce'),
(42, '250412', '6f779dbd-9b8c-11ea-a0ac-30d16bf3adce');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `username`, `password`, `level`) VALUES
('1', 'Yola', 'yola1996', 'bbaf98dd23575140f5fab942f3536f81099eb67a', '1'),
('2147483647', 'Susi', 'admin', 'admin', '1');

--
-- Indexes for dumped tables
--

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
-- Indeks untuk tabel `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indeks untuk tabel `tb_poliklinik`
--
ALTER TABLE `tb_poliklinik`
  ADD PRIMARY KEY (`id_poli`);

--
-- Indeks untuk tabel `tb_rekammedis`
--
ALTER TABLE `tb_rekammedis`
  ADD PRIMARY KEY (`id_rm`);

--
-- Indeks untuk tabel `tb_rm_obat`
--
ALTER TABLE `tb_rm_obat`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_pasien`
--
ALTER TABLE `tb_pasien`
  MODIFY `id_pasien` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `tb_rm_obat`
--
ALTER TABLE `tb_rm_obat`
  MODIFY `no` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
