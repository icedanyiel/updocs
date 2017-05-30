-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30 Mai 2017 la 20:44
-- Versiune server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `updocs`
--

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(8, 'Career & Money'),
(4, 'Entertainment'),
(1, 'Fiction'),
(3, 'Health & Fitness'),
(5, 'History'),
(7, 'Lifestyle'),
(9, 'Personal growth'),
(6, 'Politics'),
(2, 'Science & Tech');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `file`
--

CREATE TABLE `file` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `views` int(11) NOT NULL,
  `filename` text NOT NULL,
  `idcategory` int(11) NOT NULL,
  `iduser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `file`
--

INSERT INTO `file` (`id`, `title`, `description`, `views`, `filename`, `idcategory`, `iduser`) VALUES
(1, 'titlu fisierului', 'aceasta este o descriere', 0, 'BoardingCard_143682634_CLJ_OTP1.pdf', 4, 1),
(2, 'biletul meu de avion', 'to usa', 0, 'CEACAA006VS50U.PDF', 7, 1),
(3, 'un nou fisier', 'descrierea', 0, 'Travel_Reservation_June_13_for_PATRICIA_GABRIELA_MR_STU_BUIA.pdf', 7, 1);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `name` varchar(11) NOT NULL,
  `file_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `tags`
--

INSERT INTO `tags` (`id`, `name`, `file_id`) VALUES
(1, 'bilet', 1),
(2, ' avion', 1),
(3, 'bilet', 2),
(4, ' avion', 2),
(5, ' ticket', 2),
(6, 'bilet3', 3);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'danyielwest@gmail.com', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'Arnold', 'arnold@yahoo.com', '8287458823facb8ff918dbfabcd22ccb');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nume` (`name`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_iduser` (`iduser`),
  ADD KEY `idcategory` (`idcategory`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_idfile` (`file_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Restrictii pentru tabele sterse
--

--
-- Restrictii pentru tabele `file`
--
ALTER TABLE `file`
  ADD CONSTRAINT `fk_idcategory` FOREIGN KEY (`idcategory`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `fk_iduser` FOREIGN KEY (`iduser`) REFERENCES `users` (`id`);

--
-- Restrictii pentru tabele `tags`
--
ALTER TABLE `tags`
  ADD CONSTRAINT `fk_idfile` FOREIGN KEY (`file_id`) REFERENCES `file` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
