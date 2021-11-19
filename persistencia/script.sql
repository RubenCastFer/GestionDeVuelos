-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 18-11-2021 a las 22:49:54
-- Versión del servidor: 8.0.27-0ubuntu0.20.04.1
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `aeropuertos`
--
CREATE DATABASE IF NOT EXISTS `aeropuertos` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `aeropuertos`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombre` text NOT NULL,
  `contrasenia` text NOT NULL,
  `correspondencia` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `contrasenia`, `correspondencia`) VALUES
('Alba', '$2y$10$54PYE9GOH/uk8f1yO2hCsOP1oj5P20SzK8hdmYmjD.Fgv7aM84ubW', 'Vueling'),
('Alvaro', '$2y$10$rMXnd4X1b43OqR9K1ak4fuHTqPO9ageCqRPxwPZIOWVMmoIDB7UbS', 'gestor'),
('Eddy', '$2y$10$dSnAvwAMUGyAmSmydrnRueGeFdU4GGoijJhXXSOgoLL9XCDYjsOZS', 'gestor'),
('Javi', '$2y$10$nYhMMCTvFAGLgGc2d4PTvuGdliHPRELH0eQ0ZxKRSprRhkVRdN71W', 'gestor'),
('Jesus', '$2y$10$TIPh8RXraM691kMDMAtTbu/ChmKf.6Z0yHbrzwvSZLtZfCBNmNf4e', 'gestor'),
('Juan', '$2y$10$u2pS5eFbc7aHLjQwRmBFx.6JQ9CorlwiUYAO/kkvzMgjOsEBKlHTG', 'gestor'),
('Kimia', '$2y$10$4kapb4oZimcFtyXFr8rBvOXq.ZMYX0q.cqhrx96T3ba3RbMo4ILVm', 'gestor'),
('Laura', '$2y$10$InaKa03esU3Wi.96cpItMuZMObb.dFJD1osVoJkB3X5WWeOEHsPyy', 'Iberia'),
('Pedro', '$2y$10$TXbYG25AoZywzvrHxi5SA.mjE6O4B6Ge6C3JEI0HbiU06Dn0fWNFq', 'Ryanair'),
('Ruben', '$2y$10$tma.YoPvpgafkseN9/YGwO3LP1Zci8iUNZQraEoKZO.LVGZwExZ7e', 'gestor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vuelos`
--

CREATE TABLE `vuelos` (
  `id` int NOT NULL,
  `origen` text NOT NULL,
  `destino` text NOT NULL,
  `operadora` text NOT NULL,
  `fecha` date NOT NULL,
  `cantidadViajero` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `vuelos`
--

INSERT INTO `vuelos` (`id`, `origen`, `destino`, `operadora`, `fecha`, `cantidadViajero`) VALUES
(1, 'Sevilla', 'Madrid', 'Vueling', '2021-11-16', 100),
(2, 'Santiago', 'Sevilla', 'Iberia', '2021-12-16', 150),
(3, 'Santiago', 'Sevilla', 'Iberia', '2021-12-16', 150),
(4, 'Paris', 'Sevilla', 'Ryanair', '2021-12-16', 150),
(5, 'Sevilla', 'Berlin', 'Iberia', '2022-01-16', 200),
(6, 'Alicante', 'Sevilla', 'Ryanair', '2021-12-16', 150),
(7, 'Malaga', 'Sevilla', 'Ryanair', '2021-12-16', 150),
(8, 'Sevilla', 'Barcelona', 'Vueling', '2021-12-16', 250),
(9, 'Praga', 'Sevilla', 'Vueling', '2021-12-16', 300),
(10, 'Sevilla', 'Coruña', 'Iberia', '2022-01-15', 200),
(11, 'Zaragoza', 'Sevilla', 'Ryanair', '2021-12-20', 150);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`nombre`(20));

--
-- Indices de la tabla `vuelos`
--
ALTER TABLE `vuelos`
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `vuelos`
--
ALTER TABLE `vuelos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;