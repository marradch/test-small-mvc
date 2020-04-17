-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 15 2020 г., 14:46
-- Версия сервера: 5.7.20
-- Версия PHP: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `small_mvc`
--

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `friendly` varchar(500) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `friendly`, `title`, `description`) VALUES
(1, 'real-time-gps-live-tracking', 'Real-Time GPS LIVE Tracking', '<p style=\"text-align: center\"><strong>Regardless of when or where, always stay connected to your dog or cat.</strong> With Tractive GPS LIVE Tracking, you can see the exact trace of your four-legged friend. Thanks to the integrated virtual fence (geofence), Tractive will inform you immediately in the case that your cat or dog leaves a pre-defined safe area. <i>Simply attach the GPS pet tracker to the collar and have peace of mind.</i></p>'),
(2, 'subscription-plan', 'Subscription Plan', '<p>Why do I need a Tractive subscription?</p>\r\n<p><b>Tractive GPS devices use mobile / cellular networks to send the GPS location of your cat or dog to your smartphone. Tractive covers the cost for data communication and only charges a flat subscription fee. So your dog and cat are safe 24/7 in over 150 countries worldwide.</b></p>\r\n\r\n<p><b>How it works:</b></p>\r\n<p>Once you have received your Tractive GPS device, you can choose your subscription plan and activate the device here: <a href=\"http://www.tractive.com\">www.tractive.com</a> You can choose between BASIC and PREMIUM and your preferred payment interval.</p>'),
(3, 'health-dog-dementia', 'What is dog dementia?', '<p><b>Dog dementia</b>, also known as Canine Cognitive Dysfunction (CCD), is a cognitive disorder in dogs associated with effects similar to those of Alzheimer’s in humans. It’s a condition related to the aging of a dog’s brain, which leads to changes in behavior and primarily affects memory, learning, and comprehension. Clinical signs of dementia are found in 50% of dogs over the age of 11.</b>\r\n\r\n<p><i>It is estimated that 68% of dogs will suffer from dementia by the age of 15.</i></p>'),
(4, 'good-to-know-dog-in-heat', 'Dog in heat? Here’s everything you need to know.', '<p>Do you have a male or female dog, which has not yet been spayed or neutered? In this case, knowing the signs of a dog in heat is very important for both male and female dog parents. This can help you to do the following:</p>\r\n\r\n<ul>\r\n<li>be better prepared for the experience</li>\r\n<li>prevent unwanted pregnancy/new puppies</li>\r\n<li>plan for puppies when you do want them</li>\r\n<li>avoid dangerous situations; dogs in heat can be very unpredictable and even run away from home</li>\r\n<ul>'),
(5, '404', '404', 'Page not found');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
