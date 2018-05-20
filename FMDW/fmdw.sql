-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2018 at 10:13 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fmdw`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id_account` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(225) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(225) DEFAULT NULL,
  `jabatan` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id_account`, `nama`, `username`, `email`, `password`, `jabatan`) VALUES
(1, 'adminsatu', 'admin1', 'sayaadmin1@gmail.com', 'admin1', 'admin'),
(2, 'kasirsatu', 'kasir1', 'sayakasirsatu@gmail.com', 'kasir1', 'kasir'),
(3, 'kasirdua', 'kasir2', 'sayakasirdua@gmail.com', 'kasir2', 'kasir');

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id_film` int(11) NOT NULL,
  `judul` varchar(225) DEFAULT NULL,
  `kategori` varchar(225) DEFAULT NULL,
  `tanggal_rilis` date DEFAULT NULL,
  `sinopsis` text,
  `gambar_film` varchar(225) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id_film`, `judul`, `kategori`, `tanggal_rilis`, `sinopsis`, `gambar_film`, `stok`) VALUES
(1, 'IT', 'Horror', '2017-09-07', 'Ada seorang bocah yang suka bermain perahu saat hujan. Kemudian perahu nya hanyut lalu ketemu badut lalu dimakan tangannya.', 'film1.jpg', 3),
(2, 'Kenangan di Perpus', 'Komedi', '2018-05-20', 'Ada seorang mahasiswi bertemu dengan kakek di perpustakaan kemudian mereka hohohihe lalu selesai mereka tidak bertemu lagi.', 'film2.jpg', 100),
(3, 'Dilan', 'Drama', '2018-01-25', 'Ada seorang preman jatuh hati dengan seorang wanita muda, mereka 1 SMA kemudian pacaran kemudian menikah.', 'film3.jpg', 1),
(4, 'Maze Runner', 'Action', '2018-01-17', 'Ada sekumpulan manusia yang dijadikan kelinci percobaan, kemudian mereka berlari-lari mencari jalan keluar.', 'film4.jpg', 21),
(5, 'Black Panther', 'Action', '2018-01-29', 'Nippon Paint! Wakanda FOREVER!!!', 'film5.jpg', 10),
(6, 'Jumanji', 'Action', '2017-12-21', 'Lari-lari di hutan gajelas, dikutuk permainan monopoli, seru deh.', 'film6.jpg', 4),
(7, 'American Pie', 'Komedi', '1999-09-09', 'Agak jorok sih, tapi menarik kok hehe.', 'film7.jpg', 200),
(8, 'Sex is Zero', 'Fantasy', '2016-05-20', 'Seru banget deh pokoknya wkwkwk.', 'film8.jpg', 29);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `nama` varchar(225) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(225) DEFAULT NULL,
  `email` varchar(225) DEFAULT NULL,
  `alamat` varchar(225) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `status` varchar(225) DEFAULT NULL,
  `foto_member` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `nama`, `username`, `password`, `email`, `alamat`, `tanggal_lahir`, `status`, `foto_member`) VALUES
(1, 'Elvino Revata Lieyanto', 'vinogreatkiller', '123123', 'vinogreatkiller.gmail.com', 'Alnect Komputer Janti', '2004-01-24', 'Pelajar', 'member1.jpg'),
(2, '', '', '', '', '', '0000-00-00', '', ''),
(3, '', '', '', '', '', '0000-00-00', '', ''),
(4, '', '', '', '', '', '0000-00-00', '', ''),
(5, '', '', '', '', '', '0000-00-00', '', ''),
(6, '', '', '', '', '', '0000-00-00', '', ''),
(7, '', '', '', '', '', '0000-00-00', '', ''),
(8, '', '', '', '', '', '0000-00-00', '', ''),
(9, '', '', '', '', '', '0000-00-00', '', ''),
(10, '', '', '', '', '', '0000-00-00', '', ''),
(11, '', '', '', '', '', '0000-00-00', '', ''),
(12, '', '', '', '', '', '0000-00-00', '', ''),
(13, '', '', '', '', '', '0000-00-00', '', ''),
(14, '', '', '', '', '', '0000-00-00', '', ''),
(15, '', '', '', '', '', '0000-00-00', '', ''),
(16, '', '', '', '', '', '0000-00-00', '', ''),
(17, '', '', '', '', '', '0000-00-00', '', ''),
(18, 'asda', 'asdad', 'asdad', 'asdasd', 'asdasd', '2018-05-15', 'asdada', 'asdasd');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `nomor` int(11) NOT NULL,
  `nama_film` varchar(225) NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`nomor`, `nama_film`, `quantity`, `status`) VALUES
(1, 'Black Panther', 5, 'Tersedia'),
(2, 'Pink Panther', 10, 'Tersedia'),
(3, 'Batman the dark', 0, 'Tidak tersedia'),
(4, 'Dedpul', 1, 'Tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_film` int(11) DEFAULT NULL,
  `nama_film` varchar(225) NOT NULL,
  `tanggal_pinjam` date DEFAULT NULL,
  `tanggal_pengembalian` date DEFAULT NULL,
  `harga` varchar(225) NOT NULL,
  `denda` int(11) NOT NULL,
  `total_bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `id_film`, `nama_film`, `tanggal_pinjam`, `tanggal_pengembalian`, `harga`, `denda`, `total_bayar`) VALUES
(1, 1, 1, 'blek pente', '2018-05-16', '2018-05-31', '50000', 0, 50000),
(2, 2, 2, 'blek', '2018-05-01', '2018-05-02', '25000', 0, 25000),
(3, 1, 1, 'wakanda foreva', '2018-05-16', '2018-05-31', '50000', 0, 50000),
(4, 2, 2, 'video jepang', '2018-05-01', '2018-05-02', '25000', 0, 25000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id_account`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id_film`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`nomor`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id_account` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `nomor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
