-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 05 jun 2019 om 14:12
-- Serverversie: 10.1.36-MariaDB
-- PHP-versie: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `choralyachts`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `bookings`
--

CREATE TABLE `bookings` (
  `bookingID` int(10) UNSIGNED NOT NULL,
  `Customers_customerID` int(10) UNSIGNED NOT NULL,
  `Yachts_yachtID` int(10) UNSIGNED NOT NULL,
  `status` enum('option','confirmed','cancelled') DEFAULT 'option',
  `paymentStatus` enum('open','waiting','partial','done','credited') DEFAULT 'open',
  `paymentPreference` enum('directdebit','creditcard','paypal','ideal') DEFAULT NULL,
  `date_start` datetime DEFAULT NULL,
  `date_end` datetime DEFAULT NULL,
  `catering` enum('Y','N') DEFAULT 'N',
  `skipper` enum('Y','N') DEFAULT 'N',
  `flottielje` enum('Y','N') DEFAULT 'N',
  `groceries` enum('Y','N') DEFAULT 'N',
  `transfer` enum('Y','N') DEFAULT 'N',
  `insurence` enum('Y','N') DEFAULT 'N',
  `childLifejackets` enum('Y','N') DEFAULT 'N',
  `fishinggear` enum('Y','N') DEFAULT 'N',
  `paddleboard` enum('Y','N') DEFAULT 'N',
  `aggreedToTerms` enum('Y','N') DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `customers`
--

CREATE TABLE `customers` (
  `customerID` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `zipcode` varchar(10) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `country` char(2) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `internalNotes` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `pages`
--

CREATE TABLE `pages` (
  `pageID` int(10) UNSIGNED NOT NULL,
  `online` enum('Y','N') DEFAULT 'Y',
  `type` enum('page','contact','booking') DEFAULT 'page',
  `title` varchar(255) DEFAULT NULL,
  `text` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `ports`
--

CREATE TABLE `ports` (
  `portID` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` char(2) DEFAULT NULL,
  `contactperson` varchar(255) DEFAULT NULL,
  `contactphone` varchar(20) DEFAULT NULL,
  `contactemail` varchar(100) DEFAULT NULL,
  `facilities` text,
  `directions` text,
  `parking` text,
  `catering` enum('Y','N') DEFAULT 'N',
  `skipper` enum('Y','N') DEFAULT 'N',
  `flottielje` enum('Y','N') DEFAULT 'N',
  `groceries` enum('Y','N') DEFAULT 'N',
  `transfer` enum('Y','N') DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `settings`
--

CREATE TABLE `settings` (
  `settingID` int(10) UNSIGNED NOT NULL,
  `key` varchar(100) DEFAULT NULL,
  `value` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `yachts`
--

CREATE TABLE `yachts` (
  `yachtID` int(10) UNSIGNED NOT NULL,
  `Yachttypes_yachtTypeID` int(10) UNSIGNED NOT NULL,
  `Ports_portID` int(10) UNSIGNED NOT NULL,
  `status` enum('available','maintenance','retired') DEFAULT 'available',
  `name` varchar(100) DEFAULT NULL,
  `code` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `yachttypes`
--

CREATE TABLE `yachttypes` (
  `yachtTypeID` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `code` varchar(20) DEFAULT NULL,
  `type` enum('catamaran','monohull') DEFAULT NULL,
  `length` double(10,2) DEFAULT NULL,
  `depth` double(10,2) DEFAULT NULL,
  `engine` varchar(100) DEFAULT NULL,
  `sail` double(10,2) DEFAULT NULL,
  `1pcabins` int(10) DEFAULT NULL,
  `2pcabins` int(10) DEFAULT NULL,
  `beds` int(10) DEFAULT NULL,
  `toilets` int(10) DEFAULT NULL,
  `showers` int(10) DEFAULT NULL,
  `gear` text,
  `text` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`bookingID`),
  ADD KEY `fk_Bookings_Customers1_idx` (`Customers_customerID`),
  ADD KEY `fk_Bookings_Yachts1_idx` (`Yachts_yachtID`);

--
-- Indexen voor tabel `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexen voor tabel `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`pageID`);

--
-- Indexen voor tabel `ports`
--
ALTER TABLE `ports`
  ADD PRIMARY KEY (`portID`);

--
-- Indexen voor tabel `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`settingID`);

--
-- Indexen voor tabel `yachts`
--
ALTER TABLE `yachts`
  ADD PRIMARY KEY (`yachtID`),
  ADD KEY `fk_Yachts_Yachttypes_idx` (`Yachttypes_yachtTypeID`),
  ADD KEY `fk_Yachts_Ports1_idx` (`Ports_portID`);

--
-- Indexen voor tabel `yachttypes`
--
ALTER TABLE `yachttypes`
  ADD PRIMARY KEY (`yachtTypeID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `bookings`
--
ALTER TABLE `bookings`
  MODIFY `bookingID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `customers`
--
ALTER TABLE `customers`
  MODIFY `customerID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `pages`
--
ALTER TABLE `pages`
  MODIFY `pageID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `ports`
--
ALTER TABLE `ports`
  MODIFY `portID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `settings`
--
ALTER TABLE `settings`
  MODIFY `settingID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `yachts`
--
ALTER TABLE `yachts`
  MODIFY `yachtID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `yachttypes`
--
ALTER TABLE `yachttypes`
  MODIFY `yachtTypeID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `fk_Bookings_Customers1` FOREIGN KEY (`Customers_customerID`) REFERENCES `customers` (`customerID`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Bookings_Yachts1` FOREIGN KEY (`Yachts_yachtID`) REFERENCES `yachts` (`yachtID`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `yachts`
--
ALTER TABLE `yachts`
  ADD CONSTRAINT `fk_Yachts_Ports1` FOREIGN KEY (`Ports_portID`) REFERENCES `ports` (`portID`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Yachts_Yachttypes` FOREIGN KEY (`Yachttypes_yachtTypeID`) REFERENCES `yachttypes` (`yachtTypeID`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
