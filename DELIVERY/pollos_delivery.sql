-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-12-2025 a las 03:32:40
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pollos_delivery`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area_atencion`
--

CREATE TABLE `area_atencion` (
  `id_area` int(11) NOT NULL,
  `nombre_area` varchar(100) NOT NULL,
  `descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `area_atencion`
--

INSERT INTO `area_atencion` (`id_area`, `nombre_area`, `descripcion`) VALUES
(1, 'Ventas', 'Consultas sobre pedidos, precios y productos'),
(2, 'Promociones', 'Descuentos y campañas vigentes'),
(3, 'Reclamos', 'Atención a reclamos y devoluciones'),
(4, 'Sugerencias', 'Comentarios o ideas de los clientes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `dni` varchar(20) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `fecha_registro` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `dni`, `nombre`, `telefono`, `direccion`, `correo`, `fecha_registro`) VALUES
(16, '71111111', 'Andres Hurtado', '923333333', 'Calle los Jirazoles Mz U lote 10', 'andresito12@gmail.com', '2025-11-02 01:08:32'),
(17, '75888888', 'Marcelo warton', '953744361', 'Calle los Jirazoles Mz U lote 9', 'diegis25@gmail.com', '2025-11-04 14:05:47'),
(18, '75111111', 'Cliente Nuevo', NULL, NULL, NULL, '2025-11-05 00:11:56'),
(19, '72000000', 'Maikel Richel', '953781566', 'Calle los Jirazoles Mz U lote 9', 'diegis25@gmail.com', '2025-11-05 12:52:54'),
(20, '75555555', 'marcoss flores', '981454656', 'Calle los Jirazoles Mz U lote 9', 'diegis25@gmail.com', '2025-11-05 19:06:56'),
(21, '00000000', 'Cliente Prueba', '999999999', 'Lima', 'cliente@krochicken.com', '2025-11-05 19:10:19'),
(23, '99999999', 'Cliente Invitado', '000000000', 'Lima', 'cliente@krochicken.com', '2025-11-05 19:13:12'),
(33, '74444444', 'marcos zzzz', '953744318', 'Calle los Pinos Mz U lote 8', 'jaeenzhuamanzegarra761@gmail.com', '2025-11-12 00:47:40'),
(34, '78888888', 'Marcos Lopez', '953744310', 'Calle los pinos Mz U lote 8', 'jaeenzhuamanzegarra761@gmail.com', '2025-11-12 19:47:44'),
(35, '76555555', 'Alejandro Perez', '974859632', 'calle los pn Mz U lote 8', 'mateito87@gmail.com', '2025-11-12 19:51:10'),
(36, '78222222', 'Andres Martinez', '953744310', 'Calle los pn Mz U lote 7', 'jaeenzhuamanzegarra761@gmail.com', '2025-11-12 19:55:13'),
(37, '74999999', 'Samuel Medina', '953744310', 'Calle los pn Mz U lote 7', 'jaeenzhuamanzegarra761@gmail.com', '2025-11-12 20:13:58'),
(38, '74877125', 'Marcos Martinez', '988986565', 'Calle los pinos Mz U lote 8', 'mateito87@gmail.com', '2025-11-12 20:55:39'),
(39, '71266666', 'Angel Reyes', '985623365', 'Calle los pinos Mz u Lote 5', 'maikol656@gmail.com', '2025-11-19 18:12:10'),
(40, '78222255', 'Hugo San Roman', '953744318', 'Calle los Pinos Mz U lote 8', 'mateito87@gmail.com', '2025-11-19 19:32:28'),
(41, '78787878', 'Eduardo Vertiz', '988989999', NULL, 'jaeenzhuamanzegarra761@gmail.com', '2025-11-19 19:48:56'),
(42, '74111111', 'Jueneco', '965222222', 'Calle los Pinos Mz U lote 8', 'jaeenzhuamanzegarra761@gmail.com', '2025-11-19 19:49:35'),
(43, '78444444', 'Juan', '999999999', 'Calle los Pinos Mz U lote 8', 'jaeenzhuamanzegarra761@gmail.com', '2025-11-19 19:50:30'),
(44, '87888888', 'gjhg', '953744310', NULL, 'Jaeenzh@gmail.com', '2025-11-19 19:51:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultas`
--

CREATE TABLE `consultas` (
  `id_consulta` int(11) NOT NULL,
  `id_area` int(11) NOT NULL,
  `nombre_cliente` varchar(100) NOT NULL,
  `correo_cliente` varchar(100) DEFAULT NULL,
  `mensaje` text NOT NULL,
  `fecha_envio` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `consultas`
--

INSERT INTO `consultas` (`id_consulta`, `id_area`, `nombre_cliente`, `correo_cliente`, `mensaje`, `fecha_envio`) VALUES
(2, 2, 'Marcos Angel Ramirez', 'diegis25@gmail.com', 'q productos tiene', '2025-11-06 00:37:22'),
(3, 3, 'Marcos Angel', 'jaeenzhuamanzegarra761@gmail.com', 'No llego mi pedido a la hora estimulada', '2025-11-13 01:00:26'),
(4, 3, 'Marcos Angel', 'jaeenzhuamanzegarra761@gmail.com', 'No llego producto', '2025-11-13 02:00:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_pedido`
--

CREATE TABLE `detalle_pedido` (
  `id_detalle` int(11) NOT NULL,
  `id_recibo` int(11) NOT NULL,
  `producto` varchar(100) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `subtotal` decimal(10,2) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `detalle_pedido`
--

INSERT INTO `detalle_pedido` (`id_detalle`, `id_recibo`, `producto`, `cantidad`, `precio`, `subtotal`, `imagen`, `fecha`) VALUES
(16, 15, 'Pollo Crocante Dúo - 2 Piezas de pollo + papas + 2 bebidas personales', 1, 30.00, 30.00, NULL, '2025-11-02 06:10:13'),
(17, 16, 'Pollo Crocante Dúo', 1, 30.00, 30.00, 'http://localhost/PROYECTO/DELIVERY/img/p1.jpg', '2025-11-02 06:11:49'),
(18, 16, 'Combo Familiar', 1, 49.90, 49.90, 'http://localhost/PROYECTO/DELIVERY/img/p2.jpg', '2025-11-02 06:11:49'),
(19, 17, 'Pollo Crocante Dúo - 2 Piezas de pollo + papas + 2 bebidas personales', 1, 30.00, 30.00, NULL, '2025-11-04 19:09:44'),
(20, 18, 'Pollo Crocante Dúo - 2 Piezas de pollo + papas + 2 bebidas personales', 1, 30.00, 30.00, NULL, '2025-11-05 05:11:56'),
(21, 19, 'Pollo Crocante Dúo', 5, 30.00, 150.00, 'http://localhost/PROYECTO/DELIVERY/img/p1.jpg', '2025-11-13 00:57:20'),
(22, 19, 'Pollo BBQ Especial', 1, 27.90, 27.90, 'http://localhost/PROYECTO/DELIVERY/img/p6.jpg', '2025-11-13 00:57:20'),
(23, 19, 'Combo Krunchy Lovers', 1, 38.00, 38.00, 'http://localhost/PROYECTO/DELIVERY/img/p4.jpg', '2025-11-13 00:57:20'),
(24, 19, 'Tres Leches de Vainilla', 1, 6.00, 6.00, 'http://localhost/PROYECTO/DELIVERY/img/cake-3.jpg', '2025-11-13 00:57:20'),
(25, 20, 'Pollo Crocante Dúo - 2 Piezas de pollo + papas + 2 bebidas personales', 1, 30.00, 30.00, NULL, '2025-11-13 00:58:21'),
(26, 21, 'Pollo Crocante Dúo - 2 Piezas de pollo + papas + 2 bebidas personales', 5, 30.00, 150.00, NULL, '2025-11-13 01:58:43'),
(27, 22, 'Pollo Crocante Dúo', 2, 30.00, 60.00, 'http://localhost/PROYECTO/DELIVERY/img/p1.jpg', '2025-11-19 23:18:09'),
(28, 22, 'Combo Familiar', 1, 49.90, 49.90, 'http://localhost/PROYECTO/DELIVERY/img/p2.jpg', '2025-11-19 23:18:09'),
(29, 23, 'Combo Parrillero', 1, 55.00, 55.00, 'http://localhost/PROYECTO/DELIVERY/img/p5.jpg', '2025-11-19 23:48:02'),
(30, 23, 'Pollo BBQ Especial', 5, 27.90, 139.50, 'http://localhost/PROYECTO/DELIVERY/img/p6.jpg', '2025-11-19 23:48:02'),
(31, 23, 'Mousse de Lúcuma', 1, 9.00, 9.00, 'http://localhost/PROYECTO/DELIVERY/img/lu.jpg', '2025-11-19 23:48:02'),
(32, 24, 'Guaraná 450 ml', 1, 1.50, 1.50, 'http://localhost/PROYECTO/DELIVERY/img/b5.jpg', '2025-11-19 23:48:28'),
(33, 24, 'Sprite 450 ml', 1, 2.00, 2.00, 'http://localhost/PROYECTO/DELIVERY/img/b6.jpg', '2025-11-19 23:48:28'),
(34, 25, 'Pollo Crocante Dúo', 1, 30.00, 30.00, 'http://localhost/PROYECTO/DELIVERY/img/p1.jpg', '2025-11-20 01:03:48'),
(35, 26, 'Pollo Crocante Dúo', 1, 30.00, 30.00, 'http://localhost/PROYECTO/DELIVERY/img/p1.jpg', '2025-11-20 01:04:40'),
(36, 27, 'Pollo Crocante Dúo', 2, 30.00, 60.00, 'http://localhost/PROYECTO/DELIVERY/img/p1.jpg', '2025-11-20 01:10:08'),
(37, 28, 'Pollo Crocante Dúo', 1, 30.00, 30.00, 'http://localhost/PROYECTO/DELIVERY/img/p1.jpg', '2025-11-20 01:11:06'),
(38, 28, 'Pastel de Crema', 1, 5.00, 5.00, 'http://localhost/PROYECTO/DELIVERY/img/torta.jpg', '2025-11-20 01:11:06'),
(39, 28, 'Concordia 500 ml', 4, 2.00, 8.00, 'http://localhost/PROYECTO/DELIVERY/img/b4.jpg', '2025-11-20 01:11:06'),
(40, 29, 'Pollo Crocante Dúo', 1, 30.00, 30.00, 'http://localhost/PROYECTO/DELIVERY/img/p1.jpg', '2025-11-20 01:24:24'),
(41, 29, 'Combo Familiar', 1, 49.90, 49.90, 'http://localhost/PROYECTO/DELIVERY/img/p2.jpg', '2025-11-20 01:24:24'),
(42, 30, 'Fanta 500 ml', 1, 2.00, 2.00, 'http://localhost/PROYECTO/DELIVERY/img/b1.jpg', '2025-11-20 01:32:00'),
(43, 30, 'Inka Kola sin azúcar 500 ml', 1, 3.50, 3.50, 'http://localhost/PROYECTO/DELIVERY/img/b2.jpg', '2025-11-20 01:32:00'),
(44, 31, 'Combo Familiar', 1, 49.90, 49.90, 'http://localhost/PROYECTO/DELIVERY/img/p2.jpg', '2025-11-20 01:47:26'),
(45, 31, 'Galleta de Avena', 1, 1.50, 1.50, 'http://localhost/PROYECTO/DELIVERY/img/galleta.jpg', '2025-11-20 01:47:26'),
(46, 32, 'Chaufa con Pollo', 1, 15.00, 15.00, 'http://localhost/PROYECTO/DELIVERY/img/p3.jpg', '2025-11-20 01:52:16'),
(47, 32, 'Coca-Cola sin azúcar', 1, 4.00, 4.00, 'http://localhost/PROYECTO/DELIVERY/img/b3.jpg', '2025-11-20 01:52:16'),
(48, 32, 'Galleta de Avena', 1, 1.50, 1.50, 'http://localhost/PROYECTO/DELIVERY/img/galleta.jpg', '2025-11-20 01:52:16'),
(49, 33, 'Pollo Crocante Dúo', 5, 30.00, 150.00, 'http://localhost/PROYECTO/img/p1.jpg', '2025-11-26 06:04:05'),
(50, 34, 'Pollo Crocante Dúo', 3, 30.00, 90.00, 'http://localhost/PROYECTO/DELIVERY/img/p1.jpg', '2025-12-03 22:44:17'),
(51, 34, 'Combo Familiar', 3, 49.90, 149.70, 'http://localhost/PROYECTO/DELIVERY/img/p2.jpg', '2025-12-03 22:44:17'),
(52, 34, 'Combo Krunchy Lovers', 1, 38.00, 38.00, 'http://localhost/PROYECTO/DELIVERY/img/p4.jpg', '2025-12-03 22:44:17'),
(53, 34, 'Combo Parrillero', 1, 55.00, 55.00, 'http://localhost/PROYECTO/DELIVERY/img/p5.jpg', '2025-12-03 22:44:17'),
(54, 34, 'Sprite 450 ml', 1, 2.00, 2.00, 'http://localhost/PROYECTO/DELIVERY/img/b6.jpg', '2025-12-03 22:44:17'),
(55, 34, 'Concordia 500 ml', 1, 2.00, 2.00, 'http://localhost/PROYECTO/DELIVERY/img/b4.jpg', '2025-12-03 22:44:17'),
(56, 35, 'Pollo Crocante Dúo', 3, 30.00, 90.00, 'http://localhost/PROYECTO/DELIVERY/img/p1.jpg', '2025-12-03 22:44:53'),
(57, 35, 'Combo Familiar', 3, 49.90, 149.70, 'http://localhost/PROYECTO/DELIVERY/img/p2.jpg', '2025-12-03 22:44:53'),
(58, 35, 'Combo Krunchy Lovers', 1, 38.00, 38.00, 'http://localhost/PROYECTO/DELIVERY/img/p4.jpg', '2025-12-03 22:44:53'),
(59, 35, 'Combo Parrillero', 1, 55.00, 55.00, 'http://localhost/PROYECTO/DELIVERY/img/p5.jpg', '2025-12-03 22:44:53'),
(60, 35, 'Sprite 450 ml', 1, 2.00, 2.00, 'http://localhost/PROYECTO/DELIVERY/img/b6.jpg', '2025-12-03 22:44:53'),
(61, 35, 'Concordia 500 ml', 1, 2.00, 2.00, 'http://localhost/PROYECTO/DELIVERY/img/b4.jpg', '2025-12-03 22:44:53'),
(62, 36, 'Pollo Crocante Dúo', 3, 30.00, 90.00, 'http://localhost/PROYECTO/DELIVERY/img/p1.jpg', '2025-12-03 22:46:43'),
(63, 36, 'Combo Familiar', 3, 49.90, 149.70, 'http://localhost/PROYECTO/DELIVERY/img/p2.jpg', '2025-12-03 22:46:43'),
(64, 36, 'Combo Krunchy Lovers', 1, 38.00, 38.00, 'http://localhost/PROYECTO/DELIVERY/img/p4.jpg', '2025-12-03 22:46:43'),
(65, 36, 'Combo Parrillero', 1, 55.00, 55.00, 'http://localhost/PROYECTO/DELIVERY/img/p5.jpg', '2025-12-03 22:46:43'),
(66, 36, 'Sprite 450 ml', 1, 2.00, 2.00, 'http://localhost/PROYECTO/DELIVERY/img/b6.jpg', '2025-12-03 22:46:43'),
(67, 36, 'Concordia 500 ml', 1, 2.00, 2.00, 'http://localhost/PROYECTO/DELIVERY/img/b4.jpg', '2025-12-03 22:46:43'),
(68, 37, 'Chaufa con Pollo', 1, 15.00, 15.00, 'http://localhost/PROYECTO/DELIVERY/img/p3.jpg', '2025-12-03 23:10:09'),
(69, 37, 'Combo Familiar', 1, 49.90, 49.90, 'http://localhost/PROYECTO/DELIVERY/img/p2.jpg', '2025-12-03 23:10:09'),
(70, 38, 'Pollo BBQ Especial', 1, 27.90, 27.90, 'http://localhost/PROYECTO/DELIVERY/img/p6.jpg', '2025-12-03 23:10:59'),
(71, 38, 'Mousse de Lúcuma', 1, 9.00, 9.00, 'http://localhost/PROYECTO/DELIVERY/img/lu.jpg', '2025-12-03 23:10:59'),
(72, 38, 'Pastel de Crema', 1, 5.00, 5.00, 'http://localhost/PROYECTO/DELIVERY/img/torta.jpg', '2025-12-03 23:10:59'),
(73, 39, 'Pollo BBQ Especial', 4, 27.90, 111.60, 'http://localhost/PROYECTO/DELIVERY/img/p6.jpg', '2025-12-03 23:45:20'),
(74, 39, 'Mousse de Lúcuma', 3, 9.00, 27.00, 'http://localhost/PROYECTO/DELIVERY/img/lu.jpg', '2025-12-03 23:45:20'),
(75, 39, 'Pastel de Crema', 1, 5.00, 5.00, 'http://localhost/PROYECTO/DELIVERY/img/torta.jpg', '2025-12-03 23:45:20'),
(76, 40, 'Pollo BBQ Especial', 4, 27.90, 111.60, 'http://localhost/PROYECTO/DELIVERY/img/p6.jpg', '2025-12-03 23:54:24'),
(77, 40, 'Mousse de Lúcuma', 3, 9.00, 27.00, 'http://localhost/PROYECTO/DELIVERY/img/lu.jpg', '2025-12-03 23:54:24'),
(78, 40, 'Pastel de Crema', 1, 5.00, 5.00, 'http://localhost/PROYECTO/DELIVERY/img/torta.jpg', '2025-12-03 23:54:24'),
(79, 41, 'Pollo BBQ Especial', 4, 27.90, 111.60, 'http://localhost/PROYECTO/DELIVERY/img/p6.jpg', '2025-12-04 00:06:21'),
(80, 41, 'Mousse de Lúcuma', 3, 9.00, 27.00, 'http://localhost/PROYECTO/DELIVERY/img/lu.jpg', '2025-12-04 00:06:21'),
(81, 41, 'Pastel de Crema', 1, 5.00, 5.00, 'http://localhost/PROYECTO/DELIVERY/img/torta.jpg', '2025-12-04 00:06:21'),
(82, 42, 'Pollo BBQ Especial', 4, 27.90, 111.60, 'http://localhost/PROYECTO/DELIVERY/img/p6.jpg', '2025-12-04 00:14:37'),
(83, 42, 'Mousse de Lúcuma', 3, 9.00, 27.00, 'http://localhost/PROYECTO/DELIVERY/img/lu.jpg', '2025-12-04 00:14:37'),
(84, 42, 'Pastel de Crema', 1, 5.00, 5.00, 'http://localhost/PROYECTO/DELIVERY/img/torta.jpg', '2025-12-04 00:14:37'),
(85, 43, 'Fanta 500 ml', 1, 2.00, 2.00, 'http://localhost/PROYECTO/DELIVERY/img/b1.jpg', '2025-12-04 00:28:45'),
(86, 43, 'Concordia 500 ml', 2, 2.00, 4.00, 'http://localhost/PROYECTO/DELIVERY/img/b4.jpg', '2025-12-04 00:28:45'),
(87, 43, 'Guaraná 450 ml', 3, 1.50, 4.50, 'http://localhost/PROYECTO/DELIVERY/img/b5.jpg', '2025-12-04 00:28:45'),
(88, 43, 'Tres Leches de Chocolate', 1, 6.00, 6.00, 'http://localhost/PROYECTO/DELIVERY/img/leche.jpg', '2025-12-04 00:28:45'),
(89, 43, 'Pollo Crocante Dúo', 2, 30.00, 60.00, 'http://localhost/PROYECTO/DELIVERY/img/p1.jpg', '2025-12-04 00:28:45'),
(90, 44, 'Pastel de Crema', 1, 5.00, 5.00, 'http://localhost/PROYECTO/DELIVERY/img/torta.jpg', '2025-12-04 00:45:27'),
(91, 45, 'Pollo Crocante Dúo', 1, 30.00, 30.00, 'http://localhost/PROYECTO/DELIVERY/img/p1.jpg', '2025-12-10 18:35:20'),
(92, 45, 'Combo Familiar', 1, 49.90, 49.90, 'http://localhost/PROYECTO/DELIVERY/img/p2.jpg', '2025-12-10 18:35:20'),
(93, 46, 'Pastel de Crema', 1, 5.00, 5.00, 'http://localhost/PROYECTO/DELIVERY/img/torta.jpg', '2025-12-10 22:28:36'),
(94, 46, 'Torta de Chocolate', 1, 7.50, 7.50, 'http://localhost/PROYECTO/DELIVERY/img/pie.jpg', '2025-12-10 22:28:36'),
(95, 47, 'Combo Familiar', 1, 49.90, 49.90, 'http://localhost/PROYECTO/DELIVERY/img/p2.jpg', '2025-12-10 22:49:21'),
(96, 47, 'Pollo Crocante Dúo', 1, 30.00, 30.00, 'http://localhost/PROYECTO/DELIVERY/img/p1.jpg', '2025-12-10 22:49:21'),
(97, 47, 'Combo Krunchy Lovers', 2, 38.00, 76.00, 'http://localhost/PROYECTO/DELIVERY/img/p4.jpg', '2025-12-10 22:49:21'),
(98, 47, 'Pollo BBQ Especial', 1, 27.90, 27.90, 'http://localhost/PROYECTO/DELIVERY/img/p6.jpg', '2025-12-10 22:49:21'),
(99, 48, 'Combo Krunchy Lovers', 1, 38.00, 38.00, 'http://localhost/PROYECTO/DELIVERY/img/p4.jpg', '2025-12-10 22:51:47'),
(100, 48, 'Pollo BBQ Especial', 1, 27.90, 27.90, 'http://localhost/PROYECTO/DELIVERY/img/p6.jpg', '2025-12-10 22:51:47'),
(101, 49, 'Combo Krunchy Lovers', 1, 38.00, 38.00, 'http://localhost/PROYECTO/DELIVERY/img/p4.jpg', '2025-12-10 23:13:38'),
(102, 49, 'Pollo BBQ Especial', 1, 27.90, 27.90, 'http://localhost/PROYECTO/DELIVERY/img/p6.jpg', '2025-12-10 23:13:38'),
(103, 50, 'Chaufa con Pollo', 1, 15.00, 15.00, 'http://localhost/PROYECTO/DELIVERY/img/p3.jpg', '2025-12-10 23:15:05'),
(104, 50, 'Combo Familiar', 1, 49.90, 49.90, 'http://localhost/PROYECTO/DELIVERY/img/p2.jpg', '2025-12-10 23:15:05'),
(105, 50, 'Combo Krunchy Lovers', 1, 38.00, 38.00, 'http://localhost/PROYECTO/DELIVERY/img/p4.jpg', '2025-12-10 23:15:05'),
(106, 51, 'Combo Familiar', 1, 49.90, 49.90, 'http://localhost/PROYECTO/DELIVERY/img/p2.jpg', '2025-12-10 23:19:18'),
(107, 51, 'Combo Krunchy Lovers', 1, 38.00, 38.00, 'http://localhost/PROYECTO/DELIVERY/img/p4.jpg', '2025-12-10 23:19:18'),
(108, 52, 'Combo Familiar', 1, 49.90, 49.90, 'http://localhost/PROYECTO/DELIVERY/img/p2.jpg', '2025-12-10 23:21:18'),
(109, 52, 'Combo Krunchy Lovers', 1, 38.00, 38.00, 'http://localhost/PROYECTO/DELIVERY/img/p4.jpg', '2025-12-10 23:21:18'),
(110, 52, 'Concordia 500 ml', 1, 2.00, 2.00, 'http://localhost/PROYECTO/DELIVERY/img/b4.jpg', '2025-12-10 23:21:18'),
(111, 52, 'Sprite 450 ml', 1, 2.00, 2.00, 'http://localhost/PROYECTO/DELIVERY/img/b6.jpg', '2025-12-10 23:21:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados_delivery`
--

CREATE TABLE `empleados_delivery` (
  `id_repartidor` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `zona_entrega` varchar(100) DEFAULT NULL,
  `vehiculo` varchar(50) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `disponibilidad` enum('Disponible','Ocupado') DEFAULT 'Disponible',
  `latitud` decimal(10,6) DEFAULT NULL,
  `longitud` decimal(10,6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleados_delivery`
--

INSERT INTO `empleados_delivery` (`id_repartidor`, `nombre`, `telefono`, `zona_entrega`, `vehiculo`, `foto`, `disponibilidad`, `latitud`, `longitud`) VALUES
(1, 'Carlos', '987654321', 'Surco', 'Moto Roja', NULL, 'Disponible', -12.150000, -76.983000),
(2, 'María', '912345678', 'Miraflores', 'Scooter Azul', NULL, 'Ocupado', -12.120000, -77.030000),
(3, 'Luis', '934567890', 'San Miguel', 'Bicimoto', NULL, 'Disponible', -12.080000, -77.100000),
(4, 'Jorge', '976543210', 'Barranco', 'Auto Gris', NULL, 'Ocupado', -12.150000, -77.021000),
(5, 'Andrea', '945678901', 'La Molina', 'Moto Negra', NULL, 'Disponible', -12.080000, -76.940000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entregas_delivery`
--

CREATE TABLE `entregas_delivery` (
  `id_entrega` int(11) NOT NULL,
  `id_repartidor` int(11) NOT NULL,
  `cliente` varchar(100) NOT NULL,
  `direccion_cliente` varchar(255) NOT NULL,
  `producto` varchar(100) NOT NULL,
  `estado` enum('En camino','Entregado') DEFAULT 'En camino',
  `hora_entrega` datetime DEFAULT NULL,
  `latitud` decimal(10,6) DEFAULT NULL,
  `longitud` decimal(10,6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `entregas_delivery`
--

INSERT INTO `entregas_delivery` (`id_entrega`, `id_repartidor`, `cliente`, `direccion_cliente`, `producto`, `estado`, `hora_entrega`, `latitud`, `longitud`) VALUES
(1, 2, 'José Pérez', 'Av. Argentina 1450, Callao', 'Combo Familiar', 'En camino', '2025-11-05 02:27:18', NULL, NULL),
(2, 4, 'Marta Gómez', 'Av. Sucre 2123, Magdalena', '1/4 Pollo + Papas', 'Entregado', '2025-11-05 02:37:18', NULL, NULL),
(3, 2, 'Carlos Ramos', 'Av. Larco 123, Miraflores', '1/2 Pollo + Papas', 'En camino', '2025-11-05 02:47:18', -12.123400, -77.030000),
(4, 2, 'Lucía Pérez', 'Av. Benavides 890, Miraflores', 'Combo Familiar', 'Entregado', NULL, -12.130000, -77.025000),
(5, 4, 'Miguel Torres', 'Av. Grau 1010, Barranco', '1 Pollo Entero + Inka Kola', 'En camino', NULL, -12.154000, -77.022000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promociones`
--

CREATE TABLE `promociones` (
  `id` int(11) NOT NULL,
  `dni` varchar(8) NOT NULL,
  `producto` varchar(100) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `hora` time NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `promociones`
--

INSERT INTO `promociones` (`id`, `dni`, `producto`, `cantidad`, `total`, `hora`, `fecha`) VALUES
(20, '71111111', 'Combo Familiar', 1, 60.00, '07:12:32', '2025-11-02 06:12:32'),
(21, '71111111', '2 Pollos a la Brasa', 1, 80.00, '07:12:32', '2025-11-02 06:12:32'),
(26, '71111111', 'Combo Familiar', 1, 60.00, '07:19:14', '2025-11-02 06:19:14'),
(27, '71111111', '2 Pollos a la Brasa', 1, 80.00, '07:19:14', '2025-11-02 06:19:14'),
(28, '71111111', 'Pollito Combo', 1, 32.00, '07:19:14', '2025-11-02 06:19:14'),
(29, '71111111', '2 Pollos a la Brasa', 1, 80.00, '07:36:42', '2025-11-02 06:36:42'),
(30, '71111111', 'Pollito Combo', 1, 32.00, '07:36:42', '2025-11-02 06:36:42'),
(35, '71111111', 'Combo Familiar', 1, 60.00, '07:57:13', '2025-11-02 06:57:13'),
(38, '71111111', 'Picarones', 1, 6.00, '07:59:53', '2025-11-02 06:59:53'),
(39, '72000000', '2 Pollos a la Brasa', 1, 0.00, '18:53:31', '2025-11-05 17:53:31'),
(40, '72000000', 'Combo Familiar', 2, 120.00, '18:54:11', '2025-11-05 17:54:11'),
(41, '72000000', '2 Pollos a la Brasa', 1, 80.00, '18:54:11', '2025-11-05 17:54:11'),
(42, '71111111', 'Mini Pollo BOX', 6, 90.00, '06:53:31', '2025-11-12 05:53:31'),
(43, '74999999', 'Combo Familiar', 1, 60.00, '02:14:56', '2025-11-13 01:14:56'),
(44, '74999999', '2 Pollos a la Brasa', 1, 80.00, '02:14:56', '2025-11-13 01:14:56'),
(45, '74999999', 'Salchipapa', 3, 30.00, '02:14:56', '2025-11-13 01:14:56'),
(46, '74877125', 'Combo Familiar', 1, 60.00, '02:57:37', '2025-11-13 01:57:37'),
(47, '74877125', '2 Pollos a la Brasa', 1, 80.00, '02:57:37', '2025-11-13 01:57:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recibo_pedido`
--

CREATE TABLE `recibo_pedido` (
  `id` int(11) NOT NULL,
  `dni` varchar(20) NOT NULL,
  `hora` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `recibo_pedido`
--

INSERT INTO `recibo_pedido` (`id`, `dni`, `hora`) VALUES
(15, '71111111', '2025-11-02 01:10:13'),
(16, '71111111', '2025-11-02 01:11:49'),
(17, '75888888', '2025-11-04 14:09:44'),
(18, '75111111', '2025-11-05 00:11:56'),
(19, '78222222', '2025-11-12 19:57:20'),
(20, '78222222', '2025-11-12 19:58:21'),
(21, '74877125', '2025-11-12 20:58:43'),
(22, '00000000', '2025-11-19 18:18:09'),
(23, '00000000', '2025-11-19 18:48:01'),
(24, '00000000', '2025-11-19 18:48:28'),
(25, '00000000', '2025-11-19 20:03:48'),
(26, '00000000', '2025-11-19 20:04:40'),
(27, '00000000', '2025-11-19 20:10:08'),
(28, '00000000', '2025-11-19 20:11:06'),
(29, '00000000', '2025-11-19 20:24:24'),
(30, '00000000', '2025-11-19 20:32:00'),
(31, '00000000', '2025-11-19 20:47:25'),
(32, '00000000', '2025-11-19 20:52:16'),
(33, '00000000', '2025-11-26 01:04:05'),
(34, '00000000', '2025-12-03 17:44:16'),
(35, '00000000', '2025-12-03 17:44:53'),
(36, '00000000', '2025-12-03 17:46:43'),
(37, '00000000', '2025-12-03 18:10:09'),
(38, '00000000', '2025-12-03 18:10:59'),
(39, '00000000', '2025-12-03 18:45:20'),
(40, '00000000', '2025-12-03 18:54:24'),
(41, '00000000', '2025-12-03 19:06:21'),
(42, '00000000', '2025-12-03 19:14:37'),
(43, '00000000', '2025-12-03 19:28:45'),
(44, '00000000', '2025-12-03 19:45:27'),
(45, '00000000', '2025-12-10 13:35:20'),
(46, '00000000', '2025-12-10 17:28:35'),
(47, '00000000', '2025-12-10 17:49:21'),
(48, '00000000', '2025-12-10 17:51:47'),
(49, '00000000', '2025-12-10 18:13:37'),
(50, '00000000', '2025-12-10 18:15:04'),
(51, '00000000', '2025-12-10 18:19:18'),
(52, '00000000', '2025-12-10 18:21:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `repartidores_pedidos`
--

CREATE TABLE `repartidores_pedidos` (
  `id` int(11) NOT NULL,
  `dni` varchar(8) NOT NULL,
  `id_recibo` int(11) NOT NULL,
  `repartidor` varchar(100) NOT NULL,
  `hora` varchar(10) DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `repartidores_pedidos`
--

INSERT INTO `repartidores_pedidos` (`id`, `dni`, `id_recibo`, `repartidor`, `hora`, `fecha`) VALUES
(12, '71111111', 15, 'María', '01:10 a. m', '2025-11-02 06:10:13'),
(13, '75888888', 17, 'María', '02:09 p. m', '2025-11-04 19:09:44'),
(14, '75111111', 18, 'Carlos', '12:11 a. m', '2025-11-05 05:11:56'),
(15, '78222222', 20, 'Jorge', '07:58 p. m', '2025-11-13 00:58:21'),
(16, '74877125', 21, 'Luis', '08:58 p. m', '2025-11-13 01:58:43');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `area_atencion`
--
ALTER TABLE `area_atencion`
  ADD PRIMARY KEY (`id_area`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`),
  ADD UNIQUE KEY `dni` (`dni`);

--
-- Indices de la tabla `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`id_consulta`),
  ADD KEY `id_area` (`id_area`);

--
-- Indices de la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  ADD PRIMARY KEY (`id_detalle`),
  ADD KEY `fk_detalle_recibo` (`id_recibo`);

--
-- Indices de la tabla `empleados_delivery`
--
ALTER TABLE `empleados_delivery`
  ADD PRIMARY KEY (`id_repartidor`);

--
-- Indices de la tabla `entregas_delivery`
--
ALTER TABLE `entregas_delivery`
  ADD PRIMARY KEY (`id_entrega`),
  ADD KEY `fk_entrega_repartidor` (`id_repartidor`);

--
-- Indices de la tabla `promociones`
--
ALTER TABLE `promociones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_promocion_cliente` (`dni`);

--
-- Indices de la tabla `recibo_pedido`
--
ALTER TABLE `recibo_pedido`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_recibo_cliente` (`dni`);

--
-- Indices de la tabla `repartidores_pedidos`
--
ALTER TABLE `repartidores_pedidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_repartidor_cliente` (`dni`),
  ADD KEY `fk_repartidor_recibo` (`id_recibo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `area_atencion`
--
ALTER TABLE `area_atencion`
  MODIFY `id_area` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `consultas`
--
ALTER TABLE `consultas`
  MODIFY `id_consulta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  MODIFY `id_detalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT de la tabla `empleados_delivery`
--
ALTER TABLE `empleados_delivery`
  MODIFY `id_repartidor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `entregas_delivery`
--
ALTER TABLE `entregas_delivery`
  MODIFY `id_entrega` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `promociones`
--
ALTER TABLE `promociones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de la tabla `recibo_pedido`
--
ALTER TABLE `recibo_pedido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT de la tabla `repartidores_pedidos`
--
ALTER TABLE `repartidores_pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `consultas`
--
ALTER TABLE `consultas`
  ADD CONSTRAINT `consultas_ibfk_1` FOREIGN KEY (`id_area`) REFERENCES `area_atencion` (`id_area`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  ADD CONSTRAINT `fk_detalle_recibo` FOREIGN KEY (`id_recibo`) REFERENCES `recibo_pedido` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `entregas_delivery`
--
ALTER TABLE `entregas_delivery`
  ADD CONSTRAINT `fk_entrega_repartidor` FOREIGN KEY (`id_repartidor`) REFERENCES `empleados_delivery` (`id_repartidor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `promociones`
--
ALTER TABLE `promociones`
  ADD CONSTRAINT `fk_promocion_cliente` FOREIGN KEY (`dni`) REFERENCES `clientes` (`dni`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `recibo_pedido`
--
ALTER TABLE `recibo_pedido`
  ADD CONSTRAINT `fk_recibo_cliente` FOREIGN KEY (`dni`) REFERENCES `clientes` (`dni`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `repartidores_pedidos`
--
ALTER TABLE `repartidores_pedidos`
  ADD CONSTRAINT `fk_repartidor_cliente` FOREIGN KEY (`dni`) REFERENCES `clientes` (`dni`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_repartidor_recibo` FOREIGN KEY (`id_recibo`) REFERENCES `recibo_pedido` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
