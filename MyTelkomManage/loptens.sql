-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2023 at 01:42 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loptens`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `id_detail` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_lop` int(11) NOT NULL,
  `langganan` varchar(30) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `segment` varchar(30) NOT NULL,
  `tipe` varchar(30) NOT NULL,
  `harga` int(30) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `nomor_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`id_detail`, `id_user`, `id_lop`, `langganan`, `alamat`, `segment`, `tipe`, `harga`, `kategori`, `status`, `nomor_order`) VALUES
(2, 2, 16, 'astinet', 'jln. hajihayun', '', 'POTS', 500000, 'OWN CHANEL', 'OCP', 111),
(3, 2, 17, 'pisang', 'baru', '', 'POTS', 900000, 'OWN CHANEL', 'OCP', 211),
(5, 1, 19, 'xl', 'oppo', 'DBS', 'POTS', 8999192, 'NGTMA', 'OCP', 5566),
(6, 1, 20, 'toples', 'kaca', '', 'NON POTS', 888998, 'OWN CHANEL', 'Complate', 4433),
(9, 1, 23, '', '', 'DES', 'POTS', 0, 'OWN CHANEL', 'OCP', 0),
(10, 1, 24, '', '', '', '', 0, '', '', 0),
(11, 1, 25, '', '', '', '', 0, '', '', 0),
(12, 1, 26, '', '', '', '', 0, '', '', 0),
(13, 1, 27, '', '', '', '', 0, '', '', 0),
(14, 4, 28, 'astinet', 'WITEL SULTENG', 'DBS', 'NON POTS', 32000000, 'OWN CHANEL', 'OCP', 4643056),
(15, 4, 29, 'PIJAR', 'WITEL SULTENG', 'DBS', 'NON POTS', 10000000, 'NGTMA', 'OCP', 2147483647),
(16, 4, 30, 'WMS + HSI', 'WITEL SULTENG', 'DGS', 'POTS', 146000000, 'GTMA', 'Complate', 54445),
(17, 4, 31, 'WMS + HSI', 'WITEL SULTENG', 'DBS', 'NON POTS', 13000000, 'NGTMA', 'Complate', 1234567890),
(18, 4, 32, 'NETMONK', 'WITEL SULTENG', 'DGS', 'POTS', 32000000, 'GTMA', 'OCP', 1234509876),
(20, 4, 34, 'WMS + HSI + Astinet', 'WITEL SULTENG', 'DGS', 'NON POTS', 569348000, 'OWN CHANEL', 'OCP', 2147483647),
(21, 4, 35, 'WMS + HSI', 'WITEL SULTENG', 'DGS', 'POTS', 22000000, 'NGTMA', 'OCP', 987456321),
(22, 4, 36, 'astinet', 'WITEL SULTENG', 'DGS', 'NON POTS', 42670000, 'GTMA', 'OCP', 2147483647),
(23, 4, 37, 'WMS + HSI', 'WITEL SULTENG', 'DES', 'NON POTS', 532000000, 'OWN CHANEL', 'Complate', 2147483647),
(24, 4, 38, 'WMS + HSI', 'WITEL SULTENG', 'DES', 'POTS', 8889989, 'OWN CHANEL', 'OCP', 2147483647),
(25, 4, 39, 'WMS + HSI', 'WITEL SULTENG', 'DGS', 'NON POTS', 32000000, 'OWN CHANEL', 'OCP', 54354423);

-- --------------------------------------------------------

--
-- Table structure for table `lop`
--

CREATE TABLE `lop` (
  `id_lop` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `nama_pelanggan` varchar(30) NOT NULL,
  `status_lop` varchar(30) DEFAULT NULL,
  `no_proposal` int(11) DEFAULT NULL,
  `dok_proposal` varchar(200) DEFAULT NULL,
  `no_kontrak` int(11) DEFAULT NULL,
  `dok_kontrak` varchar(200) DEFAULT NULL,
  `no_baso` int(11) DEFAULT NULL,
  `dok_baso` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lop`
--

