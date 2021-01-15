-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 15 Sty 2021, 20:16
-- Wersja serwera: 10.1.36-MariaDB
-- Wersja PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `egzamin6`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zadania`
--

CREATE TABLE `zadania` (
  `id` int(11) NOT NULL,
  `dataZadania` date NOT NULL,
  `wpis` text COLLATE utf8_polish_ci NOT NULL,
  `miesiac` text COLLATE utf8_polish_ci NOT NULL,
  `rok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `zadania`
--

INSERT INTO `zadania` (`id`, `dataZadania`, `wpis`, `miesiac`, `rok`) VALUES
(1, '2020-08-01', 'Remont', 'sierpien', 2020),
(2, '2020-08-02', 'Remont', 'sierpien', 2020),
(3, '2020-08-03', 'Remont', 'sierpien', 2020),
(4, '2020-08-04', 'Remont', 'sierpien', 2020),
(5, '2020-08-05', '', 'sierpien', 2020),
(6, '2020-08-06', '', 'sierpien', 2020),
(7, '2020-08-07', 'Rower', 'sierpien', 2020),
(8, '2020-08-08', 'Rower', 'sierpien', 2020),
(9, '2020-08-09', '', 'sierpien', 2020),
(10, '2020-08-10', '', 'sierpien', 2020),
(11, '2020-08-11', 'Weterynarz - Dika', 'sierpien', 2020),
(12, '2020-08-12', '', 'sierpien', 2020),
(13, '2020-08-13', 'Sopot', 'sierpien', 2020),
(14, '2020-08-14', 'Sopot', 'sierpien', 2020),
(15, '2020-08-15', '', 'sierpien', 2020),
(16, '2020-08-16', '', 'sierpien', 2020),
(17, '2020-08-17', 'Wyjazd na wakacje!', 'sierpien', 2020),
(18, '2020-08-18', 'Tatry', 'sierpien', 2020),
(19, '2020-08-19', 'Tatry', 'sierpien', 2020),
(20, '2020-08-20', 'Tatry', 'sierpien', 2020),
(21, '2020-08-21', 'Tatry', 'sierpien', 2020),
(22, '2020-08-22', 'Tatry', 'sierpien', 2020),
(23, '2020-08-23', 'Tatry', 'sierpien', 2020),
(24, '2020-08-24', 'Tatry', 'sierpien', 2020),
(25, '2020-08-25', '', 'sierpien', 2020),
(26, '2020-08-26', '', 'sierpien', 2020),
(27, '2020-08-27', 'dsfsdf', 'sierpien', 2020),
(28, '2020-08-28', '', 'sierpien', 2020),
(29, '2020-08-29', 'Weterynarz - Dika', 'sierpien', 2020),
(30, '2020-08-30', '', 'sierpien', 2020),
(31, '2020-08-31', '', 'sierpien', 2020);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `zadania`
--
ALTER TABLE `zadania`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `zadania`
--
ALTER TABLE `zadania`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
