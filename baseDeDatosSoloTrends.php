-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 13-06-2017 a las 16:01:01
-- Versión del servidor: 5.5.42
-- Versión de PHP: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `twitter`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trend`
--

CREATE TABLE `trend` (
  `id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL,
  `trend` varchar(50) NULL DEFAULT NULL,
  `url` varchar(100) NULL DEFAULT NULL,
  `contenido` varchar(50) NULL DEFAULT NULL,
  `query` varchar(50) NULL DEFAULT NULL,
  `volumen` int(11) NULL DEFAULT NULL
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `trend`
--
ALTER TABLE `trend`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `trend`
--
ALTER TABLE `trend`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;