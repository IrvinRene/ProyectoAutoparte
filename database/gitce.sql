-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 25, 2016 at 05:39 PM
-- Server version: 5.5.49-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gitce`
--

-- --------------------------------------------------------

--
-- Table structure for table `autores`
--

CREATE TABLE IF NOT EXISTS `autores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) NOT NULL,
  `apellido` varchar(40) NOT NULL,
  `created_at` varchar(45) NOT NULL,
  `updated_at` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(50) NOT NULL,
  `created_at` varchar(45) NOT NULL,
  `updated_at` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `estados`
--

CREATE TABLE IF NOT EXISTS `estados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `estados` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `noticias`
--

CREATE TABLE IF NOT EXISTS `noticias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `fecha` varchar(10) NOT NULL,
  `noticia` text NOT NULL,
  `iduser` int(11) NOT NULL,
  `img` varchar(100) DEFAULT NULL,
  `created_at` varchar(45) NOT NULL,
  `updated_at` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `fecha`, `noticia`, `iduser`, `img`, `created_at`, `updated_at`) VALUES
(1, 'prueba1', '2016-06-24', 'prueba', 1, './assets/doc/323.pdf', '2016-06-24 15:08:41', '2016-06-24 15:08:41'),
(2, 'Celular', '2016-06-24', 'A', 1, './assets/doc/frases-motivacionales-dificultades-2.jpg', '2016-06-24 15:54:58', '2016-06-24 15:54:58');

-- --------------------------------------------------------

--
-- Table structure for table `paises`
--

