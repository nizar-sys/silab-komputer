-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.13-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for inventaris
CREATE DATABASE IF NOT EXISTS `inventaris` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `inventaris`;


-- Dumping structure for table inventaris.absensi
CREATE TABLE IF NOT EXISTS `absensi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nrp` varchar(50) DEFAULT NULL,
  `nama_praktikum` varchar(50) DEFAULT NULL,
  `periode` varchar(50) DEFAULT NULL,
  `kelas` varchar(50) DEFAULT NULL,
  `pertemuan` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=209 DEFAULT CHARSET=latin1;

-- Dumping data for table inventaris.absensi: 194 rows
/*!40000 ALTER TABLE `absensi` DISABLE KEYS */;
INSERT INTO `absensi` (`id`, `nrp`, `nama_praktikum`, `periode`, `kelas`, `pertemuan`) VALUES
	(2, '152015071', 'ORKOM', '1718', 'A', 1),
	(3, '152015057', 'ORKOM', '1718', 'A', 1),
	(4, '152015065', 'ORKOM', '1718', 'A', 1),
	(5, '152015049', 'ORKOM', '1718', 'A', 1),
	(6, '152015074', 'ORKOM', '1718', 'A', 1),
	(7, '152015059', 'ORKOM', '1718', 'A', 1),
	(8, '152015070', 'ORKOM', '1718', 'A', 1),
	(9, '152015046', 'ORKOM', '1718', 'A', 1),
	(10, '152015051', 'ORKOM', '1718', 'A', 1),
	(11, '152015075', 'ORKOM', '1718', 'A', 1),
	(12, '152015064', 'ORKOM', '1718', 'A', 1),
	(13, '152015042', 'ORKOM', '1718', 'A', 1),
	(14, '152015056', 'ORKOM', '1718', 'A', 1),
	(15, '152015043', 'ORKOM', '1718', 'A', 1),
	(16, '152015055', 'ORKOM', '1718', 'A', 1),
	(17, '152015066', 'ORKOM', '1718', 'A', 1),
	(18, '152015061', 'ORKOM', '1718', 'A', 1),
	(19, '152015039', 'ORKOM', '1718', 'A', 1),
	(20, '152015045', 'ORKOM', '1718', 'A', 1),
	(21, '152015044', 'ORKOM', '1718', 'A', 1),
	(22, '152015054', 'ORKOM', '1718', 'A', 1),
	(23, '152015014', 'ORKOM', '1718', 'A', 1),
	(24, '152015012', 'ORKOM', '1718', 'A', 1),
	(25, '152015036', 'ORKOM', '1718', 'A', 1),
	(26, '152015017', 'ORKOM', '1718', 'A', 1),
	(27, '152015033', 'ORKOM', '1718', 'A', 1),
	(28, '152015018', 'ORKOM', '1718', 'A', 1),
	(29, '152015007', 'ORKOM', '1718', 'A', 1),
	(30, '152015026', 'ORKOM', '1718', 'A', 1),
	(31, '152015021', 'ORKOM', '1718', 'A', 1),
	(32, '152015030', 'ORKOM', '1718', 'A', 1),
	(33, '152015016', 'ORKOM', '1718', 'A', 1),
	(34, '152015037', 'ORKOM', '1718', 'A', 1),
	(35, '152015003', 'ORKOM', '1718', 'A', 1),
	(36, '152015023', 'ORKOM', '1718', 'A', 1),
	(37, '152015001', 'ORKOM', '1718', 'A', 1),
	(38, '152015019', 'ORKOM', '1718', 'A', 1),
	(39, '152015025', 'ORKOM', '1718', 'A', 1),
	(40, '152015027', 'ORKOM', '1718', 'A', 1),
	(41, '152015022', 'ORKOM', '1718', 'A', 1),
	(42, '152015009', 'ORKOM', '1718', 'A', 1),
	(43, '152015002', 'ORKOM', '1718', 'A', 1),
	(44, '152015029', 'ORKOM', '1718', 'A', 1),
	(45, '152015005', 'ORKOM', '1718', 'A', 1),
	(46, '152015011', 'ORKOM', '1718', 'A', 1),
	(47, '152015028', 'ORKOM', '1718', 'A', 1),
	(48, '152015010', 'ORKOM', '1718', 'A', 1),
	(49, '152015013', 'ORKOM', '1718', 'A', 1),
	(50, '152015004', 'ORKOM', '1718', 'A', 1),
	(51, '152015031', 'ORKOM', '1718', 'A', 1),
	(52, '152015035', 'ORKOM', '1718', 'A', 1),
	(53, '152015063', 'ORKOM', '1718', 'A', 2),
	(54, '152015071', 'ORKOM', '1718', 'A', 2),
	(55, '152015057', 'ORKOM', '1718', 'A', 2),
	(56, '152015065', 'ORKOM', '1718', 'A', 2),
	(57, '152015049', 'ORKOM', '1718', 'A', 2),
	(58, '152015074', 'ORKOM', '1718', 'A', 2),
	(59, '152015059', 'ORKOM', '1718', 'A', 2),
	(60, '152015070', 'ORKOM', '1718', 'A', 2),
	(61, '152015046', 'ORKOM', '1718', 'A', 2),
	(62, '152015051', 'ORKOM', '1718', 'A', 2),
	(63, '152015075', 'ORKOM', '1718', 'A', 2),
	(64, '152015064', 'ORKOM', '1718', 'A', 2),
	(65, '152015042', 'ORKOM', '1718', 'A', 2),
	(66, '152015056', 'ORKOM', '1718', 'A', 2),
	(67, '152015043', 'ORKOM', '1718', 'A', 2),
	(68, '152015055', 'ORKOM', '1718', 'A', 2),
	(69, '152015066', 'ORKOM', '1718', 'A', 2),
	(70, '152015061', 'ORKOM', '1718', 'A', 2),
	(71, '152015039', 'ORKOM', '1718', 'A', 2),
	(72, '152015045', 'ORKOM', '1718', 'A', 2),
	(73, '152015044', 'ORKOM', '1718', 'A', 2),
	(74, '152015054', 'ORKOM', '1718', 'A', 2),
	(75, '152015014', 'ORKOM', '1718', 'A', 2),
	(76, '152015012', 'ORKOM', '1718', 'A', 2),
	(77, '152015036', 'ORKOM', '1718', 'A', 2),
	(78, '152015017', 'ORKOM', '1718', 'A', 2),
	(79, '152015033', 'ORKOM', '1718', 'A', 2),
	(80, '152015018', 'ORKOM', '1718', 'A', 2),
	(81, '152015007', 'ORKOM', '1718', 'A', 2),
	(82, '152015026', 'ORKOM', '1718', 'A', 2),
	(83, '152015021', 'ORKOM', '1718', 'A', 2),
	(84, '152015030', 'ORKOM', '1718', 'A', 2),
	(85, '152015016', 'ORKOM', '1718', 'A', 2),
	(86, '152015037', 'ORKOM', '1718', 'A', 2),
	(88, '152015023', 'ORKOM', '1718', 'A', 2),
	(89, '152015001', 'ORKOM', '1718', 'A', 2),
	(90, '152015019', 'ORKOM', '1718', 'A', 2),
	(91, '152015025', 'ORKOM', '1718', 'A', 2),
	(92, '152015027', 'ORKOM', '1718', 'A', 2),
	(93, '152015022', 'ORKOM', '1718', 'A', 2),
	(94, '152015009', 'ORKOM', '1718', 'A', 2),
	(95, '152015002', 'ORKOM', '1718', 'A', 2),
	(96, '152015029', 'ORKOM', '1718', 'A', 2),
	(97, '152015005', 'ORKOM', '1718', 'A', 2),
	(98, '152015011', 'ORKOM', '1718', 'A', 2),
	(99, '152015028', 'ORKOM', '1718', 'A', 2),
	(100, '152015010', 'ORKOM', '1718', 'A', 2),
	(101, '152015013', 'ORKOM', '1718', 'A', 2),
	(102, '152015004', 'ORKOM', '1718', 'A', 2),
	(103, '152015031', 'ORKOM', '1718', 'A', 2),
	(104, '152015035', 'ORKOM', '1718', 'A', 2),
	(105, '152015063', 'ORKOM', '1718', 'A', 3),
	(106, '152015071', 'ORKOM', '1718', 'A', 3),
	(107, '152015057', 'ORKOM', '1718', 'A', 3),
	(108, '152015065', 'ORKOM', '1718', 'A', 3),
	(109, '152015049', 'ORKOM', '1718', 'A', 3),
	(110, '152015074', 'ORKOM', '1718', 'A', 3),
	(111, '152015059', 'ORKOM', '1718', 'A', 3),
	(112, '152015070', 'ORKOM', '1718', 'A', 3),
	(113, '152015046', 'ORKOM', '1718', 'A', 3),
	(116, '152015064', 'ORKOM', '1718', 'A', 3),
	(117, '152015042', 'ORKOM', '1718', 'A', 3),
	(118, '152015056', 'ORKOM', '1718', 'A', 3),
	(119, '152015043', 'ORKOM', '1718', 'A', 3),
	(120, '152015055', 'ORKOM', '1718', 'A', 3),
	(121, '152015066', 'ORKOM', '1718', 'A', 3),
	(122, '152015061', 'ORKOM', '1718', 'A', 3),
	(123, '152015039', 'ORKOM', '1718', 'A', 3),
	(124, '152015045', 'ORKOM', '1718', 'A', 3),
	(125, '152015044', 'ORKOM', '1718', 'A', 3),
	(126, '152015054', 'ORKOM', '1718', 'A', 3),
	(127, '152015014', 'ORKOM', '1718', 'A', 3),
	(129, '152015036', 'ORKOM', '1718', 'A', 3),
	(130, '152015017', 'ORKOM', '1718', 'A', 3),
	(131, '152015033', 'ORKOM', '1718', 'A', 3),
	(134, '152015026', 'ORKOM', '1718', 'A', 3),
	(135, '152015021', 'ORKOM', '1718', 'A', 3),
	(136, '152015030', 'ORKOM', '1718', 'A', 3),
	(137, '152015016', 'ORKOM', '1718', 'A', 3),
	(138, '152015037', 'ORKOM', '1718', 'A', 3),
	(139, '152015003', 'ORKOM', '1718', 'A', 3),
	(140, '152015023', 'ORKOM', '1718', 'A', 3),
	(141, '152015001', 'ORKOM', '1718', 'A', 3),
	(142, '152015019', 'ORKOM', '1718', 'A', 3),
	(143, '152015025', 'ORKOM', '1718', 'A', 3),
	(144, '152015027', 'ORKOM', '1718', 'A', 3),
	(145, '152015022', 'ORKOM', '1718', 'A', 3),
	(146, '152015009', 'ORKOM', '1718', 'A', 3),
	(147, '152015002', 'ORKOM', '1718', 'A', 3),
	(148, '152015029', 'ORKOM', '1718', 'A', 3),
	(149, '152015005', 'ORKOM', '1718', 'A', 3),
	(150, '152015011', 'ORKOM', '1718', 'A', 3),
	(151, '152015028', 'ORKOM', '1718', 'A', 3),
	(153, '152015013', 'ORKOM', '1718', 'A', 3),
	(154, '152015004', 'ORKOM', '1718', 'A', 3),
	(155, '152015031', 'ORKOM', '1718', 'A', 3),
	(156, '152015035', 'ORKOM', '1718', 'A', 3),
	(157, '152015063', 'ORKOM', '1718', 'A', 4),
	(158, '152015071', 'ORKOM', '1718', 'A', 4),
	(159, '152015057', 'ORKOM', '1718', 'A', 4),
	(160, '152015065', 'ORKOM', '1718', 'A', 4),
	(161, '152015049', 'ORKOM', '1718', 'A', 4),
	(162, '152015074', 'ORKOM', '1718', 'A', 4),
	(163, '152015059', 'ORKOM', '1718', 'A', 4),
	(164, '152015070', 'ORKOM', '1718', 'A', 4),
	(165, '152015046', 'ORKOM', '1718', 'A', 4),
	(166, '152015051', 'ORKOM', '1718', 'A', 4),
	(167, '152015075', 'ORKOM', '1718', 'A', 4),
	(168, '152015064', 'ORKOM', '1718', 'A', 4),
	(169, '152015042', 'ORKOM', '1718', 'A', 4),
	(170, '152015056', 'ORKOM', '1718', 'A', 4),
	(171, '152015043', 'ORKOM', '1718', 'A', 4),
	(172, '152015055', 'ORKOM', '1718', 'A', 4),
	(174, '152015061', 'ORKOM', '1718', 'A', 4),
	(175, '152015039', 'ORKOM', '1718', 'A', 4),
	(176, '152015045', 'ORKOM', '1718', 'A', 4),
	(177, '152015044', 'ORKOM', '1718', 'A', 4),
	(178, '152015054', 'ORKOM', '1718', 'A', 4),
	(179, '152015014', 'ORKOM', '1718', 'A', 4),
	(180, '152015012', 'ORKOM', '1718', 'A', 4),
	(181, '152015036', 'ORKOM', '1718', 'A', 4),
	(182, '152015017', 'ORKOM', '1718', 'A', 4),
	(183, '152015033', 'ORKOM', '1718', 'A', 4),
	(184, '152015018', 'ORKOM', '1718', 'A', 4),
	(186, '152015026', 'ORKOM', '1718', 'A', 4),
	(187, '152015021', 'ORKOM', '1718', 'A', 4),
	(189, '152015016', 'ORKOM', '1718', 'A', 4),
	(190, '152015037', 'ORKOM', '1718', 'A', 4),
	(191, '152015003', 'ORKOM', '1718', 'A', 4),
	(193, '152015001', 'ORKOM', '1718', 'A', 4),
	(194, '152015019', 'ORKOM', '1718', 'A', 4),
	(195, '152015025', 'ORKOM', '1718', 'A', 4),
	(196, '152015027', 'ORKOM', '1718', 'A', 4),
	(197, '152015022', 'ORKOM', '1718', 'A', 4),
	(198, '152015009', 'ORKOM', '1718', 'A', 4),
	(199, '152015002', 'ORKOM', '1718', 'A', 4),
	(200, '152015029', 'ORKOM', '1718', 'A', 4),
	(203, '152015028', 'ORKOM', '1718', 'A', 4),
	(204, '152015010', 'ORKOM', '1718', 'A', 4),
	(205, '152015013', 'ORKOM', '1718', 'A', 4),
	(206, '152015004', 'ORKOM', '1718', 'A', 4),
	(207, '152015031', 'ORKOM', '1718', 'A', 4),
	(208, '152015035', 'ORKOM', '1718', 'A', 4);
/*!40000 ALTER TABLE `absensi` ENABLE KEYS */;


