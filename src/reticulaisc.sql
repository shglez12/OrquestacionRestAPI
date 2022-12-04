-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-10-2022 a las 06:17:03
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `reticulaisc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias_reticula`
--

CREATE TABLE `materias_reticula` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `clave_materia` varchar(10) NOT NULL,
  `nombre_materia` varchar(40) NOT NULL,
  `semestre` int(2) NOT NULL,
  `horas_practicas` int(2) NOT NULL,
  `horas_teoricas` int(2) NOT NULL,
  `total_horas` int(2) NOT NULL) 


INSERT INTO `materias_reticula` (`id`, `clave_materia`, `nombre_materia`, `semestre`, `horas_practicas`, `horas_teoricas`, `total_horas`) VALUES
(1, 'ACF-0901', 'Calculo Diferencial', 1, 3, 2, 5),
(2, 'AED-1285', 'Fundamentos de Programacion', 1, 2, 3, 5),
(3, 'ACA-0907', 'Taller de Etica', 1, 0, 4, 5),
(4, 'AEF-1041', 'Matematicas Discretas', 1, 3, 2, 5),
(5, 'SCH-1024', 'Taller de Administracion', 1, 1, 3, 4),
(6, 'ACC-0906', 'Fundamentos de Investigacion', 1, 2, 2, 4),
(7, 'ACF-0902', 'Calculo Integral', 2, 3, 2, 5),
(8, 'AED-1286', 'Programacion Orientada a Objetos', 2, 2, 3, 5),
(9, 'AEC-1008', 'Contabilidad Financiera', 2, 2, 2, 4),
(10, 'AEC-1058', 'Quimica', 2, 2, 2, 4),
(11, 'ACD-0903', 'Algebra Lineal', 2, 3, 2, 5),
(12, 'AEF-1052', 'Probabilidad y Estadistica', 2, 3, 2, 5),
(13, 'ACF-0904', 'Calculo Vectorial', 3, 3, 2, 5),
(14, 'AED-1026', 'Estructura de Datos', 3, 2, 3, 5),
(15, 'SCC-1005', 'Cultura Empresarial', 3, 2, 2, 4),
(16, 'SCC-1013', 'Investigacion de Operaciones', 3, 2, 2, 4),
(17, 'ACD-0908', 'Desarrollo Sustentable', 3, 2, 3, 5),
(18, 'SCF-1006', 'Fisica General', 3, 3, 2, 5),
(19, 'ACF-0905', 'Ecuaciones Diferenciales', 4, 3, 2, 5),
(20, 'SCC-1017', 'Metodos Numericos', 4, 2, 2, 4),
(21, 'SCD-1027', 'Topicos Avanzados de Programacion', 4, 2, 3, 5),
(22, 'AEF-1031', 'Fundamentos de Base de Datos', 4, 3, 2, 5),
(23, 'SCD-1022', 'Simulacion', 4, 2, 3, 5),
(24, 'SCD-1018', 'Principios Electricos y Digitales', 4, 2, 3, 5),
(25, 'SCC-1010', 'Graficacion', 5, 2, 2, 4),
(26, 'AEC-1034', 'Fundamentos de Telecomunicaciones', 5, 2, 2, 4),
(27, 'AEC-1061', 'Sistemas Operativos', 5, 2, 2, 4),
(28, 'SCA-1025', 'Taller de Base de Datos', 5, 0, 4, 4),
(29, 'SCC-1007', 'Fundamentos de Ingenieria de Software', 5, 2, 2, 4),
(30, 'SCD-1003', 'Arquitectura de Computadoras', 5, 2, 3, 5),
(31, 'SCD-1015', 'Lenguajes y Automatas I', 6, 2, 3, 5),
(32, 'SCD-1021', 'Redes de Computadoras', 6, 2, 3, 5),
(33, 'SCA-1026', 'Taller de Sistemas Operativos', 6, 0, 4, 4),
(34, 'SCB-1001', 'Administracion de Base de Datos', 6, 1, 4, 5),
(35, 'SCD-1011', 'Ingenieria de Software', 6, 2, 3, 5),
(36, 'SCC-1014', 'Lenguajes de Interfaz', 6, 2, 2, 4),
(37, 'SCD-1016', 'Lenguajes y Automatas II', 7, 2, 3, 5),
(38, 'SCD-1004', 'Conmutacion y Enrutamiento en Redes', 7, 2, 3, 5),
(39, 'ACA-0909', 'Taller de Investigacion I', 7, 0, 4, 4),
(40, 'SCG-1009', 'Gestion de Proyectos de Software', 7, 3, 3, 6),
(41, 'SCC-1023', 'Sistemas Programables', 7, 2, 2, 4),
(42, 'SCC-1019', 'Programacion Logica y Funcional', 8, 2, 2, 4),
(43, 'SCA-1002', 'Administracion de Redes', 8, 0, 4, 4),
(44, 'ACA-0910', 'Taller de Investigacion II', 8, 0, 4, 4),
(45, 'AEB-1055', 'Programacion Web', 8, 1, 4, 5),
(46, 'SCC-1012', 'Inteligencia Artificial', 9, 2, 2, 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `materias_reticula`
--
ALTER TABLE `materias_reticula`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `materias_reticula`
--
ALTER TABLE `materias_reticula`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
