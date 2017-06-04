-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04-Jun-2017 às 18:29
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
  `data` date NOT NULL,
  `semestre_id` int(11) NOT NULL,
  `semana_id` int(11) NOT NULL,
  `dia` text NOT NULL,
  `materia_id` int(11) NOT NULL,
  `pdf_nome` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `avaliacoes`
--

INSERT INTO `avaliacoes` (`id`, `curso_id`, `data`, `semestre_id`, `semana_id`, `dia`, `materia_id`, `pdf_nome`) VALUES
(1, 0, '2017-04-03', 1, 1, 'Segunda-feira', 1, 'teste.pdf'),
(2, 0, '2017-04-03', 1, 1, 'Segunda-feira', 2, 'teste2.pdf'),
(5, 0, '2017-04-04', 1, 1, 'Terça-feira', 3, 'teste5.pdf'),
(9, 0, '2017-04-04', 1, 1, 'Terça-feira', 4, 'teste235'),
(8, 0, '2017-04-05', 1, 1, 'Quarta-feira', 5, 'teste8.pdf'),
(10, 0, '2017-04-05', 1, 1, 'Quarta-feira', 6, '3'),
(11, 0, '2017-04-06', 1, 1, 'Quinta-feira', 7, 'Teste.pdf'),
(13, 0, '2017-04-08', 1, 1, 'Sabado', 1, 'teste.pdf'),
(14, 0, '2017-04-08', 1, 1, 'Sabado', 2, 'teste2.pdf'),
(15, 0, '2017-04-08', 1, 1, 'Sabado', 3, 'teste5.pdf'),
(16, 0, '2017-04-08', 1, 1, 'Sabado', 4, 'teste235'),
(17, 0, '2017-04-08', 1, 1, 'Sabado', 5, 'teste8.pdf'),
(18, 0, '2017-04-08', 1, 1, 'Sabado', 6, '3'),
(19, 0, '2017-04-08', 1, 1, 'Sabado', 7, 'Teste.pdf'),
(20, 0, '2017-06-19', 1, 2, 'Segunda-feira', 1, 'teste.pdf'),
(21, 0, '2017-06-19', 1, 2, 'Segunda-feira', 2, 'teste2.pdf'),
(22, 0, '2017-06-20', 1, 2, 'Terça-feira', 3, 'teste5.pdf'),
(23, 0, '2017-06-20', 1, 2, 'Terça-feira', 4, 'teste235'),
(24, 0, '2017-06-21', 1, 2, 'Quarta-feira', 5, 'teste8.pdf'),
(25, 0, '2017-06-21', 1, 2, 'Quarta-feira', 6, '3'),
(26, 0, '2017-06-22', 1, 2, 'Quinta-feira', 7, 'Teste.pdf'),
(27, 0, '2017-06-24', 1, 2, 'Sabado', 1, 'teste.pdf'),
(28, 0, '2017-06-24', 1, 2, 'Sabado', 2, 'teste2.pdf'),
(29, 0, '2017-06-24', 1, 2, 'Sabado', 3, 'teste5.pdf'),
(30, 0, '2017-06-24', 1, 2, 'Sabado', 4, 'teste235'),
(31, 0, '2017-06-24', 1, 2, 'Sabado', 5, 'teste8.pdf'),
(32, 0, '2017-06-24', 1, 2, 'Sabado', 6, '3'),
(33, 0, '2017-06-24', 1, 2, 'Sabado', 7, 'Teste.pdf'),
(34, 0, '2017-06-29', 1, 3, 'Quinta-feira', 1, 'Teste.pdf'),
(35, 0, '2017-06-29', 1, 3, 'Quinta-feira', 2, 'Teste.pdf'),
(36, 0, '2017-06-29', 1, 3, 'Quinta-feira', 7, 'Teste.pdf'),
(37, 0, '2017-06-30', 1, 3, 'Sexta-feira', 3, 'Teste.pdf'),
(38, 0, '2017-06-30', 1, 3, 'Sexta-feira', 4, 'Teste.pdf'),
(39, 0, '2017-07-01', 1, 3, 'Sabado', 5, 'Teste.pdf'),
(40, 0, '2017-07-01', 1, 3, 'Sabado', 6, 'Teste.pdf'),
(41, 0, '2017-04-03', 2, 1, 'Segunda-feira', 8, 'teste.pdf'),
(42, 0, '2017-04-03', 2, 1, 'Segunda-feira', 9, 'teste2.pdf'),
(43, 0, '2017-04-04', 2, 1, 'Terça-feira', 10, 'teste5.pdf'),
(44, 0, '2017-04-04', 2, 1, 'Terça-feira', 11, 'teste235'),
(45, 0, '2017-04-05', 2, 1, 'Quarta-feira', 12, 'teste8.pdf'),
(46, 0, '2017-04-05', 2, 1, 'Quarta-feira', 13, '3'),
(47, 0, '2017-04-06', 2, 1, 'Quinta-feira', 14, 'Teste.pdf'),
(48, 0, '2017-04-08', 2, 1, 'Sabado', 8, 'teste.pdf'),
(49, 0, '2017-04-08', 2, 1, 'Sabado', 9, 'teste2.pdf'),
(50, 0, '2017-04-08', 2, 1, 'Sabado', 10, 'teste5.pdf'),
(51, 0, '2017-04-08', 2, 1, 'Sabado', 11, 'teste235'),
(52, 0, '2017-04-08', 2, 1, 'Sabado', 12, 'teste8.pdf'),
(53, 0, '2017-04-08', 2, 1, 'Sabado', 13, '3'),
(54, 0, '2017-04-08', 2, 1, 'Sabado', 14, 'Teste.pdf'),
(55, 0, '2017-06-19', 2, 2, 'Segunda-feira', 8, 'teste.pdf'),
(56, 0, '2017-06-19', 2, 2, 'Segunda-feira', 9, 'teste2.pdf'),
(57, 0, '2017-06-20', 2, 2, 'Terça-feira', 10, 'teste5.pdf'),
(58, 0, '2017-06-20', 2, 2, 'Terça-feira', 11, 'teste235'),
(59, 0, '2017-06-21', 2, 2, 'Quarta-feira', 12, 'teste8.pdf'),
(60, 0, '2017-06-21', 2, 2, 'Quarta-feira', 13, '3'),
(61, 0, '2017-06-22', 2, 2, 'Quinta-feira', 14, 'Teste.pdf'),
(62, 0, '2017-06-24', 2, 2, 'Sabado', 8, 'teste.pdf'),
(63, 0, '2017-06-24', 2, 2, 'Sabado', 9, 'teste2.pdf'),
(64, 0, '2017-06-24', 2, 2, 'Sabado', 10, 'teste5.pdf'),
(65, 0, '2017-06-24', 2, 2, 'Sabado', 11, 'teste235'),
(66, 0, '2017-06-24', 2, 2, 'Sabado', 12, 'teste8.pdf'),
(67, 0, '2017-06-24', 2, 2, 'Sabado', 13, '3'),
(68, 0, '2017-06-24', 2, 2, 'Sabado', 14, 'Teste.pdf'),
(69, 0, '2017-06-29', 2, 3, 'Quinta-feira', 8, 'Teste.pdf'),
(70, 0, '2017-06-29', 2, 3, 'Quinta-feira', 9, 'Teste.pdf'),
(71, 0, '2017-06-29', 2, 3, 'Quinta-feira', 14, 'Teste.pdf'),
(72, 0, '2017-06-30', 2, 3, 'Sexta-feira', 10, 'Teste.pdf'),
(73, 0, '2017-06-30', 2, 3, 'Sexta-feira', 11, 'Teste.pdf'),
(74, 0, '2017-07-01', 2, 3, 'Sabado', 12, 'Teste.pdf'),
(75, 0, '2017-06-01', 2, 3, 'Sabado', 13, 'Teste.pdf');

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
(36, 43, 1, 10),
(19, 9, 1, 2),
(37, 46, 1, 13);

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
(1, 'marlon', 'taiaçu', 'orlindo de bages', 'marlutcu@gmail.com', '123456', '(16)99336-1826', 1, 2);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT for table `avaliacoes_agendadas`
--
ALTER TABLE `avaliacoes_agendadas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
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
