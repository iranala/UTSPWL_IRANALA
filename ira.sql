-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2020 at 03:11 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ira`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` varchar(20) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `tanggal_tayang` date NOT NULL,
  `jam_tayang` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `jumlah_beli` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `nama`, `alamat`, `tanggal_tayang`, `jam_tayang`, `jumlah_beli`) VALUES
('A01', 'IRA NALA', 'JEPARA', '2020-04-27', '2020-04-28 13:29:32', 1),
('A02', 'RAFFA', 'RAFFA', '2020-04-29', '2020-04-28 03:30:00', 2),
('A03', 'ARI NELY', 'KUDUS', '2020-04-27', '2020-04-28 04:54:40', 3),
('A04', 'ERICA', 'JEPARA', '2020-04-28', '2020-04-28 04:54:51', 2),
('A05', 'RAISHA', 'KUDUS', '2020-04-28', '2020-04-28 04:54:59', 5),
('A06', 'LATITA', 'SEMARANG', '2020-04-29', '2020-04-28 04:55:06', 2),
('A08', 'AZKA', 'JEPARA', '0000-00-00', '2020-04-29 03:00:39', 0),
('A09', 'ASHFA', 'SEMARANG', '0000-00-00', '2020-04-29 02:59:41', 0);

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id` varchar(20) NOT NULL,
  `judul` varchar(40) NOT NULL,
  `deskripsi` text,
  `durasi` text NOT NULL,
  `tanggal_tayang` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id`, `judul`, `deskripsi`, `durasi`, `tanggal_tayang`) VALUES
('F01', 'IMPERFECT', 'film yang bercerita tentang seseorang harus menerima bentuk fisik apapun dari seorang pasangan', '1 Jam', '2020-04-29'),
('F02', 'TEMAN TAPI MENIKAH', 'Menceritakan tentang persahabatan yang kemudian menikah', '01:30', '2020-04-28'),
('F03', 'ORANG KAYA BARU', 'Ini adalah kisah tentang kekayaan mendadak. Tika, Duta, Dodi, dan ibu mereka dulu hidup sederhana seperti mereka. Ketika ayahnya meninggal, terungkap bahwa ternyata selama ini ayahnya adalah orang kaya', '01:20', '2020-04-29'),
('F04', 'YOWES BEN 2', 'Usai diputus Susan, Bayu dihadapkan pada naiknya harga kontrakan yang membuat dia, ibunya dan Cak Jon terancam diusir. Untungnya Yowis Ben populer di Malang dan jadi satu-satunya harapan Bayu menyelesaikan persoalan keuangan', '01:00', '2020-04-29'),
('F05', 'SESUAI APLIKASI', 'Cerita persahabatan dua driver ojek online, Pras dan Duras. Keduanya harus berjuang untuk memenuhi kebutuhan hidup mereka', '01:00', '2020-04-25');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` varchar(20) NOT NULL,
  `hari` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL,
  `film` varchar(20) NOT NULL,
  `tanggal_tayang` date NOT NULL,
  `jam_tayang` text CHARACTER SET latin1 COLLATE latin1_bin
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `hari`, `harga`, `film`, `tanggal_tayang`, `jam_tayang`) VALUES
('F01', 'Rabu', 45000, 'IMPERFECT', '2020-04-29', '2020-04-28 10:25:00'),
('F02', 'Selasa', 45000, 'TEMAN TAPI MENIKAH', '2020-04-28', '0000-00-00 00:00:00'),
('F03', 'Rabu', 40000, 'ORANG KAYA BARU', '2020-04-29', '14:30');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `tanggal` date NOT NULL,
  `hari` text NOT NULL,
  `film` text NOT NULL,
  `harga` int(15) NOT NULL,
  `jumlah beli` int(15) NOT NULL,
  `total_bayar` int(11) NOT NULL,
  `total_pemasukan` int(15) NOT NULL,
  `foto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`tanggal`, `hari`, `film`, `harga`, `jumlah beli`, `total_bayar`, `total_pemasukan`, `foto`) VALUES
('2020-04-28', 'SELASA', 'TEMAN TAPI MENIKAH', 35000, 4, 140000, 140000, ''),
('2020-04-29', 'RABU', 'IMPERFECT', 40000, 2, 80000, 80000, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`tanggal`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
