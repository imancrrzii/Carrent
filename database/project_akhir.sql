-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2023 at 05:06 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_akhir`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `username` varchar(120) NOT NULL,
  `alamat` varchar(120) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `no_ktp` varchar(50) NOT NULL,
  `password` varchar(120) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama`, `username`, `alamat`, `gender`, `no_telepon`, `no_ktp`, `password`, `role_id`) VALUES
(23, 'imancarr', 'iman', 'jlj', 'Laki-laki', '081368798772', '1522222', '5be9a68073f66a56554e25614e9f1c9a', 2),
(26, 'Iman Carrazi Syamsidi', 'messi', 'jalan iman', 'Laki-laki', '3248977', '02065535', '827ccb0eea8a706c4c34a16891f84e7b', 2),
(27, 'imannnn', 'imancar', 'asdffdsfs', 'Laki-laki', '54457474', '14191491', 'a67ed86edb7bb8b893639121ad9faa6e', 2),
(28, 'Iman Carrazi Syamsidi', 'imancarr', 'KENTEN', 'LAKI-LAKI', '081368798772', '18025294214541', 'a67ed86edb7bb8b893639121ad9faa6e', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id_mobil` int(11) NOT NULL,
  `kode_type` varchar(120) NOT NULL,
  `merk` varchar(120) NOT NULL,
  `no_plat` varchar(20) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `status` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `denda` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `kode_type`, `merk`, `no_plat`, `warna`, `tahun`, `status`, `harga`, `denda`, `gambar`) VALUES
(52, 'MIB', 'Toyota Calya', 'B 6675 WRN', 'Putih', '2020', '1', 350000, 30000, '1_White.png'),
(53, 'MIB', 'Honda Brio', 'B 6272 AKN', 'Merah', '2018', '1', 350000, 30000, 'brio.png'),
(54, 'MIB', 'Pajero Sport ', 'B 6666 ADF', 'Hitam', '2019', '1', 850000, 50000, 'pajero.png'),
(56, 'MTR', 'Honda CBR-250', 'B 6671 WIN', 'Hitam', '2021', '0', 200000, 25000, 'CBR.png'),
(58, 'MIB', 'Toyota Alphard', 'BG 2254 ABG', 'Hitam Metallic', '2020', '1', 1000000, 50000, 'alpard.jpeg'),
(59, 'TRK', 'SPBU TRUCK', 'BG 9999 ABG', 'BIRU PUTIH', '2013', '1', 1500000, 100000, 'spbu-truck.png'),
(60, 'MIB', 'Toyota Avanza', 'BG 8772 HG', 'Hitam', '2018', '1', 350000, 30000, 'avanza.jpg'),
(61, 'TRK', 'EXCAVATOR', 'B 8888 ABG', 'Kuning Hitam', '2015', '1', 2000000, 150000, '241-2413800_excavator-komatsu-png-transparent-png.png'),
(62, 'SDN', 'Toyota Camry', 'BG 1234 ABH', 'Hitam Metallic', '2017', '1', 500000, 50000, 'camry1.png'),
(63, 'MIB', 'Honda CRV', 'B 7777 ABC', 'Hitam Metallic', '2014', '1', 500000, 50000, 'crv.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rental`
--

CREATE TABLE `rental` (
  `id_rental` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `tanggal_rental` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `status_rental` varchar(50) NOT NULL,
  `status_pengembalian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_rental` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_mobil` int(11) NOT NULL,
  `tanggal_rental` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `harga` varchar(120) NOT NULL,
  `denda` varchar(120) NOT NULL,
  `total_denda` int(120) NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `status_pengembalian` varchar(50) NOT NULL,
  `status_rental` varchar(50) NOT NULL,
  `bukti_pembayaran` varchar(120) NOT NULL,
  `status_pembayaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_rental`, `id_customer`, `id_mobil`, `tanggal_rental`, `tanggal_kembali`, `harga`, `denda`, `total_denda`, `tanggal_pengembalian`, `status_pengembalian`, `status_rental`, `bukti_pembayaran`, `status_pembayaran`) VALUES
(82, 23, 56, '2023-04-26', '2023-04-27', '200000', '25000', 0, '2023-04-27', 'Kembali', 'Selesai', '241-2413800_excavator-komatsu-png-transparent-png1.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id_type` int(11) NOT NULL,
  `kode_type` varchar(20) NOT NULL,
  `nama_type` varchar(50) NOT NULL,
  `gambar` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id_type`, `kode_type`, `nama_type`, `gambar`) VALUES
(21, 'SDN', 'Sedan', ''),
(22, 'MED', 'Medium Bus', ''),
(25, 'MIB', 'Mini Bus', ''),
(26, 'MTR', 'Motor', ''),
(27, 'MGE', 'Moge', ''),
(28, 'TRK', 'Truck', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `rental`
--
ALTER TABLE `rental`
  ADD PRIMARY KEY (`id_rental`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_rental`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `rental`
--
ALTER TABLE `rental`
  MODIFY `id_rental` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_rental` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
