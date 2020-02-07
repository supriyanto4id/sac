-- phpMyAdmin SQL Dump
-- version 4.0.10.20
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Sep 24, 2018 at 04:25 PM
-- Server version: 5.1.72-community
-- PHP Version: 7.1.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sac1`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_bpjs`
--

CREATE TABLE IF NOT EXISTS `data_bpjs` (
  `id_databpjs` int(10) NOT NULL AUTO_INCREMENT,
  `no_bpjs` int(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `id_karyawan` int(10) NOT NULL,
  PRIMARY KEY (`id_databpjs`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=69 ;

--
-- Dumping data for table `data_bpjs`
--

INSERT INTO `data_bpjs` (`id_databpjs`, `no_bpjs`, `status`, `kelas`, `id_karyawan`) VALUES
(62, 423432, 'Anak', 'BPJS Kelas 1', 1),
(63, 8949823, 'Anak', 'BPJS Kelas 1', 1),
(64, 340924984, 'Anak', 'BPJS Kelas 1', 1),
(65, 1213113, 'Istri', 'BPJS Kelas 1', 5),
(67, 2312321, 'Istri', 'BPJS Kelas 1', 6),
(68, 34342, 'Istri', 'BPJS Kelas 1', 8);

-- --------------------------------------------------------

--
-- Table structure for table `data_karyawan`
--

CREATE TABLE IF NOT EXISTS `data_karyawan` (
  `id_karyawan` int(10) NOT NULL AUTO_INCREMENT,
  `nama_karyawan` varchar(100) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` varchar(10) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `tgl_masuk` varchar(10) NOT NULL,
  `tgl_keluar` varchar(10) NOT NULL,
  `no_npwp` int(50) NOT NULL,
  `no_bpjs` int(50) NOT NULL,
  `status` varchar(100) NOT NULL,
  `id_jabatan` varchar(50) NOT NULL,
  `id_user` int(11) NOT NULL,
  `job_disk` varchar(100) NOT NULL,
  `direktur_cek` varchar(30) NOT NULL,
  `hrd_cek` int(10) NOT NULL,
  PRIMARY KEY (`id_karyawan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `data_karyawan`
--

INSERT INTO `data_karyawan` (`id_karyawan`, `nama_karyawan`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `alamat`, `agama`, `tgl_masuk`, `tgl_keluar`, `no_npwp`, `no_bpjs`, `status`, `id_jabatan`, `id_user`, `job_disk`, `direktur_cek`, `hrd_cek`) VALUES
(7, 'Supriyanto', 'Malang', '25/09/1992', 'Laki-laki', 'malang', 'islam', '21/02/2012', '', 9999, 9999, 'Karyawan Kontrak', '6', 5, 'melakukan monitoring karyawan, dan manajemen perusahaan', '10', 10),
(8, 'malik madani', 'Malang', '11/11/2011', 'Laki-laki', 'Jetis', 'islam', '22/02/2022', '', 322, 21, 'Karyawan Kontrak', '6', 8, 'kkkakak', '10', 10),
(9, 'Afri', 'muara ancalong', '22/02/2022', 'Laki-laki', 'jetis', 'islam', '12/02/2012', '', 9990909, 9099009, 'Karyawan Kontrak', '6', 9, 'dhahsdhaj', '10', 12),
(10, 'Mildy', 'samarina', '23/02/2032', 'Laki-laki', 'makang', 'islam', '21/02/2012', '', 923891, 19281, 'Karyawan Kontrak', '7', 8, 'kkakka', '12', 12),
(11, 'Alika', 'muara ancalong', '12/02/2022', 'Laki-laki', 'jetis', 'islam', '12/02/2012', '', 82999, 92929, 'Karyawan Kontrak', '8', 8, 'dad', '10', 12),
(12, 'silda', 'muara ancalong', '12/02/2022', 'Laki-laki', 'jetis', 'islam', '12/02/2022', '', 929, 91929, 'Karyawan Kontrak', '7', 9, 'dajda', '10', 12),
(13, 'dimas', 'samarinda', '22/02/2022', 'Laki-laki', 'Jetis', 'islam', '22/02/2022', '', 2131, 888988, 'Karyawan Kontrak', '6', 8, 'hdahd', '12', 12),
(14, 'jaka muharizki', 'Malang', '12/02/2090', 'Laki-laki', 'Jetis', 'islam', '12/02/2022', '', 990909, 9909, 'Karyawan Kontrak', '7', 9, 'djajd', '10', 12);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User'),
(3, 'hrd', 'human resource '),
(4, 'cabang', 'cabang perusahhan'),
(5, 'direktur', 'direktur'),
(6, 'keuangan', 'keuangan');

-- --------------------------------------------------------

--
-- Table structure for table `inventaris`
--

CREATE TABLE IF NOT EXISTS `inventaris` (
  `id_barang` int(10) NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `inventaris`
--

INSERT INTO `inventaris` (`id_barang`, `nama_barang`, `keterangan`) VALUES
(3, 'komputer', 'i5 gen 4, GTX 4000'),
(4, 'Speker', 'full bass'),
(5, 'layar lcd LG', 'LG'),
(6, 'tp link usb', 'TL-wn722n');

-- --------------------------------------------------------

--
-- Table structure for table `inventaris_karyawan`
--

CREATE TABLE IF NOT EXISTS `inventaris_karyawan` (
  `id_inventaris_karyawan` int(10) NOT NULL AUTO_INCREMENT,
  `id_barang` int(10) NOT NULL,
  `id_karyawan` int(10) NOT NULL,
  PRIMARY KEY (`id_inventaris_karyawan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `inventaris_karyawan`
--

INSERT INTO `inventaris_karyawan` (`id_inventaris_karyawan`, `id_barang`, `id_karyawan`) VALUES
(23, 3, 2),
(26, 3, 1),
(27, 4, 1),
(28, 6, 1),
(29, 5, 1),
(32, 3, 1),
(33, 4, 1),
(34, 4, 5),
(46, 6, 6),
(47, 6, 6),
(48, 4, 8),
(49, 5, 8);

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE IF NOT EXISTS `jabatan` (
  `id_jabatan` int(10) NOT NULL AUTO_INCREMENT,
  `nama_jabatan` varchar(50) NOT NULL,
  `gaji_pokok` varchar(100) NOT NULL,
  `t_jabatan` varchar(100) NOT NULL,
  `t_bbm` varchar(100) NOT NULL,
  `t_pulsa` varchar(100) NOT NULL,
  `t_perumahan` varchar(100) NOT NULL,
  `uang_makan` varchar(100) NOT NULL,
  `insentif` varchar(100) NOT NULL,
  `job_disk` varchar(100) NOT NULL,
  `id_karyawan` int(10) NOT NULL,
  PRIMARY KEY (`id_jabatan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nama_jabatan`, `gaji_pokok`, `t_jabatan`, `t_bbm`, `t_pulsa`, `t_perumahan`, `uang_makan`, `insentif`, `job_disk`, `id_karyawan`) VALUES
(6, 'Kepala Cabang', '10.000.000,00', '2.500.000,00', '200.000,00', '250.000,00', '2.450.000,00', '500.000,00', '3.450.000,00', 'asik', 1),
(7, 'Direktur keuangan', '8.000.000,00', '1.000.000,00', '3.000,00', '0,01', '0,01', '0,01', '0,01', 'makan', 1),
(8, 'GM', '15.000.000,00', '2.000.000,00', '500.000,00', '200.000,00', '0,01', '112.112,21', '0,01', 'managemen', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `resign_history`
--

CREATE TABLE IF NOT EXISTS `resign_history` (
  `id_resign` int(10) NOT NULL AUTO_INCREMENT,
  `no_surat` varchar(100) NOT NULL,
  `alasan_keluar` varchar(100) NOT NULL,
  `tanggal_resign` varchar(50) NOT NULL,
  `id_karyawan` int(10) NOT NULL,
  PRIMARY KEY (`id_resign`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `resign_history`
--

INSERT INTO `resign_history` (`id_resign`, `no_surat`, `alasan_keluar`, `tanggal_resign`, `id_karyawan`) VALUES
(5, '1212/Person-Smd/PK/2018', 'sdsasdda', '20/01/2082', 1),
(6, '3ew/Person-Smd/PK/2018', 'aa', '09/09/2099', 2),
(7, '121212/Person-Smd/PK/2018', 'adsdadsa', '22/02/2022', 6),
(8, '132/Person-Smd/PK/2018', 'as', '', 7),
(9, '132/Person-Smd/PK/2018', 'as', '', 7),
(10, '132/Person-Smd/PK/2018', 'as', '', 7),
(11, '2312/Person-Smd/PK/2018', 'aa', '', 7),
(12, '13231/Person-Smd/PK/2018', 'dadas', '', 8),
(13, '13213/Person-Smd/PK/2018', 'coba aja', '', 8);

-- --------------------------------------------------------

--
-- Table structure for table `sp_history`
--

CREATE TABLE IF NOT EXISTS `sp_history` (
  `id_sp` int(10) NOT NULL AUTO_INCREMENT,
  `no_surat` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `tanggal_sp` varchar(20) NOT NULL,
  `id_karyawan` int(10) NOT NULL,
  PRIMARY KEY (`id_sp`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `sp_history`
--

INSERT INTO `sp_history` (`id_sp`, `no_surat`, `keterangan`, `tanggal_sp`, `id_karyawan`) VALUES
(8, '123444/Smd-SAC/SPI/2018', 'Surat Peringatan I', '20 September 2018', 1),
(9, '1212/Smd-SAC/SPII/2018', 'Surat Peringatan II', '20 September 2018', 1),
(10, '1212/Smd-SAC/SPI/2018', 'Surat Peringatan I', '21 September 2018', 2),
(11, 'aaaa/Smd-SAC/SPII/2018', 'Surat Peringatan II', '21 September 2018', 2),
(12, '21313/Smd-SAC/SPI/2018', 'Surat Peringatan I', '22 September 2018', 7),
(13, '1212/Smd-SAC/SPIII/2018', 'Surat Peringatan III', '22 September 2018', 7),
(14, '31231/Smd-SAC/SPI/2018', 'Surat Peringatan I', '24 September 2018', 8);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(254) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', NULL, NULL, NULL, NULL, 1268889823, 1535986881, 1, 'Admin', 'istrator', 'ADMIN', '0'),
(5, '::1', 'hrd@sac.com', '$2y$08$CdJyHzqlTZvH2SKxL9ysu.p0wzcilwAA9hy.dkcuQuAHYaP5uDZiO', NULL, 'hrd@sac.com', NULL, NULL, NULL, NULL, 1537110998, 1537806276, 1, 'Mildy', 'Zahra', 'SMR', '081232884901'),
(6, '::1', 'direktur@sac.com', '$2y$08$84NHZDo1GL5rRE/C6c5ZpOPPtNK8Cro9u7sbyyJYqA94hly3wgCOu', NULL, 'direktur@sac.com', NULL, NULL, NULL, NULL, 1537111270, 1537805671, 1, 'Mildy', 'Fathiah', 'SAC', '081232884901'),
(7, '::1', 'keuangan@sac.com', '$2y$08$EoDarnfJE7g5e74KAPpsbuWIwzuShkp6DfGdoP.9F5ylN10Ulwmq6', NULL, 'keuangan@sac.com', NULL, NULL, NULL, NULL, 1537111343, 1537622383, 1, 'Mildy', 'Fathiah', 'SMR', '081232884901'),
(8, '::1', 'cabang_smr@sac.com', '$2y$08$5EAUJI9i/xZtgh8EwEKWNOzA807C0EZg4StQ0XkdUKvVB26BX0cpW', NULL, 'cabang_smr@sac.com', NULL, NULL, NULL, NULL, 1537111615, 1537805700, 1, 'Mildy', 'Fathiah', 'SMR', '081232884901'),
(9, '::1', 'cabang_bpp@sac.com', '$2y$08$.Ro7lufX2K0fzqPPCIeEO.1szPl1EC8N.VfdHo/91wezN.e3SLlv6', NULL, 'cabang_bpp@sac.com', NULL, NULL, NULL, NULL, 1537602705, 1537627643, 1, 'Supriyanto', 'Supriyanto', 'BPP', '081232884901');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=55 ;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(22, 1, 1),
(51, 5, 1),
(52, 5, 3),
(41, 6, 5),
(53, 7, 6),
(49, 8, 4),
(54, 9, 4);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
