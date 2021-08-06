-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25-Maio-2017 às 19:49
-- Versão do servidor: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ocorrencia`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `dadosocorrencia`
--

CREATE DATABASE ocorrencia;

USE	ocorrencia;

CREATE TABLE `dadosocorrencia` (
  `idocorrencia` int(11) NOT NULL,
  `dataAbertura` date NOT NULL,
  `descricaoProblema` varchar(200) NOT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `patrimonio_idpatrimonio` int(11) NOT NULL,
  `laboratorio_idlaboratorio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `dadosocorrencia`
--

INSERT INTO `dadosocorrencia` (`idocorrencia`, `dataAbertura`, `descricaoProblema`, `usuario_idusuario`, `patrimonio_idpatrimonio`, `laboratorio_idlaboratorio`) VALUES
(2, '2017-05-25', 'MICRO NAO LIGA', 1, 2, 9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `dadosstatus`
--

CREATE TABLE `dadosstatus` (
  `dadosOcorrencia_idocorrencia` int(11) NOT NULL,
  `statusOcorrencia_idstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `dadosstatus`
--

INSERT INTO `dadosstatus` (`dadosOcorrencia_idocorrencia`, `statusOcorrencia_idstatus`) VALUES
(2, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `laboratorio`
--

CREATE TABLE `laboratorio` (
  `idlaboratorio` int(11) NOT NULL,
  `sala` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `laboratorio`
--

INSERT INTO `laboratorio` (`idlaboratorio`, `sala`) VALUES
(1, 'SALA 01 BLOCO D'),
(2, 'SALA 02 BLOCO D'),
(3, 'SALA 03 BLOCO D'),
(4, 'SALA 04 BLOCO D'),
(5, 'SALA 05 BLOCO D'),
(6, 'SALA 06 BLOCO D'),
(7, 'SALA 07 BLOCO D'),
(8, 'SALA 08 BLOCO D'),
(9, 'SALA 09 BLOCO D'),
(10, 'SALA 10 BLOCO D'),
(11, 'SALA 11 BLOCO D'),
(12, 'SALA 12 BLOCO D'),
(13, 'SALA 13 BLOCO D'),
(14, 'SALA 14 BLOCO D'),
(15, 'SALA 15 BLOCO D'),
(16, 'SALA 16 BLOCO D');

-- --------------------------------------------------------

--
-- Estrutura da tabela `patrimonio`
--

CREATE TABLE `patrimonio` (
  `idpatrimonio` int(11) NOT NULL,
  `numPatrimonio` int(11) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `marca` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `patrimonio`
--

INSERT INTO `patrimonio` (`idpatrimonio`, `numPatrimonio`, `descricao`, `modelo`, `marca`) VALUES
(1, 2904562, 'CPU INTEL I3, HD 500, 4GB, MEM, GRAVADOR DVD', 'IT5600', 'ITAUTEC'),
(2, 2904558, 'CPU INTEL I5, HD 500, 8GB, MEM, GRAVADOR DVD', 'IT8600', 'ITAUTEC'),
(4, 2968456, 'CPU AMD 9600, HD 1TB, 8GB MEM, GRAVADOR DVD', 'ASUS 9600', 'ASUS');

-- --------------------------------------------------------

--
-- Estrutura da tabela `restrito`
--

CREATE TABLE `restrito` (
  `idcpf` int(11) NOT NULL,
  `cpf` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `restrito`
--

INSERT INTO `restrito` (`idcpf`, `cpf`) VALUES
(1, '14818095800'),
(2, '14818095801'),
(4, '15515515555'),
(9, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `statusocorrencia`
--

CREATE TABLE `statusocorrencia` (
  `idstatus` int(11) NOT NULL,
  `data` date NOT NULL,
  `status` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `statusocorrencia`
--

INSERT INTO `statusocorrencia` (`idstatus`, `data`, `status`) VALUES
(1, '2017-05-24', 'AGUARDANDO TECNICO'),
(2, '2017-05-24', 'EQUIPAMENTO RETIRADO'),
(3, '2017-05-24', 'EM MANUTENÇÃO'),
(4, '2017-05-24', 'EQUIPAMENTO ENTREGUE');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nomeCompleto` varchar(50) NOT NULL,
  `raCpf` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nomeCompleto`, `raCpf`) VALUES
(1, 'ANDRE HEMETERIO DA SILVA', '1466127');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dadosocorrencia`
--
ALTER TABLE `dadosocorrencia`
  ADD PRIMARY KEY (`idocorrencia`),
  ADD KEY `fk_dadosOcorrencia_usuario_idx` (`usuario_idusuario`),
  ADD KEY `fk_dadosOcorrencia_patrimonio1_idx` (`patrimonio_idpatrimonio`),
  ADD KEY `fk_dadosOcorrencia_laboratorio1_idx` (`laboratorio_idlaboratorio`);

--
-- Indexes for table `dadosstatus`
--
ALTER TABLE `dadosstatus`
  ADD PRIMARY KEY (`dadosOcorrencia_idocorrencia`,`statusOcorrencia_idstatus`),
  ADD KEY `fk_dadosOcorrencia_has_statusOcorrencia_statusOcorrencia1_idx` (`statusOcorrencia_idstatus`),
  ADD KEY `fk_dadosOcorrencia_has_statusOcorrencia_dadosOcorrencia1_idx` (`dadosOcorrencia_idocorrencia`);

--
-- Indexes for table `laboratorio`
--
ALTER TABLE `laboratorio`
  ADD PRIMARY KEY (`idlaboratorio`);

--
-- Indexes for table `patrimonio`
--
ALTER TABLE `patrimonio`
  ADD PRIMARY KEY (`idpatrimonio`);

--
-- Indexes for table `restrito`
--
ALTER TABLE `restrito`
  ADD PRIMARY KEY (`idcpf`);

--
-- Indexes for table `statusocorrencia`
--
ALTER TABLE `statusocorrencia`
  ADD PRIMARY KEY (`idstatus`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dadosocorrencia`
--
ALTER TABLE `dadosocorrencia`
  MODIFY `idocorrencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `laboratorio`
--
ALTER TABLE `laboratorio`
  MODIFY `idlaboratorio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `patrimonio`
--
ALTER TABLE `patrimonio`
  MODIFY `idpatrimonio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `restrito`
--
ALTER TABLE `restrito`
  MODIFY `idcpf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `statusocorrencia`
--
ALTER TABLE `statusocorrencia`
  MODIFY `idstatus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `dadosocorrencia`
--
ALTER TABLE `dadosocorrencia`
  ADD CONSTRAINT `fk_dadosOcorrencia_laboratorio1` FOREIGN KEY (`laboratorio_idlaboratorio`) REFERENCES `laboratorio` (`idlaboratorio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_dadosOcorrencia_patrimonio1` FOREIGN KEY (`patrimonio_idpatrimonio`) REFERENCES `patrimonio` (`idpatrimonio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_dadosOcorrencia_usuario` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `dadosstatus`
--
ALTER TABLE `dadosstatus`
  ADD CONSTRAINT `fk_dadosOcorrencia_has_statusOcorrencia_dadosOcorrencia1` FOREIGN KEY (`dadosOcorrencia_idocorrencia`) REFERENCES `dadosocorrencia` (`idocorrencia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_dadosOcorrencia_has_statusOcorrencia_statusOcorrencia1` FOREIGN KEY (`statusOcorrencia_idstatus`) REFERENCES `statusocorrencia` (`idstatus`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