-- Dumping structure for table inventaris.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id` varchar(50) NOT NULL,
  `pass` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table inventaris.admin: ~0 rows (approximately)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`id`, `pass`) VALUES
	('240101', '101042');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;


-- Dumping structure for table inventaris.asisten
CREATE TABLE IF NOT EXISTS `asisten` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nrp` int(11) NOT NULL,
  `praktikum` varchar(50) DEFAULT NULL,
  `periode` varchar(50) DEFAULT NULL,
  `kelas` varchar(50) DEFAULT NULL,
  `approve` enum('Y','R') DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_asisten_mahasiswa` (`nrp`),
  CONSTRAINT `FK_asisten_mahasiswa` FOREIGN KEY (`nrp`) REFERENCES `mahasiswa` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table inventaris.asisten: ~1 rows (approximately)
/*!40000 ALTER TABLE `asisten` DISABLE KEYS */;
INSERT INTO `asisten` (`id`, `nrp`, `praktikum`, `periode`, `kelas`, `approve`) VALUES
	(4, 152013002, 'PEMDAS', '2016/2017', 'A', 'Y');
/*!40000 ALTER TABLE `asisten` ENABLE KEYS */;


-- Dumping structure for table inventaris.barang
CREATE TABLE IF NOT EXISTS `barang` (
  `serial_num` varchar(20) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `status` enum('OK','RUSAK') DEFAULT NULL,
  `developer` varchar(50) DEFAULT NULL,
  `lokasi` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `model` varchar(50) DEFAULT NULL,
  `last_update` datetime DEFAULT NULL,
  `no_pelabelan` int(11) DEFAULT NULL,
  `ketersediaan` enum('TERSEDIA','TIDAK TERSEDIA') DEFAULT NULL,
  PRIMARY KEY (`serial_num`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table inventaris.barang: ~368 rows (approximately)
/*!40000 ALTER TABLE `barang` DISABLE KEYS */;
INSERT INTO `barang` (`serial_num`, `nama`, `status`, `developer`, `lokasi`, `type`, `model`, `last_update`, `no_pelabelan`, `ketersediaan`) VALUES
	('LAI-A01', 'Adaptor', 'OK', 'OUTSTANDING ELECTRONICS', 'Lab Kecerdasan Buatan (AI)', NULL, 'AD-071AB', '2016-08-23 08:47:38', 91, 'TERSEDIA'),
	('LAI-A02', 'Adaptor', 'OK', 'Global Yeou Diann', 'Lab Kecerdasan Buatan (AI)', NULL, 'AM-0751000V', '2016-08-23 08:47:40', 92, 'TERSEDIA'),
	('LAI-A03', 'Adaptor', 'OK', 'Global Yeou Diann', 'Lab Kecerdasan Buatan (AI)', NULL, 'AM-0751000V', '2016-08-23 08:47:41', 93, 'TERSEDIA'),
	('LAI-A04', 'Adaptor', 'OK', 'Global Yeou Diann', 'Lab Kecerdasan Buatan (AI)', NULL, 'AM-0751000V', '2016-08-23 08:47:43', 94, 'TERSEDIA'),
	('LAI-A05', 'Adaptor', 'OK', 'Wiehai Daan', 'Lab Kecerdasan Buatan (AI)', NULL, 'SR776', '2016-08-23 08:47:44', 95, 'TERSEDIA'),
	('LAI-A06', 'Adaptor', 'OK', NULL, 'Lab Kecerdasan Buatan (AI)', NULL, NULL, '2016-08-23 08:47:45', 96, 'TERSEDIA'),
	('LAI-A07', 'Adaptor', 'OK', NULL, 'Lab Kecerdasan Buatan (AI)', NULL, NULL, '2016-08-23 08:47:48', 97, 'TERSEDIA'),
	('LAI-A08', 'Adaptor', 'OK', NULL, 'Lab Kecerdasan Buatan (AI)', NULL, NULL, '2016-08-23 08:47:50', 98, 'TERSEDIA'),
	('LAI-A09', 'Adaptor', 'OK', NULL, 'Lab Kecerdasan Buatan (AI)', NULL, NULL, '2016-08-23 08:47:52', 99, 'TERSEDIA'),
	('LAI-A10', 'Adaptor', 'OK', NULL, 'Lab Kecerdasan Buatan (AI)', NULL, NULL, '2016-08-23 08:47:53', 100, 'TERSEDIA'),
	('LAI-A11', 'Adaptor', 'OK', NULL, 'Lab Kecerdasan Buatan (AI)', NULL, NULL, '2016-08-23 08:47:54', 101, 'TERSEDIA'),
	('LAI-A12', 'Adaptor', 'OK', NULL, 'Lab Kecerdasan Buatan (AI)', NULL, NULL, '2016-08-23 08:47:55', 102, 'TERSEDIA'),
	('LAI-A13', 'Adaptor', 'OK', NULL, 'Lab Kecerdasan Buatan (AI)', NULL, NULL, '2016-08-23 08:47:57', 103, 'TERSEDIA'),
	('LAI-A14', 'Adaptor', 'OK', NULL, 'Lab Kecerdasan Buatan (AI)', NULL, NULL, '2016-08-23 08:47:59', 104, 'TERSEDIA'),
	('LAI-A15', 'Adaptor', 'RUSAK', 'Wiehai Daan', 'Lab Kecerdasan Buatan (AI)', NULL, 'SR776', '2016-08-23 08:48:01', 110, 'TERSEDIA'),
	('LAI-A16', 'Adaptor', 'RUSAK', NULL, 'Lab Kecerdasan Buatan (AI)', NULL, NULL, '2016-08-23 08:48:03', 111, 'TERSEDIA'),
	('LAI-BPI01', 'Banana Pi', 'OK', 'LEMAKER', 'Lab Kecerdasan Buatan (AI)', NULL, NULL, '2016-08-23 08:48:04', 60, 'TERSEDIA'),
	('LAI-CP01', 'USB Printer', 'OK', NULL, 'Lab Kecerdasan Buatan (AI)', NULL, NULL, '2016-08-23 08:49:33', 66, 'TERSEDIA'),
	('LAI-CP02', 'USB Printer', 'OK', NULL, 'Lab Kecerdasan Buatan (AI)', NULL, NULL, '2016-08-23 08:49:34', 67, 'TERSEDIA'),
	('LAI-CP03', 'USB Printer', 'OK', NULL, 'Lab Kecerdasan Buatan (AI)', NULL, NULL, '2016-08-23 08:49:35', 68, 'TERSEDIA'),
	('LAI-CP04', 'USB Printer', 'OK', NULL, 'Lab Kecerdasan Buatan (AI)', NULL, NULL, '2016-08-23 08:49:35', 69, 'TERSEDIA'),
	('LAI-CP05', 'USB Printer', 'OK', NULL, 'Lab Kecerdasan Buatan (AI)', NULL, NULL, '2016-08-23 08:49:36', 70, 'TERSEDIA'),
	('LAI-CP06', 'USB Printer', 'OK', NULL, 'Lab Kecerdasan Buatan (AI)', NULL, NULL, '2016-08-23 08:49:37', 71, 'TERSEDIA'),
	('LAI-CP07', 'USB Printer', 'OK', NULL, 'Lab Kecerdasan Buatan (AI)', NULL, NULL, '2016-08-23 08:49:38', 72, 'TERSEDIA'),
	('LAI-CP08', 'USB Printer', 'OK', NULL, 'Lab Kecerdasan Buatan (AI)', NULL, NULL, '2016-08-23 08:46:38', 73, 'TERSEDIA'),
	('LAI-CP09', 'USB Printer', 'OK', NULL, 'Lab Kecerdasan Buatan (AI)', NULL, NULL, '2016-08-23 08:49:40', 74, 'TERSEDIA'),
	('LAI-CP10', 'USB Printer', 'OK', NULL, 'Lab Kecerdasan Buatan (AI)', NULL, NULL, '2016-08-23 08:49:41', 75, 'TERSEDIA'),
	('LAI-CP11', 'USB Printer', 'OK', NULL, 'Lab Kecerdasan Buatan (AI)', NULL, NULL, '2016-08-23 08:49:42', 76, 'TERSEDIA'),
	('LAI-CP12', 'USB Printer', 'OK', NULL, 'Lab Kecerdasan Buatan (AI)', NULL, NULL, '2016-08-23 08:49:43', 77, 'TERSEDIA'),
	('LAI-CP13', 'USB Printer', 'OK', NULL, 'Lab Kecerdasan Buatan (AI)', NULL, NULL, '2016-08-23 08:49:44', 78, 'TERSEDIA'),
	('LAI-CP14', 'USB Printer', 'OK', NULL, 'Lab Kecerdasan Buatan (AI)', NULL, NULL, '2016-08-23 08:49:45', 79, 'TERSEDIA'),
	('LAI-CP15', 'USB Printer', 'OK', NULL, 'Lab Kecerdasan Buatan (AI)', NULL, NULL, '2016-08-23 08:49:46', 80, 'TERSEDIA'),
	('LAI-CP16', 'USB Printer', 'OK', NULL, 'Lab Kecerdasan Buatan (AI)', NULL, NULL, '2016-08-23 08:49:47', 81, 'TERSEDIA'),
	('LAI-CP17', 'USB Printer', 'OK', NULL, 'Lab Kecerdasan Buatan (AI)', NULL, NULL, '2016-08-23 08:49:48', 82, 'TERSEDIA'),
	('LAI-CP18', 'USB Printer', 'OK', NULL, 'Lab Kecerdasan Buatan (AI)', NULL, NULL, '2016-08-23 08:49:49', 83, 'TERSEDIA'),
	('LAI-CP19', 'USB Printer', 'OK', NULL, 'Lab Kecerdasan Buatan (AI)', NULL, NULL, '2016-08-23 08:49:50', 84, 'TERSEDIA'),
	('LAI-CP20', 'USB Printer', 'OK', NULL, 'Lab Kecerdasan Buatan (AI)', NULL, NULL, '2016-08-23 08:49:51', 85, 'TERSEDIA'),
	('LAI-CP21', 'USB Printer', 'OK', NULL, 'Lab Kecerdasan Buatan (AI)', NULL, NULL, '2016-08-23 08:49:52', 86, 'TERSEDIA'),
	('LAI-CP22', 'USB Printer', 'OK', NULL, 'Lab Kecerdasan Buatan (AI)', NULL, NULL, '2016-08-23 08:49:53', 87, 'TERSEDIA'),
	('LAI-CP23', 'USB Printer', 'RUSAK', NULL, 'Lab Kecerdasan Buatan (AI)', NULL, NULL, '2016-08-23 08:49:54', 88, 'TERSEDIA'),
	('LAI-CP24', 'USB Printer', 'RUSAK', NULL, 'Lab Kecerdasan Buatan (AI)', NULL, NULL, '2016-08-23 08:49:55', 89, 'TERSEDIA'),
	('LAI-CP25', 'USB Printer', 'RUSAK', NULL, 'Lab Kecerdasan Buatan (AI)', NULL, NULL, '2016-08-23 08:49:56', 90, 'TERSEDIA'),
	('LAI-CV01', 'Cable VGA', 'OK', 'NETLINE', 'Lab Kecerdasan Buatan (AI)', '3 M', NULL, '2016-08-23 08:48:05', 61, 'TERSEDIA'),
	('LAI-HS01', 'Converter HDMI to Serial', 'OK', NULL, 'Lab Kecerdasan Buatan (AI)', NULL, NULL, '2016-08-23 08:48:05', 36, 'TERSEDIA'),
	('LAI-HS02', 'Converter HDMI to Serial', 'OK', NULL, 'Lab Kecerdasan Buatan (AI)', NULL, NULL, '2016-08-23 08:48:06', 37, 'TERSEDIA'),
	('LAI-HS03', 'Converter HDMI to Serial', 'OK', NULL, 'Lab Kecerdasan Buatan (AI)', NULL, NULL, '2016-08-23 08:48:07', 38, 'TERSEDIA'),
	('LAI-HS04', 'Converter HDMI to Serial', 'OK', NULL, 'Lab Kecerdasan Buatan (AI)', NULL, NULL, '2016-08-23 08:48:08', 39, 'TERSEDIA'),
	('LAI-HS05', 'Converter HDMI to Serial', 'OK', NULL, 'Lab Kecerdasan Buatan (AI)', NULL, NULL, '2016-08-23 08:48:09', 40, 'TERSEDIA'),
	('LAI-HS06', 'Converter HDMI to Serial', 'OK', NULL, 'Lab Kecerdasan Buatan (AI)', NULL, NULL, '2016-08-23 08:48:10', 41, 'TERSEDIA'),
	('LAI-HS07', 'Converter HDMI to Serial', 'OK', NULL, 'Lab Kecerdasan Buatan (AI)', NULL, NULL, '2016-08-23 08:48:10', 42, 'TERSEDIA'),
	('LAI-HS08', 'Converter HDMI to Serial', 'OK', NULL, 'Lab Kecerdasan Buatan (AI)', NULL, NULL, '2016-08-23 08:48:11', 62, 'TERSEDIA'),
	('LAI-HS09', 'Converter HDMI to Serial', 'OK', NULL, 'Lab Kecerdasan Buatan (AI)', NULL, NULL, '2016-08-23 08:48:12', 63, 'TERSEDIA'),
	('LAI-KL01', 'Kit LCD', 'OK', NULL, 'Lab Kecerdasan Buatan (AI)', NULL, 'Rel.3L-C1', '2016-08-23 08:48:13', 50, 'TERSEDIA'),
	('LAI-KL02', 'Kit LCD', 'OK', NULL, 'Lab Kecerdasan Buatan (AI)', NULL, 'Rel.3L-C1', '2016-08-23 08:48:14', 51, 'TERSEDIA'),
	('LAI-KL03', 'Kit LCD', 'OK', NULL, 'Lab Kecerdasan Buatan (AI)', NULL, 'Rel.3L-C1', '2016-08-23 08:48:17', 52, 'TERSEDIA'),
	('LAI-KL04', 'Kit LCD', 'OK', NULL, 'Lab Kecerdasan Buatan (AI)', NULL, 'Rel.3L-C1', '2016-08-23 08:48:19', 53, 'TERSEDIA'),
	('LAI-KL05', 'Kit LCD', 'OK', NULL, 'Lab Kecerdasan Buatan (AI)', NULL, 'Rel.3L-C1', '2016-08-23 08:48:23', 54, 'TERSEDIA'),
	('LAI-KL06', 'Kit LCD', 'OK', NULL, 'Lab Kecerdasan Buatan (AI)', NULL, 'Rel.3L-C1', '2016-08-23 08:48:24', 55, 'TERSEDIA'),
	('LAI-KL07', 'Kit LCD', 'OK', NULL, 'Lab Kecerdasan Buatan (AI)', NULL, 'Rel.3L-C1', '2016-08-23 08:48:25', 56, 'TERSEDIA'),
	('LAI-KL08', 'Kit LCD', 'OK', NULL, 'Lab Kecerdasan Buatan (AI)', NULL, 'Rel.3L-C1', '2016-08-23 08:48:28', 57, 'TERSEDIA'),
	('LAI-KL09', 'Kit LCD', 'OK', NULL, 'Lab Kecerdasan Buatan (AI)', NULL, 'Rel.3L-C1', '2016-08-23 08:48:29', 58, 'TERSEDIA'),
	('LAI-LCD01', 'RPi LCD', 'OK', 'WaveShare', 'Lab Kecerdasan Buatan (AI)', '3.5 inch', 'V3', '2016-08-23 08:49:01', 59, 'TERSEDIA'),
	('LAI-LT01', 'LAN Tester', 'OK', NULL, 'Lab Kecerdasan Buatan (AI)', NULL, NULL, '2016-08-23 08:48:31', 64, 'TERSEDIA'),
	('LAI-MS01', 'Micro SD', 'OK', 'SANDISK', 'Lab Kecerdasan Buatan (AI)', '8 GB', NULL, '2016-08-23 08:48:37', 43, 'TERSEDIA'),
	('LAI-MS02', 'Micro SD', 'OK', 'SANDISK', 'Lab Kecerdasan Buatan (AI)', '8 GB', NULL, '2016-08-23 08:48:38', 44, 'TERSEDIA'),
	('LAI-MS03', 'Micro SD', 'OK', 'SANDISK', 'Lab Kecerdasan Buatan (AI)', '8 GB', NULL, '2016-08-23 08:48:39', 45, 'TERSEDIA'),
	('LAI-MS04', 'Micro SD', 'OK', 'SANDISK', 'Lab Kecerdasan Buatan (AI)', '8 GB', NULL, '2016-08-23 08:48:40', 46, 'TERSEDIA'),
	('LAI-MS05', 'Micro SD', 'OK', 'SANDISK', 'Lab Kecerdasan Buatan (AI)', '8 GB', NULL, '2016-08-23 08:48:41', 47, 'TERSEDIA'),
	('LAI-MS06', 'Micro SD', 'OK', 'SANDISK', 'Lab Kecerdasan Buatan (AI)', '8 GB', NULL, '2016-08-23 08:48:42', 48, 'TERSEDIA'),
	('LAI-MS07', 'Micro SD', 'OK', 'SANDISK', 'Lab Kecerdasan Buatan (AI)', '8 GB', NULL, '2016-08-23 08:48:43', 49, 'TERSEDIA'),
	('LAI-MS08', 'Micro SD', 'OK', 'SANDISK', 'Lab Kecerdasan Buatan (AI)', '8 GB', NULL, '2016-08-23 08:48:44', 1, 'TERSEDIA'),
	('LAI-MS09', 'Micro SD', 'OK', 'SANDISK', 'Lab Kecerdasan Buatan (AI)', '8 GB', NULL, '2016-08-23 08:48:45', 2, 'TERSEDIA'),
	('LAI-R01', 'USB Converter 232', 'OK', NULL, 'Lab Kecerdasan Buatan (AI)', NULL, 'U232-P9', '2016-08-23 08:49:28', 105, 'TERSEDIA'),
	('LAI-R02', 'USB Converter 232', 'OK', NULL, 'Lab Kecerdasan Buatan (AI)', NULL, 'U232-P9', '2016-08-23 08:49:29', 106, 'TERSEDIA'),
	('LAI-R03', 'USB Converter 232', 'OK', NULL, 'Lab Kecerdasan Buatan (AI)', NULL, 'U232-P9', '2016-08-23 08:49:30', 107, 'TERSEDIA'),
	('LAI-R04', 'USB Converter 232', 'OK', NULL, 'Lab Kecerdasan Buatan (AI)', NULL, 'U232-P9', '2016-08-23 08:49:31', 108, 'TERSEDIA'),
	('LAI-R05', 'USB Converter 232', 'OK', NULL, 'Lab Kecerdasan Buatan (AI)', NULL, 'U232-P9', '2016-08-23 08:49:32', 109, 'TERSEDIA'),
	('LAI-RC01', 'Robot I-SPY MINI', 'OK', 'HappyCow', 'Lab Kecerdasan Buatan (AI)', NULL, NULL, '2016-08-23 08:48:58', 28, 'TERSEDIA'),
	('LAI-RP01', 'Raspberry Pi', 'OK', 'Raspberry', 'Lab Kecerdasan Buatan (AI)', NULL, 'B+ V1.2', '2016-08-23 08:48:48', 6, 'TERSEDIA'),
	('LAI-RP02', 'Raspberry Pi', 'OK', 'Raspberry', 'Lab Kecerdasan Buatan (AI)', NULL, 'B+ V1.2', '2016-08-23 08:48:47', 5, 'TERSEDIA'),
	('LAI-RP03', 'Raspberry Pi', 'OK', 'Raspberry', 'Lab Kecerdasan Buatan (AI)', NULL, NULL, '2016-08-23 08:48:49', 7, 'TERSEDIA'),
	('LAI-RP201', 'Raspberry Pi 2', 'OK', 'Raspberry', 'Lab Kecerdasan Buatan (AI)', NULL, 'B V.1.1', '2016-08-23 08:48:50', 29, 'TERSEDIA'),
	('LAI-RP202', 'Raspberry Pi 2', 'OK', 'Raspberry', 'Lab Kecerdasan Buatan (AI)', NULL, 'B V.1.1', '2016-08-23 08:48:51', 30, 'TERSEDIA'),
	('LAI-RP203', 'Raspberry Pi 2', 'OK', 'Raspberry', 'Lab Kecerdasan Buatan (AI)', NULL, 'B V.1.1', '2016-08-23 08:48:52', 31, 'TERSEDIA'),
	('LAI-RP204', 'Raspberry Pi 2', 'OK', 'Raspberry', 'Lab Kecerdasan Buatan (AI)', NULL, 'B V.1.1', '2016-08-23 08:48:53', 32, 'TERSEDIA'),
	('LAI-RP205', 'Raspberry Pi 2', 'OK', 'Raspberry', 'Lab Kecerdasan Buatan (AI)', NULL, 'B V.1.1', '2016-08-23 08:48:54', 33, 'TERSEDIA'),
	('LAI-RP206', 'Raspberry Pi 2', 'OK', 'Raspberry', 'Lab Kecerdasan Buatan (AI)', NULL, 'B V.1.1', '2016-08-23 08:48:55', 34, 'TERSEDIA'),
	('LAI-RP207', 'Raspberry Pi 2', 'OK', 'Raspberry', 'Lab Kecerdasan Buatan (AI)', NULL, 'B V.1.1', '2016-08-23 08:48:56', 35, 'TERSEDIA'),
	('LAI-RP208', 'Raspberry Pi 2', 'OK', 'Raspberry', 'Lab Kecerdasan Buatan (AI)', NULL, 'B V.1.1', '2016-08-23 08:48:57', 65, 'TERSEDIA'),
	('LAI-SDHC01', 'Memory SDHC', 'OK', 'V-GEN', 'Lab Kecerdasan Buatan (AI)', '8 GB', NULL, '2016-08-23 08:48:34', 3, 'TERSEDIA'),
	('LAI-SDHC02', 'Memory SDHC', 'OK', 'TRANSCEND', 'Lab Kecerdasan Buatan (AI)', '16 GB', NULL, '2016-08-23 08:48:36', 4, 'TERSEDIA'),
	('LAI-U01', 'Uploader', 'OK', 'Creative Vision', 'Lab Kecerdasan Buatan (AI)', NULL, NULL, '2016-08-23 08:49:02', 8, 'TERSEDIA'),
	('LAI-U02', 'Uploader', 'OK', 'Creative Vision', 'Lab Kecerdasan Buatan (AI)', NULL, NULL, '2016-08-23 08:49:04', 9, 'TERSEDIA'),
	('LAI-U03', 'Uploader', 'OK', 'Creative Vision', 'Lab Kecerdasan Buatan (AI)', NULL, NULL, '2016-08-23 08:49:06', 10, 'TERSEDIA'),
	('LAI-U04', 'Uploader', 'OK', 'Creative Vision', 'Lab Kecerdasan Buatan (AI)', NULL, NULL, '2016-08-23 08:49:07', 11, 'TERSEDIA'),
	('LAI-U05', 'Uploader', 'OK', 'Creative Vision', 'Lab Kecerdasan Buatan (AI)', NULL, NULL, '2016-08-23 08:49:08', 12, 'TERSEDIA'),
	('LAI-U06', 'Uploader', 'RUSAK', 'Creative Vision', 'Lab Kecerdasan Buatan (AI)', NULL, NULL, '2016-08-23 08:49:09', 13, 'TERSEDIA'),
	('LAI-U07', 'Uploader', 'OK', 'Creative Vision', 'Lab Kecerdasan Buatan (AI)', NULL, NULL, '2016-08-23 08:49:11', 14, 'TERSEDIA'),
	('LAI-U08', 'Uploader', 'OK', 'Creative Vision', 'Lab Kecerdasan Buatan (AI)', NULL, NULL, '2016-08-23 08:49:14', 15, 'TERSEDIA'),
	('LAI-U09', 'Uploader', 'OK', 'Creative Vision', 'Lab Kecerdasan Buatan (AI)', NULL, NULL, '2016-08-23 08:49:15', 16, 'TERSEDIA'),
	('LAI-U10', 'Uploader', 'OK', 'Creative Vision', 'Lab Kecerdasan Buatan (AI)', NULL, NULL, '2016-08-23 08:49:16', 17, 'TERSEDIA'),
	('LAI-U11', 'Uploader', 'OK', 'AVR', 'Lab Kecerdasan Buatan (AI)', NULL, 'V.1.E', '2016-08-23 08:49:17', 18, 'TERSEDIA'),
	('LAI-U12', 'Uploader', 'OK', 'AVR', 'Lab Kecerdasan Buatan (AI)', NULL, 'V.1.E', '2016-08-23 08:49:19', 19, 'TERSEDIA'),
	('LAI-U13', 'Uploader', 'OK', 'AVR', 'Lab Kecerdasan Buatan (AI)', NULL, 'Rel.1.a2', '2016-08-23 08:49:20', 20, 'TERSEDIA'),
	('LAI-U14', 'Uploader', 'OK', 'AVR', 'Lab Kecerdasan Buatan (AI)', NULL, 'Rel.1.a2', '2016-08-23 08:49:21', 21, 'TERSEDIA'),
	('LAI-U15', 'Uploader', 'OK', 'AVR', 'Lab Kecerdasan Buatan (AI)', NULL, 'Rel.1.a2', '2016-08-23 08:49:22', 22, 'TERSEDIA'),
	('LAI-U16', 'Uploader', 'OK', 'AVR', 'Lab Kecerdasan Buatan (AI)', NULL, 'Rel.1.a2', '2016-08-23 08:49:23', 23, 'TERSEDIA'),
	('LAI-U17', 'Uploader', 'OK', 'Pentago', 'Lab Kecerdasan Buatan (AI)', NULL, 'V.1.D', '2016-08-23 08:49:23', 24, 'TERSEDIA'),
	('LAI-U18', 'Uploader', 'OK', 'Pentago', 'Lab Kecerdasan Buatan (AI)', NULL, 'V.1.D', '2016-08-23 08:49:24', 25, 'TERSEDIA'),
	('LAI-U19', 'Uploader', 'OK', 'AVR', 'Lab Kecerdasan Buatan (AI)', NULL, 'Rel.1.a', '2016-08-23 08:49:26', 26, 'TERSEDIA'),
	('LAI-U20', 'Uploader', 'OK', 'AVR', 'Lab Kecerdasan Buatan (AI)', NULL, 'Rel.1.a', '2016-08-23 08:49:27', 27, 'TERSEDIA'),
	('LBD-A01', 'Adaptor', 'OK', NULL, 'Lab Basis Data', NULL, 'ADC-2205B', '2016-08-23 09:45:51', 12, 'TERSEDIA'),
	('LBD-A02', 'Adaptor', 'OK', NULL, 'Lab Basis Data', NULL, 'ADC-2205B', '2016-08-23 09:45:52', 13, 'TERSEDIA'),
	('LBD-A03', 'Adaptor', 'OK', NULL, 'Lab Basis Data', NULL, 'ADC-2205B', '2016-08-23 09:45:53', 14, 'TERSEDIA'),
	('LBD-A04', 'Adaptor', 'OK', NULL, 'Lab Basis Data', NULL, 'ADC-2205B', '2016-08-23 09:45:54', 15, 'TERSEDIA'),
	('LBD-A05', 'Adaptor', 'OK', NULL, 'Lab Basis Data', NULL, 'ADC-2205B', '2016-08-23 09:45:55', 16, 'TERSEDIA'),
	('LBD-A06', 'Adaptor', 'OK', NULL, 'Lab Basis Data', NULL, 'ADC-2205B', '2016-08-23 09:45:57', 17, 'TERSEDIA'),
	('LBD-A07', 'Adaptor', 'OK', NULL, 'Lab Basis Data', NULL, 'ADC-2205B', '2016-08-23 09:45:59', 18, 'TERSEDIA'),
	('LBD-A08', 'Adaptor', 'OK', NULL, 'Lab Basis Data', NULL, 'AM-0751000v', '2016-08-23 09:46:00', 19, 'TERSEDIA'),
	('LBD-A09', 'Adaptor', 'OK', NULL, 'Lab Basis Data', NULL, 'AM-0751000v', '2016-08-23 09:46:01', 20, 'TERSEDIA'),
	('LBD-A10', 'Adaptor', 'OK', NULL, 'Lab Basis Data', NULL, NULL, '2016-08-23 09:46:02', 21, 'TERSEDIA'),
	('LBD-A11', 'Adaptor', 'OK', NULL, 'Lab Basis Data', NULL, NULL, '2016-08-23 09:46:03', 22, 'TERSEDIA'),
	('LBD-A12', 'Adaptor', 'OK', NULL, 'Lab Basis Data', NULL, 'MKD-751000GS', '2016-08-23 09:46:05', 23, 'TERSEDIA'),
	('LBD-A13', 'Adaptor', 'OK', NULL, 'Lab Basis Data', NULL, 'MKD-751000GS', '2016-08-23 09:46:06', 24, 'TERSEDIA'),
	('LBD-A14', 'Adaptor', 'OK', NULL, 'Lab Basis Data', NULL, 'AM-1201000v', '2016-08-23 09:46:07', 25, 'TERSEDIA'),
	('LBD-A15', 'Adaptor', 'OK', NULL, 'Lab Basis Data', NULL, 'MU12-S120100-C5', '2016-08-23 09:46:08', 26, 'TERSEDIA'),
	('LBD-A16', 'Adaptor', 'RUSAK', NULL, 'Lab Basis Data', NULL, 'ADC-2205B', '2016-08-23 09:46:09', 27, 'TERSEDIA'),
	('LBD-CA01', 'Charger Adaptor Usb', 'OK', 'SAMSUNG', 'Lab Basis Data', NULL, NULL, '2016-08-23 09:46:10', 4, 'TERSEDIA'),
	('LBD-F01', 'Fingerprint Module', 'OK', NULL, 'Lab Basis Data', NULL, NULL, '2016-08-23 09:46:11', 7, 'TERSEDIA'),
	('LBD-HS01', 'Converter HDMI to Serial', 'OK', NULL, 'Lab Basis Data', NULL, NULL, '2016-08-23 09:46:10', 11, 'TERSEDIA'),
	('LBD-MS01', 'Micro SD', 'OK', 'SAMSUNG', 'Lab Basis Data', '8 GB', NULL, '2016-08-23 09:46:12', 1, 'TERSEDIA'),
	('LBD-RP01', 'Raspberry Pi', 'OK', 'Raspberry', 'Lab Basis Data', NULL, NULL, '2016-08-23 09:46:13', 2, 'TERSEDIA'),
	('LBD-RP02', 'Raspberry Pi', 'OK', 'Raspberry', 'Lab Basis Data', NULL, NULL, '2016-08-23 09:46:14', 3, 'TERSEDIA'),
	('LBD-RP201', 'Raspberry Pi 2', 'OK', 'Raspberry', 'Lab Basis Data', NULL, 'B V.1.1', '2016-08-23 09:46:15', 5, 'TERSEDIA'),
	('LBD-RP202', 'Raspberry Pi 2', 'OK', 'Raspberry', 'Lab Basis Data', NULL, 'B V.1.1', '2016-08-23 09:46:16', 6, 'TERSEDIA'),
	('LBD-RPC01', 'Raspberry Pi Camera', 'OK', 'Raspberry', 'Lab Basis Data', NULL, '1.3', '2016-08-23 09:46:18', 10, 'TERSEDIA'),
	('LBD-UR01', 'USB Receiver', 'OK', NULL, 'Lab Basis Data', 'USB', '802.11n', '2016-08-23 09:45:48', 8, 'TERSEDIA'),
	('LBD-UR02', 'USB Receiver', 'OK', NULL, 'Lab Basis Data', 'USB', '802.11n', '2016-08-23 09:45:45', 9, 'TERSEDIA'),
	('LD-A01', 'Adaptor', 'OK', 'MultiTech', 'Lab Dasar Komputer', NULL, 'ST-9600', '2016-04-20 08:29:00', 217, 'TERSEDIA'),
	('LD-A02', 'Adaptor', 'OK', 'MultiTech', 'Lab Dasar Komputer ', NULL, 'ST-9600', '2016-04-20 08:30:24', 218, 'TERSEDIA'),
	('LD-ATM01', 'ATMEGA', 'OK', 'Invovative Electronic', 'Lab Dasar Komputer ', '8535', NULL, '2016-04-05 04:36:55', 75, 'TERSEDIA'),
	('LD-ATM02', 'ATMEGA', 'OK', 'Invovative Electronic', 'Lab Dasar Komputer ', '8535', NULL, '2016-04-05 04:37:30', 76, 'TERSEDIA'),
	('LD-ATM03', 'ATMEGA', 'OK', 'Invovative Electronic', 'Lab Dasar Komputer ', '8535', NULL, '2016-04-05 04:38:05', 77, 'TERSEDIA'),
	('LD-ATM04', 'ATMEGA', 'OK', 'Invovative Electronic', 'Lab Dasar Komputer ', '8535', NULL, '2016-04-05 04:38:57', 78, 'TERSEDIA'),
	('LD-ATM05', 'ATMEGA', 'OK', 'Invovative Electronic', 'Lab Dasar Komputer ', '8535', NULL, '2016-04-05 04:39:06', 79, 'TERSEDIA'),
	('LD-ATM06', 'ATMEGA', 'OK', 'Invovative Electronic', 'Lab Dasar Komputer ', '8535', NULL, '2016-04-05 04:39:39', 80, 'TERSEDIA'),
	('LD-ATM07', 'ATMEGA', 'OK', 'Invovative Electronic', 'Lab Dasar Komputer ', '8535', NULL, '2016-04-05 04:40:05', 81, 'TERSEDIA'),
	('LD-ATM08', 'ATMEGA', 'OK', 'Invovative Electronic', 'Lab Dasar Komputer ', '8535', NULL, '2016-04-05 04:40:35', 82, 'TERSEDIA'),
	('LD-ATM09', 'ATMEGA', 'OK', 'Invovative Electronic', 'Lab Dasar Komputer ', '8535', NULL, '2016-04-05 04:41:12', 83, 'TERSEDIA'),
	('LD-ATM16-01', 'ATMEGA', 'OK', NULL, 'Lab Dasar Komputer ', '16', 'Rel. 1.2c', '2016-04-05 04:59:36', 84, 'TERSEDIA'),
	('LD-ATM16-02', 'ATMEGA', 'OK', NULL, 'Lab Dasar Komputer ', '16', 'Rel. 1.2c-1', '2016-04-05 05:01:05', 85, 'TERSEDIA'),
	('LD-ATM16-03', 'ATMEGA', 'OK', NULL, 'Lab Dasar Komputer ', '16', 'Rel. 1.2c-1', '2016-04-05 05:02:18', 86, 'TERSEDIA'),
	('LD-ATM16-04', 'ATMEGA', 'OK', NULL, 'Lab Dasar Komputer ', '16', 'Rel. 1.2c', '2016-04-05 05:03:00', 87, 'TERSEDIA'),
	('LD-ATM16-05', 'ATMEGA', 'OK', NULL, 'Lab Dasar Komputer ', '16', 'Rel. 1.2c-1', '2016-04-05 05:03:27', 88, 'TERSEDIA'),
	('LD-ATM16-07', 'ATMEGA', 'OK', NULL, 'Lab Dasar Komputer ', '16', 'Rel. 1.2c-1', '2016-04-05 05:03:58', 89, 'TERSEDIA'),
	('LD-ATM16-08', 'ATMEGA', 'OK', NULL, 'Lab Dasar Komputer ', '16', 'Rel. 1.2c-1', '2016-04-05 05:04:23', 90, 'TERSEDIA'),
	('LD-ATM16-09', 'ATMEGA', 'OK', NULL, 'Lab Dasar Komputer ', '16', 'Rel. 1.2c-1', '2016-04-05 05:04:59', 91, 'TERSEDIA'),
	('LD-ATM16-10', 'ATMEGA', 'OK', NULL, 'Lab Dasar Komputer ', '16', 'Rel. 1.2c-1', '2016-04-05 05:05:17', 92, 'TERSEDIA'),
	('LD-ATM16-11', 'ATMEGA', 'OK', NULL, 'Lab Dasar Komputer ', '16', 'Rel. 1.2c-1', '2016-04-05 05:05:38', 93, 'TERSEDIA'),
	('LD-ATM16-12', 'ATMEGA', 'OK', NULL, 'Lab Dasar Komputer ', '16', 'Rel. 1.2c-1', '2016-04-05 05:06:06', 94, 'TERSEDIA'),
	('LD-ATM16-13', 'ATMEGA', 'OK', NULL, 'Lab Dasar Komputer ', '16', 'Rel. 1.2c-1', '2016-04-05 05:06:29', 95, 'TERSEDIA'),
	('LD-ATM16-14', 'ATMEGA', 'OK', NULL, 'Lab Dasar Komputer ', '16', 'Rel. 1.2c-1', '2016-04-05 05:07:40', 96, 'TERSEDIA'),
	('LD-ATM16-15', 'ATMEGA', 'OK', NULL, 'Lab Dasar Komputer ', '16', 'Rel. 1.2c-1', '2016-04-05 05:08:01', 97, 'TERSEDIA'),
	('LD-ATM16-16', 'ATMEGA', 'OK', NULL, 'Lab Dasar Komputer ', '16', 'Rel. 1.2c-1', '2016-04-05 05:08:28', 98, 'TERSEDIA'),
	('LD-ATM16-17', 'ATMEGA', 'OK', NULL, 'Lab Dasar Komputer ', '16', 'Rel. 1.2c-1', '2016-04-05 05:08:41', 99, 'TERSEDIA'),
	('LD-ATM16-18', 'ATMEGA', 'OK', NULL, 'Lab Dasar Komputer ', '16', 'Rel. 1.2c-1', '2016-04-05 05:09:00', 100, 'TERSEDIA'),
	('LD-ATM16-19', 'ATMEGA', 'OK', NULL, 'Lab Dasar Komputer ', '16', 'Rel. 1.2c-2', '2016-04-05 05:12:16', 101, 'TERSEDIA'),
	('LD-ATM16-20', 'ATMEGA', 'OK', NULL, 'Lab Dasar Komputer ', '16', 'Rel. 1.2c-2', '2016-04-05 05:13:00', 102, 'TERSEDIA'),
	('LD-ATM16-21', 'ATMEGA', 'OK', NULL, 'Lab Dasar Komputer ', '16', 'Rel. 1.2c-2', '2016-04-05 05:13:12', 103, 'TERSEDIA'),
	('LD-ATM16-22', 'ATMEGA', 'OK', NULL, 'Lab Dasar Komputer ', '16', 'Rel. 1.2c-2', '2016-04-05 05:13:37', 104, 'TERSEDIA'),
	('LD-ATM16-23', 'ATMEGA', 'OK', 'Pentago', 'Lab Dasar Komputer ', '16', 'Rel. A-01', '2016-04-05 05:14:37', 105, 'TERSEDIA'),
	('LD-ATM16-24', 'ATMEGA', 'OK', 'Pentago', 'Lab Dasar Komputer ', '16', 'Rel. A-01', '2016-04-05 05:15:37', 106, 'TERSEDIA'),
	('LD-ATM16-25', 'ATMEGA', 'OK', 'Pentago', 'Lab Dasar Komputer ', '16', 'Rel. A-03', '2016-04-05 05:15:56', 107, 'TERSEDIA'),
	('LD-CA01', 'Charger Adaptor Usb', 'OK', 'SAMSUNG', 'Lab Dasar Komputer ', NULL, NULL, '2016-04-05 03:53:12', 32, 'TERSEDIA'),
	('LD-CA02', 'Charger Adaptor Usb', 'OK', 'SAMSUNG', 'Lab Dasar Komputer ', NULL, NULL, '2016-04-05 03:54:05', 33, 'TERSEDIA'),
	('LD-CA03', 'Charger Adaptor Usb', 'OK', 'SAMSUNG', 'Lab Dasar Komputer ', NULL, NULL, '2016-04-05 03:54:57', 34, 'TERSEDIA'),
	('LD-CA04', 'Charger Adaptor Usb', 'OK', 'SAMSUNG', 'Lab Dasar Komputer ', NULL, NULL, '2016-04-05 03:55:56', 35, 'TERSEDIA'),
	('LD-CR01', 'Multi Card Reader', 'OK', 'SOTTA', 'Lab Dasar Komputer ', '5 Port', 'ST-631', '2016-04-05 04:01:13', 40, 'TERSEDIA'),
	('LD-CR02', 'Multi Card Reader', 'OK', 'SOTTA', 'Lab Dasar Komputer ', '5 Port', 'ST-631', '2016-04-05 04:02:13', 41, 'TERSEDIA'),
	('LD-ES01', 'Eight Seven', 'OK', 'Invovative Electronic', 'Lab Dasar Komputer ', '8 Segmen', NULL, '2016-04-05 04:16:30', 50, 'TERSEDIA'),
	('LD-ES02', 'Eight Seven', 'OK', 'Invovative Electronic', 'Lab Dasar Komputer ', '8 Segmen', NULL, '2016-04-05 04:17:07', 51, 'TERSEDIA'),
	('LD-ES03', 'Eight Seven', 'OK', 'Invovative Electronic', 'Lab Dasar Komputer ', '8 Segmen', NULL, '2016-04-05 04:17:27', 52, 'TERSEDIA'),
	('LD-ES04', 'Eight Seven', 'OK', 'Invovative Electronic', 'Lab Dasar Komputer ', '8 Segmen', NULL, '2016-04-05 04:18:09', 53, 'TERSEDIA'),
	('LD-ES05', 'Eight Seven', 'OK', 'Invovative Electronic', 'Lab Dasar Komputer ', '8 Segmen', NULL, '2016-04-05 04:19:00', 54, 'TERSEDIA'),
	('LD-ES06', 'Eight Seven', 'OK', 'Invovative Electronic', 'Lab Dasar Komputer ', '8 Segmen', NULL, '2016-04-05 04:19:20', 55, 'TERSEDIA'),
	('LD-ES07', 'Eight Seven', 'OK', 'Invovative Electronic', 'Lab Dasar Komputer ', '8 Segmen', NULL, '2016-04-05 04:19:57', 56, 'TERSEDIA'),
	('LD-ES08', 'Eight Seven', 'OK', 'Invovative Electronic', 'Lab Dasar Komputer ', '8 Segmen', NULL, '2016-04-05 04:20:06', 57, 'TERSEDIA'),
	('LD-HS01', 'Converter HDMI to', 'RUSAK', NULL, 'Lab Dasar Komputer ', NULL, NULL, '2016-04-13 03:04:06', 22, 'TERSEDIA'),
	('LD-HS02', 'Converter HDMI to\r\nSerial', 'OK', NULL, 'Lab Dasar Komputer ', NULL, NULL, '2016-04-05 04:46:04', 23, 'TERSEDIA'),
	('LD-HS03', 'Converter HDMI to\r\nSerial', 'OK', NULL, 'Lab Dasar Komputer ', NULL, NULL, '2016-04-05 04:46:29', 24, 'TERSEDIA'),
	('LD-HS04', 'Converter HDMI to\r\nSerial', 'OK', NULL, 'Lab Dasar Komputer ', NULL, NULL, '2016-04-05 04:48:08', 25, 'TERSEDIA'),
	('LD-HS05', 'Converter HDMI to\r\nSerial', 'OK', NULL, 'Lab Dasar Komputer ', NULL, NULL, '2016-04-05 04:48:50', 26, 'TERSEDIA'),
	('LD-HS06', 'Converter HDMI to\r\nSerial', 'OK', NULL, 'Lab Dasar Komputer', NULL, NULL, '2016-04-05 04:49:01', 27, 'TERSEDIA'),
	('LD-HS07', 'Converter HDMI to\r\nSerial', 'OK', NULL, 'Lab Dasar Komputer ', NULL, NULL, '2016-04-05 04:49:53', 28, 'TERSEDIA'),
	('LD-HS08', 'Converter HDMI to\r\nSerial', 'OK', NULL, 'Lab Dasar Komputer ', NULL, NULL, '2016-04-05 04:50:05', 29, 'TERSEDIA'),
	('LD-HS09', 'Converter HDMI to\r\nSerial', 'OK', NULL, 'Lab Dasar Komputer ', NULL, NULL, '2016-04-23 05:50:37', 30, 'TERSEDIA'),
	('LD-HS10', 'Converter HDMI to\r\nSerial', 'RUSAK', NULL, 'Lab Dasar Komputer ', NULL, NULL, '2016-04-13 03:04:27', 31, 'TERSEDIA'),
	('LD-KD01', 'Kit Display', 'OK', 'AVR', 'Lab Dasar Komputer ', 'V.2.C2', NULL, '2016-04-05 05:19:09', 108, 'TERSEDIA'),
	('LD-KD02', 'Kit Display', 'OK', 'AVR', 'Lab Dasar Komputer ', 'V.2.C1', NULL, '2016-04-05 05:19:28', 109, 'TERSEDIA'),
	('LD-KD03', 'Kit Display', 'OK', 'AVR', 'Lab Dasar Komputer ', 'V.2.C1', NULL, '2016-04-05 05:20:10', 110, 'TERSEDIA'),
	('LD-KD04', 'Kit Display', 'OK', 'AVR', 'Lab Dasar Komputer ', 'V.2.C1', NULL, '2016-04-05 05:21:21', 111, 'TERSEDIA'),
	('LD-KD07', 'Kit Display', 'OK', 'AVR', 'Lab Dasar Komputer ', 'V.2.C1', NULL, '2016-04-05 05:22:02', 113, 'TERSEDIA'),
	('LD-KD08', 'Kit Display', 'OK', 'AVR', 'Lab Dasar Komputer ', 'V.2.C', NULL, '2016-04-05 05:22:22', 114, 'TERSEDIA'),
	('LD-KD09', 'Kit Display', 'OK', 'AVR', 'Lab Dasar Komputer ', 'V.2.C1', NULL, '2016-04-05 05:23:09', 115, 'TERSEDIA'),
	('LD-KD10', 'Kit Display', 'OK', 'AVR', 'Lab Dasar Komputer ', 'V.2.C1', NULL, '2016-04-05 05:23:37', 116, 'TERSEDIA'),
	('LD-KD11', 'Kit Display', 'OK', 'AVR', 'Lab Dasar Komputer ', 'V.2.C1', NULL, '2016-04-05 05:24:01', 117, 'TERSEDIA'),
	('LD-KD12', 'Kit Display', 'OK', 'AVR', 'Lab Dasar Komputer ', 'V.2.C1', NULL, '2016-04-05 05:24:47', 118, 'TERSEDIA'),
	('LD-KD13', 'Kit Display', 'OK', 'AVR', 'Lab Dasar Komputer ', 'V.2.C1', NULL, '2016-04-05 05:25:15', 119, 'TERSEDIA'),
	('LD-KD14', 'Kit Display', 'OK', 'AVR', 'Lab Dasar Komputer ', 'V.2.C', NULL, '2016-04-05 05:25:50', 120, 'TERSEDIA'),
	('LD-KD15', 'Kit Display', 'OK', 'AVR', 'Lab Dasar Komputer ', 'V.2.C1', NULL, '2016-04-05 05:26:04', 121, 'TERSEDIA'),
	('LD-KD16', 'Kit Display', 'OK', 'AVR', 'Lab Dasar Komputer ', 'V.2.C1', NULL, '2016-04-05 05:26:30', 122, 'TERSEDIA'),
	('LD-KD17', 'Kit Display', 'OK', 'AVR', 'Lab Dasar Komputer ', 'V.2.C2', NULL, '2016-04-05 05:27:27', 123, 'TERSEDIA'),
	('LD-KD18', 'Kit Display', 'RUSAK', 'AVR', 'Lab Dasar Komputer ', 'V.2.C2', NULL, '2016-04-05 05:27:58', 124, 'TERSEDIA'),
	('LD-KD19', 'Kit Display', 'RUSAK', 'AVR', 'Lab Dasar Komputer ', 'V.2.C1', NULL, '2016-04-05 05:28:09', 125, 'TERSEDIA'),
	('LD-KD20', 'Kit Display', 'RUSAK', 'AVR', 'Lab Dasar Komputer ', 'V.2.C1', NULL, '2016-04-05 05:29:09', 126, 'TERSEDIA'),
	('LD-KD21', 'Kit Display', 'OK', 'AVR', 'Lab Dasar Komputer ', 'V.2.C1', NULL, '2016-04-05 05:29:29', 127, 'TERSEDIA'),
	('LD-KD5', 'Kit Display', 'OK', 'AVR', 'Lab Dasar Komputer ', 'V.2.C1', NULL, '2016-04-05 05:21:56', 112, 'TERSEDIA'),
	('LD-KK01', 'Kit Kalkulator', 'OK', 'Invovative Electronic', 'Lab Dasar Komputer ', NULL, '4x4', '2016-04-05 05:03:56', 42, 'TERSEDIA'),
	('LD-KK02', 'Kit Kalkulator', 'OK', 'Invovative Electronic', 'Lab Dasar Komputer ', NULL, '4x4', '2016-04-05 05:04:04', 43, 'TERSEDIA'),
	('LD-KK03', 'Kit Kalkulator', 'OK', 'Invovative Electronic', 'Lab Dasar Komputer ', NULL, '4x4', '2016-04-05 05:04:40', 44, 'TERSEDIA'),
	('LD-KK04', 'Kit Kalkulator', 'OK', 'Invovative Electronic', 'Lab Dasar Komputer ', NULL, '4x4', '2016-04-05 05:05:03', 44, 'TERSEDIA'),
	('LD-KK05', 'Kit Kalkulator', 'OK', 'Invovative Electronic', 'Lab Dasar Komputer ', NULL, '4x4', '2016-04-05 05:05:50', 45, 'TERSEDIA'),
	('LD-kk06', 'Kit Kalkulator', 'OK', 'Invovative Electronic', 'Lab Dasar Komputer ', NULL, '4x4', '2016-04-05 05:07:07', 46, 'TERSEDIA'),
	('LD-KK07', 'Kit Kalkulator', 'OK', 'Invovative Electronic', 'Lab Dasar Komputer ', NULL, '4x4', '2016-04-05 05:07:50', 47, 'TERSEDIA'),
	('LD-KK08', 'Kit Kalkulator', 'OK', 'Invovative Electronic', 'Lab Dasar Komputer ', NULL, '4x4', '2016-04-05 05:08:04', 48, 'TERSEDIA'),
	('LD-KK09', 'Kit Kalkulator', 'OK', 'Invovative Electronic', 'Lab Dasar Komputer ', NULL, '4x4', '2016-04-05 05:08:56', 49, 'TERSEDIA'),
	('LD-KL01', 'Kit Led', 'OK', NULL, 'Lab Dasar Komputer ', '8 Led', NULL, '2016-04-05 05:49:01', 147, 'TERSEDIA'),
	('LD-KL02', 'Kit Led', 'OK', NULL, 'Lab Dasar Komputer ', '8 Led', NULL, '2016-04-05 05:49:20', 148, 'TERSEDIA'),
	('LD-KL03', 'Kit Led', 'OK', NULL, 'Lab Dasar Komputer ', '8 Led', NULL, '2016-04-05 05:49:50', 149, 'TERSEDIA'),
	('LD-KL04', 'Kit Led', 'OK', NULL, 'Lab Dasar Komputer ', '8 Led', NULL, '2016-04-05 05:50:05', 150, 'TERSEDIA'),
	('LD-KL05', 'Kit Led', 'OK', NULL, 'Lab Dasar Komputer ', '8 Led', NULL, '2016-04-05 05:50:29', 151, 'TERSEDIA'),
	('LD-KL06', 'Kit Led', 'OK', NULL, 'Lab Dasar Komputer ', '8 Led', NULL, '2016-04-05 05:50:38', 152, 'TERSEDIA'),
	('LD-KL07', 'Kit Led', 'OK', NULL, 'Lab Dasar Komputer ', '8 Led', NULL, '2016-04-05 05:51:01', 153, 'TERSEDIA'),
	('LD-KL08', 'Kit Led', 'OK', NULL, 'Lab Dasar Komputer ', '8 Led', NULL, '2016-04-05 05:51:25', 154, 'TERSEDIA'),
	('LD-KL09', 'Kit Led', 'OK', NULL, 'Lab Dasar Komputer ', '8 Led', NULL, '2016-04-05 05:51:54', 155, 'TERSEDIA'),
	('LD-KL10', 'Kit Led', 'OK', NULL, 'Lab Dasar Komputer ', '8 Led', NULL, '2016-04-13 05:28:01', 156, 'TERSEDIA'),
	('LD-KL11', 'Kit Led', 'OK', NULL, 'Lab Dasar Komputer ', '8 Led', NULL, '2016-04-05 05:52:04', 157, 'TERSEDIA'),
	('LD-KL12', 'Kit Led', 'OK', NULL, 'Lab Dasar Komputer ', '8 Led', NULL, '2016-04-13 05:28:28', 158, 'TERSEDIA'),
	('LD-KL13', 'Kit Led', 'OK', NULL, 'Lab Dasar Komputer ', '8 Led', NULL, '2016-04-05 05:53:20', 159, 'TERSEDIA'),
	('LD-KL14', 'Kit Led', 'OK', NULL, 'Lab Dasar Komputer ', '8 Led', NULL, '2016-08-23 06:53:57', 160, 'TERSEDIA'),
	('LD-KL15', 'Kit Led', 'OK', NULL, 'Lab Dasar Komputer ', '8 Led', NULL, '2016-04-05 05:54:04', 160, 'TERSEDIA'),
	('LD-KL16', 'Kit Led', 'OK', NULL, 'Lab Dasar Komputer ', '8 Led', NULL, '2016-04-19 04:50:01', 208, 'TERSEDIA'),
	('LD-KL17', 'Kit Led', 'OK', NULL, 'Lab Dasar Komputer ', '8 Led', NULL, '2016-04-05 05:55:01', 162, 'TERSEDIA'),
	('LD-KL18', 'Kit Led', 'OK', NULL, 'Lab Dasar Komputer ', '8 Led', NULL, '2016-04-05 05:55:30', 163, 'TERSEDIA'),
	('LD-KL19', 'Kit Led', 'OK', NULL, 'Lab Dasar Komputer ', '8 Led', NULL, '2016-04-05 05:56:01', 164, 'TERSEDIA'),
	('LD-KL20', 'Kit Led', 'OK', NULL, 'Lab Dasar Komputer ', '8 Led', NULL, '2016-04-05 05:56:34', 165, 'TERSEDIA'),
	('LD-KL21', 'Kit Led', 'OK', NULL, 'Lab Dasar Komputer ', '8 Led', NULL, '2016-04-05 05:56:55', 166, 'TERSEDIA'),
	('LD-KL22', 'Kit Led', 'OK', NULL, 'Lab Dasar Komputer ', '8 Led', NULL, '2016-04-05 05:57:01', 167, 'TERSEDIA'),
	('LD-KL23', 'Kit Led', 'OK', NULL, 'Lab Dasar Komputer ', '8 Led', NULL, '2016-04-05 05:57:34', 168, 'TERSEDIA'),
	('LD-KL24', 'Kit Led', 'OK', NULL, 'Lab Dasar Komputer ', '8 Led', NULL, '2016-04-05 05:57:57', 169, 'TERSEDIA'),
	('LD-KL25', 'Kit Led', 'OK', NULL, 'Lab Dasar Komputer ', '8 Led', NULL, '2016-04-05 05:58:08', 170, 'TERSEDIA'),
	('LD-KL26', 'Kit Led', 'OK', NULL, 'Lab Dasar Komputer ', '8 Led', NULL, '2016-04-05 05:58:58', 171, 'TERSEDIA'),
	('LD-KL27', 'Kit Led', 'OK', NULL, 'Lab Dasar Komputer ', '8 Led', NULL, '2016-04-05 05:59:09', 172, 'TERSEDIA'),
	('LD-KL28', 'Kit Led', 'OK', NULL, 'Lab Dasar Komputer ', '8 Led', NULL, '2016-04-05 05:59:40', 173, 'TERSEDIA'),
	('LD-KL29', 'Kit Led', 'OK', NULL, 'Lab Dasar Komputer ', '8 Led', NULL, '2016-04-05 06:00:00', 174, 'TERSEDIA'),
	('LD-KL30', 'Kit Led', 'OK', NULL, 'Lab Dasar Komputer ', '8 Led', NULL, '2016-04-05 06:00:21', 175, 'TERSEDIA'),
	('LD-KL31', 'Kit Led', 'OK', NULL, 'Lab Dasar Komputer ', '8 Led', NULL, '2016-04-05 06:00:50', 176, 'TERSEDIA'),
	('LD-KL32', 'Kit Led', 'OK', NULL, 'Lab Dasar Komputer ', '8 Led', NULL, '2016-04-05 06:01:01', 177, 'TERSEDIA'),
	('LD-KL33', 'Kit Led', 'OK', NULL, 'Lab Dasar Komputer ', '8 Led', NULL, '2016-04-05 06:01:30', 178, 'TERSEDIA'),
	('LD-KL34', 'Kit Led', 'OK', NULL, 'Lab Dasar Komputer ', '8 Led', NULL, '2016-04-05 06:01:59', 179, 'TERSEDIA'),
	('LD-KL35', 'Kit Led', 'OK', NULL, 'Lab Dasar Komputer ', '8 Led', NULL, '2016-04-05 06:02:02', 180, 'TERSEDIA'),
	('LD-KL36', 'Kit Led', 'OK', NULL, 'Lab Dasar Komputer ', '8 Led', NULL, '2016-04-05 06:02:20', 181, 'TERSEDIA'),
	('LD-KL37', 'Kit Led', 'OK', NULL, 'Lab Dasar Komputer ', '8 Led', NULL, '2016-04-05 06:02:40', 182, 'TERSEDIA'),
	('LD-KL38', 'Kit Led', 'OK', NULL, 'Lab Dasar Komputer ', '8 Led', NULL, '2016-04-05 06:03:03', 183, 'TERSEDIA'),
	('LD-KL39', 'Kit Led', 'OK', NULL, 'Lab Dasar Komputer ', '8 Led', NULL, '2016-04-05 06:03:21', 184, 'TERSEDIA'),
	('LD-KL40', 'Kit Led', 'OK', NULL, 'Lab Dasar Komputer ', '8 Led', NULL, '2016-04-05 06:03:54', 185, 'TERSEDIA'),
	('LD-KL41', 'Kit Led', 'OK', NULL, 'Lab Dasar Komputer ', '8 Led', NULL, '2016-04-05 06:04:05', 186, 'TERSEDIA'),
	('LD-KL42', 'Kit Led', 'OK', NULL, 'Lab Dasar Komputer ', '8 Led', NULL, '2016-04-05 06:04:25', 187, 'TERSEDIA'),
	('LD-KL43', 'Kit Led', 'RUSAK', NULL, 'Lab Dasar Komputer ', '8 Led', NULL, '2016-04-05 06:04:47', 188, 'TERSEDIA'),
	('LD-KLC01', 'Kit LCD', 'OK', NULL, 'Lab Dasar Komputer ', NULL, NULL, '2016-04-19 04:52:02', 214, 'TERSEDIA'),
	('LD-KLC02', 'Kit LCD', 'OK', NULL, 'Lab Dasar Komputer ', NULL, NULL, '2016-04-19 04:52:30', 215, 'TERSEDIA'),
	('LD-KLC03', 'Kit LCD', 'OK', NULL, 'Lab Dasar Komputer ', NULL, NULL, '2016-04-19 04:52:57', 216, 'TERSEDIA'),
	('LD-KLC04', 'Kit LCD', 'OK', NULL, 'Lab Dasar Komputer ', NULL, NULL, '2016-04-19 04:36:00', 21, 'TERSEDIA'),
	('LD-KLC05', 'Kit LCD', 'OK', NULL, 'Lab Dasar Komputer ', NULL, NULL, '2016-04-19 04:36:10', 20, 'TERSEDIA'),
	('LD-KLC06', 'Kit LCD', 'OK', NULL, 'Lab Dasar Komputer ', NULL, NULL, '2016-04-19 04:36:23', 19, 'TERSEDIA'),
	('LD-KLC07', 'Kit LCD', 'OK', NULL, 'Lab Dasar Komputer ', NULL, NULL, '2016-04-19 04:36:37', 18, 'TERSEDIA'),
	('LD-KLC08', 'Kit LCD', 'OK', NULL, 'Lab Dasar Komputer ', NULL, NULL, '2016-04-19 04:36:48', 17, 'TERSEDIA'),
	('LD-KLC09', 'Kit LCD', 'OK', NULL, 'Lab Dasar Komputer ', NULL, NULL, '2016-04-19 04:36:59', 16, 'TERSEDIA'),
	('LD-KLC10', 'Kit LCD', 'OK', NULL, 'Lab Dasar Komputer ', NULL, NULL, '2016-04-19 04:34:01', 11, 'TERSEDIA'),
	('LD-KLC11', 'Kit LCD', 'OK', NULL, 'Lab Dasar Komputer ', NULL, NULL, '2016-04-19 04:34:11', 10, 'TERSEDIA'),
	('LD-KLC12', 'Kit LCD', 'OK', NULL, 'Lab Dasar Komputer ', NULL, NULL, '2016-04-19 04:34:29', 9, 'TERSEDIA'),
	('LD-KLC13', 'Kit LCD', 'OK', NULL, 'Lab Dasar Komputer ', NULL, NULL, '2016-04-19 04:34:33', 8, 'TERSEDIA'),
	('LD-KLC14', 'Kit LCD', 'OK', NULL, 'Lab Dasar Komputer ', NULL, NULL, '2016-04-19 04:34:47', 7, 'TERSEDIA'),
	('LD-KLC15', 'Kit LCD', 'OK', NULL, 'Lab Dasar Komputer ', NULL, NULL, '2016-04-19 04:33:33', 6, 'TERSEDIA'),
	('LD-LS01', 'Led Sorot', 'OK', NULL, 'Lab Dasar Komputer ', NULL, NULL, '2016-04-05 05:33:01', 128, 'TERSEDIA'),
	('LD-LS02', 'Led Sorot', 'OK', NULL, 'Lab Dasar Komputer ', NULL, NULL, '2016-04-05 05:33:23', 129, 'TERSEDIA'),
	('LD-LS03', 'Led Sorot', 'OK', NULL, 'Lab Dasar Komputer ', NULL, NULL, '2016-04-05 05:33:33', 130, 'TERSEDIA'),
	('LD-LS04', 'Led Sorot', 'OK', NULL, 'Lab Dasar Komputer ', NULL, NULL, '2016-04-05 05:34:04', 131, 'TERSEDIA'),
	('LD-LS05', 'Led Sorot', 'OK', NULL, 'Lab Dasar Komputer ', NULL, NULL, '2016-04-05 05:34:35', 132, 'TERSEDIA'),
	('LD-LS06', 'Led Sorot', 'OK', NULL, 'Lab Dasar Komputer ', NULL, NULL, '2016-04-05 05:34:59', 133, 'TERSEDIA'),
	('LD-LS07', 'Led Sorot', 'OK', NULL, 'Lab Dasar Komputer ', NULL, NULL, '2016-04-05 05:35:05', 134, 'TERSEDIA'),
	('LD-LS08', 'Led Sorot', 'OK', NULL, 'Lab Dasar Komputer ', NULL, NULL, '2016-04-05 05:35:15', 135, 'TERSEDIA'),
	('LD-LS09', 'Led Sorot', 'OK', NULL, 'Lab Dasar Komputer ', NULL, NULL, '2016-04-05 05:35:25', 136, 'TERSEDIA'),
	('LD-LS10', 'Led Sorot', 'OK', NULL, 'Lab Dasar Komputer ', NULL, NULL, '2016-04-05 05:35:35', 137, 'TERSEDIA'),
	('LD-LS11', 'Led Sorot', 'OK', NULL, 'Lab Dasar Komputer ', NULL, NULL, '2016-04-05 05:36:01', 138, 'TERSEDIA'),
	('LD-LS12', 'Led Sorot', 'OK', NULL, 'Lab Dasar Komputer ', NULL, NULL, '2016-04-05 05:36:49', 139, 'TERSEDIA'),
	('LD-LS13', 'Led Sorot', 'OK', NULL, 'Lab Dasar Komputer ', NULL, NULL, '2016-04-05 05:37:03', 140, 'TERSEDIA'),
	('LD-LS14', 'Led Sorot', 'OK', NULL, 'Lab Dasar Komputer ', NULL, NULL, '2016-04-05 05:37:13', 141, 'TERSEDIA'),
	('LD-LS15', 'Led Sorot', 'OK', NULL, 'Lab Dasar Komputer ', NULL, NULL, '2016-04-05 05:37:23', 142, 'TERSEDIA'),
	('LD-LS16', 'Led Sorot', 'OK', NULL, 'Lab Dasar Komputer ', NULL, NULL, '2016-04-05 05:38:08', 143, 'TERSEDIA'),
	('LD-LS17', 'Led Sorot', 'OK', NULL, 'Lab Dasar Komputer ', NULL, NULL, '2016-04-05 05:39:09', 144, 'TERSEDIA'),
	('LD-LS18', 'Led Sorot', 'OK', NULL, 'Lab Dasar Komputer ', NULL, NULL, '2016-04-05 05:39:40', 145, 'TERSEDIA'),
	('LD-LS19', 'Led Sorot', 'OK', NULL, 'Lab Dasar Komputer ', NULL, NULL, '2016-04-05 05:40:40', 146, 'TERSEDIA'),
	('LD-MS01', 'Micro SD', 'OK', 'SANDISK', 'Lab Dasar Komputer ', '8 GB', NULL, '2016-04-05 03:14:14', 1, 'TERSEDIA'),
	('LD-MS02', 'Micro SD', 'OK', 'SANDISK', 'Lab Dasar Komputer ', '8 GB', NULL, '2016-04-05 03:15:15', 2, 'TERSEDIA'),
	('LD-MS03', 'Micro SD', 'OK', 'V-GEN', 'Lab Dasar Komputer ', '16 GB', NULL, '2016-04-05 03:17:17', 3, 'TERSEDIA'),
	('LD-MS04', 'Micro SD', 'OK', 'SAMSUNG', 'Lab Dasar Komputer ', '8 GB', NULL, '2016-04-05 03:18:18', 4, 'TERSEDIA'),
	('LD-MS05', 'Micro SD', 'OK', 'SANDISK', 'Lab Dasar Komputer ', '16 GB', NULL, '2016-04-05 03:19:19', 5, 'TERSEDIA'),
	('LD-RP01', 'Raspberry Pi', 'OK', 'Raspberry', 'Lab Dasar Komputer ', NULL, 'B+ V1.2', '2016-04-05 03:33:33', 13, 'TERSEDIA'),
	('LD-RP02', 'Raspberry Pi', 'OK', 'Raspberry', 'Lab Dasar Komputer ', NULL, 'B+ V1.2', '2016-04-05 03:33:03', 12, 'TERSEDIA'),
	('LD-RP03', 'Raspberry Pi', 'OK', 'Raspberry', 'Lab Dasar Komputer ', NULL, NULL, '2016-04-05 03:36:00', 15, 'TERSEDIA'),
	('LD-RP04', 'Raspberry Pi', 'OK', 'Raspberry', 'Lab Dasar Komputer ', NULL, NULL, '2016-04-05 03:35:06', 14, 'TERSEDIA'),
	('LD-SS01', 'Seven Segmen', 'OK', 'Inovative Electronic', 'Lab Dasar Komputer ', '7 Segmen', NULL, '2016-04-05 04:23:00', 58, 'TERSEDIA'),
	('LD-SS02', 'Seven Segmen', 'OK', 'Inovative Electronic', 'Lab Dasar Komputer ', '7 Segmen', NULL, '2016-04-05 04:23:30', 59, 'TERSEDIA'),
	('LD-SS03', 'Seven Segmen', 'OK', 'Inovative Electronic', 'Lab Dasar Komputer ', '7 Segmen', NULL, '2016-04-05 04:24:00', 60, 'TERSEDIA'),
	('LD-SS04', 'Seven Segmen', 'OK', 'Inovative Electronic', 'Lab Dasar Komputer ', '7 Segmen', NULL, '2016-04-05 04:24:34', 61, 'TERSEDIA'),
	('LD-SS05', 'Seven Segmen', 'OK', 'Inovative Electronic', 'Lab Dasar Komputer ', '7 Segmen', NULL, '2016-04-05 04:24:50', 62, 'TERSEDIA'),
	('LD-SS06', 'Seven Segmen', 'OK', 'Inovative Electronic', 'Lab Dasar Komputer ', '7 Segmen', NULL, '2016-04-05 04:25:25', 63, 'TERSEDIA'),
	('LD-SS07', 'Seven Segmen', 'OK', 'Inovative Electronic', 'Lab Dasar Komputer ', '7 Segmen', NULL, '2016-04-05 04:25:34', 64, 'TERSEDIA'),
	('LD-SS08', 'Seven Segmen', 'OK', 'Inovative Electronic', 'Lab Dasar Komputer ', '7 Segmen', NULL, '2016-04-05 04:26:06', 65, 'TERSEDIA'),
	('LD-SS09', 'Seven Segmen', 'OK', 'Inovative Electronic', 'Lab Dasar Komputer ', '7 Segmen', NULL, '2016-04-05 04:26:30', 66, 'TERSEDIA'),
	('LD-SS10', 'Seven Segmen', 'OK', 'Inovative Electronic', 'Lab Dasar Komputer ', '7 Segmen', NULL, '2016-04-05 04:26:49', 67, 'TERSEDIA'),
	('LD-SS11', 'Seven Segmen', 'OK', 'Inovative Electronic', 'Lab Dasar Komputer ', '7 Segmen', NULL, '2016-04-05 04:27:27', 68, 'TERSEDIA'),
	('LD-SS12', 'Seven Segmen', 'OK', 'Inovative Electronic', 'Lab Dasar Komputer ', '7 Segmen', NULL, '2016-04-05 04:28:28', 69, 'TERSEDIA'),
	('LD-SS13', 'Seven Segmen', 'OK', 'Inovative Electronic', 'Lab Dasar Komputer ', '7 Segmen', NULL, '2016-04-05 04:28:00', 70, 'TERSEDIA'),
	('LD-SS14', 'Seven Segmen', 'OK', 'Inovative Electronic', 'Lab Dasar Komputer ', '7 Segmen', NULL, '2016-04-05 04:29:06', 71, 'TERSEDIA'),
	('LD-SS15', 'Seven Segmen', 'OK', 'Inovative Electronic', 'Lab Dasar Komputer ', '7 Segmen', NULL, '2016-04-05 04:30:06', 72, 'TERSEDIA'),
	('LD-SS16', 'Seven Segmen', 'OK', 'Inovative Electronic', 'Lab Dasar Komputer ', '7 Segmen', NULL, '2016-04-05 04:30:40', 73, 'TERSEDIA'),
	('LD-SS17', 'Seven Segmen', 'OK', 'Inovative Electronic', 'Lab Dasar Komputer ', '7 Segmen', NULL, '2016-04-05 04:30:59', 74, 'TERSEDIA'),
	('LD-U01', 'Uploader', 'OK', 'AVR', 'Lab Dasar Komputer ', '', 'Rel.1.a', '2016-04-07 05:13:00', 189, 'TERSEDIA'),
	('LD-U02', 'Uploader', 'OK', 'AVR', 'Lab Dasar Komputer ', '', 'Rel.1.a', '2016-04-07 05:14:04', 190, 'TERSEDIA'),
	('LD-U03', 'Uploader', 'OK', 'AVR', 'Lab Dasar Komputer ', '', 'Rel.1.a', '2016-04-07 05:14:54', 191, 'TERSEDIA'),
	('LD-U04', 'Uploader', 'OK', 'AVR', 'Lab Dasar Komputer ', '', 'Rel.1.a', '2016-04-07 05:29:29', 192, 'TERSEDIA'),
	('LD-U05', 'Uploader', 'OK', 'AVR', 'Lab Dasar Komputer ', '', 'Rel.1.a', '2016-04-07 05:30:02', 193, 'TERSEDIA'),
	('LD-U06', 'Uploader', 'OK', 'AVR', 'Lab Dasar Komputer ', '', 'Rel.1.a', '2016-08-23 05:30:58', 194, 'TERSEDIA'),
	('LD-U07', 'Uploader', 'OK', 'AVR', 'Lab Dasar Komputer ', '', 'Rel.1.a', '2016-04-07 05:31:32', 195, 'TERSEDIA'),
	('LD-U08', 'Uploader', 'OK', 'AVR', 'Lab Dasar Komputer ', '', 'Rel.1.a', '2016-04-07 05:31:53', 196, 'TERSEDIA'),
	('LD-U09', 'Uploader', 'OK', 'AVR', 'Lab Dasar Komputer ', '', 'Rel.1.a', '2016-04-07 05:32:32', 197, 'TERSEDIA'),
	('LD-U10', 'Uploader', 'OK', 'AVR', 'Lab Dasar Komputer ', '', 'Rel.1.a', '2016-04-07 05:33:32', 198, 'TERSEDIA'),
	('LD-U11', 'Uploader', 'OK', 'AVR', 'Lab Dasar Komputer ', '', 'Rel.1.a', '2016-04-07 05:34:04', 199, 'TERSEDIA'),
	('LD-U12', 'Uploader', 'OK', 'AVR', 'Lab Dasar Komputer ', '', 'Rel.1.a', '2016-08-23 07:34:34', 200, 'TERSEDIA'),
	('LD-U13', 'Uploader', 'OK', 'AVR', 'Lab Dasar Komputer ', '', 'Rel.1.a', '2016-04-07 05:35:32', 201, 'TERSEDIA'),
	('LD-U14', 'Uploader', 'OK', 'AVR', 'Lab Dasar Komputer ', '', 'Rel.1.a', '2016-04-07 05:36:32', 202, 'TERSEDIA'),
	('LD-U15', 'Uploader', 'OK', 'AVR', 'Lab Dasar Komputer ', '', 'Rel.1.a', '2016-04-07 05:40:40', 203, 'TERSEDIA'),
	('LD-U16', 'Uploader', 'OK', 'AVR', 'Lab Dasar Komputer ', '', 'Rel.1.a', '2016-04-07 05:42:32', 204, 'TERSEDIA'),
	('LD-U17', 'Uploader', 'OK', 'AVR', 'Lab Dasar Komputer ', '', 'Rel.1.a', '2016-04-07 05:51:32', 205, 'TERSEDIA'),
	('LD-U18', 'Uploader', 'OK', 'AVR', 'Lab Dasar Komputer ', '', 'Rel.1.a', '2016-04-07 05:55:55', 206, 'TERSEDIA'),
	('LD-U19', 'Uploader', 'OK', 'AVR', 'Lab Dasar Komputer ', '', 'Rel.1.a', '2016-04-07 05:57:57', 207, 'TERSEDIA'),
	('LD-U20', 'Uploader', 'OK', 'Pentago', 'Lab Dasar Komputer ', '', 'rev-B', '2016-04-19 04:51:32', 209, 'TERSEDIA'),
	('LD-U21', 'Uploader', 'OK', 'Pentago', 'Lab Dasar Komputer ', '', 'rev-B', '2016-04-19 04:52:00', 210, 'TERSEDIA'),
	('LD-U22', 'Uploader', 'OK', 'Pentago', 'Lab Dasar Komputer ', '', 'rev-B', '2016-04-19 04:52:10', 211, 'TERSEDIA'),
	('LD-U23', 'Uploader', 'OK', 'Pentago', 'Lab Dasar Komputer ', '', 'rev-B', '2016-04-19 04:52:32', 212, 'TERSEDIA'),
	('LD-U24', 'Uploader', 'OK', 'Pentago', 'Lab Dasar Komputer ', '', 'rev-B', '2016-04-19 04:52:59', 213, 'TERSEDIA'),
	('LD-UH01', 'USB Hub', 'OK', NULL, 'Lab Dasar Komputer ', '4 Port', NULL, '2016-04-05 03:37:32', 37, 'TERSEDIA'),
	('LD-UH02', 'USB Hub', 'OK', NULL, 'Lab Dasar Komputer ', '4 Port', NULL, '2016-04-05 03:39:32', 38, 'TERSEDIA'),
	('LD-UH03', 'USB Hub', 'OK', NULL, 'Lab Dasar Komputer ', '4 Port', NULL, '2016-04-05 04:00:00', 39, 'TERSEDIA'),
	('LM-DE01', 'DVD External', 'OK', 'LITEON', 'Lab Multimedia', NULL, NULL, '2016-08-23 09:20:39', 3, 'TERSEDIA'),
	('LM-DE02', 'DVD External', 'OK', 'LITEON', 'Lab Multimedia', NULL, NULL, '2016-08-23 09:20:40', 4, 'TERSEDIA'),
	('LM-DP01', 'Drawing Pad', 'OK', 'WACOM', 'Lab Multimedia', NULL, 'CTL-470', '2016-08-23 09:20:37', 5, 'TERSEDIA'),
	('LM-DP02', 'MousePen', 'OK', 'Genius', 'Lab Multimedia', NULL, 'GT-100006', '2016-08-23 09:20:45', 6, 'TERSEDIA'),
	('LM-DP03', 'Drawing Pad', 'OK', 'WACOM', 'Lab Multimedia', NULL, 'CTH-661', '2016-08-23 09:20:38', 7, 'TERSEDIA'),
	('LM-HS01', 'Headset', 'OK', 'SADES', 'Lab Multimedia', NULL, NULL, '2016-08-23 09:20:40', 2, 'TERSEDIA'),
	('LM-K01', 'KINECT', 'OK', 'Microsoft', 'Lab Multimedia', NULL, 'LPF-00031', '2016-08-23 09:20:41', 8, 'TERSEDIA'),
	('LM-K02', 'KINECT', 'OK', 'Microsoft', 'Lab Multimedia', NULL, 'LPF-00031', '2016-08-23 09:20:42', 9, 'TERSEDIA'),
	('LM-K03', 'KINECT', 'OK', 'Microsoft', 'Lab Multimedia', NULL, 'LPF-00031', '2016-08-23 09:20:43', 10, 'TERSEDIA'),
	('LM-K04', 'KINECT', 'OK', 'Microsoft', 'Lab Multimedia', NULL, 'LPF-00031', '2016-08-23 09:20:44', 11, 'TERSEDIA'),
	('LM-S01', 'Speaker', 'OK', 'FENDA', 'Lab Multimedia', NULL, 'F203U', '2016-08-23 09:20:45', 1, 'TERSEDIA'),
	('LM-SM01', 'Studio Movie Box', 'OK', 'Pinnacle', 'Lab Multimedia', NULL, NULL, '2016-08-23 09:20:46', 12, 'TERSEDIA');
/*!40000 ALTER TABLE `barang` ENABLE KEYS */;


-- Dumping structure for table inventaris.dosen
CREATE TABLE IF NOT EXISTS `dosen` (
  `nid` int(4) NOT NULL,
  `sandi` int(6) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jk` enum('L','P') DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `no_telp` varchar(13) DEFAULT NULL,
  `alamat` text,
  `foto` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`nid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table inventaris.dosen: ~4 rows (approximately)
/*!40000 ALTER TABLE `dosen` DISABLE KEYS */;
INSERT INTO `dosen` (`nid`, `sandi`, `nama`, `jk`, `tgl_lahir`, `no_telp`, `alamat`, `foto`) VALUES
	(1111, 123456, 'Milda Gustiana Husada, Ir., M.Eng.', 'L', NULL, NULL, NULL, NULL),
	(2222, 123456, 'Muhammad Ichwan, Ir., MT.', 'L', NULL, NULL, NULL, NULL),
	(3333, 123456, 'Irma Amelia Dewi, S.Kom., MT.', 'P', NULL, NULL, NULL, NULL),
	(4444, 123456, 'Dina Budhi Utami, S.Kom., MT.', 'P', NULL, NULL, NULL, 'images/dosen/4444.jpg');
/*!40000 ALTER TABLE `dosen` ENABLE KEYS */;


-- Dumping structure for table inventaris.file
CREATE TABLE IF NOT EXISTS `file` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_file` varchar(100) DEFAULT NULL,
  `tanggal_upload` date DEFAULT NULL,
  `kategori` enum('Absensi','Modul','Jobsheet','Sertifikat','Surat','Persyaratan') DEFAULT NULL,
  `path` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

