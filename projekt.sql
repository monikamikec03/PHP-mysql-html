-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2019 at 06:06 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projekt`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `id` int(11) NOT NULL,
  `ime` varchar(64) COLLATE utf8_croatian_mysql561_ci NOT NULL,
  `prezime` varchar(64) COLLATE utf8_croatian_mysql561_ci NOT NULL,
  `korisnicko_ime` varchar(255) COLLATE utf8_croatian_mysql561_ci NOT NULL,
  `lozinka` varchar(255) COLLATE utf8_croatian_mysql561_ci NOT NULL,
  `razina` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_mysql561_ci;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id`, `ime`, `prezime`, `korisnicko_ime`, `lozinka`, `razina`) VALUES
(25, 'Monika', 'Mikec', 'Monci', '$2y$10$qJ58iOUHhpgeLGLZR1iHZ.Nv3iVy8bFmaAS5DBZvjConwGAlBd1oO', 0),
(26, 'Ivo', 'Ivic', 'admin', '$2y$10$W8ITmMre/KGPzxkKaPaM8ugz7nPZ4mvj.ZGNjoPTUQZc/8pHUujA.', 1),
(27, 'Maja', 'Majic', 'korisnik', '$2y$10$zOCi443A88.dibSw5vTpseXpAmPkpu/15E9W1wWtmawR2kCGTQdne', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vijesti`
--

CREATE TABLE `vijesti` (
  `id` int(11) NOT NULL,
  `datum` varchar(32) COLLATE utf8_croatian_mysql561_ci NOT NULL,
  `naslov` varchar(64) COLLATE utf8_croatian_mysql561_ci NOT NULL,
  `sazetak` text COLLATE utf8_croatian_mysql561_ci NOT NULL,
  `slika` varchar(64) COLLATE utf8_croatian_mysql561_ci NOT NULL,
  `kategorija` varchar(64) COLLATE utf8_croatian_mysql561_ci NOT NULL,
  `arhiva` tinyint(1) NOT NULL,
  `ime` varchar(64) COLLATE utf8_croatian_mysql561_ci NOT NULL,
  `prezime` varchar(64) COLLATE utf8_croatian_mysql561_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_mysql561_ci;

--
-- Dumping data for table `vijesti`
--

INSERT INTO `vijesti` (`id`, `datum`, `naslov`, `sazetak`, `slika`, `kategorija`, `arhiva`, `ime`, `prezime`) VALUES
(89, '22.06.2019', 'sv. Florijan', 'Misa povodom obilježavanja sv. Florijana. Održana 90. obljetnica DD-a Haganj', 'imgInput/img1.jpg', 'Aktivnosti u društvu', 0, 'Monika', 'Mikec'),
(90, '22.06.2019', 'Općinsko natjecanja', 'MB ekipa na općinskom 2018. godine osvojila 1. mjesto već treću godinu za redom i osvojila prijelazni kup u trajnom vlasništvu.', 'imgInput/img2.jpg', 'Domaći kupovi', 0, 'Monika', 'Mikec'),
(91, '22.06.2019', 'Naši članovi', 'Na misi prije održavanja 8. Kupa DVD-a Haganj', 'imgInput/img3.jpg', 'Aktivnosti u društvu', 0, 'Monika', 'Mikec'),
(92, '22.06.2019', 'Kup HVZ, Đakovo', 'ŽA ekipa DVD-a Haganj se plasirala na državno koje će se 2020. održati u Varaždinu', 'imgInput/img4.jpeg', 'Kupovi Hrvatske vatrogasne zajednice', 0, 'Monika', 'Mikec'),
(93, '22.06.2019', 'Međunarodni kup', 'ŽA ekipa u Zaprešiću 3.', 'imgInput/img5.JPG', 'Domaći kupovi', 0, 'Monika', 'Mikec'),
(94, '22.06.2019', 'HVZ Varaždin', 'Po prvi puta na kupu HVZ-a i treće mjesto', 'imgInput/img6.jpeg', 'Kupovi Hrvatske vatrogasne zajednice', 0, 'Monika', 'Mikec'),
(95, '22.06.2019', 'Zaprešić 2019', 'Osvojeno 3. mjesto', 'imgInput/img7.JPG', 'Domaći kupovi', 0, 'Monika', 'Mikec'),
(96, '22.06.2019', 'Prijelazni pehar je naš', 'U Hrebincu smo bile prve', 'imgInput/img8.JPG', 'Domaći kupovi', 0, 'Monika', 'Mikec'),
(97, '22.06.2019', 'Prvi naš nastup', 'ŽA ekipa prva u Ladincu', 'imgInput/img9.JPG', 'Domaći kupovi', 0, 'Monika', 'Mikec'),
(98, '22.06.2019', 'Arhivirana vijest', 'Lorem ipsum', 'imgInput/img1.jpg', 'Aktivnosti u društvu', 1, 'Monika', 'Mikec'),
(100, '22.06.2019', 'Obriši me!', 'haha', 'imgInput/img8.JPG', 'Kupovi Hrvatske vatrogasne zajednice', 0, 'Monika', 'Mikec'),
(101, '22.06.2019', 'Promijeni me opet', 'Sadržaj', 'imgInput/img4.jpeg', 'Aktivnosti u društvu', 0, 'Monika', 'Mikec');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vijesti`
--
ALTER TABLE `vijesti`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `vijesti`
--
ALTER TABLE `vijesti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
