-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 27-04-2020 a las 23:41:39
-- Versión del servidor: 5.7.27-0ubuntu0.18.04.1
-- Versión de PHP: 7.1.31-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ittg_evidencias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignaciones`
--

CREATE TABLE `asignaciones` (
  `id` int(11) NOT NULL,
  `cuando_entrego` timestamp NULL DEFAULT NULL,
  `calificacion` float DEFAULT NULL,
  `observaciones` varchar(100) DEFAULT NULL,
  `archivo_entregado` varchar(100) DEFAULT NULL,
  `quien_entrega` bigint(20) UNSIGNED NOT NULL,
  `que_entrega` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `asignaciones`
--

INSERT INTO `asignaciones` (`id`, `cuando_entrego`, `calificacion`, `observaciones`, `archivo_entregado`, `quien_entrega`, `que_entrega`) VALUES
(3, '2020-04-27 23:03:00', NULL, NULL, '3_5_Routes.pdf', 3, 5),
(4, '2020-04-27 23:22:00', NULL, NULL, '3_4_Routes.pdf', 3, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aspectos`
--

CREATE TABLE `aspectos` (
  `id` int(11) NOT NULL,
  `rubrica_id` int(11) NOT NULL,
  `criterio` varchar(45) DEFAULT NULL,
  `ponderacion` float DEFAULT NULL,
  `aceptacion_optima` varchar(200) DEFAULT NULL,
  `aceptacion_media` varchar(200) DEFAULT NULL,
  `aceptacion_nula` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `aspectos`
--

INSERT INTO `aspectos` (`id`, `rubrica_id`, `criterio`, `ponderacion`, `aceptacion_optima`, `aceptacion_media`, `aceptacion_nula`) VALUES
(2, 1, 'Identificación', 2.5, 'Se identifica completamente', 'a medias', 'No se identifica completamente'),
(3, 1, 'Temporalidad', 2.5, 'Se identifica completamente', 'a medias', 'No se identifica completamente'),
(4, 1, 'Aprendizaje', 22.5, 'optimo', 'medio', 'nulo'),
(6, 1, 'Saberes', 37.5, '1', '2', '3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `periodo` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grupo` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombre` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `descripcion` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unidades` int(11) DEFAULT NULL,
  `activo` tinyint(1) DEFAULT '0',
  `docente_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id`, `periodo`, `grupo`, `nombre`, `fecha_inicio`, `fecha_fin`, `descripcion`, `unidades`, `activo`, `docente_id`) VALUES
(1, NULL, 's8a', 'Programación con frameworks', '2020-03-23', '2020-06-01', 'Usar LARAVEL y otras practicas de programación web', 4, 0, 1),
(2, NULL, 's8a', 'Matemáticas', '2020-03-23', '2020-06-01', 'Matemáticas', 4, 0, 2),
(3, NULL, 's8b', 'Programación con frameworks', '2020-03-23', '2020-06-01', 'Usar LARAVEL y otras practicas de programación web', 4, 1, 1),
(4, NULL, 's9a', 'Programación con frameworks 19', '2019-08-05', '2019-12-20', 'Usar Laravel', 4, 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso_estudiante`
--

CREATE TABLE `curso_estudiante` (
  `id` int(10) UNSIGNED NOT NULL,
  `curso_id` bigint(20) UNSIGNED NOT NULL,
  `estudiante_id` bigint(20) UNSIGNED NOT NULL,
  `calificacion_final` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `curso_estudiante`
--

INSERT INTO `curso_estudiante` (`id`, `curso_id`, `estudiante_id`, `calificacion_final`) VALUES
(1, 3, 3, NULL),
(2, 3, 4, NULL),
(3, 4, 3, 'N.A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evidencias`
--

CREATE TABLE `evidencias` (
  `id` int(11) NOT NULL,
  `dejado_en` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(45) DEFAULT NULL,
  `rubrica_usada` int(11) NOT NULL,
  `unidad` int(11) NOT NULL,
  `fundamentos` varchar(300) DEFAULT NULL,
  `desarrollo` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `evidencias`
--

INSERT INTO `evidencias` (`id`, `dejado_en`, `titulo`, `rubrica_usada`, `unidad`, `fundamentos`, `desarrollo`) VALUES
(1, 1, '101', 1, 1, '1', '1'),
(4, 3, '101', 1, 1, 'i1', 'd1'),
(5, 3, '102', 1, 1, 'i2', 'd2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_04_01_000000_create_password_resets_table', 1),
(2, '2020_04_01_000001_create_users_table', 1),
(3, '2020_04_01_000002_create_failed_jobs_table', 1),
(4, '2020_04_01_000004_create_cursos_table', 1),
(5, '2020_04_01_000005_create_curso_estudiante_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rubricas`
--

CREATE TABLE `rubricas` (
  `id` int(11) NOT NULL,
  `tipo_de` varchar(45) DEFAULT NULL,
  `autor` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rubricas`
--

INSERT INTO `rubricas` (`id`, `tipo_de`, `autor`) VALUES
(1, 'Rubrica de investigación.', 1),
(2, 'Rubrica de desarrollo.', 1),
(3, 'Rubrica de entrevista', 1),
(4, 'Rubrica de Prototipo', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rol` enum('estudiante','docente') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `rol`, `created_at`, `updated_at`) VALUES
(1, 'Jorge Octavio Guzmán Sánchez', 'jguzman@ittg.edu.mx', NULL, '$2y$10$78COsUCTvDYb6bf0WcO33eXnk3367zKzkCw78V7/9MEtzEsoN0Yq6', NULL, 'docente', NULL, NULL),
(2, 'Sergio Guzmán Sánchez', 'sguzman@ittg.edu.mx', NULL, '$2y$10$fhpqIIsw2fq8WDlDqU/k2egL63hfbfxeb9TH46592ZGHAAsoeWgN2', NULL, 'docente', NULL, NULL),
(3, 'Estudainte 1 Guzmán Sánchez', 'e1guzman@ittg.edu.mx', NULL, '$2y$10$/VXb3bbzNwhFy4KgCYZjt.4hkuBd26zk8c.Qm9ldozwsmwsJRhuC.', NULL, 'estudiante', NULL, NULL),
(4, 'Estudainte 2 Guzmán Sánchez', 'e2guzman@ittg.edu.mx', NULL, '$2y$10$yEGr0YolKO5a7.usSTPdeOfxVLrTe6ZmxZMSlWHdd/ZzADlVHYzgC', NULL, 'estudiante', NULL, NULL),
(5, 'Estudainte 3 Guzmán Sánchez', 'e3guzman@ittg.edu.mx', NULL, '$2y$10$dakJCfguUTNwn8k6M4hlzOMQyCu9hT5WAEnNQg8dJnxd1MjTZHF3a', NULL, 'estudiante', NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asignaciones`
--
ALTER TABLE `asignaciones`
  ADD PRIMARY KEY (`id`,`quien_entrega`,`que_entrega`),
  ADD KEY `fk_asignaciones_users1_idx` (`quien_entrega`),
  ADD KEY `fk_asignaciones_evidencias1_idx` (`que_entrega`);

--
-- Indices de la tabla `aspectos`
--
ALTER TABLE `aspectos`
  ADD PRIMARY KEY (`id`,`rubrica_id`),
  ADD KEY `fk_aspectos_rubricas2_idx` (`rubrica_id`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cursos_users1_idx` (`docente_id`);

--
-- Indices de la tabla `curso_estudiante`
--
ALTER TABLE `curso_estudiante`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_curso_estudiante_cursos1_idx` (`curso_id`),
  ADD KEY `fk_curso_estudiante_users1_idx` (`estudiante_id`);

--
-- Indices de la tabla `evidencias`
--
ALTER TABLE `evidencias`
  ADD PRIMARY KEY (`id`,`dejado_en`,`rubrica_usada`),
  ADD UNIQUE KEY `titulo_UNIQUE` (`dejado_en`,`titulo`) USING BTREE,
  ADD KEY `fk_evidencias_cursos1_idx` (`dejado_en`),
  ADD KEY `fk_evidencias_rubricas1_idx` (`rubrica_usada`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `rubricas`
--
ALTER TABLE `rubricas`
  ADD PRIMARY KEY (`id`,`autor`),
  ADD KEY `fk_rubricas_users1_idx1` (`autor`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asignaciones`
--
ALTER TABLE `asignaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `aspectos`
--
ALTER TABLE `aspectos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `curso_estudiante`
--
ALTER TABLE `curso_estudiante`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `evidencias`
--
ALTER TABLE `evidencias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `rubricas`
--
ALTER TABLE `rubricas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asignaciones`
--
ALTER TABLE `asignaciones`
  ADD CONSTRAINT `fk_asignaciones_evidencias1` FOREIGN KEY (`que_entrega`) REFERENCES `evidencias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_asignaciones_users1` FOREIGN KEY (`quien_entrega`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `aspectos`
--
ALTER TABLE `aspectos`
  ADD CONSTRAINT `fk_aspectos_rubricas2` FOREIGN KEY (`rubrica_id`) REFERENCES `rubricas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `curso_estudiante`
--
ALTER TABLE `curso_estudiante`
  ADD CONSTRAINT `fk_curso_estudiante_cursos1_idx` FOREIGN KEY (`curso_id`) REFERENCES `cursos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `evidencias`
--
ALTER TABLE `evidencias`
  ADD CONSTRAINT `fk_evidencias_cursos1` FOREIGN KEY (`dejado_en`) REFERENCES `cursos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_evidencias_rubricas1` FOREIGN KEY (`rubrica_usada`) REFERENCES `rubricas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `rubricas`
--
ALTER TABLE `rubricas`
  ADD CONSTRAINT `fk_rubricas_users1` FOREIGN KEY (`autor`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
