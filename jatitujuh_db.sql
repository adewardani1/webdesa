-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2022 at 07:13 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jatitujuh_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `nama_depan` varchar(255) NOT NULL,
  `nama_belakang` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nomor_hp` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `nama_depan`, `nama_belakang`, `username`, `password`, `level`, `email`, `nomor_hp`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin', '$2y$10$au6B7TnUzE7zTGv1hsK5.em3DTbAmQrml2PBv2bqmcyfMWky3bgZ.', 'Admin', '', '0', '2022-06-15 06:03:13', '2022-06-15 06:03:13'),
(3, 'hafiz', 'hidayat', 'hafiz5738', '$2y$10$iP7JVN1clvEWCrcnCK1hCuRF0qTKllYAk1BHk91692c6Abs8Z3lhW', 'Master', 'rijal.1344@gmail.com', '081393784144', '2022-06-21 04:47:38', '2022-06-21 04:57:53'),
(4, 'hidayat', 'khairi', 'hidayat8343', '$2y$10$UL86HgTqlPhRADXmYe9PAui2/MzdmQGg1EYJzlPH4LC3Ov14BWt3O', 'Master', 'faisal@gmail.com', '08908797902', '2022-06-23 05:56:15', '2022-06-23 06:33:17');

-- --------------------------------------------------------

--
-- Table structure for table `aspirasi`
--

CREATE TABLE `aspirasi` (
  `id` int(11) NOT NULL,
  `nama_depan` varchar(255) NOT NULL,
  `nama_belakang` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `nomor_hp` varchar(255) NOT NULL,
  `pesan` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aspirasi`
--

INSERT INTO `aspirasi` (`id`, `nama_depan`, `nama_belakang`, `email`, `alamat`, `nomor_hp`, `pesan`, `created_at`, `updated_at`) VALUES
(1, 'rijal', 'hafizhun hidayat', 'rijal.1344@gmail.com', 'jl.kusumah indah 3, kec weru, kab cirebon', '081393784144', 'jadi begini pak bu', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `jenis` varchar(255) NOT NULL,
  `konten` text DEFAULT NULL,
  `id_akun` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `gambar`, `judul`, `jenis`, `konten`, `id_akun`, `created_at`, `updated_at`) VALUES
(7, 'Screenshot (1).png', 'faisal', 'news', 'ddddd', 3, '2022-06-13 07:05:38', '2022-06-24 17:36:24'),
(8, 'Screenshot (8).png', 'sds', 'news', 'Sebanyak 25 siswa siswi TK Muslimat Nurul Fahmi Bulakan melakukan wisuda yang didampingi orang tua masing-masing.\n\nDalam sambutannya Sigit berharap, segala ilmu yang sudah diajarkan oleh para guru di TK Nurul Fahmi kepada para siswa dapat bermanfaat dan menjadi bekal untuk melangkah ke pendidikan selanjutnya.\n\n“Semoga apa yang telah didapatkan oleh para siswa di TK Nurul Fahmi ini dapat bermanfaat dan menjadi bekal untuk melangkah ke pendidikan selanjutnya,” ucapnya.', 3, '2022-06-13 07:20:25', '2022-07-05 20:12:43'),
(9, 'desajatituju.jpg', 'ssss', 'headline', 'llll', 3, '2022-06-24 17:25:43', '2022-06-24 17:25:43'),
(15, 'Screenshot (51).png', 'ewfwfw', 'event', 'aqwfqe', 1, '2022-07-06 21:06:20', '2022-07-06 21:06:20'),
(16, 'Screenshot (1124).png', 'sjsjsjj', 'pengumuman', 'lkskldldldl', 1, '2022-07-07 09:05:33', '2022-07-07 09:05:33');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `gambar`, `created_at`, `updated_at`) VALUES
(3, 'Screenshot (39).png', '2022-07-01 06:24:39', '2022-07-01 06:24:39'),
(4, 'Screenshot (52).png', '2022-07-03 05:32:46', '2022-07-03 05:32:46'),
(5, 'Screenshot (125).png', '2022-07-03 05:32:55', '2022-07-03 05:32:55'),
(6, 'Screenshot (230).png', '2022-07-03 05:33:05', '2022-07-03 05:33:05');

