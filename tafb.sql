-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2018 at 04:58 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tafb`
--

-- --------------------------------------------------------

--
-- Table structure for table `postingan`
--

CREATE TABLE `postingan` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `caption` varchar(1000) NOT NULL,
  `foto` text NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `status` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `postingan`
--

INSERT INTO `postingan` (`id`, `judul`, `caption`, `foto`, `tanggal`, `status`, `username`) VALUES
(15, 'INI POSTINGAN SAYA RIZSA', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using  Content here, content here , making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for  lorem ipsum  will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'gambar/telkom.png', '14-October-2018 11:09:32', 'Telah Diupdate', 'rizsa'),
(36, 'INI POSTINGAN SAYA RIZSA', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanie', 'gambar/depositphotos_153044848-stock-illustration-ice-cubes-vector.jpg', '14-October-2018 09:36:02', 'Telah Diupdate', 'rafata'),
(37, 'SAYA', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reprod in their exact original form, accompanie', 'gambar/2000px-Black_close_x.svg.png', '14-October-2018 09:34:17', 'Telah Diupdate', 'rafata'),
(38, 'INI POSTINGANKU', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanie', 'gambar/this-4k-bsod-wallpaper-is-the-perfect-choice-for-windows-10-fanboys-513540-2.png', '14-October-2018 09:37:34', 'Dibuat', 'rafata'),
(40, 'SAYA', 'Hai semua nama gue Ewing dan percaya gak sih kalau Hitler, pemimpin Nazi, masih hidup? Percaya gak sih kalau ternyata yang ditemukan dibunker itu bukanlah Hitler? Percaya gak sih kalau ternyata Nazi masih berjaya? Tonton sampai habis ya. Percaya atau tidak, itulah konspirasi.\r\n\r\nDownload Gamely : https://play.google.com/store/apps/de...\r\n\r\n\r\nBantu gue translate atau menuliskan subtitle video ini dengan cara klik link ini.\r\nhttp://www.youtube.com/timedtext_cs_p...', 'gambar/3969383-blue-screen-of-death-wallpaper.png', '14-October-2018 12:43:55', 'Dibuat', 'rizsa'),
(42, 'SAYA adalah', 'Reddit adalah situs web hiburan dan juga berita di mana pengunjung yang telah terdaftar dapat berkontribusi dalam bentuk memberikan posting pranala atau text. Wikipedia\r\nDidirikan: 23 Juni 2005, Medford, Massachusetts, Amerika\r\nCEO: Steve Huffman (10 Jul 2015â€“)\r\nKantor Pusat: San Francisco, California, Amerika\r\nPendiri: Alexis Ohanian, Steve Huffman\r\nOrganisasi induk: Advance Publications\r\nAnak perusahaan: RedditGifts.com', 'gambar/FBRS7474.JPG', '14-October-2018 20:49:10', 'Dibuat', 'firza'),
(43, 'PERTAMA', 'Reddit adalah situs web hiburan dan juga berita di mana pengunjung yang telah terdaftar dapat berkontribusi dalam bentuk memberikan posting pranala atau text. Wikipedia\r\nDidirikan: 23 Juni 2005, Medford, Massachusetts, Amerika\r\nCEO: Steve Huffman (10 Jul 2015â€“)\r\nKantor Pusat: San Francisco, California, Amerika\r\nPendiri: Alexis Ohanian, Steve Huffman\r\nOrganisasi induk: Advance Publications\r\nAnak perusahaan: RedditGifts.com', 'gambar/IMG_8006.JPG', '14-October-2018 20:56:09', 'Telah Diupdate', 'firza'),
(44, 'INI POSTINGAN SAYA TERBARU', 'Reddit adalah situs web hiburan dan juga berita di mana pengunjung yang telah terdaftar dapat berkontribusi dalam bentuk memberikan posting pranala atau text. Wikipedia\r\nDidirikan: 23 Juni 2005, Medford, Massachusetts, Amerika\r\nCEO: Steve Huffman (10 Jul 2015â€“)\r\nKantor Pusat: San Francisco, California, Amerika\r\nPendiri: Alexis Ohanian, Steve Huffman\r\nOrganisasi induk: Advance Publications\r\nAnak perusahaan: RedditGifts.com', 'gambar/IMG_8007.JPG', '14-October-2018 20:59:01', 'Telah Diupdate', 'rafata'),
(45, 'VAPE', 'Reddit adalah situs web hiburan dan juga berita di mana pengunjung yang telah terdaftar dapat berkontribusi dalam bentuk memberikan posting pranala atau text. Wikipedia\r\nDidirikan: 23 Juni 2005, Medford, Massachusetts, Amerika\r\nCEO: Steve Huffman (10 Jul 2015â€“)\r\nKantor Pusat: San Francisco, California, Amerika\r\nPendiri: Alexis Ohanian, Steve Huffman\r\nOrganisasi induk: Advance Publications\r\nAnak perusahaan: RedditGifts.com', 'gambar/IMG_8042.PNG', '14-October-2018 21:00:23', 'Dibuat', 'rafata');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `kelas` varchar(30) NOT NULL,
  `jk` varchar(30) NOT NULL,
  `hobi` varchar(100) NOT NULL,
  `fakultas` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `nama`, `nim`, `kelas`, `jk`, `hobi`, `fakultas`, `alamat`, `foto`) VALUES
('abror', '202cb962ac59075b964b07152d234b70', 'M Abror', '6701174119', 'D3MI4102', 'Laki-Laki', 'Makan Tidur ', 'FEB', 'bandung', 'gambar/profil.png'),
('firza', '202cb962ac59075b964b07152d234b70', 'Firza Maulana Nasution', '6701174113', 'D3MI4102', 'Laki-Laki', 'Makan Nonton Kuliah ', 'FIT', 'bandung', 'gambar/LGCF3552.JPG'),
('rafata', '202cb962ac59075b964b07152d234b70', 'Rafata Bahar', '6701174111', 'D3MI4102', 'Laki-Laki', 'Makan Tidur Nonton ', 'FEB', 'bandung', 'gambar/8-colores-Angry-Eyes-etiqueta-engomada-divertida-del-coche-para-Suv-coche-o-cami-n-ventana.jpg_640x640.jpg'),
('rizsa', '202cb962ac59075b964b07152d234b70', 'Rizsa El Akbar', '6701174115', 'D3MI4102', 'Laki-Laki', 'Makan Tidur Nonton ', 'FIT', 'bandung', 'gambar/rizsa.jpg'),
('yusuf', '202cb962ac59075b964b07152d234b70', 'Yusuf Ramadhan', '6701174112', 'D3MI4102', 'Laki-Laki', 'Makan Tidur ', 'FIK', 'bandung', 'gambar/R83txGn.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `postingan`
--
ALTER TABLE `postingan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `postingan`
--
ALTER TABLE `postingan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `postingan`
--
ALTER TABLE `postingan`
  ADD CONSTRAINT `postingan_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
