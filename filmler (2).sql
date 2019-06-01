-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 01 Haz 2019, 19:43:20
-- Sunucu sürümü: 5.7.21
-- PHP Sürümü: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `sinema`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `filmler`
--

DROP TABLE IF EXISTS `filmler`;
CREATE TABLE IF NOT EXISTS `filmler` (
  `Tur_Ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Film_ID` int(11) NOT NULL,
  `Ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Tarih` year(4) NOT NULL,
  `IMDB_Puan` float(3,1) NOT NULL,
  `Hafta` int(11) NOT NULL,
  `Toplam_seyirci` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `toplam` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `filmler`
--

INSERT INTO `filmler` (`Tur_Ad`, `Film_ID`, `Ad`, `Tarih`, `IMDB_Puan`, `Hafta`, `Toplam_seyirci`, `toplam`) VALUES
('Aksiyon', 1, 'Kurtlar Vadisi Irak', 2006, 5.9, 26, '4.256.567', 36),
('Aksiyon', 2, 'Organize İşler Sazan Sarmalı', 2019, 6.0, 10, '3.537.429', 20),
('Aksiyon', 3, 'Hızlı ve Öfkeli 7', 2015, 7.2, 14, '2.961.089', 24),
('Aksiyon', 4, 'Hızlı ve Öfkeli 8', 2017, 6.7, 16, '2.656.286', 25),
('aşk', 5, 'Titanik', 1997, 7.8, 190, '2.943.123', 201),
('aşk', 6, 'evim sensin', 2012, 5.0, 38, '2.703.241', 46),
('aşk', 7, 'aşk tesadüfleri sever', 2011, 7.3, 35, '2.418.090', 45),
('aşk', 8, 'unutursam fısılda', 2014, 7.5, 29, '1.720.895', 38),
('bilim-kurgu', 9, 'arif v 216', 2018, 7.4, 20, '4.968.462', 32),
('bilim-kurgu', 10, 'g.o.r.a', 2014, 8.0, 36, '4.001.711', 48),
('bilim-kurgu', 11, 'a.r.o.g', 2008, 7.3, 22, '3.707.086', 33),
('bilim-kurgu', 12, 'avatar', 2009, 7.8, 49, '2.482.991', 59),
('çizgi film', 13, 'inanılmaz aile 2', 2018, 7.7, 15, '1.267.415', 24),
('gerilim', 24, 'cehennem', 2016, 3.1, 8, '600.992', 612),
('komedi', 25, 'recep ivedik 5', 2017, 3.5, 25, '7.437.050', 36),
('dram', 41, 'Muslum', 2018, 8.3, 19, '6.528.896', 34),
('komedi', 27, 'düğün dernek', 2013, 7.2, 40, '6.980.070', 54),
('komedi', 28, 'düğün dernek sünnet', 2015, 6.5, 21, '6.073.364', 34),
('korku', 29, 'dabbe', 2006, 7.0, 29, '539.381', 575),
('korku', 30, 'siccin', 2014, 6.3, 15, '337.126', 358),
('korku', 31, 'dabbe 6', 2015, 6.0, 9, '536.631', 552),
('korku', 32, 'siccin 4', 2014, 6.4, 8, '476.880', 491),
('macera', 33, 'av mevsimi', 2010, 7.5, 32, '2.216.455', 42),
('macera', 34, 'Harry Potter ve felsefe taşı', 2002, 9.3, 30, '1.173.255', 40),
('macera', 35, 'kaptan Amerika:kahramanların savaşı', 2016, 9.6, 8, '1.165.894', 19),
('macera', 36, 'avangers:sonsuzluk savaşı', 2018, 8.5, 14, '1.909.967', 24),
('romantik komedi', 37, 'celal ile ceren', 2013, 4.6, 23, '2.853.711', 30),
('romantik komedi', 38, 'kocan kadar konuş', 2015, 6.6, 15, '1.930.524', 24),
('romantik komedi', 39, 'bana masal anlatma', 2015, 7.6, 10, '1.576.979', 19),
('romantik komedi', 40, 'hadi inşallah', 2014, 5.6, 16, '1.255.390', 23),
('Dram', 42, 'Esarerin Bedeli', 1994, 9.3, 200, '7.633.544', 616),
('Aksiyon', 43, 'Avengers-Endgame', 2019, 8.8, 24, '6.854.657', 617),
('Dram', 44, 'Forrest Gump', 1994, 8.8, 41, '7.254.312', 982),
('Aksiyon', 47, 'Matrix', 1999, 8.7, 48, '8.034.247', 1014),
('Aksiyon', 49, 'inception', 2010, 8.8, 98, '9.854.756', 1016),
('Dram', 67, 'Fight-club', 1999, 8.8, 78, '6.458.745', 941),
('Dram', 84, 'Cinderella-man', 2005, 8.0, 38, '5.444.874', 874),
('Dram', 73, 'The Green Mile', 1999, 8.6, 61, '8.203.451', 814),
('Dram', 91, 'The Prestige', 2006, 8.5, 37, '5.412.784', 647),
('Dram', 94, 'Leon', 1994, 8.6, 64, '7.023.421', 825),
('Dram', 95, 'Can Dostum', 2011, 8.5, 37, '5.025.048', 846),
('Dram', 96, 'Pianist', 2002, 8.5, 91, '8.005.874', 978),
('Ask', 100, 'Love me if you dare', 2003, 7.7, 14, '5.024.415', 714),
('Dram', 103, 'Detachment', 2011, 7.7, 47, '4.124.748', 604),
('Gerilim', 107, 'Frequency', 2000, 7.4, 27, '5.417.358', 601),
('Dram', 110, 'Baby driver', 2017, 7.3, 35, '4.024.784', 570),
('dram', 147, 'Atonement ', 2007, 7.8, 36, '4.124.658', 556),
('Dram', 154, 'Groundhog day', 1993, 8.0, 34, '4.024.185', 554);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