INSERT INTO `lop` (`id_lop`, `id_user`, `judul`, `nama_pelanggan`, `status_lop`, `no_proposal`, `dok_proposal`, `no_kontrak`, `dok_kontrak`, `no_baso`, `dok_baso`) VALUES
(16, 2, 'sinteks', 'BNI', '', NULL, NULL, NULL, NULL, NULL, NULL),
(17, 2, 'gunting', 'kertas', '', NULL, NULL, NULL, NULL, NULL, NULL),
(19, 1, 'xiaomi', 'samsung', 'Baso', 12, 'CV_2021-09-24-1237422.pdf', 11, 'KURNIANTI.pdf', 9, 'pakta_integritas.pdf'),
(20, 1, 'gelas', 'piring', 'Kontrak', 9, 'HESTI_YULI_HAERANI.pdf', 98, '1_Nota_Pengadaan_Barang_untuk_Kegiatan_Workshop_BGES_Witel_Sulteng_(2).pdf', NULL, 'HESTI_YULI_HAERANI1.pdf'),
(23, 1, '', '', 'Lead', NULL, NULL, NULL, NULL, NULL, NULL),
(24, 1, 'asa', '', 'Lead', NULL, NULL, NULL, NULL, NULL, NULL),
(25, 1, 'sasas', '', 'Lead', NULL, NULL, NULL, NULL, NULL, NULL),
(26, 1, 'ssasss', '', 'Lead', NULL, NULL, NULL, NULL, NULL, NULL),
(27, 1, 'asass', '', 'Lead', NULL, NULL, NULL, NULL, NULL, NULL),
(28, 4, 'Connectivity Bundling Netmonk', 'PARAMASU SU HOTEL CV', 'Proposal', 12, '2_Nota_Pengadaan_Barang_untuk_Kegiatan_Workshop_BGES_Witel_Sulteng_(2)2.pdf', NULL, NULL, NULL, NULL),
(29, 4, 'Connectivity Bundling Netmonk', 'SMP NEGRI 18 PALU', 'Baso', 4243242, '1_Nota_Pengadaan_Barang_untuk_Kegiatan_Workshop_BGES_Witel_Sulteng1.pdf', 24242, '1_Nota_Pengadaan_Barang_untuk_Kegiatan_Workshop_BGES_Witel_Sulteng2.pdf', 24242, 'CV_magang_ditelkom2.pdf'),
(30, 4, 'Connectivity Bundling Netmonk', 'SEKRETARIAT DPRD KAB MORUT', 'Kontrak', 567787, NULL, 6778, NULL, NULL, NULL),
(31, 4, 'MS365', 'POLITEKNIK KESEHATAN PALU', 'Lead', NULL, NULL, NULL, NULL, NULL, NULL),
(32, 4, 'KIDI', 'DIS KOMINFO MORUT', 'Lead', NULL, NULL, NULL, NULL, NULL, NULL),
(34, 4, 'Connectivity Bundling Netmonk', 'UNIVERSITAS TADULAKO', 'Proposal', 111, '2_Nota_Pengadaan_Barang_untuk_Kegiatan_Workshop_BGES_Witel_Sulteng_(2)1.pdf', NULL, NULL, NULL, NULL),
(35, 4, 'Connectivity Bundling Netmonk', 'UWN PALU', 'Lead', NULL, NULL, NULL, NULL, NULL, NULL),
(36, 4, 'Connectivity Bundling Netmonk', 'PLN PERSERO ', 'Lead', NULL, NULL, NULL, NULL, NULL, NULL),
(37, 4, 'Connectivity Bundling Netmonk', 'Libra', 'Lead', NULL, NULL, NULL, NULL, NULL, NULL),
(38, 4, 'Connectivity Bundling Netmonk', 'UNISMUH PALU', 'Lead', NULL, NULL, NULL, NULL, NULL, NULL),
(39, 4, 'Connectivity Bundling Netmonk', 'untad', 'Lead', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `rule` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `rule`) VALUES
(1, 'Kak Wawan', 'januari', '123456', 'Acount Manager'),
(2, 'fulan', 'februari', '123456', 'Acount Manager'),
(3, 'asdin', 'maret', '123456', 'Acount Manager'),
(4, 'RIVO BAWIAS', '403129', '071192Bawias', 'Acount Manager');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`id_lop`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail`
--
ALTER TABLE `detail`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `lop`
--
ALTER TABLE `lop`
  MODIFY `id_lop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
