-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 07-Dez-2023 às 21:50
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `bairro`
--

DROP TABLE IF EXISTS `bairro`;
CREATE TABLE IF NOT EXISTS `bairro` (
  `id_bairro` int NOT NULL AUTO_INCREMENT,
  `bairro` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `frete` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_bairro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinho`
--

DROP TABLE IF EXISTS `carrinho`;
CREATE TABLE IF NOT EXISTS `carrinho` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `processo`
--

DROP TABLE IF EXISTS `processo`;
CREATE TABLE IF NOT EXISTS `processo` (
  `processo_id` int NOT NULL AUTO_INCREMENT,
  `ordemuser_id` int NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`processo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `produto_id` int NOT NULL AUTO_INCREMENT,
  `cat_id` int NOT NULL,
  `produto_nome` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `descricao` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `produto_preco` decimal(10,2) NOT NULL,
  `produto_img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`produto_id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`produto_id`, `cat_id`, `produto_nome`, `descricao`, `produto_preco`, `produto_img`) VALUES
(1, 1, 'oi', 'tchau', '12.90', 'img/teste.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `u_id` int NOT NULL AUTO_INCREMENT,
  `id_bairro` int NOT NULL,
  `nomeusuario` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `1nome` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `2nome` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `telefone` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `senha` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `endereco` text COLLATE utf8mb4_general_ci NOT NULL,
  `permissao` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`u_id`),
  KEY `id_bairro` (`id_bairro`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`u_id`, `id_bairro`, `nomeusuario`, `1nome`, `2nome`, `email`, `telefone`, `senha`, `endereco`, `permissao`) VALUES
(1, 0, 'clodo', 'clodo', 'mar', 'clodo@gmail.com', '555555555555', '0b5de470bdace90bd6cfb2541eb79f99', 'rua dos pirulitos bairro dos doces', 1),
(2, 0, 'clodomirlderson', 'clodo', 'clodo', 'clodo@gmail.comm', '1111111111', 'e11170b8cbd2d74102651cb967fa28e5', 'rua pai casa mae', 1),
(3, 0, 'clodomar', 'clodos', 'omar', 'colodomar@gmail.com', '55999284953', '0b5de470bdace90bd6cfb2541eb79f99', 'sei la oq sei la oq', 1),
(4, 0, 'luiza', 'luiza', 'baioco', 'luiza@gmail.com', '555991599813', '56495e672b8332e461cdba35e2dab886', 'asopfkjqopfjqwffsa', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
