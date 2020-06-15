-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2019 a las 13:08:19
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tablas`
--
CREATE DATABASE IF NOT EXISTS `tablas` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `tablas`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notes`
--

CREATE TABLE `notes5` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` varchar(400) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `name` varchar(60) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `color` enum('yellow','blue','green') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'yellow',
  `x` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `y` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `z` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `dt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `notes`
--

INSERT INTO `notes5` (`id`, `text`, `name`, `color`, `x`, `y`, `z`, `dt`) VALUES
(1, 'Para añadir una nota, debe presionar el botón \"Nueva nota\".', 'Ismael', 'yellow', '461', '216', '9', '2010-01-17 10:30:14'),
(2, 'Pueden eliminarse al presionar la \"x\".', 'Ismael', 'blue', '481', '4', '16', '2010-01-17 10:57:39'),
(3, 'Las notas conservan su posición.', 'Ismael', 'green', '185', '210', '11', '2010-01-17 10:57:39'),
(58, 'Holas', 'Mundos', 'blue', '191', '0', '17', '2019-11-28 11:47:52');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `notes`
--
ALTER TABLE `notes5`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `notes`
--
ALTER TABLE `notes5`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