-- Dumping data for table inventaris.file: ~6 rows (approximately)
/*!40000 ALTER TABLE `file` DISABLE KEYS */;
INSERT INTO `file` (`id`, `nama_file`, `tanggal_upload`, `kategori`, `path`) VALUES
	(2, 'Modul_JARKOM_1617.pdf', '2016-08-15', 'Modul', '../file/Modul_JARKOM_1617.pdf'),
	(4, 'Jobsheet_JARKOM_1617.pdf', '2016-08-16', 'Jobsheet', '../file/Jobsheet_JARKOM_1617.pdf'),
	(36, 'Modul_PEMDAS_1617.pdf', '2016-08-29', 'Modul', '../file/Modul_PEMDAS_1617.pdf'),
	(38, 'Jobsheet_PEMDAS_1617.pdf', '2016-08-29', 'Jobsheet', '../file/Jobsheet_PEMDAS_1617.pdf'),
	(41, 'Modul_ORKOM_1617.pdf', '2016-08-29', 'Modul', '../file/Modul_ORKOM_1617.pdf'),
	(42, 'Jobsheet_ORKOM_1617.pdf', '2016-08-29', 'Jobsheet', '../file/Jobsheet_ORKOM_1617.pdf');
/*!40000 ALTER TABLE `file` ENABLE KEYS */;


