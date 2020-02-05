-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-02-2020 a las 17:59:08
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mvc_advanced`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `content`
--

CREATE TABLE `content` (
  `id_content` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `text` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `content`
--

INSERT INTO `content` (`id_content`, `name`, `email`, `text`) VALUES
(1, 'Pau', 'pau@assemblerschool.com', 'ADSdsadasdasadsds'),
(2, 'Puchu', 'puchu@assemblerschool.com', 'I <3 you Puchu'),
(3, 'Merli', 'merli@assemblerschool.com', 'Merli we love you'),
(4, 'adsads', 'asdasd@asddas.com', 'asdadsdas'),
(5, 'adsdsa', 'adsads@casddas.com', 'adsasddasasd');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id_content`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `content`
--
ALTER TABLE `content`
  MODIFY `id_content` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