-- --------------------------------------------------------

--
-- Table structure for table `kelembagaan`
--

CREATE TABLE `kelembagaan` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelembagaan`
--

INSERT INTO `kelembagaan` (`id`, `gambar`, `nama`, `created_at`, `updated_at`) VALUES
(2, 'osis.png', 'OSIS', '2022-07-04 07:47:45', '2022-07-04 07:47:45'),
(3, 'Logo-UAD-Berwarna.png', 'universitas ahmad dahlan', '2022-07-04 07:48:09', '2022-07-04 07:48:09'),
(4, 'logo-desajatituju.png', 'jatitujuh', '2022-07-04 11:15:36', '2022-07-04 11:15:36');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `komentar` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) DEFAULT NULL,
  `id_berita` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `komentar`, `nama`, `email`, `website`, `id_berita`, `created_at`, `updated_at`) VALUES
(3, 'zzzzz', 'zzzz', 'rijal1900018040@webmail.uad.ac.id', '', 15, '2022-07-07 21:16:31', '2022-07-07 21:16:31'),
(4, 'rtrt', 'wegw', 'rijal.1344@gmail.com', '', 15, '2022-07-07 21:19:55', '2022-07-07 21:19:55'),
(7, 'damfakm', 'rijal', 'kevinhamizan21@gmail.com', '', 16, '2022-07-07 21:25:09', '2022-07-07 21:25:09');

-- --------------------------------------------------------

--
-- Table structure for table `pemerintah_desa`
--

CREATE TABLE `pemerintah_desa` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemerintah_desa`
--

INSERT INTO `pemerintah_desa` (`id`, `gambar`, `created_at`, `updated_at`) VALUES
(5, 'pemerintahan.png', '2022-07-13 09:47:15', '2022-07-13 10:15:46');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_ktp` int(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `desa` varchar(255) NOT NULL,
  `dusun` varchar(255) NOT NULL,
  `rt` int(255) NOT NULL,
  `rw` int(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `pendidikan` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`id`, `nama`, `no_ktp`, `jenis_kelamin`, `desa`, `dusun`, `rt`, `rw`, `status`, `pendidikan`, `agama`, `created_at`, `updated_at`) VALUES
(4, 'rijal hafizhun hidayat', 2314, 'Laki-Laki', 'megu gede', 'WEFWE', 345, 345, 'ef', 'wef', 'Islam', '2022-06-16 22:31:56', '2022-06-16 22:31:56'),
(5, 'hafizhun', 34341, 'Perempuan', 'efwe', 'EF3', 4, 4, 'fef', 'weq', 'Islam', '2022-06-14 13:53:49', '2022-06-14 13:53:49'),
(6, 'sacas', 3431, 'Laki-Laki', 'wfw', 'wef', 3, 3242, 'wv', 'ff', 'Islam', '2022-06-12 21:19:40', '2022-06-12 21:19:40'),
(10, 'test123', 2147483647, 'Perempuan', 'efwe', 'wef', 42, 33, 'wF', 'weq', 'Islam', '2022-07-13 08:36:50', '2022-07-13 08:36:50');

-- --------------------------------------------------------

--
-- Table structure for table `visi_misi`
--

CREATE TABLE `visi_misi` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visi_misi`
--

INSERT INTO `visi_misi` (`id`, `gambar`, `created_at`, `updated_at`) VALUES
(7, 'visi-misi.png', '2022-07-13 10:13:09', '2022-07-13 10:13:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aspirasi`
--
ALTER TABLE `aspirasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_akun` (`id_akun`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelembagaan`
--
ALTER TABLE `kelembagaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemerintah_desa`
--
ALTER TABLE `pemerintah_desa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visi_misi`
--
ALTER TABLE `visi_misi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `aspirasi`
--
ALTER TABLE `aspirasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kelembagaan`
--
ALTER TABLE `kelembagaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pemerintah_desa`
--
ALTER TABLE `pemerintah_desa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `visi_misi`
--
ALTER TABLE `visi_misi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
