-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2023 at 11:02 PM
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
(19, 'asdasd', '$2y$10$DiUqNqmJJ28eFYdL4eNcRuoxs6TQroeZaONniWO6ex54eZloHifCi', 'asdasd', 'asdasd', 'quien-quiere-ser-millonario2021-10-.pptx', '2023-01-27'),
(20, 'juan@certecnica.com', '$2y$10$IeaKKbPAg5zos4NrzNZCJOsk76NhRviRvow.5TSET.wdqlHWWKn3u', 'asad', 'adasd', 'BASE DE DATOS CORREGIDA.docx', '2023-02-24');

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
(30, '2023-01-10', '2', 1000, 2, '1000', '2022-06-10', 'universitarios'),
(31, '2023-02-17', '2', 0, 2, '5000', '2023-10-05', 'ESTUDIOS'),
(32, '2023-02-17', '2', 0, 2, '5000', '2023-02-28', 'ESTUDIOS'),
(33, '2023-02-17', '2', 0, 3, '5000', '2023-03-05', 'ESTUDIOS');

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
  `contact_info` varchar(100) DEFAULT NULL,
  `contraseña` varchar(255) DEFAULT NULL,
  `gender` varchar(10) NOT NULL,
  `position_id` int(11) NOT NULL,
  `schedule_id` int(11) NOT NULL,
  `area` varchar(255) NOT NULL,
  `fecha_contratacion` date NOT NULL,
  `photo` varchar(200) NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `tipo_documento`, `employee_id`, `firstname`, `lastname`, `address`, `birthdate`, `contact_info`, `contraseña`, `gender`, `position_id`, `schedule_id`, `area`, `fecha_contratacion`, `photo`, `created_on`) VALUES
(1, 'Tarjeta de Identidad', '1084555415	', 'JUAN CARLOS', 'MARIN QUISABONI', 'asdasd', '2004-12-14', 'directorcomercial@certecnica.com', '$2y$10$V.B5KfMH7.FtFZqTedgieeOD7ryuNLU9cuncvDR/Dslw/Ce3g0fLq', 'Hombre', 16, 1, 'COMERCIAL', '2022-02-15', 'avatar3.png', '2022-12-12'),
(2, 'Cédula de extranjería', '1084330294', 'JUAN CARLOS  ', 'MARIN ', 'calle 48k sur N°5 ', '2004-02-22', 'directortecnico@certecnica.com', '$2y$10$Yob7If9R7Y0CI9A4iiTXwu.DURDOXROqIgNRg2gmnef6fCWu5F.f6', 'Hombre', 9, 1, 'ADMINISTRATIVO', '0000-00-00', 'avatar.jpg', '2022-12-22'),
(51, 'Cédula de ciudadanía', '1098345678	', 'PEPITO  ', 'RODRIGUEZ', 'Calle 16L # 5 SUR ', '2019-01-01', 'directoradministrativo@certecnica.com', '$2y$10$q6L1eW3i3IDMdSledZH0.eUmzP9LD6tJ1j/KFYXRNN/dn/6j.qo.i', 'Hombre', 24, 1, 'TECNICA', '0000-00-00', '', '2023-02-24'),
(52, 'Cédula de ciudadanía', '173535356	', 'JHON ', 'MARIN', 'Calle 48k sur # 5L -10', '2017-05-16', 'directorcalidad@certecnica.com', '$2y$10$NPbhnF.f.7vn4ZGV4HWkgOwJMBlXI6L9Cpt6VXJG.sVWAIsrSnQH6', 'Hombre', 21, 1, 'ADMINISTRATIVA', '0000-00-00', '', '2023-02-24'),
(53, 'Cédula de ciudadanía', '12678956	', 'CARLOS', 'PEREZ', 'calle 17 # 25-16', '2007-06-20', 'subgerencia@certecnica.com', '$2y$10$NPbhnF.f.7vn4ZGV4HWkgOwJMBlXI6L9Cpt6VXJG.sVWAIsrSnQH6', 'Hombre', 2, 1, 'COMERCIAL', '0000-00-00', '', '2023-02-27'),
(54, 'Cédula de ciudadanía', '12678956	', 'desarrollo', 'certecnica', 'Calle 48L #5a-16', '2023-02-15', 'empleado@certecnica.com', '$2y$10$Yob7If9R7Y0CI9A4iiTXwu.DURDOXROqIgNRg2gmnef6fCWu5F.f6', 'Hombre', 18, 1, 'CALIDAD', '0000-00-00', '', '2023-02-27');

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
-- Table structure for table `estado_prestamo`
--

