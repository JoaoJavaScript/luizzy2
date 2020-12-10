-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Dez-2020 às 20:29
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `luizzydb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(5) NOT NULL,
  `produto` varchar(60) NOT NULL,
  `marca` varchar(60) NOT NULL,
  `descricao` text NOT NULL,
  `departamento` varchar(40) NOT NULL,
  `secao` varchar(40) NOT NULL,
  `quantidade` int(5) NOT NULL,
  `preco` decimal(15,2) NOT NULL,
  `foto1` varchar(60) NOT NULL,
  `foto2` varchar(60) NOT NULL,
  `foto3` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `produto`, `marca`, `descricao`, `departamento`, `secao`, `quantidade`, `preco`, `foto1`, `foto2`, `foto3`) VALUES
(1, 'Nike Air Max', 'Nike', 'Tênis confortavel da Nike', 'Tênis', 'Sneakers', 100, '500.00', 'foto2.jpg', 'foto2.jpg', 'foto3.jpg'),
(2, 'Yeezy Boost', 'Adidas', 'Tênis confortavel da Adidas', 'Tênis', 'Sneakers', 100, '500.00', 'foto4.jpg', 'foto5.jpg', 'foto6.jpg'),
(3, 'Nike Air Jordan', 'Nike', 'Tênis de basquete da nike', 'Tênis', 'Sneakers', 100, '600.00', 'foto7.jpg', 'foto8.jpg', 'foto9.jpg'),
(4, 'Nike Air Dunk', 'Nike', 'Tênis para andar de skate da nike', 'Tênis', 'Sneakers', 100, '100.00', 'foto10.jpg', 'foto11.jpg', 'foto12.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_user` int(5) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `sobrenome` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `senha` varchar(15) NOT NULL,
  `adm` tinyint(1) NOT NULL,
  `endereco` text NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `data_nasc` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_user`, `nome`, `sobrenome`, `email`, `senha`, `adm`, `endereco`, `cidade`, `cep`, `cpf`, `telefone`, `data_nasc`) VALUES
(1, 'Tekkie', 'Boys', 'tekkie@adm.com', 'tekkieadm1', 1, 'Rua doida de se ver', 'Divinopolis', '35501205', '02054371688', '373312321', '14/08/2003');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
