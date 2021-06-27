-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: db
-- Час створення: Чрв 27 2021 р., 21:12
-- Версія сервера: 8.0.23
-- Версія PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `skillup_db`
--

-- --------------------------------------------------------

--
-- Структура таблиці `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `birthday` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп даних таблиці `users`
--

INSERT INTO `users` (`id`, `name`, `birthday`, `created_at`, `updated_at`) VALUES
(1, 'ROMAN', '1994-01-23', '2021-06-24 20:45:06', NULL),
(2, 'Oleg', '1494-02-11', '2021-06-24 20:49:24', NULL),
(3, 'Taras', '1266-04-12', '2021-06-24 20:49:24', NULL);

-- --------------------------------------------------------

--
-- Структура таблиці `user_contacts`
--

CREATE TABLE `user_contacts` (
  `id` int NOT NULL,
  `contact` varchar(100) NOT NULL,
  `type` enum('email','phone','address') NOT NULL,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп даних таблиці `user_contacts`
--

INSERT INTO `user_contacts` (`id`, `contact`, `type`, `user_id`) VALUES
(1, '+380001112233', 'phone', 1),
(2, 'roman@test.com', 'email', 1),
(3, 'Noviy Rozdol city, Test street', 'address', 1),
(4, '+380004445566', 'phone', 2),
(5, 'oleg@test.com', 'email', 2),
(6, 'taras@test.com', 'email', 3);

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Індекси таблиці `user_contacts`
--
ALTER TABLE `user_contacts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contact` (`contact`),
  ADD UNIQUE KEY `u-user_contacts-type-user_id` (`type`,`user_id`),
  ADD KEY `fk-user_contacts-user_id` (`user_id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблиці `user_contacts`
--
ALTER TABLE `user_contacts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Обмеження зовнішнього ключа збережених таблиць
--

--
-- Обмеження зовнішнього ключа таблиці `user_contacts`
--
ALTER TABLE `user_contacts`
  ADD CONSTRAINT `fk-user_contacts-user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
