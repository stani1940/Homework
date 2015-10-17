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
-- Database: `musika`
--

-- --------------------------------------------------------

--
-- Структура на таблица `musikchannel_users`
--

CREATE TABLE IF NOT EXISTS `musikchannel_users` (
  `music_channel` varchar(200) NOT NULL,
  `user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура на таблица `musik_channels`
--

CREATE TABLE IF NOT EXISTS `musik_channels` (
  `music_channel` varchar(200) NOT NULL,
  `number_songs` int(11) NOT NULL,
  `number_users` int(11) NOT NULL,
  `genre` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `musik_channels`
--

INSERT INTO `musik_channels` (`music_channel`, `number_songs`, `number_users`, `genre`) VALUES
('youtube', 26, 10, 'disko');

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user` varchar(100) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `education` varchar(10) NOT NULL,
  `email` varchar(256) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `users`
--

INSERT INTO `users` (`user`, `sex`, `education`, `email`, `age`) VALUES
('pesho', 'male', 'sredno', 'stenli@abv.vf', 25);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `musikchannel_users`
--
ALTER TABLE `musikchannel_users`
 ADD KEY `musicchannel_id` (`music_channel`,`user`), ADD KEY `user` (`user`), ADD KEY `user_2` (`user`), ADD KEY `music_channel` (`music_channel`);

--
-- Indexes for table `musik_channels`
--
ALTER TABLE `musik_channels`
 ADD PRIMARY KEY (`music_channel`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user`), ADD KEY `user` (`user`), ADD KEY `user_2` (`user`), ADD KEY `user_3` (`user`), ADD KEY `user_4` (`user`);

--
-- Ограничения за дъмпнати таблици
--

--
-- Ограничения за таблица `musikchannel_users`
--
ALTER TABLE `musikchannel_users`
ADD CONSTRAINT `fk_channel` FOREIGN KEY (`music_channel`) REFERENCES `musik_channels` (`music_channel`),
ADD CONSTRAINT `fk_user` FOREIGN KEY (`user`) REFERENCES `users` (`user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