-- Dumping structure for table inventaris.jadwal_lab
CREATE TABLE IF NOT EXISTS `jadwal_lab` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_ruang` varchar(50) DEFAULT NULL,
  `kegiatan` varchar(50) DEFAULT NULL,
  `waktu` varchar(50) DEFAULT NULL,
  `penanggungjawab` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table inventaris.jadwal_lab: ~3 rows (approximately)
/*!40000 ALTER TABLE `jadwal_lab` DISABLE KEYS */;
INSERT INTO `jadwal_lab` (`id`, `no_ruang`, `kegiatan`, `waktu`, `penanggungjawab`) VALUES
	(1, '2401', 'Praktikum Jaringan Komputer', 'Rabu 13.00-16.00', 'Boby Nicholas'),
	(3, '2403', 'Praktikum Pemrograman Dasar', 'Sabtu 08.00-11.00', 'Moch. Angga'),
	(7, '2402', 'Kerja Praktek', 'Selasa 10.00-16.00', 'Irma Amelia M.T.');
/*!40000 ALTER TABLE `jadwal_lab` ENABLE KEYS */;


-- Dumping structure for table inventaris.jadwal_praktikum
CREATE TABLE IF NOT EXISTS `jadwal_praktikum` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `periode` varchar(50) NOT NULL,
  `nama_praktikum` varchar(50) NOT NULL,
  `kelas` varchar(50) DEFAULT NULL,
  `waktu` varchar(50) DEFAULT NULL,
  `asisten` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Dumping data for table inventaris.jadwal_praktikum: ~0 rows (approximately)
/*!40000 ALTER TABLE `jadwal_praktikum` DISABLE KEYS */;
INSERT INTO `jadwal_praktikum` (`id`, `periode`, `nama_praktikum`, `kelas`, `waktu`, `asisten`) VALUES
	(12, '2016/2017', 'PEMDAS', 'A', 'Senin 08.00', 'Gian Permana');
/*!40000 ALTER TABLE `jadwal_praktikum` ENABLE KEYS */;


-- Dumping structure for table inventaris.koordinator
CREATE TABLE IF NOT EXISTS `koordinator` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode` int(11) DEFAULT NULL,
  `jabatan` enum('Koor Laboratorium','Koor Praktikum','Koor Asisten') DEFAULT NULL,
  `praktikum` varchar(50) DEFAULT NULL,
  `periode` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

