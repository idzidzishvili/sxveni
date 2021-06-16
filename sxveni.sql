-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 15, 2021 at 05:33 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sxveni`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

DROP TABLE IF EXISTS `albums`;
CREATE TABLE IF NOT EXISTS `albums` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `servicesid` int(11) NOT NULL,
  `albumid` int(11) NOT NULL,
  `filename` varchar(250) DEFAULT NULL,
  `originalname` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `servicesid`, `albumid`, `filename`, `originalname`) VALUES
(12, 4, 1, '3c4d9e9912d54230c0331cc00dc1d48a.jpg', '1.jpg'),
(13, 4, 1, '9e2a5ae754a6995c9572e654f66c48a2.jpg', '4.jpg'),
(14, 4, 1, 'a5fba42151908fdebbc9663d9dc8e7a6.jpg', '5.jpg'),
(15, 4, 1, 'd6d82a937d2fe5125bc5e321ea9a9227.jpg', '6.jpg'),
(16, 4, 2, '5aacc589bd1174d5a5d37602809a402b.jpg', '7.jpg'),
(17, 4, 2, '29d085fb34accc778854ccdaefee3297.jpg', '8.jpg'),
(18, 4, 2, '867f7c3ffefb605d4ac7abe80079b850.jpg', '9.jpg'),
(19, 4, 2, '72e0fa430bc2786c8b852a78c2a14525.jpg', '10.jpg'),
(20, 4, 3, 'b38c5a5640e3489a153c45d649dd9a70.jpg', '11.jpg'),
(21, 4, 3, '5adbc4da08ed42c5080dfee4d230231a.jpg', '12.jpg'),
(22, 4, 3, 'cef030d1900255f75caf1d66ff40c9d0.jpg', '13.jpg'),
(23, 4, 3, '984f51c52c63fba7ca608faf54a0fa82.jpg', '14.jpg'),
(24, 4, 4, '6954316c6df9f42a692489245a34d51e.jpg', '15.jpg'),
(25, 4, 4, '49c7579700491e633a7ae1734ed93623.jpg', '16.jpg'),
(26, 4, 4, '258ca3b0704b2a9af25774a57ce078d9.jpg', '17.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

DROP TABLE IF EXISTS `partners`;
CREATE TABLE IF NOT EXISTS `partners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `originalname` varchar(250) DEFAULT NULL,
  `filename` varchar(200) NOT NULL,
  `url` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `originalname`, `filename`, `url`) VALUES
