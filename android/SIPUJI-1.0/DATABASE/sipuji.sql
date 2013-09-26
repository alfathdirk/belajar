-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 12, 2013 at 05:54 AM
-- Server version: 5.1.66-community
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sipuji`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_loket`
--

CREATE TABLE IF NOT EXISTS `tbl_loket` (
  `PK` int(11) DEFAULT '0',
  `NO_URUT` int(11) DEFAULT '0',
  `TGL_UJI` date DEFAULT NULL,
  `BULANA` int(11) DEFAULT NULL,
  `NO_KENDARAAN` varchar(50) DEFAULT NULL,
  `NO_UJI` varchar(50) DEFAULT NULL,
  `PEMILIK` varchar(255) DEFAULT NULL,
  `ALAMAT` varchar(255) DEFAULT NULL,
  `BKP` varchar(50) DEFAULT NULL,
  `JABATAN` varchar(50) DEFAULT NULL,
  `JENIS1` varchar(50) DEFAULT NULL,
  `JENIS` varchar(50) DEFAULT NULL,
  `RJENIS` int(11) DEFAULT '0',
  `STATUS` varchar(50) DEFAULT NULL,
  `RSTATUS` int(11) DEFAULT '0',
  `JENIS_PENGUJIAN` varchar(50) DEFAULT NULL,
  `RETRIBUSI1` int(11) DEFAULT '0',
  `RETRIBUSI2` int(11) DEFAULT '0',
  `RETRIBUSI3` int(11) DEFAULT '0',
  `RETRIBUSI4` int(11) DEFAULT '0',
  `RETRIBUSI5` int(11) DEFAULT '0',
  `HABIS_UJI` date DEFAULT NULL,
  `BULANB` int(11) DEFAULT NULL,
  `HABIS_UJI_LALU` date DEFAULT NULL,
  `GANTI` varchar(50) DEFAULT NULL,
  `PERIODE` int(11) DEFAULT '0',
  `BULAN` int(11) DEFAULT '0',
  `DENDA` int(11) DEFAULT '0',
  `RHILANG` int(11) DEFAULT '0',
  `RRUSAK` int(11) DEFAULT '0',
  `SHOWN` varchar(50) DEFAULT NULL,
  `LOCKED` tinyint(1) DEFAULT NULL,
  `DONE` int(1) NOT NULL DEFAULT '1',
  KEY `GANTI` (`GANTI`),
  KEY `JENIS` (`JENIS`),
  KEY `JENIS_PENGUJIAN` (`JENIS_PENGUJIAN`),
  KEY `JENIS1` (`JENIS1`),
  KEY `TGL_UJI` (`TGL_UJI`),
  KEY `NO_UJI` (`NO_UJI`),
  KEY `NO_URUT` (`NO_URUT`),
  KEY `BULANA` (`BULANA`),
  KEY `SHOWN` (`SHOWN`),
  KEY `PK` (`PK`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pemilik`
--

CREATE TABLE IF NOT EXISTS `tbl_pemilik` (
  `PK` int(11) NOT NULL AUTO_INCREMENT,
  `NO_ID` varchar(50) DEFAULT NULL,
  `PEMILIK` varchar(50) NOT NULL,
  `ALAMAT` varchar(100) NOT NULL,
  PRIMARY KEY (`PK`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prauji`
--

CREATE TABLE IF NOT EXISTS `tbl_prauji` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NO_KENDARAAN` varchar(50) DEFAULT NULL,
  `user_id` int(11) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `ID` (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sifat_kendaraan`
--

CREATE TABLE IF NOT EXISTS `tbl_sifat_kendaraan` (
  `PK` int(11) DEFAULT '0',
  `NO_UJI` varchar(50) DEFAULT NULL,
  `MEREK` varchar(50) DEFAULT NULL,
  `TYPE` varchar(50) DEFAULT NULL,
  `TAHUN` int(11) DEFAULT '0',
  `PERTAMA_UJI` date DEFAULT NULL,
  `NO_CHASIS` varchar(100) DEFAULT NULL,
  `NO_MESIN` varchar(100) DEFAULT NULL,
  `JAS` varchar(50) DEFAULT NULL,
  `JAS2` varchar(50) DEFAULT NULL,
  `JAS3` varchar(50) DEFAULT NULL,
  `UPP` varchar(50) DEFAULT NULL,
  `UPL` varchar(50) DEFAULT NULL,
  `UPT` varchar(50) DEFAULT NULL,
  `JENIS1` varchar(50) DEFAULT NULL,
  `JENIS` varchar(50) DEFAULT NULL,
  `JENIS_PENGUJIAN` varchar(50) DEFAULT 'Baru',
  `BAHAN` varchar(50) DEFAULT NULL,
  `BTD` varchar(50) DEFAULT NULL,
  `BTB` varchar(50) DEFAULT NULL,
  `PEMILIK` varchar(50) DEFAULT NULL,
  `ALAMAT` varchar(100) DEFAULT NULL,
  `KELAS` varchar(50) DEFAULT NULL,
  `KETERANGAN` varchar(50) DEFAULT NULL,
  `P` varchar(50) DEFAULT NULL,
  `Q` varchar(50) DEFAULT NULL,
  `R` varchar(50) DEFAULT NULL,
  `B` varchar(50) DEFAULT NULL,
  `PENGIRIMAN` varchar(50) DEFAULT NULL,
  `NO_KENDARAAN` varchar(50) DEFAULT NULL,
  `UK` varchar(50) DEFAULT NULL,
  `BBM` varchar(50) DEFAULT NULL,
  `STATUS` varchar(50) DEFAULT NULL,
  `SHOWN` varchar(1) NOT NULL DEFAULT 'Y',
  KEY `tbl_sifat_kendaraanPK` (`PK`),
  KEY `MEREK` (`MEREK`),
  KEY `BBM` (`BBM`),
  KEY `TAHUN` (`TAHUN`),
  KEY `JENIS` (`JENIS`),
  KEY `NO_UJI` (`NO_UJI`),
  KEY `SHOWN` (`SHOWN`),
  KEY `JENIS_PENGUJIAN` (`JENIS_PENGUJIAN`),
  KEY `TYPE` (`TYPE`),
  KEY `KETERANGAN` (`KETERANGAN`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_uji`
--

CREATE TABLE IF NOT EXISTS `tbl_uji` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NO_KENDARAAN` varchar(50) DEFAULT NULL,
  `user_id` int(11) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `ID` (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `unique_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `username` varchar(32) NOT NULL,
  `encrypted_password` varchar(255) NOT NULL,
  `salt` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`unique_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`unique_id`, `name`, `username`, `encrypted_password`, `salt`, `created_at`, `updated_at`) VALUES
(1, 'Iwan Threads', 'ithreads', 'nYAO8NlgAauLd8zaLE1l7Eu8Gls2YzczNzVhNjIx', '6c7375a621', '2013-07-06 06:23:57', NULL),
(2, 'Admnistrator', 'admin', 'dJhIac3Zb0EiYAtHQHKNSJwZV/g0Y2E4OTE1Nzcz', '4ca8915773', '2013-07-06 09:39:52', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
