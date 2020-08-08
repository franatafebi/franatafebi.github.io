-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2019 at 07:40 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_banksampah`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `iduser` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` int(5) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `jk` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `notelpon` varchar(13) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `saldo` int(15) NOT NULL,
  `keaktifan` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `idadmin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `level` int(11) NOT NULL,
  `jk` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `notelpon` varchar(13) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`idadmin`, `username`, `password`, `nama_lengkap`, `level`, `jk`, `alamat`, `notelpon`, `foto`) VALUES
(1, 'febi', '202cb962ac59075b964b07152d234b70', 'Febi Franata', 1, 'Laki-Laki', 'Tanjung Medang', '2147483647', '15315708863195.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penarikan`
--

CREATE TABLE `tb_penarikan` (
  `id_penarikan` int(11) NOT NULL,
  `petugas` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `jumlah_penarikan` int(25) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penarikan`
--

INSERT INTO `tb_penarikan` (`id_penarikan`, `petugas`, `nama_lengkap`, `jumlah_penarikan`, `tanggal`) VALUES
(1, '', 'Febi Franata', 10000, '2019-04-10'),
(2, '', 'Firman Syah', 5000, '2019-04-10'),
(3, '', '', 2000, '2018-12-15'),
(4, 'Febi Franata', 'Febi Franata', 2000, '2019-07-12'),
(5, 'Febi Franata', 'Deki Pratama', 10000, '2019-07-12'),
(6, 'Febi Franata', 'Deki Pratama', 5000, '2019-07-12');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sampah`
--

CREATE TABLE `tb_sampah` (
  `id_sampah` int(11) NOT NULL,
  `nama_sampah` varchar(50) NOT NULL,
  `harga` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sampah`
--

INSERT INTO `tb_sampah` (`id_sampah`, `nama_sampah`, `harga`) VALUES
(1, 'Botol Air Mineral/Pet Bening Bersih', 'Rp. 3000/kg'),
(2, 'Botol Air Mineral/Pet Bening Kotor', 'Rp 2500/Kg'),
(3, 'Pet Warna Hijau', 'Rp. 2000/Kg'),
(4, 'Pet Warna Biru', 'Rp. 2500/kg'),
(5, 'Koran', 'Rp. 1100/kg'),
(6, 'Kertas Putih/Arsip', 'Rp. 700/kg'),
(7, 'Kardus', 'Rp. 1100/kg'),
(8, 'Duplek', 'Rp. 250/kg'),
(9, 'Alma Kaleng', 'Rp. 100/Buah'),
(10, 'Plastik  Campur', 'Rp. 3000/kg'),
(11, 'Gelas Air Mineral Bersih', 'Rp. 3000/kg'),
(12, 'Gelas Air Mineral Kotor', 'Rp. 1500/kg'),
(13, 'Buku', 'Rp. 300/Kg'),
(14, 'Besi Rongsok', 'Rp. 1500/kg'),
(15, 'Babet', 'Rp. 1000/kg'),
(16, 'Kuningan', 'Rp. 35000/kg'),
(17, 'Alma Panci', 'Rp. 6000/kg'),
(18, 'Besi', 'Rp. 2500/kg'),
(19, 'Botol Kaca Kecap', 'Rp. 350/Botol'),
(20, 'Botol Kaca Bir', 'Rp. 500/Botol');

-- --------------------------------------------------------

--
-- Table structure for table `tb_setoran`
--

CREATE TABLE `tb_setoran` (
  `id_setor` int(11) NOT NULL,
  `petugas` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `jumlah_setor` int(25) NOT NULL,
  `keaktifan` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_setoran`
--

INSERT INTO `tb_setoran` (`id_setor`, `petugas`, `nama_lengkap`, `jumlah_setor`, `keaktifan`, `tanggal`) VALUES
(42, '', 'Febi Franata', 2000, 1, '2019-03-03'),
(43, '', 'Fopi Yunika', 2000, 1, '2019-03-03'),
(44, '', 'Firman Syah', 5000, 1, '2019-03-03'),
(45, '', 'Febi Franata', 2000, 1, '2019-03-03'),
(46, '', 'Fopi Yunika', 2000, 1, '2019-03-03'),
(47, 'Febi Franata', 'Febi Franata', 5000, 1, '2019-04-10'),
(50, 'Febi Franata', '', 30600, 1, '1970-01-01'),
(51, 'Febi Franata', 'Fopi Yunika', 7600, 1, '2019-03-12'),
(52, 'Febi Franata', 'Febi Franata', 5500, 1, '2012-03-19'),
(53, 'Febi Franata', 'Febi Franata', 5000, 1, '2012-07-19'),
(54, 'Febi Franata', 'Deki Pratama', 21000, 1, '2012-07-19'),
(55, 'Febi Franata', 'Febi Franata', 5000, 1, '2014-07-19');

--
-- Triggers `tb_setoran`
--
DELIMITER $$
CREATE TRIGGER `aktif` BEFORE INSERT ON `tb_setoran` FOR EACH ROW BEGIN
UPDATE tbl_user set keaktifan = keaktifan + NEW.keaktifan WHERE nama_lengkap = NEW.nama_lengkap ;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `petugas` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `jumlah_setor` int(15) NOT NULL,
  `jumlah_penarikan` int(15) NOT NULL,
  `keaktifan` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `saldo` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_transaksi`, `petugas`, `nama_lengkap`, `jumlah_setor`, `jumlah_penarikan`, `keaktifan`, `tanggal`, `saldo`) VALUES
(5, 'Febi Franata', 'Deki Pratama', 500, 0, 1, '2014-07-19 00:00:00', 6500),
(6, 'Febi Franata', 'Deki Pratama', 0, 2000, 0, '2019-07-14 00:00:00', 4500),
(7, 'Febi Franata', 'Fopi Yunika', 5000, 0, 1, '2014-07-19 00:00:00', 36600),
(8, 'Febi Franata', 'yeni', 5000, 0, 1, '2014-07-19 00:00:00', 15000),
(9, 'Febi Franata', 'Deki Pratama', 5000, 0, 1, '2019-07-14 00:00:00', 9500),
(10, 'Febi Franata', 'Febi Franata', 7050, 0, 1, '2019-08-06 00:00:00', 47550);

--
-- Triggers `tb_transaksi`
--
DELIMITER $$
CREATE TRIGGER `penarikan` BEFORE INSERT ON `tb_transaksi` FOR EACH ROW BEGIN
UPDATE tbl_user SET saldo = saldo - NEW.jumlah_penarikan
WHERE nama_lengkap = NEW.nama_lengkap ;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `setoran` AFTER INSERT ON `tb_transaksi` FOR EACH ROW BEGIN
UPDATE tbl_user set saldo = saldo + NEW.jumlah_setor WHERE nama_lengkap = NEW.nama_lengkap ;
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`iduser`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indexes for table `tb_penarikan`
--
ALTER TABLE `tb_penarikan`
  ADD PRIMARY KEY (`id_penarikan`);

--
-- Indexes for table `tb_sampah`
--
ALTER TABLE `tb_sampah`
  ADD PRIMARY KEY (`id_sampah`);

--
-- Indexes for table `tb_setoran`
--
ALTER TABLE `tb_setoran`
  ADD PRIMARY KEY (`id_setor`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_penarikan`
--
ALTER TABLE `tb_penarikan`
  MODIFY `id_penarikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_sampah`
--
ALTER TABLE `tb_sampah`
  MODIFY `id_sampah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tb_setoran`
--
ALTER TABLE `tb_setoran`
  MODIFY `id_setor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
