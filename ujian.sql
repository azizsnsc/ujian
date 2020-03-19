-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2020 at 05:27 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ujian`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `IDAbsensi` int(5) NOT NULL,
  `IDSoal` int(5) NOT NULL,
  `IDSiswa` int(5) NOT NULL,
  `JamMengerjakan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `photo_siswa` varchar(100) NOT NULL,
  `kelas` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `IDSiswa` int(5) NOT NULL,
  `nisn` varchar(11) NOT NULL,
  `no_peserta` varchar(22) NOT NULL,
  `nama_siswa` varchar(256) NOT NULL,
  `jk` varchar(2) NOT NULL,
  `kelas` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`IDSiswa`, `nisn`, `no_peserta`, `nama_siswa`, `jk`, `kelas`) VALUES
(1, '0011381604', '4-20-03-23-008-0001-8', 'Achmad Syafiq Reyfaldo', 'L', 'XII TBSM 1'),
(2, '0011421145', '4-20-03-23-008-0002-7', 'Ahmad Dhofir', 'L', 'XII TBSM 1'),
(3, '0020945843', '4-20-03-23-008-0003-6', 'Ahnaf Rifqi Mu\'afiy', 'L', 'XII TBSM 1'),
(4, '0020280420', '4-20-03-23-008-0004-5', 'Aji Wijananto', 'L', 'XII TBSM 1'),
(5, '0020142529', '4-20-03-23-008-0005-4', 'Akmal Huda', 'L', 'XII TBSM 1'),
(6, '0011684740', '4-20-03-23-008-0006-3', 'Aldian Handriansyah', 'L', 'XII TBSM 1'),
(7, '0029916253', '4-20-03-23-008-0007-2', 'Benny Ardian', 'L', 'XII TBSM 1'),
(8, '0025284001', '4-20-03-23-008-0008-9', 'Defa Lucio Putra', 'L', 'XII TBSM 1'),
(9, '0019325157', '4-20-03-23-008-0009-8', 'Dinda Kurnia Putra', 'L', 'XII TBSM 1'),
(10, '0012044229', '4-20-03-23-008-0010-7', 'Firman Fikri Prastyo', 'L', 'XII TBSM 1'),
(11, '0020223141', '4-20-03-23-008-0011-6', 'Fito Agil Liyanto', 'L', 'XII TBSM 1'),
(12, '0020609467', '4-20-03-23-008-0012-5', 'Gazely Gospel Nuryanto', 'L', 'XII TBSM 1'),
(13, '0014173165', '4-20-03-23-008-0013-4', 'Hidayat Nurwahid', 'L', 'XII TBSM 1'),
(14, '0011727242', '4-20-03-23-008-0014-3', 'Imam Ardiyanto', 'L', 'XII TBSM 1'),
(15, '0028835138', '4-20-03-23-008-0015-2', 'Ivan Hermawan', 'L', 'XII TBSM 1'),
(16, '0021141750', '4-20-03-23-008-0016-9', 'Jeki Wahyu Budiarto', 'L', 'XII TBSM 1'),
(17, '0013362432', '4-20-03-23-008-0017-8', 'Johan Adi Sunarso', 'L', 'XII TBSM 1'),
(18, '0020827986', '4-20-03-23-008-0018-7', 'Karen Saiful', 'L', 'XII TBSM 1'),
(19, '0020041645', '4-20-03-23-008-0019-6', 'Muhammad Fawas Firnanda', 'L', 'XII TBSM 1'),
(20, '0029667999', '4-20-03-23-008-0020-5', 'Muhammad Luki Permana Saputra', 'L', 'XII TBSM 1'),
(21, '0020041636', '4-20-03-23-008-0021-4', 'Muhammad Salsa Zanuar', 'L', 'XII TBSM 1'),
(22, '0020421617', '4-20-03-23-008-0022-3', 'Muhammad Satria Juan Islami', 'L', 'XII TBSM 1'),
(23, '0011962744', '4-20-03-23-008-0023-2', 'Riki Indra Saputra', 'L', 'XII TBSM 1'),
(24, '0020142538', '4-20-03-23-008-0024-9', 'Riski Saputra', 'L', 'XII TBSM 1'),
(25, '0021005695', '4-20-03-23-008-0025-8', 'Satrio Nugroho', 'L', 'XII TBSM 1'),
(26, '0024920735', '4-20-03-23-008-0026-7', 'Sigit Wahyu Illalal', 'L', 'XII TBSM 1'),
(27, '0012085330', '4-20-03-23-008-0027-6', 'Teja Bayu Reksa', 'L', 'XII TBSM 1'),
(28, '0011381619', '4-20-03-23-008-0028-5', 'Tri Yoga Ifan Saputra', 'L', 'XII TBSM 1'),
(29, '0020367839', '4-20-03-23-008-0029-4', 'Yoga Wahyu Saputra', 'L', 'XII TBSM 1'),
(30, '0011427505', '4-20-03-23-008-0030-3', 'Yuda Ardiansah', 'L', 'XII TBSM 1'),
(31, '0011563967', '4-20-03-23-008-0031-2', 'Ahmad Anang Ma\'ruf', 'L', 'XII TBSM 2'),
(32, '0018185752', '4-20-03-23-008-0032-9', 'Ahmad Ilham Fardani', 'L', 'XII TBSM 2'),
(33, '0020049258', '4-20-03-23-008-0033-8', 'Ahmad Rofii', 'L', 'XII TBSM 2'),
(34, '0020204419', '4-20-03-23-008-0034-7', 'Ahmat Abdul Riyanto', 'L', 'XII TBSM 2'),
(35, '0029015826', '4-20-03-23-008-0035-6', 'Al Adif Firmansyah', 'L', 'XII TBSM 2'),
(36, '0023203704', '4-20-03-23-008-0036-5', 'Andi Setiawan', 'L', 'XII TBSM 2'),
(37, '0011969933', '4-20-03-23-008-0037-4', 'Andika Viko Prasetyo', 'L', 'XII TBSM 2'),
(38, '0021046993', '4-20-03-23-008-0038-3', 'Anjhani Ranggha Pengukir', 'L', 'XII TBSM 2'),
(39, '0016904454', '4-20-03-23-008-0039-2', 'Arief Fitrah Romadhan', 'L', 'XII TBSM 2'),
(40, '0029049821', '4-20-03-23-008-0040-9', 'Burhan Mudhofar', 'L', 'XII TBSM 2'),
(41, '0037299652', '4-20-03-23-008-0041-8', 'Cahyo Ragil Maulana', 'L', 'XII TBSM 2'),
(42, '0021008470', '4-20-03-23-008-0042-7', 'Daebby Cahya Setiawan', 'L', 'XII TBSM 2'),
(43, '0011344245', '4-20-03-23-008-0043-6', 'David Hasan Abdullah', 'L', 'XII TBSM 2'),
(44, '0020609468', '4-20-03-23-008-0044-5', 'Dimas Darwinto Saputro', 'L', 'XII TBSM 2'),
(45, '0027786004', '4-20-03-23-008-0045-4', 'Ferdian Akbar Dwi Prabowo', 'L', 'XII TBSM 2'),
(46, '0020041647', '4-20-03-23-008-0046-3', 'Iqbal Fa\'is Al Muthohhar', 'L', 'XII TBSM 2'),
(47, '0012107831', '4-20-03-23-008-0047-2', 'Ivan Aldino', 'L', 'XII TBSM 2'),
(48, '0014173171', '4-20-03-23-008-0048-9', 'Lois Vallentino Rossi', 'L', 'XII TBSM 2'),
(49, '0021141753', '4-20-03-23-008-0049-8', 'Lutfi Hakim Saputra', 'L', 'XII TBSM 2'),
(50, '0028620244', '4-20-03-23-008-0050-7', 'Marcchellino Andrea', 'L', 'XII TBSM 2'),
(51, '0011381618', '4-20-03-23-008-0051-6', 'Muhamad Rizky Ristiyawan', 'L', 'XII TBSM 2'),
(52, '0011321894', '4-20-03-23-008-0052-5', 'Muhammad Akbar Boyke', 'L', 'XII TBSM 2'),
(53, '0028869523', '4-20-03-23-008-0053-4', 'Muhammad Fakhrir Khoirur Rohim', 'L', 'XII TBSM 2'),
(54, '0013539527', '4-20-03-23-008-0054-3', 'Muhammad Hanim Muzaqqi', 'L', 'XII TBSM 2'),
(55, '0013636579', '4-20-03-23-008-0055-2', 'Muhlisin', 'L', 'XII TBSM 2'),
(56, '0008672018', '4-20-03-23-008-0056-9', 'Oky Dwi Rosiyanto', 'L', 'XII TBSM 2'),
(57, '0020824568', '4-20-03-23-008-0057-8', 'Radea Aftar Firman Syafalah', 'L', 'XII TBSM 2'),
(58, '0019285129', '4-20-03-23-008-0058-7', 'Rama Zuli Wahyudi', 'L', 'XII TBSM 2'),
(59, '0020204501', '4-20-03-23-008-0059-6', 'Ricki Kurniawan', 'L', 'XII TBSM 2'),
(60, '0020142528', '4-20-03-23-008-0060-5', 'Rido Pebri Irawan', 'L', 'XII TBSM 2'),
(61, '0020142533', '4-20-03-23-008-0061-4', 'Riski Ahmad Kurniawan', 'L', 'XII TBSM 2'),
(62, '0014668747', '4-20-03-23-008-0062-3', 'Widi Widayat', 'L', 'XII TBSM 2'),
(63, '0029505116', '4-20-03-23-008-0063-2', 'Aditya Akbar', 'L', 'XII RPL 1'),
(64, '0021209460', '4-20-03-23-008-0064-9', 'Ahmad Ridlo Utomo', 'L', 'XII RPL 1'),
(65, '0028197980', '4-20-03-23-008-0065-8', 'Aldi Abdullah Zaini', 'L', 'XII RPL 1'),
(66, '0020041642', '4-20-03-23-008-0066-7', 'Ali Rohmad', 'L', 'XII RPL 1'),
(67, '0020041981', '4-20-03-23-008-0067-6', 'Andrian Dico Pratama', 'L', 'XII RPL 1'),
(68, '0011444114', '4-20-03-23-008-0068-5', 'Ayu Luviani', 'P', 'XII RPL 1'),
(69, '0021026573', '4-20-03-23-008-0069-4', 'Deni Octa Saputra', 'L', 'XII RPL 1'),
(70, '0012901386', '4-20-03-23-008-0070-3', 'Dicky Saputra', 'L', 'XII RPL 1'),
(71, '0011789389', '4-20-03-23-008-0071-2', 'Dimas Ariyanto', 'L', 'XII RPL 1'),
(72, '0020209210', '4-20-03-23-008-0072-9', 'Dinda Ariyanti', 'P', 'XII RPL 1'),
(73, '0027583181', '4-20-03-23-008-0073-8', 'Fachrur Nur Akhmad Qoyum', 'L', 'XII RPL 1'),
(74, '0012120088', '4-20-03-23-008-0074-7', 'Ferry Kurniawan', 'L', 'XII RPL 1'),
(75, '0011505640', '4-20-03-23-008-0075-6', 'Firman Syah Adi Waluyo', 'L', 'XII RPL 1'),
(76, '0012120140', '4-20-03-23-008-0076-5', 'Friska Sylvia Auliasari', 'P', 'XII RPL 1'),
(77, '0020204546', '4-20-03-23-008-0077-4', 'Innani Munilatur Rahmah', 'P', 'XII RPL 1'),
(78, '0011369217', '4-20-03-23-008-0078-3', 'M. Farid Assidqi', 'L', 'XII RPL 1'),
(79, '0023147681', '4-20-03-23-008-0079-2', 'Mita Silviani', 'P', 'XII RPL 1'),
(80, '0023868025', '4-20-03-23-008-0080-9', 'Muhammad Faizal Ramadhan', 'L', 'XII RPL 1'),
(81, '0028835757', '4-20-03-23-008-0081-8', 'Ninis Indri Wulandari', 'P', 'XII RPL 1'),
(82, '0020209226', '4-20-03-23-008-0082-7', 'Nor Rohmad Dwi Saputro', 'L', 'XII RPL 1'),
(83, '0022377774', '4-20-03-23-008-0083-6', 'Putri Divi Kuspara', 'P', 'XII RPL 1'),
(84, '0020828108', '4-20-03-23-008-0084-5', 'Rama Aldiyansah', 'L', 'XII RPL 1'),
(85, '0019526743', '4-20-03-23-008-0085-4', 'Safaatul Laila Putra Ramandan', 'L', 'XII RPL 1'),
(86, '0000556855', '4-20-03-23-008-0086-3', 'Setiawan', 'L', 'XII RPL 1'),
(87, '0011509170', '4-20-03-23-008-0087-2', 'Sintikhe Novia Margaretha', 'P', 'XII RPL 1'),
(88, '0018740731', '4-20-03-23-008-0088-9', 'Sri Julfiyanik', 'P', 'XII RPL 1'),
(89, '0020041663', '4-20-03-23-008-0089-8', 'Vera Graha Lestari', 'P', 'XII RPL 1'),
(90, '0020968302', '4-20-03-23-008-0090-7', 'Wahyu Endah Marginingsih', 'P', 'XII RPL 1'),
(91, '0039459493', '4-20-03-23-008-0091-6', 'Yefta Pascal Firmanto', 'L', 'XII RPL 1'),
(92, '0020844551', '4-20-03-23-008-0092-5', 'Yunita Amelia Maghfiroh', 'P', 'XII RPL 1'),
(93, '0012245978', '4-20-03-23-008-0093-4', 'Abraham Gerry Setiawan', 'L', 'XII RPL 2'),
(94, '9990878063', '4-20-03-23-008-0094-3', 'Afrian Nur Rohman', 'L', 'XII RPL 2'),
(95, '0021006622', '4-20-03-23-008-0095-2', 'Ahmad Heris Setiawan', 'L', 'XII RPL 2'),
(96, '0011946115', '4-20-03-23-008-0096-9', 'Ahmad Rafi Syaifudin', 'L', 'XII RPL 2'),
(97, '0037454840', '4-20-03-23-008-0097-8', 'Antoni Yahya', 'L', 'XII RPL 2'),
(98, '0011387748', '4-20-03-23-008-0098-7', 'Bagus Fikrianto', 'L', 'XII RPL 2'),
(99, '0011505636', '4-20-03-23-008-0099-6', 'Hana Putri Clarisa', 'P', 'XII RPL 2'),
(100, '0011703723', '4-20-03-23-008-0100-5', 'Jesica Kurnia Putri', 'P', 'XII RPL 2'),
(101, '0029513915', '4-20-03-23-008-0101-4', 'Julius Wanda Dinata', 'L', 'XII RPL 2'),
(102, '0011823306', '4-20-03-23-008-0102-3', 'Juwita Anggraini', 'P', 'XII RPL 2'),
(103, '0011689244', '4-20-03-23-008-0103-2', 'Khoirul Annas', 'L', 'XII RPL 2'),
(104, '0038152186', '4-20-03-23-008-0104-9', 'Koresy Setian Kurnia Sandi', 'L', 'XII RPL 2'),
(105, '0020828006', '4-20-03-23-008-0105-8', 'Kristianingsih', 'P', 'XII RPL 2'),
(106, '0011601405', '4-20-03-23-008-0106-7', 'Lala Aftriani', 'P', 'XII RPL 2'),
(107, '0020945604', '4-20-03-23-008-0107-6', 'Lala Irmaya', 'P', 'XII RPL 2'),
(108, '0020049271', '4-20-03-23-008-0108-5', 'Luqman Hakim', 'L', 'XII RPL 2'),
(109, '0020844537', '4-20-03-23-008-0109-4', 'Maulana Hadi Prasetyo', 'L', 'XII RPL 2'),
(110, '0011684821', '4-20-03-23-008-0110-3', 'Mohammad Figo Trisandy', 'L', 'XII RPL 2'),
(111, '0028384855', '4-20-03-23-008-0111-2', 'Muhammad Dicky Saputra', 'L', 'XII RPL 2'),
(112, '0011367363', '4-20-03-23-008-0112-9', 'Muhammad Gilang Raka Siwi', 'L', 'XII RPL 2'),
(113, '0028695360', '4-20-03-23-008-0113-8', 'Muhammad Ilham Agustian', 'L', 'XII RPL 2'),
(114, '0013475495', '4-20-03-23-008-0114-7', 'Muhammad Johannudin', 'L', 'XII RPL 2'),
(115, '0028874710', '4-20-03-23-008-0115-6', 'Nurfiyah Puji Lestari', 'P', 'XII RPL 2'),
(116, '0004387665', '4-20-03-23-008-0116-5', 'Ratna Sari Wediyah Ningsih', 'P', 'XII RPL 2'),
(117, '0020147326', '4-20-03-23-008-0117-4', 'Rikza Thoyyibah', 'P', 'XII RPL 2'),
(118, '0020291081', '4-20-03-23-008-0118-3', 'Riyan Bayu Aji', 'L', 'XII RPL 2'),
(119, '0011166743', '4-20-03-23-008-0119-2', 'Rizki Maulana Adi Saputra', 'L', 'XII RPL 2'),
(120, '0021902418', '4-20-03-23-008-0120-9', 'Salfa Nandita Putri', 'P', 'XII RPL 2'),
(121, '0012967813', '4-20-03-23-008-0121-8', 'Setyaningrum Rohmah', 'P', 'XII RPL 2'),
(122, '0011480888', '4-20-03-23-008-0122-7', 'Sifa Usyafitri Hikmah', 'P', 'XII RPL 2'),
(123, '0020945629', '4-20-03-23-008-0123-6', 'Tri Tanjung Arindra', 'L', 'XII RPL 2'),
(124, '0028197976', '4-20-03-23-008-0124-5', 'Vina Amelia Zuliani', 'P', 'XII RPL 2'),
(125, '0028858302', '4-20-03-23-008-0297-8', 'Ade Erma Yulianti', 'P', 'XII BDP 1'),
(126, '0020147261', '4-20-03-23-008-0298-7', 'Ahmad Amrina Yusro', 'L', 'XII BDP 1'),
(127, '0020825001', '4-20-03-23-008-0299-6', 'Aisha', 'P', 'XII BDP 1'),
(128, '0003883335', '4-20-03-23-008-0300-5', 'Aldi Triwijaya', 'L', 'XII BDP 1'),
(129, '0034128664', '4-20-03-23-008-0301-4', 'Berliana Cahyaning Mentari', 'P', 'XII BDP 1'),
(130, '0010400619', '4-20-03-23-008-0302-3', 'Brenda Amelia Putri', 'P', 'XII BDP 1'),
(131, '0029026122', '4-20-03-23-008-0303-2', 'Christian Agus Budiyanto', 'L', 'XII BDP 1'),
(132, '0011509114', '4-20-03-23-008-0304-9', 'Dhea Usfatun Khasanah', 'P', 'XII BDP 1'),
(133, '0020080710', '4-20-03-23-008-0305-8', 'Dina Rahmawati', 'P', 'XII BDP 1'),
(134, '0020029268', '4-20-03-23-008-0306-7', 'Diva Chelsie Malaffayza', 'P', 'XII BDP 1'),
(135, '0029854428', '4-20-03-23-008-0307-6', 'Dwi Wahyuni', 'P', 'XII BDP 1'),
(136, '0019446428', '4-20-03-23-008-0308-5', 'Erlina Novita Sari', 'P', 'XII BDP 1'),
(137, '0016146686', '4-20-03-23-008-0309-4', 'Evi Dwi Agustin', 'P', 'XII BDP 1'),
(138, '0012089865', '4-20-03-23-008-0310-3', 'Fidiya Ningrum', 'P', 'XII BDP 1'),
(139, '0022588593', '4-20-03-23-008-0311-2', 'Hartantri Anggita', 'P', 'XII BDP 1'),
(140, '0020626626', '4-20-03-23-008-0312-9', 'Ivadhatul Aula', 'P', 'XII BDP 1'),
(141, '0028814861', '4-20-03-23-008-0313-8', 'Khoirun Nisa', 'P', 'XII BDP 1'),
(142, '0020824513', '4-20-03-23-008-0314-7', 'Meyta Nandung Prasetyana', 'P', 'XII BDP 1'),
(143, '0011962722', '4-20-03-23-008-0315-6', 'Muhammad Dandi Saputro', 'L', 'XII BDP 1'),
(144, '0020865317', '4-20-03-23-008-0316-5', 'Nia Nurma Yunita', 'P', 'XII BDP 1'),
(145, '0009275384', '4-20-03-23-008-0317-4', 'Nisa Athala Ramadhan', 'P', 'XII BDP 1'),
(146, '0025568213', '4-20-03-23-008-0318-3', 'Nor Istiqomah Septiatun Nikmah', 'P', 'XII BDP 1'),
(147, '0011601388', '4-20-03-23-008-0319-2', 'Noviyanti Fajarini Nur Hasanah', 'P', 'XII BDP 1'),
(148, '0014601688', '4-20-03-23-008-0320-9', 'Putri Noviya Sari', 'P', 'XII BDP 1'),
(149, '0019756299', '4-20-03-23-008-0321-8', 'Putri Wulandari', 'P', 'XII BDP 1'),
(150, '0014750330', '4-20-03-23-008-0322-7', 'Rahmadita Septi Anggraeni', 'P', 'XII BDP 1'),
(151, '0023806468', '4-20-03-23-008-0323-6', 'Rinddy Antika .s', 'P', 'XII BDP 1'),
(152, '0028952797', '4-20-03-23-008-0324-5', 'Rio Febri Andika Pratama', 'L', 'XII BDP 1'),
(153, '0027929981', '4-20-03-23-008-0325-4', 'Rizki Maulana', 'L', 'XII BDP 1'),
(154, '0028197978', '4-20-03-23-008-0326-3', 'Sefani Fatmawati', 'P', 'XII BDP 1'),
(155, '0011967223', '4-20-03-23-008-0327-2', 'Shindy Agnes Monica', 'P', 'XII BDP 1'),
(156, '0029374169', '4-20-03-23-008-0328-9', 'Siti Fatimah', 'P', 'XII BDP 1'),
(157, '0019329918', '4-20-03-23-008-0329-8', 'Vina Shofwatun Nisa', 'P', 'XII BDP 1'),
(158, '0011509308', '4-20-03-23-008-0330-7', 'Abdul Latif', 'L', 'XII BDP 2'),
(159, '0011444207', '4-20-03-23-008-0331-6', 'Ahmad Ferdy Prasetya', 'L', 'XII BDP 2'),
(160, '0020808049', '4-20-03-23-008-0332-5', 'Alfina Salma Putri', 'P', 'XII BDP 2'),
(161, '0012366291', '4-20-03-23-008-0333-4', 'Ameliya Ayu Wulandari', 'P', 'XII BDP 2'),
(162, '0011387329', '4-20-03-23-008-0334-3', 'Ananda Syarif Abdillah', 'L', 'XII BDP 2'),
(163, '0029332943', '4-20-03-23-008-0335-2', 'Bagus Reynaldisyah', 'L', 'XII BDP 2'),
(164, '0036454761', '4-20-03-23-008-0336-9', 'Choirusita Chovifah', 'P', 'XII BDP 2'),
(165, '0021122058', '4-20-03-23-008-0337-8', 'Cindy Andita', 'P', 'XII BDP 2'),
(166, '0011703721', '4-20-03-23-008-0338-7', 'Dela Aulia Novianis', 'P', 'XII BDP 2'),
(167, '0027082685', '4-20-03-23-008-0339-6', 'Dewi Ratna Kristiana', 'P', 'XII BDP 2'),
(168, '0037455074', '4-20-03-23-008-0340-5', 'Febriyanto Adi Putro', 'L', 'XII BDP 2'),
(169, '0020767122', '4-20-03-23-008-0341-4', 'Hana Tri Safira', 'P', 'XII BDP 2'),
(170, '0028871387', '4-20-03-23-008-0342-3', 'Indah Ayu Wulandari', 'P', 'XII BDP 2'),
(171, '0021820436', '4-20-03-23-008-0343-2', 'Indriyani Rahmawatusholikhah', 'P', 'XII BDP 2'),
(172, '0020145694', '4-20-03-23-008-0344-9', 'Isna Sintianingrum', 'P', 'XII BDP 2'),
(173, '0010400618', '4-20-03-23-008-0345-8', 'Laila Kholifatul Fa\'izah', 'P', 'XII BDP 2'),
(174, '0020080709', '4-20-03-23-008-0346-7', 'Linda Rahmawati', 'P', 'XII BDP 2'),
(175, '0025622219', '4-20-03-23-008-0347-6', 'Mirna Dyah Septyani', 'P', 'XII BDP 2'),
(176, '0020401221', '4-20-03-23-008-0348-5', 'Muhammad Syahrul Kanatakhiya', 'L', 'XII BDP 2'),
(177, '0028810161', '4-20-03-23-008-0349-4', 'Nadela Silviana', 'P', 'XII BDP 2'),
(178, '0020503837', '4-20-03-23-008-0350-3', 'Natasya Agustina', 'P', 'XII BDP 2'),
(179, '0028858585', '4-20-03-23-008-0351-2', 'Nawang Resti Ferlia Sari', 'P', 'XII BDP 2'),
(180, '0012443645', '4-20-03-23-008-0352-9', 'Noval Dony Resman', 'L', 'XII BDP 2'),
(181, '0028197973', '4-20-03-23-008-0353-8', 'Putri Maharani', 'P', 'XII BDP 2'),
(182, '0028165327', '4-20-03-23-008-0354-7', 'Renata Dewi Lestari', 'P', 'XII BDP 2'),
(183, '0016800747', '4-20-03-23-008-0355-6', 'Riski Angelica Maharani', 'P', 'XII BDP 2'),
(184, '0014060229', '4-20-03-23-008-0356-5', 'Rizqi Pratama Putra', 'L', 'XII BDP 2'),
(185, '0021208745', '4-20-03-23-008-0357-4', 'Sevi Widiyarini', 'P', 'XII BDP 2'),
(186, '0020405676', '4-20-03-23-008-0358-3', 'Siska Ratna Dewi', 'P', 'XII BDP 2'),
(187, '0029364786', '4-20-03-23-008-0359-2', 'Syaharani Aulia Fahrunnisa', 'P', 'XII BDP 2'),
(188, '0022143751', '4-20-03-23-008-0360-9', 'Yoffi Eka Saputri', 'P', 'XII BDP 2'),
(189, '0027220129', '4-20-03-23-008-0361-8', 'Zhakia Ria Permata', 'P', 'XII BDP 2'),
(190, '0025326859', '4-20-03-23-008-0194-7', 'Abdul Aziz Ulul Azmy', 'L', 'XII OTKP 1'),
(191, '0011461844', '4-20-03-23-008-0195-6', 'Ahmad Wisnu Saputra', 'L', 'XII OTKP 1'),
(192, '0028874685', '4-20-03-23-008-0196-5', 'Ainun Niam', 'L', 'XII OTKP 1'),
(193, '0021006562', '4-20-03-23-008-0197-4', 'Andri Yustina Fajar', 'P', 'XII OTKP 1'),
(194, '0020242731', '4-20-03-23-008-0198-3', 'Anggita Vina Saputri', 'P', 'XII OTKP 1'),
(195, '0036990896', '4-20-03-23-008-0199-2', 'Anisa Safitri', 'P', 'XII OTKP 1'),
(196, '0011662831', '4-20-03-23-008-0200-9', 'Ariani Niken Pratiwi', 'P', 'XII OTKP 1'),
(197, '0028994096', '4-20-03-23-008-0201-8', 'Arif Endra Irawan', 'L', 'XII OTKP 1'),
(198, '0016784078', '4-20-03-23-008-0202-7', 'Aulia Rizqi Amalia', 'P', 'XII OTKP 1'),
(199, '0001425006', '4-20-03-23-008-0203-6', 'Benika Krista', 'L', 'XII OTKP 1'),
(200, '0033403375', '4-20-03-23-008-0204-5', 'Cici Erlina Citra Kharisma', 'P', 'XII OTKP 1'),
(201, '0010963088', '4-20-03-23-008-0205-4', 'Devi Eka Fitriyana', 'P', 'XII OTKP 1'),
(202, '0020041644', '4-20-03-23-008-0206-3', 'Dwi Rohmatul Maula', 'P', 'XII OTKP 1'),
(203, '0020422281', '4-20-03-23-008-0207-2', 'Egi Nurdian Saputra', 'L', 'XII OTKP 1'),
(204, '0020825143', '4-20-03-23-008-0208-9', 'Fadela Dwi Meisanti', 'P', 'XII OTKP 1'),
(205, '0012085206', '4-20-03-23-008-0209-8', 'Hani Wulandari', 'P', 'XII OTKP 1'),
(206, '0020844533', '4-20-03-23-008-0210-7', 'Ida Sholikatun Nikmah', 'P', 'XII OTKP 1'),
(207, '0020447052', '4-20-03-23-008-0211-6', 'Lisa Silfia Ayuningtyas', 'P', 'XII OTKP 1'),
(208, '0028835263', '4-20-03-23-008-0212-5', 'Luluk Agustin', 'P', 'XII OTKP 1'),
(209, '0020404128', '4-20-03-23-008-0213-4', 'Meita Adelia', 'P', 'XII OTKP 1'),
(210, '0011166737', '4-20-03-23-008-0214-3', 'Muhammad Abiem Yuniko', 'L', 'XII OTKP 1'),
(211, '0011684815', '4-20-03-23-008-0215-2', 'Muhammad Wildan Alif Hilmawan', 'L', 'XII OTKP 1'),
(212, '0021865819', '4-20-03-23-008-0216-9', 'Nala Fauziyah', 'P', 'XII OTKP 1'),
(213, '0011601387', '4-20-03-23-008-0217-8', 'Novalinda Citrasari', 'P', 'XII OTKP 1'),
(214, '0028591255', '4-20-03-23-008-0218-7', 'Pradnya Paramita Gayatri', 'P', 'XII OTKP 1'),
(215, '0020821476', '4-20-03-23-008-0219-6', 'Renty Desianna Sari', 'P', 'XII OTKP 1'),
(216, '0028952795', '4-20-03-23-008-0220-5', 'Riris Amelia Melati', 'P', 'XII OTKP 1'),
(217, '0021023101', '4-20-03-23-008-0221-4', 'Rizka Diah Ayu Pramudita', 'P', 'XII OTKP 1'),
(218, '0024380891', '4-20-03-23-008-0222-3', 'Seger Dwi Falintino', 'L', 'XII OTKP 1'),
(219, '0019289975', '4-20-03-23-008-0223-2', 'Selly Windiyani', 'P', 'XII OTKP 1'),
(220, '0028049028', '4-20-03-23-008-0224-9', 'Siti Muyassaroh', 'P', 'XII OTKP 1'),
(221, '0020041939', '4-20-03-23-008-0225-8', 'Siva Khana Destriona', 'P', 'XII OTKP 1'),
(222, '0028591237', '4-20-03-23-008-0226-7', 'Widiya Rahma Salsabila', 'P', 'XII OTKP 1'),
(223, '0012087730', '4-20-03-23-008-0227-6', 'Aliffia Amaramila', 'P', 'XII OTKP 2'),
(224, '0016569286', '4-20-03-23-008-0228-5', 'Anantasya Putri Hestinawati', 'P', 'XII OTKP 2'),
(225, '0028837000', '4-20-03-23-008-0229-4', 'Annisa Rahmania', 'P', 'XII OTKP 2'),
(226, '0011703720', '4-20-03-23-008-0230-3', 'Ansori Wibowo', 'L', 'XII OTKP 2'),
(227, '0012088543', '4-20-03-23-008-0231-2', 'Choirul Nabilam Amri', 'L', 'XII OTKP 2'),
(228, '0019676911', '4-20-03-23-008-0232-9', 'Cindi Fatihah Sari', 'P', 'XII OTKP 2'),
(229, '0022769475', '4-20-03-23-008-0233-8', 'Citra Fajar Rahayu', 'P', 'XII OTKP 2'),
(230, '0020142526', '4-20-03-23-008-0234-7', 'Dafia Lailatul Rohma', 'P', 'XII OTKP 2'),
(231, '0020446883', '4-20-03-23-008-0235-6', 'Diah Ayu Dwi Susanti', 'P', 'XII OTKP 2'),
(232, '0019073133', '4-20-03-23-008-0236-5', 'Elva Putriyani', 'P', 'XII OTKP 2'),
(233, '0020827983', '4-20-03-23-008-0237-4', 'Helen Franzisca', 'P', 'XII OTKP 2'),
(234, '0027569269', '4-20-03-23-008-0238-3', 'Khovivah Hapsari', 'P', 'XII OTKP 2'),
(235, '0021008665', '4-20-03-23-008-0239-2', 'Lulu\' Khariroh', 'P', 'XII OTKP 2'),
(236, '0011387386', '4-20-03-23-008-0240-9', 'Maya Dian Isnaini', 'P', 'XII OTKP 2'),
(237, '0023421044', '4-20-03-23-008-0241-8', 'Meta Dwi Rahmawati', 'P', 'XII OTKP 2'),
(238, '0020828021', '4-20-03-23-008-0242-7', 'Mohammad Aluwi Zusuf', 'L', 'XII OTKP 2'),
(239, '0013322300', '4-20-03-23-008-0243-6', 'Muhammad Imron', 'L', 'XII OTKP 2'),
(240, '0028814870', '4-20-03-23-008-0244-5', 'Natasya Novyana Putri', 'P', 'XII OTKP 2'),
(241, '0020427047', '4-20-03-23-008-0245-4', 'Nordian Tri Cahyono', 'L', 'XII OTKP 2'),
(242, '0011166753', '4-20-03-23-008-0246-3', 'Norma Fadilla', 'P', 'XII OTKP 2'),
(243, '0019315050', '4-20-03-23-008-0247-2', 'Nur Fajriana Muslimah Rahayu', 'P', 'XII OTKP 2'),
(244, '0022068229', '4-20-03-23-008-0248-9', 'Nurul Utami', 'P', 'XII OTKP 2'),
(245, '0020503850', '4-20-03-23-008-0249-8', 'Rani Ayu Wandira', 'P', 'XII OTKP 2'),
(246, '9990879731', '4-20-03-23-008-0250-7', 'Riki Susanto', 'L', 'XII OTKP 2'),
(247, '0011166745', '4-20-03-23-008-0251-6', 'Rikki Nur Afif', 'L', 'XII OTKP 2'),
(248, '0028812542', '4-20-03-23-008-0252-5', 'Risma Andria Sari', 'P', 'XII OTKP 2'),
(249, '0025021756', '4-20-03-23-008-0253-4', 'Rizkya Ningrum', 'P', 'XII OTKP 2'),
(250, '0020467578', '4-20-03-23-008-0254-3', 'Septi Ayu Maharani', 'P', 'XII OTKP 2'),
(251, '0011368810', '4-20-03-23-008-0255-2', 'Septiani Eka Retnosari', 'P', 'XII OTKP 2'),
(252, '0023921170', '4-20-03-23-008-0256-9', 'Sidik Maulana', 'L', 'XII OTKP 2'),
(253, '0020147828', '4-20-03-23-008-0257-8', 'Siti Helvianisya Hidayah', 'P', 'XII OTKP 2'),
(254, '0012086816', '4-20-03-23-008-0258-7', 'Tegar Wahyu Adi Mulyo', 'L', 'XII OTKP 2'),
(255, '0004964022', '4-20-03-23-008-0259-6', 'Vinka Enjelia Yolanda Veronika', 'P', 'XII OTKP 2'),
(256, '0019934136', '4-20-03-23-008-0260-5', 'Wahyu Andre Setiawan', 'L', 'XII OTKP 2'),
(257, '0011561013', '4-20-03-23-008-0261-4', 'Wulan Meisa Herlinda Triya', 'P', 'XII OTKP 2'),
(258, '0028952677', '4-20-03-23-008-0262-3', 'Ahmad Danil Fandi Mahendra', 'L', 'XII OTKP 3'),
(259, '0012107827', '4-20-03-23-008-0263-2', 'Ahmad Nasir', 'L', 'XII OTKP 3'),
(260, '0021023378', '4-20-03-23-008-0264-9', 'Ananda Dian Kurniasari', 'P', 'XII OTKP 3'),
(261, '0011463784', '4-20-03-23-008-0265-8', 'Anis Widiyanti', 'P', 'XII OTKP 3'),
(262, '0020041640', '4-20-03-23-008-0266-7', 'Annisa Nur Hidayah', 'P', 'XII OTKP 3'),
(263, '0011543958', '4-20-03-23-008-0267-6', 'Annisa Taufika Sari', 'P', 'XII OTKP 3'),
(264, '0020209219', '4-20-03-23-008-0268-5', 'Anugrah Adilia Saputri', 'P', 'XII OTKP 3'),
(265, '0021021103', '4-20-03-23-008-0269-4', 'Cut Alma\'rifat Fidin', 'P', 'XII OTKP 3'),
(266, '0012085202', '4-20-03-23-008-0270-3', 'Dicky Dwi Hanafi', 'L', 'XII OTKP 3'),
(267, '0020704835', '4-20-03-23-008-0271-2', 'Dila Hidayanti', 'P', 'XII OTKP 3'),
(268, '0004326969', '4-20-03-23-008-0272-9', 'Dimas Rahul Setiawan', 'L', 'XII OTKP 3'),
(269, '0020904274', '4-20-03-23-008-0273-8', 'Fatrotus Sari Farokhah', 'P', 'XII OTKP 3'),
(270, '0020049266', '4-20-03-23-008-0274-7', 'Fela Mauludiyah', 'P', 'XII OTKP 3'),
(271, '0022303371', '4-20-03-23-008-0275-6', 'Fera Susanti', 'P', 'XII OTKP 3'),
(272, '0012086707', '4-20-03-23-008-0276-5', 'Hana Laila Safira', 'P', 'XII OTKP 3'),
(273, '0020041650', '4-20-03-23-008-0277-4', 'Ifina Izazani', 'P', 'XII OTKP 3'),
(274, '0012358189', '4-20-03-23-008-0278-3', 'Indriana Pipit Lestari', 'P', 'XII OTKP 3'),
(275, '0020204468', '4-20-03-23-008-0279-2', 'Intan Nurjanatul Laela', 'P', 'XII OTKP 3'),
(276, '0008204138', '4-20-03-23-008-0280-9', 'Jumaroh', 'P', 'XII OTKP 3'),
(277, '0011463810', '4-20-03-23-008-0281-8', 'Kevin Valerian Ardiansyah', 'L', 'XII OTKP 3'),
(278, '0015182985', '4-20-03-23-008-0282-7', 'Kristina Nurwahyuni', 'P', 'XII OTKP 3'),
(279, '0027275706', '4-20-03-23-008-0283-6', 'Laili Azka Isnaini', 'P', 'XII OTKP 3'),
(280, '0011684827', '4-20-03-23-008-0284-5', 'Mita Devinta Sari', 'P', 'XII OTKP 3'),
(281, '0020021096', '4-20-03-23-008-0285-4', 'Moreno Rizky Arfandi', 'L', 'XII OTKP 3'),
(282, '0020422457', '4-20-03-23-008-0286-3', 'Muhammad Ainul Alfin', 'L', 'XII OTKP 3'),
(283, '0011444122', '4-20-03-23-008-0287-2', 'Muhammad Miftakhur Rizky Pangestu', 'L', 'XII OTKP 3'),
(284, '0008613654', '4-20-03-23-008-0288-9', 'Muhammad Riza Safaruddin', 'L', 'XII OTKP 3'),
(285, '0028858586', '4-20-03-23-008-0289-8', 'Naravika Yogi Atmoko', 'L', 'XII OTKP 3'),
(286, '0021449099', '4-20-03-23-008-0290-7', 'Nur Azizah', 'P', 'XII OTKP 3'),
(287, '0020828048', '4-20-03-23-008-0291-6', 'Nurul Intan Apriliani', 'P', 'XII OTKP 3'),
(288, '0023502406', '4-20-03-23-008-0292-5', 'Putri Adhisti', 'P', 'XII OTKP 3'),
(289, '0022882758', '4-20-03-23-008-0293-4', 'Reggyta Mellva Armallya', 'P', 'XII OTKP 3'),
(290, '0029236732', '4-20-03-23-008-0294-3', 'Revita Ika Lestari', 'P', 'XII OTKP 3'),
(291, '0027288613', '4-20-03-23-008-0295-2', 'Siska Patma Sari', 'P', 'XII OTKP 3'),
(292, '0021003813', '4-20-03-23-008-0296-9', 'Uswatun Khasanah', 'P', 'XII OTKP 3'),
(293, '0028835069', '4-20-03-23-008-0125-4', 'Amanda Suryaningsih', 'P', 'XII AKL 1'),
(294, '0028836989', '4-20-03-23-008-0126-3', 'Amiroh Nabila Salsabil', 'P', 'XII AKL 1'),
(295, '0011381613', '4-20-03-23-008-0127-2', 'Diah Ayu Anisha', 'P', 'XII AKL 1'),
(296, '0022171598', '4-20-03-23-008-0128-9', 'Diva Amalia Virgiana', 'P', 'XII AKL 1'),
(297, '0000347682', '4-20-03-23-008-0129-8', 'Doni Joko Santoso', 'L', 'XII AKL 1'),
(298, '0028858592', '4-20-03-23-008-0130-7', 'Eny Widayanti', 'P', 'XII AKL 1'),
(299, '0023662777', '4-20-03-23-008-0131-6', 'Eri Ermawati', 'P', 'XII AKL 1'),
(300, '0026745978', '4-20-03-23-008-0132-5', 'Evania Imroatu Sholihah', 'P', 'XII AKL 1'),
(301, '0028952724', '4-20-03-23-008-0133-4', 'Fenny Meisya Ayuningrum', 'P', 'XII AKL 1'),
(302, '0029886011', '4-20-03-23-008-0134-3', 'Ica Ayu Miranda', 'P', 'XII AKL 1'),
(303, '0027606083', '4-20-03-23-008-0135-2', 'Ika Dewi Nurmayani', 'P', 'XII AKL 1'),
(304, '0027275703', '4-20-03-23-008-0136-9', 'Jenia Charismaton Nikmah', 'P', 'XII AKL 1'),
(305, '0037328301', '4-20-03-23-008-0137-8', 'Laila Fitriana', 'P', 'XII AKL 1'),
(306, '0020828010', '4-20-03-23-008-0138-7', 'Linda Astutik', 'P', 'XII AKL 1'),
(307, '0023682979', '4-20-03-23-008-0139-6', 'Maulina Safa\'atin Azizah', 'P', 'XII AKL 1'),
(308, '0011962717', '4-20-03-23-008-0140-5', 'Miftahul Amin', 'L', 'XII AKL 1'),
(309, '0010400614', '4-20-03-23-008-0141-4', 'Miftahul Hidayah', 'P', 'XII AKL 1'),
(310, '0070016173', '4-20-03-23-008-0142-3', 'Muhammad Syarifuddin', 'L', 'XII AKL 1'),
(311, '0020824268', '4-20-03-23-008-0143-2', 'Nanda Velani', 'P', 'XII AKL 1'),
(312, '0029037228', '4-20-03-23-008-0144-9', 'Nisa Amalia', 'P', 'XII AKL 1'),
(313, '0011509120', '4-20-03-23-008-0145-8', 'Olivia Gita Putri Anjani', 'P', 'XII AKL 1'),
(314, '0020367760', '4-20-03-23-008-0146-7', 'Puji Utomo', 'L', 'XII AKL 1'),
(315, '0020945622', '4-20-03-23-008-0147-6', 'Putri Ambar Wati', 'P', 'XII AKL 1'),
(316, '0020049300', '4-20-03-23-008-0148-5', 'Putri Wulandari', 'P', 'XII AKL 1'),
(317, '0011946154', '4-20-03-23-008-0149-4', 'Rahma Wilis Sundari', 'P', 'XII AKL 1'),
(318, '0028695233', '4-20-03-23-008-0150-3', 'Rika Avelya Qulyaningsih', 'P', 'XII AKL 1'),
(319, '0020065230', '4-20-03-23-008-0151-2', 'Rina Rama Yanti', 'P', 'XII AKL 1'),
(320, '0028462384', '4-20-03-23-008-0152-9', 'Rizky Karim Aditya', 'L', 'XII AKL 1'),
(321, '0011846117', '4-20-03-23-008-0153-8', 'Salsa Oktaviana Islamy', 'P', 'XII AKL 1'),
(322, '0021669630', '4-20-03-23-008-0154-7', 'Shokhybah Febryani', 'P', 'XII AKL 1'),
(323, '0019527664', '4-20-03-23-008-0155-6', 'Silfiya Fitriana', 'P', 'XII AKL 1'),
(324, '0020049301', '4-20-03-23-008-0156-5', 'Sindi Patrisiya', 'P', 'XII AKL 1'),
(325, '0028738569', '4-20-03-23-008-0157-4', 'Venny Mega Novianti', 'P', 'XII AKL 1'),
(326, '0024428218', '4-20-03-23-008-0158-3', 'Wanda Jofani Octaviona', 'P', 'XII AKL 1'),
(327, '0026366176', '4-20-03-23-008-0159-2', 'Zada Yuniar Ciptiani', 'P', 'XII AKL 1'),
(328, '0028031575', '4-20-03-23-008-0160-9', 'Ahmad Dio Saputro', 'L', 'XII AKL 2'),
(329, '0011448701', '4-20-03-23-008-0161-8', 'Aida Nur Cahyaningrum', 'P', 'XII AKL 2'),
(330, '0020827848', '4-20-03-23-008-0162-7', 'Amelia Duita Sinta Sari', 'P', 'XII AKL 2'),
(331, '0021665220', '4-20-03-23-008-0163-6', 'Aprilia Khoirunnisa\'', 'P', 'XII AKL 2'),
(332, '0018183302', '4-20-03-23-008-0164-5', 'Ayuk Puspita Sari', 'P', 'XII AKL 2'),
(333, '0032853140', '4-20-03-23-008-0165-4', 'Berliana Kusuma  Anggraini', 'P', 'XII AKL 2'),
(334, '0034728350', '4-20-03-23-008-0166-3', 'Duwik Aminarti', 'P', 'XII AKL 2'),
(335, '0025469325', '4-20-03-23-008-0167-2', 'Eva Harmelia Valentina', 'P', 'XII AKL 2'),
(336, '0013260412', '4-20-03-23-008-0168-9', 'Fellisa Devi Susanti', 'P', 'XII AKL 2'),
(337, '0023025921', '4-20-03-23-008-0169-8', 'Fety Amalia', 'P', 'XII AKL 2'),
(338, '0024266022', '4-20-03-23-008-0170-7', 'Isna Ulviyanti', 'P', 'XII AKL 2'),
(339, '0020503819', '4-20-03-23-008-0171-6', 'Kusmita Fatmawati', 'P', 'XII AKL 2'),
(340, '0037092667', '4-20-03-23-008-0172-5', 'Laili Fitriani', 'P', 'XII AKL 2'),
(341, '0011166746', '4-20-03-23-008-0173-4', 'Lista Wahyu Ningsih', 'P', 'XII AKL 2'),
(342, '0012406056', '4-20-03-23-008-0174-3', 'Nanang Eldi Saputra', 'L', 'XII AKL 2'),
(343, '0028952784', '4-20-03-23-008-0175-2', 'Nawang Putri Andini', 'P', 'XII AKL 2'),
(344, '0020401209', '4-20-03-23-008-0176-9', 'Noor\'aini Kholifatussa\'adah', 'P', 'XII AKL 2'),
(345, '0021980887', '4-20-03-23-008-0177-8', 'Nova Atmalisa Nurhaliza', 'P', 'XII AKL 2'),
(346, '0011387392', '4-20-03-23-008-0178-7', 'Novia Nur Faizah', 'P', 'XII AKL 2'),
(347, '0020987191', '4-20-03-23-008-0179-6', 'Nurul Istiqomah', 'P', 'XII AKL 2'),
(348, '0021122003', '4-20-03-23-008-0180-5', 'Pancaka Rizky Yourdiansyah', 'L', 'XII AKL 2'),
(349, '0029997310', '4-20-03-23-008-0181-4', 'Resvi Variska', 'P', 'XII AKL 2'),
(350, '0028971020', '4-20-03-23-008-0182-3', 'Risa Apriliana', 'P', 'XII AKL 2'),
(351, '0028933789', '4-20-03-23-008-0183-2', 'Risma Aulia Dewi', 'P', 'XII AKL 2'),
(352, '0020421726', '4-20-03-23-008-0184-9', 'Ros Sundari', 'P', 'XII AKL 2'),
(353, '0028641804', '4-20-03-23-008-0185-8', 'Shinta Aprillia Trie Wahyuni', 'P', 'XII AKL 2'),
(354, '0028888832', '4-20-03-23-008-0186-7', 'Silviana Ainur Rizqiyah', 'P', 'XII AKL 2'),
(355, '0011463824', '4-20-03-23-008-0187-6', 'Sindi Noor Fianingsih', 'P', 'XII AKL 2'),
(356, '0010400617', '4-20-03-23-008-0188-5', 'Siti Kholifah', 'P', 'XII AKL 2'),
(357, '0011748336', '4-20-03-23-008-0189-4', 'Syifa Nurani Dewi', 'P', 'XII AKL 2'),
(358, '0011466268', '4-20-03-23-008-0190-3', 'Tri Andi Dewantoko', 'L', 'XII AKL 2'),
(359, '0012271572', '4-20-03-23-008-0191-2', 'Vera Nurkhalimah', 'P', 'XII AKL 2'),
(360, '0017969557', '4-20-03-23-008-0192-9', 'Yuni Maulina Syafitri', 'P', 'XII AKL 2'),
(361, '0028952739', '4-20-03-23-008-0193-8', 'Yusrotul Faizah', 'P', 'XII AKL 2');

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `IDSoal` int(5) NOT NULL,
  `NamaSoal` varchar(128) NOT NULL,
  `link_soal` varchar(254) NOT NULL,
  `waktu_awal` time NOT NULL,
  `waktu_akhir` time NOT NULL,
  `tanggal_uji` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`IDSoal`, `NamaSoal`, `link_soal`, `waktu_awal`, `waktu_akhir`, `tanggal_uji`) VALUES