-- Dumping data for table inventaris.koordinator: ~5 rows (approximately)
/*!40000 ALTER TABLE `koordinator` DISABLE KEYS */;
INSERT INTO `koordinator` (`id`, `kode`, `jabatan`, `praktikum`, `periode`) VALUES
	(2, 3333, 'Koor Laboratorium', 'PEMDAS', '2016/2017'),
	(3, 4444, 'Koor Praktikum', 'PEMDAS', '2016/2017'),
	(6, 4444, 'Koor Praktikum', 'ORKOM', '2016/2017'),
	(19, 4444, 'Koor Laboratorium', 'PBO', '2016/2017'),
	(23, 152013002, 'Koor Asisten', 'PEMDAS', '2016/2017');
/*!40000 ALTER TABLE `koordinator` ENABLE KEYS */;


-- Dumping structure for table inventaris.mahasiswa
CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `id` int(9) NOT NULL,
  `pin` int(6) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jk` enum('L','P') DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `no_telp` varchar(13) DEFAULT NULL,
  `alamat` text,
  `foto` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table inventaris.mahasiswa: ~56 rows (approximately)
/*!40000 ALTER TABLE `mahasiswa` DISABLE KEYS */;
INSERT INTO `mahasiswa` (`id`, `pin`, `nama`, `jk`, `tgl_lahir`, `no_telp`, `alamat`, `foto`) VALUES
	(152013001, 123456, 'Mochamad Angga Anggriawan', NULL, NULL, NULL, NULL, NULL),
	(152013002, 123456, 'Gian Permana', NULL, NULL, NULL, NULL, 'images/mahasiswa/152013002.png'),
	(152013003, 123456, 'Sandha', NULL, NULL, NULL, NULL, NULL),
	(152015001, 123456, 'Farhan Rafiqi', NULL, NULL, NULL, NULL, NULL),
	(152015002, NULL, 'Rafi Faudzan Firdaus', NULL, NULL, NULL, NULL, NULL),
	(152015003, NULL, 'Erwin Suyatno', NULL, NULL, NULL, NULL, NULL),
	(152015004, NULL, 'Windi Krisdyanti', NULL, NULL, NULL, NULL, NULL),
	(152015005, NULL, 'Ainan Taqarra Yusuf', NULL, NULL, NULL, NULL, NULL),
	(152015007, NULL, 'Muhammad Gilang P.U', NULL, NULL, NULL, NULL, NULL),
	(152015009, NULL, 'Nur Zamzam N', NULL, NULL, NULL, NULL, NULL),
	(152015010, NULL, 'M. Syacrizal Ohoimas', NULL, NULL, NULL, NULL, NULL),
	(152015011, NULL, 'Rizky Fajar Mahendra', NULL, NULL, NULL, NULL, NULL),
	(152015012, NULL, 'Denis Budiarrianto', NULL, NULL, NULL, NULL, NULL),
	(152015013, NULL, 'Bery Octovian', NULL, NULL, NULL, NULL, NULL),
	(152015014, NULL, 'Herbowo Yerry Putratama', NULL, NULL, NULL, NULL, NULL),
	(152015016, NULL, 'Hubaka Ghayati Setyakurnia', NULL, NULL, NULL, NULL, NULL),
	(152015017, NULL, 'Maulana Hasan Suriadinata', NULL, NULL, NULL, NULL, NULL),
	(152015018, NULL, 'Reva Nur Ilyas', NULL, NULL, NULL, NULL, NULL),
	(152015019, NULL, 'Ansari Siddieqi Yustia', NULL, NULL, NULL, NULL, NULL),
	(152015021, NULL, 'Ridho Tadjudin', NULL, NULL, NULL, NULL, NULL),
	(152015022, NULL, 'Muhammad Emir Hamzah H', NULL, NULL, NULL, NULL, NULL),
	(152015023, NULL, 'Hana Pertiwi Muslimah', NULL, NULL, NULL, NULL, NULL),
	(152015025, NULL, 'Bagas Dwi Putra', NULL, NULL, NULL, NULL, NULL),
	(152015026, NULL, 'Hafizh Achmad Dinan', NULL, NULL, NULL, NULL, NULL),
	(152015027, NULL, 'Ade Nugraha', NULL, NULL, NULL, NULL, NULL),
	(152015028, NULL, 'Farikh Ramadhan', NULL, NULL, NULL, NULL, NULL),
	(152015029, NULL, 'Venti Fatonah', NULL, NULL, NULL, NULL, NULL),
	(152015030, NULL, 'Horas Nicodemus L.Gaol', NULL, NULL, NULL, NULL, NULL),
	(152015033, NULL, 'Ilham Ramadhan Anugerah', NULL, NULL, NULL, NULL, NULL),
	(152015035, NULL, 'Chandra M', NULL, NULL, NULL, NULL, NULL),
	(152015036, NULL, 'Reza Andhika Putra', NULL, NULL, NULL, NULL, NULL),
	(152015037, NULL, 'Ami Rahmi Muliani', NULL, NULL, NULL, NULL, NULL),
	(152015039, NULL, 'SITI NOERMAZATI ANGGINI', NULL, NULL, NULL, NULL, NULL),
	(152015042, NULL, 'Faris Dewantoro', NULL, NULL, NULL, NULL, NULL),
	(152015043, NULL, 'hasbi muhammad', NULL, NULL, NULL, NULL, NULL),
	(152015044, NULL, 'ricky ramdani', NULL, NULL, NULL, NULL, NULL),
	(152015045, NULL, 'Rachma Apriliyani', NULL, NULL, NULL, NULL, NULL),
	(152015046, NULL, 'Sindri Susanti', NULL, NULL, NULL, NULL, NULL),
	(152015049, NULL, 'Raden Memo Muhammad Ilham', NULL, NULL, NULL, NULL, NULL),
	(152015051, NULL, 'Rizka Hanifah Fauziah', NULL, NULL, NULL, NULL, NULL),
	(152015054, NULL, 'raenovaldy akhmad eliskan', NULL, NULL, NULL, NULL, NULL),
	(152015055, NULL, 'dewi septia rini', NULL, NULL, NULL, NULL, NULL),
	(152015056, NULL, 'Rifqi Finaldy', NULL, NULL, NULL, NULL, NULL),
	(152015057, NULL, 'Mohamad Rezaldy Fahrudin', NULL, NULL, NULL, NULL, NULL),
	(152015059, NULL, 'Nopan Anggara', NULL, NULL, NULL, NULL, NULL),
	(152015061, NULL, 'M. Fiqri', NULL, NULL, NULL, NULL, NULL),
	(152015063, NULL, 'petrick kakalang', NULL, NULL, NULL, NULL, NULL),
	(152015064, NULL, 'Nadya Alanys E', NULL, NULL, NULL, NULL, NULL),
	(152015065, NULL, 'audhiya putri m', NULL, NULL, NULL, NULL, NULL),
	(152015066, NULL, 'Reza Mahandika', NULL, NULL, NULL, NULL, NULL),
	(152015070, NULL, 'Regiyan Irvan Susantyo', NULL, NULL, NULL, NULL, NULL),
	(152015071, NULL, 'Ajie Putra Perdana', NULL, NULL, NULL, NULL, NULL),
	(152015074, NULL, 'Rachmat Fauzi', NULL, NULL, NULL, NULL, NULL),
	(152015075, NULL, 'naoval muhamad fajar', NULL, NULL, NULL, NULL, NULL),
	(152016001, 123123, 'Giani Alivia', 'L', '2016-08-22', '089292393494', 'Bandung', NULL),
	(152016002, 123123, 'Yayan', 'L', '2016-08-22', '089292393494', 'Bandung', NULL);
/*!40000 ALTER TABLE `mahasiswa` ENABLE KEYS */;


-- Dumping structure for table inventaris.monitoring
CREATE TABLE IF NOT EXISTS `monitoring` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_ruang` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table inventaris.monitoring: ~0 rows (approximately)
/*!40000 ALTER TABLE `monitoring` DISABLE KEYS */;
INSERT INTO `monitoring` (`id`, `nama_ruang`, `alamat`) VALUES
	(1, '2301', 'http://192.168.43.1:8080/video');
