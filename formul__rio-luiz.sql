-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29/07/2023 às 02:09
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
-- Banco de dados: `formulário-luiz`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `email` varchar(110) NOT NULL,
  `senha` varchar(35) DEFAULT NULL,
  `telefone` varchar(15) NOT NULL,
  `sexo` varchar(15) NOT NULL,
  `data_nasc` date NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `estado` varchar(45) NOT NULL,
  `endereco` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `telefone`, `sexo`, `data_nasc`, `cidade`, `estado`, `endereco`) VALUES
(1, 'Luiz Fernando Blume Jacinto', 'luiz@gmail.com', NULL, '123456789', 'masculino', '2023-07-05', 'tal', 'tal', 'tal'),
(2, 'LUIZ FERNANDO BLUME JACINTO', 'luiz.fernando.251107@gmail.com', NULL, '47999185924', 'masculino', '2007-11-25', 'Joinville', 'SC', 'Rua Cidade de Medianeira, Casa'),
(3, 'Victor', 'victor@gmail.com', NULL, '11111111111111', 'masculino', '2023-07-03', 'aa', 'aa', 'aa'),
(4, 'luiz', 'abcd@gmail.com', NULL, '123', 'masculino', '2023-07-07', 'tal', 'tal', 'tal'),
(5, 'luiz fernando', 'luiz@gmail.com', NULL, '12344444', 'masculino', '2023-07-07', 'ta', 'ta', 'ta'),
(6, 'aaaa', 'aaaa', NULL, 'aaaa', 'masculino', '2023-07-07', 'aaaa', 'aaa', 'aaaa'),
(7, 'Luiz Fernando Blume Jacinto', 'pubgvida96@gmail.com', NULL, '11112222', 'masculino', '2023-07-15', 'jlle', 'sc', 'rua'),
(8, 'blablabla', 'arroz', 'feijao', '4444', 'masculino', '2023-07-15', 'taf', 're', 'tu'),
(9, 'blablabla', 'arroz', 'feijao', '4444', 'masculino', '2023-07-15', 'tu', 'nos', 'eu'),
(10, 'Luiz Fernando Blume Jacinto', 'luiz.fernando.251107@gmail.com', '178999118', '47999185924', 'masculino', '2007-11-25', 'Joinville', 'Santa Catarina', 'Rua Cidade de Medianeira'),
(11, 'Wagner Luiz Blume Jacinto', 'wagner@gmail.com', '1234', '111111111', 'masculino', '2023-07-18', 'jlle', 'SC', 'rua ');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
