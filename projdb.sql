-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2024 at 10:49 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `year` varchar(4) NOT NULL,
  `brand` varchar(55) NOT NULL,
  `cond` enum('new','like new','great','good') NOT NULL,
  `fuel` enum('gasoline','electric','hybrid','E82') NOT NULL,
  `body` enum('sedan','van','roadster','coupe','muscle car','sports car') NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `name`, `year`, `brand`, `cond`, `fuel`, `body`, `price`) VALUES
(26, 'BMW 6-series Gran Coupe', '2023', 'BMW', 'new', 'gasoline', 'coupe', 95000),
(27, 'Chevrolet Camaro WMV20', '2024', 'Chevrolet', 'like new', 'gasoline', 'muscle car', 65000),
(28, 'Lamborghini V520', '2024', 'Lamborghini', 'new', 'gasoline', 'roadster', 350000),
(29, 'Audi A3 Sedan', '2023', 'Audi', 'great', 'hybrid', 'sedan', 45000),
(30, 'Infiniti Z5', '2023', 'Infiniti', 'great', 'gasoline', 'sports car', 55000),
(31, 'Porsche 718 Cayman', '2023', 'Porsche', 'like new', 'gasoline', 'coupe', 75000),
(32, 'BMW 8-series Coupe', '2024', 'BMW', 'new', 'gasoline', 'coupe', 110000),
(33, 'BMW Xseries-6', '2024', 'BMW', 'new', 'hybrid', 'van', 90000),
(34, 'Aston Martin DB11', '2024', 'Aston Martin', 'new', 'gasoline', 'coupe', 250000),
(35, 'Ferrari 812 Superfast', '2023', 'Ferrari', 'like new', 'gasoline', 'coupe', 350000),
(36, 'McLaren 720S', '2024', 'McLaren', 'new', 'gasoline', 'coupe', 300000),
(37, 'Bugatti Chiron', '2023', 'Bugatti', 'new', 'gasoline', 'coupe', 3000000),
(38, 'Koenigsegg Jesko', '2023', 'Koenigsegg', 'new', 'gasoline', 'coupe', 3000000),
(39, 'Pagani Huayra', '2024', 'Pagani', 'new', 'gasoline', 'coupe', 2800000),
(40, 'Lexus LC 500', '2023', 'Lexus', 'great', 'hybrid', 'coupe', 100000),
(41, 'Mercedes-AMG GT', '2024', 'Mercedes', 'new', 'hybrid', 'coupe', 160000),
(42, 'Nissan GT-R', '2024', 'Nissan', 'good', 'hybrid', 'coupe', 120000),
(43, 'Ford Mustang Shelby GT500', '2023', 'Ford', 'great', 'gasoline', 'muscle car', 80000),
(44, 'Acura NSX', '2024', 'Acura', 'new', 'hybrid', 'coupe', 160000),
(45, 'Lotus Evora GT', '2024', 'Lotus', 'new', 'gasoline', 'coupe', 100000),
(46, 'Tesla Roadster', '2023', 'Tesla', 'new', 'electric', 'roadster', 200000),
(47, 'Bentley Continental GT', '2023', 'Bentley', 'like new', 'gasoline', 'coupe', 250000),
(48, 'Rolls-Royce Wraith', '2024', 'Rolls-Royce', 'new', 'hybrid', 'coupe', 330000),
(49, 'Maserati GranTurismo', '2023', 'Maserati', 'great', 'gasoline', 'coupe', 150000),
(50, 'Aston Martin Valkyrie', '2024', 'Aston Martin', 'new', 'gasoline', 'coupe', 3000000),
(51, 'Jaguar F-Type', '2023', 'Jaguar', 'like new', 'gasoline', 'sports car', 95000),
(52, 'Lamborghini Huracan EVO', '2024', 'Lamborghini', 'new', 'gasoline', 'sports car', 240000),
(53, 'Audi RS7', '2024', 'Audi', 'new', 'hybrid', 'sedan', 140000),
(54, 'Chevrolet Corvette Z06', '2023', 'Chevrolet', 'great', 'gasoline', 'coupe', 90000),
(55, 'Dodge Challenger SRT Hellcat', '2024', 'Dodge', 'good', 'gasoline', 'muscle car', 85000),
(56, 'Porsche Taycan', '2024', 'Porsche', 'new', 'electric', 'sedan', 150000),
(57, 'Tesla Model S Plaid', '2024', 'Tesla', 'new', 'electric', 'sedan', 130000),
(58, 'BMW i8', '2023', 'BMW', 'like new', 'hybrid', 'sports car', 140000),
(59, 'Rimac C_Two', '2024', 'Rimac', 'new', 'electric', 'coupe', 2200000),
(60, 'Ferrari SF90 Stradale', '2024', 'Ferrari', 'new', 'hybrid', 'coupe', 625000),
(61, 'Aston Martin Vantage', '2023', 'Aston Martin', 'great', 'gasoline', 'coupe', 160000),
(62, 'Mercedes-Benz S-Class', '2024', 'Mercedes-Benz', 'new', 'hybrid', 'sedan', 120000),
(63, 'Ford GT', '2024', 'Ford', 'new', 'gasoline', 'coupe', 500000),
(64, 'Alfa Romeo 4C', '2023', 'Alfa Romeo', 'good', 'gasoline', 'coupe', 70000),
(65, 'Lexus LFA', '2024', 'Lexus', 'like new', 'gasoline', 'sports car', 375000),
(66, 'Chevrolet Camaro SS', '2023', 'Chevrolet', 'great', 'gasoline', 'muscle car', 55000),
(67, 'Aston Martin DBX', '2024', 'Aston Martin', 'new', 'hybrid', 'van', 190000),
(68, 'Maserati MC20', '2024', 'Maserati', 'new', 'gasoline', 'coupe', 210000),
(69, 'Rolls-Royce Cullinan', '2023', 'Rolls-Royce', 'new', 'gasoline', 'van', 330000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password_hash`) VALUES
(6, 'User', 'UserExample@gmail.com', '$2y$10$SKkx7FIj2qz.YqX3aQ0Uzu8UFliq1vR2lVyfiOVLHUcSQB.PCAPVa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
