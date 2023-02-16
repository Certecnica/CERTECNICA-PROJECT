-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2023 at 10:53 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `firstname`, `lastname`, `photo`, `created_on`) VALUES
(1, 'admin', '$2y$10$Yob7If9R7Y0CI9A4iiTXwu.DURDOXROqIgNRg2gmnef6fCWu5F.f6', 'Juan', 'Marin', 'avatar.jpg', '2019-12-18'),
(14, 'soportetic@certecnica.com', '$2y$10$0rXwE/o7p4DozotLF.ODRuFT0SMSrfPJmmz1ZRRAr4DkE8pmvw36a', 'SOPORTE', 'TIC', 'elimina.png', '2022-11-28'),
(15, 'juanc.sofi@gmail.com', '$2y$10$FmCXzYdeBpT2sFUakisjreLaLh1HULSAIV/hmV.bnKEmLAnZH.5wK', 'JUAN CARLOS', 'rodriguez', 'avatar3.png', '2022-11-28'),
(16, 'serviciocliente@certecnica.com', '$2y$10$ik9GvqlhM3hA.hB2NV6/A.3im/hyn.Ti6m8jhgeljltdhz/sBH4aK', 'empleado', 'nuevo', 'pwahelper.exe', '2022-12-01'),
(17, 'dadasd@as', '$2y$10$iept3W67EHqk2Yf6S7se/.lRXAl6C9n04d0BA3scigDVDUFGZe7ru', 'JUAN CARLOS', 'asjdkjak', 'editar.png', '2023-01-13'),
(18, 'dadasd@as', '$2y$10$Zthyynj.YsRKDrUPfGodvOBWc2xYFZSYwofM2pBTG2u3aQyLM.RMq', 'JUAN CARLOS', 'rodriguez', 'editar.png', '2023-01-13'),
(19, 'asdasd', '$2y$10$DiUqNqmJJ28eFYdL4eNcRuoxs6TQroeZaONniWO6ex54eZloHifCi', 'asdasd', 'asdasd', 'quien-quiere-ser-millonario2021-10-.pptx', '2023-01-27');

-- --------------------------------------------------------

--
-- Table structure for table `afp`
--

CREATE TABLE `afp` (
  `id` int(11) NOT NULL,
  `NOMBRE` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `afp`
--

INSERT INTO `afp` (`id`, `NOMBRE`) VALUES
(1, 'PROTECCION\r\n'),
(2, 'COLFONDOS\r\n'),
(3, 'PORVENIR');

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(30) NOT NULL,
  `survey_id` int(30) NOT NULL,
  `user_id` int(30) NOT NULL,
  `answer` text NOT NULL,
  `question_id` int(30) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `survey_id`, `user_id`, `answer`, `question_id`, `date_created`) VALUES
(1, 1, 2, 'Sample Only', 4, '2020-11-10 14:46:07'),
(2, 1, 2, '[JNmhW],[zZpTE]', 2, '2020-11-10 14:46:07'),
(3, 1, 2, 'dAWTD', 1, '2020-11-10 14:46:07'),
(4, 1, 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in tempus turpis, sed fermentum risus. Praesent vitae velit rutrum, dictum massa nec, pharetra felis. Phasellus enim augue, laoreet in accumsan dictum, mollis nec lectus. Aliquam id viverra nisl. Proin quis posuere nulla. Nullam suscipit eget leo ut suscipit.', 4, '2020-11-10 15:59:43'),
(5, 1, 3, '[qCMGO],[JNmhW]', 2, '2020-11-10 15:59:43'),
(6, 1, 3, 'esNuP', 1, '2020-11-10 15:59:43');

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `id` int(11) NOT NULL,
  `area` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`id`, `area`) VALUES
(1, 'ADMINISTRATIVA'),
(2, 'TECNICA'),
(3, 'COMERCIAL');

-- --------------------------------------------------------

--
-- Table structure for table `arl`
--

