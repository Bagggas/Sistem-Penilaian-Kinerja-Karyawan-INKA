-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2020 at 11:37 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inka`
--

-- --------------------------------------------------------

--
-- Table structure for table `tkaryawans`
--

CREATE TABLE `tkaryawans` (
  `no` int(255) NOT NULL,
  `id` int(10) NOT NULL,
  `status` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `divisi` varchar(100) NOT NULL,
  `golongan` text NOT NULL,
  `nilai_output` float NOT NULL,
  `nilai_atasan` float NOT NULL,
  `nilai_learning` float NOT NULL,
  `nilai_kedisiplinan` float NOT NULL,
  `nilai_5r` float NOT NULL,
  `tanggal` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tkaryawans`
--

INSERT INTO `tkaryawans` (`no`, `id`, `status`, `nama`, `divisi`, `golongan`, `nilai_output`, `nilai_atasan`, `nilai_learning`, `nilai_kedisiplinan`, `nilai_5r`, `tanggal`) VALUES
(12331332, 991200043, 'Tetap', 'BUDI SANTOSO', 'Divisi Pengembangan Perusahaan', 'I-7-1', 90, 80, 90, 90, 90, '2020-11-01 04:08:58'),
(12331333, 991200043, 'Tetap', 'BUDI SANTOSO', 'Divisi Pengembangan Perusahaan', 'I-7-1', 80.9, 90, 90.9, 100, 100, '2020-12-01 04:13:37'),
(12331334, 991000002, 'Tetap', 'ADIB ARDHIAN', 'Divisi Pengembangan Perusahaan', 'IV-19-1', 80, 90, 90, 80, 90, '2020-10-01 04:33:00'),
(12331335, 991200043, 'Tetap', 'BUDI SANTOSO', 'Divisi Pengembangan Perusahaan', 'I-7-1', 70, 80, 90, 80, 90, '2020-10-01 05:25:00'),
(12331336, 991200043, 'Tetap', 'BUDI SANTOSO', 'Divisi Pengembangan Perusahaan', 'I-7-1', 90, 90, 90, 100, 100, '2020-09-01 07:40:55'),
(12331337, 991500008, 'Tetap', 'DELIMA WAHYUNINGTYAS', 'Divisi Pengembangan Perusahaan', 'I-10-1', 89, 97, 100, 85, 100, '2020-11-01 07:41:54'),
(12331338, 991500008, 'Tetap', 'DELIMA WAHYUNINGTYAS', 'Divisi Pengembangan Perusahaan', 'I-10-1', 95, 78, 100, 89, 90, '2020-12-01 07:42:21'),
(12331339, 991500008, 'Tetap', 'DELIMA WAHYUNINGTYAS', 'Divisi Pengembangan Perusahaan', 'I-10-1', 100, 100, 100, 100, 90, '2020-10-01 07:42:41'),
(12331340, 991500008, 'Tetap', 'DELIMA WAHYUNINGTYAS', 'Divisi Pengembangan Perusahaan', 'I-10-1', 78, 89, 90, 95, 88, '2020-09-01 07:42:59'),
(12331341, 991500019, 'Tetap', 'SITI NUR RODIYAH', 'Divisi Pengembangan Perusahaan', 'II-11-1', 100, 98, 97, 96, 100, '2020-10-01 07:43:36'),
(12331342, 991500019, 'Tetap', 'SITI NUR RODIYAH', 'Divisi Pengembangan Perusahaan', 'II-11-1', 89, 90, 97, 100, 100, '2020-10-01 07:43:55'),
(12331343, 991500019, 'Tetap', 'SITI NUR RODIYAH', 'Divisi Pengembangan Perusahaan', 'II-11-1', 89, 95, 100, 100, 100, '2020-10-01 07:44:19'),
(12331345, 991600005, 'Tetap', 'DYKA RAHAYU MEYLA SARI', 'Divisi Pengembangan Perusahaan', 'II-11-1', 100, 88, 79, 100, 100, '2020-12-01 07:44:59'),
(12331346, 991600005, 'Tetap', 'DYKA RAHAYU MEYLA SARI', 'Divisi Pengembangan Perusahaan', 'II-11-1', 90, 80, 100, 100, 100, '2020-11-01 07:45:16'),
(12331347, 991600005, 'Tetap', 'DYKA RAHAYU MEYLA SARI', 'Divisi Pengembangan Perusahaan', 'II-11-1', 100, 98, 100, 89, 100, '2020-10-01 07:45:35'),
(12331348, 991600005, 'Tetap', 'DYKA RAHAYU MEYLA SARI', 'Divisi Pengembangan Perusahaan', 'II-11-1', 95.6, 98.7, 98.7, 99.9, 100, '2020-09-01 07:46:06'),
(12331350, 991800003, 'Tetap', 'AHMAD AFIF MAULANA', 'Divisi Pengembangan Perusahaan', 'I-10-1', 90, 90, 90, 90, 90, '2020-12-01 07:47:56'),
(12331351, 991800003, 'Tetap', 'AHMAD AFIF MAULANA', 'Divisi Pengembangan Perusahaan', 'I-10-1', 95, 96, 97, 98, 99, '2020-11-01 07:48:15'),
(12331352, 991800003, 'Tetap', 'AHMAD AFIF MAULANA', 'Divisi Pengembangan Perusahaan', 'I-10-1', 95, 100, 96, 100, 97, '2020-10-01 07:48:36'),
(12331353, 991900004, 'Tetap', 'FARINDA CESARIZKA RAHMITA', 'Divisi Pengembangan Perusahaan', 'I-10-1', 100, 90, 95, 100, 100, '2020-10-01 07:49:07'),
(12331354, 991900004, 'Tetap', 'FARINDA CESARIZKA RAHMITA', 'Divisi Pengembangan Perusahaan', 'I-10-1', 89, 95, 98, 100, 90, '2020-10-01 07:49:28'),
(12331355, 991900004, 'Tetap', 'FARINDA CESARIZKA RAHMITA', 'Divisi Pengembangan Perusahaan', 'I-10-1', 100, 100, 98, 97, 96, '2020-10-01 07:49:46'),
(12331356, 991900004, 'Tetap', 'FARINDA CESARIZKA RAHMITA', 'Divisi Pengembangan Perusahaan', 'I-10-1', 89, 76, 89, 79, 100, '2020-10-01 07:50:10'),
(12331357, 991900024, 'Tetap', 'GANDI WIDHI ARTHA', 'Divisi Pengembangan Perusahaan', 'I-10-1', 100, 100, 100, 100, 89, '2020-10-01 07:51:06'),
(12331358, 991900024, 'Tetap', 'GANDI WIDHI ARTHA', 'Divisi Pengembangan Perusahaan', 'I-10-1', 90, 90, 90, 89, 89, '2020-10-01 07:51:21'),
(12331359, 991900024, 'Tetap', 'GANDI WIDHI ARTHA', 'Divisi Pengembangan Perusahaan', 'I-10-1', 89, 98, 89, 98, 100, '2020-10-01 07:51:36'),
(12331360, 991900024, 'Tetap', 'GANDI WIDHI ARTHA', 'Divisi Pengembangan Perusahaan', 'I-10-1', 85, 85, 85, 85, 85, '2020-10-01 07:51:53'),
(12331361, 991700042, 'Tetap', 'ERLINDA PERMATASARI', 'Divisi Pengembangan Perusahaan', 'II-14-1', 100, 100, 100, 100, 100, '2020-12-01 07:52:20'),
(12331363, 991700042, 'Tetap', 'ERLINDA PERMATASARI', 'Divisi Pengembangan Perusahaan', 'II-14-1', 90, 88, 98, 87, 86, '2020-11-01 07:52:50'),
(12331364, 991700042, 'Tetap', 'ERLINDA PERMATASARI', 'Divisi Pengembangan Perusahaan', 'II-14-1', 89, 100, 99.8, 88.9, 97.9, '2020-10-01 07:53:08'),
(12331365, 991400015, 'Tetap', 'ROY PRADHANA', 'Divisi Pengembangan Perusahaan', 'II-13-1', 100, 80, 100, 100, 100, '2020-10-01 07:54:38'),
(12331366, 991400015, 'Tetap', 'ROY PRADHANA', 'Divisi Pengembangan Perusahaan', 'II-13-1', 88, 88, 89, 87, 80, '2020-10-01 07:54:53'),
(12331367, 991400015, 'Tetap', 'ROY PRADHANA', 'Divisi Pengembangan Perusahaan', 'II-13-1', 78, 89, 90, 100, 88.9, '2020-10-01 07:55:08'),
(12331368, 991400015, 'Tetap', 'ROY PRADHANA', 'Divisi Pengembangan Perusahaan', 'II-13-1', 78, 87, 78, 87, 100, '2020-10-01 07:55:21'),
(12331382, 991900024, 'Tetap', 'GANDI WIDHI ARTHA', 'Divisi Pengembangan Perusahaan', 'I-10-1', 80, 90, 80, 80, 90, '2020-10-02 07:29:07'),
(12331383, 991900024, 'Tetap', 'GANDI WIDHI ARTHA', 'Divisi Pengembangan Perusahaan', 'I-10-1', 80, 90, 80, 90, 80, '2020-10-02 08:08:12'),
(12331384, 991400015, 'Tetap', 'ROY PRADHANA', 'Divisi Pengembangan Perusahaan', 'II-13-1', 80, 90, 80, 90, 80, '2020-10-02 08:08:24'),
(12331385, 661710359, 'PKWT', 'TITIES SEKAR ENDAH', 'Divisi Pengembangan Perusahaan', 'I-10-1', 80, 90, 80, 90, 80, '2020-12-05 06:34:27'),
(12331387, 661710359, 'PKWT', 'TITIES SEKAR ENDAH', 'Divisi Pengembangan Perusahaan', 'I-10-1', 80, 90, 80, 90, 80, '2020-10-05 06:50:11'),
(12331388, 661710359, 'PKWT', 'TITIES SEKAR ENDAH', 'Divisi Pengembangan Perusahaan', 'I-10-1', 80, 90, 80, 90, 80, '2020-10-05 06:52:58'),
(12331389, 991700042, 'Tetap', 'ERLINDA PERMATASARI', 'Divisi Pengembangan Perusahaan', 'II-14-1', 80, 90, 80, 90, 80, '2020-09-05 06:53:28'),
(12331390, 991700042, 'Tetap', 'ERLINDA PERMATASARI', 'Divisi Pengembangan Perusahaan', 'II-14-1', 80, 90, 80, 90, 80, '2020-12-05 06:54:37'),
(12331391, 661710359, 'PKWT', 'TITIES SEKAR ENDAH', 'Divisi Pengembangan Perusahaan', 'I-10-1', 80, 90, 80, 90, 80, '2020-10-05 07:00:21'),
(12331392, 991700042, 'Tetap', 'ERLINDA PERMATASARI', 'Divisi Pengembangan Perusahaan', 'II-14-1', 80, 90, 80, 90, 80, '2020-08-05 07:00:35'),
(12331393, 661710359, 'PKWT', 'TITIES SEKAR ENDAH', 'Divisi Pengembangan Perusahaan', 'I-10-1', 80, 50, 80, 90, 80, '2020-12-05 07:46:53'),
(12331395, 991700042, 'Tetap', 'ERLINDA PERMATASARI', 'Divisi Pengembangan Perusahaan', 'II-14-1', 80, 90, 80, 90, 80, '2020-10-05 07:47:13'),
(12331396, 991700042, 'Tetap', 'ERLINDA PERMATASARI', 'Divisi Pengembangan Perusahaan', 'II-14-1', 80, 80, 90, 80, 90, '2020-09-05 07:51:11'),
(12331397, 991700042, 'Tetap', 'ERLINDA PERMATASARI', 'Divisi Pengembangan Perusahaan', 'II-14-1', 80, 90, 80, 90, 80, '2020-11-05 07:52:14'),
(12331398, 661710359, 'PKWT', 'TITIES SEKAR ENDAH', 'Divisi Pengembangan Perusahaan', 'I-10-1', 80, 90, 80, 90, 80, '2020-11-05 07:54:52'),
(12331399, 991900024, 'Tetap', 'GANDI WIDHI ARTHA', 'Divisi Pengembangan Perusahaan', 'I-10-1', 80, 90, 80, 90, 80, '2020-12-05 07:55:27'),
(12331400, 991400015, 'Tetap', 'ROY PRADHANA', 'Divisi Pengembangan Perusahaan', 'II-13-1', 70, 80, 70, 80, 80, '2020-11-05 09:02:15'),
(12331401, 991900024, 'Tetap', 'GANDI WIDHI ARTHA', 'Divisi Pengembangan Perusahaan', 'I-10-1', 80, 90, 80, 90, 80, '2020-11-05 09:24:56'),
(12331413, 44444, 'Tetap', 'YAYAYA', 'Divisi Pengembangan Perusahaan', 'I-6-1', 80, 79, 80, 90, 80, '2020-10-09 08:08:06'),
(12331414, 991900024, 'Tetap', 'GANDI WIDHI ARTHA', 'Divisi Pengembangan Perusahaan', 'I-10-1', 80, 90, 80, 90, 80, '2020-10-12 09:49:35'),
(12331415, 661710359, 'PKWT', 'TITIES SEKAR ENDAH', 'Divisi Pengembangan Perusahaan', 'I-10-1', 70, 80, 90, 70, 80, '2020-10-12 09:49:56'),
(12331416, 991800003, 'Tetap', 'AHMAD AFIF MAULANA', 'Divisi Pengembangan Perusahaan', 'I-10-1', 60, 80, 90, 80, 90, '2020-08-12 09:50:09'),
(12331417, 991200043, 'Tetap', 'BUDI SANTOSO', 'Divisi Pengembangan Perusahaan', 'I-7-1', 60, 70, 80, 70, 80, '2020-08-12 09:50:21'),
(12331418, 991500008, 'Tetap', 'DELIMA WAHYUNINGTYAS', 'Divisi Pengembangan Perusahaan', 'I-10-1', 90, 90, 90, 90, 90, '2020-08-12 09:50:36'),
(12331419, 991900004, 'Tetap', 'FARINDA CESARIZKA RAHMITA', 'Divisi Pengembangan Perusahaan', 'I-10-1', 80, 90, 90, 90, 90, '2020-10-12 09:50:55'),
(12331420, 991500019, 'Tetap', 'SITI NUR RODIYAH', 'Divisi Pengembangan Perusahaan', 'II-11-1', 90, 90, 90, 90, 90, '2020-10-12 09:51:14'),
(12331421, 991900024, 'Tetap', 'GANDI WIDHI ARTHA', 'Divisi Pengembangan Perusahaan', 'I-10-1', 80, 90, 80, 90, 80, '2020-10-12 09:51:26'),
(12331422, 991000006, 'Tetap', 'YAYA', 'Divisi IT', 'I-6-1', 80, 90, 80, 90, 80, '2020-08-13 01:24:45'),
(12331423, 991000006, 'Tetap', 'YAYA', 'Divisi IT', 'I-6-1', 60, 70, 80, 60, 80, '2020-09-13 03:08:55'),
(12331424, 991000006, 'Tetap', 'YAYA', 'Divisi IT', 'I-6-1', 80, 90, 80, 90, 80, '2020-10-13 03:14:44'),
(12331425, 991000006, 'Tetap', 'YAYA', 'Divisi IT', 'I-6-1', 60, 60, 60, 60, 60, '2020-11-13 03:15:38'),
(12331426, 991000006, 'Tetap', 'YAYA', 'Divisi IT', 'I-6-1', 30, 80, 80, 90, 80, '2020-10-13 03:16:18'),
(12331427, 991000006, 'Tetap', 'YAYA', 'Divisi IT', 'I-6-1', 90, 90, 90, 90, 90, '2020-12-13 03:16:44'),
(12331428, 991000008, 'Tetap', 'APRILIA', 'Divisi Pemasaran', 'I-6-1', 80, 90, 80, 90, 80, '2020-12-13 03:40:20'),
(12331429, 991000008, 'Tetap', 'APRILIA', 'Divisi Pemasaran', 'I-6-1', 70, 80, 70, 80, 70, '2020-11-13 03:40:28'),
(12331430, 991000008, 'Tetap', 'APRILIA', 'Divisi Pemasaran', 'I-6-1', 90, 90, 90, 90, 90, '2020-10-13 03:40:39'),
(12331431, 991000008, 'Tetap', 'APRILIA', 'Divisi Pemasaran', 'I-6-1', 90, 100, 100, 100, 100, '2020-09-13 03:40:53'),
(12331432, 991000008, 'Tetap', 'APRILIA', 'Divisi Pemasaran', 'I-6-1', 100, 100, 100, 100, 100, '2020-08-13 03:41:11'),
(12331456, 991900024, 'Tetap', 'GANDI WIDHI ARTHA', 'Divisi Pengembangan Perusahaan', 'I-10-1', 80, 90, 80, 90, 80, '2020-10-14 05:53:51'),
(12331487, 991200043, 'Tetap', 'BUDI SANTOSO', 'Divisi Pengembangan Perusahaan', 'I-7-1', 80, 10, 10, 10, 10, '2020-10-15 07:25:51'),
(12331488, 991200043, 'Tetap', 'BUDI SANTOSO', 'Divisi Pengembangan Perusahaan', 'I-7-1', 30, 50, 30, 60, 80, '2020-10-15 07:43:19');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `status` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL,
  `divisi` varchar(100) NOT NULL,
  `golongan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `status`, `nama`, `password`, `level`, `divisi`, `golongan`) VALUES
(661710359, 'PKWT', 'TITIES SEKAR ENDAH', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'karyawan', 'Divisi Pengembangan Perusahaan', 'I-10-1'),
(661900294, 'PKWT', 'SAFIRA RATNASARI', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'karyawan', 'Divisi Pengembangan Perusahaan', '-'),
(991000002, 'Tetap', 'ADIB ARDHIAN', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'admin', 'Divisi Pengembangan Perusahaan', 'IV-19-1'),
(991000006, 'Tetap', 'YAYA', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'karyawan', 'Divisi IT', 'I-6-1'),
(991000007, 'Tetap', 'BAGAS', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'admin', 'Divisi IT', 'I-6-1'),
(991000008, 'Tetap', 'APRILIA', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'karyawan', 'Divisi Pemasaran', 'I-6-1'),
(991200037, 'Tetap', 'MUNA WARDAH', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'admin', 'Divisi Pemasaran', 'I-6-2'),
(991200043, 'Tetap', 'BUDI SANTOSO', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'karyawan', 'Divisi Pengembangan Perusahaan', 'I-7-1'),
(991400015, 'Tetap', 'ROY PRADHANA', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'admin', 'Divisi Pengembangan Perusahaan', 'II-13-1'),
(991500008, 'Tetap', 'DELIMA WAHYUNINGTYAS', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'karyawan', 'Divisi Pengembangan Perusahaan', 'I-10-1'),
(991500019, 'Tetap', 'SITI NUR RODIYAH', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'karyawan', 'Divisi Pengembangan Perusahaan', 'II-11-1'),
(991600005, 'Tetap', 'DYKA RAHAYU MEYLA SARI', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'admin', 'Divisi Pengembangan Perusahaan', 'II-11-1'),
(991700042, 'Tetap', 'ERLINDA PERMATASARI', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'admin', 'Divisi Pengembangan Perusahaan', 'II-14-1'),
(991800003, 'Tetap', 'AHMAD AFIF MAULANA', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'karyawan', 'Divisi Pengembangan Perusahaan', 'I-10-1'),
(991900004, 'Tetap', 'FARINDA CESARIZKA RAHMITA', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'karyawan', 'Divisi Pengembangan Perusahaan', 'I-10-1'),
(991900024, 'Tetap', 'GANDI WIDHI ARTHA', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'karyawan', 'Divisi Pengembangan Perusahaan', 'I-10-1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tkaryawans`
--
ALTER TABLE `tkaryawans`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tkaryawans`
--
ALTER TABLE `tkaryawans`
  MODIFY `no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12331489;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
