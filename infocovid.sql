-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Apr 2021 pada 14.36
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
-- Database: `infocovid`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `rumahsakit`
--

CREATE TABLE `rumahsakit` (
  `nama` varchar(40) NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rumahsakit`
--

INSERT INTO `rumahsakit` (`nama`, `alamat`, `telp`) VALUES
('RS Annisa', 'Jl. Cikarang Baru Raya No.31, Cikarang, Bekasi', '(021) 890 4165'),
('RS Badan Pengusahaan Batam', 'Jl. Cipto Mangunkusumo No.1, Sekupang, Batam', '(0778) 322121'),
('RS Bahtera Mas Kendari', 'Jl. Kapten Piere Tendean, Watubangga, Kendari', '(0401) 3195611'),
('RS Bhayangkara TK. I R. Said Sukanto', 'Jl. Raya Jakarta-Bogor, Kramat Jati, Jakarta Timur', '(021) 8093288'),
('RS Cibitung Medika', 'Jl. Bosih Raya No.117, Cibitung, Bekasi', '(021) 883 23 444'),
('RS Darurat Covid-19 Wisma Atlet Kemayora', 'Jl. Danau Sunter Barat No.1, Sunter Agung, Tj. Priok, Jakart', '119 ext 9'),
('RS Dokter Adam Thalib', 'Jl. Raya Teuku Umar No.25, Cikarang, Bekasi', '(021) 883 32 305'),
('RS Dr. Rivai Abdullah', 'Jl. Sungai Kundur Kab. Banyu Asin', '(0711) 7537201'),
('RS dr. Seoradji Tirtonegoro Klaten', 'Jl. Dr. Soeradji Tirtonegoro No.1, Klaten', '(0272) 321041'),
('RS Dr. Tadjuddin Chalid MPH', 'Jl. Paccerakkang No.67, Makassar', '(0411) 512902'),
('RS Grha MM2100', 'Jl. Kalimantan Blok CB-1 Kawasan Industri MM2100, Cikarang, ', '(021) 505 70 911'),
('RS Hermina Grand Wisata', 'Jl. Festival Boulevard Blok JA I No. 1, Grand Wisata, Bekasi', '(021) 826 512 12'),
('RS Mitra Keluarga Cikarang', 'Jl. Raya Industri No.100, Cikarang, Bekasi', '(021) 898 40 900'),
('RS Omni Cikarang', 'Komp The Oasis Kav No.1, Jl. Raya Cikarang - Cibarusah, Beka', '(021) 297 79 999'),
('RS Paru dr. Ario Wirawan', 'Jl. Hasanudin No.806, Mangunsari, Salatiga', '(0298) 326130'),
('RS Paru Dr. H. A. Rotinsulu', 'Jl. Bukit Jarian No.40, Bandung', '(022) 2034446'),
('RS Paru dr. M. Goenawan Partowidigdo', 'Jl. Puncak Raya Km. 83, Cisarua, Bogor', '(0251) 8253630'),
('RS Pertamina Jaya', 'Jl. Jenderal Ahmad Yani No.2, Cempaka Putih Tim, Jakarta Pus', '(021) 4211911'),
('RS Sentra Medika', 'Jl. Raya Industri Pasir Gombong - Cikarang, Bekasi', '(021) 890 416 064'),
('RS Siloam Cikarang', 'Jl. MH. Thamrin No.Kav. 105, Cikarang, Bekasi', '(021) 296 369 00'),
('RS Tk. II Pelamonia', 'Jl. Jend. Sudirman No.27, Makassar', '0811 1782 399'),
('RS Universitas Airlangga', 'Kampus C Unair, Jl. Mulyorejo, Surabaya', '(031) 5961389'),
('RSAL dr. Mintoharjo', 'Jl. Bendungan Hilir No.17 A, Bendungan Hilir, Jakarta Pusat', '(021) 5703081'),
('RSKD Duren Sawit', 'Jl. Duren Sawit Baru No. 2, Pondok Bambu, Duren Sawit, Jakar', '(021) 8615555'),
('RSPAD Gatot Subroto', 'Jl. Abdul Rahman Saleh Raya No.24, Senen, Jakarta Pusat', '(021) 3441008'),
('RSPI Prof. Dr. Sulianti Saroso', 'Jl. Sunter Permai Raya, Tanjung Priok, Jakarta Utara', '(021) 6506559'),
('RSU Anutapura Palu', 'Jl. Kangkung,  Donggala Kodi, Palu', '(0451) 460570'),
('RSU Arifin Achmad', 'Jl. Diponegoro No.2, Pekanbaru', '(0761) 21618'),
('RSU Cut Meutia Lhokseumawe', 'Jl. Banda Aceh-Medan Km.6 Buket Rata, Lh', '(0645) 43012'),
('RSU Dr. Djasamen Saragih Pematang Sianta', 'Jl. Sutomo No.230, Pematang Siantar', '(0622) 22959'),
('RSU dr. Loekmonohadi', 'Jl. Dr. Lukmonohadi No.19, Kabupaten Kudus.', '(0291) 444001'),
('RSU Dr. M. Haulussy Ambon', 'Jl. Dr. Kayadoe, Benteng, Ambon', '(0911) 343002'),
('RSU dr. TC. Hillers Maumere', 'Jl. Wairklau, No. 1, Kota Baru, Alok Timur, Kabupaten Sikka', '(0382) 21314'),
('RSU Dr. Zainoel Abidin Banda Aceh', 'Jl. Teuku Moh. Daud Beureueh No.108', '(0651) 34565'),
('RSU Jayapura', 'Jl. Kesehatan No.1, Jayapura', '(0967) 533616'),
('RSU Kabanjahe', 'Jl. KS Ketaren 8, Kabanjahe', '(0628) 20550'),
('RSU Lakipadada Toraja', 'Jl. Pongtiku No. 486, Kabupaten Tana Toraja', '(0423) 22264'),
('RSU Merauke', 'Jl. Soekarjo Wiryopranoto No.1, Maro, Merauke', '(0971) 321124'),
('RSU Mokopido Toli-Toli', 'Jl. Lanoni I No.37, Toli-Toli', '(0453) 21300'),
('RSU Nabire', 'Jl. R.E. Martadinata, Siriwini, Nabire', '(0984) 21846'),
('RSU Padang Sidempuan', 'Jl. Dr. Ferdinand Lumban Tobing No.10, Padang Sidempuan', '(0634) 21780, 21251'),
('RSU Ratatotok Buyat', 'Jl. J. W. Lasut Ratatotok II, Ratatotok,  Minahasa', '(0431) 3177610'),
('RSU Taman Husada Bontang', 'Jl. Letjen S. Parman No.1, Bontang', '(0548) 22111'),
('RSU Tk. II Dustira', 'Jl. Dustira No.1, Baros, Cimahi', '-'),
('RSUD Abdul Wahab Sjahrani', 'Jl. Palang Merah No.1, Samarinda', '(0541) 738118'),
('RSUD Ade Mohamad Djoen Sintang', 'Jl. Pattimura No.1, Sintang', '(0565) 22022'),
('RSUD Ahmad Yani Metro', 'Jl. Jend. Ahmad Yani No.13, Imopuro, Metro, Lampung', '(0725) 41820'),
('RSUD Aji Muhammad Parikesit', 'Jl. Ratu Agung No.1, Tlk. Dalam, Kutai Kartanegara', '(0541) 661015'),
('RSUD Andi Makkasau Parepare', 'Jl. Nurussamawati No.9, Bumi Harapan, Pare-Pare', '(0401) 27643'),
('RSUD Arga Makmur', 'Jl. Siti Khadijah No.8, Arga Makmur, Bengkulu Utara', '(0737) 521118'),
('RSUD Banggai Luwuk', 'Jl. lmam Bonjol No.14, Luwuk', '(0461) 21820'),
('RSUD Banyumas', 'Jl. Rumah Sakit No.1, Karangpucung, Kabupaten Banyumas', '(0281) 796031'),
('RSUD Blambangan', 'Jl. Letkol Istiqlah No.49, Banyuwangi', '(0333) 421118'),
('RSUD Cengkareng', 'Jl. Bumi Cengkareng Indah No.1, Cengkareng, Jakarta Barat', '(021) 54372882'),
('RSUD Depati Hamzah', 'Jl. Soekarno Hatta, Bukitbesar, Pangkal Pinang', '(0717) 422693'),
('RSUD dr. Abdul Azis Singkawang', 'Jl. Dr. Soetomo No.28, Singkawang', '(0562) 631748'),
('RSUD Dr. Achmad Mochtar Bukittinggi', 'Jl. Dr. Abdul Rivai No.1, Bukittinggi', '(0752) 21720, 21831'),
('RSUD dr. Agoesdjam Ketapang', 'Jl. DI Panjaitan No.51, Sampit, Kabupaten Ketapang', '(0534) 3037239'),
('RSUD dr. Doris Sylvanus Palangkaraya', 'Jl. Tambun Bungai No.4, Palangka Raya', '(0536) 3221717'),
('RSUD dr. Drajat Prawiranegara Serang', 'Jl. Rumah Sakit Umum No.1, Serang', '-'),
('RSUD Dr. H. Abdul Moeloek', 'Jl. Dr. Rivai No.6, Bandar Lampung', '(0721) 703312'),
('RSUD Dr. H. Bob Bazar, SKM', 'Jl. Batin Tjindar Bumi No.14 B, Kab. Lampung Selatan', '(0727) 322159'),
('RSUD dr. H. Chasan Boesoirie', 'Jl. Cempaka, Ternate', '(0921) 3121281'),
('RSUD dr. H. Marsidi Judono', 'Air Raya, Tj. Pandan, Belitung', '(0719) 21071'),
('RSUD Dr. Iskak Tulungagung', 'Jl. Dr. Wahidin Sudiro Husodo, Kabupaten Tulungagung', '(0355) 322609'),
('RSUD dr. Kanujoso Djatiwibowo', 'Jl. MT Haryono No.656, Balikpapan', '(0542) 873901'),
('RSUD dr. Moewardi Surakarta', 'Jl. Kolonel Sutarto No.132, Surakarta', '(0271) 634634'),
('RSUD dr. Murjani Sampit', 'Jl. H. Muhammad Arsyad No.65, Kotawaringin Timur', '(0531) 21010'),
('RSUD dr. P. P. Magrettti Saumlaki', 'Jl. Ir. Soekarno - Poros Utama, Kabupaten Maluku Tenggara Ba', '(0918) 21113'),
('RSUD dr. R. Koesma Tuban', 'Jl. Dr. Wahidin Sudirohusodo No.800, Tuban', '(0356) 321010'),
('RSUD Dr. R. Sosodoro Djatikoesoemo', 'Jl. Dr. Wahidin No.36, Bojonegoro', '(0353) 881193'),
('RSUD Dr. R. Sudjono', 'Jl. Prof. M. Yamin SH No.55, Selong', '(0376) 21118'),
('RSUD dr. Saiful Anwar', 'Jl. Jaksa Agung Suprapto No.2, Malang', '(0341) 362101'),
('RSUD dr. Sam Ratulangi', 'Jl. Suprapto No.123, Luaan, Kabupaten Minahasa', '(0431) 321171'),
('RSUD dr. Slamet Garut', 'Jl. Rumah Sakit No.10, Garut', '(0262) 232720'),
('RSUD dr. Soebandi Jember', 'Jl. Dr. Soebandi No.124, Jember', '0823 0159 8557'),
('RSUD dr. Soedarso Pontianak', 'Jl. Dr. Soedarso No.1, Pontianak', '(0561) 737701'),
('RSUD dr. Soedono Madiun', 'Jl. Dr. Sutomo No.59, Madiun', '(0351) 454657'),
('RSUD dr. Soeselo Slawi', 'Jl. Dr. Sutomo No.63, Slawi', '(0283) 491016'),
('RSUD dr. Soetomo', 'Jl. Mayjen Prof. Dr. Moestopo No.6-8, Surabaya', '(031) 5501078'),
('RSUD Embung Fatimah', 'Bukit Tempayan, Batu Aji, Batam', '(0778) 364446'),
('RSUD Gunung Jati Cirebon', 'Jl. Kesambi Raya No.56, Cirebon', '(0231) 206330'),
('RSUD H. Boejasin Pelaihari', 'Jl. A. Syahrani, Pelaihari', '(0512) 21082'),
('RSUD H. L. Manambai Abdul Kadir', 'Jl. Lintas Sumbawa-Bima Km 5, Seketeng, Kabupaten Sumbawa', '(0371) 2628078'),
('RSUD Hasanuddin Damrah Manna', 'Raya Padang Panjang, Manna, Bengkulu Selatan', '(0739) 22870'),
('RSUD Kabupaten Bekasi', 'Jl. Raya Teuku Umar No.202, Bekasi', '(021) 883 74 444'),
('RSUD Kabupaten Buleleng', 'Jl. Ngurah Rai No.30, Astina, Buleleng', '(0362) 22046'),
('RSUD Kabupaten Indramayu', 'Jl. Murahnara No.7, Sindang, Indramayu', '(0234) 272655'),
('RSUD Kabupaten Kediri Pare', 'Jl. Pahlawan Kusuma Bangsa No.1, Pare', '(0354) 391718'),
('RSUD Kabupaten Sinjai', 'Jl. Jend. Sudirman No.47, Sinjai', '(0482) 21132'),
('RSUD Kabupaten Tangerang', 'Jl. Jend. Ahmad Yani No.9', '(021) 5523507'),
('RSUD Kardinah Tegal', 'Jl. Aip. Ks. Tubun No. 4, Tegal', '(0283) 356067'),
('RSUD Kayuagung', 'Jl. Raya Lintas Timur, Kayuagung', '(0712) 323889'),
('RSUD Koja', 'Jl. Deli No. 4, Koja, Jakarta Utara', '(021) 43938478'),
('RSUD Kolonedale', 'Jl. W. Monginsidi No.2, Kolonedale', '(0465) 21010'),
('RSUD Komodo Labuan Bajo', 'Jl. Trans Ruteng - Labuan Bajo, Desa Golo Bilas, Komodo.', '0813 3705 5250'),
('RSUD Kota Bima', 'Jl. Langsat No.1, Raba, Bima', '(0374) 43142'),
('RSUD Kota Dumai', 'Jl. Tanjung Jati No.4, Dumai', '(0762) 38368'),
('RSUD Kota Tarakan', 'Jl. Pulau Irian No.1, Kp. Satu Skip, Tarakan', '(0551) 21166'),
('RSUD Kota Yogyakarta', 'Jl. Ki Ageng Pemanahan No.1, Yogyakarta', '(0274) 371195'),
('RSUD Kotamobagu', 'Pobundayan, Kotamobagu', '(0435) 822816'),
('RSUD Kraton', 'Jl. Veteran No.31, Pekalongan', '(0285) 421621'),
('RSUD KRMT Wongsonegoro', 'Jl. Fatmawati No.1, Semarang', '(024) 6711500'),
('RSUD Labuang Baji', 'Jl. Dr. Ratulangi No.81, Makassar', '(0411) 873482'),
('RSUD Lahat', 'Jl. Mayor Ruslan No.29, Lahat', '(0731) 321785, 21785'),
('RSUD M. Yunus Bengkulu', 'Jl. Bhayangkara, Sidomulyo, Bengkulu', '(0736) 52004, 52008'),
('RSUD Manokwari', 'Jl. Siliwangi No.1, Manokwari Barat', '(0986) 215133'),
('RSUD Mayjen H.M. Ryacudu', 'Jl. Jend. Sudirman No.24, Kotabumi, Kab. Lampung Utara', '(0724) 22095'),
('RSUD Muhammad Sani Kab. Karimun', 'Jl. Poros No.1, Tanjung Balai, Karimun', 'Fax: 29611'),
('RSUD NTB', 'Jl. Prabu Rangkasari, Dasan Cermen, Mataram', '(0370) 7502424'),
('RSUD Panembahan Senopati Bantul', 'Jl. Dr. Wahidin Sudiro Husodo, Bantul', '(0274) 367381'),
('RSUD Panglima Sebaya', 'Jl. Kusuma Bangsa Km.5, Paser', '(0543) 21363'),
('RSUD Pasar Minggu', 'Jl. TB Simatupang No.1, RW.5, Pasar. Minggu, Jakarta Selatan', '(021) 29059999'),
('RSUD Prof. dr. H. Aloei Saboe', 'Jl. S. Batutihe No.7, Gorontalo', '(0435) 821019'),
('RSUD Prof. Dr. Margono Soekarjo', 'Jl. Dr. Gumbreg No.1, Purwokerto', '(0281) 632708'),
('RSUD Prof. dr. W. Z. Johannes', 'Jl. Dr. Moch. Hatta No.19, Kupang', '(0380) 832892'),
('RSUD Provinsi Kepulauan Riau Tanjung Pin', 'Jl. WR. Supratman No.100, Air Raja, Tanjung Pinang', '(0771) 7335202'),
('RSUD Provinsi Sulawesi Barat', ' Jl. RE Martadinata, Simboro, Kabupaten Mamuju', '0823 9621 2345'),
('RSUD Puri Husada Tembilahan', 'Jl. Veteran No.52, Hilir Tembilahan', '(0768) 22118'),
('RSUD R. Syamsudin, SH Sukabumi', 'Jl. Rumah Sakit No.1, Sukabumi', '(0266) 245703'),
('RSUD RAA Soewondo Kendal', 'Jl. Laut No.21, Kendal', '(0294) 381433'),
('RSUD Raden Mattaher Jambi', 'Jl. Letjen Suprapto No.31, Telanaipura, Jambi', '(0741) 61692'),
('RSUD Sanjiwani Gianyar', 'Jl. Ciung Wanara-Gianyar No.2, Gianyar', '(0361) 943020'),
('RSUD Sidoarjo', 'Jl. Mojopahit No.667, Kabupaten Sidoarjo', '(031) 8961649'),
('RSUD Siti Fatimah Provinsi Sumatera Sela', 'Jl. Kol. H. Burlian, Suka Bangun, Palembang', '(0711) 5718883'),
('RSUD Sorong', 'Kp. Baru, Sorong', '(0951) 321850'),
('RSUD Sultan Imanuddin Pangkalan Bun', 'Jl. Sutan Syahrir No.17, Kabupaten Kotawaringin Barat', '(0532) 21404'),
('RSUD Tabanan', 'Jl. Pahlawan No.14, Tabanan', '(0361) 811027'),
('RSUD Tanjung Selor', 'Jl. Cendrawasih - Tanjung Selor', '(0552)- 21292'),
('RSUD Tarakan', 'Jl. Kyai Caringin No. 7, Cideng, Gambir, Jakarta Pusat', '(021) 3503003, 1148'),
('RSUD Tarutung', 'Jl. H. Agus Salim No.1, Tapanuli Utara', '(0633) 21303'),
('RSUD Tidar Magelang', 'Jl. Tidar No.30 A, Magelang', '(0293) 36226'),
('RSUD Ulin Banjarmasin', 'Jl. Ahmad Yani No.43, Banjarmasin', '(0511) 3252229'),
('RSUD Undata Palu', 'Jl. Trans Sulawesi Tondo, Palu', '(0451) 4908020'),
('RSUD Wates', 'Jl. Tentara Pelajar Km. 1 No. 5, Kulon Progo', '(0274) 773169'),
('RSUP dr. Hasan Sadikin', 'Jl. Pasteur No.38, Pasteur, Bandung', '(022) 2551111'),
('RSUP dr. J. Leimena', 'Rumah Tiga, Tlk. Ambon, Ambon.', '119 ext 9'),
('RSUP dr. Kariadi', 'Jl. Dr. Sutomo No.16, Semarang', '(024) 8413993'),
('RSUP Dr. M. Jamil Padang', 'Jl. Perintis Kemerdekaan, Padang', '(0751) 32372, 37030'),
('RSUP dr. Sardjito', 'Jl. Kesehatan No.1, Yogyakarta', '(0274) 631190'),
('RSUP dr. Wahidin Sudirohusodo', 'Jl. Perintis Kemerdekaan Km.11, Makassar', '(0411) 510675'),
('RSUP Fatmawati', 'Jl. TB Simatupang c No.18, Cilandak, Jakarta Selatan', '(021) 7501524'),
('RSUP H. Adam Malik Medan', 'Jl. Bunga Lau No.17', '(061) 8360381'),
('RSUP M. Hoesin', 'Jl. Jend. Sudirman Km.3-5, Palembang', '(0711) 30126, 354088'),
('RSUP Persahabatan', 'Jl. Persahabatan Raya No.1, Jakarta Timur', '(021) 4891708'),
('RSUP Prof. dr. R. D Kandou', 'Jl. Raya Tanawangko No.56, Manado', '(0431) 8383058'),
('RSUP Sanglah', 'Jl. Diponegoro, Denpasar, Bali', '(0361) 227912'),
('Rumah Sakit Pelni', 'Jl. Ks. Tubun No. 92-94, RT 13 RW 1, Slipi, Palmerah, Jakart', '(021) 5306901');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_komentar`
--

CREATE TABLE `tbl_komentar` (
  `komentar_id` int(11) NOT NULL,
  `parent_komentar_id` int(11) NOT NULL,
  `komentar` varchar(200) CHARACTER SET utf8 NOT NULL,
  `nama_pengirim` varchar(40) CHARACTER SET utf8 NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_komentar`
--

INSERT INTO `tbl_komentar` (`komentar_id`, `parent_komentar_id`, `komentar`, `nama_pengirim`, `date`) VALUES
(1, 0, 'keren', 'farmel', '2019-03-22 11:57:03'),
(2, 1, 'mantep', 'bob', '2019-03-22 11:57:13'),
(3, 2, 'setuju', 'nje', '2019-03-22 11:57:34'),
(4, 1, 'good', 'poja', '2019-03-22 11:57:49'),
(5, 0, 'mantul', 'melyn', '2020-05-03 06:28:56'),
(9, 5, 'terimakasih', 'adi', '2020-05-11 15:38:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'xtian', '123456'),
(2, 'tes', 'tes1'),
(3, 'baik', 'baik1'),
(4, 'sisa', 'sisa1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `rumahsakit`
--
ALTER TABLE `rumahsakit`
  ADD PRIMARY KEY (`nama`);

--
-- Indeks untuk tabel `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  ADD PRIMARY KEY (`komentar_id`) USING BTREE;

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  MODIFY `komentar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
