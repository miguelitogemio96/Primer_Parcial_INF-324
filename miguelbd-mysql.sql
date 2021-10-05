-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 05-10-2021 a las 14:29:32
-- Versión del servidor: 8.0.18
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `miguelbd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE `carreras` (
  `id` int(7) NOT NULL,
  `des` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `extracto` varchar(400) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `texto` varchar(4000) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `img` varchar(10) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`id`, `des`, `extracto`, `texto`, `img`) VALUES
(1, 'Biologia', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo unde voluptates modi delectus maiores molestias omnis dignissimos similique ea optio, sunt praesentium pariatur earum exercitationem perferendis laborum repellendus voluptatibus tempora.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo unde voluptates modi delectus maiores molestias omnis dignissimos similique ea optio, sunt praesentium pariatur earum exercitationem perferendis laborum repellendus voluptatibus tempora.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Quo unde voluptates modi delectus maiores molestias omnis dignissimos similique ea optio, sunt praesentium pariatur earum exercitationem perferendis laborum repellendus voluptatibus tempora.', 'bio.png'),
(2, 'Estadistica', 'Voluptates dolorum facilis aspernatur quasi repellat corrupti quam exercitationem. Debitis, similique eum. Officiis itaque deleniti autem sequi porro quae est cupiditate voluptas.', 'Voluptates dolorum facilis aspernatur quasi repellat corrupti quam exercitationem. Debitis, similique eum. Officiis itaque deleniti autem sequi porro quae est cupiditate voluptas.\r\nVoluptates dolorum facilis aspernatur quasi repellat corrupti quam exercitationem. Debitis, similique eum. Officiis itaque deleniti autem sequi porro quae est cupiditate voluptas.\r\nVoluptates dolorum facilis aspernatur quasi repellat corrupti quam exercitationem. Debitis, similique eum. Officiis itaque deleniti autem sequi porro quae est cupiditate voluptas.', 'est.png'),
(3, 'Física', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo unde voluptates modi delectus maiores molestias omnis dignissimos similique ea optio, sunt praesentium pariatur earum exercitationem perferendis laborum repellendus voluptatibus tempora.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo unde voluptates modi delectus maiores molestias omnis dignissimos similique ea optio, sunt praesentium pariatur earum exercitationem perferendis laborum repellendus voluptatibus tempora.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Quo unde voluptates modi delectus maiores molestias omnis dignissimos similique ea optio, sunt praesentium pariatur earum exercitationem perferendis laborum repellendus voluptatibus tempora.', 'fis.png'),
(4, 'Matemática', 'Voluptates dolorum facilis aspernatur quasi repellat corrupti quam exercitationem. Debitis, similique eum. Officiis itaque deleniti autem sequi porro quae est cupiditate voluptas.', 'Voluptates dolorum facilis aspernatur quasi repellat corrupti quam exercitationem. Debitis, similique eum. Officiis itaque deleniti autem sequi porro quae est cupiditate voluptas.\r\nVoluptates dolorum facilis aspernatur quasi repellat corrupti quam exercitationem. Debitis, similique eum. Officiis itaque deleniti autem sequi porro quae est cupiditate voluptas.\r\nVoluptates dolorum facilis aspernatur quasi repellat corrupti quam exercitationem. Debitis, similique eum. Officiis itaque deleniti autem sequi porro quae est cupiditate voluptas.', 'mat.png'),
(5, 'Informática', 'Voluptates dolorum facilis aspernatur quasi repellat corrupti quam exercitationem. Debitis, similique eum. Officiis itaque deleniti autem sequi porro quae est cupiditate voluptas.', 'Voluptates dolorum facilis aspernatur quasi repellat corrupti quam exercitationem. Debitis, similique eum. Officiis itaque deleniti autem sequi porro quae est cupiditate voluptas.\r\nVoluptates dolorum facilis aspernatur quasi repellat corrupti quam exercitationem. Debitis, similique eum. Officiis itaque deleniti autem sequi porro quae est cupiditate voluptas.\r\nVoluptates dolorum facilis aspernatur quasi repellat corrupti quam exercitationem. Debitis, similique eum. Officiis itaque deleniti autem sequi porro quae est cupiditate voluptas.', 'inf.png'),
(6, 'Química', 'Voluptates dolorum facilis aspernatur quasi repellat corrupti quam exercitationem. Debitis, similique eum. Officiis itaque deleniti autem sequi porro quae est cupiditate voluptas.', 'Voluptates dolorum facilis aspernatur quasi repellat corrupti quam exercitationem. Debitis, similique eum. Officiis itaque deleniti autem sequi porro quae est cupiditate voluptas.\r\nVoluptates dolorum facilis aspernatur quasi repellat corrupti quam exercitationem. Debitis, similique eum. Officiis itaque deleniti autem sequi porro quae est cupiditate voluptas.\r\nVoluptates dolorum facilis aspernatur quasi repellat corrupti quam exercitationem. Debitis, similique eum. Officiis itaque deleniti autem sequi porro quae est cupiditate voluptas.', 'qmq.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE `notas` (
  `ci` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `sigla` varchar(7) COLLATE utf8mb4_general_ci NOT NULL,
  `nota1` int(11) NOT NULL,
  `nota2` int(11) NOT NULL,
  `nota3` int(11) NOT NULL,
  `notaf` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `notas`
--

INSERT INTO `notas` (`ci`, `sigla`, `nota1`, `nota2`, `nota3`, `notaf`) VALUES
('10101010', 'inf-111', 69, 80, 36, 62),
('10101010', 'inf-112', 90, 40, 48, 59),
('10101010', 'inf-113', 45, 74, 37, 52),
('10101010', 'inf-114', 69, 53, 82, 68),
('20202020', 'inf-111', 51, 74, 61, 62),
('20202020', 'inf-112', 20, 48, 46, 38),
('20202020', 'inf-113', 0, 70, 96, 55),
('20202020', 'inf-114', 76, 80, 60, 72),
('30303030', 'inf-111', 76, 53, 95, 75),
('30303030', 'inf-112', 45, 55, 72, 57),
('40404040', 'inf-111', 87, 47, 81, 72),
('40404040', 'inf-112', 13, 84, 75, 57),
('50505050', 'inf-111', 76, 64, 84, 74),
('50505050', 'inf-112', 23, 27, 90, 47),
('60606060', 'inf-111', 45, 74, 54, 58),
('60606060', 'inf-112', 87, 83, 34, 68),
('70707070', 'inf-111', 72, 67, 65, 68),
('70707070', 'inf-112', 38, 80, 86, 68);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `ci` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `fnacimiento` date NOT NULL,
  `departamento` varchar(2) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`ci`, `nombre`, `fnacimiento`, `departamento`) VALUES
('10101010', 'Jose Miguel Gemio Quispe', '1996-12-14', '02'),
('1234567', 'Moises Martin Silva Choque', '1977-12-14', '03'),
('20202020', 'Juan Gabriel Perez Pereira', '1994-05-14', '02'),
('30303030', 'Alan Brito Delgado', '1997-11-24', '03'),
('40404040', 'Elsa Pato', '1995-01-07', '03'),
('50505050', 'Zacarias Flores del Campo', '1992-08-19', '07'),
('60606060', 'Lola Mento', '1996-12-14', '07'),
('70707070', 'Helen Chufer', '1999-04-27', '07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ci` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `usuario` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(400) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tipo` varchar(1) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ci`, `usuario`, `password`, `tipo`) VALUES
('10101010', 'miguelgemio', '43102984a36d9196dd2d92cf10de63cd44226bcc6f8e5135a9780a9c8303a44fb687ba6134b4d4b68259aac57d7ff0f2ab6ca877019b75752dda8cf03a1c18ac', 'e'),
('1234567', 'moyosilva', 'e13efc991a9bf44bbb4da87cdbb725240184585ccaf270523170e008cf2a3b85f45f86c3da647f69780fb9e971caf5437b3d06d418355a68c9760c70a31d05c7', 'd');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`ci`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ci`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carreras`
--
ALTER TABLE `carreras`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
