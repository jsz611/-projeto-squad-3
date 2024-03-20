-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 27-Ago-2023 às 14:56
-- Versão do servidor: 10.6.12-MariaDB-0ubuntu0.22.04.1
-- versão do PHP: 8.1.2-1ubuntu2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `estou_de_volta`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `vagas`
--

CREATE TABLE `vagas` (
  `id` int(11) NOT NULL,
  `vaga` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `descricao` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `empregador` varchar(120) NOT NULL,
  `localizacao` varchar(60) NOT NULL,
  `salario` varchar(11) NOT NULL,
  `imagem` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

--
-- Extraindo dados da tabela `vagas`
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

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `vagas`
--
ALTER TABLE `vagas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `vagas`
--
ALTER TABLE `vagas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
