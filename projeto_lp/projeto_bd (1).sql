-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Mar-2021 às 00:26
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto_bd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbclientes`
--

CREATE TABLE `tbclientes` (
  `codigo` int(32) NOT NULL,
  `profissao` text NOT NULL,
  `rg` int(11) NOT NULL,
  `nome` text NOT NULL,
  `cpf` int(11) NOT NULL,
  `bairro` text NOT NULL,
  `estado` text NOT NULL,
  `cidade` text NOT NULL,
  `telefone` int(11) NOT NULL,
  `genero` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbclientes`
--

INSERT INTO `tbclientes` (`codigo`, `profissao`, `rg`, `nome`, `cpf`, `bairro`, `estado`, `cidade`, `telefone`, `genero`) VALUES
(1, 'motorista', 2147483647, 'bruno silva', 2147483647, 'jardim rosa', 'piaui', 'cidade alta', 41258789, 'Maculino');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbfuncio`
--

CREATE TABLE `tbfuncio` (
  `codigo` int(10) NOT NULL,
  `usuario` varchar(64) NOT NULL,
  `senha` varchar(64) NOT NULL,
  `nome` text NOT NULL,
  `cpf` int(64) NOT NULL,
  `bairro` text NOT NULL,
  `estado` text NOT NULL,
  `cidade` text NOT NULL,
  `telefone` int(64) NOT NULL,
  `departamento` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbfuncio`
--

INSERT INTO `tbfuncio` (`codigo`, `usuario`, `senha`, `nome`, `cpf`, `bairro`, `estado`, `cidade`, `telefone`, `departamento`) VALUES
(3, 'heloisa', '123', 'Heloisa Oliveira', 2147483647, 'jardim azul', 'sao paulo', 'osasco', 41526364, 'marketing'),
(5, 'bia', '1458', 'bianca', 2147483647, 'jardim amarelo', 'rio de janeiro', 'cabo frio', 54623512, 'engenharia'),
(6, 'david', '123', 'david belizario', 452152145, 'jardim azul', 'são paulo', 'barueri', 45875124, 'I.T');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbprodutos`
--

CREATE TABLE `tbprodutos` (
  `codigo` int(11) NOT NULL,
  `nomeprod` text NOT NULL,
  `cor` text NOT NULL,
  `material` text NOT NULL,
  `quantidade` int(11) NOT NULL,
  `preco` int(11) NOT NULL,
  `genero` text NOT NULL,
  `marca` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbprodutos`
--

INSERT INTO `tbprodutos` (`codigo`, `nomeprod`, `cor`, `material`, `quantidade`, `preco`, `genero`, `marca`) VALUES
(1, 'PinkStyle', 'rosa', 'couro', 10, 120, 'feminino', 'stargirls');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbclientes`
--
ALTER TABLE `tbclientes`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices para tabela `tbfuncio`
--
ALTER TABLE `tbfuncio`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices para tabela `tbprodutos`
--
ALTER TABLE `tbprodutos`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbclientes`
--
ALTER TABLE `tbclientes`
  MODIFY `codigo` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tbfuncio`
--
ALTER TABLE `tbfuncio`
  MODIFY `codigo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tbprodutos`
--
ALTER TABLE `tbprodutos`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
