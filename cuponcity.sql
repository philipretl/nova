-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-01-2018 a las 14:14:43
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cuponcity`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aliados`
--

CREATE TABLE `aliados` (
  `id` int(10) UNSIGNED NOT NULL,
  `aliado_tipo` int(11) NOT NULL,
  `aliado_nombres` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aliado_apellidos` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aliado_razon_social` varchar(350) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aliado_nit` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aliado_direccion` text COLLATE utf8mb4_unicode_ci,
  `aliado_ciudad` text COLLATE utf8mb4_unicode_ci,
  `aliado_pais` text COLLATE utf8mb4_unicode_ci,
  `aliado_telefono_fijo` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aliado_telefono_celular` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aliado_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aliado_web` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aliado_descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `aliado_ofrece` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ayudas`
--

CREATE TABLE `ayudas` (
  `id` int(10) UNSIGNED NOT NULL,
  `ayudas_cat_id` int(10) UNSIGNED NOT NULL,
  `ayudas_titulo` varchar(350) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ayudas_descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ayudas_estatus` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `ayudas`
--

INSERT INTO `ayudas` (`id`, `ayudas_cat_id`, `ayudas_titulo`, `ayudas_descripcion`, `ayudas_estatus`, `created_at`, `updated_at`) VALUES
(1, 1, 'Olvidé mi contraseña, cómo la recupero?', '<p>Recuperar la contraseña es muy fácil, sólo entra por <b><font color=\"#397b21\">“ Recupera tu password”</font></b> ingresando tu correo electrónico, recibirás un mensaje con las instrucciones para iniciar el proceso de recuperación.\r\n</p><p>Si no ves el correo en tu bandeja de entrada, revisa también por favor el correo no deseado.\r\n</p><p>Si por algún motivo, no logras la recuperación siguiendo los anteriores pasos,<b><font color=\"#397b21\"> “ponte en contacto”\r\n</font></b></p>', 1, '2017-12-24 21:41:32', '2017-12-24 21:41:32'),
(2, 1, 'Por qué no logro acceder a mi Citycuenta?', '<p>Es probable que ya tengas tu <font color=\"#397b21\"><b>“Citycuenta”</b></font> pero no puedas acceder a ella, intenta con <b><font color=\"#397b21\">“ Recupera tu password “</font></b> del punto anterior, pero también puede deberse a que te suscribiste para recibir el Cityboletín de ofertas  pero no te registraste para comprarlas, para hacerlo debes dar clic en <font color=\"#397b21\"><b>“Crear mi City Cuenta”</b></font>.</p>', 1, '2017-12-24 21:42:21', '2017-12-24 21:42:21'),
(3, 2, 'Olvidé mi contraseña, cómo la recupero?', '<p>Recuperar la contraseña es muy fácil, sólo entra por <b><font color=\"#397b21\">“ Recupera tu password”</font></b> ingresando tu correo electrónico, recibirás un mensaje con las instrucciones para iniciar el proceso de recuperación.\r\n</p><p>Si no ves el correo en tu bandeja de entrada, revisa también por favor el correo no deseado.\r\n</p><p>Si por algún motivo, no logras la recuperación siguiendo los anteriores pasos,<b><font color=\"#397b21\"> “ponte en contacto”\r\n</font></b></p>', 1, '2018-01-04 20:33:52', '2018-01-04 20:33:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ayudas_categorias`
--

CREATE TABLE `ayudas_categorias` (
  `id` int(10) UNSIGNED NOT NULL,
  `ayudas_cat_nombre` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ayudas_cat_imagen` text COLLATE utf8mb4_unicode_ci,
  `ayudas_cat_estatus` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `ayudas_categorias`
--

INSERT INTO `ayudas_categorias` (`id`, `ayudas_cat_nombre`, `ayudas_cat_imagen`, `ayudas_cat_estatus`, `created_at`, `updated_at`) VALUES
(1, 'City Inquietudes', '1.png', 1, '2017-12-24 02:18:44', '2017-12-24 02:18:44'),
(2, 'Inquietudes sobre tu Citycuenta', '2.png', 1, '2017-12-24 02:18:44', '2017-12-24 02:18:44'),
(3, 'City Entregas', '3.png', 1, '2017-12-24 02:18:44', '2017-12-24 02:18:44'),
(4, 'Inquietudes sobre tu City Compra', '4.png', 1, '2017-12-24 02:18:44', '2017-12-24 02:18:44'),
(5, 'City Destinos', '5.png', 1, '2017-12-24 02:18:44', '2017-12-24 02:18:44'),
(6, 'City Soluciones', '6.png', 1, '2017-12-24 02:18:44', '2017-12-24 02:18:44'),
(7, 'City Aliados', '7.png', 1, '2017-12-24 02:18:44', '2017-12-24 02:18:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ayudas_detalles`
--

CREATE TABLE `ayudas_detalles` (
  `id` int(10) UNSIGNED NOT NULL,
  `ayudas_id` int(10) UNSIGNED NOT NULL,
  `ayudas_detalles_util` int(10) UNSIGNED NOT NULL,
  `ayudas_users_id` int(11) DEFAULT NULL,
  `ayudas_ip` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `ayudas_detalles`
--

INSERT INTO `ayudas_detalles` (`id`, `ayudas_id`, `ayudas_detalles_util`, `ayudas_users_id`, `ayudas_ip`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 1, '127.0.0.1', '2018-01-04 20:15:18', '2018-01-04 20:15:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id` int(10) UNSIGNED NOT NULL,
  `compra_codigo_compra` text COLLATE utf8mb4_unicode_ci,
  `compra_codigo_hex` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `compra_codigo_entero` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `compra_users_id` int(10) UNSIGNED NOT NULL,
  `compra_productop_id` int(10) UNSIGNED NOT NULL,
  `compra_total` double(8,2) NOT NULL,
  `compra_oferta` int(11) NOT NULL DEFAULT '0',
  `compra_oferta_fecha_inicio` date DEFAULT NULL,
  `compra_oferta_fecha_fin` date DEFAULT NULL,
  `compra_estatus` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`id`, `compra_codigo_compra`, `compra_codigo_hex`, `compra_codigo_entero`, `compra_users_id`, `compra_productop_id`, `compra_total`, `compra_oferta`, `compra_oferta_fecha_inicio`, `compra_oferta_fecha_fin`, `compra_estatus`, `created_at`, `updated_at`) VALUES
(1, '968895058', 'c90edb', '1874913902', 4, 3, 64.60, 0, NULL, NULL, 2, '2018-01-07 11:08:19', '2018-01-07 11:08:44'),
(2, '372472341', '53ea8d', '1404688673', 1, 5, 212.50, 1, '2017-12-24', '2018-01-28', 3, '2018-01-15 06:45:58', '2018-01-15 06:46:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conf_categorias`
--

CREATE TABLE `conf_categorias` (
  `id` int(10) UNSIGNED NOT NULL,
  `conf_cat_nombre` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conf_cat_condiciones` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `conf_cat_imagen` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `conf_cat_estatus` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `conf_categorias`
--

INSERT INTO `conf_categorias` (`id`, `conf_cat_nombre`, `conf_cat_condiciones`, `conf_cat_imagen`, `conf_cat_estatus`, `created_at`, `updated_at`) VALUES
(1, 'Buen Apetito', '<p>• Para hacer efectivo tu Citycupón, debes enseñarlo siempre impreso.\r\n</p><p>• La vigencia de la oferta está determinada en el cupón, después de la misma, no habrán devoluciones ni cambios.\r\n</p><p>• Puedes comprar y obsequiar los cupones que desees.\r\n</p><p>• Las ofertas publicadas están sujetas a la disponibilidad en el momento de reservar.\r\n</p><p>• Se prohíbe el expendio de bebidas embriagantes a menores de edad. Ley 124 de 1994. El exceso de alcohol es perjudicial para la salud. Ley 30 de 1986.\r\n</p><p>• Las imágenes utilizadas son una referencia gráfica para nuestros clientes.\r\n</p><p>• Las ofertas no son acumulables.\r\n</p><p>• Si tu Cuponcity es de gastronomía, la propina es voluntaria y sugerida en un 10%, pero en ningún caso está incluida en el cupón.\r\n</p><p>• Cuponcity actúa como intermediario y recaudador, en ningún caso es responsable de incumplimientos por parte del proveedor del bien o servicio, el aliado es el único responsable ante los compradores por la calidad de los productos y servicios publicitados. sin embargo, haremos lo posible para lograr tu satisfacción final. </p>', '1.png', 1, '2017-12-24 02:18:42', '2018-01-16 10:06:18'),
(2, 'Servicio', '', '2.png', 1, '2017-12-24 02:18:42', '2017-12-24 02:18:42'),
(3, 'Salud y Belleza', '', '3.png', 1, '2017-12-24 02:18:42', '2017-12-24 02:18:42'),
(4, 'Destinos', '', '4.png', 1, '2017-12-24 02:18:42', '2017-12-24 02:18:42'),
(5, 'Productos', '', '5.png', 1, '2017-12-24 02:18:42', '2017-12-24 02:18:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conf_subcategorias`
--

CREATE TABLE `conf_subcategorias` (
  `id` int(10) UNSIGNED NOT NULL,
  `conf_subcat_cat_id` int(10) UNSIGNED NOT NULL,
  `conf_subcat_nombre` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conf_subcat_imagen` text COLLATE utf8mb4_unicode_ci,
  `conf_sub_cat_estatus` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `conf_subcategorias`
--

INSERT INTO `conf_subcategorias` (`id`, `conf_subcat_cat_id`, `conf_subcat_nombre`, `conf_subcat_imagen`, `conf_sub_cat_estatus`, `created_at`, `updated_at`) VALUES
(1, 1, 'Bares', '1.png', 1, '2017-12-24 02:18:43', '2017-12-24 02:18:43'),
(2, 1, 'Cafés', '2.png', 1, '2017-12-24 02:18:43', '2017-12-24 02:18:43'),
(3, 1, 'Comida Rápida', '3.png', 1, '2017-12-24 02:18:43', '2017-12-24 02:18:43'),
(4, 1, 'Pastelería y Cafetería', '4.png', 1, '2017-12-24 02:18:43', '2017-12-24 02:18:43'),
(5, 1, 'Restaurantes', '5.png', 1, '2017-12-24 02:18:43', '2017-12-24 02:18:43'),
(6, 2, 'Cuidado de tu Mascota', '6.png', 1, '2017-12-24 02:18:43', '2017-12-24 02:18:43'),
(7, 2, 'Cursos y Asesorías', '7.png', 1, '2017-12-24 02:18:43', '2017-12-24 02:18:43'),
(8, 2, 'Deporte', '8.png', 1, '2017-12-24 02:18:43', '2017-12-24 02:18:43'),
(9, 2, 'Espectáculos y Entretenimiento', '9.png', 1, '2017-12-24 02:18:43', '2017-12-24 02:18:43'),
(10, 2, 'Fiestas Infantiles y Recreación', '10.png', 1, '2017-12-24 02:18:43', '2017-12-24 02:18:43'),
(11, 2, 'Fotografía y Video', '11.png', 1, '2017-12-24 02:18:43', '2017-12-24 02:18:43'),
(12, 2, 'Fumigación', '12.png', 1, '2017-12-24 02:18:43', '2017-12-24 02:18:43'),
(13, 2, 'Limpieza y Aseo', '13.png', 1, '2017-12-24 02:18:43', '2017-12-24 02:18:43'),
(14, 2, 'Mantenimiento de Electrodomésticos', '14.png', 1, '2017-12-24 02:18:43', '2017-12-24 02:18:43'),
(15, 2, 'Mantenimiento Vehículos', '15.png', 1, '2017-12-24 02:18:43', '2017-12-24 02:18:43'),
(16, 2, 'Servicios Profesionales', '16.png', 1, '2017-12-24 02:18:43', '2017-12-24 02:18:43'),
(17, 2, 'Espectáculos Públicos', '17.png', 1, '2017-12-24 02:18:43', '2017-12-24 02:18:43'),
(18, 2, 'Cultura y Diversión', '18.png', 1, '2017-12-24 02:18:43', '2017-12-24 02:18:43'),
(19, 3, 'Asesoría de Imagen', '19.png', 1, '2017-12-24 02:18:43', '2017-12-24 02:18:43'),
(20, 3, 'Cuidado de tu Piel', '20.png', 1, '2017-12-24 02:18:43', '2017-12-24 02:18:43'),
(21, 3, 'Cuidado Dental', '21.png', 1, '2017-12-24 02:18:43', '2017-12-24 02:18:43'),
(22, 3, 'Cuidado Facial', '22.png', 1, '2017-12-24 02:18:43', '2017-12-24 02:18:43'),
(23, 3, 'Depilación', '23.png', 1, '2017-12-24 02:18:43', '2017-12-24 02:18:43'),
(24, 3, 'Deporte', '24.png', 1, '2017-12-24 02:18:43', '2017-12-24 02:18:43'),
(25, 3, 'Desintoxicación', '25.png', 1, '2017-12-24 02:18:43', '2017-12-24 02:18:43'),
(26, 3, 'Gimnasio y Bienestar', '26.png', 1, '2017-12-24 02:18:43', '2017-12-24 02:18:43'),
(27, 3, 'Glúteos', '27.png', 1, '2017-12-24 02:18:43', '2017-12-24 02:18:43'),
(28, 3, 'Keratinas y Alisados', '28.png', 1, '2017-12-24 02:18:43', '2017-12-24 02:18:43'),
(29, 3, 'Manos y Pies', '29.png', 1, '2017-12-24 02:18:43', '2017-12-24 02:18:43'),
(30, 3, 'Maquillaje', '30.png', 1, '2017-12-24 02:18:43', '2017-12-24 02:18:43'),
(31, 3, 'Peluquería', '31.png', 1, '2017-12-24 02:18:43', '2017-12-24 02:18:43'),
(32, 3, 'Relajación', '32.png', 1, '2017-12-24 02:18:43', '2017-12-24 02:18:43'),
(33, 3, 'Spa', '33.png', 1, '2017-12-24 02:18:43', '2017-12-24 02:18:43'),
(34, 3, 'Tratamientos Reductores', '34.png', 1, '2017-12-24 02:18:43', '2017-12-24 02:18:43'),
(35, 3, 'Opticas', '35.png', 1, '2017-12-24 02:18:43', '2017-12-24 02:18:43'),
(36, 4, 'Escapes y Aventuras al Aire Libre', '36.png', 1, '2017-12-24 02:18:43', '2017-12-24 02:18:43'),
(37, 4, 'Hospedaje', '37.png', 1, '2017-12-24 02:18:43', '2017-12-24 02:18:43'),
(38, 4, 'Pasadías', '38.png', 1, '2017-12-24 02:18:43', '2017-12-24 02:18:43'),
(39, 4, 'Viajes', '39.png', 1, '2017-12-24 02:18:43', '2017-12-24 02:18:43'),
(40, 5, 'Celulares y Tecnología ', '40.png', 1, '2017-12-24 02:18:43', '2017-12-24 02:18:43'),
(41, 5, 'Chiquitines', '41.png', 1, '2017-12-24 02:18:43', '2017-12-24 02:18:43'),
(42, 5, 'Cocina', '42.png', 1, '2017-12-24 02:18:43', '2017-12-24 02:18:43'),
(43, 5, 'Cuidado Personal', '43.png', 1, '2017-12-24 02:18:43', '2017-12-24 02:18:43'),
(44, 5, 'Detalles, Sorpresas y Regalos', '44.png', 1, '2017-12-24 02:18:43', '2017-12-24 02:18:43'),
(45, 5, 'Hogar y Decoración', '45.png', 1, '2017-12-24 02:18:43', '2017-12-24 02:18:43'),
(46, 5, 'Moda, Joyas  y Accesorios', '46.png', 1, '2017-12-24 02:18:43', '2017-12-24 02:18:43'),
(47, 5, 'Partes y Accesorios vehículos', '47.png', 1, '2017-12-24 02:18:43', '2017-12-24 02:18:43'),
(48, 5, 'Sex Shop', '48.png', 1, '2017-12-24 02:18:43', '2017-12-24 02:18:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `id` int(10) UNSIGNED NOT NULL,
  `empresa_nombre` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `empresa_empresario` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `empresa_nit` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `empresa_direccion` text COLLATE utf8mb4_unicode_ci,
  `empresa_pais` text COLLATE utf8mb4_unicode_ci,
  `empresa_ciudad` text COLLATE utf8mb4_unicode_ci,
  `empresa_telefono_fijo` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `empresa_telefono_celular` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `empresa_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `empresa_web` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id`, `empresa_nombre`, `empresa_empresario`, `empresa_nit`, `empresa_direccion`, `empresa_pais`, `empresa_ciudad`, `empresa_telefono_fijo`, `empresa_telefono_celular`, `empresa_email`, `empresa_web`, `created_at`, `updated_at`) VALUES
(1, 'CUPONCITY COLOMBIA', 'JULIO CÉSAR MAYA BASTIDAS', '98385333-6', 'CARRERA 6 A Nº 23N 29 CIUDAD JARDÍN', 'Colombia', 'Calí', '8337031', '3118490896', 'cuponcity.col@gmail.com', 'www.cuponcity.com.co', '2017-12-24 02:18:44', '2017-12-24 02:18:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id` int(10) UNSIGNED NOT NULL,
  `marca_nombre` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marca_imagen` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `marca_estatus` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id`, `marca_nombre`, `marca_imagen`, `marca_estatus`, `created_at`, `updated_at`) VALUES
(1, 'Marca1', '1515100460.jpg', 3, '2018-01-04 20:14:20', '2018-01-04 20:14:20'),
(2, 'Marca 2', '1515100471.jpg', 1, '2018-01-04 20:14:31', '2018-01-04 20:14:31'),
(3, 'Marca 3', '1515100481.jpg', 1, '2018-01-04 20:14:41', '2018-01-04 20:14:41');

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
(1, '2017_11_26_191518_create_aliados_table', 1),
(2, '2017_11_26_201413_create_users_table', 1),
(3, '2017_11_26_201414_create_password_resets_table', 1),
(4, '2017_11_26_204410_create_conf_categorias_table', 1),
(5, '2017_11_26_204411_create_conf_subcategorias_table', 1),
(6, '2017_12_04_011712_create_empresas_table', 1),
(7, '2017_12_06_080301_create_ayudas_categorias_table', 1),
(8, '2017_12_06_080454_create_ayudas_table', 1),
(9, '2017_12_06_081123_create_ayudas_detalles_table', 1),
(10, '2017_12_13_064341_create_productos_table', 1),
(11, '2017_12_13_070528_create_producto_precios_table', 1),
(12, '2017_12_14_063648_create_marcas_table', 1),
(15, '2017_12_24_104340_create_compras_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(10) UNSIGNED NOT NULL,
  `producto_titulo` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `producto_categoria` int(10) UNSIGNED NOT NULL,
  `producto_subcategoria` int(10) UNSIGNED NOT NULL,
  `producto_descripcion` text COLLATE utf8mb4_unicode_ci,
  `producto_letra_chica` text COLLATE utf8mb4_unicode_ci,
  `producto_palabras_clave` text COLLATE utf8mb4_unicode_ci,
  `producto_imagen` text COLLATE utf8mb4_unicode_ci,
  `producto_estatus` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `producto_titulo`, `producto_categoria`, `producto_subcategoria`, `producto_descripcion`, `producto_letra_chica`, `producto_palabras_clave`, `producto_imagen`, `producto_estatus`, `created_at`, `updated_at`) VALUES
(1, 'Combo de dulcería a elegir en Cinépolis', 1, 5, '<p><span style=\"font-size: 18px;\"><b>El combo a elección es mediano.\r\n</b></span></p><p><b>Cinépolis\r\n</b></p><p>Se trata de una empresa que, a pesar de haber proyectado varias veces la destrucción del mundo, es visitada por una gran mayoría de su población, ya que es una de las compañías de exhibición cinematográfica más grande de América Latina y reconocida a nivel mundial. Cuenta con servicios de salas IMAX, 3D y Macro XE, y ofrece productos como Cinecafé, Dulcípolis y Coffee Tree, por nombrar algunos.\r\n</p><p>\r\n</p><p><span style=\"font-size: 18px;\"><font color=\"#397b21\"><b>El Groupon se puede utilizar desde el 02 de diciembre de 2017 hasta el 27 de enero de 2018</b></font></span></p>', '<ul><li>Válido de lunes a domingo en todas las salas tradicionales, IMAX y 3D a nivel nacional \r\n</li><li>No válido para salas VIP \r\n</li><li>El cupón se canjea en dulcería \r\n</li><li>No válido con otras promociones ni en paquetes armados \r\n</li><li>No válido con otros productos de dulcería \r\n</li><li>No válido en dulcerías Cinépolis VIP \r\n</li></ul><p>En caso de requerir factura enviar correo a info@groupon.com.mx \r\n</p><p>Tel: 01 800 120 0220 \r\n</p><p>Un cupón por persona\r\n</p><p>Ver condiciones que aplican a todos los Groupones.\r\n</p><p>El socio es el único responsable ante los compradores por la calidad de los productos y servicios publicitados.</p>', 'combo,dulceria,cine', '1514068151.jpg', 1, '2017-12-24 02:29:11', '2017-12-24 02:29:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_precios`
--

CREATE TABLE `producto_precios` (
  `id` int(10) UNSIGNED NOT NULL,
  `productop_id` int(10) UNSIGNED NOT NULL,
  `productop_titulo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `productop_total` double(8,2) NOT NULL,
  `productop_descuento` double(8,2) NOT NULL,
  `productop_total_descuento` double(8,2) NOT NULL,
  `productop_fecha_inicio` date DEFAULT NULL,
  `productop_fecha_fin` date DEFAULT NULL,
  `productop_slider` int(11) NOT NULL DEFAULT '0',
  `productop_oferta` int(11) NOT NULL DEFAULT '0',
  `productop_estatus` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `producto_precios`
--

INSERT INTO `producto_precios` (`id`, `productop_id`, `productop_titulo`, `productop_total`, `productop_descuento`, `productop_total_descuento`, `productop_fecha_inicio`, `productop_fecha_fin`, `productop_slider`, `productop_oferta`, `productop_estatus`, `created_at`, `updated_at`) VALUES
(1, 1, 'Combo mediano crepa con 2 ingredientes + café americano', 62.00, 10.00, 55.80, NULL, NULL, 1, 0, 1, '2017-12-24 02:29:11', '2017-12-24 02:29:11'),
(2, 1, 'Combo mediano de palomitas de mantequilla + refresco', 65.00, 10.00, 58.50, NULL, NULL, 0, 0, 1, '2017-12-24 02:29:11', '2017-12-24 02:29:11'),
(3, 1, 'Combo mediano de nachos con queso + refresco', 68.00, 5.00, 64.60, NULL, NULL, 1, 0, 1, '2017-12-24 02:29:11', '2017-12-24 02:29:11'),
(4, 1, '', 50.00, 15.00, 42.50, '2017-12-24', '2017-12-31', 1, 1, 2, '2017-12-24 03:54:17', '2017-12-24 03:58:40'),
(5, 1, '', 250.00, 15.00, 212.50, '2017-12-24', '2018-01-28', 0, 1, 1, '2017-12-24 04:12:25', '2017-12-24 04:18:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `users_nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_apellido` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_tipo_usuario` int(11) NOT NULL,
  `users_estatus` int(11) NOT NULL,
  `users_aliado_id` int(10) UNSIGNED DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `users_nombre`, `users_apellido`, `email`, `password`, `users_tipo_usuario`, `users_estatus`, `users_aliado_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'SuperAdmin', '', 'superadmin@admin.com', '$2y$10$avbZ9FePACFdIKRTiqNVC.vejz3i7/LJQa83b/FY8dyUj33ynZ4Hy', 1, 1, 0, 'AOPIsh1XtzXvvDney0bbjhBUNGlhxRCUvPhzLMSD7GvKTidEOiOTxTD2tP0j', '2017-12-24 02:18:41', '2017-12-24 02:18:41'),
(2, 'Admin', '', 'admin@admin.com', '$2y$10$oashsau4KjN/AP09l05f7OCOXgvqzC7sCs1ajykcnlRRTYQnZoEC2', 2, 1, 0, 'fhP1jcYWYaguBdvgikylL5QjQtR9syTvFvIXWUP5FKUZtzLaH7uXoVUkKRCr', '2017-12-24 02:18:41', '2017-12-24 02:18:41'),
(3, 'Basico', '', 'basico@admin.com', '$2y$10$l/xcCg2eZAta736B9x06jequMx3fhDkTNdn9ZB7l7Drdfvw.zmaNG', 3, 1, 0, NULL, '2017-12-24 02:18:41', '2017-12-24 02:18:41'),
(4, 'Josue', 'Moreno', 'josuelmm92@gmail.com', '$2y$10$M3E5mRwxaU9dtdQ7C5FLJu0tL9ENOKzrGNicngj2VCflH6tbV4q8W', 3, 1, 0, 'nV1XgGRpaROUmfEwlUlyPlCJSaQIdAavyd3vAyxc45uU6YhUxx1Utf8FjCsO', '2017-12-24 02:18:41', '2017-12-24 19:24:29');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aliados`
--
ALTER TABLE `aliados`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `aliados_aliado_email_unique` (`aliado_email`);

--
-- Indices de la tabla `ayudas`
--
ALTER TABLE `ayudas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ayudas_ayudas_cat_id_foreign` (`ayudas_cat_id`);

--
-- Indices de la tabla `ayudas_categorias`
--
ALTER TABLE `ayudas_categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ayudas_detalles`
--
ALTER TABLE `ayudas_detalles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ayudas_detalles_ayudas_id_foreign` (`ayudas_id`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `compras_compra_users_id_foreign` (`compra_users_id`),
  ADD KEY `compras_compra_productop_id_foreign` (`compra_productop_id`);

--
-- Indices de la tabla `conf_categorias`
--
ALTER TABLE `conf_categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `conf_subcategorias`
--
ALTER TABLE `conf_subcategorias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `conf_subcategorias_conf_subcat_cat_id_foreign` (`conf_subcat_cat_id`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `empresas_empresa_email_unique` (`empresa_email`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
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
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productos_producto_categoria_foreign` (`producto_categoria`),
  ADD KEY `productos_producto_subcategoria_foreign` (`producto_subcategoria`);

--
-- Indices de la tabla `producto_precios`
--
ALTER TABLE `producto_precios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `producto_precios_productop_id_foreign` (`productop_id`);

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
-- AUTO_INCREMENT de la tabla `aliados`
--
ALTER TABLE `aliados`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ayudas`
--
ALTER TABLE `ayudas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `ayudas_categorias`
--
ALTER TABLE `ayudas_categorias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `ayudas_detalles`
--
ALTER TABLE `ayudas_detalles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `conf_categorias`
--
ALTER TABLE `conf_categorias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `conf_subcategorias`
--
ALTER TABLE `conf_subcategorias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `producto_precios`
--
ALTER TABLE `producto_precios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ayudas`
--
ALTER TABLE `ayudas`
  ADD CONSTRAINT `ayudas_ayudas_cat_id_foreign` FOREIGN KEY (`ayudas_cat_id`) REFERENCES `ayudas_categorias` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `ayudas_detalles`
--
ALTER TABLE `ayudas_detalles`
  ADD CONSTRAINT `ayudas_detalles_ayudas_id_foreign` FOREIGN KEY (`ayudas_id`) REFERENCES `ayudas` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_compra_productop_id_foreign` FOREIGN KEY (`compra_productop_id`) REFERENCES `producto_precios` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `compras_compra_users_id_foreign` FOREIGN KEY (`compra_users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `conf_subcategorias`
--
ALTER TABLE `conf_subcategorias`
  ADD CONSTRAINT `conf_subcategorias_conf_subcat_cat_id_foreign` FOREIGN KEY (`conf_subcat_cat_id`) REFERENCES `conf_categorias` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_producto_categoria_foreign` FOREIGN KEY (`producto_categoria`) REFERENCES `conf_categorias` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `productos_producto_subcategoria_foreign` FOREIGN KEY (`producto_subcategoria`) REFERENCES `conf_subcategorias` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `producto_precios`
--
ALTER TABLE `producto_precios`
  ADD CONSTRAINT `producto_precios_productop_id_foreign` FOREIGN KEY (`productop_id`) REFERENCES `productos` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
