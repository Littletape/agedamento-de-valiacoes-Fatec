-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10-Jun-2017 às 17:11
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sga_fatec`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacoes`
--

CREATE TABLE `avaliacoes` (
  `id` int(11) NOT NULL,
  `curso_id` int(11) NOT NULL,
  `data` datetime NOT NULL,
  `semestre_id` int(11) NOT NULL,
  `semana_id` int(11) NOT NULL,
  `dia` text NOT NULL,
  `materia_id` int(11) NOT NULL,
  `prova_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `avaliacoes`
--

INSERT INTO `avaliacoes` (`id`, `curso_id`, `data`, `semestre_id`, `semana_id`, `dia`, `materia_id`, `prova_id`) VALUES
(79, 1, '2017-04-04 00:00:00', 1, 1, 'Terça-Feira', 11, NULL),
(5, 1, '2017-04-04 00:00:00', 1, 1, 'Terça-feira', 3, NULL),
(9, 1, '2017-04-04 00:00:00', 1, 1, 'Terça-feira', 4, 2),
(8, 1, '2017-04-05 00:00:00', 1, 1, 'Quarta-feira', 5, NULL),
(10, 1, '2017-04-05 00:00:00', 1, 1, 'Quarta-feira', 6, NULL),
(11, 1, '2017-04-06 00:00:00', 1, 1, 'Quinta-feira', 7, NULL),
(13, 1, '2017-04-08 00:00:00', 1, 1, 'Sabado', 1, 1),
(14, 1, '2017-04-08 00:00:00', 1, 1, 'Sabado', 2, NULL),
(15, 1, '2017-04-08 00:00:00', 1, 1, 'Sabado', 3, NULL),
(16, 1, '2017-04-08 00:00:00', 1, 1, 'Sabado', 4, 2),
(17, 1, '2017-04-08 00:00:00', 1, 1, 'Sabado', 5, NULL),
(18, 1, '2017-04-08 00:00:00', 1, 1, 'Sabado', 6, NULL),
(20, 1, '2017-06-19 00:00:00', 1, 2, 'Segunda-feira', 1, NULL),
(21, 1, '2017-06-19 00:00:00', 1, 2, 'Segunda-feira', 2, NULL),
(22, 1, '2017-06-20 00:00:00', 1, 2, 'Terça-feira', 3, NULL),
(23, 1, '2017-06-20 00:00:00', 1, 2, 'Terça-feira', 4, NULL),
(24, 1, '2017-06-21 00:00:00', 1, 2, 'Quarta-feira', 5, NULL),
(25, 1, '2017-06-21 00:00:00', 1, 2, 'Quarta-feira', 6, NULL),
(26, 1, '2017-06-22 00:00:00', 1, 2, 'Quinta-feira', 7, NULL),
(27, 1, '2017-06-24 00:00:00', 1, 2, 'Sabado', 1, NULL),
(28, 1, '2017-06-24 00:00:00', 1, 2, 'Sabado', 2, NULL),
(29, 1, '2017-06-24 00:00:00', 1, 2, 'Sabado', 3, NULL),
(30, 1, '2017-06-24 00:00:00', 1, 2, 'Sabado', 4, NULL),
(31, 1, '2017-06-24 00:00:00', 1, 2, 'Sabado', 5, NULL),
(32, 1, '2017-06-24 00:00:00', 1, 2, 'Sabado', 6, NULL),
(33, 1, '2017-06-24 00:00:00', 1, 2, 'Sabado', 7, NULL),
(34, 1, '2017-06-29 00:00:00', 1, 3, 'Quinta-feira', 1, NULL),
(35, 1, '2017-06-29 00:00:00', 1, 3, 'Quinta-feira', 2, NULL),
(36, 1, '2017-06-29 00:00:00', 1, 3, 'Quinta-feira', 7, NULL),
(37, 1, '2017-06-30 00:00:00', 1, 3, 'Sexta-feira', 3, NULL),
(38, 1, '2017-06-30 00:00:00', 1, 3, 'Sexta-feira', 4, NULL),
(39, 1, '2017-07-01 00:00:00', 1, 3, 'Sabado', 5, NULL),
(40, 1, '2017-07-01 00:00:00', 1, 3, 'Sabado', 6, NULL),
(41, 1, '2017-04-03 00:00:00', 2, 1, 'Segunda-feira', 8, 3),
(42, 1, '2017-04-03 00:00:00', 2, 1, 'Segunda-feira', 9, NULL),
(43, 1, '2017-04-04 00:00:00', 2, 1, 'Terça-feira', 10, NULL),
(44, 1, '2017-04-04 00:00:00', 2, 1, 'Terça-feira', 7, NULL),
(45, 1, '2017-04-05 00:00:00', 2, 1, 'Quarta-feira', 12, NULL),
(47, 1, '2017-04-06 00:00:00', 2, 1, 'Quinta-feira', 14, NULL),
(48, 1, '2017-04-08 00:00:00', 2, 1, 'Sabado', 8, 3),
(49, 1, '2017-04-08 00:00:00', 2, 1, 'Sabado', 9, NULL),
(50, 1, '2017-04-08 00:00:00', 2, 1, 'Sabado', 10, NULL),
(51, 1, '2017-04-08 00:00:00', 2, 1, 'Sabado', 11, NULL),
(52, 1, '2017-04-08 00:00:00', 2, 1, 'Sabado', 12, NULL),
(53, 1, '2017-04-08 00:00:00', 2, 1, 'Sabado', 13, NULL),
(54, 1, '2017-04-08 00:00:00', 2, 1, 'Sabado', 14, NULL),
(55, 1, '2017-06-19 00:00:00', 2, 2, 'Segunda-feira', 8, NULL),
(56, 1, '2017-06-19 00:00:00', 2, 2, 'Segunda-feira', 9, NULL),
(57, 1, '2017-06-20 00:00:00', 2, 2, 'Terça-feira', 10, NULL),
(58, 1, '2017-06-20 00:00:00', 2, 2, 'Terça-feira', 11, NULL),
(59, 1, '2017-06-21 00:00:00', 2, 2, 'Quarta-feira', 12, NULL),
(60, 1, '2017-06-21 00:00:00', 2, 2, 'Quarta-feira', 13, NULL),
(61, 1, '2017-06-22 00:00:00', 2, 2, 'Quinta-feira', 14, NULL),
(62, 1, '2017-06-24 00:00:00', 2, 2, 'Sabado', 8, NULL),
(63, 1, '2017-06-24 00:00:00', 2, 2, 'Sabado', 9, NULL),
(64, 1, '2017-06-24 00:00:00', 2, 2, 'Sabado', 10, NULL),
(65, 1, '2017-06-24 00:00:00', 2, 2, 'Sabado', 11, NULL),
(66, 1, '2017-06-24 00:00:00', 2, 2, 'Sabado', 12, NULL),
(67, 1, '2017-06-24 00:00:00', 2, 2, 'Sabado', 13, NULL),
(68, 1, '2017-06-24 00:00:00', 2, 2, 'Sabado', 14, NULL),
(69, 1, '2017-06-29 00:00:00', 2, 3, 'Quinta-feira', 8, NULL),
(70, 1, '2017-06-29 00:00:00', 2, 3, 'Quinta-feira', 9, NULL),
(71, 1, '2017-06-29 00:00:00', 2, 3, 'Quinta-feira', 14, NULL),
(72, 1, '2017-06-30 00:00:00', 2, 3, 'Sexta-feira', 10, NULL),
(73, 1, '2017-06-30 00:00:00', 2, 3, 'Sexta-feira', 11, NULL),
(74, 1, '2017-07-01 00:00:00', 2, 3, 'Sabado', 12, NULL),
(75, 1, '2017-07-01 00:00:00', 2, 3, 'Sabado', 13, NULL),
(77, 1, '2017-04-03 00:00:00', 1, 1, 'Segunda-Feira', 1, 1),
(84, 1, '2017-06-14 07:30:00', 1, 1, 'Segunda-Feira', 1, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacoes_agendadas`
--

CREATE TABLE `avaliacoes_agendadas` (
  `id` int(11) NOT NULL,
  `avaliacoes_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `materia_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `avaliacoes_agendadas`
--

INSERT INTO `avaliacoes_agendadas` (`id`, `avaliacoes_id`, `usuario_id`, `materia_id`) VALUES
(22, 8, 1, 7),
(12, 3, 1, 3),
(19, 9, 1, 2),
(47, 41, 1, 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE `cursos` (
  `id` int(11) NOT NULL,
  `nome` varchar(160) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`id`, `nome`) VALUES
(1, 'Gestão empresarial');

-- --------------------------------------------------------

--
-- Estrutura da tabela `materias`
--

CREATE TABLE `materias` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `materias`
--

INSERT INTO `materias` (`id`, `nome`) VALUES
(1, 'Inglês I'),
(2, 'Sociedade, Tecnologia e inovação'),
(3, 'Administração geral'),
(4, 'Contabilidade'),
(5, 'Matemática'),
(6, 'Informática'),
(7, 'Comunicação e expressão'),
(8, 'Inglês II'),
(9, 'Sociologia das Organizações'),
(10, 'Comportamento Organizacional'),
(11, 'Estatística Aplicada'),
(12, 'Gestão Ambiental'),
(13, 'Economia'),
(14, 'Métodos para produção do conhecimento');

-- --------------------------------------------------------

--
-- Estrutura da tabela `nivel_permissao`
--

CREATE TABLE `nivel_permissao` (
  `id` int(11) NOT NULL,
  `descricao` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `nivel_permissao`
--

INSERT INTO `nivel_permissao` (`id`, `descricao`) VALUES
(1, 'Administrador'),
(2, 'Aluno');

-- --------------------------------------------------------

--
-- Estrutura da tabela `provas`
--

CREATE TABLE `provas` (
  `id` int(11) NOT NULL,
  `materia_id` int(11) NOT NULL,
  `semestre_id` int(11) NOT NULL,
  `semana_id` int(11) NOT NULL,
  `pdf_nome` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `provas`
--

INSERT INTO `provas` (`id`, `materia_id`, `semestre_id`, `semana_id`, `pdf_nome`) VALUES
(1, 1, 1, 1, 'Currículo atualizado.pdf'),
(2, 4, 1, 1, 'Portal Poupatempo.pdf'),
(3, 8, 2, 1, 'Portal Poupatempo.pdf');

-- --------------------------------------------------------

--
-- Estrutura da tabela `semanas_avaliacoes`
--

CREATE TABLE `semanas_avaliacoes` (
  `id` int(11) NOT NULL,
  `semana` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `semanas_avaliacoes`
--

INSERT INTO `semanas_avaliacoes` (`id`, `semana`) VALUES
(1, 10),
(2, 20),
(3, 21);

-- --------------------------------------------------------

--
-- Estrutura da tabela `semestre_avaliacoes`
--

CREATE TABLE `semestre_avaliacoes` (
  `id` int(11) NOT NULL,
  `semestre` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `semestre_avaliacoes`
--

INSERT INTO `semestre_avaliacoes` (`id`, `semestre`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` text NOT NULL,
  `cidade` text NOT NULL,
  `endereco` varchar(150) NOT NULL,
  `email` varchar(80) NOT NULL,
  `senha` varchar(70) NOT NULL,
  `cel` varchar(15) NOT NULL,
  `permissao_id` int(11) NOT NULL,
  `semestre_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `cidade`, `endereco`, `email`, `senha`, `cel`, `permissao_id`, `semestre_id`) VALUES
(1, 'marlon', 'taiaçu', 'orlindo de bages', 'marlutcu@gmail.com', '123456', '(16)99336-1826', 2, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `avaliacoes`
--
ALTER TABLE `avaliacoes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_semana_id` (`semana_id`),
  ADD KEY `fk_materia_id` (`materia_id`),
  ADD KEY `fk_semestre_id` (`semestre_id`);

--
-- Indexes for table `avaliacoes_agendadas`
--
ALTER TABLE `avaliacoes_agendadas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_avaliacao_id` (`avaliacoes_id`),
  ADD KEY `fk_usuario_id` (`usuario_id`);

--
-- Indexes for table `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nivel_permissao`
--
ALTER TABLE `nivel_permissao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provas`
--
ALTER TABLE `provas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semanas_avaliacoes`
--
ALTER TABLE `semanas_avaliacoes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semestre_avaliacoes`
--
ALTER TABLE `semestre_avaliacoes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_permissao_id` (`permissao_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `avaliacoes`
--
ALTER TABLE `avaliacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
--
-- AUTO_INCREMENT for table `avaliacoes_agendadas`
--
ALTER TABLE `avaliacoes_agendadas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `materias`
--
ALTER TABLE `materias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `nivel_permissao`
--
ALTER TABLE `nivel_permissao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `provas`
--
ALTER TABLE `provas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `semanas_avaliacoes`
--
ALTER TABLE `semanas_avaliacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `semestre_avaliacoes`
--
ALTER TABLE `semestre_avaliacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
