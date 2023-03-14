-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 13 2023 г., 17:48
-- Версия сервера: 5.6.37
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `registration`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `text_comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `page_id`, `name`, `text_comment`) VALUES
(1, 150, 'Рассуждения', 'Лично мне понравилось. Особенно Джеки его там не узнать. Не нужно смотреть только для критики или рассуждать. Просто смотрите этот фильм для удовольствия'),
(7, 150, ' Marharyta Kurylenko', 'Гениально, этот фильм показывает тебе все твои скрытые возможности и откоывает глаза на многие вещи'),
(18, 151, 'Елжан', 'Фильм классный по факту'),
(19, 152, 'Алан', 'Фильмя херня по факту'),
(20, 152, 'Не Алан', 'Фильм тема наврне'),
(21, 153, 'Нала', 'Где?'),
(22, 153, 'Химик', 'Хороший сериал,стоит самому попробовать'),
(23, 154, '1', 'конец света,но бельё надо сушить,тупорылость'),
(24, 154, 'Born in SSSR', '10сезон, 20 серия...что то совсем не интересно, пол фильма в телефоне просидел, в вк новости и то интереснее читать было'),
(25, 155, 'Спрашивающий', 'Так силиконовая или кремниевая?'),
(26, 156, 'Иллюминат', 'Всё фикция');

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `review` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `email`, `review`) VALUES
(1, '4324234', '43242342', '4324234'),
(2, '65464', '56546456', '654645'),
(3, '321312', '3213213', '3213213'),
(4, '645', '654645', '6546456'),
(5, '6456', '6546456', '6546456'),
(6, '654', '6546456@', '654645');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `login` varchar(50) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `name`) VALUES
(1, 'elzhanxx', '321312', 'Елжан'),
(4, '32133', '321312', 'Елжан'),
(5, '32133', '321312', 'Египет'),
(6, '32133', '321312', 'Египет'),
(7, '32133', '321312', 'Елжан'),
(8, '32133', '321312', 'Елжан'),
(9, '32133', '321312', '3213123123'),
(10, 'Admin', '321312', 'Admin'),
(11, 'Admin', '786bf181b4e5ae3449cab51b6dae8a0a', 'Admin'),
(12, 'Elzhan', 'db0a7f15c469911d7886c4d80ec6dae3', 'Елжан'),
(13, 'elzhanxx', 'b9060bcf9ef97042389d1d83d9d23a0d', 'Елжан'),
(14, '2313123', '786bf181b4e5ae3449cab51b6dae8a0a', '3213543'),
(15, 'Alixan', 'b320b77babacfc9134013e025bd2f875', 'Alixan'),
(16, 'elzhanxx', '786bf181b4e5ae3449cab51b6dae8a0a', 'Елжан'),
(17, 'Nuriman', 'b9060bcf9ef97042389d1d83d9d23a0d', 'Nuriman'),
(18, 'Fact1k', 'b320b77babacfc9134013e025bd2f875', 'Елжан'),
(19, 'elzhanxx', '786bf181b4e5ae3449cab51b6dae8a0a', '321312321'),
(20, 'elzhanxx', '786bf181b4e5ae3449cab51b6dae8a0a', '321312321'),
(21, '323232', '1e18478e5df5df3e9399d344e8d4c72c', '323232'),
(22, 'elzhanxx', '786bf181b4e5ae3449cab51b6dae8a0a', '3323213'),
(23, '123456', 'b320b77babacfc9134013e025bd2f875', '123456'),
(24, 'elzhanxx', '786bf181b4e5ae3449cab51b6dae8a0a', '323232'),
(25, 'Nuriman', 'b320b77babacfc9134013e025bd2f875', 'Nuriman'),
(27, 'Maksnatural', '786bf181b4e5ae3449cab51b6dae8a0a', 'Maksnatural'),
(28, 'Alixander', '786bf181b4e5ae3449cab51b6dae8a0a', 'Alixander');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
