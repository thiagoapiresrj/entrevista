-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16-Ago-2019 às 21:42
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `entrevista`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `usu_id` int(11) NOT NULL,
  `usu_nome` varchar(50) NOT NULL,
  `usu_cpf` varchar(14) NOT NULL,
  `usu_dt_nasc` varchar(10) NOT NULL,
  `usu_email` varchar(50) NOT NULL,
  `usu_telefone` varchar(14) NOT NULL,
  `usu_endereco` varchar(100) NOT NULL,
  `usu_cidade` varchar(50) NOT NULL,
  `usu_estado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`usu_id`, `usu_nome`, `usu_cpf`, `usu_dt_nasc`, `usu_email`, `usu_telefone`, `usu_endereco`, `usu_cidade`, `usu_estado`) VALUES
(8, 'Thiago', '111.111.111-01', '01/02/1988', 'thiagoosaqua@gmail.com', '(11) 1111-1111', 'Rua teste', 'Rio de Janeiro', 'Rio de Janeiro'),
(9, 'JoÃ£o', '111.111.111-01', '01/02/1988', 'joao@gmail.com', '(11) 1111-1111', 'Rua teste', 'Rio de Janeiro', 'Rio de Janeiro'),
(12, 'Clara', '111.111.111-11', '11/11/1111', 'clara@gmail.com', '(11) 1111-1111', 'Rua teste', 'Rio de Janeiro', 'Rio de Janeiro');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
