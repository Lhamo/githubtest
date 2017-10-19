-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 19 okt 2017 om 10:00
-- Serverversie: 10.1.19-MariaDB
-- PHP-versie: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `survey`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `survey`
--

CREATE TABLE `survey` (
  `survey_id` mediumint(9) NOT NULL,
  `survey_name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `survey`
--

INSERT INTO `survey` (`survey_id`, `survey_name`) VALUES
(1, 'The digital craft'),
(2, 'Ondernemer survey');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `survey_answers`
--

CREATE TABLE `survey_answers` (
  `answer_id` mediumint(9) NOT NULL,
  `question_id` mediumint(9) NOT NULL,
  `user_id` mediumint(9) NOT NULL,
  `answer_body` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `survey_question`
--

CREATE TABLE `survey_question` (
  `question_id` mediumint(9) NOT NULL,
  `survey_id` mediumint(9) NOT NULL,
  `question_body` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `survey_question`
--

INSERT INTO `survey_question` (`question_id`, `survey_id`, `question_body`) VALUES
(2, 1, 'Do you like the digital craft?'),
(3, 1, 'What kind of project should we do next');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `user_id` mediumint(9) NOT NULL,
  `user_name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`user_id`, `user_name`) VALUES
(1, 'Emily Z');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`survey_id`);

--
-- Indexen voor tabel `survey_answers`
--
ALTER TABLE `survey_answers`
  ADD PRIMARY KEY (`answer_id`),
  ADD KEY `question_id` (`question_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexen voor tabel `survey_question`
--
ALTER TABLE `survey_question`
  ADD PRIMARY KEY (`question_id`),
  ADD KEY `survey_id` (`survey_id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `survey`
--
ALTER TABLE `survey`
  MODIFY `survey_id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT voor een tabel `survey_answers`
--
ALTER TABLE `survey_answers`
  MODIFY `answer_id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT voor een tabel `survey_question`
--
ALTER TABLE `survey_question`
  MODIFY `question_id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
