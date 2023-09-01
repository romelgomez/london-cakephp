-- phpMyAdmin SQL Dump
-- version 3.3.7deb5build0.10.10.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 30-06-2011 a las 20:47:33
-- Versión del servidor: 5.1.49
-- Versión de PHP: 5.3.3-1ubuntu9.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `london`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `question_id` int(11) unsigned NOT NULL,
  `answer` varchar(1000) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `answers`
--

INSERT INTO `answers` (`id`, `question_id`, `answer`, `created`, `modified`) VALUES
(1, 1, 'viernes', NULL, NULL),
(2, 2, 'me puede dar un resfriado', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) unsigned DEFAULT NULL,
  `user_id` int(11) unsigned DEFAULT NULL,
  `product_id` int(11) unsigned NOT NULL,
  `quantity` int(3) unsigned NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `cart`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `size` varchar(10) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Volcar la base de datos para la tabla `images`
--

INSERT INTO `images` (`id`, `product_id`, `size`, `name`, `created`, `modified`) VALUES
(1, 2, '270x270px', 'ducati_monster0.jpg', '2011-01-04 20:07:31', '2011-01-04 20:07:31'),
(2, 2, '482x362px', 'ducati_monster1.jpg', '2011-01-04 20:07:31', '2011-01-04 20:07:31'),
(3, 2, '120x120px', 'ducati_monster2.jpg', '2011-01-04 20:07:31', '2011-01-04 20:07:31'),
(4, 2, '900x600px', 'ducati_monster3.jpg', '2011-01-04 20:07:31', '2011-01-04 20:07:31'),
(5, 2, '270x270px', 'gardel10-hp0.jpg', '2011-01-04 20:09:26', '2011-01-04 20:09:26'),
(6, 2, '482x362px', 'gardel10-hp1.jpg', '2011-01-04 20:09:26', '2011-01-04 20:09:26'),
(7, 2, '120x120px', 'gardel10-hp2.jpg', '2011-01-04 20:09:26', '2011-01-04 20:09:26'),
(8, 2, '900x600px', 'gardel10-hp3.jpg', '2011-01-04 20:09:26', '2011-01-04 20:09:26'),
(9, 27, '270x270px', 'ducati_monster4.jpg', '2011-01-05 11:21:39', '2011-01-05 11:21:39'),
(10, 27, '482x362px', 'ducati_monster5.jpg', '2011-01-05 11:21:39', '2011-01-05 11:21:39'),
(11, 27, '120x120px', 'ducati_monster6.jpg', '2011-01-05 11:21:39', '2011-01-05 11:21:39'),
(12, 27, '900x600px', 'ducati_monster7.jpg', '2011-01-05 11:21:39', '2011-01-05 11:21:39'),
(13, 28, '270x270px', 'gardel10-hp4.jpg', '2011-01-05 12:39:48', '2011-01-05 12:39:48'),
(14, 28, '482x362px', 'gardel10-hp5.jpg', '2011-01-05 12:39:48', '2011-01-05 12:39:48'),
(15, 28, '120x120px', 'gardel10-hp6.jpg', '2011-01-05 12:39:48', '2011-01-05 12:39:48'),
(16, 28, '900x600px', 'gardel10-hp7.jpg', '2011-01-05 12:39:48', '2011-01-05 12:39:48'),
(17, 28, '270x270px', 'jquery_1_3_16800.png', '2011-01-05 12:43:40', '2011-01-05 12:43:40'),
(18, 28, '482x362px', 'jquery_1_3_16801.png', '2011-01-05 12:43:40', '2011-01-05 12:43:40'),
(19, 28, '120x120px', 'jquery_1_3_16802.png', '2011-01-05 12:43:40', '2011-01-05 12:43:40'),
(20, 28, '900x600px', 'jquery_1_3_16803.png', '2011-01-05 12:43:40', '2011-01-05 12:43:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(20) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci,
  `price` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `importance` int(3) unsigned DEFAULT NULL COMMENT '100 = % max',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='nodes' AUTO_INCREMENT=31 ;

--
-- Volcar la base de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `user_id`, `title`, `body`, `price`, `status`, `importance`, `created`, `modified`) VALUES
(1, 3, '(sin asunto)', NULL, NULL, 0, NULL, '2011-01-04 20:06:56', '2011-01-04 20:06:56'),
(2, 3, '2', '2', '2', 0, NULL, '2011-01-04 20:06:58', '2011-01-04 20:06:58'),
(3, 3, '(sin asunto)', NULL, NULL, 0, NULL, '2011-01-04 21:40:47', '2011-01-04 21:40:47'),
(4, 3, '(sin asunto)', NULL, NULL, 0, NULL, '2011-01-05 07:06:33', '2011-01-05 07:06:33'),
(5, 3, '(sin asunto)', NULL, NULL, 0, NULL, '2011-01-05 07:11:08', '2011-01-05 07:11:08'),
(6, 3, '(sin asunto)', NULL, NULL, 0, NULL, '2011-01-05 07:36:37', '2011-01-05 07:36:37'),
(7, 3, '(sin asunto)', NULL, NULL, 0, NULL, '2011-01-05 07:37:28', '2011-01-05 07:37:28'),
(8, 3, '(sin asunto)', NULL, NULL, 0, NULL, '2011-01-05 07:37:40', '2011-01-05 07:37:40'),
(9, 3, '(sin asunto)', NULL, NULL, 0, NULL, '2011-01-05 07:43:53', '2011-01-05 07:43:53'),
(10, 3, '(sin asunto)', NULL, NULL, 0, NULL, '2011-01-05 07:49:38', '2011-01-05 07:49:38'),
(11, 3, '(sin asunto)', NULL, NULL, 0, NULL, '2011-01-05 08:25:10', '2011-01-05 08:25:10'),
(12, 3, '(sin asunto)', NULL, NULL, 0, NULL, '2011-01-05 08:25:21', '2011-01-05 08:25:21'),
(13, 3, '(sin asunto)', NULL, NULL, 0, NULL, '2011-01-05 08:41:07', '2011-01-05 08:41:07'),
(14, 3, '(sin asunto)', NULL, NULL, 0, NULL, '2011-01-05 08:41:33', '2011-01-05 08:41:33'),
(15, 3, '(sin asunto)', NULL, NULL, 0, NULL, '2011-01-05 08:46:42', '2011-01-05 08:46:42'),
(16, 3, '(sin asunto)', NULL, NULL, 0, NULL, '2011-01-05 08:50:59', '2011-01-05 08:50:59'),
(17, 3, '(sin asunto)', NULL, NULL, 0, NULL, '2011-01-05 09:15:45', '2011-01-05 09:15:45'),
(18, 3, '(sin asunto)', NULL, NULL, 0, NULL, '2011-01-05 09:15:54', '2011-01-05 09:15:54'),
(19, 3, '(sin asunto)', NULL, NULL, 0, NULL, '2011-01-05 10:24:36', '2011-01-05 10:24:36'),
(20, 3, '(sin asunto)', NULL, NULL, 0, NULL, '2011-01-05 10:29:57', '2011-01-05 10:29:57'),
(21, 3, '(sin asunto)', NULL, NULL, 0, NULL, '2011-01-05 10:46:43', '2011-01-05 10:46:43'),
(22, 3, '(sin asunto)', NULL, NULL, 0, NULL, '2011-01-05 10:59:54', '2011-01-05 10:59:54'),
(23, 3, '(sin asunto)', NULL, NULL, 0, NULL, '2011-01-05 11:00:31', '2011-01-05 11:00:31'),
(24, 3, '(sin asunto)', NULL, NULL, 0, NULL, '2011-01-05 11:00:56', '2011-01-05 11:00:56'),
(25, 3, '(sin asunto)', NULL, NULL, 0, NULL, '2011-01-05 11:01:10', '2011-01-05 11:01:10'),
(26, 3, '(sin asunto)', NULL, NULL, 0, NULL, '2011-01-05 11:06:07', '2011-01-05 11:06:07'),
(27, 3, 'romel', 'gomez', '200', 1, NULL, '2011-01-05 11:21:20', '2011-01-05 11:21:20'),
(28, 3, 'hp bmx', 'bmx', '100', 1, NULL, '2011-01-05 12:39:29', '2011-01-05 12:39:29'),
(29, 3, '(sin asunto)', NULL, NULL, 0, NULL, '2011-01-05 13:07:27', '2011-01-05 13:07:27'),
(30, 3, '(sin asunto)', NULL, NULL, 0, NULL, '2011-01-05 19:59:13', '2011-01-05 19:59:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `product_id` int(11) unsigned NOT NULL,
  `question` varchar(1000) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `questions`
--

INSERT INTO `questions` (`id`, `user_id`, `product_id`, `question`, `created`, `modified`) VALUES
(1, 4, 28, 'que dia es hoy?', NULL, NULL),
(2, 4, 28, 'si voy a macdonal por un helado?', NULL, NULL),
(3, 4, 28, 'si deja de llover', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(10) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `alias` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `parent_id`, `lft`, `rght`, `created`, `modified`) VALUES
(1, 'Director Ejecutivo', NULL, NULL, NULL, NULL, NULL),
(2, 'Vendedor Afiliado', NULL, NULL, NULL, NULL, NULL),
(3, 'Cliente', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(1) NOT NULL DEFAULT '3',
  `username` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `activation_key` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Volcar la base de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `role_id`, `username`, `password`, `name`, `email`, `activation_key`, `status`, `created`, `modified`) VALUES
(3, 2, 'sylo', 'password', 'maría velazco', 'sylo@sexshopvenezolano.com', 'activation_key', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 3, 'razden', 'password', 'romel gomez', 'razden@sexshopvenezolano.com', 'activation_key', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');
