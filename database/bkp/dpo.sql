-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 20, 2017 at 12:56 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shsh`
--

-- --------------------------------------------------------

--
-- Table structure for table `ABforms`
--

CREATE TABLE IF NOT EXISTS `ABforms` (
  `id` int(11) NOT NULL,
  `lang` varchar(2) NOT NULL,
  `show` int(1) NOT NULL DEFAULT '1',
  `pos` int(2) NOT NULL,
  `module` varchar(20) NOT NULL,
  `title` varchar(20) NOT NULL,
  `placeholder` varchar(255) NOT NULL,
  `type` varchar(20) NOT NULL,
  `include` varchar(20) NOT NULL,
  `class` varchar(100) NOT NULL,
  `id_name` varchar(10) NOT NULL,
  `width` varchar(10) NOT NULL,
  `height` varchar(10) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=119 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ABforms`
--

INSERT INTO `ABforms` (`id`, `lang`, `show`, `pos`, `module`, `title`, `placeholder`, `type`, `include`, `class`, `id_name`, `width`, `height`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'ge', 1, 0, 'news', 'userfile', '', 'userfile', '_File', '', '', '1200', '1000', NULL, '2016-10-31 10:58:32', '2016-10-31 10:58:32'),
(4, 'ge', 1, 0, 'news', 'title_ge', 'სათაური / ქართული', 'text', '_InputText', '', '', '', '', NULL, NULL, NULL),
(5, 'ge', 1, 0, 'news', 'short_text_ge', 'მოკლე ტექსტი / ქართული', 'text', '_InputText', '', '', '', '', NULL, NULL, NULL),
(6, 'ge', 1, 0, 'news', 'full_text_ge', 'სრული ტექსტი / ქართული', 'textarea', '_TextArea', '', 'ck-ge', '', '', NULL, NULL, NULL),
(7, 'ge', 1, 0, 'news', 'description_ge', 'აღწერა / ქართული', 'text', '_InputText', '', '', '', '', NULL, NULL, NULL),
(8, 'ge', 1, 0, 'news', 'keywords_ge', 'საკვანძო სიტყვები / ქართული', 'textarea', '_InputText', '', '', '', '', NULL, NULL, NULL),
(9, 'en', 1, 0, 'news', 'title_en', 'სათაური / ინგლისური', 'text', '_InputText', '', '', '', '', NULL, NULL, NULL),
(10, 'en', 1, 0, 'news', 'short_text_en', 'მოკლე ტექსტი / ინგლისური', 'text', '_InputText', '', '', '', '', NULL, NULL, NULL),
(11, 'en', 1, 0, 'news', 'full_text_en', 'სრული ტექსტი / ინგლისური', 'textarea', '_TextArea', '', 'ck-en', '', '', NULL, NULL, NULL),
(12, 'en', 1, 0, 'news', 'description_en', 'აღწერა / ინგლისური', 'text', '_InputText', '', '', '', '', NULL, NULL, NULL),
(13, 'en', 1, 0, 'news', 'keywords_en', 'საკვანძო სიტყვები / ინგლისური', 'textarea', '_InputText', '', '', '', '', NULL, NULL, NULL),
(14, 'ru', 1, 0, 'news', 'title_ru', 'სათაური / რუსული', 'text', '_InputText', '', '', '', '', NULL, NULL, NULL),
(15, 'ru', 1, 0, 'news', 'short_text_ru', 'მოკლე ტექსტი / რუსული', 'text', '_InputText', '', '', '', '', NULL, NULL, NULL),
(16, 'ru', 1, 0, 'news', 'full_text_ru', 'სრული ტექსტი / რუსული', 'textarea', '_TextArea', '', 'ck-ru', '', '', NULL, NULL, NULL),
(17, 'ru', 1, 0, 'news', 'description_ru', 'აღწერა / რუსული', 'text', '_InputText', '', '', '', '', NULL, NULL, NULL),
(18, 'ru', 1, 0, 'news', 'keywords_ru', 'საკვანძო სიტყვები / რუსული', 'textarea', '_InputText', '', '', '', '', NULL, NULL, NULL),
(19, 'ge', 1, 0, 'news', 'main', 'გამოჩენის მეთოდი', 'main', '_DropDownMain', '', '', '', '', NULL, NULL, NULL),
(20, 'ge', 1, 0, 'news', 'userfile', '', 'userfile', '_File', '', '', '1200', '1000', NULL, '2016-10-31 10:58:32', '2016-10-31 10:58:32'),
(21, 'ge', 1, 0, 'album', 'title_ge', 'სათაური / ქართული', 'text', '_InputText', '', '', '', '', NULL, NULL, NULL),
(22, 'ge', 1, 0, 'album', 'short_text_ge', 'მოკლე ტექსტი / ქართული', 'text', '_InputText', '', '', '', '', NULL, NULL, NULL),
(23, 'ge', 1, 0, 'album', 'full_text_ge', 'სრული ტექსტი / ქართული', 'textarea', '_TextArea', '', 'ck-ge', '', '', NULL, NULL, NULL),
(24, 'ge', 1, 0, 'album', 'description_ge', 'აღწერა / ქართული', 'text', '_InputText', '', '', '', '', NULL, NULL, NULL),
(25, 'ge', 1, 0, 'album', 'keywords_ge', 'საკვანძო სიტყვები / ქართული', 'textarea', '_InputText', '', '', '', '', NULL, NULL, NULL),
(26, 'en', 1, 0, 'album', 'title_en', 'სათაური / ინგლისური', 'text', '_InputText', '', '', '', '', NULL, NULL, NULL),
(27, 'en', 1, 0, 'album', 'short_text_en', 'მოკლე ტექსტი / ინგლისური', 'text', '_InputText', '', '', '', '', NULL, NULL, NULL),
(28, 'en', 1, 0, 'album', 'full_text_en', 'სრული ტექსტი / ინგლისური', 'textarea', '_TextArea', '', 'ck-en', '', '', NULL, NULL, NULL),
(29, 'en', 1, 0, 'album', 'description_en', 'აღწერა / ინგლისური', 'text', '_InputText', '', '', '', '', NULL, NULL, NULL),
(30, 'en', 1, 0, 'album', 'keywords_en', 'საკვანძო სიტყვები / ინგლისური', 'textarea', '_InputText', '', '', '', '', NULL, NULL, NULL),
(31, 'ru', 1, 0, 'album', 'title_ru', 'სათაური / რუსული', 'text', '_InputText', '', '', '', '', NULL, NULL, NULL),
(32, 'ru', 1, 0, 'album', 'short_text_ru', 'მოკლე ტექსტი / რუსული', 'text', '_InputText', '', '', '', '', NULL, NULL, NULL),
(33, 'ru', 1, 0, 'album', 'full_text_ru', 'სრული ტექსტი / რუსული', 'textarea', '_TextArea', '', 'ck-ru', '', '', NULL, NULL, NULL),
(34, 'ru', 1, 0, 'album', 'description_ru', 'აღწერა / რუსული', 'text', '_InputText', '', '', '', '', NULL, NULL, NULL),
(35, 'ru', 1, 0, 'album', 'keywords_ru', 'საკვანძო სიტყვები / რუსული', 'textarea', '_InputText', '', '', '', '', NULL, NULL, NULL),
(36, 'ge', 1, 0, 'album', 'main', 'გამოჩენის მეთოდი', 'main', '_DropDownMain', '', '', '', '', NULL, NULL, NULL),
(37, 'ge', 1, 0, 'gallery', 'title_ge', 'სათაური / ქართული', 'text', '_InputText', '', '', '', '', NULL, NULL, NULL),
(38, 'ge', 1, 0, 'gallery', 'short_text_ge', 'მოკლე ტექსტი / ქართული', 'text', '_InputText', '', '', '', '', NULL, NULL, NULL),
(42, 'en', 1, 0, 'gallery', 'title_en', 'სათაური / ინგლისური', 'text', '_InputText', '', '', '', '', NULL, NULL, NULL),
(43, 'en', 1, 0, 'gallery', 'short_text_en', 'მოკლე ტექსტი / ინგლისური', 'text', '_InputText', '', '', '', '', NULL, NULL, NULL),
(47, 'ru', 1, 0, 'gallery', 'title_ru', 'სათაური / რუსული', 'text', '_InputText', '', '', '', '', NULL, NULL, NULL),
(48, 'ru', 1, 0, 'gallery', 'short_text_ru', 'მოკლე ტექსტი / რუსული', 'text', '_InputText', '', '', '', '', NULL, NULL, NULL),
(52, 'ge', 1, 0, 'gallery', 'main', 'გამოჩენის მეთოდი', 'main', '_DropDownMain', '', '', '', '', NULL, NULL, NULL),
(53, 'ge', 1, 0, 'videos', 'userfile', '', 'userfile', '_File', '', '', '1200', '1000', NULL, '2016-10-31 10:58:32', '2016-10-31 10:58:32'),
(54, 'ge', 1, 1, 'videos', 'title_ge', 'სათაური / ქართული', 'text', '_InputText', '', '', '', '', NULL, NULL, NULL),
(55, 'ge', 1, 3, 'videos', 'video_url', 'ვიდეოს ლინკი', 'text', '_InputText', '', '', '', '', NULL, NULL, NULL),
(56, 'ge', 1, 2, 'videos', 'short_text_ge', 'მოკლე ტექსტი / ქართული', 'text', '_InputText', '', '', '', '', NULL, NULL, NULL),
(57, 'ge', 1, 4, 'videos', 'full_text_ge', 'სრული ტექსტი / ქართული', 'textarea', '_TextArea', '', 'ck-ge', '', '', NULL, NULL, NULL),
(58, 'ge', 1, 5, 'videos', 'description_ge', 'აღწერა / ქართული', 'text', '_InputText', '', '', '', '', NULL, NULL, NULL),
(59, 'ge', 1, 6, 'videos', 'keywords_ge', 'საკვანძო სიტყვები / ქართული', 'textarea', '_InputText', '', '', '', '', NULL, NULL, NULL),
(60, 'en', 1, 1, 'videos', 'title_en', 'სათაური / ინგლისური', 'text', '_InputText', '', '', '', '', NULL, NULL, NULL),
(61, 'en', 1, 2, 'videos', 'short_text_en', 'მოკლე ტექსტი / ინგლისური', 'text', '_InputText', '', '', '', '', NULL, NULL, NULL),
(62, 'en', 1, 3, 'videos', 'full_text_en', 'სრული ტექსტი / ინგლისური', 'textarea', '_TextArea', '', 'ck-en', '', '', NULL, NULL, NULL),
(63, 'en', 1, 4, 'videos', 'description_en', 'აღწერა / ინგლისური', 'text', '_InputText', '', '', '', '', NULL, NULL, NULL),
(64, 'en', 1, 5, 'videos', 'keywords_en', 'საკვანძო სიტყვები / ინგლისური', 'textarea', '_InputText', '', '', '', '', NULL, NULL, NULL),
(65, 'ru', 1, 1, 'videos', 'title_ru', 'სათაური / რუსული', 'text', '_InputText', '', '', '', '', NULL, NULL, NULL),
(66, 'ru', 1, 2, 'videos', 'short_text_ru', 'მოკლე ტექსტი / რუსული', 'text', '_InputText', '', '', '', '', NULL, NULL, NULL),
(67, 'ru', 1, 3, 'videos', 'full_text_ru', 'სრული ტექსტი / რუსული', 'textarea', '_TextArea', '', 'ck-ru', '', '', NULL, NULL, NULL),
(68, 'ru', 1, 4, 'videos', 'description_ru', 'აღწერა / რუსული', 'text', '_InputText', '', '', '', '', NULL, NULL, NULL),
(69, 'ru', 1, 5, 'videos', 'keywords_ru', 'საკვანძო სიტყვები / რუსული', 'textarea', '_InputText', '', '', '', '', NULL, NULL, NULL),
(70, 'ge', 1, 0, 'videos', 'main', 'გამოჩენის მეთოდი', 'main', '_DropDownMain', '', '', '', '', NULL, '2016-10-31 10:58:32', '2016-10-31 10:58:32'),
(71, 'ge', 1, 0, 'slider', 'userfile', '', 'userfile', '_File', '', '', '1200', '1000', NULL, '2016-10-31 10:58:32', '2016-10-31 10:58:32'),
(72, 'ge', 1, 1, 'slider', 'title_ge', 'სათაური / ქართული', 'text', '_InputText', '', '', '', '', NULL, NULL, NULL),
(73, 'ge', 1, 3, 'slider', 'url', 'ლინკი (შიავსეთ მხოლოდ ინდივიდუალურ შემთხვევაში)', 'text', '_InputText', '', '', '', '', NULL, NULL, NULL),
(74, 'ge', 1, 4, 'slider', 'target', 'ლინკის გახსნის მეთოდი', 'main', '_DropDownTarget', '', '', '', '', NULL, NULL, NULL),
(75, 'ge', 1, 2, 'slider', 'short_text_ge', 'მოკლე ტექსტი / ქართული', 'textarea', '_TextArea', '', 'ck-ge', '', '', NULL, NULL, NULL),
(76, 'ge', 1, 5, 'slider', 'full_text_ge', 'სრული ტექსტი / ქართული', 'textarea', '_TextArea', '', 'ck-helper', '', '', NULL, NULL, NULL),
(77, 'ge', 1, 6, 'slider', 'description_ge', 'აღწერა / ქართული', 'text', '_InputText', '', '', '', '', NULL, NULL, NULL),
(78, 'ge', 1, 7, 'slider', 'keywords_ge', 'საკვანძო სიტყვები / ქართული', 'textarea', '_InputText', '', '', '', '', NULL, NULL, NULL),
(79, 'en', 1, 1, 'slider', 'title_en', 'სათაური / ინგლისური', 'text', '_InputText', '', '', '', '', NULL, NULL, NULL),
(80, 'en', 1, 2, 'slider', 'short_text_en', 'მოკლე ტექსტი / ინგლისური', 'text', '_InputText', '', '', '', '', NULL, NULL, NULL),
(81, 'en', 1, 3, 'slider', 'full_text_en', 'სრული ტექსტი / ინგლისური', 'textarea', '_TextArea', '', 'ck-en', '', '', NULL, NULL, NULL),
(82, 'en', 1, 4, 'slider', 'description_en', 'აღწერა / ინგლისური', 'text', '_InputText', '', '', '', '', NULL, NULL, NULL),
(83, 'en', 1, 5, 'slider', 'keywords_en', 'საკვანძო სიტყვები / ინგლისური', 'textarea', '_InputText', '', '', '', '', NULL, NULL, NULL),
(84, 'ru', 1, 1, 'slider', 'title_ru', 'სათაური / რუსული', 'text', '_InputText', '', '', '', '', NULL, NULL, NULL),
(85, 'ru', 1, 2, 'slider', 'short_text_ru', 'მოკლე ტექსტი / რუსული', 'text', '_InputText', '', '', '', '', NULL, NULL, NULL),
(86, 'ru', 1, 3, 'slider', 'full_text_ru', 'სრული ტექსტი / რუსული', 'textarea', '_TextArea', '', 'ck-ru', '', '', NULL, NULL, NULL),
(87, 'ru', 1, 4, 'slider', 'description_ru', 'აღწერა / რუსული', 'text', '_InputText', '', '', '', '', NULL, NULL, NULL),
(88, 'ru', 1, 5, 'slider', 'keywords_ru', 'საკვანძო სიტყვები / რუსული', 'textarea', '_InputText', '', '', '', '', NULL, NULL, NULL),
(89, '', 1, 8, '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(90, '', 1, 0, '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(91, '', 1, 0, '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(92, '', 1, 0, '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(93, '', 1, 0, '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(94, '', 1, 0, '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(95, '', 1, 0, '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(96, '', 1, 0, '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(97, '', 1, 0, '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(98, '', 1, 0, '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(99, '', 1, 0, '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(100, 'ge', 1, 0, 'banner', 'userfile', '', 'userfile', '_File', '', '', '1200', '1000', NULL, '2016-10-31 10:58:32', '2016-10-31 10:58:32'),
(101, 'ge', 1, 1, 'banner', 'title_ge', 'სათაური / ქართული', 'text', '_InputText', '', '', '', '', NULL, NULL, NULL),
(102, 'ge', 1, 3, 'banner', 'url', 'ლინკი (შიავსეთ მხოლოდ ინდივიდუალურ შემთხვევაში)', 'text', '_InputText', '', '', '', '', NULL, NULL, NULL),
(103, 'ge', 1, 4, 'banner', 'target', 'ლინკის გახსნის მეთოდი', 'main', '_DropDownTarget', '', '', '', '', NULL, NULL, NULL),
(104, 'ge', 1, 2, 'banner', 'short_text_ge', 'მოკლე ტექსტი / ქართული', 'textarea', '_TextArea', '', 'ck-ge', '', '', NULL, NULL, NULL),
(105, 'ge', 1, 5, 'banner', 'full_text_ge', 'სრული ტექსტი / ქართული', 'textarea', '_TextArea', '', 'ck-helper', '', '', NULL, NULL, NULL),
(106, 'ge', 1, 6, 'banner', 'description_ge', 'აღწერა / ქართული', 'text', '_InputText', '', '', '', '', NULL, NULL, NULL),
(107, 'ge', 1, 7, 'banner', 'keywords_ge', 'საკვანძო სიტყვები / ქართული', 'textarea', '_InputText', '', '', '', '', NULL, NULL, NULL),
(108, 'en', 1, 1, 'banner', 'title_en', 'სათაური / ინგლისური', 'text', '_InputText', '', '', '', '', NULL, NULL, NULL),
(109, 'en', 1, 2, 'banner', 'short_text_en', 'მოკლე ტექსტი / ინგლისური', 'text', '_InputText', '', '', '', '', NULL, NULL, NULL),
(110, 'en', 1, 3, 'banner', 'full_text_en', 'სრული ტექსტი / ინგლისური', 'textarea', '_TextArea', '', 'ck-en', '', '', NULL, NULL, NULL),
(111, 'en', 1, 4, 'banner', 'description_en', 'აღწერა / ინგლისური', 'text', '_InputText', '', '', '', '', NULL, NULL, NULL),
(112, 'en', 1, 5, 'banner', 'keywords_en', 'საკვანძო სიტყვები / ინგლისური', 'textarea', '_InputText', '', '', '', '', NULL, NULL, NULL),
(113, 'ru', 1, 1, 'banner', 'title_ru', 'სათაური / რუსული', 'text', '_InputText', '', '', '', '', NULL, NULL, NULL),
(114, 'ru', 1, 2, 'banner', 'short_text_ru', 'მოკლე ტექსტი / რუსული', 'text', '_InputText', '', '', '', '', NULL, NULL, NULL),
(115, 'ru', 1, 3, 'banner', 'full_text_ru', 'სრული ტექსტი / რუსული', 'textarea', '_TextArea', '', 'ck-ru', '', '', NULL, NULL, NULL),
(116, 'ru', 1, 4, 'banner', 'description_ru', 'აღწერა / რუსული', 'text', '_InputText', '', '', '', '', NULL, NULL, NULL),
(117, 'ru', 1, 5, 'banner', 'keywords_ru', 'საკვანძო სიტყვები / რუსული', 'textarea', '_InputText', '', '', '', '', NULL, NULL, NULL),
(118, 'ge', 1, 0, 'news', 'pos', 'პრიორიტეტი', 'text', '_InputText', '', '', '', '', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `AdminNavigation`
--

CREATE TABLE IF NOT EXISTS `AdminNavigation` (
  `id` int(11) NOT NULL,
  `root_id` int(11) DEFAULT NULL,
  `type` varchar(5) NOT NULL DEFAULT 'menu',
  `homepage` int(1) NOT NULL DEFAULT '0',
  `controller` varchar(255) NOT NULL,
  `pos` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `title_ge` varchar(100) NOT NULL,
  `tab_ge` varchar(100) NOT NULL,
  `description_ge` text NOT NULL,
  `keywords_ge` text NOT NULL,
  `title_en` varchar(100) NOT NULL,
  `tab_en` varchar(100) NOT NULL,
  `description_en` text NOT NULL,
  `keywords_en` text NOT NULL,
  `title_ru` varchar(100) NOT NULL,
  `tab_ru` varchar(100) NOT NULL,
  `description_ru` text NOT NULL,
  `keywords_ru` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `AdminNavigation`
--

INSERT INTO `AdminNavigation` (`id`, `root_id`, `type`, `homepage`, `controller`, `pos`, `status`, `title_ge`, `tab_ge`, `description_ge`, `keywords_ge`, `title_en`, `tab_en`, `description_en`, `keywords_en`, `title_ru`, `tab_ru`, `description_ru`, `keywords_ru`) VALUES
(1, NULL, 'menu', 1, '', 1, 1, 'მთავარი', 'მთავარი', 'მთავარი', '', 'Homepage', '', '', '', '', '', '', ''),
(3, NULL, 'menu', 0, '', 3, 1, 'ჩვენს შესახებ', 'ჩვენს შესახებ', '', '', 'ჩვენს შესახებ', '', '', '', '', '', '', ''),
(9, NULL, 'menu', 0, 'contact', 9, 1, 'კონტაქტი ', 'კონტაქტი ', '', '', 'კონტაქტი ', '', '', '', '', '', '', ''),
(10, 3, 'menu', 0, '', 3, 1, 'XXXXXXX', 'XXXXXXX', '', '', 'ჩვენს შესახებ', '', '', '', '', '', '', ''),
(11, 3, 'menu', 0, '', 3, 1, 'ZZZZZ', 'ZZZZZZ', '', '', 'ჩვენს შესახებ', '', '', '', '', '', '', ''),
(12, 11, 'menu', 0, '', 3, 1, 'Z11111', 'Z11111', '', '', 'ჩვენს შესახებ', '', '', '', '', '', '', ''),
(13, 11, 'menu', 0, '', 3, 1, 'Z222222', 'Z222222', '', '', 'ჩვენს შესახებ', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `Album`
--

CREATE TABLE IF NOT EXISTS `Album` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `main` int(1) NOT NULL DEFAULT '1',
  `image` varchar(255) NOT NULL,
  `tumb` text NOT NULL,
  `date` varchar(50) NOT NULL,
  `title_ge` varchar(255) NOT NULL,
  `short_text_ge` text NOT NULL,
  `full_text_ge` longtext NOT NULL,
  `description_ge` text NOT NULL,
  `keywords_ge` text NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `short_text_en` text NOT NULL,
  `full_text_en` longtext NOT NULL,
  `description_en` text NOT NULL,
  `keywords_en` text NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `short_text_ru` text NOT NULL,
  `full_text_ru` longtext NOT NULL,
  `description_ru` text NOT NULL,
  `keywords_ru` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Album`
--

INSERT INTO `Album` (`id`, `menu_id`, `main`, `image`, `tumb`, `date`, `title_ge`, `short_text_ge`, `full_text_ge`, `description_ge`, `keywords_ge`, `title_en`, `short_text_en`, `full_text_en`, `description_en`, `keywords_en`, `title_ru`, `short_text_ru`, `full_text_ru`, `description_ru`, `keywords_ru`, `created_at`, `updated_at`) VALUES
(1, 58, 1, 'files/album/1496310617_03.jpg', 'files/album/tumb/1496310617_03.jpg', 'Thu, Jun 1, 2017 9:50 AM', 'სამღებრო ალბომი 1', 'სამღებრო ალბომი სამღებრო ალბომი სამღებრო ალბომი', '<p>სამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომი</p>\r\n', 'ddddddd', 'kkkkkkkk', '', '', '', '', '', '', '', '', '', '', '2017-06-01 09:37:44', '2017-06-01 09:50:17'),
(2, 58, 1, 'files/album/1496310628_04.jpg', 'files/album/tumb/1496310628_04.jpg', 'Thu, Jun 1, 2017 9:50 AM', 'სამღებრო ალბომი 2', 'სამღებრო ალბომი სამღებრო ალბომი სამღებრო ალბომი', '<p>სამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომი</p>\r\n', 'ddd222', 'k222222', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '2017-06-01 09:50:29'),
(3, 58, 1, 'files/album/1496310639_05.jpg', 'files/album/tumb/1496310639_05.jpg', 'Thu, Jun 1, 2017 9:50 AM', 'სამღებრო ალბომი 3', 'სამღებრო ალბომი სამღებრო ალბომი სამღებრო ალბომი', '<p>სამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომი</p>\r\n', 'dd3', 'dddddddd33', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '2017-06-01 09:50:39'),
(4, 58, 1, 'files/album/1496310652_06.jpg', 'files/album/tumb/1496310652_06.jpg', 'Thu, Jun 1, 2017 9:50 AM', 'სამღებრო ალბომი 4', 'სამღებრო ალბომი სამღებრო ალბომი სამღებრო ალბომი', '<p>სამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომისამღებრო ალბომი</p>\r\n', 'dddddd4', 'ddddddd4', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '2017-06-01 09:50:53');

-- --------------------------------------------------------

--
-- Table structure for table `AModuleLists`
--

CREATE TABLE IF NOT EXISTS `AModuleLists` (
  `id` int(11) NOT NULL,
  `show` int(1) NOT NULL DEFAULT '1',
  `pos` int(1) NOT NULL,
  `page` varchar(100) NOT NULL,
  `root` varchar(100) NOT NULL,
  `module` varchar(10) NOT NULL,
  `title` varchar(20) NOT NULL,
  `bgcolor` varchar(25) NOT NULL,
  `icon` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `AModuleLists`
--

INSERT INTO `AModuleLists` (`id`, `show`, `pos`, `page`, `root`, `module`, `title`, `bgcolor`, `icon`) VALUES
(1, 1, 1, 'news', 'page/load', 'news', 'სიახლეები', 'bg-blue-steel', 'fa fa-th-list'),
(12, 1, 3, 'album', 'page/load', 'album', 'ალბომი', 'bg-green-meadow', 'fa fa-picture-o'),
(23, 1, 4, 'gallery', 'data_images/image_add', 'gallery', 'გალერეა', 'bg-green', 'fa fa-camera'),
(34, 1, 2, 'text', 'data_text/text_add', 'text', 'ტექსტი', 'bg-purple-studio', 'fa fa-file-text-o'),
(45, 1, 5, 'videos', 'page/load', 'videos', 'ვიდეო', 'bg-red-sunglo', 'fa fa-video-camera'),
(46, 0, 6, 'banner', 'page/load', 'banner', 'ბანერი', 'bg-blue-hoki', 'fa fa-puzzle-piece');

-- --------------------------------------------------------

--
-- Table structure for table `Aromats`
--

CREATE TABLE IF NOT EXISTS `Aromats` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `main` int(1) NOT NULL DEFAULT '1',
  `url` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `tumb` varchar(255) NOT NULL,
  `date` varchar(50) NOT NULL,
  `title_ge` varchar(255) NOT NULL,
  `short_text_ge` text NOT NULL,
  `full_text_ge` text NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `short_text_en` text NOT NULL,
  `full_text_en` text NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `short_text_ru` text NOT NULL,
  `full_text_ru` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Banner`
--

CREATE TABLE IF NOT EXISTS `Banner` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `url` text NOT NULL,
  `target` varchar(10) NOT NULL DEFAULT '_self',
  `image` varchar(255) NOT NULL,
  `tumb` text NOT NULL,
  `date` varchar(50) NOT NULL,
  `title_ge` varchar(255) NOT NULL,
  `short_text_ge` text NOT NULL,
  `full_text_ge` longtext NOT NULL,
  `description_ge` text NOT NULL,
  `keywords_ge` text NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `short_text_en` text NOT NULL,
  `full_text_en` longtext NOT NULL,
  `description_en` text NOT NULL,
  `keywords_en` text NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `short_text_ru` text NOT NULL,
  `full_text_ru` longtext NOT NULL,
  `description_ru` text NOT NULL,
  `keywords_ru` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Banner`
--

INSERT INTO `Banner` (`id`, `menu_id`, `url`, `target`, `image`, `tumb`, `date`, `title_ge`, `short_text_ge`, `full_text_ge`, `description_ge`, `keywords_ge`, `title_en`, `short_text_en`, `full_text_en`, `description_en`, `keywords_en`, `title_ru`, `short_text_ru`, `full_text_ru`, `description_ru`, `keywords_ru`, `created_at`, `updated_at`) VALUES
(15, 1, 'http://www.osgf.ge/', '_self', 'files/banner/1500749359_FON.jpg', 'files/banner/tumb/1500749359_FON.jpg', 'Sat, Jul 22, 2017 6:49 PM', 'ფონდი ღია საზოგადოება საქართველო', '', '', '', '', 'Open Society Georgia Foundation', '', '', '', '', '', '', '', '', '', '2017-07-22 18:41:43', '2017-07-22 18:49:19'),
(16, 1, 'http://asb-georgia.org/', '_self', 'files/banner/1500749057_Aussteller_Logo_ASB.jpg', 'files/banner/tumb/1500749057_Aussteller_Logo_ASB.jpg', 'Sat, Jul 22, 2017 6:54 PM', 'არბაითერ-სამარიტერ-ბუნდი', '', '', '', '', 'Arbeiter-Samariter-Bund', '', '', '', '', '', '', '', '', '', '2017-07-22 18:44:17', '2017-07-22 18:54:03'),
(17, 1, 'http://phr.ge/', '_self', 'files/banner/1500749599_e1839ae1839de18392e1839d.png', 'files/banner/tumb/1500749599_e1839ae1839de18392e1839d.png', 'Sat, Jul 22, 2017 6:53 PM', 'პარტნიორობა ადამიანის უფლებებისთვის', '', '', '', '', 'Partnership for Human Rights', '', '', '', '', '', '', '', '', '', '2017-07-22 18:52:24', '2017-07-22 18:53:20'),
(18, 1, 'http://www.electionreforms.ge/geo', '_blank', 'files/banner/1500749874_fb_logo_geo.png', 'files/banner/tumb/1500749874_fb_logo_geo.png', 'Sat, Jul 22, 2017 6:57 PM', 'საარჩევნო სისტემების განვითარების, სწავლებისა და რეფორმების ცენტრი', '', '', '', '', 'Electoral Systems Development, Reforms and Training Centre', '', '', '', '', '', '', '', '', '', '2017-07-22 18:57:54', '2017-07-22 18:57:54'),
(19, 1, 'https://www.opensocietyfoundations.org/', '_blank', 'files/banner/1500750031_logo_osf_500x208px_RGB_EN.png', 'files/banner/tumb/1500750031_logo_osf_500x208px_RGB_EN.png', 'Sat, Jul 22, 2017 7:00 PM', 'ღია საზოგადოების ფონდები', '', '', '', '', 'Open Society Foundations', '', '', '', '', '', '', '', '', '', '2017-07-22 19:00:31', '2017-07-22 19:00:31'),
(20, 1, 'https://www.facebook.com/WomenPNO/?fref=ts', '_self', 'files/banner/1500750231_13507168_286920618326653_7764973388597646904_n.png', 'files/banner/tumb/1500750231_13507168_286920618326653_7764973388597646904_n.png', 'Sat, Jul 22, 2017 7:03 PM', 'პლატფორმა ახალი შესაძლებლობებისათვის', '', '', '', '', 'Platform for New Opportunities', '', '', '', '', '', '', '', '', '', '2017-07-22 19:02:52', '2017-07-22 19:03:51'),
(21, 1, 'http://www.wvi.org/kat/%E1%83%A1%E1%83%90%E1%83%A5%E1%83%90%E1%83%A0%E1%83%97%E1%83%95%E1%83%94%E1%83%9A%E1%83%9D', '_blank', 'files/banner/1502463587_World-Vision-2.png', 'files/banner/tumb/1502463587_World-Vision-2.png', 'Fri, Aug 11, 2017 2:59 PM', 'World Vision საქართველო', '', '', '', '', 'World Vision Georgia', '', '', 'http://www.wvi.org/kat/%E1%83%A1%E1%83%90%E1%83%A5%E1%83%90%E1%83%A0%E1%83%97%E1%83%95%E1%83%94%E1%83%9A%E1%83%9D', '', '', '', '', '', '', '2017-08-11 14:59:48', '2017-08-11 14:59:48'),
(22, 1, 'http://www.epfound.ge/ge/chvens-shesakheb/', '_blank', 'files/banner/1502463740_euro.png', 'files/banner/tumb/1502463740_euro.png', 'Fri, Aug 11, 2017 3:02 PM', 'ევროპის ფონდი', '', '', '', '', 'Europe Foundation', '', '', '', '', '', '', '', '', '', '2017-08-11 15:02:21', '2017-08-11 15:02:21'),
(23, 1, 'http://cesko.ge/', '_blank', 'files/banner/1502463893_fb_logo_geo.png', 'files/banner/tumb/1502463893_fb_logo_geo.png', 'Fri, Aug 11, 2017 3:04 PM', 'ცენტრალური საარჩევნო კომისია', '', '', '', '', 'Central Election Committee', '', '', '', '', '', '', '', '', '', '2017-08-11 15:04:53', '2017-08-11 15:04:53'),
(24, 1, 'https://ge.usembassy.gov/ka/', '_self', 'files/banner/1502464263_EmbassySeal_TBILISI-3LArge-e1488481644444.jpg', 'files/banner/tumb/1502464263_EmbassySeal_TBILISI-3LArge-e1488481644444.jpg', 'Fri, Aug 11, 2017 3:11 PM', 'აშშ-ს საელჩო საქართველოში', '', '', '', '', 'US Embassy Georgia', '', '', '', '', '', '', '', '', '', '2017-08-11 15:07:32', '2017-08-11 15:11:03'),
(25, 1, 'http://msy.gov.ge/', '_blank', 'files/banner/1502464735_uniInc.jpg', 'files/banner/tumb/1502464735_uniInc.jpg', 'Fri, Aug 11, 2017 3:18 PM', 'სპორტისა და ახალგაზრდობის სამინისტრო', '', '', '', '', 'Ministry of Sport and Youth Affairs of Georgia', '', '', '', '', '', '', '', '', '', '2017-08-11 15:18:55', '2017-08-11 15:18:55'),
(26, 2, 'https://www.google.com/forms/about/', '_self', 'files/banner/1508505286_patient-wait-times-poll.png', 'files/banner/tumb/1508505286_patient-wait-times-poll.png', 'Fri, Oct 20, 2017 1:14 PM', ' გამოკითხვის ფორმა', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-10-20 09:23:23', '2017-10-20 13:14:46');

-- --------------------------------------------------------

--
-- Table structure for table `Campaigns`
--

CREATE TABLE IF NOT EXISTS `Campaigns` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `main` int(1) NOT NULL DEFAULT '1',
  `image` varchar(255) NOT NULL,
  `tumb` text NOT NULL,
  `date` varchar(60) NOT NULL,
  `goal` decimal(9,2) NOT NULL,
  `raised` decimal(9,2) NOT NULL,
  `donations` int(5) NOT NULL,
  `time_end` date NOT NULL,
  `title_ge` varchar(255) NOT NULL,
  `short_text_ge` text NOT NULL,
  `full_text_ge` longtext NOT NULL,
  `description_ge` text NOT NULL,
  `keywords_ge` text NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `short_text_en` text NOT NULL,
  `full_text_en` longtext NOT NULL,
  `description_en` text NOT NULL,
  `keywords_en` text NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `short_text_ru` text NOT NULL,
  `full_text_ru` longtext NOT NULL,
  `description_ru` text NOT NULL,
  `keywords_ru` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Campaigns`
--

INSERT INTO `Campaigns` (`id`, `menu_id`, `main`, `image`, `tumb`, `date`, `goal`, `raised`, `donations`, `time_end`, `title_ge`, `short_text_ge`, `full_text_ge`, `description_ge`, `keywords_ge`, `title_en`, `short_text_en`, `full_text_en`, `description_en`, `keywords_en`, `title_ru`, `short_text_ru`, `full_text_ru`, `description_ru`, `keywords_ru`, `created_at`, `updated_at`) VALUES
(11, 1, 1, 'files/campaigns/1501065181_eprs-briefing-559513-assistive-technologies-support-people-with-disabilities.png', 'files/campaigns/tumb/1501065181_eprs-briefing-559513-assistive-technologies-support-people-with-disabilities.png', 'Wed, Jul 26, 2017 10:33 AM', '500.00', '200.00', 23, '2017-08-31', 'დამხმარე საშუალებები მობილობის შეზღუდვის მქონე პირებისათვის', '', '<p>კამპანიის მიზანია რესურსების მოძიება იმ შეზღუდული შესაძლებლობების მქონე პირებისათვის, რომლებიც არ ფლობენ გადაადგილებისთვის საჭირო საშუალებებს - ხელჯოხებს, ყავარჯნებს, ეტლის ბალიშებს, სპეციალურ მატრასებს და სხვა. ორგანიზაციამ მოიძია მსგავსი საჭიროების მქონე პირები, ასევე ბევრი მათგანი თავად დაგვიკავშირდა, ამჟამად დამხმარეა საშუალებები ესაჭიროება 18 ადამიანს.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>მათ შორის : 4 ცალი თეთრი ხელჯოხი ,ფასი - 4000 ლარი</p>\r\n\r\n<p>3 წყვილი ყავარჯენი - ფასი - 375 ლარი</p>\r\n\r\n<p>8 ცალი ეტლის ბალიში - 650 ლარი</p>\r\n\r\n<p>3 სპეციალიზირებული მატრასი - 780 ლარი</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'დამხმარე საშუალებები', 'შემოწირულობა , შეზღუდული შესაძლებლობები , დამხმარე საშუალებები', '', 'კამპანია ლამაზი ფერები კამპანია ლამაზი ფერებიკამპანია ლამაზი ფერები კამპანია ლამაზი ფერებიკამპანია ლამაზი ფერები კამპანია ლამაზი ფერებიკამპანია ლამაზი ფერები კამპანია ლამაზი ფერები', '<p>კამპანია ლამაზი ფერები კამპანია ლამაზი ფერებიკამპანია ლამაზი ფერები კამპანია ლამაზი ფერებიკამპანია ლამაზი ფერები კამპანია ლამაზი ფერებიკამპანია ლამაზი ფერები კამპანია ლამაზი ფერებიკამპანია ლამაზი ფერები კამპანია ლამაზი ფერებიკამპანია ლამაზი ფერები კამპანია ლამაზი ფერებიკამპანია ლამაზი ფერები კამპანია ლამაზი ფერებიკამპანია ლამაზი ფერები კამპანია ლამაზი ფერები</p>\r\n', 'კამპანია ლამაზი ფერები კამპანია ლამაზი ფერებიკამპანია ლამაზი ფერები კამპანია ლამაზი ფერებიკამპანია ლამაზი ფერები კამპანია ლამაზი ფერებიკამპანია ლამაზი ფერები კამპანია ლამაზი ფერებიკამპანია ლამაზი ფერები კამპანია ლამაზი ფერები', 'კამპანია ლამაზი ფერები კამპანია ლამაზი ფერები', '', 'კამპანია ლამაზი ფერები კამპანია ლამაზი ფერებიკამპანია ლამაზი ფერები კამპანია ლამაზი ფერები', '<p>კამპანია ლამაზი ფერები კამპანია ლამაზი ფერებიკამპანია ლამაზი ფერები კამპანია ლამაზი ფერებიკამპანია ლამაზი ფერები კამპანია ლამაზი ფერებიკამპანია ლამაზი ფერები კამპანია ლამაზი ფერებიკამპანია ლამაზი ფერები კამპანია ლამაზი ფერებიკამპანია ლამაზი ფერები კამპანია ლამაზი ფერებიკამპანია ლამაზი ფერები კამპანია ლამაზი ფერებიკამპანია ლამაზი ფერები კამპანია ლამაზი ფერებიკამპანია ლამაზი ფერები კამპანია ლამაზი ფერებიკამპანია ლამაზი ფერები კამპანია ლამაზი ფერებიკამპანია ლამაზი ფერები კამპანია ლამაზი ფერები</p>\r\n', 'კამპანია ლამაზი ფერები კამპანია ლამაზი ფერები', 'კამპანია ლამაზი ფერები კამპანია ლამაზი ფერები', '2017-07-11 14:54:01', '2017-07-26 10:33:01'),
(22, 1, 1, 'files/campaigns/1501065079_GettyImages-87131332 (1).jpg', 'files/campaigns/tumb/1501065079_GettyImages-87131332 (1).jpg', 'Wed, Jul 26, 2017 10:31 AM', '8000.00', '3800.00', 54, '2017-07-27', 'თეთრი ხელჯოხები უსინათლოებისათვის', 'ხელჯოხები უსინათლოებს', '<p>კამპანიის მიზანია შესაბამისი საჭიროების მქონე უსინათლო პირებს გადასცეს თეთრი ხელჯოხი, რომლის ღირებულება საკმაოდ მაღალია, სახელმწიფო კი არ უზრუნველყოფს შშმ პირთათვის მათ შესყიდვას და უფასოდ გადაცემას. პირველ ეტაპზე ორგანიზაციის ძალისხმევით თეთრ ხელჯოხებს მიიღებენ სოციალურისაჭიროების მქონე შეზღუდული შესაძლებლობების მქონე პირები. მათი ჯამური რაოდენობა ა- 18 .</p>\r\n\r\n<p>თითოეული თეთრი ხელჯოხის ფასი 1200 ლარია.</p>\r\n', '', 'თეთრი ხელჯოხი, შშმ პირები', '', '', '', '', '', '', '', '', '', '', '2017-07-19 07:30:15', '2017-07-26 10:31:19'),
(24, 1, 1, 'files/campaigns/1501064958_audiobooks-1024x481.jpg', 'files/campaigns/tumb/1501064958_audiobooks-1024x481.jpg', 'Wed, Jul 26, 2017 10:29 AM', '4500.00', '0.00', 0, '2017-09-25', 'აუდიო წიგნები უსინათლოთათვის', '', '<p>კამპანიის მიზანია უსინათლოებისათვის შეიქმნას აუდიოწიგნები. ამ ეტაპზე შერჩეულია ქართველ მწერალტა რამდენიმე ნაწარმოები, ესენია :</p>\r\n\r\n<p>ილია ჭავჭავაძის &quot;გლახის ნაამბობი&quot;</p>\r\n\r\n<p>ვაჟა-ფშაველას &quot; გველისმჭამელი&quot;</p>\r\n\r\n<p>აკაკი წერეთლის &quot;მოგზაურობა რაჭა-ლეჩხუმში&quot;</p>\r\n\r\n<p>ნოდარ დუმბაძის &quot;მე ვხედავ მზეს&quot;.</p>\r\n\r\n<p>პროექტის ხარჯები შემდეგია:</p>\r\n\r\n<p>პროექტისათვის გვესაჭიროება 4 გამხმოვანებელი. მათთვის საჭირო ანაზღაურების რაოდენობა შეა6370დგენს 4000 ლარს.</p>\r\n\r\n<p>ტექნიკური გამართვა და აპარატურის დაქირავება - 1500 ლარი.</p>\r\n\r\n<p>აუდიოწიგნების გამოცემა - 870 ლარი.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '', '', '', '', '', '', '', '', '', '', '', '', '2017-07-19 08:16:45', '2017-07-26 10:29:18');

-- --------------------------------------------------------

--
-- Table structure for table `Category`
--

CREATE TABLE IF NOT EXISTS `Category` (
  `id` int(11) NOT NULL,
  `root_id` int(11) DEFAULT NULL,
  `level` int(3) NOT NULL DEFAULT '0',
  `type` varchar(5) NOT NULL DEFAULT 'menu',
  `homepage` int(1) NOT NULL DEFAULT '0',
  `controller` varchar(255) NOT NULL,
  `target` varchar(10) NOT NULL DEFAULT '_self',
  `pos` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `title_ge` varchar(100) NOT NULL,
  `tab_ge` varchar(100) NOT NULL,
  `description_ge` text NOT NULL,
  `keywords_ge` text NOT NULL,
  `title_en` varchar(100) NOT NULL,
  `tab_en` varchar(100) NOT NULL,
  `description_en` text NOT NULL,
  `keywords_en` text NOT NULL,
  `title_ru` varchar(100) NOT NULL,
  `tab_ru` varchar(100) NOT NULL,
  `description_ru` text NOT NULL,
  `keywords_ru` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Category`
--

INSERT INTO `Category` (`id`, `root_id`, `level`, `type`, `homepage`, `controller`, `target`, `pos`, `status`, `title_ge`, `tab_ge`, `description_ge`, `keywords_ge`, `title_en`, `tab_en`, `description_en`, `keywords_en`, `title_ru`, `tab_ru`, `description_ru`, `keywords_ru`, `created_at`, `updated_at`) VALUES
(1, NULL, 0, 'menu', 0, '', '_self', 1, 1, 'test', '', '', '', '', '', '', '', '', '', '', '', '2017-06-26 07:50:06', '2017-06-26 07:50:06');

-- --------------------------------------------------------

--
-- Table structure for table `Events`
--

CREATE TABLE IF NOT EXISTS `Events` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `main` int(1) NOT NULL DEFAULT '1',
  `image` varchar(255) NOT NULL,
  `tumb` text NOT NULL,
  `date` varchar(50) NOT NULL,
  `title_ge` varchar(255) NOT NULL,
  `short_text_ge` text NOT NULL,
  `full_text_ge` longtext NOT NULL,
  `description_ge` text NOT NULL,
  `keywords_ge` text NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `short_text_en` text NOT NULL,
  `full_text_en` longtext NOT NULL,
  `description_en` text NOT NULL,
  `keywords_en` text NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `short_text_ru` text NOT NULL,
  `full_text_ru` longtext NOT NULL,
  `description_ru` text NOT NULL,
  `keywords_ru` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Events`
--

INSERT INTO `Events` (`id`, `menu_id`, `main`, `image`, `tumb`, `date`, `title_ge`, `short_text_ge`, `full_text_ge`, `description_ge`, `keywords_ge`, `title_en`, `short_text_en`, `full_text_en`, `description_en`, `keywords_en`, `title_ru`, `short_text_ru`, `full_text_ru`, `description_ru`, `keywords_ru`, `created_at`, `updated_at`) VALUES
(11, 1, 1, 'files/events/1500223522_download.jpg', 'files/events/tumb/1500223522_download.jpg', 'Sun, Jul 16, 2017 4:45 PM', 'შეზღუდული შესაძლებლობების მქონე პირთა საერთაშორისო დღე', '', '<p>3 დეკემბერი</p>\r\n', 'შშმ პირთა საერთაშორისო დღე', '3 დეკემბერი', 'International day of People with Disabilty', '', '<p>December 3</p>\r\n', 'International day of PWDs', 'PWD International', 'ტიესტო თბილიში ტიესტო თბილიში ', 'ტიესტო თბილიში ტიესტო თბილიში ტიესტო თბილიში ტიესტო თბილიში ', '<p>ტიესტო თბილიში&nbsp;ტიესტო თბილიში&nbsp;ტიესტო თბილიში&nbsp;ტიესტო თბილიში&nbsp;ტიესტო თბილიში&nbsp;ტიესტო თბილიში&nbsp;ტიესტო თბილიში&nbsp;ტიესტო თბილიში&nbsp;ტიესტო თბილიში&nbsp;ტიესტო თბილიში&nbsp;ტიესტო თბილიში&nbsp;ტიესტო თბილიში&nbsp;ტიესტო თბილიში&nbsp;ტიესტო თბილიში&nbsp;ტიესტო თბილიში&nbsp;</p>\r\n', 'ტიესტო თბილიში ტიესტო თბილიში ', 'ტიესტო თბილიში ტიესტო თბილიში ', '2017-07-11 14:20:13', '2017-07-16 16:45:52');

-- --------------------------------------------------------

--
-- Table structure for table `flags`
--

CREATE TABLE IF NOT EXISTS `flags` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `tumb` text NOT NULL,
  `url` varchar(20) NOT NULL,
  `status` int(1) NOT NULL,
  `logo` text NOT NULL,
  `logo_lang` varchar(2) NOT NULL,
  `main_lang` varchar(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `flags`
--

INSERT INTO `flags` (`id`, `image`, `tumb`, `url`, `status`, `logo`, `logo_lang`, `main_lang`) VALUES
(1, 'files/flags/ge.png', '', 'ge', 1, 'files/logo/logo.png', 'ge', 'ge'),
(2, 'files/flags/en.png', '', 'en', 1, 'files/logo/logo.png', 'en', ''),
(3, 'files/flags/ru.png', '', 'ru', 1, 'files/logo/logo.png', 'ru', '');

-- --------------------------------------------------------

--
-- Table structure for table `Gallery`
--

CREATE TABLE IF NOT EXISTS `Gallery` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `main` int(1) NOT NULL DEFAULT '1',
  `image` varchar(255) NOT NULL,
  `tumb` text NOT NULL,
  `date` varchar(50) NOT NULL,
  `title_ge` varchar(255) NOT NULL,
  `short_text_ge` text NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `short_text_en` text NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `short_text_ru` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Gallery`
--

INSERT INTO `Gallery` (`id`, `menu_id`, `main`, `image`, `tumb`, `date`, `title_ge`, `short_text_ge`, `title_en`, `short_text_en`, `title_ru`, `short_text_ru`, `created_at`, `updated_at`) VALUES
(1, 59, 0, 'files/gallery/1496316708_03.jpg', 'files/gallery/tumb/1496316708_03.jpg', 'Thu, Jun 1, 2017 11:31 AM', '111111', '', '', '', '', '', '2017-06-01 11:31:48', '2017-06-01 11:31:48'),
(2, 59, 0, 'files/gallery/1496316716_04.jpg', 'files/gallery/tumb/1496316716_04.jpg', 'Thu, Jun 1, 2017 11:31 AM', '2222222222', '', '', '', '', '', '2017-06-01 11:31:56', '2017-06-01 11:31:56'),
(3, 59, 0, 'files/gallery/1496316724_05.jpg', 'files/gallery/tumb/1496316724_05.jpg', 'Thu, Jun 1, 2017 11:32 AM', '333333333', '', '', '', '', '', '2017-06-01 11:32:04', '2017-06-01 11:32:04'),
(4, 59, 0, 'files/gallery/1496316731_06.jpg', 'files/gallery/tumb/1496316731_06.jpg', 'Thu, Jun 1, 2017 11:32 AM', '44444444', '', '', '', '', '', '2017-06-01 11:32:12', '2017-06-01 11:32:12');

-- --------------------------------------------------------

--
-- Table structure for table `ltm_translations`
--

CREATE TABLE IF NOT EXISTS `ltm_translations` (
  `id` int(10) unsigned NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `group` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=406 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ltm_translations`
--

INSERT INTO `ltm_translations` (`id`, `status`, `locale`, `group`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 0, 'en', 'auth', 'failed', 'These credentials do not match our records.', '2017-07-02 18:41:41', '2017-07-12 08:38:14'),
(2, 0, 'en', 'auth', 'throttle', 'Too many login attempts. Please try again in :seconds seconds.', '2017-07-02 18:41:41', '2017-07-12 08:38:14'),
(3, 0, 'en', 'pagination', 'previous', '&laquo; Previous', '2017-07-02 18:41:41', '2017-07-12 08:38:14'),
(4, 0, 'en', 'pagination', 'next', 'Next &raquo;', '2017-07-02 18:41:41', '2017-07-12 08:38:14'),
(5, 0, 'en', 'passwords', 'password', 'Passwords must be at least six characters and match the confirmation.', '2017-07-02 18:41:41', '2017-07-12 08:38:14'),
(6, 0, 'en', 'passwords', 'reset', 'Your password has been reset!', '2017-07-02 18:41:41', '2017-07-12 08:38:14'),
(7, 0, 'en', 'passwords', 'sent', 'We have e-mailed your password reset link!', '2017-07-02 18:41:41', '2017-07-12 08:38:14'),
(8, 0, 'en', 'passwords', 'token', 'This password reset token is invalid.', '2017-07-02 18:41:41', '2017-07-12 08:38:14'),
(9, 0, 'en', 'passwords', 'user', 'We can''t find a user with that e-mail address.', '2017-07-02 18:41:41', '2017-07-12 08:38:14'),
(10, 0, 'en', 'validation', 'accepted', 'The :attribute must be accepted.', '2017-07-02 18:41:41', '2017-07-12 08:38:14'),
(11, 0, 'en', 'validation', 'active_url', 'The :attribute is not a valid URL.', '2017-07-02 18:41:41', '2017-07-12 08:38:14'),
(12, 0, 'en', 'validation', 'after', 'The :attribute must be a date after :date.', '2017-07-02 18:41:41', '2017-07-12 08:38:14'),
(13, 0, 'en', 'validation', 'alpha', 'The :attribute may only contain letters.', '2017-07-02 18:41:41', '2017-07-12 08:38:14'),
(14, 0, 'en', 'validation', 'alpha_dash', 'The :attribute may only contain letters, numbers, and dashes.', '2017-07-02 18:41:41', '2017-07-12 08:38:14'),
(15, 0, 'en', 'validation', 'alpha_num', 'The :attribute may only contain letters and numbers.', '2017-07-02 18:41:41', '2017-07-12 08:38:14'),
(16, 0, 'en', 'validation', 'array', 'The :attribute must be an array.', '2017-07-02 18:41:41', '2017-07-12 08:38:14'),
(17, 0, 'en', 'validation', 'before', 'The :attribute must be a date before :date.', '2017-07-02 18:41:41', '2017-07-12 08:38:14'),
(18, 0, 'en', 'validation', 'between.numeric', 'The :attribute must be between :min and :max.', '2017-07-02 18:41:41', '2017-07-12 08:38:14'),
(19, 0, 'en', 'validation', 'between.file', 'The :attribute must be between :min and :max kilobytes.', '2017-07-02 18:41:41', '2017-07-12 08:38:14'),
(20, 0, 'en', 'validation', 'between.string', 'The :attribute must be between :min and :max characters.', '2017-07-02 18:41:41', '2017-07-12 08:38:14'),
(21, 0, 'en', 'validation', 'between.array', 'The :attribute must have between :min and :max items.', '2017-07-02 18:41:41', '2017-07-12 08:38:14'),
(22, 0, 'en', 'validation', 'boolean', 'The :attribute field must be true or false.', '2017-07-02 18:41:41', '2017-07-12 08:38:14'),
(23, 0, 'en', 'validation', 'confirmed', 'The :attribute confirmation does not match.', '2017-07-02 18:41:41', '2017-07-12 08:38:14'),
(24, 0, 'en', 'validation', 'date', 'The :attribute is not a valid date.', '2017-07-02 18:41:41', '2017-07-12 08:38:14'),
(25, 0, 'en', 'validation', 'date_format', 'The :attribute does not match the format :format.', '2017-07-02 18:41:42', '2017-07-12 08:38:14'),
(26, 0, 'en', 'validation', 'different', 'The :attribute and :other must be different.', '2017-07-02 18:41:42', '2017-07-12 08:38:14'),
(27, 0, 'en', 'validation', 'digits', 'The :attribute must be :digits digits.', '2017-07-02 18:41:42', '2017-07-12 08:38:14'),
(28, 0, 'en', 'validation', 'digits_between', 'The :attribute must be between :min and :max digits.', '2017-07-02 18:41:42', '2017-07-12 08:38:14'),
(29, 0, 'en', 'validation', 'dimensions', 'The :attribute has invalid image dimensions.', '2017-07-02 18:41:42', '2017-07-12 08:38:14'),
(30, 0, 'en', 'validation', 'distinct', 'The :attribute field has a duplicate value.', '2017-07-02 18:41:42', '2017-07-12 08:38:14'),
(31, 0, 'en', 'validation', 'email', 'The :attribute must be a valid email address.', '2017-07-02 18:41:42', '2017-07-12 08:38:14'),
(32, 0, 'en', 'validation', 'exists', 'The selected :attribute is invalid.', '2017-07-02 18:41:42', '2017-07-12 08:38:14'),
(33, 0, 'en', 'validation', 'file', 'The :attribute must be a file.', '2017-07-02 18:41:42', '2017-07-12 08:38:14'),
(34, 0, 'en', 'validation', 'filled', 'The :attribute field is required.', '2017-07-02 18:41:42', '2017-07-12 08:38:14'),
(35, 0, 'en', 'validation', 'image', 'The :attribute must be an image.', '2017-07-02 18:41:42', '2017-07-12 08:38:14'),
(36, 0, 'en', 'validation', 'in', 'The selected :attribute is invalid.', '2017-07-02 18:41:42', '2017-07-12 08:38:14'),
(37, 0, 'en', 'validation', 'in_array', 'The :attribute field does not exist in :other.', '2017-07-02 18:41:42', '2017-07-12 08:38:14'),
(38, 0, 'en', 'validation', 'integer', 'The :attribute must be an integer.', '2017-07-02 18:41:42', '2017-07-12 08:38:14'),
(39, 0, 'en', 'validation', 'ip', 'The :attribute must be a valid IP address.', '2017-07-02 18:41:42', '2017-07-12 08:38:14'),
(40, 0, 'en', 'validation', 'json', 'The :attribute must be a valid JSON string.', '2017-07-02 18:41:42', '2017-07-12 08:38:14'),
(41, 0, 'en', 'validation', 'max.numeric', 'The :attribute may not be greater than :max.', '2017-07-02 18:41:42', '2017-07-12 08:38:14'),
(42, 0, 'en', 'validation', 'max.file', 'The :attribute may not be greater than :max kilobytes.', '2017-07-02 18:41:42', '2017-07-12 08:38:14'),
(43, 0, 'en', 'validation', 'max.string', 'The :attribute may not be greater than :max characters.', '2017-07-02 18:41:42', '2017-07-12 08:38:14'),
(44, 0, 'en', 'validation', 'max.array', 'The :attribute may not have more than :max items.', '2017-07-02 18:41:42', '2017-07-12 08:38:14'),
(45, 0, 'en', 'validation', 'mimes', 'The :attribute must be a file of type: :values.', '2017-07-02 18:41:42', '2017-07-12 08:38:14'),
(46, 0, 'en', 'validation', 'min.numeric', 'The :attribute must be at least :min.', '2017-07-02 18:41:42', '2017-07-12 08:38:14'),
(47, 0, 'en', 'validation', 'min.file', 'The :attribute must be at least :min kilobytes.', '2017-07-02 18:41:42', '2017-07-12 08:38:14'),
(48, 0, 'en', 'validation', 'min.string', 'The :attribute must be at least :min characters.', '2017-07-02 18:41:42', '2017-07-12 08:38:14'),
(49, 0, 'en', 'validation', 'min.array', 'The :attribute must have at least :min items.', '2017-07-02 18:41:42', '2017-07-12 08:38:14'),
(50, 0, 'en', 'validation', 'not_in', 'The selected :attribute is invalid.', '2017-07-02 18:41:42', '2017-07-12 08:38:14'),
(51, 0, 'en', 'validation', 'numeric', 'The :attribute must be a number.', '2017-07-02 18:41:42', '2017-07-12 08:38:14'),
(52, 0, 'en', 'validation', 'present', 'The :attribute field must be present.', '2017-07-02 18:41:42', '2017-07-12 08:38:14'),
(53, 0, 'en', 'validation', 'regex', 'The :attribute format is invalid.', '2017-07-02 18:41:42', '2017-07-12 08:38:14'),
(54, 0, 'en', 'validation', 'required', 'The :attribute field is required.', '2017-07-02 18:41:42', '2017-07-12 08:38:14'),
(55, 0, 'en', 'validation', 'required_if', 'The :attribute field is required when :other is :value.', '2017-07-02 18:41:42', '2017-07-12 08:38:14'),
(56, 0, 'en', 'validation', 'required_unless', 'The :attribute field is required unless :other is in :values.', '2017-07-02 18:41:42', '2017-07-12 08:38:14'),
(57, 0, 'en', 'validation', 'required_with', 'The :attribute field is required when :values is present.', '2017-07-02 18:41:42', '2017-07-12 08:38:14'),
(58, 0, 'en', 'validation', 'required_with_all', 'The :attribute field is required when :values is present.', '2017-07-02 18:41:42', '2017-07-12 08:38:14'),
(59, 0, 'en', 'validation', 'required_without', 'The :attribute field is required when :values is not present.', '2017-07-02 18:41:42', '2017-07-12 08:38:15'),
(60, 0, 'en', 'validation', 'required_without_all', 'The :attribute field is required when none of :values are present.', '2017-07-02 18:41:42', '2017-07-12 08:38:15'),
(61, 0, 'en', 'validation', 'same', 'The :attribute and :other must match.', '2017-07-02 18:41:42', '2017-07-12 08:38:15'),
(62, 0, 'en', 'validation', 'size.numeric', 'The :attribute must be :size.', '2017-07-02 18:41:42', '2017-07-12 08:38:15'),
(63, 0, 'en', 'validation', 'size.file', 'The :attribute must be :size kilobytes.', '2017-07-02 18:41:42', '2017-07-12 08:38:15'),
(64, 0, 'en', 'validation', 'size.string', 'The :attribute must be :size characters.', '2017-07-02 18:41:42', '2017-07-12 08:38:15'),
(65, 0, 'en', 'validation', 'size.array', 'The :attribute must contain :size items.', '2017-07-02 18:41:42', '2017-07-12 08:38:15'),
(66, 0, 'en', 'validation', 'string', 'The :attribute must be a string.', '2017-07-02 18:41:42', '2017-07-12 08:38:15'),
(67, 0, 'en', 'validation', 'timezone', 'The :attribute must be a valid zone.', '2017-07-02 18:41:42', '2017-07-12 08:38:15'),
(68, 0, 'en', 'validation', 'unique', 'The :attribute has already been taken.', '2017-07-02 18:41:42', '2017-07-12 08:38:15'),
(69, 0, 'en', 'validation', 'url', 'The :attribute format is invalid.', '2017-07-02 18:41:42', '2017-07-12 08:38:15'),
(70, 0, 'en', 'validation', 'custom.attribute-name.rule-name', 'custom-message', '2017-07-02 18:41:42', '2017-07-12 08:38:15'),
(71, 0, 'ge', 'auth', 'failed', 'These credentials do not match our records.', '2017-07-02 18:41:42', '2017-07-12 08:38:15'),
(72, 0, 'ge', 'auth', 'throttle', 'Too many login attempts. Please try again in :seconds seconds.', '2017-07-02 18:41:42', '2017-07-12 08:38:15'),
(73, 0, 'ge', 'pagination', 'previous', '&laquo; Previous', '2017-07-02 18:41:42', '2017-07-12 08:38:15'),
(74, 0, 'ge', 'pagination', 'next', 'Next &raquo;', '2017-07-02 18:41:42', '2017-07-12 08:38:15'),
(75, 0, 'ge', 'passwords', 'password', 'Passwords must be at least six characters and match the confirmation.', '2017-07-02 18:41:42', '2017-07-12 08:38:15'),
(76, 0, 'ge', 'passwords', 'reset', 'Your password has been reset!', '2017-07-02 18:41:42', '2017-07-12 08:38:15'),
(77, 0, 'ge', 'passwords', 'sent', 'We have e-mailed your password reset link!', '2017-07-02 18:41:42', '2017-07-12 08:38:15'),
(78, 0, 'ge', 'passwords', 'token', 'This password reset token is invalid.', '2017-07-02 18:41:42', '2017-07-12 08:38:15'),
(79, 0, 'ge', 'passwords', 'user', 'We can''t find a user with that e-mail address.', '2017-07-02 18:41:42', '2017-07-12 08:38:15'),
(80, 0, 'ge', 'validation', 'accepted', 'The :attribute must be accepted.', '2017-07-02 18:41:42', '2017-07-12 08:38:15'),
(81, 0, 'ge', 'validation', 'active_url', 'The :attribute is not a valid URL.', '2017-07-02 18:41:42', '2017-07-12 08:38:15'),
(82, 0, 'ge', 'validation', 'after', 'The :attribute must be a date after :date.', '2017-07-02 18:41:42', '2017-07-12 08:38:15'),
(83, 0, 'ge', 'validation', 'alpha', 'The :attribute may only contain letters.', '2017-07-02 18:41:43', '2017-07-12 08:38:15'),
(84, 0, 'ge', 'validation', 'alpha_dash', 'The :attribute may only contain letters, numbers, and dashes.', '2017-07-02 18:41:43', '2017-07-12 08:38:15'),
(85, 0, 'ge', 'validation', 'alpha_num', 'The :attribute may only contain letters and numbers.', '2017-07-02 18:41:43', '2017-07-12 08:38:15'),
(86, 0, 'ge', 'validation', 'array', 'The :attribute must be an array.', '2017-07-02 18:41:43', '2017-07-12 08:38:15'),
(87, 0, 'ge', 'validation', 'before', 'The :attribute must be a date before :date.', '2017-07-02 18:41:43', '2017-07-12 08:38:15'),
(88, 0, 'ge', 'validation', 'between.numeric', 'The :attribute must be between :min and :max.', '2017-07-02 18:41:43', '2017-07-12 08:38:15'),
(89, 0, 'ge', 'validation', 'between.file', 'The :attribute must be between :min and :max kilobytes.', '2017-07-02 18:41:43', '2017-07-12 08:38:15'),
(90, 0, 'ge', 'validation', 'between.string', 'The :attribute must be between :min and :max characters.', '2017-07-02 18:41:43', '2017-07-12 08:38:15'),
(91, 0, 'ge', 'validation', 'between.array', 'The :attribute must have between :min and :max items.', '2017-07-02 18:41:43', '2017-07-12 08:38:15'),
(92, 0, 'ge', 'validation', 'boolean', 'The :attribute field must be true or false.', '2017-07-02 18:41:43', '2017-07-12 08:38:15'),
(93, 0, 'ge', 'validation', 'confirmed', 'The :attribute confirmation does not match.', '2017-07-02 18:41:43', '2017-07-12 08:38:15'),
(94, 0, 'ge', 'validation', 'date', 'The :attribute is not a valid date.', '2017-07-02 18:41:43', '2017-07-12 08:38:15'),
(95, 0, 'ge', 'validation', 'date_format', 'The :attribute does not match the format :format.', '2017-07-02 18:41:43', '2017-07-12 08:38:15'),
(96, 0, 'ge', 'validation', 'different', 'The :attribute and :other must be different.', '2017-07-02 18:41:43', '2017-07-12 08:38:15'),
(97, 0, 'ge', 'validation', 'digits', 'The :attribute must be :digits digits.', '2017-07-02 18:41:43', '2017-07-12 08:38:15'),
(98, 0, 'ge', 'validation', 'digits_between', 'The :attribute must be between :min and :max digits.', '2017-07-02 18:41:43', '2017-07-12 08:38:15'),
(99, 0, 'ge', 'validation', 'dimensions', 'The :attribute has invalid image dimensions.', '2017-07-02 18:41:43', '2017-07-12 08:38:15'),
(100, 0, 'ge', 'validation', 'distinct', 'The :attribute field has a duplicate value.', '2017-07-02 18:41:43', '2017-07-12 08:38:15'),
(101, 0, 'ge', 'validation', 'email', 'The :attribute must be a valid email address.', '2017-07-02 18:41:43', '2017-07-12 08:38:15'),
(102, 0, 'ge', 'validation', 'exists', 'The selected :attribute is invalid.', '2017-07-02 18:41:43', '2017-07-12 08:38:15'),
(103, 0, 'ge', 'validation', 'file', 'The :attribute must be a file.', '2017-07-02 18:41:43', '2017-07-12 08:38:15'),
(104, 0, 'ge', 'validation', 'filled', 'The :attribute field is required.', '2017-07-02 18:41:43', '2017-07-12 08:38:15'),
(105, 0, 'ge', 'validation', 'image', 'The :attribute must be an image.', '2017-07-02 18:41:43', '2017-07-12 08:38:15'),
(106, 0, 'ge', 'validation', 'in', 'The selected :attribute is invalid.', '2017-07-02 18:41:43', '2017-07-12 08:38:15'),
(107, 0, 'ge', 'validation', 'in_array', 'The :attribute field does not exist in :other.', '2017-07-02 18:41:43', '2017-07-12 08:38:15'),
(108, 0, 'ge', 'validation', 'integer', 'The :attribute must be an integer.', '2017-07-02 18:41:43', '2017-07-12 08:38:15'),
(109, 0, 'ge', 'validation', 'ip', 'The :attribute must be a valid IP address.', '2017-07-02 18:41:43', '2017-07-12 08:38:15'),
(110, 0, 'ge', 'validation', 'json', 'The :attribute must be a valid JSON string.', '2017-07-02 18:41:43', '2017-07-12 08:38:15'),
(111, 0, 'ge', 'validation', 'max.numeric', 'The :attribute may not be greater than :max.', '2017-07-02 18:41:43', '2017-07-12 08:38:15'),
(112, 0, 'ge', 'validation', 'max.file', 'The :attribute may not be greater than :max kilobytes.', '2017-07-02 18:41:43', '2017-07-12 08:38:15'),
(113, 0, 'ge', 'validation', 'max.string', 'The :attribute may not be greater than :max characters.', '2017-07-02 18:41:43', '2017-07-12 08:38:15'),
(114, 0, 'ge', 'validation', 'max.array', 'The :attribute may not have more than :max items.', '2017-07-02 18:41:43', '2017-07-12 08:38:15'),
(115, 0, 'ge', 'validation', 'mimes', 'The :attribute must be a file of type: :values.', '2017-07-02 18:41:43', '2017-07-12 08:38:15'),
(116, 0, 'ge', 'validation', 'min.numeric', 'The :attribute must be at least :min.', '2017-07-02 18:41:43', '2017-07-12 08:38:15'),
(117, 0, 'ge', 'validation', 'min.file', 'The :attribute must be at least :min kilobytes.', '2017-07-02 18:41:43', '2017-07-12 08:38:15'),
(118, 0, 'ge', 'validation', 'min.string', 'The :attribute must be at least :min characters.', '2017-07-02 18:41:43', '2017-07-12 08:38:15'),
(119, 0, 'ge', 'validation', 'min.array', 'The :attribute must have at least :min items.', '2017-07-02 18:41:43', '2017-07-12 08:38:15'),
(120, 0, 'ge', 'validation', 'not_in', 'The selected :attribute is invalid.', '2017-07-02 18:41:43', '2017-07-12 08:38:15'),
(121, 0, 'ge', 'validation', 'numeric', 'The :attribute must be a number.', '2017-07-02 18:41:43', '2017-07-12 08:38:15'),
(122, 0, 'ge', 'validation', 'present', 'The :attribute field must be present.', '2017-07-02 18:41:43', '2017-07-12 08:38:15'),
(123, 0, 'ge', 'validation', 'regex', 'The :attribute format is invalid.', '2017-07-02 18:41:43', '2017-07-12 08:38:15'),
(124, 0, 'ge', 'validation', 'required', 'The :attribute field is required.', '2017-07-02 18:41:43', '2017-07-12 08:38:15'),
(125, 0, 'ge', 'validation', 'required_if', 'The :attribute field is required when :other is :value.', '2017-07-02 18:41:43', '2017-07-12 08:38:15'),
(126, 0, 'ge', 'validation', 'required_unless', 'The :attribute field is required unless :other is in :values.', '2017-07-02 18:41:43', '2017-07-12 08:38:15'),
(127, 0, 'ge', 'validation', 'required_with', 'The :attribute field is required when :values is present.', '2017-07-02 18:41:43', '2017-07-12 08:38:15'),
(128, 0, 'ge', 'validation', 'required_with_all', 'The :attribute field is required when :values is present.', '2017-07-02 18:41:43', '2017-07-12 08:38:15'),
(129, 0, 'ge', 'validation', 'required_without', 'The :attribute field is required when :values is not present.', '2017-07-02 18:41:43', '2017-07-12 08:38:15'),
(130, 0, 'ge', 'validation', 'required_without_all', 'The :attribute field is required when none of :values are present.', '2017-07-02 18:41:43', '2017-07-12 08:38:15'),
(131, 0, 'ge', 'validation', 'same', 'The :attribute and :other must match.', '2017-07-02 18:41:43', '2017-07-12 08:38:15'),
(132, 0, 'ge', 'validation', 'size.numeric', 'The :attribute must be :size.', '2017-07-02 18:41:43', '2017-07-12 08:38:15'),
(133, 0, 'ge', 'validation', 'size.file', 'The :attribute must be :size kilobytes.', '2017-07-02 18:41:43', '2017-07-12 08:38:15'),
(134, 0, 'ge', 'validation', 'size.string', 'The :attribute must be :size characters.', '2017-07-02 18:41:43', '2017-07-12 08:38:15'),
(135, 0, 'ge', 'validation', 'size.array', 'The :attribute must contain :size items.', '2017-07-02 18:41:43', '2017-07-12 08:38:15'),
(136, 0, 'ge', 'validation', 'string', 'The :attribute must be a string.', '2017-07-02 18:41:43', '2017-07-12 08:38:15'),
(137, 0, 'ge', 'validation', 'timezone', 'The :attribute must be a valid zone.', '2017-07-02 18:41:43', '2017-07-12 08:38:15'),
(138, 0, 'ge', 'validation', 'unique', 'The :attribute has already been taken.', '2017-07-02 18:41:43', '2017-07-12 08:38:15'),
(139, 0, 'ge', 'validation', 'url', 'The :attribute format is invalid.', '2017-07-02 18:41:43', '2017-07-12 08:38:15'),
(140, 0, 'ge', 'validation', 'custom.attribute-name.rule-name', 'custom-message', '2017-07-02 18:41:43', '2017-07-12 08:38:15'),
(141, 0, 'ru', 'auth', 'failed', 'These credentials do not match our records.', '2017-07-02 18:41:44', '2017-07-12 08:38:15'),
(142, 0, 'ru', 'auth', 'throttle', 'Too many login attempts. Please try again in :seconds seconds.', '2017-07-02 18:41:44', '2017-07-12 08:38:15'),
(143, 0, 'ru', 'pagination', 'previous', '&laquo; Previous', '2017-07-02 18:41:44', '2017-07-12 08:38:15'),
(144, 0, 'ru', 'pagination', 'next', 'Next &raquo;', '2017-07-02 18:41:44', '2017-07-12 08:38:15'),
(145, 0, 'ru', 'passwords', 'password', 'Passwords must be at least six characters and match the confirmation.', '2017-07-02 18:41:44', '2017-07-12 08:38:15'),
(146, 0, 'ru', 'passwords', 'reset', 'Your password has been reset!', '2017-07-02 18:41:44', '2017-07-12 08:38:15'),
(147, 0, 'ru', 'passwords', 'sent', 'We have e-mailed your password reset link!', '2017-07-02 18:41:44', '2017-07-12 08:38:15'),
(148, 0, 'ru', 'passwords', 'token', 'This password reset token is invalid.', '2017-07-02 18:41:44', '2017-07-12 08:38:15'),
(149, 0, 'ru', 'passwords', 'user', 'We can''t find a user with that e-mail address.', '2017-07-02 18:41:44', '2017-07-12 08:38:15'),
(150, 0, 'ru', 'validation', 'accepted', 'The :attribute must be accepted.', '2017-07-02 18:41:44', '2017-07-12 08:38:15'),
(151, 0, 'ru', 'validation', 'active_url', 'The :attribute is not a valid URL.', '2017-07-02 18:41:44', '2017-07-12 08:38:15'),
(152, 0, 'ru', 'validation', 'after', 'The :attribute must be a date after :date.', '2017-07-02 18:41:44', '2017-07-12 08:38:15'),
(153, 0, 'ru', 'validation', 'alpha', 'The :attribute may only contain letters.', '2017-07-02 18:41:44', '2017-07-12 08:38:15'),
(154, 0, 'ru', 'validation', 'alpha_dash', 'The :attribute may only contain letters, numbers, and dashes.', '2017-07-02 18:41:44', '2017-07-12 08:38:15'),
(155, 0, 'ru', 'validation', 'alpha_num', 'The :attribute may only contain letters and numbers.', '2017-07-02 18:41:44', '2017-07-12 08:38:15'),
(156, 0, 'ru', 'validation', 'array', 'The :attribute must be an array.', '2017-07-02 18:41:44', '2017-07-12 08:38:15'),
(157, 0, 'ru', 'validation', 'before', 'The :attribute must be a date before :date.', '2017-07-02 18:41:44', '2017-07-12 08:38:15'),
(158, 0, 'ru', 'validation', 'between.numeric', 'The :attribute must be between :min and :max.', '2017-07-02 18:41:44', '2017-07-12 08:38:15'),
(159, 0, 'ru', 'validation', 'between.file', 'The :attribute must be between :min and :max kilobytes.', '2017-07-02 18:41:44', '2017-07-12 08:38:15'),
(160, 0, 'ru', 'validation', 'between.string', 'The :attribute must be between :min and :max characters.', '2017-07-02 18:41:44', '2017-07-12 08:38:15'),
(161, 0, 'ru', 'validation', 'between.array', 'The :attribute must have between :min and :max items.', '2017-07-02 18:41:44', '2017-07-12 08:38:15'),
(162, 0, 'ru', 'validation', 'boolean', 'The :attribute field must be true or false.', '2017-07-02 18:41:44', '2017-07-12 08:38:15'),
(163, 0, 'ru', 'validation', 'confirmed', 'The :attribute confirmation does not match.', '2017-07-02 18:41:44', '2017-07-12 08:38:15'),
(164, 0, 'ru', 'validation', 'date', 'The :attribute is not a valid date.', '2017-07-02 18:41:44', '2017-07-12 08:38:15'),
(165, 0, 'ru', 'validation', 'date_format', 'The :attribute does not match the format :format.', '2017-07-02 18:41:44', '2017-07-12 08:38:15'),
(166, 0, 'ru', 'validation', 'different', 'The :attribute and :other must be different.', '2017-07-02 18:41:44', '2017-07-12 08:38:15'),
(167, 0, 'ru', 'validation', 'digits', 'The :attribute must be :digits digits.', '2017-07-02 18:41:44', '2017-07-12 08:38:15'),
(168, 0, 'ru', 'validation', 'digits_between', 'The :attribute must be between :min and :max digits.', '2017-07-02 18:41:44', '2017-07-12 08:38:15'),
(169, 0, 'ru', 'validation', 'dimensions', 'The :attribute has invalid image dimensions.', '2017-07-02 18:41:44', '2017-07-12 08:38:15'),
(170, 0, 'ru', 'validation', 'distinct', 'The :attribute field has a duplicate value.', '2017-07-02 18:41:44', '2017-07-12 08:38:15'),
(171, 0, 'ru', 'validation', 'email', 'The :attribute must be a valid email address.', '2017-07-02 18:41:44', '2017-07-12 08:38:15'),
(172, 0, 'ru', 'validation', 'exists', 'The selected :attribute is invalid.', '2017-07-02 18:41:44', '2017-07-12 08:38:15'),
(173, 0, 'ru', 'validation', 'file', 'The :attribute must be a file.', '2017-07-02 18:41:44', '2017-07-12 08:38:15'),
(174, 0, 'ru', 'validation', 'filled', 'The :attribute field is required.', '2017-07-02 18:41:44', '2017-07-12 08:38:15'),
(175, 0, 'ru', 'validation', 'image', 'The :attribute must be an image.', '2017-07-02 18:41:44', '2017-07-12 08:38:15'),
(176, 0, 'ru', 'validation', 'in', 'The selected :attribute is invalid.', '2017-07-02 18:41:44', '2017-07-12 08:38:15'),
(177, 0, 'ru', 'validation', 'in_array', 'The :attribute field does not exist in :other.', '2017-07-02 18:41:44', '2017-07-12 08:38:15'),
(178, 0, 'ru', 'validation', 'integer', 'The :attribute must be an integer.', '2017-07-02 18:41:44', '2017-07-12 08:38:15'),
(179, 0, 'ru', 'validation', 'ip', 'The :attribute must be a valid IP address.', '2017-07-02 18:41:44', '2017-07-12 08:38:15'),
(180, 0, 'ru', 'validation', 'json', 'The :attribute must be a valid JSON string.', '2017-07-02 18:41:44', '2017-07-12 08:38:15'),
(181, 0, 'ru', 'validation', 'max.numeric', 'The :attribute may not be greater than :max.', '2017-07-02 18:41:44', '2017-07-12 08:38:15'),
(182, 0, 'ru', 'validation', 'max.file', 'The :attribute may not be greater than :max kilobytes.', '2017-07-02 18:41:44', '2017-07-12 08:38:15'),
(183, 0, 'ru', 'validation', 'max.string', 'The :attribute may not be greater than :max characters.', '2017-07-02 18:41:44', '2017-07-12 08:38:15'),
(184, 0, 'ru', 'validation', 'max.array', 'The :attribute may not have more than :max items.', '2017-07-02 18:41:44', '2017-07-12 08:38:15'),
(185, 0, 'ru', 'validation', 'mimes', 'The :attribute must be a file of type: :values.', '2017-07-02 18:41:44', '2017-07-12 08:38:15'),
(186, 0, 'ru', 'validation', 'min.numeric', 'The :attribute must be at least :min.', '2017-07-02 18:41:44', '2017-07-12 08:38:15'),
(187, 0, 'ru', 'validation', 'min.file', 'The :attribute must be at least :min kilobytes.', '2017-07-02 18:41:44', '2017-07-12 08:38:15'),
(188, 0, 'ru', 'validation', 'min.string', 'The :attribute must be at least :min characters.', '2017-07-02 18:41:44', '2017-07-12 08:38:15'),
(189, 0, 'ru', 'validation', 'min.array', 'The :attribute must have at least :min items.', '2017-07-02 18:41:44', '2017-07-12 08:38:15'),
(190, 0, 'ru', 'validation', 'not_in', 'The selected :attribute is invalid.', '2017-07-02 18:41:44', '2017-07-12 08:38:15'),
(191, 0, 'ru', 'validation', 'numeric', 'The :attribute must be a number.', '2017-07-02 18:41:44', '2017-07-12 08:38:15'),
(192, 0, 'ru', 'validation', 'present', 'The :attribute field must be present.', '2017-07-02 18:41:44', '2017-07-12 08:38:15'),
(193, 0, 'ru', 'validation', 'regex', 'The :attribute format is invalid.', '2017-07-02 18:41:44', '2017-07-12 08:38:15'),
(194, 0, 'ru', 'validation', 'required', 'The :attribute field is required.', '2017-07-02 18:41:44', '2017-07-12 08:38:15'),
(195, 0, 'ru', 'validation', 'required_if', 'The :attribute field is required when :other is :value.', '2017-07-02 18:41:44', '2017-07-12 08:38:15'),
(196, 0, 'ru', 'validation', 'required_unless', 'The :attribute field is required unless :other is in :values.', '2017-07-02 18:41:45', '2017-07-12 08:38:15'),
(197, 0, 'ru', 'validation', 'required_with', 'The :attribute field is required when :values is present.', '2017-07-02 18:41:45', '2017-07-12 08:38:15'),
(198, 0, 'ru', 'validation', 'required_with_all', 'The :attribute field is required when :values is present.', '2017-07-02 18:41:45', '2017-07-12 08:38:15'),
(199, 0, 'ru', 'validation', 'required_without', 'The :attribute field is required when :values is not present.', '2017-07-02 18:41:45', '2017-07-12 08:38:15'),
(200, 0, 'ru', 'validation', 'required_without_all', 'The :attribute field is required when none of :values are present.', '2017-07-02 18:41:45', '2017-07-12 08:38:15'),
(201, 0, 'ru', 'validation', 'same', 'The :attribute and :other must match.', '2017-07-02 18:41:45', '2017-07-12 08:38:15'),
(202, 0, 'ru', 'validation', 'size.numeric', 'The :attribute must be :size.', '2017-07-02 18:41:45', '2017-07-12 08:38:15'),
(203, 0, 'ru', 'validation', 'size.file', 'The :attribute must be :size kilobytes.', '2017-07-02 18:41:45', '2017-07-12 08:38:15'),
(204, 0, 'ru', 'validation', 'size.string', 'The :attribute must be :size characters.', '2017-07-02 18:41:45', '2017-07-12 08:38:15'),
(205, 0, 'ru', 'validation', 'size.array', 'The :attribute must contain :size items.', '2017-07-02 18:41:45', '2017-07-12 08:38:15'),
(206, 0, 'ru', 'validation', 'string', 'The :attribute must be a string.', '2017-07-02 18:41:45', '2017-07-12 08:38:15'),
(207, 0, 'ru', 'validation', 'timezone', 'The :attribute must be a valid zone.', '2017-07-02 18:41:45', '2017-07-12 08:38:15'),
(208, 0, 'ru', 'validation', 'unique', 'The :attribute has already been taken.', '2017-07-02 18:41:45', '2017-07-12 08:38:15'),
(209, 0, 'ru', 'validation', 'url', 'The :attribute format is invalid.', '2017-07-02 18:41:45', '2017-07-12 08:38:15'),
(210, 0, 'ru', 'validation', 'custom.attribute-name.rule-name', 'custom-message', '2017-07-02 18:41:45', '2017-07-12 08:38:15'),
(211, 0, 'ge', 'translate', 'date', 'გამოქვეყნებულია', '2017-07-02 18:42:02', '2017-08-10 06:23:20'),
(212, 0, 'ge', 'translate', 'right_album_title', NULL, '2017-07-02 18:42:02', '2017-07-02 18:42:02'),
(213, 0, 'ge', 'translate', 'right_news_title', NULL, '2017-07-02 18:42:02', '2017-07-02 18:42:02'),
(214, 0, 'ge', 'web', 'other_slider', 'სხვა ინფორმაცია', '2017-07-02 18:42:02', '2017-09-30 10:27:39'),
(215, 1, 'ge', 'translate', 'service_sat', NULL, '2017-07-02 18:42:02', '2017-07-22 14:06:24'),
(216, 1, 'ge', 'translate', 'welcome_sat', NULL, '2017-07-02 18:42:02', '2017-08-10 06:29:54'),
(217, 0, 'ge', 'translate', 'welcome_text', NULL, '2017-07-02 18:42:02', '2017-07-02 18:42:02'),
(218, 0, 'ge', 'web', 'motxovnadi', NULL, '2017-07-02 18:42:02', '2017-07-02 18:42:02'),
(219, 0, 'ge', 'web', 'kalatashi_damateba', NULL, '2017-07-02 18:42:02', '2017-07-02 18:42:02'),
(220, 0, 'ge', 'web', 'kodi', NULL, '2017-07-02 18:42:02', '2017-07-02 18:42:02'),
(221, 0, 'ge', 'web', 'top_phone', 'ტელეფონი', '2017-07-02 18:42:02', '2017-09-30 10:27:39'),
(222, 0, 'ge', 'web', 'top_email', 'ელ-ფოსტა', '2017-07-02 18:42:02', '2017-09-30 10:27:39'),
(223, 0, 'ge', 'web', 'nivti', NULL, '2017-07-02 18:42:02', '2017-07-02 18:42:02'),
(224, 0, 'ge', 'translate', 'contact_sat', 'საკონტაქტო ინფორმაცია', '2017-07-02 18:42:02', '2017-08-10 06:23:20'),
(225, 0, 'ge', 'contact', 'map', NULL, '2017-07-02 18:42:02', '2017-07-02 18:42:02'),
(226, 0, 'ge', 'contact', 'phone', '032 2 18 18 96 ', '2017-07-02 18:42:02', '2017-08-11 13:23:02'),
(227, 0, 'ge', 'contact', 'mobile', NULL, '2017-07-02 18:42:02', '2017-07-02 18:42:02'),
(228, 0, 'ge', 'contact', 'email', 'geoaccessibility@yahoo.com', '2017-07-02 18:42:02', '2017-08-11 13:23:02'),
(229, 0, 'ge', 'contact', 'address', 'თბილისი, წერეთლის 116, "დიდუბე პლაზა" , ოთახი 340', '2017-07-02 18:42:02', '2017-08-11 13:23:02'),
(230, 0, 'ge', 'contact', 'form_title', NULL, '2017-07-02 18:42:02', '2017-07-02 18:42:02'),
(231, 1, 'ge', 'contact', 'Name', NULL, '2017-07-02 18:42:02', '2017-08-11 13:22:54'),
(232, 0, 'ge', 'contact', 'Subject', NULL, '2017-07-02 18:42:02', '2017-07-02 18:42:02'),
(233, 0, 'ge', 'contact', 'Message', NULL, '2017-07-02 18:42:02', '2017-07-02 18:42:02'),
(234, 1, 'ge', 'contact', 'contact_button', NULL, '2017-07-02 18:42:02', '2017-07-22 16:22:22'),
(255, 0, 'ge', 'web', 'products_title', NULL, '2017-07-02 18:42:03', '2017-07-02 18:42:03'),
(257, 0, 'ge', 'web', 'code', NULL, '2017-07-02 18:42:03', '2017-07-02 18:42:03'),
(258, 0, 'ge', 'web', 'category_title', NULL, '2017-07-02 18:42:03', '2017-07-02 18:42:03'),
(260, 0, 'ge', 'web', 'langs', 'ენები', '2017-07-02 18:42:03', '2017-09-30 10:27:39'),
(261, 0, 'ge', 'social', 'facebook', NULL, '2017-07-02 18:42:03', '2017-07-02 18:42:03'),
(262, 0, 'ge', 'social', 'twitter', NULL, '2017-07-02 18:42:03', '2017-07-02 18:42:03'),
(263, 0, 'ge', 'social', 'linkedin', NULL, '2017-07-02 18:42:03', '2017-07-02 18:42:03'),
(264, 0, 'ge', 'social', 'google', NULL, '2017-07-02 18:42:03', '2017-07-02 18:42:03'),
(265, 0, 'ge', 'web', 'website_title', NULL, '2017-07-02 18:42:03', '2017-07-02 18:42:03'),
(266, 0, 'ge', 'trans', 'donate', 'Donate', '2017-07-02 18:42:03', '2017-07-02 18:53:16'),
(267, 0, 'ge', 'translate', 'slider_more', NULL, '2017-07-02 18:42:03', '2017-07-02 18:42:03'),
(268, 0, 'ge', 'web', 'slider_more', 'ვრცლად', '2017-07-02 18:42:03', '2017-09-30 10:27:39'),
(269, 0, 'ge', 'filemanager', 'title-page', NULL, '2017-07-02 18:42:03', '2017-07-02 18:42:03'),
(270, 0, 'en', 'trans', 'donate', 'Donate', '2017-07-02 18:53:09', '2017-07-02 18:53:16'),
(271, 0, 'ru', 'trans', 'donate', 'Donate', '2017-07-02 18:53:12', '2017-07-02 18:53:16'),
(272, 0, 'ge', 'validation', 'custom.image.required', NULL, '2017-07-11 09:35:16', '2017-07-11 09:35:16'),
(273, 0, 'ge', 'validation', 'attributes.image', NULL, '2017-07-11 09:35:16', '2017-07-11 09:35:16'),
(274, 0, 'ge', 'web', 'What_Doing', 'რას ვაკეთებთ ჩვენ', '2017-07-12 03:21:05', '2017-09-30 10:27:39'),
(276, 0, 'ge', 'web', 'all_services', 'იხილეთ ყველა', '2017-07-12 03:21:05', '2017-09-30 10:27:39'),
(277, 0, 'ge', 'web', 'campaigns', 'როგორ შეგიძლია ჩაერთო', '2017-07-12 03:52:32', '2017-09-30 10:27:39'),
(278, 0, 'ge', 'web', 'campaigns_text', 'ჩვენი მიმდინარე კამპანიები', '2017-07-12 03:52:32', '2017-09-30 10:27:39'),
(279, 0, 'ge', 'web', 'donate_now', 'დაგვიჭირე მხარი', '2017-07-12 04:06:48', '2017-09-30 10:27:39'),
(280, 0, 'ge', 'web', 'all_campaigns', 'იხილეთ ყველა კამპანია', '2017-07-12 04:06:48', '2017-09-30 10:27:39'),
(281, 0, 'ge', 'web', 'complated', 'შესრულებული', '2017-07-12 04:07:09', '2017-09-30 10:27:39'),
(282, 0, 'ge', 'web', 'Goal', 'ჩვენი მიზანი', '2017-07-12 04:21:25', '2017-09-30 10:27:39'),
(283, 0, 'ge', 'web', 'Raised', 'შეგროვებულია', '2017-07-12 04:21:25', '2017-09-30 10:27:39'),
(284, 0, 'ge', 'web', 'Donators', 'მხარდამჭერთა <br> რაოდენობა', '2017-07-12 04:21:25', '2017-09-30 10:27:39'),
(285, 0, 'ge', 'web', 'Time_Remain', 'დარჩენილი დღეები', '2017-07-12 04:21:25', '2017-09-30 10:27:39'),
(286, 0, 'ge', 'web', 'Donors', 'დონორები', '2017-07-12 04:22:29', '2017-09-30 10:27:39'),
(287, 0, 'ge', 'web', 'Days_Left', 'დღე', '2017-07-12 04:23:13', '2017-09-30 10:27:39'),
(288, 0, 'ge', 'web', 'events', 'ჩვენი გუნდი', '2017-07-12 05:13:15', '2017-09-30 10:27:39'),
(289, 0, 'ge', 'web', 'events_text', 'ჩვენი სამომავლო ღონისძიებები', '2017-07-12 05:13:15', '2017-09-30 10:27:39'),
(290, 0, 'ge', 'web', 'events_view', 'ღონისძიების ნახვა', '2017-07-12 05:43:00', '2017-09-30 10:27:39'),
(292, 0, 'ge', 'web', 'banners_text', 'ჩვენი პარტნიორები', '2017-07-12 07:40:47', '2017-09-30 10:27:39'),
(293, 0, 'ge', 'web', 'order_sat', NULL, '2017-07-12 08:38:36', '2017-07-12 08:38:36'),
(294, 0, 'ge', 'web', 'order_name', NULL, '2017-07-12 08:38:36', '2017-07-12 08:38:36'),
(295, 0, 'ge', 'web', 'order_lastname', NULL, '2017-07-12 08:38:36', '2017-07-12 08:38:36'),
(296, 0, 'ge', 'web', 'order_company', NULL, '2017-07-12 08:38:36', '2017-07-12 08:38:36'),
(297, 0, 'ge', 'web', 'order_company_code', NULL, '2017-07-12 08:38:36', '2017-07-12 08:38:36'),
(298, 0, 'ge', 'web', 'order_email', NULL, '2017-07-12 08:38:36', '2017-07-12 08:38:36'),
(299, 0, 'ge', 'web', 'order_phone', NULL, '2017-07-12 08:38:36', '2017-07-12 08:38:36'),
(300, 0, 'ge', 'web', 'order_send_button', NULL, '2017-07-12 08:38:36', '2017-07-12 08:38:36'),
(301, 0, 'ge', 'cart', 'surati', NULL, '2017-07-12 08:38:36', '2017-07-12 08:38:36'),
(302, 0, 'ge', 'cart', 'produqcia', NULL, '2017-07-12 08:38:36', '2017-07-12 08:38:36'),
(303, 0, 'ge', 'cart', 'fasi', NULL, '2017-07-12 08:38:36', '2017-07-12 08:38:36'),
(304, 0, 'ge', 'cart', 'raodenoba', NULL, '2017-07-12 08:38:36', '2017-07-12 08:38:36'),
(305, 0, 'ge', 'cart', 'washla', NULL, '2017-07-12 08:38:36', '2017-07-12 08:38:36'),
(306, 0, 'ge', 'cart', 'ganaxleba', NULL, '2017-07-12 08:38:36', '2017-07-12 08:38:36'),
(307, 0, 'ge', 'cart', 'kalatis_detalebi', NULL, '2017-07-12 08:38:36', '2017-07-12 08:38:36'),
(308, 0, 'ge', 'cart', 'nivtebis_raodenoba', NULL, '2017-07-12 08:38:36', '2017-07-12 08:38:36'),
(309, 0, 'ge', 'cart', 'nivti', NULL, '2017-07-12 08:38:36', '2017-07-12 08:38:36'),
(310, 0, 'ge', 'cart', 'jamuri_tanxa', NULL, '2017-07-12 08:38:36', '2017-07-12 08:38:36'),
(311, 0, 'ge', 'cart', 'shekvetis_gagzavna', NULL, '2017-07-12 08:38:36', '2017-07-12 08:38:36'),
(312, 0, 'ge', 'cart', 'wesebi_minimumi_tanxis', NULL, '2017-07-12 08:38:36', '2017-07-12 08:38:36'),
(313, 0, 'ge', 'web', 'main_campaigns', 'ერთად ახლოს ვართ მიზანთან', '2017-07-12 08:49:31', '2017-09-30 10:27:39'),
(314, 0, 'ge', 'web', 'main_campaigns_text', 'დამხმარე საშუალებები მობილობის შეზღუდვის მქონე პირებისათვის', '2017-07-12 08:49:31', '2017-09-30 10:27:39'),
(315, 0, 'ge', 'web', 'Join_Us', 'გაგზავნა', '2017-07-12 09:02:00', '2017-09-30 10:27:39'),
(316, 0, 'ge', 'web', 'Full_Name', 'სახელი და გვარი', '2017-07-12 09:02:39', '2017-09-30 10:27:39'),
(317, 0, 'ge', 'web', 'Email', 'ელ.ფოსტა', '2017-07-12 09:02:39', '2017-09-30 10:27:39'),
(318, 0, 'ge', 'web', 'Contact', 'საკონტაქტო ნომერი', '2017-07-12 09:02:54', '2017-09-30 10:27:39'),
(319, 0, 'ge', 'web', 'services_all_sat', 'ყველა სერვისი', '2017-07-12 10:33:23', '2017-09-30 10:27:39'),
(320, 0, 'en', 'web', 'What_Doing', 'What we are doing', '2017-07-12 13:40:42', '2017-09-30 10:27:39'),
(322, 0, 'en', 'web', 'all_services', 'See all', '2017-07-12 13:40:42', '2017-09-30 10:27:39'),
(323, 0, 'en', 'web', 'main_campaigns', 'Together we are close to our aim', '2017-07-12 13:40:42', '2017-09-30 10:27:39'),
(324, 0, 'en', 'web', 'main_campaigns_text', 'Assistive means for mobility disabled poeple', '2017-07-12 13:40:42', '2017-09-30 10:27:39'),
(325, 0, 'en', 'web', 'Goal', 'Our goal', '2017-07-12 13:40:42', '2017-09-30 10:27:39'),
(326, 0, 'en', 'web', 'Raised', 'Collected', '2017-07-12 13:40:42', '2017-09-30 10:27:39'),
(327, 0, 'en', 'web', 'Donators', 'Donators', '2017-07-12 13:40:42', '2017-09-30 10:27:39'),
(328, 0, 'en', 'web', 'Donors', 'Donors', '2017-07-12 13:40:42', '2017-09-30 10:27:39'),
(329, 0, 'en', 'web', 'Time_Remain', 'The rest days', '2017-07-12 13:40:42', '2017-09-30 10:27:39'),
(330, 0, 'en', 'web', 'Days_Left', 'Day', '2017-07-12 13:40:42', '2017-09-30 10:27:39'),
(331, 0, 'en', 'web', 'donate_now', 'Support us and make the change now', '2017-07-12 13:40:42', '2017-09-30 10:27:39'),
(332, 0, 'en', 'web', 'campaigns', 'How to get involved', '2017-07-12 13:40:42', '2017-09-30 10:27:39'),
(333, 0, 'en', 'web', 'campaigns_text', 'Current campaigns', '2017-07-12 13:40:42', '2017-09-30 10:27:39'),
(334, 0, 'en', 'web', 'complated', 'Performed ', '2017-07-12 13:40:42', '2017-09-30 10:27:39'),
(335, 0, 'en', 'web', 'all_campaigns', 'See all campaigns', '2017-07-12 13:40:42', '2017-09-30 10:27:39'),
(336, 0, 'en', 'web', 'events', 'Our team', '2017-07-12 13:40:42', '2017-09-30 10:27:39'),
(337, 0, 'en', 'web', 'events_text', 'Upcoming events', '2017-07-12 13:40:42', '2017-09-30 10:27:39'),
(338, 0, 'en', 'web', 'events_view', 'View an event', '2017-07-12 13:40:42', '2017-09-30 10:27:39'),
(339, 0, 'en', 'web', 'Full_Name', 'Full name', '2017-07-12 13:40:42', '2017-09-30 10:27:39'),
(340, 0, 'en', 'web', 'Email', 'E-mail', '2017-07-12 13:40:42', '2017-09-30 10:27:39'),
(341, 0, 'en', 'web', 'Contact', 'Contact phone', '2017-07-12 13:40:42', '2017-09-30 10:27:39'),
(342, 0, 'en', 'web', 'Join_Us', 'Send', '2017-07-12 13:40:42', '2017-09-30 10:27:39'),
(344, 0, 'en', 'web', 'banners_text', 'Our partners', '2017-07-12 13:40:42', '2017-09-30 10:27:39'),
(345, 0, 'en', 'web', 'website_title', NULL, '2017-07-12 13:40:42', '2017-07-12 13:40:42'),
(346, 0, 'en', 'web', 'langs', 'Lenguages', '2017-07-12 13:40:42', '2017-09-30 10:27:39'),
(347, 0, 'en', 'contact', 'address', 'Tbilisi, Tsereteli Ave 116, "Didube Plaza", room 340', '2017-07-12 13:40:42', '2017-08-11 13:23:02'),
(348, 0, 'en', 'social', 'facebook', NULL, '2017-07-12 13:40:42', '2017-07-12 13:40:42'),
(349, 0, 'en', 'social', 'twitter', NULL, '2017-07-12 13:40:42', '2017-07-12 13:40:42'),
(350, 0, 'en', 'social', 'linkedin', NULL, '2017-07-12 13:40:42', '2017-07-12 13:40:42'),
(351, 0, 'en', 'social', 'google', NULL, '2017-07-12 13:40:42', '2017-07-12 13:40:42'),
(352, 0, 'ge', 'validation', 'custom.image.max', NULL, '2017-07-18 15:13:06', '2017-07-18 15:13:06'),
(353, 0, 'ge', 'web', 'Campaigns_all_sat', 'ყველა კამპანია', '2017-07-19 05:05:34', '2017-09-30 10:27:39'),
(354, 0, 'ge', 'web', 'share', 'გააზიარეთ', '2017-07-19 05:50:15', '2017-09-30 10:27:39'),
(355, 0, 'ge', 'translate', 'contact_form', 'მოგვწერეთ', '2017-07-19 07:34:59', '2017-08-10 06:23:20'),
(356, 0, 'ge', 'translate', 'contact_send', 'გაგზავნა', '2017-07-19 07:35:26', '2017-08-10 06:23:20'),
(357, 0, 'ge', 'web', 'Teams_all_sat', 'ვრცლად', '2017-07-19 08:44:33', '2017-09-30 10:27:39'),
(358, 0, 'ge', 'web', 'other_events', 'ჩვენი სამომავლო ღონისძიებები', '2017-07-20 12:53:00', '2017-09-30 10:27:39'),
(359, 0, 'en', 'web', 'share', 'Share', '2017-07-22 13:22:08', '2017-09-30 10:27:39'),
(360, 0, 'en', 'translate', 'contact_form', 'contact us', '2017-07-22 14:02:40', '2017-08-10 06:23:20'),
(361, 0, 'en', 'translate', 'contact_send', 'Send', '2017-07-22 14:03:10', '2017-08-10 06:23:20'),
(362, 1, 'en', 'translate', 'service_sat', NULL, '2017-07-22 14:04:54', '2017-07-22 14:06:27'),
(363, 0, 'en', 'translate', 'contact_sat', 'Contact information', '2017-07-22 14:06:50', '2017-08-10 06:23:20'),
(364, 0, 'ge', 'validation', 'custom.password.required', NULL, '2017-07-22 14:19:00', '2017-07-22 14:19:00'),
(365, 0, 'ge', 'validation', 'attributes.password', NULL, '2017-07-22 14:19:00', '2017-07-22 14:19:00'),
(366, 0, 'en', 'contact', 'email', 'geoaccessibility@yahoo.com', '2017-07-22 16:19:11', '2017-08-11 13:23:02'),
(367, 1, 'en', 'contact', 'Name', NULL, '2017-07-22 16:20:52', '2017-07-22 16:21:31'),
(368, 0, 'en', 'web', 'Teams_all_sat', 'Read more', '2017-07-22 16:38:22', '2017-09-30 10:27:39'),
(369, 0, 'en', 'translate', 'date', 'Published', '2017-07-23 16:31:13', '2017-08-10 06:23:20'),
(370, 0, 'en', 'contact', 'phone', '032 2 18 18 96', '2017-07-26 06:22:00', '2017-08-11 13:23:02'),
(371, 0, 'en', 'web', 'services_all_sat', 'All services', '2017-07-26 06:25:49', '2017-09-30 10:27:39'),
(372, 0, 'ge', 'web', 'banners', NULL, '2017-08-11 13:25:26', '2017-08-11 13:25:26'),
(373, 0, 'ge', 'web', 'What_Doing_text', 'ჩვენი საქმიანობა', '2017-08-11 13:27:18', '2017-09-30 10:27:39'),
(374, 0, 'en', 'web', 'What_Doing_text', 'Our affairs ', '2017-08-11 20:35:57', '2017-09-30 10:27:39'),
(375, 0, 'en', 'web', 'banners', NULL, '2017-08-11 20:35:57', '2017-08-11 20:35:57'),
(376, 0, 'ge', 'web', 'Join_us_Now', 'შემოგვიერთდი', '2017-08-18 08:18:39', '2017-09-30 10:27:39'),
(377, 0, 'ge', 'web', 'other_services', 'სხვა სერვისები', '2017-08-18 09:50:16', '2017-09-30 10:27:39'),
(378, 0, 'ge', 'web', 'reed_more', 'ვრცლად', '2017-08-18 09:50:28', '2017-09-30 10:27:39'),
(379, 0, 'ge', 'web', 'author', NULL, '2017-08-18 11:44:12', '2017-08-18 11:44:12'),
(380, 0, 'ge', 'web', 'tanxis_charicxva', 'თანხის ჩარიცხვა', '2017-08-18 12:40:03', '2017-09-30 10:27:39'),
(381, 0, 'ge', 'web', 'Make_Donation', 'დაგვიჭირე მხარი', '2017-08-18 12:43:35', '2017-09-30 10:27:39'),
(382, 0, 'ge', 'web', 'Personal_Info', NULL, '2017-08-18 12:44:12', '2017-08-18 12:44:12'),
(383, 0, 'ge', 'web', 'More_Videos', 'ყველა ვიდეო', '2017-08-18 15:21:31', '2017-09-30 10:27:39'),
(384, 0, 'en', 'web', 'More_Videos', 'All video', '2017-08-18 15:33:02', '2017-09-30 10:27:39'),
(385, 0, 'en', 'web', 'Join_us_Now', 'Join us', '2017-08-18 15:33:02', '2017-09-30 10:27:39'),
(386, 0, 'en', 'web', 'author', NULL, '2017-08-18 15:33:02', '2017-08-18 15:33:02'),
(387, 0, 'en', 'web', 'Campaigns_all_sat', 'All campaigns', '2017-08-26 16:58:11', '2017-09-30 10:27:39'),
(388, 0, 'ge', 'web', 'add_cart', NULL, '2017-09-30 10:04:42', '2017-09-30 10:04:42'),
(389, 0, 'ge', 'web', 'aromats_title', NULL, '2017-09-30 10:04:42', '2017-09-30 10:04:42'),
(390, 0, 'en', 'web', 'reed_more', 'Read more', '2017-09-30 10:06:14', '2017-09-30 10:27:39'),
(391, 0, 'ru', 'web', 'reed_more', 'read more', '2017-09-30 10:06:25', '2017-09-30 10:27:39'),
(392, 0, 'en', 'web', 'top_phone', 'Phone number', '2017-09-30 10:07:56', '2017-09-30 10:27:39'),
(393, 0, 'en', 'web', 'top_email', 'E-mail', '2017-09-30 10:08:10', '2017-09-30 10:27:39'),
(394, 0, 'en', 'web', 'tanxis_charicxva', 'Money transper ', '2017-09-30 10:10:01', '2017-09-30 10:27:39'),
(395, 0, 'en', 'web', 'slider_more', 'Read more', '2017-09-30 10:10:10', '2017-09-30 10:27:39'),
(396, 0, 'en', 'web', 'other_slider', 'Another information', '2017-09-30 10:11:31', '2017-09-30 10:27:39'),
(397, 0, 'en', 'web', 'other_services', 'Another services', '2017-09-30 10:11:49', '2017-09-30 10:27:39'),
(398, 0, 'en', 'web', 'other_events', 'Our future events', '2017-09-30 10:12:16', '2017-09-30 10:27:39'),
(399, 0, 'en', 'web', 'Make_Donation', 'Support us', '2017-09-30 10:12:51', '2017-09-30 10:27:39'),
(400, 1, 'ru', 'web', 'More_Videos', 'All video', '2017-09-30 10:32:07', '2017-09-30 10:32:07'),
(401, 0, 'ge', 'social', 'youtube', NULL, '2017-10-20 03:07:03', '2017-10-20 03:07:03'),
(402, 0, 'en', 'social', 'youtube', NULL, '2017-10-20 12:51:54', '2017-10-20 12:51:54'),
(403, 0, 'ge', 'validation', 'custom.email.required', NULL, '2017-10-25 07:33:32', '2017-10-25 07:33:32'),
(404, 0, 'ge', 'validation', 'attributes.email', NULL, '2017-10-25 07:33:32', '2017-10-25 07:33:32'),
(405, 0, 'ge', 'filemanager', 'upload.info', NULL, '2017-11-20 08:38:39', '2017-11-20 08:38:39');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_100000_create_password_resets_table', 1),
('2016_11_13_164039_create_cars_class_table', 2),
('2016_11_13_164523_create_cars_oil_table', 4),
('2016_11_13_180151_create_cars_style_table', 4),
('2016_11_20_201233_create_cars_drive_table', 4),
('2016_11_13_160438_create_cars_table', 5),
('2016_12_13_080910_create_cars_destination_table', 6),
('2014_10_12_000000_create_users_table', 7),
('2015_06_10_144817_add_translations_table', 8),
('2014_04_02_193005_create_translations_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `more_images`
--

CREATE TABLE IF NOT EXISTS `more_images` (
  `id` int(11) NOT NULL,
  `model_id` int(11) NOT NULL,
  `model` varchar(15) NOT NULL DEFAULT 'page',
  `date` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `tumb` text NOT NULL,
  `title_ge` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `more_images`
--

INSERT INTO `more_images` (`id`, `model_id`, `model`, `date`, `image`, `tumb`, `title_ge`, `title_en`, `title_ru`, `created_at`, `updated_at`) VALUES
(1, 1, 'album', 'Thu, Jun 1, 2017 9:37 AM', 'files/more_images/1496309875_Slide23 - Copy.JPG', 'files/more_images/tumb/1496309875_Slide23 - Copy.JPG', 'სდფსადფ', '', '', '2017-06-01 09:37:56', '2017-06-01 09:37:56'),
(2, 1, 'album', 'Thu, Jun 1, 2017 9:38 AM', 'files/more_images/1496309884_Slide23.JPG', 'files/more_images/tumb/1496309884_Slide23.JPG', 'სდფსდ', '', '', '2017-06-01 09:38:05', '2017-06-01 09:38:05'),
(3, 1, 'album', 'Thu, Jun 1, 2017 9:38 AM', 'files/more_images/1496309892_Slide31 - Copy.JPG', 'files/more_images/tumb/1496309892_Slide31 - Copy.JPG', '', '', '', '2017-06-01 09:38:13', '2017-06-01 09:38:13'),
(4, 1, 'album', 'Thu, Jun 1, 2017 9:38 AM', 'files/more_images/1496309903_Slide54.JPG', 'files/more_images/tumb/1496309903_Slide54.JPG', 'სდფასდფასდ', '', '', '2017-06-01 09:38:24', '2017-06-01 09:38:24'),
(6, 6, 'news', 'Sat, Jun 17, 2017 2:05 PM', 'files/more_images/1497708350_e3d8a2a458e9d968ba712a71a836ba55.jpg', 'files/more_images/tumb/1497708350_e3d8a2a458e9d968ba712a71a836ba55.jpg', 'ელ ხრახნდამჭერი', '', '', '2017-06-17 14:05:50', '2017-06-17 14:05:50'),
(7, 10, 'services_items', 'Sat, Jun 17, 2017 2:06 PM', 'files/more_images/1497708379_19a3a3fc82768d34be6159b3a5c1787e.jpg', 'files/more_images/tumb/1497708379_19a3a3fc82768d34be6159b3a5c1787e.jpg', 'ელექტრო ხერხი', '', '', '2017-06-17 14:06:19', '2017-06-17 14:06:19'),
(23, 9, 'teams', 'Tue, Jul 11, 2017 1:39 PM', 'files/more_images/1499780380_Roofing-01.jpg', 'files/more_images/tumb/1499780380_Roofing-01.jpg', 'jhhfjfg', '', '', '2017-07-11 13:39:40', '2017-07-11 13:39:40'),
(25, 9, 'teams', 'Tue, Jul 11, 2017 1:40 PM', 'files/more_images/1499780419_roof-tiles-roofers-barnsley.jpg', 'files/more_images/tumb/1499780419_roof-tiles-roofers-barnsley.jpg', 'fgjfg', '', '', '2017-07-11 13:40:19', '2017-07-11 13:40:19'),
(26, 10, 'teams', 'Tue, Jul 11, 2017 1:55 PM', 'files/more_images/1499781339_d56232a57f3a0b1ab6b460e6c7821f73.jpg', 'files/more_images/tumb/1499781339_d56232a57f3a0b1ab6b460e6c7821f73.jpg', 'ცემენტის ასაზელი', '', '', '2017-07-11 13:55:39', '2017-07-11 13:55:39'),
(29, 11, 'campaigns', 'Tue, Jul 11, 2017 2:54 PM', 'files/more_images/1499784870_16508657_630767463778945_94499443533563162_n.jpg', 'files/more_images/tumb/1499784870_16508657_630767463778945_94499443533563162_n.jpg', 'kampania', '', '', '2017-07-11 14:54:30', '2017-07-11 14:54:30'),
(30, 7, 'news', 'Wed, Jul 12, 2017 3:52 PM', 'files/more_images/1499874753_Capture.PNG', 'files/more_images/tumb/1499874753_Capture.PNG', 'sdf asdf sdaf ', '', '', '2017-07-12 15:52:34', '2017-07-12 15:52:34'),
(32, 12, 'services_items', 'Wed, Jul 12, 2017 4:21 PM', 'files/more_images/1499876482_Capture.PNG', 'files/more_images/tumb/1499876482_Capture.PNG', 'ფ სდფ სდ', '', '', '2017-07-12 16:21:22', '2017-07-12 16:21:22'),
(33, 10, 'news', 'Sun, Jul 23, 2017 6:27 PM', 'files/more_images/1500834446_12080345_635637753206010_456477519533770756_o.jpg', 'files/more_images/tumb/1500834446_12080345_635637753206010_456477519533770756_o.jpg', '', '', '', '2017-07-23 18:27:27', '2017-07-23 18:27:27'),
(34, 10, 'news', 'Sun, Jul 23, 2017 6:28 PM', 'files/more_images/1500834482_12087851_635637899872662_8448034866048389624_o.jpg', 'files/more_images/tumb/1500834482_12087851_635637899872662_8448034866048389624_o.jpg', '', '', '', '2017-07-23 18:28:03', '2017-07-23 18:28:03'),
(35, 10, 'news', 'Sun, Jul 23, 2017 6:28 PM', 'files/more_images/1500834510_12281876_816699441773875_874497894_o.jpg', 'files/more_images/tumb/1500834510_12281876_816699441773875_874497894_o.jpg', '', '', '', '2017-07-23 18:28:30', '2017-07-23 18:28:30'),
(36, 10, 'news', 'Sun, Jul 23, 2017 6:29 PM', 'files/more_images/1500834544_12295561_816699515107201_835485588_o.jpg', 'files/more_images/tumb/1500834544_12295561_816699515107201_835485588_o.jpg', '', '', '', '2017-07-23 18:29:05', '2017-07-23 18:29:05'),
(37, 10, 'news', 'Sun, Jul 23, 2017 6:30 PM', 'files/more_images/1500834610_12027191_635638066539312_7979548562289288430_o.jpg', 'files/more_images/tumb/1500834610_12027191_635638066539312_7979548562289288430_o.jpg', '', '', '', '2017-07-23 18:30:11', '2017-07-23 18:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `navigation`
--

CREATE TABLE IF NOT EXISTS `navigation` (
  `id` int(11) NOT NULL,
  `root_id` int(11) DEFAULT NULL,
  `level` int(3) NOT NULL DEFAULT '0',
  `type` varchar(5) NOT NULL DEFAULT 'menu',
  `homepage` int(1) NOT NULL DEFAULT '0',
  `controller` varchar(255) NOT NULL,
  `target` varchar(10) NOT NULL DEFAULT '_self',
  `pos` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `title_ge` varchar(100) NOT NULL,
  `tab_ge` varchar(100) NOT NULL,
  `description_ge` text NOT NULL,
  `keywords_ge` text NOT NULL,
  `title_en` varchar(100) NOT NULL,
  `tab_en` varchar(100) NOT NULL,
  `description_en` text NOT NULL,
  `keywords_en` text NOT NULL,
  `title_ru` varchar(100) NOT NULL,
  `tab_ru` varchar(100) NOT NULL,
  `description_ru` text NOT NULL,
  `keywords_ru` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `navigation`
--

INSERT INTO `navigation` (`id`, `root_id`, `level`, `type`, `homepage`, `controller`, `target`, `pos`, `status`, `title_ge`, `tab_ge`, `description_ge`, `keywords_ge`, `title_en`, `tab_en`, `description_en`, `keywords_en`, `title_ru`, `tab_ru`, `description_ru`, `keywords_ru`, `created_at`, `updated_at`) VALUES
(1, NULL, 0, 'menu', 0, '', '_self', 0, 1, 'მთავარი', 'მთავარი დემო გვერდი', 'მთავარი აღწერა', 'მთავარი საკვანძო სიტყვები', 'Home', '', '', '', 'მთავარი', '', '', '', '2017-03-02 15:14:11', '2017-08-19 15:28:30'),
(2, NULL, 1, 'menu', 0, '', '_self', 1, 1, 'ჩვენ შესახებ', 'ძრავის შესახებ', 'ლარაველის ძრავი ', 'ლარაველი, ვიზუალ სტუდიო, ზრავი', 'About Us', '', '', '', 'ჩვენ შესახებ', '', '', '', '2017-03-02 15:18:02', '2017-08-18 13:35:35'),
(19, NULL, 0, 'menu', 0, 'contact', '_self', 5, 1, 'კონტაქტი', '', '', '', 'Contact', '', '', '', 'კონტაქტი', '', '', '', '2017-03-02 15:25:10', '2017-08-19 15:33:46'),
(57, NULL, 1, 'menu', 0, '', '_self', 2, 1, 'ამბები', 'ამბები', '', '', 'Causes', '', '', '', '', '', '', '', '2017-04-28 09:21:53', '2017-08-19 15:29:50'),
(66, NULL, 1, 'menu', 0, '', '_self', 3, 1, 'პროექტები', '', '', '', 'Projects', '', '', '', 'პროექტები', '', '', '', '2017-07-02 22:39:17', '2017-08-19 15:30:53'),
(67, NULL, 1, 'menu', 0, '', '_self', 4, 1, 'პუბლიკაციები', '', '', '', 'Publications', '', '', '', 'პუბლიკაციები', '', '', '', '2017-07-02 22:39:29', '2017-08-19 15:32:19'),
(68, 2, 0, 'menu', 0, '', '_self', 0, 1, 'ორგანიზაცია', '', '', '', 'Organization', '', '', '', 'მისია', '', '', '', '2017-07-02 22:55:00', '2017-09-02 19:14:44'),
(69, 2, 0, 'menu', 0, '', '_self', 1, 1, 'წესდება', '', '', '', 'Statute', '', '', '', 'წესდება', '', '', '', '2017-07-02 22:55:31', '2017-08-19 15:29:04'),
(70, 2, 0, 'menu', 0, 'teams', '_self', 2, 1, 'გუნდი', '', '', '', 'Team members', '', '', '', 'გუნდი', '', '', '', '2017-07-02 22:55:52', '2017-08-19 15:29:36'),
(71, 57, 0, 'menu', 0, '', '_self', 0, 1, 'ადგილობრივი', '', '', '', 'local', '', '', '', 'ადგილობრივი', '', '', '', '2017-07-02 22:56:33', '2017-08-19 15:30:04'),
(72, 57, 0, 'menu', 0, '', '_self', 1, 1, 'საერთაშორისო', '', '', '', 'International', '', '', '', 'საერთაშორისო', '', '', '', '2017-07-02 22:56:52', '2017-08-19 15:30:37'),
(73, 66, 0, 'menu', 0, '', '_self', 0, 1, 'მიმდინარე', '', '', '', 'Ongoing projects', '', '', '', 'მიმდინარე', '', '', '', '2017-07-02 22:57:26', '2017-08-19 15:31:11'),
(74, 66, 0, 'menu', 0, '', '_self', 1, 1, 'განხორციელებული', '', '', '', 'Completed projects', '', '', '', 'განხორციელებული', '', '', '', '2017-07-02 22:57:53', '2017-08-19 15:31:27'),
(75, 66, 0, 'menu', 0, '', '_self', 2, 1, 'არქივი', '', '', '', 'Archive', '', '', '', 'არქივი', '', '', '', '2017-07-02 22:58:11', '2017-08-19 15:31:39'),
(76, 66, 0, 'menu', 0, '', '_self', 3, 0, 'სამომავლო გეგმები', '', '', '', 'სამომავლო გეგმები', '', '', '', 'სამომავლო გეგმები', '', '', '', '2017-07-02 23:24:56', '2017-08-09 14:28:20'),
(77, 67, 0, 'menu', 0, '', '_self', 0, 1, 'კანონმდებლობა', '', '', '', 'Legal acts', '', '', '', 'კანონმდებლობა', '', '', '', '2017-07-02 23:45:51', '2017-08-19 15:32:36'),
(78, 67, 0, 'menu', 0, '', '_self', 2, 1, 'კვლევა', '', '', '', 'Research', '', '', '', 'კვლევა', '', '', '', '2017-07-02 23:46:04', '2017-08-19 15:32:55'),
(79, 67, 0, 'menu', 0, '', '_self', 3, 1, 'ანალიზი ', '', '', '', 'Analysis', '', '', '', 'ანალიზი ', '', '', '', '2017-07-02 23:46:18', '2017-08-19 15:33:33'),
(80, NULL, 0, 'menu', 0, '', '_self', 6, 0, 'ვიდეო', '', '', '', 'Video', '', '', '', '', '', '', '', '2017-08-18 17:06:13', '2017-08-19 15:36:23');

-- --------------------------------------------------------

--
-- Table structure for table `News`
--

CREATE TABLE IF NOT EXISTS `News` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `main` int(1) NOT NULL DEFAULT '1',
  `pos` varchar(5) NOT NULL DEFAULT '111',
  `image` varchar(255) NOT NULL,
  `tumb` text NOT NULL,
  `date` varchar(50) NOT NULL,
  `title_ge` varchar(255) NOT NULL,
  `short_text_ge` text NOT NULL,
  `full_text_ge` longtext NOT NULL,
  `description_ge` text NOT NULL,
  `keywords_ge` text NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `short_text_en` text NOT NULL,
  `full_text_en` longtext NOT NULL,
  `description_en` text NOT NULL,
  `keywords_en` text NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `short_text_ru` text NOT NULL,
  `full_text_ru` longtext NOT NULL,
  `description_ru` text NOT NULL,
  `keywords_ru` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `News`
--

INSERT INTO `News` (`id`, `menu_id`, `main`, `pos`, `image`, `tumb`, `date`, `title_ge`, `short_text_ge`, `full_text_ge`, `description_ge`, `keywords_ge`, `title_en`, `short_text_en`, `full_text_en`, `description_en`, `keywords_en`, `title_ru`, `short_text_ru`, `full_text_ru`, `description_ru`, `keywords_ru`, `created_at`, `updated_at`) VALUES
(8, 73, 1, '111', 'files/news/1500227595_cover.jpg', 'files/news/tumb/1500227595_cover.jpg', 'Sun, Jul 16, 2017 5:58 PM', 'მისაწვდომი და ინკლუზიური ჯანდაცვის სერვისები შეზღუდული შესაძლებლობების მქონე პირებისათვის', '', '<hr />\r\n<p>2017 წლის იანვრიდან ორგანიზაცია ახორციელებს პროექტს ინკლუზიური ჯანდაცვისა და ქვეყანაში რეაბილიტაცია-აბილიტაციის სერვისების ხელმისაწვდომობის კუთხით. პროექტი გულისხმობს ჯანდაცვის სფეროში შშმ პირებისათვის არსებული ბარიერების კვლევას ექსპერტების მიერ, რომლებიც მოამზადებენ რეკომენდაციებს მათი დაძლევის მიზნით. შშმ პირებს ჯანდაცვის სერვისებით სარგებლობა ყველაზე ხშირად უწევთ, მაგრამ ისინი აწყდებიან უამრავ პრობლემას, რომელიც უკავშირდება როგორც დაწესებულებების ფიზიკურ მისაწვდომობას, ასევე მედიკოსთა კვალიფიკაციური მიდგომის ნაკლებობას. პროექტი ასევე მიზნად ისახავს შშმ ქალთა რეპროდუქციული ჯანმრთელობის პრობლემატიკის პრიორიტეტიზაციას და ამ მხრივ არსებული ვითარების შესწავლას. იგეგმება შშმ ქალთა პლატფორმის გაძლიერება, გადასამზადებელი ტრენინგები და ქალთა ორგანიზაციის ოფიციალური რეგისტრაცია. ექსპერტების მიერ შინაარსობრივი ანალიზის დასრულების შემდეგ კი დაიწყება სამედიცინო მომსახურების ზედამხედველობის მონიტორინგი სპეციალურად მომზადებული ჯგუფების მიერ.</p>\r\n\r\n<p>პროექტის მეორე ნაწილი გულისხმობს იმ სახელმწიფო სტრუქტურებსა და არასამთავრობო ორგანიზაციებზე მიმართულ ადვოკატირების კამპანიას, რომლებიც პასუხისმგებელნი არიან საკითხთა მოგვარებასა და რეაგირებაზე, მათ შორისაა საქართველოს სახალხო დამცველის აპარატი, საქართველოს შრომის, ჯანმრთელობისა და სოციალური დაცვის სამინისტრო, პარლამენტის ჯანდაცვისა და სოციალურ საკითხთა კომიტეტი, წამყვანი პოლიტიკურ პარტიები.</p>\r\n\r\n<p>საინფორმაციო კამპანიის ფარგლებში კი მომზადდება და მედიაში გავრცელდება<strong> </strong>გენდერული პოლიტიკის შესახებ საზოგადოების ცნობიერების ამაღლებაზე მიმართულ სტატიები. პროექტის ბოლოს შშმ პირები მოაწყობენ საჯარო დებატები და გაიმართება შემაჯამებელი ფორუმი.</p>\r\n\r\n<p>პროექტის მხარდამჭერია ღია საზოგადოების ფონდი.</p>\r\n', '', 'გამითვალისწინე, შშმ პირთა ჯანდაცვა, ხელმისაწვდომობა, რეპროდუქციული ჯანმრთელობა', 'Accessible and inclusive healthcare services for people with disabilities', '', '<hr />\r\n<p>&nbsp;</p>\r\n\r\n<p>Since January 2017 organization launched new project oriented at raising access on inclusive healthcare and habilitation-rehabilitation services for people with disabilities. The project will identify existing barriers for disabled persons in health care system. Professional experts will conduct research and prepare recommendations for further improvement. Disabled persons are the most frequent users of healthcare services, but they face many problems ranged from the physical accessibility of medical institutions to qualified service provision by medical professionals. The project also prioritizes disabled women&rsquo;s reproductive health and the situation will be analyzed regarding the topic. Capacity building training will be carried for women&rsquo;s platform (PNO- the platform for new opportunities) and their organization will get official status of non-profit. After the completion of research phase done by experts, the monitoring process of health care providers will be started by specially trained groups.</p>\r\n\r\n<p>The second phase of the project includes advocacy campaign. The campaign will target all responsible state agencies like Public Defender&rsquo;s office, Ministry of Health, labor and social protections, a parliamentary committee of health and social affairs, leading political parties.</p>\r\n\r\n<p>The informational campaign will be launched and media products will be published about gender issues in order to raise civic awareness. People with disabilities will hold public debates and the project will end with a final forum.</p>\r\n\r\n<p>The project is supported by Open Society Iinternational foundation.</p>\r\n', '', 'Accessible health care , People with disabilities, disability , reproductive health', '', '', '', '', '', '2017-07-16 17:53:16', '2017-07-16 17:58:01'),
(10, 74, 1, '111', 'files/news/1500833593_8 (1).jpg', 'files/news/tumb/1500833593_8 (1).jpg', 'Sun, Jul 23, 2017 6:43 PM', '"გადალახე ბარიერი ჩემთან ერთად"', '', '<p>&nbsp; &nbsp;2015 წლის ივნისი-ოქტომბრის თვეში ორგანიზაციამ &bdquo;ხელმისაწვდომი გარემო ყველასთვის&ldquo; ცენტრალური საარჩევნო კომისიის მხარდაჭერით განახორციელა საგანმანათლებლო პროექტი ახალგაზრდა ამომრჩეველთა სამოქალაქო ჩართულობისა და არჩევნებში მონაწილეობის გაზრდის მიზნით. პროექტის განხორციელება განაპირობა 18-25 წლების ახალგაზრდების თვალსაჩინოდ დაბალმა საარჩევნო აქტივობამ, განსაკუთრებით კი მათ შორის ყველაზე მოწყვლად ჯგუფს შშმ პირები წარმოადგენენ. ამ პრობლემაზე რეაგირების მიზნით და საჭირო მონაცემების შესაგროვებლად საწყის ეტაპზე ჩატარდა ფოკუს-ჯგუფები შშმ პირთა ორგანიზაციებთან, შშმ ახალგაზრდებან, სტუდენტებთან და მოსწავლეებთან ქალაქ ბათუმსა და ახალქალაქში. ამის შემდგომ კი დაიწყო საინფორმაციო და სოციალური კამპანია მოქალაქეთა ინფორმირებულობის ამაღლების მიზნით საარჩევნო მონაწილეობის საკითხებზე.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp;ამისათვის ორგანიზაციამ რამდენიმე გზა გამოიყენა. ჩამოყალიბდა რეგიონალური ჯგუფები ბათუმსა და ახალქალაქში, შემუშავდა ინკლუზიური სასწავლო პროგრამები; გამოცხადდა ესეების კონკურსი ახალგაზრდებისათვის და საუკეთესო მონაწილეებს საშუალება მიეცათ გაეარათ სპეციალური ტრენინგ-მოდულები საარჩევნო ჩართულობისა და საზოგადოებრივი მონაწილეობის საკითხებზე. ახალგაზრდა ამომრჩევლები შეხვდნენ ადგილობრივი თვითმმართველობების და საოლქო საარჩევნო კომისიების წარმომადგენლებს, ქალაქ ბათუმისა და ახალციხის მერებს. ასევე მათ აქტიური კონტაქტი დაამყარეს ადგილობრივ მედიასთან. პროექტის ფარგლებში მომზადებული სტატიები შეგიძლიათ იხილოთ აქ-&bdquo;ოცნებიდან პასუხისმგებლობამდე&ldquo;; &bdquo;უცნობი მოძრაობის ისტორია&ldquo;, &bdquo;შეახსენე მერიას არცევნების თარიღი&ldquo;. ასევე მომზადდა რამდენიმე სატელევიზიო სოციალური ვიდეო-რგოლი და აქცია-პერფორმანსი ქალაქ ბათუმში. პროექტის მიმდინარეობისას სამცხე-ჯავახეთსა და აჭარაში გამოვლინდნენ აქტიური ახალგაზრდები, რომელთაც გამოხატეს მზაობა საკუთარი ინიციატივების განსახორციელებლად. მათ გამართეს პრეზენტაცია-დისკუსიები ახალციხის უნივერსიტეტსა და #1 საჯარო სკოლაში, ასევე შედგა ფორუმ-თეატრი ახალციხის ბიბლიოთეკაში და ფილმების ჩვენებები. ბათუმის რეგიონალურმა ჯგუფმა კი პროექტის ფარგლებში საკუთარი ვებსაიტიც შექმნა.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp;პროექტის შემაჯამებელი კონფერენცია შედგა თბილისის სახელმწიფო უნივერსიტეტში 25 ოქტომბერს. პროექტმა შექმნა მნიშვნელოვანი პრეცედენტი საზოგადოების სხვადასხვა აქტორს შორის თანამშრომლობისა. პროექტის ჯამურმა ბიუჯეტმა შეადგინა 58 762 ლარი.</p>\r\n', '', 'არჩევნები , მონაწილეობა , შეზღუდული შესაძლებლობები', '', '', '<p>&nbsp; &nbsp;Movement Accessible Environment for Everyone conducted educational project aiming at enhancing civic and electoral participation of young voters. The activity was supported by Central Election Committee of Georgia in the period of June and October 2015. The project was conditioned by the fact that significantly low number of young people go to elections (ages of 18-25) and among them, people with disabilities are the most vulnerable group. Focus groups were conducted in the initial phase of the project in order to collect necessary information, problems, and barriers. Disability people&rsquo;s organizations, young PWDs, students, and pupils participated in focus groups in two cities: in Batumi and Akhaltsikhe.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp;After that, an informational campaign was launched in order to raise informational preparedness of citizens considering the electoral participation and voting. Certain methods were applied by our organization for achieving the goal. Regional groups were formed in Batumi and Akhaltsikhe, inclusive educational programs were created; essay competition had been announced for youth and the best participants of the competition were given the chance to attend special training modules about electoral participation and civic involvement. Meetings were held between young voters and representatives of local self-governments and electoral districts, mayor of Batumi and Akhaltsikhe. Young participants also closely communicated with local media. Several articles were published on leading media portals ( &ldquo; <a href="http://liberali.ge/articles/view/18793/otsnebidan-pasukhismgeblobamde">From dream to Responsibility&rdquo;,</a> &ldquo;<a href="http://netgazeti.ge/news/44235/">The history of the unknown movement</a>, &ldquo;<a href="http://batumelebi.netgazeti.ge/weekly1/12864/">Remind the mayor&rsquo;s office day of elections&rdquo;</a>). Social video clips were prepared for TV play and performances were held in Batumi. Active young participants of the project took initiative to organize their own activities. They arranged presentations and discussions in Akhaltsikhe State University and #1 public school of Akhaltsikhe. Also, forum theater and movie shows were held at the library of Akhaltsikhe. The regional group of Batumi created their web page as well.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp;Conclusive conference of the project was organized at Tbilisi State University on October 25th, 2015. The project created an important precedent of collaboration between different actors of the society. A total budget of the project amounted 58 762 Gel.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '', '', '', '', '', '', '', '2017-07-23 18:13:14', '2017-07-23 18:43:10'),
(11, 74, 1, '111', 'files/news/1501050994_adrc_homepage_1.jpg', 'files/news/tumb/1501050994_adrc_homepage_1.jpg', 'Wed, Jul 26, 2017 6:50 AM', 'შეზღუდული შესაძლებლობების მქონე ბავშვები მედიაში', 'შშმ ბავშვთა ეთიკური გაშუქება', '<p>&nbsp; &nbsp;&bdquo;იუნისეფი-საქართველოს&ldquo; მხარდაჭერით ორგანიზაციამ &bdquo;ხელმისაწვდომი გარემო ყველასათვის&ldquo; 2013 წლის მაისი-ნოემბრის პერიოდში განახორციელა პროექტი &bdquo;შეზღუდული შესაძლებლობის მქონე ბავშვები მედიაში&ldquo;. ვინაიდან მედია დიდ გავლენას ახდენს საზოგადოების ცნობიერებაზე, შშმ პირთა მიმართ უმართებულოდ გამოყენებული ტერმინოლოგია ან მათთან დაკავშირებული საკითხების არასათანადო გაშუქება შშმ პირთა მიმართ დამოკიდებულებებს და პრობლემებს უფრო ამწვავებს. ბავშვები და მოზარდები კი მედიაგაშუქების შემთხვევაში ყველაზე მგრძნობიარე ჯგუფს წარმოადგენენ. პროექტი მიზნად ისახავდა მედიაში დამკვიდრებული ეთიკური სტანდარტების გაუმჯობესებას, მედიის მიერ გავრცელებული სტერეოტიპებისა და სტიგმების აღმოფხვრას, მოქმედი ჟურნალისტებისა და ჟურნალისტიკის მიმართულების სტუდენტებისათვის შშმ პირებთან დაკავშირებული კანონმდებლობისა და სოციალური მოდელის შესახებ არსებული პერსპექტივების გაცნობას.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp;პროექტის ფარგლებში ტრენინგ-სემინარები ბათუმში, სიღნაღსა და ლოპოტაში ჩაუტარდა 24 მედია-საშუალების 40-მდე წარმომადგენელსა და სტუდენტს. პროექტის შედეგად ჩამოყალიბდა ჟურნალისტთა ქსელი, რომელიც იმუშავებს შშმ პირთა საკითხებზე. ასევე გაფორმდა ურთიერთთანამშრომლობის მემორანდუმი საქართველოს ჟურნალისტური ეთიკის ქარტიასთან და გაიმართა ჟურნალისტური ნამუშევრების კონკურსი. პროექტის ბიუჯეტი შეადგენდა 27,921 ლარს.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '', 'მედია, ეთიკის ქარტია, შშმ ბავშვები', 'Children with disabilities in Media', '', '<p>&nbsp; &nbsp;As media shapes and influences civic awareness and people&rsquo;s attitudes in society, irrelevant terminology toward People with disabilities or improper coverage of issues related to children with disabilities aggravates the existing problems of the disabled community. Movement Accessible Environment for Everyone conducted project &ldquo; Children with disabilities in Media&rdquo; supported by UNICEF Georgia between May and June 2013. Disabled children are the most vulnerable and sensitive group in the process of media reporting. Our project was designed for improving ethic standards in media and for breaking stigma and stereotypes regarding disabled children. During the project course, the core target group of prospective journalists and current journalists were trained on legislation related to disability law and perspectives of the social model.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp;Training and seminars were organized in Batumi, Sighnaghi and Lopota resort for almost 40 representatives from 24 media. Journalist network was established aiming at further working on disability issues. A mutual cooperation agreement was signed with Georgian Charter of Journalistic Ethics and contest was held for selecting the best journalistic work on the topic. The total budget of the project amounted 27, 921 Gel.</p>\r\n', '', 'disabled children, media, ethics', '', '', '', '', '', '2017-07-26 06:36:34', '2017-07-26 06:50:12'),
(12, 75, 1, '111', 'files/news/1501051702_International-Day-Of-People-With-Disability.jpg', 'files/news/tumb/1501051702_International-Day-Of-People-With-Disability.jpg', 'Wed, Jul 26, 2017 6:53 AM', '„ მე არ ვცნობ შეზღუდვებს, ვირჩევ თანაბარ შესაძლებლობებს“', 'შშმ პირთა საერთაშორისო დღის აღნიშვნა', '<p>&nbsp; &nbsp;2012 წლის 3 დეკემბერს საქართველოში შეზღუდული შესაძლებლობის მქონე პირთა საერთაშორისო დღის აღნიშვნამ პირველად მიიღო მასშტაბური ხასიათი. ორგანიზაციის ძალისხმევით ამ დღის აღსანიშნავად რამდენიმე აქტივობა განხორციელდა. ღონისძიებების მიზანი იყო, როგორც შშმ პირებისა და მათი წარმომადგენელი ორგანიზაციების გაერთიანება, ასევე საზოგადოების ფართო მხარდაჭერის მობილიზება შშმ პირთა ინტეგრაციისა და მდგომარეობის გაუმჯობესების მიზნით საქართველოში. საერთაშორისო დღეს წინ უძღოდა აქტიური სოციალური და საინფორმაციო კამპანია (ფლეშ.მობი, გამწვანებითი ღონისძიებები, პრომო ვიდეო-კლიპები და სხვა), 3 დეკემბრის შემაჯამებელი ღონისძიება კი დაგვირგვინდა ინტეგრაციული მსვლელობით სააკაძის მოედნიდან სპორტის სასახლემდე. სპორტის სასახლეში ჩატარდა საჩვენებელი პარა-კალათბურთის მატჩი, მოეწყო შშმ პირების მიერ დამზადებული ხელნაკეთი ნივთებისა და მხატვრული ნამუშევრების გამოფენა, ფოტოგამოფენა და მუსიკალური პერფორმანსები.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp;აღნიშნული ღონისძიებებით კიდევ ერთხელ ხაზი გაესვა იმას, რომ შეზღუდული გარემო შშმ პირებს არ აძლევს საკუთარი შესაძლებლობების სრულყოფილი გამოვლენის საშაულებას და შეზღუდვა უმეტესწილად შინაგანი ფაქტორებით არ&nbsp;არის განპირობებული. პროექტს ფინანსური მხარდაჭერა გაუწია ფონდმა &bdquo;ღია საზოგადოება საქართველო&ldquo; -მ და ბრიტანეთისა და ჩრდილოეთ ირლანდიის გაერთიანებული სამეფოს საელჩომ საქართველოში. პროექტის ბიუჯეტი შეადგენდა 8 676 გირვანქა სტერლინგის ექვივალენტს ლარებში.</p>\r\n', '', '3 დეკემბერი, შეზღუდული შესაძლებლობები, პარასპორტი', ' I choose equal abilities over disabilities', 'Disability Day International in Georgia', '<p>&nbsp; &nbsp;The Large celebration of International day of persons with disabilities was held in Georgia on December 3, 2012. Movement Accessible Environment for Everyone conducted several activities committed to the international day. Activities were aimed at uniting organizations representing PWDs and mobilizing wide scale support of the whole society in terms of PWDs integration and improvement of their conditions. Active social and informational campaigns preceded the celebration (flash mob, planting of greenery, promo videos etc.). The final event was concluded with joint movement from Saakadze square to Tbilisi Sports Palace. Demonstrative Para-basketball match, the exhibition of handmaid production and paintings, photo exhibition and musical performances were held at Tbilisi Sports Palace.</p>\r\n\r\n<p>&nbsp; &nbsp;The events of the day highlighted once more that environment does not enable people to reveal their capabilities fully. The project was supported by Open Society Foundation Georgia and British Embassy Tbilisi. A total budget of the project amounted 8 678 GBP.</p>\r\n', '', 'International disability day, para sport in Georgia , 3 december', '', '', '', '', '', '2017-07-26 06:45:47', '2017-07-26 06:53:36');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('visuallado@gmail.com', 'e5f1adc2a0b0f4e463d66280afa429484910a9bd950ce150fd90f4c5f0db3066', '2017-01-19 09:46:40');

-- --------------------------------------------------------

--
-- Table structure for table `ProductImages`
--

CREATE TABLE IF NOT EXISTS `ProductImages` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `tumb` text NOT NULL,
  `title_ge` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Products`
--

CREATE TABLE IF NOT EXISTS `Products` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `main` int(1) NOT NULL DEFAULT '1',
  `price` decimal(10,2) NOT NULL,
  `sale_price` decimal(10,2) NOT NULL,
  `sale` int(11) NOT NULL DEFAULT '0',
  `aromat` varchar(3) NOT NULL,
  `image` varchar(255) NOT NULL,
  `tumb` text NOT NULL,
  `date` varchar(50) NOT NULL,
  `title_ge` varchar(255) NOT NULL,
  `short_text_ge` text NOT NULL,
  `full_text_ge` longtext NOT NULL,
  `description_ge` text NOT NULL,
  `keywords_ge` text NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `short_text_en` text NOT NULL,
  `full_text_en` longtext NOT NULL,
  `description_en` text NOT NULL,
  `keywords_en` text NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `short_text_ru` text NOT NULL,
  `full_text_ru` longtext NOT NULL,
  `description_ru` text NOT NULL,
  `keywords_ru` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Products`
--

INSERT INTO `Products` (`id`, `menu_id`, `main`, `price`, `sale_price`, `sale`, `aromat`, `image`, `tumb`, `date`, `title_ge`, `short_text_ge`, `full_text_ge`, `description_ge`, `keywords_ge`, `title_en`, `short_text_en`, `full_text_en`, `description_en`, `keywords_en`, `title_ru`, `short_text_ru`, `full_text_ru`, `description_ru`, `keywords_ru`, `created_at`, `updated_at`) VALUES
(1, 1, 0, '0.00', '0.00', 0, '', 'files/products/1499691057_c313b66e8a6ad49e676609214573180b.jpg', 'files/products/tumb/1499691057_c313b66e8a6ad49e676609214573180b.jpg', 'Mon, Jul 10, 2017 12:50 PM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-07-10 12:50:58', '2017-07-10 12:50:58');

-- --------------------------------------------------------

--
-- Table structure for table `Reply`
--

CREATE TABLE IF NOT EXISTS `Reply` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `main` int(1) NOT NULL DEFAULT '1',
  `url` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `tumb` varchar(255) NOT NULL,
  `date` varchar(50) NOT NULL,
  `title_ge` varchar(255) NOT NULL,
  `short_text_ge` text NOT NULL,
  `full_text_ge` text NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `short_text_en` text NOT NULL,
  `full_text_en` text NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `short_text_ru` text NOT NULL,
  `full_text_ru` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `SaleImages`
--

CREATE TABLE IF NOT EXISTS `SaleImages` (
  `id` int(11) NOT NULL,
  `sale_id` int(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `tumb` text NOT NULL,
  `title_ge` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Sales`
--

CREATE TABLE IF NOT EXISTS `Sales` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `main` int(1) NOT NULL DEFAULT '1',
  `price` decimal(10,2) NOT NULL,
  `sale_price` decimal(10,2) NOT NULL,
  `sale` int(11) NOT NULL DEFAULT '0',
  `aromat` varchar(10) NOT NULL,
  `image` varchar(255) NOT NULL,
  `tumb` text NOT NULL,
  `date` varchar(50) NOT NULL,
  `title_ge` varchar(255) NOT NULL,
  `short_text_ge` text NOT NULL,
  `full_text_ge` longtext NOT NULL,
  `description_ge` text NOT NULL,
  `keywords_ge` text NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `short_text_en` text NOT NULL,
  `full_text_en` longtext NOT NULL,
  `description_en` text NOT NULL,
  `keywords_en` text NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `short_text_ru` text NOT NULL,
  `full_text_ru` longtext NOT NULL,
  `description_ru` text NOT NULL,
  `keywords_ru` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Services`
--

CREATE TABLE IF NOT EXISTS `Services` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `main` int(1) NOT NULL DEFAULT '1',
  `url` varchar(255) NOT NULL,
  `pos` varchar(5) NOT NULL,
  `image` varchar(255) NOT NULL,
  `tumb` varchar(255) NOT NULL,
  `date` varchar(50) NOT NULL,
  `title_ge` varchar(255) NOT NULL,
  `short_text_ge` text NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `short_text_en` text NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `short_text_ru` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Services`
--

INSERT INTO `Services` (`id`, `menu_id`, `main`, `url`, `pos`, `image`, `tumb`, `date`, `title_ge`, `short_text_ge`, `title_en`, `short_text_en`, `title_ru`, `short_text_ru`, `created_at`, `updated_at`) VALUES
(5, 1, 1, '', '1', 'files/services/1500222498_eu_framework_for_crpd_0.jpg', 'files/services/tumb/1500222498_eu_framework_for_crpd_0.jpg', 'Mon, Nov 20, 2017 10:11 AM', 'შეზღუდული შესაძლებლობების მქონე პირთა კონვენცია', '', 'UN Convention on the rights of Persons with Disabilities', '', '', '', '2017-07-11 13:56:57', '2017-11-20 10:11:03'),
(6, 1, 1, '', '3', 'files/services/1499876283_Women-Accessibility.jpg', 'files/services/tumb/1499876283_Women-Accessibility.jpg', 'Mon, Nov 20, 2017 9:56 AM', 'კონსულტაცია ', 'საცხოვრებლის ადაპტირება, თავის მოვლა, რეპროდუქციული ჯანმრთელობა', 'Consultation', '', '', '', '2017-07-12 16:18:04', '2017-11-20 09:56:19'),
(7, 1, 1, '', '2', 'files/services/1501052811_E_SDG_Icons-18.jpg', 'files/services/tumb/1501052811_E_SDG_Icons-18.jpg', 'Mon, Nov 20, 2017 9:56 AM', 'გაეროს მდგრადი განვითარების მიზნები', '', 'UN Goals for Sustainable Development', '', '', '', '2017-07-16 16:25:31', '2017-11-20 09:56:14'),
(8, 1, 1, '', '1', 'files/services/1500223088_2000px-Handicapped_Accessible_sign.svg-e1424680037487.png', 'files/services/tumb/1500223088_2000px-Handicapped_Accessible_sign.svg-e1424680037487.png', 'Mon, Nov 20, 2017 9:56 AM', 'აქტუალური საკითხები', '', 'Affective Causes', '', '', '', '2017-07-16 16:38:08', '2017-11-20 09:56:09');

-- --------------------------------------------------------

--
-- Table structure for table `ServicesItem`
--

CREATE TABLE IF NOT EXISTS `ServicesItem` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `main` int(1) NOT NULL DEFAULT '1',
  `pos` varchar(5) NOT NULL DEFAULT '111',
  `image` varchar(255) NOT NULL,
  `tumb` text NOT NULL,
  `date` varchar(50) NOT NULL,
  `title_ge` varchar(255) NOT NULL,
  `short_text_ge` text NOT NULL,
  `full_text_ge` longtext NOT NULL,
  `description_ge` text NOT NULL,
  `keywords_ge` text NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `short_text_en` text NOT NULL,
  `full_text_en` longtext NOT NULL,
  `description_en` text NOT NULL,
  `keywords_en` text NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `short_text_ru` text NOT NULL,
  `full_text_ru` longtext NOT NULL,
  `description_ru` text NOT NULL,
  `keywords_ru` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ServicesItem`
--

INSERT INTO `ServicesItem` (`id`, `menu_id`, `main`, `pos`, `image`, `tumb`, `date`, `title_ge`, `short_text_ge`, `full_text_ge`, `description_ge`, `keywords_ge`, `title_en`, `short_text_en`, `full_text_en`, `description_en`, `keywords_en`, `title_ru`, `short_text_ru`, `full_text_ru`, `description_ru`, `keywords_ru`, `created_at`, `updated_at`) VALUES
(2, 57, 1, '111', 'files/news/1493373056_a736fa36444393.571d06cac76fe.png', 'files/news/tumb/1493373056_a736fa36444393.571d06cac76fe.png', 'Fri, Apr 28, 2017 9:50 AM', 'N1 სიახლე რატომ ვიყენებთ მას?', 'ცნობილი ფაქტია, რომ გვერდის წაკითხვად შიგთავსს შეუძლია მკითხველის ყურადღება მიიზიდოს და დიზაინის აღქმაში ხელი შეუშალოს.', '<p>ცნობილი ფაქტია, რომ გვერდის წაკითხვად შიგთავსს შეუძლია მკითხველის ყურადღება მიიზიდოს და დიზაინის აღქმაში ხელი შეუშალოს. Lorem Ipsum-ის გამოყენებით ვღებულობთ იმაზე მეტ-ნაკლებად სწორი გადანაწილების ტექსტს, ვიდრე ერთიდაიგივე გამეორებადი სიტყვებია ხოლმე. შედეგად, ტექსტი ჩვეულებრივ ინგლისურს გავს, მისი წაითხვა კი შეუძლებელია. დღეს უამრავი პერსონალური საგამომცემლო პროგრამა და ვებგვერდი იყენებს Lorem Ipsum-ს, როგორც დროებით ტექსტს წყობის შესავსებად; Lorem Ipsum-ის მოძებნისას კი საძიებო სისტემები ბევრ დაუსრულებელ გვერდს გვიჩვენებენ. წლების მანძილზე ამ ტექსტის უამრავი ვერსია გამოჩნდა, ზოგი შემთხვევით დაშვებული შეცდომის გამო, ზოგი კი &mdash; განზრახ, ხუმრობით.</p>\r\n', '', '', '', '', '', '', '', '', '', '', '', '', '2017-04-28 09:50:56', '2017-04-28 09:50:56'),
(3, 57, 0, '111', 'files/news/1493373081_green eddsdsd.png', 'files/news/tumb/1493373081_green eddsdsd.png', 'Fri, Apr 28, 2017 9:51 AM', 'N2 სიახლე რატომ ვიყენებთ მას?', 'ცნობილი ფაქტია, რომ გვერდის წაკითხვად შიგთავსს შეუძლია მკითხველის ყურადღება მიიზიდოს და დიზაინის აღქმაში ხელი შეუშალოს.', '<p>ცნობილი ფაქტია, რომ გვერდის წაკითხვად შიგთავსს შეუძლია მკითხველის ყურადღება მიიზიდოს და დიზაინის აღქმაში ხელი შეუშალოს. Lorem Ipsum-ის გამოყენებით ვღებულობთ იმაზე მეტ-ნაკლებად სწორი გადანაწილების ტექსტს, ვიდრე ერთიდაიგივე გამეორებადი სიტყვებია ხოლმე. შედეგად, ტექსტი ჩვეულებრივ ინგლისურს გავს, მისი წაითხვა კი შეუძლებელია. დღეს უამრავი პერსონალური საგამომცემლო პროგრამა და ვებგვერდი იყენებს Lorem Ipsum-ს, როგორც დროებით ტექსტს წყობის შესავსებად; Lorem Ipsum-ის მოძებნისას კი საძიებო სისტემები ბევრ დაუსრულებელ გვერდს გვიჩვენებენ. წლების მანძილზე ამ ტექსტის უამრავი ვერსია გამოჩნდა, ზოგი შემთხვევით დაშვებული შეცდომის გამო, ზოგი კი &mdash; განზრახ, ხუმრობით.</p>\r\n', '', '', '', '', '', '', '', '', '', '', '', '', '2017-04-28 09:51:21', '2017-04-28 09:51:21'),
(4, 57, 0, '111', 'files/news/1493374647_green ed.png', 'files/news/tumb/1493374647_green ed.png', 'Fri, Apr 28, 2017 10:17 AM', 'N3 სიახლე რატომ ვიყენებთ მას?', 'ცნობილი ფაქტია, რომ გვერდის წაკითხვად შიგთავსს შეუძლია მკითხველის ყურადღება მიიზიდოს და დიზაინის აღქმაში ხელი შეუშალოს.', '<p>ცნობილი ფაქტია, რომ გვერდის წაკითხვად შიგთავსს შეუძლია მკითხველის ყურადღება მიიზიდოს და დიზაინის აღქმაში ხელი შეუშალოს. Lorem Ipsum-ის გამოყენებით ვღებულობთ იმაზე მეტ-ნაკლებად სწორი გადანაწილების ტექსტს, ვიდრე ერთიდაიგივე გამეორებადი სიტყვებია ხოლმე. შედეგად, ტექსტი ჩვეულებრივ ინგლისურს გავს, მისი წაითხვა კი შეუძლებელია. დღეს უამრავი პერსონალური საგამომცემლო პროგრამა და ვებგვერდი იყენებს Lorem Ipsum-ს, როგორც დროებით ტექსტს წყობის შესავსებად; Lorem Ipsum-ის მოძებნისას კი საძიებო სისტემები ბევრ დაუსრულებელ გვერდს გვიჩვენებენ. წლების მანძილზე ამ ტექსტის უამრავი ვერსია გამოჩნდა, ზოგი შემთხვევით დაშვებული შეცდომის გამო, ზოგი კი &mdash; განზრახ, ხუმრობით.</p>\r\n', '', '', '', '', '', '', '', '', '', '', '', '', '2017-04-28 10:17:27', '2017-04-28 10:17:27'),
(5, 57, 0, '111', 'files/news/1493374717_Untitled-2.jpg', 'files/news/tumb/1493374717_Untitled-2.jpg', 'Fri, Apr 28, 2017 10:18 AM', 'N4 სიახლე რატომ ვიყენებთ მას?', 'ცნობილი ფაქტია, რომ გვერდის წაკითხვად შიგთავსს შეუძლია მკითხველის ყურადღება მიიზიდოს და დიზაინის აღქმაში ხელი შეუშალოს.', '<p>ცნობილი ფაქტია, რომ გვერდის წაკითხვად შიგთავსს შეუძლია მკითხველის ყურადღება მიიზიდოს და დიზაინის აღქმაში ხელი შეუშალოს. Lorem Ipsum-ის გამოყენებით ვღებულობთ იმაზე მეტ-ნაკლებად სწორი გადანაწილების ტექსტს, ვიდრე ერთიდაიგივე გამეორებადი სიტყვებია ხოლმე. შედეგად, ტექსტი ჩვეულებრივ ინგლისურს გავს, მისი წაითხვა კი შეუძლებელია. დღეს უამრავი პერსონალური საგამომცემლო პროგრამა და ვებგვერდი იყენებს Lorem Ipsum-ს, როგორც დროებით ტექსტს წყობის შესავსებად; Lorem Ipsum-ის მოძებნისას კი საძიებო სისტემები ბევრ დაუსრულებელ გვერდს გვიჩვენებენ. წლების მანძილზე ამ ტექსტის უამრავი ვერსია გამოჩნდა, ზოგი შემთხვევით დაშვებული შეცდომის გამო, ზოგი კი &mdash; განზრახ, ხუმრობით.</p>\r\n', '', '', '', '', '', '', '', '', '', '', '', '', '2017-04-28 10:18:37', '2017-04-28 10:18:37'),
(6, 57, 0, '111', 'files/news/1497708308_59244648c165e.png', 'files/news/tumb/1497708308_59244648c165e.png', 'Sat, Jun 17, 2017 2:05 PM', 'ინკოს ახალი საგარანტიო მომსახურება', 'დღეიდან შეგიძლიათ ისარგებლოთ სამთვიანი გარანტიით', '<p>ინკოს ახალი საგარანტიო მომსახურება.&nbsp;დღეიდან შეგიძლიათ ისარგებლოთ სამთვიანი გარანტიით&nbsp;ინკოს ახალი საგარანტიო მომსახურება.&nbsp;დღეიდან შეგიძლიათ ისარგებლოთ სამთვიანი გარანტიით&nbsp;ინკოს ახალი საგარანტიო მომსახურება.&nbsp;დღეიდან შეგიძლიათ ისარგებლოთ სამთვიანი გარანტიით&nbsp;ინკოს ახალი საგარანტიო მომსახურება.&nbsp;დღეიდან შეგიძლიათ ისარგებლოთ სამთვიანი გარანტიით&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>ინკოს ახალი საგარანტიო მომსახურება.&nbsp;დღეიდან შეგიძლიათ ისარგებლოთ სამთვიანი გარანტიით&nbsp;ინკოს ახალი საგარანტიო მომსახურება.&nbsp;დღეიდან შეგიძლიათ ისარგებლოთ სამთვიანი გარანტიით&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>ინკოს ახალი საგარანტიო მომსახურება.&nbsp;დღეიდან შეგიძლიათ ისარგებლოთ სამთვიანი გარანტიით&nbsp;ინკოს ახალი საგარანტიო მომსახურება.&nbsp;დღეიდან შეგიძლიათ ისარგებლოთ სამთვიანი გარანტიით&nbsp;ინკოს ახალი საგარანტიო მომსახურება.&nbsp;დღეიდან შეგიძლიათ ისარგებლოთ სამთვიანი გარანტიით&nbsp;ინკოს ახალი საგარანტიო მომსახურება.&nbsp;დღეიდან შეგიძლიათ ისარგებლოთ სამთვიანი გარანტიით&nbsp;</p>\r\n', 'ინკო გარანტიის აღწერა', 'გარანტია, ინკო, ნოვა', '', '', '', '', '', '', '', '', '', '', '2017-06-17 14:05:08', '2017-06-17 14:05:08'),
(7, 1, 1, '111', 'files/services_items/1499688038_Roofing-33.jpg', 'files/services_items/tumb/1499688038_Roofing-33.jpg', 'Mon, Jul 10, 2017 12:00 PM', 'გადახურვის სერვისი', 'გადახურვის სერვისი გადახურვის სერვისი გადახურვის სერვისი გადახურვის სერვისი ', '<p>გადახურვის სერვისი გადახურვის სერვისი გადახურვის სერვისი გადახურვის სერვისი&nbsp;გადახურვის სერვისი გადახურვის სერვისი გადახურვის სერვისი გადახურვის სერვისი&nbsp;გადახურვის სერვისი გადახურვის სერვისი გადახურვის სერვისი გადახურვის სერვისი&nbsp;გადახურვის სერვისი გადახურვის სერვისი გადახურვის სერვისი გადახურვის სერვისი&nbsp;გადახურვის სერვისი გადახურვის სერვისი გადახურვის სერვისი გადახურვის სერვისი&nbsp;გადახურვის სერვისი გადახურვის სერვისი გადახურვის სერვისი გადახურვის სერვისი&nbsp;გადახურვის სერვისი გადახურვის სერვისი გადახურვის სერვისი გადახურვის სერვისი&nbsp;გადახურვის სერვისი გადახურვის სერვისი გადახურვის სერვისი გადახურვის სერვისი&nbsp;გადახურვის სერვისი გადახურვის სერვისი გადახურვის სერვისი გადახურვის სერვისი&nbsp;გადახურვის სერვისი გადახურვის სერვისი გადახურვის სერვისი გადახურვის სერვისი&nbsp;გადახურვის სერვისი გადახურვის სერვისი გადახურვის სერვისი გადახურვის სერვისი&nbsp;გადახურვის სერვისი გადახურვის სერვისი გადახურვის სერვისი გადახურვის სერვისი&nbsp;გადახურვის სერვისი გადახურვის სერვისი გადახურვის სერვისი გადახურვის სერვისი&nbsp;გადახურვის სერვისი გადახურვის სერვისი გადახურვის სერვისი გადახურვის სერვისი&nbsp;</p>\r\n', 'გადახურვის სერვისი გადახურვის სერვისი გადახურვის სერვისი გადახურვის სერვისი ', 'გადახურვის სერვისი გადახურვის სერვისი გადახურვის სერვისი გადახურვის სერვისი ', '', '', '', '', '', '', '', '', '', '', '2017-07-10 12:00:39', '2017-07-10 12:00:39'),
(9, 1, 1, '111', 'files/services_items/1499688169_16508657_630767463778945_94499443533563162_n.jpg', 'files/services_items/tumb/1499688169_16508657_630767463778945_94499443533563162_n.jpg', 'Mon, Jul 10, 2017 12:02 PM', 'საღებავით შეღებვა ', 'საღებავით შეღებვა საღებავით შეღებვა საღებავით შეღებვა საღებავით შეღებვა საღებავით შეღებვა საღებავით შეღებვა ', '<p>საღებავით შეღებვა&nbsp;საღებავით შეღებვა&nbsp;საღებავით შეღებვა&nbsp;საღებავით შეღებვა&nbsp;საღებავით შეღებვა&nbsp;საღებავით შეღებვა&nbsp;საღებავით შეღებვა&nbsp;საღებავით შეღებვა&nbsp;საღებავით შეღებვა&nbsp;საღებავით შეღებვა&nbsp;საღებავით შეღებვა&nbsp;საღებავით შეღებვა&nbsp;საღებავით შეღებვა&nbsp;საღებავით შეღებვა&nbsp;საღებავით შეღებვა&nbsp;საღებავით შეღებვა&nbsp;საღებავით შეღებვა&nbsp;საღებავით შეღებვა&nbsp;საღებავით შეღებვა&nbsp;საღებავით შეღებვა&nbsp;საღებავით შეღებვა&nbsp;საღებავით შეღებვა&nbsp;საღებავით შეღებვა&nbsp;საღებავით შეღებვა&nbsp;საღებავით შეღებვა&nbsp;საღებავით შეღებვა&nbsp;საღებავით შეღებვა&nbsp;საღებავით შეღებვა&nbsp;საღებავით შეღებვა&nbsp;საღებავით შეღებვა&nbsp;საღებავით შეღებვა&nbsp;საღებავით შეღებვა&nbsp;საღებავით შეღებვა&nbsp;საღებავით შეღებვა&nbsp;საღებავით შეღებვა&nbsp;საღებავით შეღებვა&nbsp;საღებავით შეღებვა&nbsp;საღებავით შეღებვა&nbsp;საღებავით შეღებვა&nbsp;საღებავით შეღებვა&nbsp;საღებავით შეღებვა&nbsp;</p>\r\n', 'საღებავით შეღებვა საღებავით შეღებვა ', 'საღებავით შეღებვა საღებავით შეღებვა ', '', '', '', '', '', '', '', '', '', '', '2017-07-10 12:02:49', '2017-07-10 12:02:49'),
(10, 2, 0, '111', 'files/services_items/1499690881_ingco 1.jpg', 'files/services_items/tumb/1499690881_ingco 1.jpg', 'Mon, Jul 10, 2017 12:48 PM', 'ingcos სწავლება EDITED 2', 'ingcos სწავლება ingcos სწავლება ingcos სწავლება ingcos სწავლება ', '<p>ingcos სწავლება&nbsp;ingcos სწავლება&nbsp;ingcos სწავლება&nbsp;ingcos სწავლება&nbsp;ingcos სწავლება&nbsp;ingcos სწავლება&nbsp;ingcos სწავლება&nbsp;ingcos სწავლება&nbsp;ingcos სწავლება&nbsp;ingcos სწავლება&nbsp;ingcos სწავლება&nbsp;ingcos სწავლება&nbsp;ingcos სწავლება&nbsp;ingcos სწავლება&nbsp;ingcos სწავლება&nbsp;ingcos სწავლება&nbsp;ingcos სწავლება&nbsp;ingcos სწავლება ED</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'ingcos სწავლება ingcos სწავლება ingcos სწავლება ingcos სწავლება ingcos სწავლება ingcos სწავლება ', 'ingcos სწავლება ingcos სწავლება ingcos სწავლება ingcos სწავლება ingcos სწავლება ', 'ingcos სწავლება ingcos სწავლება ingcos სწავლება ingcos სწავლება ingcos სწავლება ', 'ingcos სწავლება ingcos სწავლება ingcos სწავლება ingcos სწავლება ingcos სწავლება ingcos სწავლება ingcos სწავლება ', '<p>ingcos სწავლება&nbsp;ingcos სწავლება&nbsp;ingcos სწავლება&nbsp;ingcos სწავლება&nbsp;ingcos სწავლება&nbsp;</p>\r\n', 'ingcos სწავლება ingcos სწავლება ingcos სწავლება ingcos სწავლება ingcos სწავლება ', 'ingcos სწავლება ingcos სწავლება ingcos სწავლება ingcos სწავლება ingcos სწავლება ', 'ingcos სწავლება ingcos სწავლება ingcos სწავლება ', 'ingcos სწავლება ingcos სწავლება ingcos სწავლება ingcos სწავლება ingcos სწავლება ', '<p>ingcos სწავლება&nbsp;ingcos სწავლება&nbsp;ingcos სწავლება&nbsp;ingcos სწავლება&nbsp;ingcos სწავლება&nbsp;ingcos სწავლება&nbsp;ingcos სწავლება&nbsp;</p>\r\n', 'ingcos სწავლება ingcos სწავლება ingcos სწავლება ingcos სწავლება ingcos სწავლება ', 'ingcos სწავლება ingcos სწავლება ingcos სწავლება ingcos სწავლება ingcos სწავლება ', '2017-07-10 12:03:56', '2017-07-10 12:48:02'),
(11, 6, 1, '111', 'files/services_items/1500220829_9f32f423a523034291f4225fad173ece--handicap-ramps-ramp-design.jpg', 'files/services_items/tumb/1500220829_9f32f423a523034291f4225fad173ece--handicap-ramps-ramp-design.jpg', 'Sun, Jul 16, 2017 4:02 PM', 'საცხოვრებლის ადაპტირება', '', '', '', 'ადაპტირება , საცხოვრებელი , შეზღუდული შესაძლებლობები', 'Housing Adaptation', '', '', '', 'Housing Adaptation standard , disability', '', '', '', '', '', '2017-07-12 16:19:54', '2017-07-16 16:02:01'),
(12, 6, 1, '111', 'files/services_items/1499876427_featured-image_46.jpg', 'files/services_items/tumb/1499876427_featured-image_46.jpg', 'Wed, Jul 12, 2017 4:20 PM', 'თავის მოვლა', 'თავის მოვლა თავის მოვლა თავის მოვლა', '<p>თავის მოვლა&nbsp;თავის მოვლა&nbsp;თავის მოვლა&nbsp;თავის მოვლა&nbsp;თავის მოვლა&nbsp;თავის მოვლა&nbsp;თავის მოვლა&nbsp;თავის მოვლა&nbsp;თავის მოვლა&nbsp;თავის მოვლა&nbsp;თავის მოვლა&nbsp;თავის მოვლა&nbsp;თავის მოვლა&nbsp;თავის მოვლა&nbsp;თავის მოვლა&nbsp;თავის მოვლა&nbsp;თავის მოვლა&nbsp;თავის მოვლა&nbsp;თავის მოვლა&nbsp;თავის მოვლა&nbsp;თავის მოვლა&nbsp;თავის მოვლა&nbsp;თავის მოვლა&nbsp;თავის მოვლა&nbsp;თავის მოვლა&nbsp;თავის მოვლა&nbsp;თავის მოვლა&nbsp;თავის მოვლა&nbsp;თავის მოვლა&nbsp;თავის მოვლა&nbsp;თავის მოვლა&nbsp;თავის მოვლა&nbsp;თავის მოვლა&nbsp;თავის მოვლა&nbsp;თავის მოვლა&nbsp;თავის მოვლა&nbsp;თავის მოვლა&nbsp;თავის მოვლა&nbsp;თავის მოვლა&nbsp;თავის მოვლა&nbsp;თავის მოვლა&nbsp;თავის მოვლა&nbsp;</p>\r\n', '', '', '', '', '', '', '', '', '', '', '', '', '2017-07-12 16:20:27', '2017-07-12 16:20:27'),
(14, 7, 1, '111', 'files/services_items/1501054080_img_8832.png', 'files/services_items/tumb/1501054080_img_8832.png', 'Wed, Jul 26, 2017 7:28 AM', '2015-2030 წლების გაეროს მდგრადი განვითარების დღის წესრიგი', '', '<p>&nbsp; &nbsp;2015 წლის 25 სექტემბერს გაეროს 193 წევრი ქვეყანა შეთანხმდა მდგრადი განვითარების დღის წესრიგის დოკუმენტზე, სათაურით - &bdquo;ჩვენი სამყაროს გარდაქმნა: 2030 წლის დღის წესრიგი მდგრადი განვითარებისათვის&ldquo;. ეს დღის წესრიგი მოიცავს 17 მიზანს და 169 ამოცანას.</p>\r\n\r\n<p>&nbsp; &nbsp;ახალი მიზნები სამ ძირითად ღერძს ემყარება: ეკონომიკური ზრდა, სოციალური ინკლუზია და გარემოს დაცვა.</p>\r\n\r\n<p>&nbsp; &nbsp;აღნიშნული მიზნები ითვალისწინებს და პატივს სცემს სხვადასხვა ქვეყნის ადგილობრივ მახასიათებლებს და ითვალისწინებს მათი განვითარების დონეს. ყველა მიზანი ინტეგრირებული და ურთიერთდამოკიდებულია და მათი მიღწევა დამოკიდებულია გაეროს ყველა წევრი სახელმწიფოსა და საერთაშორისო ორგანიზაციების თანამშრომლობაზე. ისინი უნიკალურია იმდენად, რამდენადაც მოითხოვს ყველა სახელმწიფოს თანაბარ ძალისხმევას ამოცანების მისაღწევად.</p>\r\n\r\n<p><strong>მდგრადი</strong><strong> </strong><strong>განვითარების</strong><strong> </strong><strong>მიზნები</strong><strong>ა:</strong></p>\r\n\r\n<p><strong>მიზანი 1:</strong> სიღარიბის ყველა ფორმის აღმოფხვრა</p>\r\n\r\n<p><strong>მიზანი 2</strong>: შიმშილის აღმოფხვრა, სასურსათო უსაფრთხოებისა და გაუმჯობესებული კვების მიღწევა და მდგრადი სოფლის მეურნეობის ხელშეწყობა</p>\r\n\r\n<p><strong>მიზანი 3:</strong> ჯანსაღი ცხოვრებისა და კეთილდღეობის უზრუნვლეყოფა ყველა ასაკის ადამიანისათვის.</p>\r\n\r\n<p><strong>მიზანი 4</strong>: ინკლუზიური და თანასწორი განათლების უზრუნველყოფა და უწყვეტი სწავლის შესაძლებლობის შექმნა ყველასათვის</p>\r\n\r\n<p><strong>მიზანი 5</strong>: გენდერული თანასწორობის მიღწევა და ყველა ქალისა და გოგონას შესაძლებლობების გაუმჯობესება</p>\r\n\r\n<p><strong>მიზანი 6:</strong> წყლის მდგრადი მართვისა და სანიტარული ნორმების დაცვის საყოველთაო უზრუნველყოფა</p>\r\n\r\n<p><strong>მიზანი 7</strong>: ხელმისაწვდომი, საიმედო, სტაბილური და თანამედროვე ენერგიის საყოველთაო ხელმისაწვდომობა.</p>\r\n\r\n<p><strong>მიზანი 8</strong>: სტაბილური, ინკლუზიური და მდგრადი ეკონომიკური ზრდის ხელშეწყობა, სრული და პროდუქტული დასაქმება და ღირსეული სამუშაო ყველასათვის</p>\r\n\r\n<p><strong>მიზანი 9</strong>: მდგრადი ინფრასტრუქტურის შექმნა, ინკლუზიური და განვითარებული ინდუსტრიალიზაციისა და ინოვაციების ხელშეწყობა.</p>\r\n\r\n<p><strong>მიზანი 10:</strong> უთანასწორობის შემცირება ქვეყნებში და ქვეყნებს შორის.</p>\r\n\r\n<p><strong>მიზანი 11</strong>: ქალაქებისა და დასახლებების ინკლუზიური, უსაფრთხო და მდგრადი განვითარება.</p>\r\n\r\n<p><strong>მიზანი 12:</strong> მდგრადი მოხმარება და წარმოება.</p>\r\n\r\n<p><strong>მიზანი 13</strong>: კლიმატის ცვლილებისა და მისი ზეგავლენის წინააღმდეგ გადაუდებელი ზომების გატარება</p>\r\n\r\n<p><strong>მიზანი 14:</strong> ოკეანისა და ზღვის რესურსების კონსერვაცია და მუდმივი გამოყენება განვითარებისათვის</p>\r\n\r\n<p><strong>მიზანი 15:</strong> დედამიწის ეკოსისტემების დაცვა, აღდგენა და მდგრადი გამოყენება, ტყეების გონივრული მართვა, გაუდაბურების აღკვეთა, ნიადაგის დეგრადაციის შეჩერება და აღდგენა-გაუმჯობესება, ბიომრავალფეროვნების შენარჩუნება</p>\r\n\r\n<p><strong>მიზანი 16:</strong> მშვიდობიანი და ინკლუზიური საზოგადოების ჩამოყალიბების ხელშეწყობა მდგრადი განვითარებისათვის, მართლმსაჯულების ხელმისაწვდომობა ყველასათვის, ეფექტური, ანგარიშვალდებული და ინკლუზიური ინსტიტუციების მშენებლობა ყველა დონეზე.</p>\r\n\r\n<p><strong>მიზანი 17</strong>: პარტნიორობა მდგრადი განვითარების მიზნების მისაღწევად</p>\r\n\r\n<p>&nbsp;</p>\r\n', '', '', '', '', '', '', '', '', '', '', '', '', '2017-07-26 07:06:27', '2017-07-26 07:28:40'),
(15, 5, 1, '111', 'files/services_items/1501057490_images.jpg', 'files/services_items/tumb/1501057490_images.jpg', 'Wed, Jul 26, 2017 8:27 AM', 'კონვენციის პრეამბულა', 'გაეროს შშმ პირთა კონვენციის პრეამბულის განაცხადი', '<p>წინამდებარე კონვენციის მონაწილე სახელმწიფოები</p>\r\n\r\n<p>a. ითვალისწინებენ რა გაერთიანებული ერების ორგანიზაციის წესდებაში ჩამოყალიბებულ პრინციპებს, რომელებიც ადამიანთა ოჯახის ყველა წევრისათვის დამახასიათებელ ღირსებასა და ფასეულობას, ასევე მათ თანასწორობასა და განუყოფელ უფლებებს აღიარებენ თავისუფლების, სამართლიანობისა და საყოველთაო მშვიდობის საფუძვლად,</p>\r\n\r\n<ol>\r\n	<li>აღიარებენ რა, რომ გაერთიანებული ერების ორგანიზაციამ ადამიანის უფლებათა საყოველთაო დეკლარაციასა და ადამიანის უფლებათა შესახებ საერთაშორისო პაქტებში განაცხადა და დაადასტურა ყველა ადამიანის უფლება, ყოველგვარი განსხვავებულობის გარეშე ისარგებლოს აღნიშნული დოკუმენტებით გათვალისწინებული უფლებებითა და თავისუფლებებით,</li>\r\n</ol>\r\n\r\n<p>c. ადასტურებენ რა ადამიანის უფლებათა და ძირითად თავისუფლებათა უნივერსალურობას, განუყოფლობას, ურთიერთდამოკიდებულებასა და ურთიერთკავშირს, ასევე შეზღუდული შესაძლებლობის მქონე პირთათვის ამ უფლებებით დისკრიმინაციის გარეშე სარგებლობის უზრუნველყოფის საჭიროებას,</p>\r\n\r\n<p>d. შეგვახსენებენ რა ეკონომიკურ, სოციალურ და კულტურულ უფლებათა საერთაშორისო პაქტს, სამოქალაქო და პოლიტიკურ უფლებათა საერთაშორისო პაქტს, რასობრივი დისკრიმინაციის ყველა ფორმის აღმოფხვრის შესახებ საერთაშორისო კონვენციას, ქალთა დისკრიმინაციის ყველა ფორმის აღმოფხვრის შესახებ კონვენციას, წამებისა და სხვა სასტიკი, არაჰუმანური და ღირსების შემლახვევლი მოპყრობისა და დასჯის საწინააღმდეგო კონვენციას, ბავშვთა უფლებების კონვენციას, მიგრანტი მომუშავეებისა და მათი ოჯახის წევრების უფლებათა დაცვის საერთაშორისო კონვენციას,</p>\r\n\r\n<p>e. აღიარებენ რა, რომ შეზღუდული შესაძლებლობა არის დინამიური ცნება და წარმოადგენს ჯანმრთელობის დარღვევის მქონე პირებს, მათ მიმართ დამოკიდებულებისა და გარემო ბარიერების ურთიერთქმედების შედეგს, რაც აფერხებს საზოგადოებრივ ცხოვრებაში მათ თანაბარ, სრულყოფილ და ეფექტურ მონაწილეობას,</p>\r\n\r\n<ol>\r\n	<li>აღიარებენ რა შეზღუდული შესაძლებლობის მქონე პირთა მიმართ მსოფლიო სამოქმედო პროგრამისა და შეზღუდული შესაძლებლობის მქონე პირთათვის თანაბარი შესაძლებლობების უზრუნველყოფის სტანდარტული წესებით გათვალისწინებული პრინციპებისა და პოლიტიკის განსაზღვრის მიმართულებების მნიშვნელობას შეზღუდული შესაძლებლობის მქონე პირთათვის შესაძლებლობათა შემდგომ გათანაბრებებზე მიმართული პოლიტიკის, გეგმების, პროგრამებისა და ღონისძიებათა ხელშეწყობის, ფორმულირებისა და შეფასებისათვის,</li>\r\n</ol>\r\n\r\n<p>g. ხაზგასმით აღნიშნავენ რა შეზღუდული შესაძლებლობის პრობლემატიკის, როგორც მდგრადი განვითარების შესაბამისი სტრატეგიების შემადგენელი ნაწილის აქტუალიზაციის მნიშვნელობას,</p>\r\n\r\n<p>h. აგრეთვე აღიარებენ რა, რომ შეზღუდული შესაძლებლობის გამო ნებისმიერი პიროვნების დისკრიმინაცია არის ადამიანის თანდაყოლილი და განუყოფელი ღირსების დარღვევა,</p>\r\n\r\n<p>i. აღიარებენ რა შეზღუდული შესაძლებლობის მქონე პირთა განსხვავებულობას,</p>\r\n\r\n<p>j. აღიარებენ რა ადამიანის უფლებათა დაცვისა და ხელშეწყობის აუცილებლობას შეზღუდული შესაძლებლობის მქონე ყველა პირის, მათ შორის, ინტენსიური დახმარების საჭიროების მქონეთა მიმართ,</p>\r\n\r\n<p>k. გამოხატავენ რა წუხილს, რომ მიუხედავად აღნიშნული დოკუმენტებისა და მცდელობებისა, შეზღუდული შესაძლებლობის მქონე პირები მსოფლიოს ყველა კუთხეში კვლავ აწყდებიან ბარიერებს საზოგადოებრივ ცხოვრებაში სრულუფლებიან წევრებად მონაწილეობის მცდელობაში და მათი უფლებები ხშირად ირღვევა,</p>\r\n\r\n<p>l. აღიარებენ რა საერთაშორისო თანამშრომლობის მნიშვნელობას შეზღუდული შესაძლებლობის მქონე პირთა საცხოვრებელი პირობების გაუმჯობესებისათვის ყველა ქვეყანაში, განსაკუთრებით განვითარებად ქვეყნებში,</p>\r\n\r\n<p>m. აღიარებენ რა შეზღუდული შესაძლებლობის მქონე პირთა ამჟამინდელ და პოტენციურ წვლილს საზოგადოების საერთო კეთილდღეობასა და მრავალფეროვნებაში, ასევე იმ გარემოებას, რომ შეზღუდული შესაძლებლობის მქონე პირთა მიერ ადამიანის უფლებათა და ძირითად თავისუფლებათა რეალიზებისა და სრული მონაწილეობის ხელშეწყობა მათში განამტკიცებს მიკუთვნების შეგრძნებას და მნიშვნელოვნად შეუწყობს ხელს საზოგადოების ადამიანურ, სოციალურ, ეკონომიკურ განვითარებასა და სიღარიბის აღმოფხვრას,</p>\r\n\r\n<p>n. აღიარებენ რა შეზღუდული შესაძლებლობის მქონე პირთა ინდივიდუალური ავტონომიისა და დამოუკიდებლობის, მათ შორის საკუთარი თავისუფალი არჩევანის გაკეთების საშუალების მნიშვნელობას,</p>\r\n\r\n<p>o. ითვალისწინებენ რა, რომ შეზღუდული შესაძლებლობის მქონე პირებს უნდა ჰქონდეთ შესაძლებლობა, აქტიურად ჩაერთონ სტრატეგიებსა და პროგრამებთან დაკავშირებით გადაწყვეტილების მიღების პროცესში, მათ შორის, უშუალოდ მათთან დაკავშირებულ საკითხებთან მიმართებაში,</p>\r\n\r\n<p>p. შეშფოთებას გამოხატავენ იმ სიძნელეების გამო, რასაც შეზღუდული შესაძლებლობის მქონე პირები აწყდებიან მათი სხვადასხვა და დამძიმებული ფორმებით დისკრიმინაციისას რასობრივი, კანის ფერის, სქესის, ენის, რელიგიის, პოლიტიკური და სხვა მოსაზრებების საფუძველზე, ეროვნული, ეთნიკური, ავტოქთონური ან სოციალური წარმომავლობის, ქონებრივი მდგომარეობის, დაბადების, ასაკის თუ სხვა სტატუსის გამო,</p>\r\n\r\n<p>q. აღიარებენ რა, რომ შეზღუდული შესაძლებლობის მქონე ქალები და გოგონები გაცილებით ხშირად ექცევიან ძალადობის, ფიზიკური ხელყოფისა და შეურაცხყოფის, უარყოფისა და უპატივცემულო დამოკიდებულების, ცუდი მოპყრობისა და ექსპლუატაციის რისკის ქვეშ, როგორც საკუთარ ოჯახში, ასევე მის გარეთ,</p>\r\n\r\n<p>r. აღიარებენ რა, რომ შეზღუდული შესაძლებლობის მქონე ბავშვები, სხვა ბავშვების თანასწორად უნდა სარგებლობდნენ ადამიანის უფლებათა და ძირითად თავისუფლებათა სრული რეალიზების შესაძლებლობით, გვახსენებენ რა ამასთან მიმართებაში ბავშვთა უფლებების კონვენციის მონაწილე სახელმწიფოების მიერ ნაკისრ ვალდებულებებს,</p>\r\n\r\n<p>s. ხაზგასმით აღნიშნავენ რა შეზღუდული შესაძლებლობის მქონე პირთა მიერ ადამიანის უფლებათა და ძირითად თავისუფლებათა სრული რეალიზების ხელშეწყობაზე მიმართულ ყველა წამოწყებაში გენდერული ასპექტების გათვალისწინების აუცილებლობას,</p>\r\n\r\n<p>t. ხაზგასმით აღნიშნავენ რა, რომ შეზღუდული შესაძლებლობის მქონე პირთა უმრავლესობა ცხოვრობს სიღარიბეში და ამასთან მიმართებაში აღიარებენ შეზღუდული შესაძლებლობის მქონე პირებზე სიღარიბის ნეგატიური გავლენის დაძლევის აუცილებლობას,</p>\r\n\r\n<p>u. მხედველობაში იღებენ რა, რომ გაერთიანებული ერების ორგანიზაციის წესდებაში ჩამოყალიბებული მიზნებისა და პრინციპების, ასევე ადამიანის უფლებათა დაცვაზე მიმართული შესაბამისი აქტების სრულ პატივისცემაზე დამყარებული მშვიდობიანი და უსაფრთხო ვითარება წარმოადგენს შეზღუდული შესაძლებლობის მქონე პირთა სრული დაცვის აუცილებელ პირობას, განსაკუთრებით შეიარაღებული კონფლიქტებისა და უცხოური ოკუპაციის დროს,</p>\r\n\r\n<p>v. აღიარებენ რა ფიზიკური, სოციალური, ეკონომიკური და კულტურული გარემოს, ჯანდაცვის, განათლების, ასევე ინფორმაციისა და კომუნიკაციის მისაწვდომობის მნიშვნელობას შეზღუდული შესაძლებლობის მქონე პირთა მიერ ადამიანის უფლებათა და ძირითად თავისულებათა სრული რეალიზებისათვის,</p>\r\n\r\n<ol>\r\n	<li>აცნობიერებენ რა, რომ ყოველი პიროვნება, სხვა პირებისა და საზოგადოების მიმართ არსებული ვალდებულებებიდან გამომდინარე, უნდა იღწვოდეს ადამიანის უფლებათა საერთაშორისო ქარტიით აღიარებული უფლებების დაცვისა და ხელშეწყობისათვის,</li>\r\n</ol>\r\n\r\n<p>x. გამოთქვამენ რა რწმენას, რომ ოჯახი წარმოადგენს საზოგადოების ბუნებრივ და უმთავრეს ერთეულს, რომელიც დაცული უნდა იყოს საზოგადოებისა და სახელმწიფოს მხრიდან და რომ შეზღუდული შესაძლებლობის მქონე პირები და მათი ოჯახები უნდა იღებდნენ აუცილებელ დაცვასა და დახმარებას, რაც საშუალებას მისცემს ოჯახებს თავიანთი წვლილი შეიტანონ შეზღუდული შესაძლებლობის მქონე პირთა უფლებების სრულ რეალიზებაში,</p>\r\n\r\n<p>y. გამოთქვამენ რა რწმენას, რომ შეზღუდული შესაძლებლობის მქონე პირთა უფლებებისა და ღირსების დაცვის ყოვლისმომცველი და საყოველთაო საერთაშორისო კონვენცია მნიშვნელოვან წვლილს შეიტანს შეზღუდული შესაძლებლობის მქონე პირთა არასასურველი სოციალური მდგომარეობის დაძლევისა და სამოქალაქო, პოლიტიკურ, ეკონომიკურ, სოციალურ და კულტურულ სფეროებში მათი თანაბარი შესაძლებლობების პირობებში მონაწილეობაში როგორც განვითარებად, ასევე განვითარებულ ქვეყნებში,</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '', 'ადამიანის უფლებები, შშმ პირები, გაერო, სამოქალაქო უფლებები, თანასწორობა', 'CRPD preamble', 'UN Convention in people with disabilities preamble statements', '<p>(a) Recalling the principles proclaimed in the Charter of the United Nations which recognize the inherent dignity and worth and the equal and inalienable rights of all members of the human family as the foundation of freedom, justice and peace in the world,</p>\r\n\r\n<p>(b) Recognizing that the United Nations, in the Universal Declaration of Human Rights and in the International Covenants on Human Rights, has proclaimed and agreed that everyone is entitled to all the rights and freedoms set forth therein, without distinction of any kind,</p>\r\n\r\n<p>(c) Reaffirming the universality, indivisibility, interdependence and interrelatedness of all human rights and fundamental freedoms and the need for persons with disabilities to be guaranteed their full enjoyment without discrimination,</p>\r\n\r\n<p>(d) Recalling the International Covenant on Economic, Social and Cultural Rights, the International Covenant on Civil and Political Rights, the International Convention on the Elimination of All Forms of Racial Discrimination, the Convention on the Elimination of All Forms of Discrimination against Women, the Convention against Torture and Other Cruel, Inhuman or Degrading Treatment or Punishment, the Convention on the Rights of the Child, and the International Convention on the Protection of the Rights of All Migrant Workers and Members of Their Families,</p>\r\n\r\n<p>(e) Recognizing that disability is an evolving concept and that disability results from the interaction between persons with impairments and attitudinal and environmental barriers that hinders their full and effective participation in society on an equal basis with others,</p>\r\n\r\n<p>(f) Recognizing the importance of the principles and policy guidelines contained in the World Programme of Action concerning Disabled Persons and in the Standard Rules on the Equalization of Opportunities for Persons with Disabilities in influencing the promotion, formulation and evaluation of the policies, plans, programmes and actions at the national, regional and international levels to further equalize opportunities for persons with disabilities,</p>\r\n\r\n<p>(g) Emphasizing the importance of mainstreaming disability issues as an integral part of relevant strategies of sustainable development,</p>\r\n\r\n<p>(h) Recognizing also that discrimination against any person on the basis of disability is a violation of the inherent dignity and worth of the human person,</p>\r\n\r\n<p>(i) Recognizing further the diversity of persons with disabilities,</p>\r\n\r\n<p>(j) Recognizing the need to promote and protect the human rights of all persons with disabilities, including those who require more intensive support,</p>\r\n\r\n<p>(k) Concerned that, despite these various instruments and undertakings, persons with disabilities continue to face barriers in their participation as equal members of society and violations of their human rights in all parts of the world,</p>\r\n\r\n<p>(l) Recognizing the importance of international cooperation for improving the living conditions of persons with disabilities in every country, particularly in developing countries,</p>\r\n\r\n<p>(m) Recognizing the valued existing and potential contributions made by persons with disabilities to the overall well-being and diversity of their communities, and that the promotion of the full enjoyment by persons with disabilities of their human rights and fundamental freedoms and of full participation by persons with disabilities will result in their enhanced sense of belonging and in significant advances in the human, social and economic development of society and the eradication of poverty,</p>\r\n\r\n<p>(n) Recognizing the importance for persons with disabilities of their individual autonomy and independence, including the freedom to make their own choices,</p>\r\n\r\n<p>(o) Considering that persons with disabilities should have the opportunity to be actively involved in decision-making processes about policies and programmes, including those directly concerning them,</p>\r\n\r\n<p>(p) Concerned about the difficult conditions faced by persons with disabilities who are subject to multiple or aggravated forms of discrimination on the basis of race, colour, sex, language, religion, political or other opinion, national, ethnic, indigenous or social origin, property, birth, age or other status,</p>\r\n\r\n<p>(q) Recognizing that women and girls with disabilities are often at greater risk, both within and outside the of violence, injury or abuse, neglect or negligent treatment, maltreatment or exploitation,</p>\r\n\r\n<p>(r) Recognizing that children with disabilities should have full enjoyment of all human rights and fundamental freedoms on an equal basis with other children, and recalling obligations to that end undertaken by States Parties to the Convention on the Rights of the Child,</p>\r\n\r\n<p>(s) Emphasizing the need to incorporate a gender perspective in all efforts to promote the full enjoyment of human rights and fundamental freedoms by persons with disabilities,</p>\r\n\r\n<p>(t) Highlighting the fact that the majority of persons with disabilities live in conditions of poverty, and in this regard recognizing the critical need to address the negative impact of poverty on persons with disabilities,</p>\r\n\r\n<p>(u) Bearing in mind that conditions of peace and security based on full respect for the purposes and principles contained in the Charter of the United Nations and observance of applicable human rights instruments are indispensable for the full protection of persons with disabilities, in particular during armed conflicts and foreign occupation,</p>\r\n\r\n<p>(v) Recognizing the importance of accessibility to the physical, social, economic and cultural environment, to health and education and to information and communication, in enabling persons with disabilities to fully enjoy all human rights and fundamental freedoms,</p>\r\n\r\n<p>(w) Realizing that the individual, having duties to other individuals and to the community to which he or she belongs, is under a responsibility to strive for the promotion and observance of the rights recognized in the International Bill of Human Rights,</p>\r\n\r\n<p>(x) Convinced that the family is the natural and fundamental group unit of society and is entitled to protection by society and the State, and that persons with disabilities and their family members should receive the necessary protection and assistance to enable families to contribute towards the full and equal enjoyment of the rights of persons with disabilities,</p>\r\n\r\n<p>(y) Convinced that a comprehensive and integral international convention to promote and protect the rights and dignity of persons with disabilities will make a significant contribution to redressing the profound social disadvantage of persons with disabilities and promote their participation in the civil, political, economic, social and cultural spheres with equal opportunities, in both developing and developed countries,</p>\r\n', '', 'CRPD, disability rights, civic rights, equality', '', '', '', '', '', '2017-07-26 08:19:40', '2017-07-26 08:27:09'),
(16, 5, 0, '111', 'files/services_items/1501058191_article.jpg', 'files/services_items/tumb/1501058191_article.jpg', 'Wed, Jul 26, 2017 8:53 AM', 'კონვენციის მიზანი, პრინციპები და ტერმინთა განმარტება ', 'კონვენციის მიზნები და ტერმინები, რომლებიც უნდა ვიცოდეთ', '<table cellspacing="0" style="width:930px">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><strong>მუხლი</strong><strong> 1</strong></p>\r\n\r\n			<p><strong><em>მიზანი</em></strong></p>\r\n\r\n			<p>წინამდებარე კონვენციის მიზანია, ხელი შეუწყოს, დაიცვას და უზრუნველყოს შეზღუდული შესაძლებლობის მქონე პირთა თანაბარი უფლებებისა და ძირითად თავისუფლებათა რეალიზება, მათი თანდაყოლილი პიროვნული ღირსების პატივისცემა.</p>\r\n\r\n			<p>შეზღუდული შესაძლებლობის მქონე პირებს მიეკუთვნებიან პირები, ფიზიკური, ფსიქიკური, ინტელექტუალური ან სენსორული მყარი დარღვევებით, რომელთა ურთიერთქმედებამ სხვადასხვა დაბრკოლებებთან შესაძლოა ხელი შეუშალოს ამ პირის სრულ და ეფექტურ მონაწილეობას საზოგადოებრივ ცხოვრებაში, სხვებთან თანაბარ პირობებში.</p>\r\n\r\n			<p><strong>მუხლი</strong><strong> 2</strong></p>\r\n\r\n			<p><strong><em>ტერმინთა</em></strong> <strong><em>განმარტება</em></strong></p>\r\n\r\n			<p><em>წინამდებარე</em> <em>კონვენციის</em> <em>მიზნებისათვის</em><em>:</em></p>\r\n\r\n			<p><em><strong>&bdquo;</strong> </em><strong>კომუნიკაცია</strong><em>&rdquo; &ndash; </em>მოიცავს ენებს, ტექსტის გაფორმებას, ბრაილს, ტაქტილურ კომუნიკაციას, მსხვილი შრიფტით ბეჭდვას, მისაწვდომ მულტიმედიურ საშუალებებს, ისევე როგორც ბეჭდვით მასალებს, აუდიო საშუალებებს, ჩვეულებრივ მეტყველებას, მკითხველებს, გამაძლიერებელ და ალტერნატიულ მეთოდებს, ხერხებსა და ფორმატებს, საინფორმაციო-საკომუნიკაციო ტექნოლოგიების ჩათვლით.</p>\r\n\r\n			<p><strong>&bdquo;</strong><strong>ენა</strong><strong>&rdquo;</strong> მოიცავს სალაპარაკო და ჟესტების ენას, ასევე სხვა, არასასაუბრო ენების გამოყენებას.</p>\r\n\r\n			<p>&bdquo;<strong>დისკრიმინაცია</strong> <strong>შეზღუდული</strong> <strong>შესაძლებლობის</strong> <strong>საფუძველზე</strong>&rdquo; &ndash; გულისხმობს შეზღუდული შესაძლებლობის საფუძველზე აღმოცენებულ ნებისმიერ განსხვავებას, გარიყვას ან აკრძალვას, რომლის მიზანს ან შედეგს წარმოადგენს აღიარების, თანაბარი უფლებებისა და პოლიტიკურ, ეკონომიკურ, სოციალურ, კულტურულ, სამოქალაქო და ნებისმიერ სხვა სფეროში მათ მიერ ფუნდამენტურ ღირებულებათა რეალიზების მინიმუმამდე დაყვანა ან სრული უარყოფა; იგი მოიცავს დისკრიმინაციის ყველა ფორმას, მათ შორის უარს გონივრულ მისადაგებაზე.</p>\r\n\r\n			<p><strong>&bdquo;</strong> <strong>გონივრული</strong> <strong>მისადაგება</strong>&rdquo; &ndash; გულისხმობს ყოველ კონკრეტულ შემთხვევაში იმ აუცილებელი და შესაბამისი მოდიფიკაციებისა და კორექტივების განხორციელებას, რაც არ იწვევს დაუძლეველ და გაუმართლებელ სირთულეებს და უზრუნველყოფს შეზღუდული შესაძლებლობის მქონე პირთა თანაბარი უფლებებისა და თავისუფლების ფუნდამენტურ ღირებულებათა რეალიზებას.</p>\r\n\r\n			<p><strong>&bdquo;</strong><strong>უნივერსალური</strong> <strong>დიზაინი</strong><strong>&rdquo;</strong> &ndash; გულისხმობს პროდუქტის, გარემოს, პროგრამებისა და მომსახურების ისეთ დიზაინს, რომელიც ყველა ადამიანის აძლევს მისი მაქსიმალური გამოყენების საშუალებას, ადაპტაციისა და სპეციალური დიზაინის გამოყენების აუცილებლობის გარეშე. &bdquo;უნივერსალური დიზაინი&rdquo; არ გამორიცხავს საჭიროების შემთხვევაში შეზღუდული შესაძლებლობის მქონე კონკრეტული ჯგუფის მიერ დამხმარე საშუალებების გამოყენებას.</p>\r\n\r\n			<p><strong>მუხლი</strong><strong> 3</strong></p>\r\n\r\n			<p><strong><em>ზოგადი</em></strong> <strong><em>პრინციპები</em></strong></p>\r\n\r\n			<p>წინამდებარე კონვენციის პრინციპებია:</p>\r\n\r\n			<p>a. ადმიანის თანდაყოლილი პიროვნული ღირსების, მისი ინდივიდუალური ავტონომიის პატივისცემა, გადაწყვეტილების მიღების თავისუფლებისა და პიროვნების დამოუკიდებლობის ჩათვლით;</p>\r\n\r\n			<p>b. დისკრიმინაციის დაუშვებლობა;</p>\r\n\r\n			<p>c. სრულყოფილი ჩართვა და მონაწილეობა საზოგადოებაში;</p>\r\n\r\n			<p>d. პატივისცემა შეზღუდული შესაძლებლობის მქონე პირთა განსხვავებულობისადმი; მათი აღიარება ადამიანთა შორის არსებული განსხვავებულობის შემადგენელ ნაწილად.</p>\r\n\r\n			<p>e. თანაბარი შესაძლებლობის უზრუნველყოფა;</p>\r\n\r\n			<p>f. მისაწვდომობა;</p>\r\n\r\n			<p>g. ქალთა და მამაკაცთა თანასწორობა;</p>\r\n\r\n			<p>h. შეზღუდული შესაძლებლობის მქონე ბავშვების შესაძლებლობის განვითარებისა და ინდივიდუალობის შენარჩუნების უფლების პატივისცემა.</p>\r\n\r\n			<p><strong>მუხლი</strong><strong> 4</strong></p>\r\n\r\n			<p><strong><em>ზოგადი</em></strong> <strong><em>ვალდებულებები</em></strong></p>\r\n\r\n			<p>1. მონაწილე სახელმწიფოები იღებენ ვალდებულებას, უზრუნველყონ და ხელი შეუწყონ შეზღუდული შესაძლებლობის მქონე პირთა მიერ ადამიანის უფლებებისა და ძირითად თავისუფლებათა სრულ რეალიზებას, შეზღუდული შესაძლებლობის საფუძველზე აღმოცენებული ყოველგვარი დისკრიმინაციის გარეშე. ამ მიზნით მონაწილე ქვეყნები ვალდებულებას იღებენ:</p>\r\n\r\n			<p>a. მიიღონ ყველა საჭირო საკანონმდებლო, ადმინისტრაციული და სხვა ზომები წინამდებარე კონვენციით გათვალისწინებული უფლებების უზრუნველყოფისათვის;</p>\r\n\r\n			<p>b. მიიღონ ყველა შესაბამისი ზომა, მათ შორის საკანონმდებლო, შეზღუდული შესაძლებლობის მქონე პირთა მიმართ ყველა დისკრიმინაციული კანონის, დადგენილების, წესის, ტრადიციის შესაცვლელად ან გასაუქმებლად;</p>\r\n\r\n			<p>c. ყველა პოლიტიკასა და პროგრამაში გათვალისწინებულ იქნეს შეზღუდული შესაძლებლობის მქონე პირთა უფლებების დაცვა და ხელშეწყობა;</p>\r\n\r\n			<p>d. თავი შეიკავონ ყველა იმ აქტივობისა და მეთოდებისაგან, რომელიც ეწინააღმდეგება წინამდებარე კონვენციას; უზრუნველყონ სახელმწიფო სტრუქტურებისა და დაწესებულებების წინამდებარე კონვენციასთან შესაბამისობაში მოქმდება;</p>\r\n\r\n			<ol>\r\n				<li>მიიღონ ყველა შესაბამისი ზომა ყველა კერძო პირის, ორგანიზაციისა ან კერძო საწარმოს მხრიდან შეზღუდული შესაძლებლობის საფუძველზე აღმოცენებული ნებისმიერი სახის დისკრიმინაციის აღმოსაფხვრელად;</li>\r\n			</ol>\r\n\r\n			<p>f. განახორციელონ ან ხელი შეუწყონ წინამდებარე კონვენციის მე-2 მუხლით განსაზღვრული, ისეთი სახის უნივერსალური დიზაინის მქონე პროდუქტის, მომსახურების, დანადგარებისა და მოწყობილობების კვლევა-გამოგონებით საქმიანობას, რომელთა შეზღუდული შესაძლებლობის მქონე პირთა სპეციფიკურ საჭიროებებზე მორგება მინიმალურ ადაპტაციასა და თანხებს მოითხოვს; ხელი შეუწყონ მათ გამოყენებასა და მისაწვდომობას, სტანდარტებისა და სახელმძღვანელოების შექმნაში უნივერსალური დიზაინის იდეის გატარებას;</p>\r\n\r\n			<p>g. განახორციელონ ან ხელი შეუწყონ კვლევით და გამოგონებით საქმიანობას, ასევე ახალი ტექნოლოგიების, მათ შორის შეზღუდული შესაძლებლობის მქონე პირთა საჭიროებებზე გათვლილი საინფორმაციო და საკომუნიკაციო ტექნოლოგიების, მობილურობის ხელშემწყობი, დამხმარე საშუალებებისა და ტექნოლოგიების მისაწვდომობასა და გამოყენებას; ამასთანავე უპრატესობა მიანიჭონ მაქსიმალურად მისაწვდომი ფასის მქონე ტექნოლოგიებს;</p>\r\n\r\n			<p>h. შეზღუდული შესაძლებლობის მქონე პირებს მიაწოდონ ინფორმაცია მობილურობის ხელშემწყობი და სხვა დამხმარე ტექნოლოგიებისა და საშუალებების, მათ შორის ახალი ტექნოლოგიების შესახებ; მიაწოდონ ინფორმაცია სხვა სახის დახმარების, დამხმარე მომსახურებისა და საშუალებების შესახებ;</p>\r\n\r\n			<p>i. ხელი შეუწყონ პროფესიონალთა და შეზღუდული შესაძლებლობის მქონე პირებთან მომუშავე პერსონალის განათლებას წინამდებარე კონვენციაში წარმოდგენილი უფლებების საკითხებზე, რათა უზრუნველყონ ამ უფლებებით გარანტირებული დახმარებისა და მომსახურების უკეთესი უზრუნველყოფა.</p>\r\n\r\n			<p>2. ეკონომიკურ, სოციალურ და კულტურულ უფლებებთან დაკავშირებით ყველა მონაწილე სახელმწიფო იღებს ვალდებულებას, არსებული რესურსების მაქსიმალურად გამოყენებისა და საჭიროების შემთხვევაში საერთაშორისო თანამშრომლობის ფარგლებში, მიიღოს ყველა ზომა აღნიშნულ უფლებათა სრული დაცვის სისტემატური, პროგრესირებადი უზრუნველყოფისათვის, წინამდებარე კონვენციაში ფორმულირებული იმ ვალდებულებების გარდა, რომელთა დაუყოვნებლივ შესრულებას ითვალისწინებს საერთაშორისო სამართალი.</p>\r\n\r\n			<ol>\r\n				<li>კანონმდებლობისა და წინამდებარე კონვენციის განხორციელების სტრატეგიის შემუშავებასა და განხორციელებაში, ასევე შეზღუდული შესაძლებლობის მქონე პირებთან დაკავშირებულ სხვა საკითხებზე გადაწყვეტილების მიღების პროცესში, მონაწილე სახელმწიფოები მჭიდროდ ითანამშრომლებენ და აქტიურად ჩართავენ შეზღუდული შესაძლებლობის მქონე პირებს, მათ შორის შეზღუდული შესაძლებლობის მქონე ბავშვებს, მათი წარმომადგენლობითი ორგანიზაციების საშუალებით.</li>\r\n			</ol>\r\n\r\n			<p>4. წინამდებარე კონვენცია ვერ ახდენს გავლენას იმ დებულებებზე, რომლებიც გაცილებით ქმედითად უზრუნველყოფენ შეზღუდული შესაძლებლობის მქონე პირთა უფლებების რეალიზებას და შესაძლოა წარმოადგენდნენ მონაწილე სახელმწიფოს, ან მის ტერიტორიაზე მოქმედი საერთაშორისო კანონმდებლობის შემადგენელ ნაწილს. დაუშვებელია, კონვენციის მონაწილე ნებისმიერ სახელმწიფოში კანონით, კონვენციით, წესებითა და ტრადიციებით აღიარებული და მოქმედი ადამიანის უფლებათა და ძირითად თავისუფლებათა ნებისმიერი სახის შეზღუდვა ან აკრძალვა იმ საბაბით, რომ წინამდებარე კონვენცია არ ითვალისწინებს, ან მხოლოდ ნაწილობრივ აღიარებს ამ უფლებებსა და ძირითად თავისუფლებებს.</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>5. წინამდებარე კონვენციის დებულებები ვრცელდება ნებისმიერი ფედერალური სახელმწიფოს ყველა შემადგენელ ერთეულში, ყოველგვარი შეზღუდვისა და გამონაკლისის გარეშე.</p>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '', 'უნივერსალური დიზაინი, გონივრული მისადაგება, შშმ პირები', 'Convention Purpose and Definitions', 'Terminology of Convention and general purpose', '<h3><a name="1">Article 1 - Purpose</a></h3>\r\n\r\n<p>The purpose of the present Convention is to promote, protect and ensure the full and equal enjoyment of all human rights and fundamental freedoms by all persons with disabilities, and to promote respect for their inherent dignity.</p>\r\n\r\n<p>Persons with disabilities include those who have long-term physical, mental, intellectual or sensory impairments which in interaction with various barriers may hinder their full and effective participation in society on an equal basis with others.</p>\r\n\r\n<h3><a name="2">Article 2 - Definitions</a></h3>\r\n\r\n<p>For the purposes of the present Convention:</p>\r\n\r\n<p>&quot;Communication&quot; includes languages, display of text, Braille, tactile communication, large print, accessible multimedia as well as written, audio, plain-language, human-reader and augmentative and alternative modes, means and formats of communication, including accessible information and communication technology;</p>\r\n\r\n<p>&quot;Language&quot; includes spoken and signed languages and other forms of non-spoken languages;</p>\r\n\r\n<p>&quot;Discrimination on the basis of disability&quot; means any distinction, exclusion or restriction on the basis of disability which has the purpose or effect of impairing or nullifying the recognition, enjoyment or exercise, on an equal basis with others, of all human rights and fundamental freedoms in the political, economic, social, cultural, civil or any other field. It includes all forms of discrimination, including denial of reasonable accommodation;</p>\r\n\r\n<p>&quot;Reasonable accommodation&quot; means necessary and appropriate modification and adjustments not imposing a disproportionate or undue burden, where needed in a particular case, to ensure to persons with disabilities the enjoyment or exercise on an equal basis with others of all human rights and fundamental freedoms;</p>\r\n\r\n<p>&quot;Universal design&quot; means the design of products, environments, programmes, and services to be usable by all people, to the greatest extent possible, without the need for adaptation or specialized design. &quot;Universal design&quot; shall not exclude assistive devices for particular groups of persons with disabilities where this is needed.</p>\r\n\r\n<h3><a name="3">Article 3 - General principles</a></h3>\r\n\r\n<p>The principles of the present Convention shall be:</p>\r\n\r\n<p>(a) Respect for inherent dignity, individual autonomy including the freedom to make one&#39;s own choices, and independence of persons;</p>\r\n\r\n<p>(b) Non-discrimination;</p>\r\n\r\n<p>(c) Full and effective participation and inclusion in society;</p>\r\n\r\n<p>(d) Respect for difference and acceptance of persons with disabilities as part of human diversity and humanity;</p>\r\n\r\n<p>(e) Equality of opportunity;</p>\r\n\r\n<p>(f) Accessibility;</p>\r\n\r\n<p>(g) Equality between men and women;</p>\r\n\r\n<p>(h) Respect for the evolving capacities of children with disabilities and respect for the right of children with disabilities to preserve their identities.</p>\r\n\r\n<h3><a name="4">Article 4 - General obligations</a></h3>\r\n\r\n<p>1. States Parties undertake to ensure and promote the full realization of all human rights and fundamental freedoms for all persons with disabilities without discrimination of any kind on the basis of disability. To this end, States Parties undertake:</p>\r\n\r\n<p>(a) To adopt all appropriate legislative, administrative and other measures for the implementation of the rights recognized in the present Convention;</p>\r\n\r\n<p>(b) To take all appropriate measures, including legislation, to modify or abolish existing laws, regulations, customs and practices that constitute discrimination against persons with disabilities;</p>\r\n\r\n<p>(c) To take into account the protection and promotion of the human rights of persons with disabilities in all policies and programmes;</p>\r\n\r\n<p>(d) To refrain from engaging in any act or practice that is inconsistent with the present Convention and to ensure that public authorities and institutions act in conformity with the present Convention;</p>\r\n\r\n<p>(e) To take all appropriate measures to eliminate discrimination on the basis of disability by any person, organization or private enterprise;</p>\r\n\r\n<p>(f) To undertake or promote research and development of universally designed goods, services, equipment and facilities, as defined in article 2 of the present Convention, which should require the minimum possible adaptation and the least cost to meet the specific needs of a person with disabilities, to promote their availability and use, and to promote universal design in the development of standards and guidelines;</p>\r\n\r\n<p>(g) To undertake or promote research and development of, and to promote the availability and use of new technologies, including information and communications technologies, mobility aids, devices and assistive technologies, suitable for persons with disabilities, giving priority to technologies at an affordable cost;</p>\r\n\r\n<p>(h) To provide accessible information to persons with disabilities about mobility aids, devices and assistive technologies, including new technologies, as well as other forms of assistance, support services and facilities;</p>\r\n\r\n<p>(i) To promote the training of professionals and staff working with persons with disabilities in the rights recognized in this Convention so as to better provide the assistance and services guaranteed by those rights.</p>\r\n\r\n<p>2. With regard to economic, social and cultural rights, each State Party undertakes to take measures to the maximum of its available resources and, where needed, within the framework of international cooperation, with a view to achieving progressively the full realization of these rights, without prejudice to those obligations contained in the present Convention that are immediately applicable according to international law.</p>\r\n\r\n<p>3. In the development and implementation of legislation and policies to implement the present Convention, and in other decision-making processes concerning issues relating to persons with disabilities, States Parties shall closely consult with and actively involve persons with disabilities, including children with disabilities, through their representative organizations.</p>\r\n\r\n<p>4. Nothing in the present Convention shall affect any provisions which are more conducive to the realization of the rights of persons with disabilities and which may be contained in the law of a State Party or international law in force for that State. There shall be no restriction upon or derogation from any of the human rights and fundamental freedoms recognized or existing in any State Party to the present Convention pursuant to law, conventions, regulation or custom on the pretext that the present Convention does not recognize such rights or freedoms or that it recognizes them to a lesser extent.</p>\r\n\r\n<p>5. The provisions of the present Convention shall extend to all parts of federal states without any limitations or exceptions.</p>\r\n', '', 'CRPD, disability rights, crpd definition, ', '', '', '', '', '', '2017-07-26 08:36:31', '2017-07-26 08:53:24');
INSERT INTO `ServicesItem` (`id`, `menu_id`, `main`, `pos`, `image`, `tumb`, `date`, `title_ge`, `short_text_ge`, `full_text_ge`, `description_ge`, `keywords_ge`, `title_en`, `short_text_en`, `full_text_en`, `description_en`, `keywords_en`, `title_ru`, `short_text_ru`, `full_text_ru`, `description_ru`, `keywords_ru`, `created_at`, `updated_at`) VALUES
(17, 5, 1, '111', 'files/services_items/1502102120_yes_equality_by_yautja_steve-d8l6fps.png', 'files/services_items/tumb/1502102120_yes_equality_by_yautja_steve-d8l6fps.png', 'Mon, Aug 7, 2017 10:50 AM', 'თავისუფლება და თანასწორუფლებიანობა', 'შეზღუდული შესაძლებლობების მქონე პირები თანასწორი მოქალაქეები არიან და ყველა მოქალაქისთვის მინიჭებული თავისუფლებებით უნდა ისარგებლონ', '<p><strong>მუხლი</strong><strong> 5</strong></p>\r\n\r\n<p><strong><em>თანასწორუფლებიანობა</em></strong> <strong><em>და</em></strong> <strong><em>დისკრიმინაციის</em></strong> <strong><em>დაუშვებლობა</em></strong></p>\r\n\r\n<p>1. მონაწილე სახელმწიფოები აღიარებენ, რომ ყოველი პიროვნება თანასწორია კანონის წინაშე და კანონის ძალით; ყველას ერთნაირად, ყოველგვარი დისკრიმინაციის გარეშე აქვს უფლება, იყოს დაცული და ისარგებლოს კანონით.</p>\r\n\r\n<p>2. მონაწილე სახელმწიფოები კრძალავენ შეზღუდული შესაძლებლობის საფუძველზე აღმოცენებულ დისკრიმინაციას და უზრუნველყოფენ შეზღუდული შესაძლებლობის მქონე პირთა თანაბარ და ეფექტურ იურიდიულ დაცვას ყოველგვარი დისაკრიმინაციისაგან.</p>\r\n\r\n<ol>\r\n	<li>თანასწორუფლებიანობის ხელშეწყობისა და დისკრიმინაციის აღმოფხვრის მიზნით, მონაწილე სახელმწიფოები იღებენ ყველა შესაბამის ზომას გონივრული მისადაგების უზრუნველყოფისათვის.</li>\r\n</ol>\r\n\r\n<p>4. შეზღუდული შესაძლებლობის მქონე პირთა ფაქტობრივი თანასწორუფლებიანობის მიღწევისა და დაჩქარებისათვის მიღებული კონკრეტული ზომები, წინამდებარე კონვენციით, არ განიხილება როგორც დისკრიმინაცია.</p>\r\n\r\n<p><strong>მუხლი</strong><strong> 10</strong></p>\r\n\r\n<p><strong><em>სიცოცხლის</em></strong> <strong><em>უფლება</em></strong></p>\r\n\r\n<p>მონაწილე სახელმწიფოები კიდევ ერთხელ ადასტურებენ, რომ ყველა ადამიანს აქვს სიცოცხლის თანდაყოლილი უფლება და იღებენ ყველა აუცილებელ ზომას, რათა უზრუნველყონ შეზღუდული შესაძლებლობის მქონე პირთა მიერ ამ უფლების ეფექტური და სხვებთან თანასწორი რეალიზება.</p>\r\n\r\n<p><strong>მუხლი</strong><strong> 12</strong></p>\r\n\r\n<p><strong><em>კანონის</em></strong> <strong><em>წინაშე</em></strong> <strong><em>თანასწორობა</em></strong></p>\r\n\r\n<ol>\r\n	<li>მონაწილე სახელმწიფოები კიდევ ერთხელ ადასტურებენ, რომ შეზღუდული შესაძლებლობის მქონე პირებს უფლება აქვთ სამართლის სუბიექტად აღიარებაზე, სადაც არ უნდა იმყოფებოდნენ ისინი.</li>\r\n</ol>\r\n\r\n<p>2. მონაწილე სახელმწიფოები აღიარებენ შეზღუდული შესაძლებლობის მქონე პირების უფლებაუნარიანობას სხვებთან თანასწორად, ცხოვრების ყველა სფეროში.</p>\r\n\r\n<p>3. მონაწილე სახელმწიფოები იღებენ შესაბამის ზომებს შეზღუდული შესაძლებლობის მქონე პირთათვის იმ დახმარების მისაწვდომობის უზრუნველსაყოფად, რომელიც მათ შეიძლება სჭირდებოდეთ სამართლებრივი უფლებაუნარიანობის რეალიზებისათვის.</p>\r\n\r\n<ol>\r\n	<li>მონაწილე სახელმწიფოები უზრუნველყოფენ, რომ სამართლებრივი უფლებაუნარიანობის რეალიზებასთან დაკავშირებული ყველა ზომა ითვალისწინებდეს შესაბამის და ეფექტურ გარანტიებს მათი ბოროტად გამოყენების აღკვეთის მიზნით, ადამიანის უფლებათა საერთაშორისო სამართლის თანახმად. ასეთი გარანტიები უნდა უზრუნველყოფდნენ, რომ უფლებაუნარიანობის რეალიზებასთან დაკავშირებული ზომები ორიენტირებული იყოს პიროვნების უფლებებზე, სურვილსა და უპირატესობებზე, თავისუფალი იყოს ინტერესთა კონფლიქტისა და არასასურველი გავლენისაგან, შეესაბამებოდეს და ერგებოდეს ამ პიროვნების მდგომარეობას, გამოიყენებოდეს რაც შეიძლება მინიმალური დროით და რეგულარულად მოწმდებოდეს კომპეტენტური, დამოუკიდებელი და მიუკერძოებელი ორგანოს ან სასამართლოს მიერ. აღნიშნული გარანტიები უნდა იყოს მოცემული პირის უფლებებისა და ინტერესების ხელმყოფი ზომების პროპორციული.</li>\r\n	<li>წინამდებარე მუხლის დებულებათა გათვალისწინებით, მონაწილე სახელმწიფოები იღებენ ყველა შესაბამის და ეფექტურ ზომას, რათა უზრუნველყონ შეზღუდული შესაძლებლობის მქონე პირთა უფლება საკუთრების ფლობასა და მემკვიდრეობით მიღებაზე, საკუთარი ფინანსური საქმეების მართვაზე, საბანკო სესხების, საიპოთეკო, სხვა ფინანსური კრედიტების თანაბარ მისაწვდომობაზე და უზრუნველყოფენ, რომ არ მოხდეს შეზღუდული შესაძლებლობის მქონე პირებისათვის საკუთრების თვითნებურად ჩამორთმევა.</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>მუხლი</strong><strong> 13</strong></p>\r\n\r\n<p><strong><em>მართლმსაჯულების</em></strong> <strong><em>მისაწვდომობა</em></strong></p>\r\n\r\n<p>1. მონაწილე სახელმწიფოები უზრუნველყოფენ მართლმსაჯულების ეფექტურ მისაწვდომობას შეზღუდული შესაძლებლობის მქონე პირებისათვის, იმ პროცესუალური და ასაკთან შესაბამისი კორექტივების გათვალისწინებით, რომელიც ხელს უწყობს მათ მიერ პირდაპირი და არაპირდაპირი მონაწილის როლის ეფექტურად განხორციელებას, მათ შორის, მოწმის სახით, იურიდიული პროცედურების ყველა საფეხურზე, გამოძიებისა და საქმეთა წარმოების სხვა საწყისი საფეხურების ჩათვლით.</p>\r\n\r\n<p>2. შეზღუდული შესაძლებლობის მქონე პირთათვის მართლმსაჯულების ეფექტური მისაწვდომობის უზრუნველყოფისათვის, მონაწილე სახელმწიფოები ხელს უწყობენ სამართლის ადმინისტრირების სფეროში მომუშავე, მათ შორის პოლიციისა და ციხის პერსონალის შესაბამის განათლებას.</p>\r\n\r\n<p><strong>მუხლი</strong><strong> 14</strong></p>\r\n\r\n<p><strong><em>პიროვნების</em></strong> <strong><em>თავისუფლება</em></strong> <strong><em>და</em></strong> <strong><em>უსაფრთხოება</em></strong></p>\r\n\r\n<p>1. მონაწილე სახელმწიფოები უზრუნველყოფენ, რომ შეზღუდული შესაძლებლობის მქონე პირებმა სხვებთან თანასწორობის საფუძველზე:</p>\r\n\r\n<p>a. ისარგებლონ პიროვნების თავისუფლებისა და ხელშეუხებლობის უფლებით;</p>\r\n\r\n<ol>\r\n	<li>არ აღეკვეთოთ თავისუფლება უკანონოდ ან თვითნებურად; თავისუფლების ნებისმიერი აღკვეთა უნდა მოხდეს კანონის დაცვით, ხოლო შეზღუდული შესაძლებლობა არანაირ შემთხვევაში არ უნდა გახდეს თავისუფლების აღკვეთის მიზეზი.</li>\r\n</ol>\r\n\r\n<ol>\r\n	<li>შეზღუდული შესაძლებლობის მქონე პირთათვის თავისუფლების აღკვეთის შემთხვევაში, მონაწილე სახელმწიფოები მათ უზრუნველყოფენ ადამიანის უფლებათა საერთაშორისო სამართლით გათვალისწინებული თანაბარი გარანტიებით და მათდამი მოპყრობაში გამოიყენებენ წინამდებარე კონვენციით გათვალისწინებულ პრინციპებს, გონივრული მისადაგების უზრუნველყოფის ჩათვლით.</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>მუხლი</strong><strong> 15</strong></p>\r\n\r\n<p><strong><em>წამების</em></strong> <strong><em>ან</em></strong> <strong><em>სასტიკი</em></strong><strong><em>, </em></strong><strong><em>არაჰუმანური</em></strong><strong><em>, </em></strong><strong><em>დამამცირებელი</em></strong> <strong><em>მოპყრობისა</em></strong> <strong><em>ან</em></strong> <strong><em>სასჯელისაგან</em></strong> <strong><em>თავისუფლება</em></strong></p>\r\n\r\n<p>1. არავინ არ უნდა გახდეს წამების, სასტიკი, არაჰუმანური და დამამცირებელი მოპყრობისა ან სასჯელის მსხვერპლი. კერძოდ, არავიზე არ უნდა ჩატარდეს სამედიცინო ან სამეცნიერო ექსპერიმენტი მისი ნებაყოფილობითი თანხმობის გარეშე.</p>\r\n\r\n<p>2. მონაწილე სახელმწიფოებმა უნდა მიიღონ ყველა ეფექტური საკანონმდებლო, ადმინისტრაციული, იურიდიული და სხვა ზომები, რათა უზრუნველყონ შეზღუდული შესაძლებლობის მქონე პირთა დაცვა წამების ან სასტიკი, არაჰუმანური, დამამცირებელი მოპყრობისა ან სასჯელისაგან, სხვებთან თანასწორობის საფუძველზე.</p>\r\n\r\n<p><strong>მუხლი</strong><strong> 16</strong></p>\r\n\r\n<p><strong><em>ექსპლუატაციის</em></strong><strong><em>, </em></strong><strong><em>ძალადობისა</em></strong> <strong><em>და</em></strong> <strong><em>შეურაცხყოფისაგან</em></strong> <strong><em>თავისუფლება</em></strong></p>\r\n\r\n<p>1. მონაწილე სახელმწიფოები იღებენ ყველა შესაბამის საკანონმდებლო, ადმინისტრაციულ, სოციალურ, საგანმანათლებლო და სხვა ზომებს, რათა უზრუნველყონ შეზღუდული შესაძლებლობის მქონე პირთა დაცვა ექსპლუატაციის, ძალადობისა და შეურახცყოფისაგან, მათ შორის, სქესობრივი დისკრიმინაციის ჩათვლით, როგორც შინ, ასევე გარეთ.</p>\r\n\r\n<p>2. მონაწილე სახელმწიფოები ასევე იღებენ ყველა შესაბამის ზომას, რათა უზრუნველყონ ექსპლუატაციის, ძალადობისა და შეურაცხყოფის ყველა ფორმის პრევენცია. კერძოდ, უზრუნველყოფილი უნდა იქნას შეზღუდული შესაძლებლობის მქონე პირთა, მათი ოჯახის წევრებისა და მომვლელების დახმარება და მხარდაჭერა ასაკისა და სქესის გათვალისწინებით, მათ შორის ექსპლუატაციის, ძალადობისა და შეურაცხყოფის შემთხვევების გამოვლენის, თავიდან აცილებისა და გახმაურების შესახებ ინფორმაციის მიწოდებისა და განათლების ჩათვლით. მონაწილე სახელმწიფოები უზრუნველყოფენ დაცვის სამსახურების მიერ ასაკის, სქესის და შეზღუდული შესაძლებლობის გათვალისწინებას.</p>\r\n\r\n<p>3. ნებისმიერი სახის ექსპლუატაციის, ძალადობისა და შეურაცხყოფის თავიდან აცილების მიზნით, მონაწილე სახელმწიფოები უზრუნველყოფენ შეზღუდული შესაძლებლობის მქონე პირთა მომსახურებისათვის შექმნილი ყველა პროგრამისა და მოწყობილობის ეფექტურ მონიტორინგს დამოუკიდებელი უწყებების მიერ.</p>\r\n\r\n<p>4. მონაწილე სახელმწიფოები ასევე იღებენ ყველა შესაბამის ზომას, მათ შორის დაცვის სამსახურების ჩათვლით, რათა ხელი შეუწყონ შეზღუდული შესაძლებლობის მქონე იმ პირთა ფიზიკურ, შემეცნებით, ფსიქოლოგიურ გამოჯანმრთელებას, რეაბილიტაციასა და სოციალურ რეინტეგრაციას, რომლებიც გარკვეული მიზეზების გამო გახდნენ ექსპლუატაციის, ძალადობისა და შეურაცხყოფის მსხვერპლნი. ასეთი სახის რეაბილიტაცია და გამოჯანმრთელება უნდა ხდებოდეს გარემოში, რომელიც ხელს უწყობს პიროვნებაში ჯანმრთელობის, კეთილდღეობის, თვითპატივისცემის, ღირსებისა და დამოუკიდებლობის განმტკიცებას ასაკობრივ-სქესობრივი სპეციფიკის გათვალისწინებით.</p>\r\n\r\n<p>5. მონაწილე სახელმწიფოები იღებენ ეფექტურ, მათ შორის ქალებსა და ბავშვებზე ორიენტირებულ კანონმდებლობასა და სტრატეგიებს, რათა უზრუნველყონ შეზღუდული შესაძლებლობის მქონე პირთა ექსპლუატაციის, ძალადობისა და შეურაცხყოფის შემთხვევათა გამოვლენა, გამოძიება და საჭიროების შემთხვევაში კანონით დასჯა.</p>\r\n\r\n<p><strong>მუხლი</strong><strong> 17</strong></p>\r\n\r\n<p><strong><em>პიროვნების</em></strong> <strong><em>ხელშეუხებლობის</em></strong> <strong><em>დაცვა</em></strong></p>\r\n\r\n<p>შეზღუდული შესაძლებლობის მქონე ყველა პირს აქვს საკუთარი ფიზიკური და მენტალური ხელშეუხებლობის პატივისცემის თანაბარი უფლება.</p>\r\n\r\n<p><strong>მუხლი</strong><strong> 18</strong></p>\r\n\r\n<p><strong><em>გადაადგილების</em></strong> <strong><em>თავისუფლება</em></strong> <strong><em>და</em></strong> <strong><em>მოქალაქეობა</em></strong></p>\r\n\r\n<p>1. მონაწილე სახელმწიფოები აღიარებენ შეზღუდული შესაძლებლობის მქონე პირთა თავისუფალი გადაადგილების, საცხოვრებელი ადგილისა და მოქალაქეობის არჩევის თანაბარ უფლებას, მათ შორის უზრუნველყოფენ:</p>\r\n\r\n<p>a. შეზღუდული შესაძლებლობის მქონე პირთა უფლებას მიიღონ ან შეიცვალონ მოქალაქეობა; იცავენ მათ მოქალაქეობის თვითნებური ან შეზღუდული შესაძლებლობის გამო ჩამორთმევისაგან;</p>\r\n\r\n<p>b. შეზღუდული შესაძლებლობის გამო, მოქალაქეობის ან პიროვნების დამადასტურებელი სხვა დოკუმენტის მიღების, ფლობის, სარგებლობის, თავისუფალი გადაადგილების უფლების რეალიზებისათვის საჭირო საემიგრაციო პროცედურებით სარგებლობის უფლების ჩამორთმევისაგან დაცვას;</p>\r\n\r\n<p>c. ნებისმიერი, მათ შორის საკუთარი ქვეყნის თავისუფლად დატოვების უფლებით;</p>\r\n\r\n<p>d. საკუთარ ქვეყანაში შესვლის უფლების თვითნებური, ან შეზღუდული შესაძლებლობის გამო ჩამორთმევისაგან დაცვას;</p>\r\n\r\n<p>2. შეზღუდული შესაძლებლობის მქონე ბავშვები დაბადებისთანავე უნდა იქნენ გატარებული რეგისტრაციაში; დაბადების მომენტიდანვე მათ ენიჭებათ უფლება სახელსა და მოქალაქეობაზე, ასევე შესაძლებლობის ფარგლებში აქვთ უფლება ფლობდნენ ინფორმაციას მშობლების შესახებ და სარგებლობდნენ მათი მზრუნველობით.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '', '', 'Freedom and equality principles of CRPD', 'People with disabilities are equal and they take advantage of same freedom as other member of society', '<h3><a name="5">Article 5 - Equality and non-discrimination</a></h3>\r\n\r\n<p>1. States Parties recognize that all persons are equal before and under the law and are entitled without any discrimination to the equal protection and equal benefit of the law.</p>\r\n\r\n<p>2. States Parties shall prohibit all discrimination on the basis of disability and guarantee to persons with disabilities equal and effective legal protection against discrimination on all grounds.</p>\r\n\r\n<p>3. In order to promote equality and eliminate discrimination, States Parties shall take all appropriate steps to ensure that reasonable accommodation is provided.</p>\r\n\r\n<p>4. Specific measures which are necessary to accelerate or achieve de facto equality of persons with disabilities shall not be considered discrimination under the terms of the present Convention.</p>\r\n\r\n<h3><a name="6">Article 6 - Women with disabilities</a></h3>\r\n\r\n<p>1. States Parties recognize that women and girls with disabilities are subject to multiple discrimination, and in this regard shall take measures to ensure the full and equal enjoyment by them of all human rights and fundamental freedoms.</p>\r\n\r\n<p>2. States Parties shall take all appropriate measures to ensure the full development, advancement and empowerment of women, for the purpose of guaranteeing them the exercise and enjoyment of the human rights and fundamental freedoms set out in the present Convention.</p>\r\n\r\n<h3><a name="7">Article 7 - Children with disabilities</a></h3>\r\n\r\n<p>1. States Parties shall take all necessary measures to ensure the full enjoyment by children with disabilities of all human rights and fundamental freedoms on an equal basis with other children.</p>\r\n\r\n<p>2. In all actions concerning children with disabilities, the best interests of the child shall be a primary consideration.</p>\r\n\r\n<p>3. States Parties shall ensure that children with disabilities have the right to express their views freely on all matters affecting them, their views being given due weight in accordance with their age and maturity, on an equal basis with other children, and to be provided with disability and age-appropriate assistance to realize that right.</p>\r\n\r\n<h3><a name="10">Article 10 - Right to life</a></h3>\r\n\r\n<p>States Parties reaffirm that every human being has the inherent right to life and shall take all necessary measures to ensure its effective enjoyment by persons with disabilities on an equal basis with others.</p>\r\n\r\n<h3><a name="12">Article 12 - Equal recognition before the law</a></h3>\r\n\r\n<p>1. States Parties reaffirm that persons with disabilities have the right to recognition everywhere as persons before the law.</p>\r\n\r\n<p>2. States Parties shall recognize that persons with disabilities enjoy legal capacity on an equal basis with others in all aspects of life.</p>\r\n\r\n<p>3. States Parties shall take appropriate measures to provide access by persons with disabilities to the support they may require in exercising their legal capacity.</p>\r\n\r\n<p>4. States Parties shall ensure that all measures that relate to the exercise of legal capacity provide for appropriate and effective safeguards to prevent abuse in accordance with international human rights law. Such safeguards shall ensure that measures relating to the exercise of legal capacity respect the rights, will and preferences of the person, are free of conflict of interest and undue influence, are proportional and tailored to the person&#39;s circumstances, apply for the shortest time possible and are subject to regular review by a competent, independent and impartial authority or judicial body. The safeguards shall be proportional to the degree to which such measures affect the person&#39;s rights and interests.</p>\r\n\r\n<p>5. Subject to the provisions of this article, States Parties shall take all appropriate and effective measures to ensure the equal right of persons with disabilities to own or inherit property, to control their own financial affairs and to have equal access to bank loans, mortgages and other forms of financial credit, and shall ensure that persons with disabilities are not arbitrarily deprived of their property.</p>\r\n\r\n<h3><a name="13">Article 13 - Access to justice</a></h3>\r\n\r\n<p>1. States Parties shall ensure effective access to justice for persons with disabilities on an equal basis with others, including through the provision of procedural and age-appropriate accommodations, in order to facilitate their effective role as direct and indirect participants, including as witnesses, in all legal proceedings, including at investigative and other preliminary stages.</p>\r\n\r\n<p>2. In order to help to ensure effective access to justice for persons with disabilities, States Parties shall promote appropriate training for those working in the field of administration of justice, including police and prison staff.</p>\r\n\r\n<h3><a name="14">Article 14 - Liberty and security of the person</a></h3>\r\n\r\n<p>1. States Parties shall ensure that persons with disabilities, on an equal basis with others:</p>\r\n\r\n<p>(a) Enjoy the right to liberty and security of person;</p>\r\n\r\n<p>(b) Are not deprived of their liberty unlawfully or arbitrarily, and that any deprivation of liberty is in conformity with the law, and that the existence of a disability shall in no case justify a deprivation of liberty.</p>\r\n\r\n<p>2. States Parties shall ensure that if persons with disabilities are deprived of their liberty through any process, they are, on an equal basis with others, entitled to guarantees in accordance with international human rights law and shall be treated in compliance with the objectives and principles of this Convention, including by provision of reasonable accommodation.</p>\r\n\r\n<h3><a name="15">Article 15 - Freedom from torture or cruel, inhuman or degrading treatment or punishment</a></h3>\r\n\r\n<p>1. No one shall be subjected to torture or to cruel, inhuman or degrading treatment or punishment. In particular, no one shall be subjected without his or her free consent to medical or scientific experimentation.</p>\r\n\r\n<p>2. States Parties shall take all effective legislative, administrative, judicial or other measures to prevent persons with disabilities, on an equal basis with others, from being subjected to torture or cruel, inhuman or degrading treatment or punishment.</p>\r\n\r\n<h3><a name="16">Article 16 - Freedom from exploitation, violence and abuse</a></h3>\r\n\r\n<p>1. States Parties shall take all appropriate legislative, administrative, social, educational and other measures to protect persons with disabilities, both within and outside the home, from all forms of exploitation, violence and abuse, including their gender-based aspects.</p>\r\n\r\n<p>2. States Parties shall also take all appropriate measures to prevent all forms of exploitation, violence and abuse by ensuring, inter alia, appropriate forms of gender- and age-sensitive assistance and support for persons with disabilities and their families and caregivers, including through the provision of information and education on how to avoid, recognize and report instances of exploitation, violence and abuse. States Parties shall ensure that protection services are age-, gender- and disability-sensitive.</p>\r\n\r\n<p>3. In order to prevent the occurrence of all forms of exploitation, violence and abuse, States Parties shall ensure that all facilities and programmes designed to serve persons with disabilities are effectively monitored by independent authorities.</p>\r\n\r\n<p>4. States Parties shall take all appropriate measures to promote the physical, cognitive and psychological recovery, rehabilitation and social reintegration of persons with disabilities who become victims of any form of exploitation, violence or abuse, including through the provision of protection services. Such recovery and reintegration shall take place in an environment that fosters the health, welfare, self-respect, dignity and autonomy of the person and takes into account gender- and age-specific needs.</p>\r\n\r\n<p>5. States Parties shall put in place effective legislation and policies, including women- and child-focused legislation and policies, to ensure that instances of exploitation, violence and abuse against persons with disabilities are identified, investigated and, where appropriate, prosecuted.</p>\r\n\r\n<h3><a name="17">Article 17 - Protecting the integrity of the person</a></h3>\r\n\r\n<p>Every person with disabilities has a right to respect for his or her physical and mental integrity on an equal basis with others.</p>\r\n\r\n<h3><a name="18">Article 18 - Liberty of movement and nationality</a></h3>\r\n\r\n<p>1. States Parties shall recognize the rights of persons with disabilities to liberty of movement, to freedom to choose their residence and to a nationality, on an equal basis with others, including by ensuring that persons with disabilities:</p>\r\n\r\n<p>(a) Have the right to acquire and change a nationality and are not deprived of their nationality arbitrarily or on the basis of disability;</p>\r\n\r\n<p>(b) Are not deprived, on the basis of disability, of their ability to obtain, possess and utilize documentation of their nationality or other documentation of identification, or to utilize relevant processes such as immigration proceedings, that may be needed to facilitate exercise of the right to liberty of movement;</p>\r\n\r\n<p>(c) Are free to leave any country, including their own;</p>\r\n\r\n<p>(d) Are not deprived, arbitrarily or on the basis of disability, of the right to enter their own country.</p>\r\n\r\n<p>2. Children with disabilities shall be registered immediately after birth and shall have the right from birth to a name, the right to acquire a nationality and, as far as possible, the right to know and be cared for by their parents.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '', '', '', '', '', '', '', '2017-07-26 09:00:05', '2017-08-07 10:50:33'),
(18, 5, 1, '111', 'files/services_items/1501060790_images.png', 'files/services_items/tumb/1501060790_images.png', 'Wed, Jul 26, 2017 9:27 AM', 'დამოუკიდებელი ცხოვრება, ოჯახი და პირადი ცხოვრება', 'ყველა შეზღუდული შესაძლებლობის მქონე პირს სჭირდება პირობები დამოუკიდებლობისთვის, მათთვის აუცილებელია ოჯახურ და პირად ცხოვრებაში ჩართვა', '<p>&nbsp;</p>\r\n\r\n<p><strong>მუხლი</strong><strong> 19</strong></p>\r\n\r\n<p><strong><em>დამოუკიდებელი</em></strong> <strong><em>ცხოვრება</em></strong> <strong><em>და</em></strong> <strong><em>საზოგადოებაში</em></strong> <strong><em>ცხოვრებაში</em></strong> <strong><em>ჩართვა</em></strong></p>\r\n\r\n<p>წინამდებარე კონვენციის მონაწილე სახელმწიფოები აღიარებენ შეზღუდული შესაძლებლობის მქონე ყველა პირის თანაბარ უფლებას, სხვებთან თანასწორი არჩევანით იცხოვრონ საზოგადოებაში და იღებენ ეფექტურ და შესაბამის ზომებს, რათა ხელი შეუწყონ შეზღუდული შესაძლებლობის მქონე პირთა ამ უფლების სრულ რეალიზებასა და მათ სრულყოფილ ჩართვას ადგილობრივ საზოგადოებაში, მათ შორის უზრუნველყოფენ:</p>\r\n\r\n<ol>\r\n	<li>შეზღუდული შესაძლებლობის მქონე პირთა თანაბარ უფლებას თავად შეარჩიონ საცხოვრებელი ადგილი, სად და ვისთან სურთ მათ ცხოვრება და არ იყვნენ ვალდებულნი, დასახლდნენ საცხოვრებლად სპეციალურად გამოყოფილ ადგილებში.</li>\r\n	<li>შეზღუდული შესაძლებლობის მქონე პირთათვის, ბინაზე, ინსტიტუციური და სხვა სახის საზოგადოებრივი დამხმარე მომსახურების მისაწვდომობას, ინდივიდუალური დახმარების ჩათვლით, რაც აუცილებელია მათი საზოგადოებრივ ცხოვრებაში ჩართვისავის, საზოგადოებისაგან იზოლაციისა და სეგრეგაციის პრევენციისათვის.</li>\r\n	<li>საზოგადოებრივი სარგებლობის მომსახურებებისა და ობიექტების თანაბარ მისაწვდომობას, შეზღუდული შესაძლებლობის მქონე პირთა საჭიროებების გათვალისწინებით.</li>\r\n</ol>\r\n\r\n<p><strong>მუხლი</strong><strong> 20</strong></p>\r\n\r\n<p><strong><em>ინდივიდუალური</em></strong> <strong><em>მობილურობა</em></strong></p>\r\n\r\n<p>1. მონაწილე სახელმწიფოები იღებენ ეფექტურ ზომებს შეზღუდული შესაძლებლობის მქონე პირთა ინდივიდუალური მობილურობისა და მაქსიმალური დამოუკიდებლობის უზრუნველსაყოფად, მათ შორის:</p>\r\n\r\n<p>a. ხელს უწყობენ შეზღუდული შესაძლებლობის მქონე პირთა ინდივიდუალურ მობილურობას, მათ მიერ არჩეული გადაადგილების საშუალებითა და დროში, მათთვის მისაწვდომ ფასებში;</p>\r\n\r\n<p>b. ხელს უწყობენ შეზღუდული შესაძლებლობის მქონე პირთათვის გადაადგილების საშუალებების, მოწყობილობებისა და დამხმარე ტექნოლოგიების, ასევე დამხმარეთა და შუამავალთა ზომიერ ფასში მისაწვდომობას;</p>\r\n\r\n<p>c. შეზღუდული შესაძლებლობის მქონე პირთათვის და მათთან მომუშავე სპეციალისტებისათვის მობილურობის უნარ-ჩვევების სწავლებას;</p>\r\n\r\n<p>d. გადაადგილების დამხმარე საშუალებების, მოწყობილობისა და დამხმარე ტექნოლოგიების მწარმოებელი ორგანიზაციების მხარდაჭერას, მათ მიერ შეზღუდული შესაძლებლობის მქონე პირთა მობილურობის ყველა ასპექტის გათვალისწინებისათვის.</p>\r\n\r\n<p><strong>მუხლი</strong><strong> 22</strong></p>\r\n\r\n<p><strong><em>პირადი</em></strong> <strong><em>ცხოვრების</em></strong> <strong><em>ხელშეუხებლობა</em></strong></p>\r\n\r\n<p>1. შეზღუდული შესაძლებლობის მქონე არც ერთ პირი, მიუხედავად მისი საცხოვრებელი ადგილისა და პირობებისა, არ უნდა განიცდიდეს თვითნებურ ან უკანონო ჩარევას მის პირად ცხოვრებაში, ოჯახში, საცხოვრებელში, კორესპონდენციასა და სხვა სახის კომუნიკაციაში; დაუშვებელია მისი ღირსებისა და რეპუტაციის უკანონო ხელყოფა. ასეთი სახის ჩარევისა და თავდასხმის შემთხვევაში, შეზღუდული შესაძლებლობის მქონე პირებს უფლება აქვთ იყონ დაცული კანონით.</p>\r\n\r\n<p>2. მონაწილე სახელმწიფოებმა სხვათა თანაბრად უნდა დაიცვან შეზღუდული შესაძლებლობის მქონე პირთა პირადი, სამედიცინო და სარეაბილიტაციო ხასიათის ინფორმაციის კონფიდენციალურობა.</p>\r\n\r\n<p><strong>მუხლი</strong><strong> 23</strong></p>\r\n\r\n<p><strong><em>საცხოვრებლისა</em></strong> <strong><em>და</em></strong> <strong><em>ოჯახის</em></strong> <strong><em>პატივისცემა</em></strong></p>\r\n\r\n<p>1. მონაწილე სახელმწიფოები იღებენ ეფექტურ და შესაბამის ზომებს, შეზღუდული შესაძლებლობის მქონე პირთა მიმართ დისკრიმინაციის აღმოსაფხვრელად, ქორწინებასთან, ოჯახთან, მშობლის ფუნქციებთან და პირად ურთიერთობებთან დაკავშირებულ ყველა საკითხთან მიმართებაში, რათა უზრუნველყოფილ იქნეს:</p>\r\n\r\n<p>a. ქორწინების ასაკში მყოფი, შეზღუდული შესაძლებლობის მქონე ყველა პირთა უფლება ქორწინებასა და ოჯახის შექმნაზე, მეუღლეთა თავისუფალი არჩევანისა და გაცნობიერებული თანხმობის საფუძველზე;</p>\r\n\r\n<p>b. შეზღუდული შესაძლებლობის მქონე პირთა უფლება, მიიღონ თავისუფალი და საპასუხისმგებლო გადაწყვეტილება შვილების რაოდენობასა და მათ დაბადებას შორის ინტერვალზე, ასევე მათი ასაკისათვის შესაფერისი ინფორმაცია და განათლება რეპროდუქციულ, ოჯახის დაგეგმვის საკითხებზე. მონაწილე სახელმწიფოები შესაბამის დამხარებას უწევენ შეზღუდული შესაძლებლობის მქონე პირებს ამ უფლებათა რეალიზებაში;</p>\r\n\r\n<p>c. შეზღუდული შესაძლებლობის მქონე პირების, მათ შორის ბავშვების მიერ ფერტილობის შენარჩუნების უფლება, სხვებთან თანასწორობის საფუძველზე.</p>\r\n\r\n<p>2. მონაწილე სახელმწიფოები უზრუნველყოფენ შეზღუდული შესაძლებლობის მქონე პირთა უფლება-მოვალეობებს მეურვეობის, მზრუნველობის, შვილად აყვანისა და სხვა მსგავს ინსტიტუტებთან მიმართებაში იმ შემთხვევაში, თუ წარმოდგენილი ცნებები გათვალისწინებულია ადგილობრივი კანონმდებლობით. ნებისმიერ შემთხვევაში, უპირატესობა ენიჭება ბავშვის ინტერესებს. მონაწილე სახელმწიფოები შესაბამის დახმარებას უწევენ შეზღუდული შესაძლებლობის მქონე პირებს ბავშვების აღზრდასა და მშობლის როლის შესრულებაში.</p>\r\n\r\n<p>3. მონაწილე სახელმწიფოები უზრუნველყოფენ შეზღუდული შესაძლებლობის მქონე ბავშვების ოჯახში ცხოვრების უფლებას სხვებთან თანასწორობის საფუძველზე. ამ უფლების რეალიზების, ასევე შეზღუდული შესაძლებლობის მქონე ბავშვების დამალვის, მიტოვების, უარყოფის ან სეგრეგაციის თავიდან აცილებისათვის, მონაწილე სახელმწიფოები, შეზღუდული შესაძლებლობის მქონე ბავშვებსა და მათ ოჯახებს წინასწარ უზრუნველყოფენ ამომწურავი ინფორმაციით, მომსახურებითა და დახმარებით.</p>\r\n\r\n<p>4. მონაწილე სახელმწიფოები უზრუნველყოფენ, რომ შეზღუდული შესაძლებლობის მქონე ბავშვები არ იქნენ დაშორებული მშობლებისაგან მათი სურვილის წინააღმდეგ, გარდა იმ შემთხვევებისა, როდესაც სასამართლოს დაქვემდებარებული კომპეტენტური ორგანოები, შესაბამისი კანონებისა და პროცედურების საფუძველზე, მიიღებენ გადაწყვეტილებას ბავშვის უპირატესი ინტერესებიდან გამომდინარე. ბავშვები არანაირი პირობით არ შეიძლება დაშორებულ იქნენ მშობლებისაგან თავად მათი, ერთ-ერთი ან ორივე მშობლის შეზღუდული შესაძლებლობის გამო.</p>\r\n\r\n<ul>\r\n	<li>5. შემთხვევაში, როდესაც ოჯახი ვერ ახერხებს შეზღუდული შესაძლებლობის მქონე ბავშვზე მზრუნველობას, მონაწილე სახელმწიფოები იღებენ ვალდებულებას, მიიღონ ყველა ზომა ალტერნატიული ზრუნვის ორგანიზებისათვის, შედარებით შორეული სანათესაოს ჩართვით, ხოლო ასეთი შესაძლებლობის არარსებობის შემთხვევაში კი, ოჯახურ გარემოსთან მიახლოვებული გარემოს შექმნით.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n', '', '', 'Independent living, family and private life', 'All people with disabilities should enjoy independent, private and family life', '<h3><a name="19">Article 19 - Living independently and being included in the community</a></h3>\r\n\r\n<p>States Parties to this Convention recognize the equal right of all persons with disabilities to live in the community, with choices equal to others, and shall take effective and appropriate measures to facilitate full enjoyment by persons with disabilities of this right and their full inclusion and participation in the community, including by ensuring that:</p>\r\n\r\n<p>(a) Persons with disabilities have the opportunity to choose their place of residence and where and with whom they live on an equal basis with others and are not obliged to live in a particular living arrangement;</p>\r\n\r\n<p>(b) Persons with disabilities have access to a range of in-home, residential and other community support services, including personal assistance necessary to support living and inclusion in the community, and to prevent isolation or segregation from the community;</p>\r\n\r\n<p>(c) Community services and facilities for the general population are available on an equal basis to persons with disabilities and are responsive to their needs.</p>\r\n\r\n<h3><a name="20">Article 20 Personal mobility</a></h3>\r\n\r\n<p>States Parties shall take effective measures to ensure personal mobility with the greatest possible independence for persons with disabilities, including by:</p>\r\n\r\n<p>(a) Facilitating the personal mobility of persons with disabilities in the manner and at the time of their choice, and at affordable cost;</p>\r\n\r\n<p>(b) Facilitating access by persons with disabilities to quality mobility aids, devices, assistive technologies and forms of live assistance and intermediaries, including by making them available at affordable cost;</p>\r\n\r\n<p>(c) Providing training in mobility skills to persons with disabilities and to specialist staff working with persons with disabilities;</p>\r\n\r\n<p>(d) Encouraging entities that produce mobility aids, devices and assistive technologies to take into account all aspects of mobility for persons with disabilities.</p>\r\n\r\n<h3><a name="22">Article 22 - Respect for privacy</a></h3>\r\n\r\n<p>1. No person with disabilities, regardless of place of residence or living arrangements, shall be subjected to arbitrary or unlawful interference with his or her privacy, family, or correspondence or other types of communication or to unlawful attacks on his or her honour and reputation. Persons with disabilities have the right to the protection of the law against such interference or attacks.</p>\r\n\r\n<p>2. States Parties shall protect the privacy of personal, health and rehabilitation information of persons with disabilities on an equal basis with others.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><a name="23">Article 23 - Respect for home and the family</a></h3>\r\n\r\n<p>1. States Parties shall take effective and appropriate measures to eliminate discrimination against persons with disabilities in all matters relating to marriage, family, parenthood and relationships, on an equal basis with others, so as to ensure that:</p>\r\n\r\n<p>(a) The right of all persons with disabilities who are of marriageable age to marry and to found a family on the basis of free and full consent of the intending spouses is recognized;</p>\r\n\r\n<p>(b) The rights of persons with disabilities to decide freely and responsibly on the number and spacing of their children and to have access to age-appropriate information, reproductive and family planning education are recognized, and the means necessary to enable them to exercise these rights are provided;</p>\r\n\r\n<p>(c) Persons with disabilities, including children, retain their fertility on an equal basis with others.</p>\r\n\r\n<p>2. States Parties shall ensure the rights and responsibilities of persons with disabilities, with regard to guardianship, wardship, trusteeship, adoption of children or similar institutions, where these concepts exist in national legislation; in all cases the best interests of the child shall be paramount. States Parties shall render appropriate assistance to persons with disabilities in the performance of their child-rearing responsibilities.</p>\r\n\r\n<p>3. States Parties shall ensure that children with disabilities have equal rights with respect to family life. With a view to realizing these rights, and to prevent concealment, abandonment, neglect and segregation of children with disabilities, States Parties shall undertake to provide early and comprehensive information, services and support to children with disabilities and their families.</p>\r\n\r\n<p>4. States Parties shall ensure that a child shall not be separated from his or her parents against their will, except when competent authorities subject to judicial review determine, in accordance with applicable law and procedures, that such separation is necessary for the best interests of the child. In no case shall a child be separated from parents on the basis of a disability of either the child or one or both of the parents.</p>\r\n\r\n<p>5. States Parties shall, where the immediate family is unable to care for a child with disabilities, undertake every effort to provide alternative care within the wider family, and failing that, within the community in a family setting.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '', '', '', '', '', '', '', '2017-07-26 09:19:50', '2017-07-26 09:27:01'),
(19, 5, 1, '111', 'files/services_items/1501061632_Eductation-icon.jpg', 'files/services_items/tumb/1501061632_Eductation-icon.jpg', 'Wed, Jul 26, 2017 9:36 AM', 'განათლება და დასაქმება ', 'სახელმწიფო ვალდებულია შეუქმნას შეზღუდული შესაძლებლობების მქონე პირს განათლების და დასაქმების ადექვატური პირობები ', '<p><strong>მუხლი</strong><strong> 24</strong></p>\r\n\r\n<p><strong><em>განათლება</em></strong></p>\r\n\r\n<p>1. მონაწილე სახელმწიფოები აღიარებენ შეზღუდული შესაძლებლობის მქონე პირთა უფლებას განათლებაზე. ამ უფლების დისკრიმინაციის გარეშე და თანაბარ პირობებში რეალიზებისათვის, მონაწილე სახელმწიფოები უზრუნველყოფენ ინკლუზიური განათლების სისტემის დანერგვასა და მთელი ცხოვრების მანძილზე განათლების მიღების მისაწვდომობას, რაც ემსახურება:</p>\r\n\r\n<p>a. პიროვნების პოტენციალის სრულ გამოვლენას, ღირსებისა და საკუთარი თავის პატივისცემის გაღვივებას, ადამიანის უფლებების, ძირითადი თავისუფლებებისა და ადამიანთა მრავალფეროვნების პატივისცემის განმტკიცებას;</p>\r\n\r\n<p>b. შეზღუდული შესაძლებლობის მქონე პირთა მიერ საკუთარი პიროვნების, ნიჭისა და შემოქმედებითი უნარების განვითარებასა და გონებრივი თუ ფიზიკური შესაძლებლობების მაქსიმალურ გამოვლენას;</p>\r\n\r\n<p>c. შეზღუდული შესაძლებლობის მქონე პირთა უზრუნველყოფა თავისუფალ საზოგადოებაში ეფექტური ჩართვის შესაძლებლობით.</p>\r\n\r\n<p>2. აღნიშნული უფლების რეალიზებისათვის, მონაწილე ქვეყნები უზრუნველყოფენ, რომ:</p>\r\n\r\n<p>a. არ მოხდეს შეზღუდული შესაძლებლობის მქონე პირების გარიყვა ზოგადი განათლების სისტემიდან შეზღუდული შესაძლებლობის გამო; ამავე მიზეზით არ მოხდეს მათი გათიშვა დაწყებითი ან საშუალო სავალდებულო უფასო განათლების სისტემიდან;</p>\r\n\r\n<p>b. შეზღუდული შესაძლებლობის მქონე პირთათვის თანაბრად მისაწვდომი იყოს ინკლუზიური, ხარისხიანი და უფასო დაწყებითი და საშუალო განათლება მათი საცხოვრებელი ადგილის მიხედვით;</p>\r\n\r\n<p>c. უზრუნველყოფილი იქნა გონივრული ჩართულობა ინდივიდუალური მოთხოვნების გათვალისწინებით;</p>\r\n\r\n<p>d. ეფექტური განათლების მიღების ხელშეწყობის მიზნით, შეზღუდული შესაძლებლობის მქონე პირები იღებდნენ საჭირო დახმარებას ზოგადი განათლების სისტემის ფარგლებში;</p>\r\n\r\n<p>e. სრული ინკლუზიის მიზნით, აკადემიური და სოციალური განვითარების მაქსიმალურად ხელშემწყობ გარემოში, უზრუნველყოფილი იქნას ეფექტური ინდივიდუალური დამხმარე ზომები.</p>\r\n\r\n<p>3. განათლებისა პროცესსა და საზოგადოებრივ ცხოვრებაში სრული და თანაბარი მონაწილეობის გაადვილების მიზნით, მონაწილე სახელმწიფოები შეზღუდული შესაძლებლობის მქონე პირებს უზრუნველყოფენ ცხოვრებისა და სოციალიზაციის უნარ-ჩვევების დაუფლების შესაძლებლობით, მათ შორის:</p>\r\n\r\n<p>a. ხელს უწყობენ ბრაილის, ალტერნატიული შრიფტების, გამაძლიერებელი და ალტერნატიული მეთოდების, ურთიერთობის ხერხებისა და ფორმატების, ასევე ორიენტაციისა და მობილურობის უნარ-ჩვევების ათვისებას, თანატოლთა მხრიდან მხარდაჭერასა და დამრიგებლობას;</p>\r\n\r\n<p>b. ხელს უწყობენ ჟესტების ენისა შესწავლასა და სმენის შეზღუდვის მქონე პირთა ლინგვისტურ თვითმყოფადობას;</p>\r\n\r\n<p>c. უზრუნველყოფენ, რომ უსინათლო, ყრუ და უსინათლო-ყრუ ადამიანების, მათ შორის ბავშვების განათლება ხორციელდებოდეს ინდივიდისათვის შესაფერისი იმ საკომუნიკაციო ენების, მეთოდებისა და ხერხების საშუალებით, რომელიც მაქსიმალურად უწყობს ხელს ცოდნის ათვისებასა და სოციალურ განვითარებას.</p>\r\n\r\n<p>4. აღნიშნული უფლების რეალიზების უზრუნველსაყოფად, მონაწილე სახელმწიფოები იღებენ შესაბამის ზომებს სწავლების პროცესში ჟესტების ენის და/ან ბრაილის ანბანის მცოდნე, მათ შორის შეზღუდული შესაძლებლობის მქონე პედაგოგების ჩასართავად, რომლებიც ასევე მოამზადებენ განათლების ყველა საფეხურზე მომუშავე პედაგოგებსა და პერსონალს. ასეთი მომზადება მოიცავს შეზღუდული შესაძლებლობის შესახებ ცნობიერების ამაღლებასა და შეზღუდული შესაძლებლობის მქონე პირთა დახმარებას კომუნიკაციის გამაძლიერებელი, ალტერნატიული მეთოდების, საშუალებებისა და ფორმატების, სასწავლო ტექნიკისა და მასალების გამოყენებით.</p>\r\n\r\n<p>5. მონაწილე სახელმწიფოები უზრუნველყოფენ შეზღუდული შესაძლებლობის მქონე პირთათვის ზოგადი უმაღლესი, პროფესიული, უფროსებისათვის განკუთვნილი კურსებისა და უწყვეტი განათლების თანაბარ მისაწვდომობას ყოველგვარი დისკრიმინაციის გარეშე. აღნიშნული მიზნით, მონაწილე ქვეყნები უზრუნველყოფენ შეზღუდული შესაძლებლობის მქონე პირთა გონივრულ ჩართულობას.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>მუხლი 27<br />\r\nშრომა და დასაქმება<br />\r\n1. მონაწილე სახელმწიფოები აღიარებენ შეზღუდული შესაძლებლობის მქონე პირთა უფლებას შრომაზე, სხვებთან თანასწორობის საფუძველზე; აღნიშნული მოიცავს საკუთარი შრომით ცხოვრების უზრუნველყოფის შესაძლებლობის მოპოვების უფლებას, მაშინ როდესაც შრომითი ბაზარი და სამუშაო გარემო არის ღია, ინკლუზიური და მისაწვდომი შეზღუდული შესაძლებლობის მქონე პირთათვის. მონაწილე სახელმწიფოები, შესაბამისი საფეხურების გავლით, მათ შორის საკანონმდებლო დონეზე, იცავენ და ხელს უწყობენ შრომის უფლების რეალიზებას, მათ შორის მათთვის, ვინც შეზღუდვა მიიღო შრომითი მოვალეობის შესრულებისას, მათ შორის, რათა: &nbsp; &nbsp; &nbsp;<br />\r\na. აიკრძალოს შეზღუდული შესაძლებლობით გამოწვეული ნებისმიერი დისკრიმინაცია დასაქმების ყველა ფორმასთან დაკავშირებულ საკითხებში, მათ შორის: სამუშაოზე აყვანის პირობები, დაქირავება და დასაქმება, სამუშაო ადგილის შენარჩუნება, სამსახურებრივი წინსვლა, სამუშაო ადგილის უსაფრთხოება და &nbsp;ჯანსაღი გარემო;<br />\r\nb. დაცულ იქნეს შეზღუდული შესაძლებლობის მქონე პირთა თანაბარი უფლება შრომის სამართლიან და ხელსაყრელ პირობებზე, რაც მოიცავს თანაბარ შესაძლებლობებსა და ანაზღაურებას &nbsp;ერთი და იმავე შრომის შესრულებისათვის, უსაფრთხო და ჯანსაღ სამუშაო გარემოს, მათ შორის დაცვას ძალადობისაგან და პრეტენზიის დაკმაყოფილებაზე.<br />\r\nc. უზრუნველოფილ იქნეს შეზღუდული შესაძლებლობის მქონე პირთა თანაბარი Uუფლება &nbsp;საკუთარი შრომის და პროფკავშირული უფლებების გამოყენებაზე;<br />\r\nd. უზრუნველყოფილ იქნეს შეზღუდული შესაძლებლობის მქონე პირთათვის, ტექნიკური და პროფესიული ორიენტაციის პროგრამების, დასაქმების სამსახურების, პროფესიული და უწყვეტი განათლების მისაწვდომობა;<br />\r\ne. ხელი შეეწყოს შრომით ბაზარზე შეზღუდული შესაძლებლობის მქონე პირთა დასაქმებისა და სამსახურებრივი წინსვლის შესაძლებლობებს, ისევე როგორც სამუშაო ადგილის მოძიების, შენარჩუნებისა და მუშაობის განახლებაში ხელშეწყობას;<br />\r\nf. მხარდაჭერილ იქნეს თვითდასაქმების, მეწარმეობის, კოოპერატივების განვითარებისა და საკუთარი ბიზნესის ორგანიზების შესაძლებლობები;<br />\r\ng. მოხდეს შეზღუდული შესაძლებლობის მქონე პირთა დასაქმება საჯარო სექტორში;<br />\r\nh. ხელი შეეწყოს შეზღუდული შესაძლებლობის მქონე პირთა კერძო სექტორში დასაქმებას შესაბამისი პოლიტიკისა და ზომების გატარებით, რაც შესაძლოა მოიცავდეს პოზიტიურ სამოქმედო პროგრამებს, სტიმულირებას და სხვა ზომებს;<br />\r\ni. უზრუნველყოფილ იქნეს სამუშაო ადგილის შეზღუდული შესაძლებლობის მქონე პირთა საჭიროების შესაბამისად მოწყობა;<br />\r\nj. ხელი შეეწყოს შეზღუდული შესაძლებლობის მქონე პირთა მიერ შრომითი გამოცდილების ღია შრომითი ბაზარზე მიღებას;<br />\r\nk. ხელი შეეწყოს შეზღუდული შესაძლებლობის მქონე პირთათვის პროფესიული და საკვალიფიკაციო რეაბილიტაციის, სამუშაო ადგილის შენარჩუნებისა და სამუშაოზე დაბრუნების პროგრამების განხორციელებას.<br />\r\n2. მონაწილე სახელმწიფოებმა უნდა უზრუნველყონ შეზღუდული შესაძლებლობის მქონე პირთა მონობისა და დამოკიდებულ მდგომარეობაში ყოფნის, იძულებითი და სავალდებულო შრომისაგან დაცვა სხვათა თანაბრად.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '', '', 'Education and Employment', 'State is responsible for creating adequate conditions for studying and employment', '<h3><a name="24">Article 24 - Education</a></h3>\r\n\r\n<p>1. States Parties recognize the right of persons with disabilities to education. With a view to realizing this right without discrimination and on the basis of equal opportunity, States Parties shall ensure an inclusive education system at all levels and life long learning directed to:</p>\r\n\r\n<p>(a) The full development of human potential and sense of dignity and self-worth, and the strengthening of respect for human rights, fundamental freedoms and human diversity;</p>\r\n\r\n<p>(b) The development by persons with disabilities of their personality, talents and creativity, as well as their mental and physical abilities, to their fullest potential;</p>\r\n\r\n<p>(c) Enabling persons with disabilities to participate effectively in a free society.</p>\r\n\r\n<p>2. In realizing this right, States Parties shall ensure that:</p>\r\n\r\n<p>(a) Persons with disabilities are not excluded from the general education system on the basis of disability, and that children with disabilities are not excluded from free and compulsory primary education, or from secondary education, on the basis of disability;</p>\r\n\r\n<p>(b) Persons with disabilities can access an inclusive, quality and free primary education and secondary education on an equal basis with others in the communities in which they live;</p>\r\n\r\n<p>(c) Reasonable accommodation of the individual&#39;s requirements is provided;</p>\r\n\r\n<p>(d) Persons with disabilities receive the support required, within the general education system, to facilitate their effective education;</p>\r\n\r\n<p>(e) Effective individualized support measures are provided in environments that maximize academic and social development, consistent with the goal of full inclusion.</p>\r\n\r\n<p>3. States Parties shall enable persons with disabilities to learn life and social development skills to facilitate their full and equal participation in education and as members of the community. To this end, States Parties shall take appropriate measures, including:</p>\r\n\r\n<p>(a) Facilitating the learning of Braille, alternative script, augmentative and alternative modes, means and formats of communication and orientation and mobility skills, and facilitating peer support and mentoring;</p>\r\n\r\n<p>(b) Facilitating the learning of sign language and the promotion of the linguistic identity of the deaf community;</p>\r\n\r\n<p>(c) Ensuring that the education of persons, and in particular children, who are blind, deaf or deafblind, is delivered in the most appropriate languages and modes and means of communication for the individual, and in environments which maximize academic and social development.</p>\r\n\r\n<p>4. In order to help ensure the realization of this right, States Parties shall take appropriate measures to employ teachers, including teachers with disabilities, who are qualified in sign language and/or Braille, and to train professionals and staff who work at all levels of education. Such training shall incorporate disability awareness and the use of appropriate augmentative and alternative modes, means and formats of communication, educational techniques and materials to support persons with disabilities.</p>\r\n\r\n<p>5. States Parties shall ensure that persons with disabilities are able to access general tertiary education, vocational training, adult education and lifelong learning without discrimination and on an equal basis with others. To this end, States Parties shall ensure that reasonable accommodation is provided to persons with disabilities.</p>\r\n\r\n<h3><a name="27">Article 27 - Work and employment</a></h3>\r\n\r\n<p>1. States Parties recognize the right of persons with disabilities to work, on an equal basis with others; this includes the right to the opportunity to gain a living by work freely chosen or accepted in a labour market and work environment that is open, inclusive and accessible to persons with disabilities. States Parties shall safeguard and promote the realization of the right to work, including for those who acquire a disability during the course of employment, by taking appropriate steps, including through legislation, to, inter alia:</p>\r\n\r\n<p>(a) Prohibit discrimination on the basis of disability with regard to all matters concerning all forms of employment, including conditions of recruitment, hiring and employment, continuance of employment, career advancement and safe and healthy working conditions;</p>\r\n\r\n<p>(b) Protect the rights of persons with disabilities, on an equal basis with others, to just and favourable conditions of work, including equal opportunities and equal remuneration for work of equal value, safe and healthy working conditions, including protection from harassment, and the redress of grievances;</p>\r\n\r\n<p>(c) Ensure that persons with disabilities are able to exercise their labour and trade union rights on an equal basis with others;</p>\r\n\r\n<p>(d) Enable persons with disabilities to have effective access to general technical and vocational guidance programmes, placement services and vocational and continuing training;</p>\r\n\r\n<p>(e) Promote employment opportunities and career advancement for persons with disabilities in the labour market, as well as assistance in finding, obtaining, maintaining and returning to employment;</p>\r\n\r\n<p>(f) Promote opportunities for self-employment, entrepreneurship, the development of cooperatives and starting one&#39;s own business;</p>\r\n\r\n<p>(g) Employ persons with disabilities in the public sector;</p>\r\n\r\n<p>(h) Promote the employment of persons with disabilities in the private sector through appropriate policies and measures, which may include affirmative action programmes, incentives and other measures;</p>\r\n\r\n<p>(i) Ensure that reasonable accommodation is provided to persons with disabilities in the workplace;</p>\r\n\r\n<p>(j) Promote the acquisition by persons with disabilities of work experience in the open labour market;</p>\r\n\r\n<p>(k) Promote vocational and professional rehabilitation, job retention and return-to-work programmes for persons with disabilities.</p>\r\n\r\n<p>2. States Parties shall ensure that persons with disabilities are not held in slavery or in servitude, and are protected, on an equal basis with others, from forced or compulsory labour.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '', '', '', '', '', '', '', '2017-07-26 09:33:52', '2017-07-26 09:36:31');
INSERT INTO `ServicesItem` (`id`, `menu_id`, `main`, `pos`, `image`, `tumb`, `date`, `title_ge`, `short_text_ge`, `full_text_ge`, `description_ge`, `keywords_ge`, `title_en`, `short_text_en`, `full_text_en`, `description_en`, `keywords_en`, `title_ru`, `short_text_ru`, `full_text_ru`, `description_ru`, `keywords_ru`, `created_at`, `updated_at`) VALUES
(20, 5, 1, '1', 'files/services_items/1502101901_medicine-box.png', 'files/services_items/tumb/1502101901_medicine-box.png', 'Mon, Nov 20, 2017 10:38 AM', 'ჯანმრთელობა და რეაბილიტაცია', 'ჯანდაცვისა და რეაბილიტაციის სერვისები უნდა იყოს ხელმისაწვდომი შეზღუდული შესაძლებლობების მქონე პირთათვის', '<p><strong>მუხლი</strong><strong> 25</strong></p>\r\n\r\n<p><strong><em>ჯანმრთელობა</em></strong></p>\r\n\r\n<p>1. მონაწილე სახელმწიფოები აღიარებენ შეზღუდული შესაძლებლობის მქონე პირთა უფლებას, ისარგებლონ ჯანმრთელობის დაცვის უმაღლესი ხელმისაწვდომი სტანდარტებით, შეზღუდული შესაძლებლობის საფუძველზე აღმოცენებული ყოველგვარი დისკრიმინაციის გარეშე. მონაწილე სახელმწიფოები იღებენ ყველა შესაბამის ზომას, შეზღუდული შესაძლებლობის მქონე პირთათვის ჯანმრთელობის დაცვის მომსახურებების მისაწვდომობის უზრუნველყოფისათვის; ითვალისწინებენ გენდერულ სპეციფიკას, მათ შორის, ჯანმრთელობის მდგომარეობის გამო სარეაბილიტაციო მომსახურებაში. კერძოდ, მონაწილე სახელმწიფოები:</p>\r\n\r\n<p>a. შეზღუდული შესაძლებლობის მქონე პირებს უზრუნველყოფენ უფასო ან ხელმისაწვდომი სტანდარტების, ხარისხისა და დონის ჯანმრთელობის დაცვის მომსხურებითა და პროგრამებით სხვათა თანაბრად, მათ შორის სექსუალური და რეპროდუქციული ჯანმრთელობის სფეროსა და ზოგადად მოსახლეობაზე გათვლილი საზოგადოებრივი პროგრამების ჩათვლით;</p>\r\n\r\n<p>b. შეზღუდული შესაძლებლობის მქონე პირებს უზრუნველყოფენ უშუალოდ შეზღუდული შესაძლებლობის გამო აუცილებელი ჯანდაცვის სფეროს მომსახურებით, მათ შორის ადრეული დიაგნოსტიკით, შესაბამის შემთხვევებში &ndash; კორექციითა და მომსახურებით, რომლის მიზანია შემდგომი შეზღუდულობის მინიუმამდე დაყვანა და პრევენცია, მათ შორის, ბავშვებსა და მოხუცებში;</p>\r\n\r\n<p>c. სამედიცინო მომსახურების ორგანიზებას ახდენენ აღნიშნული კატეგორიის პირთა საცხოვრებელ თემთან ახლოს, მათ შორის სოფლად;</p>\r\n\r\n<p>d. ჯანდაცვის პროფესიონალებს მოსთხოვონ თანაბარი ხარისხის მომსახურება გაუწიონ შეზღუდული შესაძლებლობის მქონე პირებს, მათ შორის, თავისუფალი და ინფორმირებული თანხმობის საფუძველზე, ადამიანის უფლებების, შეზღუდული შესაძლებლობის მქონე პირთა ავტონომიისა და საჭიროებათა შესახებ ცნობიერების ამაღლებით, ტრენინგების, სახელმწიფო და კერძო ჯანდაცვის სისტემაში ეთიკური სტანდარტების მიღებით;</p>\r\n\r\n<p>e. კრძალავენ შეზღუდული შესაძლებლობის მქონე პირთა დისკრიმინაციას სამედიცინო დაზღვევის გაცემისა და სიცოცხლის დაზღვევის დროს მაშინ როდესაც ეს უკანასკნელი ნებადართულია ეროვნული კანონმდებლობით და ითვალისწინებენ მათ გაცემას სამართლიან და გონივრულ პირობებში;</p>\r\n\r\n<p>f. არ დაუშვებენ შეზღუდული შესაძლებლობით გამოწვეულ დისკრიმინაციულ უარს ჯანდაცვისა და სამედიცინო მომსახურებაში, ასევე საკვებისა და სითხის მიღებაში:</p>\r\n\r\n<p><strong>მუხლი</strong><strong> 26</strong></p>\r\n\r\n<p><strong><em>აბილიტაცია</em></strong> <strong><em>და</em></strong> <strong><em>რეაბილიტაცია</em></strong></p>\r\n\r\n<p>1. მონაწილე სახელმწიფოები იღებენ ეფექტურ და შესაბამის ზომებს, მათ შორის, კოლეგიალური მხარდაჭერის გამოყენებითაც, რათა უზრუნველყონ შეზღუდული შესაძლებლობის მქონე პირთათვის მაქსიმალური დამოუკიდებლობის, სრული ფიზიკური, მენტალური, სოციალური და პროფესიული შესაძლებლობების მიღწევისა და გამოყენების შესაძლებლობა. აღნიშნული მიზნით, მონაწილე სახელმწიფოები ორგანიზებას უკეთებენ, აძლერებენ და განავრცობენ ყოვლისმომცველი სარეაბილიტაციო და სააბილიტაციო სამსახურებსა და პროგრამებს, კერძოდ ჯანდაცვის, დასაქმების, განათლებისა და სოციალური მომსახურების სფეროში იმგვარად, რომ აღნიშნული სამსახურები და პროგრამები:</p>\r\n\r\n<p>a. განხორციელებულ იქნეს მაქსიმალურად ადრეულ ეტაპზე და ეფუძნებოდეს ინდივიდის საჭიროებებისა და ძლიერი მხარეების მულტიდისციპლინურ შეფასებას;</p>\r\n\r\n<p>b. ხელს უწყობდნენ საზოგადოებრივი ცხოვრების ყველა სფეროში ჩართულობას და ინტეგრირებას, არის ნებაყოფლობითი და მისაწვდომი შეზღუდული შესაძლებლობის მქონე პირთა საცხოვრებელი თემის მაქსიმალურ სიახლოვეში, მათ შორის სოფლად;</p>\r\n\r\n<p>2. მონაწილე სახელმწიფოებმა ხელი უნდა შეუწყონ სააბილიტაციო და სარეაბილიტაციო მომსახურებაში დასაქმებული სპეციალისტებისა და პერსონალის პირველად და შემდგომ განათლებას;</p>\r\n\r\n<ol>\r\n	<li>მონაწილე სახელმწიფოებმა ხელი უნდა შეუწყონ შეზღუდული შესაძლებლობის მქონე პირთათვის განკუთვნილი, სააბილიტაციო და სარეაბილიტაციო მიზნით შექმნილი დამხმარე საშუალებებისა და ტექნოლოგიების მისაწვდომობას, შესწავლასა და გამოყენებას.</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n', '', '', 'Health and rehabilitation', 'Health and rehabilitation services should be accessible', '<h3><a name="25">Article 25 - Health</a></h3>\r\n\r\n<p>States Parties recognize that persons with disabilities have the right to the enjoyment of the highest attainable standard of health without discrimination on the basis of disability. States Parties shall take all appropriate measures to ensure access for persons with disabilities to health services that are gender-sensitive, including health-related rehabilitation. In particular, States Parties shall:</p>\r\n\r\n<p>(a) Provide persons with disabilities with the same range, quality and standard of free or affordable health care and programmes as provided to other persons, including in the area of sexual and reproductive health and population-based public health programmes;</p>\r\n\r\n<p>(b) Provide those health services needed by persons with disabilities specifically because of their disabilities, including early identification and intervention as appropriate, and services designed to minimize and prevent further disabilities, including among children and older persons;</p>\r\n\r\n<p>(c) Provide these health services as close as possible to people&#39;s own communities, including in rural areas;</p>\r\n\r\n<p>(d) Require health professionals to provide care of the same quality to persons with disabilities as to others, including on the basis of free and informed consent by, inter alia, raising awareness of the human rights, dignity, autonomy and needs of persons with disabilities through training and the promulgation of ethical standards for public and private health care;</p>\r\n\r\n<p>(e) Prohibit discrimination against persons with disabilities in the provision of health insurance, and life insurance where such insurance is permitted by national law, which shall be provided in a fair and reasonable manner;</p>\r\n\r\n<p>(f) Prevent discriminatory denial of health care or health services or food and fluids on the basis of disability.</p>\r\n\r\n<h3><a name="26">Article 26 - Habilitation and rehabilitation</a></h3>\r\n\r\n<p>1. States Parties shall take effective and appropriate measures, including through peer support, to enable persons with disabilities to attain and maintain maximum independence, full physical, mental, social and vocational ability, and full inclusion and participation in all aspects of life. To that end, States Parties shall organize, strengthen and extend comprehensive habilitation and rehabilitation services and programmes, particularly in the areas of health, employment, education and social services, in such a way that these services and programmes:</p>\r\n\r\n<p>(a) Begin at the earliest possible stage, and are based on the multidisciplinary assessment of individual needs and strengths;</p>\r\n\r\n<p>(b) Support participation and inclusion in the community and all aspects of society, are voluntary, and are available to persons with disabilities as close as possible to their own communities, including in rural areas.</p>\r\n\r\n<p>2. States Parties shall promote the development of initial and continuing training for professionals and staff working in habilitation and rehabilitation services.</p>\r\n\r\n<p>3. States Parties shall promote the availability, knowledge and use of assistive devices and technologies, designed for persons with disabilities, as they relate to habilitation and rehabilitation.</p>\r\n', '', '', '', '', '', '', '', '2017-07-26 09:40:43', '2017-11-20 10:38:06'),
(21, 5, 1, '111', 'files/services_items/1502101681_pict--business-statistics-business---vector-stencils-library.png--diagram-flowchart-example.png', 'files/services_items/tumb/1502101681_pict--business-statistics-business---vector-stencils-library.png--diagram-flowchart-example.png', 'Mon, Nov 20, 2017 10:36 AM', 'სტატისტიკა და მონაცემთა შეგროვება', 'სახელმწიფო ვალდებულია აწარმოოს შშმ პირთა სტატისტიკა', '<p>1. &nbsp;მონაწილე სახელმწიფოები ვალდებულებას იღებენ მოიძიონ შესაბამისი ინფორმაცია, მათ შორის სტატისტიკური და კვლევითი მონაცემები, რაც უზრუნველყოფს წინამდებარე კონვენციის ეფექტური განხორციელებისათვის საჭირო პოლიტიკის შემუშავებასა და განხორციელებას. აღნიშნული ინფორმაციის მოძიებისა და გამოყენების პროცესში: &nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n\r\n<p>a. დაცული უნდა იქნას იურიდიულად დადგენილი გარანტიები, მათ შორის კანონმდებლობა მონაცემთა დაცვის შესახებ, რათა უზრუნველყოფილი იქნას შეზღუდული შესაძლებლობის მქონე პირთა პირადი ცხოვრების კონფიდენციალურობა და ხელშეუხებლობა;</p>\r\n\r\n<p>b. დაცული იქნას ადამიანის უფლებებისა და ძირითად თავისუფლებათა დაცვის შესახებ საერთაშორისოდ აღიარებული ნორმები, ასევე მონაცემთა შეგროვებისა და სტატისტიკის გამოყენების&nbsp; ეთიკური პრინციპები.&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</p>\r\n\r\n<p>2. წინამდებარე მუხლის გათვალისწინებით მოპოვებული ინფორმაციის გავრცელება ხდება შესაბამისი წესის მიხედვით და გამოიყენება მონაწილე ქვეყნების მიერ წინამდებარე კონვენციით გათვალსწინებული ვალდებულებების შესრულების შეფასებისათვის, ასევე შეზღუდული შესაძლებლობის მქონე პირთა მიერ საკუთარი უფლებების რეალიზების პროცესში არსებული ბარიერების გამოვლენასა და გადაჭრაში. &nbsp;&nbsp;</p>\r\n\r\n<p>3. მონაწილე სახელმწიფოები იღებენ ვალდებულებას გაავრცელონ აღნიშნული სტატისტიკური მონაცემები და უზრუნველყონ მათი მისაწვდომობა შეზღუდული შესაძლებლობის მქონე&nbsp; და ასევე სხვა პირთათვის.</p>\r\n', '', 'სტატისტიკა, შშმ პირები, მონაცემები', 'Statistics and data collection', 'State is responsible to conduct sufficient data collection of persons with disabilities', '<h2>Article 31&nbsp;</h2>\r\n\r\n<p>1. States Parties undertake to collect appropriate information, including statistical and research data, to enable them to formulate and implement policies to give effect to the present Convention. The process of collecting and maintaining this information shall:</p>\r\n\r\n<p>(a) Comply with legally established safeguards, including legislation on data protection, to ensure confidentiality and respect for the privacy of persons with disabilities;</p>\r\n\r\n<p>(b) Comply with internationally accepted norms to protect human rights and fundamental freedoms and ethical principles in the collection and use of statistics.</p>\r\n\r\n<p>2. The information collected in accordance with this article shall be disaggregated, as appropriate, and used to help assess the implementation of States Parties&#39; obligations under the present Convention and to identify and address the barriers faced by persons with disabilities in exercising their rights.</p>\r\n\r\n<p>3. States Parties shall assume responsibility for the dissemination of these statistics and ensure their accessibility to persons with disabilities and others.</p>\r\n', '', '', '', '', '', '', '', '2017-08-07 10:28:02', '2017-11-20 10:36:27'),
(22, 5, 1, '111', 'files/services_items/1502102562_checklist-questionnaire.png', 'files/services_items/tumb/1502102562_checklist-questionnaire.png', 'Mon, Nov 20, 2017 10:26 AM', 'კონვენციის განხორციელების მონიტორინგი', 'კონვენციის განხორციელება უწყებებს შორის კოორდინირებით მიიღწევა.', '<p>&nbsp;</p>\r\n\r\n<p><strong><em>მუხლი 33 </em></strong></p>\r\n\r\n<p><strong><em>განხორციელება</em></strong>&nbsp;<strong><em>და</em></strong>&nbsp;<strong><em>მონიტორინგი</em></strong>&nbsp;<strong><em>ეროვნულ</em></strong>&nbsp;<strong><em>დონეზე</em></strong></p>\r\n\r\n<p>1. მონაწილე სახელმწიფოები, მათი მმართველობის სისტემის შესაბამისად, სახელმწიფო ადმინისტრაციის შიგნით ასახელებენ ერთი ან რამოდენიმე საკონტაქტო უწყებას, რომელიც კურირებას გაუწევს წინამდებარე კონვენციის განხორციელებასთან დაკავშირებულ საკითხებს; სათანადო დონეზე შეისწავლიან ხელისუფლებაში სხვადასხვა სექტორებსა და დონეზე შესაბამისი აქტივობის ხელისშემწყობი მაკოორდინირებელი მექანიზმის შექმნისა და დასახელების შესაძლებლობას.</p>\r\n\r\n<p>2. მონაწილე სახელმწიფოები, მათი ადმინისტრაციულ-სამართლებრივი სისტემის შესაბამისად, ქვეყნის შიგნით ინარჩუნებენ, აძლიერებენ, ასახელებენ ან აყალიბებენ წინამდებარე კონვენციის პოპულარიზაციის, დაცვისა და განხორციელების მონიტორინგისათვის აუციელებელ სტრუქტურას, რომელიც საჭიროების მიხედვით მოიცავს ერთ, ან რამოდენიმე დამოუკიდებელ მექანიზმს. ასეთი სახის მექანიზმის დასახელებისა ან შექმნის შემთხვევაში, მონაწილე ქვეყნები მხედველობაში იღებენ ადამიანის უფლებების დაცვისა და პოპულარიზაციის ეროვნული ინსტიტუტების სტატუსსა და ფუნქციონირების პრინციპებს.&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n\r\n<p>3. სამოქალაქო საზოგადოება, კერძოდ შეზღუდული შესაძლებლობის მქონე პირები და მათი წარმომადგენელი ორგანიზაციები, სრულად უნდა ჩაერთონ და მონაწილეობა მიიღონ მონიტორინგის პროცესში.&nbsp;</p>\r\n\r\n<p><strong>მუხლი</strong><strong>&nbsp;34</strong></p>\r\n\r\n<p><strong><em>შეზღუდული</em></strong>&nbsp;<strong><em>შესაძლებლობის</em></strong>&nbsp;<strong><em>მქონე</em></strong>&nbsp;<strong><em>პირთა</em></strong>&nbsp;<strong><em>უფლებების</em></strong>&nbsp;<strong><em>კომიტეტი</em></strong></p>\r\n\r\n<p>1. ქვემოთ გათვალისწინებული ფუნქციების განსახორციელებლად უნდა შეიქმნას შეზღუდული შესაძლებლობის მქონე პირთა უფლებების კომიტეტი, (შემდგომში წოდებული &ldquo;კომიტეტი&rdquo;).</p>\r\n\r\n<p>2. წინამდებარე კონვენციის ძალაში შესვლის მომენტისათვის კომიტეტი შედგება თორმეტი ექსპერტისაგან. კონვენციის დამატებითი სამოცი რატიფიკაციის, ან შეერთების შემდგომ, კომიტეტის შემადგენლობა იზრდება ექვსი წევრით და აღწევს მაქსიმალურ რაოდენობას თვრამეტი წევრის ოდენობით.</p>\r\n\r\n<p>3. კომიტეტის წევრები მოქმედებენ ინდივიდუალური უფლებამოსილების ფარგლებში და უნდა ხასიათდებოდნენ მაღალი მორალური თვისებებით, აღიარებული კომპეტენტურობითა და გამოცდილებით წინამდებარე კონვენციით გათვალისწინებულ საკითხებთან მიმართებაში. საკუთარი კანდიდატების დასახელების დროს მონაწილე სახელმწიფოებმა სათანადოდ უნდა გაითვალისწინონ წინამდებარე კონვენციის 4.3 მუხლში დადგენილი მოთხოვნები.</p>\r\n\r\n<p>4. კომიტეტის წევრები აირჩევიან მონაწილე სახელმწიფოების მიერ, თანაბარი გეოგრაფიული განაწილების, ცივილიზაციის სხვადასხვა ფორმებისა და ძირითადი სამართლებრივი სისტემების, ბალანსირებული გენდერული პოლიტიკისა და შეზღუდული შესაძლებლობის მქონე ექსპერტების მონაწილეობის გათვალისწინებით.&nbsp;&nbsp;&nbsp; &nbsp;</p>\r\n\r\n<p>5. კომიტეტის წევრები აირჩევიან ფარული კენჭისყრით, მონაწილე სახელმწიფოების კონფერენციაზე, მათ მიერ წარმოდგენილი საკუთარი მოქალაქეების სიიდან. კონფერენციის მსვლელობისას, რომლის ქვორუმს მონაწილე სახელმწიფოების ორი მესამედი შედგენს,&nbsp; კომიტეტში აირჩევიან პირები, რომელთაც ხმათა უმრავლესობა და მონაწილე სახელმწიფოებიდან დამსწრეთა და კენჭისყრაში მონაწილეთა აბსოლუტური უმრავლესობის ხმები მიიღეს.&nbsp; &nbsp;&nbsp;&nbsp;</p>\r\n\r\n<p>6. პირველადი არჩევნები ტარდება წინამდებარე კონვენციის ძალაში შესვლიდან &nbsp;არა უგვიანეს ექვსი თვისა. ყოველ არჩევნებამდე სულ მცირე ოთხი თვით ადრე, გაერთიანებული ერების ორგანიზაციის გენერალური მდივანი წერილობით მიმართავს მონაწილე სახელმწიფოებს, ორი თვის ვადაში კანდიდატურების შესახებ ინფორმაციის მიწოდების თაობაზე. შემდგომ გენერალური მდივანი მოამზადებს ყველა დასახელებული კანდიდატის ანბანის მიხედვით შედგენილ სიას, იმ მონაწილე სახელმწიფოს მითითებით, რომელმაც დაასახელა კანდიდატი და მიაწოდებს მას მონაწილე სახელმწიფოებს.</p>\r\n\r\n<p>7. კომიტეტის წევრები აირჩევიან ოთხი წლის ვადით. მათი მეორე ვადით არჩევა დაშვებულია მხოლოდ ერთხელ. თუმცა პირველად არჩეული ექვსი წევრის საარჩევნო ვადა იწურება ორ წელიწადში; პირველი არჩევნებიდან უმოკლეს ვადაში აღნიშნული ექვსი წევრის ვინაობა შეირჩევა კენჭისყრით, შეხვედრის თავმჯდომარის მიერ, ისე როგორც ეს მითითებულია წინამდებარე მუხლის მე-5 პუნქტში.</p>\r\n\r\n<p>8. კომიტეტის ექვსი დამატებითი წევრის არჩევა ხდება რეგულარული არჩევნების დროს, წინამდებარე მუხლში მოცემული შესაბამისი დებულებების შესაბამისად.</p>\r\n\r\n<p>9. კომიტეტის წევრი გარდაცვლების, გადადგომის ან ნებისმიერი სხვა მიზეზით მასზე დაკისრებული ფუნქციების შეუსრულებლობის შემთხვევაში, მონაწილე სახელმწიფო, რომელმაც იგი დაასახელა, შეცვლის მას სხვა, იმავე კვალიფიკაციის მქონე ექსპერტით, რომელიც აკმაყოფილებს წინამდებარე მუხლით გათვალისწინებულ დებულებებს.</p>\r\n\r\n<p>10. კომიტეტი თავად განსაზღვრავს საკუთარი საქმიანობის წესებს.</p>\r\n\r\n<p>11. კომიტეტის მიერ ფუნქციების ეფექტური და წინამდებარე კონვენციის შესაბამისად განხორციელებისათვის, &nbsp;გაერთიანებული ერების ორგანიზაციის გენერალური მდივანი უზრუნველყოფს მას საჭირო პერსონალით, საშუალებებით და ნიშნავს პირველ შეხვედრას.</p>\r\n\r\n<p>12. წინამდებარე კონვენციის ფარგლებში შექმნილი კომიტეტის წევრები, გენერალური ასამბლეის თანხმობით, გაერთიანებული ერების ორგანიზაციის რესურსებიდან იღებენ გასამრჯელოს ასამბლეის მიერ განსაზღვრული წესითა და პირობებით, კომიტეტის მიერ ნაკისრი პასუხისმგებლობის მნიშვნელობიდან გამომდინარე. &nbsp;&nbsp;</p>\r\n\r\n<p>13. კომიტეტის წევრები გაერთიანებული ერების ორგანიზაციის საქმიანობასთან დაკავშირებულ მივლინებებში სარგებლობენ ექსპერტთა იმ შეღავათებით, პრივილეგიებითა და იმუნიტეტით, რომელიც მათ ენიჭებათ გაეროს პრივილეგიებისა და იმუნიტეტების შესახებ კონვენციის შესაბამისი დებულებებით.&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n\r\n<p><strong>მუხლი</strong><strong>&nbsp;35</strong></p>\r\n\r\n<p><strong><em>მონაწილე</em></strong>&nbsp;<strong><em>ქვეყნების</em></strong>&nbsp;<strong><em>ანგარიშები</em></strong></p>\r\n\r\n<p>1. მონაწილე სახელმწიფოები, ქვეყენაში წინამდებარე კონვენციის ძალაში შესვლიდან ორი წლის ვადაში,&nbsp;&nbsp; გაეროს გენერალური მდივნის მეშვეობით, კომიტეტს წარუდგენენ&nbsp; ყოვლისმომცველ ანგარიშს მათ მიერ წინამდებარე კონვენციით გათვალისწინებული ვალდებულებების განხორციელებისათვის მიღებული ზომებისა და ამ კუთხით მიღწეული წარმატებების შესახებ.</p>\r\n\r\n<p>2. შემდგომ ანგარიშებს მონაწილე სახელმწიფოები წარადგენენ სულ მცირე ოთხ წელწადში ერთხელ მაინც, ხოლო კომიტეტის მოთხოვნის შემთხვევაში, ნებისმიერ დროს.</p>\r\n\r\n<p>3. კომიტეტი განსაზღვრავს ანგარიშების მომზადების სახელმძღვანელო პრინციპებს.</p>\r\n\r\n<p>4. მონაწილე სახელმწიფოს, რომელმაც კომიტეტს წარუდგინა ყოვლისმომცველი პირველადი ანგარიში, შეუძლია აღარ გაიმეოროს ადრე მიწოდებული ინფორმაცია შემდგომ ანგარიშებში. კომიტეტისათვის ანგარიშების მომზადებისას, მონაწილე სახელმწიფოებმა უნდა გაითვალისწინონ, რომ კომიტეტისათვის წარსადგენი ანგარიშების მზადების პროცესი იყოს ღია, გამჭვირვალე პროცესი და სათანადოდ ითვალისწინებდეს წინამდებარე კონვენციის 4.3 მუხლში ფორმულირებულ დებულებებს.</p>\r\n\r\n<p>5. ანგარიშებში შესაძლოა მითითებული იყოს ის ფაქტორები და სირთულეები, რომლებიც გავლენას ახდენენ წინამდებარე კონვენციით გათვალისწინებული მოვალეობების შესრულებაზე.&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n\r\n<p><strong>მუხლი</strong><strong>&nbsp;36</strong></p>\r\n\r\n<p><strong><em>ანგარიშთა</em></strong>&nbsp;<strong><em>განხილვა</em></strong></p>\r\n\r\n<p>1. &nbsp;ყოველი ანგარიში განიხილება კომიტეტის მიერ, რომელიც შეიმუშავებს ანგარიშთან &nbsp;დაკავშირებულ მოსაზრებებს, საჭირო რეკომენდაციებს და გადასცემს მათ შესაბამის მონაწილე სახელმწიფოს. საპასუხოდ, ამ უკანასკნელს შეუძლია კომიტეტს პასუხად მიაწოდოს ნებისმიერი ინფორმაცია, რომელსაც საჭიროდ ჩათვლის. კომიტეტს შეუძლია მონაწილე სახელმწიფოს მოთხოვოს დამატებითი ინფორმაცია წინამდებარე კონვენციის განხორციელებასთან დაკავშირებულ საკითხებთან მიმართებაში.</p>\r\n\r\n<p>2. იმ შემთხვევაში, თუ მონაწილე სახელმწიფო მნიშვნელოვნად აგვიანებს ანგარიშის მიწოდებას, კომიტეტმა, მისთვის სარწმუნო ინფორმაციის საფუძველზე, შეიძლება აცნობოს შესაბამის სახელმწიფოს წინამდებარე კონვენციის განხორციელების ადგილზე შემოწმების საჭიროების შესახებ, თუკი შესაბამისი მოხსენება გაფრთხილებიდან სამი თვის ვადაში არ იქნება წარდგენილი. კომიტეტს უფლება აქვს შესაბამისი მონაწილე სახელმწფო ჩართოს შემოწმების პროცესში. მონაწილე სახელმწიფოს მიერ გაფრთხილების საპასუხოდ ანგარიშის წარდგენის შემთხვევაში გამოიყენება ამ მუხლის პირველი ნაწილი.&nbsp; &nbsp;</p>\r\n\r\n<p>3. გაერთიანებული ერების ორგანიზაციის გენერალური მდივანი უზრუველყოფს ანგარიშების მისაწვდომობას ყველა მონაწილე სახელმწიფოსათვის.</p>\r\n\r\n<p>&nbsp;4. მონაწილე სახელმწიფოები უზრუნველყოფენ ანგარიშების საკუთარი ქვეყნის მოსახლეობისათვის მისაწვდომობას და ხელს უწყობენ აღნიშნულ ანგარიშებთან დაკავშირებით საპასუხო წინადადებებისა და ზოგადი რეკომენდაციების მისაწვდომობას.</p>\r\n\r\n<p>5. საჭიროების შემთხვევაში, კომიტეტი მონაწილე სახელმწიფოების ანგარიშებს გადასცემს გაერთიანებული ერების ორგანიზაციის სპეციალიზირებულ სააგენტოებს, ფონდებსა და პროგრამებს, ან სხვა კომპეტენურ ორგანოებს, რათა მათი ყურადღება მიაპყრონ ანგარიშებში გამოთქმულ თხოვნას რეკომენდაციისა და ტექნიკური დახმარების შესახებ. &nbsp; &nbsp;</p>\r\n', '', 'შშმ პირთა კონვენცია, მონიტორინგი, გამხორციელება', 'Implementation of CRPD', 'Implementation is only achieved through comprehensive coordination between state agencies', '<p>&nbsp;</p>\r\n\r\n<h3><a name="33">Article 33 - National implementation and monitoring</a></h3>\r\n\r\n<p>1. States Parties, in accordance with their system of organization, shall designate one or more focal points within government for matters relating to the implementation of the present Convention, and shall give due consideration to the establishment or designation of a coordination mechanism within government to facilitate related action in different sectors and at different levels.</p>\r\n\r\n<p>2. States Parties shall, in accordance with their legal and administrative systems, maintain, strengthen, designate or establish within the State Party, a framework, including one or more independent mechanisms, as appropriate, to promote, protect and monitor implementation of the present Convention. When designating or establishing such a mechanism, States Parties shall take into account the principles relating to the status and functioning of national institutions for protection and promotion of human rights.</p>\r\n\r\n<p>3. Civil society, in particular persons with disabilities and their representative organizations, shall be involved and participate fully in the monitoring process.</p>\r\n\r\n<h3><a name="34">Article 34 - Committee on the Rights of Persons with Disabilities</a></h3>\r\n\r\n<p>1. There shall be established a Committee on the Rights of Persons with Disabilities (hereafter referred to as &quot;the Committee&quot;), which shall carry out the functions hereinafter provided.</p>\r\n\r\n<p>2. The Committee shall consist, at the time of entry into force of the present Convention, of twelve experts. After an additional sixty ratifications or accessions to the Convention, the membership of the Committee shall increase by six members, attaining a maximum number of eighteen members.</p>\r\n\r\n<p>3. The members of the Committee shall serve in their personal capacity and shall be of high moral standing and recognized competence and experience in the field covered by the present Convention. When nominating their candidates, States Parties are invited to give due consideration to the provision set out in article 4.3 of the present Convention.</p>\r\n\r\n<p>4. The members of the Committee shall be elected by States Parties, consideration being given to equitable geographical distribution, representation of the different forms of civilization and of the principal legal systems, balanced gender representation and participation of experts with disabilities.</p>\r\n\r\n<p>5. The members of the Committee shall be elected by secret ballot from a list of persons nominated by the States Parties from among their nationals at meetings of the Conference of States Parties. At those meetings, for which two thirds of States Parties shall constitute a quorum, the persons elected to the Committee shall be those who obtain the largest number of votes and an absolute majority of the votes of the representatives of States Parties present and voting.</p>\r\n\r\n<p>6. The initial election shall be held no later than six months after the date of entry into force of the present Convention. At least four months before the date of each election, the Secretary-General of the United Nations shall address a letter to the States Parties inviting them to submit the nominations within two months. The Secretary-General shall subsequently prepare a list in alphabetical order of all persons thus nominated, indicating the State Parties which have nominated them, and shall submit it to the States Parties to the present Convention.</p>\r\n\r\n<p>7. The members of the Committee shall be elected for a term of four years. They shall be eligible for re-election once. However, the term of six of the members elected at the first election shall expire at the end of two years; immediately after the first election, the names of these six members shall be chosen by lot by the chairperson of the meeting referred to in paragraph 5 of this article.</p>\r\n\r\n<p>8. The election of the six additional members of the Committee shall be held on the occasion of regular elections, in accordance with the relevant provisions of this article.</p>\r\n\r\n<p>9. If a member of the Committee dies or resigns or declares that for any other cause she or he can no longer perform her or his duties, the State Party which nominated the member shall appoint another expert possessing the qualifications and meeting the requirements set out in the relevant provisions of this article, to serve for the remainder of the term.</p>\r\n\r\n<p>10. The Committee shall establish its own rules of procedure.</p>\r\n\r\n<p>11. The Secretary-General of the United Nations shall provide the necessary staff and facilities for the effective performance of the functions of the Committee under the present Convention, and shall convene its initial meeting.</p>\r\n\r\n<p>12. With the approval of the General Assembly, the members of the Committee established under the present Convention shall receive emoluments from United Nations resources on such terms and conditions as the Assembly may decide, having regard to the importance of the Committee&#39;s responsibilities.</p>\r\n\r\n<p>13. The members of the Committee shall be entitled to the facilities, privileges and immunities of experts on mission for the United Nations as laid down in the relevant sections of the Convention on the Privileges and Immunities of the United Nations.</p>\r\n\r\n<h3><a name="35">Article 35 - Reports by States Parties</a></h3>\r\n\r\n<p>1. Each State Party shall submit to the Committee, through the Secretary-General of the United Nations, a comprehensive report on measures taken to give effect to its obligations under the present Convention and on the progress made in that regard, within two years after the entry into force of the present Convention for the State Party concerned.</p>\r\n\r\n<p>2. Thereafter, States Parties shall submit subsequent reports at least every four years and further whenever the Committee so requests.</p>\r\n\r\n<p>3. The Committee shall decide any guidelines applicable to the content of the reports.</p>\r\n\r\n<p>4. A State Party which has submitted a comprehensive initial report to the Committee need not, in its subsequent reports, repeat information previously provided. When preparing reports to the Committee, States Parties are invited to consider doing so in an open and transparent process and to give due consideration to the provision set out in article 4.3 of the present Convention.</p>\r\n\r\n<p>5. Reports may indicate factors and difficulties affecting the degree of fulfilment of obligations under the present Convention.</p>\r\n\r\n<h3><a name="36">Article 36 - Consideration of reports</a></h3>\r\n\r\n<p>1. Each report shall be considered by the Committee, which shall make such suggestions and general recommendations on the report as it may consider appropriate and shall forward these to the State Party concerned. The State Party may respond with any information it chooses to the Committee. The Committee may request further information from States Parties relevant to the implementation of the present Convention.</p>\r\n\r\n<p>2. If a State Party is significantly overdue in the submission of a report, the Committee may notify the State Party concerned of the need to examine the implementation of the present Convention in that State Party, on the basis of reliable information available to the Committee, if the relevant report is not submitted within three months following the notification. The Committee shall invite the State Party concerned to participate in such examination. Should the State Party respond by submitting the relevant report, the provisions of paragraph 1 of this article will apply.</p>\r\n\r\n<p>3. The Secretary-General of the United Nations shall make available the reports to all States Parties.</p>\r\n\r\n<p>4. States Parties shall make their reports widely available to the public in their own countries and facilitate access to the suggestions and general recommendations relating to these reports.</p>\r\n\r\n<p>5. The Committee shall transmit, as it may consider appropriate, to the specialized agencies, funds and programmes of the United Nations, and other competent bodies, reports from States Parties in order to address a request or indication of a need for technical advice or assistance contained therein, along with the Committee&#39;s observations and recommendations, if any, on these requests or indications.</p>\r\n', '', '', '', '', '', '', '', '2017-08-07 10:42:42', '2017-11-20 10:26:10'),
(23, 5, 1, '111', 'files/services_items/1502103527_images.jpg', 'files/services_items/tumb/1502103527_images.jpg', 'Mon, Nov 20, 2017 10:36 AM', 'შეზღუდული შესაძლებლობების მქონე ქალები', 'შშმ ქალები შესაძლოა მრავალგვარი დისკრიმინაციის მსხვერპლი გახდნენ, ამ განსაკუთრებით იცავს.', '<p><strong>მუხლი</strong><strong>&nbsp;6</strong></p>\r\n\r\n<p><strong><em>შეზღუდული</em></strong>&nbsp;<strong><em>შესაძლებლობის</em></strong>&nbsp;<strong><em>მქონე</em></strong>&nbsp;<strong><em>ქალები</em></strong></p>\r\n\r\n<p>1. მონაწილე სახელმწიფოები აღიარებენ, რომ შეზღუდული შესაძლებლობის მქონე ქალები და გოგონები მრავალგვარი დისკრიმინაციის საფრთხის ქვეშ იმყოფებიან და, ამასთან დაკავშირებით, იღებენ ზომებს მათი უფლებებისა და ძირითად თავისუფლებათა სრული და თანაბარი უზრუნველყოფისათვის.</p>\r\n\r\n<p>2. მონაწილე სახელმწიფოებმა უნდა მიიღონ ყველა შესაბამისი ზომა ქალთა ყოველმხრივი განვითარების, წინსვლის, დამოუკიდებლობის უზრუნველყოფისა და წინამდებარე კონვენციით მათთვის მინიჭებული უფლებებისა და ძირითად თავისუფლებათა გარანტირებისათვის.</p>\r\n', '', '', 'Women with disabilities', 'Women with disabilities are subject to multiple discrimination, state is obliged to protect them.', '<h2>Article 6 - Women with disabilities</h2>\r\n\r\n<p>1. States Parties recognize that women and girls with disabilities are subject to multiple discrimination, and in this regard shall take measures to ensure the full and equal enjoyment by them of all human rights and fundamental freedoms.</p>\r\n\r\n<p>2. States Parties shall take all appropriate measures to ensure the full development, advancement and empowerment of women, for the purpose of guaranteeing them the exercise and enjoyment of the human rights and fundamental freedoms set out in the present Convention.</p>\r\n', '', '', '', '', '', '', '', '2017-08-07 10:58:47', '2017-11-20 10:36:15'),
(24, 5, 1, '111', 'files/services_items/1502104142_inclusão.jpg', 'files/services_items/tumb/1502104142_inclusão.jpg', 'Mon, Aug 7, 2017 11:09 AM', 'შეზღუდული შესაძლებლობების მქონე ბავშვები ', 'შეზღუდული შესაძლებლობების მქონე ბავშვების ინტერესები და თანასწორუფლებიანობის პრინციპი დაცული უნდა იყოს', '<p><strong>მუხლი</strong><strong>&nbsp;7</strong></p>\r\n\r\n<p><strong><em>შეზღუდული</em></strong>&nbsp;<strong><em>შესაძლებლობის</em></strong>&nbsp;<strong><em>მქონე</em></strong>&nbsp;<strong><em>ბავშვები</em></strong></p>\r\n\r\n<p>1. მონაწილე სახელმწიფოებმა უნდა მიიღონ ყველა შესაბამისი ზომა შეზღუდული შესაძლებლობის მქონე ბავშვების მიერ ადამიანის უფლებებისა და ძირითად თავისუფლებათა რეალიზებისათვის, სხვა ბავშვების თანასწორად.</p>\r\n\r\n<p>2. შეზღუდული შესაძლებლობის მქონე ბავშვებთან დაკავშირებულ ნებისმიერ ქმედებაში, უპირველეს ყოვლისა, გათვალისწინებულ უნდა იქნეს ბავშვის უზენაესი ინტერესები.</p>\r\n\r\n<p>3. მონაწილე სახელმწიფოებმა შეზღუდული შესაძლებლობის მქონე ბავშვებისათვის, სხვა ბავშვების თანასწორად, უნდა უზრუნველყონ აზრის თავისუფლად გამოხატვის საშუალება მათთვის მნიშვნელოვან ყველა საკითხზე, მათი ასაკისა და მოწიფულობის გათვალისწინებით; აღნიშნული უფლების რეალიზებისათვის ისინი უზრუნველყოფილი უნდა იქნენ &nbsp;შეზღუდულობისა და ასაკის შესაბამისი დახმარებით</p>\r\n', '', '', 'Children with disabilities', 'The rights of equality and interests of disabled children should be protected by state equally', '<h2>Article 6 - Children with disabilities</h2>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h3>1. States Parties shall take all necessary measures to ensure the full enjoyment by children with disabilities of all human rights and fundamental freedoms on an equal basis with other children.</h3>\r\n\r\n<p>2. In all actions concerning children with disabilities, the best interests of the child shall be a primary consideration.</p>\r\n\r\n<p>3. States Parties shall ensure that children with disabilities have the right to express their views freely on all matters affecting them, their views being given due weight in accordance with their age and maturity, on an equal basis with other children, and to be provided with disability and age-appropriate assistance to realize that right.</p>\r\n', '', '', '', '', '', '', '', '2017-08-07 11:07:59', '2017-08-07 11:09:02');

-- --------------------------------------------------------

--
-- Table structure for table `Settings`
--

CREATE TABLE IF NOT EXISTS `Settings` (
  `id` int(11) NOT NULL,
  `keyword` varchar(25) NOT NULL,
  `info` varchar(255) NOT NULL,
  `title_ge` varchar(100) NOT NULL,
  `title_en` varchar(100) NOT NULL,
  `title_ru` varchar(100) NOT NULL,
  `full_text_ge` text NOT NULL,
  `full_text_en` text NOT NULL,
  `full_text_ru` text NOT NULL,
  `image` text NOT NULL,
  `url` text NOT NULL,
  `target` varchar(15) NOT NULL DEFAULT '_blank',
  `embed_map` text NOT NULL,
  `main_lang` varchar(2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Settings`
--

INSERT INTO `Settings` (`id`, `keyword`, `info`, `title_ge`, `title_en`, `title_ru`, `full_text_ge`, `full_text_en`, `full_text_ru`, `image`, `url`, `target`, `embed_map`, `main_lang`, `created_at`, `updated_at`) VALUES
(1, 'website_title', '', 'ახალი ძრავი', 'ახალი ძრავი', 'ახალი ძრავი', '', '', '', '', '', '_blank', '', '', '0000-00-00 00:00:00', '2017-04-27 13:58:05'),
(2, 'logo', '', '', '', '', '', '', '', '', '', '_blank', '', '', '0000-00-00 00:00:00', '2017-03-10 16:40:39'),
(3, 'lang', '', '1', '1', '0', '', '', '', '', '', '_blank', '', '', '0000-00-00 00:00:00', '2017-07-12 15:41:38'),
(4, 'facebook', '', '', '', '', '', '', '', '', '', '_blank', '', '', '0000-00-00 00:00:00', '2017-04-06 14:30:26'),
(5, 'youtube', '', '', '', '', '', '', '', '', '', '_blank', '', '', '0000-00-00 00:00:00', '2017-04-06 14:30:26'),
(6, 'twitter', '', '', '', '', '', '', '', '', '', '_blank', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'website', '', '', '', '', '', '', '', '', '', '_blank', '', '', '0000-00-00 00:00:00', '2017-04-06 14:31:31'),
(8, 'address', '', 'ქ. თბილისი, ქ. # 0', 'ქ. თბილისი, ქ. # 0', 'ქ. თბილისი, ქ. # 0', '', '', '', '', '', '_blank', '', '', '0000-00-00 00:00:00', '2017-04-06 14:31:31'),
(9, 'phone', '', '', '', '', '', '', '', '', '', '_blank', '', '', '0000-00-00 00:00:00', '2017-04-06 14:30:12'),
(10, 'mobile', '', '', '', '', '', '', '', '', '', '_blank', '', '', '0000-00-00 00:00:00', '2017-04-06 14:30:12'),
(11, 'email', '', '', '', '', '', '', '', '', '', '_blank', '', '', '0000-00-00 00:00:00', '2017-04-06 14:31:31'),
(12, 'map', '', '', '', '', '', '', '', '', '', '_blank', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d744.4301668762026!2d44.79046808357536!3d41.726546090267945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x404472cf20a47479%3A0x80a2f43538913f05!2s22+Batumi+St%2C+Tbilisi!5e0!3m2!1sen!2sge!4v1488556101387" width="600" height="580" frameborder="0" style="border:0" allowfullscreen></iframe>', '', '0000-00-00 00:00:00', '2017-03-06 08:59:42'),
(15, 'about_us_text', '', '', '', '', '', '', '', '', '', '_blank', '', '', '0000-00-00 00:00:00', '2017-03-13 10:01:43'),
(16, 'event_bg', '', '', '', '', '', '', '', 'files/settings/1508506236_cover_events.jpg', '', '_blank', '', '', '0000-00-00 00:00:00', '2017-10-20 13:30:36'),
(17, 'page_bg', '', '', '', '', '', '', '', 'files/settings/1508506528_Untitled-2.jpg', '', '_blank', '', '', '0000-00-00 00:00:00', '2017-10-20 13:35:28'),
(18, 'campaign_bg', '', '', '', '', '', '', '', 'files/settings/1508505174_camp.jpg', '', '_blank', '', '', '0000-00-00 00:00:00', '2017-10-20 13:12:54');

-- --------------------------------------------------------

--
-- Table structure for table `Slider`
--

CREATE TABLE IF NOT EXISTS `Slider` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `url` text NOT NULL,
  `target` varchar(10) NOT NULL DEFAULT '_self',
  `image` varchar(255) NOT NULL,
  `tumb` text NOT NULL,
  `date` varchar(50) NOT NULL,
  `title_ge` varchar(255) NOT NULL,
  `short_text_ge` text NOT NULL,
  `full_text_ge` longtext NOT NULL,
  `description_ge` text NOT NULL,
  `keywords_ge` text NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `short_text_en` text NOT NULL,
  `full_text_en` longtext NOT NULL,
  `description_en` text NOT NULL,
  `keywords_en` text NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `short_text_ru` text NOT NULL,
  `full_text_ru` longtext NOT NULL,
  `description_ru` text NOT NULL,
  `keywords_ru` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Slider`
--

INSERT INTO `Slider` (`id`, `menu_id`, `url`, `target`, `image`, `tumb`, `date`, `title_ge`, `short_text_ge`, `full_text_ge`, `description_ge`, `keywords_ge`, `title_en`, `short_text_en`, `full_text_en`, `description_en`, `keywords_en`, `title_ru`, `short_text_ru`, `full_text_ru`, `description_ru`, `keywords_ru`, `created_at`, `updated_at`) VALUES
(1, 1, '', '_self', 'files/slider/1500477476_19400674_995179393918509_2232663471031812969_o.jpg', 'files/slider/tumb/1500477476_19400674_995179393918509_2232663471031812969_o.jpg', 'Wed, Jul 19, 2017 3:17 PM', '24 ივნისის აქცია', '', '<p>გავრცელებული მოსაზრებით, Lorem Ipsum შემთხვევითი ტექსტი სულაც არაა. მისი ფესვები ჯერკიდევ ჩვ. წ. აღ-მდე 45 წლის დროინდელი კლასიკური ლათინური ლიტერატურიდან მოდის. ვირჯინიის შტატში მდებარე ჰემპდენ-სიდნეის კოლეჯის პროფესორმა რიჩარდ მაკკლინტოკმა აიღო ერთ-ერთი ყველაზე იშვიათი ლათინური სიტყვა &quot;consectetur&quot; Lorem Ipsum-პასაჟიდან და გადაწყვიტა მოეძებნა იგი კლასიკურ ლიტერატურაში. ძიება შედეგიანი აღმოჩნდა &mdash; ტექსტი Lorem Ipsum გადმოწერილი ყოფილა ციცერონის &quot;de Finibus Bonorum et Malorum&quot;-ის 1.10.32 და 1.10.33 თავებიდან. ეს წიგნი ეთიკის თეორიის ტრაქტატია, რომელიც რენესანსის პერიოდში ძალიან იყო გავრცელებული. Lorem Ipsum-ის პირველი ხაზი, &quot;Lorem ipsum dolor sit amet...&quot; სწორედ ამ წიგნის 1.10.32 თავიდანაა.</p>\r\n\r\n<p>მათთვის, ვისაც აინტერესებს, ქვევით მოყვანილია Lorem Ipsum-ის ორიგინალი ნაწყვეტი 1500-იანი წლებიდან. ასევე შეგიძლიათ ნახოთ 1.10.32 და 1.10.33 თავები ციცერონის &quot;de Finibus Bonorum et Malorum&quot;-დან, რომელსაც თან ერთვის 1914 წელს ჰ. რექჰამის შესრულებული ინგლისურენოვანი თარგმანი.</p>\r\n', '', '', '', '', '', '', '', '', '', '', '', '', '2017-04-28 09:17:31', '2017-07-19 15:17:57'),
(5, 1, '', '_self', 'files/slider/1500478154_19417423_995186440584471_2343884423650335513_o.jpg', 'files/slider/tumb/1500478154_19417423_995186440584471_2343884423650335513_o.jpg', 'Wed, Jul 19, 2017 3:29 PM', '24 ივნისის აქცია', '', '', '', 'აქცია , პროტესტი, შეზღუდული შესაძლებლობები', '', '', '', '', '', '', '', '', '', '', '2017-07-16 14:39:51', '2017-07-19 15:29:15'),
(6, 1, '', '_self', 'files/slider/1500477616_19441770_995178170585298_4694427573208704056_o.jpg', 'files/slider/tumb/1500477616_19441770_995178170585298_4694427573208704056_o.jpg', 'Wed, Jul 19, 2017 3:20 PM', '24 ივნისის აქცია', '', '', '', 'აქცია , პროტესტი, შეზღუდული შესაძლებლობები', '', '', '', '', '', '', '', '', '', '', '2017-07-16 14:41:32', '2017-07-19 15:20:16'),
(7, 1, '', '_self', 'files/slider/1500478039_19442008_995179120585203_1621781758066266612_o.jpg', 'files/slider/tumb/1500478039_19442008_995179120585203_1621781758066266612_o.jpg', 'Wed, Jul 19, 2017 3:27 PM', '24 ივნისის აქცია', '', '', '', 'აქცია , პროტესტი, შეზღუდული შესაძლებლობები', '', '', '', '', '', '', '', '', '', '', '2017-07-16 14:45:22', '2017-07-19 15:27:20');

-- --------------------------------------------------------

--
-- Table structure for table `Teams`
--

CREATE TABLE IF NOT EXISTS `Teams` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `main` int(1) NOT NULL DEFAULT '1',
  `image` varchar(255) NOT NULL,
  `tumb` text NOT NULL,
  `date` varchar(50) NOT NULL,
  `facebook` varchar(150) NOT NULL,
  `googleplus` varchar(150) NOT NULL,
  `twitter` varchar(150) NOT NULL,
  `title_ge` varchar(255) NOT NULL,
  `short_text_ge` text NOT NULL,
  `full_text_ge` longtext NOT NULL,
  `description_ge` text NOT NULL,
  `keywords_ge` text NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `short_text_en` text NOT NULL,
  `full_text_en` longtext NOT NULL,
  `description_en` text NOT NULL,
  `keywords_en` text NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `short_text_ru` text NOT NULL,
  `full_text_ru` longtext NOT NULL,
  `description_ru` text NOT NULL,
  `keywords_ru` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Teams`
--

INSERT INTO `Teams` (`id`, `menu_id`, `main`, `image`, `tumb`, `date`, `facebook`, `googleplus`, `twitter`, `title_ge`, `short_text_ge`, `full_text_ge`, `description_ge`, `keywords_ge`, `title_en`, `short_text_en`, `full_text_en`, `description_en`, `keywords_en`, `title_ru`, `short_text_ru`, `full_text_ru`, `description_ru`, `keywords_ru`, `created_at`, `updated_at`) VALUES
(7, 1, 1, 'files/teams/1500220015_13256450_1172252316138610_6939468203330352382_n.jpg', 'files/teams/tumb/1500220015_13256450_1172252316138610_6939468203330352382_n.jpg', 'Sat, Sep 30, 2017 2:44 PM', 'https://www.facebook.com/irakli.iremadze.7', 'google url', 'twiit url', 'ირაკლი ირემაძე', '', '<p>&nbsp;</p>\r\n\r\n<p>ირაკლი ირემაძე ჩვენს ორგანიზაციაში 2015 წლიდან მუშაობს, იგი პროექტებს ტექნიკურ კოორდინირებას უწევს. ირაკლი ასევე მუშაობს თბილისის სახელმწიფო უნივერსიტეტის ბიბლიოთეკაში მკვლევრად, სხვადასხვა დროს მუშაობდა საქართველოს განათლების სამინისტროში, თბილისის მერიასა და ცენტრალურ საარჩევნო კომისიაში. მას განათლება მიღებული აქვს სოციალური მეცნიერებების მიმართულებით და ფლობს მაგისტრის ხარისხს პოლიტიკის მეცნიერებში. მას გამოქვეყნებული აქვს არაერთი სამეცნიერო სტატია და არის თანაშემდგენელი რამდენიმე პუბლიკაციისა XIX-XX საუკუნეების ქართული პოლიტიკური აზრის მიმართულებით. მისი ძირითადი ინტერესის საგანია პოლიტიკური ისტორია, მოწყვლადი ჯგუფების ინტეგრაცია და საარჩევნო სისტემები. ირაკლი აქტიურადაა ჩაბმული სამოქალაქო აქტივიზმში 2011 წლიდან.</p>\r\n\r\n<p>საკონტაქტო ინფორმაცია:</p>\r\n\r\n<p>მობ: + 995 595 95 66 72</p>\r\n\r\n<p>ელ-ფოსტა: irakli.iremadze1992@gmail.com</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'ირაკლი ირემაძე', 'ირაკლი ირემაძე', 'Irakli Iremadze', 'Irakli Iremadze', '<p>&nbsp;</p>\r\n\r\n<p>Irakli Iremadze joined our team in 2015. He works as technical coordinator of projects in our organization. Simultaneously he is the fellow researcher and library co-worker in Tbilisi State University.Irakliheld several positions in ministry of education of Georgia, Tbilisi city hall and central election committee. Irakli holds MA degree in political sciences.Irakli is the author and co-author of numerous academic articles and publications on political thought of XIX-XX centuries. Main interest of him is modern political history, election systems and integration of vulnerable groups. He has been actively involved in civic activism since 2011.</p>\r\n\r\n<p><strong>Contact:</strong></p>\r\n\r\n<p>+ 995 595 95 66 72</p>\r\n\r\n<p>irakli.iremadze1992@gmail.com</p>\r\n', 'Irakli iremadze', 'Irakli Iremadze', '', '', '', '', '', '2017-07-11 12:46:41', '2017-09-30 14:44:59'),
(8, 1, 1, 'files/teams/1500219816_,kmnkmn.jpg', 'files/teams/tumb/1500219816_,kmnkmn.jpg', 'Wed, Oct 25, 2017 10:11 AM', 'face 2', 'https://www.linkedin.com/in/sopo-shubitidze-619b6645/', 'https://twitter.com/Sopofabian', 'სოფო შუბითიძე', '', '<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>სოფო შუბითიძე ჩვენს ორგანიზაციას 2017 წლის დასაწყისიდან შემოუერთდა. იგი ასრულებს საზოგადოებასთან კომუნიკაციის მენეჯერის და პროექტების ასისტენტის ფუნქციას. სოფო აქამდე მუშაობდა ეთნიკური უმცირესობების საკითხებზე, ასევე აშუქებდა სამოქალაქო და სოციალურ თემებს ახალგაზრდული რადიოს მეშვეობით. არის ახალგაზრდა მკვლევართა გაერთიანების &ndash;&bdquo;თბილისის ფაბიანური საზოგადოების&ldquo; დამფუძნებელი. მისი ძირითადი ინტერესის საგანია : სამოქალაქო აქტივიზმი, პოლიტიკური იდეოლოგიები და სოციალური თემატიკა. სოფო ფლობს ბაკალავრის ხარისხს პოლიტიკის მეცნიერებების მიმართულებით.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>საკონტაქტო ინფორმაცია</p>\r\n\r\n<p>მობ: + 995 598 752 015</p>\r\n\r\n<p>ელ-ფოსტა: sopo.shubitidze@gmail.com</p>\r\n', 'სოფო შუბითიძე', 'სოფო შუბითიძე', 'Sopo Shubitidze', '', '<p>&nbsp;</p>\r\n\r\n<p>Sopo Shubitidze joined MAEE team in the beginning of 2017. She holds the position of Public Relations manager and assists the team in project management as well. She has worked before on ethnic minority issues;she was also youth online radio manager and covered social issues. Sopo is the co-founder of fellow researcher&rsquo;s organization &ndash; &ldquo;Tbilisi Fabian Society&rdquo;. Her main interests are: civic activism, political ideologies and social topics. She has BA degree with hons in political sciences.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Contact: </strong>+995 598 752 015</p>\r\n\r\n<p><a href="mailto:Sopo.shubitidze@gmail.com">Sopo.shubitidze@gmail.com</a></p>\r\n', '', 'Sopo Shubitidze', '', '', '', '', '', '2017-07-11 13:13:14', '2017-10-25 10:11:18'),
(9, 1, 1, 'files/teams/1506777700_14695448_989084721217983_2299752996143918145_n.jpg', 'files/teams/tumb/1506777700_14695448_989084721217983_2299752996143918145_n.jpg', 'Wed, Oct 25, 2017 10:43 AM', 'https://www.facebook.com/sofo.abashidze.3', 'https://www.linkedin.com/in/sopho-abashidze-85927b130/', 'https://twitter.com/sophi_valle', 'სოფო აბაშიძე', '', '<p>სოფო აბაშიძე&nbsp;ჩვენს ორგანიზაციას 2017 წელს შემოუერთდა. იგი ასრულებს პროექტების ასისტენტის ფუნქციას (საზოგადოებასთან ურთიერთობის მენეჯერი). ასევე სოფო თბილისის სახელმწიფო უნივერსიტეტის, სახელმწიფო მართვის და საჯარო პოლიტიკის, სამაგისტრო პროგრამის მეორე კურსის სტუდენტია, ის&nbsp; კვლევითი პროექტით სამი თვის განმავლობაში იმყოფებოდა ჰოლანდიაში, როტერდამის ერასმუსის უნივერსიტეტში.&nbsp; სოფოს აქვს კვლევის, მოხალისეობის და სხვადასხვა სახელმწიფო დაწესებულებაში მუშაობის გამოცდილება. იგი 2015 წელს მუშაობდა იუსტიციის სამინისტროს დანაშაულის პრევენციის ცენტრში და ასწავლიდა ინგლისურ ენას განრიდების მქონე არასრულწლოვნებს. ასევე მას აქვს საარჩევნო სფეროში მუშაობის გამოცდილება, არის ავტორი მრავალი სამეცნიერო სტატიის.&nbsp;&nbsp;მისი ძირითადი ინტერესის საგანია : სამოქალაქო აქტივიზმი, პოლიტიკური იდეოლოგიები და სოციალური თემატიკა.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>საკონტაქტო ინფორმაცია : + 995 557163600</p>\r\n\r\n<p>ელ-ფოსტა:&nbsp;</p>\r\n', '', '', '', '', '', '', '', '', '', '', '', '', '2017-09-30 13:21:40', '2017-10-25 10:43:41'),
(10, 1, 1, 'files/teams/1506778437_10157330_556074774508741_7605317773240857661_n.jpg', 'files/teams/tumb/1506778437_10157330_556074774508741_7605317773240857661_n.jpg', 'Thu, Oct 5, 2017 6:39 PM', 'https://www.facebook.com/giorgi.alavidze.374?lst=100001070801467%3A100003186717126%3A1506777846', '', '', 'გიორგი ალავიძე', '', '<p>გიორგი ალავიძე&nbsp;&nbsp;&bdquo;მოძრაობა ხელმისაწვდომი გარემო ყველასთვის&ldquo; თანადამფუძნებელი და გამგეობის წევრია,&nbsp;<strong>&nbsp;</strong>2013 - 2015 წლებში, გიორგი&nbsp;&nbsp;ორგანიზაციის &bdquo;მოძრაობა ხელმისაწვდომი გარემო ყველასთვის&ldquo; გამგეობის თავმჯდომარედ მუშაობდა. მას აქვს პროექტების მენეჯმენტის და ბიზნესის ადმინისტრირების კუთხით მუშაობის გამოცდილება. 2015 წლიდან გიორგი ალავიძე ორგანიზაციის მიერ დაფუძნებული სოციალური საწარმო &quot;ერთად&quot;-ის დირექტორია.&nbsp;გიორგი<strong>&nbsp;</strong>ივ. ჯავახიშვილის სახელობის თბილისის სახელმწიფო უნივერსიტეტის ეკონომიკურო ფაკულტეტის კურსდამთავრებულია (1997 წ. ). მას მშენებლობის, ეკონომიკისა და მართვის სპეციალობით აქვს მიღებული განათლება.&nbsp;</p>\r\n\r\n<p>მისი ძირითადი ინტერესის საგანია: შშმ პირთა უფლებების დაცვა, მათთვის ინკლუზიური გარემოს შექმნა და დასაქმების ხელშეწყობა, სწორედ ამიტომ ის ხელს უწყობს სოციალური მეწარმეობის განვითარებას.</p>\r\n\r\n<p>საკონტაქტო ინფორმაცია:</p>\r\n\r\n<p>მობ: 591 22 44 60</p>\r\n\r\n<p>ელ-ფოსტა:&nbsp;&nbsp;gia.alava@gmail.com&nbsp;&nbsp;</p>\r\n', '', '', 'Giorgi Alavidze', '', '', '', '', '', '', '', '', '', '2017-09-30 13:33:39', '2017-10-05 18:39:49'),
(11, 1, 1, 'files/teams/1506780138_135168_539123322795160_1726460068_o.jpg', 'files/teams/tumb/1506780138_135168_539123322795160_1726460068_o.jpg', 'Wed, Oct 25, 2017 10:19 AM', 'https://www.facebook.com/akhmeteli', 'https://www.linkedin.com/in/giorgi-akhmeteli-7624a183/', '', 'გიორგი ახმეტელი', '', '<p>გიორგი ახმეტელი &ldquo;მოძრაობა ხელმისაწვდომი გარემო ყველასათვის&ldquo; დამფუძნებელია, ის&nbsp; 2011-2013&nbsp; და 2015-დან დღემდე&nbsp;&nbsp;იკავებს აღმასრულებელი დირექტორის თანამდებობას.&nbsp;2013-2014 წლებში გიორგი&nbsp;მონაწილეობდა, მაკკეინის ინსტიტუტში,&nbsp; მომავალი თაობის ლიდერთა საერთაშორისო პროგრამაში, ამავე პერიოდში,&nbsp;აშშ-ს არასამთავრობო ორგანიზაცია &bdquo;National Organization on Disability&ldquo;-ში გაიარა სტაჟირება. აშშ-ში მიღებულ გამოცდილება და&nbsp;&nbsp;წლების განმავლობაში ბიზნესის სფეროში, მენეჯერულ პოზიციებზე მუშაობის გამოცდილება მას ეხმარება ორგანიზაციის განვითარების სწორი სტრატეგიის დაგეგმვაში.&nbsp;</p>\r\n\r\n<p>ინტერესის სფერო: შშმ პირთა უფლებრივი საკითხები და ქალაქის ურბანული განვითარების საკითხები;</p>\r\n\r\n<p>მობ: 599193600</p>\r\n\r\n<p>ელ-ფოსტა: akhmeteli.ge@gmail.com&nbsp;</p>\r\n', '', '', 'Georgi Akhmeteli', '', '', '', '', '', '', '', '', '', '2017-09-30 14:02:18', '2017-10-25 10:19:47'),
(12, 1, 1, 'files/teams/1506780953_1039534_10201437247839275_2032040915_o.jpg', 'files/teams/tumb/1506780953_1039534_10201437247839275_2032040915_o.jpg', 'Wed, Oct 25, 2017 10:40 AM', 'https://www.facebook.com/kobnadira?lst=100001070801467%3A1417550877%3A1506780821', '', 'https://twitter.com/kobnadira', 'კობა ნადირაძე', '', '<p>კობა ნადირაძე&nbsp;ააიპ &ldquo;მოძრაობა ხელმისაწვდომი გარემო ყველასათვის&ldquo; გამგეობის წევრია.&nbsp;</p>\r\n', '', '', '', '', '', '', '', '', '', '', '', '', '2017-09-30 14:15:54', '2017-10-25 10:40:39');

-- --------------------------------------------------------

--
-- Table structure for table `text`
--

CREATE TABLE IF NOT EXISTS `text` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `full_text_ge` longtext NOT NULL,
  `full_text_en` longtext NOT NULL,
  `full_text_ru` longtext NOT NULL,
  `email` varchar(255) NOT NULL,
  `map` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `text`
--

INSERT INTO `text` (`id`, `menu_id`, `full_text_ge`, `full_text_en`, `full_text_ru`, `email`, `map`, `created_at`, `updated_at`) VALUES
(1, 2, '<p><strong>Lorem Ipsum</strong>&nbsp;საბეჭდი და ტიპოგრაფიული ინდუსტრიის უშინაარსო ტექსტია. იგი სტანდარტად 1500-იანი წლებიდან იქცა, როდესაც უცნობმა მბეჭდავმა ამწყობ დაზგაზე წიგნის საცდელი ეგზემპლარი დაბეჭდა. მისი ტექსტი არამარტო 5 საუკუნის მანძილზე შემორჩა, არამედ მან დღემდე, ელექტრონული ტიპოგრაფიის დრომდეც უცვლელად მოაღწია.<br />\r\n<br />\r\nგანსაკუთრებული პოპულარობა მას 1960-იან წლებში გამოსულმა Letraset-ის ცნობილმა ტრაფარეტებმა მოუტანა, უფრო მოგვიანებით კი &mdash; Aldus PageMaker-ის ტიპის საგამომცემლო პროგრამებმა, რომლებშიც Lorem Ipsum-ის სხვადასხვა ვერსიები იყო ჩაშენებული.</p>', '', '', '', '', '2017-04-28 09:20:43', '2017-04-28 09:20:43'),
(2, 68, '<p>შეზღუდული შესაძლებლობების მქონე პირთა ორგანიზაცია &bdquo;ხელმისაწვდომი გარემო ყველასთვის&ldquo; დაარსდა 2011 წელს და იმართება ძირითადად შეზღუდული შესაძლებლობების მქონე აქტივისტების მიერ.</p>\r\n\r\n<p>ხელმისაწვდომი გარემო ყველასთვის&ldquo; თავის საქმიანობას ახორციელებს რამდენიმე სტრატეგიული მიმართულებით: საზოგადოების გაძლიერება და მასში შეზღუდული შესაძლებლობების მქონე პირთა მოძრაობის გაზრდა; საინფორმაციო პროპაგანდის წარმოება სახელმწიფო პოლიტიკის დონეზე თანმიმდევრული და ეფექტური სტრატეგიული მიდგომის შემუშავების მიზნით, რათა მოხდეს შეზღუდული შესაძლებლობების მქონე პირთათვის თანაბარი შესაძლებლობების უზრუნველყოფა; საზოგადოების ცნოებიერების ამაღლება და თანამშრომლობა ცვლილებებისთვის - კონსტრუქციული პარტნიორობის დამყარება, როგორც სახელმწიფო უწყებებთან, ასევე არასამთავრობო ორგანიზაციებთან, დონორებთან და დამოუკიდებელ აქტივისტებთან.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>მისია:</strong></p>\r\n\r\n<p>ორგანიზაციის მისიაა შეზღუდული შესაძლებლობების მქონე პირთა ხელშეწყობა და მათი უფლებების დაცვა, რათა უზრუნველყოფილ იქნას თანაბარი ხელმისაწვდომობა ყველა იმ საჯარო სერვისზე, რომლითაც სარგებლობენ საზოგადოების სხვა წევრები.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>როგორც</strong><strong> </strong><strong>ქოლგა</strong><strong> </strong><strong>ორგანიზაცია</strong><strong>:</strong></p>\r\n\r\n<p>&nbsp;&bdquo;ხელმისაწვდომი გარემო ყველასთვის&ldquo;, თავის არაფორმალურ ქსელში აერთიანებს რამდენიმე რეგიონულ შშმ პირთა ორგანიზაციას. ისინი დაარსდა ორგანიზაციის &bdquo;ხელმისაწვდომი გარემო ყველასთვის&ldquo; ხელშეწყობით და მის მსგავსად წარმოადგენს შშმ პირთა დამოუკიდებელ სადამკვირვებლო ორგანიზაციას.</p>\r\n\r\n<p><strong>როგორც</strong><strong> </strong><strong>საზოგადოების</strong><strong> </strong><strong>წარმომადგენელი</strong><strong>:</strong></p>\r\n\r\n<p>&bdquo;ხელმისაწვდომი გარემო ყველასთვის&ldquo; იყო წამყვანი ორგანიზაცია, რომელმაც წვლილი შეიტანა გაეროს &bdquo;შეზღუდული შესაძლებლობის მქონე პირთა უფლებების&ldquo; შესახებ კონვენციის რატიფიცირებაში. ორგანიზაცია &bdquo;ხელმისაწვდომი გარემო ყველასთვის&ldquo; არის:</p>\r\n\r\n<ol>\r\n	<li>საქართველოს პარლამენტის ადამიანის უფლებათა დაცვისა და სამოქალაქო ინტეგრაციის კომიტეტში არსებული სამეცნიერო-საკონსულტაციო საბჭოს წევრი და საბჭოში კოორდინაციას უწევს შეზღუდული შესაძლებლობების საკითხებს;</li>\r\n	<li>საქართველოს პარლამენტის ჯანმრთელობის დაცვისა და სოციალურ საკითხთა კომიტეტის მრჩეველთა საბჭოს წევრი.</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>ორგანიზაცია &bdquo;ხელმისაწვდომი გარემო ყველასთვის&ldquo; იყო საზოგადოების ინტერესთა ძირითადი წარმომადგენელი საქართველოს სახალხო დამცველის აპარატისა და საქართველოს პრემიერ მინისტრის ადამიანის უფლებათა დაცვის სამდივნოს ქვეშ შექმნილ იმ სამუშაო ჯგუფში, რომელიც განსაზღვრავდა გაეროს შეზღუდული შესაძლებლობების მქონე პირთა უფლებების კონვენციის იმპლემენტაციისა და საზედამხედველო ორგანოების ინსტიტუციონალურ ჩარჩოს.</p>\r\n\r\n<p>ორგანიზაციამ &bdquo;ხელმისაწვდომი გარემო ყველასთვის&ldquo; განახორციელა მრავალი აქტივობა და პროექტი, რომლებიც მიმართული იყო საზოგადოების ცნობიერების ამაღლებისკენ - მათ შორის: სემინარები, ლექციები, საჯარო დისკუსიები როგორც გადაწყვეტილების მიმღები პირებისთვის, ასევე ჟურნალისტებისა და სტუდენტებითვის, სხვადასხვა ინკლუზიური სპორტული აქტივობები.</p>\r\n', '<p>&nbsp;</p>\r\n\r\n<p>DPO <strong>Accessible Environment for Everyone (AEE)</strong> was founded in 2011and is governed mostly by disabled activist. The mission of the organization is to provide assistance and advocacy for the rights of people with disabilities and to ensure their equal access to all public services enjoyed by other members of society. AEE works in several strategic directions: strengthening the community and giving rise to disability rights movement in the community itself; advocacy on state policy level for the consistent and effective strategic approach to ensure equal opportunities for PWDs; public awareness raising; and collaboration for change - establish constructive partnerships with both governmental and nongovernmental organizations, donors and independent activists.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>In order to achieve its mission, the organization has undertaken multiple projects and activities. Notably, AEE is one of only a few DPOs in Tbilisi which is independent from governmental organizations, does not provide governmental services, is funded by international foundations and focused on monitoring and advocacy activities. As an umbrella organization, AEE unites several regional DPOs in its informal network. Some of these regional organizations, from various regions and municipalities were founded with the support of AEE and like AEE represent independent watch-dog DPOs, too. AEE within the framework of three projects funded by OSGF, the U.S. Embassy and EC, has promoted the collaboration between local DPOs and local self-governing bodies in 6 municipalities (Sachkhere, Akhaltsikhe, Rustavi, Ozurgeti, Batumi, Ambrolauri), with the aim to make local self-governing bodies more transparent, accountable and sensitive to the needs of persons with disabilities (PWDs) while supporting the constitutional rights of PWDs to govern through these bodies. AEE was the key community representative organization contributing to the ratification of the United Nations Convention on the Rights of People with Disabilities (UNCRPD). AEE is a memberof:a) Scientific-Advisory Board existing under Georgian Parliament&rsquo;s Human Rights and Civil Integration Committee and coordinates disability related issues in Board; b) Advisory Board existing under Georgian Parliament&rsquo;s Healthcare and Social Issues Committee. AEE was the key community representative member of work groups created under Public Defender&rsquo;s office of Georgia and Secretariate to the Prime Minister on Human Rights defining the institutional framework of the UNCRPD implementation and monitoring bodies. Multiple activities and projects aimed at awareness raising have been implemented by AEE including the workshops, seminars, lectures, public discussions for decision makers, journalists, students;integrated sport and leisure events, etc. AEE has been working on harmonizing the local legislation with the UNCRPD and advocacy for the policy changes in partnership with the human rights lawyers and NGOs.</p>\r\n', '', '', '', '2017-07-03 22:08:09', '2017-09-02 19:12:32'),
(3, 19, '', '<p>Tbilisi, Tsereteli Ave 116, Didube Plaza, room 340</p>\r\n', '', '', '', '2017-07-14 08:44:21', '2017-07-22 16:09:55'),
(4, 73, '', '', '', '', '', '2017-07-16 17:48:29', '2017-07-16 17:55:24'),
(5, 74, '', '', '', '', '', '2017-07-18 16:44:00', '2017-07-23 18:12:15'),
(6, 69, '<h3>ჩვენი ორგანიზაციის წესდება</h3>\r\n\r\n<h1>&nbsp;</h1>\r\n\r\n<p>მუხლი 1</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>ზოგადი დებულებანი</p>\r\n\r\n<p>1.1. ა(ა)იპ მოძრაობა ხელმისაწვდომი გარემო ყველასთვის (AEE) (შემდგომში <strong>მოძრაობა</strong>) არის არასამეწარმეო იურიდიული პირი, რომელიც მოქმედებს საქართველოს კონსტიტუციის, კანონმდებლობისა და ამ წესდების შესაბამისად.</p>\r\n\r\n<p>1.2. მოძრაობის ორგანიზაციულ - სამართლებრივი ფორმაა არასამეწარმეო (არაკომერციული) იურიდიული პირი. მოძრაობა დაფუძნებულია 2011 წლის 31 მაისს.</p>\r\n\r\n<p>1.3. მოძრაობა, თავისი მიზნებიდან გამომდინარე მოქმედებს განუსაზღვრელი ვადით, საქართველოს მთელ ტერიტორიაზე, ასევე მის ფარგლებს გარეთ.</p>\r\n\r\n<p>1.4. მოძრაობის ადგილსამყოფელია საქართველო, ქ. თბილისი, ძველი თბილისის რაიონი, მარჯანიშვილის ქ., №16, კორპ. №5, ბინა 31.</p>\r\n\r\n<p>1.5. მოძრაობის ელ.ფოსტა: <a href="mailto:info@ertad.org">info@ertad.org</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>მუხლი 2</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>მიზნები</strong></p>\r\n\r\n<p><strong>2.1. </strong><strong>მოძრაობის</strong><strong> </strong><strong>მიზნებია</strong><strong>:</strong></p>\r\n\r\n<p>ა) შეზღუდული შესაძლებლობის მქონე პირთა (შემდგომში შშმ პირთა), ღირსების, უფლებებისა და თავისუფლებების დაცვა;</p>\r\n\r\n<p>ბ) სფეროში მოქმედი სამოქალაქო საზოგადოების განვითარება;</p>\r\n\r\n<p>გ) საზოგადოებაში შესაძლებლობათა შეზღუდულობაზე ცნობიერების ამაღლება.</p>\r\n\r\n<p>მუხლი 3</p>\r\n\r\n<p>საქმიანობის ფორმები</p>\r\n\r\n<p><strong>3.1. </strong><strong>საწესდებო</strong><strong> </strong><strong>მიზნების</strong><strong> </strong><strong>მისაღწევად</strong><strong> </strong><strong>მოძრაობა</strong><strong>:</strong></p>\r\n\r\n<p>3.1.1. ეწევა საგანმანათლებლო - შემეცნებით საქმიანობას შშმ პირთა საკითხებზე, თანაბარი უფლებებისა და კანონიერი ინტერესების დაცვაზე ცოდნის ასამაღლებლად;</p>\r\n\r\n<p>3.1.2. ქმნის შშმ პირთა იურიდიული საინფორმაციო, საცნობარო და საკონსულტაციო მომსახურების ცენტრებს (ბიუროებს) და უზრუნველყოფს სასამართლო და სხვა ორგანოებში წარმომადგენლობას. ხელს უწყობს შშმ ადამინთა სამართლებრივი დაცვის ეფექტური და მისაწვდომი ინფრასტრუქტურის შექმნას;</p>\r\n\r\n<p>3.1.3. ეწევა შშმ პირთა უფლებების აღდენასა და ყოფის გაუმჯობესებაზე მიმართული სახელმწიფო და სხვა პროგრამების შეფასებასა და მონიტორინგს. მოძრაობის პოზიციების გამოხატვის გზით აქტიურად მონაწილეობს სფეროში არსებული მნიშვნელოვანი საკითხების განხილვაში;</p>\r\n\r\n<p>3.1.4. ეწევა შშმ ადამინთა უფლებების, &bdquo;დამოუკიდებელი ცხოვრების იდეის&ldquo;, ჩართულობის მნიშვნელობის პოპულარიზაციასა და ხელს უწყობს საკითხზე თანამედროვე მიდგომების დამკვიდრებას;</p>\r\n\r\n<ol>\r\n	<li>ზრუნავს უნივერსალური გარემო-ინფრასტრუქტურის განვითარებაზე;</li>\r\n</ol>\r\n\r\n<p>3.1.6. ზრუნავს საკითხებზე არსებული თანამედროვე ლიტერატურით, აუდიო და ვიდეო მასალებით აღჭურვილი საბიბლიოთეკო ქსელის შექმნასა და განვითარებაზე. ეწევა საგამომცემლო და მთარგმნელობით საქმიანობას;</p>\r\n\r\n<p>3.1.7. თანამშრომლობს სფეროში მოქმედ ადგილობრივ და საერთაშორისო ორგანიზაციებთან, მათ შორის შშმ პირებისთვის სერვისების მომწოდებელ ორგანიზაციებთან;</p>\r\n\r\n<p>3.1.8. ეწევა დამხმარე ხასიათის სამეწარმეო საქმიანობას, რომელიც არ ცვლის მისი, როგორც არასამეწარმეო იურიდიული პირის ხასიათს;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>3.1.9. შშმ პირთა უფლებების რეალიზაციის მიზნით, ასევე ქმნის ქსელებს, კოალიციებს ანდა სხვა ფორმის გაერთიენებებს;</p>\r\n\r\n<p>3.1.10. საჭიროების შემთხვევაში გასცემს გრანტებს;</p>\r\n\r\n<p>3.1.11. ეწევა სხვა საქმიანობას, რომელიც არ არის აკრძალული კანონით.</p>\r\n\r\n<p>მუხლი 4</p>\r\n\r\n<p>წევრობა</p>\r\n\r\n<p>4.1. მოძრაობის წევრი შეიძლება გახდეს, ნებისმიერი ფიზიკური ანდა იურიდიული პირი, რომელიც იზიარებს მოძრაობის მიზნებს. მოძრაობის <strong><em>შეზღუდული</em></strong><strong><em> </em></strong><strong><em>შესაძლებლობის</em></strong><strong><em> </em></strong><strong><em>სტატუსის</em></strong><strong><em> </em></strong><strong><em>არმქონე</em></strong><strong><em> </em></strong><strong><em>წევრთა</em></strong><strong><em> </em></strong><strong><em>რიცხვი</em></strong><strong><em> </em></strong><strong><em>არ</em></strong><strong><em> </em></strong><strong><em>უნდა</em></strong><strong><em> </em></strong><strong><em>აღემატებოდეს</em></strong><strong><em> </em></strong><strong><em>წევრთა</em></strong><strong><em> </em></strong><strong><em>საერთო</em></strong><strong><em> </em></strong><strong><em>რიცხვის</em></strong><strong><em> </em></strong><strong><em>50%-</em></strong><strong><em>ს</em></strong><strong><em>.</em></strong></p>\r\n\r\n<p>4.2. მოძრაობის წევრობის მსურველი დადგენილი ფორმით წერილობითი განცხადებით მიმართავს მოძრაობის გამგეობას. გამგეობა წევრად მიღების საკითხს წყვეტს განცხადების შემოსვლიდან არა უგვიანეს 6 თვისა. გაწევრიანების საკითხის გადაწყვეტამდე წევრობის მსურველმა უნდა წარმოადგინოს მოძრაობის ორი წევრის დადგენილი ფორმით წერილობითი რეკომენდაცია.</p>\r\n\r\n<p>4.3. პირი, რომელიც აქტიურად უჭერს მხარს მოძრაობის საქმიანობას, მოძრაობის გამგეობის გადაწყვეტილებით შეიძლება მიღებულ იქნეს მოძრაობის საპატიო წევრად. საპატიო წევრზე არ ვრცელდება მოძრაობის წევრისათვის ამ წესებით დადგენილი უფლება-მოვალეობანი.</p>\r\n\r\n<p>4.4. მოძრაობის დამფუძნებლები და შემდგომ გაწევრიანებული პირები თანაბარი სტატუსით სარგებლობენ.</p>\r\n\r\n<p>4.5. მოძრაობის წევრს უფლებამოსილება უწყდება:</p>\r\n\r\n<ol>\r\n	<li>საკუთარი განცხადების საფუძველზე;</li>\r\n	<li>გარდაცვალებისას;</li>\r\n</ol>\r\n\r\n<p>4.5.3. საერთო კრების გადაწყვეტილებით მოძრაობის წევრი შეიძლება გაირიცხოს მოძრაობიდან, თუ მისი საქმიანობა ეწინააღმდეგება მოძრაობის მიზნებს ან იგი უხეშად არღვევს ამ წესდებით მასზე დაკისრებულ მოვალეობებს.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>მუხლი 5</p>\r\n\r\n<p><strong>წევრთა</strong><strong> </strong><strong>უფლება</strong><strong>-</strong><strong>მოვალეობანი</strong><strong> 5.1. </strong><strong>მოძრაობის</strong><strong> </strong><strong>წევრს</strong><strong> </strong><strong>უფლება</strong><strong> </strong><strong>აქვს</strong><strong>:</strong></p>\r\n\r\n<ol>\r\n	<li>აირჩიოს და არჩეულ იქნეს მოძრაობის მმართველობის ორგანოებში;</li>\r\n</ol>\r\n\r\n<p>5.1.2. კვალიფიკაციისა და შესაძლებლობების შესაბამისად მონაწილეობდეს მოძრაობის პროგრამებში;</p>\r\n\r\n<ol>\r\n	<li>სათათბირო ხმის უფლებით მონაწილეობდეს გამგეობის სხდომებში;</li>\r\n</ol>\r\n\r\n<p>5.1.4. მიიღოს ყოველგვარი ინფორმაცია მოძრაობის ხელმძღვანელი ორგანოებისა და პირებისაგან მოძრაობის საქმიანობის შესახებ;</p>\r\n\r\n<p>5.1.5. მოძრაობის მიზნების შესაბამისად, შესაძლებლობის ფარგლებში, ისარგებლოს მოძრაობის საკუთრებაში არსებული ინფორმაციით და მატერიალურ - ტექნიკური საშუალებებით;</p>\r\n\r\n<ol>\r\n	<li>ატაროს მოძრაობის ემბლემა.</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>5.2. მოძრაობის წევრი მოვალეა:</p>\r\n\r\n<p>5.2.1. დაიცვას მოძრაობის წესდება, შინაგანაწესი და მმართველი ორგანოების მიერ მიღებული გადაწყვეტილებები;</p>\r\n\r\n<ol>\r\n	<li>გაუფრთხილდეს მოძრაობის ღირსებას, ავტორიტეტსა და ქონებას;</li>\r\n</ol>\r\n\r\n<p>5.2.3. შესაძლებლობებისა და ინტერესების შესაბამისად მონაწილეობდეს მოძრაობის საქმიანობაში;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>5.2.4. სფეროში საქმიანობისას იხელმძღვანელოს მოძრაობის მიზნებითა და დადგენილი ეთიკის ნორმებით;</p>\r\n\r\n<p>მუხლი 6</p>\r\n\r\n<p>საერთო კრება</p>\r\n\r\n<p>6.1. მოძრაობის უმაღლესი ხელმძღვანელი ორგანოა მოძრაობის წევრთა საერთო კრება, რომელიც მოიწვევა გამგეობის მიერ და ტარდება წელიწადში ერთხელ მაინც;</p>\r\n\r\n<p>6.2. საერთო კრების დღის წესრიგში წესდების ცვლილებების საკითხის შეტანას წყვეტს გამგეობა, გარდა იმ შემთხვევებისა, როდესაც ცვლილებებისა და დამატებების პროექტი წარდგენილ იქნა მოძრაობის წევრთა 1/10-ის მოთხოვნით.</p>\r\n\r\n<p>6.3. საერთო კრება უფლებამოსილია, თუ მას ესწრება წევრთა 2/3. საერთო კრება გადაწყვეტილებებს იღებს დამსწრეთა უმრავლესობით, თუ წესდებით ან კანონით სხვა რამე არ არის გათვალისწინებული. ყოველ წევრს აქვს ერთი ხმა. ხმის გადაცემა დაუშვებელია. საერთო კრების მუშაობაში წევრს მონაწილეობა შეუძლია, ასევე თანამედროვე საკომუნიკაციო საშუალებების გამოყენებით.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>6.4. საერთო კრება:</p>\r\n\r\n<p>6.4.1. დამსწრეთა 2/3-ის უმრავლესობით განიხილავს და იღებს მოძრაობის წესდებასა და ცვლილებები შეაქვს მასში;</p>\r\n\r\n<p>6.4.2. ფარული კენჭისყრით დამსწრეთა ფარდობითი უმრავლესობით ირჩევს გამგეობის წევრებს. ხმის თანაბრად გაყოფის შემთხვევაში იმართება წილისყრა;</p>\r\n\r\n<ol>\r\n	<li>ისმენს მოძრაობის საქმიანობისა და ფინანსურ ანგარიშს;</li>\r\n</ol>\r\n\r\n<p>6.4.4. დამსწრეთა უმრავლესობით ამტკიცებს გამგეობის მიერ წარმოდგენილ, მოძრაობის საქმიანობის სტრატეგიულ მიმართულებებს;</p>\r\n\r\n<ol>\r\n	<li>დამსწრეთა 2/3-ით იღებს გადაწყვეტილებებს მოძრაობის რეორგანიზაციის შესახებ;</li>\r\n	<li>წევრთა 4/5-ით იღებს გადაწყვეტილებას მოძრაობის თვითლიკვიდაციის შესახებ;</li>\r\n	<li>იღებს გადაწყვეტილებას წევრის მოძრაობის გარიცხვის შესახებ;</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>6.5. რიგგარეშე საერთო კრება მოიწვევა მოძრაობის გამგეობის მიერ:</p>\r\n\r\n<ol>\r\n	<li>საკუთარი ინიციატივით;</li>\r\n</ol>\r\n\r\n<p>6.5.2. თავმჯდომარი ან მოძრაობის წევრთა 1/10-ის მოთხოვნით, ასეთი მოთხოვნის წარდგენიდან არა უგვიანეს 60 (სამოცი) კალენდარული დღისა.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>მუხლი 7</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>გამგეობა</strong></p>\r\n\r\n<p>7.1. მოძრაობის ხელმძღვანელი ორგანოა 5 წევრისაგან შემდგარი გამგეობა, რომლის წევრებსაც ორი წლის ვადით ირჩევს საერთო კრება. <strong><em>შეზღუდული</em></strong><strong><em> </em></strong><strong><em>შესაძლებლობის</em></strong><strong><em> </em></strong><strong><em>სტატუსის</em></strong><strong><em> </em></strong><strong><em>არმქონე</em></strong><strong><em> </em></strong><strong><em>გამგეობის</em></strong><strong><em> </em></strong><strong><em>წევრთა</em></strong><strong><em> </em></strong><strong><em>რიცხვი</em></strong><strong><em> </em></strong><strong><em>არ</em></strong><strong><em> </em></strong><strong><em>უნდა</em></strong><strong><em> </em></strong><strong><em>აღემატებოდეს</em></strong><strong><em> </em></strong><strong><em>გამგეობის</em></strong><strong><em> </em></strong><strong><em>წევრთა</em></strong><strong><em> </em></strong><strong><em>საერთო</em></strong><strong><em> </em></strong><strong><em>რიცხვის</em></strong><strong><em> </em></strong><strong><em>50%-</em></strong><strong><em>ს</em></strong><strong><em>. </em></strong>გამგეობის წევრად შეიძლება აირჩეს ის პირიც, რომელიც არ იმყოფება საერთო კრებაზე, თუ არსებობს მისი წინასწარი წერილობითი თანხმობა გამგეობის წევრად არჩევის თაობაზე.</p>\r\n\r\n<p>7.2. გამგეობის სხდომები იმართება ყოველი ორი თვის ბოლო კვირაში. რიგგარეშე სხდომა მოიწვევა მოძრაობის თავმჯდომარის მიერ საკუთარი ინიციატივით ან გამგეობის წევრთა 1/3-ის მოთხოვნით.</p>\r\n\r\n<p>7.3. გამგეობა უფლებამოსილია, თუ სხდომას ესწრება წევრთა ნახევარზე მეტი. გადაწყვეტილება მიიღება დამსწრეთა უმრავლესობით, თუ წესდებით სხვა რამ არ არის გათვალისწინებული.</p>\r\n\r\n<p>7.4. გამგეობის წევრებს და მოძრაობის სხვა სტრუქტურული ერთეულების ხელმძღვანელებს გამგეობის ჩატარების თარიღსა და დღის წესრიგის შესახებ ეცნობებათ სხდომამდე 7 კალენდარული დღით ადრე მაინც, ხოლო რიგგარეშე სხდომის მოწვევის შემთხვევაში - დაუყოვნებლივ.</p>\r\n\r\n<ol>\r\n	<li>გამგეობა:</li>\r\n</ol>\r\n\r\n<p>7.5.1. გამგეობის წევრთაგან ფარული კენჭისყრით ირჩევს მოძრაობის თავმჯდომარეს; თავმჯდომარის წარდგინებით გამგეობის წევრთაგან ფარული კენჭისყრით ირჩევს მის მოადგილეს;</p>\r\n\r\n<p>7.5.2. იწვევს და ატარებს საერთო კრებას, კრების თარიღისა და დღის წესრიგის შესახებ ორი კვირით ადრე მაინც აცნობებს მოძრაობის წევრებს;</p>\r\n\r\n<p>7.5.3. მოძრაობის წესდებაში ცვლილებებისა და დამატებების პროექტს საერთო კრებისათვის წარსადგენად აქვეყნებს კრებამდე ერთი თვით ადრე;</p>\r\n\r\n<ol>\r\n	<li>იძლევა თანხმობას აღმასრულებელი დირექტორის დანიშვნაზე;</li>\r\n	<li>ფარული კენჭისყრით წყვეტს მოძრაობის წევრად მიღების საკითხს;</li>\r\n</ol>\r\n\r\n<p>7.5.6. სარეკომენდაციო წერილით მიმართავს მოძრაობის იმ წევრებს, რომლის საქმიანობაც ეწინააღმდეგება მოძრაობის მიზნებს ან რომელიც უხეშად არღვევს წესდებით მასზე დაკისრებულ მოვალეობებს;</p>\r\n\r\n<ol>\r\n	<li>ადგენს წევრობის მსურველებთან და წევრებთან ურთიერთობის წესს;</li>\r\n</ol>\r\n\r\n<p>7.5.8. შეიმუშავებს და საერთო კრებას დასამტკიცებლად წარუდგენს მოძრაობის საქმიანობის სტრატეგიულ მიმართულებებს;</p>\r\n\r\n<p>7.5.9. ამტკიცებს მოძრაობის მიერ გაწეული საქმიანობისა და ფინანსურ ანგარიშს საერთო კრებისთვის წარსადგენად;</p>\r\n\r\n<p>7.5.10. ამტკიცებს მოძრაობის სტრატეგიული გეგმისა და საბიუჯეტო პარამეტრებს;</p>\r\n\r\n<p>7.5.11. წყვეტს მოძრაობის რეგისტრირებულ ორგანიზაციებში წევრობისა და იურიდიული პირის დაფუძნებაში მონაწილეობის საკითხს;</p>\r\n\r\n<p>7.5.12. ამტკიცებს აღმასრულებელი დირექტორის საქმიანობის შესახებ დებულებას;</p>\r\n\r\n<p>7.5.13. ამტკიცებს აღმასრულებელი დირექტორის ანგარიშს გაწეული საქმიანობის შესახებ;</p>\r\n\r\n<p>7.5.14. ადგენს მოძრაობის თანამშრომელთა სახელფასო ბადეს;</p>\r\n\r\n<p>7.5.15. თავმჯდომარის წარდგინებით ამტკიცებს მოძრაობის ორგანიზაციულ სტრუქტურას;</p>\r\n\r\n<p>7.5.16. ფარული კენჭისყრით წევრთა უმრავლესობით თანამდებობიდან გადააყენებს მოძრაობის თავმჯდომარეს, მის მოადგილეს და აღმასრულებელ დირექტორს;</p>\r\n\r\n<p>7.5.17. აფუძნებს მოძრაობის საწარმოებს და მოძრაობის თავმჯდომარის წარდინებით ნიშნავს და ათავისუფლებს მათ ხელმძღვანელებს;</p>\r\n\r\n<p>7.5.18. წყვეტს სხვა საკითხებს, რომლებიც ამ წესდებით არ განეკუთვნება საერთო კრებისა და სხვა მმართველი ორგანოების კომპეტენციას.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>7.5.19. გამგეობის წევრის უფლებამოსილების ვადაზე ადრე შეწყვეტის შემთხვევაში გამგეობის წევრი ხდება ის პირი, რომელმაც დააგროვა ხმათა მეტი, მაგრამ გამგეობის წევრად არჩევისათვის არასაკმარისი რაოდენობა უკანასკნელ საერთო კრებაზე. თანაბარი ხმების მქონე პირთაგან გამგეობის წევრი შეირჩევა გამგეობის მიერ ჩატარებული წილისყრით.</p>\r\n\r\n<p>7.5.20. ახლად არჩეული გამგეობის წევრი უფლებამოსილებას ახორციელებს გამოკლებული წევრის უფლებამოსილების დარჩენილი პერიოდის განმავლობაში.</p>\r\n\r\n<p>7.5.21. მოძრაობის გამგეობის წევრები არიან:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li><strong>გიორგი</strong><strong> </strong><strong>ახმეტელი</strong></li>\r\n</ol>\r\n\r\n<table border="1" cellspacing="0">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>პირადი ნომერი:</p>\r\n			</td>\r\n			<td>\r\n			<p>01030018229</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>დაბადების თარიღი:</p>\r\n			</td>\r\n			<td>\r\n			<p>1981-12-03</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>მისამართი:</p>\r\n			</td>\r\n			<td>\r\n			<p>თბილისი დ. აღმაშენებლის გამზ. N 35</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li><strong>გიორგი</strong><strong> </strong><strong>ალავიძე</strong></li>\r\n</ol>\r\n\r\n<table border="1" cellspacing="0">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>პირადი ნომერი:</p>\r\n			</td>\r\n			<td>\r\n			<p>01008014280</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>დაბადების თარიღი:</p>\r\n			</td>\r\n			<td>\r\n			<p>1971-09-26</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>მისამართი:</p>\r\n			</td>\r\n			<td>\r\n			<p>თბილისი ნ. რამიშვილის ქ. N 2 ბ. 25</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li><strong>მამუკა</strong><strong> </strong><strong>მაჭავარიანი</strong></li>\r\n</ol>\r\n\r\n<table border="1" cellspacing="0">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>პირადი ნომერი:</p>\r\n			</td>\r\n			<td>\r\n			<p>01002000333</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>დაბადების თარიღი:</p>\r\n			</td>\r\n			<td>\r\n			<p>1977-08-04</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>მისამართი:</p>\r\n			</td>\r\n			<td>\r\n			<p>თბილისი გლდანი III მ/რ კორ. 68ა ბ. 68</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li><strong>ირაკლი</strong><strong> </strong><strong>გიორგაძე</strong></li>\r\n</ol>\r\n\r\n<table border="1" cellspacing="0">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>პირადი ნომერი:</p>\r\n			</td>\r\n			<td>\r\n			<p>01009011964</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>დაბადების თარიღი:</p>\r\n			</td>\r\n			<td>\r\n			<p>1982-04-06</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>მისამართი:</p>\r\n			</td>\r\n			<td>\r\n			<p>თბილისი ნ. ცხვედაძის ქ. N 1</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li><strong>ლია</strong><strong> </strong><strong>ტაბატაძე</strong></li>\r\n</ol>\r\n\r\n<table border="1" cellspacing="0">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>პირადი ნომერი:</p>\r\n			</td>\r\n			<td>\r\n			<p>01011031777</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>დაბადების თარიღი:</p>\r\n			</td>\r\n			<td>\r\n			<p>1982-07-01</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>მისამართი:</p>\r\n			</td>\r\n			<td>\r\n			<p>თბილისი ბერი გაბრიელ სალოსის VI შეს. N 3 ბ. 18</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>მუხლი 8</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>თავმჯდომარე</strong></p>\r\n\r\n<ol>\r\n	<li>მოძრაობის თავმჯდომარეს და მის მოადგილეს თავის წევრთაგან ორი წლის ვადით ირჩევს გამგეობა მორიგი საერთო კრების შემდეგ პირველსავე სხდომაზე.</li>\r\n	<li>პირი მოძრაობის თავმჯდომარედ არ შეიძლება აირჩეს ზედიზედ ორზე მეტი ვადით.</li>\r\n	<li>თავმჯდომარის კანდიდატურის წამოყენების უფლება აქვს გამგეობის ყოველ წევრს.</li>\r\n	<li>ახლად არჩეული თავმჯდომარე ასახელებს თავისი მოადგილის კანდიდატურას.</li>\r\n	<li>მოძრაობის თავმჯდომარისა და მოადგილეს უფლებამოსილება იწყება არჩევის მომენტიდან და გრძელდება შესაბამისად ახალი თავმჯდომარის და მოადგილის არჩევამდე.</li>\r\n</ol>\r\n\r\n<p>8.6. თავმჯდომარე:</p>\r\n\r\n<ol>\r\n	<li>წარმართავს მოძრაობის სამიანობას საწესდებო მიზნების მისაღწევად;</li>\r\n	<li>ხელმძღვანელობს გამგეობის საქმიანობას და უძღვება მის სხდომებს;</li>\r\n	<li>წარმოადგენს მოძრაობას სხვა პირებთან ურთიერთობაში;</li>\r\n	<li>წყვეტს მოძრაობის კონკრეტული მიზნით შემანილ კოალიციებში გაერთიანების საკითხს და ამის შესახებ აცნობებს გამგეობის წევრებს;</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>8.11. ზედამხედველობს მოძრაობის ფინანსური სახსრებისა და სხვა მატერიალური ქონების მართვას;</p>\r\n\r\n<p>8.12. უძღვება მოძრაობის წევრებთან და წევრობის მსურველებთან მუშაობას გამგეობის მიერ დაგენილი წესით;</p>\r\n\r\n<p>8.13. ხელს აწერს მოძრაობის ოფიციალურ დოკუმენტებს გარდა ფინანსური დოკუმენტაციისა;</p>\r\n\r\n<ol>\r\n	<li>გამგეობას დასამტკიცებლად წარუდგენს მოძრაობის ორგანიზაციულ სტრუქტურას;</li>\r\n	<li>აღმასრულებელი დირექტორის დანიშვნამდე ასრულებს მის ფუნქციებს;</li>\r\n</ol>\r\n\r\n<p>8.3. მოადგილე თავმჯდომარის რწმუნებით ასრულებს თავმჯდომარის მოვალეობას თავმჯდომარის მიერ განსაზღვრული უფლებამოსილებების ფარგლებში. მოძრაობის თავმჯდომარის გადადგომის შემთხვევაში ახალი თავმჯდომარის არჩევამდე თავმჯდომარის ფუნქციებს ასრულებს მისი მოადგილე.</p>\r\n\r\n<p>8.4. თავმჯდომარის (მოადგილეს) უფლბამოსილების ვადამდე შეწყვეტა მის მიერ წესდებით განსაზღვრული მოვალეობების შეუსრულებლობის, უფლბამოსილების გადამეტების ან მოძრაობის საწესდებო მიზნებთან შეუსაბამო საქციელისთვის შეუძლია მხოლოდ გამგეობას. ასეთ შემთხვევაში გამგეობა ერთი თვის ვადაში ირჩევს ახალ თავმჯდომარეს (მოადგილეს) დარჩენილი ვადით.</p>\r\n\r\n<p>8.5. მოძრაობი თავმჯდომარეს უფლება არა აქვს იმავდროულად იყოს საჯარო სამსახურში ან ეწეოდეს ისეთ საქმიანობას, რომელიც ხელს უშლის მის მიერ თავმჯდომარის უფლებამოსილებათა განხორციელებას დატვირთვის ან ინტერესთა შეუთავსებლობის გამო.</p>\r\n\r\n<ol>\r\n	<li>მოძრაობის თავმჯდომარის ხელფასის ოდენობას განსაზღვრავს გამგეობა.</li>\r\n	<li>მოძრაობის გამგეობის თავმჯდომარეა:</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>გიორგი</strong><strong> </strong><strong>ახმეტელი</strong></p>\r\n\r\n<table border="1" cellspacing="0">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>პირადი ნომერი:</p>\r\n			</td>\r\n			<td>\r\n			<p>01030018229</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>დაბადების თარიღი:</p>\r\n			</td>\r\n			<td>\r\n			<p>1981-12-03</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>მისამართი:</p>\r\n			</td>\r\n			<td>\r\n			<p>თბილისი დ. აღმაშენებლის გამზ. N 35</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>მუხლი 9</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>აღმასრულებელი</strong><strong> </strong><strong>დირექტორი</strong></p>\r\n\r\n<ol>\r\n	<li>აღმასრულებელ დირექტორს ნიშნავს თავმჯდომარე გამგეობის თანხმობით;</li>\r\n	<li>აღმასრულებელი დირექტორი:</li>\r\n</ol>\r\n\r\n<p>9.3. მოქმედებს მოძრაობის სახელით და წარმოადგენს მას მესამე პირებთან ურთიერთობაში, აესევე გამგეობის მიერ დამტკიცებული დებულების ფარგლებში წარმოადგენს გამგეობას მესამე პირებთან ურთიერთობაში, გარდა თავმჯდომარისა და გამგეობის უფლებამოსილებას განკუთვნილი საკითხებისა;</p>\r\n\r\n<ol>\r\n	<li>გაწეული საქმიანობის შესახებ 3 თვეში ერთხელ ანგარიშს აბარებს გამგეობას;</li>\r\n</ol>\r\n\r\n<p>9.5. გამგეობის მიერ დადგენილი წესით განკარგავს მოძრაობის ფულად სახსრებსა და მატერიალურ რესურსებს და პასუხისმგებელია მათ სწორ გამოყენებაზე, ხელს აწერს შესაბამის ოფიციალურ და საფინანსო დოკუმენტაციას;</p>\r\n\r\n<ol>\r\n	<li>ამტკიცებს განსახორციელებელი პროგრამების პროექტებს;</li>\r\n	<li>მოძრაობის სახელით დებს ხელშეკრულებებს პროექტთან დაკავშირებულ საკითხებზე;</li>\r\n</ol>\r\n\r\n<p>9.8. თავმჯდომარესთან შეთანხმებით ნიშნავს და ათავისუფლებს პროექტების კოორდინატორებს (მენეჯერებს);</p>\r\n\r\n<ol>\r\n	<li>ნიშნავს და ათავისუფლებს მოძრაობის თანამშრომლებს;</li>\r\n</ol>\r\n\r\n<p>9.10. აღმასრულებელი დირექტორის საქმიანობის წესი განისაზღვრება გამგეობის მიერ დამტკიცებული დებულებით;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li>აღმასრულებელ დირექტორთან იდება შრომითი ხელშეკრულება, რომელსაც ხელს აწერს მოძრაობის თავმჯდომარე.</li>\r\n	<li>მოძრაობის აღმასრულებელი დირექტორია:</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>კობა</strong><strong> </strong><strong>ნადირაძე</strong></p>\r\n\r\n<table border="1" cellspacing="0">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>პირადი ნომერი:</p>\r\n			</td>\r\n			<td>\r\n			<p>01010013178</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>დაბადების თარიღი:</p>\r\n			</td>\r\n			<td>\r\n			<p>1966-07-24</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>მისამართი:</p>\r\n			</td>\r\n			<td>\r\n			<p>თბილისი შ. ნუცუბიძის ქ. N 215 კორ. 2 ბ. 24</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>მუხლი 10</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>მოძრაობის</strong><strong> </strong><strong>ქონება</strong></p>\r\n\r\n<p>10.1. მოძრაობის ქონება იქმნება საწევრო შენატანების, წევრთა და სხვა პირთა შემოწირულობების, გრანტების, დამხმარე ხასიათის სამეწარმეო საქმიანობითა და სხვა კანონიერი გზით მიღებული შემოსავლებისგან.</p>\r\n\r\n<p>10.2. მოძრაობის ქონება შეიძლება მოხმარდეს მხოლოდ მისი საწესდებო მიზნების განხორციელებას.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>მუხლი 11</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>მოძრაობის</strong><strong> </strong><strong>საქმიანობის</strong><strong> </strong><strong>შეწყვეტა</strong></p>\r\n\r\n<ol>\r\n	<li>მოძრაობის საქმიანობის შეწყვეტა (გაუქმება) ხდება შემდეგ შემთხვევებში:</li>\r\n	<li>გაკოტრების საქმის წარმოების გახსნის ან რეგისტრაციის გაუქმების შემთხვევაში;</li>\r\n	<li>მოძრაობის საერთო კრების გადაწყვეტილებით;</li>\r\n	<li>კანონმდებლობით გათვალისწინებული სხვა შემთხვევებში.</li>\r\n	<li>მოძრაობის ლიკვიდაციას ახორციელებს აღმასრულებელი დირექტორი;</li>\r\n</ol>\r\n\r\n<p>10.8. ლიკვიდაციის დამთავრების შემდეგ დარჩენილი ქონება გადაეცემა იმავე ან მზგავსი მიზნების სხვა არასამეწარმეო იურიდიულ პირს მოძრაობის გამგეობის გადაწყვეტილების საფუძველზე.</p>\r\n', '', '', '', '', '2017-09-30 12:02:51', '2017-09-30 12:58:26');

-- --------------------------------------------------------

--
-- Table structure for table `ThemeSettings`
--

CREATE TABLE IF NOT EXISTS `ThemeSettings` (
  `id` int(11) NOT NULL,
  `code` varchar(25) NOT NULL,
  `theme` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ThemeSettings`
--

INSERT INTO `ThemeSettings` (`id`, `code`, `theme`) VALUES
(1, 'main_slider', 'V1'),
(2, 'news', 'V1'),
(3, 'master_page', 'V1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `permissions`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Lado Bortishvili', 'visuallado@gmail.com', 'admin', '$2y$10$fmKK4yqrLZ223.fI30c04uuJJeDZaUUp9laMVmx9p9mT/BFfu0Z5O', 'gWj9SwVQgzdy8o1sBvoWHNyDXLx1cWT1iAZHwhg1ZO0QILntCoGPl0AfIEEA', '2017-01-19 08:53:42', '2017-09-30 10:16:42'),
(2, 'member memberashvili', 'member@gmail.com', 'member', '$2y$10$fmKK4yqrLZ223.fI30c04uuJJeDZaUUp9laMVmx9p9mT/BFfu0Z5O', 'EcFjoGAXZOyJOVltwmfadV2k4d8Agl3jjKzWQXb53ac9tv3D2rjIo7iO1dZp', '2017-01-19 08:53:42', '2017-01-21 04:57:06');

-- --------------------------------------------------------

--
-- Table structure for table `Videos`
--

CREATE TABLE IF NOT EXISTS `Videos` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `main` int(1) NOT NULL DEFAULT '1',
  `image` varchar(255) NOT NULL,
  `tumb` text NOT NULL,
  `date` varchar(50) NOT NULL,
  `title_ge` varchar(255) NOT NULL,
  `video_url` text NOT NULL,
  `short_text_ge` text NOT NULL,
  `full_text_ge` longtext NOT NULL,
  `description_ge` text NOT NULL,
  `keywords_ge` text NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `short_text_en` text NOT NULL,
  `full_text_en` longtext NOT NULL,
  `description_en` text NOT NULL,
  `keywords_en` text NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `short_text_ru` text NOT NULL,
  `full_text_ru` longtext NOT NULL,
  `description_ru` text NOT NULL,
  `keywords_ru` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Videos`
--

INSERT INTO `Videos` (`id`, `menu_id`, `main`, `image`, `tumb`, `date`, `title_ge`, `video_url`, `short_text_ge`, `full_text_ge`, `description_ge`, `keywords_ge`, `title_en`, `short_text_en`, `full_text_en`, `description_en`, `keywords_en`, `title_ru`, `short_text_ru`, `full_text_ru`, `description_ru`, `keywords_ru`, `created_at`, `updated_at`) VALUES
(10, 80, 1, 'files/videos/1503075955_1496316724_05.jpg', 'files/videos/tumb/1503075955_1496316724_05.jpg', 'Mon, Nov 20, 2017 11:26 AM', 'საქველმოქმედო ვიდეო1', 'https://www.youtube.com/watch?v=cZGghmwUcbQ', 'დავდგეთ ერთმანეთის გვერდში, ეს ჩვენი ვალია', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-08-18 17:05:55', '2017-11-20 11:26:37'),
(11, 80, 1, 'files/videos/1503075955_1496316724_05.jpg', 'files/videos/tumb/1503075955_1496316724_05.jpg', 'Mon, Nov 20, 2017 11:26 AM', 'საქველმოქმედო ვიდეო2', 'https://www.youtube.com/watch?v=cZGghmwUcbQ', 'დავდგეთ ერთმანეთის გვერდში, ეს ჩვენი ვალია', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-08-18 17:05:55', '2017-11-20 11:26:44'),
(12, 80, 1, 'files/videos/1503075955_1496316724_05.jpg', 'files/videos/tumb/1503075955_1496316724_05.jpg', 'Mon, Nov 20, 2017 11:26 AM', 'საქველმოქმედო ვიდეო3', 'https://www.youtube.com/watch?v=cZGghmwUcbQ', 'დავდგეთ ერთმანეთის გვერდში, ეს ჩვენი ვალია', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-08-18 17:05:55', '2017-11-20 11:26:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ABforms`
--
ALTER TABLE `ABforms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `AdminNavigation`
--
ALTER TABLE `AdminNavigation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Album`
--
ALTER TABLE `Album`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `AModuleLists`
--
ALTER TABLE `AModuleLists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Aromats`
--
ALTER TABLE `Aromats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Banner`
--
ALTER TABLE `Banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Campaigns`
--
ALTER TABLE `Campaigns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Category`
--
ALTER TABLE `Category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Events`
--
ALTER TABLE `Events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flags`
--
ALTER TABLE `flags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Gallery`
--
ALTER TABLE `Gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ltm_translations`
--
ALTER TABLE `ltm_translations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `more_images`
--
ALTER TABLE `more_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navigation`
--
ALTER TABLE `navigation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `News`
--
ALTER TABLE `News`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `ProductImages`
--
ALTER TABLE `ProductImages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Products`
--
ALTER TABLE `Products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Reply`
--
ALTER TABLE `Reply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `SaleImages`
--
ALTER TABLE `SaleImages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Sales`
--
ALTER TABLE `Sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Services`
--
ALTER TABLE `Services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ServicesItem`
--
ALTER TABLE `ServicesItem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Settings`
--
ALTER TABLE `Settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Slider`
--
ALTER TABLE `Slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Teams`
--
ALTER TABLE `Teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `text`
--
ALTER TABLE `text`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ThemeSettings`
--
ALTER TABLE `ThemeSettings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `Videos`
--
ALTER TABLE `Videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ABforms`
--
ALTER TABLE `ABforms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=119;
--
-- AUTO_INCREMENT for table `AdminNavigation`
--
ALTER TABLE `AdminNavigation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `Album`
--
ALTER TABLE `Album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `AModuleLists`
--
ALTER TABLE `AModuleLists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `Aromats`
--
ALTER TABLE `Aromats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Banner`
--
ALTER TABLE `Banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `Campaigns`
--
ALTER TABLE `Campaigns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `Category`
--
ALTER TABLE `Category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `Events`
--
ALTER TABLE `Events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `flags`
--
ALTER TABLE `flags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `Gallery`
--
ALTER TABLE `Gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ltm_translations`
--
ALTER TABLE `ltm_translations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=406;
--
-- AUTO_INCREMENT for table `more_images`
--
ALTER TABLE `more_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `navigation`
--
ALTER TABLE `navigation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT for table `News`
--
ALTER TABLE `News`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `ProductImages`
--
ALTER TABLE `ProductImages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Products`
--
ALTER TABLE `Products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `Reply`
--
ALTER TABLE `Reply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `SaleImages`
--
ALTER TABLE `SaleImages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Sales`
--
ALTER TABLE `Sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Services`
--
ALTER TABLE `Services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `ServicesItem`
--
ALTER TABLE `ServicesItem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `Settings`
--
ALTER TABLE `Settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `Slider`
--
ALTER TABLE `Slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `Teams`
--
ALTER TABLE `Teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `text`
--
ALTER TABLE `text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `ThemeSettings`
--
ALTER TABLE `ThemeSettings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `Videos`
--
ALTER TABLE `Videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
