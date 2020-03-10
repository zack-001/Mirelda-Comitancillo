-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 12-02-2020 a las 06:11:12
-- Versión del servidor: 5.7.23
-- Versión de PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dental`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abono`
--

DROP TABLE IF EXISTS `abono`;
CREATE TABLE IF NOT EXISTS `abono` (
  `idAbono` int(11) NOT NULL AUTO_INCREMENT,
  `cantidad` double NOT NULL,
  `idEdoCuenta` int(11) NOT NULL,
  `idcliente` int(11) NOT NULL,
  `fecha` varchar(20) NOT NULL,
  `razon` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idAbono`),
  KEY `idEdoCuenta` (`idEdoCuenta`),
  KEY `idcliente` (`idcliente`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `abono`
--

INSERT INTO `abono` (`idAbono`, `cantidad`, `idEdoCuenta`, `idcliente`, `fecha`, `razon`) VALUES
(18, 130, 34, 19, '07-02-2020', NULL),
(19, 200, 35, 14, '07-02-2020', NULL),
(20, 150, 36, 13, '07-02-2020', NULL),
(21, 77, 13, 12, '11-02-2020', NULL),
(22, 55, 13, 12, '11-02-2020', NULL),
(23, 11, 13, 12, '11-02-2020', NULL),
(24, 77, 13, 12, '11-02-2020', 'CITA_13'),
(25, 30000, 13, 12, '11-02-2020', '19'),
(26, 200, 13, 12, '11-02-2020', '19'),
(27, 155, 13, 12, '11-02-2020', 'CITA_12'),
(28, 45, 13, 12, '11-02-2020', 'CITA_12'),
(29, 60, 13, 12, '11-02-2020', '18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

DROP TABLE IF EXISTS `cita`;
CREATE TABLE IF NOT EXISTS `cita` (
  `idcita` int(11) NOT NULL AUTO_INCREMENT,
  `idCliente` int(11) NOT NULL,
  `fecha` varchar(45) DEFAULT NULL,
  `prox_cita` varchar(45) DEFAULT NULL,
  `total_pagar` double NOT NULL,
  `observaciones` blob NOT NULL,
  `estado` varchar(20) NOT NULL,
  PRIMARY KEY (`idcita`),
  KEY `idCliente` (`idCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cita`
--

INSERT INTO `cita` (`idcita`, `idCliente`, `fecha`, `prox_cita`, `total_pagar`, `observaciones`, `estado`) VALUES
(12, 12, '2020-01-16', '', 200, 0x4e494e47554e41, ''),
(13, 12, '2020-01-16', '2020-02-12', 200, 0x4c494d5049455a41, ''),
(14, 12, '2020-01-16', '2020-01-24', 200, 0x67746e6666686a6e, ''),
(15, 12, '2020-01-16', '2020-01-21', 300, 0x6e6868756e75686e, ''),
(16, 13, '2020-01-20', '', 200, 0x5245414c49434520554e41204c494d5049455a4120424f43414c, ''),
(17, 13, '2020-01-22', '', 200, 0x2d2d2d, ''),
(18, 12, '2020-01-21', '', 200, 0x6672766564667664, ''),
(19, 14, '2020-01-21', '', 0, 0x6b6969696b696a6875757568, ''),
(20, 15, '2020-01-21', '', 0, 0x414c2050414349454e5445205345204c45205245414c495a41524120554e41204c494d5049455a4120424f43414c20594120515545204355454e544120434f4e20554e4120494e4645434349c3934e20454e204c415320454e43494153, ''),
(21, 13, '2020-01-21', '', 0, 0x414c2050414349454e5445204d4152494f205345204c452056412041205245414c495a415220554e41204c494d5049455a4120424f43414c, ''),
(22, 17, '2020-01-21', '', 0, 0x4c494d5049455a4120424f43414c, ''),
(23, 17, '2020-01-21', '2020-02-12', 300, 0x5345204c45205245414c495a4f20554e4120524144494f47524146c38d41205041524120494e49434941522054524154414d49454e544f, ''),
(24, 14, '2020-02-03', '2020-02-11', 200, 0x6e756e67756e61, 'ACTIVO'),
(25, 13, '2020-02-09', '', 200, 0x6e696e67756e61, 'ACTIVO'),
(26, 12, '2020-02-03', '', 200, 0x6e696e67756e61, 'ACTIVO'),
(27, 12, '2020-02-03', '', 100, 0x6e696e67756e6f, 'PENDIENTE'),
(28, 12, '2020-02-11', '', 200, 0x6c696d7069657a6120627563616c, 'ACTIVO'),
(29, 14, '2020-02-05', '', 200, 0x6c696d7069657a6120627563616c, 'TERMINADO'),
(30, 14, '2020-02-06', '', 100, 0x6c696d7069657a61, 'TERMINADO'),
(31, 17, '2020-02-06', '', 150, 0x7265766973696f6e, 'PENDIENTE'),
(32, 18, '2020-02-06', '', 77, 0x7265766973696f6e, 'PENDIENTE'),
(35, 19, '2020-02-06', '', 156, 0x4e494e47554e41, 'PENDIENTE'),
(36, 19, '2020-02-07', '', 130, 0x6e696e67756e61, 'ACTIVO'),
(37, 14, '2020-02-07', '', 200, 0x4e494e47554e50, 'PENDIENTE'),
(38, 13, '2020-02-07', '', 150, 0x6e696e67756e61, 'FINALIZADO'),
(39, 13, '2020-02-09', '', 200, 0x6e696e67756e61, 'PENDIENTE'),
(40, 15, '2020-02-09', '', 200, 0x4e494e47554e41, 'PENDIENTE'),
(41, 15, '2020-02-09', '', 200, 0x4e494e47554e41, 'PENDIENTE'),
(42, 20, '2020-02-09', '', 150, 0x4e494e47554e4f, 'PENDIENTE'),
(43, 20, '2020-02-09', '', 150, 0x4e494e47554e4f, 'PENDIENTE'),
(44, 20, '2020-02-13', '', 8, 0x6e696e67756e61, 'PENDIENTE'),
(45, 20, '2020-02-13', '', 8, 0x6e696e67756e61, 'PENDIENTE'),
(46, 18, '2020-02-09', '', 150, 0x6e696e67756e61, 'PENDIENTE'),
(47, 18, '2020-02-09', '', 150, 0x6e696e67756e61, 'PENDIENTE'),
(48, 12, '2020-02-13', '', 150, 0x4e494e47554e41, 'PENDIENTE'),
(51, 21, '2020-02-09', '', 123, 0x4e494e47554e41, 'ACTIVO'),
(52, 21, '2020-02-10', '', 300, 0x4e494e47554e41, 'PENDIENTE'),
(53, 21, '2020-02-10', '', 133, 0x6e696e67756e61, 'PENDIENTE'),
(54, 21, '2020-02-10', '', 133, 0x4e494e47554e41, 'PENDIENTE'),
(55, 21, '2020-02-10', '', 120, 0x4e494e47554e4f, 'PENDIENTE'),
(56, 21, '2020-02-10', '', 120, 0x4e494e47554e4f, 'PENDIENTE'),
(57, 21, '2020-02-10', '', 134, 0x4e494e47, 'PENDIENTE'),
(58, 21, '2020-02-10', '', 134, 0x4e494e47, 'PENDIENTE'),
(59, 21, '2020-02-10', '', 200, 0x4e494e, 'ACTIVO'),
(60, 12, '2020-02-12', '', 300, 0x4e494e47554e41, 'PENDIENTE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `idCliente` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) NOT NULL,
  `nombreTutor` varchar(250) NOT NULL,
  `fecha_ingreso` varchar(25) DEFAULT NULL,
  `sexo` varchar(45) NOT NULL,
  `direccion` varchar(300) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `alergias` text NOT NULL,
  `tipoSangre` varchar(100) NOT NULL,
  `telefonoTutor` varchar(10) NOT NULL,
  `parentezco` varchar(100) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `edad` date DEFAULT NULL,
  PRIMARY KEY (`idCliente`),
  KEY `idUsuario` (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idCliente`, `nombre`, `nombreTutor`, `fecha_ingreso`, `sexo`, `direccion`, `telefono`, `alergias`, `tipoSangre`, `telefonoTutor`, `parentezco`, `idUsuario`, `edad`) VALUES
