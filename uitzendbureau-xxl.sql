-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 02 dec 2023 om 00:50
-- Serverversie: 10.4.24-MariaDB
-- PHP-versie: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uitzendbureau-xxl`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `joboffer`
--

CREATE TABLE `joboffer` (
  `offerid` int(21) NOT NULL,
  `uploadtime` date NOT NULL,
  `companyname` varchar(50) NOT NULL,
  `function` varchar(50) NOT NULL,
  `time` varchar(20) NOT NULL,
  `pay` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `joboffer`
--

INSERT INTO `joboffer` (`offerid`, `uploadtime`, `companyname`, `function`, `time`, `pay`, `description`) VALUES
(7, '2023-12-01', 'Bababedrijf', 'Docent', 'Parttime', '5', 'Kut kinderen'),
(8, '2023-12-02', 'Bababedrijf', 'Schoorsteen veger', 'Full-time', '2000', 'i love Schoorsteen veger');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `jobreactions`
--

CREATE TABLE `jobreactions` (
  `useridapplicant` int(11) NOT NULL,
  `useridcompany` int(11) NOT NULL,
  `offerid` int(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role` varchar(11) NOT NULL DEFAULT 'user',
  `companyname` varchar(255) DEFAULT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(75) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phonenumber` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `postalcode` varchar(50) NOT NULL,
  `street` varchar(50) NOT NULL,
  `housenumber` varchar(50) NOT NULL,
  `additive` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `role`, `companyname`, `firstname`, `lastname`, `email`, `password`, `phonenumber`, `country`, `city`, `postalcode`, `street`, `housenumber`, `additive`) VALUES
(48, 'company', 'Snel Bart', 'Tom', 'eelman', 'SnelBart@gmail.com', '$2y$10$tsLJ1Uea0r0rBsv98hSuD.AeQKJ/hF/bZ8pPdtcs9/8KuIxBiOOgy', '2', 'Nederland', 'Callantsoog', '1759 XB', 'w', '22', 'w');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `joboffer`
--
ALTER TABLE `joboffer`
  ADD PRIMARY KEY (`offerid`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_email` (`email`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `joboffer`
--
ALTER TABLE `joboffer`
  MODIFY `offerid` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
