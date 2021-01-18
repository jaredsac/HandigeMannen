-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 18 jan 2021 om 15:52
-- Serverversie: 10.4.8-MariaDB
-- PHP-versie: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `handigemannen`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `klussen`
--

CREATE TABLE `klussen` (
  `ID` int(11) NOT NULL,
  `Klussen` varchar(30) NOT NULL,
  `Klant` varchar(30) NOT NULL,
  `Plaats` varchar(40) NOT NULL,
  `Datum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `klussen`
--

INSERT INTO `klussen` (`ID`, `Klussen`, `Klant`, `Plaats`, `Datum`) VALUES
(1, 'Behang Ophangen', 'Annabella Steenhuizen', 'Amsterdam-Zuidoost', '2021-01-19'),
(2, 'Laminaat zetten', 'Annabell Steenhoeven', 'Amsterdam-Zuidoost', '2021-01-21');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `VoorNaam` varchar(30) NOT NULL,
  `AchterNaam` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Wachtwoord` varchar(30) NOT NULL,
  `Soort User` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`ID`, `VoorNaam`, `AchterNaam`, `Email`, `Wachtwoord`, `Soort User`) VALUES
(1, 'Joshua', 'Handige', 'joshua@handigemannen.com', 'Joshua', 'Admin'),
(2, 'Annebella', 'SteenHuizen', 'annebellaS@mail.com', 'Steenhuizen', 'klant');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `klussen`
--
ALTER TABLE `klussen`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `klussen`
--
ALTER TABLE `klussen`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
