-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2024 at 10:21 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `bukuID` int(11) NOT NULL,
  `kategoriID` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `tahun_terbit` int(11) NOT NULL,
  `sinopsis` varchar(255) NOT NULL,
  `stok` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`bukuID`, `kategoriID`, `foto`, `judul`, `penulis`, `penerbit`, `tahun_terbit`, `sinopsis`, `stok`) VALUES
(9, 2, 'naruto.jpg', 'Naruto', 'Masashi Kishimoto', 'Shueisha', 1999, 'Komik Naruto bercerita seputar kehidupan tokoh utamanya, Naruto Uzumaki, seorang ninja remaja yang bersifat hiperaktif, ambisius dan petualangannya dalam mewujudkan keinginan untuk mendapatkan gelar Hokage, ninja terkuat di desanya.', 8),
(24, 2, 'jjk.jpg', 'Jujutsu Kaisen', 'Gege Akutami', 'Shueisha', 2018, 'Manga ini mengisahkan Yuji yang masuk ke Klub Penelitian Ilmu Gaib, agar bisa bersantai dan bergaul dengan para senior. Sayang, senior-seniornya telah membuka segel dari jimat kutukan tingkat tinggi di sekolahnya, dan menarik roh kutukan muncul', 4),
(25, 1, 'hujan.jpg', 'Hujan', 'Tereliye', ' PT. GRAMEDIA PUSTAKA UTAMA,', 2016, 'Pada 2042, dunia telah memasuki era di mana peran manusia telah digantikan oleh ilmu pengeahuan dan teknologi canggih. Cerita berfokus pada karakter Lail, gadis berusia 13 tahun, yang pada hari pertamanya di sekolah harus mengalami bencana gunung meletus ', 4),
(26, 3, 'htsstti.jpg', 'How To Slap Someone Through Internet', 'Rifqi', 'Oonga Boonga', 2024, 'feeling annoyed with someone? Want to slap him but its so far away? This book will tell you how to slap people through the internet!', 15),
(27, 3, 'htb.jpg', 'How to Breathe', 'Rifqi', 'Oonga Boonga', 2023, 'Lupa caranya bernafas? Buku ini mungkin akan menyelamatkan hidup Anda!', 15),
(28, 1, 'mwivb.jpg', 'My Wife is Very CUNNY(Cute and Funny)', 'Rifqi', 'Oonga Boonga', 2015, 'You know what? My Wife is.....TOO GODDAMN CUTE mwah mwah mwah mwah :3', 1),
(29, 5, 'necro.jpg', 'Necronomicon', 'H.P Lovecraft', 'H.P Lovecraft', 1938, 'Di sudut gelap peradaban kuno dan tersembunyi di antara gulungan pengetahuan terlarang, terdapat sebuah buku tebal yang telah menyita pikiran banyak orang. Ia dikenal sebagai Necronomicon, Kitab Orang Mati. Asal-usulnya diselimuti misteri dan dikelilingi ', 1),
(30, 4, 'ea.jpg', 'Ensiklopedia Antariksa', 'James Trefil', 'KT. NEA Publishing', 2018, 'National Geographic Ensiklopedia Antariksa merupakan buku referensi lengkap mengenai alam semesta dan segala yang terdapat di dalamnya.', 2),
(31, 3, 'ebook-html-dan-css-dasar-untuk-pemula.png', 'Belajar HTML Dan CSS Dasar', 'Diki Alfarabi Hadi', 'Malasngoding', 2020, 'Buku sederhana ini merupakan rangkuman dari tutorial-tutorial HTML dasar dan CSS dasar di www.malasngoding.com. karena mungkin banyak dari teman-teman yang merasa kesulitan dalam belajar HTML dan CSS karena harus memerlukan koneksi internet untuk mengakse', 10),
(32, 3, 'cover-html-css.png', 'Belajar HTML Dan CSS Dasar 2', 'Diki Alfarabi Hadi', 'Malasngoding', 2020, 'Buku sederhana ini merupakan rangkuman dari tutorial-tutorial HTML dasar dan CSS dasar di www.malasngoding.com. karena mungkin banyak dari teman-teman yang merasa kesulitan dalam belajar HTML dan CSS karena harus memerlukan koneksi internet untuk mengakse', 12);

-- --------------------------------------------------------

--
-- Table structure for table `kategoribuku`
--

