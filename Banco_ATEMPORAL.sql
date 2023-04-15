DROP DATABASE Atemporal;
CREATE DATABASE Atemporal;
USE Atemporal;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 15-Abr-2023 às 18:09
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
-- Banco de dados: `atemporal`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_anuncio`
--

DROP TABLE IF EXISTS `tb_anuncio`;
CREATE TABLE IF NOT EXISTS `tb_anuncio` (
  `ID_ANUNCIO` int NOT NULL AUTO_INCREMENT,
  `NOME_ANUNCIO` varchar(80) NOT NULL,
  `CATEGORIA_ANUNCIO` varchar(13) NOT NULL,
  `DESC_ANUNCIO` text NOT NULL,
  `VALOR_VENDA_ANUNCIO` decimal(8,2) NOT NULL,
  `ID_VENDEDOR` int NOT NULL,
  `STATUS_ANUNCIO` varchar(40) DEFAULT NULL,
  `QTD_ANUNCIO` int DEFAULT NULL,
  `IMAGEM_ANUNCIO` varchar(85) NOT NULL,
  PRIMARY KEY (`ID_ANUNCIO`),
  KEY `ID_VENDEDOR` (`ID_VENDEDOR`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `tb_anuncio`
--

INSERT INTO `tb_anuncio` (`ID_ANUNCIO`, `NOME_ANUNCIO`, `CATEGORIA_ANUNCIO`, `DESC_ANUNCIO`, `VALOR_VENDA_ANUNCIO`, `ID_VENDEDOR`, `STATUS_ANUNCIO`, `QTD_ANUNCIO`, `IMAGEM_ANUNCIO`) VALUES
(1, 'Relógio Antigo', 'utensilios', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto odit incidunt sequi excepturi quam quaerat earum repellat repellendus magni adipisci quas cumque delectus dicta accusantium porro, saepe dolorum ducimus ipsum.', '300.50', 1, NULL, NULL, '../media/fotoAnuncio/ce70472e0c228ef7d9b8983d6b7d1cb7'),
(2, 'Telefone Discador', 'eletronicos', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto odit incidunt sequi excepturi quam quaerat earum repellat repellendus magni adipisci quas cumque delectus dicta accusantium porro, saepe dolorum ducimus ipsum.', '100.00', 1, NULL, NULL, '../media/fotoAnuncio/33236bc9a205b4bdc9f5687d9a78a88c'),
(3, 'Televisão', 'eletronicos', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto odit incidunt sequi excepturi quam quaerat earum repellat repellendus magni adipisci quas cumque delectus dicta accusantium porro, saepe dolorum ducimus ipsum.', '250.00', 1, NULL, NULL, '../media/fotoAnuncio/881502c7655ea251c21d05125e2585a3');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_chat`
--

