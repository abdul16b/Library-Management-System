-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2021 at 07:03 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `usc_library`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bookID` int(11) NOT NULL,
  `bookName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bookDescription` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bookCover` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ISBN` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bookID`, `bookName`, `bookDescription`, `bookCover`, `author`, `category`, `ISBN`) VALUES
(40, 'Heavens Peak', 'The beautiful resort town of Heaven\'s Peak is home to gorgeous landscapes and terrifying secrets.', 'https://m.media-amazon.com/images/I/51y3g75bCJL.jpg', 'Miguel Estrada', 'Adventure', '1234567891'),
(41, 'The Three Musketeers', 'The Three Musketeers is a French historical adventure novel written in 1844 by French author Alexandre Dumas. It is in the swashbuckler genre, which has heroic, chivalrous swordsmen who fight for justice.', 'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1388640790l/10562.jpg', ' Alexandre Dumas', 'Horror', '123156456'),
(42, 'Dune', 'Dune is a 1965 science-fiction novel by American author Frank Herbert, originally published as two separate serials in Analog magazine. It tied with Roger Zelazny\'s This Immortal for the Hugo Award in 1966, and it won the inaugural Nebula Award for Best N', 'https://prodimage.images-bn.com/pimages/9780425266540_p0_v6_s550x406.jpg', 'Frank Herbert', 'Science-Fiction', '1548745454');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryID` int(11) NOT NULL,
  `categoryName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `categoryDescription` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `categoryCover` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL COMMENT '0=bocked,1=active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryID`, `categoryName`, `categoryDescription`, `categoryCover`, `status`) VALUES
(1, 'Horror', 'Horrors Novel', 'https://cdn4.iconfinder.com/data/icons/book-shop/64/48_horror_genre_book_shop_reading_literature-512.png', 1),
(2, 'Contemporary', 'could happen to real people', 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Gutenberg_Bible%2C_Lenox_Copy%2C_New_York_Public_Library%2C_2009._Pic_01.jpg/447px-Gutenberg_Bible%2C_Lenox_Copy%2C_New_York_Public_Library%2C_2009._Pic_01.jpg', 1),
(10, 'Adventure', 'Full of excitement', 'zsaragah', 1),
(12, 'Science-Fiction', 'Fiction Book', 'af', 1),
(13, 'Romance', 'Love', 'try', 1),
(15, 'Drama', 'Sorrow', 'sg', 1),
(16, 'Romance-Comedy', 'ROM-COM', 'zsaragah', 1),
(17, 'Thriller', 'Full of excitement', 'faf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `issuedbook`
--

CREATE TABLE `issuedbook` (
  `issueBookID` int(11) NOT NULL,
  `USCID` int(8) DEFAULT NULL,
  `bookID` int(11) DEFAULT NULL,
  `issuedDate` timestamp NULL DEFAULT current_timestamp(),
  `dueDate` timestamp NULL DEFAULT NULL,
  `returnDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `status` int(1) NOT NULL COMMENT '0=not return, 1=returned',
  `fine` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `issuedbook`
--

INSERT INTO `issuedbook` (`issueBookID`, `USCID`, `bookID`, `issuedDate`, `dueDate`, `returnDate`, `status`, `fine`) VALUES
(14, 19104918, 40, '2021-06-02 11:13:24', '2021-06-11 16:00:00', '2021-06-02 12:49:51', 1, 0),
(15, 19104918, 42, '2021-06-02 11:48:05', '2021-06-11 16:00:00', '2021-06-02 13:08:24', 1, 10),
(16, 19104918, 41, '2021-06-02 13:07:43', '2021-06-11 16:00:00', NULL, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `USCID` int(11) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(1) DEFAULT NULL COMMENT '0=blocked, 1=active',
  `type` int(1) NOT NULL COMMENT '0-users,1-admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `email`, `USCID`, `password`, `images`, `status`, `type`) VALUES
(13, 'Abdul Azis Mamarinta', 'abdul@gmail.com', 19104870, '827ccb0eea8a706c4c34a16891f84e7b', 'https://media.istockphoto.com/photos/colored-powder-explosion-abstract-closeup-dust-on-backdrop-colorful-picture-id1072093690?k=6&m=1072093690&s=612x612&w=0&h=Eyk67XBt4sr3Bk1MubM6dHpvEVNICX4L7FumWhcTwuY=', 1, 0),
(14, 'John Doe', 'John@gmail.com', 19104871, '202cb962ac59075b964b07152d234b70', 'https://thumbs.dreamstime.com/b/vector-icon-user-avatar-web-site-mobile-app-man-face-flat-style-social-network-profile-45836554.jpg', 1, 0),
(15, 'sample', 'sample@test', 19104872, 'e10adc3949ba59abbe56e057f20f883e', 'https://thumbs.dreamstime.com/b/vector-icon-user-avatar-web-site-mobile-app-man-face-flat-style-social-network-profile-45836554.jpg', 1, 0),
(16, 'Junmar Layaog', '19104918@usc.edu.ph', 19104918, '8bebbdfe312ea97bac621823796836b5', 'https://wallpaperaccess.com/full/4595683.jpg', 1, 0),
(17, 'Kerwien Bengil', 'kerwien@test', 19104895, 'e070498700f2fe27e1ad595e4680a097', 'https://thumbs.dreamstime.com/b/vector-icon-user-avatar-web-site-mobile-app-man-face-flat-style-social-network-profile-45836554.jpg', 1, 0),
(19, 'admin', 'admin@test', 11111111, '21232f297a57a5a743894a0e4a801fc3', 'https://thumbs.dreamstime.com/b/vector-icon-user-avatar-web-site-mobile-app-man-face-flat-style-social-network-profile-45836554.jpg', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bookID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `issuedbook`
--
ALTER TABLE `issuedbook`
  ADD PRIMARY KEY (`issueBookID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `bookID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `issuedbook`
--
ALTER TABLE `issuedbook`
  MODIFY `issueBookID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