CREATE TABLE IF NOT EXISTS `paises` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pais` varchar(45) DEFAULT NULL,
  `isocodigo` varchar(5) DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL,
  `created_at` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=235 ;

--
-- Dumping data for table `paises`
--

INSERT INTO `paises` (`id`, `pais`, `isocodigo`, `updated_at`, `created_at`) VALUES
(1, 'Panamá', 'PAN', NULL, NULL),
(2, 'Afganistán', 'AFG', NULL, NULL),
(3, 'Antillas Neerlandesas', 'AHO', NULL, NULL),
(4, 'Albania', 'ALB', NULL, NULL),
(5, 'Argelia', 'ALG', NULL, NULL),
(6, 'Andorra', 'AND', NULL, NULL),
(7, 'Angola ', 'ANG', NULL, NULL),
(8, 'Antigua y Barbuda', 'ANT', NULL, NULL),
(9, 'Australasia', 'ANZ', NULL, NULL),
(10, 'Argentina', 'ARG', NULL, NULL),
(11, 'Armenia', 'ARM', NULL, NULL),
(12, 'Aruba', 'ARU', NULL, NULL),
(13, 'Samoa Americana', 'ASA', NULL, NULL),
(14, 'Australia', 'AUS', NULL, NULL),
(15, 'Austria', 'AUT', NULL, NULL),
(16, 'Azerbaiyán ', 'AZE', NULL, NULL),
(17, 'Las Bahamas Bahamas', 'BAH', NULL, NULL),
(18, 'Bangladés', 'BAN', NULL, NULL),
(19, 'Barbados', 'BAR', NULL, NULL),
(20, 'Burundi', 'BDI', NULL, NULL),
(21, 'Bélgica', 'BEL', NULL, NULL),
(22, 'Benín ', 'BEN', NULL, NULL),
(23, 'Bermuda', 'BER', NULL, NULL),
(24, 'Bután', 'BHU', NULL, NULL),
(25, 'Bosnia y Herzegovina', 'BIH', NULL, NULL),
(26, 'Birmania', 'MYA', NULL, NULL),
(27, 'Belice', 'BIZ', NULL, NULL),
(28, 'Bielorrusia', 'BLR', NULL, NULL),
(29, 'Bohemia', 'BOH', NULL, NULL),
(30, 'Bolivia', 'BOL', NULL, NULL),
(31, 'Borneo', 'BOR', NULL, NULL),
(32, 'Botsuana', 'BOT', NULL, NULL),
(33, 'Brasil', 'BRA', NULL, NULL),
(34, 'Baréin', 'BRN', NULL, NULL),
(35, 'Brunéi', 'BRU', NULL, NULL),
(36, 'Bulgaria', 'BUL', NULL, NULL),
(37, 'Burkina Faso', 'BUR', NULL, NULL),
(38, 'Indias Occidentales', 'BWI', NULL, NULL),
(39, 'República Centroafricana', 'CAF', NULL, NULL),
(40, 'Camboya', 'CAM', NULL, NULL),
(41, 'Canadá', 'CAN', NULL, NULL),
(42, 'Islas Caimán', 'CAY', NULL, NULL),
(43, 'República del Congo', 'CGO', NULL, NULL),
(44, 'Ceilán', 'CEY', NULL, NULL),
(45, 'Chad', 'CHA', NULL, NULL),
(46, 'Chile', 'CHI', NULL, NULL),
(47, 'República Popular China ', 'CHN', NULL, NULL),
(48, 'Costa de Marfil', 'CIV', NULL, NULL),
(49, 'Camerún', 'CMR', NULL, NULL),
(50, 'Congo-Brazzaville', 'COB', NULL, NULL),
(51, 'República Democrática del Congo ', 'COD', NULL, NULL),
(52, 'Islas Cook', 'COK', NULL, NULL),
(53, 'Colombia', 'COL', NULL, NULL),
(54, 'Comoras', 'COM', NULL, NULL),
(55, 'Congo-Kinshasa', 'CON', NULL, NULL),
(56, 'Cabo Verde', 'CPV', NULL, NULL),
(57, 'Costa Rica', 'CRC', NULL, NULL),
(58, 'Croacia', 'CRO', NULL, NULL),
(59, 'Cuba', 'CUB', NULL, NULL),
(60, 'Chipre', 'CYP', NULL, NULL),
(61, 'República Checa', 'CZE', NULL, NULL),
(62, 'Dahomey', 'DAH', NULL, NULL),
(63, 'Dinamarca', 'DEN', NULL, NULL),
(64, 'Yibuti', 'DJI', NULL, NULL),
(65, 'Dominica', 'DMA', NULL, NULL),
(66, 'República Dominicana', 'DOM', NULL, NULL),
(67, 'Ecuador', 'ECU', NULL, NULL),
(68, 'Egipto', 'EGY', NULL, NULL),
(69, 'Eritrea', 'ERI', NULL, NULL),
(70, 'El Salvador', 'ESA', NULL, NULL),
(71, 'España', 'ESP', NULL, NULL),
(72, 'Estonia', 'EST', NULL, NULL),
(73, 'Etiopía', 'ETH', NULL, NULL),
(74, 'Equipo Alemán Unificado', 'EUA', NULL, NULL),
(75, 'Equipo Unificado', 'EUN', NULL, NULL),
(76, 'Fiyi', 'FIJ', NULL, NULL),
(77, 'Finlandia', 'FIN', NULL, NULL),
(78, 'Francia', 'FRA', NULL, NULL),
(79, 'Germany R.F.A.', 'FRG', NULL, NULL),
(80, 'Estados Federados de Micronesia ', 'FSM', NULL, NULL),
(81, 'Gabón', 'GAB', NULL, NULL),
(82, 'Gambia', 'GAM', NULL, NULL),
(83, 'Reino Unido', 'GBR', NULL, NULL),
(84, 'Guinea-Bisáu', 'GBS', NULL, NULL),
(85, 'Georgia', 'GEO', NULL, NULL),
(86, 'Guinea Ecuatorial', 'GEQ', NULL, NULL),
(87, 'Alemania', 'GER', NULL, NULL),
(88, 'Ghana', 'GHA', NULL, NULL),
(89, 'Grecia', 'GRE', NULL, NULL),
(90, 'Granada', 'GRN', NULL, NULL),
(91, 'Guatemala', 'GUA', NULL, NULL),
(92, 'Guinea', 'GUI', NULL, NULL),
(93, 'Guam', 'GUM', NULL, NULL),
(94, 'Guyana', 'GUY', NULL, NULL),
(95, 'Haití', 'HAI', NULL, NULL),
(96, 'Honduras Británica', 'HBR', NULL, NULL),
(97, 'Hong Kong Hong Kong', 'HKG', NULL, NULL),
(98, 'Holanda  ', 'HOL', NULL, NULL),
(99, 'Honduras', 'HON', NULL, NULL),
(100, 'Hungría', 'HUN', NULL, NULL),
(101, 'Indias Orientales Neerlandesas', 'IHO', NULL, NULL),
(102, 'Indonesia Indonesia', 'INA', NULL, NULL),
(103, 'India', 'IND', NULL, NULL),
(104, 'Irán', 'IRI', NULL, NULL),
(105, 'Irlanda', 'IRL', NULL, NULL),
(106, 'Irak', 'IRQ', NULL, NULL),
(107, 'Islandia', 'ISL', NULL, NULL),
(108, 'Israel', 'ISR', NULL, NULL),
(109, 'Islas Vírgenes de los Estados Unidos', 'ISV', NULL, NULL),
(110, 'Italia', 'ITA', NULL, NULL),
(111, 'Islas Vírgenes Británicas', 'IVB', NULL, NULL),
(112, 'Jamaica', 'JAM', NULL, NULL),
(113, 'Jordania', 'JOR', NULL, NULL),
(114, 'Japón', 'JPN', NULL, NULL),
(115, 'Kazajistán', 'KAZ', NULL, NULL),
(116, 'Kenia', 'KEN', NULL, NULL),
(117, 'Kirguistán', 'KGZ', NULL, NULL),
(118, 'Kiribati', 'KIR', NULL, NULL),
(119, 'Korea del Sur', 'KOR', NULL, NULL),
(120, 'Arabia Saudita', 'KSA', NULL, NULL),
(121, 'Kuwait', 'KUW', NULL, NULL),
(122, 'Laos', 'LAO', NULL, NULL),
(123, 'Letonia', 'LAT', NULL, NULL),
(124, 'Libia', 'LBA', NULL, NULL),
(125, 'Liberia', 'LBR', NULL, NULL),
(126, 'Santa Lucía', 'LCA', NULL, NULL),
(127, 'Lesoto', 'LES', NULL, NULL),
(128, 'Líbano', 'LIB', NULL, NULL),
(129, 'Liechtenstein', 'LIE', NULL, NULL),
(130, 'Lituania', 'LTU', NULL, NULL),
(131, 'Luxemburgo', 'LUX', NULL, NULL),
(132, 'Madagascar', 'MAD', NULL, NULL),
(133, 'Marruecos', 'MAR', NULL, NULL),
(134, 'Malasia', 'MAS', NULL, NULL),
(135, 'Malaui', 'MAW', NULL, NULL),
(136, 'Moldavia', 'MDA', NULL, NULL),
(137, 'Maldivas', 'MDV', NULL, NULL),
(138, 'México', 'MEX', NULL, NULL),
(139, 'Mongolia', 'MGL', NULL, NULL),
(140, 'Islas Marshall', 'MHL', NULL, NULL),
(141, 'Macedonia', 'MKD', NULL, NULL),
(142, 'Malí', 'MLI', NULL, NULL),
(143, 'Malta', 'MLT', NULL, NULL),
(144, 'Montenegro', 'MNE', NULL, NULL),
(145, 'Mónaco', 'MON', NULL, NULL),
(146, 'Mozambique', 'MOZ', NULL, NULL),
(147, 'Mauricio', 'MRI', NULL, NULL),
(148, 'Mauritania', 'MTN', NULL, NULL),
(150, 'Namibia', 'NAM', NULL, NULL),
(151, 'Nicaragua', 'NCA', NULL, NULL),
(152, 'Países Bajos Holanda', 'NED', NULL, NULL),
(153, 'Nepal', 'NEP', NULL, NULL),
(154, 'Nigeria', 'NGR', NULL, NULL),
(155, 'Níger', 'NIG', NULL, NULL),
(156, 'Noruega', 'NOR', NULL, NULL),
(157, 'Nauru', 'NRU', NULL, NULL),
(158, 'Nueva Zelanda ', 'NZL', NULL, NULL),
(159, 'Omán', 'OMA', NULL, NULL),
(160, 'Pakistán', 'PAK', NULL, NULL),
(161, 'Paraguay', 'PAR', NULL, NULL),
(162, 'Perú', 'PER', NULL, NULL),
(163, 'Filipinas', 'PHI', NULL, NULL),
(164, 'Palestina', 'PLE', NULL, NULL),
(165, 'Palaos', 'PLW', NULL, NULL),
(166, 'Papúa Nueva Guinea', 'PNG', NULL, NULL),
(167, 'Polonia', 'POL', NULL, NULL),
(168, 'Portugal', 'POR', NULL, NULL),
(169, 'Corea del Norte', 'PRK', NULL, NULL),
(170, 'Puerto Rico', 'PUR', NULL, NULL),
(171, 'Catar', 'QAT', NULL, NULL),
(172, 'Rodesia del Norte', 'RHN', NULL, NULL),
(173, 'Rodesia', 'RHO', NULL, NULL),
(174, 'Rodesia del Sur', 'RHS', NULL, NULL),
(175, 'Republic of China', 'ROC', NULL, NULL),
(176, 'Rumanía', 'ROU', NULL, NULL),
(177, 'Sudáfrica', 'RSA', NULL, NULL),
(178, 'Imperio Ruso', 'RU1', NULL, NULL),
(179, 'Rusia', 'RUS', NULL, NULL),
(180, 'Ruanda', 'RWA', NULL, NULL),
(181, 'Sarre', 'SAA', NULL, NULL),
(183, 'Samoa', 'SAM', NULL, NULL),
(184, 'Serbia y Montenegro', 'SCG', NULL, NULL),
(185, 'Senegal', 'SEN', NULL, NULL),
(186, 'Seychelles', 'SEY', NULL, NULL),
(187, 'Singapur', 'SIN', NULL, NULL),
(188, 'San Cristóbal y Nieves', 'SKN', NULL, NULL),
(189, 'Sierra Leona ', 'SLE', NULL, NULL),
(190, 'Eslovenia', 'SLO', NULL, NULL),
(191, 'San Marino', 'SMR', NULL, NULL),
(192, 'Islas Salomón', 'SOL', NULL, NULL),
(193, 'Somalia', 'SOM', NULL, NULL),
(194, 'Serbia', 'SRB', NULL, NULL),
(195, 'Sri Lanka ', 'SRI', NULL, NULL),
(196, 'Santo Tomé y Príncipe', 'STP', NULL, NULL),
(197, 'Sudán', 'SUD', NULL, NULL),
(198, 'Suiza', 'SUI', NULL, NULL),
(199, 'Surinam', 'SUR', NULL, NULL),
(200, 'Eslovaquia', 'SVK', NULL, NULL),
(201, 'Suecia', 'SWE', NULL, NULL),
(202, 'Suazilandia', 'SWZ', NULL, NULL),
(203, 'Siria', 'SYR', NULL, NULL),
(204, 'Tanganica', 'TAG', NULL, NULL),
(205, 'República de China', 'TAI', NULL, NULL),
(206, 'Tanzania', 'TAN', NULL, NULL),
(207, 'Checoslovaquia', 'TCH', NULL, NULL),
(208, 'Tonga', 'TGA', NULL, NULL),
(209, 'Tailandia', 'THA', NULL, NULL),
(210, 'Turkmenistán', 'TKM', NULL, NULL),
(211, 'Timor Oriental', 'TLS', NULL, NULL),
(212, 'Togo', 'TOG', NULL, NULL),
(213, 'China Taipéi', 'TPE', NULL, NULL),
(214, 'Trinidad y Tobago', 'TRI', NULL, NULL),
(215, 'Túnez', 'TUN', NULL, NULL),
(216, 'Turquía', 'TUR', NULL, NULL),
(217, 'Tuvalu', 'TUV', NULL, NULL),
(218, 'Emiratos Árabes Unidos', 'UAE', NULL, NULL),
(219, 'República Árabe Unida', 'UAR', NULL, NULL),
(220, 'Uganda', 'UGA', NULL, NULL),
(221, 'Ucrania', 'UKR', NULL, NULL),
(222, 'Uruguay', 'URU', NULL, NULL),
(223, 'Estados Unidos', 'USA', NULL, NULL),
(224, 'Uzbekistán', 'UZB', NULL, NULL),
(225, 'Vanuatu', 'VAN', NULL, NULL),
(226, 'Venezuela', 'VEN', NULL, NULL),
(227, 'Vietnam ', 'VIE', NULL, NULL),
(228, 'San Vicente y las Granadinas', 'VIN', NULL, NULL),
(229, 'Alto Volta', 'VOL', NULL, NULL),
(230, 'República Árabe del Yemen', 'YAR', NULL, NULL),
(231, 'Yemen', 'YEM', NULL, NULL),
(232, 'Zaire', 'ZAI', NULL, NULL),
(233, 'Zambia', 'ZAM', NULL, NULL),
(234, 'Zimbabue', 'ZIM', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `proyectos`
--

CREATE TABLE IF NOT EXISTS `proyectos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombreproyect` varchar(100) NOT NULL,
  `idestado` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `idautor` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `created_at` varchar(45) NOT NULL,
  `updated_at` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `publicaciones`
--

CREATE TABLE IF NOT EXISTS `publicaciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `resumen` text NOT NULL,
  `evento` varchar(60) NOT NULL,
  `fecha` varchar(10) NOT NULL,
  `idautor` int(11) NOT NULL,
  `idcategoria` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `archivo` varchar(40) NOT NULL,
  `created_at` varchar(45) NOT NULL,
  `updated_at` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rol` varchar(40) NOT NULL,
  `created_at` varchar(45) NOT NULL,
  `updated_at` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `rol`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sexos`
--

CREATE TABLE IF NOT EXISTS `sexos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sexo` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `sexos`
--

INSERT INTO `sexos` (`id`, `sexo`) VALUES
(1, 'Masculino'),
(2, 'Femenino');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(90) NOT NULL,
  `sexo` tinyint(2) NOT NULL,
  `idpais` int(11) NOT NULL,
  `telefono` varchar(9) NOT NULL,
  `idrol` int(11) DEFAULT NULL,
  `remember_token` varchar(90) DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL,
  `created_at` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nombre`, `apellido`, `email`, `password`, `sexo`, `idpais`, `telefono`, `idrol`, `remember_token`, `updated_at`, `created_at`) VALUES
(1, 'Sandra', 'Gutierrez', 'sandra.gutierrez@utp.ac.pa', '$2y$10$1ZxMd9T5lPe5L2n66Yd8luLfR2Y/ZI5dXZ8.7dzrNJWoN6kOoR4/2', 2, 1, '12345678', 1, 'xIlyKvr7rSnqyVgqSQ2XDlGFraa5MCIL0gkYyKojIXJfTj8J26ki3hDC2tco', '2016-06-24 14:56:39', '2016-06-17 19:27:20');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
