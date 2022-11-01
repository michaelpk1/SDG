-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 28, 2022 at 09:48 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `SDG`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(258) NOT NULL,
  `image` varchar(258) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `firstname`, `lastname`, `email`, `password`, `image`) VALUES
(5, 'Emmanuel', 'Machael', 'emmanuel60@mail.com', '$2y$10$t3TVic1jVgj8Rl/D3hICa.BmSaIcsDbZdv95Dy9hlz5Oe2tW8ZcBy', ''),
(6, 'emmanuel', 'jacob', 'pk@gmail.com', '$2y$10$RWeedydcSzE1RgXhl76EP.syrwrwNvbN.XaOT1ZmNR8aIoWpWQQJW', ''),
(8, 'Ritkinen', 'Gotau', 'ritkyg@gmail.com', '$2y$10$Fe/Wg3GDI5OckDqMMbw73OkeTHAdK3rqEckC/mBIcUO5MCMnAwy5W', ''),
(9, 'MICHAEL', 'EMMANUEL', 'emmanuel67@gmail.com', '$2y$10$aVqneBO9M9lY3vfMzgBXYegT15WAh01Pco75SwKCnsjUA/LQAnffS', ''),
(10, 'ritkinen', 'Gotau', 'ritkyg@gmail.com', '$2y$10$Aah0rumfcr4os2M2djSVJu7Oxk73tjXuvBZBhqOfM7rAGmcGgUdeq', ''),
(11, 'MICHAEL', 'EMMANUEL', 'emmanuel60@12mail.com', '$2y$10$4R6i62knlOSk8XcvhEnZuu7DLZMUoYkNDOlO9fNtW.FlZNH.mlzC6', ''),
(12, 'MICHAEL', 'EMMANUEL', 'emmanuelmichaelpk3@gamil.com', '$2y$10$onDhAYfafWB34C8tl.m.FOu5.LC2/ULoDv.rinBUAEKBesxFXSEm.', ''),
(13, '', '', 'emmanuel60@mail.com', '$2y$10$Kn5/zk89POAYof93OVmVXezu63OU8TaEQLA7eR4ZDzTRkW4tZ.J9m', ''),
(14, 'emm', 'pk', 'emmanuel67@gmail.com', '$2y$10$/6gqBBQO0p.SCNOL/XcM0.wxHQ6y/KCPm7mpeOUUgIvcp/ThRvKla', ''),
(15, 'Samson', 'Daniel', 'butcher@mail.com', '$2y$10$OdBT/Ss6LkVav.Ua7.mbo.TJ/cSBKgT/MBke8XRmy0LOVGXNDqETC', 'uploads/635acd6e1b025.jpg'),
(16, 'abc', 'cde', 'abc@email.com', '$2y$10$CDPBj1h5sGgJVq7bJOwIqOo6WxEaYV0mQGmHaUq5JqTwvCHFUldJu', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