CREATE TABLE `arl` (
  `id` int(11) NOT NULL,
  `NOMBRE` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `arl`
--

INSERT INTO `arl` (`id`, `NOMBRE`) VALUES
(1, 'AXACOLPATRIA'),
(2, 'SURA');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time_in` time NOT NULL,
  `status` int(1) NOT NULL,
  `time_out` time NOT NULL,
  `num_hr` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `employee_id`, `date`, `time_in`, `status`, `time_out`, `num_hr`) VALUES
(119, 24, '2020-01-07', '10:11:26', 0, '00:00:00', 0),
(120, 25, '2020-01-07', '10:17:04', 0, '00:00:00', 0),
(121, 24, '2022-11-25', '14:16:02', 0, '00:00:00', 0),
(122, 24, '2022-11-28', '07:21:38', 1, '07:21:50', 0.63333333333333),
(123, 25, '2022-11-28', '08:31:39', 1, '00:00:00', 0),
(128, 24, '2022-12-05', '07:02:47', 1, '00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `beneficiarios`
--

CREATE TABLE `beneficiarios` (
  `id` int(11) NOT NULL,
  `cedula_empl` varchar(255) NOT NULL,
  `nombres_emp` varchar(255) NOT NULL,
  `caja_compensacion` varchar(255) NOT NULL,
  `eps` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `parentesco` varchar(255) NOT NULL,
  `tipo_documento` varchar(255) NOT NULL,
  `documento_bene` varchar(255) NOT NULL,
  `nombre_bene` varchar(255) NOT NULL,
  `fecha_nacimiento` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `beneficiarios`
--

INSERT INTO `beneficiarios` (`id`, `cedula_empl`, `nombres_emp`, `caja_compensacion`, `eps`, `direccion`, `parentesco`, `tipo_documento`, `documento_bene`, `nombre_bene`, `fecha_nacimiento`) VALUES
(1, '1084555415	', 'JUAN CARLOS MARIN QUISABONI', 'PORVENIR ', 'SANITAS', 'asdasd', 'Hijo', 'Cédula de extranjería', '8528528', 'ANGEL DAVID PEREZ', '2019-01-08');

-- --------------------------------------------------------

--
-- Table structure for table `cashadvance`
--

CREATE TABLE `cashadvance` (
  `id` int(11) NOT NULL,
  `date_advance` date NOT NULL,
  `employee_id` varchar(15) NOT NULL,
  `amount` double NOT NULL,
  `cuotas` int(11) NOT NULL,
  `cuota_mensual` varchar(255) NOT NULL,
  `date_primerpago` varchar(255) NOT NULL,
  `destino_prestasmo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cashadvance`
--

INSERT INTO `cashadvance` (`id`, `date_advance`, `employee_id`, `amount`, `cuotas`, `cuota_mensual`, `date_primerpago`, `destino_prestasmo`) VALUES
(30, '2023-01-10', '2', 1000, 2, '1000', '2022-06-10', 'universitarios');

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `categoria` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `categoria`
--

INSERT INTO `categoria` (`id`, `categoria`) VALUES
(1, 'Procesos Comerciales'),
(2, 'Gestion Humana');

-- --------------------------------------------------------

--
-- Table structure for table `cesantias`
--

CREATE TABLE `cesantias` (
  `id` int(11) NOT NULL,
  `NOMBRE` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cesantias`
--

INSERT INTO `cesantias` (`id`, `NOMBRE`) VALUES
(1, 'PORVENIR'),
(2, 'PROTECCION');

-- --------------------------------------------------------

--
-- Table structure for table `course_tbl`
--

CREATE TABLE `course_tbl` (
  `cou_id` int(11) NOT NULL,
  `cou_name` varchar(1000) NOT NULL,
  `cou_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `course_tbl`
--

INSERT INTO `course_tbl` (`cou_id`, `cou_name`, `cou_created`) VALUES
(25, 'BSHRM', '2019-11-27 09:26:08'),
(26, 'BSIT', '2019-11-25 13:22:42'),
(65, 'BSCRIM', '2019-12-02 09:25:36');

-- --------------------------------------------------------

--
-- Table structure for table `cuestionarios`
--

CREATE TABLE `cuestionarios` (
  `id` int(11) NOT NULL,
  `ci` int(12) NOT NULL,
  `ap` varchar(15) NOT NULL,
  `am` varchar(15) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `cargo` int(1) NOT NULL,
  `id_datos` int(10) NOT NULL,
  `id_examen` int(10) NOT NULL,
  `act1` varchar(3) NOT NULL,
  `act2` varchar(3) NOT NULL,
  `act3` varchar(3) NOT NULL,
  `act4` varchar(3) NOT NULL,
  `act5` varchar(3) NOT NULL,
  `act6` varchar(3) NOT NULL,
  `act7` varchar(3) NOT NULL,
  `act8` varchar(3) NOT NULL,
  `act9` varchar(3) NOT NULL,
  `act10` varchar(3) NOT NULL,
  `resp1` varchar(200) NOT NULL,
  `resp2` varchar(200) NOT NULL,
  `resp3` varchar(200) NOT NULL,
  `resp4` varchar(200) NOT NULL,
  `resp5` varchar(200) NOT NULL,
  `resp6` varchar(200) NOT NULL,
  `resp7` varchar(200) NOT NULL,
  `resp8` varchar(200) NOT NULL,
  `resp9` varchar(200) NOT NULL,
  `resp10` varchar(200) NOT NULL,
  `ran1` int(3) NOT NULL,
  `ran2` int(3) NOT NULL,
  `ran3` int(3) NOT NULL,
  `ran4` int(3) NOT NULL,
  `ran5` int(3) NOT NULL,
  `ran6` int(3) NOT NULL,
  `ran7` int(3) NOT NULL,
  `ran8` int(3) NOT NULL,
  `ran9` int(3) NOT NULL,
  `ran10` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `cuestionarios`
--

INSERT INTO `cuestionarios` (`id`, `ci`, `ap`, `am`, `nom`, `cargo`, `id_datos`, `id_examen`, `act1`, `act2`, `act3`, `act4`, `act5`, `act6`, `act7`, `act8`, `act9`, `act10`, `resp1`, `resp2`, `resp3`, `resp4`, `resp5`, `resp6`, `resp7`, `resp8`, `resp9`, `resp10`, `ran1`, `ran2`, `ran3`, `ran4`, `ran5`, `ran6`, `ran7`, `ran8`, `ran9`, `ran10`) VALUES
(1, 12345, 'ACOSTA', 'FLORES', 'YAIR', 3, 391, 1, '0', '10', '10', '10', '0', '10', '0', '0', '0', '0', 'Verbo', 'Verbo copulativo', 'PeriodÃ­stico', 'Determinante', 'Neutro', 'Epistolares', 'Ninguna de las anteriores', 'Sustituyen al verbo', 'Dos verbos o mÃ¡s', 'GÃ©nero poÃ©tico', 11, 6, 8, 3, 4, 7, 10, 5, 9, 2);

-- --------------------------------------------------------

--
-- Table structure for table `deductions`
--

CREATE TABLE `deductions` (
  `id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `deductions`
--

INSERT INTO `deductions` (`id`, `description`, `amount`) VALUES
(5, 'Pago de EPS 4%', 2500);

-- --------------------------------------------------------

--
-- Table structure for table `documentos`
--

CREATE TABLE `documentos` (
  `id` int(11) NOT NULL,
  `EMPLEADO` text NOT NULL,
  `tipo_documento` text NOT NULL,
  `DOCUMENTO` text NOT NULL,
  `Fecha_subida` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `documentos`
--

INSERT INTO `documentos` (`id`, `EMPLEADO`, `tipo_documento`, `DOCUMENTO`, `Fecha_subida`) VALUES
(19, 'JUAN CARLOS MARIN QUISABONI', 'HOJA DE VIDA', 'documentos/codigos_municipios_dane.xmlx.pdf', '2022-12-05'),
(21, 'JUAN CARLOS MARIN QUISABONI', 'Sancion', 'documentos/wpzm_wpdatatable_3.csv', '2022-12-13'),
(22, 'JUAN CARLOS MARIN QUISABONI', 'LIQUIDACION', 'documentos/Admin Soporte TIC ($oporte.2018).xlsx', '2023-01-11'),
(25, 'JUAN CARLOS MARIN QUISABONI', 'PDF', 'documentos/Conseuencias del Chisme en un equipo de trabajo  (1).pptx', '2023-01-30'),
(26, 'JUAN CARLOS MARIN ', 'SOPORTES', 'documentos/Admin Soporte TIC ($oporte.2018).xlsx', '2023-02-03'),
(27, 'JUAN CARLOS  MARIN ', 'SOPORTES', 'documentos/Hoja de cálculo sin título - Hoja 1.csv', '2023-02-15');

-- --------------------------------------------------------

--
-- Table structure for table `dotacion`
--

CREATE TABLE `dotacion` (
  `id` int(11) NOT NULL,
  `EMPLEADO` varchar(255) NOT NULL,
  `TALLA_CAMISA` varchar(10) DEFAULT NULL,
  `TALLA_CALZADO` varchar(5) DEFAULT NULL,
  `TALLA_CHAQUETA` varchar(11) DEFAULT NULL,
  `TALLA_PANTALON` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dotacion`
--

INSERT INTO `dotacion` (`id`, `EMPLEADO`, `TALLA_CAMISA`, `TALLA_CALZADO`, `TALLA_CHAQUETA`, `TALLA_PANTALON`) VALUES
(10, 'JUAN CARLOS MARIN QUISABONI', 'M', '39', 'S', 'L');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `tipo_documento` varchar(255) NOT NULL,
  `employee_id` varchar(15) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `birthdate` date NOT NULL,
  `contact_info` varchar(100) NOT NULL,
  `contraseña` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `position_id` int(11) NOT NULL,
  `schedule_id` int(11) NOT NULL,
  `rol_id` int(11) NOT NULL,
  `fecha_contratacion` date NOT NULL,
  `photo` varchar(200) NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `tipo_documento`, `employee_id`, `firstname`, `lastname`, `address`, `birthdate`, `contact_info`, `contraseña`, `gender`, `position_id`, `schedule_id`, `rol_id`, `fecha_contratacion`, `photo`, `created_on`) VALUES
(1, 'Tarjeta de Identidad', '1084555415	', 'JUAN CARLOS ', 'MARIN QUISABONI', 'asdasd', '2004-12-14', 'juanc.sofi@gmail.com', '$2y$10$Yob7If9R7Y0CI9A4iiTXwu.DURDOXROqIgNRg2gmnef6fCWu5F.f6', 'Hombre', 12, 1, 1, '2022-02-15', 'avatar3.png', '2022-12-12'),
(2, 'Cédula de extranjería', '1084330294', 'JUAN CARLOS  ', 'MARIN ', 'calle 48k sur N°5 ', '2004-02-22', 'certecnica@gmail.com', '$2y$10$0rXwE/o7p4DozotLF.ODRuFT0SMSrfPJmmz1ZRRAr4DkE8pmvw36a', 'Hombre', 20, 1, 2, '0000-00-00', 'avatar.jpg', '2022-12-22'),
(3, 'Cédula de ciudadanía', '1010256415	', 'PEPITO  ', 'RODRIGUEZ', 'CALLE 48 K SUR N°5 N 16', '2022-09-29', 'juanc.sofi@gmail.com', '', 'Hombre', 8, 1, 3, '0000-00-00', 'elimina.png', '2023-02-03');

-- --------------------------------------------------------

--
-- Table structure for table `encuestas`
--

CREATE TABLE `encuestas` (
  `id_encuesta` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `descripcion` text NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `fecha_inicio` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `fecha_final` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `entrega_dotacion`
--

CREATE TABLE `entrega_dotacion` (
  `id` int(11) NOT NULL,
  `empleado` varchar(255) NOT NULL,
  `fecha_entrega` date NOT NULL,
  `elemento` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `entrega_dotacion`
--

INSERT INTO `entrega_dotacion` (`id`, `empleado`, `fecha_entrega`, `elemento`, `descripcion`) VALUES
(1, 'JUAN CARLOS MARIN QUISABONI', '2023-01-03', 'PANTALON', 'entrega de chaqueta Certecanicaa'),
(9, 'JUAN CARLOS MARIN QUISABONI', '2023-01-31', 'PANTALON', 'entrega de pantalon CERTECNICA');

-- --------------------------------------------------------

--
-- Table structure for table `eps`
--

CREATE TABLE `eps` (
  `id` int(11) NOT NULL,
  `eps` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `eps`
--

INSERT INTO `eps` (`id`, `eps`) VALUES
(1, 'SANITAS'),
(2, 'COMPENSAR');

-- --------------------------------------------------------

--
-- Table structure for table `estadisticas`
--

CREATE TABLE `estadisticas` (
  `id` int(11) NOT NULL,
  `visitas` int(11) NOT NULL,
  `respondidas` int(11) NOT NULL,
  `completados` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `estadisticas`
--

INSERT INTO `estadisticas` (`id`, `visitas`, `respondidas`, `completados`) VALUES
(1, 33, 43, 9);

-- --------------------------------------------------------

--
-- Table structure for table `eventoscalendar`
--

CREATE TABLE `eventoscalendar` (
  `id` int(11) NOT NULL,
  `evento` varchar(250) DEFAULT NULL,
  `color_evento` varchar(20) DEFAULT NULL,
  `fecha_inicio` varchar(20) DEFAULT NULL,
  `fecha_fin` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `eventoscalendar`
--

INSERT INTO `eventoscalendar` (`id`, `evento`, `color_evento`, `fecha_inicio`, `fecha_fin`) VALUES
(66, 'REUNION', '#FF5722', '2023-01-12', '2023-01-13'),
(68, 'REUNION GENERAL', '#9c27b0', '2023-02-01', '2023-02-02'),
(59, 'RUMBA TERAPIA', '#FF5722', '2022-12-08', '2022-12-09');

-- --------------------------------------------------------

--
-- Table structure for table `examen`
--

CREATE TABLE `examen` (
  `id` int(11) NOT NULL,
  `autor` int(10) NOT NULL,
  `categoria` varchar(30) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `consigna` varchar(210) NOT NULL,
  `estado` varchar(12) NOT NULL,
  `preg1` varchar(200) NOT NULL,
  `resp1` varchar(200) NOT NULL,
  `preg2` varchar(200) NOT NULL,
  `resp2` varchar(200) NOT NULL,
  `preg3` varchar(200) NOT NULL,
  `resp3` varchar(200) NOT NULL,
  `preg4` varchar(200) NOT NULL,
  `resp4` varchar(200) NOT NULL,
  `preg5` varchar(200) NOT NULL,
  `resp5` varchar(200) NOT NULL,
  `preg6` varchar(200) NOT NULL,
  `resp6` varchar(200) NOT NULL,
  `preg7` varchar(200) NOT NULL,
  `resp7` varchar(200) NOT NULL,
  `preg8` varchar(200) NOT NULL,
  `resp8` varchar(200) NOT NULL,
  `preg9` varchar(200) NOT NULL,
  `resp9` varchar(200) NOT NULL,
  `preg10` varchar(200) NOT NULL,
  `resp10` varchar(200) NOT NULL,
  `nivel` varchar(12) NOT NULL,
  `curso` varchar(10) NOT NULL,
  `paralelo` varchar(1) NOT NULL,
  `gestion` int(5) NOT NULL,
  `fecha_final` date NOT NULL,
  `tiempo` int(2) NOT NULL,
  `inicio` datetime NOT NULL,
  `final` datetime NOT NULL,
  `final1` datetime NOT NULL,
  `final2` datetime NOT NULL,
  `final3` datetime NOT NULL,
  `final4` datetime NOT NULL,
  `final5` datetime NOT NULL,
  `final6` datetime NOT NULL,
  `final7` datetime NOT NULL,
  `final8` datetime NOT NULL,
  `final9` datetime NOT NULL,
  `final10` datetime NOT NULL,
  `rand` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `examen`
--

INSERT INTO `examen` (`id`, `autor`, `categoria`, `titulo`, `consigna`, `estado`, `preg1`, `resp1`, `preg2`, `resp2`, `preg3`, `resp3`, `preg4`, `resp4`, `preg5`, `resp5`, `preg6`, `resp6`, `preg7`, `resp7`, `preg8`, `resp8`, `preg9`, `resp9`, `preg10`, `resp10`, `nivel`, `curso`, `paralelo`, `gestion`, `fecha_final`, `tiempo`, `inicio`, `final`, `final1`, `final2`, `final3`, `final4`, `final5`, `final6`, `final7`, `final8`, `final9`, `final10`, `rand`) VALUES
(1, 123456, 'Literatura', 'El cuento', '', 'Publicado', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'SECUNDARIA', 'PRIMERO', 'A', 2020, '2020-04-18', 1, '2020-04-19 16:53:36', '0000-00-00 00:00:00', '2020-04-19 16:54:36', '2020-04-19 16:55:03', '2020-04-19 16:55:10', '2020-04-19 16:55:16', '2020-04-19 16:55:24', '2020-04-19 16:55:28', '2020-04-19 16:55:32', '2020-04-19 16:55:35', '2020-04-19 16:55:38', '2020-04-19 16:55:42', 11),
(2, 123456, 'Literatura', 'asdasdsad', '', 'Publicado', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 2023, '2023-01-31', 50, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(3, 1, 'Procesos Comerciales', 'NUEVA SOCIALIZACION ', '', 'Publicado', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 2023, '2023-01-31', 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(9, 1, 'Procesos Comerciales', 'INDUCCION', '', 'Publicado', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 2023, '2023-01-31', 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(17, 0, 'Gestion Humana', '', '', 'Despublicado', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 2023, '2023-01-31', 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `exam_answers`
--

CREATE TABLE `exam_answers` (
  `exans_id` int(11) NOT NULL,
  `axmne_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `quest_id` int(11) NOT NULL,
  `exans_answer` varchar(1000) NOT NULL,
  `exans_status` varchar(1000) NOT NULL DEFAULT 'new',
  `exans_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `exam_answers`
--

INSERT INTO `exam_answers` (`exans_id`, `axmne_id`, `exam_id`, `quest_id`, `exans_answer`, `exans_status`, `exans_created`) VALUES
(295, 4, 12, 25, 'Diode, inverted, pointer', 'old', '2019-12-07 02:52:14'),
(296, 4, 12, 16, 'Data Block', 'old', '2019-12-07 02:52:14'),
(297, 6, 12, 18, 'Programmable Logic Controller', 'old', '2019-12-05 12:59:47'),
(298, 6, 12, 9, '1850s', 'old', '2019-12-05 12:59:47'),
(299, 6, 12, 24, '1976', 'old', '2019-12-05 12:59:47'),
(300, 6, 12, 14, 'Operating System', 'old', '2019-12-05 12:59:47'),
(301, 6, 12, 19, 'WAN (Wide Area Network)', 'old', '2019-12-05 12:59:47'),
(302, 6, 11, 28, 'fds', 'old', '2023-01-31 12:36:00'),
(303, 6, 11, 29, 'sd', 'old', '2023-01-31 12:36:00'),
(304, 6, 12, 15, 'David Filo & Jerry Yang', 'new', '2019-12-05 12:59:47'),
(305, 6, 12, 17, 'System file', 'new', '2019-12-05 12:59:47'),
(306, 6, 12, 10, 'Field', 'new', '2019-12-05 12:59:47'),
(307, 6, 12, 9, '1880s', 'new', '2019-12-05 12:59:47'),
(308, 6, 12, 21, 'Temporary file', 'new', '2019-12-05 12:59:47'),
(309, 4, 11, 28, 'q1', 'new', '2019-12-05 13:30:21'),
(310, 4, 11, 29, 'dfg', 'new', '2019-12-05 13:30:21'),
(311, 4, 12, 16, 'Data Block', 'new', '2019-12-07 02:52:14'),
(312, 4, 12, 20, 'Plancks radiation', 'new', '2019-12-07 02:52:14'),
(313, 4, 12, 10, 'Report', 'new', '2019-12-07 02:52:14'),
(314, 4, 12, 24, '1976', 'new', '2019-12-07 02:52:14'),
(315, 4, 12, 9, '1930s', 'new', '2019-12-07 02:52:14'),
(316, 8, 12, 18, 'Programmable Lift Computer', 'new', '2020-01-05 03:18:35'),
(317, 8, 12, 14, 'Operating System', 'new', '2020-01-05 03:18:35'),
(318, 8, 12, 20, 'Einstein oscillation', 'new', '2020-01-05 03:18:35'),
(319, 8, 12, 21, 'Temporary file', 'new', '2020-01-05 03:18:35'),
(320, 8, 12, 25, 'Diode, inverted, pointer', 'new', '2020-01-05 03:18:35'),
(321, 9, 24, 31, '2', 'new', '2020-01-12 04:47:37'),
(322, 9, 24, 35, '8', 'new', '2020-01-12 04:47:37'),
(323, 9, 24, 33, '9', 'new', '2020-01-12 04:47:37'),
(324, 9, 24, 34, '8', 'new', '2020-01-12 04:47:37'),
(325, 9, 24, 32, '1', 'new', '2020-01-12 04:47:37'),
(326, 9, 25, 36, '4', 'new', '2020-01-12 05:10:11'),
(327, 9, 26, 37, '4', 'new', '2020-01-12 05:13:34'),
(328, 6, 11, 28, 'q1', 'new', '2023-01-31 12:36:00'),
(329, 6, 11, 29, 'q2', 'new', '2023-01-31 12:36:00'),
(330, 7, 12, 19, 'URL (Universal Resource Locator)', 'new', '2023-01-31 12:44:22'),
(331, 7, 12, 16, 'Data Block', 'new', '2023-01-31 12:44:22'),
(332, 7, 12, 21, 'Temporary file', 'new', '2023-01-31 12:44:22'),
(333, 7, 12, 15, 'Dennis Ritchie & Ken Thompson', 'new', '2023-01-31 12:44:22'),
(334, 7, 12, 10, 'Record', 'new', '2023-01-31 12:44:22');

-- --------------------------------------------------------

--
-- Table structure for table `exam_attempt`
--

CREATE TABLE `exam_attempt` (
  `examat_id` int(11) NOT NULL,
  `exmne_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `examat_status` varchar(1000) NOT NULL DEFAULT 'used'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `exam_attempt`
--

INSERT INTO `exam_attempt` (`examat_id`, `exmne_id`, `exam_id`, `examat_status`) VALUES
(51, 6, 12, 'used'),
(52, 4, 11, 'used'),
(53, 4, 12, 'used'),
(54, 8, 12, 'used'),
(55, 9, 24, 'used'),
(56, 9, 25, 'used'),
(57, 9, 26, 'used'),
(58, 6, 11, 'used'),
(59, 7, 12, 'used');

-- --------------------------------------------------------

--
-- Table structure for table `exam_question_tbl`
--

CREATE TABLE `exam_question_tbl` (
  `eqt_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `exam_question` varchar(1000) NOT NULL,
  `exam_ch1` varchar(1000) NOT NULL,
  `exam_ch2` varchar(1000) NOT NULL,
  `exam_ch3` varchar(1000) NOT NULL,
  `exam_ch4` varchar(1000) NOT NULL,
  `exam_answer` varchar(1000) NOT NULL,
  `exam_status` varchar(1000) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `exam_question_tbl`
--

INSERT INTO `exam_question_tbl` (`eqt_id`, `exam_id`, `exam_question`, `exam_ch1`, `exam_ch2`, `exam_ch3`, `exam_ch4`, `exam_answer`, `exam_status`) VALUES
(9, 12, 'In which decade was the American Institute of Electrical Engineers (AIEE) founded?', '1850s', '1880s', '1930s', '1950s', '1880s', 'active'),
(10, 12, 'What is part of a database that holds only one type of information?', 'Report', 'Field', 'Record', 'File', 'Field', 'active'),
(14, 12, 'OS computer abbreviation usually means ?', 'Order of Significance', 'Open Software', 'Operating System', 'Optical Sensor', 'Operating System', 'active'),
(15, 12, 'Who developed Yahoo?', 'Dennis Ritchie & Ken Thompson', 'David Filo & Jerry Yang', 'Vint Cerf & Robert Kahn', 'Steve Case & Jeff Bezos', 'David Filo & Jerry Yang', 'active'),
(16, 12, 'DB computer abbreviation usually means ?', 'Database', 'Double Byte', 'Data Block', 'Driver Boot', 'Database', 'active'),
(17, 12, '.INI extension refers usually to what kind of file?', 'Image file', 'System file', 'Hypertext related file', 'Image Color Matching Profile file', 'System file', 'active'),
(18, 12, 'What does the term PLC stand for?', 'Programmable Lift Computer', 'Program List Control', 'Programmable Logic Controller', 'Piezo Lamp Connector', 'Programmable Logic Controller', 'active'),
(19, 12, 'What do we call a network whose elements may be separated by some distance? It usually involves two or more small networks and dedicated high-speed telephone lines.', 'URL (Universal Resource Locator)', 'LAN (Local Area Network)', 'WAN (Wide Area Network)', 'World Wide Web', 'WAN (Wide Area Network)', 'active'),
(20, 12, 'After the first photons of light are produced, which process is responsible for amplification of the light?', 'Blackbody radiation', 'Stimulated emission', 'Plancks radiation', 'Einstein oscillation', 'Stimulated emission', 'active'),
(21, 12, '.TMP extension refers usually to what kind of file?', 'Compressed Archive file', 'Image file', 'Temporary file', 'Audio file', 'Temporary file', 'active'),
(22, 12, 'What do we call a collection of two or more computers that are located within a limited distance of each other and that are connected to each other directly or indirectly?', 'Inernet', 'Interanet', 'Local Area Network', 'Wide Area Network', 'Local Area Network', 'active'),
(24, 12, '	 In what year was the \"@\" chosen for its use in e-mail addresses?', '1976', '1972', '1980', '1984', '1972', 'active'),
(25, 12, 'What are three types of lasers?', 'Gas, metal vapor, rock', 'Pointer, diode, CD', 'Diode, inverted, pointer', 'Gas, solid state, diode', 'Gas, solid state, diode', 'active'),
(27, 15, 'asdasd', 'dsf', 'sd', 'yui', 'sdf', 'yui', 'active'),
(28, 11, 'Question 1', 'q1', 'asd', 'fds', 'ytu', 'q1', 'active'),
(29, 11, 'Question 2', 'asd', 'sd', 'q2', 'dfg', 'q2', 'active'),
(30, 11, 'Question 3', 'sd', 'q3', 'asd', 'fgh', 'q3', 'active'),
(31, 24, '1+1', '3', '8', '9', '2', 'd', 'active'),
(32, 24, '2+2=?', '1', '2', '3', '4', 'd', 'active'),
(33, 24, '1+2=?', '7', '8', '3', '9', 'c', 'active'),
(34, 24, '4+4=?', '8', '9', '7', '6', 'a', 'active'),
(35, 24, '9+9=?', '7', '9', '18', '8', 'c', 'active'),
(36, 25, '2+2=?', '4', '67', '8', '8', 'a', 'active'),
(37, 26, '2+2=?', '3', '6', '7', '4', 'D', 'active'),
(38, 27, 'asd', 'asdad', 'asdasd', 'adasd', 'asdasd', 'a', 'active'),
(39, 27, 'sasasd', 'sda', '1', 'asasd', 'adsda', 'A', 'active'),
(40, 28, 'hola', '1', '2', '3', 'asa', 'A', 'active'),
(41, 28, 'asdsa', 'aas', 'dasd', 'asdas', '4', 'D', 'active'),
(42, 28, 'asdas', 'asdasd', 'asdasd', 'asdasd', '1', 'D', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `exam_tbl`
--

CREATE TABLE `exam_tbl` (
  `ex_id` int(11) NOT NULL,
  `cou_id` int(11) NOT NULL,
  `ex_title` varchar(1000) NOT NULL,
  `ex_time_limit` varchar(1000) NOT NULL,
  `ex_questlimit_display` int(11) NOT NULL,
  `ex_description` varchar(1000) NOT NULL,
  `ex_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `exam_tbl`
--

INSERT INTO `exam_tbl` (`ex_id`, `cou_id`, `ex_title`, `ex_time_limit`, `ex_questlimit_display`, `ex_description`, `ex_created`) VALUES
(11, 26, 'Duerms', '1', 2, 'qwe', '2019-12-05 12:03:21'),
(12, 26, 'Another Exam', '1', 5, 'Mabilisang Exam', '2019-12-04 15:19:18'),
(13, 26, 'Exam Again', '5', 0, 'again and again\r\n', '2019-11-30 08:24:54'),
(24, 65, 'math', '10', 5, 'basic math', '2020-01-12 05:04:45'),
(25, 65, 'math 2', '10', 3, 'basic math 2', '2020-01-12 05:08:44'),
(26, 65, 'math3', '10', 3, 'basic math3', '2020-01-12 05:12:11'),
(27, 65, 'GESTION HUMANA', '50', 2, 'HOLA ', '2023-01-31 12:32:00'),
(28, 65, 'GESTION HUMANA - 3 ', '10', 3, 'hello', '2023-01-31 12:41:53');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks_tbl`
--

CREATE TABLE `feedbacks_tbl` (
  `fb_id` int(11) NOT NULL,
  `exmne_id` int(11) NOT NULL,
  `fb_exmne_as` varchar(1000) NOT NULL,
  `fb_feedbacks` varchar(1000) NOT NULL,
  `fb_date` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `feedbacks_tbl`
--

INSERT INTO `feedbacks_tbl` (`fb_id`, `exmne_id`, `fb_exmne_as`, `fb_feedbacks`, `fb_date`) VALUES
(4, 6, 'Glenn Duerme', 'Gwapa kay Miss Pam', 'December 05, 2019'),
(5, 6, 'Anonymous', 'Lageh, idol na nako!', 'December 05, 2019'),
(6, 4, 'Rogz Nunezsss', 'Yes', 'December 08, 2019'),
(7, 4, '', '', 'December 08, 2019'),
(8, 4, '', '', 'December 08, 2019'),
(9, 8, 'Anonymous', 'dfsdf', 'January 05, 2020'),
(10, 9, 'warren dalaoyan', 'haah', 'January 12, 2020');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `email` varchar(50) NOT NULL,
  `eid` text NOT NULL,
  `score` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `sahi` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`email`, `eid`, `score`, `level`, `sahi`, `wrong`, `date`) VALUES
('suryaprasadtripathy8@gmail.com', '5b141b8009cf0', 22, 10, 8, 2, '2018-06-03 21:56:00'),
('pinky@gmail.com', '5b141b8009cf0', 30, 10, 10, 0, '2018-06-03 21:57:45'),
('priyanka@gmail.com', '5b141b8009cf0', 22, 10, 8, 2, '2018-06-03 21:59:06'),
('suryaprasadtripathy8@gmail.com', '5b141f1e8399e', 26, 10, 9, 1, '2018-06-03 22:17:26'),
('suryaprasadtripathy8@gmail.com', '5b141b8009cf0', 22, 10, 8, 2, '2018-06-03 21:56:00'),
('pinky@gmail.com', '5b141b8009cf0', 30, 10, 10, 0, '2018-06-03 21:57:45'),
('priyanka@gmail.com', '5b141b8009cf0', 22, 10, 8, 2, '2018-06-03 21:59:06'),
('suryaprasadtripathy8@gmail.com', '5b141f1e8399e', 26, 10, 9, 1, '2018-06-03 22:17:26');

-- --------------------------------------------------------

--
-- Table structure for table `informacion_empleado`
--

CREATE TABLE `informacion_empleado` (
  `id` int(11) NOT NULL,
  `empleado` text NOT NULL,
  `cargo` text NOT NULL,
  `area` text NOT NULL,
  `correo_corporativo` varchar(255) DEFAULT NULL,
  `telefono_corporativo` int(10) DEFAULT NULL,
  `eps` text NOT NULL,
  `afp` text NOT NULL,
  `cesantia` text NOT NULL,
  `caja_compensacion` text NOT NULL,
  `arl` text NOT NULL,
  `tipo_contrato` varchar(255) NOT NULL,
  `nivel_escolaridad` text NOT NULL,
  `titulo` text NOT NULL,
  `matricula_profesional` varchar(255) NOT NULL,
  `created_on` date NOT NULL,
  `fecha_contratacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `informacion_empleado`
--

INSERT INTO `informacion_empleado` (`id`, `empleado`, `cargo`, `area`, `correo_corporativo`, `telefono_corporativo`, `eps`, `afp`, `cesantia`, `caja_compensacion`, `arl`, `tipo_contrato`, `nivel_escolaridad`, `titulo`, `matricula_profesional`, `created_on`, `fecha_contratacion`) VALUES
(1, 'JUAN CARLOS MARIN QUISABONI', 'DIRECTOR TECNICO', 'TECNICA', 'certecnica.18@certecnica.com', 15489, 'SANITAS', 'PROTECCION', '  PORVENIR ', 'PORVENIR ', 'PROTECCION', 'TERMINO FIJO', 'TECNICA', 'Desarrrolllo de Software', 'N/A', '2022-12-07', '0000-00-00'),
(3, 'PEPITO RODRIGUEZ', 'EJECUTIVO COMERCIAL', 'ADMINISTRATIVA', 'JUANC.SOFI@GMAIL.COM', 2147483647, 'SANITAS', 'COLFONDOS', '  PROTECCION ', 'PORVENIR ', 'AXACOLPATRIA', 'OBRA LABOR', 'BACHILLER', 'TECNICO DE DESARROLLO DE SOFTWARE', '0521', '2023-02-03', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `id` int(11) NOT NULL,
  `eid` int(11) NOT NULL COMMENT 'Employee ID',
  `ename` varchar(255) NOT NULL COMMENT 'Employee''s Username',
  `descr` varchar(255) NOT NULL COMMENT 'Leave Reason',
  `fromdate` date NOT NULL,
  `todate` date NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `leaves`
--

INSERT INTO `leaves` (`id`, `eid`, `ename`, `descr`, `fromdate`, `todate`, `status`) VALUES
(1, 2, 'williams', 'Prueba', '2021-07-01', '2021-07-02', 'Aceptado'),
(2, 2, 'williams', 'Sabático: prueba después de establecer fechas', '2021-07-25', '2021-07-27', 'Aceptado'),
(3, 4, 'elissa', 'Enfermo: ¡No podré unirme porque no me siento lo suficientemente bien! Necesito descansar un poco.', '2021-07-25', '2021-07-27', 'Aceptado'),
(4, 2, 'williams', 'Vacaciones: prueba después de configurar los días de intervalo', '2021-07-25', '2021-08-04', 'Aceptado'),
(5, 5, 'gordon', 'Informal: ¡necesito pasar un tiempo con mi familia!', '2021-07-26', '2021-07-28', 'Aceptado'),
(6, 6, 'edith', 'Enferma: ¡Necesito ponerme en cuarentena!', '2021-07-26', '2021-08-09', 'Rechazado'),
(7, 5, 'gordon', 'Maternidad / Paternidad: Necesito cuidar a mi recién nacida', '2021-07-26', '2021-08-02', 'Aceptado'),
(8, 2, 'williams', 'Casual : Me voy de Vacaciones', '2021-07-27', '2021-08-03', 'Rechazado'),
(13, 0, '36', 'Licencia no remunerada , asad', '2022-12-08', '2022-12-01', 'Rechazado'),
(22, 36, 'Juan Carlos', 'Motivos personales , sdfs', '2022-12-07', '2022-11-29', 'Pendiente'),
(25, 36, 'Javier Diaz', 'Control o cita medica , asdasd', '2022-11-29', '2022-12-29', 'Pendiente'),
(29, 36, '', 'Motivos personales , asdad', '2022-12-14', '2022-12-22', 'Rechazado'),
(30, 1, '', 'Calamidad Domestica , asdsd', '2023-01-10', '2023-01-25', 'Pendiente'),
(31, 1, '', 'Control o cita medica , asdasd', '2023-01-04', '2023-01-11', 'Pendiente');

-- --------------------------------------------------------

--
-- Table structure for table `llegadas`
--

CREATE TABLE `llegadas` (
  `id` int(11) NOT NULL,
  `NOMBRES` text NOT NULL,
  `APELLIDOS` text NOT NULL,
  `FECHA` varchar(50) NOT NULL,
  `HORA_LLEGADA` time NOT NULL,
  `HORA_SALIDA` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `llegadas`
--

INSERT INTO `llegadas` (`id`, `NOMBRES`, `APELLIDOS`, `FECHA`, `HORA_LLEGADA`, `HORA_SALIDA`) VALUES
(1, 'JUAN CARLOS', 'MARIN QUISABONI', '0000-00-00', '12:20:00', '04:40:00'),
(4, 'JUAN CARLOS', 'MARIN', '0000-00-00', '12:20:00', '04:40:00'),
(5, 'JUAN CARLOS', 'MARIN', '2/11/2022', '12:20:00', '04:40:00'),
(9, 'PEPITO ', 'PEREZ', '4/11/2022', '07:00:00', '17:15:00'),
(10, 'PEPITO ', 'PEREZ', '4/11/2022', '07:00:00', '17:15:00'),
(24, 'JUAN CARLOS', 'MARIN QUISABONI', '1/02/2023', '07:01:00', '05:16:00'),
(25, 'JUAN CARLOS', 'MARIN QUISABONI', '2/02/2023', '07:15:00', '17:12:45'),
(26, 'PEPITO ', 'RODRIGUEZ', '2/02/2023', '06:48:00', '17:16:32');

-- --------------------------------------------------------

--
-- Table structure for table `log_admin`
--

CREATE TABLE `log_admin` (
  `id` int(11) NOT NULL,
  `timestamp` datetime(6) NOT NULL,
  `user_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `data` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log_admin`
--

INSERT INTO `log_admin` (`id`, `timestamp`, `user_id`, `description`, `data`) VALUES
(2, '2023-01-13 14:11:19.000000', 1, 'Se creo al admin  JUAN CARLOS rodriguez', 'JUAN CARLOS , rodriguez , dadasd@as , 142536 , editar.png'),
(3, '2023-01-27 22:09:56.000000', 1, 'Se creo al admin  asdasd asdasd', 'asdasd , asdasd , asdasd , asdasdas , quien-quiere-ser-millonario2021-10-.pptx');

-- --------------------------------------------------------

--
-- Table structure for table `log_cargos`
--

CREATE TABLE `log_cargos` (
  `id` int(11) NOT NULL,
  `timestamp` datetime(6) NOT NULL,
  `user_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `data` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log_cashadvance`
--

CREATE TABLE `log_cashadvance` (
  `id` int(11) NOT NULL,
  `timestamp` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `data` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log_cashadvance`
--

INSERT INTO `log_cashadvance` (`id`, `timestamp`, `user_id`, `description`, `data`) VALUES
(10, '2022-12-21 21:32:21', 1, 'Se Creo un avance en efectivo al ID de empleado PJO724930615', '1000 , 1 , 1000 , 2022-12-08 , prestamo'),
(11, '2022-12-21 21:40:43', 1, 'Se Creo un avance en efectivo al ID de empleado PJO724930615', '1000 , 32 , 1000 , 2022-12-02 , prestamo'),
(12, '2022-12-21 21:49:14', 1, 'Se Creo un avance en efectivo al ID de empleado PJO724930615', '1000 , 32 , 100.000 , 2008-02-21 , Compra de una propiedad'),
(13, '2022-12-21 21:52:15', 1, 'Se Creo un avance en efectivo al ID de empleado PJO724930615', '1000 , 32 , 100.000 , 2022-12-12 , universitarios'),
(15, '2022-12-22 13:19:42', 1, 'Se Creo un avance en efectivo al ID de empleado PJO724930615', '1000 , 1 , 1000 , 2022-12-02 , estudios'),
(16, '2022-12-23 12:55:13', 1, 'Se Creo un avance en efectivo al ID de empleado PJO724930615', '1000 , 1 , 1000 , 2022-12-26 , estudios'),
(17, '2022-12-23 12:55:45', 1, 'Se Creo un avance en efectivo al ID de empleado 1084330294', '1000 , 1 , 1000 , 2022-12-07 , estudios'),
(18, '2022-12-23 12:55:56', 1, 'Se Creo un avance en efectivo al ID de empleado 1084330294', '1000 , 1 , 1000 , 2022-12-07 , estudios'),
(19, '2022-12-23 12:56:22', 1, 'Se Creo un avance en efectivo al ID de empleado 1084330294', '50000 , 32 , 100.000 , 2022-12-12 , estudios'),
(20, '2022-12-23 12:56:59', 1, 'Se Creo un avance en efectivo al ID de empleado 1084555415	', '1000 , 1 , 100.000 , 2022-12-14 , estudios'),
(21, '2022-12-23 12:59:24', 1, 'Se Creo un avance en efectivo al ID de empleado 1084330294', '1000 , 10 , 1000 , 2004-05-10 , estudios'),
(22, '2023-01-10 19:06:55', 1, 'Se Creo un avance en efectivo al ID de empleado 1084330294', '1000 , 2 , 1000 , 2022-06-10 , universitarios'),
(23, '2023-02-08 22:21:33', 1, 'Se Creo un avance en efectivo al ID de empleado 107894564645', '1000 , 2 , 500 , 2023-02-08 , ESTUDIO');

-- --------------------------------------------------------

--
-- Table structure for table `log_employees`
--

CREATE TABLE `log_employees` (
  `id` int(11) NOT NULL,
  `timestamp` datetime(6) NOT NULL,
  `user_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `data` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log_employees`
--

INSERT INTO `log_employees` (`id`, `timestamp`, `user_id`, `description`, `data`) VALUES
(1, '2022-12-22 13:49:46.000000', 1, 'Se Creo al empleado JUAN CARLOS .  .MARIN  con documento:   1084330294  ', 'Cédula de extranjería , 1084330294 , JUAN CARLOS  , MARIN  , calle 48k sur N°5  , 2004-02-22 , certecnica@gmail.com , 123456 , Hombre, 5 , 1 , '),
(2, '2022-12-22 14:05:32.000000', 1, 'Se Creo al empleado caroline  Mejia con documento:78945612', 'Cédula de ciudadanía,78945612,caroline,Mejia,ghjgjhjghj,,prueba@certecnica.com,hjubghy,Mujer,18,1,'),
(4, '2022-12-22 14:55:06.000000', 1, 'Se elimino al empleado con la ID: 29', 'Se elimino toda la informacion relacionada con el empleado de ID 29'),
(6, '2022-12-22 15:31:42.000000', 1, 'Se actualizo la información del empleado JUAN CARLOS  , MARIN  con ID:42', 'JUAN CARLOS  , MARIN  , calle 48k sur N°5  , 2004-02-22 , certecnica@gmail.com ,  , Hombre , 20 , 1'),
(7, '2022-12-22 16:46:34.000000', 1, 'Se actualizo la información del empleado JUAN CARLOS  , MARIN QUISABONI con ID:36', 'JUAN CARLOS  , MARIN QUISABONI , asdasd , 2004-12-14 , juanc.sofi@gmail.com ,  , Hombre , 1 , 4'),
(8, '2022-12-22 19:15:20.000000', 1, 'Se actualizo la información del empleado JUAN CARLOS  , MARIN QUISABONI con ID:36', 'JUAN CARLOS  , MARIN QUISABONI , asdasd , 2004-12-14 , juanc.sofi@gmail.com ,  , Hombre , 12 , 4'),
(9, '2022-12-22 19:19:04.000000', 1, 'Se elimino al empleado con la ID: 25', 'Se elimino toda la informacion relacionada con el empleado de ID 25'),
(10, '2023-01-10 15:49:07.000000', 1, 'Se Creo al empleado sebastian  Mejia con documento:78945612', 'Tarjeta de Identidad,78945612,sebastian,Mejia,casddadad,,juanc@certecnica.com,Millos1806.,Hombre,18,1,'),
(11, '2023-01-18 08:22:14.000000', 1, 'Se Creo al empleado JUAN CARLOS   MARIN QUISABONI con documento:10245678', 'Cédula de ciudadanía,10245678,JUAN CARLOS ,MARIN QUISABONI,dfsf,,certecnica@gmail.com,sdfsf,Hombre,1,1,'),
(12, '2023-01-18 08:29:14.000000', 1, 'Se elimino al empleado con la ID: 45', 'Se elimino toda la informacion relacionada con el empleado de ID 45'),
(13, '2023-01-19 14:42:07.000000', 1, 'Se actualizo la información del empleado juAn , Mejia con ID:44', 'juAn , Mejia , casddadad , 0000-00-00 , juanc@certecnica.com ,  , Hombre , 18 , 1'),
(14, '2023-01-19 16:34:31.000000', 1, 'Se actualizo la información del empleado juAn , Mejia con ID:44', 'juAn , Mejia , casddadad , 0000-00-00 , juanc@certecnica.com ,  , Hombre , 18 , 1'),
(15, '2023-01-20 11:49:01.000000', 1, 'Se actualizo la información del empleado Juan , Mejia con ID:44', 'Juan , Mejia , casddadad , 0000-00-00 , juanc@certecnica.com ,  , Hombre , 18 , 1'),
(16, '2023-01-27 20:33:50.000000', 1, 'Se Creo al empleado jkjdsa  khsas con documento:jdhkshhskdahks', 'Cédula de ciudadanía,jdhkshhskdahks,jkjdsa,khsas,jhdjad,2023-01-24,juan@gmail.com,skjad,Hombre,19,4,'),
(17, '2023-01-27 22:08:42.000000', 1, 'Se Creo al empleado asdasd  asdasd con documento:asdasd', 'Cédula de ciudadanía,asdasd,asdasd,asdasd,adasd,2023-01-25,asdasd@certecnica.com,miloos04.,Hombre,8,3,'),
(18, '2023-01-30 19:48:04.000000', 1, 'Se Creo al empleado adssd  asdasd con documento:asadsd', 'Cédula de extranjería,asadsd,adssd,asdasd,asdasd,2023-01-26,adsd@gmail.com,admin123,Mujer,1,2,'),
(19, '2023-01-30 20:19:28.000000', 1, 'Se Creo al empleado JUAN   MARIN con documento:109866644', 'Tarjeta de Identidad,109866644,JUAN ,MARIN,KASDJAD,2022-12-26,user@name.com,1234567,Hombre,1,1,'),
(20, '2023-01-30 20:19:36.000000', 1, 'Se elimino al empleado con la ID: 49', 'Se elimino toda la informacion relacionada con el empleado de ID 49'),
(21, '2023-02-02 19:22:45.000000', 1, 'Se actualizo la información del empleado JUAN CARLOS  , MARIN  con ID:2', 'JUAN CARLOS  , MARIN  , calle 48k sur N°5  , 2004-02-22 , certecnica@gmail.com ,  , Hombre , 20 , 1'),
(22, '2023-02-03 13:42:03.000000', 1, 'Se Creo al empleado PEPITO  RODRIGUEZ con documento:1010256415', 'Cédula de ciudadanía,1010256415,PEPITO,RODRIGUEZ,CALLE 48 K SUR N°5 N 16,2022-09-29,certecnica.18@gmail.com,123456,Hombre,9,1,'),
(23, '2023-02-03 21:47:48.000000', 1, 'Se actualizo la información del empleado JUAN CARLOS  , MARIN QUISABONI con ID:1', 'JUAN CARLOS  , MARIN QUISABONI , asdasd , 2004-12-14 , juanc.sofi@gmail.com ,  , Hombre , 12 , 1'),
(24, '2023-02-03 21:48:01.000000', 1, 'Se actualizo la información del empleado PEPITO , RODRIGUEZ con ID:3', 'PEPITO , RODRIGUEZ , CALLE 48 K SUR N°5 N 16 , 2022-09-29 , certecnica.18@gmail.com ,  , Hombre , 14 , 1'),
(25, '2023-02-06 21:16:42.000000', 1, 'Se actualizo la información del empleado PEPITO   , RODRIGUEZ con ID:3', 'PEPITO   , RODRIGUEZ , CALLE 48 K SUR N°5 N 16 , 2022-09-29 , certecnica.18@gmail.com ,  , Hombre , 14 , 1'),
(26, '2023-02-06 21:17:00.000000', 1, 'Se actualizo la información del empleado JUAN CARLOS   , MARIN  con ID:2', 'JUAN CARLOS   , MARIN  , calle 48k sur N°5  , 2004-02-22 , certecnica@gmail.com ,  , Hombre , 20 , 1'),
(27, '2023-02-08 14:29:57.000000', 1, 'Se actualizo la información del empleado PEPITO   , RODRIGUEZ con ID:3', 'PEPITO   , RODRIGUEZ , CALLE 48 K SUR N°5 N 16 , 2022-09-29 , certecnica.18@gmail.com ,  , Hombre , 1 , 1'),
(28, '2023-02-08 14:30:03.000000', 1, 'Se actualizo la información del empleado PEPITO   , RODRIGUEZ con ID:3', 'PEPITO   , RODRIGUEZ , CALLE 48 K SUR N°5 N 16 , 2022-09-29 , certecnica.18@gmail.com ,  , Hombre , 8 , 1'),
(29, '2023-02-08 17:36:41.000000', 1, 'Se elimino al empleado con la ID: ', 'Se elimino toda la informacion relacionada con el empleado de ID '),
(30, '2023-02-15 22:40:49.000000', 1, 'Se actualizo la información del empleado PEPITO   , RODRIGUEZ con ID:3', 'PEPITO   , RODRIGUEZ , CALLE 48 K SUR N°5 N 16 , 2022-09-29 , juanc.sofi@gmail.com ,  , Hombre , 8 , 1');

-- --------------------------------------------------------

--
-- Table structure for table `log_sanciones`
--

CREATE TABLE `log_sanciones` (
  `id` int(255) NOT NULL,
  `timestamp` datetime(6) NOT NULL,
  `user_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `data` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log_sanciones`
--

INSERT INTO `log_sanciones` (`id`, `timestamp`, `user_id`, `description`, `data`) VALUES
(5, '2023-01-10 16:31:59.000000', 1, 'Se Creo una sancion al empleado: sebastian Mejia', 'sebastian Mejia , 2023-01-03 , 2023-01-10 , Llegada tartde , el empleado lleva 3 llegadas tarde en una semana  ');

-- --------------------------------------------------------

--
-- Table structure for table `modificacion_cargo`
--

CREATE TABLE `modificacion_cargo` (
  `id` int(11) NOT NULL,
  `EMPLEADO` text NOT NULL,
  `Cargo_anterior` varchar(50) NOT NULL,
  `Cargo_Nuevo` varchar(255) NOT NULL,
  `fecha_modificacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `modificacion_cargo`
--

INSERT INTO `modificacion_cargo` (`id`, `EMPLEADO`, `Cargo_anterior`, `Cargo_Nuevo`, `fecha_modificacion`) VALUES
(75, 'Abelardo Mejia', 'Programador', 'Marketing ', '2022-11-30'),
(77, 'JUAN CARLOS MARIN QUISABONI', 'DIRECTOR TECNICO', 'Diseñador Grafico', '2022-11-30'),
(78, 'JUAN CARLOS MARIN QUISABONI', 'Marketing ', 'DIRECTOR TECNICO', '2022-11-30'),
(79, 'JUAN CARLOS MARIN QUISABONI', 'Programador', 'DIRECTOR OPERATIVO', '2022-12-02'),
(80, 'JUAN CARLOS MARIN QUISABONI', 'Programador', 'Marketing ', '2022-12-13');

-- --------------------------------------------------------

--
-- Table structure for table `motivo`
--

CREATE TABLE `motivo` (
  `id` int(11) NOT NULL,
  `desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `motivo`
--

INSERT INTO `motivo` (`id`, `desc`) VALUES
(1, 'Control o cita medica\n'),
(2, 'Licencia no remunerada'),
(3, 'Calamidad Domestica'),
(4, 'Por motivos personales\r\n'),
(5, 'Licencia Maternidad/Paternidad'),
(6, 'Otro');

-- --------------------------------------------------------

--
-- Table structure for table `nivel_escolaridad`
--

CREATE TABLE `nivel_escolaridad` (
  `id` int(11) NOT NULL,
  `NOMBRE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nivel_escolaridad`
--

INSERT INTO `nivel_escolaridad` (`id`, `NOMBRE`) VALUES
(1, 'TECNICA'),
(2, 'BACHILLER'),
(3, 'PROFESIONAL'),
(4, 'TECNOLOGO');

-- --------------------------------------------------------

--
-- Table structure for table `opciones`
--

CREATE TABLE `opciones` (
  `id_opcion` int(11) NOT NULL,
  `id_pregunta` int(11) NOT NULL,
  `valor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `overtime`
--

CREATE TABLE `overtime` (
  `id` int(11) NOT NULL,
  `employee_id` varchar(15) NOT NULL,
  `hours` double NOT NULL,
  `rate` double NOT NULL,
  `date_overtime` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `overtime`
--

INSERT INTO `overtime` (`id`, `employee_id`, `hours`, `rate`, `date_overtime`) VALUES
(6, '24', 13, 28000, '2022-11-25');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `id` int(11) NOT NULL,
  `description` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`id`, `description`) VALUES
(1, 'PROGRAMADOR'),
(5, 'DIRECTOR TECNICO'),
(8, 'DIRECTOR OPERATIVO'),
(9, 'COORDINADOR CALIDAD Y SST'),
(10, 'DIRECTOR CALIDAD Y SST'),
(11, 'DIRECTOR COMERCIAL'),
(12, 'ASISTENTE ADMINISTRATIVO'),
(13, 'EJECUTIVO COMERCIAL'),
(14, 'ASISTENTE COMERCIAL'),
(15, 'ASISTENTE SERVICIO AL CLIENTE'),
(16, 'COORDINADOR TIC'),
(17, 'ANALISTA SAC'),
(18, 'COORDINADOR DE LABORATORIOS'),
(19, 'DIRECTOR TECNICO'),
(20, 'NUEVO CARGO');

-- --------------------------------------------------------

--
-- Table structure for table `preguntas`
--

CREATE TABLE `preguntas` (
  `id_pregunta` int(11) NOT NULL,
  `id_encuesta` int(11) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `id_tipo_pregunta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `productos_dotacion`
--

CREATE TABLE `productos_dotacion` (
  `id` int(11) NOT NULL,
  `producto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `productos_dotacion`
--

INSERT INTO `productos_dotacion` (`id`, `producto`) VALUES
(1, 'CAMISA'),
(2, 'PANTALON'),
(3, 'CHAQUETA\r\n'),
(4, 'CALZADO'),
(5, 'EPP');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(30) NOT NULL,
  `question` text NOT NULL,
  `frm_option` text NOT NULL,
  `type` varchar(50) NOT NULL,
  `order_by` int(11) NOT NULL,
  `survey_id` int(30) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `frm_option`, `type`, `order_by`, `survey_id`, `date_created`) VALUES
(1, 'Sample Survey Question using Radio Button', '{\"cKWLY\":\"Option 1\",\"esNuP\":\"Option 2\",\"dAWTD\":\"Option 3\",\"eZCpf\":\"Option 4\"}', 'radio_opt', 3, 1, '2020-11-10 12:04:46'),
(2, 'Question for Checkboxes', '{\"qCMGO\":\"Checkbox label 1\",\"JNmhW\":\"Checkbox label 2\",\"zZpTE\":\"Checkbox label 3\",\"dOeJi\":\"Checkbox label 4\"}', 'check_opt', 2, 1, '2020-11-10 12:25:13'),
(4, 'Sample question for the text field', '', 'textfield_s', 1, 1, '2020-11-10 13:34:21');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `eid` text NOT NULL,
  `title` varchar(100) NOT NULL,
  `sahi` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`eid`, `title`, `sahi`, `wrong`, `total`, `date`) VALUES
('5b141b8009cf0', 'Php & Mysqli', 3, 1, 10, '2018-06-03 21:46:56'),
('5b141f1e8399e', 'Ip Networking', 3, 1, 10, '2018-06-03 22:02:22');

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `email` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`email`, `score`, `time`) VALUES
('pinky@gmail.com', 30, '2018-06-03 21:57:45'),
('priyanka@gmail.com', 22, '2018-06-03 21:59:06');

-- --------------------------------------------------------

--
-- Table structure for table `resultados`
--

CREATE TABLE `resultados` (
  `id_resultado` int(11) NOT NULL,
  `id_opcion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `nombre`) VALUES
(1, 'EMPLEADO'),
(2, 'DIRECTOR COMERCIAL'),
(3, 'DIRECTOR ADMINISTRATIVO'),
(4, 'DIRECTOR TECNICO'),
(5, 'DIRECTOR CALIDAD');

-- --------------------------------------------------------

--
-- Table structure for table `salarios`
--

CREATE TABLE `salarios` (
  `id` int(5) NOT NULL,
  `EMPLEADO` varchar(255) NOT NULL,
  `SALARIO_BASICO` varchar(255) NOT NULL,
  `AUX_NO_SALARIAL` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `salarios`
--

INSERT INTO `salarios` (`id`, `EMPLEADO`, `SALARIO_BASICO`, `AUX_NO_SALARIAL`) VALUES
(1, 'JUAN CARLOS MARIN QUISABONI', '600000', '100000');

-- --------------------------------------------------------

--
-- Table structure for table `sanciones`
--

CREATE TABLE `sanciones` (
  `id` int(11) NOT NULL,
  `EMPLEADO` varchar(255) NOT NULL,
  `FECHA_FALLA` date NOT NULL,
  `FECHA_SANCION` date NOT NULL,
  `MOTIVO` varchar(255) NOT NULL,
  `DESCRIPCION` varchar(255) NOT NULL,
  `DOCUMENTO` varchar(255) DEFAULT NULL,
  `Fecha_subida` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanciones`
--

INSERT INTO `sanciones` (`id`, `EMPLEADO`, `FECHA_FALLA`, `FECHA_SANCION`, `MOTIVO`, `DESCRIPCION`, `DOCUMENTO`, `Fecha_subida`) VALUES
(16, 'Abelardo Mejia', '2022-12-23', '2022-12-24', 'Llegada tartde', 'el empleado lleva 3 llegadas tarde en un mes ', 'sanciones/Reporte_cargo_pdf. (19).pdf', '2022-12-01'),
(18, 'JUAN CARLOS MARIN QUISABONI', '2022-12-16', '2022-12-21', 'Inrespeto ', 'El empleador le falto respeto al jefe inmediato', 'sanciones/msedge.exe', '2022-12-01'),
(19, 'JUAN CARLOS MARIN QUISABONI', '2022-12-22', '2022-12-07', 'Acumulación de faltas', 'Lleva acumulado 3 faltas graves ', 'sanciones/20221117_150229_resized.jpg', '2022-12-07'),
(25, 'sebastian Mejia', '2023-01-03', '2023-01-10', 'Llegada tartde', 'el empleado lleva 3 llegadas tarde en una semana ', 'sanciones/PROCESO TECNICO.pdf', '2023-01-10');

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` int(11) NOT NULL,
  `time_in` time NOT NULL,
  `time_out` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `time_in`, `time_out`) VALUES
(1, '07:00:00', '16:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `schedule_list`
--

CREATE TABLE `schedule_list` (
  `id` int(30) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `start_datetime` datetime NOT NULL,
  `end_datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule_list`
--

INSERT INTO `schedule_list` (`id`, `title`, `description`, `start_datetime`, `end_datetime`) VALUES
(5, 'sdad', 'asdsd', '2022-12-09 02:05:00', '2022-12-15 02:04:00');

-- --------------------------------------------------------

--
-- Table structure for table `solicitudes`
--

CREATE TABLE `solicitudes` (
  `id` int(11) NOT NULL,
  `emplead` varchar(255) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `Motivo` varchar(255) NOT NULL,
  `fecha_inicio` datetime NOT NULL,
  `fecha_fin` datetime NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `aprobacion_GH` varchar(255) NOT NULL,
  `estado_JF` varchar(255) NOT NULL,
  `estado_DA` varchar(255) NOT NULL COMMENT 'DIRECTOR ADMNISTRATIVO',
  `comentario_GH` varchar(255) NOT NULL,
  `comentario_JF` varchar(255) NOT NULL,
  `comentario_DA` varchar(255) NOT NULL,
  `documento` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `solicitudes`
--

INSERT INTO `solicitudes` (`id`, `emplead`, `id_user`, `Motivo`, `fecha_inicio`, `fecha_fin`, `descripcion`, `aprobacion_GH`, `estado_JF`, `estado_DA`, `comentario_GH`, `comentario_JF`, `comentario_DA`, `documento`) VALUES
(1, 'JUAN CARLOS MARIN QUISABONI', 0, 'control\r\n', '2023-01-23 05:08:00', '2023-01-30 04:06:00', 'SOLICITUD', 'Pendiente', 'Pendiente', 'Pendiente', 'N/A', 'N/A', 'N/A', 'solicitudes/Conseuencias del Chisme en un equipo de trabajo .pptx'),
(2, 'JUAN CARLOS  MARIN QUISABONI', 1, 'control\r\n', '2023-02-07 07:58:00', '2023-02-07 17:15:00', 'Cita de control con pediatra', 'Aceptado', 'Aceptado', 'Pendiente', 'N/A', 'N/A', 'N/A', 'solicitudes/Conseuencias del Chisme en un equipo de trabajo .pptx'),
(3, 'JUAN CARLOS  MARIN QUISABONI', 1, 'licencia', '2023-02-19 10:58:00', '2023-02-07 10:59:00', 'NACIMIENTO', 'Pendiente', 'Aceptado', 'Pendiente', 'No es posible', 'N/A', 'N/A', 'solicitudes/equipo_andres_garcia.pdf'),
(4, 'JUAN CARLOS  MARIN QUISABONI', 1, 'Control o cita medica\r\n', '2023-02-12 09:00:00', '2023-02-09 15:00:00', 'cita medica', 'Pendiente', 'Pendiente', 'Pendiente', 'N/A', 'N/A', 'N/A', 'solicitudes/equipo 2.pdf'),
(5, 'JUAN CARLOS  MARIN QUISABONI', 1, 'Control o cita medica\r\n', '2023-02-16 12:00:00', '2023-02-14 17:15:00', 'Cita medica con mi hijo', 'Rechazada', 'Pendiente', 'Pendiente', 'N/A', 'N/A', 'N/A', 'solicitudes/avatar3.png'),
(6, 'JUAN CARLOS  MARIN QUISABONI', 1, 'Control o cita medica\r\n', '2023-02-15 05:40:00', '2023-02-16 16:50:00', 'Cita médica de urgencia ', 'Pendiente', 'Pendiente', 'Pendiente', 'N/A', 'N/A', 'N/A', 'solicitudes/image.jpg'),
(7, 'JUAN CARLOS  MARIN QUISABONI', 1, 'Control o cita medica\r\n', '2023-02-14 16:13:00', '2023-02-15 17:13:00', 'Cita medica con mi hijo', 'Pendiente', 'Pendiente', 'Pendiente', 'N/A', 'N/A', 'N/A', 'solicitudes/certecnica.2.jpg'),
(8, 'JUAN CARLOS  MARIN QUISABONI', 1, 'Otro', '2023-12-05 10:00:00', '2023-12-05 16:00:00', 'CITA MEDICA', 'Pendiente', 'Pendiente', 'Pendiente', 'N/A', 'N/A', 'N/A', 'solicitudes/Dispositivo_2023021607575.xls'),
(9, 'JUAN CARLOS  MARIN QUISABONI', 1, 'Control o cita medica\r\n', '2023-02-15 10:00:00', '2023-05-01 17:00:00', 'Cita medica con mi hijo', 'Pendiente', 'Pendiente', 'Pendiente', 'N/A', 'N/A', 'N/A', 'solicitudes/gcapi.dll'),
(10, 'JUAN CARLOS  MARIN QUISABONI', 1, 'Licencia no remunerada', '2023-02-16 11:22:00', '2023-02-16 05:28:00', 'aasd', 'Pendiente', 'Pendiente', 'Pendiente', 'N/A', 'N/A', 'N/A', 'solicitudes/Dispositivo_2023021607575.xls'),
(11, 'JUAN CARLOS  MARIN QUISABONI', 1, 'Licencia no remunerada', '2023-02-16 11:24:00', '2023-02-16 11:24:00', 'asdasd', 'Pendiente', 'Pendiente', 'Pendiente', 'N/A', 'N/A', 'N/A', 'solicitudes/Dispositivo_2023021607575.xls'),
(12, 'JUAN CARLOS  MARIN QUISABONI', 1, 'Por motivos personales\r\n', '2023-02-16 11:25:00', '2023-02-16 11:25:00', '', 'Pendiente', 'Pendiente', 'Pendiente', 'N/A', 'N/A', 'N/A', 'solicitudes/PROCESO RECURSOS HUMANOS.vsdx'),
(13, 'JUAN CARLOS  MARIN QUISABONI', 1, 'Calamidad Domestica', '2023-02-16 13:37:00', '2023-02-16 13:37:00', 'aasd', 'Pendiente', 'Pendiente', 'Pendiente', 'N/A', 'N/A', 'N/A', 'solicitudes/Dispositivo_2023021607575.xls'),
(14, 'PEPITO  RODRIGUEZ', NULL, 'Calamidad Domestica', '2023-02-13 00:00:00', '2023-02-17 00:00:00', 'aasd', 'Pendiente', 'Pendiente', 'Pendiente', 'N/A', 'N/A', 'N/A', 'solicitudes/Hoja de cálculo sin título - Hoja 1 (1).csv');

-- --------------------------------------------------------

--
-- Table structure for table `solicitudes_vacaciones`
--

CREATE TABLE `solicitudes_vacaciones` (
  `id` int(11) NOT NULL,
  `empleado` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `solicitudes_vacaciones`
--

INSERT INTO `solicitudes_vacaciones` (`id`, `empleado`, `user_id`, `fecha_inicio`, `fecha_fin`, `descripcion`) VALUES
(1, 'JUAN CARLOS MARIN QUISABONI', 1, '2023-02-01', '2023-02-10', 'operacion');

-- --------------------------------------------------------

--
-- Table structure for table `survey_set`
--

CREATE TABLE `survey_set` (
  `id` int(30) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `user_id` int(30) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `survey_set`
--

INSERT INTO `survey_set` (`id`, `title`, `description`, `user_id`, `start_date`, `end_date`, `date_created`) VALUES
(1, 'Sample Survey', 'Sample Only', 0, '2020-11-06', '2020-12-10', '2020-11-10 09:57:47'),
(2, 'Survey 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in tempus turpis, sed fermentum risus. Praesent vitae velit rutrum, dictum massa nec, pharetra felis. Phasellus enim augue, laoreet in accumsan dictum, mollis nec lectus. ', 0, '2020-10-15', '2020-12-30', '2020-11-10 14:12:09'),
(3, 'Survey 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in tempus turpis, sed fermentum risus. Praesent vitae velit rutrum, dictum massa nec, pharetra felis. ', 0, '2020-09-01', '2020-11-27', '2020-11-10 14:12:33'),
(4, 'Survey 23', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in tempus turpis, sed fermentum risus. Praesent vitae velit rutrum, dictum massa nec, pharetra felis. ', 0, '2020-09-10', '2020-11-27', '2020-11-10 14:14:03'),
(5, 'Sample Survey 101', 'Sample only', 0, '2020-10-01', '2020-11-23', '2020-11-10 14:14:29');

-- --------------------------------------------------------

--
-- Table structure for table `temas`
--

CREATE TABLE `temas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `temas`
--

INSERT INTO `temas` (`id`, `nombre`) VALUES
(44, 'Procesos comerciales'),
(49, 'Procesos comerciales-3'),
(50, 'PRUEBA INDUCCION'),
(51, 'Gestion Humana');

-- --------------------------------------------------------

--
-- Table structure for table `tipo_contrato`
--

CREATE TABLE `tipo_contrato` (
  `id` int(11) NOT NULL,
  `NOMBRE` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tipo_contrato`
--

INSERT INTO `tipo_contrato` (`id`, `NOMBRE`) VALUES
(1, 'INDEFINIDO'),
(2, 'OBRA LABOR'),
(3, 'TERMINO FIJO'),
(4, 'APRENDIZAJE');

-- --------------------------------------------------------

--
-- Table structure for table `tipo_documento`
--

CREATE TABLE `tipo_documento` (
  `id` int(11) NOT NULL,
  `NOMBRE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tipo_documento`
--

INSERT INTO `tipo_documento` (`id`, `NOMBRE`) VALUES
(1, 'HOJA DE VIDA'),
(2, 'CERTIFICADO EPS'),
(3, 'CEDULA');

-- --------------------------------------------------------

--
-- Table structure for table `tipo_pregunta`
--

CREATE TABLE `tipo_pregunta` (
  `id_tipo_pregunta` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `tipo_pregunta`
--

INSERT INTO `tipo_pregunta` (`id_tipo_pregunta`, `nombre`, `descripcion`) VALUES
(1, 'Selección múltiple', 'Se podrá escoger solo una opción\nelemento input type radio'),
(2, 'Desplegable', 'Se podrá escoger una opción\nElemento select y option'),
(3, 'Casilla de verificación', 'Se podrá escoger más de una opción\ninput type checkbox'),
(4, 'Texto', 'Se almacenara la respuesta');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios_encuestas`
--

CREATE TABLE `usuarios_encuestas` (
  `id_usuario` varchar(15) NOT NULL,
  `id_encuesta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vacaciones`
--

CREATE TABLE `vacaciones` (
  `id` int(11) NOT NULL,
  `empleado` varchar(255) NOT NULL,
  `fecha_contratacion` date NOT NULL,
  `periodo_2017` date NOT NULL,
  `periodo_2018` date NOT NULL,
  `periodo_2019` date NOT NULL,
  `periodo_2020` date NOT NULL,
  `periodo_2021` date NOT NULL,
  `periodo_2022` date NOT NULL,
  `periodo_2023` date NOT NULL,
  `periodo_2024` date NOT NULL,
  `periodo_2025` date NOT NULL,
  `dias_solicitados` int(255) NOT NULL,
  `dias_totales` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vacaciones`
--

INSERT INTO `vacaciones` (`id`, `empleado`, `fecha_contratacion`, `periodo_2017`, `periodo_2018`, `periodo_2019`, `periodo_2020`, `periodo_2021`, `periodo_2022`, `periodo_2023`, `periodo_2024`, `periodo_2025`, `dias_solicitados`, `dias_totales`) VALUES
(1, 'JUAN CARLOS MARIN QUISABONI', '2022-10-24', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 0, 0),
(2, 'JUAN CARLOS MARIN QUISABONI', '2023-01-01', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 5, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `afp`
--
ALTER TABLE `afp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `arl`
--
ALTER TABLE `arl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beneficiarios`
--
ALTER TABLE `beneficiarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cashadvance`
--
ALTER TABLE `cashadvance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cesantias`
--
ALTER TABLE `cesantias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_tbl`
--
ALTER TABLE `course_tbl`
  ADD PRIMARY KEY (`cou_id`);

--
-- Indexes for table `cuestionarios`
--
ALTER TABLE `cuestionarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deductions`
--
ALTER TABLE `deductions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dotacion`
--
ALTER TABLE `dotacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ID_EMPLEADO` (`EMPLEADO`),
  ADD KEY `ID_EMPLEADO_2` (`EMPLEADO`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `encuestas`
--
ALTER TABLE `encuestas`
  ADD PRIMARY KEY (`id_encuesta`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indexes for table `entrega_dotacion`
--
ALTER TABLE `entrega_dotacion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eps`
--
ALTER TABLE `eps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `estadisticas`
--
ALTER TABLE `estadisticas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eventoscalendar`
--
ALTER TABLE `eventoscalendar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `examen`
--
ALTER TABLE `examen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_answers`
--
ALTER TABLE `exam_answers`
  ADD PRIMARY KEY (`exans_id`);

--
-- Indexes for table `exam_attempt`
--
ALTER TABLE `exam_attempt`
  ADD PRIMARY KEY (`examat_id`);

--
-- Indexes for table `exam_question_tbl`
--
ALTER TABLE `exam_question_tbl`
  ADD PRIMARY KEY (`eqt_id`);

--
-- Indexes for table `exam_tbl`
--
ALTER TABLE `exam_tbl`
  ADD PRIMARY KEY (`ex_id`);

--
-- Indexes for table `feedbacks_tbl`
--
ALTER TABLE `feedbacks_tbl`
  ADD PRIMARY KEY (`fb_id`);

--
-- Indexes for table `informacion_empleado`
--
ALTER TABLE `informacion_empleado`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `llegadas`
--
ALTER TABLE `llegadas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_admin`
--
ALTER TABLE `log_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_cargos`
--
ALTER TABLE `log_cargos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_cashadvance`
--
ALTER TABLE `log_cashadvance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_employees`
--
ALTER TABLE `log_employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_sanciones`
--
ALTER TABLE `log_sanciones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modificacion_cargo`
--
ALTER TABLE `modificacion_cargo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `motivo`
--
ALTER TABLE `motivo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nivel_escolaridad`
--
ALTER TABLE `nivel_escolaridad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `opciones`
--
ALTER TABLE `opciones`
  ADD PRIMARY KEY (`id_opcion`),
  ADD KEY `id_pregunta` (`id_pregunta`);

--
-- Indexes for table `overtime`
--
ALTER TABLE `overtime`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`id_pregunta`),
  ADD KEY `id_encuesta` (`id_encuesta`),
  ADD KEY `id_tipo_pregunta` (`id_tipo_pregunta`);

--
-- Indexes for table `productos_dotacion`
--
ALTER TABLE `productos_dotacion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resultados`
--
ALTER TABLE `resultados`
  ADD PRIMARY KEY (`id_resultado`),
  ADD KEY `id_opcion` (`id_opcion`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salarios`
--
ALTER TABLE `salarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanciones`
--
ALTER TABLE `sanciones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule_list`
--
ALTER TABLE `schedule_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `solicitudes`
--
ALTER TABLE `solicitudes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `solicitudes_vacaciones`
--
ALTER TABLE `solicitudes_vacaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `survey_set`
--
ALTER TABLE `survey_set`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temas`
--
ALTER TABLE `temas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipo_contrato`
--
ALTER TABLE `tipo_contrato`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipo_documento`
--
ALTER TABLE `tipo_documento`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipo_pregunta`
--
ALTER TABLE `tipo_pregunta`
  ADD PRIMARY KEY (`id_tipo_pregunta`);

--
-- Indexes for table `usuarios_encuestas`
--
ALTER TABLE `usuarios_encuestas`
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_encuesta` (`id_encuesta`);

--
-- Indexes for table `vacaciones`
--
ALTER TABLE `vacaciones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `afp`
--
ALTER TABLE `afp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `arl`
--
ALTER TABLE `arl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `beneficiarios`
--
ALTER TABLE `beneficiarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `cashadvance`
--
ALTER TABLE `cashadvance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cesantias`
--
ALTER TABLE `cesantias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `course_tbl`
--
ALTER TABLE `course_tbl`
  MODIFY `cou_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `cuestionarios`
--
ALTER TABLE `cuestionarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `deductions`
--
ALTER TABLE `deductions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `documentos`
--
ALTER TABLE `documentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `dotacion`
--
ALTER TABLE `dotacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `encuestas`
--
ALTER TABLE `encuestas`
  MODIFY `id_encuesta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `entrega_dotacion`
--
ALTER TABLE `entrega_dotacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `eps`
--
ALTER TABLE `eps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `estadisticas`
--
ALTER TABLE `estadisticas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `eventoscalendar`
--
ALTER TABLE `eventoscalendar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `examen`
--
ALTER TABLE `examen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `exam_answers`
--
ALTER TABLE `exam_answers`
  MODIFY `exans_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=335;

--
-- AUTO_INCREMENT for table `exam_attempt`
--
ALTER TABLE `exam_attempt`
  MODIFY `examat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `exam_question_tbl`
--
ALTER TABLE `exam_question_tbl`
  MODIFY `eqt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `exam_tbl`
--
ALTER TABLE `exam_tbl`
  MODIFY `ex_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `feedbacks_tbl`
--
ALTER TABLE `feedbacks_tbl`
  MODIFY `fb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `informacion_empleado`
--
ALTER TABLE `informacion_empleado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `llegadas`
--
ALTER TABLE `llegadas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `log_admin`
--
ALTER TABLE `log_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `log_cargos`
--
ALTER TABLE `log_cargos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log_cashadvance`
--
ALTER TABLE `log_cashadvance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `log_employees`
--
ALTER TABLE `log_employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `log_sanciones`
--
ALTER TABLE `log_sanciones`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `modificacion_cargo`
--
ALTER TABLE `modificacion_cargo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `motivo`
--
ALTER TABLE `motivo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `nivel_escolaridad`
--
ALTER TABLE `nivel_escolaridad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `opciones`
--
ALTER TABLE `opciones`
  MODIFY `id_opcion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `overtime`
--
ALTER TABLE `overtime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `id_pregunta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `productos_dotacion`
--
ALTER TABLE `productos_dotacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `resultados`
--
ALTER TABLE `resultados`
  MODIFY `id_resultado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `salarios`
--
ALTER TABLE `salarios`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `sanciones`
--
ALTER TABLE `sanciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `schedule_list`
--
ALTER TABLE `schedule_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `solicitudes`
--
ALTER TABLE `solicitudes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `solicitudes_vacaciones`
--
ALTER TABLE `solicitudes_vacaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `survey_set`
--
ALTER TABLE `survey_set`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `temas`
--
ALTER TABLE `temas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `tipo_contrato`
--
ALTER TABLE `tipo_contrato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tipo_documento`
--
ALTER TABLE `tipo_documento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tipo_pregunta`
--
ALTER TABLE `tipo_pregunta`
  MODIFY `id_tipo_pregunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vacaciones`
--
ALTER TABLE `vacaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `resultados`
--
ALTER TABLE `resultados`
  ADD CONSTRAINT `resultados_ibfk_1` FOREIGN KEY (`id_opcion`) REFERENCES `opciones` (`id_opcion`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
