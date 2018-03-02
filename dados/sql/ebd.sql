-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02-Mar-2018 às 11:56
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
(22, 'Sérgio Conrado', '1675-12-11', 'Não Informado', 'Não Informado', 3),
(23, 'Marcelo José Santos Campos', '1966-06-14', 'Cleyde Santos Campos', 'José Francisco de Campos Filho', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `chamada`
--

CREATE TABLE `chamada` (
  `id` int(11) NOT NULL,
  `ano` int(4) NOT NULL,
  `mes` varchar(100) NOT NULL,
  `dia` int(2) NOT NULL,
  `id_aluno` int(255) NOT NULL,
  `id_professor` int(255) NOT NULL,
  `id_turma` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `id` int(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `senha` varchar(15) NOT NULL,
  `turma` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`id`, `nome`, `senha`, `turma`) VALUES
(1, 'Jairo Junio', '010203', 2),
(2, 'Larissa', '040506', 2),
(3, 'Elza', '111', 3),
(4, 'Diana', '222', 3),
(5, 'Wanderley Jr', '222222', 3),
(6, 'Odezanir Oliveira', '333333', 6),
(7, 'Mayara', '444444', 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE `turma` (
  `id` int(255) NOT NULL,
  `nomeTurma` varchar(255) NOT NULL,
  `revista` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `turma`
--

INSERT INTO `turma` (`id`, `nomeTurma`, `revista`) VALUES
(2, 'Adolescentes', 'Mente Antenas e Coração Sintonizado'),
(3, 'Adultos', 'Espirito Santo'),
(6, 'Infantil', 'Noé o Melhor Exemplo'),
(7, 'Juniores', 'Amar os Amigos Sempre');

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
-- Indexes for table `chamada`
--
ALTER TABLE `chamada`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_aluno` (`id_aluno`),
  ADD KEY `id_professor` (`id_professor`),
  ADD KEY `id_turma` (`id_turma`);

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `turma` (`turma`);

--
-- Indexes for table `turma`
--
ALTER TABLE `turma`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aluno`
--
ALTER TABLE `aluno`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `chamada`
--
ALTER TABLE `chamada`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `professor`
--
ALTER TABLE `professor`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `turma`
--
ALTER TABLE `turma`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `aluno`
--
ALTER TABLE `aluno`
  ADD CONSTRAINT `aluno_ibfk_1` FOREIGN KEY (`turma`) REFERENCES `turma` (`id`);

--
-- Limitadores para a tabela `chamada`
--
ALTER TABLE `chamada`
  ADD CONSTRAINT `chamada_ibfk_1` FOREIGN KEY (`id_aluno`) REFERENCES `aluno` (`id`),
  ADD CONSTRAINT `chamada_ibfk_2` FOREIGN KEY (`id_professor`) REFERENCES `professor` (`id`),
  ADD CONSTRAINT `chamada_ibfk_3` FOREIGN KEY (`id_turma`) REFERENCES `turma` (`id`);

--
-- Limitadores para a tabela `professor`
--
ALTER TABLE `professor`
  ADD CONSTRAINT `professor_ibfk_1` FOREIGN KEY (`turma`) REFERENCES `turma` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
