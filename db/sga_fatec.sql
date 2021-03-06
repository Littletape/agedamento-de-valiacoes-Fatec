-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18-Maio-2017 às 23:07
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
  `data` date NOT NULL,
  `semestre_id` int(11) NOT NULL,
  `semana_id` int(11) NOT NULL,
  `materia_id` int(11) NOT NULL,
  `pdf_nome` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacoes_agendadas`
--

CREATE TABLE `avaliacoes_agendadas` (
  `id` int(11) NOT NULL,
  `avaliacoes_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `datas_avaliacoes`
--

CREATE TABLE `datas_avaliacoes` (
  `id` int(11) NOT NULL,
  `data` date NOT NULL,
  `dia` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `materias`
--

CREATE TABLE `materias` (
  `id` int(11) NOT NULL,
  `nome` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `semestre_avaliacoes`
--

CREATE TABLE `semestre_avaliacoes` (
  `id` int(11) NOT NULL,
  `semestre` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
  `permissao_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `cidade`, `endereco`, `email`, `senha`, `cel`, `permissao_id`) VALUES
(1, 'marlon', 'taiaçu', 'orlindo de bages', 'marlutcu@gmail.com', '123456', '(16)99336-1826', 1);

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
-- Indexes for table `datas_avaliacoes`
--
ALTER TABLE `datas_avaliacoes`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `avaliacoes_agendadas`
--
ALTER TABLE `avaliacoes_agendadas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `datas_avaliacoes`
--
ALTER TABLE `datas_avaliacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `materias`
--
ALTER TABLE `materias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nivel_permissao`
--
ALTER TABLE `nivel_permissao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `semanas_avaliacoes`
--
ALTER TABLE `semanas_avaliacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `semestre_avaliacoes`
--
ALTER TABLE `semestre_avaliacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
