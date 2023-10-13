-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: exercicios-novostitans-database-1
-- Tempo de geração: 13/10/2023 às 20:18
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
-- Estrutura para tabela `Exercicio14`
--

CREATE TABLE `Exercicio14` (
  `alturaChico` int(11) NOT NULL,
  `alturaJuca` int(11) NOT NULL,
  `crescimentoChico` int(11) NOT NULL,
  `crescimentoJuca` int(11) NOT NULL,
  `anos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
