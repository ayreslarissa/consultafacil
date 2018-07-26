-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26-Jul-2018 às 05:42
-- Versão do servidor: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `consultafacil_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `especialidade`
--

CREATE TABLE IF NOT EXISTS `especialidade` (
  `id` int(10) NOT NULL,
  `nome` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `especialidade`
--

INSERT INTO `especialidade` (`id`, `nome`) VALUES
(1, 'Cardiologia'),
(2, 'Dermatologia'),
(3, 'Gastroenterologia'),
(4, 'Ginecologia'),
(4, 'Urologia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `exames`
--

CREATE TABLE IF NOT EXISTS `exames` (
  `id` int(10) NOT NULL,
  `id_medico` int(10) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `valor` varchar(1000) NOT NULL,
  `id_especialidade` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `medicos`
--

CREATE TABLE IF NOT EXISTS `medicos` (
  `id` int(10) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `crm` varchar(13) NOT NULL,
  `especialidade` varchar(60) NOT NULL,
  `nascimento` date NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `id_especialidade` int(10) NOT NULL,
  `telefone` int(15) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(16) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `medicos`
--

INSERT INTO `medicos` (`id`, `nome`, `crm`, `especialidade`, `nascimento`, `cpf`, `id_especialidade`, `telefone`, `email`, `senha`) VALUES
(3, 'mario castro', '', '2', '1994-03-25', '11111111111', 0, 981929984, 'mario@gmail.com', 'oitudobom'),
(4, 'maria castro', '', '2', '1994-03-25', '11111111111', 0, 981929984, 'maria@gmail.com', 'oitudobom'),
(5, 'marie castro', '', '3', '1994-03-25', '11111111111', 0, 981929984, 'maria@gmail.com', 'ppppp'),
(6, '', '', '', '0000-00-00', '', 0, 0, '', ''),
(7, 'Jose Castro', '1234/SP', '4', '1956-08-09', '11111111122', 0, 2147483647, 'castrojose@email.com', '12345'),
(8, 'Antonio Jose', '56789/MG', '4', '1989-09-07', '88888888888', 0, 982938401, 'antonio@email.com', 'antonio'),
(9, 'chica da silva', '8888/PR', '4', '1965-04-17', '99999999999', 0, 2147483647, 'chicada@email.com', 'chicadasilva'),
(11, 'Luciana Ayres', '8990/AM', '2', '1985-12-04', '88888888888', 0, 2147483647, 'luciayres@email.com', 'luciayres');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pacientes`
--

CREATE TABLE IF NOT EXISTS `pacientes` (
  `id` int(10) NOT NULL,
  `nome` varchar(60) DEFAULT NULL,
  `sexo` varchar(10) DEFAULT NULL,
  `cpf` varchar(11) DEFAULT NULL,
  `plano` varchar(60) NOT NULL,
  `num_cartao` varchar(20) NOT NULL,
  `nascimento` date DEFAULT NULL,
  `numero` varchar(10) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `senha` varchar(16) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pacientes`
--

INSERT INTO `pacientes` (`id`, `nome`, `sexo`, `cpf`, `plano`, `num_cartao`, `nascimento`, `numero`, `email`, `senha`) VALUES
(32, 'Larissa', 'Feminino', '02091637203', 'amil', '7432893842983721', '1994-03-25', '981992606', 'larimayres@gmail.com', 'yeshua'),
(33, '', '', '', '', '', '0000-00-00', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exames`
--
ALTER TABLE `exames`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicos`
--
ALTER TABLE `medicos`
  ADD PRIMARY KEY (`id`), ADD KEY `id_medico` (`id`);

--
-- Indexes for table `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `num_cartao` (`num_cartao`), ADD UNIQUE KEY `cpf` (`cpf`), ADD KEY `id_paciente` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exames`
--
ALTER TABLE `exames`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `medicos`
--
ALTER TABLE `medicos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
