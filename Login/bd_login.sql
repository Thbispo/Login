-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19/03/2025 às 12:14
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_login`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_pessoa`
--

CREATE TABLE `tb_pessoa` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `ano_nascimento` year(4) DEFAULT NULL,
  `cpf` varchar(11) DEFAULT NULL,
  `telefone_1` varchar(11) DEFAULT NULL,
  `telefone_2` varchar(11) DEFAULT NULL,
  `logradouro` varchar(150) DEFAULT NULL,
  `n_casa` int(5) DEFAULT NULL,
  `bairro` varchar(100) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_pessoa`
--

INSERT INTO `tb_pessoa` (`id`, `nome`, `ano_nascimento`, `cpf`, `telefone_1`, `telefone_2`, `logradouro`, `n_casa`, `bairro`, `cidade`) VALUES
(1, 'Tony Stark', '1970', '12345678900', '999887766', '998877665', 'Malibu Point, CA', 10880, 'Malibu', 'Los Angeles'),
(2, 'Peter Parker', '1995', '98765432100', '111222333', NULL, 'Rua Ingram, 20', 3, 'Forest Hills', 'Nova York'),
(3, 'Steve Rogers', '1918', '45678912300', '444555666', NULL, 'Rua Leaman, 569', 1, 'Brooklyn', 'Nova York'),
(4, 'Natasha Romanoff', '1984', '65432198700', '777888999', '770077007', 'Rua 48, 4A', 12, 'Brooklyn Heights', 'Nova York'),
(5, 'Thor Odinson', '1972', '11122233344', '555666777', NULL, 'Asgard Palace', 1, 'Asgard', 'Asgard'),
(6, 'Bruce Banner', '1972', '99988877766', '333444555', NULL, '123 Gamma Avenue', 7, 'Culver City', 'Los Angeles'),
(13, 'capitã marvel', '2025', '54715974860', '19982866529', '', 'Rua Times Square', 259, 'Queens', 'Nova Iorque'),
(57, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(58, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(59, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(61, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(62, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(63, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(64, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(65, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(66, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(67, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(68, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(69, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(70, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(71, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(72, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(73, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(74, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(75, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(76, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(77, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(79, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(80, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(81, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(82, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(83, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(84, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(85, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(86, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(87, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(88, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(89, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(90, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(91, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(92, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(93, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(102, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(103, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(104, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(105, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(107, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(108, 'Thiago', '2001', '26582714848', '19982866529', '', 'Rua Dignidade', 360, 'Jardim Boer', 'Americana'),
(109, 'Jhonny', '2020', '28684719846', '1998612622', '', 'Rua Enezita Barroso', 500, 'Nova Carioba', 'Franca'),
(110, 'Derek', '2000', '10101010101', '10101010101', '', 'Rua Times Square', 360, 'Queens', 'Nova Iorque'),
(111, '2Pac', '1990', '26598247203', '1985478755', '', 'Rua West Side', 222, 'New Orleans', 'New Odessa');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `id` int(11) NOT NULL,
  `usuario` varchar(100) DEFAULT NULL,
  `senha` varchar(100) DEFAULT NULL,
  `id_pessoa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`id`, `usuario`, `senha`, `id_pessoa`) VALUES
(1, 'homemDeFerro', 'jarvis123', 1),
(2, 'homemAranha', 'teia123', 2),
(3, 'capitaoAmerica', 'euvouLutar', 3),
(4, 'viuvaNegra', 'assassinaVermelha', 4),
(5, 'deusDoTrovao', 'mjolnir123', 5),
(6, 'hulk', 'smash123', 6),
(49, NULL, NULL, 49),
(50, NULL, NULL, 50),
(51, NULL, NULL, 51),
(52, NULL, NULL, 52),
(53, NULL, NULL, 53),
(54, NULL, NULL, 54),
(55, NULL, NULL, 55),
(56, NULL, NULL, 56),
(57, NULL, NULL, 57),
(58, NULL, NULL, 58),
(59, NULL, NULL, 59),
(60, NULL, NULL, 60),
(61, NULL, NULL, 61),
(62, NULL, NULL, 62),
(63, NULL, NULL, 63),
(64, NULL, NULL, 64),
(65, NULL, NULL, 65),
(67, NULL, NULL, 67),
(68, NULL, NULL, 68),
(69, NULL, NULL, 69),
(70, NULL, NULL, 70),
(71, NULL, NULL, 71),
(72, NULL, NULL, 72),
(73, NULL, NULL, 73),
(74, NULL, NULL, 74),
(75, NULL, NULL, 75),
(76, NULL, NULL, 76),
(77, NULL, NULL, 77),
(78, NULL, NULL, 78),
(79, NULL, NULL, 79),
(80, NULL, NULL, 80),
(81, NULL, NULL, 81),
(82, NULL, NULL, 82),
(83, NULL, NULL, 83),
(84, NULL, NULL, 84),
(85, NULL, NULL, 85),
(86, NULL, NULL, 86),
(87, NULL, NULL, 87),
(88, NULL, NULL, 88),
(89, NULL, NULL, 89),
(90, NULL, NULL, 90),
(91, NULL, NULL, 91),
(92, NULL, NULL, 92),
(93, NULL, NULL, 93),
(102, NULL, NULL, 102),
(103, NULL, NULL, 103),
(104, NULL, NULL, 104),
(105, NULL, NULL, 105),
(107, NULL, NULL, 107),
(108, 'Thiaguin', '1236', 108),
(109, 'Jhonny', '1245', 109),
(110, 'Derekzin', '102030', 110),
(111, '2Pac', '2020', 111);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_pessoa`
--
ALTER TABLE `tb_pessoa`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_pessoa`
--
ALTER TABLE `tb_pessoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT de tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
