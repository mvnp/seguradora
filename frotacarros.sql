-- phpMyAdmin SQL Dump
-- version 4.4.15.1
-- http://www.phpmyadmin.net
--
-- Host: mysql785.umbler.com
-- Generation Time: 11-Ago-2018 às 04:45
-- Versão do servidor: 5.6.38-log
-- PHP Version: 5.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `frotacarros`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin_configs`
--

CREATE TABLE IF NOT EXISTS `admin_configs` (
  `id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `smtp_host` varchar(45) COLLATE utf8_swedish_ci NOT NULL,
  `smtp_from_name` varchar(256) COLLATE utf8_swedish_ci NOT NULL,
  `smtp_from_email` varchar(256) COLLATE utf8_swedish_ci NOT NULL,
  `smtp_reply` varchar(256) COLLATE utf8_swedish_ci NOT NULL,
  `smtp_user` varchar(45) COLLATE utf8_swedish_ci NOT NULL,
  `smtp_email` varchar(45) COLLATE utf8_swedish_ci NOT NULL,
  `stmp_senha` varchar(45) COLLATE utf8_swedish_ci NOT NULL,
  `smtp_port` varchar(45) COLLATE utf8_swedish_ci NOT NULL,
  `smtp_secure` varchar(45) COLLATE utf8_swedish_ci NOT NULL,
  `cadastro` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Extraindo dados da tabela `admin_configs`
--

INSERT INTO `admin_configs` (`id`, `empresa_id`, `smtp_host`, `smtp_from_name`, `smtp_from_email`, `smtp_reply`, `smtp_user`, `smtp_email`, `stmp_senha`, `smtp_port`, `smtp_secure`, `cadastro`) VALUES
(1, 1, 'mail.deempresadigital.com.br', 'AXITECH Web Softwares', 'contact@deempresadigital.com.br', 'reply@deempresadigital.com.br', 'contact@deempresadigital.com.br', 'contact@deempresadigital.com.br', '$2y$10$ZIZXfUpj0S2odCSScA1C9O7xn3gz68wPOzMh1d', '465', 'TLS', '2018-05-05 12:03:13'),
(3, 2, 'mail.frotadeveiculos.com.br', 'Frota de Veículos Santos', 'santos@frotadeveiculos.com.br', 'santos@frotadeveiculos.com.br', 'santos@frotadeveiculos.com.br', 'santos@frotadeveiculos.com.br', '$2y$10$zTZlboD.aNF7.gpyiKg8N.auZ5Yd5OuwsOOs2B', '465', 'TLS', '2018-05-05 12:06:12');

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin_countries`
--

CREATE TABLE IF NOT EXISTS `admin_countries` (
  `id` int(11) NOT NULL,
  `country_code` varchar(2) NOT NULL DEFAULT '',
  `country_name` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB AUTO_INCREMENT=246 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `admin_countries`
--

INSERT INTO `admin_countries` (`id`, `country_code`, `country_name`) VALUES
(1, 'AF', 'Afghanistan'),
(2, 'AL', 'Albania'),
(3, 'DZ', 'Algeria'),
(4, 'DS', 'American Samoa'),
(5, 'AD', 'Andorra'),
(6, 'AO', 'Angola'),
(7, 'AI', 'Anguilla'),
(8, 'AQ', 'Antarctica'),
(9, 'AG', 'Antigua and Barbuda'),
(10, 'AR', 'Argentina'),
(11, 'AM', 'Armenia'),
(12, 'AW', 'Aruba'),
(13, 'AU', 'Australia'),
(14, 'AT', 'Austria'),
(15, 'AZ', 'Azerbaijan'),
(16, 'BS', 'Bahamas'),
(17, 'BH', 'Bahrain'),
(18, 'BD', 'Bangladesh'),
(19, 'BB', 'Barbados'),
(20, 'BY', 'Belarus'),
(21, 'BE', 'Belgium'),
(22, 'BZ', 'Belize'),
(23, 'BJ', 'Benin'),
(24, 'BM', 'Bermuda'),
(25, 'BT', 'Bhutan'),
(26, 'BO', 'Bolivia'),
(27, 'BA', 'Bosnia and Herzegovina'),
(28, 'BW', 'Botswana'),
(29, 'BV', 'Bouvet Island'),
(30, 'BR', 'Brazil'),
(31, 'IO', 'British Indian Ocean Territory'),
(32, 'BN', 'Brunei Darussalam'),
(33, 'BG', 'Bulgaria'),
(34, 'BF', 'Burkina Faso'),
(35, 'BI', 'Burundi'),
(36, 'KH', 'Cambodia'),
(37, 'CM', 'Cameroon'),
(38, 'CA', 'Canada'),
(39, 'CV', 'Cape Verde'),
(40, 'KY', 'Cayman Islands'),
(41, 'CF', 'Central African Republic'),
(42, 'TD', 'Chad'),
(43, 'CL', 'Chile'),
(44, 'CN', 'China'),
(45, 'CX', 'Christmas Island'),
(46, 'CC', 'Cocos (Keeling) Islands'),
(47, 'CO', 'Colombia'),
(48, 'KM', 'Comoros'),
(49, 'CG', 'Congo'),
(50, 'CK', 'Cook Islands'),
(51, 'CR', 'Costa Rica'),
(52, 'HR', 'Croatia (Hrvatska)'),
(53, 'CU', 'Cuba'),
(54, 'CY', 'Cyprus'),
(55, 'CZ', 'Czech Republic'),
(56, 'DK', 'Denmark'),
(57, 'DJ', 'Djibouti'),
(58, 'DM', 'Dominica'),
(59, 'DO', 'Dominican Republic'),
(60, 'TP', 'East Timor'),
(61, 'EC', 'Ecuador'),
(62, 'EG', 'Egypt'),
(63, 'SV', 'El Salvador'),
(64, 'GQ', 'Equatorial Guinea'),
(65, 'ER', 'Eritrea'),
(66, 'EE', 'Estonia'),
(67, 'ET', 'Ethiopia'),
(68, 'FK', 'Falkland Islands (Malvinas)'),
(69, 'FO', 'Faroe Islands'),
(70, 'FJ', 'Fiji'),
(71, 'FI', 'Finland'),
(72, 'FR', 'France'),
(73, 'FX', 'France, Metropolitan'),
(74, 'GF', 'French Guiana'),
(75, 'PF', 'French Polynesia'),
(76, 'TF', 'French Southern Territories'),
(77, 'GA', 'Gabon'),
(78, 'GM', 'Gambia'),
(79, 'GE', 'Georgia'),
(80, 'DE', 'Germany'),
(81, 'GH', 'Ghana'),
(82, 'GI', 'Gibraltar'),
(83, 'GK', 'Guernsey'),
(84, 'GR', 'Greece'),
(85, 'GL', 'Greenland'),
(86, 'GD', 'Grenada'),
(87, 'GP', 'Guadeloupe'),
(88, 'GU', 'Guam'),
(89, 'GT', 'Guatemala'),
(90, 'GN', 'Guinea'),
(91, 'GW', 'Guinea-Bissau'),
(92, 'GY', 'Guyana'),
(93, 'HT', 'Haiti'),
(94, 'HM', 'Heard and Mc Donald Islands'),
(95, 'HN', 'Honduras'),
(96, 'HK', 'Hong Kong'),
(97, 'HU', 'Hungary'),
(98, 'IS', 'Iceland'),
(99, 'IN', 'India'),
(100, 'IM', 'Isle of Man'),
(101, 'ID', 'Indonesia'),
(102, 'IR', 'Iran (Islamic Republic of)'),
(103, 'IQ', 'Iraq'),
(104, 'IE', 'Ireland'),
(105, 'IL', 'Israel'),
(106, 'IT', 'Italy'),
(107, 'CI', 'Ivory Coast'),
(108, 'JE', 'Jersey'),
(109, 'JM', 'Jamaica'),
(110, 'JP', 'Japan'),
(111, 'JO', 'Jordan'),
(112, 'KZ', 'Kazakhstan'),
(113, 'KE', 'Kenya'),
(114, 'KI', 'Kiribati'),
(115, 'KP', 'Korea, Democratic People''s Republic of'),
(116, 'KR', 'Korea, Republic of'),
(117, 'XK', 'Kosovo'),
(118, 'KW', 'Kuwait'),
(119, 'KG', 'Kyrgyzstan'),
(120, 'LA', 'Lao People''s Democratic Republic'),
(121, 'LV', 'Latvia'),
(122, 'LB', 'Lebanon'),
(123, 'LS', 'Lesotho'),
(124, 'LR', 'Liberia'),
(125, 'LY', 'Libyan Arab Jamahiriya'),
(126, 'LI', 'Liechtenstein'),
(127, 'LT', 'Lithuania'),
(128, 'LU', 'Luxembourg'),
(129, 'MO', 'Macau'),
(130, 'MK', 'Macedonia'),
(131, 'MG', 'Madagascar'),
(132, 'MW', 'Malawi'),
(133, 'MY', 'Malaysia'),
(134, 'MV', 'Maldives'),
(135, 'ML', 'Mali'),
(136, 'MT', 'Malta'),
(137, 'MH', 'Marshall Islands'),
(138, 'MQ', 'Martinique'),
(139, 'MR', 'Mauritania'),
(140, 'MU', 'Mauritius'),
(141, 'TY', 'Mayotte'),
(142, 'MX', 'Mexico'),
(143, 'FM', 'Micronesia, Federated States of'),
(144, 'MD', 'Moldova, Republic of'),
(145, 'MC', 'Monaco'),
(146, 'MN', 'Mongolia'),
(147, 'ME', 'Montenegro'),
(148, 'MS', 'Montserrat'),
(149, 'MA', 'Morocco'),
(150, 'MZ', 'Mozambique'),
(151, 'MM', 'Myanmar'),
(152, 'NA', 'Namibia'),
(153, 'NR', 'Nauru'),
(154, 'NP', 'Nepal'),
(155, 'NL', 'Netherlands'),
(156, 'AN', 'Netherlands Antilles'),
(157, 'NC', 'New Caledonia'),
(158, 'NZ', 'New Zealand'),
(159, 'NI', 'Nicaragua'),
(160, 'NE', 'Niger'),
(161, 'NG', 'Nigeria'),
(162, 'NU', 'Niue'),
(163, 'NF', 'Norfolk Island'),
(164, 'MP', 'Northern Mariana Islands'),
(165, 'NO', 'Norway'),
(166, 'OM', 'Oman'),
(167, 'PK', 'Pakistan'),
(168, 'PW', 'Palau'),
(169, 'PS', 'Palestine'),
(170, 'PA', 'Panama'),
(171, 'PG', 'Papua New Guinea'),
(172, 'PY', 'Paraguay'),
(173, 'PE', 'Peru'),
(174, 'PH', 'Philippines'),
(175, 'PN', 'Pitcairn'),
(176, 'PL', 'Poland'),
(177, 'PT', 'Portugal'),
(178, 'PR', 'Puerto Rico'),
(179, 'QA', 'Qatar'),
(180, 'RE', 'Reunion'),
(181, 'RO', 'Romania'),
(182, 'RU', 'Russian Federation'),
(183, 'RW', 'Rwanda'),
(184, 'KN', 'Saint Kitts and Nevis'),
(185, 'LC', 'Saint Lucia'),
(186, 'VC', 'Saint Vincent and the Grenadines'),
(187, 'WS', 'Samoa'),
(188, 'SM', 'San Marino'),
(189, 'ST', 'Sao Tome and Principe'),
(190, 'SA', 'Saudi Arabia'),
(191, 'SN', 'Senegal'),
(192, 'RS', 'Serbia'),
(193, 'SC', 'Seychelles'),
(194, 'SL', 'Sierra Leone'),
(195, 'SG', 'Singapore'),
(196, 'SK', 'Slovakia'),
(197, 'SI', 'Slovenia'),
(198, 'SB', 'Solomon Islands'),
(199, 'SO', 'Somalia'),
(200, 'ZA', 'South Africa'),
(201, 'GS', 'South Georgia South Sandwich Islands'),
(202, 'ES', 'Spain'),
(203, 'LK', 'Sri Lanka'),
(204, 'SH', 'St. Helena'),
(205, 'PM', 'St. Pierre and Miquelon'),
(206, 'SD', 'Sudan'),
(207, 'SR', 'Suriname'),
(208, 'SJ', 'Svalbard and Jan Mayen Islands'),
(209, 'SZ', 'Swaziland'),
(210, 'SE', 'Sweden'),
(211, 'CH', 'Switzerland'),
(212, 'SY', 'Syrian Arab Republic'),
(213, 'TW', 'Taiwan'),
(214, 'TJ', 'Tajikistan'),
(215, 'TZ', 'Tanzania, United Republic of'),
(216, 'TH', 'Thailand'),
(217, 'TG', 'Togo'),
(218, 'TK', 'Tokelau'),
(219, 'TO', 'Tonga'),
(220, 'TT', 'Trinidad and Tobago'),
(221, 'TN', 'Tunisia'),
(222, 'TR', 'Turkey'),
(223, 'TM', 'Turkmenistan'),
(224, 'TC', 'Turks and Caicos Islands'),
(225, 'TV', 'Tuvalu'),
(226, 'UG', 'Uganda'),
(227, 'UA', 'Ukraine'),
(228, 'AE', 'United Arab Emirates'),
(229, 'GB', 'United Kingdom'),
(230, 'US', 'United States'),
(231, 'UM', 'United States minor outlying islands'),
(232, 'UY', 'Uruguay'),
(233, 'UZ', 'Uzbekistan'),
(234, 'VU', 'Vanuatu'),
(235, 'VA', 'Vatican City State'),
(236, 'VE', 'Venezuela'),
(237, 'VN', 'Vietnam'),
(238, 'VG', 'Virgin Islands (British)'),
(239, 'VI', 'Virgin Islands (U.S.)'),
(240, 'WF', 'Wallis and Futuna Islands'),
(241, 'EH', 'Western Sahara'),
(242, 'YE', 'Yemen'),
(243, 'ZR', 'Zaire'),
(244, 'ZM', 'Zambia'),
(245, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin_empresa`
--