CREATE TABLE `kategoribuku` (
  `kategoriID` int(11) NOT NULL,
  `namakategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategoribuku`
--

INSERT INTO `kategoribuku` (`kategoriID`, `namakategori`) VALUES
(1, 'Novel'),
(2, 'Komik'),
(3, 'Buku Pelajaran'),
(4, 'Ensiklopedia'),
(6, 'Panduan'),
(7, 'Biografi'),
(8, 'Kamus'),
(9, 'Cerpen/Dongeng'),
(10, 'Majalah'),
(11, 'Atlas');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `peminjamanID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `bukuID` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tanggalpeminjaman` date NOT NULL,
  `tanggalpengembalian` date NOT NULL,
  `jumlah` int(20) NOT NULL,
  `status` enum('dipinjam','dikembalikan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`peminjamanID`, `userID`, `bukuID`, `judul`, `tanggalpeminjaman`, `tanggalpengembalian`, `jumlah`, `status`) VALUES
(16, 6, 9, '', '2024-02-21', '2024-02-28', 1, 'dipinjam'),
(26, 11, 32, '', '2024-02-22', '2024-02-29', 1, 'dipinjam'),
(27, 10, 24, '', '2024-02-22', '2024-02-29', 2, 'dipinjam'),
(28, 12, 25, '', '2024-02-22', '2024-02-29', 1, 'dipinjam'),
(29, 8, 26, '', '2024-02-22', '2024-02-29', 1, 'dipinjam'),
(30, 9, 9, '', '2024-02-22', '2024-02-29', 3, 'dipinjam'),
(31, 14, 30, '', '2024-02-22', '2024-02-29', 1, 'dipinjam'),
(32, 14, 32, '', '2024-02-22', '2024-02-29', 1, 'dipinjam'),
(34, 13, 27, '', '2024-02-22', '2024-02-29', 1, 'dipinjam'),
(37, 15, 31, '', '2024-02-22', '2024-02-29', 1, 'dipinjam'),
(41, 0, 9, '', '2024-02-23', '2024-03-01', 1, 'dipinjam'),
(42, 0, 9, '', '2024-02-23', '2024-03-01', 1, 'dipinjam');

--
-- Triggers `peminjaman`
--
DELIMITER $$
CREATE TRIGGER `peminjaman` AFTER INSERT ON `peminjaman` FOR EACH ROW BEGIN
	UPDATE buku SET stok = stok-new.jumlah
    WHERE bukuID = new.bukuID;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `pengembalian` AFTER UPDATE ON `peminjaman` FOR EACH ROW BEGIN
	UPDATE buku SET stok = stok+old.jumlah
    WHERE bukuID = old.bukuID;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `ulasanbuku`
--

CREATE TABLE `ulasanbuku` (
  `ulasanID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `bukuID` int(11) NOT NULL,
  `ulasan` text NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `level` enum('admin','petugas','pengguna') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `username`, `password`, `email`, `nama_lengkap`, `alamat`, `level`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', 'admin', 'Padalarang', 'admin'),
(5, 'petugas', 'petugas', 'petugas@gmail.com', 'petugas', 'Bandung', 'petugas'),
(6, 'pengguna', 'pengguna', 'pengguna@gmail.com', 'pengguna', 'Cimareme', 'pengguna'),
(8, 'pengguna1', 'pengguna1', 'pengguna1@gmail.com', 'Pengguna1', 'Earth', 'pengguna'),
(9, 'Sans', '12345', 'sans@gmail.com', 'Ihsan Agus', 'Batujajar', 'pengguna'),
(10, 'Lianmi', 'lianmi', 'fahmikurniawan@gmail.com', 'Fahmi Kurniawan', 'Leuwi Gajah', 'pengguna'),
(11, 'Fairlyy', '12345', 'rizqylawu@gmail.com', 'Rizqy Lawu Saputra', 'Cibodas', 'pengguna'),
(12, 'Mikan', 'mikan', 'chikaaqours@gmail.com', 'Chika Takami', 'Numazu', 'pengguna'),
(13, 'Honk', 'muse', 'honokamuse@gmail.com', 'Honoka Kousaka', 'Japan', 'pengguna'),
(14, 'Yousorooo', '12345', 'youaqours@gmail.com', 'You Watanabe', 'Numazu', 'pengguna'),
(15, 'Rangga', '12345', 'rangga@gmail.com', 'Rangga Surya Putra', 'Padalarang', 'pengguna');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`bukuID`),
  ADD KEY `kategoriID` (`kategoriID`);

--
-- Indexes for table `kategoribuku`
--
ALTER TABLE `kategoribuku`
  ADD PRIMARY KEY (`kategoriID`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`peminjamanID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `bukuID` (`bukuID`);

--
-- Indexes for table `ulasanbuku`
--
ALTER TABLE `ulasanbuku`
  ADD PRIMARY KEY (`ulasanID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `bukuID` (`bukuID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `bukuID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `kategoribuku`
--
ALTER TABLE `kategoribuku`
  MODIFY `kategoriID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `peminjamanID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `ulasanbuku`
--
ALTER TABLE `ulasanbuku`
  MODIFY `ulasanID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ulasanbuku`
--
ALTER TABLE `ulasanbuku`
  ADD CONSTRAINT `ulasanbuku_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
