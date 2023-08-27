-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 07, 2020 at 12:04 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `estou_de_volta`
--

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `telefone`, `endereco`) VALUES
(1, 'Test1', 'test', '098f6bcd4621d373cade4e832627b4f6', 'test', 'test'),
(2, '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', ''),
(3, 'test', 'testt', '751ec45015a704a39dc403001c963e97', 'sets', 'set');

-- --------------------------------------------------------

--
-- Table structure for table `vagas`
--

DROP TABLE IF EXISTS `vagas`;
CREATE TABLE IF NOT EXISTS `vagas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vaga` varchar(150) CHARACTER SET latin1 NOT NULL,
  `descricao` varchar(200) CHARACTER SET latin1 NOT NULL,
  `empregador` varchar(120) COLLATE utf8_bin NOT NULL,
  `localizacao` varchar(60) COLLATE utf8_bin NOT NULL,
  `salario` varchar(11) COLLATE utf8_bin NOT NULL,
  `imagem` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `vagas`
--

INSERT INTO `vagas` (`id`, `vaga`, `descricao`, `empregador`, `localizacao`, `salario`, `imagem`) VALUES
(1, 'Recepcionista', 'Área e especialização profissional: Administração - Recepção', 'Animalias Pet Center', 'São Paulo - SP', '1.500,00', 'assets/img/logo_pet.png'),
(2, 'Secretária', 'Secretária da clínica, irá executar todas as funções de recepcionista de uma clínica.', 'Animalias Pet Center', 'São Paulo - SP', '1.500,00', 'assets/img/logo_pet.png'),
(3, 'Barbeiro', 'Barbeiro com experiência ', 'Navalha Barbearia', 'São Paulo - SP', '1.000,00', 'assets/img/logo_barbearia.png'),
(4, 'Aprendiz', 'Auxiliar no atendimento aos clientes, preencher documentos e tabelar dados de cadastro ', 'Menezes Advogados', 'São Paulo - SP', '1.000,00', 'assets/img/logo_advocacia.png'),
(5, 'Ajudante Geral', 'Principais Reforma de estruturas metálicas. Restaurar, lixar e pintar. Efetuar manutenção de primeiro nível, limpando máquinas e ferramentas.', 'Silva & Santos ', 'São Paulo - SP', '1.000,00', 'assets/img/logo_estudio.png'),
(6, 'Porteiro', 'Será responsável pela fiscalização e guarda do patrimônio, além de controlar a entrada e saída de pessoas e veículos nas dependências da empresa, bem como orientar as pessoas sobre seus destinos.', 'Menezes Advogados', 'São Paulo - SP', '2.000,00', 'assets/img/logo_advocacia.png'),
(7, 'Secretária', 'Secretária da clínica, irá executar todas as funções de recepcionista de uma clínica.', 'Animalias Pet Center', 'São Paulo - SP', '1.500,00', 'assets/img/logo_pet.png'),
(8, 'Barbeiro', 'Barbeiro com experiência ', 'Navalha Barbearia', 'São Paulo - SP', '1.000,00', 'assets/img/logo_barbearia.png'),
(9, 'Aprendiz', 'Auxiliar no atendimento aos clientes, preencher documentos e tabelar dados de cadastro ', 'Menezes Advogados', 'São Paulo - SP', '1.000,00', 'assets/img/logo_advocacia.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
