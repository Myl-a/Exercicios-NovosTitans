-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: exercicios-novostitans-database-1
-- Tempo de geração: 06/10/2023 às 14:05
-- Versão do servidor: 11.1.2-MariaDB-1:11.1.2+maria~ubu2204
-- Versão do PHP: 8.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `novos_titans`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `Exercicio13`
--

CREATE TABLE `Exercicio13` (
  `Numeros` varchar(100) NOT NULL DEFAULT '' COMMENT 'Numero Adicionado',
  `Resultado` int(11) NOT NULL COMMENT 'Resultado do numero'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
