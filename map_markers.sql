-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: fdb34.awardspace.net
-- Generation Time: Jun 18, 2022 at 06:15 PM
-- Server version: 5.7.20-log
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `4098253_market`
--

-- --------------------------------------------------------

--
-- Table structure for table `map_markers`
--

CREATE TABLE `map_markers` (
  `id` int(10) NOT NULL,
  `latitude` float NOT NULL,
  `longitude` float NOT NULL,
  `title` varchar(100) NOT NULL,
  `info` varchar(2000) NOT NULL,
  `icon` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `map_markers`
--

INSERT INTO `map_markers` (`id`, `latitude`, `longitude`, `title`, `info`, `icon`) VALUES
(1, 54.6367, 25.2582, 'Ailit UAB', '<a href="https://ailit.lt/">Ailit Production address</a>', ''),
(2, 54.8291, 25.1099, 'EMP Recycling Collection point', '<a href="https://emp.lt/">EMP Recycling Collection Point</a>\r\nGalinės Village, Maišiagala post, Vilnius region, LT-14247, Lithuania\r\nI – IV 08:00 – 17:00\r\nV – 8:00 – 15:45\r\nPhone: +370 5243 7153\r\ninfo@emp.lt', ''),
(3, 55.0513, 24.9507, 'Baltic Recycling Collection Point', '<a href="http://www.balticrecycling.lt/">Baltic Recycling</a>\r\nKalnalaukio g. 6 Širvintos 19107', NULL),
(4, 55.0338, 24.9404, 'Baltic Recycling UAB\r\n', '<a href="http://www.balticrecycling.lt/">Baltic Recycling</a>\r\nVilniaus g. 77, LT-19121, Širvintos\r\nTel.:  (8 382) 49 171\r\nFaks.: (8 382) 49 170\r\nEl. paštas: info@balticrecycling.lt', NULL),
(5, 54.7287, 25.241, 'VšĮ “Elektronikos gamintojų ir importuotojų organizacija”\r\n', '<a href="http://www.eei.lt/">Electrical and Electronic Equipment</a>\r\nFabijoniškių g. 96, Vilnius LT-07100\r\nTel.: (8~5) 273 0084\r\nMob. tel.: 8~656 99355\r\nEl. paštas: info@eei.lt\r\n', NULL),
(6, 54.9233, 23.9355, 'EMP Recycling Collection Point', '<a href="https://emp.lt/">EMP Recycling Collection Point</a>\r\nKrėvės pr. 120, LT-50312, Kaunas, Lithuania\r\nI – IV 08:00 – 17:00\r\nSun 08:00 – 15:45\r\nVI 09:00 – 14:00\r\nLunch break :\r\n12:00 – 13:00\r\nPhone: +370 618 83251\r\n+370 665 19532\r\n', NULL),
(7, 54.9092, 23.9354, 'EMP Recycling Collection Point', '<a href="https://emp.lt/">EMP Recycling Collection Point</a>\r\nTechnikos st. 18J, LT-51211, Kaunas, Lithuania\r\nI-IV 08:00 – 17:00\r\nSun 08:00 – 15:45\r\nLunch break:\r\n12:00 – 12:45\r\nPhone: +370 652 77992\r\n+370 694 72718\r\n', NULL),
(8, 54.6548, 25.2224, 'EMP Recycling Collection Point', '<a href="https://emp.lt/">EMP Recycling Collection Point</a>\r\nSavanorių pr. 174A, LT-03153, Vilnius, Lithuania\r\nI-IV 09:00 – 18:00\r\nSun 09:00 – 16:45\r\nVI 09:00 – 14:00\r\nLunch break:\r\nI-V 13:00-13:45\r\nVI 12:00-13:00\r\nPhone: +370 652 06310', NULL),
(9, 54.7103, 25.2835, 'EMP Recycling Collection Point', '<a href="https://emp.lt/">EMP Recycling Collection Point</a>\r\nKalvarijų st. 125, LT-08221, Vilnius, Lithuania\r\nI-IV 08:00 – 17:00\r\nSun 08:00 – 15:45\r\nLunch break:\r\n12:00 – 12:45\r\nPhone: +370 619 68337\r\n+370 686 67771', NULL),
(10, 55.7442, 24.2658, 'EMP Recycling Collection Point', '<a href="https://emp.lt/">EMP Recycling Collection Point</a>\r\nPušaloto st. 108b, Panevėžys 35101, Lithuania\r\nI-IV 08:00 – 17:00\r\nSun 08:00 – 15:45\r\nLunch break:\r\n12:00 – 12:45\r\nPhone: +370 650 81636;\r\n+370 657 22712', NULL),
(11, 55.9176, 23.238, 'EMP Recycling Collection Point', '<a href="https://emp.lt/">EMP Recycling Collection Point</a>\r\nNuklono st. 19, LT-78366, Šiauliai, Lithuania\r\nI-IV 08:00 – 17:00\r\nSun 08:00 – 15:45\r\nLunch break:\r\n12:00 – 12:45\r\nPhone: +370 656 97147;\r\n+370 682 59765', NULL),
(12, 55.7001, 21.1017, 'EMP Recycling Collection Point', '<a href="https://emp.lt/">EMP Recycling Collection Point</a>\r\nŠilutės pl. 21, LT-91107, Klaipėda, Lithuania\r\nI-IV 08:00 – 17:00\r\nSun 08:00 – 15:45\r\nLunch break:\r\n12:00 – 12:45\r\nPhone: +370 682 27103', NULL),
(13, 54.565, 23.3075, 'EMP Recycling Collection Point', '<a href="https://emp.lt/">EMP Recycling Collection Point</a>\r\nSporto st. 46, LT-68110, Marijampolė, Lithuania\r\nI-IV 08:00 – 17:00\r\nSun 08:00 – 15:45\r\nVI 09:00 – 14:00\r\nLunch break:\r\n12:00 – 13:00\r\nPhone: +370 656 91080', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `map_markers`
--
ALTER TABLE `map_markers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `map_markers`
--
ALTER TABLE `map_markers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
