-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2022 at 04:12 PM
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
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `username`, `password`, `level`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$au6B7TnUzE7zTGv1hsK5.em3DTbAmQrml2PBv2bqmcyfMWky3bgZ.', 'master', '2022-06-15 06:03:13', '2022-06-15 06:03:13');

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
  `nomor_hp` int(255) NOT NULL,
  `berkas_pdf` varchar(255) DEFAULT NULL,
  `berkas_foto` varchar(255) DEFAULT NULL,
  `pesan` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `gambar`, `judul`, `jenis`, `konten`, `created_at`, `updated_at`) VALUES
(7, 'Screenshot (1).png', 'rijal', 'Headline', 'ddddd', '2022-06-13 07:05:38', '2022-06-14 07:49:35'),
(8, 'Screenshot (8).png', 'sds', 'Biasa', 'sdas', '2022-06-13 07:20:25', '2022-06-13 07:20:25');

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
(4, 'rijal', 2314, 'Laki-Laki', 'wefW', 'WEFWE', 345, 345, 'ef', 'wef', 'Islam', '2022-06-12 10:04:12', '2022-06-12 10:04:12'),
(5, 'hafizhun', 34341, 'Perempuan', 'efwe', 'EF3', 4, 4, 'fef', 'weq', 'Islam', '2022-06-14 13:53:49', '2022-06-14 13:53:49'),
(6, 'sacas', 3431, 'Laki-Laki', 'wfw', 'wef', 3, 3242, 'wv', 'ff', 'Islam', '2022-06-12 21:19:40', '2022-06-12 21:19:40');

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aspirasi`
--
ALTER TABLE `aspirasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
