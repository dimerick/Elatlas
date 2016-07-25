-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 25-07-2016 a las 11:53:18
-- Versión del servidor: 5.5.45-cll-lve
-- Versión de PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `el_atlas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad`
--

CREATE TABLE IF NOT EXISTS `actividad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `grupo` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tipo` int(11) NOT NULL,
  `titulo` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `descripcion` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `categoria` int(11) NOT NULL,
  `latitud` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `longitud` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `confirmada` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `grupo` (`grupo`),
  KEY `categoria` (`categoria`),
  KEY `tipo` (`tipo`),
  KEY `tipo_2` (`tipo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=72 ;

--
-- Volcado de datos para la tabla `actividad`
--

INSERT INTO `actividad` (`id`, `grupo`, `tipo`, `titulo`, `fecha`, `created_at`, `updated_at`, `descripcion`, `categoria`, `latitud`, `longitud`, `confirmada`) VALUES
(3, 'tasquazago2014@gmail.com', 1, 'Recorrido 1 Derecho A La Ciudad', '2015-11-14', '2016-07-22 00:38:01', '2016-04-19 10:45:26', 'Se describe la historia de la honda y la cruz ,y los sobrevivientes.', 11, '6.2683893', '-75.5375675', 1),
(4, 'tasquazago2014@gmail.com', 1, 'Recorrido 1 Derecho A La Ciudad', '2015-11-14', '2016-07-22 00:39:20', '2016-04-19 10:45:07', 'Mostramos la vida de el barrio y uno de sus integrantes con la casa de la memoria en la honda.', 11, '6.268136', '-75.5375339', 1),
(5, 'tasquazago2014@gmail.com', 1, 'Recorrido 1 Derecho A La Ciudad', '2015-11-14', '2016-07-22 00:39:20', '2016-04-19 10:43:18', 'La historia brillar en la cruz ( preescolar).', 11, '6.2716035', '-75.5374257', 1),
(6, 'tasquazago2014@gmail.com', 1, 'Recorrido 1 Derecho A La Ciudad', '2015-11-14', '2016-07-22 00:39:20', '2016-04-19 10:42:45', 'Contando la historia diaria de la mayoría de los barrios en medellin por los grupos armados.', 11, '6.2717041', '-75.5373896', 1),
(7, 'tasquazago2014@gmail.com', 1, 'Recorrido 1 Derecho A La Ciudad', '2015-11-14', '2016-07-22 00:39:20', '2016-04-19 10:42:28', 'La invasión de el estado a las personas del barrio gracias a los mega-proyectos.', 11, '6.2715287', '-75.5374525', 1),
(8, 'tasquazago2014@gmail.com', 1, 'Recorrido 1 Derecho A La Ciudad', '2015-11-14', '2016-07-22 00:39:20', '2016-04-19 10:42:11', 'Después de una caminata descansamos y almorzamos al lado de la naturaleza.', 11, '6.2716395', '-75.5375206', 1),
(9, 'tasquazago2014@gmail.com', 1, 'Recorrido 1 Derecho A La Ciudad', '2015-11-14', '2016-07-22 00:39:20', '2016-04-19 10:41:53', 'Vídeo sobre los convites de el barrio y las personas del barrio,una recopilación de rap y la vida diaria,la cosecha ,el conflicto armado ,nuevas oportunidades el comienzo y el ahora que viven las personas de la comunidad.', 11, '6.2785763', '-75.5382996', 1),
(10, 'tasquazago2014@gmail.com', 1, 'Recorrido 1 Derecho A La Ciudad', '2015-11-14', '2016-07-22 00:39:20', '2016-04-19 10:41:44', 'La madera y la porcelana una manera creativa de que expresión.', 11, '6.2457357', '-75.5565721', 1),
(11, 'tasquazago2014@gmail.com', 1, 'Recorrido 1 Derecho A La Ciudad', '2015-11-14', '2016-07-22 00:39:20', '2016-04-19 10:41:35', 'REDAJIC red de jóvenes con distintos temas principales muy interesantes.', 11, '6.2457455', '-75.5566599', 1),
(12, 'tasquazago2014@gmail.com', 1, 'Recorrido 1 Derecho A La Ciudad', '2015-11-14', '2016-07-22 00:39:20', '2016-04-19 10:41:26', 'Trabajo digno( confiar) sólo con un salario mínimo no se vive también.', 11, '6.2457068', '-75.5567029', 1),
(13, 'tasquazago2014@gmail.com', 1, 'Recorrido 1 Derecho A La Ciudad', '2015-11-14', '2016-07-22 00:39:20', '2016-04-19 10:41:18', 'Asociación cristiana de jóvenes, Enseñar a los jovenes.', 11, '6.2458037', '-75.5566119', 1),
(14, 'tasquazago2014@gmail.com', 1, 'Recorrido 1 Derecho A La Ciudad', '2015-11-14', '2016-07-22 00:39:20', '2016-04-19 10:41:10', 'Proceso de paz - yo construyó paz con justicia social.', 11, '6.2457865', '-75.5567197', 1),
(15, 'florcalba@hotmail.com', 1, 'Dulcita y el burrito', '2016-05-26', '2016-07-22 00:39:20', '2016-06-15 06:30:35', 'Presentación en la Universidad de Antioquia del grupo de teatro CIROARTE, en la feria de teatro.', 3, '6.266328427883534', '-75.56939797622681', 1),
(64, 'formacion.actitudjuvenil@gmail.com', 1, 'Semana de la Juventud Altavista 2016', '2016-07-23', '2016-07-22 00:39:20', '2016-07-22 03:25:12', 'Del 23 al 31 de Julio los jóvenes se toman Altavista. ven y participa de las noches de cine colombiano, el empaparte, los torneos relámpago, talleres ambientales, nuestra tradicional carrera de rodillos y más, mucho más. Próximamente tendremos toda la programación para el corregimiento Altavista,prepara tu mejor actitud para esta semana que tenemos pensada para ti, porque necesitamos ¡Más gente como tú!', 3, '6.232754721601618', '-75.62567710876465', 1),
(70, 'luna.loaiza@gmail.com', 2, 'CAMPAZ 2016', '2016-07-23', '2016-07-24 03:09:13', '2016-07-24 03:09:13', 'Proceso de articulación comunitaria de varias organizaciones de Medellín, ', 6, '6.2935855', '-75.5761173', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre` (`nombre`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`, `icon`) VALUES
(1, 'Alimentos y agricultura', 'icon-agricultura.svg'),
(2, 'Ambiental', 'icon-ambiental.svg'),
(3, 'Arte y Cultura', 'icon-arte.svg'),
(4, 'Cuidado y Protección animal', 'icon-prot-animal.svg'),
(5, 'Deportes y Recreación', 'icon-deportes.svg'),
(6, 'Derechos Humanos', 'icon-der-hum.svg'),
(7, 'Desarrollo Comunitario', 'icon-des-comun.svg'),
(8, 'Educación', 'icon-educacion.svg'),
(9, 'Hábitat y Vivienda', 'icon-vivienda.svg'),
(10, 'Salud', 'icon-salud.svg'),
(11, 'Otra', 'icon-otra.svg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coordenada`
--

CREATE TABLE IF NOT EXISTS `coordenada` (
  `actividad` int(11) NOT NULL,
  `latitud` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `longitud` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `creada` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`actividad`,`latitud`,`longitud`),
  KEY `actividad` (`actividad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `coordenada`
--

INSERT INTO `coordenada` (`actividad`, `latitud`, `longitud`, `creada`) VALUES
(70, '6.290483446079198', '-75.57001054286957', '2016-07-23 20:12:08'),
(70, '6.290579424226203', '-75.56975841522217', '2016-07-23 20:12:22'),
(70, '6.29113396428411', '-75.57203829288483', '2016-07-23 20:11:51'),
(70, '6.291672507427843', '-75.56937217712402', '2016-07-23 20:13:07'),
(70, '6.291688503750307', '-75.56899666786194', '2016-07-23 20:13:39'),
(70, '6.293730696874092', '-75.57574510574341', '2016-07-23 20:10:07'),
(70, '6.294237244839851', '-75.57708621025085', '2016-07-23 20:10:22'),
(70, '6.294413203491301', '-75.57314872741699', '2016-07-23 20:10:54'),
(70, '6.29473846023556', '-75.57081520557404', '2016-07-23 20:11:42'),
(70, '6.295015728119038', '-75.57083129882812', '2016-07-23 20:11:22'),
(70, '6.295564931374327', '-75.5766248703003', '2016-07-23 20:10:41'),
(70, '6.295762217838824', '-75.57284832000732', '2016-07-23 20:11:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuenta`
--

CREATE TABLE IF NOT EXISTS `cuenta` (
  `nombre` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tipo` set('user','admin') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `representante` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ciudad` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `latitud` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `longitud` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `num_int` int(11) NOT NULL,
  `descripcion` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'photo-profile.jpg',
  `foto_peq` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'photo-profile-peq.jpg',
  `password` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `confirmada` tinyint(1) NOT NULL,
  `confirmation_code` text CHARACTER SET utf8,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cuenta`
--

INSERT INTO `cuenta` (`nombre`, `direccion`, `tipo`, `representante`, `telefono`, `email`, `ciudad`, `latitud`, `longitud`, `num_int`, `descripcion`, `foto`, `foto_peq`, `password`, `remember_token`, `created_at`, `updated_at`, `confirmada`, `confirmation_code`) VALUES
('Barulé Grupo Folclorico', '', 'user', '', '', 'barulegrupofolclorico@gmail.com', 'Bello', '6.342916904613506', '-75.5607505343628', 15, 'Barulé, es una organización artística y cultural, que viene desarrollando desde hace 6 años un proceso de educación popular con jóvenes en el municipio de Bello, en el cual se han venido fortaleciendo distintos proyectos. Comenzamos con la configuración de grupos de estudio en música, teatro, parkour, circo y malabares, que han servido de espacios para el intercambio y diálogo de saberes, para la proyección de aprendizajes, experiencias y conocimientos. \r\n\r\nDesde estos espacios se comenzó a proyectar Barulé, como organización, como escuela y como proceso artístico. En el camino, como frutos de nuestro trabajo, hemos venido consiguiendo desde la autogestión, los recursos necesarios que hoy configuran nuestra capacidad instalada. Empezamos consiguiendo y haciendo nuestros propios instrumentos, vestuarios, máscaras, muñecos, juguetes y distintas herramientas para la creación y el ejercicio organizativo del proceso.\r\n\r\n Hoy en día contamos con nuestra propia sede e instalaciones, con un grupo base fuerte que además de hacer arte está en las riendas de la organización, contamos con el apoyo de la comunidad del barrio el Cairo y con toda una red de apoyo que se extiende desde nuestro barrio hasta otros barrios, municipios y ciudades del país. \r\n\r\nAdemás de los grupos de proyección y las tareas de la organización interna, estamos impulsando y fortaleciendo nuestra Escuela de Arte y Cultura para la Paz, proyecto de la organización que hoy cuenta con una gran oferta de talleres artísticos para la comunidad bellanita. Esta iniciativa busca desde la formación artística integral, despertar habilidades, criterios y sensibilidades para la vida cotidiana de los participantes y la transformación positiva de su entorno, estimulando la conciencia, el liderazgo y los valores necesarios para la construcción de una cultura de paz. .', '2016-05-13_06-36-28_Barule-Grupo-Folclorico.jpg', '', '$2y$10$vhDTLHjsyntGb4HAUoJ.Vu/GFL6k99MVZjinVkuNl6Uwr9F6vXw/y', NULL, '2016-07-17 18:36:01', '2016-05-13 13:36:28', 1, NULL),
('Grupo de teatro Arte Vivo', 'Calle 103D #66-70', 'user', 'Maricela Gómez Tamayo', '5804839', 'blackorchid1523@gmail.com', 'Medellín', '6.299388009783933', '-75.56765556335448', 20, 'Somos un grupo de teatro que se dedica a la creación colectiva con niños y jóvenes de la comuna, hay dos semilleros infantiles, en dos rangos de edad diferentes, uno de los 4 a 7 años y el otro entre los 8 y los 12 años, el grupo juvenil cuenta con 5 jóvenes entre los 13 y los 18 años, dirigidos por Maricela Gómez, joven artista y actriz con una trayectoria amplia en el teatro y formada en la E.P.A.\r\nLa formación teatral a los niños se les brinda desde el juego y el descubrimiento de sus capacidades y habilidades escénicas.\r\nEl grupo se dedica no colo a generar montajes propios, sino también a estudiar teorías teatrales, investigaciones sobre los distintos géneros del teatro y desde allí, con base en la improvisación y la creación colectiva, crear obras de teatro que tiendan a mostrar las realidades de los actores y actrices que en el participan.', 'photo-profile.jpg', 'photo-profile-peq.jpg', '$2y$10$hSO0PEsgJyHvhJvvO489Fuy6tMCAfrTZrJ7ap0zaVZFbaXxm3fzZq', 'uOm6tN6c3Beem2feEQPoyMEPkmrrijWf3ctARnFpFkuPRByRnxqMYCw1txZn', '2016-07-22 17:49:08', '2016-07-23 00:49:08', 1, NULL),
('Celeria Consulting', '', 'user', '', '', 'camibuiles6@gmail.com', 'Medellín', '6.2561487949531704', '-75.58491826057433', 3, 'Somos especialistas en administración de riesgos de tránsito, trabajamos activamente con las empresas y entidades con el fin de disminuir los accidentes de tránsito generando una nueva conciencia y cultura segura al conducir', '2016-07-14_15-02-08_Celeria-Consulting.jpg', '', '$2y$10$XT7yHgdTJv.yfDymTJw.auHvehU7BCbRte1quGcKbGkiz9cdbDoUO', NULL, '2016-07-17 18:27:51', '2016-07-14 22:02:08', 1, NULL),
('Informentes', 'Calle 48cc # 97a - 86', 'user', 'Carolina Montoya Palacio', '3195505587', 'caro.montoya.91@gmail.com', 'MEDELLÍN', '4.710988599999999', '-74.072092', 28, 'Buscan consientizar a la comunidad en el cuidado del medio ambiente y los derechos de los animales por medio de la cultura y el arte', 'photo-profile.jpg', 'photo-profile-peq.jpg', '$2y$10$cmqfUQ9MeQzoS/ZiZN1TyO8SVElz2DQwG1TiWxPCEFBGG7aTMG9u6', NULL, '2016-07-24 04:51:17', '2016-07-24 04:51:17', 0, 'FHnfVFade6bJc6RH6vl7IZ82kqAaLeFzxmxoFYPG'),
('Corporación Casa Mia', '', 'user', '', '', 'casamiavidaycultura@gmail.com', 'Medellín', '6.3074286911411965', '-75.57242350799561', 15, 'La Corporación Casa Mía es una iniciativa comunitaria creada por un grupo de jóvenes, que en el año de 1994 se unieron con el objetivo de buscar consensos y acuerdos que permitieran hallar soluciones pacíficas, para detener la avanzada de guerra y muerte en el barrio Santander, noroccidente de Medellín.', '2016-02-15_17-04-47_Corporacion-Casa-Mia.jpg', '', '$2y$10$W66YlsoyHMi9f0NCBELErODwF2aSm7aAcKRzsMoY8566wlfXAz5tW', '2naeuTOoFQyyjWtMhhijgi6schsnyWMQPT7zlKNLArBSuM7MD63g06nw7RdZ', '2016-07-17 18:36:40', '2016-02-16 01:19:50', 1, NULL),
('CABE', 'CARRERA 73 NRO 96 - 105 BARRIO LA ESPERANZA COMUNA 6 MEDELLIN', 'user', 'FAUMAN TORRES', '4780169', 'clubcabe@gmail.com', 'MEDELLIN', '6.293288133510273', '-75.57620644569397', 67, 'El Club Amigos y Amigas de la Barrio La Esperanza CABE, es una entidad comunitaria sin ánimo de lucro, cuyo fin social es contribuir al desarrollo de la comunidad mediante procesos formativos, educativos, culturales, recreativos, deportivos y de participación.\r\n\r\nEl Club Amigos y Amigas de la Barrio La Esperanza es una organización de carácter comunitario que busca contribuir a la formación e interacciones sociales de niños, niñas, jóvenes y adultas, a través de la promoción de los valores, los derechos y los deberes.\r\nBusca generar conciencia en sus participantes para que adquieran un pensamiento crítico y propositivo.\r\nPara el cumplimiento de su misión, CABE se apoya en el trabajo interinstitucional, en la formación de sus miembros con base en los principios de igualdad, comunicación y democracia y en el desarrollo de servicios de tipo formativo, educativo, cultural, recreativo y deportivo.', 'CABE_1.jpg', 'CABE_peq_1.jpg', '$2y$10$Aykp6HpsMJPbxo57hXwF4.6ls4T.hPIowEeoiFOzoT.Z8/s0k8nju', 'WuzBWlYYZDdpk1NWfxyZxdgT3GeMQYdMPDVDPFWyCD90UJecEC6RA7VSwa4H', '2016-07-23 20:02:02', '2016-07-24 02:52:51', 1, NULL),
('Colonia de San Luis ', '', 'user', '', '', 'coloniadesanluis2009@gmail.com', 'Medellin ', '6.247835451423055', '-75.56856112701416', 12, 'la Colonia de San Luis es una entidad que trabaja por la restitución de los derechos vulenerados de la población victima del conflicto armado, promueve el encuentro de campesinos y ayuda a la recuperación del tejido social de las comunidades campesinas, a demas promueve la relación entre el campo - ciudad - campo con jovenes  y familias campesinas que fueron desplazadas y que habitan las periferias de la ciudad de medellín en relación con las familias que pudieron retornar al campo, promueve la elavoración del duelo con las madres victimas del conflicto armado.', '2016-05-11_00-33-43_Colonia-de-San-Luis-.jpg', '', '$2y$10$nfkqMOIKxoH0lhcfn1kjc.hlLKVs04MRaAsT2KJWo48jmh6AJY7rK', NULL, '2016-07-17 18:36:01', '2016-05-11 07:33:43', 1, NULL),
('COMPARSA LUNA-SOL', '', 'user', '', '', 'comparsalunasol@hotmail.com', 'Medellin', '6.299711975308702', '-75.58129491431237', 35, 'Somos un grupo de niños, niñas, jóvenes y adultos que confiamos en alternativas de vida, que no nos gusta la violencia y que procuramos por  generar espacios para un mejor desarrollo personal y comunitario. A lo largo de 19 años, la Comparsa Luna –Sol (Corporación Ramiquirí e Iráca) se ha convertido   en un referente para los habitantes del barrio Doce de Octubre  y de sus barrios vecinos. Nos esmeramos por propiciar espacios de formación artística, aprovechando las capacidades y aptitudes de todo aquel convencido de esta propuesta. Son las danzas, la música, los zancos, la acrobacia, el teatro, los títeres, la recreación y los malabares  nuestras herramientas  para aportar al fortalecimiento del tejido social.', '2016-05-06_20-25-55_COMPARSA-LUNA-SOL.jpg', '', '$2y$10$tyWZv3bXnQLe5Jmr8NNZ4uUqBpauFfjQnkTGEt1dOU5u/./ZfS1u2', '3VDyS7mX1Po8fchY5P7DJ2JiupLtJ6EvYGkZyiCauhjHhEomTPQOEtGVtS41', '2016-07-17 18:36:01', '2016-05-07 03:38:28', 1, NULL),
('arte creativo 6 ', '', 'user', '', '', 'davidcristovaoc@gmail.com', 'medellin', '6.312099409626214', '-75.58196783065796', 6, 'que es arte creativo 6 ... es todo lo bueno que puedas dar como miembro de arte creativo 6 contamos con tus ideas creativas y las ganas de aprender ,recuerda que los miembros del grupo tienen pasion ,no emociones y tiene la mente clara para ser buenos digo excelentes en sus metas y sueños no bazos vacíos si no bazos llenos arte creativo 6 ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,quien es arte creativo yo usted ,todos', '2016-07-16_19-20-33_arte-creativo-6-.jpg', '', '$2y$10$UiEenIooPwh0ayk/f.1.i.UZgA8N8oCVydV.RdJuKXp36o1B5lSPS', NULL, '2016-07-17 18:27:51', '2016-07-17 02:20:34', 1, NULL),
('Natural Sound', 'Cra 24 C #77-60 (158)', 'user', 'David Ortiz Holguìn', '2316130', 'davihiphoprap@hotmail.com', 'Medellin', '6.270338307620888', '-75.53864479064941', 2, 'Somos un grupo de reggae que a traves de sus letras promueve la conciencia y la cultura social por el arraigo a la vida; ademàs le apostamos a la formación y difusión de nuestro arte para la transformación social y la oportunidad en otros niños y jovenes para la apuesta por el arte y la cultura.', 'photo-profile.jpg', 'photo-profile-peq.jpg', '$2y$10$9IaRZu9gJ0xWDY0egYGYmuqcD9kgwTILyfGiJ8ArWffA3prfkIsnW', 'ZuaiZBgP80um69jxq7HQrwbotFo6TtbP2yel1ds0Od8RwCP76NkCq3RaLInc', '2016-07-21 19:44:09', '2016-07-22 02:44:09', 1, NULL),
('DE-MENTES PENSANTES', '', 'user', '', '', 'dementespensantes2020@gmail.com', 'Medellin', '6.307431357114036', '-75.57244228345871', 7, ' “En el hombre autentico siempre hay un niño que quiere jugar” (Nietzsche).\r\n\r\n\r\nDE-MENTES PENSANTES es una propuesta que visibiliza el juego como una estrategia para la vida, donde se crean espacios para pensar, educar y aprender jugando como mecanismos de desarrollo de capacidades cognitivas, psicomotrices, educativas, recreativas, de integración social y salud mental.\r\nTenemos un proceso investigativo de juegos del mundo donde buscamos traer a lo físico todo tipo de juegos que le aporten al desarrollo de capacidades, que permitan la creación de sinergias, el encuentro comunitario y la construcción de referentes para la vida. En esta medida construimos juegos de ingenio, de estrategia, de memoria, de competencia, de concentración, psicomotrices, de trabajo en equipo, educativos, didácticos etc.\r\n\r\nDe igual manera proponemos procesos educativos a través de metodologías de animación sociocultural y educación experiencial que posibiliten a los participantes la construcción de herramientas para asumir sus vidas desde otras miradas como la autoreflexión, la responsabilidad y las formas de como se asume la vida, trabajamos temas de ser, la familia y el entorno social.\r\n\r\nSe realizan procesos empresariales, de empoderamiento, trabajo en equipo y mecanismos comerciales y administrativos que fortalezcan las dinámicas empresariales e institucionales.\r\n\r\nPlanteamos que debemos recuperar por un momento nuestra infancia, siempre viva y presente para poder entender mejor el juego como una proyección de nosotros mismos, como conquista personal para llegar a ser lo que uno es, al entrar directamente en contacto con los elementos de la naturaleza: el aire, el agua, la tierra y el fuego.\r\n', 'DE-MENTES-PENSANTES_1.jpg', 'DE-MENTES-PENSANTES_peq_1.jpg', '$2y$10$cOBZ76aTjH3uZ4uwkXNgxOiJWP9K1hJUwqKZ/vF62XwwC7MaDNwRS', 'Hl2q4lNxmafump4ntWhsp89uOG9lSRPhjV1IG1Td19eqAyMQT1z6gN1iJiAg', '2016-07-22 00:36:23', '2016-07-22 07:36:23', 1, NULL),
('Corporación GRECA. Grupo de Estudio en Ciencias Antropológicas', '', 'user', '', '', 'dinfo2001@hotmail.com', 'Medellín', '6.266317763149297', '-75.54799394828797', 7, 'La Corporación Grupo de Estudio en Ciencias Antropológicas “GRECA” es una entidad sin ánimo de lucro que desde hace más de 3 años viene trabajando en pro de la investigación social desde una perspectiva antropológica, integrada por un equipo de antropólogos, sociólogos, politólogos, historiadores, ingenieros de alimentos, psicológicos, diseñadores multimedia/audiovisual y abogados que busca el fortalecimiento, empoderamiento y la dinámica del concepto de cultura a través de la intervención social, la lúdica y la educación.\r\nEntre sus objetivos se encuentra el diseño y ejecución de proyectos sociales que involucran a jóvenes en la investigación social, haciendo partícipes a las comunidades en actividades, talleres y eventos de carácter cultural, lúdica, artística, deportiva y académica, haciendo especial hincapié en aquellas propuestas que faciliten el fomento de la lectura, la escritura creativa, las artes y en general a todas las expresiones culturales.', '2016-04-29_02-23-16_Corporacion-GRECA.-Grupo-de-Estudio-en-Ciencias-Antropologicas.jpg', '', '$2y$10$Gr8oRlQNo0Pup95flexuWOdeWFaHJtJbp0S1Mbaj9s45N46hskRTS', NULL, '2016-07-17 18:36:01', '2016-04-29 09:23:16', 1, NULL),
('Instituto Superior en Educación Experiencial', 'Cll 14 Cr 30-190(Poblado) Av. Palmas -Tranversal inferior Medellín', 'user', 'Luis Ignacio Cardozo Giraldo', '3164998841', 'dir@iseexp.org', 'Medellín', '6.1953897', '-75.58012459999999', 33, 'El Instituto Superior en Educación Experiencial (ISEE) es una organización panamericana, autónoma, que agrupa a diferentes instituciones y organizaciones, en cuyo objeto se manifieste la Educación y el Aprendizaje Experiencial; para desarrollar conjuntamente procesos de formación y consultoría a grupos, organizaciones e instituciones.\r\n\r\nFortalecemos el conocimiento de la Educación Experiencial desde lo conceptual y lo metodológico, certificamos los conocimientos teóricos en los ámbitos organizacionales/institucionales, que le permite al consultor / facilitador consolidar su meta en esta área.\r\n\r\nValidamos las competencias profesionales en el área de las consultorías/facilitación, mediante un programa de certificación internacional en Educación y Aprendizaje Experiencial.', 'photo-profile.jpg', 'photo-profile-peq.jpg', '$2y$10$hiZsh1HhcyIjAL7oX3D2EOuy6eDR0CaqcAPhEjxmuj0DP6dM/sWt.', NULL, '2016-07-21 22:07:59', '2016-07-22 04:06:07', 1, NULL),
('Noches de fantasia', '', 'user', 'Jhon Jairo Castro', '3216250115-3127449961', 'Duberyluz@hotmail.com', 'Medellin', '6.256985992235714', '-75.58198928833008', 20, 'Noches de fantasía tiene la intención de alejar a los jóvenes de las drogas por medio del baile, buscando el desarrollo humano y cultural  para un beneficio de la comunidad y de el mismo. ', 'Noches-de-fantasia_1.jpg', '', '$2y$10$9oUReVGzk2M6GqdXJOzDce95x2f7OrG1eR9GW2V6tbXLZoAp6ijv.', NULL, '2016-07-18 05:58:02', '2016-07-18 05:58:02', 0, 'YSlf7F7tvqTB0yWqRycuhohKjEQMmuJ5JyDOtBe7'),
('DAW  EL AMAR', 'CARRERA 68 79D-05', 'user', 'MANUELA ZAPATA  RESTREPO', '2570795/ 3215196439', 'el.daou.amar@gmail.com', 'MEDELLIN', '6.28556720840687', '-75.58338403701782', 20, 'Somos  un grupo  que nos  reunimos   hacer  lo que  mas nos gusta  es la danza  hacemos  principalmente  danza oriental, ya  témenos  10 años de conformado  y  somos  hoy en  día  multiplicadoras  de los conocimientos   obtenidos  en tiempo  y lo transmitidos  a  las   niñas  nuevas, el grupo varia  mucho a los deseos  de  participación de las  niñas y jóvenes  que  entren cada  año.', 'photo-profile.jpg', 'photo-profile-peq.jpg', '$2y$10$aG5uqxE8OqqXoa29l5UOj.lDq4QAgdYNvushmRXI0f8GBay9YuMdG', NULL, '2016-07-25 03:51:44', '2016-07-25 03:51:44', 0, 'lTCH9625H14N4BzX3yqoJGawb0LkofRHM8dq2kNE'),
('Erick Sáenz', 'Cll 26a # 69-48 int 201', 'admin', 'Benitocamelas', '4627058', 'ericksaenz@outlook.com', 'Bello', '6.268546642972887', '-75.58164596557617', 1, 'Desarrollador web, integrante de Elatlas.', 'Erick-Saenz_24.jpg', 'Erick-Saenz_peq_24.jpg', '$2y$10$UiqrHwOL.YT4Nny8Uu0XB.3pf54mrqgruNrQbllQUIFvb3ze0h0LW', 'JJJ0TDVfTLqYjgC3rIFJx1Xn7oxOQ6cMvFKWvLCzgQmnCMfkwbY33vomdqas', '2016-07-23 21:05:44', '2016-07-24 04:05:44', 1, NULL),
('CIROARTE', '', 'user', '', '', 'florcalba@hotmail.com', 'medellín', '6.289643681441349', '-75.54604666454316', 100, 'La educación no puede limitarse al aprendizaje de contenidos socialmente válidos, sino extenderse a la actividad práctica del individuo como miembro de un grupo o clase social, donde se materializa, en hechos concretos, el aprendizaje anterior.\r\n\r\nTodo lo que rodea al hombre lo educa, incluso la propia naturaleza. Pero se deben distinguir aquellos factores indispensables para el cumplimiento de las funciones asignadas a la escuela, sin los cuales el proceso de enseñanza-aprendizaje resultaría incompleto. Esto son los factores extraescolares de la educación:\r\nLa escuela es una institución cultural porque tiene el encargo social de formar y desarrollar intelectual, moral, estéticamente, ideológica y físicamente a todos los sujetos que intervienen en el proceso educativo y particularmente en el proceso de enseñanza-aprendizaje, cuyo contenido es precisamente la cultura.\r\nA través de este proyecto, se propone la proyección a la comunidad en general de los muchos talentos que posee la institución, así como brindarles espacios más amplios, que más allá de la jornada escolar le permita una utilización adecuada de su tiempo libre, que involucre su desarrollo personal y social desde su motivación y creación.\r\nEl proyecto Ciroarte, una conexión con la vida, busca crear espacios donde los distintos componentes de la comunidad, puedan desarrollar habilidades artísticas, así mismo busca extender la escuela no sólo a lo académico, sino hacer de ésta un espacio que integre a los estudiantes con la vida, con el sentimiento, con la posibilidad de ser mejores seres humanos.\r\nDesde nuestros talleres artísticos se intenta lograr un trabajo grupal con rasgos comunitarios, brindando capacitación en diferentes áreas que se traducen a la vez en ámbitos de intercambio y construcción de otras experiencias grupales comunitaria.\r\n', '2016-05-30_19-53-41_CIROARTE.jpg', '', '$2y$10$RsmXwMCCApEzc/brsiXmnew1ZP7VnUsHD7RsewEYmP7BmwhZ.dZ7q', 'vsQ63YeXt4rIX58CCBInjJ47Q35dUA70HKyhBPkIbjzmM0GCiy7zpfZCfOU1', '2016-07-17 18:27:51', '2016-05-31 07:05:13', 1, NULL),
('Corporación Cultural Actitud Juvenil', 'Corregimiento Altavista, Vereda Aguas Frías', 'user', 'Katherine Ruiz Valbuena', '3221654', 'formacion.actitudjuvenil@gmail.com', 'Medellín', '6.232552078609809', '-75.6297755241394', 22, 'Quienes somos?\r\nCon el entusiasmo, la pasión y la vigorosidad que da la juventud, un colectivo de jóvenes le apuestan a trabajar en pro de un mundo mejor, a construir sueños y hacerlos realidad; es por eso que en el año 2009 comenzamos un sueño llamado Actitud Juvenil, grupo que nace en la vereda Aguas Frías del Corregimiento Altavista y que poco a poco se fue dando a conocer en la ciudad de Medellín.\r\nActitud Juvenil se reconoce hoy como una corporación que trabaja incansablemente por un desarrollo sostenible para su comunidad y para sí mismo, usando la formación en artes,liderazgo y comunicaciones como aliados para contribuir de manera positiva al mundo, porque creemos firmemente que Si lo Soñamos lo Podemos.', 'photo-profile.jpg', 'photo-profile-peq.jpg', '$2y$10$6WlkTMLuss5daY92FzASE.Ld3jslsu67RhxVQwWgGeJkt/NSiX4am', 'Uhjn1BUcgAzbE6Y8f6MlJTxOfWqHtu82YUwpb96pZCtYGCdUEUxYExolTTjo', '2016-07-21 20:25:35', '2016-07-22 03:25:35', 1, NULL),
('Fundación Trash Art', '', 'user', '', '', 'fundacion.trash.art@gmail.com', 'medellin', '6.30399377853192', '-75.53578560785866', 40, 'La Fundación Trash Art, es una fundación pensada para diseñar, articular y\r\ndesarrollar proyectos culturales, educativos, artísticos, ambientales a través de\r\nuna estrategia pedagógica, educativa, lúdico ‐ práctica y creativa, enfocada en la\r\nliteratura, el arte, el cuidado y preservación del medio ambiente.\r\nQue busca generar dentro de las diferentes comunidades reflexiones que\r\nubiquen la lectura como detonante creativo para el diseño y realización de\r\nobjetos artísticos con materiales reciclables que pueden ser de uso cotidiano.\r\nProponemos desde la lúdica y la creación, transformar realidades; que generen\r\nespacios de convivencia y de relacionamiento, fortaleciendo procesos\r\necológicos y culturales que permitan evidenciar la realidad en la que nos\r\nencontramos e idealizar la queremos.\r\nEs por esto, que estamos decididos a trabajar para y por la comunidad con\r\ndiferentes estrategias, a partir de la realización de los talleres Trash Art,\r\nqueremos seguir haciendo posible este sueño de formar una sociedad crítica,\r\nparticipativa y propositiva.', '2016-04-28_07-35-22_Fundacion-Trash-Art.jpg', '', '$2y$10$0QaSnJ4PduhYT.P.ntWf3.4S0XLlnF2VrBvn.WFaa65ucxWM9c4.K', NULL, '2016-07-17 18:36:01', '2016-04-28 14:35:22', 1, NULL),
('Fundación Soy Futuro ', '', 'user', '', '', 'fundacionsoyfuturo@gmail.com', 'Medellín', '6.278662047107685', '-75.55085318309784', 10, 'La Fundación Soy Futuro, nace en el año 2014 como respuesta a una serie de necesidades observadas desde la perspectiva de cada uno de sus integrantes, quienes movidos por un sentido social y comunitario, basado en las experiencias de vida deciden aunar esfuerzo e iniciar la construcción de un proyecto en el que se permita incluir a las madres cabeza de familia, niños, niñas y jóvenes que viven en condición de vulnerabilidad y desprotegidos por las políticas estatales.', '2016-05-12_04-25-43_Fundacion-Soy-Futuro-.jpg', '', '$2y$10$oG5xkXo1lsE2UyMqPuG6oeAlzfUxRN82LTsxNPdoqgexR9AhbgzEa', '4jkaXGc5NASwnDTuIEWrChiOeiAMzDFUMfq34JBCA2Grw2mYY7mUY7T7iQUp', '2016-07-17 18:36:01', '2016-05-12 11:34:03', 1, NULL),
('El Atlas', 'Medellin, Colombia', 'user', 'Alexis Sáenz', '----------', 'info@elatlas.org', 'Medellin', '6.250011084760177', '-75.5680525302887', 10, 'Somos una plataforma que conecta los procesos sociales alrededor del mundo, a través de la geografía, promoviendo la participación y la generación de conocimiento en diversos temas.', 'El-Atlas_2.jpg', 'El-Atlas_peq_2.jpg', '$2y$10$RRUehFLSmuSdl89tTtez0eDWxJeEHfCygzaOt1brgPIMvnWgR0tlK', 'tR7aFd6nQ6PYMLz7MYoZ7nGQ3nMcTpCJnF7zbxM9dJAYm5giNwWHUtoV6UYG', '2016-07-25 17:03:14', '2016-07-26 00:03:14', 1, NULL),
('TRICILAB', 'cll 84 A CR 58 DD-64', 'user', 'Juan Esteban Quintero Rios ', '3195108499', 'juanesteban522@gmail.com', 'Medellin', '6.279168564844613', '-75.56710839271545', 10, 'El TRICILAB es un laboratorio Móvil conformado por un grupo de jóvenes con diversidad de conocimientos que buscan descentralizar movimientos culturales, ambientales y artísticos, servimos de plataforma alternativa entre nosotros y la comunidad para así retroalimentar los saberes sociales; Como dispositivo cultural móvil, desarrolla preguntas en torno al arte, las tecnologías y su incidencia en las comunidades para generar acciones desde la autonomía y fortalecer el empoderamiento juvenil con la intención de replicar los saberes aprehendidos en los espacios de educación expandida desarrollados en los laboratorios.', 'photo-profile.jpg', 'photo-profile-peq.jpg', '$2y$10$mGkAp5DW4bsZs3ohJl8qPul6lE/M/SN4JFYfyuQTB0xzAzo.hi.G6', 'fHqHJTsKpVWIgZgljS5TxQW4MJikP16ezPwxSU5cSam3dFCI4fobG0NE0G1c', '2016-07-23 21:26:09', '2016-07-24 04:26:09', 1, NULL),
('Movimiento tierra en resistencia', 'Carrera 68 # 97', 'user', 'Luna Loaiza Cordoba', '3197447074', 'luna.loaiza@gmail.com', 'MEDELLÍN', '4.710988599999999', '-74.072092', 25, 'Somos una plataforma de articulación de colectivos e individuos que resisten en el territorio', 'photo-profile.jpg', 'photo-profile-peq.jpg', '$2y$10$0K6/HVgKhARTLUv39DCkNOxOUL7qheVziEbDvVp4ATcXko4iFLhOW', NULL, '2016-07-25 16:58:12', '2016-07-24 02:02:14', 1, 'Mn63WR5fJfjZkAx7qC1N3WW6v3jJDJtturOtLmOF'),
('Todos por la Educación', '', 'user', '', '', 'medellin@todosporlaeducacion.co', 'Medellín', '6.249755167990681', '-75.56787448150635', 10, 'Todos por la Educación es un movimiento ciudadano que busca movilizar a todos los actores y sectores de la sociedad, para que la educación sea la principal estrategia de equidad, desarrollo y paz, y por tanto, una prioridad nacional. Sin ninguna filiación partidista e independiente de visiones particulares, busca construir a partir de los esfuerzos y las voces de las personas e instituciones que llevan la bandera de la educación, fijando metas concretas que se traduzcan en políticas públicas y generen transformaciones sociales.', '2016-05-12_16-08-17_Todos-por-la-Educacion.jpg', '', '$2y$10$K7r2t2ZLJ0a/f8WFtHav0.L512IFOun/EIr2/jPYN27UCMqQ4H2SK', '6BnQ5fT3wCkDpchzb6U6pYc4urwFs6Zq3aBAEinPZ6oVpKUqZsmW1QopKelT', '2016-07-17 18:36:01', '2016-05-12 23:11:20', 1, NULL),
('Mekanicoz Crew', '', 'user', '', '', 'mekanicozcrew@gmail.com', 'Medellín', '6.273900334194295', '-75.54568724853516', 10, 'Somos un grupo de Break Dance en la comuna 3 de Medellín qué se dedica a la práctica y la formación voluntaria además de la apuesta por la toma de espacios al aire libre para la reivindicación y visibilizacion del arte como herramienta para la vida y la dinámica continúa en la comuna.', '2016-07-01_20-19-09_Mekanicoz-Crew.jpg', '', '$2y$10$tegIo0hL3uUotQGwQ1wBI.9ecxScm3tmo/lopnN/SvFCDn/I4zer.', 'Nn2X0zMOmJqwRwJAOyU3bZnB4CavCwxrZmdAe8Ad9WzTmageaDSXfgILGL7M', '2016-07-19 20:29:57', '2016-07-07 06:46:42', 1, NULL),
('DAW  EL AMAR', 'CARRERA 80 #80', 'user', 'MANUELA ZAPATA  RESTREPO', '2570795/ 3215196439', 'mzapatarestrepo@gmail.com', 'MEDELLIN', '6.278148', '-75.57655', 20, 'Somos  un grupo  que nos  reunimos   hacer  lo que  mas nos gusta  es la danza  hacemos  principalmente  danza oriental, ya  témenos  10 años de conformado  y  somos  hoy en  día  multiplicadoras  de los conocimientos   obtenidos  en tiempo  y lo transmitidos  a  las   niñas  nuevas, el grupo varia  mucho a los deseos  de  participación de las  niñas y jóvenes  que  entren cada  año.', 'photo-profile.jpg', 'photo-profile-peq.jpg', '$2y$10$/p4MKy4TQ4y1FC39nig8RusDe0HOFRGewN.H13.fgs8xH4GJ7FXG.', NULL, '2016-07-25 03:56:38', '2016-07-25 03:56:38', 0, 'TLbvN6QApR3MhbxJJTPyCUpxcSeP7B53IzK6Rmzi'),
('Kolectivo clown Nariz Obrera ', 'Carrera 40# 93- 27', 'user', 'Mauricio Dupuert', '3015568979', 'narizobreraclown@gmail.com', 'MEDELLÍN', '4.710988599999999', '-74.072092', 8, 'Somos un kilectivo de parceros cómplices, hermanos, socios que vemos en el arte una forma de organizarnos para resistir luchar y aportar a la transformación de la sociedad ', 'photo-profile.jpg', 'photo-profile-peq.jpg', '$2y$10$FHUdS7B72xc2Szzf0tcScu9iO12xHqdLBbCiSx925MuxRlFMdvzTy', NULL, '2016-07-24 05:26:41', '2016-07-24 05:26:41', 0, 'A8RLj0qhOY6h55Pn7p6HdNbchd0SsbxN1DkoqaaX'),
('Corporación nucleo de vida ciudadana la salle villa de guadalupe', '', 'user', 'Elkin Galvis', '3892751-3014297966', 'nucleodevidaciudadana@yahoo.es', 'Medellin', '6.244203', '-75.5812119', 8, 'Es una organización social sin animo de lucro de naturaleza comunitaria y de carácter cultural, que promueve los talentos y habilidades artísticas y culturales de niños, jóvenes y adultos de la comuna 3 y zona nororiental de la ciudad de Medellín.', 'Corporacion-nucleo-de-vida-ciudadana-la-salle-villa-de-guadalupe_1.jpg', '', '$2y$10$q2qiJPWpPlMDIeUwxVJIZukf7zXgvsQTh67dmS.V9yw36Ia3w9mYS', NULL, '2016-07-18 06:05:40', '2016-07-18 06:05:40', 0, 'efpmYC7k8Y8wVhrZq5UVlXx1RlWlOS9CGfEzBwwb'),
('FUNDACIÓN SOCIAL PALOMÁ', 'Cra. 21CC # 83B - 55', 'user', 'JOSE ARNULFO URIBE TAMAYO', '5293077 - 3003512020 - 3003416990', 'paglodi@yahoo.com.mx', 'Medellín', '6.27718496937106', '-75.53515791893005', 20, 'La experiencia nace en 1999 cuando llegan varios grupos de población desplazada al barrio Bello oriente y con el fin de resolver necesidades mínimas comunes se generan círculos de intercambio en los sectores y el territorio. a partir de estos procesos se van consolidando organizaciones que buscan atender aspectos concretos con enfoque en derechos y desarrollo comunitario como: niñez, jóvenes, adultos, adulto mayor, soberanía alimentaria, el ambiente, el agua, el manejo de residuos, la construcción de vivienda, el arte, la cultura, la salud, la educación y la formación política.\r\n\r\nLa fundación social palomá es un proceso de base que nace desde la necesidades y la respuesta al conflicto social en la ciudad que vivimos los campesinos y las poblaciones que por diversas formas tuvimos que llegar a la ciudad a construir una propuesta o un proyecto de vida digna.', 'photo-profile.jpg', 'photo-profile-peq.jpg', '$2y$10$.e3uaS2T8ImHxfFes/TVV.MzCSZQ1hZcajBqprdAe3DLYs9vGMKKq', NULL, '2016-07-22 15:27:23', '2016-07-22 22:25:11', 1, NULL),
('Kolectivo Kultural de Bello Oriente', 'Cra 21 CC # 83B - 55', 'user', 'Yoni Restrepo', '5293077 - 3148816036', 'permakulturavivencial@gmail.com', 'Santa Elena', '6.277163640346412', '-75.53500771522522', 8, 'pendiente', 'photo-profile.jpg', 'photo-profile-peq.jpg', '$2y$10$6KPtbz3uRqx86r4e2OSLv.a7CJM.afRMP8k.8uwaNwUsokZPI2D0C', NULL, '2016-07-22 16:51:38', '2016-07-22 23:38:45', 1, NULL),
('Corporación Prodimapa', '', 'user', '', '', 'prodimapa@gmail.com', 'Bello', '6.313181828618369', '-75.57559924346924', 4, 'La Corporación Prodimapa (Programa de Desarrollo Integral Maruchenga, París), es una organización sin animo de lucro que viene impulsando programas en favor de la niñez y los adolescentes, para su sano desarrollo, por medio del fortalecimiento de la familia y la comunidad.', '2016-05-13_20-53-34_Corporacion-Prodimapa.jpg', '', '$2y$10$7KSGpmBYWZwV5Vk5e6j5deOpsdFE4sCyCIpTORrx.K9Wc75k5aKyy', 'bykhRUKa5ep9M4BQENVE9pmWTt6ETehBefJguQBzWpDy36bWhgOGxx49JrgC', '2016-07-17 18:36:01', '2016-05-14 03:59:58', 1, NULL),
('Red Cultural Comuna 4 - Aranjuez', '', 'user', '', '', 'redculturalc4@gmail.com', 'Medellín ', '6.2765344786318025', '-75.56438760978699', 400, 'Hablar de la Red Cultural de la Comuna 4, es hablar de habitantes y organizaciones que atreves del arte y la cultura, hacen un punto de quiebre en su historia para transformar el imaginario de una ciudad que los lee en hechos violentos. Es hablar de un cambio que  reconstruyó el valor de trabajar en comunidad con los vecinos, amigos, pares y familiares del barrio; del situar y reconocer en lo cercano, el valor del otro, la otra y lo otro. Del surgimiento de una generación de líderes culturales, artistas e iniciativas colectivas de sus participantes para la creación de proyectos. De espacios inmateriales y ambulantes como referentes en su presente socio cultural tras el fortalecimiento de sus artistas, grupos, gestores culturales y organizaciones. Donde sus objetivos no se piensen sólo para una Comuna que tiene escenarios adecuados que la hacen referente de ciudad, sino que proponen como proyecto el ejercicio colectivo de articulación en Red con propuestas de integración, creación de organizaciones culturales y reconocimiento de sus integrantes, que contribuyan al desarrollo social y cultural de la Comuna 4 Aranjuez.', '2016-05-12_21-14-03_-Red-Cultural-Comuna-4---Aranjuez.jpg', '', '$2y$10$CII5MxKGe6GxIR.otPPgWeHltR7OlhoWhu318jqyVeWkjqFc4/rEy', NULL, '2016-07-17 18:27:51', '2016-05-13 04:14:03', 1, NULL),
('Smile', 'Calle 47e # 99-120', 'user', 'Valeria Bustamante', '2533800', 'reinita26@gmail.com', 'MEDELLÍN', '4.710988599999999', '-74.072092', 12, 'Somos un grupo que nos basamos en aprender por medio del juegos y recrear otros grupos.', 'photo-profile.jpg', 'photo-profile-peq.jpg', '$2y$10$0tUWbdVvpw4V05.CYnVkDOyKk5GbsY.4Y0UwAW9JYohSZ/ab.bWQi', NULL, '2016-07-24 04:58:57', '2016-07-24 04:58:57', 0, 'u3hk0j02gwTxosjap1VIbPC31HOnrOapPJHStMtL'),
('Huerta Nuevo Horizonte Pinares', '', 'user', 'Berta RoJas', '3103890088', 'rojas2016bertha@gmail.com', 'Medellin', '6.2438039788045', '-75.53714275360107', 40, 'Colectivo de huertas orgánicas del Barrio Pinares de Oriente', 'Huerta-Nuevo-Horizonte-Pinares_1.jpg', '', '$2y$10$UUOcPNNdN7XYD9onXb7z1OhSRhNHloMe7K/nKK0Tuo.K/oJWoxsIG', NULL, '2016-07-18 19:18:50', '2016-07-18 23:48:57', 1, NULL),
('CORPORACIÓN SAL Y LUZ ', '', 'user', '', '', 'Salyluzcorp@yahoo.com', 'Medellin', '6.263960851523291', '-75.56834655029297', 11, '1.	La organización y su trabajo en la región\r\nLa CORPORACIÓN SAL Y LUZ es una entidad sin ánimo de lucro, con personería jurídica y con patrimonio propio. Su domicilio principal es Calle 47 A # 99-82, Comuna 13- San Javier de  la ciudad de Medellín, extendiendo sus acciones a otras zonas del país y del exterior.  La corporación cuenta con una experiencia de veinticinco (25) años en la formulación de planes, programas y proyectos de intervención social y comunitaria participando en investigaciones tales como: Directorio de Organizaciones Juveniles de Medellín. 1995, Corporación Paisa Joven- GTZ, Sistematización de una Experiencia de Participación Política Juvenil. El Consejo Municipal de la Juventud de Medellín. 1997, Corporación Sal y Luz, Secretaría de Bienestar Social Municipio de Medellín, CMJ, entre otros, Caracterización Sociodemográfica de los Jóvenes de la Ciudad de Medellín y Oferta pública- Privada de Servicios para Jóvenes. La Corporación Sal y Luz, hizo parte de la Comisión Técnica de estas dos investigaciones, junto con la Corporación Paisa Joven, la Oficina de la Juventud de Medellín y la Secretaría de Salud de Medellín. 1999-2000.\r\nFundada jurídicamente en el año de 1994,  Sal y Luz internamente ha tenido varias transformaciones que han posibilitado una mejor cobertura de nuestro radio de acción, la renovación generacional del equipo de trabajo y el fortalecimiento de nuestra norma institucional, es decir los estatutos.\r\n¿Qué Hacemos desde La CORPORACIÓN SAL Y LUZ?\r\n1.	Realizar y promover las acciones que conduzcan al logro del objeto de la Corporación. \r\n2.	b). Coordinar con entidades públicas y privadas, el diseño y la ejecución de planes, programas, proyectos y servicios. \r\n3.	c). Celebrar contratos y convenios con personas naturales y/o jurídicas, públicas y privadas en relación con el objeto. \r\n4.	d). Desarrollar convenios de cooperación técnica y financiera, nacional y extranjera. \r\n5.	e). Obtener los recursos financieros, humanos y técnicos para proponer y llevar a cabo sus planes, programas, proyectos y servicios. \r\n6.	f). Prestación de servicios referentes al objeto de ésta, orientados a la comunidad. \r\n7.	g). Prestación de servicios de asesoría, capacitación e investigación en las áreas propias de su objeto.\r\nNuestros Servicios.\r\nA.	Diseño y Gestión de Proyectos de Interés Social.\r\nSal y Luz promueve el diseño, la ejecución y la gestión de proyectos de desarrollo en organizaciones sociales, grupos poblacionales y actores del desarrollo local como grupo meta. \r\nB.	Derechos Humanos y Derecho Internacional Humanitario.\r\nLa Corporación Sal y Luz desarrolla procesos en los territorios, enfocados a la defensa y promoción de los Derechos Humanos, Derecho Internacional Humanitario, los Derechos Fundamentales y los Mecanismos de Protección, todo ello con el fin de formar a los ciudadanos, impulsando procesos sociales como: Escuelas de formación en Derechos Humanos, Derecho Internacional Humanitario, los Derechos Fundamentales y los Mecanismos de Protección; fortalecimiento a escuelas de padres; ferias por la convivencia y los Derechos Humanos; diseño y producción de juegos lúdico pedagógicos con temática en DDHH.\r\n\r\nC.	Investigación Social y Comunitaria.\r\nLa Corporación fomenta y apoya las investigaciones en los diferentes aspectos relacionados con el que hacer comunitario y su transformación, con el fin de tener una comprensión cada vez mayor de la población y un fundamento científico de los planes, programas y proyectos que se adelantan a este nivel.\r\nD.	Participación Ciudadana.\r\nSal y Luz promueve y asesora la creación de espacios y plataformas  de participación ciudadana en pro del desarrollo local, al tiempo que desarrolla acciones orientadas a cualificar los habitantes del territorio con herramientas para lograr una participación sinérgica, efectiva y con incidencia en las decisiones que impactan a estos.\r\n', '2016-06-13_19-12-07_CORPORACIoN-SAL-Y-LUZ-.jpg', '', '$2y$10$wBNO8IaVj5C9vMpA6xeQcu0l/DAiBhQWuDDyLkVC66698lgQHlDTK', NULL, '2016-07-17 18:27:51', '2016-06-14 02:12:08', 1, NULL),
('Colectivo clown Loreto ', 'Carrera 30 # 32b - 48 ', 'user', 'Samuel Tobon', '2533800', 'sanuel.1998@live.com', 'MEDELLÍN', '4.710988599999999', '-74.072092', 6, 'Somos un espacio para expresar lo que uno verdaderamente siente y varias formas de mostrar desde el ridiculo transmitirlo como slfo normal ', 'photo-profile.jpg', 'photo-profile-peq.jpg', '$2y$10$CLU3.y49PS2SO0z1Ox0GVOtRYnKc.oOFvF0.CYLrkciO5LN0Bm8Ii', NULL, '2016-07-24 05:42:33', '2016-07-24 05:42:33', 0, 'HZGXsDQta7lieW2DyobjsbAflxtb5X7b77INeYs9'),
('FUNDACION SENDAS DE PAZ', '', 'user', '', '', 'SENDASDEPAZ25@GMAIL.COM', 'MEDELLIN-ANTIOQUIA', '6.323168355691477', '-75.34913497192383', 5, 'NUESTRO TRABAJO ES ESCUELAS,COLEGIOS Y COMUNIDADES', '2016-05-02_13-20-09_FUNDACION-SENDAS-DE-PAZ.jpg', '', '$2y$10$9tHvpsegZ.Bj3UtONGqtIeOBgyyf08H7d6cEsI/QYAPEUeBeWj5Ji', NULL, '2016-07-17 18:36:01', '2016-05-02 20:20:09', 1, NULL),
('SOLINOSPA ', '', 'user', '', '', 'solinosparecreaciones@gmail.com', 'Medellín ', '6.2807256202578', '-75.541696121521', 8, 'somo una organización conformado por jóvenes comprometidos y convencidos de las transformaciones que se pueden generar en los territorios a partir de los juegos.\r\n\r\ncon una amplia trayectoria en la recreación y desarrollo de actividades luco recreativas, con niños, niñas y adolescentes.   ', '2016-05-16_03-30-30_SOLINOSPA-.jpg', '', '$2y$10$zPN7jy8WSJTkp/5oyunKVuJG7HeDv36onSMPfpvzkunKA/cIO1Ll.', NULL, '2016-07-17 18:27:51', '2016-05-16 10:30:30', 1, NULL),
('Tasqua Zago ', '', 'user', '', '', 'tasquazago2014@gmail.com', 'Medellín ', '6.269207898167675', '-75.54916339141846', 15, 'Tasqua Zago es un grupo de niños, niñas adolescentes y jóvenes de la comuna tres Manrique interesados en  el arte en especial lo escénico,  en su paso por la participación comunitario se  ha articulado  con otros procesos  como la legión de la afecto en la intervención  en comunidades, realizando actividades de integración por medio de recreaciones y ágapes. ', '2016-04-28_05-04-41_Tasqua-Zago-.jpg', '', '$2y$10$g0y6aBSWOFF6sKVESro7BOVMNw4ZMIKqFbRJYrLrzNdotTpWNOJ9O', NULL, '2016-07-17 18:36:18', '2016-04-28 12:04:41', 1, NULL),
('Tejiendo Diversidad En La 13', '', 'user', '', '', 'tejiendodiversidad@gmail.com', 'Medellin ', '6.255087677046131', '-75.6197162173462', 13, 'Tejiendo Diversidad es la mesa LGTBI de la comuna 13 en búsqueda del reconocimiento y visibilizacion de los derechos de la población LGTBI ', '2016-05-13_04-54-05_Tejiendo-Diversidad-En-La-13.jpg', '', '$2y$10$9Ngk/5fyAwKh24iU4oMD1e5KL5f3aQasIn2bGtx8KCCOO7E11/TwC', NULL, '2016-07-17 18:36:01', '2016-05-13 11:54:07', 1, NULL),
('Triangulos de Tinta', 'Cra 25 # 75 C-36 (108)', 'user', 'Leandro Rojas', '3046629461', 'triangulosdetinta@gmail.com', 'Medellin', '6.269442476066276', '-75.53892374038696', 3, 'Somos un grupo de Rap que le apuesta a la generación de música conciencia y contestataria. Además le apostamos al compartir de saberes para la difusión del Hip Hop hacia nuevas generaciones y acciones barriales con sentido comunitario.', 'Triangulos-de-Tinta_1.jpg', '', '$2y$10$Gi.8YHEXGYoHBnhtZStVSefUCcsqQFCHHvXZdmNTzJGJ6e9DfTYd6', 'vX9wGuubefhyrSt3akRZlHa0c162B1fqUmGP2M5kX24iCfiOzN3T6sSV1kaK', '2016-07-20 17:25:09', '2016-07-21 00:25:09', 1, NULL),
('sonbiker', '', 'user', '', '', 'victorflorez01@gmail.com', 'sonsón, antioquia', '5.713888790041927', '-75.3089662097168', 16, 'grupo de jovenes del municipio de sonsón, antioquia, que buscan la apropiacion del territorio mediante la practica del ciclo turismo y senderismo, ademas de la generacion de espacios de esparcimiento del tiempo libre con la practica de deportes relacionados con la bicicleta ', '2016-05-13_06-31-11_sonbiker.jpg', '', '$2y$10$gTQSfrahXairEhhjveCoEeTNS0zfVPt8UPLM/t1NVqsjOBGkqaus.', 'iAcGYXaP2Wdp6RkNmgv6e8uT7p1Yb8zJkA7kLaZuf4mqnBvIxNcfDiMJFG9F', '2016-07-17 18:36:01', '2016-05-14 00:07:17', 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foto`
--

CREATE TABLE IF NOT EXISTS `foto` (
  `actividad` int(11) NOT NULL,
  `url` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`url`),
  KEY `actividad` (`actividad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `foto`
--

INSERT INTO `foto` (`actividad`, `url`) VALUES
(3, 'Recorrido-1-Derecho-A-La-Ciudad_1.jpg'),
(4, 'Recorrido-1-Derecho-A-La-Ciudad_2.jpg'),
(5, 'Recorrido-1-Derecho-A-La-Ciudad_3.jpg'),
(6, 'Recorrido-1-Derecho-A-La-Ciudad_4.jpg'),
(7, 'Recorrido-1-Derecho-A-La-Ciudad_5.jpg'),
(8, 'Recorrido-1-Derecho-A-La-Ciudad_6.jpg'),
(9, 'Recorrido-1-Derecho-A-La-Ciudad_7.jpg'),
(10, 'Recorrido-1-Derecho-A-La-Ciudad_8.jpg'),
(11, 'Recorrido-1-Derecho-A-La-Ciudad_9.jpg'),
(12, 'Recorrido-1-Derecho-A-La-Ciudad_10.jpg'),
(13, 'Recorrido-1-Derecho-A-La-Ciudad_11.jpg'),
(14, 'Recorrido-1-Derecho-A-La-Ciudad_12.jpg'),
(15, 'Dulcita-y-el-burrito_1.jpg'),
(15, 'Dulcita-y-el-burrito_10.jpg'),
(15, 'Dulcita-y-el-burrito_11.jpg'),
(15, 'Dulcita-y-el-burrito_12.jpg'),
(15, 'Dulcita-y-el-burrito_13.jpg'),
(15, 'Dulcita-y-el-burrito_2.jpg'),
(15, 'Dulcita-y-el-burrito_3.jpg'),
(15, 'Dulcita-y-el-burrito_4.jpg'),
(15, 'Dulcita-y-el-burrito_5.jpg'),
(15, 'Dulcita-y-el-burrito_6.jpg'),
(15, 'Dulcita-y-el-burrito_7.jpg'),
(15, 'Dulcita-y-el-burrito_8.jpg'),
(15, 'Dulcita-y-el-burrito_9.jpg'),
(64, 'Semana-de-la-Juventud-Altavista-2016_1.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupoxcategoria`
--

CREATE TABLE IF NOT EXISTS `grupoxcategoria` (
  `grupo` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `categoria` int(11) NOT NULL,
  `tipo` int(11) NOT NULL DEFAULT '2',
  PRIMARY KEY (`grupo`,`categoria`),
  KEY `categoria` (`categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `grupoxcategoria`
--

INSERT INTO `grupoxcategoria` (`grupo`, `categoria`, `tipo`) VALUES
('barulegrupofolclorico@gmail.com', 3, 1),
('blackorchid1523@gmail.com', 3, 1),
('blackorchid1523@gmail.com', 11, 2),
('camibuiles6@gmail.com', 11, 1),
('caro.montoya.91@gmail.com', 2, 2),
('caro.montoya.91@gmail.com', 3, 2),
('caro.montoya.91@gmail.com', 4, 1),
('casamiavidaycultura@gmail.com', 6, 1),
('clubcabe@gmail.com', 3, 2),
('clubcabe@gmail.com', 6, 1),
('clubcabe@gmail.com', 7, 2),
('clubcabe@gmail.com', 8, 2),
('coloniadesanluis2009@gmail.com', 6, 1),
('comparsalunasol@hotmail.com', 3, 1),
('davidcristovaoc@gmail.com', 3, 1),
('davihiphoprap@hotmail.com', 3, 1),
('davihiphoprap@hotmail.com', 7, 2),
('davihiphoprap@hotmail.com', 8, 2),
('dementespensantes2020@gmail.com', 8, 1),
('dinfo2001@hotmail.com', 7, 1),
('dir@iseexp.org', 8, 1),
('dir@iseexp.org', 11, 2),
('Duberyluz@hotmail.com', 3, 1),
('el.daou.amar@gmail.com', 3, 1),
('ericksaenz@outlook.com', 1, 1),
('ericksaenz@outlook.com', 2, 2),
('ericksaenz@outlook.com', 3, 2),
('florcalba@hotmail.com', 3, 1),
('formacion.actitudjuvenil@gmail.com', 3, 1),
('formacion.actitudjuvenil@gmail.com', 7, 2),
('formacion.actitudjuvenil@gmail.com', 8, 2),
('fundacion.trash.art@gmail.com', 3, 1),
('fundacionsoyfuturo@gmail.com', 7, 1),
('info@elatlas.org', 8, 1),
('juanesteban522@gmail.com', 1, 2),
('juanesteban522@gmail.com', 2, 2),
('juanesteban522@gmail.com', 3, 1),
('juanesteban522@gmail.com', 7, 2),
('juanesteban522@gmail.com', 8, 2),
('juanesteban522@gmail.com', 11, 2),
('luna.loaiza@gmail.com', 1, 2),
('luna.loaiza@gmail.com', 3, 2),
('luna.loaiza@gmail.com', 6, 1),
('medellin@todosporlaeducacion.co', 8, 1),
('mzapatarestrepo@gmail.com', 3, 1),
('narizobreraclown@gmail.com', 3, 1),
('nucleodevidaciudadana@yahoo.es', 3, 1),
('nucleodevidaciudadana@yahoo.es', 8, 2),
('paglodi@yahoo.com.mx', 1, 2),
('paglodi@yahoo.com.mx', 2, 2),
('paglodi@yahoo.com.mx', 3, 2),
('paglodi@yahoo.com.mx', 5, 2),
('paglodi@yahoo.com.mx', 6, 2),
('paglodi@yahoo.com.mx', 7, 1),
('paglodi@yahoo.com.mx', 8, 2),
('paglodi@yahoo.com.mx', 9, 2),
('paglodi@yahoo.com.mx', 10, 2),
('paglodi@yahoo.com.mx', 11, 2),
('permakulturavivencial@gmail.com', 1, 2),
('permakulturavivencial@gmail.com', 3, 1),
('permakulturavivencial@gmail.com', 5, 2),
('permakulturavivencial@gmail.com', 8, 2),
('prodimapa@gmail.com', 7, 1),
('redculturalc4@gmail.com', 3, 1),
('reinita26@gmail.com', 5, 1),
('rojas2016bertha@gmail.com', 1, 1),
('Salyluzcorp@yahoo.com', 7, 1),
('sanuel.1998@live.com', 3, 1),
('sanuel.1998@live.com', 5, 2),
('SENDASDEPAZ25@GMAIL.COM', 8, 1),
('solinosparecreaciones@gmail.com', 5, 1),
('tasquazago2014@gmail.com', 3, 1),
('tejiendodiversidad@gmail.com', 6, 1),
('triangulosdetinta@gmail.com', 3, 1),
('triangulosdetinta@gmail.com', 8, 2),
('victorflorez01@gmail.com', 5, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('ericksaenz@outlook.com', '5a3847c5fa8b6dbb37bea7bd50e7aee87fb65472816357c44e816da645af815f', '2016-07-17 12:37:55'),
('casamiavidaycultura@gmail.com', '1005e2812e73a56d756ae7c16ebcb7517d8e6dde023bdc0006b81f144a766d23', '2016-07-24 03:58:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_actividad`
--

CREATE TABLE IF NOT EXISTS `tipo_actividad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tipo_actividad`
--

INSERT INTO `tipo_actividad` (`id`, `nombre`) VALUES
(1, 'Evento'),
(2, 'Recorrido');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Erick Sáenz', 'ericksaenz@outlook.com', '$2y$10$2AZ17IKza0MxSCaS78AvBuWaxP59O5/vx6.jAIb6Fbaa7yeWgaTZq', 'bCADkAtjhLN1nB3ZzN1Ai4zc04KRpKcefDxJ18QPSnq0PEigLHW0nXDNCr16', '2016-01-06 01:54:42', '2016-01-06 01:55:18');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD CONSTRAINT `actividad_ibfk_1` FOREIGN KEY (`grupo`) REFERENCES `cuenta` (`email`) ON UPDATE CASCADE,
  ADD CONSTRAINT `actividad_ibfk_2` FOREIGN KEY (`categoria`) REFERENCES `categoria` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `actividad_ibfk_3` FOREIGN KEY (`tipo`) REFERENCES `tipo_actividad` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `coordenada`
--
ALTER TABLE `coordenada`
  ADD CONSTRAINT `coordenada_ibfk_1` FOREIGN KEY (`actividad`) REFERENCES `actividad` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `foto`
--
ALTER TABLE `foto`
  ADD CONSTRAINT `foto_ibfk_1` FOREIGN KEY (`actividad`) REFERENCES `actividad` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `grupoxcategoria`
--
ALTER TABLE `grupoxcategoria`
  ADD CONSTRAINT `grupoxcategoria_ibfk_1` FOREIGN KEY (`grupo`) REFERENCES `cuenta` (`email`) ON UPDATE CASCADE,
  ADD CONSTRAINT `grupoxcategoria_ibfk_2` FOREIGN KEY (`categoria`) REFERENCES `categoria` (`id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
