-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 01-Mar-2022 às 22:40
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_vagas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `candidatos`
--

DROP TABLE IF EXISTS `candidatos`;
CREATE TABLE IF NOT EXISTS `candidatos` (
  `id_candidato` int(11) NOT NULL AUTO_INCREMENT,
  `nome_candidato` varchar(100) NOT NULL,
  `formacao_candidato` text NOT NULL,
  `experiencia_candidato` text NOT NULL,
  `competencias_candidato` text NOT NULL,
  `status_candidato` set('inscrito','procurando','inativo') NOT NULL,
  PRIMARY KEY (`id_candidato`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `candidatos`
--

INSERT INTO `candidatos` (`id_candidato`, `nome_candidato`, `formacao_candidato`, `experiencia_candidato`, `competencias_candidato`, `status_candidato`) VALUES
(2, 'felipe', 'direito', 'trackn', 'proativo', 'inscrito'),
(31, 'Fabio', 'Engenharia', '2 ANOS NA EMPRESA X', 'COMUNICATIVO', 'procurando'),
(30, 'Flavio Matos de Lima', 'Direito', 'estagio 2 anos', 'direito penal', 'procurando'),
(29, 'Felipe Matos de Lima', 'Desenvolvimento de Sistemas', '1 ano como programador', 'php, mysql, css, html e javascript.', 'inscrito'),
(32, 'Fabio', 'Engenharia', '2 ANOS NA EMPRESA X', 'COMUNICATIVO', 'procurando'),
(35, '', '', '', '', ''),
(34, 'JOAO', 'MEDICINA', 'AAAAAA', 'BBBBBB', 'procurando'),
(36, 'BRENDA', 'TECNICA EM ADM', 'ETEC - DR EMILIO HERNANDEZ DE AGUILAR', 'ORATORIA', 'procurando');

-- --------------------------------------------------------

--
-- Estrutura da tabela `incricoes`
--

DROP TABLE IF EXISTS `incricoes`;
CREATE TABLE IF NOT EXISTS `incricoes` (
  `id_inscricao` int(11) NOT NULL AUTO_INCREMENT,
  `candidato_inscricao` int(11) NOT NULL,
  `vaga_inscricao` int(11) NOT NULL,
  `status_inscricao` set('iniciada','em processo','recusada','contratada') NOT NULL,
  PRIMARY KEY (`id_inscricao`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `inscricao`
--

DROP TABLE IF EXISTS `inscricao`;
CREATE TABLE IF NOT EXISTS `inscricao` (
  `idInscricao` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(11) NOT NULL,
  `idVaga` int(11) NOT NULL,
  PRIMARY KEY (`idInscricao`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `vagas`
--

DROP TABLE IF EXISTS `vagas`;
CREATE TABLE IF NOT EXISTS `vagas` (
  `id_vaga` int(11) NOT NULL AUTO_INCREMENT,
  `nome_vaga` varchar(100) NOT NULL,
  `descricao_vaga` varchar(500) NOT NULL,
  `salario_vaga` float NOT NULL,
  `contratante_vaga` varchar(100) NOT NULL,
  `tipo_vaga` set('CLT','PESSOA JURIDICA','FREELANCER') NOT NULL,
  `status_vaga` set('ABERTA','ENCERRADA') NOT NULL,
  PRIMARY KEY (`id_vaga`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `vagas`
--

INSERT INTO `vagas` (`id_vaga`, `nome_vaga`, `descricao_vaga`, `salario_vaga`, `contratante_vaga`, `tipo_vaga`, `status_vaga`) VALUES
(2, 'Desenvolvedor Web Pleno', 'VAGA PARA PHP', 2500, 'Prefeitura Municipal', 'CLT', 'ABERTA'),
(3, 'COBRADOR', 'COBRADOR DE ÔNIBUS', 1500, 'NOVA CAIEIRAS', 'CLT', 'ABERTA'),
(4, 'motorista', 'CNH B,C, D & E', 4555, 'Polícia Civil ', 'PESSOA JURIDICA', 'ABERTA'),
(5, 'h', 'h', 44, '444', 'PESSOA JURIDICA', 'ABERTA');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