CREATE TABLE `estado_prestamo` (
  `id` int(11) NOT NULL,
  `estado` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `estado_prestamo`
--

INSERT INTO `estado_prestamo` (`id`, `estado`) VALUES
(1, 'FINALIZADO'),
(2, 'EN CURSO');

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
(3, '2023-01-27 22:09:56.000000', 1, 'Se creo al admin  asdasd asdasd', 'asdasd , asdasd , asdasd , asdasdas , quien-quiere-ser-millonario2021-10-.pptx'),
(4, '2023-02-24 14:07:12.000000', 1, 'Se creo al admin  asad adasd', 'asad , adasd , juan@certecnica.com , aaaa , BASE DE DATOS CORREGIDA.docx');

-- --------------------------------------------------------

--
-- Table structure for table `log_beneficiariosid`
--

CREATE TABLE `log_beneficiariosid` (
  `id` int(11) NOT NULL,
  `timestap` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `data` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(23, '2023-02-08 22:21:33', 1, 'Se Creo un avance en efectivo al ID de empleado 107894564645', '1000 , 2 , 500 , 2023-02-08 , ESTUDIO'),
(24, '2023-02-17 20:54:03', 1, 'Se Creo un avance en efectivo al ID de empleado 1084330294', ' , 2 , 5000 , 2023-10-05 , ESTUDIOS'),
(25, '2023-02-17 20:54:33', 1, 'Se Creo un avance en efectivo al ID de empleado 1084330294', ' , 2 , 5000 , 2023-02-28 , ESTUDIOS'),
(26, '2023-02-17 20:55:16', 1, 'Se Creo un avance en efectivo al ID de empleado 1084330294', ' , 3 , 5000 , 2023-03-05 , ESTUDIOS');

-- --------------------------------------------------------

--
-- Table structure for table `log_dotacion`
--

CREATE TABLE `log_dotacion` (
  `id` int(11) NOT NULL,
  `timestap` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `data` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(30, '2023-02-15 22:40:49.000000', 1, 'Se actualizo la información del empleado PEPITO   , RODRIGUEZ con ID:3', 'PEPITO   , RODRIGUEZ , CALLE 48 K SUR N°5 N 16 , 2022-09-29 , juanc.sofi@gmail.com ,  , Hombre , 8 , 1'),
(31, '2023-02-24 17:15:21.000000', 1, 'Se Creo al empleado PEPITO    RODRIGUEZ con documento:1098345678', 'Cédula de ciudadanía,1098345678,PEPITO  ,RODRIGUEZ,Calle 16L # 5 SUR ,2019-01-01,soportetic@certecnica.com,admin123,Hombre,8,1,'),
(32, '2023-02-24 19:30:06.000000', 1, 'Se Creo al empleado JHON   MARIN con documento:173535356', 'Cédula de ciudadanía,173535356,JHON ,MARIN,Calle 48k sur # 5L -10,2017-05-16,certecnica.18@gmail.com,admin123,Hombre,1,1,'),
(33, '2023-02-27 13:42:49.000000', 1, 'Se Creo al empleado CARLOS  PEREZ con documento:12678956', 'Cédula de ciudadanía,12678956,CARLOS,PEREZ,calle 17 # 25-16,2007-06-20,ghumanos@certecnica.com,millos03.,Hombre,9,1,'),
(34, '2023-02-27 14:24:15.000000', 1, 'Se Creo al empleado desarrollo  certecnica con documento:12678956', 'Cédula de ciudadanía,12678956,desarrollo,certecnica,Calle 48L #5a-16,2023-02-15,,,Hombre,18,1,');

-- --------------------------------------------------------

--
-- Table structure for table `log_entrega_dotacion`
--

CREATE TABLE `log_entrega_dotacion` (
  `id` int(11) NOT NULL,
  `timestap` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `data` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Table structure for table `log_solicitudes`
--

CREATE TABLE `log_solicitudes` (
  `id` int(11) NOT NULL,
  `timestap` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `data` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(1, 'GERENTE'),
(2, 'SUBGERENTE'),
(8, 'DIRECTOR OPERATIVO'),
(9, 'DIRECTOR TECNICO'),
(10, 'COORDINADOR DE CERTIFICACIÓN'),
(11, 'AUDITOR'),
(12, 'EXPERTOS TECNICOS'),
(13, 'PROFESIONAL DE CERTIFICACIÓN'),
(14, 'ANALISTA DE CERTIFICACIONES'),
(15, 'COORDINADOR DE LABORATORIOS'),
(16, 'DIRECTOR COMERCIAL'),
(17, 'EJECUTIVO COMERCIAL'),
(18, 'ANALISTA SAC'),
(19, 'ASISTENTE COMERCIAL'),
(20, 'PROFESIONAL DE MERCADEO Y REDES SOCIALES'),
(21, 'DIRECTOR CALIDAD'),
(22, 'COORDINADOR CALIDAD Y SST'),
(23, 'AUDITORES Y EXPERTOS TECNICOS'),
(24, 'DIRECTOR ADMINISTRATIVO Y FINANCIERO'),
(25, 'COORDINADOR TICS'),
(26, 'CONTADOR'),
(27, 'AUXILIAR CONTABLE'),
(28, 'ASISTENTE ADMINISTRATIVO'),
(29, 'AUXILIAR DE SERVICIOS GENERALES'),
(30, 'MENSAJERO');

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
  `area` varchar(255) NOT NULL,
  `position_id` varchar(255) NOT NULL,
  `aprobacion_GH` varchar(255) NOT NULL,
  `estado_JF` varchar(255) NOT NULL,
  `estado_DA` varchar(255) NOT NULL COMMENT 'DIRECTOR ADMNISTRATIVO',
  `comentario_GH` varchar(255) NOT NULL,
  `comentario_JF` varchar(255) NOT NULL,
  `comentario_DA` varchar(255) NOT NULL,
  `documento` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `solicitudes`
--

INSERT INTO `solicitudes` (`id`, `emplead`, `id_user`, `Motivo`, `fecha_inicio`, `fecha_fin`, `descripcion`, `area`, `position_id`, `aprobacion_GH`, `estado_JF`, `estado_DA`, `comentario_GH`, `comentario_JF`, `comentario_DA`, `documento`) VALUES
(2, 'JUAN CARLOS  MARIN QUISABONI', 1, 'control\r\n', '2023-02-07 07:58:00', '2023-02-07 17:15:00', 'Cita de control con pediatra', 'COMERCIAL', '', 'Pendiente', 'Aprobada', 'Aprobada', 'No es posible', 'N/A', 'N/A', 'solicitudes/Conseuencias del Chisme en un equipo de trabajo .pptx'),
(3, 'JUAN CARLOS  MARIN QUISABONI', 53, 'licencia', '2023-02-19 10:58:00', '2023-02-07 10:59:00', 'NACIMIENTO', 'TECNICA', '', 'Aprobada', 'Aprobada', 'Aprobada', 'Rechazado por el motivo de ausencia', 'N/A', 'no es posible jefe', 'solicitudes/equipo_andres_garcia.pdf'),
(7, 'JUAN CARLOS  MARIN QUISABONI', 1, 'Control o cita medica\r\n', '2023-02-14 16:13:00', '2023-02-15 17:13:00', 'Cita medica con mi hijo', 'ADMINISTRATIVA', '', 'Pendiente', 'Aprobada', 'Aprobada', 'N/A', 'N/A', 'N/A', 'solicitudes/certecnica.2.jpg'),
(8, 'JUAN CARLOS  MARIN QUISABONI', 1, 'Otro', '2023-12-05 10:00:00', '2023-12-05 16:00:00', 'CITA MEDICA', 'ADMINISTRATIVA', '', 'Pendiente', 'Rechazada', 'Rechazada', 'N/A', 'No es posible', 'N/A', 'solicitudes/Dispositivo_2023021607575.xls'),
(9, 'JUAN CARLOS  MARIN QUISABONI', 1, 'Control o cita medica\r\n', '2023-02-15 10:00:00', '2023-05-01 17:00:00', 'Cita medica con mi hijo', 'COMERCIAL', '', 'Pendiente', 'Rechazada', 'Pendiente', 'N/A', 'No es posible', 'N/A', 'solicitudes/gcapi.dll'),
(11, 'JUAN CARLOS  MARIN QUISABONI', 1, 'Licencia no remunerada', '2023-02-16 11:24:00', '2023-02-16 11:24:00', 'asdasd', 'COMERCIAL', '', 'Pendiente', 'Aprobada', 'Aprobada', 'N/A', 'N/A', 'N/A', 'solicitudes/Dispositivo_2023021607575.xls'),
(12, 'JUAN CARLOS  MARIN QUISABONI', 1, 'Por motivos personales\r\n', '2023-02-16 11:25:00', '2023-02-16 11:25:00', 'No es posible', 'ADMINISTRATIVA', '', 'Rechazada', 'Aprobada', 'Rechazada', 'No es posible', 'N/A', 'No es posible', 'solicitudes/PROCESO RECURSOS HUMANOS.vsdx'),
(16, 'JUAN CARLOS   MARIN ', 2, 'Control o cita medica\r\n', '2023-02-20 15:45:00', '2023-02-21 15:45:00', 'NACIMIENTO', 'COMERCIAL', '', 'Rechazada', 'RECHAZADA', 'Pendiente', 'NO ES POSIBLE', 'N/A', 'N/A', 'solicitudes/CER-FS-35 V1 Solicitud de permiso.xlsx'),
(17, 'JUAN CARLOS  MARIN QUISABONI', 1, 'Control o cita medica\r\n', '2023-02-28 07:45:00', '2023-02-27 16:50:00', 'Cita medica con mi hijo', 'CALIDAD', '', 'Pendiente', 'Rechazada', 'Pendiente', 'N/A', 'No es posible', 'N/A', 'solicitudes/Hoja de cálculo sin título - Hoja 1 (3).csv'),
(18, 'JUAN CARLOS  MARIN QUISABONI', 1, 'Control o cita medica\r\n', '2023-02-27 08:02:00', '2023-02-27 17:00:00', 'Cita medica con mi hijo', 'COMERCIAL', '', 'Pendiente', 'Aprobada', 'Aprobada', 'N/A', 'N/A', 'N/A', 'solicitudes/Admin Soporte TIC ($oporte.2018) (1).xlsx'),
(19, 'JUAN CARLOS  MARIN QUISABONI', 1, 'Control o cita medica\r\n', '2023-02-27 08:13:00', '2023-02-27 17:15:00', 'CITA MEDICA', 'TECNICA', '11', 'Pendiente', 'Pendiente', 'Pendiente', 'N/A', 'N/A', 'Es rechazado ', 'solicitudes/solicitudes.pdf'),
(20, 'JUAN CARLOS  MARIN QUISABONI', 1, 'Control o cita medica\r\n', '2023-02-20 10:54:00', '2023-02-21 14:58:00', 'aasd', 'COMERCIAL', '11', 'Pendiente', 'Pendiente', 'Pendiente', 'N/A', 'N/A', 'N/A', 'solicitudes/solicitudes.pdf'),
(21, 'CARLOS PEREZ', 53, 'Control o cita medica\r\n', '2023-02-27 07:20:00', '2023-02-27 16:40:00', 'Cita medica con mi hijo', 'COMERCIAL', '9', 'Pendiente', 'Rechazada', 'Pendiente', 'N/A', 'N/A', 'N/A', 'solicitudes/solicitudes.pdf'),
(22, 'JUAN CARLOS MARIN QUISABONI', 1, 'Control o cita medica\r\n', '2023-02-28 09:56:00', '2023-02-28 15:00:00', 'aasd', 'COMERCIAL', '11', 'Pendiente', 'Pendiente', 'Pendiente', 'N/A', 'N/A', 'N/A', ''),
(23, 'CARLOS PEREZ', 53, 'Control o cita medica\r\n', '2023-02-28 10:04:00', '2023-02-28 15:09:00', 'salida', 'COMERCIAL', '9', 'Pendiente', 'Aprobada', 'Aprobada', 'N/A', 'N/A', 'N/A', ''),
(24, 'CARLOS PEREZ', 53, 'Licencia no remunerada', '2023-02-28 10:08:00', '2023-02-28 16:20:00', 'Cita medica con mi hijo', 'COMERCIAL', '9', 'Pendiente', 'Pendiente', 'Pendiente', 'N/A', 'N/A', 'N/A', 'solicitudes/solicitudes.pdf'),
(25, 'JUAN CARLOS MARIN QUISABONI', 1, 'Control o cita medica\r\n', '2023-02-28 01:43:00', '2023-02-28 14:41:00', 'aasd', 'COMERCIAL', '11', 'Pendiente', 'Aprobada', 'Aprobada', 'N/A', 'N/A', 'N/A', ''),
(26, 'JUAN CARLOS MARIN QUISABONI', 1, 'Licencia no remunerada', '2023-02-28 05:50:00', '2023-02-28 15:00:00', 'Cita medica con mi hijo', 'COMERCIAL', '11', 'Pendiente', 'Pendiente', 'Pendiente', 'N/A', 'N/A', 'N/A', 'admin/solicitudes/solicitudes.pdf');

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
-- Table structure for table `solicitud_prestamo`
--

CREATE TABLE `solicitud_prestamo` (
  `id` int(11) NOT NULL,
  `empleado` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL,
  `monto_solicitado` varchar(255) NOT NULL,
  `cuotas` int(11) NOT NULL,
  `valor_cuota_mensual` varchar(255) NOT NULL,
  `fecha_primer_descuento` date NOT NULL,
  `destino_prestamo` varchar(255) NOT NULL,
  `estado_GH` varchar(255) NOT NULL COMMENT 'GH GESTION HUMANA',
  `estado_subgerencia` varchar(255) NOT NULL,
  `estado_DA` varchar(255) NOT NULL COMMENT 'DA DIRECTOR ADMINSTRATIVO',
  `comentario_GH` varchar(255) NOT NULL,
  `comentario_subgerencia` varchar(255) NOT NULL,
  `comentario_DA` varchar(255) NOT NULL,
  `estado_prestamo` varchar(255) NOT NULL,
  `fecha_creacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `solicitud_prestamo`
--

INSERT INTO `solicitud_prestamo` (`id`, `empleado`, `id_user`, `monto_solicitado`, `cuotas`, `valor_cuota_mensual`, `fecha_primer_descuento`, `destino_prestamo`, `estado_GH`, `estado_subgerencia`, `estado_DA`, `comentario_GH`, `comentario_subgerencia`, `comentario_DA`, `estado_prestamo`, `fecha_creacion`) VALUES
(1, 'JUAN CARLOS  MARIN QUISABONI', 1, '10000', 2, '5000', '2023-02-19', 'ESTUDIOS', 'Aceptado', 'Aceptado', 'Aceptado', 'lleva muy poco tiempo', 'N/A', 'N/A', 'EN CURSO', '2023-02-17'),
(2, 'JUAN CARLOS  MARIN QUISABONI', 1, '15000', 2, '4000', '2023-01-04', 'ESTUDIOS', 'Rechazada', 'Aceptado', 'Aceptado', 'abono el total de la deuda', 'N/A', 'N/A', 'FINALIZADO', '2023-02-17'),
(3, 'JUAN CARLOS  MARIN QUISABONI', 1, '10000', 2, '5000', '2023-03-28', 'ESTUDIOS', 'Pendiente', 'Aprobado', 'Aprobado', 'lleva muy poco tiempo', 'N/A', 'N/A', 'FINALIZADO', '2023-02-17'),
(4, 'JUAN CARLOS  MARIN QUISABONI', 1, '50000', 2, '25000', '2023-03-15', 'ESTUDIOS', 'Pendiente', 'Rechazada', 'Aprobado', 'lleva muy poco tiempo', 'N/A', 'N/A', 'FINALIZADO', '2023-02-17'),
(7, 'JUAN CARLOS  MARIN QUISABONI', 2, '2000', 2, '1', '2023-02-14', 'ESTUDIOS', 'Pendiente', 'Pendiente', 'Pendiente', 'N/A', 'N/A', 'N/A', '', '2023-02-21');

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
-- Table structure for table `vacaciones`
--

CREATE TABLE `vacaciones` (
  `id` int(11) NOT NULL,
  `empleado` varchar(255) NOT NULL,
  `fecha_contratacion` date NOT NULL,
  `dias_solicitados` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vacaciones`
--

INSERT INTO `vacaciones` (`id`, `empleado`, `fecha_contratacion`, `dias_solicitados`) VALUES
(1, 'JUAN CARLOS MARIN QUISABONI', '2021-01-21', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `cesantias`
--
ALTER TABLE `cesantias`
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
-- Indexes for table `estado_prestamo`
--
ALTER TABLE `estado_prestamo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eventoscalendar`
--
ALTER TABLE `eventoscalendar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `informacion_empleado`
--
ALTER TABLE `informacion_empleado`
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
-- Indexes for table `log_beneficiariosid`
--
ALTER TABLE `log_beneficiariosid`
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
-- Indexes for table `log_entrega_dotacion`
--
ALTER TABLE `log_entrega_dotacion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_sanciones`
--
ALTER TABLE `log_sanciones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_solicitudes`
--
ALTER TABLE `log_solicitudes`
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
-- Indexes for table `productos_dotacion`
--
ALTER TABLE `productos_dotacion`
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
-- Indexes for table `solicitud_prestamo`
--
ALTER TABLE `solicitud_prestamo`
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
-- Indexes for table `vacaciones`
--
ALTER TABLE `vacaciones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `cesantias`
--
ALTER TABLE `cesantias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

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
-- AUTO_INCREMENT for table `estado_prestamo`
--
ALTER TABLE `estado_prestamo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `eventoscalendar`
--
ALTER TABLE `eventoscalendar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `informacion_empleado`
--
ALTER TABLE `informacion_empleado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `llegadas`
--
ALTER TABLE `llegadas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `log_admin`
--
ALTER TABLE `log_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `log_beneficiariosid`
--
ALTER TABLE `log_beneficiariosid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log_cargos`
--
ALTER TABLE `log_cargos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log_cashadvance`
--
ALTER TABLE `log_cashadvance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `log_employees`
--
ALTER TABLE `log_employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `log_entrega_dotacion`
--
ALTER TABLE `log_entrega_dotacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log_sanciones`
--
ALTER TABLE `log_sanciones`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `log_solicitudes`
--
ALTER TABLE `log_solicitudes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `overtime`
--
ALTER TABLE `overtime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `productos_dotacion`
--
ALTER TABLE `productos_dotacion`
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
-- AUTO_INCREMENT for table `solicitudes`
--
ALTER TABLE `solicitudes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `solicitudes_vacaciones`
--
ALTER TABLE `solicitudes_vacaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `solicitud_prestamo`
--
ALTER TABLE `solicitud_prestamo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
-- AUTO_INCREMENT for table `vacaciones`
--
ALTER TABLE `vacaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
