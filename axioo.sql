-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 05 Jan 2021 pada 07.22
-- Versi server: 10.4.10-MariaDB
-- Versi PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `axioo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `liststudent`
--

DROP TABLE IF EXISTS `liststudent`;
CREATE TABLE IF NOT EXISTS `liststudent` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `liststudent`
--

INSERT INTO `liststudent` (`id`, `name`, `school`, `email`, `phone`, `grade`, `department`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Entis Sutisna', 'SMK Negeri 1 Bandungq', 'entis.sutisna@jimel.com', 852077666, 'Kelas 2', 'TKJ', 'entis-sutisna', '0000-00-00 00:00:00', '2021-01-04 22:34:04'),
(2, 'Muflikhah Isna', 'SMK Negeri 1 Wonosari', 'muflikhah.isna@jimel.com', 87878787, 'Kelas 3', 'Multimedia', 'Muflikhah-Isna', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