(12, 'KARLA STEFANY CABRERA', 'ABRIL MONTES DE OCA OLIVERA', '2020-01-16', 'Femenino', 'AV.CENTENARIO #32', '9711570936', 'NAPROXENO', 'O positivo', '9716547687', 'MADRE', 13, NULL),
(13, 'ARIS DANILO LOPEZ', 'ISIDRO LOPEZ RUIZ', '2020-01-20', 'Masculino', 'AV. LA PAZ UNION HIDALGO', '9712345467', 'NAPROXENO', 'O positivo', '9712436578', 'PADRE', 14, NULL),
(14, 'PEPE PINEDA', 'OFELIA MTZ', '2020-01-21', 'Masculino', 'FRACC CRISTOBAL COLON', '9711234567', 'NINGUNA', 'O positivo', '9765432354', 'MADRE', 15, '1980-01-23'),
(15, 'CARLO MATINEZ', 'JOSE MORALEZ', '2020-01-21', 'Masculino', 'AV.LA PAZ JUCHITAN', '9714567645', 'NAPROXENO', 'O positivo', '9716547687', 'PADRE', 16, '2004-12-15'),
(17, 'MARIO MORALES RAMIREZ', 'MARIA JOSE RAMIREZ', '2020-01-21', 'Masculino', 'AV.LA PAZ JUCHITAN', '0', 'NINGUNA', 'A positivo', '971154679', 'MADRE', 18, '2008-01-08'),
(18, 'ENRIQUE LUIS MORALES', 'JOSEFA LUIS', '2020-01-21', 'Masculino', 'AV.PROGRESO', '0', 'NAPROXENO', 'B positivo', '9716547687', 'MADRE', 19, '2006-01-03'),
(19, 'PITA PEREZ', 'Karla Stefany Zapata Cabrera', '2020-02-06', 'Femenino', 'Prolongacion Allende, Colonia Lazaro Cardenas', '4531503830', 'NINGUNA', 'B negativo', '0000000000', 'MADRE', 20, '1998-07-08'),
(20, 'BENITA J.', 'Karla Stefany Zapata Cabrera', '2020-02-09', 'Femenino', 'Juchitan, Juchitan', '4531500000', '70000', 'B negativo', '0000000000', 'MADRE', 21, '2020-02-14'),
(21, 'Diana Cruz', 'Karla Stefany Zapata Cabrera', '2020-02-09', 'Femenino', 'Prolongacion Allende, Colonia Lazaro Cardenas', '4531509999', '70000', 'B positivo', '0000000000', 'HERMANA', 22, '1996-07-18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `edocuenta`
--

DROP TABLE IF EXISTS `edocuenta`;
CREATE TABLE IF NOT EXISTS `edocuenta` (
  `idEdoCuenta` int(11) NOT NULL AUTO_INCREMENT,
  `total_adecuado` double NOT NULL,
  `cliente_idCliente` int(11) NOT NULL,
  `tratamiento` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idEdoCuenta`),
  KEY `cliente_idCliente` (`cliente_idCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `edocuenta`
--

INSERT INTO `edocuenta` (`idEdoCuenta`, `total_adecuado`, `cliente_idCliente`, `tratamiento`) VALUES
(13, 7175, 12, 'LIMPIEZA'),
(21, 200, 14, 'LIMPIEZA'),
(22, 500, 14, 'LIMPIEZA'),
(23, 100, 15, 'LIMPIEZA'),
(24, 0, 17, 'LIMPIEZA'),
(25, 5150, 17, 'ORTODONCIA'),
(26, 400, 14, 'LIMPIEZA'),
(27, 350, 14, 'LIMPIEZA'),
(29, 400, 14, 'LIMPIEZA'),
(30, 40200, 14, 'LIMPIEZA'),
(33, 156, 19, 'CITA'),
(34, 0, 19, 'CITA'),
(35, 0, 14, 'CITA'),
(36, 0, 13, 'CITA'),
(38, 657, 21, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medico`
--

DROP TABLE IF EXISTS `medico`;
CREATE TABLE IF NOT EXISTS `medico` (
  `idmedico` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `especialidad` varchar(250) NOT NULL,
  PRIMARY KEY (`idmedico`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `medico`
--

INSERT INTO `medico` (`idmedico`, `nombre`, `especialidad`) VALUES
(1, 'MIRELDA OLIVERA', 'CIRUJANO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nota`
--

DROP TABLE IF EXISTS `nota`;
CREATE TABLE IF NOT EXISTS `nota` (
  `idnota` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date DEFAULT NULL,
  `descripcion` text,
  `idCliente` int(11) NOT NULL,
  PRIMARY KEY (`idnota`),
  KEY `idCliente` (`idCliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipotratamiento`
--

DROP TABLE IF EXISTS `tipotratamiento`;
CREATE TABLE IF NOT EXISTS `tipotratamiento` (
  `idTipoTratamiento` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(250) NOT NULL,
  `costo` double DEFAULT NULL,
  `idmedico` int(11) NOT NULL,
  PRIMARY KEY (`idTipoTratamiento`),
  KEY `idmedico` (`idmedico`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipotratamiento`
--

INSERT INTO `tipotratamiento` (`idTipoTratamiento`, `descripcion`, `costo`, `idmedico`) VALUES
(4, 'LIMPIEZA', 200, 1),
(5, 'ORTODONCIA', 5000, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nick` varchar(150) NOT NULL,
  `pass` varchar(15) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nick`, `pass`, `nombre`, `tipo`) VALUES
(1, 'mirelda12@hotmail.com', '12345', 'Mirelda', 'Administrador'),
(13, 'KARLA', '1234', 'KARLA STEFANY CABRERA', 'Usuario'),
(14, 'ARIS', '123', 'ARIS DANILO LOPEZ', 'Usuario'),
(15, 'pepe10', '1234', 'PEPE PINEDA', 'Usuario'),
(16, 'CARLO', '1234', 'CARLO MATINEZ', 'Usuario'),
(18, 'MARIO1', '123', 'MARIO MORALES RAMIREZ', 'Usuario'),
(19, 'ENRIQUE', '123', 'ENRIQUE LUIS MORALES', 'Usuario'),
(20, 'pita10', '1234', 'PITA PEREZ', 'Usuario'),
(21, 'benita', '12345', 'BENITA J.', 'Usuario'),
(22, 'diana', '12345', 'Diana Cruz', 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valoracion`
--

DROP TABLE IF EXISTS `valoracion`;
CREATE TABLE IF NOT EXISTS `valoracion` (
  `idValoracion` int(11) NOT NULL AUTO_INCREMENT,
  `idTipoTratamieto` int(11) NOT NULL,
  `organosDentarios` text NOT NULL,
  `cantidad` int(11) NOT NULL,
  `total` double NOT NULL,
  `idcita` int(11) NOT NULL,
  `fecha` varchar(20) NOT NULL,
  PRIMARY KEY (`idValoracion`),
  KEY `idcita` (`idcita`),
  KEY `idTipoTratamieto` (`idTipoTratamieto`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `valoracion`
--

INSERT INTO `valoracion` (`idValoracion`, `idTipoTratamieto`, `organosDentarios`, `cantidad`, `total`, `idcita`, `fecha`) VALUES
(18, 4, '', 1, 60, 13, '16-01-2020'),
(19, 4, '', 200, 32000, 13, '16-01-2020'),
(20, 4, '', 3, 600, 14, '16-01-2020'),
(21, 4, '', 3, 420, 14, '16-01-2020'),
(22, 4, '', 5, 500, 12, '16-01-2020'),
(23, 4, '', 1, 150, 15, '16-01-2020'),
(24, 4, '', 5, 1000, 14, '16-01-2020'),
(25, 4, '', 2, 300, 15, '16-01-2020'),
(26, 4, '', 2, 300, 18, '21-01-2020'),
(27, 4, 'TODOS', 1, 200, 19, '21-01-2020'),
(28, 4, 'TODOS', 2, 300, 19, '21-01-2020'),
(29, 4, 'TODOS', 1, 100, 20, '21-01-2020'),
(30, 4, 'TODOS', 1, 150, 22, '21-01-2020'),
(31, 5, 'TODOS', 1, 5000, 23, '21-01-2020'),
(32, 4, '1', 1, 200, 24, '02-02-2020'),
(33, 4, '1', 1, 150, 24, '03-02-2020'),
(34, 4, '1', 2, 300, 26, '03-02-2020'),
(35, 4, 'TODOS', 1, 200, 29, '05-02-2020'),
(36, 4, 'TODOS', 200, 40000, 29, '05-02-2020'),
(41, 4, 'TODOS', 1, 200, 59, '10-02-2020'),
(42, 4, 'TODOS', 1, 175, 28, '11-02-2020');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `abono`
--
ALTER TABLE `abono`
  ADD CONSTRAINT `abono_ibfk_1` FOREIGN KEY (`idEdoCuenta`) REFERENCES `edocuenta` (`idEdoCuenta`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `abono_ibfk_2` FOREIGN KEY (`idcliente`) REFERENCES `cliente` (`idCliente`);

--
-- Filtros para la tabla `cita`
--
ALTER TABLE `cita`
  ADD CONSTRAINT `idCliente` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`idCliente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `idUsuario` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `edocuenta`
--
ALTER TABLE `edocuenta`
  ADD CONSTRAINT `edocuenta_ibfk_1` FOREIGN KEY (`cliente_idCliente`) REFERENCES `cliente` (`idCliente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `nota`
--
ALTER TABLE `nota`
  ADD CONSTRAINT `nota_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`idCliente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tipotratamiento`
--
ALTER TABLE `tipotratamiento`
  ADD CONSTRAINT `tipotratamiento_ibfk_1` FOREIGN KEY (`idmedico`) REFERENCES `medico` (`idmedico`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `valoracion`
--
ALTER TABLE `valoracion`
  ADD CONSTRAINT `valoracion_ibfk_1` FOREIGN KEY (`idcita`) REFERENCES `cita` (`idcita`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `valoracion_ibfk_2` FOREIGN KEY (`idTipoTratamieto`) REFERENCES `tipotratamiento` (`idTipoTratamiento`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
