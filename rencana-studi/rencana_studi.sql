-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 12, 2024 at 04:37 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rencana_studi`
--

-- --------------------------------------------------------

--
-- Table structure for table `bobot_nilai`
--

CREATE TABLE `bobot_nilai` (
  `id` int NOT NULL,
  `predikat` varchar(2) DEFAULT NULL,
  `bobot` float DEFAULT NULL
);

--
-- Dumping data for table `bobot_nilai`
--

INSERT INTO `bobot_nilai` (`id`, `predikat`, `bobot`) VALUES
(1, 'A', 4),
(2, 'B+', 3.5),
(3, 'B', 3),
(4, 'C+', 2.5),
(5, 'C', 2),
(6, 'D+', 1.5),
(7, 'D', 1),
(8, 'E+', 0.5),
(9, 'E', 0);

-- --------------------------------------------------------

--
-- Table structure for table `detail_rencana_studi`
--

CREATE TABLE `detail_rencana_studi` (
  `id` int NOT NULL,
  `matakuliah_id` int DEFAULT NULL,
  `rencana_studi_id` int DEFAULT NULL,
  `bobot_nilai_id` int DEFAULT NULL
);

--
-- Dumping data for table `detail_rencana_studi`
--

INSERT INTO `detail_rencana_studi` (`id`, `matakuliah_id`, `rencana_studi_id`, `bobot_nilai_id`) VALUES
(15, 7, 9, 1),
(16, 8, 9, 1),
(17, 12, 9, 2),
(18, 13, 9, 3),
(19, 14, 9, 7),
(20, 16, 9, 8),
(21, 17, 9, 9),
(22, 15, 9, 1),
(23, 9, 10, 2),
(24, 10, 10, 1),
(25, 11, 10, 1),
(26, 18, 10, 5),
(27, 19, 10, 9),
(28, 20, 10, 9),
(29, 21, 11, 1),
(30, 22, 11, 2),
(31, 23, 11, 1),
(32, 24, 11, 3),
(33, 25, 11, 1),
(34, 26, 11, 1),
(35, 28, 11, 3);

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `id` int NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `sks` int DEFAULT NULL,
  `deskripsi` text ,
  `prasyarat_id` int DEFAULT NULL,
  `tahun_ajaran` enum('ganjil','genap') NOT NULL,
  `jenis` enum('wajib','pilihan') DEFAULT NULL,
  `semester_id` int NOT NULL
);

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`id`, `nama`, `sks`, `deskripsi`, `prasyarat_id`, `tahun_ajaran`, `jenis`, `semester_id`) VALUES
(7, 'PENGANTAR TEKNOLOGI INFORMASI', 3, '', NULL, 'ganjil', 'wajib', 1),
(8, 'ALGORITMA DAN DASAR PEMROGRAMAN', 4, '', NULL, 'ganjil', 'wajib', 1),
(9, 'MATEMATIKA DISKRIT', 3, '', NULL, 'genap', 'wajib', 2),
(10, 'STRUKTUR DATA', 4, '', 8, 'genap', 'wajib', 2),
(11, 'DASAR PEMROGRAMAN WEB', 4, '', 7, 'genap', 'wajib', 2),
(12, 'KEWARGANEGARAAN', 2, '', NULL, 'ganjil', 'wajib', 1),
(13, 'BAHASA INDONEIA', 2, '', NULL, 'ganjil', 'wajib', 1),
(14, 'PENDIDIKAN AGAMA ISLAM', 2, '', NULL, 'ganjil', 'wajib', 1),
(15, 'PANCASILA', 2, '', NULL, 'ganjil', 'wajib', 1),
(16, 'BAHASA INGGRIS', 2, '', NULL, 'ganjil', 'wajib', 1),
(17, 'MATEMATIKA TEKNIK', 2, '', NULL, 'ganjil', 'wajib', 1),
(18, 'METODE STATISTIKA', 3, '', NULL, 'genap', 'wajib', 2),
(19, 'KOMPUTASI ALJABAR LINEAR', 3, '', NULL, 'genap', 'wajib', 2),
(20, 'ORGANISASI KPMPUTER DAN SISTEM OPERASI', 3, '', 7, 'genap', 'wajib', 2),
(21, 'PENGEMBANGAN APLIKASI WEB', 4, '', 11, 'ganjil', 'wajib', 3),
(22, 'BASIS DATA', 3, '', 10, 'ganjil', 'wajib', 3),
(23, 'JARINGAN KOMPUTER', 4, '', 7, 'ganjil', 'wajib', 3),
(24, 'TEORI KOMPUTASI', 3, '', 9, 'ganjil', 'wajib', 3),
(25, 'ETIKA PROFESIONAL', 2, '', 7, 'ganjil', 'pilihan', 3),
(26, 'SISTEM INFORMASI', 3, '', 7, 'ganjil', 'pilihan', 3),
(27, 'PEMROGRAMAN DESKTOP', 3, '', 10, 'ganjil', 'pilihan', 3),
(28, 'PEMROGRAMAN BERORIENTASI OBYEK', 3, '', 10, 'ganjil', 'pilihan', 3),
(29, 'REKAYASA MULTIMEDIA', 3, '', 7, 'ganjil', 'pilihan', 3);

-- --------------------------------------------------------

--
-- Table structure for table `rencana_studi`
--

CREATE TABLE `rencana_studi` (
  `id` int NOT NULL,
  `semester_id` int DEFAULT NULL,
  `total_sks` int DEFAULT NULL,
  `target_ip` float DEFAULT NULL,
  `deskripsi` text,
  `user_id` int NOT NULL
);

--
-- Dumping data for table `rencana_studi`
--

INSERT INTO `rencana_studi` (`id`, `semester_id`, `total_sks`, `target_ip`, `deskripsi`, `user_id`) VALUES
(9, 1, 19, 2.73684, '', 1),
(10, 2, 20, 2.425, '', 1),
(11, 3, 22, 3.65909, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `id` int NOT NULL,
  `kode_semester` char(1) DEFAULT NULL,
  `nama` varchar(10) DEFAULT NULL
);

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`id`, `kode_semester`, `nama`) VALUES
(1, '1', 'Semester 1'),
(2, '2', 'Semester 2'),
(3, '3', 'Semester 3');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `nim` varchar(12) DEFAULT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role` enum('1','2') NOT NULL
);

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nim`, `nama`, `username`, `password`, `role`) VALUES
(1, '220411100058', 'Sabil Ahmad Hidayat', 'sabil', '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8', '2'),
(2, NULL, 'Administrator', 'admin', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', '1'),
(3, '220411100037', 'Abdul Rahem Faqih', 'faqih', '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bobot_nilai`
--
ALTER TABLE `bobot_nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_rencana_studi`
--
ALTER TABLE `detail_rencana_studi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bobot_nilai_id` (`bobot_nilai_id`),
  ADD KEY `matakuliah_id` (`matakuliah_id`),
  ADD KEY `rencana_studi_id` (`rencana_studi_id`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prasyarat_id` (`prasyarat_id`),
  ADD KEY `semester_fk` (`semester_id`);

--
-- Indexes for table `rencana_studi`
--
ALTER TABLE `rencana_studi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `semester_id` (`semester_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bobot_nilai`
--
ALTER TABLE `bobot_nilai`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `detail_rencana_studi`
--
ALTER TABLE `detail_rencana_studi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `matakuliah`
--
ALTER TABLE `matakuliah`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `rencana_studi`
--
ALTER TABLE `rencana_studi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_rencana_studi`
--
ALTER TABLE `detail_rencana_studi`
  ADD CONSTRAINT `detail_rencana_studi_ibfk_1` FOREIGN KEY (`bobot_nilai_id`) REFERENCES `bobot_nilai` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_rencana_studi_ibfk_2` FOREIGN KEY (`matakuliah_id`) REFERENCES `matakuliah` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_rencana_studi_ibfk_3` FOREIGN KEY (`rencana_studi_id`) REFERENCES `rencana_studi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD CONSTRAINT `matakuliah_ibfk_1` FOREIGN KEY (`prasyarat_id`) REFERENCES `matakuliah` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `semester_fk` FOREIGN KEY (`semester_id`) REFERENCES `semester` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rencana_studi`
--
ALTER TABLE `rencana_studi`
  ADD CONSTRAINT `rencana_studi_ibfk_1` FOREIGN KEY (`semester_id`) REFERENCES `semester` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
