-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 
-- Версия на сървъра: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `scoolboys`
--

-- --------------------------------------------------------

--
-- Структура на таблица `classes`
--

CREATE TABLE IF NOT EXISTS `classes` (
`id` int(11) NOT NULL,
  `class` varchar(10) NOT NULL,
  `class_room` int(11) NOT NULL,
  `class_teacher` varchar(100) NOT NULL,
  `average_succsess` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Схема на данните от таблица `classes`
--

INSERT INTO `classes` (`id`, `class`, `class_room`, `class_teacher`, `average_succsess`) VALUES
(2, 'a', 201, 'nesheva', 5);

-- --------------------------------------------------------

--
-- Структура на таблица `classmates`
--

CREATE TABLE IF NOT EXISTS `classmates` (
`classmate_id` int(11) NOT NULL,
  `egn` int(11) NOT NULL,
  `classmate` varchar(100) NOT NULL,
  `class_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Схема на данните от таблица `classmates`
--

INSERT INTO `classmates` (`classmate_id`, `egn`, `classmate`, `class_id`) VALUES
(3, 810629, 'Drago Georgiev', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classmates`
--
ALTER TABLE `classmates`
 ADD PRIMARY KEY (`classmate_id`), ADD UNIQUE KEY `egn` (`egn`,`classmate_id`), ADD KEY `classmate` (`classmate`), ADD KEY `classmate_2` (`classmate`), ADD KEY `classmate_3` (`classmate`), ADD KEY `classmate_4` (`classmate`), ADD KEY `class_id` (`class_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `classmates`
--
ALTER TABLE `classmates`
MODIFY `classmate_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Ограничения за дъмпнати таблици
--

--
-- Ограничения за таблица `classmates`
--
ALTER TABLE `classmates`
ADD CONSTRAINT `fk_id` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
