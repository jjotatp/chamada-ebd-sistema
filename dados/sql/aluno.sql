-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26-Fev-2018 às 03:43
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `id` int(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `idade` date NOT NULL,
  `nomeMae` varchar(255) NOT NULL,
  `nomePai` varchar(255) NOT NULL,
  `turma` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`id`, `nome`, `idade`, `nomeMae`, `nomePai`, `turma`) VALUES
(7, 'Luiz Gustavo', '2000-12-24', 'Kátia', 'Rogério', 2),
(8, 'Lucas', '1999-04-15', 'Kátia', 'Rogério', 2),
(9, 'Asafe', '2001-04-15', 'Nuri Conrado', 'Sérgio Conrado', 2),
(10, 'Mateus', '1999-06-22', 'Anália', 'Marcos', 2),
(11, 'Sofia Secco', '2002-07-16', 'Glória', 'Alexandre Secco', 2),
(13, 'Josué Conrado', '2005-01-11', 'Nuri Conrado', 'Sérgio Conrado', 7),
(14, 'Ester', '2011-01-11', 'Egisdra', 'Junior', 6),
(15, 'Isabella Ciribelle', '2012-01-11', 'Cyntia Ciribelle', 'Reginaldo Ciribelle', 6),
(16, 'Melina', '2012-12-12', 'Kika', 'Hilton', 6),
(17, 'João Pedro', '2009-10-11', 'Cyntia Ciribelle', 'Reginaldo Ciribelle', 7),
(18, 'Jonathan', '2002-12-11', 'Maria Helena', 'Não Informado', 7),
(19, 'Mércia Santos Campos', '1969-01-27', 'Cleyde ', 'José', 3),
(20, 'Edeilton Bastos', '1967-11-11', 'Não Informado', 'Não Informado', 3),
(21, 'Ana Marta Bastos', '1968-11-11', 'Não Informado', 'Não Informado', 3),
(22, 'Sérgio Conrado', '1675-12-11', 'Não Informado', 'Não Informado', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id`),
  ADD KEY `turma` (`turma`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aluno`
--
ALTER TABLE `aluno`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `aluno`
--
ALTER TABLE `aluno`
  ADD CONSTRAINT `aluno_ibfk_1` FOREIGN KEY (`turma`) REFERENCES `turma` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