/*!40000 ALTER TABLE `monitoring` ENABLE KEYS */;


-- Dumping structure for table inventaris.nilai_harian
CREATE TABLE IF NOT EXISTS `nilai_harian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pertemuan` int(11) DEFAULT NULL,
  `nrp` int(11) DEFAULT NULL,
  `praktikum` varchar(50) DEFAULT NULL,
  `periode` varchar(50) DEFAULT NULL,
  `tp` int(11) DEFAULT NULL,
  `th` int(11) DEFAULT NULL,
  `ta` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Dumping data for table inventaris.nilai_harian: 4 rows
/*!40000 ALTER TABLE `nilai_harian` DISABLE KEYS */;
INSERT INTO `nilai_harian` (`id`, `pertemuan`, `nrp`, `praktikum`, `periode`, `tp`, `th`, `ta`) VALUES
	(1, 1, 152015005, 'PEMDAS', '2016/2017', 90, 100, 90),
	(2, 1, 152013001, 'PEMDAS', '2016/2017', 100, 100, 100),
	(3, 1, 152015005, 'ORKOM', '2017/2018', 100, 100, 100),
	(9, 2, 152015005, 'PEMDAS', '2016/2017', 100, 100, 100);
/*!40000 ALTER TABLE `nilai_harian` ENABLE KEYS */;


