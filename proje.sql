-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2026 at 10:33 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proje`
--

-- --------------------------------------------------------

--
-- Table structure for table `251109048_haberler`
--

CREATE TABLE `251109048_haberler` (
  `id` int(11) NOT NULL,
  `baslik` varchar(255) NOT NULL,
  `icerik` text NOT NULL,
  `kategori_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `251109048_haberler`
--

INSERT INTO `251109048_haberler` (`id`, `baslik`, `icerik`, `kategori_id`) VALUES
(18, 'ads', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `251109048_kategoriler`
--

CREATE TABLE `251109048_kategoriler` (
  `id` int(11) NOT NULL,
  `kategori_adi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `251109048_kategoriler`
--

INSERT INTO `251109048_kategoriler` (`id`, `kategori_adi`) VALUES
(1, 'AI'),
(2, 'Mobil'),
(3, 'Web');

-- --------------------------------------------------------

--
-- Table structure for table `251109048_kullanicilar`
--

CREATE TABLE `251109048_kullanicilar` (
  `id` int(11) NOT NULL,
  `kullanici_adi` varchar(50) NOT NULL,
  `sifre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `251109048_kullanicilar`
--

INSERT INTO `251109048_kullanicilar` (`id`, `kullanici_adi`, `sifre`) VALUES
(1, 'admin', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `251109048_haberler`
--
ALTER TABLE `251109048_haberler`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori_id` (`kategori_id`);

--
-- Indexes for table `251109048_kategoriler`
--
ALTER TABLE `251109048_kategoriler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `251109048_kullanicilar`
--
ALTER TABLE `251109048_kullanicilar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `251109048_haberler`
--
ALTER TABLE `251109048_haberler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `251109048_kategoriler`
--
ALTER TABLE `251109048_kategoriler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `251109048_kullanicilar`
--
ALTER TABLE `251109048_kullanicilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `251109048_haberler`
--
ALTER TABLE `251109048_haberler`
  ADD CONSTRAINT `251109048_haberler_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `251109048_kategoriler` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
