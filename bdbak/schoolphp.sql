-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 28-02-2022 a las 09:39:06
-- Versión del servidor: 8.0.21
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `schoolphp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `date` datetime NOT NULL,
  `user_id` varchar(60) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `school_id` varchar(60) NOT NULL,
  `role` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `firstname` (`firstname`),
  KEY `lastname` (`lastname`),
  KEY `user_id` (`user_id`),
  KEY `school_id` (`school_id`),
  KEY `gender` (`gender`),
  KEY `role` (`role`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `date`, `user_id`, `gender`, `school_id`, `role`) VALUES
(1, 'Manolo', 'Cabrera', '0000-00-00 00:00:00', 'dsdsd', 'female', 'aslakslka', 'students'),
(3, 'Anjuma', 'Cabrera', '0000-00-00 00:00:00', 'erere', 'male', 'sdsd', 'admin'),
(6, 'Cristina', 'Cabrera Galán', '2022-02-27 12:14:42', 'dsdsd', 'female', '10', 'students'),
(7, 'Cristina', 'Cabrera Galán', '2022-02-27 12:14:42', 'dsdsd', 'female', '10', 'students'),
(8, 'Cristina', 'Cabrera Galán', '2022-02-27 12:14:42', 'dsdsd', 'female', '10', 'students'),
(9, 'Cristina', 'Cabrera Galán', '2022-02-27 12:14:42', 'dsdsd', 'female', '10', 'students');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