-- Dumping structure for table inventaris.openregister
CREATE TABLE IF NOT EXISTS `openregister` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `praktikum` varchar(50) DEFAULT NULL,
  `periode` varchar(50) DEFAULT NULL,
  `cv` enum('Y','N') DEFAULT NULL,
  `transkrip` enum('Y','N') DEFAULT NULL,
  `foto` enum('Y','N') DEFAULT NULL,
  `note` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Dumping data for table inventaris.openregister: ~2 rows (approximately)
/*!40000 ALTER TABLE `openregister` DISABLE KEYS */;
INSERT INTO `openregister` (`id`, `praktikum`, `periode`, `cv`, `transkrip`, `foto`, `note`) VALUES
	(12, 'ORKOM', '2016/2017', 'Y', 'Y', 'Y', 'Pendaftaran dibuka hingga 30 Agustus 2016'),
	(15, 'PEMDAS', '2016/2017', 'Y', 'N', 'N', '');
/*!40000 ALTER TABLE `openregister` ENABLE KEYS */;


-- Dumping structure for table inventaris.peminjaman
CREATE TABLE IF NOT EXISTS `peminjaman` (
  `id_peminjaman` varchar(50) DEFAULT NULL,
  `type_peminjaman` enum('Praktikum','Penelitian') DEFAULT NULL,
  `kode_barang` varchar(11) DEFAULT NULL,
  `kode_peminjam` int(11) DEFAULT NULL,
  `tgl_pinjam` date DEFAULT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `status_pinjam` enum('Belum Dikembalikan','Sudah Dikembalikan') DEFAULT NULL,
  `kondisi_kembali` enum('Baik','Buruk') DEFAULT NULL,
  KEY `FK_peminjaman_barang` (`kode_barang`),
  CONSTRAINT `FK_peminjaman_barang` FOREIGN KEY (`kode_barang`) REFERENCES `barang` (`serial_num`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table inventaris.peminjaman: ~0 rows (approximately)
/*!40000 ALTER TABLE `peminjaman` DISABLE KEYS */;
/*!40000 ALTER TABLE `peminjaman` ENABLE KEYS */;


-- Dumping structure for table inventaris.praktikum
CREATE TABLE IF NOT EXISTS `praktikum` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prak` varchar(50) DEFAULT NULL,
  `nrp` int(11) DEFAULT NULL,
  `periode` varchar(50) DEFAULT NULL,
  `kelas` varchar(50) DEFAULT NULL,
  `nilai_harian` int(11) DEFAULT NULL,
  `uts` int(11) DEFAULT NULL,
  `uas` int(11) DEFAULT NULL,
  `project` int(11) DEFAULT NULL,
  `absen` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `approve` enum('Y','R') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

-- Dumping data for table inventaris.praktikum: 3 rows
/*!40000 ALTER TABLE `praktikum` DISABLE KEYS */;
INSERT INTO `praktikum` (`id`, `prak`, `nrp`, `periode`, `kelas`, `nilai_harian`, `uts`, `uas`, `project`, `absen`, `total`, `approve`) VALUES
	(1, 'PEMDAS', 152015005, '2016/2017', 'B', 60, 100, 90, 85, 60, 80, 'Y'),
	(13, 'PEMDAS', 152015001, '2016/2017', 'B', 80, 100, 100, 100, 60, 80, 'Y'),
	(20, 'PEMDAS', 152013003, '2016/2017', 'B', 70, 80, 70, 80, 70, 80, 'Y');
/*!40000 ALTER TABLE `praktikum` ENABLE KEYS */;


-- Dumping structure for table inventaris.presentase_nilai
CREATE TABLE IF NOT EXISTS `presentase_nilai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `praktikum` varchar(50) NOT NULL DEFAULT '0',
  `periode` varchar(50) NOT NULL DEFAULT '0',
  `nilai_harian` int(11) DEFAULT NULL,
  `uts` int(11) DEFAULT NULL,
  `uas` int(11) DEFAULT NULL,
  `project` int(11) DEFAULT NULL,
  `absensi` int(11) DEFAULT NULL,
  `tp` int(11) DEFAULT NULL,
  `th` int(11) DEFAULT NULL,
  `ta` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table inventaris.presentase_nilai: ~0 rows (approximately)
/*!40000 ALTER TABLE `presentase_nilai` DISABLE KEYS */;
INSERT INTO `presentase_nilai` (`id`, `praktikum`, `periode`, `nilai_harian`, `uts`, `uas`, `project`, `absensi`, `tp`, `th`, `ta`) VALUES
	(6, 'PEMDAS', '2016/2017', 10, 20, 30, 30, 10, NULL, NULL, NULL);
/*!40000 ALTER TABLE `presentase_nilai` ENABLE KEYS */;


-- Dumping structure for table inventaris.requestpenelitian
CREATE TABLE IF NOT EXISTS `requestpenelitian` (
  `kode_pinjam` varchar(50) NOT NULL,
  `id_peminjam` int(11) DEFAULT NULL,
  `alat1` varchar(50) DEFAULT NULL,
  `alat2` varchar(50) DEFAULT NULL,
  `alat3` varchar(50) DEFAULT NULL,
  `alat4` varchar(50) DEFAULT NULL,
  `alat5` varchar(50) DEFAULT NULL,
  `alat6` varchar(50) DEFAULT NULL,
  `alat7` varchar(50) DEFAULT NULL,
  `alat8` varchar(50) DEFAULT NULL,
  `alat9` varchar(50) DEFAULT NULL,
  `alat10` varchar(50) DEFAULT NULL,
  `status` enum('Approve','No') DEFAULT 'No',
  `tanggal_request` datetime DEFAULT NULL,
  `tanggal_confirm` datetime DEFAULT NULL,
  PRIMARY KEY (`kode_pinjam`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table inventaris.requestpenelitian: ~0 rows (approximately)
/*!40000 ALTER TABLE `requestpenelitian` DISABLE KEYS */;
/*!40000 ALTER TABLE `requestpenelitian` ENABLE KEYS */;


-- Dumping structure for table inventaris.requestpraktikum
CREATE TABLE IF NOT EXISTS `requestpraktikum` (
  `kode_pinjam` varchar(50) DEFAULT NULL,
  `id_peminjam` int(11) DEFAULT NULL,
  `nama_praktikum` varchar(50) DEFAULT NULL,
  `periode` varchar(50) DEFAULT NULL,
  `alat1` varchar(50) DEFAULT NULL,
  `alat2` varchar(50) DEFAULT NULL,
  `alat3` varchar(50) DEFAULT NULL,
  `alat4` varchar(50) DEFAULT NULL,
  `alat5` varchar(50) DEFAULT NULL,
  `alat6` varchar(50) DEFAULT NULL,
  `alat7` varchar(50) DEFAULT NULL,
  `alat8` varchar(50) DEFAULT NULL,
  `alat9` varchar(50) DEFAULT NULL,
  `alat10` varchar(50) DEFAULT NULL,
  `status` enum('Approve','No') DEFAULT 'No',
  `tanggal_request` datetime DEFAULT NULL,
  `tanggal_confirm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table inventaris.requestpraktikum: ~0 rows (approximately)
/*!40000 ALTER TABLE `requestpraktikum` DISABLE KEYS */;
/*!40000 ALTER TABLE `requestpraktikum` ENABLE KEYS */;


-- Dumping structure for table inventaris.req_perbaikan
CREATE TABLE IF NOT EXISTS `req_perbaikan` (
  `id_perbaikan` int(11) NOT NULL AUTO_INCREMENT,
  `kode_barang` varchar(50) DEFAULT NULL,
  `info_perbaikan` varchar(50) DEFAULT NULL,
  `status` enum('Sudah Diperbaiki','Belum Diperbaiki') DEFAULT NULL,
  `tgl_perbaikan` date DEFAULT NULL,
  PRIMARY KEY (`id_perbaikan`),
  KEY `FK_req_perbaikan_barang` (`kode_barang`),
  CONSTRAINT `FK_req_perbaikan_barang` FOREIGN KEY (`kode_barang`) REFERENCES `barang` (`serial_num`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table inventaris.req_perbaikan: ~0 rows (approximately)
/*!40000 ALTER TABLE `req_perbaikan` DISABLE KEYS */;
/*!40000 ALTER TABLE `req_perbaikan` ENABLE KEYS */;


-- Dumping structure for table inventaris.topik_ta
CREATE TABLE IF NOT EXISTS `topik_ta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(50) DEFAULT NULL,
  `peserta` varchar(50) DEFAULT NULL,
  `pembimbing2` varchar(50) DEFAULT NULL,
  `pembimbing1` varchar(50) DEFAULT NULL,
  `status` enum('Berlangsung','Disarankan') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table inventaris.topik_ta: ~3 rows (approximately)
/*!40000 ALTER TABLE `topik_ta` DISABLE KEYS */;
INSERT INTO `topik_ta` (`id`, `judul`, `peserta`, `pembimbing2`, `pembimbing1`, `status`) VALUES
	(1, 'Lorem Ipsum lorem Ipsum Lorem Ipsum', 'Yayan Yanuari', 'Jasman Pardede, ST., MT.', 'Milda Gustiana H., Ir., M.Eng.', 'Berlangsung'),
	(7, 'Lorem Ipsum Lorem Ipsum Lrem Ipsum #2', 'Sandha Rineka', 'Rio Korio Utoro, S.T., M.T.', 'Irma Amelia, S.T., M.T.', 'Berlangsung'),
	(8, 'Lorem Ipsum Lorem Ipsum Lrem Ipsum', NULL, NULL, NULL, 'Disarankan');
/*!40000 ALTER TABLE `topik_ta` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
