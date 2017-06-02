-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26-Maio-2017 às 03:41
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
  `dia` text NOT NULL,
  `materia_id` int(11) NOT NULL,
  `materia2_id` int(11) NOT NULL,
  `pdf_nome` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `avaliacoes`
--

INSERT INTO `avaliacoes` (`id`, `data`, `semestre_id`, `semana_id`, `dia`, `materia_id`, `materia2_id`, `pdf_nome`) VALUES
(1, '2017-06-19', 1, 1, 'Segunda-feira', 1, 2, 'teste.pdf'),
(2, '2017-06-20', 1, 1, 'terça-feira', 3, 4, 'teste2.pdf'),
(5, '2017-06-21', 1, 1, 'quarta-feira', 5, 6, 'teste5.pdf'),
(9, '2017-06-23', 1, 2, 'segunda', 2, 3, 'teste235'),
(8, '2017-06-22', 1, 2, 'quinta-feira', 7, 0, 'teste8.pdf');

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
(31, 8, 1, 7),
(30, 9, 1, 3),
(29, 5, 1, 6),
(28, 2, 1, 3),
(27, 1, 1, 2);

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
  `nome` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `materias`
--

INSERT INTO `materias` (`id`, `nome`) VALUES
(1, 'Inglês'),
(2, 'Sociedade, Tecnologia e inovação'),
(3, 'Administração geral'),
(4, 'Contabilidade'),
(5, 'Matemática'),
(6, 'Informática'),
(7, 'Comunicação e expressão');

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
(2, 20);

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
(2, 2);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `avaliacoes_agendadas`
--
ALTER TABLE `avaliacoes_agendadas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `datas_avaliacoes`
--
ALTER TABLE `datas_avaliacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `materias`
--
ALTER TABLE `materias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `nivel_permissao`
--
ALTER TABLE `nivel_permissao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `semanas_avaliacoes`
--
ALTER TABLE `semanas_avaliacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `semestre_avaliacoes`
--
ALTER TABLE `semestre_avaliacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
