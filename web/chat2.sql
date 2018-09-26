-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-09-2018 a las 00:36:13
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `chat2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `idmensaje` int(11) NOT NULL,
  `mensaje` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`idmensaje`, `mensaje`) VALUES
(1, 'hola, que tal'),
(2, 'how are you?'),
(3, 'ADRA'),
(4, 'andragon'),
(5, 'jordansito'),
(6, 'morrison'),
(7, 'dmc'),
(8, 'dante'),
(9, 'vergil'),
(10, 'hola'),
(11, 'hi'),
(12, 'hola'),
(13, 'buenas tardes'),
(14, 'jordansito'),
(15, 'morrison'),
(16, 'andres'),
(17, 'camarena'),
(18, 'adra'),
(19, 'hello'),
(20, 'hola'),
(21, 'Camarena'),
(22, 'hola'),
(23, 'Hola'),
(24, 'que pedos'),
(25, 'Saul'),
(67, 'hola'),
(68, ''),
(69, 'hi'),
(70, 'HOLA'),
(71, ''),
(72, 'hi');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajesindividuales`
--

CREATE TABLE `mensajesindividuales` (
  `IDMensajesIndividuales` int(11) NOT NULL,
  `IDusuarioEmisor` int(11) NOT NULL,
  `IDUsuarioReceptor` int(11) NOT NULL,
  `Mensaje` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajesxsala`
--

CREATE TABLE `mensajesxsala` (
  `IDMensajesxSala` int(11) NOT NULL,
  `IDSala` int(11) NOT NULL,
  `IDUsuarioEmisor` int(11) NOT NULL,
  `Mensaje` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `Fecha` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `mensajesxsala`
--

INSERT INTO `mensajesxsala` (`IDMensajesxSala`, `IDSala`, `IDUsuarioEmisor`, `Mensaje`, `Fecha`) VALUES
(1, 1, 1, 'Hola, que tal?', '08/30/2018 2:26pm'),
(2, 1, 2, 'Bien, y tu que tal?', '08/30/2018 2:29pm'),
(3, 1, 3, 'Hola chicos', '08/30/2018 2:31pm'),
(4, 1, 1, 'hola mordekaiser, que tal te va?', '08/30/2018 2:32pm'),
(20, 1, 1, 'espero se encuentren bien', '30/08/2018 3:42pm'),
(21, 1, 1, 'hola', '30/08/2018 4:54pm'),
(22, 1, 1, 'jordansito', '30/08/2018 4:54pm'),
(23, 2, 2, 'hola muchachos', '31/08/2018 9:40am'),
(24, 2, 1, 'hola, que tal estas?', '31/08/2018 9:41am'),
(25, 1, 4, 'Hola', '31/08/2018 9:54am'),
(26, 1, 1, 'que pedos', '31/08/2018 9:54am'),
(27, 1, 1, 'rubia', '31/08/2018 9:55am'),
(28, 1, 1, 'que ondas?', '31/08/2018 9:59am'),
(29, 1, 4, 'Hola', '31/08/2018 10:09am'),
(30, 1, 1, 'QUE PEDALES', '31/08/2018 10:09am'),
(31, 1, 4, 'Simon', '31/08/2018 10:09am'),
(32, 1, 1, 'rubiesita', '31/08/2018 10:09am'),
(33, 2, 4, 'Call of Duty', '31/08/2018 10:11am'),
(34, 2, 1, 'minchof duty', '31/08/2018 10:11am'),
(35, 3, 4, 'Smash', '31/08/2018 10:11am'),
(36, 3, 1, 'mmm cabezazo!!', '31/08/2018 10:11am'),
(37, 3, 1, 'que ondas', '06/09/2018 4:13pm'),
(38, 1, 1, 'que ondas', '06/09/2018 4:27pm'),
(39, 3, 5, 'que ondas chavalos', '06/09/2018 5:07pm'),
(40, 1, 5, 'que ondas', '07/09/2018 9:21am'),
(41, 1, 5, 'hola', '07/09/2018 9:39am'),
(42, 1, 5, 'mordo es el mejor', '07/09/2018 9:43am'),
(43, 1, 6, 'que tal quien juega', '07/09/2018 10:17am'),
(44, 1, 1, 'yo juego men', '07/09/2018 10:18am'),
(45, 1, 1, '10$', '07/09/2018 10:18am'),
(46, 1, 6, 'dale', '07/09/2018 10:19am'),
(47, 1, 1, 'hola', '07/09/2018 2:22pm'),
(48, 1, 1, 'hola', '07/09/2018 4:24pm'),
(49, 1, 1, 'hi', '07/09/2018 4:27pm'),
(50, 1, 1, 'hola', '07/09/2018 4:27pm'),
(51, 1, 1, 'hola', '07/09/2018 4:39pm'),
(52, 1, 1, 'hola', '07/09/2018 4:52pm'),
(53, 1, 1, 'hi', '07/09/2018 4:53pm'),
(54, 1, 1, 'hi', '07/09/2018 4:56pm'),
(55, 1, 1, 'hello', '10/09/2018 1:57pm'),
(56, 1, 1, 'mordo', '10/09/2018 1:58pm'),
(57, 1, 1, 'hola', '10/09/2018 2:04pm'),
(58, 1, 1, 'guts', '10/09/2018 2:10pm'),
(59, 1, 1, 'kyrie', '10/09/2018 2:12pm'),
(60, 1, 1, 'nero', '10/09/2018 2:12pm'),
(61, 1, 1, 'vergil', '10/09/2018 2:15pm'),
(62, 1, 1, 'que tal?', '10/09/2018 3:00pm'),
(63, 1, 1, 'hola', '10/09/2018 3:04pm'),
(64, 1, 1, 'hi', '10/09/2018 3:05pm'),
(65, 1, 1, 'hola', '10/09/2018 3:07pm'),
(66, 1, 1, 'hola', '11/09/2018 9:27am');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sala`
--

CREATE TABLE `sala` (
  `IDSala` int(11) NOT NULL,
  `NombreSala` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sala`
--

INSERT INTO `sala` (`IDSala`, `NombreSala`) VALUES
(1, 'FIFA 18'),
(2, 'Call of Duty'),
(3, 'Smash Bros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudreto`
--

CREATE TABLE `solicitudreto` (
  `IDSolicitudReto` int(11) NOT NULL,
  `IDSala` int(11) NOT NULL,
  `IDUsuarioRetador` int(11) NOT NULL,
  `IDUsuarioRetado` int(11) NOT NULL,
  `EstatusSolicitud` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `ValorApuesta` int(11) NOT NULL,
  `EstatusRetador` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `EstatusRetado` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `solicitudreto`
--

INSERT INTO `solicitudreto` (`IDSolicitudReto`, `IDSala`, `IDUsuarioRetador`, `IDUsuarioRetado`, `EstatusSolicitud`, `ValorApuesta`, `EstatusRetador`, `EstatusRetado`) VALUES
(2, 1, 1, 2, 'Pendiente', 10, 'Pendiente', 'Pendiente'),
(3, 1, 1, 3, 'Pendiente', 10, 'Pendiente', 'Pendiente'),
(4, 1, 1, 4, 'Pendiente', 20, 'Pendiente', 'Pendiente'),
(5, 1, 1, 5, 'Pendiente', 10, 'Pendiente', 'Pendiente'),
(7, 1, 1, 6, 'Cancelado', 10, 'Pendiente', 'Pendiente'),
(8, 1, 2, 1, 'Rechazado', 10, 'Pendiente', 'Pendiente'),
(9, 1, 2, 3, 'Pendiente', 5, 'Pendiente', 'Pendiente'),
(10, 2, 1, 2, 'Pendiente', 10, 'Pendiente', 'Pendiente'),
(11, 1, 2, 6, 'Pendiente', 20, 'Pendiente', 'Pendiente'),
(12, 2, 2, 1, 'Pendiente', 10, 'Pendiente', 'Pendiente'),
(13, 1, 1, 6, 'Pendiente', 10, 'Pendiente', 'Pendiente'),
(14, 1, 2, 1, 'Pendiente', 20, 'Pendiente', 'Pendiente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `IDUsuario` int(11) NOT NULL,
  `NombreUsuario` varchar(100) NOT NULL,
  `ClaveUsuario` varchar(100) NOT NULL,
  `EmailUsuario` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`IDUsuario`, `NombreUsuario`, `ClaveUsuario`, `EmailUsuario`) VALUES
(1, 'andragon', 'horda10', 'andragon@hotmail.com'),
(2, 'adra', 'horda10', 'adra@hotmail.com'),
(3, 'mordo', 'horda10', 'mordo@gmail.com'),
(4, 'Saul', 'Gamer2018', 'saullainez@hotmail.es'),
(5, 'andrea', 'anagui', 'andrea@gmail.com'),
(6, 'ruben', '123', 'rantunez@somnia-ware.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariosxsala`
--

CREATE TABLE `usuariosxsala` (
  `IDUsuariosxSala` int(11) NOT NULL,
  `IDSala` int(11) NOT NULL,
  `IDUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuariosxsala`
--

INSERT INTO `usuariosxsala` (`IDUsuariosxSala`, `IDSala`, `IDUsuario`) VALUES
(5, 1, 1),
(6, 1, 2),
(7, 1, 3),
(8, 2, 1),
(9, 2, 2),
(10, 3, 1),
(11, 1, 4),
(12, 2, 4),
(13, 3, 4),
(14, 3, 5),
(15, 2, 5),
(16, 1, 5),
(17, 1, 6),
(18, 3, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`idmensaje`);

--
-- Indices de la tabla `mensajesindividuales`
--
ALTER TABLE `mensajesindividuales`
  ADD PRIMARY KEY (`IDMensajesIndividuales`),
  ADD KEY `IDusuarioEmisor` (`IDusuarioEmisor`),
  ADD KEY `IDUsuarioReceptor` (`IDUsuarioReceptor`);

--
-- Indices de la tabla `mensajesxsala`
--
ALTER TABLE `mensajesxsala`
  ADD PRIMARY KEY (`IDMensajesxSala`),
  ADD KEY `IDSala` (`IDSala`),
  ADD KEY `IDUsuarioEmisor` (`IDUsuarioEmisor`);

--
-- Indices de la tabla `sala`
--
ALTER TABLE `sala`
  ADD PRIMARY KEY (`IDSala`);

--
-- Indices de la tabla `solicitudreto`
--
ALTER TABLE `solicitudreto`
  ADD PRIMARY KEY (`IDSolicitudReto`),
  ADD KEY `IDSala` (`IDSala`),
  ADD KEY `IDUsuarioRetador` (`IDUsuarioRetador`),
  ADD KEY `IDUsuarioRetado` (`IDUsuarioRetado`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`IDUsuario`);

--
-- Indices de la tabla `usuariosxsala`
--
ALTER TABLE `usuariosxsala`
  ADD PRIMARY KEY (`IDUsuariosxSala`),
  ADD KEY `IDSala` (`IDSala`),
  ADD KEY `IDUsuario` (`IDUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `idmensaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT de la tabla `mensajesindividuales`
--
ALTER TABLE `mensajesindividuales`
  MODIFY `IDMensajesIndividuales` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mensajesxsala`
--
ALTER TABLE `mensajesxsala`
  MODIFY `IDMensajesxSala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT de la tabla `sala`
--
ALTER TABLE `sala`
  MODIFY `IDSala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `solicitudreto`
--
ALTER TABLE `solicitudreto`
  MODIFY `IDSolicitudReto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `IDUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuariosxsala`
--
ALTER TABLE `usuariosxsala`
  MODIFY `IDUsuariosxSala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `mensajesindividuales`
--
ALTER TABLE `mensajesindividuales`
  ADD CONSTRAINT `mensajesindividuales_ibfk_1` FOREIGN KEY (`IDusuarioEmisor`) REFERENCES `usuario` (`IDUsuario`),
  ADD CONSTRAINT `mensajesindividuales_ibfk_2` FOREIGN KEY (`IDUsuarioReceptor`) REFERENCES `usuario` (`IDUsuario`);

--
-- Filtros para la tabla `mensajesxsala`
--
ALTER TABLE `mensajesxsala`
  ADD CONSTRAINT `mensajesxsala_ibfk_1` FOREIGN KEY (`IDUsuarioEmisor`) REFERENCES `usuario` (`IDUsuario`),
  ADD CONSTRAINT `mensajesxsala_ibfk_2` FOREIGN KEY (`IDSala`) REFERENCES `sala` (`IDSala`);

--
-- Filtros para la tabla `solicitudreto`
--
ALTER TABLE `solicitudreto`
  ADD CONSTRAINT `solicitudreto_ibfk_1` FOREIGN KEY (`IDSala`) REFERENCES `sala` (`IDSala`),
  ADD CONSTRAINT `solicitudreto_ibfk_2` FOREIGN KEY (`IDUsuarioRetador`) REFERENCES `usuario` (`IDUsuario`),
  ADD CONSTRAINT `solicitudreto_ibfk_3` FOREIGN KEY (`IDUsuarioRetado`) REFERENCES `usuario` (`IDUsuario`);

--
-- Filtros para la tabla `usuariosxsala`
--
ALTER TABLE `usuariosxsala`
  ADD CONSTRAINT `usuariosxsala_ibfk_1` FOREIGN KEY (`IDSala`) REFERENCES `sala` (`IDSala`),
  ADD CONSTRAINT `usuariosxsala_ibfk_2` FOREIGN KEY (`IDUsuario`) REFERENCES `usuario` (`IDUsuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
