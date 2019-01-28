-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 14 May 2017, 22:39:33
-- Sunucu sürümü: 10.1.21-MariaDB
-- PHP Sürümü: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `isler`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `reklamlar`
--

CREATE TABLE `reklamlar` (
  `id` int(11) NOT NULL,
  `adi` text NOT NULL,
  `site` text NOT NULL,
  `fiyat` int(20) NOT NULL,
  `baslangic_tarihi` date NOT NULL,
  `bitis_tarihi` date NOT NULL,
  `aciklama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `reklamlar`
--

INSERT INTO `reklamlar` (`id`, `adi`, `site`, `fiyat`, `baslangic_tarihi`, `bitis_tarihi`, `aciklama`) VALUES
(1, 'sanalyer', 'sanalyer.com', 20, '2017-05-10', '2017-05-17', 'sağ alana eklendi 125 125 felan'),
(3, 'test', 'abdullahbozdag.com', 97, '2017-05-15', '2017-08-27', '<p>sdgsda a a&nbsp;</p>'),
(12, 'radkod reklamı', 'radkod.com', 20, '2017-05-15', '2017-06-15', '<p>radkod reklamını ekeşdk aylık 20 tl ye anlaştık felan filan bilgiler</p>'),
(13, 'sosyalgeek', 'sosyageek.com', 50, '2017-03-01', '2017-04-04', '<p>asdasd</p>');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `reklamlar`
--
ALTER TABLE `reklamlar`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `reklamlar`
--
ALTER TABLE `reklamlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
