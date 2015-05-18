-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2015 at 01:11 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `cari_produk`
--
CREATE TABLE IF NOT EXISTS `cari_produk` (
`id_produk` int(11)
,`nama_produk` varchar(100)
,`harga_produk` varchar(30)
,`stock_produk` int(11)
,`id_kategori` int(11)
,`nama_kategori` varchar(100)
,`filename` varchar(255)
,`location` varchar(255)
,`id_user` int(11)
,`publikasi` tinyint(1)
,`operator` varchar(100)
,`desk_produk` varchar(100)
);
-- --------------------------------------------------------

--
-- Table structure for table `kategori_produk`
--

CREATE TABLE IF NOT EXISTS `kategori_produk` (
`id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL,
  `desk_kategori` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_produk`
--

INSERT INTO `kategori_produk` (`id_kategori`, `nama_kategori`, `desk_kategori`) VALUES
(1, 'accessories', 'accessories'),
(2, 'Hotel', 'Hotel'),
(3, 'Gadget', 'Gadget'),
(4, 'Elektronik', 'Elektronik'),
(5, 'Travel', 'Travel'),
(6, 'Tiket', 'Tiket');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE IF NOT EXISTS `level` (
  `id_level` int(11) NOT NULL,
  `nama_level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `nama_level`) VALUES
(1, 'administrator'),
(2, 'seller'),
(3, 'pelanggan');

-- --------------------------------------------------------

--
-- Table structure for table `logaccess`
--

CREATE TABLE IF NOT EXISTS `logaccess` (
`id_log` int(11) NOT NULL,
  `waktu_log` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_login` datetime NOT NULL,
  `level` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `IP` varchar(100) NOT NULL,
  `Browser` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logaccess`
--

INSERT INTO `logaccess` (`id_log`, `waktu_log`, `last_login`, `level`, `username`, `IP`, `Browser`) VALUES
(1, '2015-05-15 11:22:40', '2015-05-15 13:22:40', 'administrator', 'admin', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36'),
(2, '2015-05-15 11:22:40', '2015-05-15 13:22:40', 'administrator', 'Administrator', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36'),
(3, '2015-05-15 11:22:40', '2015-05-15 13:22:40', 'pelanggan', 'mucha', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36'),
(4, '2015-05-15 11:22:40', '2015-05-15 13:22:40', 'seller', 'susi', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36'),
(5, '2015-05-15 11:22:40', '2015-05-15 13:22:40', 'administrator', 'Administrator', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36'),
(6, '2015-05-15 11:22:40', '2015-05-15 13:22:40', 'pelanggan', 'mucha', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.90 Safari/537.36 OPR/29.0.1795.47'),
(7, '2015-05-15 11:22:40', '2015-05-15 13:22:40', 'administrator', 'Administrator', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36'),
(8, '2015-05-15 11:22:40', '2015-05-15 13:22:40', 'pelanggan', 'mucha', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36'),
(9, '2015-05-15 11:22:40', '2015-05-15 13:22:40', 'seller', 'susi', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36'),
(10, '2015-05-15 11:22:40', '2015-05-15 13:22:40', 'administrator', 'Administrator', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36'),
(11, '2015-05-15 11:22:40', '2015-05-15 13:22:40', 'pelanggan', 'mucha', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36'),
(12, '2015-05-15 11:22:40', '2015-05-15 13:22:40', 'administrator', 'Administrator', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36'),
(13, '2015-05-15 11:22:40', '2015-05-15 13:22:40', 'seller', 'susi', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36'),
(14, '2015-05-15 11:22:40', '2015-05-15 13:22:40', 'pelanggan', 'mucha', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36'),
(15, '2015-05-15 11:22:40', '2015-05-15 13:22:40', 'pelanggan', 'mucha', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36'),
(16, '2015-05-15 11:22:40', '2015-05-15 13:22:40', 'pelanggan', 'mucha', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36'),
(17, '2015-05-15 11:22:40', '2015-05-15 13:22:40', 'pelanggan', 'mucha', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36'),
(18, '2015-05-15 11:22:40', '2015-05-15 13:22:40', 'administrator', 'Administrator', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36'),
(19, '2015-05-15 11:22:40', '2015-05-15 13:22:40', 'administrator', 'Administrator', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.90 Safari/537.36 OPR/29.0.1795.47'),
(20, '2015-05-15 11:22:40', '2015-05-15 13:22:40', 'administrator', 'Administrator', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36'),
(21, '2015-05-15 11:22:40', '2015-05-15 13:22:40', 'pelanggan', 'mucha', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36'),
(22, '2015-05-15 11:22:40', '2015-05-15 13:22:40', 'pelanggan', 'mucha', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36'),
(23, '2015-05-15 11:22:40', '2015-05-15 13:22:40', 'seller', 'susi', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36'),
(24, '2015-05-15 11:22:40', '2015-05-15 13:22:40', 'administrator', 'Administrator', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36'),
(25, '2015-05-15 11:22:40', '2015-05-15 13:22:40', 'administrator', 'Administrator', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36'),
(26, '2015-05-15 11:22:40', '2015-05-15 13:22:40', 'administrator', 'Administrator', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36'),
(27, '2015-05-15 11:22:40', '2015-05-15 13:22:40', 'pelanggan', 'mucha', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36'),
(28, '2015-05-15 11:22:40', '2015-05-15 13:22:40', 'administrator', 'Administrator', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE IF NOT EXISTS `order_detail` (
`id_detail` int(11) NOT NULL,
  `id_order` varchar(255) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga_satuan` varchar(100) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `seller` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id_detail`, `id_order`, `id_produk`, `jumlah`, `harga_satuan`, `nama_produk`, `seller`) VALUES
(1, 'TR001', 4, 2, '150000000', 'Acccess TWS', 'administrator');

-- --------------------------------------------------------

--
-- Table structure for table `order_produk`
--

CREATE TABLE IF NOT EXISTS `order_produk` (
  `id_order` varchar(255) NOT NULL,
  `tgl_order` datetime NOT NULL,
  `total_bayar` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` tinytext NOT NULL,
  `status_bayar` enum('Lunas','kredit') NOT NULL DEFAULT 'kredit',
  `metode_bayar` varchar(100) NOT NULL,
  `status_order` enum('pending','proses','terkirim','gagal') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_produk`
--

INSERT INTO `order_produk` (`id_order`, `tgl_order`, `total_bayar`, `nama`, `alamat`, `status_bayar`, `metode_bayar`, `status_order`) VALUES
('TR001', '2015-05-15 13:20:32', '300000000', 'mucha', 'hgjhgghguygyu ygyuguygtuyg', 'kredit', 'kartu_kredit', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE IF NOT EXISTS `pembayaran` (
`id_bayar` int(11) NOT NULL,
  `bank_tujuan` varchar(20) NOT NULL,
  `bank_asal` varchar(20) NOT NULL,
  `no_rekening` varchar(20) NOT NULL,
  `nama_rekening` varchar(50) NOT NULL,
  `id_order` varchar(6) NOT NULL,
  `jumlah_bayar` varchar(100) NOT NULL,
  `tgl_bayar` datetime NOT NULL,
  `metode_bayar` text NOT NULL,
  `berkas` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_bayar`, `bank_tujuan`, `bank_asal`, `no_rekening`, `nama_rekening`, `id_order`, `jumlah_bayar`, `tgl_bayar`, `metode_bayar`, `berkas`) VALUES
(1, 'Mandiri', 'BNI', '1123344567', 'Mucha', '112233', '1000000', '2015-05-14 00:00:00', 'E-banking', 'indonesia.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
`id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga_produk` varchar(30) NOT NULL,
  `stock_produk` int(11) NOT NULL,
  `desk_produk` varchar(100) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `publikasi` tinyint(1) NOT NULL DEFAULT '0',
  `id_user` int(11) NOT NULL,
  `operator` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga_produk`, `stock_produk`, `desk_produk`, `id_kategori`, `filename`, `location`, `publikasi`, `id_user`, `operator`) VALUES
(2, 'ssssssssssss', '12000000', 12, 'efwe', 1, 'new-pic1.jpg', 'assets/new-pic1.jpg', 1, 1, 'Administrator'),
(3, 'ws', '25000', 12, '43g3g', 3, 'preview-img.jpg', 'assets/preview-img.jpg', 1, 3, 'susi'),
(4, 'Acccess TWS', '150000000', 12, 'hfjhwekj', 1, 'indonesia.jpg', 'assets/indonesia.jpg', 1, 1, 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `id_access` int(11) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` enum('aktif','tidak') NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `id_access`, `jenis_kelamin`, `alamat`, `email`, `status`, `photo`) VALUES
(1, 'Administrator', '21232f297a57a5a743894a0e4a801fc3', 'administrator', 1, 'Laki-laki', 'semarang', 'admin@localhost.com', 'aktif', 'qw.jpg'),
(2, 'mucha', '202cb962ac59075b964b07152d234b70', 'Al-mucha', 3, 'Laki-laki', 'semarang', 'mucha@rootd.com', 'aktif', ''),
(3, 'susi', '81dc9bdb52d04dc20036dbd8313ed055', 'susi', 2, 'Perempuan', 'jakarta', 'susi@yahoo.co.id', 'aktif', '');

-- --------------------------------------------------------

--
-- Stand-in structure for view `viewakses`
--
CREATE TABLE IF NOT EXISTS `viewakses` (
`id_user` int(11)
,`username` varchar(20)
,`password` varchar(255)
,`nama` varchar(100)
,`id_access` int(11)
,`jenis_kelamin` enum('Laki-laki','Perempuan')
,`alamat` varchar(255)
,`email` varchar(100)
,`status` enum('aktif','tidak')
,`photo` varchar(100)
,`id_level` int(11)
,`nama_level` varchar(100)
);
-- --------------------------------------------------------

--
-- Structure for view `cari_produk`
--
DROP TABLE IF EXISTS `cari_produk`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `cari_produk` AS select `produk`.`id_produk` AS `id_produk`,`produk`.`nama_produk` AS `nama_produk`,`produk`.`harga_produk` AS `harga_produk`,`produk`.`stock_produk` AS `stock_produk`,`kategori_produk`.`id_kategori` AS `id_kategori`,`kategori_produk`.`nama_kategori` AS `nama_kategori`,`produk`.`filename` AS `filename`,`produk`.`location` AS `location`,`produk`.`id_user` AS `id_user`,`produk`.`publikasi` AS `publikasi`,`produk`.`operator` AS `operator`,`produk`.`desk_produk` AS `desk_produk` from (`produk` join `kategori_produk` on((`produk`.`id_kategori` = `kategori_produk`.`id_kategori`))) order by `produk`.`id_produk` desc;

-- --------------------------------------------------------

--
-- Structure for view `viewakses`
--
DROP TABLE IF EXISTS `viewakses`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viewakses` AS select `user`.`id_user` AS `id_user`,`user`.`username` AS `username`,`user`.`password` AS `password`,`user`.`nama` AS `nama`,`user`.`id_access` AS `id_access`,`user`.`jenis_kelamin` AS `jenis_kelamin`,`user`.`alamat` AS `alamat`,`user`.`email` AS `email`,`user`.`status` AS `status`,`user`.`photo` AS `photo`,`level`.`id_level` AS `id_level`,`level`.`nama_level` AS `nama_level` from (`user` join `level` on((`user`.`id_access` = `level`.`id_level`)));

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
 ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
 ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `logaccess`
--
ALTER TABLE `logaccess`
 ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
 ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `order_produk`
--
ALTER TABLE `order_produk`
 ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
 ADD PRIMARY KEY (`id_bayar`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
 ADD PRIMARY KEY (`id_produk`), ADD KEY `id_user` (`id_user`), ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`), ADD KEY `id_akses` (`id_access`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `logaccess`
--
ALTER TABLE `logaccess`
MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
MODIFY `id_bayar` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `produk_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `kategori_produk` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_access`) REFERENCES `level` (`id_level`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
