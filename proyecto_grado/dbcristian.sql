-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 18-11-2023 a las 02:45:02
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbcristian`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito_usuarios`
--

DROP TABLE IF EXISTS `carrito_usuarios`;
CREATE TABLE IF NOT EXISTS `carrito_usuarios` (
  `id_sesion` varchar(255) NOT NULL,
  `id_producto` bigint UNSIGNED NOT NULL,
  KEY `id_producto` (`id_producto`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `carrito_usuarios`
--

INSERT INTO `carrito_usuarios` (`id_sesion`, `id_producto`) VALUES
('lsvvojchhg3c3b6jbo1mflb2bv', 1),
('lsvvojchhg3c3b6jbo1mflb2bv', 2),
('lsvvojchhg3c3b6jbo1mflb2bv', 3),
('oiaagn2n5l2blgnr6dnu39an33', 6),
('ikof99f92a7s8f1ppc496a6sqs', 1),
('ee4vh8c51421p3jear4qqfm7a0', 5),
('ee4vh8c51421p3jear4qqfm7a0', 4),
('ee4vh8c51421p3jear4qqfm7a0', 6),
('7dlr63at1saa82hkassbkfvtju', 7),
('7dlr63at1saa82hkassbkfvtju', 4),
('6cj8s5cbr2fv3mjlf4i9quscml', 7),
('6cj8s5cbr2fv3mjlf4i9quscml', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `id` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `number` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`user_id`, `name`, `email`, `id`, `number`, `password`) VALUES
(1, 'Cristian Alexander Ospina Sanc', 'alexanderospina17@gmail.com', '1017924026', '3226422686', '$2y$10$PtmKJFeFqE9Kdqe0BdQp3ugKOGFY2DObtScSR9.Ro.w0NKbHoLrDC'),
(3, 'fatima de jesus sanchez hurtad', 'Fatimasanh@gmail.com', '43211799', '3126411060', '$2y$10$xz.ARdE6LUXuBxPFlHaKEuW4/D37i/c56pSKIHRQRHoW9JICW.AZa'),
(4, 'sebastian morales ocampo', 'sebastian@gmail.com', '100710', '3210000000', '$2y$10$6WdD9pLbfnx.5sYdcRG39uP6Cc14dthU912zw9vin0FxfO8IatzBi'),
(5, 'Sebastian Henao Florez', 'sebastianhenao04@gmail.com', '1036253384', '3193104811', '$2y$10$n3Y.hxlk2Cq5THkLGT.Z3Owg.lLgo86qRtjihOJJ3pYbTBM79l/oe'),
(6, 'David Timm Sanchez', 'ares@gmail.com', '9514718378', '9514718378', '$2y$10$UxS1eMjEsUYB9EICwpjYVOvNF86ugr6jZm6s3ohTdo6tFfSuY8pSC');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `descripcion` varchar(1024) NOT NULL,
  `precio` decimal(9,2) DEFAULT NULL,
  `imagen` blob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `imagen`) VALUES
(4, 'Camisa basica negra', 'Descubre la atemporalidad y la versatilidad de nuestra Camisa Básica Negra, una pieza fundamental en todo guardarropa. Diseñada para aquellos que aprecian la belleza en la simplicidad, esta camisa se convierte en un lienzo en blanco listo para adaptarse a tu estilo único.', '50000.00', ''),
(10, 'Gorra New Era', 'La Gorra New Era lleva consigo un legado de innovación y calidad. Conocida por su ajuste perfecto y su estructura duradera, esta gorra es el resultado de décadas de excelencia en diseño y fabricación. Viste la marca que ha definido el estándar en gorras desde siempre.\r\n\r\n', '150000.00', ''),
(8, 'Gorra Clasica', 'Sumérgete en el mundo del estilo casual y la autenticidad con nuestra Gorra Clásica. Diseñada para aquellos que buscan la combinación perfecta de comodidad y moda, esta gorra se convierte en el accesorio esencial que define tu actitud y personalidad.', '70000.00', ''),
(9, 'Camisa Amarilla', 'Deja que el sol brille en tu guardarropa con nuestra Camisa Amarilla, una prenda que fusiona la frescura del amarillo con la elegancia atemporal. Descubre cómo esta pieza única puede transformar tu apariencia, añadiendo un toque vibrante y lleno de energía a tu estilo diario.', '60000.00', ''),
(7, 'Camisa blanca', 'Eleva tu estilo con nuestra Camisa Blanca, un clásico atemporal que personifica la elegancia y la versatilidad. Desde su impecable simplicidad hasta su capacidad para adaptarse a cualquier ocasión, esta camisa se convierte en el lienzo perfecto para tu expresión personal.', '45000.00', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