(1, 'Pendidikan Agama Islam', 'https://docs.google.com/forms/d/e/1FAIpQLScJvnbKSAxyWXJ9mz2pXqcRtfM3EofeRU2XOMxFX4vJMvMSiA/viewform', '07:30:00', '09:30:00', '2020-03-20'),
(2, 'Pendidikan Agama Kristen', 'https://docs.google.com/forms/d/e/1FAIpQLSck5VtxzGDmfLSLrRxvVNp66BLhCzGYof-CMug4pq0uAAXtHg/viewform', '07:30:00', '09:30:00', '2020-03-20'),
(3, 'Bahasa Jawa', 'https://docs.google.com/forms/d/e/1FAIpQLSe76gnVo1D9HCbmFUP5SvTMYsnYQ29-06nqfE-1LpYCgVpocg/viewform', '10:00:00', '11:30:00', '2020-03-20');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `token`, `active`, `created`, `updated`) VALUES
(1, 'admin', '$2y$10$6.uc0E.QQvv85lbSJkW2kuP9Nv2J1jvVn0NF8mXxjzSb1T0BCzaXO', 'admin@mail.com', '', 0, '2020-03-19 20:15:47', '2020-03-19 20:15:47');

-- --------------------------------------------------------

--
-- Table structure for table `user_has_role`
--

CREATE TABLE `user_has_role` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_has_role`
--

INSERT INTO `user_has_role` (`id`, `user_id`, `user_role_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `level` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `title`, `description`, `level`, `created`, `updated`) VALUES
(1, 'admin', 'user untuk admin', 1, '2019-09-25 18:53:20', '2019-09-25 18:53:20'),
(2, 'petugas', 'user untuk petugas', 2, '2019-09-25 18:54:19', '2019-09-25 19:28:51'),
(3, 'guru', 'akun untuk guru', 10, '2019-09-25 22:16:47', '2019-09-25 22:16:47'),
(4, 'siswa', 'akun untuk siswa', 15, '2019-10-08 13:10:46', '2019-10-08 13:10:46'),
(5, 'Ketua Kelas', 'akun untuk ketua kelas', 13, '2019-12-04 02:07:47', '2019-12-04 02:07:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`IDAbsensi`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`IDSiswa`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`IDSoal`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `user_has_role`
--
ALTER TABLE `user_has_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `user_role_id` (`user_role_id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `IDAbsensi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `IDSoal` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3335;

--
-- AUTO_INCREMENT for table `user_has_role`
--
ALTER TABLE `user_has_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