DROP TABLE IF EXISTS `tb_chat`;
CREATE TABLE IF NOT EXISTS `tb_chat` (
  `ID_CHAT` int NOT NULL AUTO_INCREMENT,
  `MENSAGEM_CHAT` varchar(800) NOT NULL,
  `TIME_ENVIO_CHAT` date NOT NULL,
  `DES_CHAT` varchar(40) NOT NULL,
  `ID_ANUNCIO` int NOT NULL,
  `ID_CLIENTE` int NOT NULL,
  PRIMARY KEY (`ID_CHAT`),
  UNIQUE KEY `DES_CHAT` (`DES_CHAT`),
  KEY `ID_ANUNCIO` (`ID_ANUNCIO`),
  KEY `ID_CLIENTE` (`ID_CLIENTE`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cliente`
--

DROP TABLE IF EXISTS `tb_cliente`;
CREATE TABLE IF NOT EXISTS `tb_cliente` (
  `ID_CLIENTE` int NOT NULL AUTO_INCREMENT,
  `NOME_CLIENTE` varchar(60) NOT NULL,
  `TIPO_CLIENTE` char(1) DEFAULT NULL,
  `FONE_CLIENTE` char(14) NOT NULL,
  `EMAIL_CLIENTE` varchar(100) NOT NULL,
  `SENHA_CLIENTE` varchar(255) NOT NULL,
  `CPF_CLIENTE` char(14) NOT NULL,
  `DTA_CAD_CLIENTE` date NOT NULL,
  `DTA_NASC_CLIENTE` date NOT NULL,
  `STATUS_CLIENTE` varchar(1) DEFAULT NULL,
  `IMAGEM_CLIENTE` varchar(52) NOT NULL,
  `ID_USER` int DEFAULT NULL,
  PRIMARY KEY (`ID_CLIENTE`),
  UNIQUE KEY `EMAIL_CLIENTE` (`EMAIL_CLIENTE`),
  UNIQUE KEY `CPF_CLIENTE` (`CPF_CLIENTE`),
  KEY `ID_USER` (`ID_USER`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_endereco`
--

DROP TABLE IF EXISTS `tb_endereco`;
CREATE TABLE IF NOT EXISTS `tb_endereco` (
  `ID_END` int NOT NULL AUTO_INCREMENT,
  `LOGRADOURO_END` varchar(60) NOT NULL,
  `CEP` char(8) NOT NULL,
  `NUM` int NOT NULL,
  `COMPLEMENTO` varchar(50) DEFAULT NULL,
  `ID_USER` int NOT NULL,
  PRIMARY KEY (`ID_END`),
  KEY `ID_USER` (`ID_USER`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

DROP TABLE IF EXISTS `tb_usuario`;
CREATE TABLE IF NOT EXISTS `tb_usuario` (
  `ID_USER` int NOT NULL AUTO_INCREMENT,
  `EMAIL_USER` varchar(60) NOT NULL,
  `SENHA_USER` varchar(255) NOT NULL,
  `STATUS_USER` int NOT NULL,
  PRIMARY KEY (`ID_USER`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_venda`
--

DROP TABLE IF EXISTS `tb_venda`;
CREATE TABLE IF NOT EXISTS `tb_venda` (
  `ID_VENDA` int NOT NULL AUTO_INCREMENT,
  `DTA_VENDA` date NOT NULL,
  `VALOR_VENDA` decimal(8,2) NOT NULL,
  `STATUS_VENDA` varchar(40) NOT NULL,
  `ID_ANUNCIO` int NOT NULL,
  `ID_CLIENTE` int NOT NULL,
  PRIMARY KEY (`ID_VENDA`),
  KEY `ID_ANUNCIO` (`ID_ANUNCIO`),
  KEY `ID_CLIENTE` (`ID_CLIENTE`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_vendedor`
--

DROP TABLE IF EXISTS `tb_vendedor`;
CREATE TABLE IF NOT EXISTS `tb_vendedor` (
  `ID_VENDEDOR` int NOT NULL AUTO_INCREMENT,
  `NOME_VENDEDOR` varchar(60) NOT NULL,
  `TIPO_VENDEDOR` char(1) DEFAULT NULL,
  `FONE_VENDEDOR` char(14) NOT NULL,
  `EMAIL_VENDEDOR` varchar(100) NOT NULL,
  `SENHA_VENDEDOR` varchar(255) NOT NULL,
  `CPF_VENDEDOR` char(14) NOT NULL,
  `DTA_CAD_VENDEDOR` date NOT NULL,
  `DTA_NASC_VENDEDOR` date NOT NULL,
  `STATUS_VENDEDOR` varchar(1) DEFAULT NULL,
  `IMAGEM_VENDEDOR` varchar(52) NOT NULL,
  `ID_USER` int DEFAULT NULL,
  PRIMARY KEY (`ID_VENDEDOR`),
  UNIQUE KEY `EMAIL_VENDEDOR` (`EMAIL_VENDEDOR`),
  UNIQUE KEY `CPF_VENDEDOR` (`CPF_VENDEDOR`),
  KEY `ID_USER` (`ID_USER`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `tb_vendedor`
--

INSERT INTO `tb_vendedor` (`ID_VENDEDOR`, `NOME_VENDEDOR`, `TIPO_VENDEDOR`, `FONE_VENDEDOR`, `EMAIL_VENDEDOR`, `SENHA_VENDEDOR`, `CPF_VENDEDOR`, `DTA_CAD_VENDEDOR`, `DTA_NASC_VENDEDOR`, `STATUS_VENDEDOR`, `IMAGEM_VENDEDOR`, `ID_USER`) VALUES
(1, 'Bruno Nascimento de Moraes', NULL, '(11)98722-3506', 'bruno@hotmail.com', '$2y$10$T4hten.kfpKkdEZ9wbEP6Oi7sHQ2pNg4ybuEs/cCkgnpgoIm2Mb.m', '123.123.123-12', '2023-04-10', '1998-11-06', NULL, '../media/fotoPerfil/39ee3d2b9deba42c81e6557d64c15920', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
