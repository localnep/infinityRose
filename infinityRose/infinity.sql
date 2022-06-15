-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 28 Ara 2019, 11:40:37
-- Sunucu sürümü: 5.7.26
-- PHP Sürümü: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `infinity`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `filmler`
--

DROP TABLE IF EXISTS `filmler`;
CREATE TABLE IF NOT EXISTS `filmler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isim` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `imbd` decimal(2,1) NOT NULL,
  `tur` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `puan` int(11) NOT NULL,
  `resim` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `yorum` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `video` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `fiyat` decimal(18,2) NOT NULL DEFAULT '4.99',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `filmler`
--

INSERT INTO `filmler` (`id`, `isim`, `imbd`, `tur`, `puan`, `resim`, `yorum`, `tarih`, `video`, `fiyat`) VALUES
(1, 'Tokyo Drift', '6.0', 'Gerilim,Korku', 4, './foto/n227071n778979nresim.jpg', 'Mükemmel bir yarış sahnesi', '2019-12-27 16:27:23', './video/n227071n778979nresim.jpg', '4.99'),
(2, 'Yüzüklerin Efendisi', '7.0', 'Fantastik,bilim kurgu,Aksiyon', 5, './foto/n906250n443504nLOTR.jpg', 'deneme', '2019-12-27 16:29:17', './video/n906250n443504nLOTR.jpg', '4.99');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kiralananlar`
--

DROP TABLE IF EXISTS `kiralananlar`;
CREATE TABLE IF NOT EXISTS `kiralananlar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `film_id` int(11) NOT NULL,
  `musteri_id` int(11) NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tutar` decimal(18,2) NOT NULL,
  `alisverisno` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `indirmeno` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `durum` tinyint(1) NOT NULL DEFAULT '0',
  `onay` tinyint(1) NOT NULL DEFAULT '0',
  `hesap` varchar(70) COLLATE utf8_turkish_ci NOT NULL,
  `odemetarih` varchar(70) COLLATE utf8_turkish_ci NOT NULL,
  `neden` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kiralananlar`
--

INSERT INTO `kiralananlar` (`id`, `film_id`, `musteri_id`, `tarih`, `tutar`, `alisverisno`, `indirmeno`, `durum`, `onay`, `hesap`, `odemetarih`, `neden`) VALUES
(15, 1, 12, '2019-12-28 10:27:22', '4.99', '128619', '597523', 1, 1, '123  31231 123123', '2019-12-28', NULL),
(12, 1, 12, '2019-12-28 09:23:01', '4.99', '593615', '787559', 0, 0, '1254 12125 122154', '2019-12-28', 'sadasdasd'),
(17, 2, 12, '2019-12-28 10:38:18', '4.99', '424475', '375670', 1, 1, 'kapıda odeme', '2019-12-28', NULL),
(16, 2, 12, '2019-12-28 10:36:54', '4.99', '631632', '817069', 0, 0, '3465789', '2019-12-19', 'sdf');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `musteri`
--

DROP TABLE IF EXISTS `musteri`;
CREATE TABLE IF NOT EXISTS `musteri` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isim` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `telefon` varchar(30) COLLATE utf8_turkish_ci DEFAULT NULL,
  `email` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `resim` varchar(200) COLLATE utf8_turkish_ci DEFAULT NULL,
  `adres` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sifre` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `facebook` varchar(100) COLLATE utf8_turkish_ci NOT NULL DEFAULT '0',
  `google` varchar(100) COLLATE utf8_turkish_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `musteri`
--

INSERT INTO `musteri` (`id`, `isim`, `telefon`, `email`, `resim`, `adres`, `tarih`, `sifre`, `facebook`, `google`) VALUES
(2, 'tolga', '454545', 'omer.faruk.arslan.452@gmail.com', './foto/n140008n161481nnobetci.png', 'asdasdasd', '2019-12-27 15:23:29', '12345', '0', '0'),
(4, 'What the Fork', '5455222121', 'erdogan97ozann88@gmail.com', './foto/n191839n783331nWARCRAFT.jpg', 'DENEME', '2019-12-27 19:57:52', '747661', '0', '100337328752928187828'),
(5, 'ömer', '05455291214', 'omerveseda@hotmail.com', NULL, NULL, '2019-12-27 20:15:03', '123', '0', '0'),
(12, 'ömer faruk Arslan', '05455291214', 'omer.faruk.arslan.452@gmail.com', './foto/n732930n283604njohn.jpg', 'Demokrasi Bul\r\n82', '2019-12-28 08:15:05', '841102', '0', '108096898737614792090');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `puan`
--

DROP TABLE IF EXISTS `puan`;
CREATE TABLE IF NOT EXISTS `puan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `film_id` int(11) NOT NULL,
  `musteri_id` int(11) NOT NULL,
  `puan` int(11) NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `puan`
--

INSERT INTO `puan` (`id`, `film_id`, `musteri_id`, `puan`, `tarih`) VALUES
(1, 1, 12, 3, '2019-12-28 08:16:09'),
(2, 1, 12, 5, '2019-12-28 08:22:37');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
