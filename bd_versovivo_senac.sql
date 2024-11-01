-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 31/10/2024 às 13:40
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_versovivo_senac`
--

-- --------------------------------------------------------

-- Cria e Seleciona o Banco de Dados
CREATE DATABASE IF NOT EXISTS `bd_versovivo_senac`;

USE bd_versovivo_senac;

--
-- Estrutura para tabela `eventos`
--

CREATE TABLE IF NOT EXISTS `eventos` (
  `id_eventos` int(11) NOT NULL,
  `id_usuarios` int(11) DEFAULT NULL,
  `titulo_eventos` varchar(255) DEFAULT NULL,
  `data_hora_evento` datetime DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `imagem1` varchar(255) DEFAULT NULL,
  `imagem1_thumb` varchar(255) DEFAULT NULL,
  `imagem2` varchar(255) NOT NULL,
  `imagem2_thumb` varchar(255) NOT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `cep` varchar(10) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `bairro` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `eventos`
--

INSERT INTO `eventos` (`id_eventos`, `id_usuarios`, `titulo_eventos`, `data_hora_evento`, `descricao`, `imagem1`, `imagem1_thumb`, `imagem2`, `imagem2_thumb`, `endereco`, `cep`, `numero`, `bairro`) VALUES
(1, DEFAULT, 'Batalha na Favela da 16', '2024-11-21 19:00:47', 'Surgiu em 2019 como uma intervenção cultural no bairro Morro Doce, zona noroeste de São Paulo, em frente à Favela da 16. Acontece toda primeira sexta do mês, às 19h.\r\n\r\n', 'batalha_favela_16', 'batalha_favela_16', '0', '', 'Rua Pedro José De Lima', '05267-174', '1020', 'Morro Doce'),
(2, DEFAULT, 'Batalha da Norte', '2024-11-22 19:00:02', 'no lado norte da cidade, todas as sextas, a partir das 20h, a batalha toma a Praça Margarida de Albuquerque Gimenez, em Santana.\r\n\r\n', 'batalha_norte', 'batalha_norte', '0', '', 'Praça Margarida A. Gimenez', '02037-020', '', 'Santana'),
(3, DEFAULT, 'Batalha da Aldeia', '2024-11-11 19:27:03', 'Criada em 2016 por Bruno Angelo de Souza (Bob 13), a batalha acontece toda segunda-feira, às 20h, na Praça dos Estudantes, em Barueri, na Grande São Paulo.\r\n', 'batalha_aldeia', 'batalha_aldeia', '', '', 'Av. Guilherme Perereca Guglielmo ', '06401-145', '', ' Barueri '),
(4, DEFAULT, 'Batalha da Leste', '2024-11-02 19:00:13', 'A Batalha da Leste é um movimento independente de batalhas de rima que surgiu no ano de 2011 e até hoje ocupa um pedaço do Metrô Itaquera, todo sábado, ...', 'batalha _leste', 'batalha _leste', '', '', 'Largo da Matriz', ' 08210-110', '85-119 ', 'Itaquera');

-- --------------------------------------------------------

--
-- Estrutura para tabela `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `idLogin` int(11) NOT NULL,
  `dataCad` datetime NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `login`
--

INSERT INTO `login` (`idLogin`, `dataCad`, `nome`, `email`, `senha`) VALUES
(1, '2024-10-29 13:29:38', 'Daniel', 'danielsantos@gmail.com', '1234'),
(2, '2024-10-29 13:30:33', 'Samuel', 'samuelsantos@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuarios` int(11) NOT NULL,
  `mc` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `nome_guerra` varchar(255) NOT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `foto_perfil` varchar(255) DEFAULT NULL,
  `foto_perfil_thumb` varchar(255) NOT NULL,
  `descricao` text DEFAULT NULL,
  `data_hora_cad` datetime DEFAULT NULL,
  `link_instagram` varchar(255) DEFAULT NULL,
  `status_conta` tinyint(4) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuarios`, `mc`, `nome`, `nome_guerra`, `telefone`, `email`, `senha`, `foto_perfil`, `foto_perfil_thumb`, `descricao`, `data_hora_cad`, `link_instagram`, `status_conta`) VALUES
(1, 1, 'Luiz Henrique', 'Big Mike', '11985632541', 'bigmike@gmail.com', '1234', 'big_mike', 'big_mike', 'estou aqui para participar das batalhas de rap', NULL, '@bigao__', 1),
(2, 2, 'Rafael Alves de Oliveira', 'Alves', '11978562314', 'rafaelalves@gmail.com', '1234', 'mc_alves', 'mc_alves', 'estou aqui para participar dashttp batalhas ', NULL, '@alves.mc', 0),
(3, 3, 'Eduardo Santos Lima', 'Dudu', '11985467584', 'eduardodudu@gmail.com', '1234', 'mc_dudu', 'mc_dudu', 'estou participando das batalhas', NULL, '@mcdudu', 1),
(4, 4, 'Gabriel Salvador', 'Salvador da Rima', '11985432607', 'salvador@gmail.com.br', '1234', 'salvador_rima', 'salvador_rima', 'estou participando das batalhas', NULL, '@salvadordarima', 1),
(5, 5, 'Lucas Luan', 'Sid', '11933254879', 'lucassid@gmail.com', '1234', 'mc_sid', 'mc_sid', 'Estou participando ', NULL, '@mc.sid', 1),
(6, 6, 'Jonas', 'Juninho', '123', NULL, NULL, NULL, '', NULL, NULL, NULL, 0),
(7, 7, 'Flávio Cesar Costa de Castro', 'Orochi', '11966553257', 'orochi@gmail.com', '1234', 'mc_orochi', 'mc_orochi', 'participando das batalhas', NULL, '@orochi', 1),
(8, 8, 'Douglas Din', 'Koell', '11975845266', 'koel@gmail.com', '1234', 'mc_koel', 'mc_koel', 'participando das batalhas', NULL, '@akakoell', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id_eventos`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuarios`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
