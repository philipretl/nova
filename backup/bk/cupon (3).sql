-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-05-2018 a las 17:37:32
-- Versión del servidor: 10.1.29-MariaDB
-- Versión de PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cupon`
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

--
-- Truncar tablas antes de insertar `aliados`
--

TRUNCATE TABLE `aliados`;
--
-- Volcado de datos para la tabla `aliados`
--

INSERT INTO `aliados` (`id`, `aliado_tipo`, `aliado_nombres`, `aliado_apellidos`, `aliado_razon_social`, `aliado_nit`, `aliado_direccion`, `aliado_ciudad`, `aliado_pais`, `aliado_telefono_fijo`, `aliado_telefono_celular`, `aliado_email`, `aliado_web`, `aliado_descripcion`, `aliado_ofrece`, `created_at`, `updated_at`) VALUES
(7, 1, 'maxparati', 'gloria escobar', NULL, '65764832', 'cra 71 c 64 c 28', 'popayan', 'colombia', '3182800655', '3182800655', 'maxparati18@gmail.com', NULL, 'venta de articulos novedosos para el hogar y uso personal', 'cortadores,batidoras,dobladoras de ropa  , fajas , etc', '2018-02-22 12:21:31', '2018-02-25 17:20:25'),
(10, 1, 'DELIGHT', 'MARIA JOSE GONZALEZ ESCOBAR', NULL, '1141718994', 'cra 71 c 64 c 28', 'popayan', 'colombia', '4585083', '34432222212', 'mariajosege2010@gmail.com', NULL, 'fabricacion y venta de coopcakes ,pay , postres , comidad rapidas y mucho mas', 'coopcakes ,pay , postres , comidas rapidas y mucho mas', '2018-02-23 16:19:26', '2018-02-25 17:31:55'),
(11, 1, 'maria margoth', 'agudelo sanchez', NULL, '26255740', NULL, 'popayan', 'colombia', '3187096053', '3187096053', 'lenceriacreaciones@gmail.com', NULL, 'elaboracion y venta de lenceria hogar', 'sabanas,tendidos,manteles', '2018-02-25 17:09:32', '2018-02-25 17:09:32'),
(12, 1, 'ASIC', 'YOLANDA ESCOBAR', NULL, '65782195', 'CRA 6 A 23 N 29', 'popayan', 'colombia', '8337031', '3116082212', 'YOES1978@HOTMAIL.COM', NULL, 'Pone a su disposición un completo acompañamiento en los siguientes servicios:\r\n•	Sistematización y organización contable\r\n•	Planeación Fiscal y Financiera\r\n•	Elaboración de toda clase de Declaraciones de Impuestos territoriales y Nacionales\r\n•	Asesoría en requerimientos y procesos con la DIAN.\r\n•	Asesoría en materia comercial y constitución de empresa (Cámara de Comercio, Registro Único Tributario, Actas, Estatutos y todo lo relacionado)\r\n•	Estudios financieros para créditos ante bancos y otras entidades \r\n•	Asesoría jurídica en toda clase de procesos.', 'Sistematización y organización contable •	Planeación Fiscal y Financiera •	Elaboración de toda clase de Declaraciones de Impuestos territoriales y Nacionales •	Asesoría en requerimientos y procesos con la DIAN. •	Asesoría en materia comercial y constitución de empresa (Cámara de Comercio, Registro Único Tributario, Actas, Estatutos y todo lo relacionado) •	Estudios financieros para créditos ante bancos y otras entidades  •	Asesoría jurídica en toda clase de procesos.', '2018-02-25 17:38:12', '2018-02-25 17:38:12'),
(13, 1, 'Daniel', 'GONZALEZ ESCOBAR', NULL, '1002961036', NULL, 'popayan', 'colombia', '3155865364', '3155865364', 'elocuencias26@gmail.com', NULL, 'Todo en accesorios para mascotas', 'Rascadores para gatos , gimnasios, comedores ,accesorios en general', '2018-03-15 11:33:28', '2018-03-15 11:33:28'),
(14, 1, 'ANDRES FELIPE', 'VASQUEZ MUÑOZ', NULL, '1061768975-5', 'CARRERA 14 # 6 - 45', 'POPAYAN CAUCA', 'COLOMBIA', '3202177929', '3202177929', 'whithecitycaraudio@gmail.com', 'https://web.facebook.com/White-city-performance-car-audio-190134544738933/?ref=bookmarks', 'Almacén  de venta de todos los artículos de Audio y Vídeo para automóviles, soporte técnico e instalaciones de todas marcas, instalación de alarmas, sistema de bloqueos polarizados y Lujos.', 'Equipos de Audio Vídeo y Seguridad Vehicular', '2018-03-15 18:43:20', '2018-03-15 18:43:20'),
(15, 1, 'JULIO CESAR', 'MAYA BASTIDAS', NULL, '98385333-6', 'CARRERA 6 A 23 N 29 CIUDAD JARDIN', 'POPAYAN CAUCA', 'COLOMBIA', '3122281592', '3122281592', 'jc7maya@hotmail.com', NULL, 'Profesional en Seguridad y Salud en el Trabajo Instructor en Primeros Auxilios, en atención y prevención del Riesgo y creación de Brigadas De Emergencia.', 'Capacitaciones en Primeros Auxilios, en Atención y Prevención de desatraes, Valoración   de Riesgos Laborales,Elaboración de Matriz de Peligros, Elaboración de Sistema de Gestión en Seguridad y Salud en el Trabajo, Auditoria Interna en Sistema de Gestión en Seguridad y Salud en el trabajo', '2018-03-15 19:39:57', '2018-03-15 19:39:57'),
(17, 1, 'CUPONCITY COLOMBIA', 'CUPONCITY COLOMBIA', NULL, '98.385.333-6', 'CRA 6 A 23 N 29', 'popayan', 'colombia', '8337031', '3122281592', 'administracion@cuponcity.com.co', 'http://cuponcity.com.co/Inicio', 'VENTA DE CUPONES DE DESCUENTO', 'BIENES Y SERVICIOS', '2018-04-09 15:15:01', '2018-04-09 15:15:01'),
(18, 1, 'MARCELA ALEJANDRA', 'HOYOS GOMEZ', NULL, '1061745757', 'CALLE 7 14 46', 'POPAYAN', 'COLOMBIA', '8357667', '3155507654', 'marce_ahg@hotmail.com', NULL, 'peinados infantiles y para dama, extensión de pestañas', 'peinados infantiles y para dama, extensión de pestañas', '2018-04-20 11:35:58', '2018-04-20 11:35:58'),
(19, 1, 'WILLY ORLANDO', 'MOSQUERA LEDEZMA', NULL, '76316877', 'CARRERA 11 #67-35', 'POPAYAN', 'COLOMBIA', '3135973301', '3182443167', 'willyledezma7013@gmail.com', NULL, 'Instalación e Inducción de alarmas y GPS para todo tipo de automotor', 'servicio electrico automotriz, repuestos electricos, inyección electronica y sincronización, venta de baterias', '2018-04-20 18:13:20', '2018-04-20 18:13:20'),
(20, 1, 'WENDY CAROLINA', 'GUTIERREZ PACHECO', NULL, '1065618636', 'CARRERA 10A #15-22', 'POPAYAN', 'COLOMBIA', '0', '3003385599', 'wenca-@hotmail.com', NULL, 'gorros y boinas en crochet.\r\nvestidos para bebe en tejido crochet', 'gorros y boinas en crochet. vestidos para bebe en tejido crochet', '2018-04-20 19:15:11', '2018-04-20 19:15:11'),
(22, 1, 'LIZARDO', 'CRUZ PIEDRAHITA', NULL, '10292068', 'CARRERA 10A #15-22', 'POPAYAN', 'COLOMBIA', '0', '3104964232', 'lizardocruzp@outlook.es', NULL, 'Mantenimiento preventivo y correctivo para lavadoras', 'Mantenimiento preventivo y correctivo para lavadoras', '2018-04-20 19:59:25', '2018-04-20 19:59:25'),
(23, 1, 'SANDRA PATRICIA', 'SATIZABAL', NULL, '34565117', 'CARRERA 11 #3-50 Edificio Aura María Piso 2', 'popayan', 'colombia', '8205412', '3154159826', 'satisan144@gmail.com', NULL, 'Odontología Estetica Integral', 'Odontología Estetica Integral', '2018-04-23 15:35:13', '2018-04-23 15:35:13'),
(24, 1, 'JULIANA MARCELA', 'DIAZ BAMBAGUE', NULL, '106190571', 'QUINTAS DE JOSE MIGUEL CASA H14', 'popayan', 'colombia', '0', '3187946925', 'julianadiazmayo9@hotmail.com', 'https://www.facebook.com/DulceJulietaPopayan/', '100 exquisitos alfajores. Los alfajores de Dulce Julieta se preparan con productos de alta calidad, para crear una mezcla suave al paladar y no empalagosa, esto se nota en la primera prueba, su suavidad y el dulce que lo hace delicioso a todos tus sentidos.  Es adornado con azúcar glass espolvoreada y coco rallado (esto es opcional). Lo que nos hace diferente es que los alfajores de Dulce Julieta son preparados con la receta original de Argentina. Son excelentes para pasabocas en su presentación original, recordatorios comestibles bañados con chocolate blanco o café según el gusto y empacados según la ocasión. Tambien para fiestas infantiles los alfajores pueden ser coloridos y llamativos en forma de bombom.', 'Repostería y algo más', '2018-04-24 07:22:02', '2018-04-24 07:22:02'),
(25, 1, 'NOSCAR MAURICIO', 'LLANTEN LLANTEN', NULL, '76309994', 'CARRERA 11 #3-50 Edificio Aura María Piso 2', 'popayan', 'colombia', '8205412', '3114287811', 'medicinalternativacauca@gmail.com', NULL, 'Medicina Alternativa, consulta médica, terapia neural, scaner cuantico', 'Medicina Alternativa, consulta médica, terapia neural, scaner cuantico y venta de medicamentos naturales', '2018-04-24 13:42:20', '2018-04-24 13:42:20'),
(26, 1, 'ELIZABETH', 'MENESES DELGADO', NULL, '34546980', 'CALLE 22N #8-42', 'popayan', 'colombia', '8232595', '3166571897', 'jessibeja_05@hotmail.com', 'https://m.facebook.com/centrodeesteticakataleya/', '1. Reduce de 5 a 12 cms Inclue: una sesión de carbixiterapia o hidrolipocasia+lipocavitación+vacumterapia+biogym+cintura ternica. Precio cupón $100.000.   2. Rejuvenecimiento facial mas oxigenación con carboxiterapia. Incluye: limpieza, tonificación, extración, microdermoabrasio con puntas de diamante, radiofrecuencia, carboxiterapia y mascarilla facil, precio cupón $100.000.     3. Masaje relajante en aceites con maseroterapia mas aparatología, jacuzzi con sales minerales y copa de frutas , precio cupon $80.000.    4. Extensión de pestañas pelo a pelo en pestañas de seda, valor cupon $100.000', '1. Reduce de 5 a 12 cms Inclue: una sesión de carbixiterapia o hidrolipocasia+lipocavitación+vacumterapia+biogym+cintura ternica. Precio cupón $100.000.   2. Rejuvenecimiento facial mas oxigenación con carboxiterapia. Incluye: limpieza, tonificación, extración, microdermoabrasio con puntas de diamante, radiofrecuencia, carboxiterapia y mascarilla facil, precio cupón $100.000.     3. Masaje relajante en aceites con maseroterapia mas aparatología, jacuzzi con sales minerales y copa de frutas , precio cupon $80.000.    4. Extensión de pestañas pelo a pelo en pestañas de seda, valor cupon $100.000', '2018-04-27 13:45:41', '2018-04-27 13:45:41');

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
-- Truncar tablas antes de insertar `ayudas`
--

TRUNCATE TABLE `ayudas`;
--
-- Volcado de datos para la tabla `ayudas`
--

INSERT INTO `ayudas` (`id`, `ayudas_cat_id`, `ayudas_titulo`, `ayudas_descripcion`, `ayudas_estatus`, `created_at`, `updated_at`) VALUES
(1, 1, 'Realicé una compra, pero no  encuentro el cuponcity en mi cuenta, qué puedo hacer?', '<p>Si realizaste una compra y no la encuentras en tu cuenta o no recibiste el mensaje de confirmación, pudo haberse generado algún problema; Nuestra prioridad es ayudarte, para hacerlo, por favor ingresa los siguientes datos y demás información solicitada en el <b><a href=\"http://cuponcity.com.co/Contacto\" target=\"_blank\"><font color=\"#000000\">formulario “ponte en contacto”</font></a> </b>\r\n</p><p>•	Correo electrónico utilizado cuando  realizaste la compra.\r\n</p><p>•	Fecha en la que realizaste la compra y el valor total.\r\n</p><p>•	Número de transacción  que recibiste vía mail al realizar tu pago. \r\n</p><p>Debemos aclararte que si el Cuponcity  adquirido corresponde a un Producto, desafortunadamente no podremos adelantar la entrega del mismo, y la única solución que podremos darte es la devolución del dinero.\r\n</p><p><br></p>', 1, '2018-01-23 21:08:32', '2018-01-23 21:11:55'),
(2, 1, 'Quiero ver todos los Cuponcity que he comprado, cómo lo hago?', '<p>Ver o descargar  tus Cuponcity en lista es muy fácil, sólo haz lo siguiente después de ingresar a la página www.cuponcity.com.co:\r\n</p><p>1.	Ingresa a la sección “Citycuenta” ubicada en la parte superior derecho de la página web.\r\n</p><p>2.	Escribe tu usuario y contraseña dando clic en “entrar”.\r\n</p><p>3.	Haz clic en \"Mis Cuponcity\" y encontrarás todos los cupones que has comprado.\r\n</p><p>Si realizaste la compra el mismo día en el que consultas tu cupón, es posible que éste aparezca aún en estado de “emisión”; Cuponcity toma hasta 3 horas para el envío electrónico del mismo, después de realizado el pago a través de internet. Para pagos en efectivo, lo haremos de manera inmediata.\r\n</p><p>Si  por algún motivo, agotando el proceso anterior, aún no puedes ver tu cupón, por favor <a href=\"http://cuponcity.com.co/Contacto\" target=\"_blank\"><b><font color=\"#000000\">“ponte en contacto”</font></b></a><b></b></p><p><br></p>', 1, '2018-01-23 21:10:49', '2018-01-23 21:12:06'),
(3, 1, 'Me gustaría recibir en mi correo las ofertas de Cuponcity, qué debo hacer?', '<p>Recibir nuestro Cityboletín diario de cupones y ofertas es muy fácil, sólo debes registrarte como usuario dando clic en  <b><a href=\"http://cuponcity.com.co/CrearCityCuenta\" style=\"color:black\" target=\"_blank\">“Crear mi City Cuenta”</a></b>, diligencia la información solicitada y listo!!! Empieza a recibir nuestras ofertas diarias.</p>', 1, '2018-01-23 21:11:39', '2018-01-23 21:12:54'),
(4, 2, 'Olvidé mi contraseña, cómo la recupero?', '<p>Recuperar la contraseña es muy fácil, sólo entra por <a href=\"http://cuponcity.com.co/password/reset\" target=\"_blank\" style=\"\"><font color=\"#000000\"><b>“Recupera tu password”</b></font></a> ingresando tu correo electrónico, recibirás un mensaje con las instrucciones para iniciar el proceso de recuperación.\r\n</p><p>Si no ves el correo en tu bandeja de entrada, revisa también por favor el correo no deseado.\r\n</p><p>Si por algún motivo, no logras la recuperación siguiendo los anteriores pasos, <a href=\"http://cuponcity.com.co/Contacto\" target=\"_blank\"><b><font color=\"#000000\">“ponte en contacto”</font></b></a><b></b></p>', 1, '2018-01-23 21:14:46', '2018-01-23 21:14:46'),
(5, 3, '¿Cuándo recibo mi compra?', '<p>Verifica en tu cupón la letra menuda para saber exactamente cuando llega tu pedido, en caso de no recibirlo dentro del tiempo establecido <b><a style=\"color:black\" href=\"http://cuponcity.com.co/Contacto\" target=\"_blank\">Ponte en Contacto</a></b> y cuanto antes daremos solución a tu caso.&nbsp;</p>', 1, '2018-01-23 21:16:48', '2018-01-23 21:16:48'),
(6, 4, '¿Cómo realizo mis City Compras?', '<p>Al ver en Cuponcity una oferta que te interesa, es importante que leas primero nuestros términos y condiciones aplicables a la compra que vas a realizar. Luego sigue los siguientes pasos para asegurar la compra:\r\n</p><p>1. Selecciona tu cupón y haz clic en el botón “! Lo quiero!”\r\n</p><p>2. Elige la cantidad de Cuponcity que deseas comprar.\r\n</p><p>3. Escoge el medio de pago a utilizar en tu compra.\r\n</p><p>4. Clic en “Acepto términos y condiciones”.\r\n</p><p>De acuerdo al medio de pago que seleccionaste, debes ingresas la información solicitada para finalizar el proceso. Si es un City Producto, deberás elegir la dirección para el despacho.\r\n</p><p>Si tu  compra ha sido exitosa, recibirás un correo que así lo confirma.\r\n</p><p>Si tu compra es un City Producto, selecciona a qué dirección deseas que lo enviemos, en este caso sólo espera a que llegue a tu domicilio en el plazo pactado en los términos y condiciones o si prefieres puedes reclamarlo en nuestra City Oficina. Recibirás también a vuelta de correo tu Cuponcity con indicaciones de la compra.\r\n</p><p>Si tu compra es diferente a un Cityproducto, enviaremos el Cuponcity a tu correo electrónico en las siguientes tres horas, con las indicaciones para que puedas hacerlo efectivo.\r\n</p><p>Si compraste un Cityproducto con despacho, entonces sólo deberás esperar a que éste llegue a tu casa dentro de los plazos estipulados en las condiciones de la oferta.\r\n</p><p>Si la compra corresponde a un City Destino o plan turístico, te enviaremos la confirmación de compra de tu paquete máximo hasta dentro de los próximos 3 días hábiles, sin embargo por nuestra política de servicio al cliente, lo haremos en el menor tiempo posible. Recuerda que la reserva deberás tramitarla directamente con el proveedor del servicio y para ello siempre revisa la letra menuda.\r\n</p>', 1, '2018-01-23 21:17:34', '2018-01-23 21:17:34'),
(7, 4, 'Qué medios de pago puedo emplear para comprar mis Cuponcity?', '<p>Te facilitamos el pago de tus Cuponcity a través de:\r\n</p><p>- Consignación directa en Cuenta Bancaria\r\n</p><p>- Pago directo en nuestra City Oficina\r\n</p><p>-Despacho contra entrega, cuando se trate de productos (en algunos casos aplica cargo adicional por gastos de envío).\r\n</p><p>- Pendiente confirmar pagos PSE\r\n</p><p>-Citypuntos: Si tienes puntos a favor en tu cuenta   ! gástalos en lo que quieras de nuestra página web! Ten en cuenta que si tu compra es menor al de tus Citypuntos tendrás un saldo a favor, y si la compra es mayor a tus Citypuntos sólo debes cancelar el valor del excedente empleando el medio de pago de tu preferencia.\r\n</p><p><br></p>', 1, '2018-01-23 21:17:53', '2018-01-23 21:17:53'),
(8, 4, 'Pagué mi Cuponcity 2 veces, qué hago?', '<p>Si tu intención era comprar un solo Cuponcity de alguna oferta pero por error del sistema se te cobró dos veces,  entraremos a revisar lo sucedido, con el fin de darte pronta solución, debemos verificar el origen del error. \r\n</p><p>Por favor ingresa a <b><a href=\"http://cuponcity.com.co/Perfil\" target=\"_blank\" style=\"color:black;\">“City Cuenta”</a></b> y verifica la sección “ Mis Cuponcity”, allí se listarán tus cupones comprados y podrás revisar si la compra objeto de doble pago efectivamente generó 2 cupones. \r\n</p><p>En caso contrario, te pedimos que nos envíes en nuestro formulario <b><a href=\"http://cuponcity.com.co/Contacto\" target=\"_blank\"><font color=\"#000000\">“Ponte en Contacto”</font></a> </b>la siguiente información:\r\n</p><p>•	Correo electrónico utilizado cuando  realizaste la compra.\r\n</p><p>•	Fecha en la que realizaste la compra y el valor total.\r\n</p><p>•	Número de transacción  que recibiste vía mail al realizar tu pago. \r\n</p><p>Nuestra prioridad es tu satisfacción, envíanos esta información tan pronto puedas para solucionar tu caso de manera rápida.\r\n</p><p><br></p>', 1, '2018-01-23 21:18:53', '2018-02-21 10:53:08'),
(9, 4, '¿Cuántos Citypuntos tengo acumulados y cómo aprovecharlos?', '<p>Revisa tus City  Puntos entrando a <b><a href=\"http://cuponcity.com.co/CityPuntos\" target=\"_blank\">“City Cuenta”</a></b>, sección “City Puntos”.  Estos puntos son dinero disponible para descontar de tu próxima compra.\r\n</p><p>Ten en cuenta que si tu compra es menor al de tus City Puntos tendrás un saldo a favor, y si la compra es mayor a tus City Puntos sólo debes cancelar el valor del excedente empleando el medio de pago de tu preferencia.\r\n</p><p>! Recuerda que tus City Puntos vencerán cada 12 meses!  No los pierdas!!!   Aplica restricciones para puntos por Giftcards, los cuales no generarán saldos a favor, se utilizarán en una sola compra.\r\n</p>', 1, '2018-01-23 21:19:26', '2018-02-21 11:02:19'),
(10, 5, 'Cómo se la disponibilidad de fechas para mi viaje  antes de comprar mi cuponcity?', '<p>Enviamos un correo con los datos del cupón que te interesa y cuanto antes te informaremos si tu fecha está disponible, sin embargo, los acuerdos finales y reserva debes coordinarlos directamente con el proveedor y, en la letra menuda encontraras todos los pormenores para que tu experiencia sea única, lee términos y condiciones de tu cupón</p>', 1, '2018-01-23 21:19:54', '2018-01-23 21:19:54'),
(11, 5, '¿Viajo con niños, tengo que pagar por ellos?', '<p>Si compras tiquetes aéreos, en vuelos nacionales los bebes y niños menores de 2 años no pagan, en vuelos internacionales, pagan el 10% de la tarifa sin derecho a utilizar silla, niños más grandes entre 2 y 11 años, pagan una tarifa diferencial, a consideración de cada aerolínea) y en las tarifas económicas o promocionales cobran el tiquete pleno.\r\n</p><p>En viajes terrestres\r\n</p><p>Para los tiquetes por vía terrestre los niños menores de 3 años no pagan tiquete, pero tampoco ocupan silla.\r\n</p><p><br></p>', 1, '2018-01-23 21:20:12', '2018-01-23 21:20:12'),
(12, 5, 'Me equivoque cuando digite mi nombre o alguna información importante para realizar la reserva', '<p>Las aerolíneas cobran normalmente una penalidad por cualquier cambio que realices en tu reserva, además puedes perder tu itinerario, ten especial cuidado con esto, para evitar contratiempos.</p>', 1, '2018-01-23 21:20:27', '2018-01-23 21:20:27'),
(13, 5, '¿Qué documentos me solicitan para viajar en un vuelo nacional o al extranjero?', '<p>Los documentos básicos para viajar al extranjero dependen de tu nacionalidad y del país de destino. Necesitarás tu pasaporte o documento de identidad. Además, algunos países solicitan Visa, la que debe ser tramitada antes de iniciar el viaje. \r\n</p><p>Para viajar en un vuelo nacional, los documentos oficiales para acreditar tu identidad son tu cédula de identidad o pasaporte \r\n</p><p>Los pasajeros menores de edad tienen que identificarse con su TARJETA   de identidad, registro civil y/o pasaporte electrónico. En el caso de los vuelos internacionales todos los menores, viajen solos o acompañados, tarjeta   de identidad, registro civil y/o pasaporte. Además, presentar una autorización del padre que no viaja autenticada ante notaria.\r\n</p>', 1, '2018-01-23 21:20:40', '2018-01-23 21:20:40'),
(14, 6, 'Mi Cuponcity está a punto de vencer y no podré usarlo!', '<p>Nuestros Cuponcity tienen términos y condiciones diferentes y de acuerdo a éstos están también definidos los períodos de vigencia para que los hagas efectivos. Consulta siempre en cada Cuponcity el período de validez.\r\n</p><p>Si revisando tu Cuponcity encuentras que está a punto de expirar, debes tratar de utilizarlo cuanto antes u obsequiarlo a alguien que logre aprovecharlo. \r\n</p><p>Cuponcity enviará un correo recordatorio días antes del vencimiento con el fin de avisarte que ya debes utilizar tu cupón para no perderlo, pero recuerda que es tu responsabilidad revisar siempre la letra menuda para verificar las vigencias y demás.\r\n</p><p>Debemos informarte que una vez expirado el Cuponcity, lamentablemente éste ya no podrá hacerse efectivo, excepto si el vencimiento se origina por el incumplimiento de nuestro aliado o prestador del servicio. En este caso te pedimos que te comuniques con nosotros máximo dentro de los 8 días siguientes, cuéntanos tu inconformidad y procederemos a gestionar la devolución o cambio a que tienes derecho. \r\n</p><p>Nuestra prioridad es tu satisfacción, por eso si se te presentan inconvenientes graves que impidan acceder al producto o servicios que ofrece tu cupón,  por favor diligencia el formulario <b><a href=\"http://cuponcity.com.co/Contacto\" target=\"_blank\">“Ponte en Contacto”</a></b> y buscaremos pronto una solución.\r\n</p>', 1, '2018-01-23 21:21:24', '2018-02-21 11:09:10'),
(15, 6, 'Hice la compra de un Cityviaje, y no logro comunicarme con la empresa para gestionar mi reserva, qué hago?', '<p>Recuerda verificar los términos y condiciones señalados en tu Cityviaje o Plan Turístico, allí encontrarás líneas de contacto y horarios de atención, también puedes buscar mayor información de contacto en la página web del proveedor\r\n</p><p>Si no logras comunicarte, insiste por favor en diferentes horarios, de persistir la imposibilidad para comunicarte, intenta enviando un correo electrónico, si después de 48 horas definitivamente no logras comunicarte, diligencia e formulario <b><a href=\"http://cuponcity.com.co/Contacto\" target=\"_blank\">“Ponte en Contacto”</a></b> o comunícate directamente a nuestras líneas de atención para darte una pronta solución.\r\n</p><p>Recuerda siempre revisar la fecha de expiración y la letra menuda en cada Cuponcity.\r\n</p>', 1, '2018-01-23 21:21:45', '2018-02-21 11:09:32'),
(16, 1, 'Por qué si me suscribí en Cuponcity no me llegan las ofertas del día?', '<p>Puede deberse en primera medida a que los correos de Cupon City lleguen directamente al buzón de correos no deseados, sólo debes marcarlos como correo deseado para que éstos empiecen a llegar a tu bandeja de entrada.. Si el problema persiste, intenta registrarte de nuevo en <b><a href=\"http://cuponcity.com.co/CrearCityCuenta\" target=\"_blank\">“Crear mi City Cuenta”</a></b></p>', 1, '2018-02-12 19:18:45', '2018-02-12 19:18:45'),
(17, 1, 'Cómo dejar de recibir el Cityboletín de ofertas diarias en mi correo electrónico?', '<p>Si no quieres recibir más nuestro Cityboletín diario en tu correo, debes ingresar a tu <b><a href=\"http://cuponcity.com.co/Perfil\" target=\"_blank\" style=\"color:black;\">“City Cuenta”</a></b> siguiendo estos pasos:</p><p>1.&nbsp; Inicia sesión y dirígete donde esta tu nombre y le das clic en Perfil + Suscripcion</p><p>2. Dale clic en darse de baja de todas las suscripciones</p><p>En un plazo máximo de 24 horas, ya no recibirás más nuestro Cityboletín diario de ofertas, pero no olvides que cuando lo desees, puedes ingresar a www.cuponcity.com.co para beneficiarte de nuestras promociones y descuentos.</p>', 1, '2018-02-12 19:22:24', '2018-02-21 10:52:26'),
(18, 2, 'Por qué no logro acceder a mi Citycuenta?', '<p>Es probable que ya tengas tu “Citycuenta” pero no puedas acceder a ella, intenta con <b><a style=\"color:black\" href=\"http://cuponcity.com.co/password/reset\" target=\"_blank\">“Recupera tu password“</a></b> del punto anterior, pero también puede deberse a que te suscribiste para recibir el Cityboletín de ofertas  pero no te registraste para comprarlas, para hacerlo debes dar clic en “Crear mi City Cuenta”</p>', 1, '2018-02-12 19:25:29', '2018-02-12 19:25:29'),
(19, 5, 'Quiero aprovechar un Cuponcity, pero no tengo pasaporte', '<p>Como colombianos debemos tener pasaporte para realizar viajes al extranjero, puedes adquirir tu cupón para no dejarlo pasar, y simultáneamente tramitar tu pasaporte,\r\n</p><p>aquí toda información para que realices tu tramite\r\n</p><p><a style=\"color:black\" href=\"http://www.cancilleria.gov.co/content/pasaportes-faq\" target=\"_blank\"><b>http://www.cancilleria.gov.co/content/pasaportes-faq</b></a></p>', 1, '2018-02-12 19:28:56', '2018-02-12 19:28:56'),
(20, 6, 'Me dirigí al sitio para redimir mi Cupón y no estaba abierto al público, qué hago?', '<p>Cualquier situación que te impida disfrutar tus Cuponcity tiene prioridad alta para nosotros en la búsqueda de una rápida solución, por eso si acudiste dentro del horario señalado en la publicación, al local del proveedor del bien o servicio, y estaba cerrado, debemos verificar con prontitud qué pasó, buscaremos darte una respuesta que te brinde la satisfacción que esperas.\r\n</p><p>Recuerda revisar la letra menuda, allí encontrarás información precisa de horarios y sitios de atención. También verifica la fecha de expiración de tu Cuponcity, pues una vez vencida, no podremos ayudarte con el proceso de cambio o devolución.\r\n</p><p>Si tu Cuponcity está vigente pero persiste el mismo inconveniente te pedimos que te comuniques con nosotros dando clic en <b><a href=\"http://cuponcity.com.co/Contacto\" target=\"_blank\">“Ponte en Contacto”</a>\r\n</b></p><p><br></p>', 1, '2018-02-12 21:01:47', '2018-02-21 11:10:57'),
(21, 6, 'El código que me asignan en mi Cuponcity no aparece activo según el proveedor, qué hago?', '<p>Por favor ten presente que el código válido será el que aparezca debajo del código de barras.&nbsp; Éste  inicia con las letras CUP seguido de números.\r\n</p><p>Si el error persiste por favor intenta cambiando de navegador.\r\n</p><p>De persistir el mismo conveniente, te pedimos que comuniques con nosotros dando clic en <b><a href=\"http://cuponcity.com.co/Contacto\" target=\"_blank\">“Ponte en Contacto”</a>\r\n</b></p>', 1, '2018-02-12 21:04:36', '2018-02-21 11:11:48'),
(22, 6, 'No estoy satisfecho con el servicio que recibí', '<p>Si el servicio que recibiste no corresponde a lo que compraste o no quedaste 100% satisfecho, por favor comunicate con nosotros a través de <b><a href=\"http://cuponcity.com.co/Contacto\" target=\"_blank\">\"Ponte en Contacto\"</a></b> indicando el detalle del problema.</p>', 1, '2018-02-12 21:06:47', '2018-02-21 11:12:31'),
(23, 3, 'Qué pasa si la plataforma de pagos rechaza mi compra?', '<p>No te quedes con las ganas, si por alguna razón no puedes pagar por la plataforma, puedes acercarte directamente a nuestra City Oficina ubicada en <b>Cra. 6 A 23N 29 Ciudad Jardín Popayán - 8337031</b> y adquirirlo personalmente, y aún mejor, si por falta de tiempo no puedes acercarte, te lo enviamos para pago contra entrega en tu domicilio u oficina ( aplica cargo adicional por gastos de envío)</p>', 1, '2018-02-12 21:08:07', '2018-02-12 21:08:07'),
(24, 3, 'No estás satisfecho con tu compra?', '<p>Si tienes algún inconveniente con tu artículo, está dañado, incompleto o se aleja de lo establecido, Ponte en Contacto y prontamente buscaremos la solución; para ello es indispensable conservar el artículo tal como lo recibiste, sin usar y con todo aquello que haga parte de la compra, y comunicarte antes de cumplirse 3 días de recibido.&nbsp;</p>', 1, '2018-02-12 21:08:27', '2018-02-12 21:08:27'),
(25, 3, 'Garantía  de mi producto', '<p>Para hacer efectiva la garantía por defectos de fábrica o fallas técnicas, debes tener en cuenta las fechas establecidas en la letra menuda de tu Cuponcity, conservar empaque, manuales y demás que se incluyan en tu compra y <b><a href=\"http://cuponcity.com.co/Contacto\" target=\"_blank\">Ponte en Contacto</a></b><a href=\"http://cuponcity.com.co/Contacto\" target=\"_blank\"> </a>para ayudarte cuanto antes.</p>', 1, '2018-02-12 21:09:48', '2018-02-21 10:54:34'),
(26, 3, 'Quiero cambiar la dirección de envío de mi Cuponcity', '<p>Cada vez que compres un Cuponcity el formulario te pedirá la dirección de envío, siempre podrás colocar  la que te sea favorable, pero si aún así necesitas cambiar la dirección, <b><a href=\"http://cuponcity.com.co/Contacto\" target=\"_blank\">Ponte en Contacto</a></b> durante las 6 horas siguientes de realizada la compra, informándonos los nuevos datos y vía e-mail te verificamos si es posible realizar el cambio de dirección.</p>', 1, '2018-02-12 21:10:07', '2018-02-21 11:03:16'),
(27, 3, '¿Dónde está mi City Producto?', '<p>Verifica en tu cupón la letra menuda para saber exactamente cuándo llega tu pedido, en caso de no recibirlo dentro del tiempo establecido <b><a href=\"http://cuponcity.com.co/Contacto\" target=\"_blank\">Ponte en Contacto</a></b> y cuanto antes le damos solución a tu caso.&nbsp;</p>', 1, '2018-02-12 21:10:38', '2018-02-21 11:04:16'),
(28, 3, 'Ya compré mi cuponcity ,y ahora qué hago?', '<p>Ver o descargar tus Cuponcity en lista es muy fácil, ingresa a la página www.cuponcity.com.co:\r\n</p><p>1.	Ingresa a la sección “City Cuenta” ubicada en la parte superior derecha de la página web.\r\n</p><p>2.	Escribe tu usuario y contraseña dando clic en “entrar”.\r\n</p><p>3.	Haz clic en \"Mis Cuponcity\" y encontrarás todos los cupones que has comprado.\r\n</p><p>&nbsp;Cuponcity toma hasta 3 horas para el envío electrónico del mismo, después de realizado el pago a través de internet. Para pagos en efectivo, lo haremos de manera inmediata.\r\n</p><p>Después de ésto ya empezamos el proceso de despacho de tu producto, el cual tardara entre 1 y 3 días hábiles dependiendo del producto, o puedes reclamarlo directamente presentando el Cuponcity.\r\n</p><p>Si por algún motivo, agotando el proceso anterior, aún no puedes ver tu cupón, por favor  <b><a href=\"http://cuponcity.com.co/Contacto\" target=\"_blank\">Ponte en Contacto</a></b> .\r\n</p>', 1, '2018-02-12 21:11:08', '2018-02-21 11:05:30'),
(29, 3, 'Voy a retirar mi compra personalmente', '<p>Cuando des clic en el botón de compra, el sistema te dará la opción de reclamar personalmente tu artículo, luego te enviamos el Cuponcity a tu correo con todas las indicaciones para que procedas a recogerlo, si por alguna razón el tiempo que estipula la letra menuda se vence, <b><a href=\"http://cuponcity.com.co/Contacto\" target=\"_blank\">Ponte en Contacto</a></b> y si el comercio aliado lo permite, (programaremos una fecha sujeto a políticas del distribuidor como tal), no olvides actualizar tus datos para una entrega efectiva.</p>', 1, '2018-02-12 21:11:44', '2018-02-21 11:07:55'),
(30, 3, 'Quiero desistir de mi compra', '<p>En Cuponcity queremos tu satisfacción plena, si por alguna razón ya no quieres disfrutar tu Cuponcity, te devolvemos tu dinero, solo debes tener en cuenta las fechas establecidas en la letra menuda de tu Cuponcity, conservar empaque, manuales y demás que se incluyan en tu compra, nuevos y en perfectas condiciones, recuerda que artículos de uso personal no están sujetos a devolución y <b><a href=\"http://cuponcity.com.co/Contacto\" target=\"_blank\">Ponte en Contacto</a></b> para ayudarte cuanto antes. (Los gastos de envío y devolución corren por cuenta del cliente).</p>', 1, '2018-02-12 21:12:04', '2018-02-21 11:08:43');

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
-- Truncar tablas antes de insertar `ayudas_categorias`
--

TRUNCATE TABLE `ayudas_categorias`;
--
-- Volcado de datos para la tabla `ayudas_categorias`
--

INSERT INTO `ayudas_categorias` (`id`, `ayudas_cat_nombre`, `ayudas_cat_imagen`, `ayudas_cat_estatus`, `created_at`, `updated_at`) VALUES
(1, 'City Inquietudes', '1.png', 1, '2018-01-22 08:32:02', '2018-01-22 08:32:02'),
(2, 'Inquietudes sobre tu Citycuenta', '2.png', 1, '2018-01-22 08:32:02', '2018-01-22 08:32:02'),
(3, 'City Entregas', '3.png', 1, '2018-01-22 08:32:02', '2018-01-22 08:32:02'),
(4, 'Inquietudes sobre tu City Compra', '4.png', 1, '2018-01-22 08:32:02', '2018-01-22 08:32:02'),
(5, 'City Destinos', '5.png', 1, '2018-01-22 08:32:02', '2018-01-22 08:32:02'),
(6, 'City Soluciones', '6.png', 1, '2018-01-22 08:32:02', '2018-01-22 08:32:02'),
(7, 'City Aliados', '7.png', 0, '2018-01-22 08:32:02', '2018-01-22 08:32:02');

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
-- Truncar tablas antes de insertar `ayudas_detalles`
--

TRUNCATE TABLE `ayudas_detalles`;
--
-- Volcado de datos para la tabla `ayudas_detalles`
--

INSERT INTO `ayudas_detalles` (`id`, `ayudas_id`, `ayudas_detalles_util`, `ayudas_users_id`, `ayudas_ip`, `created_at`, `updated_at`) VALUES
(1, 4, 0, 4, '127.0.0.1', '2018-01-25 09:15:09', '2018-01-25 09:15:09'),
(2, 3, 1, 4, '127.0.0.1', '2018-02-12 19:12:17', '2018-02-12 19:12:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id` int(10) UNSIGNED NOT NULL,
  `compra_codigo_compra` text COLLATE utf8mb4_unicode_ci,
  `compra_codigo_hex` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `compra_codigo_entero` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `compra_users_id` int(10) UNSIGNED NOT NULL,
  `compra_productop_id` int(10) UNSIGNED NOT NULL,
  `compra_cantidad` int(11) NOT NULL DEFAULT '0',
  `compra_total` double(8,2) NOT NULL,
  `compra_oferta` int(11) NOT NULL DEFAULT '0',
  `compra_oferta_fecha_inicio` date DEFAULT NULL,
  `compra_oferta_fecha_fin` date DEFAULT NULL,
  `compra_estatus` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `compras`
--

TRUNCATE TABLE `compras`;
--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`id`, `compra_codigo_compra`, `compra_codigo_hex`, `compra_codigo_entero`, `compra_users_id`, `compra_productop_id`, `compra_cantidad`, `compra_total`, `compra_oferta`, `compra_oferta_fecha_inicio`, `compra_oferta_fecha_fin`, `compra_estatus`, `created_at`, `updated_at`) VALUES
(77, '1676236308', '5e62d9', '917367764', 18, 6, 1, 21000.00, 0, NULL, NULL, 5, '2018-04-12 13:53:02', '2018-04-15 14:35:34'),
(84, '274171481', 'a30afd', '46646060', 19, 56, 1, 9000.00, 0, NULL, NULL, 5, '2018-04-17 11:13:58', '2018-04-27 14:23:09'),
(85, '274171481', '3d342d', '1686560377', 19, 25, 1, 15000.00, 0, NULL, NULL, 5, '2018-04-17 11:14:53', '2018-04-27 14:23:09'),
(86, '274171481', '3a6f43', '1895744828', 19, 30, 1, 18000.00, 0, NULL, NULL, 5, '2018-04-17 11:16:58', '2018-04-27 14:23:09'),
(97, '1017718539', '7ded8c', '1735123086', 22, 56, 1, 9000.00, 0, NULL, NULL, 1, '2018-04-19 14:10:20', '2018-04-19 14:10:20'),
(108, '926431642', '15c5a2', '1140387014', 23, 33, 1, 17000.00, 0, NULL, NULL, 1, '2018-04-26 19:28:48', '2018-04-26 19:28:48'),
(109, '2103929270', '822fec', '563983372', 24, 30, 1, 18000.00, 0, NULL, NULL, 3, '2018-04-27 14:22:33', '2018-04-27 14:23:05'),
(110, '1796682614', '343fe8', '696798012', 6, 13, 1, 8000.00, 0, NULL, NULL, 2, '2018-04-27 14:48:02', '2018-04-27 14:48:32'),
(111, '1165532904', '9b8e08', '625198651', 6, 58, 1, 18000.00, 0, NULL, NULL, 2, '2018-04-27 14:51:55', '2018-04-27 14:52:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conf_categorias`
--

CREATE TABLE `conf_categorias` (
  `id` int(10) UNSIGNED NOT NULL,
  `conf_cat_nombre` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conf_cat_condiciones` text COLLATE utf8mb4_unicode_ci,
  `conf_cat_imagen` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `conf_cat_estatus` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `conf_categorias`
--

TRUNCATE TABLE `conf_categorias`;
--
-- Volcado de datos para la tabla `conf_categorias`
--

INSERT INTO `conf_categorias` (`id`, `conf_cat_nombre`, `conf_cat_condiciones`, `conf_cat_imagen`, `conf_cat_estatus`, `created_at`, `updated_at`) VALUES
(1, 'Buen Apetito', '<p>• Para hacer efectivo tu Citycupón, debes enseñarlo siempre impreso.\r\n</p><p>•  La vigencia de la oferta está determinada en el cupón, después de la misma, no habrán devoluciones ni cambios.\r\n</p><p>•  Puedes comprar y obsequiar los cupones que desees.\r\n</p><p>•  Las ofertas publicadas están sujetas a la disponibilidad en el momento de reservar.\r\n</p><p>• Se prohíbe el expendio de bebidas embriagantes a menores de edad. Ley 124 de 1994. El exceso de alcohol es perjudicial para la salud. Ley 30 de 1986.\r\n</p><p>• Las imágenes utilizadas son una referencia gráfica para nuestros clientes.\r\n</p><p>•  Las ofertas no son acumulables.\r\n</p><p>• Si tu Cuponcity es de gastronomía, la propina es voluntaria y sugerida en un 10%, pero en ningún caso está incluida en el cupón.\r\n</p><p>•  Cuponcity actúa como intermediario y recaudador, en ningún caso es responsable de incumplimientos por parte del proveedor del bien o servicio, el aliado es el único responsable ante los compradores por la calidad de los productos y servicios publicitados. sin embargo, haremos lo posible para lograr tu satisfacción final.\r\n</p><p>•  Para hacer efectiva la garantía, debes presentar la factura y fotocopia de la cédula del comprador del producto.\r\n</p><p>•  Si tu producto presenta alguna novedad o inconformidad que debas informarnos, hazlo antes de transcurridas 48 horas hábiles contadas a partir de su recepción,  después de este tiempo, se entiende  recibido a conformidad y no habrá lugar a devoluciones y/o cambios.\r\n</p>', '1.png', 1, '2018-01-22 08:32:00', '2018-02-12 19:06:04'),
(2, 'Servicio', '<p>• Antes de reservar tu cita, revisa siempre las condiciones de la oferta que encontrarás en la letra menuda.\r\n</p><p>•  Si tu oferta está relacionada con tratamientos médicos, citas de belleza, Spa o similares, debes estar siempre 20 minutos antes de lo programado, si presentas un atraso en tu llegada, éste será descontado del tiempo asignado para tu atención.\r\n</p><p>•  Si tu oferta está relacionada con tratamientos reductores, la reducción de medidas está sujeta a la valoración que sea realice en el sitio y a las condiciones de cada paciente.\r\n</p><p>•  Si por algún motivo, el valor del consumo es inferior al señalado en el cupón, no se generan saldos a favor o devoluciones.\r\n</p><p>• Si programada tu cita, no asistes a la misma, se entenderá como utilizada y no habrá lugar a devoluciones.\r\n</p><p>•  Si por alguna razón, estudiados los soportes y comprobantes de un caso especial en el que se autoricen reembolsos, el valor se cargará en Citypuntos a favor del cliente. \r\n</p><p><br></p>', '2.png', 1, '2018-01-22 08:32:00', '2018-02-12 19:09:13'),
(3, 'Salud y Belleza', '<p>•  Para hacer efectivo tu Citycupón, debes enseñarlo siempre impreso.\r\n</p><p>•  La vigencia de la oferta está determinada en el cupón, después de la misma, no habrán devoluciones ni cambios.\r\n</p><p>•  Puedes comprar y obsequiar los cupones que desees.\r\n</p><p>•  Las ofertas publicadas están sujetas a la disponibilidad en el momento de reservar.\r\n</p><p>• Se prohíbe el expendio de bebidas embriagantes a menores de edad. Ley 124 de 1994. El exceso de alcohol es perjudicial para la salud. Ley 30 de 1986.\r\n</p><p>• Las imágenes utilizadas son una referencia gráfica para nuestros clientes.\r\n</p><p>•  Las ofertas no son acumulables.\r\n</p><p>• Si tu Cuponcity es de gastronomía, la propina es voluntaria y sugerida en un 10%, pero en ningún caso está incluida en el cupón.\r\n</p><p>•  Cuponcity actúa como intermediario y recaudador, en ningún caso es responsable de incumplimientos por parte del proveedor del bien o servicio, el aliado es el único responsable ante los compradores por la calidad de los productos y servicios publicitados. sin embargo, haremos lo posible para lograr tu satisfacción final.\r\n</p>', '3.png', 1, '2018-01-22 08:32:00', '2018-02-12 19:09:02'),
(4, 'Destinos', '<p>• No siempre, el seguro hotelero estará incluido en el Cuponcity. Revisa bien la letra menuda. \r\n</p><p>• Si tu alojamiento incluye varias noches, éstas deberán ser de forma consecutiva. \r\n</p><p>• Ofertas válidas para personas naturales y jurídicas no clasificadas como mayoristas y/o agencias de viaje. \r\n</p><p>• Todas las reservas están sujetas a disponibilidad.\r\n</p><p>•  Si la reserva ya fue realizada, no aplican cambios de fechas, nombres ni cancelaciones.\r\n</p><p>• El Cuponcity queda validado desde el momento en que se realice la reserva. Si el cliente no se presenta en la fecha acordada, éste se considerará consumido, sin que haya lugar a devoluciones, cambios de nombres o demás.\r\n</p><p>• Las ofertas no son acumulables con otras promociones.\r\n</p><p>• Las tarifas para niños serán las mimas de los adultos, salvo que las condiciones específicas de la oferta indiquen lo contrario. Revisa la letra menuda.\r\n</p><p>•  No se acepta el alojamiento de menores de edad sin el  acompañamiento de un adulto responsable.\r\n</p><p>• <b>En desarrollo de lo dispuesto en la ley 679 de 2001 y la ley 1336 de 2009, se advierte al turista que la explotación, la pornografía, el turismo sexual y demás formas de abuso sexual de menores de edad en Colombia son sancionados penal y administrativamente, conforme a las leyes vigentes.\r\n</b></p>', '4.png', 1, '2018-01-22 08:32:00', '2018-02-12 19:08:22'),
(5, 'Productos', '<p>•  Para hacer efectivo tu Citycupón, debes enseñarlo siempre impreso.\r\n</p><p>•  La vigencia de la oferta está determinada en el cupón, después de la misma, no habrán devoluciones ni cambios.\r\n</p><p>•  Puedes comprar y obsequiar los cupones que desees.\r\n</p><p>•  Las ofertas publicadas están sujetas a la disponibilidad en el momento de reservar.\r\n</p><p>• Se prohíbe el expendio de bebidas embriagantes a menores de edad. Ley 124 de 1994. El exceso de alcohol es perjudicial para la salud. Ley 30 de 1986.\r\n</p><p>• Las imágenes utilizadas son una referencia gráfica para nuestros clientes.\r\n</p><p>•  Las ofertas no son acumulables.\r\n</p><p>• Si tu Cuponcity es de gastronomía, la propina es voluntaria y sugerida en un 10%, pero en ningún caso está incluida en el cupón.\r\n</p><p>•  Cuponcity actúa como intermediario y recaudador, en ningún caso es responsable de incumplimientos por parte del proveedor del bien o servicio, el aliado es el único responsable ante los compradores por la calidad de los productos y servicios publicitados. sin embargo, haremos lo posible para lograr tu satisfacción final.\r\n</p><p>•  Para hacer efectiva la garantía, debes presentar la factura y fotocopia de la cédula del comprador del producto.\r\n</p><p>•  Si tu producto presenta alguna novedad o inconformidad que debas informarnos, hazlo antes de transcurridas 48 horas hábiles contadas a partir de su recepción,  después de este tiempo, se entiende  recibido a conformidad y no habrá lugar a devoluciones y/o cambios.\r\n</p>', '5.png', 1, '2018-01-22 08:32:00', '2018-02-12 19:08:48'),
(7, 'de todito', '<p>dffghggn</p>', '1518577066.jpg', 0, '2018-02-13 21:57:46', '2018-02-13 21:57:46'),
(8, 'Ejemplo', '<p>ddddddddddddddddddddddd</p>', '1520284001.jpg', 0, '2018-03-05 16:06:41', '2018-03-05 16:06:41'),
(9, 'dgfhsgfsgs', '<p><span style=\"background-color: rgb(66, 66, 66);\">andbadbabdanbdfhjksfgksgfskgfshgfshfghsgfhsgfhsfsg.</span></p>', '1520284282.jpg', 0, '2018-03-05 16:11:22', '2018-03-05 16:11:22');

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
-- Truncar tablas antes de insertar `conf_subcategorias`
--

TRUNCATE TABLE `conf_subcategorias`;
--
-- Volcado de datos para la tabla `conf_subcategorias`
--

INSERT INTO `conf_subcategorias` (`id`, `conf_subcat_cat_id`, `conf_subcat_nombre`, `conf_subcat_imagen`, `conf_sub_cat_estatus`, `created_at`, `updated_at`) VALUES
(1, 1, 'Bares', '1.png', 1, '2018-01-22 08:32:01', '2018-01-22 08:32:01'),
(2, 1, 'Cafés', '2.png', 1, '2018-01-22 08:32:01', '2018-01-22 08:32:01'),
(3, 1, 'Comida Rápida', '3.png', 1, '2018-01-22 08:32:01', '2018-01-22 08:32:01'),
(4, 1, 'Pastelería y Cafetería', '4.png', 1, '2018-01-22 08:32:01', '2018-01-22 08:32:01'),
(5, 1, 'Restaurantes', '5.png', 1, '2018-01-22 08:32:01', '2018-01-22 08:32:01'),
(6, 2, 'Cuidado de tu Mascota', '6.png', 1, '2018-01-22 08:32:01', '2018-01-22 08:32:01'),
(7, 2, 'Cursos y Asesorías', '7.png', 1, '2018-01-22 08:32:01', '2018-01-22 08:32:01'),
(8, 2, 'Deporte', '8.png', 1, '2018-01-22 08:32:01', '2018-01-22 08:32:01'),
(9, 2, 'Espectáculos y Entretenimiento', '9.png', 1, '2018-01-22 08:32:01', '2018-01-22 08:32:01'),
(10, 2, 'Fiestas Infantiles y Recreación', '10.png', 1, '2018-01-22 08:32:01', '2018-01-22 08:32:01'),
(11, 2, 'Fotografía y Video', '11.png', 1, '2018-01-22 08:32:01', '2018-01-22 08:32:01'),
(12, 2, 'Fumigación', '12.png', 1, '2018-01-22 08:32:01', '2018-01-22 08:32:01'),
(13, 2, 'Limpieza y Aseo', '13.png', 1, '2018-01-22 08:32:01', '2018-01-22 08:32:01'),
(14, 2, 'Mantenimiento de Electrodomésticos', '14.png', 1, '2018-01-22 08:32:01', '2018-01-22 08:32:01'),
(15, 2, 'Mantenimiento Vehículos', '15.png', 1, '2018-01-22 08:32:01', '2018-01-22 08:32:01'),
(16, 2, 'Servicios Profesionales', '16.png', 1, '2018-01-22 08:32:01', '2018-01-22 08:32:01'),
(17, 2, 'Espectáculos Públicos', '17.png', 1, '2018-01-22 08:32:01', '2018-01-22 08:32:01'),
(18, 2, 'Cultura y Diversión', '18.png', 1, '2018-01-22 08:32:01', '2018-01-22 08:32:01'),
(19, 3, 'Asesoría de Imagen', '19.png', 1, '2018-01-22 08:32:01', '2018-01-22 08:32:01'),
(20, 3, 'Cuidado de tu Piel', '20.png', 1, '2018-01-22 08:32:01', '2018-01-22 08:32:01'),
(21, 3, 'Cuidado Dental', '21.png', 1, '2018-01-22 08:32:01', '2018-01-22 08:32:01'),
(22, 3, 'Cuidado Facial', '22.png', 1, '2018-01-22 08:32:01', '2018-01-22 08:32:01'),
(23, 3, 'Depilación', '23.png', 1, '2018-01-22 08:32:01', '2018-01-22 08:32:01'),
(24, 3, 'Deporte', '24.png', 1, '2018-01-22 08:32:01', '2018-01-22 08:32:01'),
(25, 3, 'Desintoxicación', '25.png', 1, '2018-01-22 08:32:01', '2018-01-22 08:32:01'),
(26, 3, 'Gimnasio y Bienestar', '26.png', 1, '2018-01-22 08:32:01', '2018-01-22 08:32:01'),
(27, 3, 'Glúteos', '27.png', 1, '2018-01-22 08:32:01', '2018-01-22 08:32:01'),
(28, 3, 'Keratinas y Alisados', '28.png', 1, '2018-01-22 08:32:01', '2018-01-22 08:32:01'),
(29, 3, 'Manos y Pies', '29.png', 1, '2018-01-22 08:32:01', '2018-01-22 08:32:01'),
(30, 3, 'Maquillaje', '30.png', 1, '2018-01-22 08:32:01', '2018-01-22 08:32:01'),
(31, 3, 'Peluquería', '31.png', 1, '2018-01-22 08:32:01', '2018-01-22 08:32:01'),
(32, 3, 'Relajación', '32.png', 1, '2018-01-22 08:32:01', '2018-01-22 08:32:01'),
(33, 3, 'Spa', '33.png', 1, '2018-01-22 08:32:01', '2018-01-22 08:32:01'),
(34, 3, 'Tratamientos Reductores', '34.png', 1, '2018-01-22 08:32:01', '2018-01-22 08:32:01'),
(35, 3, 'Opticas', '35.png', 1, '2018-01-22 08:32:01', '2018-01-22 08:32:01'),
(36, 4, 'Escapes y Aventuras al Aire Libre', '36.png', 1, '2018-01-22 08:32:01', '2018-01-22 08:32:01'),
(37, 4, 'Hospedaje', '37.png', 1, '2018-01-22 08:32:01', '2018-01-22 08:32:01'),
(38, 4, 'Pasadías', '38.png', 1, '2018-01-22 08:32:01', '2018-01-22 08:32:01'),
(39, 4, 'Viajes', '39.png', 1, '2018-01-22 08:32:01', '2018-01-22 08:32:01'),
(40, 5, 'Celulares y Tecnología ', '40.png', 1, '2018-01-22 08:32:01', '2018-01-22 08:32:01'),
(41, 5, 'Chiquitines', '41.png', 1, '2018-01-22 08:32:01', '2018-01-22 08:32:01'),
(42, 5, 'Cocina', '42.png', 1, '2018-01-22 08:32:01', '2018-01-22 08:32:01'),
(43, 5, 'Cuidado Personal', '43.png', 1, '2018-01-22 08:32:01', '2018-01-22 08:32:01'),
(44, 5, 'Detalles, Sorpresas y Regalos', '44.png', 1, '2018-01-22 08:32:01', '2018-01-22 08:32:01'),
(45, 5, 'Hogar y Decoración', '45.png', 1, '2018-01-22 08:32:01', '2018-01-22 08:32:01'),
(46, 5, 'Moda, Joyas  y Accesorios', '46.png', 1, '2018-01-22 08:32:01', '2018-01-22 08:32:01'),
(47, 5, 'Partes y Accesorios vehículos', '47.png', 1, '2018-01-22 08:32:01', '2018-01-22 08:32:01'),
(48, 5, 'Sex Shop', '48.png', 1, '2018-01-22 08:32:01', '2018-01-22 08:32:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `creditos`
--

CREATE TABLE `creditos` (
  `id` int(10) UNSIGNED NOT NULL,
  `credito_users_id` int(10) UNSIGNED NOT NULL,
  `credito_compra_codigo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `credito_saldo` double(8,2) UNSIGNED NOT NULL,
  `credito_fecha` datetime NOT NULL,
  `credito_tipo` tinyint(3) UNSIGNED NOT NULL,
  `credito_descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `creditos`
--

TRUNCATE TABLE `creditos`;
--
-- Volcado de datos para la tabla `creditos`
--

INSERT INTO `creditos` (`id`, `credito_users_id`, `credito_compra_codigo`, `credito_saldo`, `credito_fecha`, `credito_tipo`, `credito_descripcion`, `created_at`, `updated_at`) VALUES
(1, 13, '', 27000.00, '2018-03-05 14:46:41', 1, 'Devolución de Compra de Producto Dos por uno  Mini Cupcakes , Paga solo $27000 por 70 y lleva 140  Mini Cupcakes con Tonos a Elección', '2018-03-05 14:46:41', '2018-03-05 14:46:41'),
(2, 13, '', 700000.00, '2018-03-05 15:25:35', 1, 'Devolución de Compra de Producto ASESORÍA INTEGRAL EN CONSTITUCIÓN DE EMPRESA PERSONA JURÍDICA + ESTATUTOS SOCIALES', '2018-03-05 15:25:35', '2018-03-05 15:25:35'),
(3, 6, '', 700000.00, '2018-03-05 16:52:42', 1, 'Devolución de Compra de Producto ASESORÍA INTEGRAL EN CONSTITUCIÓN DE EMPRESA PERSONA JURÍDICA + ESTATUTOS SOCIALES', '2018-03-05 16:52:42', '2018-03-05 16:52:42'),
(4, 6, '', 13500.00, '2018-03-05 16:52:45', 1, 'Devolución de Compra de Producto Pegamento De Látex Anti-desbordamiento Peel Off ¡excelente!', '2018-03-05 16:52:45', '2018-03-05 16:52:45'),
(5, 6, '', 18000.00, '2018-03-05 16:52:48', 1, 'Devolución de Compra de Producto Pinza Rizador Ondulador Profesional Nova', '2018-03-05 16:52:48', '2018-03-05 16:52:48'),
(6, 1, '1680767220', 9900.00, '2018-03-28 21:37:52', 1, 'Devolución de Compra de Producto', '2018-03-28 21:37:52', '2018-03-28 21:37:52'),
(7, 1, '1203368967', 9900.00, '2018-03-28 21:40:05', 2, 'Uso de Crédito de Compra de Producto', '2018-03-28 21:40:05', '2018-03-28 21:40:05'),
(8, 1, '1203368967', 13000.00, '2018-03-28 21:41:55', 1, 'Devolución de Compra de Producto', '2018-03-28 21:41:55', '2018-03-28 21:41:55'),
(9, 1, '1519067440', 13000.00, '2018-03-28 21:45:52', 2, 'Uso de Crédito de Compra de Producto', '2018-03-28 21:45:52', '2018-03-28 21:45:52'),
(10, 17, '935752232', 22000.00, '2018-04-16 20:13:40', 1, 'Devolución de Compra de Producto', '2018-04-16 20:13:40', '2018-04-16 20:13:40'),
(11, 17, '820245973', 22000.00, '2018-04-16 20:15:41', 2, 'Uso de Crédito de Compra de Producto', '2018-04-16 20:15:41', '2018-04-16 20:15:41'),
(12, 17, '32577782', 22000.00, '2018-04-17 17:23:33', 1, 'Devolución de Compra de Producto', '2018-04-17 17:23:33', '2018-04-17 17:23:33'),
(13, 17, '709274956', 22000.00, '2018-04-17 17:25:47', 2, 'Uso de Crédito de Compra de Producto', '2018-04-17 17:25:47', '2018-04-17 17:25:47');

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
-- Truncar tablas antes de insertar `empresas`
--

TRUNCATE TABLE `empresas`;
--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id`, `empresa_nombre`, `empresa_empresario`, `empresa_nit`, `empresa_direccion`, `empresa_pais`, `empresa_ciudad`, `empresa_telefono_fijo`, `empresa_telefono_celular`, `empresa_email`, `empresa_web`, `created_at`, `updated_at`) VALUES
(1, 'CUPONCITY COLOMBIA', 'JULIO CÉSAR MAYA BASTIDAS', '98385333-6', 'CARRERA 6 A Nº 23N 29 CIUDAD JARDÍN', 'Colombia', 'Calí', '8337031', '3118490896', 'cuponcity.col@gmail.com', 'www.cuponcity.com.co', '2018-01-22 08:32:02', '2018-01-22 08:32:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id` int(10) UNSIGNED NOT NULL,
  `marca_nombre` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marca_imagen` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `marca_fecha_inicio` date NOT NULL,
  `marca_fecha_fin` date NOT NULL,
  `marca_direccion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `marca_telefono` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marca_youtube` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marca_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marca_estatus` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `marcas`
--

TRUNCATE TABLE `marcas`;
--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id`, `marca_nombre`, `marca_imagen`, `marca_fecha_inicio`, `marca_fecha_fin`, `marca_direccion`, `marca_telefono`, `marca_youtube`, `marca_url`, `marca_estatus`, `created_at`, `updated_at`) VALUES
(2, 'Detalles +', '1521167578.jpg', '2018-03-01', '2018-03-31', 'calle 20 30´43', '8371666', NULL, NULL, 1, '2018-02-02 22:04:11', '2018-03-15 21:59:18'),
(3, 'sabropan', '1521168904.jpg', '2018-03-01', '2018-03-31', 'calle 20 34 44', '8305679', NULL, NULL, 2, '2018-02-02 22:10:47', '2018-04-22 22:48:10'),
(4, 'cocina y mas', '1521167229.jpg', '2018-03-01', '2018-03-31', 'cale 76 5678', '8325672', NULL, NULL, 1, '2018-02-02 22:13:19', '2018-03-15 21:57:58'),
(5, 'MAXPARATI', '1521168078.jpg', '2018-03-01', '2018-03-31', 'cra 71 c 64 c 28', '3182800655', NULL, NULL, 1, '2018-02-15 19:16:26', '2018-03-15 21:59:41'),
(6, 'ASIC ASESORIA INTEGRAL CONTABLE', '1521213190.png', '2018-03-01', '2018-03-31', 'CRA 6 A # 23 N 29', '3116082212', NULL, 'asicpopayan@gmail.com', 1, '2018-02-25 19:24:40', '2018-04-04 17:44:31'),
(7, 'DELIGHT', '1519606456.jpg', '2018-03-01', '2018-03-31', 'transversal 9 a # 57 n 276', '8371666', NULL, NULL, 1, '2018-02-25 19:54:16', '2018-03-15 21:58:17'),
(8, 'PERSEO ACCESORIOS', '1521149202.jpg', '2018-03-01', '2018-03-31', 'cra 71 c 64 c 28', '3155865364', NULL, NULL, 1, '2018-03-15 16:26:42', '2018-03-15 22:00:18'),
(9, 'White city performance car audio', '1521166872.jpeg', '2018-03-01', '2018-03-31', 'CARRERA 14 # 6 - 45', '3202177929', NULL, 'https://www.facebook.com/White-city-performance-car-audio-190134544738933/', 0, '2018-03-15 21:21:12', '2018-03-15 22:11:05'),
(10, 'JULIO CESAR MAYA BASTIDAS', '1521168360.jpg', '2018-03-01', '2018-03-31', 'CARRERA 6 A 23 N 29 CIUDAD JARDIN', '3122281592', NULL, 'jc7maya@hotmail.com', 1, '2018-03-15 21:46:00', '2018-03-15 21:46:00'),
(11, 'CUPONCITY COLOMBIA', '1523554707.png', '2018-04-01', '2018-04-30', 'CRA 6 A # 23 N 29', '3122281592', NULL, 'http://cuponcity.com.co/Inicio', 0, '2018-04-09 13:10:04', '2018-04-12 12:38:27'),
(12, 'Marce Hoyos', '1524446322.jpeg', '2018-04-22', '2018-04-22', 'CALLE 7 14 46', '3155507654', NULL, 'https://www.facebook.com/marce.hoyos.7', 0, '2018-04-22 20:18:42', '2018-04-22 20:18:42'),
(13, 'LIZARDO CRUZ PIEDRAHITA', '1524450678.jpg', '2018-04-22', '2018-04-22', 'CARRERA 10A #15-22', '3104964232', NULL, 'https://www.facebook.com/lizardo.cruzpiedrahita', 0, '2018-04-22 21:31:19', '2018-04-22 21:31:19'),
(14, 'NOSCAR MAURICIO LLANTEN LLANTEN', '1524451513.jpg', '2018-04-22', '2018-04-22', 'CARRERA 11 #3-50 Edificio Aura María Piso 2', '3114287811', NULL, 'https://www.facebook.com/profile.php?id=100009752041468', 0, '2018-04-22 21:45:13', '2018-04-22 21:45:13'),
(15, 'RENO WILLIAMS.W', '1524451708.jpg', '2018-04-22', '2018-04-22', 'CARRERA 11 #67-35', '3135973301', NULL, 'https://www.facebook.com/willyorlando.mosqueraledezma', 0, '2018-04-22 21:48:28', '2018-04-25 22:40:16'),
(16, 'wendy carolina gutierrez pacheco', '1524452553.jpeg', '2018-04-22', '2018-04-22', 'CARRERA 10A #15-22', '3003385599', NULL, 'https://www.facebook.com/search/top/?q=wendy%20carolina%20gutierrez%20pacheco', 0, '2018-04-22 22:02:33', '2018-04-22 22:02:33'),
(17, 'ODONTOLOGIA ESTETICA INTEGRAL', '1524590739.jpeg', '2018-01-01', '2018-12-31', 'CARRERA 11 #3-50 Edificio Aura María Piso 2', '34565117', NULL, NULL, 0, '2018-04-24 12:25:39', '2018-04-24 12:25:39'),
(18, 'DULCE JULIETA', '1524712923.jpg', '2018-04-25', '2018-04-25', 'QUINTAS DE JOSE MIGUEL CASA H14', '3187946925', NULL, 'https://www.facebook.com/DulceJulietaPopayan/', 1, '2018-04-25 22:22:03', '2018-04-25 22:22:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `migrations`
--

TRUNCATE TABLE `migrations`;
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
(13, '2017_12_24_104340_create_compras_table', 1),
(14, '2018_01_18_063635_create_creditos_table', 1),
(15, '2018_01_18_080433_create_visitas_table', 1),
(16, '2018_01_22_032447_create_suscripcion_table', 1),
(17, '2017_12_14_080031_create_ofertas_table', 2),
(18, '2018_01_23_103850_create_producto_images_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ofertas`
--

CREATE TABLE `ofertas` (
  `id` int(10) UNSIGNED NOT NULL,
  `oferta_producto_id` int(10) UNSIGNED NOT NULL,
  `oferta_total` double(8,2) NOT NULL,
  `oferta_descuento` double(8,2) NOT NULL,
  `oferta_total_descuento` double(8,2) NOT NULL,
  `oferta_fecha_inicio` date NOT NULL,
  `oferta_fecha_fin` date NOT NULL,
  `oferta_slider` int(11) NOT NULL,
  `oferta_estatus` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `ofertas`
--

TRUNCATE TABLE `ofertas`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `password_resets`
--

TRUNCATE TABLE `password_resets`;
--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('moralesandrey286@gmail.com', '$2y$10$Hc55drChSGrNg2SQqyWDDeDvOgejOaUuanEzjcC5BatYM3J35RFMK', '2018-04-10 18:00:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(10) UNSIGNED NOT NULL,
  `producto_titulo` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `producto_categoria` int(10) UNSIGNED NOT NULL,
  `producto_subcategoria` int(10) UNSIGNED NOT NULL,
  `producto_marca` int(10) NOT NULL,
  `producto_aliado` int(11) NOT NULL DEFAULT '0',
  `producto_descripcion` text COLLATE utf8mb4_unicode_ci,
  `producto_letra_chica` text COLLATE utf8mb4_unicode_ci,
  `producto_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `producto_nit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `producto_palabras_clave` text COLLATE utf8mb4_unicode_ci,
  `producto_imagen` text COLLATE utf8mb4_unicode_ci,
  `producto_estatus` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `productos`
--

TRUNCATE TABLE `productos`;
--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `producto_titulo`, `producto_categoria`, `producto_subcategoria`, `producto_marca`, `producto_aliado`, `producto_descripcion`, `producto_letra_chica`, `producto_email`, `producto_nit`, `producto_palabras_clave`, `producto_imagen`, `producto_estatus`, `created_at`, `updated_at`) VALUES
(1, 'Asesoría de imagen', 3, 19, 2, 0, '<p>  <span style=\"font-size: 18px;\"> Asesoría de imagen</span></p><p><span style=\"font-size: 18px;\"><br></span></p><p><span style=\"font-size: 18px;\"><br></span></p><p><span style=\"font-size: 18px;\"><br></span>\r\n</p><p><br></p><p><br></p>', '<p><span style=\"font-size: 11px;\"><span style=\"font-size: 14px;\">Asesoría de imagen +diseño de cejas +maquillaje personalizado Asesoria de imagen+mechas localizadas+californianas o balayage+ corte +baño de brillo+shampoo+cepillado+corte</span></span></p><p><span style=\"font-size: 11px;\"><span style=\"font-size: 14px;\"><br></span></span></p><p><span style=\"font-size: 11px;\"><span style=\"font-size: 14px;\">LETRA MENUDA</span>\r\n</span></p><p><span style=\"font-size: 14px;\">City cupon valido para una persona\r\n</span></p><p><span style=\"font-size: 14px;\">Recibiras una excelente atencion junto a:\r\n</span></p><p><span style=\"font-size: 14px;\"> Asesoría de imagen +</span>diseño de cejas +maquillaje personalizado + Asesoria de imagen +mechas localizadas  o balayage + corte +</p><p><span style=\"font-size: 11px;\"><span style=\"font-size: 14px;\">baño de brillo +</span></span>shampoo +cepillado +corte</p><p><span style=\"font-size: 14px;\">citas con 2 dias de anticipación\r\n</span></p><p><span style=\"font-size: 14px;\">cancelaciones 24 horas hábiles antes\r\n</span></p><p><span style=\"font-size: 14px;\"> Válido para mayores de 18 años ,menores con un adulto responsable\r\n</span></p><p><span style=\"font-size: 14px;\"> No apto para embarazadas \r\n</span></p><p><span style=\"font-size: 14px;\"> Aplica para cabellos hasta espalda media. En caso de se más largo tiene un cargo adicional,que se informara en el momento de redimir la oferta \r\n</span></p><p><span style=\"font-size: 14px;\"> Horario: lunes a sábado de 08:00 a 18:30 \r\n</span></p><p><span style=\"font-size: 14px;\"> Tel. ………... \r\n</span></p><p><span style=\"font-size: 14px;\"> Un cupóon por persona y puedes regalar cuantos desees\r\n</span></p><p><span style=\"font-size: 11px;\"><span style=\"font-size: 14px;\"> Ver condiciones que aplican a todos nuestras city ofertas.<span style=\"background-color: rgb(255, 156, 0);\">debe llevar un link a las condiciones generales</span></span>\r\n</span></p><p><span style=\"font-size: 11px;\"><span style=\"font-size: 18px;\">El aliado es el único responsable ante los compradores por la calidad de los productos y servicios publicitados sin embargo estaremos aentos a que sea una experiencia única para ti.</span></span><span style=\"font-size: 18px;\">﻿</span><span style=\"font-size: 11px;\">\r\n</span></p><p><br></p><p><br></p><p><br></p>', 'gescobar12@gmail.com', '34677890', 'imagen,belleza,asesoria,look,cabello', '', 0, '2018-02-05 20:13:59', '2018-04-25 21:51:56'),
(2, 'Creativo cortador de cebolla', 5, 42, 2, 0, '<p>Creativo cortador de cebolla</p><p>facil y seguro,cebolla perfecta en instantes</p>', '<p>City cupones disponibles: 20</p><p>Si tu producto es para retirar en nuestra oficina, debes presentar el cupón \r\n</p><p>Si pagas por medio de consignación, y la persona que viene a retirar el producto no es el comprador, debes traer adicional a estos documentos: Carta de autorización del comprador -Copia de cédula de quien retira el producto.\r\n</p><p>Para retiro en persona acércate a: carrera 6 A 23N 29 Ciudad Jardín\r\n</p><p>Garantía del producto por defectos de fábrica: … meses - No aplica mal uso, se debe conservar el Empaque original.\r\n</p><p>Despacho la transportadora de tu preferencia\r\n</p><p>Recibirás tu producto en   dirección a más tardar en tres dias habiles</p><p>Puedes comprar todos los que desees\r\n</p><p>Ver condiciones que aplican a todos nuestras city ofertas. Debe llevar un link a las condiciones generales\r\n</p><p>El aliado es el único responsable ante los compradores por la calidad de los productos y servicios publicitados sin embargo estaremos atentos a que sea una experiencia única para ti.\r\n</p><p>\r\n</p><p>\r\n</p><p>\r\n</p><p>Medios de pagos y aclaraciones \r\n</p><p>consignación bancaria\r\n</p><p>Para pago en efectivo únicamente lo puedes hacer en nuestra oficina en Popayán: carrera 6 A 23N 29 Ciudad Jardín. Este pago solo lo puedes realizar si la oferta aún está activa en nuestra página. \r\n</p><p><br></p>', 'gescobar12@gmail.com', '65764832', 'cortador,cebolla,facil,creativo', '', 1, '2018-02-06 21:34:27', '2018-04-17 15:43:35'),
(4, 'Pinza Rizadora + Cepillo eléctrico alisador cerámica con pantalla LCD profesional', 3, 31, 5, 7, '<p><br></p><p><br></p><p>Cepillo eléctrico alisador cerámica con pantalla LCD profesional + Pinza Rizadora</p><p>Cepillo Alisador SLP-318 Super Look profesional \r\n</p><p>Características:\r\n</p><p>Control de temperatura ajustable \r\n</p><p>Calentamiento 230°\r\n</p><p>Display Digital\r\n</p><p>Con Iones\r\n</p><p>Disponible color roja -azul</p><p>\r\n</p><p><br></p><p>PINZA RIZADORA NOVA\r\n</p><p>\r\n</p><p> rizador que te permite transformar tu cabello como un profesional, con la ayuda de su guia espiral innovadora, obtendras rizos sin esfuerzo y tendras tu cabello hermoso en todo momento.\r\n</p><p>Tiempo de calentamiento: 30 segundos\r\n</p><p>Temperatura regulable: a 180 °C\r\n</p><p>Interruptor ON-OFF, Piloto\r\n</p><p>Revestimiento: Cerámica Avanzada\r\n</p><p>Seguridad: Punta fría \r\n</p><p>Guías en espiral para facilitar el rizado\r\n</p><p>Diámetro de la tenacilla: 20 mm\r\n</p><p>Disponible color lila-roja-verde-azul</p><p></p>', '<p>City cupones disponibles: 3</p><p>Si tu producto es para retirar en nuestra oficina, debes presentar el cupón<br></p><p>Si pagas por medio de consignación, y la persona que viene a retirar el producto no es el comprador, debes traer adicional a estos documentos: Carta de autorización del comprador -Copia de cédula de quien retira el producto.\r\n</p><p>Para retiro en persona acércate a: carrera 6 A 23N 29 Ciudad Jardín\r\n</p><p>Garantía del producto por defectos de fábrica: 3 meses - No aplica mal uso, se debe conservar el Empaque original.\r\n</p><p>Despacho por&nbsp; la transportadora de tu preferencia\r\n</p><p>Recibirás tu producto en   dirección a más tardar en 3 dias habiles</p><p>Puedes comprar todos los que desees<br></p><p>Ver condiciones que aplican a todos nuestras city ofertas. Debe llevar un link a las condiciones generales\r\n</p><p>El aliado es el único responsable ante los compradores por la calidad de los productos y servicios publicitados sin embargo estaremos atentos a que sea una experiencia única para ti.\r\n</p><p>\r\n</p><p>\r\n</p><p>\r\n</p><p>Medios de pagos y aclaraciones \r\n</p><p>consignación bancaria\r\n</p><p>Para pago en efectivo únicamente lo puedes hacer en nuestra oficina en Popayán: carrera 6 A 23N 29 Ciudad Jardín. Este pago solo lo puedes realizar si la oferta aún está activa en nuestra página. \r\n</p><p><br></p>', 'gescobar12@gmail.com', '65764832', 'Cabello,Rizadora,peluqueria,salon de belleza', '', 1, '2018-02-14 19:23:16', '2018-04-17 15:57:53'),
(5, 'Dos por uno  Mini Cupcakes , Paga solo $32000 por 70 y lleva 140  Mini Cupcakes con Tonos a Elección', 1, 4, 7, 10, '<p></p><p><br></p><p>Dos por uno  Paga solo $32.000 por 70 y lleva 140  Mini Cupcakes con Tonos a Elección </p><p><br></p><p></p>', '<p>Dos por uno  Paga solo $32000 por 70 y lleva 140 Mini Cupcakes </p><p>City cupones disponibles: 30\r\n</p><p>Tamaño capacillo # 1,   2x3 cm aprox.\r\n</p><p>Puede escoger un color para la decoración\r\n</p><p>Puede escoger un sabor entre vainilla, naranja, coco, chocolate fresa, banano, Red Velvet.\r\n</p><p>\r\n</p><p>No se hacen entregas domingos ni festivos\r\n</p><p>Agendar su pedido con 2 días Hábiles de anticipación\r\n</p><p>Después de agendado por el cliente el pedido en caso de no reclamarlo y no confirmar cancelación 24 horas antes, este se dará por despachado.\r\n</p><p>Domicilio desde $6.000 dependiendo de la dirección.\r\n</p><p>Servicio de Domicilio sujeto a disponibilidad o entrega en punto de venta <br></p><p>Horario de despacho a partir de las 8 am a 6 pm \r\n</p><p>No acumulable con otras ofertas.\r\n</p><p>Para reservar envía tu cupón en PDF y agenda tu servicio al correo maxparati18@gmail.com   o  al  WhatsApp 3182800655\r\n</p><p>Tel. 3182800655\r\n</p><p>Puedes comprar todos los que desees\r\n</p><p>Ver condiciones que aplican a todos nuestras city ofertas. \r\n</p><p>\r\n</p><p>Medios de pagos y aclaraciones \r\n</p><p>consignación bancaria\r\n</p><p>Para pago en efectivo únicamente lo puedes hacer en nuestra oficina en Popayán: carrera 6 A 23N 29 Ciudad Jardín. Este pago solo lo puedes realizar si la oferta aún está activa en nuestra página. \r\n</p><p>El aliado es el único responsable ante los compradores por la calidad de los productos y servicios publicitados sin embargo estaremos atentos a que sea una experiencia única para ti.\r\n</p><p>\r\n</p><p><br></p>', 'maxparati18@gmail.com', '65764832', 'Cupcakes,pasteleria,oferta', '', 0, '2018-02-15 18:52:44', '2018-04-17 15:46:36'),
(7, 'Fabulosa Dobladora De Ropa Niños Armario Perfecto En 2 Segundos', 5, 45, 5, 7, '<p>Fabulosa Dobladora De Ropa Niños Armario Perfecto En 2 Segundos\r\n</p><p> ¿Cansada de batallar y gastar muchísimas horas doblando ropa de los peques de la casa?\r\n</p><p>No más, ahora podrás disfrutar más tiempo con ellos, con esta maravillosa idea que te ahorra tiempo y te permite tener su armario como siempre has querido\r\n</p><p>Material: plástico/polipropileno \r\n</p><p>tamaño extendido: 40 x 48 x 0.2 cm\r\n</p><p>Tamaño plegado: 40 x 16 x 0.2 cm\r\n</p><p>Color: rojo,naranja,azul,amarillo\r\n</p><p>Letra Menuda\r\n</p><p>City cupones disponibles: 10\r\n</p><p><br></p><p><br></p>', '<p>Letra Menuda\r\n</p><p>\r\n</p><p>City cupones disponibles: 20</p><p>\r\n</p><p>Si tu producto es para retirar en nuestra oficina, debes presentar el cupón<br></p><p>\r\n</p><p>Si pagas por medio de consignación, y la persona que viene a retirar el producto no es el comprador, debes traer adicional a estos documentos: Carta de autorización del comprador -Copia de cédula de quien retira el producto.\r\n</p><p>\r\n</p><p>Para retiro en persona acércate a: carrera 6 A 23N 29 Ciudad Jardín\r\n</p><p>\r\n</p><p>Garantía del producto por defectos de fábrica:3 meses - No aplica mal uso, se debe conservar el Empaque original.\r\n</p><p>\r\n</p><p>Despacho por la transportadora de tu preferencia\r\n</p><p>\r\n</p><p>Recibirás tu producto en dirección a más tardar en 3 días hábiles\r\n</p><p>\r\n</p><p>City Cupón válido hasta el 28-02-2018.\r\n</p><p>\r\n</p><p>Puedes comprar todos los que desees\r\n</p><p>\r\n</p><p>Ver condiciones que aplican a todos nuestras city ofertas. Debe llevar un link a las condiciones generales\r\n</p><p>\r\n</p><p>El aliado es el único responsable ante los compradores por la calidad de los productos y servicios publicitados sin embargo estaremos atentos a que sea una experiencia única para ti.\r\n</p><p>\r\n</p><p>Medios de pagos y aclaraciones\r\n</p><p>\r\n</p><p>consignación bancaria\r\n</p><p>\r\n</p><p>Para pago en efectivo únicamente lo puedes hacer en nuestra oficina en Popayán: carrera 6 A 23N 29 Ciudad Jardín. Este pago solo lo puedes realizar si la oferta aún está activa en nuestra página.\r\n</p><p>\r\n</p><p>\r\n</p><p>\r\n</p><p><br></p>', 'maxparati18@gmail.com', '65764832', 'tabla,orden,ayuda,ropa,niños', '', 1, '2018-02-25 20:37:46', '2018-04-17 15:48:34'),
(8, 'Espectacular kit de Plantilla para Cejas', 3, 31, 5, 7, '<p>Kit plantilla para cejas maquillaje\r\n</p><p>Te molestas por no poder dibujar una ceja perfecta como tú deseas? </p><p>Esta plantilla para cejas puede ayudar a solucionar este problema fácilmente.\r\n</p><p>3 tipos para elegir, 3 estilos diferentes (elegante, clásico, delicado, )</p><p><br></p><p>Plantilla de plástico altamente resistente y duradero.</p><p>contiene 3 plantillas.</p>', '<p>City cupones disponibles: 10</p><p>Si tu producto es para retirar en nuestra oficina, debes presentar el cupón<br></p><p>Si pagas por medio de consignación, y la persona que viene a retirar el producto no es el comprador, debes traer adicional a estos documentos: Carta de autorización del comprador -Copia de cédula de quien retira el producto.\r\n</p><p>Para retiro en persona acércate a: carrera 6 A 23N 29 Ciudad Jardín\r\n</p><p>Garantía del producto por defectos de fábrica: … meses - No aplica mal uso, se debe conservar el Empaque original.\r\n</p><p>Despacho la transportadora de tu preferencia\r\n</p><p>Recibirás tu producto en   dirección a más tardar en tres dias habiles</p><p>Puedes comprar todos los que desees<br></p><p>Ver condiciones que aplican a todos nuestras city ofertas. </p><p>El aliado es el único responsable ante los compradores por la calidad de los productos y servicios publicitados sin embargo estaremos atentos a que sea una experiencia única para ti.\r\n</p><p>\r\n</p><p>\r\n</p><p>\r\n</p><p>Medios de pagos y aclaraciones \r\n</p><p>consignación bancaria\r\n</p><p>Para pago en efectivo únicamente lo puedes hacer en nuestra oficina en Popayán: carrera 6 A 23N 29 Ciudad Jardín. Este pago solo lo puedes realizar si la oferta aún está activa en nuestra página. \r\n</p><p><br></p>', 'maxparati18@gmail.com', '65764832', 'Belleza,Maquillaje,Estética,Estilo,depilacion', '', 1, '2018-02-25 20:53:50', '2018-04-25 20:09:39'),
(9, 'Sensual Babydoll + Hilo en Blonda', 5, 48, 5, 7, '<p>Descripción\r\n</p><p>Material: Spandex / Lycra / lLace \r\n</p><p>Color: Negro \r\n</p><p>Talla: Unica  <br></p><p>tamaño Se adapta a XS-M L (se ajusta a la mayoría de las mujeres) \r\n</p><p>Longitud: 49cm \r\n</p><p>Incluye: ropa de dormir + sexi hilo</p>', '<p>City cupones disponibles: 12</p><p>Si tu producto es para retirar en nuestra oficina, debes presentar el cupón<br></p><p>Si pagas por medio de consignación, y la persona que viene a retirar el producto no es el comprador, debes traer adicional a estos documentos: Carta de autorización del comprador -Copia de cédula de quien retira el producto.\r\n</p><p>Para retiro en persona acércate a: carrera 6 A 23N 29 Ciudad Jardín\r\n</p><p>Garantía del producto por defectos de fábrica 1 mes - No aplica mal uso, se debe conservar el Empaque original.\r\n</p><p>Despacho la transportadora de tu preferencia\r\n</p><p>Recibirás tu producto en   dirección a más tardar en 3 dias habiles</p><p>Puedes comprar todos los que desees&nbsp;<br></p><p>Ver condiciones que aplican a todos nuestras city ofertas. Debe llevar un link a las condiciones generales\r\n</p><p>El aliado es el único responsable ante los compradores por la calidad de los productos y servicios publicitados sin embargo estaremos atentos a que sea una experiencia única para ti.\r\n</p><p><br></p><p>\r\n</p><p>\r\n</p><p>\r\n</p><p>Medios de pagos y aclaraciones \r\n</p><p>consignación bancaria\r\n</p><p>Para pago en efectivo únicamente lo puedes hacer en nuestra oficina en Popayán: carrera 6 A 23N 29 Ciudad Jardín. Este pago solo lo puedes realizar si la oferta aún está activa en nuestra página. \r\n</p><p>costo de envio no incluido</p><p><br></p>', 'maxparati18@gmail.com', '65764832', 'BABYDOLL,BELLA,SEXI,ENCAJE,SEX SHOP', '', 1, '2018-02-25 21:22:13', '2018-04-17 15:58:45'),
(10, 'Velos De Colageno Labios Sensuales por 6 unidades', 3, 22, 5, 7, '<p>Mascarilla de colagenos para labios ayuda a hidratar rapidamente para lucir unos labios sanos y hermosos.</p><p>¡Hidrata tus labios en sólo 2 pasos!\r\n</p><p>\r\nColoca el parche sobre tus labios libres de maquillaje. </p><p>Retíralo en 15 minutos. No enjuagar.</p><p>recibiras 6 sobres individuales Velos De Colageno Labios</p>', '<p>City cupones disponibles: 10</p><p>Si tu producto es para retirar en nuestra oficina, debes presentar el cupón<br></p><p>Si pagas por medio de consignación, y la persona que viene a retirar el producto no es el comprador, debes traer adicional a estos documentos: Carta de autorización del comprador -Copia de cédula de quien retira el producto.\r\n</p><p>Para retiro en persona acércate a: carrera 6 A 23N 29 Ciudad Jardín\r\n</p><p>Garantía del producto por defectos de fábrica: … meses - No aplica mal uso, se debe conservar el Empaque original.\r\n</p><p>Despacho la transportadora de tu preferencia\r\n</p><p>Recibirás tu producto en   dirección a más tardar en tres dias habiles</p><p>Puedes comprar todos los que desees<br></p><p>Ver condiciones que aplican a todos nuestras city ofertas. Debe llevar un link a las condiciones generales\r\n</p><p>El aliado es el único responsable ante los compradores por la calidad de los productos y servicios publicitados sin embargo estaremos atentos a que sea una experiencia única para ti.\r\n</p><p>\r\n</p><p>\r\n</p><p>Medios de pagos y aclaraciones \r\n</p><p>consignación bancaria\r\n</p><p>costo de envio no incluido\r\n</p><p>\r\n</p><p>Para pago en efectivo únicamente lo puedes hacer en nuestra oficina en Popayán: carrera 6 A 23N 29 Ciudad Jardín. Este pago solo lo puedes realizar si la oferta aún está activa en nuestra página. \r\n</p><p><br></p>', 'maxparati18@gmail.com', '65764832', 'labios,colageno,bella,suave,parche', '', 1, '2018-02-25 21:42:13', '2018-04-17 16:01:07'),
(11, 'Parches De Colageno Activo Ojos, Anti arrugas ,bolsas en los ojos  6 unidades', 3, 22, 5, 7, '<p>LOS CRISTALES DE COLAGENO:\r\n</p><p>TIENE UN FUERTE PODER ANTI ARRUGAS.\r\n</p><p>REDUCE LAS MOLESTAS BOLSAS DE LOS OJOS CAUSADAS POR INSOMNIO, FUMAR, CANSANCIO, PERIODOS LARGOS DE LECTURA, Y LA INFALTABLE EXPOSICIÓN AL SOL</p><p>ESTIMULAN LA PRODUCCION DE COLÁGENO Y ELASTINA\r\n</p><p>PREVIENE EL ENVEJECIMIENTO.\r\n</p><p>\r\nMEJORA LA ELASTICIDAD EN EL AREA DE LOS OJOS DANDO MAYOR FIRMEZA A LA PIEL </p><p>ELIMINA LÍNEAS FINAS, PREVIENE LA APARICIÓN DE NUEVAS ARRUGAS</p><p>¡Hidrata el area de los ojos en sólo 2 pasos!\r\n</p><p>\r\n</p><p>\r\n</p><p>\r\n</p><p>Coloca el parche sobre la zona libre de maquillaje. \r\n</p><p>\r\n</p><p>\r\n</p><p>\r\n</p><p>Retíralo en 15 minutos. No enjuagar.\r\n</p><p>\r\n</p><p>\r\n</p><p>\r\n</p><p>recibiras 6 sobres individuales Velos De Colageno </p>', '<p>Letra Menuda&nbsp;<br></p><p>City cupones disponibles: 10\r\n</p><p>\r\n</p><p>Si tu producto es para retirar en nuestra oficina, debes presentar el cupón<br></p><p>\r\n</p><p>Si pagas por medio de consignación, y la persona que viene a retirar el producto no es el comprador, debes traer adicional a estos documentos: Carta de autorización del comprador -Copia de cédula de quien retira el producto.\r\n</p><p>\r\n</p><p>Para retiro en persona acércate a: carrera 6 A 23N 29 Ciudad Jardín\r\n</p><p>\r\n</p><p>Garantía del producto por defectos de fábrica:1 mes - No aplica mal uso, se debe conservar el Empaque original.\r\n</p><p>\r\n</p><p>Despacho la transportadora de tu preferencia\r\n</p><p>\r\n</p><p>Recibirás tu producto en dirección a más tardar en 3 dias habiles</p><p>\r\n</p><p>\r\n</p><p>Puedes comprar todos los que desees\r\n</p><p>\r\n</p><p>Ver condiciones que aplican a todos nuestras city ofertas. Debe llevar un link a las condiciones generales\r\n</p><p>\r\n</p><p>El aliado es el único responsable ante los compradores por la calidad de los productos y servicios publicitados sin embargo estaremos atentos a que sea una experiencia única para ti.\r\n</p><p>\r\n</p><p>Medios de pagos y aclaraciones\r\n</p><p>\r\n</p><p>consignación bancaria\r\n</p><p>\r\n</p><p>costo de envio no incluido\r\n</p><p>\r\n</p><p>Para pago en efectivo únicamente lo puedes hacer en nuestra oficina en Popayán: carrera 6 A 23N 29 Ciudad Jardín. Este pago solo lo puedes realizar si la oferta aún está activa en nuestra página.</p>', 'maxparati18@gmail.com', '65764832', 'maquillaje,hidratacion,belleza,piel,ojos', '', 1, '2018-02-25 21:55:18', '2018-04-17 15:55:30'),
(12, 'Máscarilla Para Cuello Con Cristal De Colágeno Activo', 3, 22, 5, 7, '<p>MÁSCARILLA PARA EL CUELLO  CON CRISTAL DE COLÁGENO ACTIVO\r\n</p><p>\r\nNUTRE, </p><p>BLANQUEA,\r\n</p><p>REJUVENECE\r\n</p><p>HIDRATA\r\n</p><p>RESTAURA LA ELASTICIDAD Y SUAVIDAD,\r\n</p><p>CUELLO  FIRME Y BONITO</p>', '<p>City cupones disponibles: 6</p><p>Si tu producto es para retirar en nuestra oficina, debes presentar el cupón<br></p><p>Si pagas por medio de consignación, y la persona que viene a retirar el producto no es el comprador, debes traer adicional a estos documentos: Carta de autorización del comprador -Copia de cédula de quien retira el producto.\r\n</p><p>Para retiro en persona acércate a: carrera 6 A 23N 29 Ciudad Jardín\r\n</p><p>Garantía del producto por defectos de fábrica: … meses - No aplica mal uso, se debe conservar el Empaque original.\r\n</p><p>Despacho la transportadora de tu preferencia\r\n</p><p>Recibirás tu producto en   dirección a más tardar en 3 dias habiles</p><p>Puedes comprar todos los que desees&nbsp;<br></p><p>Ver condiciones que aplican a todos nuestras city ofertas. Debe llevar un link a las condiciones generales\r\n</p><p>El aliado es el único responsable ante los compradores por la calidad de los productos y servicios publicitados sin embargo estaremos atentos a que sea una experiencia única para ti.\r\n</p><p>\r\n</p><p>\r\n</p><p>Medios de pagos y aclaraciones \r\n</p><p>consignación bancaria\r\n</p><p>costo de envio no incluido\r\n</p><p>\r\n</p><p>Para pago en efectivo únicamente lo puedes hacer en nuestra oficina en Popayán: carrera 6 A 23N 29 Ciudad Jardín. Este pago solo lo puedes realizar si la oferta aún está activa en nuestra página. \r\n</p><p><br></p>', 'maxparati18@gmail.com', '65764832', 'cuello,hidratacion,mascarilla,belleza,arrugas', '', 1, '2018-02-26 21:58:27', '2018-04-17 15:53:47'),
(13, 'Máscarilla Para Senos Con Cristal Velos De Colágeno Activo', 3, 22, 5, 7, '<p>Máscarilla Para Senos Con Cristal Velos De Colágeno Activo</p><p>    Colágeno activo\r\n</p><p>    Nutre\r\n</p><p>    Blanquea\r\n</p><p>    Rejuvenece\r\n</p><p>    Hidrata\r\n</p><p>    Restaura la elasticidad y suavidad,\r\n</p><p>    Senos firmes y bonitos\r\n</p><p><br></p>', '<p>City cupones disponibles: 5</p><p>Si tu producto es para retirar en nuestra oficina, debes presentar el cupón<br></p><p>Si pagas por medio de consignación, y la persona que viene a retirar el producto no es el comprador, debes traer adicional a estos documentos: Carta de autorización del comprador -Copia de cédula de quien retira el producto.\r\n</p><p>Para retiro en persona acércate a: carrera 6 A 23N 29 Ciudad Jardín\r\n</p><p>Garantía del producto por defectos de fábrica:1  mes - No aplica mal uso, se debe conservar el Empaque original.\r\n</p><p>Despacho la transportadora de tu preferencia\r\n</p><p>Recibirás tu producto en   dirección a más tardar en 3 dias habiles\r\n</p><p>Puedes comprar todos los que desees\r\n</p><p>Ver condiciones que aplican a todos nuestras city ofertas. Debe llevar un link a las condiciones generales\r\n</p><p>El aliado es el único responsable ante los compradores por la calidad de los productos y servicios publicitados sin embargo estaremos atentos a que sea una experiencia única para ti.\r\n</p><p>\r\n</p><p>\r\n</p><p>Medios de pagos y aclaraciones \r\n</p><p>consignación bancaria\r\n</p><p>costo de envio no incluido\r\n</p><p>\r\n</p><p>Para pago en efectivo únicamente lo puedes hacer en nuestra oficina en Popayán: carrera 6 A 23N 29 Ciudad Jardín. Este pago solo lo puedes realizar si la oferta aún está activa en nuestra página. \r\n</p><p><br></p>', 'maxparati18@gmail.com', '65764832', 'mascarilla,piel,senos,colageno,bella', '', 1, '2018-02-26 22:10:31', '2018-04-25 20:10:20'),
(14, 'Pegamento De Látex Anti-desbordamiento Peel Off ¡excelente!', 3, 29, 5, 7, '<p>Pegamento De Látex Anti-desbordamiento Peel Off ¡excelente!\r\n</p><p>Barrera de esmalte de uñas peel off de látex líquido para arte en las uñas\r\n</p><p>perfecto para manicura, rápido, facil, divertido\r\n</p><p><br></p>', '<p>City cupones disponibles: 6</p><p>Si tu producto es para retirar en nuestra oficina, debes presentar el cupón<br></p><p>Si pagas por medio de consignación, y la persona que viene a retirar el producto no es el comprador, debes traer adicional a estos documentos: Carta de autorización del comprador -Copia de cédula de quien retira el producto.\r\n</p><p>Para retiro en persona acércate a: carrera 6 A 23N 29 Ciudad Jardín\r\n</p><p>Garantía del producto por defectos de fábrica:1 meses - No aplica mal uso, se debe conservar el Empaque original.\r\n</p><p>Despacho la transportadora de tu preferencia\r\n</p><p>Recibirás tu producto en   dirección a más tardar en 3 dias habiles\r\n</p><p>Puedes comprar todos los que desees\r\n</p><p>Ver condiciones que aplican a todos nuestras city ofertas. Debe llevar un link a las condiciones generales\r\n</p><p>El aliado es el único responsable ante los compradores por la calidad de los productos y servicios publicitados sin embargo estaremos atentos a que sea una experiencia única para ti.\r\n</p><p>\r\n</p><p>\r\n</p><p>Medios de pagos y aclaraciones \r\n</p><p>consignación bancaria\r\n</p><p>costo de envio no incluido\r\n</p><p>\r\n</p><p>Para pago en efectivo únicamente lo puedes hacer en nuestra oficina en Popayán: carrera 6 A 23N 29 Ciudad Jardín. Este pago solo lo puedes realizar si la oferta aún está activa en nuestra página. \r\n</p><p><br></p>', 'maxparati18@gmail.com', '65764832', 'uñas,manicure,cuidado,facil,belleza', '', 1, '2018-02-26 22:21:20', '2018-04-17 15:56:11');
INSERT INTO `productos` (`id`, `producto_titulo`, `producto_categoria`, `producto_subcategoria`, `producto_marca`, `producto_aliado`, `producto_descripcion`, `producto_letra_chica`, `producto_email`, `producto_nit`, `producto_palabras_clave`, `producto_imagen`, `producto_estatus`, `created_at`, `updated_at`) VALUES
(15, 'Deliciosos wraps a eleccion', 1, 3, 7, 10, '<p>Deliciosos wraps a eleccion </p><p>Disfruta en familia o con amigos de este delicioso platillo</p><p>sabores </p><p>pollo</p><p>cerdo</p><p>mixto</p><p>verduras</p><p>hawaiano</p><p>mexicano</p><p>queso</p><p>atun</p><p>jamon y queso</p><p>pollo picante y verduras</p><p>aguacate y verduras</p><p><img src=\"data:image/jpeg;base64,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', '<p>City cupones disponibles: 30\r\n</p><p>Tamaño aprox 15cm aprox.\r\n</p><p><br></p><p>\r\nNo se hacen entregas domingos ni festivos </p><p>Agendar su pedido con 2 días Hábiles de anticipación\r\n</p><p>Después de agendado por el cliente el pedido en caso de no reclamarlo y no confirmar cancelación 24 horas antes, este se dará por despachado.\r\n</p><p>Domicilio desde $6.000 dependiendo de la dirección.\r\n</p><p>No acumulable con otras ofertas.\r\n</p><p>Servicio de Domicilio sujeto a disponibilidad o entrega en punto de venta\r\n</p><p>Horario de despacho a partir de las 8 am a 6 pm \r\n</p><p>Para reservar envía tu cupón en PDF y agenda tu servicio al correo maxparati18@gmail.com o al WhatsApp 3182800655\r\n</p><p>Tel. 3182800655\r\n</p><p>Puedes comprar todos los que desees\r\n</p><p>Ver condiciones que aplican a todos nuestras city ofertas. \r\n</p><p>\r\n</p><p>Medios de pagos y aclaraciones \r\n</p><p>consignación bancaria\r\n</p><p>Para pago en efectivo únicamente lo puedes hacer en nuestra oficina en Popayán: carrera 6 A 23N 29 Ciudad Jardín. Este pago solo lo puedes realizar si la oferta aún está activa en nuestra página. \r\n</p><p>El aliado es el único responsable ante los compradores por la calidad de los productos y servicios publicitados sin embargo estaremos atentos a que sea una experiencia única para ti.\r\n</p><p>\r\n</p><p><br></p>', 'mariajosege2010@gmail.com', '1141718994', 'wraps,comida,rapida,delicioso,rico', '', 1, '2018-02-26 22:50:06', '2018-04-17 15:46:03');
INSERT INTO `productos` (`id`, `producto_titulo`, `producto_categoria`, `producto_subcategoria`, `producto_marca`, `producto_aliado`, `producto_descripcion`, `producto_letra_chica`, `producto_email`, `producto_nit`, `producto_palabras_clave`, `producto_imagen`, `producto_estatus`, `created_at`, `updated_at`) VALUES
(16, 'Labial Brillo Wow Romantic Bear Larga Duración Original', 3, 30, 5, 7, '<p>Labial Brillo Wow Romantic Bear Larga Duración Original </p><p>Colores:\r\n</p><p>•Sexy red\r\n</p><p>•Watermelon\r\n</p><p>•Lovely Peach\r\n</p><p>•Cherry red\r\n</p><p>•Rose pink</p>', '<p>City cupones disponibles: 20</p><p>Si tu producto es para retirar en nuestra oficina, debes presentar el cupón \r\n</p><p>Si pagas por medio de consignación, y la persona que viene a retirar el producto no es el comprador, debes traer adicional a estos documentos: Carta de autorización del comprador -Copia de cédula de quien retira el producto.\r\n</p><p>Para retiro en persona acércate a: carrera 6 A 23N 29 Ciudad Jardín\r\n</p><p>Garantía del producto por defectos de fábrica: … meses - No aplica mal uso, se debe conservar el Empaque original.\r\n</p><p>Despacho la transportadora de tu preferencia\r\n</p><p>Recibirás tu producto en   dirección a más tardar en 3 dias habiles\r\n</p><p>Puedes comprar todos los que desees\r\n</p><p>Ver condiciones que aplican a todos nuestras city ofertas. Debe llevar un link a las condiciones generales\r\n</p><p>El aliado es el único responsable ante los compradores por la calidad de los productos y servicios publicitados sin embargo estaremos atentos a que sea una experiencia única para ti.\r\n</p><p>\r\n</p><p>\r\n</p><p>Medios de pagos y aclaraciones \r\n</p><p>consignación bancaria\r\n</p><p>costo de envio no incluido\r\n</p><p>\r\n</p><p>Para pago en efectivo únicamente lo puedes hacer en nuestra oficina en Popayán: carrera 6 A 23N 29 Ciudad Jardín. Este pago solo lo puedes realizar si la oferta aún está activa en nuestra página. \r\n</p><p><br></p>', 'maxparati18@gmail.com', '65764832', 'labios,labial,brillo,color,sexi', '', 1, '2018-02-26 23:03:09', '2018-04-17 15:49:39'),
(17, 'Cinturilla Termo Shaper unisex Tonifica Baja De Peso', 3, 26, 5, 7, '<p><br></p><p>Características: \r\n</p><p>100% nuevo y de alta calidad \r\n</p><p>Faja corsé de neopreno adelgaza la cintura \r\n</p><p>Entrenamiento \r\n</p><p>Control \r\n</p><p>Uso diario\r\n</p><p>Especificaciones: \r\n</p><p>Generica de excelente calidad \r\n</p><p>Material: neopreno laminado poliéster dos laterales \r\n</p><p>Color: negro color exterior y de color amarillo dentro\r\n</p><p><br></p>', '<p>City cupones disponibles: 12</p><p>Si tu producto es para retirar en nuestra oficina, debes presentar el cupón<br></p><p>Si pagas por medio de consignación, y la persona que viene a retirar el producto no es el comprador, debes traer adicional a estos documentos: Carta de autorización del comprador -Copia de cédula de quien retira el producto.\r\n</p><p>Para retiro en persona acércate a: carrera 6 A 23N 29 Ciudad Jardín\r\n</p><p>Garantía del producto por defectos de fábrica 1  mes - No aplica mal uso, se debe conservar el Empaque original.\r\n</p><p>Despacho la transportadora de tu preferencia\r\n</p><p>Recibirás tu producto en   dirección a más tardar en 3 dias habiles\r\n</p><p>Puedes comprar todos los que desees\r\n</p><p>Ver condiciones que aplican a todos nuestras city ofertas. Debe llevar un link a las condiciones generales\r\n</p><p>El aliado es el único responsable ante los compradores por la calidad de los productos y servicios publicitados sin embargo estaremos atentos a que sea una experiencia única para ti.\r\n</p><p>\r\n</p><p>\r\n</p><p>Medios de pagos y aclaraciones \r\n</p><p>consignación bancaria\r\n</p><p>costo de envio no incluido\r\n</p><p>\r\n</p><p>Para pago en efectivo únicamente lo puedes hacer en nuestra oficina en Popayán: carrera 6 A 23N 29 Ciudad Jardín. Este pago solo lo puedes realizar si la oferta aún está activa en nuestra página. \r\n</p><p><br></p>', 'maxparati18@gmail.com', '65764832', 'faja,deporte,adelgazar,comoda,unisex', '', 1, '2018-02-26 23:20:44', '2018-04-17 15:44:12'),
(18, 'Trenzador Estilo Francés Magic Hair Styling Peinados Hermos', 5, 46, 5, 7, '<p>Trenzador Estilo Francés Magic Hair Styling Peinados Hermosos</p>', '<p>City cupones disponibles: 12</p><p>Si tu producto es para retirar en nuestra oficina, debes presentar el cupón<br></p><p>Si pagas por medio de consignación, y la persona que viene a retirar el producto no es el comprador, debes traer adicional a estos documentos: Carta de autorización del comprador -Copia de cédula de quien retira el producto.\r\n</p><p>Para retiro en persona acércate a: carrera 6 A 23N 29 Ciudad Jardín\r\n</p><p>Garantía del producto por defectos de fábrica: 1 mes - No aplica mal uso, se debe conservar el Empaque original.\r\n</p><p>Despacho la transportadora de tu preferencia\r\n</p><p>Recibirás tu producto en   dirección a más tardar en 3 dias habiles\r\n</p><p>Puedes comprar todos los que desees\r\n</p><p>Ver condiciones que aplican a todos nuestras city ofertas. Debe llevar un link a las condiciones generales\r\n</p><p>El aliado es el único responsable ante los compradores por la calidad de los productos y servicios publicitados sin embargo estaremos atentos a que sea una experiencia única para ti.\r\n</p><p>\r\n</p><p>\r\n</p><p>Medios de pagos y aclaraciones \r\n</p><p>consignación bancaria\r\n</p><p>costo de envio no incluido\r\n</p><p>\r\n</p><p>Para pago en efectivo únicamente lo puedes hacer en nuestra oficina en Popayán: carrera 6 A 23N 29 Ciudad Jardín. Este pago solo lo puedes realizar si la oferta aún está activa en nuestra página. \r\n</p><p><br></p>', 'maxparati18@gmail.com', '65764832', 'cabello,trenza,peluqueria,peinado,facil', '', 1, '2018-02-26 23:29:39', '2018-04-17 15:59:50'),
(19, 'Pinza Rizador Ondulador Profesional Nova', 3, 31, 5, 7, '<p>Pinza Rizador Ondulador Profesional Nova\r\n</p><p>Pinza con una longitud de 30cms.\r\n</p><p>Espiral de 15cms\r\n</p><p>\r\nProtección de punta fría </p><p>Cubierta en cerámica\r\n</p><p>Indicador de Encendido\r\n</p><p>Cable con rotación de 360 grados\r\n</p><p>Control de temperatura de 120 a 200 grados\r\n</p><p>Para todo tipo de cabello\r\n</p><p><br></p>', '<p>City cupones disponibles: 12</p><p>Si tu producto es para retirar en nuestra oficina, debes presentar el cupón<br></p><p>Si pagas por medio de consignación, y la persona que viene a retirar el producto no es el comprador, debes traer adicional a estos documentos: Carta de autorización del comprador -Copia de cédula de quien retira el producto.\r\n</p><p>Para retiro en persona acércate a: carrera 6 A 23N 29 Ciudad Jardín\r\n</p><p>Garantía del producto por defectos de fábrica:1 mes - No aplica mal uso, se debe conservar el Empaque original.\r\n</p><p>Despacho la transportadora de tu preferencia\r\n</p><p>Recibirás tu producto en   dirección a más tardar en 3 dias habiles\r\n</p><p>Puedes comprar todos los que desees\r\n</p><p>Ver condiciones que aplican a todos nuestras city ofertas. Debe llevar un link a las condiciones generales\r\n</p><p>El aliado es el único responsable ante los compradores por la calidad de los productos y servicios publicitados sin embargo estaremos atentos a que sea una experiencia única para ti.\r\n</p><p>\r\n</p><p>\r\n</p><p>Medios de pagos y aclaraciones \r\n</p><p>consignación bancaria\r\n</p><p>costo de envio no incluido\r\n</p><p>\r\n</p><p>Para pago en efectivo únicamente lo puedes hacer en nuestra oficina en Popayán: carrera 6 A 23N 29 Ciudad Jardín. Este pago solo lo puedes realizar si la oferta aún está activa en nuestra página. \r\n</p><p><br></p>', 'maxparati18@gmail.com', '65764832', 'rizador,cabello,salon,peluqueria,rizos', '', 1, '2018-02-26 23:43:53', '2018-04-17 15:56:50'),
(20, 'Set De 20 Pinceles Suaves Para Maquillaje Profesional', 3, 30, 5, 7, '<p>Set De 20 Pinceles Suaves Para Maquillaje Profesional</p><p>Material: Cabello Sintético\r\n</p><p>Cantidad: 20 x Pinceles\r\n</p><p>Tamaño de los pinceles: Entre 15 y 16 cm de largo\r\n</p><p>\r\n</p><p>Color: blanco,dorado,lila,negro\r\n</p><p>\r\n</p><p>Ideal para uso profesional o en casa. La fibra antibacterial tiene muy buena adhesion al polvo de maquillaje.\r\n</p><p><br></p>', '<p>City cupones disponibles: 12</p><p>Si tu producto es para retirar en nuestra oficina, debes presentar el cupón<br></p><p>Si pagas por medio de consignación, y la persona que viene a retirar el producto no es el comprador, debes traer adicional a estos documentos: Carta de autorización del comprador -Copia de cédula de quien retira el producto.\r\n</p><p>Para retiro en persona acércate a: carrera 6 A 23N 29 Ciudad Jardín\r\n</p><p>Garantía del producto por defectos de fábrica: 1 mes - No aplica mal uso, se debe conservar el Empaque original.\r\n</p><p>Despacho la transportadora de tu preferencia\r\n</p><p>Recibirás tu producto en   dirección a más tardar en 3 dias habiles\r\n</p><p>Puedes comprar todos los que desees\r\n</p><p>Ver condiciones que aplican a todos nuestras city ofertas. Debe llevar un link a las condiciones generales\r\n</p><p>El aliado es el único responsable ante los compradores por la calidad de los productos y servicios publicitados sin embargo estaremos atentos a que sea una experiencia única para ti.\r\n</p><p>\r\n</p><p>\r\n</p><p>Medios de pagos y aclaraciones \r\n</p><p>consignación bancaria\r\n</p><p>costo de envio no incluido\r\n</p><p>\r\n</p><p>Para pago en efectivo únicamente lo puedes hacer en nuestra oficina en Popayán: carrera 6 A 23N 29 Ciudad Jardín. Este pago solo lo puedes realizar si la oferta aún está activa en nuestra página. \r\n</p><p><br></p>', 'maxparati18@gmail.com', '65764832', 'pinceles,maquillaje,suave,hermosa,brochas', '', 1, '2018-02-26 23:56:41', '2018-04-17 15:59:19'),
(21, 'Pendientes Biomagneticos  Adelgazante, Baja de Peso + Mas Regalo', 3, 34, 5, 7, '<p>El arete biomagnetico está basado en la ancestral y comprobada medicina china de la auriculoterapia. sirve para fortalecer la salud general de su cuerpo, disminuye el estrés y aumenta el flujo de energía. Controla la ansiedad, ayuda a dejar de fumar, ayuda a bajar de peso, entre muchos otros beneficios.</p>', '<p>City cupones disponibles: 5</p><p>Oferta vigente desde el 28-01-2018 hasta el 28-03-2018.\r\n</p><p>Si tu producto es para retirar en nuestra oficina, debes presentar el cupón \r\n</p><p>Si pagas por medio de consignación, y la persona que viene a retirar el producto no es el comprador, debes traer adicional a estos documentos: Carta de autorización del comprador -Copia de cédula de quien retira el producto.\r\n</p><p>Para retiro en persona acércate a: carrera 6 A 23N 29 Ciudad Jardín\r\n</p><p>Garantía del producto por defectos de fábrica: 1 mes- No aplica mal uso, se debe conservar el Empaque original.\r\n</p><p>Despacho la transportadora de tu preferencia\r\n</p><p>Recibirás tu producto en   dirección a más tardar en 3 dias habiles\r\n</p><p>Puedes comprar todos los que desees\r\n</p><p>Ver condiciones que aplican a todos nuestras city ofertas. Debe llevar un link a las condiciones generales\r\n</p><p>El aliado es el único responsable ante los compradores por la calidad de los productos y servicios publicitados sin embargo estaremos atentos a que sea una experiencia única para ti.\r\n</p><p>\r\n</p><p>\r\n</p><p>Medios de pagos y aclaraciones \r\n</p><p>consignación bancaria\r\n</p><p>costo de envio no incluido\r\n</p><p>\r\n</p><p>Para pago en efectivo únicamente lo puedes hacer en nuestra oficina en Popayán: carrera 6 A 23N 29 Ciudad Jardín. Este pago solo lo puedes realizar si la oferta aún está activa en nuestra página. \r\n</p><p><br></p>', 'maxparati18@gmail.com', '65764832', 'auriculoterapia,adelgazar,salud,belleza,magnetico', '', 0, '2018-02-28 13:05:07', '2018-02-28 13:05:07'),
(22, 'Correa de barbilla anti-ronquido', 3, 26, 5, 7, '<p>La correa de barbilla anti-ronquido detiene instantáneamente el ronquido sosteniendo su mandíbula firmemente en su lugar. Con la posición delantera de la mandíbula, evite eficazmente que los tejidos de lengua y garganta se caigan hacia atrás y bloqueen la vía aérea.\r\n</p><p>Elimine ronquidos leves y moderados.\r\n</p><p>Puede alinear correctamente la boca y la mandíbula para prevenir el ronquido.\r\n</p><p>Se adapta perfectamente a la cabeza. \r\n</p><p>Duerma profundamente con esta correa suave y cómoda.\r\n</p><p><br></p>', '<p>City cupones disponibles: 12</p><p>Si tu producto es para retirar en nuestra oficina, debes presentar el cupón<br></p><p>Si pagas por medio de consignación, y la persona que viene a retirar el producto no es el comprador, debes traer adicional a estos documentos: Carta de autorización del comprador -Copia de cédula de quien retira el producto.\r\n</p><p>Para retiro en persona acércate a: carrera 6 A 23N 29 Ciudad Jardín\r\n</p><p>Garantía del producto por defectos de fábrica: 2  meses - No aplica mal uso, se debe conservar el Empaque original.\r\n</p><p>Despacho la transportadora de tu preferencia\r\n</p><p>Recibirás tu producto en   dirección a más tardar en 3 dias habiles\r\n</p><p>Puedes comprar todos los que desees\r\n</p><p>Ver condiciones que aplican a todos nuestras city ofertas. Debe llevar un link a las condiciones generales\r\n</p><p>El aliado es el único responsable ante los compradores por la calidad de los productos y servicios publicitados sin embargo estaremos atentos a que sea una experiencia única para ti.\r\n</p><p>\r\n</p><p>\r\n</p><p>Medios de pagos y aclaraciones \r\n</p><p>consignación bancaria\r\n</p><p>costo de envio no incluido\r\n</p><p>\r\n</p><p>Para pago en efectivo únicamente lo puedes hacer en nuestra oficina en Popayán: carrera 6 A 23N 29 Ciudad Jardín. Este pago solo lo puedes realizar si la oferta aún está activa en nuestra página. \r\n</p><p><br></p>', 'maxparati18@gmail.com', '65764832', 'dormir,roncar,descanso,bienestar,salud', '', 1, '2018-03-01 12:35:13', '2018-04-17 15:44:35'),
(25, 'Cortador Y Rebanador De Piña Hawaiana', 5, 42, 5, 7, '<p>Cortador Y  descorazonador de piñas \r\n</p><p>para cócteles, menús, cascara , rodajas en espiral restaurante \r\n</p><p>\r\n</p><p>características.\r\n</p><p>El mejor rebanador y cortador de piña en espiral.\r\n</p><p>100% seguro y durable.\r\n</p><p>Mango removible para sacar fácilmente las rodajas.\r\n</p><p>Saca perfectamente la pulpa de la piña y separa el tronco.\r\n</p><p>Fácil de limpiar.\r\n</p><p>Con mango ergonómico para un mejor agarre.\r\n</p><p>Excelente  calidad.\r\n</p><p><br></p>', '<p>Letra Menuda\r\n</p><p>City cupones disponibles: 12</p><p>\r\n</p><p>Si tu producto es para retirar en nuestra oficina, debes presentar el cupón<br></p><p>\r\n</p><p>Si pagas por medio de consignación, y la persona que viene a retirar el producto no es el comprador, debes traer adicional a estos documentos: Carta de autorización del comprador -Copia de cédula de quien retira el producto.\r\n</p><p>\r\n</p><p>Para retiro en persona acércate a: carrera 6 A 23N 29 Ciudad Jardín\r\n</p><p>\r\n</p><p>Garantía del producto por defectos de fábrica: … meses - No aplica mal uso, se debe conservar el Empaque original.\r\n</p><p>\r\n</p><p>Despacho la transportadora de tu preferencia\r\n</p><p>\r\n</p><p>Recibirás tu producto en dirección a más tardar en 3 dias habiles</p><p>\r\n</p><p>Puedes comprar todos los que desees\r\n</p><p>\r\n</p><p>Ver condiciones que aplican a todos nuestras city ofertas. </p><p>\r\n</p><p>El aliado es el único responsable ante los compradores por la calidad de los productos y servicios publicitados sin embargo estaremos atentos a que sea una experiencia única para ti.\r\n</p><p>\r\n</p><p>Medios de pagos y aclaraciones\r\n</p><p>\r\n</p><p>consignación bancaria\r\n</p><p>\r\n</p><p>Para pago en efectivo únicamente lo puedes hacer en nuestra oficina en Popayán: carrera 6 A 23N 29 Ciudad Jardín. Este pago solo lo puedes realizar si la oferta aún está activa en nuestra página.</p>', 'maxparati18@gmail.com', '65764832', 'fruta,piña,facil,rebanador', '', 1, '2018-03-15 11:26:13', '2018-04-17 15:45:34'),
(28, 'Limpiador facial de poros quita espinillas puntos negros', 3, 20, 5, 7, '<p>Limpiador facial de poros quita espinillas puntos negros</p><p>Activa la circulación en la piel, elimina las células muertas, limpia los poros, reafirma la elasticidad de la piel y mejora la apariencia de pieles con acné. </p><p>Apta para cualquier área de la cara excepto el contorno de ojos. </p><p> Fácil de usar</p>', '<p>Letra Menuda\r\n</p><p>City cupones disponibles: 10\r\n</p><p>Oferta vigente desde el 28-03-2018 hasta el 28-04-2018.\r\n</p><p>Si tu producto es para retirar en nuestra oficina, debes presentar el cupón\r\n</p><p>Si pagas por medio de consignación, y la persona que viene a retirar el producto no es el comprador, debes traer adicional a estos documentos: Copia de cédula de quien retira el producto.\r\n</p><p>Para retiro en persona acércate a: carrera 6 A 23N 29 Ciudad Jardín\r\n</p><p>Garantía del producto por defectos de fábrica:1 mes - No aplica mal uso, se debe conservar el Empaque original.\r\n</p><p>Despacho por  la transportadora de tu preferencia\r\n</p><p>Recibirás tu producto en dirección a más tardar en 3 dias habiles\r\n</p><p>Puedes comprar todos los que desees\r\n</p><p>Ver condiciones que aplican a todos nuestras city ofertas\r\n</p><p>El aliado es el único responsable ante los compradores por la calidad de los productos y servicios publicitados sin embargo estaremos atentos a que sea una experiencia única para ti.\r\n</p><p>Medios de pagos y aclaraciones\r\n</p><p>consignación bancaria\r\n</p><p>Para pago en efectivo únicamente lo puedes hacer en nuestra oficina en Popayán: carrera 6 A 23N 29 Ciudad Jardín. Este pago solo lo puedes realizar si la oferta aún está activa en nuestra página.\r\n</p><p><br></p>', 'maxparati18@gmail.com', '65764832', 'piel poros puntos negros,poros,Limpiador facial de poros quita espinillas puntos negros', '', 1, '2018-03-28 20:53:17', '2018-03-28 20:53:17'),
(29, 'ASESORÍA INTEGRAL EN CONSTITUCIÓN DE EMPRESA PERSONA JURÍDICA + ESTATUTOS SOCIALES', 2, 16, 6, 12, '<p>\r\n</p><p>1.	ASESORÍA INTEGRAL EN CONSTITUCIÓN DE EMPRESA PERSONA JURÍDICA + ESTATUTOS SOCIALES\r\n</p><p>ANTES $ 1.200.000 AHORA $ 700.000                       42% DE DESCUENTO</p><p>\r\n</p><p>2.	REGISTRO O ACTUALIZACIÓN DEL RUT + PLANEACIÓN TRIBUTARIA DECLARACIÓN DE RENTA PERSONA NATURAL 2018 + ASESORÍA BENEFICIOS TRIBUTARIOS POR CÉDULAS PERSONAS NATURALES\r\n</p><p>ANTES $ 850.000 AHORA $ 550.000                          35%  DE DESCUENTO</p><p><br></p>', '<p>City cupones disponibles: 12\r\n</p><p>Agendar su cita con 2 días hábiles de anticipación\r\n</p><p>No acumulable con otras ofertas.\r\n</p><p>Servicio a domicilio sujeto a disponibilidad \r\n</p><p>Horario de atención 9 am a 5 pm \r\n</p><p>Para reservar envía tu cupón en pdf y agenda tu servicio al correo asicpopayan@gmail.com  o  al cel. 3116082212\r\n</p><p>Tel. 3116082212\r\n</p><p>Puedes comprar todos los que desees\r\n</p><p>ver condiciones que aplican a todos nuestras city ofertas. \r\n</p><p>\r\n</p><p>Medios de pagos y aclaraciones \r\n</p><p>Consignación bancaria\r\n</p><p>Para pago en efectivo únicamente lo puedes hacer en nuestra oficina en popayán: carrera 6 a 23n 29 ciudad jardín. Este pago solo lo puedes realizar si la oferta aún está activa en nuestra página. \r\n</p><p>El aliado es el único responsable ante los compradores por la calidad de los productos y servicios publicitados sin embargo estaremos atentos a que sea una experiencia única para ti.\r\n</p><p>\r\n</p><p><br></p>', 'YOES1978@HOTMAIL.COM', '65782195', 'asesoria,servicios,dian,impuestos,empresas', '', 1, '2018-04-03 22:39:38', '2018-04-16 19:57:27'),
(31, 'Esponja magica para depilacion', 3, 23, 5, 7, '<p>Esponja magica para depilacion</p><p>Características:\r\n</p><p>Forma:  gota, ovalada, corazón, se envía aleatoriamente\r\n</p><p> no lastima la piel. \r\n</p><p>Material de espuma amigable con la piel, es muy suave, quita el vello del cuerpo sin dolor, \r\n</p><p>Cómo utilizar:\r\n</p><p>El diseño es muy fácil de usar:\r\n</p><p>                                                          cara rosada depila \r\n</p><p>                                                          superficie verde lubrica la piel.\r\n</p><p> Antes del uso, debe mojar la piel \r\n</p><p> Con la cara color rosa utilice fricción en forma circular, no presione la piel.\r\n</p><p>Retire suavemente con la mano o un paño húmedo el vello removido\r\n</p><p>Con la cara verde frote suavemente la parte depilada, humectara su piel\r\n</p><p>Lavar suavemente con agua después del uso, no disolventes ni jabones fuertes, puede afectar los resultados \r\n</p><p>Paquete incluye:\r\n</p><p>1 unid esponja removedor de vello (se envía aleatoriamente la forma del removedor)\r\n</p><p><br></p><p>https://www.youtube.com/watch?v=dlWJzv6jVkA</p>', '<p>City cupones disponibles: 10\r\n</p><p><br></p><p>Si tu producto es para retirar en nuestra oficina, debes presentar el cupón </p><p>\r\n</p><p>Si pagas por medio de consignación, y la persona que viene a retirar el producto no es el comprador, debes traer adicional a estos documentos: Copia de cédula de quien retira el producto.\r\n</p><p>\r\n</p><p>Para retiro en persona acércate a: carrera 6 A 23N 29 Ciudad Jardín\r\n</p><p>\r\n</p><p>Garantía del producto por defectos de fábrica:1 mes - No aplica mal uso, se debe conservar el Empaque original.\r\n</p><p>\r\n</p><p>Despacho por la transportadora de tu preferencia\r\n</p><p>\r\n</p><p>Recibirás tu producto en dirección a más tardar en 3 dias habiles\r\n</p><p>\r\n</p><p>Puedes comprar todos los que desees\r\n</p><p>\r\n</p><p>Ver condiciones que aplican a todos nuestras city ofertas\r\n</p><p>\r\n</p><p>El aliado es el único responsable ante los compradores por la calidad de los productos y servicios publicitados sin embargo estaremos atentos a que sea una experiencia única para ti.\r\n</p><p>\r\n</p><p>Medios de pagos y aclaraciones\r\n</p><p>\r\n</p><p>consignación bancaria\r\n</p><p>\r\n</p><p>Para pago en efectivo únicamente lo puedes hacer en nuestra oficina en Popayán: carrera 6 A 23N 29 Ciudad Jardín. Este pago solo lo puedes realizar si la oferta aún está activa en nuestra página.</p>', 'maxparati18@gmail.com', '65764832', 'DEPILACION,ESPONJA,SUAVE,RAPIDO,BELLEZA', '', 1, '2018-04-11 13:08:22', '2018-04-11 18:59:04'),
(32, 'HERMOSOS CROP TOP', 5, 46, 5, 7, '<p>HERMOSOS CROP TOP DE MODA</p>', '<p>City cupones disponibles: 12</p><p>\r\n</p><p>Si tu producto es para retirar en nuestra oficina, debes presentar el cupón <br></p><p>\r\n</p><p>Si pagas por medio de consignación, y la persona que viene a retirar el producto no es el comprador, debes traer adicional a estos documentos: Carta de autorización del comprador -Copia de cédula de quien retira el producto.\r\n</p><p>\r\n</p><p>Para retiro en persona acércate a: carrera 6 A 23N 29 Ciudad Jardín\r\n</p><p>\r\n</p><p>Garantía del producto por defectos de fábrica: 1 meses - No aplica mal uso, se debe conservar el Empaque original.\r\n</p><p>\r\n</p><p>Despacho la transportadora de tu preferencia\r\n</p><p>\r\n</p><p>Recibirás tu producto en dirección a más tardar en tres dias habiles\r\n</p><p>\r\n</p><p>Puedes comprar todos los que desees\r\n</p><p>\r\n</p><p>Ver condiciones que aplican a todos nuestras city ofertas. </p><p>\r\n</p><p>El aliado es el único responsable ante los compradores por la calidad de los productos y servicios publicitados sin embargo estaremos atentos a que sea una experiencia única para ti.\r\n</p><p>\r\n</p><p>Medios de pagos y aclaraciones\r\n</p><p>\r\n</p><p>consignación bancaria\r\n</p><p>\r\n</p><p>Para pago en efectivo únicamente lo puedes hacer en nuestra oficina en Popayán: carrera 6 A 23N 29 Ciudad Jardín.</p><p> Este pago solo lo puedes realizar si la oferta aún está activa en nuestra página.\r\n</p><p>\r\n</p><p><br></p>', 'maxparati18@gmail.com', '65764832', 'CROP TOP,TOP,MODA,BELLO', '', 1, '2018-04-17 12:55:50', '2018-04-17 15:49:04'),
(42, 'Mantenimiento preventivo y correctivo de Lavadoras a domicilio - Todas las marcas', 2, 14, 13, 22, '<p>Mantenimiento preventivo y correctivo de Lavadoras a domicilio - Todas las marcas\r\n</p><p>Mantenimiento preventivo y correctivo de Lavadoras a domicilio, si se requieren repuestos, estos no están incluidos dentro del cupón\r\n</p><p><br></p><p><br></p>', '<p>\r\n</p><p>•	City cupones disponibles: \r\n15</p><p>\r\n</p><p>•	Debes presentar el cupón impreso para recibir el servicio\r\n</p><p>\r\n</p><p>•	Puedes comprar todos los que desees\r\n</p><p>\r\n</p><p>•	Agenda tu cita con 2 días Hábiles de anticipación\r\n</p><p>\r\n</p><p>•	Después de agendado por el cliente la cita, en caso de no confirmar cancelación 12 horas antes, este se dará por prestado.\r\n</p><p>\r\n</p><p>•	No acumulable con otras ofertas.\r\n</p><p>\r\n</p><p>•	Cita sujeta a disponibilidad \r\n</p><p>\r\n</p><p>•	Horario de despacho a partir de las 8 am a 6 pm \r\n</p><p>\r\n</p><p>•	Para reservar envía tu cupón en PDF y agenda tu servicio al correo lizardocruzp@outlook.es \r\n</p><p>\r\n</p><p>•	Tel. 3104964232\r\n</p><p>\r\n</p><p>Ver condiciones que aplican a todos nuestras city ofertas.\r\n</p><p>\r\n</p><p>El aliado es el único responsable ante los compradores por la calidad de los productos y servicios publicitados, sin embargo, estaremos atentos a que sea una experiencia única para ti.\r\n</p><p>\r\n</p><p>Medios de pagos y aclaraciones \r\n</p><p>\r\n</p><p>consignación bancaria, pago en efectivo oficina Cuponcity.\r\n</p><p>\r\n</p><p>\r\n</p><p>\r\n</p><p>Para pago en efectivo únicamente lo puedes hacer en nuestra oficina en Popayán: carrera 6 A 23N 29 Ciudad Jardín. Este pago solo lo puedes realizar si la oferta aún está activa en nuestra página. \r\n</p><p>\r\n</p><p><br></p>', 'lizardocruzp@outlook.es', '10292068', 'LAVADORAS,MANTENIMIENTO,ELECTRODOMESTICOS,ARREGLO,PREVENTIVO', '', 1, '2018-04-23 15:14:20', '2018-04-23 15:14:20'),
(45, 'Peinado para niña + extensión de pestañas dama + domicilio', 3, 19, 12, 18, '<p><br></p><p>\r\n</p><p>Peinado para niña + extensión de pestañas dama + domicilio\r\n</p><p>Incluye materiales y accesorios básicos; </p><p>Si el cliente requiere un accesorio especial debe proporcionarlo.<br></p><p>Pestañas punto a punto duración 15 días o dependiendo el cuidado\r\n.</p><p>Extension de Pestañas para niñas mayores de 14 años</p>', '<p>•	City cupones disponibles: 15 \r\n</p><p>•	Debes presentar el cupón impreso para recibir el servicio\r\n</p><p>•	Puedes comprar todos los que desees\r\n</p><p>•	Agendar tu cita con 2 días hábiles de anticipación\r\n</p><p>•	Después de agendada la cita por el cliente, en caso de no confirmar cancelación 12 horas antes, este se dará por prestado.\r\n</p><p>•	No acumulable con otras ofertas.\r\n</p><p>•	Cita sujeta a disponibilidad  \r\n</p><p>Para reservar comunícate a los siguientes teléfonos \r\n</p><p>Teléfono Fijo: 	8357667 \r\n</p><p>Celular: 	       3155507654\r\n</p><p>Ver condiciones que aplican a todos nuestras city ofertas.\r\n</p><p>El aliado es el único responsable ante los compradores por la calidad de los productos y servicios publicitados, sin embargo, estaremos atentos a que sea una experiencia única para ti.\r\n</p><p>\r\n</p><p>Medios de pagos y aclaraciones \r\n</p><p>Consignación bancaria, pago en efectivo en la oficina de Cuponcity.\r\n</p><p>\r\n</p><p>Para pago en efectivo únicamente lo puedes hacer en nuestra oficina en Popayán: Carrera 6 A 23N 29 Ciudad Jardín. Este pago solo lo puedes realizar si la oferta aún está activa en nuestra página. \r\n</p><p><br></p>', 'marce_ahg@hotmail.com', '1061745757', 'trenzas,niñas,peinado,ocasión', '', 1, '2018-04-23 17:56:11', '2018-04-25 11:46:35'),
(50, 'Peinado a elección para dos niñas más domicilio', 3, 19, 12, 18, '<p>Incluye materiales y accesorios básicos;<br></p><p>Si el cliente requiere un accesorio especial debe proporcionarlo.</p><p>\r\n</p><p>Extension de Pestañas para niñas mayores de 14 años</p>', '<p>•	City cupones disponibles: 15 \r\n</p><p>•	Debes presentar el cupón impreso para recibir el servicio\r\n</p><p>•	Puedes comprar todos los que desees\r\n</p><p>•	Agendar tu cita con 2 días hábiles de anticipación\r\n</p><p>•	Después de agendada la cita por el cliente, en caso de no confirmar cancelación 12 horas antes, este se dará por prestado.\r\n</p><p>•	No acumulable con otras ofertas.\r\n</p><p>•	Cita sujeta a disponibilidad  \r\n</p><p>Para reservar comunícate a los siguientes teléfonos \r\n</p><p>Teléfono Fijo: 	8357667 \r\n</p><p>Celular: 	       3155507654\r\n</p><p>Ver condiciones que aplican a todos nuestras city ofertas.\r\n</p><p>El aliado es el único responsable ante los compradores por la calidad de los productos y servicios publicitados, sin embargo estaremos atentos a que sea una experiencia única para ti.\r\n</p><p>\r\n</p><p>Medios de pagos y aclaraciones \r\n</p><p>Consignación bancaria, pago en efectivo en la oficina de Cuponcity.\r\n</p><p>\r\n</p><p>Para pago en efectivo únicamente lo puedes hacer en nuestra oficina en Popayán: Carrera 6 A 23N 29 Ciudad Jardín. Este pago solo lo puedes realizar si la oferta aún está activa en nuestra página. \r\n</p><p>\r\n</p><p>\r\n</p><p><br></p>', 'yoes1978@hotmail.com', '65782195', 'trenzas,pestañas,peinados,fiestas,niñas', '', 1, '2018-04-24 23:11:50', '2018-04-26 08:40:15'),
(53, 'Paquete preventivo   Profilaxis + Detartraje + Fluorización', 3, 21, 17, 23, '<p><b>ODONTOLOGIA ESTETICA INTEGRAL</b></p><p>Luce una sonrisa hermosa con éste súper paquete que Odontología Estética Integral tiene para ti!</p><p><b><br></b></p><p><b>Paquete preventivo   Profilaxis + Detartraje + Fluorización</b><br></p><p>\r\n</p><p>La profilaxis dental te ayuda a mantener la cavidad oral en excelente estado de salud y también detiene las enfermedades de las encías. El detartraje es una técnica de limpieza bucal especial  que consiste en remover los cálculos de las superficies dentales, es decir, la placa bacteriana y el sarro acumulados en las encías.</p><p><br></p><p><br></p>', '<b>ODONTOLOGíA ESTÉTICA INTEGRAL\r\n</b><p></p><div>\r\n</div><div>•	City cupones disponibles: 15</div><div>\r\n</div><div>•	Debes presentar el cupón impreso para recibir el servicio\r\n</div><div>•	Puedes comprar todos los que desees\r\n</div><div>•	Agendar tu cita con 2 días hábiles de anticipación\r\n</div><div>•	Después de agendada la cita por el cliente, en caso de no confirmar cancelación 12 horas antes, este se dará por prestado. \r\n</div><div>•	No acumulable con otras ofertas.\r\n</div><div>•	Cita sujeta a disponibilidad\r\n</div><div>•	Horario de atención\r\n</div><div>Lunes a sábado 8 am a 12\r\n</div><div>Lunes, miércoles, viernes De 2 a 6 pm\r\n</div><div>•	Para reservar envía tu cupón en PDF y agenda tu servicio al correo satisan144@gmail.com\r\n</div><div>•	Tel. 8205412</div><div><br></div><div>\r\n</div><div>\r\n</div><div><b>Ver condiciones que aplican a todos nuestras city ofertas.\r\n</b></div><div>\r\n</div><div>El aliado es el único responsable ante los compradores por la calidad de los productos y servicios publicitados sin embargo estaremos atentos a que sea una experiencia única para ti.</div><div><br></div><div>\r\n</div><div>\r\n</div><div><b>Medios de pagos y aclaraciones\r\n</b></div><div>Consignación bancaria, pago en efectivo oficina Cuponcity.\r\n</div><div>Para pago en efectivo únicamente lo puedes hacer en nuestra oficina en Popayán: Carrera 6 A 23N 29 Ciudad Jardín. Este pago sólo lo puedes realizar si la oferta aún está activa en nuestra página.\r\n</div><div><br></div>', 'satisan144@gmail.com', '34565117', 'blanqueamiento,laser,odontologia,profilaxis,dientes', '', 1, '2018-04-25 10:17:42', '2018-04-25 20:10:37'),
(54, 'Blanqueamiento Cosmético Láser', 3, 21, 17, 23, '<p>Haz que tu sonrisa brille con el blanqueamiento cosmético láser que te ofrece Odontología Estética Integral.</p>', '<p><b>ODONTOLOGíA ESTÉTICA INTEGRAL</b></p><p>•	City cupones disponibles: 10</p><p></p><div>•	Debes presentar el cupón impreso para recibir el servicio\r\n</div><div>•	Puedes comprar todos los que desees\r\n</div><div>•	Agendar tu cita con 2 días hábiles de anticipación\r\n</div><div>•	Después de agendada la cita por el cliente, en caso de no confirmar cancelación 12 horas antes, este se dará por prestado.\r\n</div><div>•	No acumulable con otras ofertas.\r\n</div><div>•	Cita sujeta a disponibilidad  \r\n</div><div>•	Horario de atención\r\n</div><div>Lunes a sábado   8 am a 12\r\n</div><div>Lunes, miércoles, viernes De 2 a 6 pm\r\n</div><div>•	Para reservar envía tu cupón en PDF y agenda tu servicio al correo satisan144@gmail.com\r\n</div><div>•	 Tel. 8205412</div><div><br></div><div>\r\n</div><div><br></div><div><b>Ver condiciones que aplican a todos nuestras city ofertas.</b></div><div><b><br></b></div><div><b>\r\n</b></div><div>El aliado es el único responsable ante los compradores por la calidad de los productos y servicios publicitados sin embargo estaremos atentos a que sea una experiencia única para ti.</div><div><br></div><div>\r\n</div><div>\r\n</div><div><b>Medios de pagos y aclaraciones \r\n</b></div><div>Consignación bancaria, pago en efectivo oficina Cuponcity.\r\n</div><div>Para pago en efectivo únicamente lo puedes hacer en nuestra oficina en Popayán: Carrera 6 A 23N 29 Ciudad Jardín. Este pago sólo lo puedes realizar si la oferta aún está activa en nuestra página. \r\n</div><div><br></div><p></p>', 'satisan144@gmail.com', '34565117', 'ODONTOLOGIA,BLANQUEAMIENTO,ESTETICA DENTAL,DIENTES', '', 1, '2018-04-25 10:30:52', '2018-04-25 17:58:06'),
(55, 'Quieres mejorar la apariencia de tus dientes?  Mira la carilla estética que tenemos para ti!!', 3, 21, 17, 23, '<p>Carilla Estética<br></p><p>Las carillas dentales son prótesis de porcelana finas que se pegan en la superficie anterior de los dientes, proporcionando una apariencia natural y atractiva. Las carillas dentales se usan para corregir dientes fracturados, manchados, desalineados, desgastados, desiguales o con separación anormal.</p><p><br></p><p>Odontología Estética Integral tiene para ti a un súper precio!</p>', '<div>•	City cupones disponibles: 10</div><div>•	Debes presentar el cupón impreso para recibir el servicio</div><div>•	Puedes comprar todos los que desees</div><div>•	Agendar tu cita con 2 días hábiles de anticipación</div><div>•	Después de agendada la cita por el cliente, en caso de no confirmar cancelación 12 horas antes, este se dará por prestado.</div><div>•	No acumulable con otras ofertas.</div><div>•	Cita sujeta a disponibilidad  </div><div>•	Horario de atención</div><div>Lunes a sábado   8 am a 12</div><div>Lunes, miércoles, viernes De 2 a 6 pm</div><div>•	Para reservar envía tu cupón en PDF y agenda tu servicio al correo satisan144@gmail.com</div><div>•	 Tel. 8205412</div><div><br></div><div><b>ODONTOLOGIA ESTETICA INTEGRAL</b></div><div>Ver condiciones que aplican a todos nuestras city ofertas.</div><div>El aliado es el único responsable ante los compradores por la calidad de los productos y servicios publicitados sin embargo estaremos atentos a que sea una experiencia única para ti.</div><div><b><br></b></div><div><b>Medios de pagos y aclaraciones </b></div><div>Consignación bancaria, pago en efectivo oficina Cuponcity.</div><div>Para pago en efectivo únicamente lo puedes hacer en nuestra oficina en Popayán: Carrera 6 A 23N 29 Ciudad Jardín. Este pago sólo lo puedes realizar si la oferta aún está activa en nuestra página.</div>', 'satisan144@gmail.com', '34565117', 'carilla,estetica,dental,odontologia', '', 1, '2018-04-25 11:25:21', '2018-04-25 20:11:33'),
(56, 'Exquisitos Alfajores de Dulce Julieta - Paga 85 alfajores y lleva 100  empacados según la ocasión + domicilio', 1, 4, 18, 24, '<p>Aprovecha esta promoción para tus eventos más especiales!</p><p><br></p><p><b>Paga 85 alfajores y lleva 100  empacados según la ocasión + domicilio\r\n</b></p><p>Los alfajores de Dulce Julieta se preparan con productos de alta calidad conservando la receta original de Argentina. <br></p><p>\r\n</p><p>Son ideales para: \r\n</p><p>•	Pasabocas \r\n</p><p>•	Recordatorios comestibles\r\n</p><p>•	Fiestas infantiles\r\n</p><p> \r\n</p><p>\r\n</p><p><br></p>', '<p>•	Paga 85 alfajores y lleva 100\r\n</p><p>•	City cupones disponibles:   15 \r\n</p><p>•	Tamaño 6 cm aproximadamente cada uno\r\n</p><p>•	Decoración y color según la ocasión.\r\n</p><p>•	Agendar su pedido con 2 días hábiles de anticipación.\r\n</p><p>•	Después de agendado por el cliente el pedido en caso de no reclamarlo y no confirmar cancelación 24 horas antes, éste se dará por despachado.\r\n</p><p>•	Domicilio gratis.\r\n</p><p>•	Servicio de Domicilio sujeto a disponibilidad o entrega en punto de venta.\r\n</p><p>•	Horario de despacho a partir de las 7 am hasta las 5 pm.\r\n</p><p>•	No acumulable con otras ofertas.\r\n</p><p>•	Puedes comprar todos los que desees.\r\n</p><p>•	Ver condiciones que aplican a todos nuestras City Ofertas.\r\n</p><p>\r\n</p><p>Medios de pagos y aclaraciones\r\n</p><p>•	Consignación bancaria o pago en efectivo.\r\n</p><p>•	Para pago en efectivo únicamente lo puedes hacer en nuestra oficina en Popayán: carrera 6 A 23N 29 Ciudad Jardín, Popayán.\r\n</p><p>•	Este pago sólo lo puedes realizar si la oferta aún está activa en nuestra página.\r\n</p><p>•	El aliado es el único responsable ante los compradores por la calidad de los productos y servicios publicitados, sin embargo, estaremos atentos para que sea una experiencia única para ti.\r\n</p><p>\r\n</p><p>\r\n</p><p>Para reservar, envía tu cupón en PDF y agenda tu servicio al correo  julianadiazmayo9@hotmail.com\r\n</p><p>Tel. 3187946925\r\n</p><p>\r\n</p><p><br></p>', 'julianadiazmayo9@hotmail.com', '106190571', 'alfajores,fiesta,dulces,argentina,promoción', '', 0, '2018-04-25 22:27:13', '2018-04-25 22:30:42'),
(57, 'Instalación de alarmas y GPS a domicilio- Todas las marcas', 5, 47, 15, 19, '<p><b>Instalación de alarmas y GPS a domicilio- Todas las marcas</b></p><p>Te preocupa la seguridad de tu vehículo? Duerme tranquilo obteniendo este Citycupón.</p><p><b>\r\n</b></p><p>Instalación de alarmas y GPS a domicilio, el cupón no incluye alarmas ni GPS, estos deberán ser proporcionados por el comprador\r\n</p><p>\r\n</p><p><br></p>', '<p>\r\n</p><p>•	City cupones disponibles: 15</p><p>\r\n</p><p>•	Debes presentar el cupón impreso para recibir el servicio\r\n</p><p>\r\n</p><p>•	Puedes comprar todos los que desees\r\n</p><p>\r\n</p><p>•	Agenda tu cita con 2 días Hábiles de anticipación\r\n</p><p>\r\n</p><p>•	Después de agendado por el cliente la cita, en caso de no confirmar cancelación 12 horas antes, este se dará por prestado.\r\n</p><p>\r\n</p><p>•	No acumulable con otras ofertas.\r\n</p><p>\r\n</p><p>•	Cita sujeta a disponibilidad \r\n</p><p>\r\n</p><p>•	Horario de despacho a partir de las 8 am a 6 pm \r\n</p><p>\r\n</p><p>•	Para reservar envía tu cupón en PDF y agenda tu servicio al correo willyledezma7013@gmail.com\r\n</p><p>\r\n</p><p>•	Tel. 3182443167\r\n</p><p>\r\n</p><p>Ver condiciones que aplican a todos nuestras city ofertas.\r\n</p><p>\r\n</p><p>El aliado es el único responsable ante los compradores por la calidad de los productos y servicios publicitados, sin embargo, estaremos atentos a que sea una experiencia única para ti.\r\n</p><p>\r\n</p><p>Medios de pagos y aclaraciones \r\n</p><p>\r\n</p><p>consignación bancaria, pago en efectivo oficina Cuponcity.\r\n</p><p>\r\n</p><p>\r\n</p><p>\r\n</p><p>Para pago en efectivo únicamente lo puedes hacer en nuestra oficina en Popayán: carrera 6 A 23N 29 Ciudad Jardín. Este pago solo lo puedes realizar si la oferta aún está activa en nuestra página. \r\n</p><p>\r\n</p><p>\r\n</p><p>\r\n</p><p><br></p><p>\r\n</p><p><br></p>', 'willyledezma7013@gmail.com', '76316877', 'auto,carro,alarma,gps,seguridad', '', 1, '2018-04-25 22:56:07', '2018-04-25 23:05:38'),
(58, 'Peinado para dama + extensión de pestañas + domicilio', 3, 19, 12, 18, '<p>Peinado para dama + extensión de pestañas + domicilio\r\n</p><p>\r\n</p><p>\r\n</p><p>DESCRIPCION\r\n</p><p>Peinado para dama + extensión de pestañas + domicilio\r\n</p><p>Incluye materiales y accesorios básicos; Si el cliente requiere un accesorio especial debe proporcionarlo.\r\n</p><p>Pestañas punto a punto duración 15 días o dependiendo el cuidado\r\n</p><p>Extensión de Pestañas para niñas mayores de 14 años\r\n</p><p>\r\n</p><p>\r\n</p><p>\r\n</p><p><br></p>', '<p>\r\n</p><p>•	City cupones disponibles: 15 \r\n</p><p>\r\n</p><p>•	Debes presentar el cupón impreso para recibir el servicio\r\n</p><p>\r\n</p><p>•	Puedes comprar todos los que desees\r\n</p><p>\r\n</p><p>•	Agendar tu cita con 2 días hábiles de anticipación\r\n</p><p>\r\n</p><p>•	Después de agendada la cita por el cliente, en caso de no confirmar cancelación 12 horas antes, este se dará por prestado.\r\n</p><p>\r\n</p><p>•	No acumulable con otras ofertas.\r\n</p><p>\r\n</p><p>•	Cita sujeta a disponibilidad \r\n</p><p>\r\n</p><p>Para reservar comunícate a los siguientes teléfonos \r\n</p><p>\r\n</p><p>Teléfono Fijo: 8357667 \r\n</p><p>\r\n</p><p>Celular: 3155507654\r\n</p><p>\r\n</p><p>Ver condiciones que aplican a todos nuestras city ofertas.\r\n</p><p>\r\n</p><p>El aliado es el único responsable ante los compradores por la calidad de los productos y servicios publicitados, sin embargo, estaremos atentos a que sea una experiencia única para ti.\r\n</p><p>\r\n</p><p>\r\n</p><p>\r\n</p><p>Medios de pagos y aclaraciones \r\n</p><p>\r\n</p><p>Consignación bancaria, pago en efectivo en la oficina de Cuponcity.\r\n</p><p>\r\n</p><p>\r\n</p><p>\r\n</p><p>Para pago en efectivo únicamente lo puedes hacer en nuestra oficina en Popayán: Carrera 6 A 23N 29 Ciudad Jardín. Este pago solo lo puedes realizar si la oferta aún está activa en nuestra página. \r\n</p><p>\r\n</p><p><br></p>', 'marce_ahg@hotmail.com', '1061745757', 'extension de pestañas,peinado,trenzas,belleza,asesoria de imagen', '', 1, '2018-04-26 11:19:07', '2018-04-26 11:19:07'),
(59, 'Porque tu salud es lo primero, consulta médica + terapia neural + escáner cuántico', 3, 25, 14, 25, '<p>Medicina alternativa\r\n</p><p>Porque tu salud es lo primero, consulta médica + terapia neural + escáner cuántico\r\n</p><p><br></p><p><br></p><p>\r\n</p><p><br></p><p><br></p>', '<p>•	City cupones disponibles: 15\r\n</p><p>\r\n</p><p>•	Debes presentar el cupón impreso para recibir el servicio\r\n</p><p>\r\n</p><p>•	Puedes comprar todos los que desees\r\n</p><p>\r\n</p><p>•	Agendar tu cita con 24 horas hábiles de anticipación\r\n</p><p>\r\n</p><p>•	Después de agendada la cita por el cliente, en caso de no confirmar cancelación 12 horas antes, este se dará por prestado.\r\n</p><p>\r\n</p><p>•	No acumulable con otras ofertas.\r\n</p><p>\r\n</p><p>•	Cita sujeta a disponibilidad \r\n</p><p>\r\n</p><p>•	Horario de atención \r\n</p><p>\r\n</p><p>•	Lunes a viernes 8 am a 12 \r\n</p><p>\r\n</p><p>                                 2 a 6 pm \r\n</p><p>\r\n</p><p>•	Para reservar envía tu cupón en PDF y agenda tu servicio al correo <u>medicinalternativacauca@gmail.com\r\n</u></p><p>\r\n</p><p>•	Tel. 8205412 \r\n</p><p>\r\n</p><p>•	Dr. Noscar Mauricio llantén llantén\r\n</p><p>\r\n</p><p>Ver condiciones que aplican a todos nuestras city ofertas.\r\n</p><p>\r\n</p><p>El aliado es el único responsable ante los compradores por la calidad de los productos y servicios publicitados sin embargo estaremos atentos a que sea una experiencia única para ti.\r\n</p><p>Medios de pagos y aclaraciones \r\n</p><p>\r\n</p><p>consignación bancaria, pago en efectivo oficina Cuponcity.\r\n</p><p>\r\n</p><p>Para pago en efectivo únicamente lo puedes hacer en nuestra oficina en Popayán: Carrera 6 A 23N 29 Ciudad Jardín. Este pago sólo lo puedes realizar si la oferta aún está activa en nuestra página. \r\n</p>', 'medicinalternativacauca@gmail.com', '76309994', 'medicina natural,consulta,quantico,escaner,terapia neural', '', 1, '2018-04-26 11:25:38', '2018-04-26 11:25:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_images`
--

CREATE TABLE `producto_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `productoi_id` int(10) UNSIGNED NOT NULL,
  `productoi_url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `producto_images`
--

TRUNCATE TABLE `producto_images`;
--
-- Volcado de datos para la tabla `producto_images`
--

INSERT INTO `producto_images` (`id`, `productoi_id`, `productoi_url`, `created_at`, `updated_at`) VALUES
(1, 1, '1517879639-38710.jpg', '2018-02-05 20:13:59', '2018-02-05 20:13:59'),
(2, 2, '1517970867-91683.jpg', '2018-02-06 21:34:27', '2018-02-06 21:34:27'),
(4, 4, '1518654196-587.jpg', '2018-02-14 19:23:16', '2018-02-14 19:23:16'),
(5, 5, '1518738764-5941.jpg', '2018-02-15 18:52:44', '2018-02-15 18:52:44'),
(7, 7, '1519609066-6450.jpg', '2018-02-25 20:37:46', '2018-02-25 20:37:46'),
(8, 8, '1519610030-46140.jpg', '2018-02-25 20:53:50', '2018-02-25 20:53:50'),
(9, 9, '1519611733-86746.jpg', '2018-02-25 21:22:13', '2018-02-25 21:22:13'),
(10, 10, '1519612933-78009.jpg', '2018-02-25 21:42:13', '2018-02-25 21:42:13'),
(11, 11, '1519613718-17686.jpg', '2018-02-25 21:55:18', '2018-02-25 21:55:18'),
(12, 12, '1519700307-4958.jpg', '2018-02-26 21:58:27', '2018-02-26 21:58:27'),
(13, 13, '1519701031-94980.jpg', '2018-02-26 22:10:31', '2018-02-26 22:10:31'),
(14, 14, '1519701680-13413.jpg', '2018-02-26 22:21:20', '2018-02-26 22:21:20'),
(15, 15, '1519703406-71250.jpg', '2018-02-26 22:50:06', '2018-02-26 22:50:06'),
(16, 16, '1519704189-15447.jpg', '2018-02-26 23:03:09', '2018-02-26 23:03:09'),
(17, 17, '1519705244-62275.jpg', '2018-02-26 23:20:44', '2018-02-26 23:20:44'),
(18, 18, '1519705779-75781.jpg', '2018-02-26 23:29:39', '2018-02-26 23:29:39'),
(19, 19, '1519706633-18285.jpg', '2018-02-26 23:43:53', '2018-02-26 23:43:53'),
(20, 20, '1519707401-22354.jpg', '2018-02-26 23:56:41', '2018-02-26 23:56:41'),
(21, 21, '1519841107-37456.jpg', '2018-02-28 13:05:07', '2018-02-28 13:05:07'),
(22, 22, '1519925713-88427.jpg', '2018-03-01 12:35:13', '2018-03-01 12:35:13'),
(28, 25, '1521131173-20398.jpg', '2018-03-15 11:26:13', '2018-03-15 11:26:13'),
(29, 25, '1521131173-8035.jpg', '2018-03-15 11:26:13', '2018-03-15 11:26:13'),
(30, 25, '1521131173-48643.jpg', '2018-03-15 11:26:13', '2018-03-15 11:26:13'),
(31, 25, '1521131173-35809.jpg', '2018-03-15 11:26:13', '2018-03-15 11:26:13'),
(39, 28, '1522288397-89149.JPG', '2018-03-28 20:53:17', '2018-03-28 20:53:17'),
(40, 28, '1522288397-69558.jpg', '2018-03-28 20:53:17', '2018-03-28 20:53:17'),
(41, 28, '1522288397-84304.jpg', '2018-03-28 20:53:17', '2018-03-28 20:53:17'),
(42, 28, '1522288397-12703.jpg', '2018-03-28 20:53:17', '2018-03-28 20:53:17'),
(43, 28, '1522288397-49485.jpg', '2018-03-28 20:53:17', '2018-03-28 20:53:17'),
(44, 29, '1522813178-48200.png', '2018-04-03 22:39:38', '2018-04-03 22:39:38'),
(46, 31, '1523470102-39672.jpg', '2018-04-11 13:08:22', '2018-04-11 13:08:22'),
(47, 31, '1523470102-68764.jpg', '2018-04-11 13:08:22', '2018-04-11 13:08:22'),
(48, 31, '1523470102-99063.jpg', '2018-04-11 13:08:22', '2018-04-11 13:08:22'),
(49, 31, '1523470102-2495.jpg', '2018-04-11 13:08:22', '2018-04-11 13:08:22'),
(50, 31, '1523470102-35426.jpg', '2018-04-11 13:08:22', '2018-04-11 13:08:22'),
(51, 32, '1523987750-7655.jpg', '2018-04-17 12:55:50', '2018-04-17 12:55:50'),
(52, 32, '1523987750-76367.jpg', '2018-04-17 12:55:50', '2018-04-17 12:55:50'),
(53, 32, '1523987750-44566.jpg', '2018-04-17 12:55:50', '2018-04-17 12:55:50'),
(54, 32, '1523987750-42671.png', '2018-04-17 12:55:50', '2018-04-17 12:55:50'),
(55, 32, '1523987750-61797.jpg', '2018-04-17 12:55:50', '2018-04-17 12:55:50'),
(80, 42, '1524514460-53456.jpg', '2018-04-23 15:14:20', '2018-04-23 15:14:20'),
(81, 42, '1524514460-28399.jpg', '2018-04-23 15:14:20', '2018-04-23 15:14:20'),
(84, 45, '1524524171-57555.jpeg', '2018-04-23 17:56:11', '2018-04-23 17:56:11'),
(93, 50, '1524629510-30087.jpeg', '2018-04-24 23:11:50', '2018-04-24 23:11:50'),
(96, 53, '1524669462-8837.jpeg', '2018-04-25 10:17:42', '2018-04-25 10:17:42'),
(97, 53, '1524669462-98572.jpeg', '2018-04-25 10:17:42', '2018-04-25 10:17:42'),
(98, 53, '1524669462-84945.jpeg', '2018-04-25 10:17:42', '2018-04-25 10:17:42'),
(99, 54, '1524670252-13865.jpg', '2018-04-25 10:30:52', '2018-04-25 10:30:52'),
(100, 54, '1524670252-26680.jpg', '2018-04-25 10:30:52', '2018-04-25 10:30:52'),
(101, 54, '1524670252-92664.jpg', '2018-04-25 10:30:52', '2018-04-25 10:30:52'),
(102, 54, '1524670252-31513.jpg', '2018-04-25 10:30:52', '2018-04-25 10:30:52'),
(103, 54, '1524670252-24821.jpeg', '2018-04-25 10:30:52', '2018-04-25 10:30:52'),
(104, 55, '1524673521-40188.jpg', '2018-04-25 11:25:21', '2018-04-25 11:25:21'),
(105, 55, '1524673521-21622.jpg', '2018-04-25 11:25:21', '2018-04-25 11:25:21'),
(106, 55, '1524673521-30138.jpeg', '2018-04-25 11:25:21', '2018-04-25 11:25:21'),
(107, 56, '1524713233-60914.jpg', '2018-04-25 22:27:13', '2018-04-25 22:27:13'),
(108, 56, '1524713233-57570.jpg', '2018-04-25 22:27:13', '2018-04-25 22:27:13'),
(109, 56, '1524713233-17427.png', '2018-04-25 22:27:13', '2018-04-25 22:27:13'),
(110, 57, '1524714967-21485.jpg', '2018-04-25 22:56:07', '2018-04-25 22:56:07'),
(111, 57, '1524714967-28753.jpg', '2018-04-25 22:56:07', '2018-04-25 22:56:07'),
(112, 57, '1524714967-30113.jpg', '2018-04-25 22:56:07', '2018-04-25 22:56:07'),
(113, 57, '1524714967-81758.jpg', '2018-04-25 22:56:07', '2018-04-25 22:56:07'),
(114, 58, '1524759547-59929.jpeg', '2018-04-26 11:19:07', '2018-04-26 11:19:07'),
(115, 59, '1524759938-78674.jpg', '2018-04-26 11:25:38', '2018-04-26 11:25:38'),
(116, 59, '1524759938-66225.jpg', '2018-04-26 11:25:38', '2018-04-26 11:25:38');

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
  `productop_cantidad` int(11) NOT NULL DEFAULT '0',
  `productop_estatus` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `producto_precios`
--

TRUNCATE TABLE `producto_precios`;
--
-- Volcado de datos para la tabla `producto_precios`
--

INSERT INTO `producto_precios` (`id`, `productop_id`, `productop_titulo`, `productop_total`, `productop_descuento`, `productop_total_descuento`, `productop_fecha_inicio`, `productop_fecha_fin`, `productop_slider`, `productop_oferta`, `productop_cantidad`, `productop_estatus`, `created_at`, `updated_at`) VALUES
(1, 1, 'Asesoría de imagen', 130000.00, 40.00, 78000.00, NULL, NULL, 0, 0, 8, 1, '2018-02-05 20:13:59', '2018-04-25 21:51:56'),
(2, 1, '', 130000.00, 40.00, 78000.00, '2018-01-05', '2018-02-09', 1, 1, 12, 2, '2018-02-05 20:17:45', '2018-02-05 21:19:47'),
(3, 2, 'Creativo cortador de cebolla', 22000.00, 64.00, 8000.00, NULL, NULL, 1, 0, 20, 1, '2018-02-06 21:34:27', '2018-04-20 15:44:23'),
(5, 4, 'Cepillo eléctrico alisador cerámica con pantalla LCD profesional + Pinza Rizadora', 135000.00, 34.00, 90000.00, NULL, NULL, 1, 0, 4, 1, '2018-02-14 19:23:16', '2018-04-20 15:46:03'),
(6, 5, 'Dos por uno Paga solo $34000 por 70 y lleva 140 Mini Cupcakes', 60000.00, 48.00, 32000.00, NULL, NULL, 0, 0, 35, 1, '2018-02-15 18:52:44', '2018-04-25 11:25:58'),
(9, 7, 'Fabulosa Dobladora De Ropa Niños Armario Perfecto En 2 Segundos', 50000.00, 44.00, 28000.00, NULL, NULL, 0, 0, 20, 1, '2018-02-25 20:37:46', '2018-04-20 15:45:05'),
(10, 8, 'Espectacular kit de Plantilla para Cejas', 12500.00, 36.00, 8000.00, NULL, NULL, 1, 0, 10, 1, '2018-02-25 20:53:50', '2018-04-25 20:09:39'),
(11, 9, 'Sensual Babydoll + Hilo en Blonda', 36000.00, 52.00, 17000.00, NULL, NULL, 0, 0, 10, 1, '2018-02-25 21:22:13', '2018-04-20 15:45:53'),
(12, 10, 'Velos De Colageno Labios Sensuales por 6 unidades', 30000.00, 77.00, 7000.00, NULL, NULL, 0, 0, 10, 1, '2018-02-25 21:42:13', '2018-04-20 15:46:00'),
(13, 11, 'Parches De Colageno Activo Ojos, Anti arrugas ,bolsas en los ojos  6 unidades', 15000.00, 48.00, 8000.00, NULL, NULL, 0, 0, 5, 1, '2018-02-25 21:55:18', '2018-04-27 14:48:02'),
(14, 5, '', 67000.00, 62.00, 25000.00, '2018-03-01', '2018-03-31', 0, 1, 7, 2, '2018-02-26 17:28:33', '2018-04-25 17:14:45'),
(15, 12, 'Máscarilla Para Cuello Con Cristal De Colágeno Activo', 12500.00, 44.00, 7000.00, NULL, NULL, 0, 0, 6, 1, '2018-02-26 21:58:27', '2018-04-20 15:45:12'),
(16, 13, 'Máscarilla Para Senos Con Cristal Velos De Colágeno Activo', 12500.00, 44.00, 7000.00, NULL, NULL, 1, 0, 5, 1, '2018-02-26 22:10:31', '2018-04-25 20:10:20'),
(17, 14, 'Pegamento De Látex Anti-desbordamiento Peel Off ¡excelente!', 9000.00, 50.00, 4500.00, NULL, NULL, 0, 0, 9, 1, '2018-02-26 22:21:20', '2018-04-20 15:42:49'),
(18, 15, '4 Deliciosos wraps de ,pollo  cerdo , mixto,  hawaiano o  mexicano', 70000.00, 54.00, 32000.00, NULL, NULL, 0, 0, 12, 1, '2018-02-26 22:50:06', '2018-04-25 16:38:35'),
(19, 15, '4 Deliciosos wraps de queso , jamon y queso o atun', 60000.00, 60.00, 24000.00, NULL, NULL, 0, 0, 12, 1, '2018-02-26 22:50:06', '2018-04-25 16:38:35'),
(20, 16, 'Labial Brillo Wow Romantic Bear Larga Duración Sexy red', 12500.00, 68.00, 4000.00, NULL, NULL, 0, 0, 4, 1, '2018-02-26 23:03:09', '2018-04-17 15:49:39'),
(21, 16, 'Labial Brillo Wow Romantic Bear Larga Duración Watermelon', 12500.00, 68.00, 4000.00, NULL, NULL, 0, 0, 4, 1, '2018-02-26 23:03:09', '2018-04-20 15:45:09'),
(22, 16, 'Labial Brillo Wow Romantic Bear Larga Duración Lovely Peach', 12500.00, 68.00, 4000.00, NULL, NULL, 0, 0, 4, 1, '2018-02-26 23:03:09', '2018-04-17 15:49:39'),
(23, 16, 'Labial Brillo Wow Romantic Bear Larga Duracion Cherry red', 12500.00, 68.00, 4000.00, NULL, NULL, 0, 0, 4, 1, '2018-02-26 23:03:09', '2018-04-17 15:49:39'),
(24, 16, 'Labial Brillo Wow Romantic Bear Larga Rose pink', 12500.00, 68.00, 4000.00, NULL, NULL, 0, 0, 4, 1, '2018-02-26 23:03:09', '2018-04-20 15:45:16'),
(25, 17, 'Cinturilla termo shaper unisex  talla s', 45000.00, 67.00, 15000.00, NULL, NULL, 0, 0, 2, 1, '2018-02-26 23:20:44', '2018-04-25 20:09:15'),
(26, 17, 'Cinturilla termo shaper unisex  talla m', 45000.00, 67.00, 15000.00, NULL, NULL, 0, 0, 3, 1, '2018-02-26 23:20:44', '2018-04-25 20:09:15'),
(27, 17, 'Cinturilla termo shaper unisex  talla l', 45000.00, 67.00, 15000.00, NULL, NULL, 1, 0, 3, 1, '2018-02-26 23:20:44', '2018-04-25 20:09:15'),
(28, 17, 'Cinturilla termo shaper unisex  talla xl', 45000.00, 67.00, 15000.00, NULL, NULL, 0, 0, 3, 1, '2018-02-26 23:20:44', '2018-04-25 20:09:15'),
(29, 18, 'Trenzador Estilo Francés Magic Hair Styling Peinados Hermosos', 12000.00, 59.00, 5000.00, NULL, NULL, 0, 0, 12, 1, '2018-02-26 23:29:39', '2018-04-20 15:45:57'),
(30, 19, 'Pinza Rizador Ondulador Profesional Nova color lila', 50000.00, 64.00, 18000.00, NULL, NULL, 1, 0, 1, 1, '2018-02-26 23:43:53', '2018-04-27 14:22:33'),
(31, 19, 'Pinza Rizador Ondulador Profesional Nova color azul', 50000.00, 64.00, 18000.00, NULL, NULL, 0, 0, 4, 1, '2018-02-26 23:43:53', '2018-04-20 15:45:25'),
(32, 19, 'Pinza Rizador Ondulador Profesional Nova color verde', 50000.00, 64.00, 18000.00, NULL, NULL, 0, 0, 5, 1, '2018-02-26 23:43:53', '2018-04-20 15:42:52'),
(33, 20, 'Set De 20 Pinceles Suaves Para Maquillaje Profesional blanco', 60000.00, 72.00, 17000.00, NULL, NULL, 0, 0, 2, 1, '2018-02-26 23:56:41', '2018-04-26 19:28:48'),
(34, 20, 'Set De 20 Pinceles Suaves Para Maquillaje Profesional lila', 60000.00, 72.00, 17000.00, NULL, NULL, 0, 0, 3, 1, '2018-02-26 23:56:41', '2018-04-25 20:11:58'),
(35, 20, 'Set De 20 Pinceles Suaves Para Maquillaje Profesional dorado', 60000.00, 72.00, 17000.00, NULL, NULL, 1, 0, 3, 1, '2018-02-26 23:56:41', '2018-04-25 20:11:59'),
(36, 20, 'Set De 20 Pinceles Suaves Para Maquillaje Profesional  negro', 60000.00, 72.00, 17000.00, NULL, NULL, 0, 0, 3, 1, '2018-02-26 23:56:41', '2018-04-25 20:11:59'),
(37, 21, 'Pendientes Biomagneticos  Adelgazante, Baja de Peso + Mas Regalo', 36000.00, 50.00, 18000.00, NULL, NULL, 0, 0, 6, 1, '2018-02-28 13:05:07', '2018-02-28 13:05:07'),
(38, 22, 'Correa de barbilla anti-ronquido', 26000.00, 58.00, 11000.00, NULL, NULL, 0, 0, 17, 1, '2018-03-01 12:35:13', '2018-04-25 20:13:23'),
(40, 4, '', 135000.00, 26.00, 99900.00, '2018-03-03', '2018-03-03', 1, 1, 3, 2, '2018-03-03 21:43:33', '2018-03-03 21:43:33'),
(42, 1, '', 100000.00, 50.00, 50000.00, '2018-03-05', '2018-03-05', 0, 1, 2, 2, '2018-03-05 15:48:46', '2018-04-25 17:14:00'),
(43, 2, '', 22000.00, 55.00, 9900.00, '2018-03-15', '2018-03-22', 0, 1, 6, 2, '2018-03-15 10:42:13', '2018-04-25 17:14:11'),
(44, 2, '', 22000.00, 55.00, 9900.00, '2018-03-15', '2018-04-22', 0, 1, 6, 2, '2018-03-15 10:45:56', '2018-04-25 17:14:31'),
(45, 4, '', 135000.00, 26.00, 99900.00, '2018-03-15', '2018-03-22', 0, 1, 2, 2, '2018-03-15 10:48:41', '2018-04-25 17:15:19'),
(47, 7, '', 50000.00, 48.00, 26000.00, '2018-03-01', '2018-03-31', 0, 1, 4, 2, '2018-03-15 10:56:25', '2018-04-25 17:15:04'),
(48, 25, 'Cortador Y Rebanador De Piña Hawaiana', 25000.00, 64.00, 9000.00, NULL, NULL, 1, 0, 10, 1, '2018-03-15 11:26:13', '2018-04-20 15:41:41'),
(51, 28, 'Limpiador facial de poros quita espinillas puntos negros', 38000.00, 55.00, 17002.00, NULL, NULL, 1, 0, 10, 1, '2018-03-28 20:53:17', '2018-04-20 15:41:52'),
(52, 29, '1.	ASESORÍA INTEGRAL EN CONSTITUCIÓN DE EMPRESA PERSONA JURÍDICA + ESTATUTOS SOCIALES', 999999.99, 42.00, 700000.00, NULL, NULL, 1, 0, 6, 1, '2018-04-03 22:39:38', '2018-04-20 15:43:59'),
(53, 29, '2.	REGISTRO O ACTUALIZACIÓN DEL RUT + PLANEACIÓN TRIBUTARIA DECLARACIÓN DE RENTA PERSONA NATURAL 2018 + ASESORÍA BENEFICIOS TRIBUTARIOS POR CÉDULAS PERSONAS NATURALES', 850000.00, 35.00, 550000.00, NULL, NULL, 1, 0, 6, 1, '2018-04-03 22:39:38', '2018-04-17 15:43:54'),
(56, 31, 'Esponja magica para depilacion', 16000.00, 44.00, 9000.00, NULL, NULL, 1, 0, 8, 1, '2018-04-11 13:08:22', '2018-04-20 15:41:44'),
(57, 32, 'HERMOSOS CROP TOP DE MODA NEGRO', 36000.00, 50.00, 18000.00, NULL, NULL, 1, 0, 6, 1, '2018-04-17 12:55:50', '2018-04-20 18:44:01'),
(58, 32, 'HERMOSOS CROP TOP DE MODA BLANCO', 36000.00, 50.00, 18000.00, NULL, NULL, 1, 0, 5, 1, '2018-04-17 12:55:50', '2018-04-27 14:51:55'),
(77, 42, 'Mantenimiento preventivo y correctivo de Lavadoras a domicilio', 80000.00, 13.00, 69600.00, NULL, NULL, 1, 0, 15, 1, '2018-04-23 15:14:20', '2018-04-26 08:49:13'),
(80, 45, 'Peinado para dos niñas a elección + domicilio', 40000.00, 17.00, 33200.00, NULL, NULL, 0, 0, 5, 1, '2018-04-23 17:56:11', '2018-04-26 09:32:23'),
(84, 50, 'Peinado a elección para dos niñas más domicilio', 40000.00, 17.00, 33200.00, NULL, NULL, 1, 0, 5, 1, '2018-04-24 23:11:50', '2018-04-26 09:31:59'),
(87, 53, 'Paquete preventivo   Profilaxis + Detartraje + Fluorización', 185000.00, 35.00, 120250.00, NULL, NULL, 1, 0, 15, 1, '2018-04-25 10:17:42', '2018-04-25 20:10:37'),
(88, 54, 'Blanqueamiento Cosmético Láser', 350000.00, 28.00, 252000.00, NULL, NULL, 1, 0, 10, 1, '2018-04-25 10:30:52', '2018-04-25 22:42:19'),
(89, 55, 'Carilla estetica', 230000.00, 22.00, 179400.00, NULL, NULL, 1, 0, 10, 1, '2018-04-25 11:25:21', '2018-04-25 20:12:38'),
(90, 56, 'Exquisitos Alfajores de Dulce Julieta', 90000.00, 20.00, 72000.00, NULL, NULL, 0, 0, 15, 1, '2018-04-25 22:27:13', '2018-04-26 15:37:29'),
(91, 57, 'Instalación de alarmas y GPS a domicilio- Todas las marcas', 60000.00, 16.00, 50400.00, NULL, NULL, 0, 0, 15, 1, '2018-04-25 22:56:07', '2018-04-26 08:44:57'),
(92, 58, 'Peinado para dama + extensión de pestañas + domicilio', 40000.00, 17.00, 33200.00, NULL, NULL, 1, 0, 5, 1, '2018-04-26 11:19:07', '2018-04-26 11:19:07'),
(93, 59, 'consulta médica + terapia neural + escáner cuántico', 40000.00, 20.00, 32000.00, NULL, NULL, 0, 0, 15, 1, '2018-04-26 11:25:38', '2018-04-26 11:25:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suscripcion`
--

CREATE TABLE `suscripcion` (
  `id` int(10) UNSIGNED NOT NULL,
  `suscripcion_categorias` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `suscripcion_users_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `suscripcion`
--

TRUNCATE TABLE `suscripcion`;
--
-- Volcado de datos para la tabla `suscripcion`
--

INSERT INTO `suscripcion` (`id`, `suscripcion_categorias`, `suscripcion_users_id`, `created_at`, `updated_at`) VALUES
(1, NULL, 7, '2018-01-25 14:31:13', '2018-01-25 14:31:13'),
(2, NULL, 5, '2018-02-13 20:50:25', '2018-02-13 20:50:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `users_nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_apellido` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `users_direccion` text COLLATE utf8mb4_unicode_ci,
  `users_telefono` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
-- Truncar tablas antes de insertar `users`
--

TRUNCATE TABLE `users`;
--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `users_nombre`, `users_apellido`, `users_direccion`, `users_telefono`, `email`, `password`, `users_tipo_usuario`, `users_estatus`, `users_aliado_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'SuperAdmin', '', '', '', 'superadmin@admin.com', '$2y$10$gpF.yHYNC6aSIOB8MjuWOuAMOedFIkD.1qcslv4SffNGeNWpLxdKe', 1, 1, 0, 'jVqPTlw9UIc0gW1BYsDUF2XCkfPopGYjaAUusYOWax1vFiB3xP9HxV37Y2sK', '2018-01-22 08:31:59', '2018-01-22 08:31:59'),
(2, 'Admin', '', '', '', 'admin@admin.com', '$2y$10$icL.M8jkPIB6fQ7bYbYy9O.fh5xG2642j5bGpkiDsEwVNXv.qwzqa', 2, 1, 0, NULL, '2018-01-22 08:31:59', '2018-01-22 08:31:59'),
(3, 'Basico', '', '', '', 'basico@admin.com', '$2y$10$JeVFcbiO2duvlepSVzHOEeMpbU0gMMC1AjRPoAE7wzgaTEFohBl1K', 3, 0, 0, NULL, '2018-01-22 08:32:00', '2018-01-22 08:32:00'),
(4, 'Andrey', 'Morales', 'Calle 56', '3057150950', 'moralesandrey286@gmail.com', 'ed61a99da84e1554ca3c9ee7e643edab', 2, 0, 0, 'HtIFkHOLttgoAWz2pssZE0ftmbeMmBkh3koF2y89ZyXmGBhaQtX40ypLtzwU', '2018-01-23 17:56:22', '2018-01-25 11:33:56'),
(5, 'gloria', 'escobar', 'cccc', '3182800655', 'gescobar12@gmail.com', '$2y$10$x7qCMj8t3zPOQL.OxnTZFeTrxDvmxBZYC1Z7vwZZQ.Ti1Bxbnlc.a', 2, 1, 0, '9PFBiUO3kzKL93KEGiKzj9FihQcJr2aWnXUBEBJZLXIdlfS4ufEzmw2x3CiJ', '2018-01-23 20:32:55', '2018-02-23 17:12:25'),
(6, 'Yolanda', 'Escobar', 'Cra 6 23N 29', '3116082212', 'yoes1978@hotmail.com', '$2y$10$gbQqSBO8xM.Zkbxl./DJs.l7YAcKL2p7OHyDAVBN1yOWT.sEEseWm', 2, 1, 0, 'oQxcVQXJYdRDX82gvEuLfLSriZUE92RP23gqFMWbVN78Jiuf2jPs8Vadltfv', '2018-01-23 21:53:21', '2018-01-23 21:53:21'),
(7, 'gloria', 'escobar', 'CCCC', '3182800655', 'gescobar12@hotmail.com', '$2y$10$icfSDKisKKmR863wv.JtSemjz3siYgSRs1BmJYxI7Y6hTldg8OsSO', 2, 1, 0, 'Ez1T7gvKREzzFWK4I5KrDMGV1lvdesP8QfDhx4fZAEWXQKSZvC4Q1kfyRy9a', '2018-01-24 11:44:16', '2018-01-24 11:44:16'),
(9, 'Andrey', 'Morales', 'Calle 56 a', '3057150950', 'andrey-159@hotmail.com', '$2y$10$nBGXpbcAP7RZO0T1vSmAR.Kx6wRrIfa/tLcRNLFBdZt/0nkyxIoKC', 2, 0, 0, 'qgZGYb0g00jAa8ny4rp64iAU16YncEhN4faDNOvaDiMVGSuDSsbU2OuKeeNK', '2018-01-25 19:26:47', '2018-01-25 19:26:47'),
(13, 'Andrey', 'Morales', 'Calle 56 a 42 c2 39', '3057150950', 'aimanoa222@gmail.com', '$2y$10$NWjCRSl6Az8OoZtCUa3H5.pqIGcYBfqp..m/2PTQNq/Td/LCBfyda', 2, 0, 0, 'FFopWFVwYJHRQCnH6MAJK6Cav1XdyvJxnufne83Kmgam7uQaZIsZJdaSGJ04', '2018-03-05 13:16:38', '2018-03-05 13:16:38'),
(14, 'Samy', 'Calvache', 'Cara 4#28an50', '3205467303', 'sandramcalvache@hotmail.com', '$2y$10$n7U5eT0C9wvGD6nv/LXVSuEpogoFzlQ9wZr3ktlTaahc857k2HXsK', 2, 1, 0, NULL, '2018-04-03 22:54:26', '2018-04-03 22:54:26'),
(15, 'JULIO CESAR', 'MAYA BASTIDAS', 'CARRERA 6 A  # 23 N 29 CIUDAD JARDIN', '3122281592', 'jucemaba@gmail.com', '$2y$10$Q.SxPEJS1VKdegY0Q2lNTuR9dEIexColzkurnf.dbTU9lTJGJA/Uy', 2, 1, 0, '8WPHHg2aCvNi83vaDrZ5vPwVbsd5IlTLGfoCNkNfzBrxfcOyqnYs5hhIDX3J', '2018-04-09 10:57:19', '2018-04-09 10:58:02'),
(16, 'Liliana', 'diaz', 'cra 29 31\'05', '3111349888', 'generosa21@gmail.com', '$2y$10$Vs/OBLuwG8WnfTfJj13Zc.vucIC.UMx8neFLlZpEQrrzx4/T2Y7r2', 2, 0, 0, 'RpYiNvtz2kTmlcZXPpeowke6LEC8Ytb0SrCqXPmu5FMnDV0e7zSrGxIHLdkv', '2018-04-10 17:37:29', '2018-04-10 18:38:06'),
(17, 'Nelson', 'Gonzalez', 'Cara 71 c 64 c 28', '3175090715', 'Nelgonzaleon@gmail.com', '$2y$10$vZ/MIfSGRN.dF/K8t53jSOO/FyPNsM9nn3VRT4MFVNowTp/ZgANcq', 2, 1, 0, 'KsOwwVgihw77RDuOiZnsbzY2veiwOhmpD26Vt768SEhylWwvbJm8HOS365Q1', '2018-04-10 17:46:11', '2018-04-10 17:46:11'),
(18, 'María del Carmen', 'Hoyos gomez', 'Calle 7 #14-46', '3174304445', 'mariac1985@hotmail.com', '$2y$10$V5zT.iZSJzcRdBaUeAPPB.GIxpo0RylQ5gIL4QVtgzcpjZNbDjrQ.', 2, 1, 0, 'kUYVMhB51slGoAIOvUOdzc1T45K1YeegByYVqDuC6O7W7zdIXP8tQ4HWuEm8', '2018-04-10 18:03:20', '2018-04-10 18:03:20'),
(19, 'Rocío', 'Cárdenas', 'Cl 26 en 4-56', '3132756993', 'rocaor84@gmail.com', '$2y$10$G3uMQoVC59.ehA6wGVilbeKSMoOKBGFz8WoNbJA5ADTKYsJY/OAS2', 2, 1, 0, NULL, '2018-04-17 10:46:55', '2018-04-17 10:46:55'),
(20, 'Josué', 'Moreno', 'Colombia', '584262774626', 'josuelmm92@gmail.com', '$2y$10$bnE5QRmqmNqnB2qXmq3rUuZYzhPoebUiCN/HRHKBwDgsHN35C7CRa', 2, 1, 0, NULL, '2018-04-19 07:19:13', '2018-04-19 07:19:13'),
(21, 'Dean', 'Protts', 'Bogota', NULL, 'deanprott@hotmail.com', '$2y$10$e874spclxXYesTjA..8GxeJotNzpGerKoRg/Q/xnaCkDjRo94YUiO', 2, 1, 0, NULL, '2018-04-19 13:50:52', '2018-04-19 13:50:52'),
(22, 'Dixon', 'Torres', 'Carrera 49', '04244614039', 'dixon.jtd@gmail.com', '$2y$10$HR7uqYo0pvkHMWB88SyuCOBMu6VOL.QzJ.GCwLewLmW5X3hPJJS32', 2, 1, 0, 'M5JABVyjYzVmGBLlAaaWUsFjfKf46OVQ4KgA25ZSk9YCmOwRFGkRn9FgPwh5', '2018-04-19 14:06:34', '2018-04-19 14:06:34'),
(23, 'Karen Daniela', 'Agredo', 'Calle 14 # 24-85 Chapinero', '3186061932', 'danieagredo557@gmail.com', '$2y$10$WnYrO7DP2mCYLSnhv8qLjuT2u0PbOjyGGiBlpOYABP5frylNviX1C', 2, 1, 0, '6hQDRFGc55Mvo8TlDR2weoanXF6S2KD2BfgWAXswZvIQUv2mGiBDNTbPTE0T', '2018-04-26 19:09:01', '2018-04-26 19:09:01'),
(24, 'Maryubina', 'Parra Naranjo', 'Clle 43 #39B-03', '3163850919', 'maryubina@hotmail.com', '$2y$10$Up3I1GcOTdeEATecaZVQpOPc0sPIXCLwLUplH1l/dm1oTEVI3Ftt6', 2, 1, 0, NULL, '2018-04-27 14:20:27', '2018-04-27 14:20:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visitas`
--

CREATE TABLE `visitas` (
  `id` int(10) UNSIGNED NOT NULL,
  `visitas_ip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visitas_fecha` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `visitas`
--

TRUNCATE TABLE `visitas`;
--
-- Volcado de datos para la tabla `visitas`
--

INSERT INTO `visitas` (`id`, `visitas_ip`, `visitas_fecha`, `created_at`, `updated_at`) VALUES
(1, '201.208.99.155', '2018-02-02', '2018-02-02 06:18:51', '2018-02-02 06:18:51'),
(2, '66.249.69.221', '2018-02-02', '2018-02-02 07:00:11', '2018-02-02 07:00:11'),
(3, '66.249.69.217', '2018-02-02', '2018-02-02 07:06:08', '2018-02-02 07:06:08'),
(4, '66.249.75.128', '2018-02-02', '2018-02-02 07:40:23', '2018-02-02 07:40:23'),
(5, '186.146.185.126', '2018-02-02', '2018-02-02 09:01:31', '2018-02-02 09:01:31'),
(6, '66.249.69.214', '2018-02-02', '2018-02-02 09:27:04', '2018-02-02 09:27:04'),
(7, '190.147.34.62', '2018-02-02', '2018-02-02 09:57:16', '2018-02-02 09:57:16'),
(8, '190.76.250.206', '2018-02-02', '2018-02-02 10:00:49', '2018-02-02 10:00:49'),
(9, '190.76.250.206, 66.249.88.13', '2018-02-02', '2018-02-02 10:01:23', '2018-02-02 10:01:23'),
(10, '190.76.250.206, 66.249.88.16', '2018-02-02', '2018-02-02 10:02:30', '2018-02-02 10:02:30'),
(11, '190.76.250.146', '2018-02-02', '2018-02-02 10:15:21', '2018-02-02 10:15:21'),
(12, '190.207.216.62', '2018-02-02', '2018-02-02 11:21:44', '2018-02-02 11:21:44'),
(13, '201.242.36.123', '2018-02-02', '2018-02-02 14:06:26', '2018-02-02 14:06:26'),
(14, '104.131.119.72', '2018-02-02', '2018-02-02 14:15:46', '2018-02-02 14:15:46'),
(15, '186.31.144.85, 66.249.83.222', '2018-02-02', '2018-02-02 14:27:15', '2018-02-02 14:27:15'),
(16, '186.31.144.85, 66.249.83.221', '2018-02-02', '2018-02-02 14:27:21', '2018-02-02 14:27:21'),
(17, '190.130.104.244', '2018-02-02', '2018-02-02 14:53:47', '2018-02-02 14:53:47'),
(18, '66.249.75.130', '2018-02-02', '2018-02-02 15:18:32', '2018-02-02 15:18:32'),
(19, '181.62.136.227', '2018-02-02', '2018-02-02 15:18:50', '2018-02-02 15:18:50'),
(20, '66.249.70.22', '2018-02-02', '2018-02-02 20:06:18', '2018-02-02 20:06:18'),
(21, '66.249.70.29', '2018-02-02', '2018-02-02 20:26:14', '2018-02-02 20:26:14'),
(22, '181.51.178.224', '2018-02-02', '2018-02-02 21:57:07', '2018-02-02 21:57:07'),
(23, '54.183.130.127', '2018-02-03', '2018-02-03 06:56:46', '2018-02-03 06:56:46'),
(24, '66.249.70.29', '2018-02-03', '2018-02-03 12:23:41', '2018-02-03 12:23:41'),
(25, '66.249.70.27', '2018-02-03', '2018-02-03 14:33:35', '2018-02-03 14:33:35'),
(26, '181.62.136.227', '2018-02-03', '2018-02-03 17:36:54', '2018-02-03 17:36:54'),
(27, '190.147.178.49', '2018-02-03', '2018-02-03 17:41:51', '2018-02-03 17:41:51'),
(28, '181.62.136.227, 66.249.88.14', '2018-02-03', '2018-02-03 22:15:27', '2018-02-03 22:15:27'),
(29, '66.249.70.8', '2018-02-04', '2018-02-04 01:05:36', '2018-02-04 01:05:36'),
(30, '66.249.70.12', '2018-02-04', '2018-02-04 01:54:33', '2018-02-04 01:54:33'),
(31, '66.249.70.26', '2018-02-04', '2018-02-04 02:29:54', '2018-02-04 02:29:54'),
(32, '66.249.70.20', '2018-02-04', '2018-02-04 02:30:50', '2018-02-04 02:30:50'),
(33, '66.249.70.25', '2018-02-04', '2018-02-04 03:04:23', '2018-02-04 03:04:23'),
(34, '66.249.70.27', '2018-02-04', '2018-02-04 06:33:50', '2018-02-04 06:33:50'),
(35, '66.249.70.29', '2018-02-04', '2018-02-04 07:06:28', '2018-02-04 07:06:28'),
(36, '186.146.185.126, 66.249.88.16', '2018-02-04', '2018-02-04 08:51:02', '2018-02-04 08:51:02'),
(37, '186.146.185.126, 66.249.88.10', '2018-02-04', '2018-02-04 08:51:20', '2018-02-04 08:51:20'),
(38, '66.249.70.24', '2018-02-04', '2018-02-04 09:06:11', '2018-02-04 09:06:11'),
(39, '186.31.212.59, 66.249.88.10', '2018-02-04', '2018-02-04 15:26:58', '2018-02-04 15:26:58'),
(40, '186.31.212.59, 66.249.88.13', '2018-02-04', '2018-02-04 15:27:09', '2018-02-04 15:27:09'),
(41, '186.31.212.59, 66.249.88.16', '2018-02-04', '2018-02-04 15:27:13', '2018-02-04 15:27:13'),
(42, '186.31.212.59', '2018-02-04', '2018-02-04 15:27:24', '2018-02-04 15:27:24'),
(43, '66.249.70.22', '2018-02-04', '2018-02-04 20:51:43', '2018-02-04 20:51:43'),
(44, '66.249.70.10', '2018-02-04', '2018-02-04 21:46:55', '2018-02-04 21:46:55'),
(45, '66.249.70.25', '2018-02-05', '2018-02-05 01:51:45', '2018-02-05 01:51:45'),
(46, '66.249.70.29', '2018-02-05', '2018-02-05 06:13:11', '2018-02-05 06:13:11'),
(47, '66.249.70.12', '2018-02-05', '2018-02-05 06:59:20', '2018-02-05 06:59:20'),
(48, '186.146.185.126, 66.249.88.13', '2018-02-05', '2018-02-05 07:55:18', '2018-02-05 07:55:18'),
(49, '186.146.185.126, 66.249.88.16', '2018-02-05', '2018-02-05 09:11:30', '2018-02-05 09:11:30'),
(50, '66.249.70.22', '2018-02-05', '2018-02-05 09:52:04', '2018-02-05 09:52:04'),
(51, '66.249.70.20', '2018-02-05', '2018-02-05 14:31:19', '2018-02-05 14:31:19'),
(52, '181.51.178.224', '2018-02-05', '2018-02-05 17:33:07', '2018-02-05 17:33:07'),
(53, '66.249.70.10', '2018-02-05', '2018-02-05 21:52:56', '2018-02-05 21:52:56'),
(54, '66.249.70.29', '2018-02-06', '2018-02-06 00:11:56', '2018-02-06 00:11:56'),
(55, '159.89.42.33', '2018-02-06', '2018-02-06 01:25:30', '2018-02-06 01:25:30'),
(56, '66.249.70.8', '2018-02-06', '2018-02-06 01:30:29', '2018-02-06 01:30:29'),
(57, '159.65.36.157', '2018-02-06', '2018-02-06 01:56:14', '2018-02-06 01:56:14'),
(58, '66.249.70.24', '2018-02-06', '2018-02-06 03:13:45', '2018-02-06 03:13:45'),
(59, '66.249.70.27', '2018-02-06', '2018-02-06 04:29:31', '2018-02-06 04:29:31'),
(60, '54.183.130.127', '2018-02-06', '2018-02-06 08:44:28', '2018-02-06 08:44:28'),
(61, '201.242.36.123', '2018-02-06', '2018-02-06 09:44:42', '2018-02-06 09:44:42'),
(62, '66.249.70.25', '2018-02-06', '2018-02-06 12:34:12', '2018-02-06 12:34:12'),
(63, '37.204.135.126', '2018-02-06', '2018-02-06 14:26:00', '2018-02-06 14:26:00'),
(64, '190.130.105.14', '2018-02-06', '2018-02-06 18:32:22', '2018-02-06 18:32:22'),
(65, '181.51.178.224', '2018-02-06', '2018-02-06 20:01:22', '2018-02-06 20:01:22'),
(66, '66.249.70.24', '2018-02-07', '2018-02-07 00:20:57', '2018-02-07 00:20:57'),
(67, '66.249.70.25', '2018-02-07', '2018-02-07 02:25:18', '2018-02-07 02:25:18'),
(68, '66.249.70.8', '2018-02-07', '2018-02-07 08:06:32', '2018-02-07 08:06:32'),
(69, '66.249.70.20', '2018-02-07', '2018-02-07 08:08:27', '2018-02-07 08:08:27'),
(70, '66.249.70.22', '2018-02-07', '2018-02-07 08:14:58', '2018-02-07 08:14:58'),
(71, '66.249.70.29', '2018-02-07', '2018-02-07 09:00:50', '2018-02-07 09:00:50'),
(72, '66.249.66.1', '2018-02-07', '2018-02-07 15:26:55', '2018-02-07 15:26:55'),
(73, '66.249.66.159', '2018-02-07', '2018-02-07 22:28:14', '2018-02-07 22:28:14'),
(74, '66.249.66.158', '2018-02-07', '2018-02-07 23:55:21', '2018-02-07 23:55:21'),
(75, '66.249.66.149', '2018-02-08', '2018-02-08 02:03:46', '2018-02-08 02:03:46'),
(76, '64.246.165.190', '2018-02-08', '2018-02-08 06:11:53', '2018-02-08 06:11:53'),
(77, '66.249.66.159', '2018-02-08', '2018-02-08 08:26:38', '2018-02-08 08:26:38'),
(78, '181.51.178.224', '2018-02-08', '2018-02-08 20:33:16', '2018-02-08 20:33:16'),
(79, '5.45.203.1', '2018-02-08', '2018-02-08 22:04:04', '2018-02-08 22:04:04'),
(80, '66.249.66.5', '2018-02-09', '2018-02-09 04:11:15', '2018-02-09 04:11:15'),
(81, '66.249.66.147', '2018-02-09', '2018-02-09 06:09:16', '2018-02-09 06:09:16'),
(82, '66.249.66.149', '2018-02-09', '2018-02-09 08:01:19', '2018-02-09 08:01:19'),
(83, '66.249.66.157', '2018-02-09', '2018-02-09 08:53:24', '2018-02-09 08:53:24'),
(84, '54.183.130.127', '2018-02-09', '2018-02-09 10:15:08', '2018-02-09 10:15:08'),
(85, '186.146.185.126', '2018-02-09', '2018-02-09 10:41:48', '2018-02-09 10:41:48'),
(86, '5.45.203.4', '2018-02-09', '2018-02-09 10:46:14', '2018-02-09 10:46:14'),
(87, '66.249.66.145', '2018-02-09', '2018-02-09 11:19:04', '2018-02-09 11:19:04'),
(88, '66.249.66.31', '2018-02-09', '2018-02-09 13:21:01', '2018-02-09 13:21:01'),
(89, '66.249.66.1', '2018-02-09', '2018-02-09 13:27:31', '2018-02-09 13:27:31'),
(90, '66.249.70.22', '2018-02-09', '2018-02-09 17:19:04', '2018-02-09 17:19:04'),
(91, '181.51.178.224', '2018-02-09', '2018-02-09 17:19:30', '2018-02-09 17:19:30'),
(92, '66.249.70.24', '2018-02-09', '2018-02-09 19:29:18', '2018-02-09 19:29:18'),
(93, '66.249.70.8', '2018-02-09', '2018-02-09 20:21:37', '2018-02-09 20:21:37'),
(94, '66.249.70.12', '2018-02-09', '2018-02-09 21:04:40', '2018-02-09 21:04:40'),
(95, '66.249.70.26', '2018-02-09', '2018-02-09 22:29:32', '2018-02-09 22:29:32'),
(96, '95.220.216.173', '2018-02-09', '2018-02-09 23:47:53', '2018-02-09 23:47:53'),
(97, '66.249.70.8', '2018-02-10', '2018-02-10 00:32:46', '2018-02-10 00:32:46'),
(98, '66.249.70.12', '2018-02-10', '2018-02-10 02:50:19', '2018-02-10 02:50:19'),
(99, '66.249.70.29', '2018-02-10', '2018-02-10 11:12:27', '2018-02-10 11:12:27'),
(100, '5.45.203.4', '2018-02-10', '2018-02-10 13:16:01', '2018-02-10 13:16:01'),
(101, '66.249.70.24', '2018-02-10', '2018-02-10 15:40:40', '2018-02-10 15:40:40'),
(102, '66.249.70.22', '2018-02-10', '2018-02-10 16:44:04', '2018-02-10 16:44:04'),
(103, '66.249.70.10', '2018-02-10', '2018-02-10 20:01:47', '2018-02-10 20:01:47'),
(104, '66.249.70.22', '2018-02-11', '2018-02-11 00:59:24', '2018-02-11 00:59:24'),
(105, '66.249.70.29', '2018-02-11', '2018-02-11 06:28:21', '2018-02-11 06:28:21'),
(106, '66.249.70.27', '2018-02-11', '2018-02-11 11:24:03', '2018-02-11 11:24:03'),
(107, '181.51.178.224', '2018-02-11', '2018-02-11 13:24:23', '2018-02-11 13:24:23'),
(108, '66.249.70.10', '2018-02-12', '2018-02-12 04:04:09', '2018-02-12 04:04:09'),
(109, '66.249.70.29', '2018-02-12', '2018-02-12 04:33:23', '2018-02-12 04:33:23'),
(110, '66.249.70.24', '2018-02-12', '2018-02-12 07:24:12', '2018-02-12 07:24:12'),
(111, '5.45.203.4', '2018-02-12', '2018-02-12 10:00:37', '2018-02-12 10:00:37'),
(112, '66.249.70.26', '2018-02-12', '2018-02-12 12:13:22', '2018-02-12 12:13:22'),
(113, '66.249.70.20', '2018-02-12', '2018-02-12 14:45:42', '2018-02-12 14:45:42'),
(114, '190.202.179.239', '2018-02-12', '2018-02-12 15:16:50', '2018-02-12 15:16:50'),
(115, '186.146.185.126', '2018-02-12', '2018-02-12 16:15:35', '2018-02-12 16:15:35'),
(116, '66.249.70.12', '2018-02-12', '2018-02-12 17:53:35', '2018-02-12 17:53:35'),
(117, '66.249.70.30', '2018-02-12', '2018-02-12 18:16:50', '2018-02-12 18:16:50'),
(118, '181.51.178.224', '2018-02-12', '2018-02-12 19:53:11', '2018-02-12 19:53:11'),
(119, '66.249.70.25', '2018-02-13', '2018-02-13 01:12:24', '2018-02-13 01:12:24'),
(120, '66.249.70.27', '2018-02-13', '2018-02-13 01:13:05', '2018-02-13 01:13:05'),
(121, '5.255.251.9', '2018-02-13', '2018-02-13 04:51:32', '2018-02-13 04:51:32'),
(122, '66.249.70.29', '2018-02-13', '2018-02-13 06:46:50', '2018-02-13 06:46:50'),
(123, '66.249.70.10', '2018-02-13', '2018-02-13 07:18:20', '2018-02-13 07:18:20'),
(124, '66.249.70.20', '2018-02-13', '2018-02-13 07:50:24', '2018-02-13 07:50:24'),
(125, '66.249.70.24', '2018-02-13', '2018-02-13 08:15:26', '2018-02-13 08:15:26'),
(126, '190.76.250.140', '2018-02-13', '2018-02-13 12:45:55', '2018-02-13 12:45:55'),
(127, '186.146.185.126', '2018-02-13', '2018-02-13 12:50:40', '2018-02-13 12:50:40'),
(128, '46.105.117.190', '2018-02-13', '2018-02-13 14:43:32', '2018-02-13 14:43:32'),
(129, '181.51.178.224', '2018-02-13', '2018-02-13 15:27:32', '2018-02-13 15:27:32'),
(130, '54.183.130.127', '2018-02-13', '2018-02-13 17:07:17', '2018-02-13 17:07:17'),
(131, '5.45.203.4', '2018-02-13', '2018-02-13 21:14:09', '2018-02-13 21:14:09'),
(132, '66.249.70.25', '2018-02-14', '2018-02-14 03:20:11', '2018-02-14 03:20:11'),
(133, '5.45.203.4', '2018-02-14', '2018-02-14 06:21:40', '2018-02-14 06:21:40'),
(134, '66.249.73.208', '2018-02-14', '2018-02-14 13:38:46', '2018-02-14 13:38:46'),
(135, '87.250.233.69', '2018-02-14', '2018-02-14 14:49:48', '2018-02-14 14:49:48'),
(136, '181.51.178.224', '2018-02-14', '2018-02-14 16:13:04', '2018-02-14 16:13:04'),
(137, '181.51.178.224, 66.249.88.13', '2018-02-14', '2018-02-14 19:35:20', '2018-02-14 19:35:20'),
(138, '181.64.52.24', '2018-02-14', '2018-02-14 21:11:03', '2018-02-14 21:11:03'),
(139, '181.50.101.213, 66.249.88.16', '2018-02-14', '2018-02-14 22:24:13', '2018-02-14 22:24:13'),
(140, '181.50.101.213, 66.249.88.13', '2018-02-14', '2018-02-14 22:26:36', '2018-02-14 22:26:36'),
(141, '181.50.101.213, 66.249.88.10', '2018-02-14', '2018-02-14 22:47:31', '2018-02-14 22:47:31'),
(142, '181.50.101.213', '2018-02-14', '2018-02-14 22:47:31', '2018-02-14 22:47:31'),
(143, '66.249.73.16', '2018-02-14', '2018-02-14 23:32:47', '2018-02-14 23:32:47'),
(144, '141.8.141.132', '2018-02-15', '2018-02-15 00:34:14', '2018-02-15 00:34:14'),
(145, '5.45.203.17', '2018-02-15', '2018-02-15 05:06:50', '2018-02-15 05:06:50'),
(146, '5.255.251.6', '2018-02-15', '2018-02-15 05:06:50', '2018-02-15 05:06:50'),
(147, '66.249.69.108', '2018-02-15', '2018-02-15 06:28:56', '2018-02-15 06:28:56'),
(148, '66.249.69.106', '2018-02-15', '2018-02-15 06:32:42', '2018-02-15 06:32:42'),
(149, '66.249.69.104', '2018-02-15', '2018-02-15 06:44:04', '2018-02-15 06:44:04'),
(150, '66.249.75.81', '2018-02-15', '2018-02-15 08:01:46', '2018-02-15 08:01:46'),
(151, '181.51.178.224', '2018-02-15', '2018-02-15 08:30:13', '2018-02-15 08:30:13'),
(152, '181.49.164.82', '2018-02-15', '2018-02-15 09:08:36', '2018-02-15 09:08:36'),
(153, '66.249.69.19', '2018-02-15', '2018-02-15 11:41:30', '2018-02-15 11:41:30'),
(154, '66.249.69.17', '2018-02-15', '2018-02-15 12:27:27', '2018-02-15 12:27:27'),
(155, '186.29.186.222', '2018-02-15', '2018-02-15 12:46:05', '2018-02-15 12:46:05'),
(156, '66.249.69.15', '2018-02-15', '2018-02-15 20:54:19', '2018-02-15 20:54:19'),
(157, '66.249.75.217', '2018-02-15', '2018-02-15 22:34:56', '2018-02-15 22:34:56'),
(158, '66.249.75.219', '2018-02-15', '2018-02-15 22:37:28', '2018-02-15 22:37:28'),
(159, '66.249.75.221', '2018-02-15', '2018-02-15 22:44:45', '2018-02-15 22:44:45'),
(160, '66.249.69.19', '2018-02-16', '2018-02-16 00:17:19', '2018-02-16 00:17:19'),
(161, '66.249.75.219', '2018-02-16', '2018-02-16 03:45:17', '2018-02-16 03:45:17'),
(162, '66.249.75.217', '2018-02-16', '2018-02-16 08:43:21', '2018-02-16 08:43:21'),
(163, '181.51.178.224, 66.249.88.10', '2018-02-16', '2018-02-16 09:55:51', '2018-02-16 09:55:51'),
(164, '190.130.109.43, 66.249.88.16', '2018-02-16', '2018-02-16 11:12:25', '2018-02-16 11:12:25'),
(165, '66.249.75.221', '2018-02-16', '2018-02-16 12:44:46', '2018-02-16 12:44:46'),
(166, '5.255.251.9', '2018-02-16', '2018-02-16 13:45:22', '2018-02-16 13:45:22'),
(167, '5.45.203.4', '2018-02-16', '2018-02-16 13:45:22', '2018-02-16 13:45:22'),
(168, '66.249.69.1', '2018-02-16', '2018-02-16 15:51:19', '2018-02-16 15:51:19'),
(169, '66.249.75.216', '2018-02-16', '2018-02-16 22:53:14', '2018-02-16 22:53:14'),
(170, '66.249.75.219', '2018-02-17', '2018-02-17 04:38:50', '2018-02-17 04:38:50'),
(171, '66.249.69.17', '2018-02-17', '2018-02-17 06:23:08', '2018-02-17 06:23:08'),
(172, '66.249.69.19', '2018-02-17', '2018-02-17 06:35:27', '2018-02-17 06:35:27'),
(173, '66.249.75.221', '2018-02-17', '2018-02-17 06:42:41', '2018-02-17 06:42:41'),
(174, '190.130.66.117, 66.249.88.10', '2018-02-17', '2018-02-17 10:06:44', '2018-02-17 10:06:44'),
(175, '66.249.69.31', '2018-02-17', '2018-02-17 10:54:39', '2018-02-17 10:54:39'),
(176, '66.249.75.212', '2018-02-17', '2018-02-17 11:08:24', '2018-02-17 11:08:24'),
(177, '66.249.75.216', '2018-02-17', '2018-02-17 11:11:09', '2018-02-17 11:11:09'),
(178, '66.249.75.214', '2018-02-17', '2018-02-17 11:27:39', '2018-02-17 11:27:39'),
(179, '66.249.75.217', '2018-02-17', '2018-02-17 11:33:09', '2018-02-17 11:33:09'),
(180, '66.249.69.1', '2018-02-17', '2018-02-17 11:41:24', '2018-02-17 11:41:24'),
(181, '66.249.69.15', '2018-02-17', '2018-02-17 12:03:24', '2018-02-17 12:03:24'),
(182, '190.206.8.161', '2018-02-17', '2018-02-17 13:01:40', '2018-02-17 13:01:40'),
(183, '66.249.69.30', '2018-02-17', '2018-02-17 15:46:10', '2018-02-17 15:46:10'),
(184, '181.51.178.224', '2018-02-17', '2018-02-17 18:22:37', '2018-02-17 18:22:37'),
(185, '5.45.203.4', '2018-02-17', '2018-02-17 23:45:46', '2018-02-17 23:45:46'),
(186, '66.249.69.17', '2018-02-18', '2018-02-18 02:48:01', '2018-02-18 02:48:01'),
(187, '66.249.75.219', '2018-02-18', '2018-02-18 03:51:39', '2018-02-18 03:51:39'),
(188, '54.183.130.127', '2018-02-18', '2018-02-18 05:35:50', '2018-02-18 05:35:50'),
(189, '5.45.203.4', '2018-02-18', '2018-02-18 10:19:50', '2018-02-18 10:19:50'),
(190, '66.249.75.217', '2018-02-18', '2018-02-18 16:43:45', '2018-02-18 16:43:45'),
(191, '66.249.75.214', '2018-02-18', '2018-02-18 17:57:00', '2018-02-18 17:57:00'),
(192, '66.249.69.30', '2018-02-18', '2018-02-18 18:20:34', '2018-02-18 18:20:34'),
(193, '66.249.69.31', '2018-02-18', '2018-02-18 18:21:52', '2018-02-18 18:21:52'),
(194, '66.249.75.212', '2018-02-18', '2018-02-18 18:24:29', '2018-02-18 18:24:29'),
(195, '66.249.69.15', '2018-02-18', '2018-02-18 19:43:02', '2018-02-18 19:43:02'),
(196, '66.249.75.217', '2018-02-19', '2018-02-19 00:24:50', '2018-02-19 00:24:50'),
(197, '66.249.69.19', '2018-02-19', '2018-02-19 02:31:29', '2018-02-19 02:31:29'),
(198, '5.255.251.6', '2018-02-19', '2018-02-19 02:47:32', '2018-02-19 02:47:32'),
(199, '66.249.75.212', '2018-02-19', '2018-02-19 03:30:23', '2018-02-19 03:30:23'),
(200, '54.188.2.247', '2018-02-19', '2018-02-19 10:20:31', '2018-02-19 10:20:31'),
(201, '5.255.251.9', '2018-02-19', '2018-02-19 10:49:45', '2018-02-19 10:49:45'),
(202, '5.45.203.1', '2018-02-19', '2018-02-19 16:46:23', '2018-02-19 16:46:23'),
(203, '66.249.69.17', '2018-02-19', '2018-02-19 17:25:49', '2018-02-19 17:25:49'),
(204, '66.249.75.221', '2018-02-19', '2018-02-19 22:40:30', '2018-02-19 22:40:30'),
(205, '66.249.69.17', '2018-02-20', '2018-02-20 06:27:07', '2018-02-20 06:27:07'),
(206, '190.130.66.216', '2018-02-20', '2018-02-20 08:30:06', '2018-02-20 08:30:06'),
(207, '5.255.251.8', '2018-02-20', '2018-02-20 08:45:35', '2018-02-20 08:45:35'),
(208, '66.249.75.221', '2018-02-20', '2018-02-20 14:26:09', '2018-02-20 14:26:09'),
(209, '5.45.203.4', '2018-02-20', '2018-02-20 15:15:03', '2018-02-20 15:15:03'),
(210, '181.51.178.224', '2018-02-20', '2018-02-20 18:05:51', '2018-02-20 18:05:51'),
(211, '66.249.69.30', '2018-02-20', '2018-02-20 18:23:58', '2018-02-20 18:23:58'),
(212, '66.249.69.31', '2018-02-20', '2018-02-20 18:26:43', '2018-02-20 18:26:43'),
(213, '5.45.203.4', '2018-02-21', '2018-02-21 01:13:33', '2018-02-21 01:13:33'),
(214, '66.249.75.221', '2018-02-21', '2018-02-21 03:03:04', '2018-02-21 03:03:04'),
(215, '5.45.203.8', '2018-02-21', '2018-02-21 03:12:27', '2018-02-21 03:12:27'),
(216, '66.249.75.217', '2018-02-21', '2018-02-21 04:08:58', '2018-02-21 04:08:58'),
(217, '190.205.209.47', '2018-02-21', '2018-02-21 06:49:25', '2018-02-21 06:49:25'),
(218, '186.146.185.126', '2018-02-21', '2018-02-21 10:50:53', '2018-02-21 10:50:53'),
(219, '152.200.141.210', '2018-02-21', '2018-02-21 11:23:19', '2018-02-21 11:23:19'),
(220, '5.255.251.8', '2018-02-21', '2018-02-21 11:57:31', '2018-02-21 11:57:31'),
(221, '141.8.141.134', '2018-02-21', '2018-02-21 14:27:15', '2018-02-21 14:27:15'),
(222, '66.249.66.75', '2018-02-21', '2018-02-21 15:36:32', '2018-02-21 15:36:32'),
(223, '181.51.178.224', '2018-02-21', '2018-02-21 16:12:14', '2018-02-21 16:12:14'),
(224, '66.249.66.72', '2018-02-21', '2018-02-21 19:08:09', '2018-02-21 19:08:09'),
(225, '66.249.66.88', '2018-02-21', '2018-02-21 19:22:01', '2018-02-21 19:22:01'),
(226, '66.249.66.158', '2018-02-21', '2018-02-21 19:52:33', '2018-02-21 19:52:33'),
(227, '66.249.66.30', '2018-02-21', '2018-02-21 21:41:45', '2018-02-21 21:41:45'),
(228, '66.249.66.31', '2018-02-21', '2018-02-21 23:18:55', '2018-02-21 23:18:55'),
(229, '66.249.66.31', '2018-02-22', '2018-02-22 00:09:49', '2018-02-22 00:09:49'),
(230, '141.8.141.132', '2018-02-22', '2018-02-22 01:13:04', '2018-02-22 01:13:04'),
(231, '66.249.66.1', '2018-02-22', '2018-02-22 04:20:30', '2018-02-22 04:20:30'),
(232, '66.249.66.3', '2018-02-22', '2018-02-22 06:58:29', '2018-02-22 06:58:29'),
(233, '66.249.66.5', '2018-02-22', '2018-02-22 08:21:12', '2018-02-22 08:21:12'),
(234, '5.255.251.9', '2018-02-22', '2018-02-22 09:48:42', '2018-02-22 09:48:42'),
(235, '5.45.203.4', '2018-02-22', '2018-02-22 09:48:42', '2018-02-22 09:48:42'),
(236, '66.249.66.30', '2018-02-22', '2018-02-22 12:13:42', '2018-02-22 12:13:42'),
(237, '181.51.178.224', '2018-02-22', '2018-02-22 12:13:46', '2018-02-22 12:13:46'),
(238, '66.249.66.77', '2018-02-22', '2018-02-22 12:34:48', '2018-02-22 12:34:48'),
(239, '66.249.66.88', '2018-02-22', '2018-02-22 13:44:58', '2018-02-22 13:44:58'),
(240, '66.249.66.86', '2018-02-22', '2018-02-22 14:00:14', '2018-02-22 14:00:14'),
(241, '190.205.209.47', '2018-02-22', '2018-02-22 15:47:44', '2018-02-22 15:47:44'),
(242, '181.50.101.213', '2018-02-22', '2018-02-22 16:23:37', '2018-02-22 16:23:37'),
(243, '54.183.130.127', '2018-02-22', '2018-02-22 17:35:31', '2018-02-22 17:35:31'),
(244, '66.249.66.157', '2018-02-22', '2018-02-22 19:00:21', '2018-02-22 19:00:21'),
(245, '5.45.203.4', '2018-02-23', '2018-02-23 00:58:25', '2018-02-23 00:58:25'),
(246, '66.249.66.149', '2018-02-23', '2018-02-23 01:25:20', '2018-02-23 01:25:20'),
(247, '190.205.209.47', '2018-02-23', '2018-02-23 06:11:20', '2018-02-23 06:11:20'),
(248, '181.51.178.224', '2018-02-23', '2018-02-23 09:17:54', '2018-02-23 09:17:54'),
(249, '186.146.185.126', '2018-02-23', '2018-02-23 10:01:39', '2018-02-23 10:01:39'),
(250, '66.249.66.147', '2018-02-23', '2018-02-23 11:49:31', '2018-02-23 11:49:31'),
(251, '181.50.101.213', '2018-02-23', '2018-02-23 15:55:39', '2018-02-23 15:55:39'),
(252, '66.249.66.145', '2018-02-23', '2018-02-23 16:20:24', '2018-02-23 16:20:24'),
(253, '190.130.109.208, 66.249.88.16', '2018-02-23', '2018-02-23 18:14:14', '2018-02-23 18:14:14'),
(254, '190.130.109.208, 66.249.88.13', '2018-02-23', '2018-02-23 18:14:44', '2018-02-23 18:14:44'),
(255, '190.130.109.208, 66.249.88.10', '2018-02-23', '2018-02-23 18:16:39', '2018-02-23 18:16:39'),
(256, '186.146.142.2', '2018-02-23', '2018-02-23 18:18:33', '2018-02-23 18:18:33'),
(257, '186.31.153.34, 66.249.88.16', '2018-02-23', '2018-02-23 18:52:40', '2018-02-23 18:52:40'),
(258, '186.31.153.34, 66.249.88.13', '2018-02-23', '2018-02-23 18:53:28', '2018-02-23 18:53:28'),
(259, '66.249.66.31', '2018-02-23', '2018-02-23 19:33:18', '2018-02-23 19:33:18'),
(260, '66.249.66.5', '2018-02-23', '2018-02-23 23:49:26', '2018-02-23 23:49:26'),
(261, '66.249.66.30', '2018-02-24', '2018-02-24 00:15:39', '2018-02-24 00:15:39'),
(262, '95.24.9.133', '2018-02-24', '2018-02-24 01:05:05', '2018-02-24 01:05:05'),
(263, '66.249.66.157', '2018-02-24', '2018-02-24 07:21:15', '2018-02-24 07:21:15'),
(264, '66.249.66.147', '2018-02-24', '2018-02-24 09:17:08', '2018-02-24 09:17:08'),
(265, '161.10.199.16', '2018-02-24', '2018-02-24 11:41:19', '2018-02-24 11:41:19'),
(266, '46.188.21.49', '2018-02-24', '2018-02-24 16:02:06', '2018-02-24 16:02:06'),
(267, '5.255.251.9', '2018-02-24', '2018-02-24 17:20:58', '2018-02-24 17:20:58'),
(268, '5.45.203.4', '2018-02-24', '2018-02-24 17:20:58', '2018-02-24 17:20:58'),
(269, '66.249.66.149', '2018-02-24', '2018-02-24 17:24:48', '2018-02-24 17:24:48'),
(270, '181.51.178.224', '2018-02-24', '2018-02-24 21:39:31', '2018-02-24 21:39:31'),
(271, '66.249.66.159', '2018-02-25', '2018-02-25 00:24:13', '2018-02-25 00:24:13'),
(272, '66.249.66.1', '2018-02-25', '2018-02-25 00:28:52', '2018-02-25 00:28:52'),
(273, '66.249.66.158', '2018-02-25', '2018-02-25 04:13:28', '2018-02-25 04:13:28'),
(274, '66.249.66.157', '2018-02-25', '2018-02-25 04:58:20', '2018-02-25 04:58:20'),
(275, '186.31.157.111, 66.249.88.13', '2018-02-25', '2018-02-25 10:43:12', '2018-02-25 10:43:12'),
(276, '181.51.178.224', '2018-02-25', '2018-02-25 10:56:46', '2018-02-25 10:56:46'),
(277, '66.249.66.145', '2018-02-25', '2018-02-25 11:12:57', '2018-02-25 11:12:57'),
(278, '66.249.64.1', '2018-02-25', '2018-02-25 14:11:23', '2018-02-25 14:11:23'),
(279, '186.146.185.126', '2018-02-25', '2018-02-25 14:19:13', '2018-02-25 14:19:13'),
(280, '178.140.176.46', '2018-02-25', '2018-02-25 14:23:54', '2018-02-25 14:23:54'),
(281, '190.205.209.47', '2018-02-25', '2018-02-25 14:43:38', '2018-02-25 14:43:38'),
(282, '14.142.64.3', '2018-02-25', '2018-02-25 18:16:14', '2018-02-25 18:16:14'),
(283, '66.249.64.29', '2018-02-25', '2018-02-25 22:59:39', '2018-02-25 22:59:39'),
(284, '66.249.64.30', '2018-02-25', '2018-02-25 23:26:08', '2018-02-25 23:26:08'),
(285, '66.249.64.28', '2018-02-26', '2018-02-26 00:11:28', '2018-02-26 00:11:28'),
(286, '66.249.70.8', '2018-02-26', '2018-02-26 00:19:06', '2018-02-26 00:19:06'),
(287, '66.249.64.29', '2018-02-26', '2018-02-26 04:09:53', '2018-02-26 04:09:53'),
(288, '66.249.64.31', '2018-02-26', '2018-02-26 04:17:26', '2018-02-26 04:17:26'),
(289, '66.249.70.10', '2018-02-26', '2018-02-26 04:25:03', '2018-02-26 04:25:03'),
(290, '216.145.14.142', '2018-02-26', '2018-02-26 06:16:09', '2018-02-26 06:16:09'),
(291, '66.249.66.149', '2018-02-26', '2018-02-26 06:43:30', '2018-02-26 06:43:30'),
(292, '66.249.66.145', '2018-02-26', '2018-02-26 06:48:46', '2018-02-26 06:48:46'),
(293, '181.48.78.106', '2018-02-26', '2018-02-26 07:53:41', '2018-02-26 07:53:41'),
(294, '66.249.66.31', '2018-02-26', '2018-02-26 08:20:57', '2018-02-26 08:20:57'),
(295, '181.50.101.213', '2018-02-26', '2018-02-26 09:05:21', '2018-02-26 09:05:21'),
(296, '181.51.178.224', '2018-02-26', '2018-02-26 09:37:46', '2018-02-26 09:37:46'),
(297, '181.33.145.167', '2018-02-26', '2018-02-26 09:39:30', '2018-02-26 09:39:30'),
(298, '66.249.66.3', '2018-02-26', '2018-02-26 10:44:18', '2018-02-26 10:44:18'),
(299, '5.45.203.4', '2018-02-26', '2018-02-26 11:40:45', '2018-02-26 11:40:45'),
(300, '5.255.251.9', '2018-02-26', '2018-02-26 11:40:45', '2018-02-26 11:40:45'),
(301, '66.249.66.147', '2018-02-26', '2018-02-26 14:15:52', '2018-02-26 14:15:52'),
(302, '181.51.178.224, 66.249.88.13', '2018-02-26', '2018-02-26 16:23:27', '2018-02-26 16:23:27'),
(303, '181.51.178.224, 66.249.88.10', '2018-02-26', '2018-02-26 16:36:38', '2018-02-26 16:36:38'),
(304, '181.51.178.224, 66.249.88.16', '2018-02-26', '2018-02-26 16:37:51', '2018-02-26 16:37:51'),
(305, '66.249.73.192', '2018-02-26', '2018-02-26 22:58:48', '2018-02-26 22:58:48'),
(306, '66.249.65.121', '2018-02-26', '2018-02-26 23:31:41', '2018-02-26 23:31:41'),
(307, '66.249.73.208', '2018-02-27', '2018-02-27 02:03:22', '2018-02-27 02:03:22'),
(308, '54.183.130.127', '2018-02-27', '2018-02-27 05:07:14', '2018-02-27 05:07:14'),
(309, '14.141.107.206', '2018-02-27', '2018-02-27 05:17:06', '2018-02-27 05:17:06'),
(310, '66.249.65.118', '2018-02-27', '2018-02-27 05:47:14', '2018-02-27 05:47:14'),
(311, '66.249.73.212', '2018-02-27', '2018-02-27 07:46:37', '2018-02-27 07:46:37'),
(312, '186.146.185.126', '2018-02-27', '2018-02-27 10:38:01', '2018-02-27 10:38:01'),
(313, '66.249.64.29', '2018-02-27', '2018-02-27 15:50:36', '2018-02-27 15:50:36'),
(314, '152.200.148.194, 66.249.88.16', '2018-02-27', '2018-02-27 18:44:37', '2018-02-27 18:44:37'),
(315, '152.200.148.194', '2018-02-27', '2018-02-27 18:44:42', '2018-02-27 18:44:42'),
(316, '66.249.64.21', '2018-02-27', '2018-02-27 20:52:45', '2018-02-27 20:52:45'),
(317, '181.49.81.147', '2018-02-27', '2018-02-27 23:57:32', '2018-02-27 23:57:32'),
(318, '66.249.64.31', '2018-02-28', '2018-02-28 03:38:40', '2018-02-28 03:38:40'),
(319, '66.249.64.22', '2018-02-28', '2018-02-28 06:00:11', '2018-02-28 06:00:11'),
(320, '66.249.64.29', '2018-02-28', '2018-02-28 08:48:08', '2018-02-28 08:48:08'),
(321, '181.51.178.224', '2018-02-28', '2018-02-28 09:09:53', '2018-02-28 09:09:53'),
(322, '5.45.203.19', '2018-02-28', '2018-02-28 10:45:35', '2018-02-28 10:45:35'),
(323, '87.250.244.5', '2018-02-28', '2018-02-28 10:45:35', '2018-02-28 10:45:35'),
(324, '66.249.64.30', '2018-02-28', '2018-02-28 10:52:32', '2018-02-28 10:52:32'),
(325, '190.205.209.47', '2018-02-28', '2018-02-28 16:22:22', '2018-02-28 16:22:22'),
(326, '66.249.66.147', '2018-02-28', '2018-02-28 16:31:00', '2018-02-28 16:31:00'),
(327, '138.0.90.120', '2018-02-28', '2018-02-28 20:08:40', '2018-02-28 20:08:40'),
(328, '66.249.66.159', '2018-02-28', '2018-02-28 23:30:26', '2018-02-28 23:30:26'),
(329, '66.249.66.1', '2018-03-01', '2018-03-01 02:44:13', '2018-03-01 02:44:13'),
(330, '66.249.66.149', '2018-03-01', '2018-03-01 05:18:37', '2018-03-01 05:18:37'),
(331, '66.249.66.147', '2018-03-01', '2018-03-01 05:23:58', '2018-03-01 05:23:58'),
(332, '66.249.66.157', '2018-03-01', '2018-03-01 05:27:11', '2018-03-01 05:27:11'),
(333, '66.249.66.30', '2018-03-01', '2018-03-01 06:39:27', '2018-03-01 06:39:27'),
(334, '181.51.178.224, 66.249.88.13', '2018-03-01', '2018-03-01 09:09:14', '2018-03-01 09:09:14'),
(335, '181.51.178.224, 66.249.88.10', '2018-03-01', '2018-03-01 09:09:34', '2018-03-01 09:09:34'),
(336, '181.51.178.224, 66.249.88.16', '2018-03-01', '2018-03-01 09:09:54', '2018-03-01 09:09:54'),
(337, '66.249.66.158', '2018-03-01', '2018-03-01 09:49:00', '2018-03-01 09:49:00'),
(338, '181.51.178.224', '2018-03-01', '2018-03-01 11:36:41', '2018-03-01 11:36:41'),
(339, '181.62.253.82', '2018-03-01', '2018-03-01 12:17:14', '2018-03-01 12:17:14'),
(340, '186.86.79.51', '2018-03-01', '2018-03-01 14:46:49', '2018-03-01 14:46:49'),
(341, '95.28.53.89', '2018-03-01', '2018-03-01 15:37:36', '2018-03-01 15:37:36'),
(342, '66.249.66.159', '2018-03-01', '2018-03-01 17:20:18', '2018-03-01 17:20:18'),
(343, '66.249.66.5', '2018-03-01', '2018-03-01 17:25:28', '2018-03-01 17:25:28'),
(344, '66.249.66.145', '2018-03-01', '2018-03-01 18:29:43', '2018-03-01 18:29:43'),
(345, '66.249.66.3', '2018-03-01', '2018-03-01 18:57:16', '2018-03-01 18:57:16'),
(346, '181.50.101.213, 66.249.88.10', '2018-03-01', '2018-03-01 20:01:46', '2018-03-01 20:01:46'),
(347, '181.50.101.213, 66.249.88.16', '2018-03-01', '2018-03-01 20:02:00', '2018-03-01 20:02:00'),
(348, '181.50.101.213, 66.249.88.13', '2018-03-01', '2018-03-01 20:03:06', '2018-03-01 20:03:06'),
(349, '190.205.209.47', '2018-03-01', '2018-03-01 20:53:50', '2018-03-01 20:53:50'),
(350, '201.216.4.3', '2018-03-01', '2018-03-01 23:33:14', '2018-03-01 23:33:14'),
(351, '66.249.66.3', '2018-03-02', '2018-03-02 00:55:25', '2018-03-02 00:55:25'),
(352, '66.249.66.145', '2018-03-02', '2018-03-02 05:22:33', '2018-03-02 05:22:33'),
(353, '186.86.79.51', '2018-03-02', '2018-03-02 06:43:48', '2018-03-02 06:43:48'),
(354, '66.249.66.147', '2018-03-02', '2018-03-02 09:03:59', '2018-03-02 09:03:59'),
(355, '181.51.178.224', '2018-03-02', '2018-03-02 10:01:41', '2018-03-02 10:01:41'),
(356, '66.249.66.5', '2018-03-02', '2018-03-02 11:55:09', '2018-03-02 11:55:09'),
(357, '152.200.146.243', '2018-03-02', '2018-03-02 15:07:27', '2018-03-02 15:07:27'),
(358, '66.249.66.149', '2018-03-02', '2018-03-02 16:29:39', '2018-03-02 16:29:39'),
(359, '66.249.66.1', '2018-03-02', '2018-03-02 16:37:36', '2018-03-02 16:37:36'),
(360, '190.156.86.233', '2018-03-02', '2018-03-02 20:15:20', '2018-03-02 20:15:20'),
(361, '77.88.9.134', '2018-03-02', '2018-03-02 21:20:55', '2018-03-02 21:20:55'),
(362, '141.8.141.134', '2018-03-02', '2018-03-02 21:22:46', '2018-03-02 21:22:46'),
(363, '66.249.66.147', '2018-03-03', '2018-03-03 00:17:59', '2018-03-03 00:17:59'),
(364, '66.249.66.3', '2018-03-03', '2018-03-03 00:33:53', '2018-03-03 00:33:53'),
(365, '66.249.66.149', '2018-03-03', '2018-03-03 03:56:24', '2018-03-03 03:56:24'),
(366, '66.249.66.145', '2018-03-03', '2018-03-03 04:34:14', '2018-03-03 04:34:14'),
(367, '181.51.178.224', '2018-03-03', '2018-03-03 13:25:03', '2018-03-03 13:25:03'),
(368, '66.249.66.1', '2018-03-03', '2018-03-03 15:47:45', '2018-03-03 15:47:45'),
(369, '201.216.4.3', '2018-03-03', '2018-03-03 18:01:12', '2018-03-03 18:01:12'),
(370, '181.50.101.213', '2018-03-03', '2018-03-03 19:50:42', '2018-03-03 19:50:42'),
(371, '66.249.66.5', '2018-03-03', '2018-03-03 19:53:09', '2018-03-03 19:53:09'),
(372, '190.242.75.42', '2018-03-03', '2018-03-03 21:32:35', '2018-03-03 21:32:35'),
(373, '66.249.66.149', '2018-03-04', '2018-03-04 03:00:54', '2018-03-04 03:00:54'),
(374, '54.183.165.74', '2018-03-04', '2018-03-04 03:07:45', '2018-03-04 03:07:45'),
(375, '66.249.66.145', '2018-03-04', '2018-03-04 04:26:45', '2018-03-04 04:26:45'),
(376, '66.249.66.3', '2018-03-04', '2018-03-04 07:15:28', '2018-03-04 07:15:28'),
(377, '66.249.66.147', '2018-03-04', '2018-03-04 07:57:37', '2018-03-04 07:57:37'),
(378, '66.249.66.1', '2018-03-04', '2018-03-04 09:11:27', '2018-03-04 09:11:27'),
(379, '66.249.66.5', '2018-03-04', '2018-03-04 09:24:38', '2018-03-04 09:24:38'),
(380, '87.250.244.10', '2018-03-04', '2018-03-04 13:33:03', '2018-03-04 13:33:03'),
(381, '5.45.203.6', '2018-03-04', '2018-03-04 13:33:13', '2018-03-04 13:33:13'),
(382, '201.216.4.3', '2018-03-04', '2018-03-04 14:59:44', '2018-03-04 14:59:44'),
(383, '191.103.112.1', '2018-03-04', '2018-03-04 16:35:31', '2018-03-04 16:35:31'),
(384, '201.209.38.117', '2018-03-04', '2018-03-04 16:36:32', '2018-03-04 16:36:32'),
(385, '190.77.133.42', '2018-03-04', '2018-03-04 16:45:05', '2018-03-04 16:45:05'),
(386, '186.92.39.112', '2018-03-04', '2018-03-04 17:29:50', '2018-03-04 17:29:50'),
(387, '186.95.30.47', '2018-03-04', '2018-03-04 18:45:22', '2018-03-04 18:45:22'),
(388, '190.206.199.17', '2018-03-04', '2018-03-04 18:48:30', '2018-03-04 18:48:30'),
(389, '181.163.107.91', '2018-03-04', '2018-03-04 18:57:54', '2018-03-04 18:57:54'),
(390, '149.154.167.163', '2018-03-04', '2018-03-04 19:05:09', '2018-03-04 19:05:09'),
(391, '186.95.74.58', '2018-03-04', '2018-03-04 19:07:56', '2018-03-04 19:07:56'),
(392, '66.249.66.147', '2018-03-05', '2018-03-05 02:05:12', '2018-03-05 02:05:12'),
(393, '66.249.75.217', '2018-03-05', '2018-03-05 04:15:27', '2018-03-05 04:15:27'),
(394, '66.249.66.149', '2018-03-05', '2018-03-05 04:25:50', '2018-03-05 04:25:50'),
(395, '66.249.66.1', '2018-03-05', '2018-03-05 05:24:08', '2018-03-05 05:24:08'),
(396, '141.8.141.134', '2018-03-05', '2018-03-05 06:15:43', '2018-03-05 06:15:43'),
(397, '66.249.66.145', '2018-03-05', '2018-03-05 07:05:59', '2018-03-05 07:05:59'),
(398, '201.216.4.3', '2018-03-05', '2018-03-05 08:03:49', '2018-03-05 08:03:49'),
(399, '190.17.208.124', '2018-03-05', '2018-03-05 08:12:02', '2018-03-05 08:12:02'),
(400, '165.227.78.79', '2018-03-05', '2018-03-05 08:13:54', '2018-03-05 08:13:54'),
(401, '37.34.62.205', '2018-03-05', '2018-03-05 08:14:26', '2018-03-05 08:14:26'),
(402, '190.205.209.47', '2018-03-05', '2018-03-05 09:25:41', '2018-03-05 09:25:41'),
(403, '186.88.99.253', '2018-03-05', '2018-03-05 09:57:43', '2018-03-05 09:57:43'),
(404, '186.31.154.189', '2018-03-05', '2018-03-05 10:08:49', '2018-03-05 10:08:49'),
(405, '66.249.66.3', '2018-03-05', '2018-03-05 10:10:08', '2018-03-05 10:10:08'),
(406, '181.51.178.224', '2018-03-05', '2018-03-05 10:23:42', '2018-03-05 10:23:42'),
(407, '173.252.86.70', '2018-03-05', '2018-03-05 10:43:40', '2018-03-05 10:43:40'),
(408, '173.252.84.114', '2018-03-05', '2018-03-05 10:43:42', '2018-03-05 10:43:42'),
(409, '173.252.85.225', '2018-03-05', '2018-03-05 10:43:43', '2018-03-05 10:43:43'),
(410, '190.249.116.124', '2018-03-05', '2018-03-05 10:58:08', '2018-03-05 10:58:08'),
(411, '159.65.245.168', '2018-03-05', '2018-03-05 11:40:50', '2018-03-05 11:40:50'),
(412, '186.31.212.69', '2018-03-05', '2018-03-05 13:06:12', '2018-03-05 13:06:12'),
(413, '5.45.203.19', '2018-03-05', '2018-03-05 13:11:24', '2018-03-05 13:11:24'),
(414, '181.50.101.213', '2018-03-05', '2018-03-05 14:15:46', '2018-03-05 14:15:46'),
(415, '186.31.149.216', '2018-03-05', '2018-03-05 16:09:35', '2018-03-05 16:09:35'),
(416, '186.86.79.51', '2018-03-05', '2018-03-05 17:10:07', '2018-03-05 17:10:07'),
(417, '66.249.66.86', '2018-03-05', '2018-03-05 21:03:09', '2018-03-05 21:03:09'),
(418, '66.249.66.88', '2018-03-05', '2018-03-05 21:19:48', '2018-03-05 21:19:48'),
(419, '66.249.66.87', '2018-03-05', '2018-03-05 21:28:56', '2018-03-05 21:28:56'),
(420, '66.249.66.89', '2018-03-05', '2018-03-05 21:34:55', '2018-03-05 21:34:55'),
(421, '66.249.66.87', '2018-03-06', '2018-03-06 00:03:07', '2018-03-06 00:03:07'),
(422, '66.249.66.86', '2018-03-06', '2018-03-06 00:03:44', '2018-03-06 00:03:44'),
(423, '66.249.66.88', '2018-03-06', '2018-03-06 01:29:56', '2018-03-06 01:29:56'),
(424, '87.250.244.10', '2018-03-06', '2018-03-06 02:20:15', '2018-03-06 02:20:15'),
(425, '66.249.66.89', '2018-03-06', '2018-03-06 03:17:03', '2018-03-06 03:17:03'),
(426, '5.255.251.15', '2018-03-06', '2018-03-06 04:32:39', '2018-03-06 04:32:39'),
(427, '5.255.251.12', '2018-03-06', '2018-03-06 04:32:39', '2018-03-06 04:32:39'),
(428, '95.108.181.46', '2018-03-06', '2018-03-06 05:20:46', '2018-03-06 05:20:46'),
(429, '181.51.178.224', '2018-03-06', '2018-03-06 09:05:42', '2018-03-06 09:05:42'),
(430, '181.50.101.213', '2018-03-06', '2018-03-06 09:47:44', '2018-03-06 09:47:44'),
(431, '201.216.4.3', '2018-03-06', '2018-03-06 10:49:13', '2018-03-06 10:49:13'),
(432, '5.45.203.4', '2018-03-06', '2018-03-06 11:47:22', '2018-03-06 11:47:22'),
(433, '66.249.66.77', '2018-03-06', '2018-03-06 12:31:06', '2018-03-06 12:31:06'),
(434, '66.249.66.202', '2018-03-06', '2018-03-06 14:59:30', '2018-03-06 14:59:30'),
(435, '66.249.66.147', '2018-03-06', '2018-03-06 15:07:30', '2018-03-06 15:07:30'),
(436, '141.8.141.138', '2018-03-06', '2018-03-06 19:40:58', '2018-03-06 19:40:58'),
(437, '66.249.66.88', '2018-03-07', '2018-03-07 00:06:47', '2018-03-07 00:06:47'),
(438, '66.249.66.86', '2018-03-07', '2018-03-07 00:07:08', '2018-03-07 00:07:08'),
(439, '66.249.66.87', '2018-03-07', '2018-03-07 00:43:13', '2018-03-07 00:43:13'),
(440, '190.205.209.47', '2018-03-07', '2018-03-07 04:24:25', '2018-03-07 04:24:25'),
(441, '66.249.66.89', '2018-03-07', '2018-03-07 05:51:34', '2018-03-07 05:51:34'),
(442, '66.249.66.219', '2018-03-07', '2018-03-07 07:06:27', '2018-03-07 07:06:27'),
(443, '66.249.66.217', '2018-03-07', '2018-03-07 07:07:40', '2018-03-07 07:07:40'),
(444, '66.249.66.145', '2018-03-07', '2018-03-07 09:32:00', '2018-03-07 09:32:00'),
(445, '66.249.66.202', '2018-03-07', '2018-03-07 13:59:47', '2018-03-07 13:59:47'),
(446, '181.50.101.213', '2018-03-07', '2018-03-07 14:23:19', '2018-03-07 14:23:19'),
(447, '66.249.66.221', '2018-03-07', '2018-03-07 14:23:53', '2018-03-07 14:23:53'),
(448, '66.249.66.149', '2018-03-07', '2018-03-07 14:26:29', '2018-03-07 14:26:29'),
(449, '66.249.66.128', '2018-03-07', '2018-03-07 14:57:41', '2018-03-07 14:57:41'),
(450, '66.249.66.204', '2018-03-07', '2018-03-07 15:53:35', '2018-03-07 15:53:35'),
(451, '66.249.66.200', '2018-03-07', '2018-03-07 15:57:29', '2018-03-07 15:57:29'),
(452, '66.249.66.130', '2018-03-07', '2018-03-07 16:05:18', '2018-03-07 16:05:18'),
(453, '66.249.75.219', '2018-03-07', '2018-03-07 16:13:05', '2018-03-07 16:13:05'),
(454, '5.45.203.4', '2018-03-07', '2018-03-07 16:50:02', '2018-03-07 16:50:02'),
(455, '181.51.178.224', '2018-03-07', '2018-03-07 17:49:14', '2018-03-07 17:49:14'),
(456, '66.249.66.132', '2018-03-07', '2018-03-07 18:32:11', '2018-03-07 18:32:11'),
(457, '115.72.235.84', '2018-03-07', '2018-03-07 23:35:15', '2018-03-07 23:35:15'),
(458, '66.249.66.89', '2018-03-08', '2018-03-08 00:01:41', '2018-03-08 00:01:41'),
(459, '66.249.66.88', '2018-03-08', '2018-03-08 00:06:02', '2018-03-08 00:06:02'),
(460, '66.249.66.87', '2018-03-08', '2018-03-08 00:20:57', '2018-03-08 00:20:57'),
(461, '66.249.66.86', '2018-03-08', '2018-03-08 03:41:02', '2018-03-08 03:41:02'),
(462, '181.51.178.224', '2018-03-08', '2018-03-08 13:03:26', '2018-03-08 13:03:26'),
(463, '54.183.165.74', '2018-03-08', '2018-03-08 13:37:18', '2018-03-08 13:37:18'),
(464, '5.45.203.4', '2018-03-08', '2018-03-08 14:24:45', '2018-03-08 14:24:45'),
(465, '5.255.251.9', '2018-03-08', '2018-03-08 14:24:45', '2018-03-08 14:24:45'),
(466, '181.50.101.213', '2018-03-08', '2018-03-08 20:53:40', '2018-03-08 20:53:40'),
(467, '204.119.234.2', '2018-03-08', '2018-03-08 22:57:23', '2018-03-08 22:57:23'),
(468, '66.249.66.87', '2018-03-09', '2018-03-09 06:48:09', '2018-03-09 06:48:09'),
(469, '85.251.155.50', '2018-03-09', '2018-03-09 09:26:32', '2018-03-09 09:26:32'),
(470, '165.227.99.127', '2018-03-09', '2018-03-09 10:07:03', '2018-03-09 10:07:03'),
(471, '159.89.44.208', '2018-03-09', '2018-03-09 10:11:42', '2018-03-09 10:11:42'),
(472, '66.249.66.86', '2018-03-09', '2018-03-09 10:18:45', '2018-03-09 10:18:45'),
(473, '181.51.178.224', '2018-03-09', '2018-03-09 10:37:01', '2018-03-09 10:37:01'),
(474, '191.125.175.96', '2018-03-09', '2018-03-09 13:39:32', '2018-03-09 13:39:32'),
(475, '66.249.66.88', '2018-03-09', '2018-03-09 14:30:37', '2018-03-09 14:30:37'),
(476, '54.234.206.146', '2018-03-09', '2018-03-09 14:57:42', '2018-03-09 14:57:42'),
(477, '54.83.68.72', '2018-03-09', '2018-03-09 15:03:03', '2018-03-09 15:03:03'),
(478, '54.234.195.236', '2018-03-09', '2018-03-09 15:27:02', '2018-03-09 15:27:02'),
(479, '66.249.66.87', '2018-03-10', '2018-03-10 00:27:03', '2018-03-10 00:27:03'),
(480, '66.249.66.88', '2018-03-10', '2018-03-10 02:27:03', '2018-03-10 02:27:03'),
(481, '66.249.66.86', '2018-03-10', '2018-03-10 04:46:26', '2018-03-10 04:46:26'),
(482, '157.37.103.41', '2018-03-10', '2018-03-10 12:07:31', '2018-03-10 12:07:31'),
(483, '5.255.251.9', '2018-03-10', '2018-03-10 12:16:17', '2018-03-10 12:16:17'),
(484, '5.45.203.4', '2018-03-10', '2018-03-10 12:16:17', '2018-03-10 12:16:17'),
(485, '181.50.101.213', '2018-03-10', '2018-03-10 13:55:46', '2018-03-10 13:55:46'),
(486, '66.249.66.77', '2018-03-10', '2018-03-10 15:27:37', '2018-03-10 15:27:37'),
(487, '66.249.66.89', '2018-03-10', '2018-03-10 22:12:42', '2018-03-10 22:12:42'),
(488, '190.5.204.192', '2018-03-11', '2018-03-11 00:03:44', '2018-03-11 00:03:44'),
(489, '66.249.66.86', '2018-03-11', '2018-03-11 00:40:31', '2018-03-11 00:40:31'),
(490, '66.249.66.89', '2018-03-11', '2018-03-11 01:10:55', '2018-03-11 01:10:55'),
(491, '66.249.73.210', '2018-03-11', '2018-03-11 01:33:30', '2018-03-11 01:33:30'),
(492, '66.249.65.125', '2018-03-11', '2018-03-11 02:49:43', '2018-03-11 02:49:43'),
(493, '66.249.73.212', '2018-03-11', '2018-03-11 03:36:48', '2018-03-11 03:36:48'),
(494, '66.249.65.121', '2018-03-11', '2018-03-11 04:13:25', '2018-03-11 04:13:25'),
(495, '5.45.203.4', '2018-03-11', '2018-03-11 08:29:00', '2018-03-11 08:29:00'),
(496, '66.249.65.123', '2018-03-11', '2018-03-11 08:50:29', '2018-03-11 08:50:29'),
(497, '66.249.73.208', '2018-03-11', '2018-03-11 09:04:45', '2018-03-11 09:04:45'),
(498, '66.249.65.115', '2018-03-11', '2018-03-11 11:52:23', '2018-03-11 11:52:23'),
(499, '66.249.65.119', '2018-03-11', '2018-03-11 11:55:57', '2018-03-11 11:55:57'),
(500, '186.82.171.93', '2018-03-11', '2018-03-11 14:50:38', '2018-03-11 14:50:38'),
(501, '47.63.165.5', '2018-03-11', '2018-03-11 15:00:56', '2018-03-11 15:00:56'),
(502, '181.51.178.224', '2018-03-11', '2018-03-11 15:43:05', '2018-03-11 15:43:05'),
(503, '181.145.58.42', '2018-03-11', '2018-03-11 16:47:10', '2018-03-11 16:47:10'),
(504, '66.249.65.125', '2018-03-12', '2018-03-12 01:55:52', '2018-03-12 01:55:52'),
(505, '66.249.66.88', '2018-03-12', '2018-03-12 04:55:14', '2018-03-12 04:55:14'),
(506, '66.249.66.87', '2018-03-12', '2018-03-12 05:00:18', '2018-03-12 05:00:18'),
(507, '66.249.66.89', '2018-03-12', '2018-03-12 06:05:40', '2018-03-12 06:05:40'),
(508, '190.159.216.175', '2018-03-12', '2018-03-12 06:38:41', '2018-03-12 06:38:41'),
(509, '201.216.4.3', '2018-03-12', '2018-03-12 10:55:49', '2018-03-12 10:55:49'),
(510, '37.9.113.56', '2018-03-12', '2018-03-12 11:51:29', '2018-03-12 11:51:29'),
(511, '5.45.203.4', '2018-03-12', '2018-03-12 12:00:56', '2018-03-12 12:00:56'),
(512, '5.255.251.9', '2018-03-12', '2018-03-12 12:03:02', '2018-03-12 12:03:02'),
(513, '158.69.228.56', '2018-03-12', '2018-03-12 12:13:51', '2018-03-12 12:13:51'),
(514, '187.190.166.226', '2018-03-12', '2018-03-12 13:40:16', '2018-03-12 13:40:16'),
(515, '181.51.178.224', '2018-03-12', '2018-03-12 13:43:41', '2018-03-12 13:43:41'),
(516, '66.249.64.21', '2018-03-12', '2018-03-12 17:14:47', '2018-03-12 17:14:47'),
(517, '66.249.64.20', '2018-03-12', '2018-03-12 17:37:28', '2018-03-12 17:37:28'),
(518, '66.249.64.22', '2018-03-12', '2018-03-12 18:07:45', '2018-03-12 18:07:45'),
(519, '66.249.64.21', '2018-03-13', '2018-03-13 00:19:24', '2018-03-13 00:19:24'),
(520, '54.183.165.74', '2018-03-13', '2018-03-13 00:24:50', '2018-03-13 00:24:50'),
(521, '66.249.64.29', '2018-03-13', '2018-03-13 02:00:56', '2018-03-13 02:00:56'),
(522, '66.249.70.8', '2018-03-13', '2018-03-13 02:02:57', '2018-03-13 02:02:57'),
(523, '66.249.64.30', '2018-03-13', '2018-03-13 02:08:13', '2018-03-13 02:08:13'),
(524, '66.249.70.10', '2018-03-13', '2018-03-13 04:32:00', '2018-03-13 04:32:00'),
(525, '5.45.203.4', '2018-03-13', '2018-03-13 06:13:01', '2018-03-13 06:13:01'),
(526, '66.249.70.12', '2018-03-13', '2018-03-13 06:29:19', '2018-03-13 06:29:19'),
(527, '181.50.101.213', '2018-03-13', '2018-03-13 08:57:47', '2018-03-13 08:57:47'),
(528, '181.51.178.224', '2018-03-13', '2018-03-13 12:57:37', '2018-03-13 12:57:37'),
(529, '2.139.234.101', '2018-03-13', '2018-03-13 13:14:20', '2018-03-13 13:14:20'),
(530, '66.249.66.88', '2018-03-13', '2018-03-13 14:59:56', '2018-03-13 14:59:56'),
(531, '66.249.66.87', '2018-03-13', '2018-03-13 15:48:41', '2018-03-13 15:48:41'),
(532, '5.255.251.9', '2018-03-13', '2018-03-13 17:11:46', '2018-03-13 17:11:46'),
(533, '66.249.66.86', '2018-03-13', '2018-03-13 18:24:47', '2018-03-13 18:24:47'),
(534, '66.249.66.89', '2018-03-13', '2018-03-13 18:47:30', '2018-03-13 18:47:30'),
(535, '181.243.163.52', '2018-03-13', '2018-03-13 20:16:28', '2018-03-13 20:16:28'),
(536, '66.249.66.89', '2018-03-14', '2018-03-14 00:01:30', '2018-03-14 00:01:30'),
(537, '66.249.66.87', '2018-03-14', '2018-03-14 00:05:18', '2018-03-14 00:05:18'),
(538, '66.249.66.88', '2018-03-14', '2018-03-14 00:12:51', '2018-03-14 00:12:51'),
(539, '5.45.203.4', '2018-03-14', '2018-03-14 02:23:37', '2018-03-14 02:23:37'),
(540, '66.249.66.202', '2018-03-14', '2018-03-14 13:59:10', '2018-03-14 13:59:10'),
(541, '66.249.66.86', '2018-03-14', '2018-03-14 17:57:54', '2018-03-14 17:57:54'),
(542, '181.51.79.208', '2018-03-14', '2018-03-14 23:32:48', '2018-03-14 23:32:48'),
(543, '66.249.66.88', '2018-03-15', '2018-03-15 00:26:22', '2018-03-15 00:26:22'),
(544, '5.255.251.9', '2018-03-15', '2018-03-15 00:54:45', '2018-03-15 00:54:45'),
(545, '66.249.66.89', '2018-03-15', '2018-03-15 01:50:41', '2018-03-15 01:50:41'),
(546, '5.255.251.8', '2018-03-15', '2018-03-15 04:36:08', '2018-03-15 04:36:08'),
(547, '5.45.203.19', '2018-03-15', '2018-03-15 04:58:50', '2018-03-15 04:58:50'),
(548, '141.8.141.134', '2018-03-15', '2018-03-15 04:59:36', '2018-03-15 04:59:36'),
(549, '66.249.66.87', '2018-03-15', '2018-03-15 09:52:17', '2018-03-15 09:52:17'),
(550, '181.50.101.213', '2018-03-15', '2018-03-15 10:37:31', '2018-03-15 10:37:31'),
(551, '181.62.253.82', '2018-03-15', '2018-03-15 11:18:10', '2018-03-15 11:18:10'),
(552, '181.51.178.224', '2018-03-15', '2018-03-15 15:54:07', '2018-03-15 15:54:07'),
(553, '190.127.234.85', '2018-03-15', '2018-03-15 18:08:28', '2018-03-15 18:08:28'),
(554, '186.28.206.44', '2018-03-15', '2018-03-15 20:20:57', '2018-03-15 20:20:57'),
(555, '87.250.224.106', '2018-03-15', '2018-03-15 20:35:34', '2018-03-15 20:35:34'),
(556, '5.45.203.4', '2018-03-16', '2018-03-16 01:20:15', '2018-03-16 01:20:15'),
(557, '190.130.65.113', '2018-03-16', '2018-03-16 10:00:29', '2018-03-16 10:00:29'),
(558, '181.50.101.213', '2018-03-16', '2018-03-16 10:04:27', '2018-03-16 10:04:27'),
(559, '191.102.238.16', '2018-03-16', '2018-03-16 10:43:09', '2018-03-16 10:43:09'),
(560, '66.249.66.89', '2018-03-16', '2018-03-16 10:50:27', '2018-03-16 10:50:27'),
(561, '66.249.66.88', '2018-03-16', '2018-03-16 10:54:03', '2018-03-16 10:54:03'),
(562, '201.216.4.3', '2018-03-16', '2018-03-16 11:13:49', '2018-03-16 11:13:49'),
(563, '141.8.141.129', '2018-03-16', '2018-03-16 11:28:19', '2018-03-16 11:28:19'),
(564, '66.249.66.86', '2018-03-16', '2018-03-16 12:33:56', '2018-03-16 12:33:56'),
(565, '5.45.203.6', '2018-03-16', '2018-03-16 12:41:06', '2018-03-16 12:41:06'),
(566, '141.8.141.138', '2018-03-16', '2018-03-16 12:41:10', '2018-03-16 12:41:10'),
(567, '138.122.193.204', '2018-03-16', '2018-03-16 15:36:58', '2018-03-16 15:36:58'),
(568, '141.8.141.132', '2018-03-16', '2018-03-16 15:38:29', '2018-03-16 15:38:29'),
(569, '66.249.66.87', '2018-03-17', '2018-03-17 05:21:14', '2018-03-17 05:21:14'),
(570, '66.249.66.88', '2018-03-17', '2018-03-17 05:30:08', '2018-03-17 05:30:08'),
(571, '66.249.66.89', '2018-03-17', '2018-03-17 07:36:41', '2018-03-17 07:36:41'),
(572, '66.249.66.86', '2018-03-17', '2018-03-17 07:42:48', '2018-03-17 07:42:48'),
(573, '186.0.57.159', '2018-03-17', '2018-03-17 11:19:14', '2018-03-17 11:19:14'),
(574, '186.0.57.159, 66.249.88.91', '2018-03-17', '2018-03-17 11:28:32', '2018-03-17 11:28:32'),
(575, '186.0.57.159, 66.249.80.61', '2018-03-17', '2018-03-17 11:28:32', '2018-03-17 11:28:32'),
(576, '191.64.13.170', '2018-03-17', '2018-03-17 12:08:05', '2018-03-17 12:08:05'),
(577, '181.50.101.213', '2018-03-17', '2018-03-17 12:08:31', '2018-03-17 12:08:31'),
(578, '181.51.178.224', '2018-03-17', '2018-03-17 21:39:44', '2018-03-17 21:39:44'),
(579, '87.250.244.1', '2018-03-17', '2018-03-17 22:06:38', '2018-03-17 22:06:38'),
(580, '66.249.66.87', '2018-03-18', '2018-03-18 01:25:41', '2018-03-18 01:25:41'),
(581, '66.249.66.88', '2018-03-18', '2018-03-18 01:29:30', '2018-03-18 01:29:30'),
(582, '66.249.66.89', '2018-03-18', '2018-03-18 01:40:48', '2018-03-18 01:40:48'),
(583, '66.249.66.86', '2018-03-18', '2018-03-18 02:03:30', '2018-03-18 02:03:30'),
(584, '186.0.57.159, 66.249.88.89', '2018-03-18', '2018-03-18 11:33:17', '2018-03-18 11:33:17'),
(585, '181.33.129.128', '2018-03-18', '2018-03-18 15:05:39', '2018-03-18 15:05:39'),
(586, '181.50.101.213', '2018-03-18', '2018-03-18 19:59:58', '2018-03-18 19:59:58'),
(587, '173.252.108.114', '2018-03-18', '2018-03-18 20:49:34', '2018-03-18 20:49:34'),
(588, '173.252.124.58', '2018-03-18', '2018-03-18 20:49:36', '2018-03-18 20:49:36'),
(589, '66.249.66.86', '2018-03-19', '2018-03-19 04:18:15', '2018-03-19 04:18:15'),
(590, '66.249.66.88', '2018-03-19', '2018-03-19 04:25:01', '2018-03-19 04:25:01'),
(591, '66.249.66.87', '2018-03-19', '2018-03-19 04:28:44', '2018-03-19 04:28:44'),
(592, '36.81.50.226', '2018-03-19', '2018-03-19 04:30:27', '2018-03-19 04:30:27'),
(593, '66.249.66.89', '2018-03-19', '2018-03-19 07:41:48', '2018-03-19 07:41:48'),
(594, '37.72.18.130', '2018-03-19', '2018-03-19 10:03:14', '2018-03-19 10:03:14'),
(595, '181.50.101.213', '2018-03-19', '2018-03-19 10:06:15', '2018-03-19 10:06:15'),
(596, '186.0.57.159, 66.249.83.88', '2018-03-19', '2018-03-19 11:35:45', '2018-03-19 11:35:45'),
(597, '5.45.203.17', '2018-03-19', '2018-03-19 15:11:30', '2018-03-19 15:11:30'),
(598, '77.88.9.134', '2018-03-19', '2018-03-19 15:11:30', '2018-03-19 15:11:30'),
(599, '87.250.233.66', '2018-03-19', '2018-03-19 17:51:52', '2018-03-19 17:51:52'),
(600, '5.45.203.1', '2018-03-19', '2018-03-19 17:51:54', '2018-03-19 17:51:54'),
(601, '5.255.251.9', '2018-03-19', '2018-03-19 17:53:56', '2018-03-19 17:53:56'),
(602, '141.8.141.134', '2018-03-19', '2018-03-19 17:53:56', '2018-03-19 17:53:56'),
(603, '141.8.141.138', '2018-03-19', '2018-03-19 18:14:21', '2018-03-19 18:14:21'),
(604, '141.8.141.137', '2018-03-19', '2018-03-19 18:16:25', '2018-03-19 18:16:25'),
(605, '87.250.233.77', '2018-03-19', '2018-03-19 18:16:25', '2018-03-19 18:16:25'),
(606, '5.45.203.11', '2018-03-19', '2018-03-19 18:40:07', '2018-03-19 18:40:07');
INSERT INTO `visitas` (`id`, `visitas_ip`, `visitas_fecha`, `created_at`, `updated_at`) VALUES
(607, '181.51.178.224', '2018-03-19', '2018-03-19 18:49:55', '2018-03-19 18:49:55'),
(608, '5.45.203.18', '2018-03-19', '2018-03-19 19:01:11', '2018-03-19 19:01:11'),
(609, '5.45.203.19', '2018-03-19', '2018-03-19 19:01:11', '2018-03-19 19:01:11'),
(610, '87.250.233.68', '2018-03-19', '2018-03-19 19:03:17', '2018-03-19 19:03:17'),
(611, '141.8.141.133', '2018-03-19', '2018-03-19 19:03:17', '2018-03-19 19:03:17'),
(612, '141.8.141.132', '2018-03-19', '2018-03-19 19:23:23', '2018-03-19 19:23:23'),
(613, '87.250.244.7', '2018-03-19', '2018-03-19 19:23:23', '2018-03-19 19:23:23'),
(614, '87.250.233.73', '2018-03-19', '2018-03-19 19:25:26', '2018-03-19 19:25:26'),
(615, '5.45.203.16', '2018-03-19', '2018-03-19 19:25:26', '2018-03-19 19:25:26'),
(616, '5.45.203.8', '2018-03-19', '2018-03-19 20:39:51', '2018-03-19 20:39:51'),
(617, '5.255.251.8', '2018-03-19', '2018-03-19 20:39:55', '2018-03-19 20:39:55'),
(618, '141.8.141.135', '2018-03-19', '2018-03-19 20:41:56', '2018-03-19 20:41:56'),
(619, '5.255.251.15', '2018-03-19', '2018-03-19 20:41:56', '2018-03-19 20:41:56'),
(620, '5.45.203.3', '2018-03-19', '2018-03-19 20:41:58', '2018-03-19 20:41:58'),
(621, '141.8.141.129', '2018-03-19', '2018-03-19 21:08:57', '2018-03-19 21:08:57'),
(622, '5.45.203.6', '2018-03-19', '2018-03-19 21:08:57', '2018-03-19 21:08:57'),
(623, '77.88.9.132', '2018-03-19', '2018-03-19 21:33:38', '2018-03-19 21:33:38'),
(624, '87.250.244.10', '2018-03-19', '2018-03-19 21:33:42', '2018-03-19 21:33:42'),
(625, '66.249.66.86', '2018-03-20', '2018-03-20 01:50:44', '2018-03-20 01:50:44'),
(626, '66.249.66.87', '2018-03-20', '2018-03-20 06:24:10', '2018-03-20 06:24:10'),
(627, '181.50.101.213', '2018-03-20', '2018-03-20 11:09:51', '2018-03-20 11:09:51'),
(628, '5.45.203.4', '2018-03-20', '2018-03-20 12:17:56', '2018-03-20 12:17:56'),
(629, '181.51.178.224', '2018-03-20', '2018-03-20 14:58:41', '2018-03-20 14:58:41'),
(630, '5.255.251.9', '2018-03-20', '2018-03-20 17:29:10', '2018-03-20 17:29:10'),
(631, '190.130.65.50', '2018-03-20', '2018-03-20 17:55:08', '2018-03-20 17:55:08'),
(632, '66.249.66.88', '2018-03-20', '2018-03-20 19:17:57', '2018-03-20 19:17:57'),
(633, '66.249.66.87', '2018-03-21', '2018-03-21 00:02:36', '2018-03-21 00:02:36'),
(634, '66.249.66.88', '2018-03-21', '2018-03-21 00:06:23', '2018-03-21 00:06:23'),
(635, '66.249.66.86', '2018-03-21', '2018-03-21 00:36:39', '2018-03-21 00:36:39'),
(636, '181.50.101.213', '2018-03-21', '2018-03-21 11:18:51', '2018-03-21 11:18:51'),
(637, '186.81.131.157', '2018-03-21', '2018-03-21 15:42:37', '2018-03-21 15:42:37'),
(638, '5.45.203.4', '2018-03-21', '2018-03-21 16:38:53', '2018-03-21 16:38:53'),
(639, '186.82.5.73', '2018-03-21', '2018-03-21 19:38:32', '2018-03-21 19:38:32'),
(640, '181.51.178.224', '2018-03-21', '2018-03-21 19:49:27', '2018-03-21 19:49:27'),
(641, '66.249.66.89', '2018-03-21', '2018-03-21 22:31:28', '2018-03-21 22:31:28'),
(642, '34.217.79.216', '2018-03-21', '2018-03-21 23:13:59', '2018-03-21 23:13:59'),
(643, '66.249.66.88', '2018-03-22', '2018-03-22 04:20:49', '2018-03-22 04:20:49'),
(644, '66.249.66.86', '2018-03-22', '2018-03-22 05:47:00', '2018-03-22 05:47:00'),
(645, '181.51.178.224', '2018-03-22', '2018-03-22 07:40:30', '2018-03-22 07:40:30'),
(646, '5.255.251.9', '2018-03-22', '2018-03-22 13:04:11', '2018-03-22 13:04:11'),
(647, '5.45.203.4', '2018-03-22', '2018-03-22 13:04:11', '2018-03-22 13:04:11'),
(648, '66.249.66.87', '2018-03-22', '2018-03-22 13:21:10', '2018-03-22 13:21:10'),
(649, '181.33.194.154', '2018-03-22', '2018-03-22 14:53:16', '2018-03-22 14:53:16'),
(650, '66.249.66.89', '2018-03-22', '2018-03-22 16:48:22', '2018-03-22 16:48:22'),
(651, '190.207.134.228', '2018-03-22', '2018-03-22 17:00:50', '2018-03-22 17:00:50'),
(652, '201.216.4.3', '2018-03-22', '2018-03-22 17:16:19', '2018-03-22 17:16:19'),
(653, '66.249.66.87', '2018-03-23', '2018-03-23 00:24:03', '2018-03-23 00:24:03'),
(654, '66.249.66.88', '2018-03-23', '2018-03-23 00:25:05', '2018-03-23 00:25:05'),
(655, '66.249.66.89', '2018-03-23', '2018-03-23 01:02:43', '2018-03-23 01:02:43'),
(656, '66.249.66.86', '2018-03-23', '2018-03-23 08:14:44', '2018-03-23 08:14:44'),
(657, '181.51.178.224', '2018-03-23', '2018-03-23 08:16:09', '2018-03-23 08:16:09'),
(658, '181.50.101.213', '2018-03-23', '2018-03-23 09:17:16', '2018-03-23 09:17:16'),
(659, '181.188.140.148', '2018-03-23', '2018-03-23 14:22:43', '2018-03-23 14:22:43'),
(660, '66.249.66.89', '2018-03-24', '2018-03-24 00:24:38', '2018-03-24 00:24:38'),
(661, '66.249.66.87', '2018-03-24', '2018-03-24 00:25:48', '2018-03-24 00:25:48'),
(662, '66.249.66.88', '2018-03-24', '2018-03-24 00:46:55', '2018-03-24 00:46:55'),
(663, '66.249.66.86', '2018-03-24', '2018-03-24 08:43:39', '2018-03-24 08:43:39'),
(664, '5.45.203.4', '2018-03-24', '2018-03-24 08:51:08', '2018-03-24 08:51:08'),
(665, '5.255.251.9', '2018-03-24', '2018-03-24 08:51:08', '2018-03-24 08:51:08'),
(666, '191.102.208.48', '2018-03-24', '2018-03-24 09:47:01', '2018-03-24 09:47:01'),
(667, '186.82.5.73', '2018-03-24', '2018-03-24 10:43:40', '2018-03-24 10:43:40'),
(668, '186.81.131.157', '2018-03-24', '2018-03-24 13:36:20', '2018-03-24 13:36:20'),
(669, '66.249.66.86', '2018-03-25', '2018-03-25 03:59:08', '2018-03-25 03:59:08'),
(670, '66.249.66.88', '2018-03-25', '2018-03-25 06:20:16', '2018-03-25 06:20:16'),
(671, '66.249.66.89', '2018-03-25', '2018-03-25 06:46:41', '2018-03-25 06:46:41'),
(672, '66.249.66.87', '2018-03-25', '2018-03-25 06:50:29', '2018-03-25 06:50:29'),
(673, '5.255.253.23', '2018-03-25', '2018-03-25 14:17:45', '2018-03-25 14:17:45'),
(674, '66.249.66.87', '2018-03-26', '2018-03-26 02:00:25', '2018-03-26 02:00:25'),
(675, '66.249.66.88', '2018-03-26', '2018-03-26 02:01:18', '2018-03-26 02:01:18'),
(676, '66.249.66.89', '2018-03-26', '2018-03-26 03:26:54', '2018-03-26 03:26:54'),
(677, '173.252.124.220', '2018-03-26', '2018-03-26 05:50:42', '2018-03-26 05:50:42'),
(678, '173.252.124.81', '2018-03-26', '2018-03-26 05:50:43', '2018-03-26 05:50:43'),
(679, '173.252.98.217', '2018-03-26', '2018-03-26 05:50:44', '2018-03-26 05:50:44'),
(680, '173.252.100.194', '2018-03-26', '2018-03-26 05:50:44', '2018-03-26 05:50:44'),
(681, '173.252.114.115', '2018-03-26', '2018-03-26 05:50:45', '2018-03-26 05:50:45'),
(682, '173.252.99.186', '2018-03-26', '2018-03-26 05:50:45', '2018-03-26 05:50:45'),
(683, '66.249.64.22', '2018-03-26', '2018-03-26 06:55:08', '2018-03-26 06:55:08'),
(684, '66.249.64.30', '2018-03-26', '2018-03-26 08:16:19', '2018-03-26 08:16:19'),
(685, '66.249.64.21', '2018-03-26', '2018-03-26 08:48:58', '2018-03-26 08:48:58'),
(686, '66.249.64.29', '2018-03-26', '2018-03-26 11:12:58', '2018-03-26 11:12:58'),
(687, '66.249.64.20', '2018-03-26', '2018-03-26 11:39:27', '2018-03-26 11:39:27'),
(688, '5.255.251.9', '2018-03-26', '2018-03-26 12:47:13', '2018-03-26 12:47:13'),
(689, '5.45.203.4', '2018-03-26', '2018-03-26 12:47:14', '2018-03-26 12:47:14'),
(690, '66.249.64.28', '2018-03-26', '2018-03-26 12:56:02', '2018-03-26 12:56:02'),
(691, '181.55.60.184', '2018-03-26', '2018-03-26 16:10:01', '2018-03-26 16:10:01'),
(692, '192.241.99.162', '2018-03-26', '2018-03-26 23:19:10', '2018-03-26 23:19:10'),
(693, '93.119.227.90', '2018-03-26', '2018-03-26 23:19:18', '2018-03-26 23:19:18'),
(694, '66.249.64.22', '2018-03-27', '2018-03-27 00:01:01', '2018-03-27 00:01:01'),
(695, '66.249.64.21', '2018-03-27', '2018-03-27 00:04:46', '2018-03-27 00:04:46'),
(696, '66.249.64.20', '2018-03-27', '2018-03-27 00:23:44', '2018-03-27 00:23:44'),
(697, '181.51.178.224', '2018-03-27', '2018-03-27 07:26:10', '2018-03-27 07:26:10'),
(698, '66.249.64.29', '2018-03-27', '2018-03-27 11:09:47', '2018-03-27 11:09:47'),
(699, '66.249.64.30', '2018-03-27', '2018-03-27 12:10:32', '2018-03-27 12:10:32'),
(700, '66.249.64.28', '2018-03-27', '2018-03-27 12:46:42', '2018-03-27 12:46:42'),
(701, '66.249.64.5', '2018-03-27', '2018-03-27 14:18:45', '2018-03-27 14:18:45'),
(702, '66.249.64.3', '2018-03-27', '2018-03-27 14:18:56', '2018-03-27 14:18:56'),
(703, '66.249.64.1', '2018-03-27', '2018-03-27 14:45:15', '2018-03-27 14:45:15'),
(704, '181.50.101.213', '2018-03-27', '2018-03-27 14:53:20', '2018-03-27 14:53:20'),
(705, '35.153.86.156', '2018-03-27', '2018-03-27 14:58:09', '2018-03-27 14:58:09'),
(706, '66.249.64.22', '2018-03-28', '2018-03-28 00:31:52', '2018-03-28 00:31:52'),
(707, '66.249.64.20', '2018-03-28', '2018-03-28 00:34:02', '2018-03-28 00:34:02'),
(708, '66.249.64.29', '2018-03-28', '2018-03-28 00:42:47', '2018-03-28 00:42:47'),
(709, '66.249.64.30', '2018-03-28', '2018-03-28 00:46:35', '2018-03-28 00:46:35'),
(710, '66.249.64.21', '2018-03-28', '2018-03-28 00:48:29', '2018-03-28 00:48:29'),
(711, '66.249.64.28', '2018-03-28', '2018-03-28 01:15:07', '2018-03-28 01:15:07'),
(712, '77.88.9.134', '2018-03-28', '2018-03-28 09:07:46', '2018-03-28 09:07:46'),
(713, '5.45.203.19', '2018-03-28', '2018-03-28 09:07:46', '2018-03-28 09:07:46'),
(714, '181.51.178.224', '2018-03-28', '2018-03-28 19:23:29', '2018-03-28 19:23:29'),
(715, '66.249.66.88', '2018-03-29', '2018-03-29 10:29:20', '2018-03-29 10:29:20'),
(716, '66.249.66.89', '2018-03-29', '2018-03-29 16:08:05', '2018-03-29 16:08:05'),
(717, '66.249.66.86', '2018-03-29', '2018-03-29 16:09:03', '2018-03-29 16:09:03'),
(718, '66.249.66.87', '2018-03-29', '2018-03-29 16:45:43', '2018-03-29 16:45:43'),
(719, '66.249.66.87', '2018-03-30', '2018-03-30 00:01:24', '2018-03-30 00:01:24'),
(720, '66.249.66.88', '2018-03-30', '2018-03-30 00:02:53', '2018-03-30 00:02:53'),
(721, '66.249.66.86', '2018-03-30', '2018-03-30 01:23:42', '2018-03-30 01:23:42'),
(722, '66.249.66.89', '2018-03-30', '2018-03-30 01:26:06', '2018-03-30 01:26:06'),
(723, '5.255.251.9', '2018-03-30', '2018-03-30 04:24:27', '2018-03-30 04:24:27'),
(724, '5.45.203.4', '2018-03-30', '2018-03-30 05:06:01', '2018-03-30 05:06:01'),
(725, '66.249.66.89', '2018-03-31', '2018-03-31 06:50:26', '2018-03-31 06:50:26'),
(726, '66.249.66.87', '2018-03-31', '2018-03-31 06:50:27', '2018-03-31 06:50:27'),
(727, '66.249.66.86', '2018-03-31', '2018-03-31 06:50:28', '2018-03-31 06:50:28'),
(728, '66.249.66.88', '2018-03-31', '2018-03-31 06:50:29', '2018-03-31 06:50:29'),
(729, '66.249.66.87', '2018-04-01', '2018-04-01 03:22:33', '2018-04-01 03:22:33'),
(730, '66.249.66.88', '2018-04-01', '2018-04-01 03:22:38', '2018-04-01 03:22:38'),
(731, '66.249.66.86', '2018-04-01', '2018-04-01 03:22:44', '2018-04-01 03:22:44'),
(732, '66.249.66.89', '2018-04-01', '2018-04-01 03:24:03', '2018-04-01 03:24:03'),
(733, '5.45.203.4', '2018-04-01', '2018-04-01 08:32:44', '2018-04-01 08:32:44'),
(734, '5.255.251.9', '2018-04-01', '2018-04-01 08:32:44', '2018-04-01 08:32:44'),
(735, '186.82.6.61', '2018-04-01', '2018-04-01 08:41:16', '2018-04-01 08:41:16'),
(736, '201.216.4.3', '2018-04-01', '2018-04-01 11:55:15', '2018-04-01 11:55:15'),
(737, '66.249.73.208', '2018-04-01', '2018-04-01 13:25:52', '2018-04-01 13:25:52'),
(738, '66.249.65.121', '2018-04-01', '2018-04-01 17:28:01', '2018-04-01 17:28:01'),
(739, '66.249.73.210', '2018-04-01', '2018-04-01 17:35:34', '2018-04-01 17:35:34'),
(740, '66.249.65.125', '2018-04-01', '2018-04-01 17:43:08', '2018-04-01 17:43:08'),
(741, '66.249.65.123', '2018-04-01', '2018-04-01 17:58:16', '2018-04-01 17:58:16'),
(742, '66.249.73.212', '2018-04-01', '2018-04-01 18:05:50', '2018-04-01 18:05:50'),
(743, '66.249.65.125', '2018-04-02', '2018-04-02 00:01:32', '2018-04-02 00:01:32'),
(744, '66.249.73.210', '2018-04-02', '2018-04-02 00:05:19', '2018-04-02 00:05:19'),
(745, '66.249.65.123', '2018-04-02', '2018-04-02 00:24:14', '2018-04-02 00:24:14'),
(746, '66.249.73.212', '2018-04-02', '2018-04-02 00:28:04', '2018-04-02 00:28:04'),
(747, '66.249.65.121', '2018-04-02', '2018-04-02 01:02:05', '2018-04-02 01:02:05'),
(748, '66.249.73.208', '2018-04-02', '2018-04-02 03:18:46', '2018-04-02 03:18:46'),
(749, '5.45.203.4', '2018-04-02', '2018-04-02 09:25:13', '2018-04-02 09:25:13'),
(750, '181.51.178.224', '2018-04-02', '2018-04-02 16:31:51', '2018-04-02 16:31:51'),
(751, '66.249.73.221', '2018-04-02', '2018-04-02 16:33:10', '2018-04-02 16:33:10'),
(752, '66.249.73.222', '2018-04-02', '2018-04-02 16:44:31', '2018-04-02 16:44:31'),
(753, '66.249.73.220', '2018-04-02', '2018-04-02 16:59:38', '2018-04-02 16:59:38'),
(754, '66.249.66.88', '2018-04-03', '2018-04-03 05:06:07', '2018-04-03 05:06:07'),
(755, '66.249.66.87', '2018-04-03', '2018-04-03 05:09:50', '2018-04-03 05:09:50'),
(756, '66.249.66.89', '2018-04-03', '2018-04-03 05:13:36', '2018-04-03 05:13:36'),
(757, '5.255.251.9', '2018-04-03', '2018-04-03 11:15:56', '2018-04-03 11:15:56'),
(758, '5.45.203.4', '2018-04-03', '2018-04-03 11:15:56', '2018-04-03 11:15:56'),
(759, '181.51.178.224', '2018-04-03', '2018-04-03 16:23:31', '2018-04-03 16:23:31'),
(760, '173.252.92.118', '2018-04-03', '2018-04-03 16:37:45', '2018-04-03 16:37:45'),
(761, '173.252.91.252', '2018-04-03', '2018-04-03 16:37:45', '2018-04-03 16:37:45'),
(762, '69.171.240.22', '2018-04-03', '2018-04-03 16:37:46', '2018-04-03 16:37:46'),
(763, '173.252.92.182', '2018-04-03', '2018-04-03 16:38:14', '2018-04-03 16:38:14'),
(764, '69.171.228.118', '2018-04-03', '2018-04-03 16:38:15', '2018-04-03 16:38:15'),
(765, '173.252.88.7', '2018-04-03', '2018-04-03 16:38:51', '2018-04-03 16:38:51'),
(766, '173.252.121.115', '2018-04-03', '2018-04-03 16:41:40', '2018-04-03 16:41:40'),
(767, '173.252.115.40', '2018-04-03', '2018-04-03 16:41:42', '2018-04-03 16:41:42'),
(768, '173.252.85.199', '2018-04-03', '2018-04-03 17:15:44', '2018-04-03 17:15:44'),
(769, '173.252.91.253', '2018-04-03', '2018-04-03 17:15:48', '2018-04-03 17:15:48'),
(770, '66.220.151.93', '2018-04-03', '2018-04-03 17:15:48', '2018-04-03 17:15:48'),
(771, '69.171.224.213', '2018-04-03', '2018-04-03 17:15:53', '2018-04-03 17:15:53'),
(772, '173.252.99.55', '2018-04-03', '2018-04-03 17:16:19', '2018-04-03 17:16:19'),
(773, '173.252.85.225', '2018-04-03', '2018-04-03 17:16:22', '2018-04-03 17:16:22'),
(774, '173.252.85.53', '2018-04-03', '2018-04-03 17:16:27', '2018-04-03 17:16:27'),
(775, '69.171.225.84', '2018-04-03', '2018-04-03 17:17:21', '2018-04-03 17:17:21'),
(776, '31.13.113.198', '2018-04-03', '2018-04-03 17:17:24', '2018-04-03 17:17:24'),
(777, '173.252.92.241', '2018-04-03', '2018-04-03 17:17:25', '2018-04-03 17:17:25'),
(778, '173.252.84.87', '2018-04-03', '2018-04-03 17:17:25', '2018-04-03 17:17:25'),
(779, '31.13.125.218', '2018-04-03', '2018-04-03 17:17:53', '2018-04-03 17:17:53'),
(780, '66.220.156.57', '2018-04-03', '2018-04-03 17:17:54', '2018-04-03 17:17:54'),
(781, '173.252.122.55', '2018-04-03', '2018-04-03 17:17:55', '2018-04-03 17:17:55'),
(782, '173.252.98.115', '2018-04-03', '2018-04-03 18:00:27', '2018-04-03 18:00:27'),
(783, '66.220.151.90', '2018-04-03', '2018-04-03 18:00:28', '2018-04-03 18:00:28'),
(784, '69.63.188.202', '2018-04-03', '2018-04-03 18:00:58', '2018-04-03 18:00:58'),
(785, '69.171.225.159', '2018-04-03', '2018-04-03 18:00:58', '2018-04-03 18:00:58'),
(786, '173.252.92.117', '2018-04-03', '2018-04-03 18:04:52', '2018-04-03 18:04:52'),
(787, '66.220.157.226', '2018-04-03', '2018-04-03 18:07:27', '2018-04-03 18:07:27'),
(788, '66.220.156.21', '2018-04-03', '2018-04-03 19:10:19', '2018-04-03 19:10:19'),
(789, '173.252.122.60', '2018-04-03', '2018-04-03 19:10:21', '2018-04-03 19:10:21'),
(790, '69.171.225.70', '2018-04-03', '2018-04-03 19:10:27', '2018-04-03 19:10:27'),
(791, '35.173.237.102', '2018-04-03', '2018-04-03 19:11:01', '2018-04-03 19:11:01'),
(792, '179.50.60.123', '2018-04-03', '2018-04-03 19:18:20', '2018-04-03 19:18:20'),
(793, '31.13.113.194', '2018-04-03', '2018-04-03 20:10:55', '2018-04-03 20:10:55'),
(794, '31.13.124.84', '2018-04-03', '2018-04-03 20:10:55', '2018-04-03 20:10:55'),
(795, '173.252.100.194', '2018-04-03', '2018-04-03 20:17:51', '2018-04-03 20:17:51'),
(796, '173.252.98.113', '2018-04-03', '2018-04-03 20:17:51', '2018-04-03 20:17:51'),
(797, '181.50.101.213', '2018-04-03', '2018-04-03 21:31:33', '2018-04-03 21:31:33'),
(798, '181.54.69.244', '2018-04-03', '2018-04-03 22:45:09', '2018-04-03 22:45:09'),
(799, '66.220.146.182', '2018-04-03', '2018-04-03 22:47:21', '2018-04-03 22:47:21'),
(800, '31.13.113.195', '2018-04-03', '2018-04-03 22:47:25', '2018-04-03 22:47:25'),
(801, '173.252.92.115', '2018-04-03', '2018-04-03 22:47:25', '2018-04-03 22:47:25'),
(802, '173.252.115.7', '2018-04-03', '2018-04-03 22:47:26', '2018-04-03 22:47:26'),
(803, '31.13.124.55', '2018-04-03', '2018-04-03 22:47:54', '2018-04-03 22:47:54'),
(804, '31.13.114.80', '2018-04-03', '2018-04-03 22:47:55', '2018-04-03 22:47:55'),
(805, '173.252.124.122', '2018-04-03', '2018-04-03 22:47:56', '2018-04-03 22:47:56'),
(806, '190.90.72.25', '2018-04-03', '2018-04-03 23:02:29', '2018-04-03 23:02:29'),
(807, '190.115.226.7', '2018-04-03', '2018-04-03 23:03:13', '2018-04-03 23:03:13'),
(808, '190.5.206.202', '2018-04-03', '2018-04-03 23:03:24', '2018-04-03 23:03:24'),
(809, '52.12.116.50', '2018-04-03', '2018-04-03 23:43:33', '2018-04-03 23:43:33'),
(810, '181.53.184.101', '2018-04-04', '2018-04-04 01:14:46', '2018-04-04 01:14:46'),
(811, '181.51.178.224', '2018-04-04', '2018-04-04 05:33:14', '2018-04-04 05:33:14'),
(812, '152.200.130.25', '2018-04-04', '2018-04-04 07:52:15', '2018-04-04 07:52:15'),
(813, '173.252.115.166', '2018-04-04', '2018-04-04 10:02:34', '2018-04-04 10:02:34'),
(814, '173.252.115.11', '2018-04-04', '2018-04-04 10:02:40', '2018-04-04 10:02:40'),
(815, '173.252.86.87', '2018-04-04', '2018-04-04 10:11:57', '2018-04-04 10:11:57'),
(816, '31.13.113.194', '2018-04-04', '2018-04-04 10:12:23', '2018-04-04 10:12:23'),
(817, '66.220.156.55', '2018-04-04', '2018-04-04 10:12:28', '2018-04-04 10:12:28'),
(818, '173.252.99.55', '2018-04-04', '2018-04-04 10:12:28', '2018-04-04 10:12:28'),
(819, '173.252.114.119', '2018-04-04', '2018-04-04 10:12:57', '2018-04-04 10:12:57'),
(820, '31.13.113.82', '2018-04-04', '2018-04-04 10:12:57', '2018-04-04 10:12:57'),
(821, '66.220.152.138', '2018-04-04', '2018-04-04 10:13:03', '2018-04-04 10:13:03'),
(822, '138.0.90.120', '2018-04-04', '2018-04-04 12:20:07', '2018-04-04 12:20:07'),
(823, '66.249.69.61', '2018-04-04', '2018-04-04 17:06:24', '2018-04-04 17:06:24'),
(824, '66.220.149.28', '2018-04-04', '2018-04-04 17:55:59', '2018-04-04 17:55:59'),
(825, '31.13.114.115', '2018-04-04', '2018-04-04 17:56:04', '2018-04-04 17:56:04'),
(826, '173.252.98.24', '2018-04-04', '2018-04-04 17:56:04', '2018-04-04 17:56:04'),
(827, '31.13.113.193', '2018-04-04', '2018-04-04 17:56:06', '2018-04-04 17:56:06'),
(828, '31.13.125.204', '2018-04-04', '2018-04-04 17:56:34', '2018-04-04 17:56:34'),
(829, '173.252.89.194', '2018-04-04', '2018-04-04 17:56:34', '2018-04-04 17:56:34'),
(830, '31.13.124.80', '2018-04-04', '2018-04-04 17:56:35', '2018-04-04 17:56:35'),
(831, '181.63.228.5', '2018-04-04', '2018-04-04 19:48:21', '2018-04-04 19:48:21'),
(832, '181.50.101.213', '2018-04-04', '2018-04-04 20:04:55', '2018-04-04 20:04:55'),
(833, '173.252.124.65', '2018-04-04', '2018-04-04 20:24:26', '2018-04-04 20:24:26'),
(834, '66.249.66.86', '2018-04-04', '2018-04-04 20:38:12', '2018-04-04 20:38:12'),
(835, '66.249.66.87', '2018-04-04', '2018-04-04 20:49:32', '2018-04-04 20:49:32'),
(836, '66.249.66.88', '2018-04-04', '2018-04-04 21:00:54', '2018-04-04 21:00:54'),
(837, '190.242.79.252', '2018-04-04', '2018-04-04 22:12:42', '2018-04-04 22:12:42'),
(838, '66.249.66.89', '2018-04-04', '2018-04-04 22:12:46', '2018-04-04 22:12:46'),
(839, '104.236.14.60', '2018-04-04', '2018-04-04 23:06:43', '2018-04-04 23:06:43'),
(840, '66.249.66.87', '2018-04-05', '2018-04-05 00:06:17', '2018-04-05 00:06:17'),
(841, '66.249.66.88', '2018-04-05', '2018-04-05 00:13:51', '2018-04-05 00:13:51'),
(842, '66.249.66.86', '2018-04-05', '2018-04-05 00:21:25', '2018-04-05 00:21:25'),
(843, '66.249.66.89', '2018-04-05', '2018-04-05 00:25:13', '2018-04-05 00:25:13'),
(844, '5.45.203.4', '2018-04-05', '2018-04-05 12:06:13', '2018-04-05 12:06:13'),
(845, '5.255.251.8', '2018-04-05', '2018-04-05 12:06:13', '2018-04-05 12:06:13'),
(846, '181.51.178.224', '2018-04-05', '2018-04-05 15:31:40', '2018-04-05 15:31:40'),
(847, '69.171.240.214', '2018-04-05', '2018-04-05 15:34:02', '2018-04-05 15:34:02'),
(848, '69.171.240.16', '2018-04-05', '2018-04-05 15:34:05', '2018-04-05 15:34:05'),
(849, '173.252.98.115', '2018-04-05', '2018-04-05 15:34:06', '2018-04-05 15:34:06'),
(850, '173.252.84.91', '2018-04-05', '2018-04-05 15:34:06', '2018-04-05 15:34:06'),
(851, '69.171.225.82', '2018-04-05', '2018-04-05 15:34:37', '2018-04-05 15:34:37'),
(852, '173.252.124.79', '2018-04-05', '2018-04-05 15:34:38', '2018-04-05 15:34:38'),
(853, '173.252.124.213', '2018-04-05', '2018-04-05 15:34:38', '2018-04-05 15:34:38'),
(854, '66.249.66.86', '2018-04-06', '2018-04-06 03:24:55', '2018-04-06 03:24:55'),
(855, '66.249.66.87', '2018-04-06', '2018-04-06 05:30:37', '2018-04-06 05:30:37'),
(856, '66.249.66.89', '2018-04-06', '2018-04-06 06:34:52', '2018-04-06 06:34:52'),
(857, '66.249.66.88', '2018-04-06', '2018-04-06 06:34:58', '2018-04-06 06:34:58'),
(858, '181.51.178.224', '2018-04-06', '2018-04-06 08:22:33', '2018-04-06 08:22:33'),
(859, '173.252.124.203', '2018-04-06', '2018-04-06 17:30:31', '2018-04-06 17:30:31'),
(860, '66.220.156.56', '2018-04-06', '2018-04-06 17:30:35', '2018-04-06 17:30:35'),
(861, '66.220.151.208', '2018-04-06', '2018-04-06 17:30:35', '2018-04-06 17:30:35'),
(862, '66.220.148.171', '2018-04-06', '2018-04-06 17:30:36', '2018-04-06 17:30:36'),
(863, '66.220.151.242', '2018-04-06', '2018-04-06 17:31:06', '2018-04-06 17:31:06'),
(864, '173.252.85.219', '2018-04-06', '2018-04-06 17:31:07', '2018-04-06 17:31:07'),
(865, '173.252.95.31', '2018-04-06', '2018-04-06 17:31:07', '2018-04-06 17:31:07'),
(866, '66.249.66.88', '2018-04-07', '2018-04-07 02:34:21', '2018-04-07 02:34:21'),
(867, '66.249.66.86', '2018-04-07', '2018-04-07 02:38:04', '2018-04-07 02:38:04'),
(868, '66.249.66.87', '2018-04-07', '2018-04-07 02:41:51', '2018-04-07 02:41:51'),
(869, '66.249.66.89', '2018-04-07', '2018-04-07 03:57:32', '2018-04-07 03:57:32'),
(870, '181.51.178.224', '2018-04-07', '2018-04-07 07:54:42', '2018-04-07 07:54:42'),
(871, '66.220.149.20', '2018-04-07', '2018-04-07 08:24:48', '2018-04-07 08:24:48'),
(872, '66.220.151.177', '2018-04-07', '2018-04-07 08:24:51', '2018-04-07 08:24:51'),
(873, '31.13.114.53', '2018-04-07', '2018-04-07 08:24:52', '2018-04-07 08:24:52'),
(874, '173.252.92.209', '2018-04-07', '2018-04-07 08:24:52', '2018-04-07 08:24:52'),
(875, '173.252.124.209', '2018-04-07', '2018-04-07 08:25:22', '2018-04-07 08:25:22'),
(876, '66.220.157.229', '2018-04-07', '2018-04-07 08:25:23', '2018-04-07 08:25:23'),
(877, '66.220.155.246', '2018-04-07', '2018-04-07 08:25:24', '2018-04-07 08:25:24'),
(878, '66.220.146.184', '2018-04-07', '2018-04-07 08:45:21', '2018-04-07 08:45:21'),
(879, '173.252.124.58', '2018-04-07', '2018-04-07 08:45:27', '2018-04-07 08:45:27'),
(880, '173.252.98.116', '2018-04-07', '2018-04-07 08:45:27', '2018-04-07 08:45:27'),
(881, '173.252.99.19', '2018-04-07', '2018-04-07 08:45:28', '2018-04-07 08:45:28'),
(882, '66.220.156.148', '2018-04-07', '2018-04-07 08:46:01', '2018-04-07 08:46:01'),
(883, '173.252.98.82', '2018-04-07', '2018-04-07 08:46:03', '2018-04-07 08:46:03'),
(884, '173.252.123.135', '2018-04-07', '2018-04-07 08:46:03', '2018-04-07 08:46:03'),
(885, '5.255.251.9', '2018-04-07', '2018-04-07 09:23:50', '2018-04-07 09:23:50'),
(886, '5.45.203.4', '2018-04-07', '2018-04-07 09:23:50', '2018-04-07 09:23:50'),
(887, '66.249.64.28', '2018-04-07', '2018-04-07 12:35:55', '2018-04-07 12:35:55'),
(888, '66.249.64.30', '2018-04-07', '2018-04-07 12:39:38', '2018-04-07 12:39:38'),
(889, '66.249.70.10', '2018-04-07', '2018-04-07 12:47:14', '2018-04-07 12:47:14'),
(890, '66.249.70.12', '2018-04-07', '2018-04-07 12:51:01', '2018-04-07 12:51:01'),
(891, '66.249.64.29', '2018-04-07', '2018-04-07 12:54:46', '2018-04-07 12:54:46'),
(892, '66.249.70.8', '2018-04-07', '2018-04-07 13:13:41', '2018-04-07 13:13:41'),
(893, '181.50.101.213', '2018-04-07', '2018-04-07 15:53:21', '2018-04-07 15:53:21'),
(894, '173.252.127.9', '2018-04-07', '2018-04-07 15:54:26', '2018-04-07 15:54:26'),
(895, '186.22.22.51', '2018-04-07', '2018-04-07 18:02:39', '2018-04-07 18:02:39'),
(896, '200.83.42.191', '2018-04-07', '2018-04-07 18:50:27', '2018-04-07 18:50:27'),
(897, '186.82.5.73', '2018-04-07', '2018-04-07 19:02:29', '2018-04-07 19:02:29'),
(898, '186.82.4.16', '2018-04-07', '2018-04-07 19:21:21', '2018-04-07 19:21:21'),
(899, '66.249.70.8', '2018-04-08', '2018-04-08 05:18:54', '2018-04-08 05:18:54'),
(900, '201.244.233.45', '2018-04-08', '2018-04-08 08:23:57', '2018-04-08 08:23:57'),
(901, '66.249.70.10', '2018-04-08', '2018-04-08 08:45:42', '2018-04-08 08:45:42'),
(902, '159.203.125.41', '2018-04-08', '2018-04-08 10:33:12', '2018-04-08 10:33:12'),
(903, '181.51.178.224', '2018-04-08', '2018-04-08 11:45:14', '2018-04-08 11:45:14'),
(904, '66.220.148.165', '2018-04-08', '2018-04-08 12:08:58', '2018-04-08 12:08:58'),
(905, '173.252.92.212', '2018-04-08', '2018-04-08 12:09:01', '2018-04-08 12:09:01'),
(906, '173.252.85.50', '2018-04-08', '2018-04-08 12:09:02', '2018-04-08 12:09:02'),
(907, '173.252.92.246', '2018-04-08', '2018-04-08 12:09:02', '2018-04-08 12:09:02'),
(908, '173.252.124.215', '2018-04-08', '2018-04-08 12:09:34', '2018-04-08 12:09:34'),
(909, '69.171.225.24', '2018-04-08', '2018-04-08 12:09:35', '2018-04-08 12:09:35'),
(910, '173.252.124.72', '2018-04-08', '2018-04-08 12:09:37', '2018-04-08 12:09:37'),
(911, '5.45.203.4', '2018-04-08', '2018-04-08 12:23:34', '2018-04-08 12:23:34'),
(912, '190.156.31.174', '2018-04-08', '2018-04-08 13:20:58', '2018-04-08 13:20:58'),
(913, '181.51.178.224, 66.249.80.59', '2018-04-08', '2018-04-08 13:33:28', '2018-04-08 13:33:28'),
(914, '66.249.89.28', '2018-04-08', '2018-04-08 13:33:29', '2018-04-08 13:33:29'),
(915, '66.102.6.189', '2018-04-08', '2018-04-08 13:33:30', '2018-04-08 13:33:30'),
(916, '66.249.89.29', '2018-04-08', '2018-04-08 13:33:30', '2018-04-08 13:33:30'),
(917, '66.102.6.185', '2018-04-08', '2018-04-08 13:33:35', '2018-04-08 13:33:35'),
(918, '66.249.89.30', '2018-04-08', '2018-04-08 13:34:07', '2018-04-08 13:34:07'),
(919, '66.249.64.29', '2018-04-08', '2018-04-08 13:36:11', '2018-04-08 13:36:11'),
(920, '181.51.178.224, 66.249.80.57', '2018-04-08', '2018-04-08 13:38:03', '2018-04-08 13:38:03'),
(921, '66.249.88.19', '2018-04-08', '2018-04-08 13:38:09', '2018-04-08 13:38:09'),
(922, '181.51.178.224, 66.249.80.61', '2018-04-08', '2018-04-08 13:38:55', '2018-04-08 13:38:55'),
(923, '66.102.6.187', '2018-04-08', '2018-04-08 13:40:51', '2018-04-08 13:40:51'),
(924, '66.220.152.170', '2018-04-08', '2018-04-08 13:43:31', '2018-04-08 13:43:31'),
(925, '173.252.127.9', '2018-04-08', '2018-04-08 13:43:31', '2018-04-08 13:43:31'),
(926, '66.220.151.183', '2018-04-08', '2018-04-08 13:43:32', '2018-04-08 13:43:32'),
(927, '66.220.152.177', '2018-04-08', '2018-04-08 13:44:10', '2018-04-08 13:44:10'),
(928, '66.220.156.58', '2018-04-08', '2018-04-08 13:44:11', '2018-04-08 13:44:11'),
(929, '69.171.240.120', '2018-04-08', '2018-04-08 13:44:44', '2018-04-08 13:44:44'),
(930, '31.13.114.208', '2018-04-08', '2018-04-08 13:44:44', '2018-04-08 13:44:44'),
(931, '69.171.225.79', '2018-04-08', '2018-04-08 13:46:42', '2018-04-08 13:46:42'),
(932, '173.252.84.89', '2018-04-08', '2018-04-08 13:46:42', '2018-04-08 13:46:42'),
(933, '173.252.123.187', '2018-04-08', '2018-04-08 13:47:07', '2018-04-08 13:47:07'),
(934, '66.220.151.247', '2018-04-08', '2018-04-08 13:47:08', '2018-04-08 13:47:08'),
(935, '173.252.86.66', '2018-04-08', '2018-04-08 13:47:08', '2018-04-08 13:47:08'),
(936, '181.51.178.224, 66.102.7.242', '2018-04-08', '2018-04-08 13:47:43', '2018-04-08 13:47:43'),
(937, '66.249.89.43', '2018-04-08', '2018-04-08 13:47:44', '2018-04-08 13:47:44'),
(938, '66.249.89.45', '2018-04-08', '2018-04-08 13:47:45', '2018-04-08 13:47:45'),
(939, '66.249.89.41', '2018-04-08', '2018-04-08 13:47:46', '2018-04-08 13:47:46'),
(940, '66.102.6.172', '2018-04-08', '2018-04-08 13:47:50', '2018-04-08 13:47:50'),
(941, '66.102.6.168', '2018-04-08', '2018-04-08 13:47:50', '2018-04-08 13:47:50'),
(942, '173.252.92.209', '2018-04-08', '2018-04-08 13:48:07', '2018-04-08 13:48:07'),
(943, '69.171.225.80', '2018-04-08', '2018-04-08 13:48:07', '2018-04-08 13:48:07'),
(944, '173.252.84.92', '2018-04-08', '2018-04-08 13:48:41', '2018-04-08 13:48:41'),
(945, '173.252.91.166', '2018-04-08', '2018-04-08 13:48:42', '2018-04-08 13:48:42'),
(946, '69.171.240.16', '2018-04-08', '2018-04-08 13:48:42', '2018-04-08 13:48:42'),
(947, '66.220.156.182', '2018-04-08', '2018-04-08 13:49:11', '2018-04-08 13:49:11'),
(948, '173.252.124.74', '2018-04-08', '2018-04-08 13:49:11', '2018-04-08 13:49:11'),
(949, '173.252.115.168', '2018-04-08', '2018-04-08 13:49:12', '2018-04-08 13:49:12'),
(950, '66.249.64.28', '2018-04-08', '2018-04-08 15:22:58', '2018-04-08 15:22:58'),
(951, '66.249.66.86', '2018-04-08', '2018-04-08 15:37:49', '2018-04-08 15:37:49'),
(952, '66.249.66.88', '2018-04-08', '2018-04-08 16:54:49', '2018-04-08 16:54:49'),
(953, '66.249.66.89', '2018-04-08', '2018-04-08 16:59:44', '2018-04-08 16:59:44'),
(954, '66.249.66.87', '2018-04-08', '2018-04-08 18:59:51', '2018-04-08 18:59:51'),
(955, '181.50.101.213', '2018-04-08', '2018-04-08 20:37:06', '2018-04-08 20:37:06'),
(956, '66.249.66.88', '2018-04-09', '2018-04-09 02:07:41', '2018-04-09 02:07:41'),
(957, '66.249.66.87', '2018-04-09', '2018-04-09 02:10:16', '2018-04-09 02:10:16'),
(958, '104.236.57.108', '2018-04-09', '2018-04-09 04:00:51', '2018-04-09 04:00:51'),
(959, '104.236.50.117', '2018-04-09', '2018-04-09 04:16:50', '2018-04-09 04:16:50'),
(960, '181.51.178.224', '2018-04-09', '2018-04-09 05:34:14', '2018-04-09 05:34:14'),
(961, '191.102.236.27', '2018-04-09', '2018-04-09 10:50:32', '2018-04-09 10:50:32'),
(962, '5.45.203.4', '2018-04-09', '2018-04-09 11:22:10', '2018-04-09 11:22:10'),
(963, '5.45.203.4', '2018-04-09', '2018-04-09 11:22:10', '2018-04-09 11:22:10'),
(964, '181.51.178.224, 66.249.80.57', '2018-04-09', '2018-04-09 12:31:08', '2018-04-09 12:31:08'),
(965, '66.249.92.151', '2018-04-09', '2018-04-09 12:31:11', '2018-04-09 12:31:11'),
(966, '69.171.224.246', '2018-04-09', '2018-04-09 13:00:36', '2018-04-09 13:00:36'),
(967, '173.252.98.23', '2018-04-09', '2018-04-09 13:00:36', '2018-04-09 13:00:36'),
(968, '173.252.92.211', '2018-04-09', '2018-04-09 13:00:38', '2018-04-09 13:00:38'),
(969, '173.252.92.244', '2018-04-09', '2018-04-09 13:00:38', '2018-04-09 13:00:38'),
(970, '66.220.156.149', '2018-04-09', '2018-04-09 13:00:38', '2018-04-09 13:00:38'),
(971, '66.220.146.209', '2018-04-09', '2018-04-09 13:01:07', '2018-04-09 13:01:07'),
(972, '69.171.225.14', '2018-04-09', '2018-04-09 13:01:09', '2018-04-09 13:01:09'),
(973, '173.252.84.194', '2018-04-09', '2018-04-09 13:01:14', '2018-04-09 13:01:14'),
(974, '190.207.134.228', '2018-04-09', '2018-04-09 13:40:34', '2018-04-09 13:40:34'),
(975, '181.50.101.213', '2018-04-09', '2018-04-09 17:00:11', '2018-04-09 17:00:11'),
(976, '173.252.98.22', '2018-04-09', '2018-04-09 17:32:15', '2018-04-09 17:32:15'),
(977, '66.220.151.245', '2018-04-09', '2018-04-09 17:32:16', '2018-04-09 17:32:16'),
(978, '173.252.85.54', '2018-04-09', '2018-04-09 17:32:16', '2018-04-09 17:32:16'),
(979, '66.220.156.55', '2018-04-09', '2018-04-09 17:32:16', '2018-04-09 17:32:16'),
(980, '173.252.98.29', '2018-04-09', '2018-04-09 17:32:17', '2018-04-09 17:32:17'),
(981, '31.13.113.199', '2018-04-09', '2018-04-09 17:32:17', '2018-04-09 17:32:17'),
(982, '69.171.225.142', '2018-04-09', '2018-04-09 17:32:45', '2018-04-09 17:32:45'),
(983, '66.220.146.144', '2018-04-09', '2018-04-09 17:32:45', '2018-04-09 17:32:45'),
(984, '173.252.124.81', '2018-04-09', '2018-04-09 17:32:46', '2018-04-09 17:32:46'),
(985, '31.13.125.52', '2018-04-09', '2018-04-09 17:32:47', '2018-04-09 17:32:47'),
(986, '31.13.124.117', '2018-04-09', '2018-04-09 17:32:47', '2018-04-09 17:32:47'),
(987, '66.220.148.20', '2018-04-09', '2018-04-09 17:32:49', '2018-04-09 17:32:49'),
(988, '173.252.92.241', '2018-04-09', '2018-04-09 17:39:13', '2018-04-09 17:39:13'),
(989, '186.86.105.2', '2018-04-09', '2018-04-09 20:13:29', '2018-04-09 20:13:29'),
(990, '172.58.72.152', '2018-04-09', '2018-04-09 20:25:46', '2018-04-09 20:25:46'),
(991, '201.244.233.45', '2018-04-09', '2018-04-09 21:08:18', '2018-04-09 21:08:18'),
(992, '125.16.216.9', '2018-04-09', '2018-04-09 23:25:03', '2018-04-09 23:25:03'),
(993, '66.249.66.87', '2018-04-10', '2018-04-10 06:56:53', '2018-04-10 06:56:53'),
(994, '181.51.178.224', '2018-04-10', '2018-04-10 09:11:33', '2018-04-10 09:11:33'),
(995, '5.45.203.4', '2018-04-10', '2018-04-10 11:08:39', '2018-04-10 11:08:39'),
(996, '66.249.66.88', '2018-04-10', '2018-04-10 12:00:05', '2018-04-10 12:00:05'),
(997, '191.102.236.27', '2018-04-10', '2018-04-10 12:30:27', '2018-04-10 12:30:27'),
(998, '181.60.14.254', '2018-04-10', '2018-04-10 16:07:23', '2018-04-10 16:07:23'),
(999, '186.82.5.73', '2018-04-10', '2018-04-10 17:19:18', '2018-04-10 17:19:18'),
(1000, '186.81.8.234', '2018-04-10', '2018-04-10 17:59:24', '2018-04-10 17:59:24'),
(1001, '181.50.101.213', '2018-04-10', '2018-04-10 20:56:56', '2018-04-10 20:56:56'),
(1002, '181.54.42.211', '2018-04-11', '2018-04-11 07:02:49', '2018-04-11 07:02:49'),
(1003, '71.246.145.47', '2018-04-11', '2018-04-11 07:45:30', '2018-04-11 07:45:30'),
(1004, '66.249.66.87', '2018-04-11', '2018-04-11 08:10:09', '2018-04-11 08:10:09'),
(1005, '5.45.203.4', '2018-04-11', '2018-04-11 09:27:53', '2018-04-11 09:27:53'),
(1006, '5.45.203.4', '2018-04-11', '2018-04-11 09:27:53', '2018-04-11 09:27:53'),
(1007, '181.51.178.224', '2018-04-11', '2018-04-11 11:20:22', '2018-04-11 11:20:22'),
(1008, '181.51.178.224, 66.249.80.53', '2018-04-11', '2018-04-11 13:56:59', '2018-04-11 13:56:59'),
(1009, '66.249.92.151', '2018-04-11', '2018-04-11 13:57:00', '2018-04-11 13:57:00'),
(1010, '66.102.6.27', '2018-04-11', '2018-04-11 13:57:06', '2018-04-11 13:57:06'),
(1011, '66.102.6.25', '2018-04-11', '2018-04-11 13:58:47', '2018-04-11 13:58:47'),
(1012, '31.13.114.55', '2018-04-11', '2018-04-11 14:11:29', '2018-04-11 14:11:29'),
(1013, '69.171.240.87', '2018-04-11', '2018-04-11 14:11:29', '2018-04-11 14:11:29'),
(1014, '31.13.114.118', '2018-04-11', '2018-04-11 14:34:49', '2018-04-11 14:34:49'),
(1015, '69.63.188.222', '2018-04-11', '2018-04-11 14:35:23', '2018-04-11 14:35:23'),
(1016, '173.252.98.24', '2018-04-11', '2018-04-11 14:37:28', '2018-04-11 14:37:28'),
(1017, '191.146.175.121', '2018-04-11', '2018-04-11 14:38:21', '2018-04-11 14:38:21'),
(1018, '66.220.151.210', '2018-04-11', '2018-04-11 14:41:22', '2018-04-11 14:41:22'),
(1019, '173.252.90.166', '2018-04-11', '2018-04-11 14:41:54', '2018-04-11 14:41:54'),
(1020, '181.60.101.84', '2018-04-11', '2018-04-11 16:54:56', '2018-04-11 16:54:56'),
(1021, '190.158.26.104', '2018-04-11', '2018-04-11 17:59:38', '2018-04-11 17:59:38'),
(1022, '66.249.66.88', '2018-04-11', '2018-04-11 22:43:10', '2018-04-11 22:43:10'),
(1023, '66.249.66.89', '2018-04-11', '2018-04-11 23:34:30', '2018-04-11 23:34:30'),
(1024, '66.249.66.87', '2018-04-12', '2018-04-12 00:59:53', '2018-04-12 00:59:53'),
(1025, '66.249.66.86', '2018-04-12', '2018-04-12 04:48:43', '2018-04-12 04:48:43'),
(1026, '66.249.66.89', '2018-04-12', '2018-04-12 06:16:21', '2018-04-12 06:16:21'),
(1027, '66.249.66.88', '2018-04-12', '2018-04-12 06:20:13', '2018-04-12 06:20:13'),
(1028, '173.252.124.70', '2018-04-12', '2018-04-12 06:30:48', '2018-04-12 06:30:48'),
(1029, '186.82.5.73', '2018-04-12', '2018-04-12 10:03:50', '2018-04-12 10:03:50'),
(1030, '181.50.101.213', '2018-04-12', '2018-04-12 10:44:30', '2018-04-12 10:44:30'),
(1031, '181.51.178.224', '2018-04-12', '2018-04-12 11:20:24', '2018-04-12 11:20:24'),
(1032, '191.102.236.27', '2018-04-12', '2018-04-12 16:06:15', '2018-04-12 16:06:15'),
(1033, '66.249.66.86', '2018-04-13', '2018-04-13 02:22:34', '2018-04-13 02:22:34'),
(1034, '66.249.66.87', '2018-04-13', '2018-04-13 02:25:57', '2018-04-13 02:25:57'),
(1035, '66.249.66.89', '2018-04-13', '2018-04-13 02:32:45', '2018-04-13 02:32:45'),
(1036, '66.249.66.88', '2018-04-13', '2018-04-13 02:36:09', '2018-04-13 02:36:09'),
(1037, '181.51.178.224', '2018-04-13', '2018-04-13 08:26:30', '2018-04-13 08:26:30'),
(1038, '66.249.66.78', '2018-04-13', '2018-04-13 11:02:45', '2018-04-13 11:02:45'),
(1039, '5.45.203.4', '2018-04-13', '2018-04-13 11:03:59', '2018-04-13 11:03:59'),
(1040, '5.255.251.9', '2018-04-13', '2018-04-13 11:04:00', '2018-04-13 11:04:00'),
(1041, '181.134.86.162', '2018-04-13', '2018-04-13 14:14:37', '2018-04-13 14:14:37'),
(1042, '66.249.66.77', '2018-04-13', '2018-04-13 17:34:16', '2018-04-13 17:34:16'),
(1043, '173.252.124.198', '2018-04-13', '2018-04-13 22:34:26', '2018-04-13 22:34:26'),
(1044, '66.249.66.87', '2018-04-14', '2018-04-14 00:01:09', '2018-04-14 00:01:09'),
(1045, '66.249.66.86', '2018-04-14', '2018-04-14 00:03:57', '2018-04-14 00:03:57'),
(1046, '66.249.66.89', '2018-04-14', '2018-04-14 00:41:47', '2018-04-14 00:41:47'),
(1047, '66.249.66.88', '2018-04-14', '2018-04-14 00:53:09', '2018-04-14 00:53:09'),
(1048, '190.115.228.124', '2018-04-14', '2018-04-14 10:10:18', '2018-04-14 10:10:18'),
(1049, '156.0.212.32', '2018-04-14', '2018-04-14 15:27:45', '2018-04-14 15:27:45'),
(1050, '181.51.178.224', '2018-04-14', '2018-04-14 16:08:46', '2018-04-14 16:08:46'),
(1051, '181.137.209.4', '2018-04-14', '2018-04-14 19:57:39', '2018-04-14 19:57:39'),
(1052, '190.5.201.177', '2018-04-14', '2018-04-14 20:18:14', '2018-04-14 20:18:14'),
(1053, '66.249.79.125', '2018-04-14', '2018-04-14 21:18:31', '2018-04-14 21:18:31'),
(1054, '66.249.79.121', '2018-04-14', '2018-04-14 21:25:47', '2018-04-14 21:25:47'),
(1055, '66.249.79.123', '2018-04-14', '2018-04-14 21:29:25', '2018-04-14 21:29:25'),
(1056, '66.249.79.106', '2018-04-14', '2018-04-14 21:43:59', '2018-04-14 21:43:59'),
(1057, '66.249.79.104', '2018-04-14', '2018-04-14 22:02:07', '2018-04-14 22:02:07'),
(1058, '66.249.79.108', '2018-04-14', '2018-04-14 22:05:45', '2018-04-14 22:05:45'),
(1059, '66.249.79.108', '2018-04-15', '2018-04-15 00:02:01', '2018-04-15 00:02:01'),
(1060, '66.249.79.106', '2018-04-15', '2018-04-15 00:05:39', '2018-04-15 00:05:39'),
(1061, '66.249.79.123', '2018-04-15', '2018-04-15 03:40:13', '2018-04-15 03:40:13'),
(1062, '66.249.79.125', '2018-04-15', '2018-04-15 04:21:51', '2018-04-15 04:21:51'),
(1063, '66.249.79.121', '2018-04-15', '2018-04-15 04:25:37', '2018-04-15 04:25:37'),
(1064, '66.249.79.104', '2018-04-15', '2018-04-15 04:40:45', '2018-04-15 04:40:45'),
(1065, '5.45.203.4', '2018-04-15', '2018-04-15 11:47:03', '2018-04-15 11:47:03'),
(1066, '5.255.251.9', '2018-04-15', '2018-04-15 11:47:03', '2018-04-15 11:47:03'),
(1067, '181.51.178.224', '2018-04-15', '2018-04-15 14:33:28', '2018-04-15 14:33:28'),
(1068, '186.81.8.234', '2018-04-15', '2018-04-15 15:20:28', '2018-04-15 15:20:28'),
(1069, '66.249.66.86', '2018-04-15', '2018-04-15 17:50:53', '2018-04-15 17:50:53'),
(1070, '66.249.66.87', '2018-04-15', '2018-04-15 18:28:09', '2018-04-15 18:28:09'),
(1071, '66.249.66.89', '2018-04-15', '2018-04-15 20:34:34', '2018-04-15 20:34:34'),
(1072, '66.249.66.88', '2018-04-16', '2018-04-16 03:09:39', '2018-04-16 03:09:39'),
(1073, '87.218.206.74', '2018-04-16', '2018-04-16 04:43:50', '2018-04-16 04:43:50'),
(1074, '181.51.178.224', '2018-04-16', '2018-04-16 07:02:43', '2018-04-16 07:02:43'),
(1075, '173.252.98.81', '2018-04-16', '2018-04-16 11:16:08', '2018-04-16 11:16:08'),
(1076, '69.171.240.19', '2018-04-16', '2018-04-16 11:16:08', '2018-04-16 11:16:08'),
(1077, '66.220.151.210', '2018-04-16', '2018-04-16 11:16:09', '2018-04-16 11:16:09'),
(1078, '69.171.225.85', '2018-04-16', '2018-04-16 11:16:39', '2018-04-16 11:16:39'),
(1079, '69.63.188.222', '2018-04-16', '2018-04-16 11:16:41', '2018-04-16 11:16:41'),
(1080, '173.252.123.35', '2018-04-16', '2018-04-16 11:16:42', '2018-04-16 11:16:42'),
(1081, '190.5.203.202', '2018-04-16', '2018-04-16 14:42:02', '2018-04-16 14:42:02'),
(1082, '191.102.236.27', '2018-04-16', '2018-04-16 16:56:18', '2018-04-16 16:56:18'),
(1083, '66.249.66.94', '2018-04-16', '2018-04-16 16:59:24', '2018-04-16 16:59:24'),
(1084, '66.249.66.87', '2018-04-16', '2018-04-16 17:41:55', '2018-04-16 17:41:55'),
(1085, '186.85.230.4', '2018-04-16', '2018-04-16 19:29:46', '2018-04-16 19:29:46'),
(1086, '201.253.51.121', '2018-04-17', '2018-04-17 09:52:18', '2018-04-17 09:52:18'),
(1087, '181.51.178.224', '2018-04-17', '2018-04-17 10:12:29', '2018-04-17 10:12:29'),
(1088, '181.53.218.23', '2018-04-17', '2018-04-17 10:43:17', '2018-04-17 10:43:17'),
(1089, '181.50.101.213', '2018-04-17', '2018-04-17 11:00:17', '2018-04-17 11:00:17'),
(1090, '5.255.251.9', '2018-04-17', '2018-04-17 11:29:35', '2018-04-17 11:29:35'),
(1091, '5.45.203.4', '2018-04-17', '2018-04-17 11:29:35', '2018-04-17 11:29:35'),
(1092, '66.220.146.183', '2018-04-17', '2018-04-17 14:29:48', '2018-04-17 14:29:48'),
(1093, '66.249.66.88', '2018-04-17', '2018-04-17 14:33:20', '2018-04-17 14:33:20'),
(1094, '201.184.66.146', '2018-04-17', '2018-04-17 15:31:17', '2018-04-17 15:31:17'),
(1095, '181.60.101.84', '2018-04-17', '2018-04-17 16:47:34', '2018-04-17 16:47:34'),
(1096, '190.145.70.81', '2018-04-17', '2018-04-17 17:20:38', '2018-04-17 17:20:38'),
(1097, '66.249.66.89', '2018-04-17', '2018-04-17 17:25:58', '2018-04-17 17:25:58'),
(1098, '66.249.66.64', '2018-04-17', '2018-04-17 17:32:41', '2018-04-17 17:32:41'),
(1099, '66.249.66.87', '2018-04-17', '2018-04-17 20:03:51', '2018-04-17 20:03:51'),
(1100, '152.200.179.20', '2018-04-17', '2018-04-17 23:12:40', '2018-04-17 23:12:40'),
(1101, '66.249.66.86', '2018-04-18', '2018-04-18 00:55:45', '2018-04-18 00:55:45'),
(1102, '66.249.66.87', '2018-04-18', '2018-04-18 02:33:14', '2018-04-18 02:33:14'),
(1103, '66.249.66.88', '2018-04-18', '2018-04-18 03:07:43', '2018-04-18 03:07:43'),
(1104, '66.249.66.89', '2018-04-18', '2018-04-18 06:24:45', '2018-04-18 06:24:45'),
(1105, '181.51.178.224', '2018-04-18', '2018-04-18 08:21:13', '2018-04-18 08:21:13'),
(1106, '181.50.101.213', '2018-04-18', '2018-04-18 10:46:21', '2018-04-18 10:46:21'),
(1107, '191.102.236.27', '2018-04-18', '2018-04-18 16:53:58', '2018-04-18 16:53:58'),
(1108, '173.252.99.54', '2018-04-18', '2018-04-18 16:53:58', '2018-04-18 16:53:58'),
(1109, '181.53.218.23', '2018-04-18', '2018-04-18 17:50:53', '2018-04-18 17:50:53'),
(1110, '186.154.29.114', '2018-04-18', '2018-04-18 22:50:43', '2018-04-18 22:50:43'),
(1111, '66.249.66.87', '2018-04-19', '2018-04-19 00:30:17', '2018-04-19 00:30:17'),
(1112, '66.249.66.89', '2018-04-19', '2018-04-19 00:37:51', '2018-04-19 00:37:51'),
(1113, '66.249.66.88', '2018-04-19', '2018-04-19 02:58:31', '2018-04-19 02:58:31'),
(1114, '190.78.25.254', '2018-04-19', '2018-04-19 07:18:38', '2018-04-19 07:18:38'),
(1115, '181.51.178.224', '2018-04-19', '2018-04-19 10:26:59', '2018-04-19 10:26:59'),
(1116, '5.45.203.4', '2018-04-19', '2018-04-19 10:32:26', '2018-04-19 10:32:26'),
(1117, '190.142.76.208', '2018-04-19', '2018-04-19 11:36:20', '2018-04-19 11:36:20'),
(1118, '66.249.66.86', '2018-04-19', '2018-04-19 12:30:32', '2018-04-19 12:30:32'),
(1119, '200.82.242.115', '2018-04-19', '2018-04-19 13:09:23', '2018-04-19 13:09:23'),
(1120, '200.37.57.34', '2018-04-19', '2018-04-19 14:14:42', '2018-04-19 14:14:42'),
(1121, '186.167.251.35', '2018-04-19', '2018-04-19 14:37:43', '2018-04-19 14:37:43'),
(1122, '201.184.66.146', '2018-04-19', '2018-04-19 15:17:34', '2018-04-19 15:17:34'),
(1123, '201.184.66.146', '2018-04-19', '2018-04-19 15:17:34', '2018-04-19 15:17:34'),
(1124, '186.167.244.58', '2018-04-19', '2018-04-19 15:27:08', '2018-04-19 15:27:08'),
(1125, '186.82.5.73', '2018-04-19', '2018-04-19 16:12:30', '2018-04-19 16:12:30'),
(1126, '181.50.101.213', '2018-04-19', '2018-04-19 16:18:03', '2018-04-19 16:18:03'),
(1127, '190.5.157.119', '2018-04-19', '2018-04-19 16:28:27', '2018-04-19 16:28:27'),
(1128, '172.58.62.244', '2018-04-19', '2018-04-19 16:49:30', '2018-04-19 16:49:30'),
(1129, '189.218.21.185', '2018-04-19', '2018-04-19 17:08:27', '2018-04-19 17:08:27'),
(1130, '200.122.225.25', '2018-04-19', '2018-04-19 17:23:09', '2018-04-19 17:23:09'),
(1131, '201.209.148.58', '2018-04-19', '2018-04-19 17:53:07', '2018-04-19 17:53:07'),
(1132, '190.236.198.131', '2018-04-19', '2018-04-19 19:57:38', '2018-04-19 19:57:38'),
(1133, '190.53.96.243', '2018-04-19', '2018-04-19 20:20:56', '2018-04-19 20:20:56'),
(1134, '173.252.98.27', '2018-04-19', '2018-04-19 20:41:06', '2018-04-19 20:41:06'),
(1135, '186.146.141.167', '2018-04-19', '2018-04-19 20:41:07', '2018-04-19 20:41:07'),
(1136, '31.13.114.150', '2018-04-19', '2018-04-19 20:41:12', '2018-04-19 20:41:12'),
(1137, '181.50.9.51', '2018-04-19', '2018-04-19 21:18:28', '2018-04-19 21:18:28'),
(1138, '186.82.4.8', '2018-04-19', '2018-04-19 21:34:28', '2018-04-19 21:34:28'),
(1139, '186.82.5.73', '2018-04-20', '2018-04-20 00:08:06', '2018-04-20 00:08:06'),
(1140, '66.249.66.88', '2018-04-20', '2018-04-20 01:49:07', '2018-04-20 01:49:07'),
(1141, '66.249.66.86', '2018-04-20', '2018-04-20 02:05:05', '2018-04-20 02:05:05'),
(1142, '66.249.66.87', '2018-04-20', '2018-04-20 05:58:05', '2018-04-20 05:58:05'),
(1143, '181.51.178.224', '2018-04-20', '2018-04-20 07:51:09', '2018-04-20 07:51:09'),
(1144, '201.184.66.146', '2018-04-20', '2018-04-20 08:48:01', '2018-04-20 08:48:01'),
(1145, '190.78.25.254', '2018-04-20', '2018-04-20 10:11:36', '2018-04-20 10:11:36'),
(1146, '181.50.101.213', '2018-04-20', '2018-04-20 10:35:17', '2018-04-20 10:35:17'),
(1147, '186.82.4.8', '2018-04-20', '2018-04-20 11:00:28', '2018-04-20 11:00:28'),
(1148, '181.63.58.210', '2018-04-20', '2018-04-20 11:32:57', '2018-04-20 11:32:57'),
(1149, '181.60.101.84', '2018-04-20', '2018-04-20 11:51:17', '2018-04-20 11:51:17'),
(1150, '190.127.234.19', '2018-04-20', '2018-04-20 15:45:08', '2018-04-20 15:45:08'),
(1151, '186.179.100.125', '2018-04-20', '2018-04-20 16:07:59', '2018-04-20 16:07:59'),
(1152, '66.249.66.89', '2018-04-20', '2018-04-20 16:36:45', '2018-04-20 16:36:45'),
(1153, '191.102.236.27', '2018-04-20', '2018-04-20 16:49:09', '2018-04-20 16:49:09'),
(1154, '190.60.194.2', '2018-04-20', '2018-04-20 18:06:33', '2018-04-20 18:06:33'),
(1155, '66.249.66.87', '2018-04-21', '2018-04-21 00:57:53', '2018-04-21 00:57:53'),
(1156, '181.51.178.224', '2018-04-21', '2018-04-21 07:43:43', '2018-04-21 07:43:43'),
(1157, '186.146.218.101', '2018-04-21', '2018-04-21 09:41:02', '2018-04-21 09:41:02'),
(1158, '5.45.203.4', '2018-04-21', '2018-04-21 10:21:36', '2018-04-21 10:21:36'),
(1159, '5.255.251.9', '2018-04-21', '2018-04-21 10:21:36', '2018-04-21 10:21:36'),
(1160, '66.249.66.89', '2018-04-21', '2018-04-21 12:22:16', '2018-04-21 12:22:16'),
(1161, '66.249.66.88', '2018-04-21', '2018-04-21 12:33:35', '2018-04-21 12:33:35'),
(1162, '173.252.92.113', '2018-04-21', '2018-04-21 14:48:14', '2018-04-21 14:48:14'),
(1163, '186.82.4.16', '2018-04-21', '2018-04-21 15:33:51', '2018-04-21 15:33:51'),
(1164, '66.249.66.86', '2018-04-21', '2018-04-21 16:09:13', '2018-04-21 16:09:13'),
(1165, '186.86.78.112', '2018-04-21', '2018-04-21 16:39:17', '2018-04-21 16:39:17'),
(1166, '186.84.210.131', '2018-04-21', '2018-04-21 19:01:04', '2018-04-21 19:01:04'),
(1167, '190.5.194.146', '2018-04-21', '2018-04-21 19:16:53', '2018-04-21 19:16:53'),
(1168, '181.50.101.213', '2018-04-21', '2018-04-21 20:45:07', '2018-04-21 20:45:07'),
(1169, '66.249.66.87', '2018-04-22', '2018-04-22 00:24:50', '2018-04-22 00:24:50'),
(1170, '66.249.66.86', '2018-04-22', '2018-04-22 00:32:25', '2018-04-22 00:32:25'),
(1171, '66.249.66.89', '2018-04-22', '2018-04-22 00:47:33', '2018-04-22 00:47:33'),
(1172, '66.249.66.88', '2018-04-22', '2018-04-22 00:51:18', '2018-04-22 00:51:18'),
(1173, '18.236.203.89', '2018-04-22', '2018-04-22 07:08:10', '2018-04-22 07:08:10'),
(1174, '186.114.59.159', '2018-04-22', '2018-04-22 15:13:17', '2018-04-22 15:13:17'),
(1175, '186.84.210.131', '2018-04-22', '2018-04-22 19:16:57', '2018-04-22 19:16:57'),
(1176, '66.249.66.89', '2018-04-23', '2018-04-23 00:18:46', '2018-04-23 00:18:46'),
(1177, '66.249.66.88', '2018-04-23', '2018-04-23 01:00:24', '2018-04-23 01:00:24'),
(1178, '66.249.66.87', '2018-04-23', '2018-04-23 01:04:09', '2018-04-23 01:04:09'),
(1179, '66.249.66.86', '2018-04-23', '2018-04-23 03:05:13', '2018-04-23 03:05:13'),
(1180, '181.50.101.213', '2018-04-23', '2018-04-23 09:33:44', '2018-04-23 09:33:44'),
(1181, '66.220.148.170', '2018-04-23', '2018-04-23 10:01:36', '2018-04-23 10:01:36'),
(1182, '69.171.224.252', '2018-04-23', '2018-04-23 10:01:42', '2018-04-23 10:01:42'),
(1183, '31.13.114.150', '2018-04-23', '2018-04-23 10:01:42', '2018-04-23 10:01:42'),
(1184, '173.252.85.198', '2018-04-23', '2018-04-23 10:02:11', '2018-04-23 10:02:11'),
(1185, '173.252.85.23', '2018-04-23', '2018-04-23 10:02:17', '2018-04-23 10:02:17'),
(1186, '31.13.125.212', '2018-04-23', '2018-04-23 10:02:21', '2018-04-23 10:02:21'),
(1187, '186.81.8.234', '2018-04-23', '2018-04-23 10:51:28', '2018-04-23 10:51:28'),
(1188, '186.84.210.131', '2018-04-23', '2018-04-23 11:04:00', '2018-04-23 11:04:00'),
(1189, '190.28.81.5', '2018-04-23', '2018-04-23 14:39:13', '2018-04-23 14:39:13'),
(1190, '5.45.203.4', '2018-04-23', '2018-04-23 14:39:40', '2018-04-23 14:39:40'),
(1191, '186.82.5.73', '2018-04-23', '2018-04-23 15:18:52', '2018-04-23 15:18:52'),
(1192, '186.146.145.215', '2018-04-23', '2018-04-23 15:31:31', '2018-04-23 15:31:31'),
(1193, '54.161.203.91', '2018-04-23', '2018-04-23 16:49:12', '2018-04-23 16:49:12'),
(1194, '54.211.103.9', '2018-04-23', '2018-04-23 16:52:05', '2018-04-23 16:52:05'),
(1195, '54.167.177.102', '2018-04-23', '2018-04-23 17:17:13', '2018-04-23 17:17:13'),
(1196, '181.51.179.134', '2018-04-23', '2018-04-23 17:19:04', '2018-04-23 17:19:04'),
(1197, '181.63.49.32', '2018-04-23', '2018-04-23 20:14:52', '2018-04-23 20:14:52'),
(1198, '174.57.51.66', '2018-04-23', '2018-04-23 20:21:25', '2018-04-23 20:21:25'),
(1199, '66.249.66.88', '2018-04-24', '2018-04-24 00:03:58', '2018-04-24 00:03:58'),
(1200, '66.249.66.87', '2018-04-24', '2018-04-24 00:07:45', '2018-04-24 00:07:45'),
(1201, '66.249.66.89', '2018-04-24', '2018-04-24 00:19:04', '2018-04-24 00:19:04'),
(1202, '186.82.5.73', '2018-04-24', '2018-04-24 06:48:12', '2018-04-24 06:48:12'),
(1203, '190.26.254.184', '2018-04-24', '2018-04-24 09:21:18', '2018-04-24 09:21:18'),
(1204, '190.38.88.49', '2018-04-24', '2018-04-24 09:29:11', '2018-04-24 09:29:11'),
(1205, '186.81.8.234', '2018-04-24', '2018-04-24 09:30:14', '2018-04-24 09:30:14'),
(1206, '186.84.210.131', '2018-04-24', '2018-04-24 09:39:00', '2018-04-24 09:39:00'),
(1207, '186.86.49.122', '2018-04-24', '2018-04-24 12:31:09', '2018-04-24 12:31:09'),
(1208, '66.249.66.86', '2018-04-24', '2018-04-24 12:39:07', '2018-04-24 12:39:07'),
(1209, '173.252.88.246', '2018-04-24', '2018-04-24 13:35:24', '2018-04-24 13:35:24'),
(1210, '201.242.54.31', '2018-04-24', '2018-04-24 16:00:34', '2018-04-24 16:00:34'),
(1211, '186.146.217.241', '2018-04-24', '2018-04-24 17:37:19', '2018-04-24 17:37:19'),
(1212, '152.200.142.102', '2018-04-24', '2018-04-24 17:42:57', '2018-04-24 17:42:57');
INSERT INTO `visitas` (`id`, `visitas_ip`, `visitas_fecha`, `created_at`, `updated_at`) VALUES
(1213, '190.90.100.5', '2018-04-24', '2018-04-24 17:45:39', '2018-04-24 17:45:39'),
(1214, '201.228.39.253', '2018-04-24', '2018-04-24 17:48:11', '2018-04-24 17:48:11'),
(1215, '167.0.203.34', '2018-04-24', '2018-04-24 17:55:59', '2018-04-24 17:55:59'),
(1216, '174.57.51.66', '2018-04-24', '2018-04-24 19:59:59', '2018-04-24 19:59:59'),
(1217, '181.50.101.213', '2018-04-24', '2018-04-24 22:45:16', '2018-04-24 22:45:16'),
(1218, '66.249.66.88', '2018-04-25', '2018-04-25 00:42:25', '2018-04-25 00:42:25'),
(1219, '190.233.242.195', '2018-04-25', '2018-04-25 01:27:41', '2018-04-25 01:27:41'),
(1220, '201.208.115.183', '2018-04-25', '2018-04-25 04:06:49', '2018-04-25 04:06:49'),
(1221, '66.249.66.86', '2018-04-25', '2018-04-25 04:33:41', '2018-04-25 04:33:41'),
(1222, '66.249.66.87', '2018-04-25', '2018-04-25 08:37:13', '2018-04-25 08:37:13'),
(1223, '181.50.101.213', '2018-04-25', '2018-04-25 08:38:53', '2018-04-25 08:38:53'),
(1224, '186.81.8.234', '2018-04-25', '2018-04-25 09:24:38', '2018-04-25 09:24:38'),
(1225, '186.146.217.241', '2018-04-25', '2018-04-25 11:16:01', '2018-04-25 11:16:01'),
(1226, '181.54.68.228', '2018-04-25', '2018-04-25 15:19:29', '2018-04-25 15:19:29'),
(1227, '186.84.210.131', '2018-04-25', '2018-04-25 15:56:45', '2018-04-25 15:56:45'),
(1228, '186.146.152.234', '2018-04-25', '2018-04-25 17:23:16', '2018-04-25 17:23:16'),
(1229, '190.78.7.83', '2018-04-25', '2018-04-25 17:49:44', '2018-04-25 17:49:44'),
(1230, '174.57.51.66', '2018-04-25', '2018-04-25 19:49:09', '2018-04-25 19:49:09'),
(1231, '5.45.203.4', '2018-04-25', '2018-04-25 20:19:33', '2018-04-25 20:19:33'),
(1232, '185.20.6.86', '2018-04-25', '2018-04-25 20:48:58', '2018-04-25 20:48:58'),
(1233, '34.230.78.27', '2018-04-25', '2018-04-25 20:49:29', '2018-04-25 20:49:29'),
(1234, '173.252.124.77', '2018-04-25', '2018-04-25 21:03:47', '2018-04-25 21:03:47'),
(1235, '173.252.124.234', '2018-04-25', '2018-04-25 21:03:48', '2018-04-25 21:03:48'),
(1236, '173.252.114.115', '2018-04-25', '2018-04-25 21:03:48', '2018-04-25 21:03:48'),
(1237, '173.252.123.187', '2018-04-25', '2018-04-25 21:27:40', '2018-04-25 21:27:40'),
(1238, '66.220.152.97', '2018-04-25', '2018-04-25 21:27:43', '2018-04-25 21:27:43'),
(1239, '173.252.92.240', '2018-04-25', '2018-04-25 21:28:04', '2018-04-25 21:28:04'),
(1240, '69.171.225.29', '2018-04-25', '2018-04-25 21:49:09', '2018-04-25 21:49:09'),
(1241, '69.171.225.75', '2018-04-25', '2018-04-25 21:49:09', '2018-04-25 21:49:09'),
(1242, '173.252.124.57', '2018-04-25', '2018-04-25 21:49:38', '2018-04-25 21:49:38'),
(1243, '138.36.79.197', '2018-04-25', '2018-04-25 21:52:49', '2018-04-25 21:52:49'),
(1244, '173.252.84.59', '2018-04-25', '2018-04-25 22:06:05', '2018-04-25 22:06:05'),
(1245, '173.252.108.113', '2018-04-25', '2018-04-25 22:14:37', '2018-04-25 22:14:37'),
(1246, '173.252.85.219', '2018-04-25', '2018-04-25 22:24:46', '2018-04-25 22:24:46'),
(1247, '66.220.151.208', '2018-04-25', '2018-04-25 22:24:52', '2018-04-25 22:24:52'),
(1248, '66.220.148.165', '2018-04-25', '2018-04-25 22:24:52', '2018-04-25 22:24:52'),
(1249, '173.252.84.89', '2018-04-25', '2018-04-25 22:24:52', '2018-04-25 22:24:52'),
(1250, '173.252.123.141', '2018-04-25', '2018-04-25 22:25:21', '2018-04-25 22:25:21'),
(1251, '173.252.124.205', '2018-04-25', '2018-04-25 22:25:22', '2018-04-25 22:25:22'),
(1252, '66.220.155.250', '2018-04-25', '2018-04-25 22:25:23', '2018-04-25 22:25:23'),
(1253, '173.252.127.28', '2018-04-25', '2018-04-25 22:31:57', '2018-04-25 22:31:57'),
(1254, '69.171.225.19', '2018-04-25', '2018-04-25 22:43:29', '2018-04-25 22:43:29'),
(1255, '66.220.151.89', '2018-04-25', '2018-04-25 22:43:36', '2018-04-25 22:43:36'),
(1256, '173.252.98.29', '2018-04-25', '2018-04-25 22:43:37', '2018-04-25 22:43:37'),
(1257, '173.252.84.90', '2018-04-25', '2018-04-25 22:43:37', '2018-04-25 22:43:37'),
(1258, '173.252.92.69', '2018-04-25', '2018-04-25 22:44:07', '2018-04-25 22:44:07'),
(1259, '31.13.126.95', '2018-04-25', '2018-04-25 22:44:07', '2018-04-25 22:44:07'),
(1260, '69.63.188.217', '2018-04-25', '2018-04-25 22:44:07', '2018-04-25 22:44:07'),
(1261, '190.90.100.38', '2018-04-25', '2018-04-25 23:17:47', '2018-04-25 23:17:47'),
(1262, '181.50.101.213', '2018-04-26', '2018-04-26 00:02:25', '2018-04-26 00:02:25'),
(1263, '69.171.240.20', '2018-04-26', '2018-04-26 00:04:18', '2018-04-26 00:04:18'),
(1264, '66.220.151.92', '2018-04-26', '2018-04-26 00:04:19', '2018-04-26 00:04:19'),
(1265, '69.171.240.120', '2018-04-26', '2018-04-26 00:04:20', '2018-04-26 00:04:20'),
(1266, '173.252.92.114', '2018-04-26', '2018-04-26 00:04:50', '2018-04-26 00:04:50'),
(1267, '173.252.100.199', '2018-04-26', '2018-04-26 00:04:50', '2018-04-26 00:04:50'),
(1268, '173.252.88.3', '2018-04-26', '2018-04-26 00:04:52', '2018-04-26 00:04:52'),
(1269, '66.249.66.87', '2018-04-26', '2018-04-26 00:14:35', '2018-04-26 00:14:35'),
(1270, '66.249.66.88', '2018-04-26', '2018-04-26 00:18:22', '2018-04-26 00:18:22'),
(1271, '66.249.66.86', '2018-04-26', '2018-04-26 01:07:34', '2018-04-26 01:07:34'),
(1272, '66.249.66.89', '2018-04-26', '2018-04-26 01:18:56', '2018-04-26 01:18:56'),
(1273, '5.45.203.4', '2018-04-26', '2018-04-26 02:37:55', '2018-04-26 02:37:55'),
(1274, '186.82.5.73', '2018-04-26', '2018-04-26 08:35:42', '2018-04-26 08:35:42'),
(1275, '186.84.210.131', '2018-04-26', '2018-04-26 08:36:45', '2018-04-26 08:36:45'),
(1276, '186.118.114.46', '2018-04-26', '2018-04-26 09:35:33', '2018-04-26 09:35:33'),
(1277, '24.230.226.111', '2018-04-26', '2018-04-26 09:44:39', '2018-04-26 09:44:39'),
(1278, '5.255.251.9', '2018-04-26', '2018-04-26 09:55:37', '2018-04-26 09:55:37'),
(1279, '186.154.94.63', '2018-04-26', '2018-04-26 10:39:49', '2018-04-26 10:39:49'),
(1280, '181.57.141.145', '2018-04-26', '2018-04-26 10:45:49', '2018-04-26 10:45:49'),
(1281, '186.86.49.122', '2018-04-26', '2018-04-26 10:49:33', '2018-04-26 10:49:33'),
(1282, '173.252.99.17', '2018-04-26', '2018-04-26 12:23:37', '2018-04-26 12:23:37'),
(1283, '181.50.12.93', '2018-04-26', '2018-04-26 12:40:08', '2018-04-26 12:40:08'),
(1284, '173.252.91.249', '2018-04-26', '2018-04-26 12:50:54', '2018-04-26 12:50:54'),
(1285, '69.171.225.79', '2018-04-26', '2018-04-26 13:09:29', '2018-04-26 13:09:29'),
(1286, '185.20.6.86', '2018-04-26', '2018-04-26 13:09:34', '2018-04-26 13:09:34'),
(1287, '173.252.84.119', '2018-04-26', '2018-04-26 13:09:34', '2018-04-26 13:09:34'),
(1288, '31.13.113.193', '2018-04-26', '2018-04-26 13:09:35', '2018-04-26 13:09:35'),
(1289, '66.220.156.149', '2018-04-26', '2018-04-26 13:09:35', '2018-04-26 13:09:35'),
(1290, '173.252.127.15', '2018-04-26', '2018-04-26 13:10:05', '2018-04-26 13:10:05'),
(1291, '173.252.115.197', '2018-04-26', '2018-04-26 13:10:07', '2018-04-26 13:10:07'),
(1292, '173.252.124.121', '2018-04-26', '2018-04-26 13:11:01', '2018-04-26 13:11:01'),
(1293, '190.242.75.144', '2018-04-26', '2018-04-26 14:05:08', '2018-04-26 14:05:08'),
(1294, '66.220.149.28', '2018-04-26', '2018-04-26 15:28:17', '2018-04-26 15:28:17'),
(1295, '69.171.225.33', '2018-04-26', '2018-04-26 15:40:43', '2018-04-26 15:40:43'),
(1296, '173.252.124.220', '2018-04-26', '2018-04-26 16:55:00', '2018-04-26 16:55:00'),
(1297, '172.58.233.168', '2018-04-26', '2018-04-26 17:44:36', '2018-04-26 17:44:36'),
(1298, '190.90.100.38', '2018-04-26', '2018-04-26 19:06:39', '2018-04-26 19:06:39'),
(1299, '190.67.237.37', '2018-04-26', '2018-04-26 20:00:12', '2018-04-26 20:00:12'),
(1300, '181.61.187.33', '2018-04-26', '2018-04-26 20:02:18', '2018-04-26 20:02:18'),
(1301, '181.130.233.233', '2018-04-26', '2018-04-26 20:02:32', '2018-04-26 20:02:32'),
(1302, '181.155.149.54', '2018-04-26', '2018-04-26 20:02:54', '2018-04-26 20:02:54'),
(1303, '190.130.101.210', '2018-04-26', '2018-04-26 20:03:52', '2018-04-26 20:03:52'),
(1304, '186.28.217.66', '2018-04-26', '2018-04-26 20:07:53', '2018-04-26 20:07:53'),
(1305, '181.250.131.62', '2018-04-26', '2018-04-26 20:09:00', '2018-04-26 20:09:00'),
(1306, '190.60.198.66', '2018-04-26', '2018-04-26 20:13:12', '2018-04-26 20:13:12'),
(1307, '181.155.160.148', '2018-04-26', '2018-04-26 20:14:18', '2018-04-26 20:14:18'),
(1308, '181.155.241.2', '2018-04-26', '2018-04-26 20:18:09', '2018-04-26 20:18:09'),
(1309, '190.159.73.142', '2018-04-26', '2018-04-26 20:21:41', '2018-04-26 20:21:41'),
(1310, '190.60.101.108', '2018-04-26', '2018-04-26 20:25:16', '2018-04-26 20:25:16'),
(1311, '191.100.63.129', '2018-04-26', '2018-04-26 20:34:06', '2018-04-26 20:34:06'),
(1312, '190.70.46.80', '2018-04-26', '2018-04-26 21:01:42', '2018-04-26 21:01:42'),
(1313, '190.242.76.158', '2018-04-26', '2018-04-26 21:25:10', '2018-04-26 21:25:10'),
(1314, '186.80.235.21', '2018-04-26', '2018-04-26 21:25:28', '2018-04-26 21:25:28'),
(1315, '98.169.219.32', '2018-04-26', '2018-04-26 21:29:08', '2018-04-26 21:29:08'),
(1316, '190.115.245.236', '2018-04-26', '2018-04-26 21:37:51', '2018-04-26 21:37:51'),
(1317, '73.152.198.252', '2018-04-26', '2018-04-26 21:45:23', '2018-04-26 21:45:23'),
(1318, '181.137.209.103', '2018-04-26', '2018-04-26 21:54:21', '2018-04-26 21:54:21'),
(1319, '201.245.248.30', '2018-04-26', '2018-04-26 22:02:38', '2018-04-26 22:02:38'),
(1320, '181.234.46.238', '2018-04-26', '2018-04-26 22:32:59', '2018-04-26 22:32:59'),
(1321, '186.155.15.118', '2018-04-26', '2018-04-26 22:46:11', '2018-04-26 22:46:11'),
(1322, '181.136.54.198', '2018-04-26', '2018-04-26 23:20:36', '2018-04-26 23:20:36'),
(1323, '66.249.66.3', '2018-04-27', '2018-04-27 03:14:54', '2018-04-27 03:14:54'),
(1324, '190.127.232.236', '2018-04-27', '2018-04-27 04:59:36', '2018-04-27 04:59:36'),
(1325, '66.249.66.145', '2018-04-27', '2018-04-27 06:28:26', '2018-04-27 06:28:26'),
(1326, '181.57.242.248', '2018-04-27', '2018-04-27 06:38:24', '2018-04-27 06:38:24'),
(1327, '181.59.1.132', '2018-04-27', '2018-04-27 06:46:00', '2018-04-27 06:46:00'),
(1328, '66.249.66.5', '2018-04-27', '2018-04-27 07:05:27', '2018-04-27 07:05:27'),
(1329, '66.249.66.1', '2018-04-27', '2018-04-27 07:08:25', '2018-04-27 07:08:25'),
(1330, '181.62.14.221', '2018-04-27', '2018-04-27 07:13:27', '2018-04-27 07:13:27'),
(1331, '181.236.49.214', '2018-04-27', '2018-04-27 09:27:34', '2018-04-27 09:27:34'),
(1332, '181.57.248.109', '2018-04-27', '2018-04-27 09:28:23', '2018-04-27 09:28:23'),
(1333, '66.249.66.147', '2018-04-27', '2018-04-27 10:40:19', '2018-04-27 10:40:19'),
(1334, '181.50.12.93', '2018-04-27', '2018-04-27 10:56:13', '2018-04-27 10:56:13'),
(1335, '186.82.5.73', '2018-04-27', '2018-04-27 13:26:32', '2018-04-27 13:26:32'),
(1336, '185.20.6.86', '2018-04-27', '2018-04-27 14:16:40', '2018-04-27 14:16:40'),
(1337, '190.130.78.38', '2018-04-27', '2018-04-27 14:16:41', '2018-04-27 14:16:41'),
(1338, '181.49.132.250', '2018-04-27', '2018-04-27 14:18:31', '2018-04-27 14:18:31'),
(1339, '181.50.101.213', '2018-04-27', '2018-04-27 14:40:47', '2018-04-27 14:40:47'),
(1340, '181.249.133.128', '2018-04-27', '2018-04-27 15:08:29', '2018-04-27 15:08:29'),
(1341, '186.87.236.69', '2018-04-27', '2018-04-27 15:08:51', '2018-04-27 15:08:51'),
(1342, '181.165.58.200', '2018-04-27', '2018-04-27 15:41:32', '2018-04-27 15:41:32'),
(1343, '186.146.217.241', '2018-04-27', '2018-04-27 16:32:22', '2018-04-27 16:32:22'),
(1344, '200.118.165.180', '2018-04-27', '2018-04-27 16:33:44', '2018-04-27 16:33:44'),
(1345, '5.45.203.4', '2018-04-27', '2018-04-27 16:41:15', '2018-04-27 16:41:15'),
(1346, '66.249.66.149', '2018-04-27', '2018-04-27 16:58:36', '2018-04-27 16:58:36'),
(1347, '173.252.124.79', '2018-04-27', '2018-04-27 17:45:56', '2018-04-27 17:45:56'),
(1348, '181.49.86.76', '2018-04-27', '2018-04-27 19:05:58', '2018-04-27 19:05:58'),
(1349, '66.249.65.123', '2018-04-27', '2018-04-27 19:29:57', '2018-04-27 19:29:57'),
(1350, '186.84.210.131', '2018-04-27', '2018-04-27 20:26:18', '2018-04-27 20:26:18'),
(1351, '66.249.66.5', '2018-04-28', '2018-04-28 00:48:58', '2018-04-28 00:48:58'),
(1352, '66.249.66.3', '2018-04-28', '2018-04-28 00:54:56', '2018-04-28 00:54:56'),
(1353, '5.45.203.4', '2018-04-28', '2018-04-28 03:09:57', '2018-04-28 03:09:57'),
(1354, '66.249.66.145', '2018-04-28', '2018-04-28 04:04:29', '2018-04-28 04:04:29'),
(1355, '144.76.182.48', '2018-04-28', '2018-04-28 07:14:27', '2018-04-28 07:14:27'),
(1356, '66.249.66.1', '2018-04-28', '2018-04-28 07:33:41', '2018-04-28 07:33:41'),
(1357, '66.249.66.149', '2018-04-28', '2018-04-28 08:49:43', '2018-04-28 08:49:43'),
(1358, '186.84.210.131', '2018-04-28', '2018-04-28 08:58:40', '2018-04-28 08:58:40'),
(1359, '66.249.66.147', '2018-04-28', '2018-04-28 10:14:40', '2018-04-28 10:14:40'),
(1360, '5.255.251.9', '2018-04-28', '2018-04-28 11:35:52', '2018-04-28 11:35:52'),
(1361, '186.87.64.183', '2018-04-28', '2018-04-28 11:47:35', '2018-04-28 11:47:35'),
(1362, '181.63.248.108', '2018-04-28', '2018-04-28 12:15:29', '2018-04-28 12:15:29'),
(1363, '186.81.8.234', '2018-04-28', '2018-04-28 14:54:46', '2018-04-28 14:54:46'),
(1364, '191.145.220.184', '2018-04-28', '2018-04-28 15:24:19', '2018-04-28 15:24:19'),
(1365, '181.50.166.171', '2018-04-28', '2018-04-28 16:20:33', '2018-04-28 16:20:33'),
(1366, '83.59.195.91', '2018-04-28', '2018-04-28 17:45:45', '2018-04-28 17:45:45'),
(1367, '189.235.95.123', '2018-04-28', '2018-04-28 18:28:45', '2018-04-28 18:28:45'),
(1368, '171.15.159.202', '2018-04-28', '2018-04-28 23:47:48', '2018-04-28 23:47:48'),
(1369, '66.249.66.5', '2018-04-29', '2018-04-29 00:01:51', '2018-04-29 00:01:51'),
(1370, '66.249.66.1', '2018-04-29', '2018-04-29 00:09:03', '2018-04-29 00:09:03'),
(1371, '66.249.66.3', '2018-04-29', '2018-04-29 00:12:39', '2018-04-29 00:12:39'),
(1372, '171.15.159.202', '2018-04-29', '2018-04-29 00:17:29', '2018-04-29 00:17:29'),
(1373, '66.249.66.18', '2018-04-29', '2018-04-29 03:44:57', '2018-04-29 03:44:57'),
(1374, '66.249.66.21', '2018-04-29', '2018-04-29 03:46:31', '2018-04-29 03:46:31'),
(1375, '181.50.166.171', '2018-04-29', '2018-04-29 05:07:01', '2018-04-29 05:07:01'),
(1376, '181.50.101.213', '2018-04-29', '2018-04-29 06:56:25', '2018-04-29 06:56:25'),
(1377, '127.0.0.1', '2018-05-12', '2018-05-12 18:06:07', '2018-05-12 18:06:07');

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
-- Indices de la tabla `creditos`
--
ALTER TABLE `creditos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `creditos_credito_users_id_foreign` (`credito_users_id`);

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
-- Indices de la tabla `ofertas`
--
ALTER TABLE `ofertas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ofertas_oferta_producto_id_foreign` (`oferta_producto_id`);

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
-- Indices de la tabla `producto_images`
--
ALTER TABLE `producto_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `producto_images_productoi_id_foreign` (`productoi_id`);

--
-- Indices de la tabla `producto_precios`
--
ALTER TABLE `producto_precios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `producto_precios_productop_id_foreign` (`productop_id`);

--
-- Indices de la tabla `suscripcion`
--
ALTER TABLE `suscripcion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `suscripcion_users_id` (`suscripcion_users_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `visitas`
--
ALTER TABLE `visitas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aliados`
--
ALTER TABLE `aliados`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `ayudas`
--
ALTER TABLE `ayudas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `ayudas_categorias`
--
ALTER TABLE `ayudas_categorias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `ayudas_detalles`
--
ALTER TABLE `ayudas_detalles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT de la tabla `conf_categorias`
--
ALTER TABLE `conf_categorias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `conf_subcategorias`
--
ALTER TABLE `conf_subcategorias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de la tabla `creditos`
--
ALTER TABLE `creditos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `ofertas`
--
ALTER TABLE `ofertas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT de la tabla `producto_images`
--
ALTER TABLE `producto_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT de la tabla `producto_precios`
--
ALTER TABLE `producto_precios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT de la tabla `suscripcion`
--
ALTER TABLE `suscripcion`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `visitas`
--
ALTER TABLE `visitas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1378;

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
-- Filtros para la tabla `creditos`
--
ALTER TABLE `creditos`
  ADD CONSTRAINT `creditos_credito_users_id_foreign` FOREIGN KEY (`credito_users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `ofertas`
--
ALTER TABLE `ofertas`
  ADD CONSTRAINT `ofertas_oferta_producto_id_foreign` FOREIGN KEY (`oferta_producto_id`) REFERENCES `productos` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_producto_categoria_foreign` FOREIGN KEY (`producto_categoria`) REFERENCES `conf_categorias` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `productos_producto_subcategoria_foreign` FOREIGN KEY (`producto_subcategoria`) REFERENCES `conf_subcategorias` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `producto_images`
--
ALTER TABLE `producto_images`
  ADD CONSTRAINT `producto_images_productoi_id_foreign` FOREIGN KEY (`productoi_id`) REFERENCES `productos` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `producto_precios`
--
ALTER TABLE `producto_precios`
  ADD CONSTRAINT `producto_precios_productop_id_foreign` FOREIGN KEY (`productop_id`) REFERENCES `productos` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `suscripcion`
--
ALTER TABLE `suscripcion`
  ADD CONSTRAINT `suscripcion_users_id` FOREIGN KEY (`suscripcion_users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
