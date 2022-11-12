-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Nov-2022 às 20:46
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `curriculoweb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `ID` int(11) NOT NULL,
  `NOME` varchar(100) DEFAULT NULL,
  `SOBRENOME` varchar(100) DEFAULT NULL,
  `EMAIL` varchar(100) DEFAULT NULL,
  `DATANASC` date DEFAULT NULL,
  `SENHA` text DEFAULT NULL,
  `PERFIL` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`ID`, `NOME`, `SOBRENOME`, `EMAIL`, `DATANASC`, `SENHA`, `PERFIL`) VALUES
(1, 'Maria Júlia', 'Rezende Acorinte Massuci', 'majuliaguaxupe@gmail.com', '2004-12-27', '12345', 1),
(71, 'Lavínia', 'Santos', 'lavisnts@gmail.com', '2006-10-10', 'lav1234', 1),
(72, 'Ellen', 'Paiva', 'ellen@gmail.com', '2005-01-18', 'ellen', 1),
(73, 'Laís', 'Souza', 'lala@gmail.com', '2000-12-27', 'lala', 1),
(74, 'Jorge', 'Carvalho', 'carvalho@gmail.com', '1995-01-20', 'carva123', 1),
(75, 'Alana', 'Martins', 'alana@gmail.com', '2000-02-15', 'alana', 1),
(76, 'Rita', 'Santos', 'snts@gmail.com', '2009-03-12', 'rita', 1),
(77, 'mari', 'lurdes', 'malu@gmail.com', '2000-11-11', 'malu', 1),
(78, 'Guinevere', 'Beck', 'becknavidareal@gmail.com', '2000-12-12', '123456', 1),
(79, 'Maria', 'Flor', 'flor@gmail.com', '2000-11-11', 'flor123', 1),
(80, 'Juliana', 'Faria', 'juju@gmail.com', '2000-12-12', 'juju', 1),
(81, 'Joe', 'Goldberg', 'joe@gmail.com', '2000-11-11', '123654', 1),
(82, 'Lucia', 'Lucinha', 'lu@gmail.com', '2000-11-11', 'lu123', 1),
(83, 'Maju', 'Acorinte', 'maju@gmail.com', '2004-12-27', 'maju123', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagem`
--

CREATE TABLE `mensagem` (
  `id_mensagem` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `txt` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `mensagem`
--

INSERT INTO `mensagem` (`id_mensagem`, `nome`, `email`, `txt`) VALUES
(1, 'Maria', 'majuliaguaxupe@gmail.com', 'amei o site, ótimo trabalho.'),
(2, 'beck', 'becknavidareal@gmail.com', 'ameei o site mores');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `mensagem`
--
ALTER TABLE `mensagem`
  ADD PRIMARY KEY (`id_mensagem`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT de tabela `mensagem`
--
ALTER TABLE `mensagem`
  MODIFY `id_mensagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