CREATE TABLE IF NOT EXISTS `admin_empresa` (
  `id` int(11) NOT NULL,
  `email` varchar(256) COLLATE utf8_swedish_ci NOT NULL,
  `senha` varchar(256) COLLATE utf8_swedish_ci NOT NULL,
  `status` int(11) NOT NULL,
  `cadastro` varchar(256) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Extraindo dados da tabela `admin_empresa`
--

INSERT INTO `admin_empresa` (`id`, `email`, `senha`, `status`, `cadastro`) VALUES
(1, 'empresa@demarketingdigital.com.br', '$2y$10$b9LxPXTz4OXNmNyctPPTAuBuqBCWNzHBnBkWWRVKPocL4PrxrLmni', 1, '2018-05-05 11:40:07'),
(2, 'frota@deveiculossantos.com.br', '$2y$10$3.7Yq9flQUtNb4Cg5RQQXuNQTEJs6/jPhzT387XQG17Cylqrb/Q8O', 0, '2018-05-05 12:04:52'),
(3, 'empresa@depintaura.com.br', '$2y$10$AnmojQSsZquRzT5upZim2ObEtglqAoWCRKkfLBrYLfLY4EijhK1fe', 1, '2018-05-05 12:22:41'),
(4, 'frota@deveiculossanos.com.br', '$2y$10$aC4dkHNpLNcBab.0dkM6qe4E8BrLqLBlmzhK0hB/JVIHR9Q9QMcPW', 1, '2018-05-05 12:39:12'),
(5, 'qualquer@empresa.com.br', '$2y$10$hbQJBAEln7VMqJt4KWaQ3Ovy05Kcvpu5MzculdvbdblPXY6sfnilK', 1, '2018-05-05 12:57:22'),
(6, 'denovo@qualquercoisa.com.br', '$2y$10$9gkeCKJXW.ep80hZBw1g6Of7NlT5j3JWKpy6b90vDqCXcLO1N5FA6', 0, '2018-05-05 12:58:10');

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendamento`
--

CREATE TABLE IF NOT EXISTS `agendamento` (
  `id` int(11) NOT NULL,
  `cars_id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `id_assinante` int(11) NOT NULL,
  `id_retirante` int(11) NOT NULL,
  `id_veiculo` int(11) NOT NULL,
  `data_retirada` datetime NOT NULL,
  `data_devolucao` datetime NOT NULL,
  `autorizado` bit(1) NOT NULL,
  `autorizante` int(11) NOT NULL,
  `cadastro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendamento_sos`
--

CREATE TABLE IF NOT EXISTS `agendamento_sos` (
  `id` int(11) NOT NULL,
  `assinante_id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `fone_assinante` varchar(45) COLLATE utf8_swedish_ci NOT NULL,
  `validade_assinante` datetime NOT NULL,
  `endereco_sos` varchar(256) COLLATE utf8_swedish_ci NOT NULL,
  `fone_sos` varchar(45) COLLATE utf8_swedish_ci NOT NULL,
  `hora_sos` datetime NOT NULL,
  `id_sos` int(11) NOT NULL,
  `longitude` varchar(45) COLLATE utf8_swedish_ci NOT NULL,
  `latitude` varchar(45) COLLATE utf8_swedish_ci NOT NULL,
  `status` bit(1) NOT NULL,
  `cadastro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `agreements`
--

CREATE TABLE IF NOT EXISTS `agreements` (
  `id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `arquivo_url` varchar(256) COLLATE utf8_swedish_ci NOT NULL,
  `idioma_arquivo` varchar(256) COLLATE utf8_swedish_ci NOT NULL,
  `status` bit(1) NOT NULL,
  `cadastro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cars`
--

CREATE TABLE IF NOT EXISTS `cars` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL COMMENT 'proprietário do carro',
  `empresa_id` int(11) NOT NULL,
  `combustivel` varchar(45) COLLATE utf8_swedish_ci NOT NULL,
  `quilometragem` int(11) NOT NULL,
  `cilindradas` varchar(45) COLLATE utf8_swedish_ci NOT NULL,
  `marca` varchar(45) COLLATE utf8_swedish_ci NOT NULL,
  `modelo` varchar(45) COLLATE utf8_swedish_ci NOT NULL,
  `cambio` varchar(45) COLLATE utf8_swedish_ci NOT NULL,
  `valorvenda` double(10,2) DEFAULT NULL,
  `portas` int(11) NOT NULL,
  `assentos` int(11) NOT NULL,
  `cor` varchar(45) COLLATE utf8_swedish_ci NOT NULL,
  `anofabricacao` int(11) NOT NULL,
  `chassicarro` varchar(45) COLLATE utf8_swedish_ci NOT NULL,
  `categoriacondutor` int(11) NOT NULL,
  `status` bit(1) NOT NULL,
  `cadastro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cars_additional`
--

CREATE TABLE IF NOT EXISTS `cars_additional` (
  `id` int(11) NOT NULL,
  `cars_id` int(11) NOT NULL,
  `additional` text COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cars_photos`
--

CREATE TABLE IF NOT EXISTS `cars_photos` (
  `id` int(11) NOT NULL,
  `cars_id` int(11) NOT NULL,
  `image_url` text COLLATE utf8_swedish_ci NOT NULL,
  `status` bit(1) NOT NULL,
  `cadastro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `planos`
--

CREATE TABLE IF NOT EXISTS `planos` (
  `id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `nome` varchar(256) COLLATE utf8_swedish_ci NOT NULL,
  `descricao` text COLLATE utf8_swedish_ci NOT NULL,
  `valor` double(10,2) NOT NULL,
  `validade` int(11) NOT NULL,
  `cadastro` datetime NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Extraindo dados da tabela `planos`
--

INSERT INTO `planos` (`id`, `empresa_id`, `nome`, `descricao`, `valor`, `validade`, `cadastro`, `status`) VALUES
(1, 1, 'STANDART', 'Plano de seguro STANDART', 25.00, 180, '2018-06-16 00:00:00', b'1'),
(2, 1, 'GOLD', 'Plano de seguro GOLD', 75.00, 365, '2018-06-16 00:00:00', b'1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `plan_topics`
--

CREATE TABLE IF NOT EXISTS `plan_topics` (
  `id` int(11) NOT NULL,
  `plans_id` int(11) NOT NULL,
  `descricao` varchar(256) COLLATE utf8_swedish_ci NOT NULL,
  `cadastro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `routes`
--

CREATE TABLE IF NOT EXISTS `routes` (
  `id` int(11) NOT NULL,
  `class` varchar(45) COLLATE utf8_swedish_ci NOT NULL,
  `method` varchar(45) COLLATE utf8_swedish_ci NOT NULL,
  `description` varchar(256) COLLATE utf8_swedish_ci NOT NULL,
  `private` bit(1) NOT NULL,
  `status` bit(1) NOT NULL,
  `cadastro` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Extraindo dados da tabela `routes`
--

INSERT INTO `routes` (`id`, `class`, `method`, `description`, `private`, `status`, `cadastro`) VALUES
(1, 'superadmin', 'configuracoes', 'Configurações adicionais para cada conta no sistema.', b'1', b'1', '2018-05-05 11:39:28'),
(2, 'superadmin', 'listarempresas', 'Lista as empresas habilitadas e não habilitadas a trabalhar com o sistema.', b'1', b'1', '2018-05-05 11:39:47'),
(3, 'superadmin', 'novaempresa', 'Cadastra uma nova empresa dentro do sistema.', b'1', b'1', '2018-05-05 11:39:50'),
(4, 'superadmin', 'editarempresa', 'Edita e-mail e senha de empresas cadastradas no sistema.', b'1', b'1', '2018-05-05 12:08:26'),
(5, 'superadmin', 'desabilitarempresa', 'Habilitar empresa no sistema. Desabilitada, ela nem pode fazer login.', b'1', b'1', '2018-05-05 12:08:46'),
(6, 'superadmin', 'habilitarempresa', 'Habilitar empresa no sistema. Sem habilitar ela nem pode fazer login.', b'1', b'1', '2018-05-05 12:08:51'),
(7, 'superadmin', 'deleteempresa', 'Exclue a empresa e indisponibiliza o uso do sistema pra ela.', b'1', b'1', '2018-05-05 12:14:15'),
(8, 'permissoes', 'listargrupos', 'Permite a listagem de grupos de acessos com funções específicas a cada usuário.', b'1', b'1', '2018-05-06 11:19:25'),
(9, 'permissoes', 'cadastrargrupo', 'Permite o cadastro de grupos de acessos com funções específicas a cada usuário.', b'1', b'1', '2018-05-06 11:19:49'),
(10, 'permissoes', 'editargrupo', 'Permite a edição de grupos de acessos com funções específicas a cada usuário.', b'1', b'1', '2018-05-06 14:42:01'),
(11, 'superadmin', 'listarempresas', 'Lista as empresas habilitadas e não habilitadas a trabalhar com o sistema.', b'1', b'1', '2018-05-29 10:33:20'),
(12, 'permissoes', 'listargrupos', 'Permite a listagem de grupos de acessos com funções específicas a cada usuário.', b'1', b'1', '2018-05-29 10:35:26'),
(13, 'superadmin', 'traducoes', 'Traduzindo o sistema para os idiomas que serão usados.', b'1', b'1', '2018-06-20 11:52:39');

-- --------------------------------------------------------

--
-- Estrutura da tabela `route_groups`
--

CREATE TABLE IF NOT EXISTS `route_groups` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) COLLATE utf8_swedish_ci NOT NULL,
  `description` varchar(256) COLLATE utf8_swedish_ci NOT NULL,
  `status` bit(1) NOT NULL,
  `cadastro` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Extraindo dados da tabela `route_groups`
--

INSERT INTO `route_groups` (`id`, `nome`, `description`, `status`, `cadastro`) VALUES
(10, 'Super administrador', 'Grupo destinado a super administradores', b'1', '2018-05-06 14:11:54'),
(11, 'Administradores', 'Grupo destinado a administradores', b'1', '2018-05-06 14:13:04'),
(12, 'Clientes', 'Grupo destinado a clientes', b'1', '2018-05-06 14:33:00'),
(13, 'Gerentes', 'Grupo destinado a gerentes', b'1', '2018-05-06 14:33:41'),
(14, 'Vendedores', 'Grupo destinado a vendedores', b'1', '2018-05-06 14:34:40');

-- --------------------------------------------------------

--
-- Estrutura da tabela `route_methods`
--

CREATE TABLE IF NOT EXISTS `route_methods` (
  `id` int(11) NOT NULL,
  `groups_id` int(11) NOT NULL,
  `method_id` int(11) NOT NULL,
  `status` bit(1) NOT NULL,
  `cadastro` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Extraindo dados da tabela `route_methods`
--

INSERT INTO `route_methods` (`id`, `groups_id`, `method_id`, `status`, `cadastro`) VALUES
(1, 10, 9, b'1', '2018-05-06 14:11:54'),
(2, 10, 8, b'1', '2018-05-06 14:11:54'),
(3, 10, 1, b'1', '2018-05-06 14:11:54'),
(4, 10, 7, b'1', '2018-05-06 14:11:54'),
(5, 10, 5, b'1', '2018-05-06 14:11:55'),
(6, 10, 4, b'1', '2018-05-06 14:11:55'),
(7, 10, 6, b'1', '2018-05-06 14:11:55'),
(8, 10, 2, b'1', '2018-05-06 14:11:55'),
(9, 10, 3, b'1', '2018-05-06 14:11:55'),
(10, 11, 9, b'1', '2018-05-06 14:13:04'),
(11, 11, 8, b'1', '2018-05-06 14:13:04'),
(12, 11, 1, b'1', '2018-05-06 14:13:04'),
(13, 11, 7, b'1', '2018-05-06 14:13:04'),
(14, 11, 5, b'1', '2018-05-06 14:13:04'),
(15, 11, 4, b'1', '2018-05-06 14:13:05'),
(16, 11, 6, b'1', '2018-05-06 14:13:05'),
(17, 11, 2, b'1', '2018-05-06 14:13:05'),
(18, 11, 3, b'1', '2018-05-06 14:13:05'),
(19, 12, 9, b'1', '2018-05-06 14:33:00'),
(20, 12, 8, b'1', '2018-05-06 14:33:00'),
(21, 12, 1, b'1', '2018-05-06 14:33:00'),
(22, 12, 7, b'1', '2018-05-06 14:33:00'),
(23, 12, 5, b'1', '2018-05-06 14:33:00'),
(24, 12, 4, b'1', '2018-05-06 14:33:00'),
(25, 12, 6, b'1', '2018-05-06 14:33:00'),
(26, 12, 2, b'1', '2018-05-06 14:33:00'),
(27, 13, 9, b'1', '2018-05-06 14:33:41'),
(28, 13, 8, b'1', '2018-05-06 14:33:41'),
(29, 13, 1, b'1', '2018-05-06 14:33:41'),
(30, 13, 7, b'1', '2018-05-06 14:33:41'),
(31, 13, 5, b'1', '2018-05-06 14:33:42'),
(32, 13, 4, b'1', '2018-05-06 14:33:42'),
(33, 13, 6, b'1', '2018-05-06 14:33:42'),
(34, 13, 2, b'1', '2018-05-06 14:33:42'),
(35, 14, 9, b'1', '2018-05-06 14:34:41'),
(36, 14, 8, b'1', '2018-05-06 14:34:41'),
(37, 14, 1, b'1', '2018-05-06 14:34:41'),
(38, 14, 7, b'1', '2018-05-06 14:34:41'),
(39, 14, 5, b'1', '2018-05-06 14:34:41'),
(40, 14, 4, b'1', '2018-05-06 14:34:41'),
(41, 14, 6, b'1', '2018-05-06 14:34:41'),
(42, 14, 2, b'1', '2018-05-06 14:34:41');

-- --------------------------------------------------------

--
-- Estrutura da tabela `route_usergroup`
--

CREATE TABLE IF NOT EXISTS `route_usergroup` (
  `routes_groups_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `plans_id` int(11) NOT NULL,
  `datavenda` datetime NOT NULL,
  `confirmada` bit(1) NOT NULL,
  `cadastro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `traductions`
--

CREATE TABLE IF NOT EXISTS `traductions` (
  `id` int(11) NOT NULL,
  `entrada` text COLLATE utf8_swedish_ci NOT NULL,
  `portuguese` text COLLATE utf8_swedish_ci NOT NULL,
  `spanish` text COLLATE utf8_swedish_ci NOT NULL,
  `english` text COLLATE utf8_swedish_ci NOT NULL,
  `japanese` text COLLATE utf8_swedish_ci NOT NULL,
  `traduzido` int(1) DEFAULT '0',
  `cadastro` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=323 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Extraindo dados da tabela `traductions`
--

INSERT INTO `traductions` (`id`, `entrada`, `portuguese`, `spanish`, `english`, `japanese`, `traduzido`, `cadastro`) VALUES
(1, 'Lista de grupos cadastrados', 'Lista de grupos cadastrados', 'Lista de grupos registrados', 'List of registered groups', '登録されたグループのリスト', 1, '2018-06-20 19:58:48'),
(2, 'Visualizar e gerenciar todos os grupos e permissões cadastrados no sistema.', 'Visualizar e gerenciar todos os grupos e permissões cadastrados no sistema.', 'Ver y administrar todos los grupos y permisos registrados en el sistema.', 'View and manage all groups and permissions that are registered to the system.', 'システムに登録されているすべてのグループおよび権限を表示および管理します。', 1, '2018-06-20 20:03:13'),
(9, 'Cadastrar grupo', 'Cadastrar grupo', 'Publicar un Grupo', 'Create a group', 'グループメンバーシップ', 1, '2018-06-20 20:05:52'),
(10, 'Título', 'Título', 'Título', 'Title', 'タイトル', 1, '2018-06-20 20:07:20'),
(11, 'Descrição', 'Descrição', 'Descripción', 'Description', '商品説明', 1, '2018-06-20 20:06:29'),
(12, 'N° func.', 'N° func.', 'N° func.', 'N° func.', '', 0, '2018-05-06 10:07:47'),
(13, 'Ações', 'Ações', 'Ações', 'Ações', '', 0, '2018-05-06 10:07:47'),
(14, 'Lista de empresas cadastradas', 'Lista de empresas cadastradas', 'Lista de empresas registradas', 'List of registered companies', '登録企業一覧', 1, '2018-06-20 20:18:35'),
(15, 'Visualizar e gerenciar todas as empresas cadastradas no sistema', 'Visualizar e gerenciar todas as empresas cadastradas no sistema', 'Ver y administrar todas las empresas registradas en el sistema', 'View and manage all companies registered in the system', 'システムに登録されているすべての企業の表示と管理', 1, '2018-06-20 20:19:19'),
(16, 'Cadastrar empresa', 'Cadastrar empresa', 'Registrar empresa', 'Company registration', '会社登録', 1, '2018-06-20 20:20:11'),
(17, 'Data cadastro', 'Data cadastro', 'Fecha de registro', 'Date register', 'ホーム', 1, '2018-06-20 20:20:50'),
(18, 'E-mail', 'E-mail', 'E-mail', 'E-mail', '', 0, '2018-05-06 10:12:27'),
(19, 'Deseja realmente desabilitar este grupo no sistema?', 'Deseja realmente desabilitar este grupo no sistema?', '¿Desea realmente deshabilitar este grupo en el sistema?', 'Do you really want to disable this group on the system?', 'あなたは本当にシステム上でこのグループを無効にしますか？', 1, '2018-06-20 20:33:20'),
(20, 'Deseja realmente habilitar este grupo no sistema?', 'Deseja realmente habilitar este grupo no sistema?', 'Deseja realmente habilitar este grupo no sistema?', 'Deseja realmente habilitar este grupo no sistema?', '', 0, '2018-05-06 10:15:37'),
(24, 'Deseja realmente habilitar este usuário?', 'Deseja realmente habilitar este usuário?', 'Deseja realmente habilitar este usuário?', 'Deseja realmente habilitar este usuário?', '', 0, '2018-05-06 10:18:12'),
(25, 'Deseja realmente excluir este usuário?', 'Deseja realmente excluir este usuário?', 'Deseja realmente excluir este usuário?', 'Deseja realmente excluir este usuário?', '', 0, '2018-05-06 10:18:12'),
(26, 'Deseja realmente desabilitar este usuário?', 'Deseja realmente desabilitar este usuário?', '¿Desea realmente deshabilitar este usuario?', 'Do you really want to disable this user?', '本当にこのユーザーを無効にしますか？', 1, '2018-06-20 20:46:46'),
(27, 'Formulário de cadastro de empresas', 'Formulário de cadastro de empresas', 'Formulario de registro de empresas', 'Company registration form', 'ビジネス登録フォーム', 1, '2018-06-20 20:47:23'),
(28, 'O cadastro inicial para que a empresa possa ultizar o sistema é feito neste formulário.', 'O cadastro inicial para que a empresa possa ultizar o sistema é feito neste formulário.', 'El registro inicial para que la empresa pueda utilizar el sistema se hace en este formulario.', 'The initial registration so that the company can use the system is done in this form.', '会社がシステムを使用できるように最初の登録はこの形式で行われます。', 1, '2018-06-20 20:36:06'),
(29, 'E-mail: ', 'E-mail: ', 'E-mail:', 'Email:', 'あなたのメールアドレス：', 1, '2018-06-20 20:48:03'),
(30, 'Campo obrigatório.', 'Campo obrigatório.', 'Campo obligatorio.', 'Required field.', '必須フィールド。', 1, '2018-06-20 20:48:27'),
(31, 'Senha: ', 'Senha: ', 'Contraseña:', 'Password:', 'パスワード：', 1, '2018-06-20 20:48:58'),
(32, 'Confirmar senha: ', 'Confirmar senha: ', 'Confirmar seña:', 'Confirm password:', 'パスワードの確認：', 1, '2018-06-20 20:49:26'),
(33, 'Editar', 'Editar', 'Editar', 'Edit', '編集', 1, '2018-06-20 20:49:54'),
(34, 'Listar empresas', 'Listar empresas', 'Listado de empresas', 'List companies', 'リストの企業', 1, '2018-06-20 20:50:25'),
(35, 'Nenhum usuário selecionado.', 'Nenhum usuário selecionado.', 'Ningún usuario seleccionado.', 'No user selected.', 'ユーザーは選択されていません。', 1, '2018-06-20 20:50:51'),
(36, 'Remetente nome: ', 'Remetente nome: ', 'Nombre del remitente:', 'Sender''s name:', '送信者の名前：', 1, '2018-06-20 20:51:16'),
(37, 'Remetente e-mail: ', 'Remetente e-mail: ', 'Remetente e-mail: ', 'Remetente e-mail: ', '', 0, '2018-05-06 10:23:34'),
(38, 'Responder para: ', 'Responder para: ', 'Responder para: ', 'Responder para: ', '', 0, '2018-05-06 10:23:34'),
(39, 'Hostname SMTP: ', 'Hostname SMTP: ', 'Hostname SMTP: ', 'Hostname SMTP: ', '', 0, '2018-05-06 10:23:34'),
(40, 'Usuário SMTP: ', 'Usuário SMTP: ', 'Usuário SMTP: ', 'Usuário SMTP: ', '', 0, '2018-05-06 10:23:34'),
(41, 'Mail SMTP: ', 'Mail SMTP: ', 'Mail SMTP: ', 'Mail SMTP: ', '', 0, '2018-05-06 10:23:34'),
(42, 'Senha SMTP: ', 'Senha SMTP: ', 'Senha SMTP: ', 'Senha SMTP: ', '', 0, '2018-05-06 10:23:34'),
(43, 'Confirmar senha SMTP: ', 'Confirmar senha SMTP: ', 'Confirmar senha SMTP: ', 'Confirmar senha SMTP: ', '', 0, '2018-05-06 10:23:34'),
(44, 'Porta SMTP: ', 'Porta SMTP: ', 'Porta SMTP: ', 'Porta SMTP: ', '', 0, '2018-05-06 10:23:34'),
(45, 'Tipo de criptografia (SSL, TLS): ', 'Tipo de criptografia (SSL, TLS): ', 'Tipo de criptografia (SSL, TLS): ', 'Tipo de criptografia (SSL, TLS): ', '', 0, '2018-05-06 10:23:35'),
(46, 'Cadastrar', 'Cadastrar', 'Cadastrar', 'Cadastrar', '', 0, '2018-05-06 10:23:35'),
(47, 'Configurações da conta do usuário', 'Configurações da conta do usuário', 'Configurações da conta do usuário', 'Configurações da conta do usuário', '', 0, '2018-05-06 10:24:54'),
(48, 'Algumas configurações do usuário do sistema como informações de e-mail, recursos do sistema.', 'Algumas configurações do usuário do sistema como informações de e-mail, recursos do sistema.', 'Algumas configurações do usuário do sistema como informações de e-mail, recursos do sistema.', 'Algumas configurações do usuário do sistema como informações de e-mail, recursos do sistema.', '', 0, '2018-05-06 10:24:54'),
(49, 'Cadastra uma nova empresa dentro do sistema.', 'Cadastra uma nova empresa dentro do sistema.', 'Cadastra uma nova empresa dentro do sistema.', 'Cadastra uma nova empresa dentro do sistema.', '', 0, '2018-05-06 10:27:05'),
(50, 'Deseja realmente excluir este registro? Processo irreversível.', 'Deseja realmente excluir este registro? Processo irreversível.', '¿Desea realmente eliminar este registro? Proceso irreversible.', 'Do you really want to delete this record? Irreversible process.', '本当にこのレコードを削除しますか？ 不可逆的なプロセス。', 1, '2018-06-21 11:34:58'),
(51, 'Administradores', 'Administradores', 'Administradores', 'Administrators', '管理者', 1, '2018-06-21 11:35:22'),
(52, 'Clientes', 'Clientes', 'Clientes', 'Customers', '顧客', 1, '2018-06-21 11:35:43'),
(53, 'Gerentes', 'Gerentes', 'Administradores', 'Managers', 'マネージャー', 1, '2018-06-21 11:36:15'),
(54, 'Superadministradores', 'Superadministradores', 'Súper Administradores', 'Super Administrators', 'スーパー管理者', 1, '2018-06-21 11:36:49'),
(55, 'Vendedores', 'Vendedores', 'Vendedores', 'Sellers', '売り手', 1, '2018-06-21 11:37:34'),
(56, 'Este grupo contêm todas as permissões do sistema exceto acesso as funções de superadministradores', 'Este grupo contêm todas as permissões do sistema exceto acesso as funções de superadministradores', 'Este grupo contiene todos los permisos del sistema excepto el acceso a las funciones de superadministradores', 'This group contains all system permissions except access the super administrator roles', 'このグループには、スーパー管理者ロールへのアクセスを除くすべてのシステムアクセス許可が含まれています', 1, '2018-06-21 11:38:16'),
(57, 'Este grupo contêm as funções destinadas a gestãio de cadastro do próprio cliente', 'Este grupo contêm as funções destinadas a gestão de cadastro do próprio cliente.', 'Este grupo contiene las funciones destinadas a la gestión de registros del propio cliente.', 'This group contains the functions for managing the customer''s own records.', 'このグループには、顧客自身のレコードを管理するための機能が含まれています。', 1, '2018-06-21 11:39:00'),
(58, 'Este grupo contêm as permissões de gestão mas não as funções para apagar registros do banco de dados', 'Este grupo contêm as permissões de gestão mas não as funções para apagar registros do banco de dados', 'Este grupo contiene los permisos de administración pero no las funciones para eliminar registros de la base de datos', 'This group contains the management permissions but not the functions for deleting records from the database', 'このグループには管理権限が含まれていますが、データベースからレコードを削除する機能はありません', 1, '2018-06-21 11:39:34'),
(59, 'Este grupo comtêm todas as permissões do sistema.', 'Este grupo contêm todas as permissões do sistema.', 'Este grupo contiene todos los permisos del sistema.', 'This group contains all system permissions.', 'このグループには、すべてのシステム権限が含まれています。', 1, '2018-06-21 11:40:09'),
(60, 'Este grupo tem acesso as vendas e gestão de recursos financeiros próprios no sistema.', 'Este grupo tem acesso as vendas e gestão de recursos financeiros próprios no sistema.', 'Este grupo tiene acceso a las ventas y gestión de recursos financieros propios en el sistema.', 'This group has access to sales and management of own financial resources in the system.', 'このグループは、システム内の自己財務リソースの販売および管理にアクセスできます。', 1, '2018-06-21 11:41:03'),
(61, 'Formulário de edição de e-mail e senha', 'Formulário de edição de e-mail e senha', 'Formulario de edición de correo electrónico y contraseña', 'E-mail and password editing form', '電子メールとパスワードの編集フォーム', 1, '2018-06-21 11:41:40'),
(62, 'Através desse formulário, será possível editar o e-mail e senha de um determinado usuário..', 'Através desse formulário, será possível editar o e-mail e senha de um determinado usuário.', 'A través de este formulario, podrá editar el e-mail y la contraseña de un usuario determinado.', 'Through this form, you can edit the e-mail and password of a certain user.', 'このフォームを使用すると、特定のユーザーの電子メールとパスワードを編集できます。', 1, '2018-06-21 11:42:34'),
(63, 'Cadastrar empresas', 'Cadastrar empresas', 'Create companies', 'Create companies', '企業を作る', 1, '2018-06-21 11:43:17'),
(64, 'Permite a listagem de grupos de acessos com funções específicas a cada usuário.', 'Permite a listagem de grupos de acessos com funções específicas a cada usuário.', 'Permite la lista de grupos de acceso con funciones específicas a cada usuario.', 'Allows the listing of groups of accesses with specific functions to each user.', '特定の機能を持つアクセスグループのリストを各ユーザーに許可します。', 1, '2018-06-21 11:43:52'),
(65, 'Permite o cadastro de grupos de acessos com funções específicas a cada usuário.', 'Permite o cadastro de grupos de acessos com funções específicas a cada usuário.', 'Permite el registro de grupos de acceso con funciones específicas a cada usuario.', 'Allows the registration of groups of accesses with functions specific to each user.', '各ユーザーに固有の機能を持つアクセスグループの登録を許可します。', 1, '2018-06-21 11:51:12'),
(66, 'permissoes', 'permissões', 'permisos', 'permissions', '許可', 1, '2018-06-21 11:52:19'),
(67, 'superadmin', 'superadmin', 'superadmin', 'superadmin', '', 0, '2018-05-06 11:48:09'),
(68, 'cadastrargrupo', 'cadastrargrupo', 'cadastrargrupo', 'cadastrargrupo', '', 0, '2018-05-06 13:15:01'),
(69, 'listargrupos', 'listargrupos', 'listargrupos', 'listargrupos', '', 0, '2018-05-06 13:15:01'),
(70, 'configuracoes', 'configuracoes', 'configuracoes', 'configuracoes', '', 0, '2018-05-06 13:15:02'),
(71, 'Configurações adicionais para cada conta no sistema.', 'Configurações adicionais para cada conta no sistema.', 'Configuración adicional para cada cuenta del sistema.', 'Additional settings for each account in the system.', 'システム内の各アカウントの追加設定。', 1, '2018-06-21 11:53:19'),
(72, 'deleteempresa', 'deleteempresa', 'deleteempresa', 'deleteempresa', '', 0, '2018-05-06 13:15:02'),
(73, 'Exclue a empresa e indisponibiliza o uso do sistema pra ela.', 'Excluí a empresa e não disponibiliza o uso do sistema pra ela.', 'Exclue a empresa e indisponibiliza o uso do sistema pra ela.', 'Excludes the company and does not make use of the system for it.', '会社を除外し、システムを使用しません。', 1, '2018-06-21 11:54:46'),
(74, 'desabilitarempresa', 'desabilitarempresa', 'desabilitarempresa', 'desabilitarempresa', '', 0, '2018-05-06 13:15:02'),
(75, 'Habilitar empresa no sistema. Desabilitada, ela nem pode fazer login.', 'Habilitar empresa no sistema. Desabilitada, ela nem pode fazer login.', 'Habilitar la empresa en el sistema. Deshabilitada, no puede iniciar sesión.', 'Enable company in the system. Disabled, she can not even login.', 'システム内のエンタープライズを有効にします。 無効にすると、彼女はログインすることさえできません。', 1, '2018-06-21 11:55:32'),
(76, 'editarempresa', 'editarempresa', 'editarempresa', 'editarempresa', '', 0, '2018-05-06 13:15:02'),
(77, 'Edita e-mail e senha de empresas cadastradas no sistema.', 'Edita e-mail e senha de empresas cadastradas no sistema.', 'Edita e-mail e senha de empresas cadastradas no sistema.', 'Edita e-mail e senha de empresas cadastradas no sistema.', '', 0, '2018-05-06 13:15:02'),
(78, 'habilitarempresa', 'habilitarempresa', 'habilitarempresa', 'habilitarempresa', '', 0, '2018-05-06 13:15:02'),
(79, 'Habilitar empresa no sistema. Sem habilitar ela nem pode fazer login.', 'Habilitar empresa no sistema. Sem habilitar ela nem pode fazer login.', 'Habilitar empresa no sistema. Sem habilitar ela nem pode fazer login.', 'Habilitar empresa no sistema. Sem habilitar ela nem pode fazer login.', '', 0, '2018-05-06 13:15:02'),
(80, 'listarempresas', 'listarempresas', 'listarempresas', 'listarempresas', '', 0, '2018-05-06 13:15:02'),
(81, 'Lista as empresas habilitadas e não habilitadas a trabalhar com o sistema.', 'Lista as empresas habilitadas e não habilitadas a trabalhar com o sistema.', 'Lista as empresas habilitadas e não habilitadas a trabalhar com o sistema.', 'Lista as empresas habilitadas e não habilitadas a trabalhar com o sistema.', '', 0, '2018-05-06 13:15:03'),
(82, 'novaempresa', 'novaempresa', 'novaempresa', 'novaempresa', '', 0, '2018-05-06 13:15:03'),
(83, 'nome do grupo', 'nome do grupo', 'nome do grupo', 'nome do grupo', '', 0, '2018-05-06 13:51:34'),
(84, 'descrição do grupo', 'descrição do grupo', 'descrição do grupo', 'descrição do grupo', '', 0, '2018-05-06 13:51:34'),
(85, 'O grupo foi cadastrado com sucesso e está pronto para uso.', 'O grupo foi cadastrado com sucesso e está pronto para uso.', 'O grupo foi cadastrado com sucesso e está pronto para uso.', 'O grupo foi cadastrado com sucesso e está pronto para uso.', '', 0, '2018-05-06 14:02:54'),
(86, 'Este grupo contêm todas as permissões do sistema exceto acesso as funções de super-administradores.', 'Este grupo contêm todas as permissões do sistema exceto acesso as funções de super-administradores.', 'Este grupo contêm todas as permissões do sistema exceto acesso as funções de super-administradores.', 'Este grupo contêm todas as permissões do sistema exceto acesso as funções de super-administradores.', '', 0, '2018-05-06 14:13:08'),
(87, 'Super administrador', 'Super administrador', 'Super administrador', 'Super administrador', '', 0, '2018-05-06 14:30:26'),
(88, 'Permite a edição de grupos de acessos com funções específicas a cada usuário.', 'Permite a edição de grupos de acessos com funções específicas a cada usuário.', 'Permite a edição de grupos de acessos com funções específicas a cada usuário.', 'Permite a edição de grupos de acessos com funções específicas a cada usuário.', '', 0, '2018-05-06 14:42:01'),
(89, 'Nenhum grupo foi selecionado.', 'Nenhum grupo foi selecionado.', 'Nenhum grupo foi selecionado.', 'Nenhum grupo foi selecionado.', '', 0, '2018-05-06 14:42:38'),
(90, 'editargrupo', 'editargrupo', 'editargrupo', 'editargrupo', '', 0, '2018-05-06 14:43:18'),
(91, 'Grupo destinado a administradores', 'Grupo destinado a administradores', 'Grupo destinado a administradores', 'Grupo destinado a administradores', '', 0, '2018-05-22 16:33:26'),
(92, 'Grupo destinado a administradores', 'Grupo destinado a administradores', 'Grupo destinado a administradores', 'Grupo destinado a administradores', '', 0, '2018-05-22 16:33:25'),
(93, 'Grupo destinado a clientes', 'Grupo destinado a clientes', 'Grupo destinado a clientes', 'Grupo destinado a clientes', '', 0, '2018-05-22 16:33:26'),
(94, 'Grupo destinado a gerentes', 'Grupo destinado a gerentes', 'Grupo destinado a gerentes', 'Grupo destinado a gerentes', '', 0, '2018-05-22 16:33:26'),
(95, 'Grupo destinado a super administradores', 'Grupo destinado a super administradores', 'Grupo destinado a super administradores', 'Grupo destinado a super administradores', '', 0, '2018-05-22 16:33:26'),
(96, 'Grupo destinado a vendedores', 'Grupo destinado a vendedores', 'Grupo destinado a vendedores', 'Grupo destinado a vendedores', '', 0, '2018-05-22 16:33:26'),
(97, 'O usuário foi desabilitado com sucesso.', 'O usuário foi desabilitado com sucesso.', 'O usuário foi desabilitado com sucesso.', 'O usuário foi desabilitado com sucesso.', '', 0, '2018-05-24 11:11:26'),
(98, 'Lista de empresas cadastradas', 'Lista de empresas cadastradas', 'Lista de empresas cadastradas', 'Lista de empresas cadastradas', '', 0, '2018-05-29 10:33:20'),
(99, 'Visualizar e gerenciar todas as empresas cadastradas no sistema', 'Visualizar e gerenciar todas as empresas cadastradas no sistema', 'Visualizar e gerenciar todas as empresas cadastradas no sistema', 'Visualizar e gerenciar todas as empresas cadastradas no sistema', '', 0, '2018-05-29 10:33:20'),
(100, 'Cadastrar empresas', 'Cadastrar empresas', 'Cadastrar empresas', 'Cadastrar empresas', '', 0, '2018-05-29 10:33:20'),
(101, 'E-mail', 'E-mail', 'E-mail', 'E-mail', '', 0, '2018-05-29 10:33:20'),
(102, 'Data cadastro', 'Data cadastro', 'Data cadastro', 'Data cadastro', '', 0, '2018-05-29 10:33:21'),
(103, 'Ações', 'Ações', 'Ações', 'Ações', '', 0, '2018-05-29 10:33:21'),
(104, 'Nenhum registro encontrado.', 'Nenhum registro encontrado.', 'Nenhum registro encontrado.', 'Nenhum registro encontrado.', '', 0, '2018-05-29 10:33:21'),
(105, 'Deseja realmente habilitar este usuário?', 'Deseja realmente habilitar este usuário?', 'Deseja realmente habilitar este usuário?', 'Deseja realmente habilitar este usuário?', '', 0, '2018-05-29 10:35:22'),
(106, 'Deseja realmente excluir este usuário?', 'Deseja realmente excluir este usuário?', 'Deseja realmente excluir este usuário?', 'Deseja realmente excluir este usuário?', '', 0, '2018-05-29 10:35:22'),
(107, 'Deseja realmente desabilitar este usuário?', 'Deseja realmente desabilitar este usuário?', 'Deseja realmente desabilitar este usuário?', 'Deseja realmente desabilitar este usuário?', '', 0, '2018-05-29 10:35:22'),
(108, 'Permite a listagem de grupos de acessos com funções específicas a cada usuário.', 'Permite a listagem de grupos de acessos com funções específicas a cada usuário.', 'Permite a listagem de grupos de acessos com funções específicas a cada usuário.', 'Permite a listagem de grupos de acessos com funções específicas a cada usuário.', '', 0, '2018-05-29 10:35:26'),
(109, 'Lista de grupos cadastrados', 'Lista de grupos cadastrados', 'Lista de grupos cadastrados', 'Lista de grupos cadastrados', '', 0, '2018-05-29 10:35:27'),
(110, 'Visualizar e gerenciar todos os grupos e permissões cadastrados no sistema.', 'Visualizar e gerenciar todos os grupos e permissões cadastrados no sistema.', 'Visualizar e gerenciar todos os grupos e permissões cadastrados no sistema.', 'Visualizar e gerenciar todos os grupos e permissões cadastrados no sistema.', '', 0, '2018-05-29 10:35:27'),
(111, 'Cadastrar grupo', 'Cadastrar grupo', 'Cadastrar grupo', 'Cadastrar grupo', '', 0, '2018-05-29 10:35:27'),
(112, 'Título', 'Título', 'Título', 'Título', '', 0, '2018-05-29 10:35:27'),
(113, 'Descrição', 'Descrição', 'Descrição', 'Descrição', '', 0, '2018-05-29 10:35:27'),
(114, 'N° func.', 'N° func.', 'N° func.', 'N° func.', '', 0, '2018-05-29 10:35:27'),
(115, 'Fale conosco', 'Fale conosco', 'Fale conosco', 'Fale conosco', '', 0, '2018-05-30 09:45:44'),
(116, 'Início', 'Início', 'Início', 'Início', '', 0, '2018-05-30 09:54:48'),
(117, 'FAQ''s', 'FAQ''s', 'FAQ''s', 'FAQ''s', '', 0, '2018-05-30 09:56:59'),
(118, 'Contratar', 'Contratar', 'Contratar', 'Contratar', '', 0, '2018-05-30 09:58:44'),
(119, 'Minha conta', 'Minha conta', 'Minha conta', 'Minha conta', '', 0, '2018-05-30 09:58:44'),
(120, 'Perguntas e respostas', 'Perguntas e respostas', 'Perguntas e respostas', 'Perguntas e respostas', '', 0, '2018-05-30 09:59:48'),
(121, 'A empresa', 'A empresa', 'A empresa', 'A empresa', '', 0, '2018-05-30 10:00:50'),
(122, 'SOS', 'SOS', 'SOS', 'SOS', '', 0, '2018-05-30 10:24:08'),
(123, 'Perguntas e', 'Perguntas e', 'Perguntas e', 'Perguntas e', '', 0, '2018-05-31 10:39:14'),
(124, 'Respostas', 'Respostas', 'Respostas', 'Respostas', '', 0, '2018-05-31 10:39:14'),
(125, 'Entenda como funciona nosso seguro', 'Entenda como funciona nosso seguro', 'Entenda como funciona nosso seguro', 'Entenda como funciona nosso seguro', '', 0, '2018-05-31 10:40:01'),
(126, 'Entenda como funciona nossos seguros', 'Entenda como funciona nossos seguros', 'Entenda como funciona nossos seguros', 'Entenda como funciona nossos seguros', '', 0, '2018-05-31 10:40:22'),
(127, '<h2 class="mb-5">O que temos <strong>pra você?</strong></h2>', '<h2 class="mb-5">O que temos <strong>pra você?</strong></h2>', '<h2 class="mb-5">O que temos <strong>pra você?</strong></h2>', '<h2 class="mb-5">O que temos <strong>pra você?</strong></h2>', '', 0, '2018-05-31 12:09:55'),
(128, 'Saiba mais', 'Saiba mais', 'Saiba mais', 'Saiba mais', '', 0, '2018-05-31 12:11:19'),
(129, 'Nós, da Shelps, temos o imenso prazer em apresentar um trabalho de socorro com uma frota de carros de excelente qualidade. O foco dos nossos serviços e produtos é atender toda a comunidade podendo enviar o socorro no momento em que você mais precisa. Além de um ótimo atendimento com profissionais competentes enviando um carro e um guincho no momento em que você mais precisa, vamos evitar que o valor da franquia do seu seguro automotivo mais completo seja alterado devido ao imprevisto que acabou de acontecer.', 'Nós, da Shelps, temos o imenso prazer em apresentar um trabalho de socorro com uma frota de carros de excelente qualidade. O foco dos nossos serviços e produtos é atender toda a comunidade podendo enviar o socorro no momento em que você mais precisa. Além de um ótimo atendimento com profissionais competentes enviando um carro e um guincho no momento em que você mais precisa, vamos evitar que o valor da franquia do seu seguro automotivo mais completo seja alterado devido ao imprevisto que acabou de acontecer.', 'Nós, da Shelps, temos o imenso prazer em apresentar um trabalho de socorro com uma frota de carros de excelente qualidade. O foco dos nossos serviços e produtos é atender toda a comunidade podendo enviar o socorro no momento em que você mais precisa. Além de um ótimo atendimento com profissionais competentes enviando um carro e um guincho no momento em que você mais precisa, vamos evitar que o valor da franquia do seu seguro automotivo mais completo seja alterado devido ao imprevisto que acabou de acontecer.', 'Nós, da Shelps, temos o imenso prazer em apresentar um trabalho de socorro com uma frota de carros de excelente qualidade. O foco dos nossos serviços e produtos é atender toda a comunidade podendo enviar o socorro no momento em que você mais precisa. Além de um ótimo atendimento com profissionais competentes enviando um carro e um guincho no momento em que você mais precisa, vamos evitar que o valor da franquia do seu seguro automotivo mais completo seja alterado devido ao imprevisto que acabou de acontecer.', '', 0, '2018-05-31 12:16:22'),
(130, 'Nós, da Shelps, temos o imenso prazer em apresentar um trabalho de socorro com uma frota de carros de excelente qualidade. O foco dos nossos serviços e produtos é atender toda a comunidade podendo enviar o socorro no momento em que você mais precisa. Além de um ótimo atendimento com profissionais competentes enviando um carro e um guincho no momento em que você mais precisa, vamos evitar que o valor da franquia do seu seguro automotivo mais completo seja alterado devido ao imprevisto que acabou de acontecer. O foco é te ajudar em todas as etapas arrumando seu carro enquanto você é socorrido.', 'Nós, da Shelps, temos o imenso prazer em apresentar um trabalho de socorro com uma frota de carros de excelente qualidade. O foco dos nossos serviços e produtos é atender toda a comunidade podendo enviar o socorro no momento em que você mais precisa. Além de um ótimo atendimento com profissionais competentes enviando um carro e um guincho no momento em que você mais precisa, vamos evitar que o valor da franquia do seu seguro automotivo mais completo seja alterado devido ao imprevisto que acabou de acontecer. O foco é te ajudar em todas as etapas arrumando seu carro enquanto você é socorrido.', 'Nós, da Shelps, temos o imenso prazer em apresentar um trabalho de socorro com uma frota de carros de excelente qualidade. O foco dos nossos serviços e produtos é atender toda a comunidade podendo enviar o socorro no momento em que você mais precisa. Além de um ótimo atendimento com profissionais competentes enviando um carro e um guincho no momento em que você mais precisa, vamos evitar que o valor da franquia do seu seguro automotivo mais completo seja alterado devido ao imprevisto que acabou de acontecer. O foco é te ajudar em todas as etapas arrumando seu carro enquanto você é socorrido.', 'Nós, da Shelps, temos o imenso prazer em apresentar um trabalho de socorro com uma frota de carros de excelente qualidade. O foco dos nossos serviços e produtos é atender toda a comunidade podendo enviar o socorro no momento em que você mais precisa. Além de um ótimo atendimento com profissionais competentes enviando um carro e um guincho no momento em que você mais precisa, vamos evitar que o valor da franquia do seu seguro automotivo mais completo seja alterado devido ao imprevisto que acabou de acontecer. O foco é te ajudar em todas as etapas arrumando seu carro enquanto você é socorrido.', '', 0, '2018-05-31 12:17:18'),
(131, 'Nós <strong>da Shelps</strong>, temos o imenso prazer em apresentar um trabalho de socorro com uma frota de carros de excelente qualidade. O foco dos nossos serviços e produtos é atender toda a comunidade podendo enviar o socorro no momento em que você mais precisa. Além de um ótimo atendimento com profissionais competentes enviando um carro e um guincho no momento em que você mais precisa, vamos evitar que o valor da franquia do seu seguro automotivo mais completo seja alterado devido ao imprevisto que acabou de acontecer. O foco é te ajudar em todas as etapas arrumando seu carro enquanto você é socorrido.', 'Nós <strong>da Shelps</strong>, temos o imenso prazer em apresentar um trabalho de socorro com uma frota de carros de excelente qualidade. O foco dos nossos serviços e produtos é atender toda a comunidade podendo enviar o socorro no momento em que você mais precisa. Além de um ótimo atendimento com profissionais competentes enviando um carro e um guincho no momento em que você mais precisa, vamos evitar que o valor da franquia do seu seguro automotivo mais completo seja alterado devido ao imprevisto que acabou de acontecer. O foco é te ajudar em todas as etapas arrumando seu carro enquanto você é socorrido.', 'Nós <strong>da Shelps</strong>, temos o imenso prazer em apresentar um trabalho de socorro com uma frota de carros de excelente qualidade. O foco dos nossos serviços e produtos é atender toda a comunidade podendo enviar o socorro no momento em que você mais precisa. Além de um ótimo atendimento com profissionais competentes enviando um carro e um guincho no momento em que você mais precisa, vamos evitar que o valor da franquia do seu seguro automotivo mais completo seja alterado devido ao imprevisto que acabou de acontecer. O foco é te ajudar em todas as etapas arrumando seu carro enquanto você é socorrido.', 'Nós <strong>da Shelps</strong>, temos o imenso prazer em apresentar um trabalho de socorro com uma frota de carros de excelente qualidade. O foco dos nossos serviços e produtos é atender toda a comunidade podendo enviar o socorro no momento em que você mais precisa. Além de um ótimo atendimento com profissionais competentes enviando um carro e um guincho no momento em que você mais precisa, vamos evitar que o valor da franquia do seu seguro automotivo mais completo seja alterado devido ao imprevisto que acabou de acontecer. O foco é te ajudar em todas as etapas arrumando seu carro enquanto você é socorrido.', '', 0, '2018-05-31 12:17:40'),
(132, '<h2 class="heading-dark">Nossos <strong>Serviços</strong></h2>', '<h2 class="heading-dark">Nossos <strong>Serviços</strong></h2>', '<h2 class="heading-dark">Nossos <strong>Serviços</strong></h2>', '<h2 class="heading-dark">Nossos <strong>Serviços</strong></h2>', '', 0, '2018-05-31 12:18:27'),
(133, 'Guincho', 'Guincho', 'Guincho', 'Guincho', '', 0, '2018-05-31 12:25:32'),
(134, 'Socorro 24 horas', 'Socorro 24 horas', 'Socorro 24 horas', 'Socorro 24 horas', '', 0, '2018-05-31 12:25:32'),
(135, 'Mecânica de veículos', 'Mecânica de veículos', 'Mecânica de veículos', 'Mecânica de veículos', '', 0, '2018-05-31 12:25:32'),
(136, 'Carro substituto', 'Carro substituto', 'Carro substituto', 'Carro substituto', '', 0, '2018-05-31 12:25:32'),
(137, 'Assessoria e interpretes', 'Assessoria e interpretes', 'Assessoria e interpretes', 'Assessoria e interpretes', '', 0, '2018-05-31 12:25:32'),
(138, 'Funilaria e pintura', 'Funilaria e pintura', 'Funilaria e pintura', 'Funilaria e pintura', '', 0, '2018-05-31 12:25:32'),
(139, 'Guinchos novos', 'Guinchos novos', 'Guinchos novos', 'Guinchos novos', '', 0, '2018-05-31 12:35:32'),
(140, 'Todos os nossos guinchos são de excelente qualidade permitindo que o seu veículo seja transportado com a maior segurança.', 'Todos os nossos guinchos são de excelente qualidade permitindo que o seu veículo seja transportado com a maior segurança.', 'Todos os nossos guinchos são de excelente qualidade permitindo que o seu veículo seja transportado com a maior segurança.', 'Todos os nossos guinchos são de excelente qualidade permitindo que o seu veículo seja transportado com a maior segurança.', '', 0, '2018-05-31 12:37:08'),
(141, 'Estamos prontos com nossos profissionais e frotas de carro para lhe atender a qualquer momento do dia ou da noite. É só chamar!', 'Estamos prontos com nossos profissionais e frotas de carro para lhe atender a qualquer momento do dia ou da noite. É só chamar!', 'Estamos prontos com nossos profissionais e frotas de carro para lhe atender a qualquer momento do dia ou da noite. É só chamar!', 'Estamos prontos com nossos profissionais e frotas de carro para lhe atender a qualquer momento do dia ou da noite. É só chamar!', '', 0, '2018-05-31 12:38:07'),
(142, 'Temos oficinas especializados para detectar e consertar o seu veículo. Sabemos que o veículo é esencial para o seu dia a dia.', 'Temos oficinas especializados para detectar e consertar o seu veículo. Sabemos que o veículo é esencial para o seu dia a dia.', 'Temos oficinas especializados para detectar e consertar o seu veículo. Sabemos que o veículo é esencial para o seu dia a dia.', 'Temos oficinas especializados para detectar e consertar o seu veículo. Sabemos que o veículo é esencial para o seu dia a dia.', '', 0, '2018-05-31 12:39:42'),
(143, 'Temos oficinas especializados para detectar e consertar o seu veículo. Sabemos que o veículo é essencial para o seu dia a dia.', 'Temos oficinas especializados para detectar e consertar o seu veículo. Sabemos que o veículo é essencial para o seu dia a dia.', 'Temos oficinas especializados para detectar e consertar o seu veículo. Sabemos que o veículo é essencial para o seu dia a dia.', 'Temos oficinas especializados para detectar e consertar o seu veículo. Sabemos que o veículo é essencial para o seu dia a dia.', '', 0, '2018-05-31 12:39:58'),
(144, 'Enquanto consertamos o seu veículo, um outro veículo ficará a disposição e você faltará em seus compromissos importantes.', 'Enquanto consertamos o seu veículo, um outro veículo ficará a disposição e você faltará em seus compromissos importantes.', 'Enquanto consertamos o seu veículo, um outro veículo ficará a disposição e você faltará em seus compromissos importantes.', 'Enquanto consertamos o seu veículo, um outro veículo ficará a disposição e você faltará em seus compromissos importantes.', '', 0, '2018-05-31 12:41:18'),
(145, 'Você se envolveu em um acidente e precisa de alguém para te ajudar com a conversar com os envolvidos? Podemos ajudar.', 'Você se envolveu em um acidente e precisa de alguém para te ajudar com a conversar com os envolvidos? Podemos ajudar.', 'Você se envolveu em um acidente e precisa de alguém para te ajudar com a conversar com os envolvidos? Podemos ajudar.', 'Você se envolveu em um acidente e precisa de alguém para te ajudar com a conversar com os envolvidos? Podemos ajudar.', '', 0, '2018-05-31 12:42:38'),
(146, 'Poderemos também oferecer serviços de funilaria e pintura além de mecânica para deixar o seu carro preparado para a estrada.', 'Poderemos também oferecer serviços de funilaria e pintura além de mecânica para deixar o seu carro preparado para a estrada.', 'Poderemos também oferecer serviços de funilaria e pintura além de mecânica para deixar o seu carro preparado para a estrada.', 'Poderemos também oferecer serviços de funilaria e pintura além de mecânica para deixar o seu carro preparado para a estrada.', '', 0, '2018-05-31 12:43:56'),
(147, '<h2 class="heading-dark"><strong>Depoimentos</strong> de clientes</h2>', '<h2 class="heading-dark"><strong>Depoimentos</strong> de clientes</h2>', '<h2 class="heading-dark"><strong>Depoimentos</strong> de clientes</h2>', '<h2 class="heading-dark"><strong>Depoimentos</strong> de clientes</h2>', '', 0, '2018-05-31 12:43:56'),
(148, '<h2 class="heading-dark">Nossos <strong>Planos</strong></h2>', '<h2 class="heading-dark">Nossos <strong>Planos</strong></h2>', '<h2 class="heading-dark">Nossos <strong>Planos</strong></h2>', '<h2 class="heading-dark">Nossos <strong>Planos</strong></h2>', '', 0, '2018-05-31 12:44:58'),
(149, '<h3>Standard<span>&#165;15</span></h3>', '<h3>Standard<span>&#165;15</span></h3>', '<h3>Standard<span>&#165;15</span></h3>', '<h3>Standard<span>&#165;15</span></h3>', '', 0, '2018-05-31 12:47:56'),
(150, '<h3>Premiun<span>&#165;75</span></h3>', '<h3>Premiun<span>&#165;75</span></h3>', '<h3>Premiun<span>&#165;75</span></h3>', '<h3>Premiun<span>&#165;75</span></h3>', '', 0, '2018-05-31 12:48:33'),
(151, '<a class="btn btn-lg btn-primary" href="#">Contratar</a>', '<a class="btn btn-lg btn-primary" href="#">Contratar</a>', '<a class="btn btn-lg btn-primary" href="#">Contratar</a>', '<a class="btn btn-lg btn-primary" href="#">Contratar</a>', '', 0, '2018-05-31 12:49:03'),
(152, '<a class="btn btn-lg btn-primary" href="#">Contratar agora</a>', '<a class="btn btn-lg btn-primary" href="#">Contratar agora</a>', '<a class="btn btn-lg btn-primary" href="#">Contratar agora</a>', '<a class="btn btn-lg btn-primary" href="#">Contratar agora</a>', '', 0, '2018-05-31 12:49:18'),
(153, '<h3>Standard<span>&#165;15 / ano</span></h3>', '<h3>Standard<span>&#165;15 / ano</span></h3>', '<h3>Standard<span>&#165;15 / ano</span></h3>', '<h3>Standard<span>&#165;15 / ano</span></h3>', '', 0, '2018-05-31 12:51:43'),
(154, '<h3>Standard<span>&#165;7500 / ano</span></h3>', '<h3>Standard<span>&#165;7500 / ano</span></h3>', '<h3>Standard<span>&#165;7500 / ano</span></h3>', '<h3>Standard<span>&#165;7500 / ano</span></h3>', '', 0, '2018-05-31 12:52:04'),
(155, '<h3>Premiun<span>&#165;25000</span></h3>', '<h3>Premiun<span>&#165;25000</span></h3>', '<h3>Premiun<span>&#165;25000</span></h3>', '<h3>Premiun<span>&#165;25000</span></h3>', '', 0, '2018-05-31 12:52:04'),
(156, '<h3>Standard<span>&#165;7500</span></h3>', '<h3>Standard<span>&#165;7500</span></h3>', '<h3>Standard<span>&#165;7500</span></h3>', '<h3>Standard<span>&#165;7500</span></h3>', '', 0, '2018-05-31 12:52:34'),
(157, 'Guincho 24 horas', 'Guincho 24 horas', 'Guincho 24 horas', 'Guincho 24 horas', '', 0, '2018-05-31 12:57:35'),
(158, '365 dias/ano', '365 dias/ano', '365 dias/ano', '365 dias/ano', '', 0, '2018-05-31 12:57:35'),
(159, 'Cobertura 100 km', 'Cobertura 100 km', 'Cobertura 100 km', 'Cobertura 100 km', '', 0, '2018-05-31 12:57:35'),
(160, 'Pane Seca', 'Pane Seca', 'Pane Seca', 'Pane Seca', '', 0, '2018-05-31 12:57:35'),
(161, 'Recarga de Bateria', 'Recarga de Bateria', 'Recarga de Bateria', 'Recarga de Bateria', '', 0, '2018-05-31 12:57:35'),
(162, 'Chaveiro', 'Chaveiro', 'Chaveiro', 'Chaveiro', '', 0, '2018-05-31 12:57:35'),
(163, 'Troca de Pneu', 'Troca de Pneu', 'Troca de Pneu', 'Troca de Pneu', '', 0, '2018-05-31 12:57:35'),
(164, 'Carro Reserva (6 horas)', 'Carro Reserva (6 horas)', 'Carro Reserva (6 horas)', 'Carro Reserva (6 horas)', '', 0, '2018-05-31 12:57:35'),
(165, '<a class="btn btn-block btn-lg btn-primary" href="#">Contratar agora</a>', '<a class="btn btn-block btn-lg btn-primary" href="#">Contratar agora</a>', '<a class="btn btn-block btn-lg btn-primary" href="#">Contratar agora</a>', '<a class="btn btn-block btn-lg btn-primary" href="#">Contratar agora</a>', '', 0, '2018-05-31 12:58:08'),
(166, 'Carro Reserva (até o conserto do carro)', 'Carro Reserva (até o conserto do carro)', 'Carro Reserva (até o conserto do carro)', 'Carro Reserva (até o conserto do carro)', '', 0, '2018-05-31 13:00:09'),
(167, 'Shaken sem taxa de serviço (Verifique contrato)', 'Shaken sem taxa de serviço (Verifique contrato)', 'Shaken sem taxa de serviço (Verifique contrato)', 'Shaken sem taxa de serviço (Verifique contrato)', '', 0, '2018-05-31 13:00:09'),
(168, 'Reparo do carro sem taxa de serviço (Verifique contrato)', 'Reparo do carro sem taxa de serviço (Verifique contrato)', 'Reparo do carro sem taxa de serviço (Verifique contrato)', 'Reparo do carro sem taxa de serviço (Verifique contrato)', '', 0, '2018-05-31 13:00:09'),
(169, 'Descontos na troca de óleo', 'Descontos na troca de óleo', 'Descontos na troca de óleo', 'Descontos na troca de óleo', '', 0, '2018-05-31 13:00:09'),
(170, 'Cobertura 150 km', 'Cobertura 150 km', 'Cobertura 150 km', 'Cobertura 150 km', '', 0, '2018-05-31 13:02:23'),
(171, 'A bateria do meu carro descarregou e eu fiquei sem saber o que fazer. Lembrei que eu tinha a Shelps, chamei eles que prontamente resolveram o problema.', 'A bateria do meu carro descarregou e eu fiquei sem saber o que fazer. Lembrei que eu tinha a Shelps, chamei eles que prontamente resolveram o problema.', 'A bateria do meu carro descarregou e eu fiquei sem saber o que fazer. Lembrei que eu tinha a Shelps, chamei eles que prontamente resolveram o problema.', 'A bateria do meu carro descarregou e eu fiquei sem saber o que fazer. Lembrei que eu tinha a Shelps, chamei eles que prontamente resolveram o problema.', '', 0, '2018-05-31 13:05:21'),
(172, 'A bateria do meu carro descarregou e eu fiquei sem saber o que fazer. Lembrei que tinha a Shelps, chamei eles que prontamente resolveram o problema.', 'A bateria do meu carro descarregou e eu fiquei sem saber o que fazer. Lembrei que tinha a Shelps, chamei eles que prontamente resolveram o problema.', 'A bateria do meu carro descarregou e eu fiquei sem saber o que fazer. Lembrei que tinha a Shelps, chamei eles que prontamente resolveram o problema.', 'A bateria do meu carro descarregou e eu fiquei sem saber o que fazer. Lembrei que tinha a Shelps, chamei eles que prontamente resolveram o problema.', '', 0, '2018-05-31 13:05:41'),
(173, '<p><strong>Marcos Vinicius</strong><span>Contador</span></p>', '<p><strong>Marcos Vinicius</strong><span>Contador</span></p>', '<p><strong>Marcos Vinicius</strong><span>Contador</span></p>', '<p><strong>Marcos Vinicius</strong><span>Contador</span></p>', '', 0, '2018-05-31 13:06:26'),
(174, 'Shaken sem taxa de serviço (Verifique detalhes no contrato)', 'Shaken sem taxa de serviço (Verifique detalhes no contrato)', 'Shaken sem taxa de serviço (Verifique detalhes no contrato)', 'Shaken sem taxa de serviço (Verifique detalhes no contrato)', '', 0, '2018-05-31 13:08:41'),
(175, 'Reparo do carro sem taxa de serviço (Verifique detalhes no contrato)', 'Reparo do carro sem taxa de serviço (Verifique detalhes no contrato)', 'Reparo do carro sem taxa de serviço (Verifique detalhes no contrato)', 'Reparo do carro sem taxa de serviço (Verifique detalhes no contrato)', '', 0, '2018-05-31 13:08:41'),
(176, 'Esqueci a chaves dentro do carro e aí não tem o que fazer, vai quebrar o vidro? O funcionário da Shelps foi maestro em tirar as chaves lá de dentro.', 'Esqueci a chaves dentro do carro e aí não tem o que fazer, vai quebrar o vidro? O funcionário da Shelps foi maestro em tirar as chaves lá de dentro.', 'Esqueci a chaves dentro do carro e aí não tem o que fazer, vai quebrar o vidro? O funcionário da Shelps foi maestro em tirar as chaves lá de dentro.', 'Esqueci a chaves dentro do carro e aí não tem o que fazer, vai quebrar o vidro? O funcionário da Shelps foi maestro em tirar as chaves lá de dentro.', '', 0, '2018-05-31 13:11:18'),
(177, '<p><strong>Sirleii Cristina</strong><span>Administradora</span></p>', '<p><strong>Sirleii Cristina</strong><span>Administradora</span></p>', '<p><strong>Sirleii Cristina</strong><span>Administradora</span></p>', '<p><strong>Sirleii Cristina</strong><span>Administradora</span></p>', '', 0, '2018-05-31 13:11:18'),
(178, 'Acesse rapidamente', 'Acesse rapidamente', 'Acesse rapidamente', 'Acesse rapidamente', '', 0, '2018-05-31 13:12:19'),
(179, 'Newsletter', 'Newsletter', 'Newsletter', 'Newsletter', '', 0, '2018-05-31 13:13:34'),
(180, 'Fique por dentro de tudo que acontece na Shelps e não perca nenhuma novidade e mudanças nos seus serviços e produtos.', 'Fique por dentro de tudo que acontece na Shelps e não perca nenhuma novidade e mudanças nos seus serviços e produtos.', 'Fique por dentro de tudo que acontece na Shelps e não perca nenhuma novidade e mudanças nos seus serviços e produtos.', 'Fique por dentro de tudo que acontece na Shelps e não perca nenhuma novidade e mudanças nos seus serviços e produtos.', '', 0, '2018-05-31 13:13:34'),
(181, 'Seu e-mail', 'Seu e-mail', 'Seu e-mail', 'Seu e-mail', '', 0, '2018-05-31 13:14:08'),
(182, 'Últimas notícias', 'Últimas notícias', 'Últimas notícias', 'Últimas notícias', '', 0, '2018-05-31 13:15:34'),
(183, 'Aguarde...', 'Aguarde...', 'Aguarde...', 'Aguarde...', '', 0, '2018-05-31 13:15:34'),
(184, 'Entre em contato', 'Entre em contato', 'Entre em contato', 'Entre em contato', '', 0, '2018-05-31 13:15:50'),
(185, 'Siga nas redes sociais', 'Siga nas redes sociais', 'Siga nas redes sociais', 'Siga nas redes sociais', '', 0, '2018-05-31 13:16:09'),
(186, 'Endereço: ', 'Endereço: ', 'Endereço: ', 'Endereço: ', '', 0, '2018-05-31 13:18:02'),
(187, 'Phone: ', 'Phone: ', 'Phone: ', 'Phone: ', '', 0, '2018-05-31 13:18:02'),
(188, 'Quem é a Shelps?', 'Quem é a Shelps?', 'Quem é a Shelps?', 'Quem é a Shelps?', '', 0, '2018-05-31 13:19:39'),
(189, 'Shelps é uma prestadora de serviços de emergência veicular, atendendo usuários cadastros.', 'Shelps é uma prestadora de serviços de emergência veicular, atendendo usuários cadastros.', 'Shelps é uma prestadora de serviços de emergência veicular, atendendo usuários cadastros.', 'Shelps é uma prestadora de serviços de emergência veicular, atendendo usuários cadastros.', '', 0, '2018-05-31 13:19:39'),
(190, 'Quais cidades estão cobertas?', 'Quais cidades estão cobertas?', 'Quais cidades estão cobertas?', 'Quais cidades estão cobertas?', '', 0, '2018-05-31 13:21:17'),
(191, 'Quais planos posso contratar?', 'Quais planos posso contratar?', 'Quais planos posso contratar?', 'Quais planos posso contratar?', '', 0, '2018-05-31 13:27:15'),
(192, '<h4 style="margin-top:15px">Plano Standart</h4>', '<h4 style="margin-top:15px">Plano Standart</h4>', '<h4 style="margin-top:15px">Plano Standart</h4>', '<h4 style="margin-top:15px">Plano Standart</h4>', '', 0, '2018-05-31 13:27:15'),
(193, '<h5><strong>100 km a partir da Matriz da empresa</strong></h5>', '<h5><strong>100 km a partir da Matriz da empresa</strong></h5>', '<h5><strong>100 km a partir da Matriz da empresa</strong></h5>', '<h5><strong>100 km a partir da Matriz da empresa</strong></h5>', '', 0, '2018-05-31 13:27:15'),
(194, '<h4 style="margin-top:15px">Plano Premium</h4>', '<h4 style="margin-top:15px">Plano Premium</h4>', '<h4 style="margin-top:15px">Plano Premium</h4>', '<h4 style="margin-top:15px">Plano Premium</h4>', '', 0, '2018-05-31 13:27:16'),
(195, '<h5><strong>150 km a partir da Matriz da empresa</strong></h5>', '<h5><strong>150 km a partir da Matriz da empresa</strong></h5>', '<h5><strong>150 km a partir da Matriz da empresa</strong></h5>', '<h5><strong>150 km a partir da Matriz da empresa</strong></h5>', '', 0, '2018-05-31 13:27:16'),
(196, 'Quais são os serviços prestados pela Shelps?', 'Quais são os serviços prestados pela Shelps?', 'Quais são os serviços prestados pela Shelps?', 'Quais são os serviços prestados pela Shelps?', '', 0, '2018-05-31 13:30:12'),
(197, 'Serviços', 'Serviços', 'Serviços', 'Serviços', '', 0, '2018-05-31 13:31:17'),
(198, '<li>Pane Seca (Falta de combustível)</li>', '<li>Pane Seca (Falta de combustível)</li>', '<li>Pane Seca (Falta de combustível)</li>', '<li>Pane Seca (Falta de combustível)</li>', '', 0, '2018-05-31 13:31:17'),
(199, '<li>Chave (Assistência ao Chaveiro)</li>', '<li>Chave (Assistência ao Chaveiro)</li>', '<li>Chave (Assistência ao Chaveiro)</li>', '<li>Chave (Assistência ao Chaveiro)</li>', '', 0, '2018-05-31 13:31:17'),
(200, '<li>Bateria</li>', '<li>Bateria</li>', '<li>Bateria</li>', '<li>Bateria</li>', '', 0, '2018-05-31 13:31:17'),
(201, '<li>Pneu</li>', '<li>Pneu</li>', '<li>Pneu</li>', '<li>Pneu</li>', '', 0, '2018-05-31 13:31:17'),
(202, '<li>Guincho</li>', '<li>Guincho</li>', '<li>Guincho</li>', '<li>Guincho</li>', '', 0, '2018-05-31 13:31:17'),
(203, 'Quem são os dependentes?', 'Quem são os dependentes?', 'Quem são os dependentes?', 'Quem são os dependentes?', '', 0, '2018-05-31 13:33:33'),
(204, 'A Shelps permite o cadastro de 2 dependentes, que são usuários do mesmo veículo e que residam no mesmo endereço do TITULAR da conta.', 'A Shelps permite o cadastro de 2 dependentes, que são usuários do mesmo veículo e que residam no mesmo endereço do TITULAR da conta.', 'A Shelps permite o cadastro de 2 dependentes, que são usuários do mesmo veículo e que residam no mesmo endereço do TITULAR da conta.', 'A Shelps permite o cadastro de 2 dependentes, que são usuários do mesmo veículo e que residam no mesmo endereço do TITULAR da conta.', '', 0, '2018-05-31 13:33:33'),
(205, 'Quais são os documentos necessários para cadastro??', 'Quais são os documentos necessários para cadastro??', 'Quais são os documentos necessários para cadastro??', 'Quais são os documentos necessários para cadastro??', '', 0, '2018-05-31 13:35:39'),
(206, 'Titular', 'Titular', 'Titular', 'Titular', '', 0, '2018-05-31 13:35:39'),
(207, '<li>Carteira de Habilitação Japonesa</li>', '<li>Carteira de Habilitação Japonesa</li>', '<li>Carteira de Habilitação Japonesa</li>', '<li>Carteira de Habilitação Japonesa</li>', '', 0, '2018-05-31 13:35:39'),
(208, '<li>Documento de licenciamento do automóvel</li>', '<li>Documento de licenciamento do automóvel</li>', '<li>Documento de licenciamento do automóvel</li>', '<li>Documento de licenciamento do automóvel</li>', '', 0, '2018-05-31 13:35:39'),
(209, 'Dependentes', 'Dependentes', 'Dependentes', 'Dependentes', '', 0, '2018-05-31 13:35:39'),
(210, '<li>CCarteira de Habilitação com o mesmo endereço do TITULAR/li>', '<li>CCarteira de Habilitação com o mesmo endereço do TITULAR/li>', '<li>CCarteira de Habilitação com o mesmo endereço do TITULAR/li>', '<li>CCarteira de Habilitação com o mesmo endereço do TITULAR/li>', '', 0, '2018-05-31 13:35:39'),
(211, 'Quais são os documentos necessários para cadastro?', 'Quais são os documentos necessários para cadastro?', 'Quais são os documentos necessários para cadastro?', 'Quais são os documentos necessários para cadastro?', '', 0, '2018-05-31 13:36:04'),
(212, '<li>Carteira de Habilitação com o mesmo endereço do TITULAR/li>', '<li>Carteira de Habilitação com o mesmo endereço do TITULAR/li>', '<li>Carteira de Habilitação com o mesmo endereço do TITULAR/li>', '<li>Carteira de Habilitação com o mesmo endereço do TITULAR/li>', '', 0, '2018-05-31 13:37:40'),
(213, 'Como funciona o pagamento?', 'Como funciona o pagamento?', 'Como funciona o pagamento?', 'Como funciona o pagamento?', '', 0, '2018-05-31 13:37:40'),
(214, 'Para todos os planos disponíveis, o pagamento é anual.', 'Para todos os planos disponíveis, o pagamento é anual.', 'Para todos os planos disponíveis, o pagamento é anual.', 'Para todos os planos disponíveis, o pagamento é anual.', '', 0, '2018-05-31 13:37:40'),
(215, 'Quais são as diferenças entre os Planos Standart e Premium?', 'Quais são as diferenças entre os Planos Standart e Premium?', 'Quais são as diferenças entre os Planos Standart e Premium?', 'Quais são as diferenças entre os Planos Standart e Premium?', '', 0, '2018-05-31 13:37:40'),
(216, 'Exceções para Marca, Modelos ou Tipos de veículos', 'Exceções para Marca, Modelos ou Tipos de veículos', 'Exceções para Marca, Modelos ou Tipos de veículos', 'Exceções para Marca, Modelos ou Tipos de veículos', '', 0, '2018-05-31 13:41:39'),
(217, 'Há excessões por plano:', 'Há excessões por plano:', 'Há excessões por plano:', 'Há excessões por plano:', '', 0, '2018-05-31 13:41:39'),
(218, 'Plano Standart', 'Plano Standart', 'Plano Standart', 'Plano Standart', '', 0, '2018-05-31 13:41:39'),
(219, '<li>Veículos preparados para DRIFT</li>', '<li>Veículos preparados para DRIFT</li>', '<li>Veículos preparados para DRIFT</li>', '<li>Veículos preparados para DRIFT</li>', '', 0, '2018-05-31 13:41:39');
INSERT INTO `traductions` (`id`, `entrada`, `portuguese`, `spanish`, `english`, `japanese`, `traduzido`, `cadastro`) VALUES
(220, '<li>Veículos rebaixados (menos de 10 centímetros do solo</li>', '<li>Veículos rebaixados (menos de 10 centímetros do solo</li>', '<li>Veículos rebaixados (menos de 10 centímetros do solo</li>', '<li>Veículos rebaixados (menos de 10 centímetros do solo</li>', '', 0, '2018-05-31 13:41:39'),
(221, '<li>Veículos com peso maior que 2500 Kg</li>', '<li>Veículos com peso maior que 2500 Kg</li>', '<li>Veículos com peso maior que 2500 Kg</li>', '<li>Veículos com peso maior que 2500 Kg</li>', '', 0, '2018-05-31 13:41:39'),
(222, 'Plano Premiun', 'Plano Premiun', 'Plano Premiun', 'Plano Premiun', '', 0, '2018-05-31 13:42:20'),
(223, '<li>Veículos Importados</li>', '<li>Veículos Importados</li>', '<li>Veículos Importados</li>', '<li>Veículos Importados</li>', '', 0, '2018-05-31 13:42:20'),
(224, 'Licenciamento Veicular (Shaken)', 'Licenciamento Veicular (Shaken)', 'Licenciamento Veicular (Shaken)', 'Licenciamento Veicular (Shaken)', '', 0, '2018-05-31 13:43:47'),
(225, 'A Shelps atua como Agente de licenciamento veicular, serviço de agenciamento é disponível apenas aos associados PREMIUM.', 'A Shelps atua como Agente de licenciamento veicular, serviço de agenciamento é disponível apenas aos associados PREMIUM.', 'A Shelps atua como Agente de licenciamento veicular, serviço de agenciamento é disponível apenas aos associados PREMIUM.', 'A Shelps atua como Agente de licenciamento veicular, serviço de agenciamento é disponível apenas aos associados PREMIUM.', '', 0, '2018-05-31 13:43:47'),
(226, 'Posso pagar o Licenciamento no cartão de crédito', 'Posso pagar o Licenciamento no cartão de crédito', 'Posso pagar o Licenciamento no cartão de crédito', 'Posso pagar o Licenciamento no cartão de crédito', '', 0, '2018-05-31 13:49:00'),
(227, 'Não. A Shelps, para reduzir os custos aos nossos associados, somente aceita os valores decorrentes ao licenciamento e em espécie e em moeda local.', 'Não. A Shelps, para reduzir os custos aos nossos associados, somente aceita os valores decorrentes ao licenciamento e em espécie e em moeda local.', 'Não. A Shelps, para reduzir os custos aos nossos associados, somente aceita os valores decorrentes ao licenciamento e em espécie e em moeda local.', 'Não. A Shelps, para reduzir os custos aos nossos associados, somente aceita os valores decorrentes ao licenciamento e em espécie e em moeda local.', '', 0, '2018-05-31 13:49:00'),
(228, 'O que é Carro Reserva?', 'O que é Carro Reserva?', 'O que é Carro Reserva?', 'O que é Carro Reserva?', '', 0, '2018-05-31 13:49:00'),
(229, 'É o veículo que substituirá, em caso de não haver possibilidade de reparos no local o veículo do associado.', 'É o veículo que substituirá, em caso de não haver possibilidade de reparos no local o veículo do associado.', 'É o veículo que substituirá, em caso de não haver possibilidade de reparos no local o veículo do associado.', 'É o veículo que substituirá, em caso de não haver possibilidade de reparos no local o veículo do associado.', '', 0, '2018-05-31 13:49:00'),
(230, 'Quantas horas posso utilizar o Carro Reserva?', 'Quantas horas posso utilizar o Carro Reserva?', 'Quantas horas posso utilizar o Carro Reserva?', 'Quantas horas posso utilizar o Carro Reserva?', '', 0, '2018-05-31 13:49:00'),
(231, 'O veículo deve ser devolvido no prazo máximo de 6 horas. Associados Premium, o prazo de devolução é até o final do reparo do veículo.', 'O veículo deve ser devolvido no prazo máximo de 6 horas. Associados Premium, o prazo de devolução é até o final do reparo do veículo.', 'O veículo deve ser devolvido no prazo máximo de 6 horas. Associados Premium, o prazo de devolução é até o final do reparo do veículo.', 'O veículo deve ser devolvido no prazo máximo de 6 horas. Associados Premium, o prazo de devolução é até o final do reparo do veículo.', '', 0, '2018-05-31 13:49:00'),
(232, 'Posso escolher o Carro Reserva?', 'Posso escolher o Carro Reserva?', 'Posso escolher o Carro Reserva?', 'Posso escolher o Carro Reserva?', '', 0, '2018-05-31 13:49:00'),
(233, 'Não. O carro disponibilizado aos associados são de acordo com o assinalado no cadastro.', 'Não. O carro disponibilizado aos associados são de acordo com o assinalado no cadastro.', 'Não. O carro disponibilizado aos associados são de acordo com o assinalado no cadastro.', 'Não. O carro disponibilizado aos associados são de acordo com o assinalado no cadastro.', '', 0, '2018-05-31 13:49:00'),
(234, 'Kei Jidousha (Placa Amarela)', 'Kei Jidousha (Placa Amarela)', 'Kei Jidousha (Placa Amarela)', 'Kei Jidousha (Placa Amarela)', '', 0, '2018-05-31 13:49:00'),
(235, '<li>Disponibilizamos um veículo da mesma categoria.</li>', '<li>Disponibilizamos um veículo da mesma categoria.</li>', '<li>Disponibilizamos um veículo da mesma categoria.</li>', '<li>Disponibilizamos um veículo da mesma categoria.</li>', '', 0, '2018-05-31 13:49:00'),
(236, 'Até 5 passageiros (Placa Branca)', 'Até 5 passageiros (Placa Branca)', 'Até 5 passageiros (Placa Branca)', 'Até 5 passageiros (Placa Branca)', '', 0, '2018-05-31 13:49:00'),
(237, 'Acima de 5 passageiros (Placa Branca)', 'Acima de 5 passageiros (Placa Branca)', 'Acima de 5 passageiros (Placa Branca)', 'Acima de 5 passageiros (Placa Branca)', '', 0, '2018-05-31 13:49:00'),
(238, '<li>Disponibilizamos um veículo da classe Wagon.</li>', '<li>Disponibilizamos um veículo da classe Wagon.</li>', '<li>Disponibilizamos um veículo da classe Wagon.</li>', '<li>Disponibilizamos um veículo da classe Wagon.</li>', '', 0, '2018-05-31 13:49:00'),
(239, 'ACESSAR MINHA CONTA', 'ACESSAR MINHA CONTA', 'ACESSAR MINHA CONTA', 'ACESSAR MINHA CONTA', '', 0, '2018-05-31 14:03:58'),
(240, '(Esqueceu a senha?)', '(Esqueceu a senha?)', '(Esqueceu a senha?)', '(Esqueceu a senha?)', '', 0, '2018-05-31 14:05:19'),
(241, 'Password', 'Password', 'Password', 'Password', '', 0, '2018-05-31 14:05:19'),
(242, 'Manter conectado', 'Manter conectado', 'Manter conectado', 'Manter conectado', '', 0, '2018-05-31 14:05:19'),
(243, 'Entrar', 'Entrar', 'Entrar', 'Entrar', '', 0, '2018-05-31 14:05:42'),
(244, 'Insira seu e-mail', 'Insira seu e-mail', 'Insira seu e-mail', 'Insira seu e-mail', '', 0, '2018-05-31 14:06:32'),
(245, 'Insira sua senha', 'Insira sua senha', 'Insira sua senha', 'Insira sua senha', '', 0, '2018-05-31 14:06:32'),
(246, '<li>Carteira de Habilitação com o mesmo endereço do TITULAR</li>', '<li>Carteira de Habilitação com o mesmo endereço do TITULAR</li>', '<li>Carteira de Habilitação com o mesmo endereço do TITULAR</li>', '<li>Carteira de Habilitação com o mesmo endereço do TITULAR</li>', '', 0, '2018-06-01 08:01:54'),
(247, 'A Shelps oferece seguro e excelente preço para urgências automotivas. Confira nossos planos e assine com a gente agora. Se você já é assinante, <strong>faça login.</strong>', 'A Shelps oferece seguro e excelente preço para urgências automotivas. Confira nossos planos e assine com a gente agora. Se você já é assinante, <strong>faça login.</strong>', 'A Shelps oferece seguro e excelente preço para urgências automotivas. Confira nossos planos e assine com a gente agora. Se você já é assinante, <strong>faça login.</strong>', 'A Shelps oferece seguro e excelente preço para urgências automotivas. Confira nossos planos e assine com a gente agora. Se você já é assinante, <strong>faça login.</strong>', '', 0, '2018-06-01 15:39:36'),
(248, 'O SEU CARRO PRECISA', 'O SEU CARRO PRECISA', 'O SEU CARRO PRECISA', 'O SEU CARRO PRECISA', '', 0, '2018-06-01 15:44:48'),
(249, 'DE UM SEGURO?', 'DE UM SEGURO?', 'DE UM SEGURO?', 'DE UM SEGURO?', '', 0, '2018-06-01 15:44:48'),
(250, 'A SHELPS TEM O SEGURO CERTO PRA VOCÊ.', 'A SHELPS TEM O SEGURO CERTO PRA VOCÊ.', 'A SHELPS TEM O SEGURO CERTO PRA VOCÊ.', 'A SHELPS TEM O SEGURO CERTO PRA VOCÊ.', '', 0, '2018-06-01 15:44:48'),
(251, 'ÁREA ADMINISTRATIVA', 'ÁREA ADMINISTRATIVA', 'ÁREA ADMINISTRATIVA', 'ÁREA ADMINISTRATIVA', '', 0, '2018-06-01 15:44:48'),
(252, 'E-mail de cadastro: ', 'E-mail de cadastro: ', 'E-mail de cadastro: ', 'E-mail de cadastro: ', '', 0, '2018-06-01 15:44:49'),
(253, 'Insira o seu e-mail de cadastro.', 'Insira o seu e-mail de cadastro.', 'Insira o seu e-mail de cadastro.', 'Insira o seu e-mail de cadastro.', '', 0, '2018-06-01 15:44:49'),
(254, 'Senha de cadastro: ', 'Senha de cadastro: ', 'Senha de cadastro: ', 'Senha de cadastro: ', '', 0, '2018-06-01 15:44:49'),
(255, 'Insira a sua senha de cadastro.', 'Insira a sua senha de cadastro.', 'Insira a sua senha de cadastro.', 'Insira a sua senha de cadastro.', '', 0, '2018-06-01 15:44:49'),
(256, 'Acessar', 'Acessar', 'Acessar', 'Acessar', '', 0, '2018-06-01 15:44:49'),
(257, 'Acessando...', 'Acessando...', 'Acessando...', 'Acessando...', '', 0, '2018-06-01 15:44:49'),
(258, 'Cadastro de clientes', 'Cadastro de clientes', 'Cadastro de clientes', 'Cadastro de clientes', '', 0, '2018-06-16 07:57:01'),
(259, 'Todos os clientes da frota deverão aparecer listados aqui.', 'Todos os clientes da frota deverão aparecer listados aqui.', 'Todos os clientes da frota deverão aparecer listados aqui.', 'Todos os clientes da frota deverão aparecer listados aqui.', '', 0, '2018-06-16 07:58:21'),
(260, 'Todos os clientes da frota exceto dependentes serão cadastrados através deste formulário.', 'Todos os clientes da frota exceto dependentes serão cadastrados através deste formulário.', 'Todos os clientes da frota exceto dependentes serão cadastrados através deste formulário.', 'Todos os clientes da frota exceto dependentes serão cadastrados através deste formulário.', '', 0, '2018-06-16 07:58:55'),
(261, 'Cadastro de clientes da frota', 'Cadastro de clientes da frota', 'Cadastro de clientes da frota', 'Cadastro de clientes da frota', '', 0, '2018-06-16 08:00:02'),
(262, 'Todos os clientes da frota <strong class=''text-danger''>exceto dependentes</strong> serão cadastrados através deste formulário.', 'Todos os clientes da frota <strong class=''text-danger''>exceto dependentes</strong> serão cadastrados através deste formulário.', 'Todos os clientes da frota <strong class=''text-danger''>exceto dependentes</strong> serão cadastrados através deste formulário.', 'Todos os clientes da frota <strong class=''text-danger''>exceto dependentes</strong> serão cadastrados através deste formulário.', '', 0, '2018-06-16 08:00:39'),
(263, 'Digite nome do cliente: ', 'Digite nome do cliente: ', 'Digite nome do cliente: ', 'Digite nome do cliente: ', '', 0, '2018-06-16 08:03:14'),
(264, 'Digite sobrenome do cliente: ', 'Digite sobrenome do cliente: ', 'Digite sobrenome do cliente: ', 'Digite sobrenome do cliente: ', '', 0, '2018-06-16 08:03:14'),
(265, 'Digite nome: ', 'Digite nome: ', 'Digite nome: ', 'Digite nome: ', '', 0, '2018-06-16 08:09:53'),
(266, 'Digite sobrenome: ', 'Digite sobrenome: ', 'Digite sobrenome: ', 'Digite sobrenome: ', '', 0, '2018-06-16 08:09:53'),
(267, 'Digite email: ', 'Digite email: ', 'Digite email: ', 'Digite email: ', '', 0, '2018-06-16 08:09:53'),
(268, 'Digite telefone: ', 'Digite telefone: ', 'Digite telefone: ', 'Digite telefone: ', '', 0, '2018-06-16 08:09:53'),
(269, 'Digite senha: ', 'Digite senha: ', 'Digite senha: ', 'Digite senha: ', '', 0, '2018-06-16 08:26:25'),
(270, 'Quantidade de dependentes <strong class=''text-danger''>incluso cliente</strong>: ', 'Quantidade de dependentes <strong class=''text-danger''>incluso cliente</strong>: ', 'Quantidade de dependentes <strong class=''text-danger''>incluso cliente</strong>: ', 'Quantidade de dependentes <strong class=''text-danger''>incluso cliente</strong>: ', '', 0, '2018-06-16 08:35:54'),
(271, ' ', ' ', ' ', ' ', '', 0, '2018-06-16 08:40:40'),
(272, 'Selecione status do cliente: ', 'Selecione status do cliente: ', 'Selecione status do cliente: ', 'Selecione status do cliente: ', '', 0, '2018-06-16 08:42:04'),
(273, 'Quantidade de usuários <strong class=''text-danger''>incluso cliente</strong>: ', 'Quantidade de usuários <strong class=''text-danger''>incluso cliente</strong>: ', 'Quantidade de usuários <strong class=''text-danger''>incluso cliente</strong>: ', 'Quantidade de usuários <strong class=''text-danger''>incluso cliente</strong>: ', '', 0, '2018-06-16 08:42:36'),
(274, 'Selecione status: ', 'Selecione status: ', 'Selecione status: ', 'Selecione status: ', '', 0, '2018-06-16 08:43:38'),
(275, '::: DADOS PESSOAIS :::', '::: DADOS PESSOAIS :::', '::: DADOS PESSOAIS :::', '::: DADOS PESSOAIS :::', '', 0, '2018-06-16 09:30:52'),
(276, '::: ENDEREÇO COMPLETO :::', '::: ENDEREÇO COMPLETO :::', '::: ENDEREÇO COMPLETO :::', '::: ENDEREÇO COMPLETO :::', '', 0, '2018-06-16 09:30:52'),
(277, 'Digite cep: ', 'Digite cep: ', 'Digite cep: ', 'Digite cep: ', '', 0, '2018-06-16 12:56:16'),
(278, 'Digite rua: ', 'Digite rua: ', 'Digite rua: ', 'Digite rua: ', '', 0, '2018-06-16 12:56:16'),
(279, 'Digite número: ', 'Digite número: ', 'Digite número: ', 'Digite número: ', '', 0, '2018-06-16 12:56:16'),
(280, 'Digite complemento: ', 'Digite complemento: ', 'Digite complemento: ', 'Digite complemento: ', '', 0, '2018-06-16 13:00:36'),
(281, 'Digite bairro: ', 'Digite bairro: ', 'Digite bairro: ', 'Digite bairro: ', '', 0, '2018-06-16 13:02:02'),
(282, 'Digite cidade: ', 'Digite cidade: ', 'Digite cidade: ', 'Digite cidade: ', '', 0, '2018-06-16 13:02:02'),
(283, 'Digite estado: ', 'Digite estado: ', 'Digite estado: ', 'Digite estado: ', '', 0, '2018-06-16 13:02:02'),
(284, 'Listar clientes', 'Listar clientes', 'Listar clientes', 'Listar clientes', '', 0, '2018-06-16 16:11:40'),
(285, '::: DADOS PROFISSIONAIS :::', '::: DADOS PROFISSIONAIS :::', '::: DADOS PROFISSIONAIS :::', '::: DADOS PROFISSIONAIS :::', '', 0, '2018-06-16 16:28:57'),
(286, 'Digite nome da empresa: ', 'Digite nome da empresa: ', 'Digite nome da empresa: ', 'Digite nome da empresa: ', '', 0, '2018-06-16 16:30:54'),
(287, '::: DADOS PROFISSIONAIS <strong class=''text-warning''>NÃO OBRIGATÓRIO</strong>:::', '::: DADOS PROFISSIONAIS <strong class=''text-warning''>NÃO OBRIGATÓRIO</strong>:::', '::: DADOS PROFISSIONAIS <strong class=''text-warning''>NÃO OBRIGATÓRIO</strong>:::', '::: DADOS PROFISSIONAIS <strong class=''text-warning''>NÃO OBRIGATÓRIO</strong>:::', '', 0, '2018-06-16 16:41:18'),
(288, '::: DADOS PROFISSIONAIS <strong class=''text-danger''>NÃO OBRIGATÓRIO</strong> :::', '::: DADOS PROFISSIONAIS <strong class=''text-danger''>NÃO OBRIGATÓRIO</strong> :::', '::: DADOS PROFISSIONAIS <strong class=''text-danger''>NÃO OBRIGATÓRIO</strong> :::', '::: DADOS PROFISSIONAIS <strong class=''text-danger''>NÃO OBRIGATÓRIO</strong> :::', '', 0, '2018-06-16 16:43:09'),
(289, '::: DADOS PROFISSIONAIS <strong class=''text-danger''>(NÃO OBRIGATÓRIO)</strong> :::', '::: DADOS PROFISSIONAIS <strong class=''text-danger''>(NÃO OBRIGATÓRIO)</strong> :::', '::: DADOS PROFISSIONAIS <strong class=''text-danger''>(NÃO OBRIGATÓRIO)</strong> :::', '::: DADOS PROFISSIONAIS <strong class=''text-danger''>(NÃO OBRIGATÓRIO)</strong> :::', '', 0, '2018-06-16 16:43:29'),
(290, 'Digite latitude: ', 'Digite latitude: ', 'Digite latitude: ', 'Digite latitude: ', '', 0, '2018-06-17 11:08:53'),
(291, 'Digite logitude: ', 'Digite logitude: ', 'Digite logitude: ', 'Digite logitude: ', '', 0, '2018-06-17 11:08:53'),
(292, 'Digite longitude: ', 'Digite longitude: ', 'Digite longitude: ', 'Digite longitude: ', '', 0, '2018-06-17 11:12:17'),
(293, 'Editar clientes da frota', 'Editar clientes da frota', 'Editar clientes da frota', 'Editar clientes da frota', '', 0, '2018-06-17 12:06:21'),
(294, 'Todos os clientes da frota <strong class=''text-danger''>exceto dependentes</strong> serão editados através deste formulário.', 'Todos os clientes da frota <strong class=''text-danger''>exceto dependentes</strong> serão editados através deste formulário.', 'Todos os clientes da frota <strong class=''text-danger''>exceto dependentes</strong> serão editados através deste formulário.', 'Todos os clientes da frota <strong class=''text-danger''>exceto dependentes</strong> serão editados através deste formulário.', '', 0, '2018-06-17 12:06:21'),
(295, 'Edição de clientes da frota', 'Edição de clientes da frota', 'Edição de clientes da frota', 'Edição de clientes da frota', '', 0, '2018-06-17 14:13:40'),
(296, 'Todos os clientes da frota <strong class=''text-danger''>exceto dependentes</strong> serão atualizados através deste formulário.', 'Todos os clientes da frota <strong class=''text-danger''>exceto dependentes</strong> serão atualizados através deste formulário.', 'Todos os clientes da frota <strong class=''text-danger''>exceto dependentes</strong> serão atualizados através deste formulário.', 'Todos os clientes da frota <strong class=''text-danger''>exceto dependentes</strong> serão atualizados através deste formulário.', '', 0, '2018-06-17 14:13:41'),
(297, 'Consulta de clientes da frota', 'Consulta de clientes da frota', 'Consulta de clientes da frota', 'Consulta de clientes da frota', '', 0, '2018-06-18 08:00:24'),
(298, 'Todos os clientes da frota poderão ser consultados através deste formulário.', 'Todos os clientes da frota poderão ser consultados através deste formulário.', 'Todos os clientes da frota poderão ser consultados através deste formulário.', 'Todos os clientes da frota poderão ser consultados através deste formulário.', '', 0, '2018-06-18 08:00:24'),
(299, 'Editar cliente', 'Editar cliente', 'Editar cliente', 'Editar cliente', '', 0, '2018-06-18 08:00:24'),
(300, 'Edita cliente', 'Edita cliente', 'Edita cliente', 'Edita cliente', '', 0, '2018-06-18 08:01:54'),
(301, 'Consultar cliente', 'Consultar cliente', 'Consultar cliente', 'Consultar cliente', '', 0, '2018-06-18 08:02:36'),
(302, 'Lista de clientes', 'Lista de clientes', 'Lista de clientes', 'Lista de clientes', '', 0, '2018-06-18 11:22:41'),
(303, 'Todos os clientes da frota serão listados através deste formulário.', 'Todos os clientes da frota serão listados através deste formulário.', 'Todos os clientes da frota serão listados através deste formulário.', 'Todos os clientes da frota serão listados através deste formulário.', '', 0, '2018-06-18 11:22:41'),
(304, 'Cadastrar cliente', 'Cadastrar cliente', 'Cadastrar cliente', 'Cadastrar cliente', '', 0, '2018-06-18 11:22:41'),
(305, '<a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#defaultModal">Contratar agora</a>', '<a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#defaultModal">Contratar agora</a>', '<a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#defaultModal">Contratar agora</a>', '<a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#defaultModal">Contratar agora</a>', '', 0, '2018-06-18 23:59:02'),
(306, '<a class="btn btn-primary btn-block btn-lg" data-toggle="modal" data-target="#defaultModal">Contratar agora</a>', '<a class="btn btn-primary btn-block btn-lg" data-toggle="modal" data-target="#defaultModal">Contratar agora</a>', '<a class="btn btn-primary btn-block btn-lg" data-toggle="modal" data-target="#defaultModal">Contratar agora</a>', '<a class="btn btn-primary btn-block btn-lg" data-toggle="modal" data-target="#defaultModal">Contratar agora</a>', '', 0, '2018-06-18 23:59:35'),
(307, '<a class="btn btn-primary btn-block btn-lg text-white" data-toggle="modal" data-target="#defaultModal">Contratar agora</a>', '<a class="btn btn-primary btn-block btn-lg text-white" data-toggle="modal" data-target="#defaultModal">Contratar agora</a>', '<a class="btn btn-primary btn-block btn-lg text-white" data-toggle="modal" data-target="#defaultModal">Contratar agora</a>', '<a class="btn btn-primary btn-block btn-lg text-white" data-toggle="modal" data-target="#defaultModal">Contratar agora</a>', '', 0, '2018-06-19 00:03:57'),
(308, '<a class="btn btn-primary btn-block btn-lg text-white" data-toggle="modal" data-target="#defaultModal-2">Contratar agora</a>', '<a class="btn btn-primary btn-block btn-lg text-white" data-toggle="modal" data-target="#defaultModal-2">Contratar agora</a>', '<a class="btn btn-primary btn-block btn-lg text-white" data-toggle="modal" data-target="#defaultModal-2">Contratar agora</a>', '<a class="btn btn-primary btn-block btn-lg text-white" data-toggle="modal" data-target="#defaultModal-2">Contratar agora</a>', '', 0, '2018-06-19 00:03:57'),
(309, 'Salvar termo', 'Salvar termo', 'Salvar termo', 'Salvar termo', '', 0, '2018-06-20 11:57:25'),
(310, 'Formuláriode tradução de termos do sistema', 'Formuláriode tradução de termos do sistema', 'Formuláriode tradução de termos do sistema', 'Formuláriode tradução de termos do sistema', 'Formuláriode tradução de termos do sistema', 0, '2018-06-20 12:04:16'),
(311, 'Através deste formulário, você pode traduzir o sistema para diversos idiomas.', 'Através deste formulário, você pode traduzir o sistema para diversos idiomas.', 'Através deste formulário, você pode traduzir o sistema para diversos idiomas.', 'Através deste formulário, você pode traduzir o sistema para diversos idiomas.', 'Através deste formulário, você pode traduzir o sistema para diversos idiomas.', 0, '2018-06-20 12:04:16'),
(312, 'Salvar expressão', 'Salvar expressão', 'Salvar expressão', 'Salvar expressão', 'Salvar expressão', 0, '2018-06-20 12:04:16'),
(313, 'Entrada: ', 'Entrada: ', 'Entrada: ', 'Entrada: ', 'Entrada: ', 0, '2018-06-20 12:06:48'),
(314, 'Português: ', 'Português: ', 'Português: ', 'Português: ', 'Português: ', 0, '2018-06-20 12:06:48'),
(315, 'Espanhol: ', 'Espanhol: ', 'Espanhol: ', 'Espanhol: ', 'Espanhol: ', 0, '2018-06-20 12:06:48'),
(316, 'Inglês: ', 'Inglês: ', 'Inglês: ', 'Inglês: ', 'Inglês: ', 0, '2018-06-20 12:06:49'),
(317, 'Japonês: ', 'Japonês: ', 'Japonês: ', 'Japonês: ', 'Japonês: ', 0, '2018-06-20 12:06:49'),
(318, 'Nenhum termo foi carregado para tradução.', 'Nenhum termo foi carregado para tradução.', 'Nenhum termo foi carregado para tradução.', 'Nenhum termo foi carregado para tradução.', 'Nenhum termo foi carregado para tradução.', 0, '2018-06-20 12:11:37'),
(319, 'Anterior', 'Anterior', 'Anterior', 'Anterior', 'Anterior', 0, '2018-06-20 18:51:19'),
(320, 'Próximo', 'Próximo', 'Próximo', 'Próximo', 'Próximo', 0, '2018-06-20 18:51:19'),
(321, 'Formulário de tradução de termos do sistema', 'Formulário de tradução de termos do sistema', 'Formulário de tradução de termos do sistema', 'Formulário de tradução de termos do sistema', 'Formulário de tradução de termos do sistema', 0, '2018-06-20 19:44:15'),
(322, 'Salvar', 'Salvar', 'Salvar', 'Salvar', 'Salvar', 0, '2018-06-20 20:02:21');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `cli_id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `cli_nome` varchar(256) COLLATE utf8_swedish_ci NOT NULL,
  `cli_sobrenome` varchar(256) COLLATE utf8_swedish_ci NOT NULL,
  `cli_email` varchar(256) COLLATE utf8_swedish_ci NOT NULL,
  `cli_telefone` varchar(256) COLLATE utf8_swedish_ci NOT NULL,
  `cli_password` varchar(256) COLLATE utf8_swedish_ci NOT NULL,
  `cli_funcao` int(11) NOT NULL,
  `cli_status` int(11) NOT NULL,
  `cli_dependente` int(11) NOT NULL,
  `cli_cadastro` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`cli_id`, `empresa_id`, `cli_nome`, `cli_sobrenome`, `cli_email`, `cli_telefone`, `cli_password`, `cli_funcao`, `cli_status`, `cli_dependente`, `cli_cadastro`) VALUES
(1, 1, 'Marcos Vinicius', 'Nascimento Pereira', 'mvnpereira@gmail.com', '(789) 520-0000', 'marcos1986', 4, 0, 2, '2018-06-17 00:00:00'),
(2, 1, 'Sirleii Cristina', 'da Silva Roberto', 'programadora01@gmail.com', '13246846543', 'cPeI4GX7', 4, 0, 2, '2018-06-17 00:00:00'),
(3, 1, 'Anthonella', 'Karolyne Silva de Lima', 'anthonella@karolyne.com.br', '4585222221', 'G25rzOmE', 4, 0, 2, '2018-06-18 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user_additional`
--

CREATE TABLE IF NOT EXISTS `user_additional` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `tipocontato` varchar(45) COLLATE utf8_swedish_ci NOT NULL,
  `infocontato` varchar(45) COLLATE utf8_swedish_ci NOT NULL,
  `tipodocumento` varchar(45) COLLATE utf8_swedish_ci NOT NULL,
  `infodocumento` varchar(45) COLLATE utf8_swedish_ci NOT NULL,
  `validade` datetime DEFAULT NULL,
  `cadastro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `user_address`
--

CREATE TABLE IF NOT EXISTS `user_address` (
  `end_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `end_cep` varchar(256) COLLATE utf8_swedish_ci NOT NULL,
  `end_rua` varchar(256) COLLATE utf8_swedish_ci NOT NULL,
  `end_numero` varchar(256) COLLATE utf8_swedish_ci NOT NULL,
  `end_complemento` varchar(256) COLLATE utf8_swedish_ci DEFAULT NULL,
  `end_bairro` varchar(256) COLLATE utf8_swedish_ci NOT NULL,
  `end_cidade` varchar(256) COLLATE utf8_swedish_ci NOT NULL,
  `end_estado` varchar(256) COLLATE utf8_swedish_ci NOT NULL,
  `end_pais` varchar(256) COLLATE utf8_swedish_ci NOT NULL,
  `end_latitude` varchar(256) COLLATE utf8_swedish_ci NOT NULL,
  `end_longitude` varchar(256) COLLATE utf8_swedish_ci NOT NULL,
  `end_cadastro` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Extraindo dados da tabela `user_address`
--

INSERT INTO `user_address` (`end_id`, `users_id`, `end_cep`, `end_rua`, `end_numero`, `end_complemento`, `end_bairro`, `end_cidade`, `end_estado`, `end_pais`, `end_latitude`, `end_longitude`, `end_cadastro`) VALUES
(33, 1, '470-0171', 'Rua José Onófre Pereira', '1060', 'Perto da Escola Dom Jaim', 'Bela Vista', 'Palhoça', 'SC', 'JP', '-27.653163', '-48.6798792', '2018-06-17 00:00:00'),
(34, 2, '470-0162', 'Rua José Onófre Pereira', '1060', 'Perto da Escola Estadual Dom Jaime', 'Bela Vista', 'Palhoça', 'SC', 'JP', '-27.653163', '-48.6798792', '2018-06-17 00:00:00'),
(35, 3, '472-0164', 'Rua José Onófre Pereira', '1060', 'Perto da Escola Estadual Dom Jaime', 'Bela Vista', 'Palhoça', 'SC', 'JP', '-27.653163', '-48.6798792', '2018-06-18 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user_company`
--

CREATE TABLE IF NOT EXISTS `user_company` (
  `cpy_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL DEFAULT '0',
  `cpy_nome` varchar(256) COLLATE utf8_swedish_ci DEFAULT NULL,
  `cpy_cep` varchar(256) COLLATE utf8_swedish_ci DEFAULT NULL,
  `cpy_rua` varchar(256) COLLATE utf8_swedish_ci DEFAULT NULL,
  `cpy_numero` varchar(256) COLLATE utf8_swedish_ci DEFAULT NULL,
  `cpy_bairro` varchar(256) COLLATE utf8_swedish_ci DEFAULT NULL,
  `cpy_complemento` varchar(256) COLLATE utf8_swedish_ci DEFAULT NULL,
  `cpy_cidade` varchar(256) COLLATE utf8_swedish_ci DEFAULT NULL,
  `cpy_estado` varchar(256) COLLATE utf8_swedish_ci DEFAULT NULL,
  `cpy_telefone` varchar(256) COLLATE utf8_swedish_ci DEFAULT NULL,
  `cpy_cadastro` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Extraindo dados da tabela `user_company`
--

INSERT INTO `user_company` (`cpy_id`, `users_id`, `cpy_nome`, `cpy_cep`, `cpy_rua`, `cpy_numero`, `cpy_bairro`, `cpy_complemento`, `cpy_cidade`, `cpy_estado`, `cpy_telefone`, `cpy_cadastro`) VALUES
(5, 1, 'AXITECH Web Softwares', '470-0170', 'Rua José Onófre Pereira', '1060', 'Bela Vista', 'Perto da Escola Dom Jaime', 'Palhoça', 'SC', '(789) 520-0000', '2018-06-17 00:00:00'),
(6, 2, '470-0162', '470-0162', NULL, '1060', 'Bela Vista', 'Perto da Escola Estadual Dom Jaime', 'Palhoça', 'SC', '(655) 040-7098', '2018-06-17 00:00:00'),
(7, 3, 'AXITECH Web Softwares', '474-2001', NULL, '1060', 'Bela Vista', 'Perto da Escola Estadual Dom Jaime', 'Palhoça', 'SC', '(458) 522-2221', '2018-06-18 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user_dependents`
--

CREATE TABLE IF NOT EXISTS `user_dependents` (
  `id` int(11) NOT NULL,
  `users_assinante` int(11) NOT NULL,
  `users_dependent` int(11) NOT NULL,
  `cadastro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `user_documents`
--

CREATE TABLE IF NOT EXISTS `user_documents` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `tipodocumento` varchar(256) COLLATE utf8_swedish_ci NOT NULL,
  `imagedocumento` varchar(256) COLLATE utf8_swedish_ci NOT NULL,
  `validade` datetime NOT NULL,
  `status` bit(1) NOT NULL,
  `cadastro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `user_function`
--

CREATE TABLE IF NOT EXISTS `user_function` (
  `id` int(11) NOT NULL,
  `descricao` varchar(256) NOT NULL,
  `sigla` varchar(50) NOT NULL,
  `cadastro` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `user_function`
--

INSERT INTO `user_function` (`id`, `descricao`, `sigla`, `cadastro`) VALUES
(1, 'Superadministrador', 'SUPER', '2018-06-01 07:45:05'),
(2, 'Administrador', 'ADM', '2018-06-01 07:47:58'),
(3, 'Empresa', 'EMP', '2018-06-01 07:47:58'),
(4, 'Cliente', 'CLI', '2018-06-01 07:48:57'),
(5, 'Dependente', 'DDT', '2018-06-01 07:49:55');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user_plan`
--

CREATE TABLE IF NOT EXISTS `user_plan` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `plans_id` int(11) NOT NULL,
  `validade` datetime NOT NULL,
  `cadastro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_configs`
--
ALTER TABLE `admin_configs`
  ADD PRIMARY KEY (`id`,`empresa_id`),
  ADD KEY `fk_super_admin_configs_super_admin_empresa1_idx` (`empresa_id`);

--
-- Indexes for table `admin_countries`
--
ALTER TABLE `admin_countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_empresa`
--
ALTER TABLE `admin_empresa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indexes for table `agendamento`
--
ALTER TABLE `agendamento`
  ADD PRIMARY KEY (`id`,`cars_id`,`empresa_id`),
  ADD KEY `fk_agendamento_cars1_idx` (`cars_id`),
  ADD KEY `fk_agendamento_admin_empresa1_idx` (`empresa_id`);

--
-- Indexes for table `agendamento_sos`
--
ALTER TABLE `agendamento_sos`
  ADD PRIMARY KEY (`id`,`assinante_id`,`empresa_id`),
  ADD KEY `fk_sos_users1_idx` (`assinante_id`),
  ADD KEY `fk_sos_admin_empresa1_idx` (`empresa_id`);

--
-- Indexes for table `agreements`
--
ALTER TABLE `agreements`
  ADD PRIMARY KEY (`id`,`empresa_id`),
  ADD KEY `fk_agreements_admin_empresa1_idx` (`empresa_id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`,`users_id`,`empresa_id`),
  ADD KEY `fk_cars_users1_idx` (`users_id`),
  ADD KEY `fk_cars_admin_empresa1_idx` (`empresa_id`);

--
-- Indexes for table `cars_additional`
--
ALTER TABLE `cars_additional`
  ADD PRIMARY KEY (`id`,`cars_id`),
  ADD KEY `fk_cars_additional_cars_idx` (`cars_id`);

--
-- Indexes for table `cars_photos`
--
ALTER TABLE `cars_photos`
  ADD PRIMARY KEY (`id`,`cars_id`),
  ADD KEY `fk_cars_photos_cars1_idx` (`cars_id`);

--
-- Indexes for table `planos`
--
ALTER TABLE `planos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plan_topics`
--
ALTER TABLE `plan_topics`
  ADD PRIMARY KEY (`id`,`plans_id`),
  ADD KEY `fk_plan_topics_plans1_idx` (`plans_id`);

--
-- Indexes for table `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `route_groups`
--
ALTER TABLE `route_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `route_methods`
--
ALTER TABLE `route_methods`
  ADD PRIMARY KEY (`id`,`groups_id`),
  ADD KEY `fk_route_methods_routes_groups1_idx` (`groups_id`);

--
-- Indexes for table `route_usergroup`
--
ALTER TABLE `route_usergroup`
  ADD PRIMARY KEY (`routes_groups_id`,`users_id`),
  ADD KEY `fk_rout_usergroup_users1_idx` (`users_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`,`users_id`,`plans_id`),
  ADD KEY `fk_user_sales_users1_idx` (`users_id`),
  ADD KEY `fk_user_sales_plans1_idx` (`plans_id`);

--
-- Indexes for table `traductions`
--
ALTER TABLE `traductions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`cli_id`),
  ADD UNIQUE KEY `id_UNIQUE` (`cli_id`);

--
-- Indexes for table `user_additional`
--
ALTER TABLE `user_additional`
  ADD PRIMARY KEY (`id`,`users_id`),
  ADD KEY `fk_users_additional_users1_idx` (`users_id`);

--
-- Indexes for table `user_address`
--
ALTER TABLE `user_address`
  ADD PRIMARY KEY (`end_id`);

--
-- Indexes for table `user_company`
--
ALTER TABLE `user_company`
  ADD PRIMARY KEY (`cpy_id`,`users_id`),
  ADD KEY `fk_user_company_users1_idx` (`users_id`);

--
-- Indexes for table `user_dependents`
--
ALTER TABLE `user_dependents`
  ADD PRIMARY KEY (`id`,`users_assinante`),
  ADD KEY `fk_user_dependents_users1_idx` (`users_assinante`);

--
-- Indexes for table `user_documents`
--
ALTER TABLE `user_documents`
  ADD PRIMARY KEY (`id`,`users_id`),
  ADD KEY `fk_user_documents_users1_idx` (`users_id`);

--
-- Indexes for table `user_function`
--
ALTER TABLE `user_function`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_plan`
--
ALTER TABLE `user_plan`
  ADD PRIMARY KEY (`id`,`users_id`,`plans_id`),
  ADD KEY `fk_user_plan_users1_idx` (`users_id`),
  ADD KEY `fk_user_plan_plans1_idx` (`plans_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_configs`
--
ALTER TABLE `admin_configs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `admin_countries`
--
ALTER TABLE `admin_countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=246;
--
-- AUTO_INCREMENT for table `admin_empresa`
--
ALTER TABLE `admin_empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `agendamento`
--
ALTER TABLE `agendamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cars_additional`
--
ALTER TABLE `cars_additional`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cars_photos`
--
ALTER TABLE `cars_photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `planos`
--
ALTER TABLE `planos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `plan_topics`
--
ALTER TABLE `plan_topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `route_groups`
--
ALTER TABLE `route_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `route_methods`
--
ALTER TABLE `route_methods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `traductions`
--
ALTER TABLE `traductions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=323;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `cli_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_additional`
--
ALTER TABLE `user_additional`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_address`
--
ALTER TABLE `user_address`
  MODIFY `end_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `user_company`
--
ALTER TABLE `user_company`
  MODIFY `cpy_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user_dependents`
--
ALTER TABLE `user_dependents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_documents`
--
ALTER TABLE `user_documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_function`
--
ALTER TABLE `user_function`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `admin_configs`
--
ALTER TABLE `admin_configs`
  ADD CONSTRAINT `fk_super_admin_configs_super_admin_empresa1` FOREIGN KEY (`empresa_id`) REFERENCES `admin_empresa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `agendamento`
--
ALTER TABLE `agendamento`
  ADD CONSTRAINT `fk_agendamento_admin_empresa1` FOREIGN KEY (`empresa_id`) REFERENCES `admin_empresa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_agendamento_cars1` FOREIGN KEY (`cars_id`) REFERENCES `cars` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `agendamento_sos`
--
ALTER TABLE `agendamento_sos`
  ADD CONSTRAINT `fk_sos_admin_empresa1` FOREIGN KEY (`empresa_id`) REFERENCES `admin_empresa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_sos_users1` FOREIGN KEY (`assinante_id`) REFERENCES `users` (`cli_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `agreements`
--
ALTER TABLE `agreements`
  ADD CONSTRAINT `fk_agreements_admin_empresa1` FOREIGN KEY (`empresa_id`) REFERENCES `admin_empresa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `fk_cars_admin_empresa1` FOREIGN KEY (`empresa_id`) REFERENCES `admin_empresa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cars_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`cli_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `cars_additional`
--
ALTER TABLE `cars_additional`
  ADD CONSTRAINT `fk_cars_additional_cars` FOREIGN KEY (`cars_id`) REFERENCES `cars` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `cars_photos`
--
ALTER TABLE `cars_photos`
  ADD CONSTRAINT `fk_cars_photos_cars1` FOREIGN KEY (`cars_id`) REFERENCES `cars` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `plan_topics`
--
ALTER TABLE `plan_topics`
  ADD CONSTRAINT `fk_plan_topics_plans1` FOREIGN KEY (`plans_id`) REFERENCES `plans` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `route_methods`
--
ALTER TABLE `route_methods`
  ADD CONSTRAINT `fk_route_methods_routes_groups1` FOREIGN KEY (`groups_id`) REFERENCES `route_groups` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `route_usergroup`
--
ALTER TABLE `route_usergroup`
  ADD CONSTRAINT `fk_rout_usergroup_routes_groups1` FOREIGN KEY (`routes_groups_id`) REFERENCES `route_groups` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_rout_usergroup_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`cli_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `fk_user_sales_plans1` FOREIGN KEY (`plans_id`) REFERENCES `plans` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_user_sales_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`cli_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `user_additional`
--
ALTER TABLE `user_additional`
  ADD CONSTRAINT `fk_users_additional_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`cli_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `user_company`
--
ALTER TABLE `user_company`
  ADD CONSTRAINT `fk_user_company_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`cli_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `user_dependents`
--
ALTER TABLE `user_dependents`
  ADD CONSTRAINT `fk_user_dependents_users1` FOREIGN KEY (`users_assinante`) REFERENCES `users` (`cli_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `user_documents`
--
ALTER TABLE `user_documents`
  ADD CONSTRAINT `fk_user_documents_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`cli_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `user_plan`
--
ALTER TABLE `user_plan`
  ADD CONSTRAINT `fk_user_plan_plans1` FOREIGN KEY (`plans_id`) REFERENCES `plans` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_user_plan_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`cli_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
