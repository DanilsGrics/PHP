-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Окт 17 2018 г., 14:38
-- Версия сервера: 10.1.36-MariaDB
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `veikals`
--

-- --------------------------------------------------------

--
-- Структура таблицы `preces`
--

CREATE TABLE `preces` (
  `ID_prece` bigint(20) UNSIGNED NOT NULL,
  `Nosaukums` tinytext NOT NULL,
  `Cena` float NOT NULL,
  `Derīguma termiņš` date NOT NULL,
  `Ražošanas datums` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `preces`
--

INSERT INTO `preces` (`ID_prece`, `Nosaukums`, `Cena`, `Derīguma termiņš`, `Ražošanas datums`) VALUES
(1, 'Piens \"Tukuma\"', 0.89, '2018-10-20', '2018-10-17 11:14:07'),
(2, 'Biezpiena sieriņš \"Kārums\"', 0.25, '2018-10-24', '2018-10-16 06:29:13'),
(3, 'Twix', 0.49, '2019-04-17', '2018-10-01 08:16:20'),
(4, 'Bounty', 0.58, '2019-04-06', '2018-02-05 04:11:12');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `preces`
--
ALTER TABLE `preces`
  ADD PRIMARY KEY (`ID_prece`),
  ADD UNIQUE KEY `ID_prece` (`ID_prece`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `preces`
--
ALTER TABLE `preces`
  MODIFY `ID_prece` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
