-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 28-02-2023 a las 03:36:35
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ited`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int NOT NULL,
  `nombreCategoria` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `descriptions` text CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombreCategoria`, `descriptions`) VALUES
(1, 'Diseño gráfico', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.'),
(2, 'Programación móvil', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.'),
(3, 'Desarrollo web', 'Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, al contrario de usar textos como por ejemplo \"Contenido aquí, contenido aquí\". Estos textos hacen parecerlo un español que se puede leer. Muchos paquetes de autoedición y editores de páginas web usan el Lorem Ipsum como su texto por defecto, y al hacer una búsqueda de \"Lorem Ipsum\" va a dar por resultado muchos sitios web que usan este texto si se encuentran en estado de desarrollo. Muchas versiones han evolucionado a través de los años, algunas veces por accidente, otras veces a propósito (por ejemplo insertándole humor y cosas por el estilo).'),
(4, 'Robótica', 'Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, al contrario de usar textos como por ejemplo \"Contenido aquí, contenido aquí\". Estos textos hacen parecerlo un español que se puede leer. Muchos paquetes de autoedición y editores de páginas web usan el Lorem Ipsum como su texto por defecto, y al hacer una búsqueda de \"Lorem Ipsum\" va a dar por resultado muchos sitios web que usan este texto si se encuentran en estado de desarrollo. Muchas versiones han evolucionado a través de los años, algunas veces por accidente, otras veces a propósito (por ejemplo insertándole humor y cosas por el estilo).'),
(5, 'Electrónica', 'Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, al contrario de usar textos como por ejemplo \"Contenido aquí, contenido aquí\". Estos textos hacen parecerlo un español que se puede leer. Muchos paquetes de autoedición y editores de páginas web usan el Lorem Ipsum como su texto por defecto, y al hacer una búsqueda de \"Lorem Ipsum\" va a dar por resultado muchos sitios web que usan este texto si se encuentran en estado de desarrollo. Muchas versiones han evolucionado a través de los años, algunas veces por accidente, otras veces a propósito (por ejemplo insertándole humor y cosas por el estilo).');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `certificado`
--

CREATE TABLE `certificado` (
  `id_certificado` int NOT NULL,
  `matricula_id_matricula` int NOT NULL,
  `img` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci DEFAULT NULL,
  `certificadocol` varchar(45) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `countries`
--

CREATE TABLE `countries` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `countries`
--

INSERT INTO `countries` (`id`, `name`, `code`, `created_at`, `updated_at`) VALUES
(1, 'Afghanistan', 'AF', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(2, 'Åland Islands', 'AX', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(3, 'Albania', 'AL', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(4, 'Algeria', 'DZ', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(5, 'American Samoa', 'AS', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(6, 'Andorra', 'AD', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(7, 'Angola', 'AO', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(8, 'Anguilla', 'AI', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(9, 'Antarctica', 'AQ', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(10, 'Antigua and Barbuda', 'AG', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(11, 'Argentina', 'AR', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(12, 'Armenia', 'AM', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(13, 'Aruba', 'AW', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(14, 'Australia', 'AU', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(15, 'Austria', 'AT', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(16, 'Azerbaijan', 'AZ', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(17, 'Bahamas', 'BS', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(18, 'Bahrain', 'BH', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(19, 'Bangladesh', 'BD', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(20, 'Barbados', 'BB', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(21, 'Belarus', 'BY', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(22, 'Belgium', 'BE', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(23, 'Belize', 'BZ', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(24, 'Benin', 'BJ', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(25, 'Bermuda', 'BM', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(26, 'Bhutan', 'BT', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(27, 'Bolivia, Plurinational State of', 'BO', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(28, 'Bonaire, Sint Eustatius and Saba', 'BQ', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(29, 'Bosnia and Herzegovina', 'BA', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(30, 'Botswana', 'BW', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(31, 'Bouvet Island', 'BV', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(32, 'Brazil', 'BR', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(33, 'British Indian Ocean Territory', 'IO', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(34, 'Brunei Darussalam', 'BN', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(35, 'Bulgaria', 'BG', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(36, 'Burkina Faso', 'BF', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(37, 'Burundi', 'BI', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(38, 'Cambodia', 'KH', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(39, 'Cameroon', 'CM', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(40, 'Canada', 'CA', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(41, 'Cape Verde', 'CV', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(42, 'Cayman Islands', 'KY', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(43, 'Central African Republic', 'CF', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(44, 'Chad', 'TD', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(45, 'Chile', 'CL', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(46, 'China', 'CN', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(47, 'Christmas Island', 'CX', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(48, 'Cocos (Keeling) Islands', 'CC', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(49, 'Colombia', 'CO', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(50, 'Comoros', 'KM', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(51, 'Congo', 'CG', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(52, 'Congo, the Democratic Republic of the', 'CD', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(53, 'Cook Islands', 'CK', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(54, 'Costa Rica', 'CR', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(55, 'Côte d\'Ivoire', 'CI', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(56, 'Croatia', 'HR', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(57, 'Cuba', 'CU', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(58, 'Curaçao', 'CW', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(59, 'Cyprus', 'CY', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(60, 'Czech Republic', 'CZ', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(61, 'Denmark', 'DK', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(62, 'Djibouti', 'DJ', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(63, 'Dominica', 'DM', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(64, 'Dominican Republic', 'DO', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(65, 'Ecuador', 'EC', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(66, 'Egypt', 'EG', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(67, 'El Salvador', 'SV', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(68, 'Equatorial Guinea', 'GQ', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(69, 'Eritrea', 'ER', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(70, 'Estonia', 'EE', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(71, 'Ethiopia', 'ET', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(72, 'Falkland Islands (Malvinas)', 'FK', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(73, 'Faroe Islands', 'FO', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(74, 'Fiji', 'FJ', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(75, 'Finland', 'FI', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(76, 'France', 'FR', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(77, 'French Guiana', 'GF', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(78, 'French Polynesia', 'PF', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(79, 'French Southern Territories', 'TF', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(80, 'Gabon', 'GA', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(81, 'Gambia', 'GM', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(82, 'Georgia', 'GE', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(83, 'Germany', 'DE', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(84, 'Ghana', 'GH', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(85, 'Gibraltar', 'GI', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(86, 'Greece', 'GR', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(87, 'Greenland', 'GL', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(88, 'Grenada', 'GD', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(89, 'Guadeloupe', 'GP', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(90, 'Guam', 'GU', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(91, 'Guatemala', 'GT', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(92, 'Guernsey', 'GG', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(93, 'Guinea', 'GN', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(94, 'Guinea-Bissau', 'GW', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(95, 'Guyana', 'GY', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(96, 'Haiti', 'HT', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(97, 'Heard Island and McDonald Mcdonald Islands', 'HM', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(98, 'Holy See (Vatican City State)', 'VA', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(99, 'Honduras', 'HN', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(100, 'Hong Kong', 'HK', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(101, 'Hungary', 'HU', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(102, 'Iceland', 'IS', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(103, 'India', 'IN', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(104, 'Indonesia', 'ID', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(105, 'Iran, Islamic Republic of', 'IR', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(106, 'Iraq', 'IQ', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(107, 'Ireland', 'IE', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(108, 'Isle of Man', 'IM', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(109, 'Israel', 'IL', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(110, 'Italy', 'IT', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(111, 'Jamaica', 'JM', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(112, 'Japan', 'JP', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(113, 'Jersey', 'JE', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(114, 'Jordan', 'JO', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(115, 'Kazakhstan', 'KZ', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(116, 'Kenya', 'KE', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(117, 'Kiribati', 'KI', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(118, 'Korea, Democratic People\'s Republic of', 'KP', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(119, 'Korea, Republic of', 'KR', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(120, 'Kuwait', 'KW', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(121, 'Kyrgyzstan', 'KG', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(122, 'Lao People\'s Democratic Republic', 'LA', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(123, 'Latvia', 'LV', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(124, 'Lebanon', 'LB', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(125, 'Lesotho', 'LS', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(126, 'Liberia', 'LR', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(127, 'Libya', 'LY', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(128, 'Liechtenstein', 'LI', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(129, 'Lithuania', 'LT', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(130, 'Luxembourg', 'LU', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(131, 'Macao', 'MO', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(132, 'Macedonia, the Former Yugoslav Republic of', 'MK', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(133, 'Madagascar', 'MG', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(134, 'Malawi', 'MW', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(135, 'Malaysia', 'MY', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(136, 'Maldives', 'MV', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(137, 'Mali', 'ML', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(138, 'Malta', 'MT', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(139, 'Marshall Islands', 'MH', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(140, 'Martinique', 'MQ', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(141, 'Mauritania', 'MR', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(142, 'Mauritius', 'MU', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(143, 'Mayotte', 'YT', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(144, 'Mexico', 'MX', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(145, 'Micronesia, Federated States of', 'FM', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(146, 'Moldova, Republic of', 'MD', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(147, 'Monaco', 'MC', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(148, 'Mongolia', 'MN', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(149, 'Montenegro', 'ME', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(150, 'Montserrat', 'MS', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(151, 'Morocco', 'MA', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(152, 'Mozambique', 'MZ', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(153, 'Myanmar', 'MM', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(154, 'Namibia', 'NA', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(155, 'Nauru', 'NR', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(156, 'Nepal', 'NP', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(157, 'Netherlands', 'NL', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(158, 'New Caledonia', 'NC', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(159, 'New Zealand', 'NZ', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(160, 'Nicaragua', 'NI', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(161, 'Niger', 'NE', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(162, 'Nigeria', 'NG', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(163, 'Niue', 'NU', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(164, 'Norfolk Island', 'NF', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(165, 'Northern Mariana Islands', 'MP', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(166, 'Norway', 'NO', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(167, 'Oman', 'OM', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(168, 'Pakistan', 'PK', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(169, 'Palau', 'PW', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(170, 'Palestine, State of', 'PS', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(171, 'Panama', 'PA', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(172, 'Papua New Guinea', 'PG', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(173, 'Paraguay', 'PY', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(174, 'Peru', 'PE', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(175, 'Philippines', 'PH', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(176, 'Pitcairn', 'PN', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(177, 'Poland', 'PL', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(178, 'Portugal', 'PT', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(179, 'Puerto Rico', 'PR', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(180, 'Qatar', 'QA', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(181, 'Réunion', 'RE', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(182, 'Romania', 'RO', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(183, 'Russian Federation', 'RU', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(184, 'Rwanda', 'RW', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(185, 'Saint Barthélemy', 'BL', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(186, 'Saint Helena, Ascension and Tristan da Cunha', 'SH', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(187, 'Saint Kitts and Nevis', 'KN', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(188, 'Saint Lucia', 'LC', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(189, 'Saint Martin (French part)', 'MF', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(190, 'Saint Pierre and Miquelon', 'PM', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(191, 'Saint Vincent and the Grenadines', 'VC', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(192, 'Samoa', 'WS', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(193, 'San Marino', 'SM', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(194, 'Sao Tome and Principe', 'ST', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(195, 'Saudi Arabia', 'SA', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(196, 'Senegal', 'SN', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(197, 'Serbia', 'RS', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(198, 'Seychelles', 'SC', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(199, 'Sierra Leone', 'SL', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(200, 'Singapore', 'SG', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(201, 'Sint Maarten (Dutch part)', 'SX', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(202, 'Slovakia', 'SK', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(203, 'Slovenia', 'SI', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(204, 'Solomon Islands', 'SB', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(205, 'Somalia', 'SO', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(206, 'South Africa', 'ZA', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(207, 'South Georgia and the South Sandwich Islands', 'GS', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(208, 'South Sudan', 'SS', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(209, 'Spain', 'ES', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(210, 'Sri Lanka', 'LK', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(211, 'Sudan', 'SD', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(212, 'Suriname', 'SR', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(213, 'Svalbard and Jan Mayen', 'SJ', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(214, 'Swaziland', 'SZ', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(215, 'Sweden', 'SE', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(216, 'Switzerland', 'CH', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(217, 'Syrian Arab Republic', 'SY', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(218, 'Taiwan', 'TW', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(219, 'Tajikistan', 'TJ', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(220, 'Tanzania, United Republic of', 'TZ', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(221, 'Thailand', 'TH', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(222, 'Timor-Leste', 'TL', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(223, 'Togo', 'TG', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(224, 'Tokelau', 'TK', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(225, 'Tonga', 'TO', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(226, 'Trinidad and Tobago', 'TT', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(227, 'Tunisia', 'TN', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(228, 'Turkey', 'TR', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(229, 'Turkmenistan', 'TM', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(230, 'Turks and Caicos Islands', 'TC', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(231, 'Tuvalu', 'TV', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(232, 'Uganda', 'UG', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(233, 'Ukraine', 'UA', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(234, 'United Arab Emirates', 'AE', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(235, 'United Kingdom', 'GB', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(236, 'United States', 'US', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(237, 'United States Minor Outlying Islands', 'UM', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(238, 'Uruguay', 'UY', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(239, 'Uzbekistan', 'UZ', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(240, 'Vanuatu', 'VU', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(241, 'Venezuela, Bolivarian Republic of', 'VE', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(242, 'Viet Nam', 'VN', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(243, 'Virgin Islands, British', 'VG', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(244, 'Virgin Islands, U.S.', 'VI', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(245, 'Wallis and Futuna', 'WF', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(246, 'Western Sahara', 'EH', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(247, 'Yemen', 'YE', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(248, 'Zambia', 'ZM', '2023-02-18 08:13:05', '2023-02-18 08:13:05'),
(249, 'Zimbabwe', 'ZW', '2023-02-18 08:13:05', '2023-02-18 08:13:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `id_curso` int NOT NULL,
  `nombre` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci DEFAULT NULL,
  `descriptions` text CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `horas_academicas` time DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `categoria_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`id_curso`, `nombre`, `descriptions`, `horas_academicas`, `fecha_inicio`, `categoria_id`) VALUES
(1, 'Fundamentos de Photoshop', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.', '00:00:20', '2023-03-25', 1),
(2, 'Fundamentos de Android Studio', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.', '00:00:20', '2023-03-31', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_extras`
--

CREATE TABLE `datos_extras` (
  `users_id` bigint UNSIGNED NOT NULL,
  `id` int NOT NULL,
  `telefono` int DEFAULT NULL,
  `operadora` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci DEFAULT NULL,
  `img` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci DEFAULT NULL,
  `cuidad` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci DEFAULT NULL,
  `pais` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci DEFAULT NULL,
  `nivel_escolaridad` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci DEFAULT NULL,
  `#_ced` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci DEFAULT NULL,
  `foto_ced` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dep-mun`
--

CREATE TABLE `dep-mun` (
  `id` int NOT NULL,
  `nombre` varchar(250) COLLATE utf8mb3_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

--
-- Volcado de datos para la tabla `dep-mun`
--

INSERT INTO `dep-mun` (`id`, `nombre`) VALUES
(1, 'Boaco-Boaco'),
(2, 'Boaco-Camoapa'),
(3, 'Boaco-San José de los Remates'),
(4, 'Boaco-San José de los Remates'),
(5, 'Boaco-San Lorenzo'),
(6, 'Boaco-Santa Lucía'),
(7, 'Boaco-Teustepe'),
(8, 'Carazo-Diriamba'),
(9, 'Carazo-Dolores'),
(10, 'Carazo-El Rosario'),
(11, 'Carazo-Jinotepe'),
(12, 'Carazo-La Conquista'),
(13, 'Carazo-La Paz de Oriente'),
(14, 'Carazo-San Marcos'),
(15, 'Carazo-Santa Teresa'),
(16, 'Chinandega-Chichigalpa'),
(17, 'Chinandega-Chinandega'),
(18, 'Chinandega-Cinco Pinos'),
(19, 'Chinandega-Corinto'),
(20, 'Chinandega-El Realejo'),
(21, 'Chinandega-El Viejo'),
(22, 'Chinandega-Posoltega'),
(23, 'Chinandega-Puerto Morazán'),
(24, 'Chinandega-San Francisco del Norte'),
(25, 'Chinandega-San Pedro del Norte'),
(26, 'Chinandega-Santo Tomás del Norte'),
(27, 'Chinandega-Somotillo'),
(28, 'Chinandega-Villanueva'),
(29, 'Chontales-Acoyapa'),
(30, 'Chontales-Comalapa'),
(31, 'Chontales-Cuapa'),
(32, 'Chontales-El Coral'),
(33, 'Chontales-Juigalpa'),
(34, 'Chontales-La Libertad'),
(35, 'Chontales-San Pedro de Lóvago'),
(36, 'Chontales-Santo Domingo'),
(37, 'Chontales-Santo Tomás'),
(38, 'Chontales-Villa Sandino'),
(39, 'Costa Caribe Norte-Bonanza'),
(40, 'Costa Caribe Norte-Mulukukú'),
(41, 'Costa Caribe Norte-Alamikamba'),
(42, 'Costa Caribe Norte-Bilwi'),
(43, 'Costa Caribe Norte-Rosita'),
(44, 'Costa Caribe Norte-Siuna'),
(45, 'Costa Caribe Norte-Waslala'),
(46, 'Costa Caribe Norte-Waspán'),
(47, 'Costa Caribe Sur-Bluefields'),
(48, 'Costa Caribe Sur-Corn Island'),
(49, 'Costa Caribe Sur-Desembocadura de Río Grande'),
(50, 'Costa Caribe Sur-El Ayote'),
(51, 'Costa Caribe Sur-El Rama'),
(52, 'Costa Caribe Sur-El Tortuguero'),
(53, 'Costa Caribe Sur-Kukra Hill'),
(54, 'Costa Caribe Sur-La Cruz de Río Grande'),
(55, 'Costa Caribe Sur-Laguna de Perlas'),
(56, 'Costa Caribe Sur-Muelle de los Bueyes'),
(57, 'Costa Caribe Sur-Nueva Guinea'),
(58, 'Costa Caribe Sur-Paiwas'),
(59, 'Estelí-Condega'),
(60, 'Estelí-Estelí'),
(61, 'Estelí-La Trinidad'),
(62, 'Estelí-Pueblo Nuevo'),
(63, 'Estelí-San Juan de Limay'),
(64, 'Estelí-San Nicolás'),
(65, 'Granada-Diriá'),
(66, 'Granada-Diriomo'),
(67, 'Granada-Granada'),
(68, 'Granada-Nandaime'),
(69, 'Jinotega-El Cuá'),
(70, 'Jinotega-Jinotega'),
(71, 'Jinotega-La Concordia'),
(72, 'Jinotega-Bocay'),
(73, 'Jinotega-San Rafael del Norte'),
(74, 'Jinotega-Yalí'),
(75, 'Jinotega-Las Praderas'),
(76, 'Jinotega-Wiwilí'),
(77, 'León-Achuapa'),
(78, 'León-El Jicaral'),
(79, 'León-El Sauce'),
(80, 'León-La Paz Centro'),
(81, 'León-Larreynaga'),
(82, 'León-León'),
(83, 'León-Nagarote'),
(84, 'León-Quezalguaque'),
(85, 'León-Santa Rosa del Peñón'),
(86, 'León-Telica'),
(87, 'Madriz-Las Sabanas'),
(88, 'Madriz-Palacagüina'),
(89, 'Madriz-San José de Cusmapa'),
(90, 'Madriz-San Juan del Río Coco'),
(91, 'Madriz-San Lucas'),
(92, 'Madriz-Somoto'),
(93, 'Madriz-Telpaneca'),
(94, 'Madriz-Totogalpa'),
(95, 'Madriz-Yalagüina'),
(96, 'Managua-El Crucero'),
(97, 'Managua-Managua'),
(98, 'Managua-Mateare'),
(99, 'Managua-San Francisco Libre'),
(100, 'Managua-San Rafael del Sur'),
(101, 'Managua-Ticuantepe'),
(102, 'Managua-Tipitapa'),
(103, 'Managua-Villa El Carmen'),
(104, 'Masaya-Catarina'),
(105, 'Masaya-Masatepe'),
(106, 'Masaya-Masaya'),
(107, 'Masaya-Nandasmo'),
(108, 'Masaya-Nindirí'),
(109, 'Masaya-Niquinohomo'),
(110, 'Masaya-San Juan de Oriente'),
(111, 'Masaya-Tisma'),
(112, 'Matagalpa-Ciudad Darío'),
(113, 'Matagalpa-La Dalia'),
(114, 'Matagalpa-Esquipulas'),
(115, 'Matagalpa-Matagalpa'),
(116, 'Matagalpa-Matiguás'),
(117, 'Matagalpa-Muy Muy'),
(118, 'Matagalpa-Rancho Grande'),
(119, 'Matagalpa-Río Blanco'),
(120, 'Matagalpa-San Dionisio'),
(121, 'Matagalpa-San Isidro'),
(122, 'Matagalpa-San Ramón'),
(123, 'Matagalpa-Sébaco'),
(124, 'Matagalpa-Terrabona'),
(125, 'Nueva Segovia-Ciudad Antigua'),
(126, 'Nueva Segovia-Dipilto'),
(127, 'Nueva Segovia-El Jícaro'),
(128, 'Nueva Segovia-Jalapa'),
(129, 'Nueva Segovia-Macuelizo'),
(130, 'Nueva Segovia-Mozonte'),
(131, 'Nueva Segovia-Murra'),
(132, 'Nueva Segovia-Ocotal'),
(133, 'Nueva Segovia-Quilalí'),
(134, 'Nueva Segovia-San Fernando'),
(135, 'Nueva Segovia-Santa María'),
(136, 'Nueva Segovia-Wiwilí de Nueva Segovia'),
(137, 'Río San Juan-	El Almendro'),
(138, 'Río San Juan-Boca de Sábalos'),
(139, 'Río San Juan-Morrito'),
(140, 'Río San Juan-San Carlos'),
(141, 'Río San Juan-San Juan del Norte'),
(142, 'Río San Juan-San Miguelito'),
(143, 'Rivas-Altagracia'),
(144, 'Rivas-Belén'),
(145, 'Rivas-Buenos Aires'),
(146, 'Rivas-Cárdenas'),
(147, 'Rivas-Rivas'),
(148, 'Rivas-San Jorge'),
(149, 'Rivas-San Juan del Sur'),
(150, 'Rivas-Tola');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `discapacidad`
--

CREATE TABLE `discapacidad` (
  `id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb3_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

--
-- Volcado de datos para la tabla `discapacidad`
--

INSERT INTO `discapacidad` (`id`, `name`) VALUES
(1, 'Ninguna'),
(2, 'Discapacidad auditiva'),
(3, 'Discapacidad visual'),
(4, 'Discapacidad físico-motora'),
(5, 'Discapacidad congnitiva / intelectual');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_civil`
--

CREATE TABLE `estado_civil` (
  `id` int NOT NULL,
  `name` varchar(150) COLLATE utf8mb3_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

--
-- Volcado de datos para la tabla `estado_civil`
--

INSERT INTO `estado_civil` (`id`, `name`) VALUES
(1, 'Soltero'),
(2, 'Casado'),
(3, 'Divorciado'),
(4, 'Viudo'),
(5, 'Unión libre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `id` int NOT NULL,
  `fecha` date DEFAULT NULL,
  `concepto` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci DEFAULT NULL,
  `monto` float DEFAULT NULL,
  `matricula_id_matricula` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matricula`
--

CREATE TABLE `matricula` (
  `id_matricula` int NOT NULL,
  `fecha` date DEFAULT NULL,
  `voucher` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci DEFAULT NULL,
  `matricula_aceptada` tinyint DEFAULT NULL,
  `curso_id_curso1` int NOT NULL,
  `users_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '2023_02_18_020014_create_countries_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel_academico`
--

CREATE TABLE `nivel_academico` (
  `id` int NOT NULL,
  `name` varchar(250) COLLATE utf8mb3_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

--
-- Volcado de datos para la tabla `nivel_academico`
--

INSERT INTO `nivel_academico` (`id`, `name`) VALUES
(1, 'Sexto grado aprobado'),
(2, 'Bachiller'),
(3, 'Licenciado'),
(4, 'Máster'),
(5, 'Noveno grado aprobado'),
(6, 'Técnico'),
(7, 'Ingeniero'),
(8, 'Saber leer y escribir'),
(9, 'Bachillerato técnico'),
(10, 'Técnico básico'),
(11, 'Técnico medio'),
(12, 'Técnico superior'),
(13, 'Maestro de educación primaria'),
(14, 'Diplomado'),
(15, 'Doctor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nota`
--

CREATE TABLE `nota` (
  `id_nota` int NOT NULL,
  `nota_final` int DEFAULT NULL,
  `matricula_id_matricula` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2023-02-11 08:43:37', '2023-02-11 08:43:37'),
(2, 'Student', 'web', '2023-02-11 08:43:37', '2023-02-11 08:43:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `carnet` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cedula` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha_nacimiento` int DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `countries_code` int DEFAULT NULL,
  `depmun_id` int DEFAULT NULL,
  `direccion` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `area` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lugar` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado_civil_id` int DEFAULT NULL,
  `sexo` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discapacidad_id` int DEFAULT NULL,
  `profesion` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nivel_academico_id` int DEFAULT NULL,
  `e_nombre` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `e_celular` int DEFAULT NULL,
  `e_direccion` text COLLATE utf8mb4_unicode_ci,
  `e_personas` int DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `carnet`, `name`, `lastname`, `cedula`, `fecha_nacimiento`, `email`, `username`, `countries_code`, `depmun_id`, `direccion`, `area`, `lugar`, `estado_civil_id`, `sexo`, `discapacidad_id`, `profesion`, `nivel_academico_id`, `e_nombre`, `e_celular`, `e_direccion`, `e_personas`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 0, 'Luis Manuel', 'Espinoza Estrada', '0010511890052X', 626227200, 'luis.manuel.espinoza.estrada@gmail.com', 'lespinoza', 160, 100, 'Barrio parque julio buitrago', 'Rural', 'Managua', 1, 'M', 1, 'Programador', 4, 'Maria Estrada', 76539587, 'das', 4, NULL, '$2y$10$4YeadCftKRzpMbDYb50cIuXYIS7Hy8MaDUkua6N3/rfvltN5YNAKe', 'td935mw03uoDH0YHtg8bvvVSgYJmH7AJLY4sHDDnMGFiBRsk54suOV6xFzpz', '2023-01-13 10:22:32', '2023-02-28 09:34:58'),
(2, 0, 'Gerald', 'Flores', NULL, 0, 'gflores@gmail.com', 'gflores', NULL, NULL, '0', '0', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'DFgjMQ4qlTU9OVD8bM54qLs2zgS11jgemi7Cq7ZIZRHNEylzXEan1OyuwyDK', '2023-01-13 10:22:32', '2023-01-17 08:11:54'),
(3, 230511945, 'David Antonio', 'Espinoza', '0010511890052b', 784166400, 'david@unan.edu.ni.net', 'despinoza', NULL, NULL, '0', '0', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$3XaZwPgLthOAYRkzof.rauCOZvPdHzABE90dNiALfPQfFd9hAoKfa', NULL, '2023-02-16 07:37:35', '2023-02-16 08:16:21'),
(4, 230209051, 'Iris', 'Reyes', NULL, 1125619200, 'iris@reyes.com', 'iris', NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$YYfptUMTVg2yQGUIJoNfOeUXHrRP8Z5OOKpnoMYhanBQsnQgG7Zp6', NULL, '2023-02-24 08:27:26', '2023-02-24 08:27:26');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `certificado`
--
ALTER TABLE `certificado`
  ADD PRIMARY KEY (`id_certificado`),
  ADD KEY `fk_certificado_matricula1` (`matricula_id_matricula`);

--
-- Indices de la tabla `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id_curso`),
  ADD KEY `fk_curso_categoria1` (`categoria_id`);

--
-- Indices de la tabla `datos_extras`
--
ALTER TABLE `datos_extras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_datos_extras_users1_idx` (`users_id`);

--
-- Indices de la tabla `dep-mun`
--
ALTER TABLE `dep-mun`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `discapacidad`
--
ALTER TABLE `discapacidad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estado_civil`
--
ALTER TABLE `estado_civil`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_factura_matricula1` (`matricula_id_matricula`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `matricula`
--
ALTER TABLE `matricula`
  ADD PRIMARY KEY (`id_matricula`),
  ADD KEY `fk_matricula_curso1` (`curso_id_curso1`),
  ADD KEY `fk_matricula_users1_idx` (`users_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `nivel_academico`
--
ALTER TABLE `nivel_academico`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`id_nota`),
  ADD KEY `fk_nota_matricula1_idx` (`matricula_id_matricula`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `certificado`
--
ALTER TABLE `certificado`
  MODIFY `id_certificado` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=250;

--
-- AUTO_INCREMENT de la tabla `dep-mun`
--
ALTER TABLE `dep-mun`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT de la tabla `discapacidad`
--
ALTER TABLE `discapacidad`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `estado_civil`
--
ALTER TABLE `estado_civil`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `matricula`
--
ALTER TABLE `matricula`
  MODIFY `id_matricula` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `nivel_academico`
--
ALTER TABLE `nivel_academico`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `nota`
--
ALTER TABLE `nota`
  MODIFY `id_nota` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `certificado`
--
ALTER TABLE `certificado`
  ADD CONSTRAINT `fk_certificado_matricula1` FOREIGN KEY (`matricula_id_matricula`) REFERENCES `matricula` (`id_matricula`);

--
-- Filtros para la tabla `curso`
--
ALTER TABLE `curso`
  ADD CONSTRAINT `fk_curso_categoria1` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`);

--
-- Filtros para la tabla `datos_extras`
--
ALTER TABLE `datos_extras`
  ADD CONSTRAINT `fk_datos_extras_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `fk_factura_matricula1` FOREIGN KEY (`matricula_id_matricula`) REFERENCES `matricula` (`id_matricula`);

--
-- Filtros para la tabla `matricula`
--
ALTER TABLE `matricula`
  ADD CONSTRAINT `fk_matricula_curso1` FOREIGN KEY (`curso_id_curso1`) REFERENCES `curso` (`id_curso`),
  ADD CONSTRAINT `fk_matricula_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `nota`
--
ALTER TABLE `nota`
  ADD CONSTRAINT `fk_nota_matricula1` FOREIGN KEY (`matricula_id_matricula`) REFERENCES `matricula` (`id_matricula`);

--
-- Filtros para la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