(6, '1.png', 'c6ddc0f6e5452469aa123233230c9aab.png', 'http://www.somesite1.com'),
(7, '2.jpg', 'efb1187aa5b99871fbe4ff7c1fa0b22b.jpg', 'http://www.somesite2.com');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content_type` varchar(20) DEFAULT NULL,
  `issimple` tinyint(1) NOT NULL,
  `name_ge` varchar(250) DEFAULT NULL,
  `name_en` varchar(250) DEFAULT NULL,
  `name_ru` varchar(250) DEFAULT NULL,
  `text_ge` text DEFAULT NULL,
  `text_en` text DEFAULT NULL,
  `text_ru` text DEFAULT NULL,
  `file1` varchar(200) DEFAULT NULL,
  `file2` varchar(200) DEFAULT NULL,
  `file3` varchar(200) DEFAULT NULL,
  `file4` varchar(200) DEFAULT NULL,
  `img1` varchar(200) DEFAULT NULL,
  `img2` varchar(200) DEFAULT NULL,
  `img3` varchar(200) DEFAULT NULL,
  `img4` varchar(200) DEFAULT NULL,
  `imgge1` varchar(250) NOT NULL,
  `imgen1` varchar(250) NOT NULL,
  `imgru1` varchar(250) NOT NULL,
  `imgge2` varchar(250) NOT NULL,
  `imgen2` varchar(250) NOT NULL,
  `imgru2` varchar(250) NOT NULL,
  `imgge3` varchar(250) NOT NULL,
  `imgen3` varchar(250) NOT NULL,
  `imgru3` varchar(250) NOT NULL,
  `imgge4` varchar(250) NOT NULL,
  `imgen4` varchar(250) NOT NULL,
  `imgru4` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `content_type`, `issimple`, `name_ge`, `name_en`, `name_ru`, `text_ge`, `text_en`, `text_ru`, `file1`, `file2`, `file3`, `file4`, `img1`, `img2`, `img3`, `img4`, `imgge1`, `imgen1`, `imgru1`, `imgge2`, `imgen2`, `imgru2`, `imgge3`, `imgen3`, `imgru3`, `imgge4`, `imgen4`, `imgru4`) VALUES
(1, 'image', 1, 'ფოტო', 'Photo', 'Фото', 'ფოტოების ქართული ტექსტიიიი, ფოტოების ქართული ტექსტი, ფოტოების ქართული ტექსტი, ფოტოების ქართული ტექსტი, ფოტოების ქართული ტექსტი,', 'english text for photos, english text for photos, english text for photos, english text for photos, english text for photos, english text for photos, english text for photos, english text for photos, english text for photos, english text for photos,', 'Ключевые слова-модификаторы safe и unsafe можно использовать вместе со всеми остальными этими ключевыми словами (хотя следует отметить поддержку браузером), и они помогают предотвратить выравнивание элементов таким образом, что контент становится недоступным.', NULL, NULL, NULL, NULL, 'file_11.jpg', 'file_12.jpg', 'file_13.jpg', 'file_14.jpg', 'file_ge11.png', 'file_en11.png', 'file_ru11.png', 'file_ge12.png', 'file_en12.png', 'file_ru12.png', 'file_ge13.png', 'file_en13.png', 'file_ru13.png', 'file_ge14.png', 'file_en14.png', 'file_ru14.png'),
(2, 'video', 0, 'ვიდეო', 'Video', 'Видео', 'aaa', 'bbb', 'cc', NULL, NULL, NULL, NULL, 'file_21.jpg', NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'audio', 1, 'აუდიო', 'Audio', 'Аудио', 'აუდიო ქართულიdedaa00FF', 'audio_engdfgss11FF', 'audio_rughjghjddd22FF', 'thumbnail31.mp3', 'file0302.mp3', 'file0303.mp3', 'file0304.mp3', 'thumbnail31.mp3', NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 'image', 0, 'დიზაინი', 'Design', 'Дизайн', 'design geo design geo design geo design geo design geo design geo design geo design geo design geo design geo design geo design geo design geo design geo design geo', 'design en design en design en design en design en design en design en design en design en design en design en design en design en design en design en design en design en design en', 'design ru design ru design ru design ru design ru design ru design ru design ru design ru design ru design ru design ru design ru design ru design ru design ru design ru design ru design ru design ru design ru', NULL, NULL, NULL, NULL, 'file_41.jpg', 'file_42.jpg', 'file_43.jpg', 'file_44.jpg', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 'video', 1, 'გრაფიკა', 'Graphic', 'Графика', 'grafika ge', 'grafika en', 'grafika ru', 'RQUeQ-SzQ8k', 'X5VMxWBgm4k', 'mF_4yxnvyAA', 'zIDpZi-36Qs', 'thumbnail51.jpg', 'thumbnail52.png', 'thumbnail53.jpg', 'thumbnail54.jpg', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 'video', 1, 'ანიმაცია', 'Animation', 'Анимация', 'animation ge animation ge animation ge animation ge animation ge animation ge animation ge animation ge animation ge animation ge animation ge animation ge', 'animation en animation en animation en animation en animation en animation en animation en animation en animation en animation en animation en animation en animation en', 'animation ru animation ru animation ru animation ru animation ru animation ru animation ru animation ru animation ru animation ru animation ru animation ru animation ru animation ru', '-tDicEZoPsE', '5nPWw7sHRVk', 'IZCuACzUTRA', 'T1DelzsvEeU', 'thumbnail61.jpg', 'thumbnail62.jpg', 'thumbnail63.jpg', 'thumbnail64.jpg', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 'video', 1, 'ადაპტაცია', 'Adaptation', 'Адаптация', 'adaptation ge adaptation ge adaptation ge adaptation ge adaptation ge adaptation ge adaptation ge adaptation ge adaptation ge adaptation ge adaptation ge adaptation ge adaptation ge', 'adaptation ge adaptation ge adaptation ge adaptation ge adaptation ge adaptation ge adaptation ge adaptation ge adaptation ge adaptation ge adaptation ge adaptation ge adaptation ge adaptation ge adaptation ge adaptation ge', 'adaptation ru adaptation ru adaptation ru adaptation ru adaptation ru adaptation ru adaptation ru adaptation ru adaptation ru adaptation ru adaptation ru adaptation ru adaptation ru adaptation ru', 'gwBEmyqOP3o', '5nPWw7sHRVk', 'IZCuACzUTRA', 'RQUeQ-SzQ8k', 'thumbnail71.jpg', 'thumbnail72.jpg', 'thumbnail73.jpg', 'thumbnail74.jpg', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, 'website', 1, 'ვებ დეველოპმენტი', 'Web-development', 'Веб-разработка', 'development ge development ge development ge development ge development ge development ge development ge development ge development ge development ge development ge', 'development en development enn development ru development ru development ru development ru development ru development ru development ru development ru development en', 'development ru development ru development ru development ru development ru development ru development ru development ru development ru development ru development ru', 'https://www.gex.ge', 'https://www.google.com', 'https://www.yahoo.com', 'https://www.facebook.com', 'thumbnail81.png', 'thumbnail82.jpg', 'thumbnail83.png', 'thumbnail84.jpg', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `siteparams`
--

DROP TABLE IF EXISTS `siteparams`;
CREATE TABLE IF NOT EXISTS `siteparams` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `text_ge` varchar(250) DEFAULT NULL,
  `text_en` varchar(250) DEFAULT NULL,
  `text_ru` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `siteparams`
--

INSERT INTO `siteparams` (`id`, `title`, `text_ge`, `text_en`, `text_ru`) VALUES
(1, 'menu_services', 'სერვისები', 'SERVICES', 'СЕРВИСЫ'),
(2, 'menu_portfolio', 'პორტფოლიო', 'PORTFOLIO', 'ПОРТФОЛИО'),
(3, 'menu_partners', 'პარტნიორები', 'PARTNERS', 'ПАРТНЕРЫ'),
(4, 'menu_contact', 'კონტაქტი', 'CONTACT', 'КОНТАКТ'),
(5, 'address', 'თბილისი, უზნაძის N24', 'Uznadze st, Tbilisi, Georgia', 'Узнадзе, Тбилиси, Грузия'),
(6, 'phone', '(+995) 596366366', NULL, NULL),
(7, 'email', 'info@skhveni.ge', NULL, NULL),
(8, 'Facebook page', 'http://www.facebook.com/iasudhaiudahiasud', NULL, NULL),
(9, 'Instagram page', 'http://www.instagram.com/iasudhaiudahdiasud', NULL, NULL),
(10, 'Linkedin page', 'http://www.linkedin.com/iasudhaiudahdiasud', NULL, NULL),
(11, 'Youtube page', 'http://www.youtube.com/iasudhaiuda8diasud', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'artur', '$2y$10$Pm.R9j0QhGOAbmEQ5a8ewueuRcWVTk9H.xjc2Q.w9JPojrKf8f4q6');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
