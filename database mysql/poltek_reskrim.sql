-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jan 2023 pada 20.19
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `poltek_reskrim`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` varchar(30) NOT NULL,
  `nama_jabatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
('ANGGOTA', 'ANGGOTA KEPALA SATUAN RESERSE KRIMINAL'),
('KASAT', 'KEPALA SATUAN RESERSE KRIMINAL'),
('WAKASAT', 'WAKIL KEPALA SATUAN RESERSE KRIMINAL');

-- --------------------------------------------------------

--
-- Struktur dari tabel `operasi`
--

CREATE TABLE `operasi` (
  `id_operasi` varchar(30) NOT NULL,
  `nama_operasi` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `operasi`
--

INSERT INTO `operasi` (`id_operasi`, `nama_operasi`, `status`) VALUES
('OPR001', 'Operasi Pemberantasan Narkotika 2022', 'aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pangkat`
--

CREATE TABLE `pangkat` (
  `id_pangkat` varchar(50) NOT NULL,
  `nama_pangkat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pangkat`
--

INSERT INTO `pangkat` (`id_pangkat`, `nama_pangkat`) VALUES
('Abrip', 'Ajun Brigadir Polisi'),
('Abripda', 'Ajun Brigadir Polisi Dua'),
('Abriptu', 'Ajun Brigadir Polisi Satu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personil`
--

CREATE TABLE `personil` (
  `nrp` int(100) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tlp` varchar(50) NOT NULL,
  `id_pangkat` varchar(50) NOT NULL,
  `id_satker` varchar(50) NOT NULL,
  `id_jabatan` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('admin','kasat','anggota') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `personil`
--

INSERT INTO `personil` (`nrp`, `nama`, `jenis_kelamin`, `alamat`, `tlp`, `id_pangkat`, `id_satker`, `id_jabatan`, `username`, `password`, `level`) VALUES
(15110360, 'Imen Fatu', 'Laki-Laki', 'Walikota', '081338697608', 'Abrip', 'SABHARA', 'ANGGOTA', 'admin', 'admin', 'admin'),
(15110361, 'Pak Kasat', 'Laki-Laki', 'Sikumana', '081338697608', 'Abriptu', 'SABHARA', 'KASAT', 'kasat', 'kasat', 'kasat'),
(15110364, 'Frumensius Laka', 'Laki-Laki', 'Bolok', '08122323222', 'Abrip', 'BARESKRIM', 'ANGGOTA', 'agt01', 'agt01', 'anggota'),
(15110365, 'Armando Blegur', 'Laki-Laki', 'Alor', '0817626622', 'Abrip', 'BARESKRIM', 'KASAT', 'agt', 'agt', 'anggota'),
(15110366, 'Tery', 'Perempuan', 'ala', '0128121', 'Abripda', 'BARESKRIM', 'ANGGOTA', 'tery', 'tery', 'anggota');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `personilsprint`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `personilsprint` (
`no_sprint` varchar(50)
,`tgl_sprint` varchar(20)
,`nama_operasi` varchar(100)
,`status_operasi` varchar(50)
,`tempat` varchar(50)
,`tanggal` varchar(30)
,`lama_tugas` varchar(50)
,`status_tugas` varchar(50)
,`nrp` int(100)
,`nama` varchar(30)
,`jenis_kelamin` varchar(50)
,`alamat` varchar(50)
,`tlp` varchar(50)
,`nama_pangkat` varchar(100)
,`nama_satker` varchar(100)
,`nama_jabatan` varchar(100)
,`perihal` text
,`ket` text
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `satker`
--

CREATE TABLE `satker` (
  `id_satker` varchar(50) NOT NULL,
  `nama_satker` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `satker`
--

INSERT INTO `satker` (`id_satker`, `nama_satker`) VALUES
('BARESKRIM', 'BADAN RESERSE KRIMINAL'),
('INTELKAMPOLDANTT', 'INTELKAM POLDA NTT'),
('SABHARA', 'SATUAN BAYANGKARA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sprint`
--

CREATE TABLE `sprint` (
  `no_sprint` varchar(50) NOT NULL,
  `tgl_sprint` varchar(20) NOT NULL,
  `id_operasi` varchar(30) NOT NULL,
  `id_tugas` varchar(50) NOT NULL,
  `nrp` int(100) NOT NULL,
  `perihal` text NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sprint`
--

INSERT INTO `sprint` (`no_sprint`, `tgl_sprint`, `id_operasi`, `id_tugas`, `nrp`, `perihal`, `ket`) VALUES
('no2928', '2022-08-28', 'OPR001', 'TGS122022001', 15110360, 'TEST', 'SIMPAN'),
('no_sprint', 'tgl_sprint', 'id_operasi', 'id_tugas', 0, 'perihal', 'ket'),
('SRTP281222001', '28-12-2022', 'OPR001', 'TGS122022001', 15110360, 'Penangkapan Terduga Pelaku Pemerkosaan Nomor Laporan Polisi 18/12/2022 Terhadap Korban A.n Bunda Yeti. Pelapor : Yeti Pung Anak', 'Penjemputan Pelaku'),
('SRTP281222003', '29-12-2022', 'OPR001', 'TGS122022002', 15110362, 'Perihal', 'keterangan');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `tampilpers`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `tampilpers` (
`nrp` int(100)
,`nama` varchar(30)
,`jenis_kelamin` varchar(50)
,`alamat` varchar(50)
,`tlp` varchar(50)
,`id_pangkat` varchar(50)
,`nama_pangkat` varchar(100)
,`id_satker` varchar(50)
,`nama_satker` varchar(100)
,`id_jabatan` varchar(50)
,`nama_jabatan` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `tampilsprint`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `tampilsprint` (
`no_sprint` varchar(50)
,`tgl_sprint` varchar(20)
,`id_operasi` varchar(30)
,`nama_operasi` varchar(100)
,`status_operasi` varchar(50)
,`id_tugas` varchar(50)
,`tempat` varchar(50)
,`tanggal` varchar(30)
,`lama_tugas` varchar(50)
,`status_tugas` varchar(50)
,`nrp` int(100)
,`nama` varchar(30)
,`perihal` text
,`ket` text
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `tampiltugas`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `tampiltugas` (
`id_tugas` varchar(50)
,`tempat` varchar(50)
,`tanggal` varchar(30)
,`lama_tugas` varchar(50)
,`status` varchar(50)
,`no_sprint` varchar(50)
,`nrp` int(100)
,`nama` varchar(30)
,`id_operasi` varchar(30)
,`nama_operasi` varchar(100)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tugas`
--

CREATE TABLE `tugas` (
  `id_tugas` varchar(50) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `lama_tugas` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tugas`
--

INSERT INTO `tugas` (`id_tugas`, `tempat`, `tanggal`, `lama_tugas`, `status`) VALUES
('TGS122022001', 'Sikumana', '28-12-2022', '30 Hari', 'aktif'),
('Tugas001', 'Bakunase', '2023-02-18', '60 Hari', 'status');

-- --------------------------------------------------------

--
-- Struktur untuk view `personilsprint`
--
DROP TABLE IF EXISTS `personilsprint`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `personilsprint`  AS  select `tampilsprint`.`no_sprint` AS `no_sprint`,`tampilsprint`.`tgl_sprint` AS `tgl_sprint`,`tampilsprint`.`nama_operasi` AS `nama_operasi`,`tampilsprint`.`status_operasi` AS `status_operasi`,`tampilsprint`.`tempat` AS `tempat`,`tampilsprint`.`tanggal` AS `tanggal`,`tampilsprint`.`lama_tugas` AS `lama_tugas`,`tampilsprint`.`status_tugas` AS `status_tugas`,`tampilsprint`.`nrp` AS `nrp`,`tampilpers`.`nama` AS `nama`,`tampilpers`.`jenis_kelamin` AS `jenis_kelamin`,`tampilpers`.`alamat` AS `alamat`,`tampilpers`.`tlp` AS `tlp`,`tampilpers`.`nama_pangkat` AS `nama_pangkat`,`tampilpers`.`nama_satker` AS `nama_satker`,`tampilpers`.`nama_jabatan` AS `nama_jabatan`,`tampilsprint`.`perihal` AS `perihal`,`tampilsprint`.`ket` AS `ket` from (`tampilsprint` join `tampilpers` on(`tampilsprint`.`nrp` = `tampilpers`.`nrp`)) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `tampilpers`
--
DROP TABLE IF EXISTS `tampilpers`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tampilpers`  AS  select `personil`.`nrp` AS `nrp`,`personil`.`nama` AS `nama`,`personil`.`jenis_kelamin` AS `jenis_kelamin`,`personil`.`alamat` AS `alamat`,`personil`.`tlp` AS `tlp`,`personil`.`id_pangkat` AS `id_pangkat`,`pangkat`.`nama_pangkat` AS `nama_pangkat`,`personil`.`id_satker` AS `id_satker`,`satker`.`nama_satker` AS `nama_satker`,`personil`.`id_jabatan` AS `id_jabatan`,`jabatan`.`nama_jabatan` AS `nama_jabatan` from (((`personil` join `pangkat`) join `satker`) join `jabatan`) where `personil`.`id_pangkat` = `pangkat`.`id_pangkat` and `personil`.`id_satker` = `satker`.`id_satker` and `personil`.`id_jabatan` = `jabatan`.`id_jabatan` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `tampilsprint`
--
DROP TABLE IF EXISTS `tampilsprint`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tampilsprint`  AS  select `sprint`.`no_sprint` AS `no_sprint`,`sprint`.`tgl_sprint` AS `tgl_sprint`,`sprint`.`id_operasi` AS `id_operasi`,`operasi`.`nama_operasi` AS `nama_operasi`,`operasi`.`status` AS `status_operasi`,`sprint`.`id_tugas` AS `id_tugas`,`tugas`.`tempat` AS `tempat`,`tugas`.`tanggal` AS `tanggal`,`tugas`.`lama_tugas` AS `lama_tugas`,`tugas`.`status` AS `status_tugas`,`sprint`.`nrp` AS `nrp`,`personil`.`nama` AS `nama`,`sprint`.`perihal` AS `perihal`,`sprint`.`ket` AS `ket` from (((`sprint` join `operasi`) join `tugas`) join `personil`) where `sprint`.`id_operasi` = `operasi`.`id_operasi` and `sprint`.`id_tugas` = `tugas`.`id_tugas` and `sprint`.`nrp` = `personil`.`nrp` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `tampiltugas`
--
DROP TABLE IF EXISTS `tampiltugas`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tampiltugas`  AS  select `tugas`.`id_tugas` AS `id_tugas`,`tugas`.`tempat` AS `tempat`,`tugas`.`tanggal` AS `tanggal`,`tugas`.`lama_tugas` AS `lama_tugas`,`tugas`.`status` AS `status`,`tampilsprint`.`no_sprint` AS `no_sprint`,`tampilsprint`.`nrp` AS `nrp`,`tampilsprint`.`nama` AS `nama`,`tampilsprint`.`id_operasi` AS `id_operasi`,`tampilsprint`.`nama_operasi` AS `nama_operasi` from (`tugas` left join `tampilsprint` on(`tugas`.`id_tugas` = `tampilsprint`.`id_tugas`)) ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indeks untuk tabel `operasi`
--
ALTER TABLE `operasi`
  ADD PRIMARY KEY (`id_operasi`);

--
-- Indeks untuk tabel `pangkat`
--
ALTER TABLE `pangkat`
  ADD PRIMARY KEY (`id_pangkat`);

--
-- Indeks untuk tabel `personil`
--
ALTER TABLE `personil`
  ADD PRIMARY KEY (`nrp`);

--
-- Indeks untuk tabel `satker`
--
ALTER TABLE `satker`
  ADD PRIMARY KEY (`id_satker`);

--
-- Indeks untuk tabel `sprint`
--
ALTER TABLE `sprint`
  ADD PRIMARY KEY (`no_sprint`);

--
-- Indeks untuk tabel `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id_tugas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
