-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jan 2019 pada 15.20
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `signup1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `musik`
--

CREATE TABLE `musik` (
  `ID` int(11) NOT NULL,
  `musik` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `musik`
--

INSERT INTO `musik` (`ID`, `musik`) VALUES
(0, 'cornelius & junior - jaran goyang kentir.mp3'),
(0, 'humood-alkhudher-kun-anta.mp3'),
(0, 'REAGge Ada Gula Ada Semut.mp3'),
(0, 'REAGge Ada Gula Ada Semut.mp3'),
(0, 'Rege - Lagu Santai.mp3'),
(0, 'REGAE jakarta minggir kali.mp3'),
(0, 'R3gg43 DI SAYIDAN.mp3'),
(0, 'R3gg43 DI SAYIDAN.mp3'),
(0, 'REAGge Ada Gula Ada Semut.mp3'),
(0, 'Tony Q ~ Tertanam.mp3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `register`
--

CREATE TABLE `register` (
  `user_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `nama_awal` varchar(255) NOT NULL,
  `nama_akhir` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
