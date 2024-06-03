-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2024 at 05:40 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brainybuddies`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `email`, `username`, `password`) VALUES
(1, 'Natanael Wijaya Tiono', 'natanaelhdxd25@gmail.com', 'Natan', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `id_materi` int(11) NOT NULL,
  `nama_materi` varchar(200) NOT NULL,
  `mata_pelajaran` enum('matematika','ipa','ips','ppkn','bahasa','english') NOT NULL,
  `img` varchar(200) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `materi` varchar(5000) NOT NULL,
  `link_youtube` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id_materi`, `nama_materi`, `mata_pelajaran`, `img`, `deskripsi`, `materi`, `link_youtube`) VALUES
(1, 'Penjumlahan skdajdkajda siadjad', 'matematika', 'materi/penjumlahan.webp', '', 'Konsep Dasar Penjumlahan Penjumlahan bisa diibaratkan seperti mengumpulkan benda.\r\nMisalnya, jika kamu punya 3 apel dan mendapatkan 2 apel lagi, kamu sekarang punya 5 apel.\r\nSecara matematika, ini ditulis sebagai:\r\n<strong>3 + 2 = 5</strong>\r\n\r\nCara Menjumlahkan Angka di Bawah 10\r\nMari kita lihat beberapa contoh penjumlahan:\r\n<strong>1 + 1 = 2</strong>\r\nBayangkan kamu memiliki 1 bola, dan temanmu memberimu 1 bola lagi. Sekarang kamu punya 2 bola.\r\n<strong>2 + 3 = 5</strong>\r\nKamu memiliki 2 permen, dan mendapatkan 3 permen lagi. Sekarang kamu punya 5 permen.\r\n<strong>4 + 4 = 8</strong>\r\nKamu memiliki 4 buku, dan membeli 4 buku lagi. Sekarang kamu punya 8 buku.\r\n<strong>5 + 2 = 7</strong>\r\nKamu memiliki 5 kelereng, dan menemukan 2 kelereng lagi. Sekarang kamu punya 7 kelereng.\r\n\r\n<strong>Selamat Belajar</strong> 2', 'https://www.youtube.com/embed/-m4vaVraaUs?si=x9O97wWZ_8u3k278'),
(2, 'Pengurangan', 'matematika', 'materi/penjumlahan.webp', 'Pengurangan adalah sa', 'Konsep Dasar Penjumlahan\r\nPenjumlahan bisa diibaratkan seperti mengumpulkan benda.\r\nMisalnya, jika kamu punya 3 apel dan mendapatkan 2 apel lagi, kamu sekarang punya 5 apel.\r\nSecara matematika, ini ditulis sebagai:\r\n<strong>3 + 2 = 5</strong>\r\n\r\nCara Menjumlahkan Angka di Bawah 10\r\nMari kita lihat beberapa contoh penjumlahan:\r\n<strong>1 + 1 = 2</strong>\r\nBayangkan kamu memiliki 1 bola, dan temanmu memberimu 1 bola lagi. Sekarang kamu punya 2 bola.\r\n<strong>2 + 3 = 5</strong>\r\nKamu memiliki 2 permen, dan mendapatkan 3 permen lagi. Sekarang kamu punya 5 permen.\r\n<strong>4 + 4 = 8</strong>\r\nKamu memiliki 4 buku, dan membeli 4 buku lagi. Sekarang kamu punya 8 buku.\r\n<strong>5 + 2 = 7</strong>\r\nKamu memiliki 5 kelereng, dan menemukan 2 kelereng lagi. Sekarang kamu punya 7 kelereng.', 'https://www.youtube.com/embed/-m4vaVraaUs?si=SpiSqsaMj5S_UPiN'),
(3, 'Perkalian', 'matematika', 'materi/penjumlahan.webp', 'Pengurangan adalah salah satu operasi matematika dasar yang sangat penting. Pengurangan berarti mengambil atau mengurangi sebagian dari suatu jumlah.', '', ''),
(4, 'Pembagian', 'matematika', 'materi/penjumlahan.webp', 'Pengurangan adalah salah satu operasi matematika dasar yang sangat penting. Pengurangan berarti mengambil atau mengurangi sebagian dari suatu jumlah.', '', ''),
(5, 'Membaca', 'bahasa', 'materi/penjumlahan.webp', 'Pengurangan adalah salah satu operasi matematika dasar yang sangat penting. Pengurangan berarti mengambil atau mengurangi sebagian dari suatu jumlah.', '', ''),
(6, 'Menulis', 'bahasa', 'materi/penjumlahan.webp', 'Pengurangan adalah salah satu operasi matematika dasar yang sangat penting. Pengurangan berarti mengambil atau mengurangi sebagian dari suatu jumlah.', '', ''),
(7, 'Reading', 'english', 'materi/Anak Anak Bahagia Dengan Seragam Sekolah Dasar, Anak Anak, Sd, Merah Putih PNG Transparan dan Clipart untuk Unduhan Gratis.jpeg', 'Pengurangan adalah salah satu operasi matematika dasar yang sangat penting. Pengurangan berarti mengambil atau mengurangi sebagian dari suatu jumlah.', '', ''),
(16, 'abc24123', 'ppkn', 'materi/5k.jpg', 'Pengurangan adalah salah satu operasi matematika dasar yang sangat penting. Pengurangan berarti mengambil atau mengurangi sebagian dari suatu jumlah.', '', ''),
(17, 'asda', 'ips', 'materi/Anak Anak Bahagia Dengan Seragam Sekolah Dasar, Anak Anak, Sd, Merah Putih PNG Transparan dan Clipart untuk Unduhan Gratis.jpeg', 'Pengurangan adalah salah satu operasi matematika dasar yang sangat penting. Pengurangan berarti mengambil atau mengurangi sebagian dari suatu jumlah.', '', ''),
(18, 'Pecahan', 'ipa', 'materi/5k.jpg', 'matematika', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id_materi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `id_materi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
