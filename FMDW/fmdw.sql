-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2018 at 10:04 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

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
  `username` varchar(225) DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL,
  `jabatan` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id_account`, `username`, `password`, `jabatan`) VALUES
(1, 'admin1', 'admin1', 'admin'),
(2, 'kasir1', 'kasir1', 'kasir'),
(3, 'kasir2', 'kasir2', 'kasir');

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
  `username` varchar(50) NOT NULL,
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
(1, 'Elvino Revata Lieyanto', 'vinogreatkiller', 'vinovino', 'vinogreatkiller.gmail.com', 'Alnect Komputer Janti', '2004-01-24', 'Aktif', 'member1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_film` int(11) DEFAULT NULL,
  `tanggal_pinjam` date DEFAULT NULL,
  `tanggal_pengembalian` date DEFAULT NULL,
  `pembayaran` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
